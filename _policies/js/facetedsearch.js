jQuery.fn.highlight = function() {
   $(this).each(function() {
        var el = $(this);
        el.before("<div/>");
        el.prev()
            .width(el.width())
            .height(el.height())
            .css({
                "position": "absolute",
                "background-color": "#ffff99",
                "opacity": ".8"
            })
            .fadeOut(750);
    });
}

;(function(){

/**
 * Please note that when passing in custom templates for
 * listItemTemplate and orderByTemplate to keep the classes as
 * they are used in the code at other locations as well.
 */

var defaults = {
  items              : [{a:2,b:1,c:2},{a:2,b:2,c:1},{a:1,b:1,c:1},{a:3,b:3,c:1}],
  facets             : {'a': 'Title A', 'b': 'Title B', 'c': 'Title C'},
  resultSelector     : '#results',
  facetSelector      : '#facets',
  infoSelector       : '#infos',
  facetContainer     : '<div class=facetsearch id=<%= id %> ></div>',
  facetTitleTemplate : '<h3 class=facettitle><%= title %></h3>',
  facetListContainer : '<div class=facetlist></div>',
  listItemTemplate   : '<div class=facetitem id="<%= id %>"><%= name %> <span class=facetitemcount>(<%= count %>)</span></div>',
  listItemInnerTemplate   : '<span><%= name %> <span class=facetitemcount>(<%= count %>)</span></span>',
  bottomContainer    : '<div class=bottomline></div>',
  orderByTemplate    : '<div class=orderby><span class="orderby-title">Sort by: </span><ul><% _.each(options, function(value, key) { %>'+
                       '<li class="orderbyitem" id="orderby_<%= key %>">'+
                       '<%= value %> </li> <% }); %></ul></div>',
  countTemplate      : '<div class="facettotalcount"><%= count %> Results</div>',
  deselectTemplate   : '<button type="button" id="deselect" class="btn-small">Show all tools</button>',
  resultTemplate     : '<div class="facetresultbox"><%= name %></div>',
  noResults          : '<div class="results">Sorry, but no items match these criteria</div>',
  orderByOptions     : {'a': 'by A', 'b': 'by B', 'RANDOM': 'by random'},
  state              : {
                         orderBy : false,
                         filters : {}
                       },
  showMoreTemplate   : '<a id=showmorebutton>Show more</a>',
  enablePagination   : true,
  paginationCount    : 20
};

/**
 * This is the first function / variable that gets exported into the
 * jQuery namespace. Pass in your own settings (see above) to initialize
 * the faceted search
 */
var settings = {};
jQuery.facetelize = function(usersettings) {
  $.extend(settings, defaults, usersettings);
  settings.currentResults = [];
  settings.facetStore     = {};
  $(settings.facetSelector).data("settings", settings);
  initFacetCount();
  filter();
  order();
  createFacetUI();
  filter();
  order();
  updateResults();
};

/**
 * This is the second function / variable that gets exported into the
 * jQuery namespace. Use it to update everything if you messed with
 * the settings object
 */
jQuery.facetUpdate = function() {
  filter();
  order();
  updateFacetUI();
  updateResults();
};

/**
 * The following section contains the logic of the faceted search
 */

/**
 * initializes all facets and their individual filters
 */
function initFacetCount() {
  _.each(settings.facets, function(facettitle, facet) {
    settings.facetStore[facet] = {};
  });
  _.each(settings.items, function(item) {
   // intialize the count to be zero
    _.each(settings.facets, function(facettitle, facet) {
      if ($.isArray(item[facet])) {
        _.each(item[facet], function(facetitem) {
          settings.facetStore[facet][facetitem] = settings.facetStore[facet][facetitem] || {count: 0, id: _.uniqueId("facet_")};
        });
      } else {
        if (item[facet] !== undefined) {
          settings.facetStore[facet][item[facet]] = settings.facetStore[facet][item[facet]] || {count: 0, id: _.uniqueId("facet_")};
        }
      }
    });
  });
  // sort it:
  _.each(settings.facetStore, function(facet, facettitle) {
    var sorted;
    if (settings.facets[facettitle].promoted !== undefined) {
        sorted = _.keys(settings.facetStore[facettitle]).sort(function(a,b) {
        var index_a = _.indexOf(settings.facets[facettitle].promoted,a);
        var index_b = _.indexOf(settings.facets[facettitle].promoted,b);
        if (index_a > -1 && index_b > -1) { // if both items are promoted, switch the indexes around to make the conclusion correct.
          var m = index_a;
          index_a = index_b;
          index_b = m;
        }
        if (index_a>index_b) {
          return -1;
        } else if (index_a<index_b) {
          return 1;
        } else {
          return a.localeCompare(b, "en");
        }
      });
    } else {
      sorted = _.keys(settings.facetStore[facettitle]).sort();
    }
    if (settings.facetSortOption && settings.facetSortOption[facettitle]) {
      sorted = _.union(settings.facetSortOption[facettitle], sorted);
    }
    var sortedstore = {};
    _.each(sorted, function(el) {
      sortedstore[el] = settings.facetStore[facettitle][el];
    });
    settings.facetStore[facettitle] = sortedstore;
  });
}

/**
 * resets the facet count
 */
function resetFacetCount() {
  _.each(settings.facetStore, function(items, facetname) {
    _.each(items, function(value, itemname) {
      settings.facetStore[facetname][itemname].count = 0;
    });
  });
}

/**
 * Filters all items from the settings according to the currently
 * set filters and stores the results in the settings.currentResults.
 * The number of items in each filter from each facet is also updated
 */
function filter() {
  // first apply the filters to the items
  settings.currentResults = _.select(settings.items, function(item) {
    var filtersApply = true;
    _.each(settings.state.filters, function(filter, facet) {
      if ($.isArray(item[facet])) {
         var inters = _.intersection(item[facet], filter);
         if (inters.length == 0) {
           filtersApply = false;
         }
      } else {
        if (filter.length && _.indexOf(filter, item[facet]) == -1) {
          filtersApply = false;
        }
      }
    });
    return filtersApply;
  });
  // Update the count for each facet and item:
  // intialize the count to be zero
  resetFacetCount();
  // then reduce the items to get the current count for each facet
  _.each(settings.facets, function(facettitle, facet) {
    _.each(settings.currentResults, function(item) {
      if ($.isArray(item[facet])) {
        _.each(item[facet], function(facetitem) {
          settings.facetStore[facet][facetitem].count += 1;
        });
      } else {
        if (item[facet] !== undefined) {
          settings.facetStore[facet][item[facet]].count += 1;
        }
      }
    });
  });
  // remove confusing 0 from facets where a filter has been set
  _.each(settings.state.filters, function(filters, facettitle) {
    _.each(settings.facetStore[facettitle], function(facet) {
      if (facet.count === 0 && settings.state.filters[facettitle].length) {facet.count = "+";}
    });
  });
  settings.state.shownResults = 0;
}

/**
 * Orders the currentResults according to the settings.state.orderBy variable
 */
function order() {
    settings.currentResults = _.sortBy(settings.currentResults, function(item) {
      return item.title.toLowerCase();
    });
}

/**
 * The given facetname and filtername are activated or deactivated
 * depending on what they were beforehand. This causes the items to
 * be filtered again and the UI is updated accordingly.
 */
function toggleFilter(key, value) {
  settings.state.filters[key] = settings.state.filters[key] || [] ;
  if (_.indexOf(settings.state.filters[key], value) == -1) {
    settings.state.filters[key].push(value);
  } else {
    settings.state.filters[key] = _.without(settings.state.filters[key], value);
    if (settings.state.filters[key].length === 0) {
      delete settings.state.filters[key];
    }
  }
  filter();
}

/**
 * The following section contains the presentation of the faceted search
 */

/**
 * This function is only called once, it creates the facets ui.
 */
function createFacetUI() {
  var itemtemplate  = _.template(settings.listItemTemplate);
  var titletemplate = _.template(settings.facetTitleTemplate);
  var containertemplate = _.template(settings.facetContainer);
  $(settings.facetSelector).html("");
  _.each(settings.facets, function(current, facet) {
    var facetHtml     = $(containertemplate({id: facet, obj: current}));
    var facetItem     = current;
    var facetItemHtml = $(titletemplate(facetItem));

    facetHtml.append(facetItemHtml);
    var facetlist = $(settings.facetListContainer);
    _.each(settings.facetStore[facet], function(filter, filtername){
      var item = {id: filter.id, name: filtername, count: filter.count};
      var filteritem  = $(itemtemplate(item));
      if (_.indexOf(settings.selected, _(_(filtername).strip_html()).to_slug()) >= 0) {
        filteritem.addClass("activefacet");
        toggleFilter(facet, filtername);
      }
      if (_.indexOf(settings.state.filters[facet], filtername) >= 0) {
        filteritem.addClass("activefacet");
      }
      facetlist.append(filteritem);
    });
      facetHtml.append(facetlist);
      $(settings.facetSelector).append(facetHtml);
  });
  // add the click event handler to each facet item:
  $('.facetitem').click(function(event){
    var filter = getFilterById(this.id);
    toggleFilter(filter.facetname, filter.filtername);
    $(settings.facetSelector).trigger("facetedsearchfacetclick", filter);
    order();
    updateFacetUI();
    updateResults();
  });
  // Append total result count
  var bottom = $(settings.bottomContainer);
  countHtml = _.template(settings.countTemplate, {count: settings.currentResults.length, filters: false});
  $(bottom).append(countHtml);
  // generate the "order by" options:
  var ordertemplate = _.template(settings.orderByTemplate);
  var itemHtml = $(ordertemplate({'options': settings.orderByOptions}));
  $(bottom).append(itemHtml);
  $(settings.infoSelector).append(bottom);
  $('.orderbyitem').each(function(){
    var id = this.id.substr(8);
    if (settings.state.orderBy == id) {
      $(this).addClass("activeorderby");
    }
  });
  // add the click event handler to each "order by" item:
  $('.orderbyitem').click(function(event){
    var id = this.id.substr(8);
    settings.state.orderBy = id;
    $(settings.facetSelector).trigger("facetedsearchorderby", id);
    settings.state.shownResults = 0;
    order();
    updateResults();
  });
  // Append deselect filters button
  var deselect = $(settings.deselectTemplate).click(function(event){
    settings.state.filters = {};
    jQuery.facetUpdate();
  });
  //Add share this view button
  var sharethis = $(settings.shareviewTemplate).find('a.btn').click(function(event){
    $(event.target).next().find('a').attr('href', 'mailto:?subject=Web%20Accessibility%20Tutorials&body=Hi!%0AYou%20might%20be%20interested%20in%20this%3A%0A%0A' + encodeURIComponent(window.location));
    $(event.target).next().toggle();
    $(event.target).next().find('input').val(window.location).select().focus();
  }).parent().find('button').click(function(event){
    $(event.target).parent().parent().toggle();
  }).parent().parent().parent();
  $(bottom).append(' ').append(deselect.hide());
  $(bottom).append(' ').append(sharethis.hide());
  $(settings.facetSelector).trigger("facetuicreated");
  jQuery.facetUpdate();
}

/**
 * get a facetname and filtername by the unique id that is created in the beginning
 */
function getFilterById(id) {
  var result = false;
  _.each(settings.facetStore, function(facet, facetname) {
    _.each(facet, function(filter, filtername){
      if (filter.id == id) {
        result = {'facetname': facetname, 'filtername': filtername};
      }
    });
  });
  return result;
}

/**
 * This function is only called whenever a filter has been added or removed
 * It adds a class to the active filters and shows the correct number for each
 */
function updateFacetUI() {
  var activeFilters = [];
  var itemtemplate = _.template(settings.listItemInnerTemplate);
  _.each(settings.facetStore, function(facet, facetname) {
    _.each(facet, function(filter, filtername){
      var item = {id: filter.id, name: filtername, count: filter.count};
      var filteritem  = $(itemtemplate(item)).html();
      $("[for="+filter.id+"]").html(filteritem);
      if (settings.state.filters[facetname] && _.indexOf(settings.state.filters[facetname], filtername) >= 0) {
        $("#"+filter.id).addClass("activefacet").prop('checked', true);
        activeFilters.push(filtername);
      } else {
        $("#"+filter.id).removeClass("activefacet").prop('checked', false);
      }
    });
  });
  if (activeFilters.length === 0) {
    activeFilters = false;
    $('#deselect').hide();
    $('#sharethisview').hide();
  } else {
    $('#deselect').show();
    $('#sharethisview').show();
  }
  countHtml = _.template(settings.countTemplate, {count: settings.currentResults.length, filters: activeFilters});
  $(settings.infoSelector + ' .facettotalcount').replaceWith(countHtml);
  $('#results').highlight();
  $('.bottomline').addClass('active');
}

var updateURL = function(){
  var checked = [];
  $('.facetitem:checked').each(function(index, el) {
    checked.push($(el).data('name'));
  });

  var location = window.history.location || window.location;
  var uri = new URI(location);
  var data = uri.search({q: checked});
  history.pushState(null, null, uri);
};

/**
 * Updates the the list of results according to the filters that have been set
 */
function updateResults() {
  $(settings.resultSelector).html(settings.currentResults.length === 0 ? settings.noResults : "");
  showMoreResults();
//  addSharebox();

  updateURL();
}

var moreButton;
function showMoreResults() {
  var showNowCount =
      settings.enablePagination ?
      Math.min(settings.currentResults.length - settings.state.shownResults, settings.paginationCount) :
      settings.currentResults.length;
  var itemHtml = "";
  var template = _.template(settings.resultTemplate);
  for (var i = settings.state.shownResults; i < settings.state.shownResults + showNowCount; i++) {
    var item = $.extend(settings.currentResults[i], {
      totalItemNr    : i,
      batchItemNr    : i - settings.state.shownResults,
      batchItemCount : showNowCount
    });
    itemHtml = itemHtml + template(item);
  }
  var newelems = $(settings.resultSelector).append(itemHtml).find('details summary:not([tabindex])');
  newelems.parent().details();
  $('.tofocus').last().next().focus();
  newelems.last().parent().parent().addClass('tofocus');
  if (!moreButton) {
    moreButton = $(settings.showMoreTemplate).click(showMoreResults);
    $(settings.resultSelector).after(moreButton);
  }
  if (settings.state.shownResults === 0) {
    moreButton.show();
  }
  settings.state.shownResults += showNowCount;
  if (settings.state.shownResults == settings.currentResults.length) {
    $(moreButton).hide();
  }
  $(settings.resultSelector).trigger("facetedsearchresultupdate");
}

})();
