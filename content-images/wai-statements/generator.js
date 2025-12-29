/**
 * ACCESSIBILITY STATEMENT GENERATOR
 * ---
 * [description]
 * ---
 */
(function() {
  'use strict';

  // Load in text data from #DATA element
  // to be using in script
  var DATA = {};
  (function(){
    var dataElements = document.getElementById('DATA').children;
    for (var i = 0; i < dataElements.length; i++)  {
      var elem = dataElements[i];
      var key = elem.getAttribute('data-key');
      var val = elem.getAttribute('data-value').split(" ");
      if (val.length === 0) val = val[0];
      DATA[key] = val;
    }
  }());

  /**
   * statementForm module
   * ---
   * Helper module to read and write formdata
   * ---
   * @return {module} Module methods object; see method for description
   */
  var statementForm = (function() {
    'use strict';

    var _formData = new Map();

    var _formElement = document.forms.create_accessibility_statement_form;

    var _formState = new Map();
    _formState.set('changed', false);

    // Do initial form data storage (defaultvalues)
    function _init() {
      _today();
      updateConformanceMeaning();

      Array.prototype.forEach.call(_formElement.elements, function setinitialData(item) {
        var nodeName = item.nodeName;
        var isProto = item.parentNode && item.parentNode.classList.contains('proto');

        if (['INPUT', 'TEXTAREA', 'SELECT'].indexOf(nodeName) !== -1 && !isProto) {
          _setFormData(item);
        }
      });
    }

    function _getData(identifier) {
      var data = {};

      if (identifier && typeof identifier === 'string') {
        return _formData.get(identifier);

      } else if (!identifier) {
        _formData.forEach(function returnData(value, key, map) {
          data[key] = value;
        });

        return data;
      }
    }

    function _today() {
      var monthnames = DATA.MONTH_NAMES;
      var dateToday = new Date();
      var day = dateToday.getDate();
      var month = dateToday.getMonth() + 1;
      var monthFull = monthnames[month - 1];
      var year = dateToday.getFullYear();
      var dateTodayString = '' + day + ' ' + monthFull + ' ' + year;
      var dates = document.querySelectorAll('#accstatement input.today');
      var i;

      for(i = 0; i < dates.length; i += 1) {
        try {
          dates[i].valueAsDate = dateToday;
        } catch (e) {
          dates[i].value = dateTodayString;
        }
      }
    }

    function _getFormGroup(groupName) {

      if (groupName) {
        return _formElement.elements[groupName];
      }
      return false;
    }

    function _getGroupValue(groupName) {
      var group = _getFormGroup(groupName) || [];
      var checkedMembers = Array.prototype.filter.call(group, function getChecked(member) {
        var isText = member.type !== 'radio'
          && member.type !== 'checkbox';

        return member.checked || (isText && member.value);
      });

      if (checkedMembers.length > 0) {
        return checkedMembers.map(function returnValue(member) {
          return member.value;
        });
      }

      return [];
    }

    /**
     * Transform input values into correct key value pairs
     * Set single string value or array of string values to key
     * @param       {HtmlFormElement} input
     */
    function _setFormData(input) {
      var inputName = input.name || undefined;
      var inputType = input.type || 'text';
      var inputValue;

      if (inputName && inputType !== 'radio') {
        inputValue = _getGroupValue(inputName) || [];
        _formData.set(inputName, inputValue);

      } else if (inputName && inputType === 'radio') {
        inputValue = _getGroupValue(inputName)[0] || '';
        _formData.set(inputName, inputValue);

      } else {
        // Single string values
        inputValue = input.value || '';
        _formData.set(input.id, inputValue);
      }
    }

    // Custom form data manipulation
    function updateConformanceMeaning() {
      var conformanceGroup = _formElement.elements.accstmnt_conformance;
      var activeConformance = Array.prototype.filter.call(conformanceGroup, function getChecked(item) {
        return item.checked;
      })[0];
      var meaningInput = _formElement.elements.accstmnt_conformance_meaning;
      var meaningElement = activeConformance.parentNode.querySelector('.meaning');
      var meaningValue = meaningElement && meaningElement.innerText || '';

      if (meaningInput.value !== meaningValue) {
        meaningInput.value = meaningValue;
        _setFormData(meaningInput);
      }
    }

    function resetOtherStandard() {
      var otherStandardInput = document.getElementById('accstmnt_standard_other_name');

      otherStandardInput.value = '';
      _setFormData(otherStandardInput);
    }

    /**
     * EXECUTE AREA
     */
    // Initiate statementForm
    _init();

    _formElement.addEventListener('change', function handleFormChange(event) {
      var formChanged = _formState.get('changed');
      var target = event.target;
      var allowedInputs = [
        'INPUT',
        'TEXTAREA',
        'SELECT'
      ];

      // Store formdata for changed input
      if (allowedInputs.indexOf(target.nodeName) !== -1 && target.id) {
        _setFormData(target);
      }

      if (!formChanged) {
        _formState.set('changed', true);
      }

      // Custom form manipulation
      // Setting conformance meaning
      if (target.name && target.name === 'accstmnt_conformance') {
        updateConformanceMeaning();
      }

      // (Re)Setting other standard applied
      if (
        target.name
        && target.name === 'accstmnt_standard'
        && target.id !== 'accstmnt_standard_other'
      ) {
        resetOtherStandard();
      }
    });

    return {
      data: {
        get: _getData,
        set: _formData.set,
      },
      elelment: _formElement,
      state: _formState,
    };
  }());

  /**
   * Saver module to save data as file
   * @return {object} saver methods
   */
  var saver = (function() {
    'use strict';

    var DEFAULTS = {
      MIMETYPE: 'text/plain',
      ENCODING: 'utf-8',
      FILENAME: 'accessibility-statement',
      XMLNS: 'http://www.w3.org/1999/xhtml',
    };

    var MIME_TYPES = {
      // csv: 'text/csv',
      // tsv: 'text/tab-separated-values',
      json: 'application/json',
      text: 'text/plain',
      html: 'text/html',
    };

    function _saveAs(data, mime) {

      switch (mime) {
        case 'html':
          _saveAsHtml(data);
          break;

        default:
          _saveAsText(data);
      }
    }

    function _saveData(data, params) {
      params = params || {};

      var mime = MIME_TYPES[params.mime] || params.mime || DEFAULTS.MIMETYPE;

      // Create file
      var blob = _createBlob(data, mime, DEFAULTS.ENCODING);
      var blobUrl = _createBlobURL(blob);
      var date = new Date();
      var dateString = [
        date.getFullYear(),
        date.getMonth().toString().length === 1 ? '0' + date.getMonth() : date.getMonth(),
        date.getDate().toString().length === 1 ? '0' + date.getDate() : date.getDate(),
      ].join('-');
      var filename = DEFAULTS.FILENAME
        + '_' + dateString
        + '.' + params.mime;

      // Saving the blob
      _saveResource(
        blobUrl,
        {
          filename: filename,
          blob: blob,
          revoke: params.revoke || true
        }
      );
    }

    function _createBlob(data, mime, encoding) {
      var mimetype = MIME_TYPES[mime] || mime || DEFAULTS.MIMETYPE;
      encoding = encoding || DEFAULTS.ENCODING;

      return new Blob(
        [data],
        {type: mimetype + ';charset=' + encoding}
      );
    }

    function _createBlobURL(blob) {
      var oURL = URL.createObjectURL(blob);
      return oURL;
    };

    function _saveResource(href, params) {
      var a = document.createElementNS(DEFAULTS.XMLNS, 'a');
      var blob = params.blob;
      var filename = params.filename;

      // Directly save blob on IE or EDGE
      if (
        window.navigator
        && window.navigator.msSaveOrOpenBlob
        || window.navigator.msSaveBlob
      ) {
        try {
          window.navigator.msSaveOrOpenBlob(blob, filename);
        } catch (e) {
          window.navigator.msSaveBlob(blob, filename);
        }

      } else {
        a.href = href;
        a.setAttribute('download', params.filename || '');

        // Add, click and remove (download blob)
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
      }

      a = undefined;
      setTimeout(function() {
        URL.revokeObjectURL(href);
      }, 0);
    }

    function _saveAsText() {

    }

    function _saveAsHtml(data) {
      var mime = 'html';
      var header = '<!DOCTYPE html>\n';

      _saveData(
        header + data,
        {
          mime: mime,
        }
      );
    };


    return {
      saveAs: _saveAs,
    };
  }());

  /**
   * App starts here
   */
  var ROUTES = [
    'create',
    'preview',
  ];

  function _init() {
    window.onhashchange = _showPage;
    window.onbeforeunload = function warnOnLeave(event) {
      var formChanged = statementForm.state.get('changed');

      if (formChanged) {
        return window.confirm();
      }
    }

    _setPage();
    _addLine();
    _enableStatementActions();

    // Set button-backtotop href
    Array.prototype.forEach.call(document.querySelectorAll('a[href="#top"]'), function setTopHref(el) {
      el.addEventListener('click', function handleBackToTopClick(event) {
        el.setAttribute('href', '#' + _getCurrentPage() + '-top');
      });
    });
  }

  function _enableStatementActions() {
    var actionButtonGroups = document.querySelectorAll('.statement-actions');

    Array.prototype.forEach.call(actionButtonGroups, function addClickListener(buttonGroup) {
      buttonGroup.addEventListener('click', function handleButtonGroupClick(event) {
        var target = event.target;
        var action = target.dataset.action;

        if (target.nodeName === "BUTTON" && action) {
          switch (action) {
            case 'preview_save_as_html':
              _savePreviewAs('html');
              break;

            case 'preview_save_as_json':
              _savePreviewAs('json');
              break;

            default:
              break;
          }
          event.stopPropagation();
        }
      });
    });
  }

  /**
   * Return current active page
   * @return      {string} Current page hash
   */
  function _getCurrentPage() {
    return Array.prototype.filter.call(ROUTES, function(route) {
      var hash = window.location.hash;

      return hash.indexOf(route) !== -1;
    })[0];
  }

  // Set initial app route hash
  function _setPage() {
    if(ROUTES.indexOf(location.hash.substring(1)) < 0) {
      window.location.hash = 'create';
    } else {
      _showPage();
    }
  }

  function _showPage() {
    var pages = document.querySelectorAll('#accstatement .page');
    var currentPage = _getCurrentPage();
    var backToTop = document.querySelectorAll('a.button-backtotop');

    // Set back to top anchor href
    Array.prototype.forEach.call(backToTop, function setHref(el) {
      el.setAttribute('href', '#' + _getCurrentPage() + '-top');
    })

    if(currentPage === 'preview') {
      _showPreview();
    }

    // hide all pages
    Array.prototype.forEach.call(pages, function hide(page) {
      page.setAttribute('hidden', '');
    });

    // show current page
    document.querySelector('#accstatement .page.' + currentPage).removeAttribute('hidden');

    window.scrollTo(0, 0);
  }

  function _showPreview() {
    var statementPreview = document.querySelector('#accstatement .page.preview');

    // Apply conditionals
    _applyConditionals();

    // Print formdata into printables: [data-print]
    _printFormInput();

    // Custom statement print: limitations & alternatives
    (function() {
      var limitations = document.querySelectorAll('#accstmnt_issues fieldset:not(.proto)');
      var block = statementPreview.querySelector('#statement-limitations-block');
      var list = statementPreview.querySelector('#statement-limitations');
      var html = '';

      Array.prototype.forEach.call(limitations, function print(limitation) {
        var element = limitation.querySelector('input[name=element]').value;
        var description = limitation.querySelector('input[name=description]').value;
        var reason = limitation.querySelector('input[name=reason]').value;
        var us = limitation.querySelector('input[name=us]').value;
        var you = limitation.querySelector('input[name=you]').value;

        if(element || description || reason || us || you) {
          html += '\t<li>'
            + '<strong>' + element + '</strong>: '
            + description + ' ' + DATA.BECAUSE + ' '
            + reason + '. ' + us + '. ' + you
            + '.</li>\n';
        }
      });

      if(html) {
        list.innerHTML = '\n' + html;
        block.removeAttribute('hidden');
      } else {
        block.setAttribute('hidden', '');
      }
    }());

  };

  function _savePreviewAs(filetype) {
    var saver = saver || null;

    saver.saveAs(data, filetype);
  }

  function _printFormInput() {
    var getData = statementForm.data.get;
    var printCollection = document.querySelectorAll('[data-print]');
    var printFilters = {
      lowercase: function toLowerCase(string) {
        return string.toLowerCase();
      },
      capitalize: function capitalize(string) {
        var firstChar = string.slice(0, 1).toUpperCase();
        var rest = string.slice(1);

        return firstChar + rest;
      }
    };

    function applyFilters(data, filters) {
      var newData = data;

      if (!data || !filters || filters.length === 0) {
        return data;
      }

      if (Array.isArray(data)) {
        newData = data.map(function (item) {
          return applyFilters(item, filters);
        });

      } else {
        filters.forEach(function apply(filter) {
          if (filter in printFilters) {
            newData = printFilters[filter](data);
          }
        });
      }

      return newData;
    }

    Array.prototype.forEach.call(printCollection, function printInput(item) {
      var nodeName = item.nodeName;
      var target = item.dataset.print;
      var hasFilter = item.dataset.printfilter;
      var printFilters = hasFilter && item.dataset.printfilter.split(',')
        .map(function trim(string) {
          return string.trim();
        });
      var printDefault = item.dataset.printdefault || '';
      var printData = applyFilters(getData(target), printFilters) || printDefault;
      var dataList = Array.isArray(printData);

      if (dataList && nodeName === 'UL' || nodeName === 'OL') {
        item.innerHTML = printData
          .map(function wrapInLi(data, index) {

            if (index === 0) {
              return '\n\t<li>' + data + '</li>\n';
            }

            return '\t<li>' + data + '</li>\n';
          })
          .join('');

      } else {

        switch (nodeName) {
          case 'A':
            var hrefPrefix = item.getAttribute('href');

            item.setAttribute('href', hrefPrefix + printData);
            item.innerText = printData;
            break;

          default:
            item.innerText = printData;
        }
      }
    })

  }

  function _savePreviewAs(filetype) {

    if (filetype) {
      switch (filetype) {
        case 'html':
          // Prepare statement data
          var generatedStatementMarkup = _getGeneratedStatement();
          // Then use save function with data
          saver.saveAs(generatedStatementMarkup, filetype);
          break;
        default:

      }
    }
  }

  function _getGeneratedStatement() {
    var generatedStatement = document.getElementById('statement_generated').cloneNode(true);
    var hiddenElements = generatedStatement.querySelectorAll('[hidden]');

    // Remove all hidden nodes
    Array.prototype.forEach.call(hiddenElements, function remove(hidden) {
      hidden.parentNode.removeChild(hidden);
    });

    function getDivChildNodes(node) {
      return Array.prototype.filter.call(node.children, function (child) {
        return child.nodeName === 'DIV';
      });
    }

    function expandDivChildren(divNode) {
      var fragment = document.createDocumentFragment();
      var divChildren = getDivChildNodes(divNode);

      if (divChildren.length > 0) {
        Array.prototype.forEach.call(divChildren, function removeDiv(divChild) {
          expandDivChildren(divChild);
        });

        // Run again on node after children
        expandDivChildren(divNode);

      } else {
        Array.prototype.forEach.call(divNode.children, function appendToFragment(divChild) {
          var element = document.createElement(divChild.nodeName);
          element.innerHTML = divChild.innerHTML;
          if (divChild.classList.length > 0) {
            element.classList = divChild.classList;
          }
          fragment.appendChild(element);
        });

        // Move div children before div and remove div
        divNode.parentNode.insertBefore(fragment, divNode);
        divNode.parentNode.removeChild(divNode);
      }

    }

    // Replace div with div.children
    Array.prototype.forEach.call(getDivChildNodes(generatedStatement), function removeDiv(child) {
      expandDivChildren(child);
    });

    return Array.prototype.map.call(generatedStatement.children, function getCleanHTML(child) {

      return child.outerHTML
        .replace(/( data-if=")[^\"]*\"/g, '')
        .replace(/( data-print=")[^\"]*\"/g, '')
        .replace(/( data-printdefault=")[^\"]*\"/g, '')
        .replace(/ {4,}/g, '\t')
        .replace(/ {2,}/g, '');
    }).join('\n')
      .replace(/\t(<\/)/g, '</')
      .replace(/\t\n/g, '');
  }

  function _addLine() {
    var buttons = document.querySelectorAll('#accstatement button.add-line');

    Array.prototype.forEach.call(buttons, function addClickListener(button) {
      button.addEventListener('click', function(event) {
        var parent = event.target.parentNode;
        var lines = parent.querySelectorAll('.line');
        var proto = parent.querySelector('.proto');
        var newLine = proto.cloneNode(true);

        newLine.classList.remove('proto');
        newLine.classList.add('line');
        newLine.innerHTML = newLine.innerHTML.replace(/\[n\]/g, lines.length + 1);

        proto.parentNode.insertBefore(newLine, proto);

        newLine.querySelector('input, textarea').focus();
      });
    });
  }

  function _applyConditionals() {
    var getData = statementForm.data.get;
    var conditionals = document.querySelectorAll('[data-if]');

    Array.prototype.forEach.call(conditionals, function apply(conditional) {
      var negate = 'negate' in conditional.dataset;

      // Get required data for condition
      var dataList = conditional.dataset.if.split(',')
        .map(function trimString(string) {
          return string.trim();
        });

      // Get filtered datalist with values
      var dataListValues = dataList.filter(function withValue(key) {
        var data = getData(key);

        return (
          data !== undefined
          && data.length > 0
        );
      });
      var conditionMet = dataListValues.length > 0;

      if(negate) {
        conditionMet = !conditionMet;
      }

      if(conditionMet) {
        conditional.removeAttribute('hidden');
      } else {
        conditional.setAttribute('hidden', '');
      }
    });
  }

  _init();
}());
