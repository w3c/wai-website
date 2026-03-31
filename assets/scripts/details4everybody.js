/* Source: https://gist.github.com/kgmstwo/53e189d87b41ac7743ee, with a slight modification: https://gist.github.com/yatil/616f75465c4a92593044b1c006e4fb4c */
/**
 * Note that this script is intended to be included at the *end* of the document, before </body>
 */
(function (window, document) {
if ('open' in document.createElement('details')) return;

// made global by myself to be reused elsewhere
var addEvent = (function () {
  if (document.addEventListener) {
    return function (el, type, fn) {
      if (el && el.nodeName || el === window) {
        el.addEventListener(type, fn, false);
      } else if (el && el.length) {
        for (var i = 0; i < el.length; i++) {
          addEvent(el[i], type, fn);
        }
      }
    };
  } else {
    return function (el, type, fn) {
      if (el && el.nodeName || el === window) {
        el.attachEvent('on' + type, function () { return fn.call(el, window.event); });
      } else if (el && el.length) {
        for (var i = 0; i < el.length; i++) {
          addEvent(el[i], type, fn);
        }
      }
    };
  }
})();


/** details support - typically in it's own script */
// find the first /real/ node
function firstNode(source) {
  var node = null;
  if (source.firstChild.nodeName != "#text") {
    return source.firstChild;
  } else {
    source = source.firstChild;
    do {
      source = source.nextSibling;
    } while (source && source.nodeName == '#text');

    return source || null;
  }
}

function isSummary(el) {
  var nn = el.nodeName.toUpperCase();
  if (nn == 'DETAILS') {
    return false;
  } else if (nn == 'SUMMARY') {
    return true;
  } else {
    return isSummary(el.parentNode);
  }
}

function toggleDetails(event) {
  // more sigh - need to check the clicked object
  var keypress = event.type == 'keypress',
      target = event.target || event.srcElement;
  if (((target.parentNode == this) || (target.parentNode.parentNode == this)) && (keypress || isSummary(target))) {
    if (keypress) {
      // if it's a keypress, make sure it was enter or space
      keypress = event.which || event.keyCode;
      if (keypress == 32 || keypress == 13) {
        // all's good, go ahead and toggle
      } else {
        return;
      }
    }

    var open = this.getAttribute('open');
    if (open === null) {
      this.setAttribute('open', 'open');
    } else {
      this.removeAttribute('open');
    }

    // this.className = open ? 'open' : ''; // Lame
    // trigger reflow (required in IE - sometimes in Safari too)
    setTimeout(function () {
      document.body.className = document.body.className;
    }, 13);

    if (keypress) {
      event.preventDefault && event.preventDefault();
      return false;
    }
  }
}

function addStyle() {
  var style = document.createElement('style'),
      head = document.getElementsByTagName('head')[0],
      key = style.innerText === undefined ? 'textContent' : 'innerText';

  var rules = ['details{display: block;}','details > *{display: none;}','details.open > *{display: block;}','details[open] > *{display: block;}','details > summary:first-child{display: block;cursor: pointer;}','details[open]{display: block;}'];
      i = rules.length;

  style[key] = rules.join("\n");
  head.insertBefore(style, head.firstChild);
}

var details = document.getElementsByTagName('details'),
    wrapper,
    i = details.length,
    j,
    first = null,
    label = document.createElement('summary');

label.appendChild(document.createTextNode('Details'));

while (i--) {
  first = firstNode(details[i]);

  if (first != null && first.nodeName.toUpperCase() == 'SUMMARY') {
    // we've found that there's a details label already
  } else {
    // first = label.cloneNode(true); // cloned nodes weren't picking up styles in IE - random
    first = document.createElement('summary');
    first.appendChild(document.createTextNode('Details'));
    if (details[i].firstChild) {
      details[i].insertBefore(first, details[i].firstChild);
    } else {
      details[i].appendChild(first);
    }
  }

  // this feels *really* nasty, but we can't target details :text in css :(
  j = details[i].childNodes.length;
  while (j--) {
    if (details[i].childNodes[j].nodeName === '#text' && (details[i].childNodes[j].nodeValue||'').replace(/\s/g, '').length) {
      wrapper = document.createElement('text');
      wrapper.appendChild(details[i].childNodes[j]);
      details[i].insertBefore(wrapper, details[i].childNodes[j]);
    }
  }

  first.legend = true;
  first.tabIndex = 0;
}

// trigger details in case this being used on it's own
document.createElement('details');
addEvent(details, 'click', toggleDetails);
addEvent(details, 'keypress', toggleDetails);
addStyle();

})(window, document);