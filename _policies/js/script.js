/*! http://mths.be/details v0.1.0 by @mathias | includes http://mths.be/noselect v1.0.3 */
;(function(document, $) {

  var proto = $.fn,
      details,
      // :'(
      isOpera = Object.prototype.toString.call(window.opera) == '[object Opera]',
      // Feature test for native `<details>` support
      isDetailsSupported = (function(doc) {
        var el = doc.createElement('details'),
            fake,
            root,
            diff;
        if (!('open' in el)) {
          return false;
        }
        root = doc.body || (function() {
          var de = doc.documentElement;
          fake = true;
          return de.insertBefore(doc.createElement('body'), de.firstElementChild || de.firstChild);
        }());
        el.innerHTML = '<summary>a</summary>b';
        el.style.display = 'block';
        root.appendChild(el);
        diff = el.offsetHeight;
        el.open = true;
        diff = diff != el.offsetHeight;
        root.removeChild(el);
        if (fake) {
          root.parentNode.removeChild(root);
        }
        return diff;
      }(document)),
      toggleOpen = function($details, $detailsSummary, $detailsNotSummary, toggle) {
        var isOpen = $details.prop('open'),
            close = isOpen && toggle || !isOpen && !toggle;
        if (close) {
          $details.removeClass('open').prop('open', false).triggerHandler('close.details');
          $detailsSummary.attr('aria-expanded', false);
          $detailsNotSummary.hide();
        } else {
          $details.addClass('open').prop('open', true).triggerHandler('open.details');
          $detailsSummary.attr('aria-expanded', true);
          $detailsNotSummary.show();
        }
      };

  /* http://mths.be/noselect v1.0.3 */
  proto.noSelect = function() {

    // Since the string 'none' is used three times, storing it in a variable gives better results after minification
    var none = 'none';

    // onselectstart and ondragstart for WebKit & IE
    // onmousedown for WebKit & Opera
    return this.bind('selectstart dragstart mousedown', function() {
      return false;
    }).css({
      'MozUserSelect': none,
      'msUserSelect': none,
      'webkitUserSelect': none,
      'userSelect': none
    });

  };

  // Execute the fallback only if there’s no native `details` support
  if (isDetailsSupported) {

    details = proto.details = function() {

      return this.each(function() {
        var $details = $(this),
            $summary = $('summary', $details).first();
        $summary.attr({
          'role': 'button',
          'aria-expanded': $details.prop('open')
        }).on('click', function() {
          // the value of the `open` property is the old value
          var close = $details.prop('open');
          $summary.attr('aria-expanded', !close);
          $details.triggerHandler((close ? 'close' : 'open') + '.details');
        });
      });

    };

    details.support = isDetailsSupported;

  } else {

    details = proto.details = function() {

      // Loop through all `details` elements
      return this.each(function() {

        // Store a reference to the current `details` element in a variable
        var $details = $(this),
            // Store a reference to the `summary` element of the current `details` element (if any) in a variable
            $detailsSummary = $('summary', $details).first(),
            // Do the same for the info within the `details` element
            $detailsNotSummary = $details.children(':not(summary)'),
            // This will be used later to look for direct child text nodes
            $detailsNotSummaryContents = $details.contents(':not(summary)');

        // If there is no `summary` in the current `details` element…
        if (!$detailsSummary.length) {
          // …create one with default text
          $detailsSummary = $('<summary>').text('Details').prependTo($details);
        }

        // Look for direct child text nodes
        if ($detailsNotSummary.length != $detailsNotSummaryContents.length) {
          // Wrap child text nodes in a `span` element
          $detailsNotSummaryContents.filter(function() {
            // Only keep the node in the collection if it’s a text node containing more than only whitespace
            // http://www.whatwg.org/specs/web-apps/current-work/multipage/common-microsyntaxes.html#space-character
            return this.nodeType == 3 && /[^ \t\n\f\r]/.test(this.data);
          }).wrap('<span>');
          // There are now no direct child text nodes anymore — they’re wrapped in `span` elements
          $detailsNotSummary = $details.children(':not(summary)');
        }

        // Hide content unless there’s an `open` attribute
        $details.prop('open', typeof $details.attr('open') == 'string');
        toggleOpen($details, $detailsSummary, $detailsNotSummary);

        // Add `role=button` and set the `tabindex` of the `summary` element to `0` to make it keyboard accessible
        $detailsSummary.attr('role', 'button').noSelect().prop('tabIndex', 0).on('click', function() {
          // Focus on the `summary` element
          $detailsSummary.focus();
          // Toggle the `open` and `aria-expanded` attributes and the `open` property of the `details` element and display the additional info
          toggleOpen($details, $detailsSummary, $detailsNotSummary, true);
        }).keyup(function(event) {
          if (32 == event.keyCode || (13 == event.keyCode && !isOpera)) {
            // Space or Enter is pressed — trigger the `click` event on the `summary` element
            // Opera already seems to trigger the `click` event when Enter is pressed
            event.preventDefault();
            $detailsSummary.click();
          }
        });

      });

    };

    details.support = isDetailsSupported;

  }

}(document, jQuery));

_.mixin({
  to_slug: function(str) {
    str = str.replace(/^\s+|\s+$/g, ''); // trim
    str = str.toLowerCase();

    // remove accents, swap ñ for n, etc
    var from = "àáäâèéëêìíïîòóöôùúüûñç·/_,:;";
    var to   = "aaaaeeeeiiiioooouuuunc------";
    for (var i=0, l=from.length ; i<l ; i++) {
      str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
    }

    str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
      .replace(/\s+/g, '-') // collapse whitespace and replace by -
      .replace(/-+/g, '-')  // collapse dashes
      .replace(/(^[0-9]*-)/g, '-') // remove numbers and - from the beginning of the string
      .replace(/^-*/g, ''); // remove dash from the begining of the string

    return str;
  }
});
_.mixin({
	strip_html: function(html) {
		var tmp = document.createElement("DIV");
		tmp.innerHTML = html;
		return tmp.textContent || tmp.innerText || "";
	}
});
_.mixin({
	parsedate: function(datestr) {
		var date = "";
  	if (datestr instanceof Array) {
        date = datestr[0];
      } else {
        date = datestr;
      }
      var dateParts = date.split("-");
      var month = '';
      switch (parseInt(dateParts[1],10)) {
        case 1:
          month = 'Jan';
          break;
        case 2:
          month = 'Feb';
          break;
        case 3:
          month = 'Mar';
          break;
        case 4:
          month = 'Apr';
          break;
        case 5:
          month = 'May';
          break;
        case 6:
          month = 'Jun';
          break;
        case 7:
          month = 'Jul';
          break;
        case 8:
          month = 'Aug';
          break;
        case 9:
          month = 'Sep';
          break;
        case 10:
          month = 'Oct';
          break;
        case 11:
          month = 'Nov';
          break;
        case 12:
          month = 'Dec';
          break;
      }
    return dateParts[0] + '-' + month + '-' + dateParts[2];
  }
});

$(function(){

  var location = window.history.location || window.location;
  var uri = new URI(location);
  var selected = uri.search(true);
  if (selected.q !== undefined) {
    if (_.isArray(selected.q)) {
      selected = selected.q;
    } else {
      selected = [selected.q];
    }
  }
  //console.log(selected.q);

	var item_template = $('#results-template').text();
	var a11y_policies = $.getJSON( path + "/policies/js/data.json", function() {

	}).done(function(jsn) {

		var settings = {
			items            : jsn,
			facets           : {
				'wcagver' : {'title': 'WCAG Version Used', 'collapsed': true},
				'scope': {'title': 'Scope', 'collapsed': true},
        'type'  : {'title': 'Type', 'collapsed': true}
			},
			resultSelector   : '#results',
			facetSelector    : '#facets',
			resultTemplate   : item_template,
			enablePagination : false,
			paginationCount  : 10,
			orderByOptions   : {'title': 'Title'},
			facetSortOption  : {'wcagver': ["WCAG 2.0", "WCAG 2.0 derivative", "WCAG 1.0 derivative", "None"]},
			facetListContainer : '<ul class=facetlist></ul>',
			listItemTemplate   : '<li><span><input type="checkbox" class="facetitem" aria-pressed="false" id="<%= id %>" data-name="<%= _(_(name).strip_html()).to_slug() %>"></span> <span><label for="<%= id %>"><%= name %> <span class="facetitemcount">(<%= count %>&nbsp;<% if (count==1) { %>policy<% } else {%>policies<% } %>)</span></label></span></li>',
			listItemInnerTemplate   : '<span><%= name %> <span class=facetitemcount>(<% if (count=="+") { %>0&nbsp;items<% } else { if (count==1) { %><%= count %>&nbsp;item<% } else {%><%= count %>&nbsp;items<% }} %>)</span></span>',
			orderByTemplate    : '',
			countTemplate      : '<div class="facettotalcount"><strong><span aria-live="true">Showing <%= count %> <% if (count==1) { %>result<% } else {%>results<% } %></span><% if (filters) { %>, matching the filters:</strong> <span class="filter"><%= filters.join("</span>, <span class=\'filter\'>") %></span><% } else { %></strong><% } %></div>',
			facetTitleTemplate : '<% if (!obj.plain) { %><legend><h4 class="facettitle"><%= title %></h4></legend><% } %>',
			facetContainer     : '<% if (!obj.plain) { %><fieldset class="facetsearch" id="<%= id %>"></fieldset><% } else { %><div class="plainitem"></div><% } %>',
			showMoreTemplate   : '<button type="button" id="showmorebutton">Show more</button>',
      deselectTemplate   : '<button type="button" id="deselect" class="btn"><!-- svg aria-hidden="true" class="i-refresh"><use xlink:href="#i-refresh"></use></svg --> Clear filters</button>',
      shareviewTemplate  : '<!-- <div class="permalink_wrapper" id="sharethisview"><a href="#" class="btn"><svg aria-hidden="true" class="i-share"><use xlink:href="#i-share"></use></svg> Share this view</a><div class="sharebox"><p><label>Link to this view:<input type="url" value="" readonly=""> Shortcut to copy the link: <kbd>ctrl</kbd>+<kbd>C</kbd> <em>or</em> <kbd>⌘</kbd><kbd>C</kbd></label></p><p><a href="">E-mail a link to this section</a><button>Close</button></p></div></div> -->',
      selected           : selected,
      state              : {
                         orderBy : false,
                         filters : {}
                       },
		};

	// use them!
	//
	$.facetelize(settings);
	// Emulate <details> where necessary and enable open/close event handlers
	// alert($.fn.details.support);
	$('html').addClass($.fn.details.support ? 'details' : 'no-details');
	$('details').details();

  $('.bottomline').on('animationend webkitAnimationEnd oanimationend MSAnimationEnd', function(event) {
    event.preventDefault();
    /* Act on the event */
    $(event.target).removeClass('active');
  });

	});

});
