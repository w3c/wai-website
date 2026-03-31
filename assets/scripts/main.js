(function () {
  'use strict';

  var t = function(enstring) {
    if (translationStrings[enstring]) {
      return translationStrings[enstring];
    } else {
      return enstring;
    }
  }

  var addclass = function(el, className) {
    if (el.classList)
      el.classList.add(className);
    else
      el.className += ' ' + className;
  };

  var remclass = function(el, className) {
    if (el.classList)
      el.classList.remove(className);
    else
      el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
  };

  var hasclass = function(el, className) {
    if (el.classList)
      return el.classList.contains(className);
    else
      return new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
  };

  var isVisible = function(el) {
    return (el && el.offsetWidth > 0 && el.offsetHeight > 0);
  };

  /* Showhidebutton */

  const showhidebuttons = document.querySelectorAll('.showhidebutton');
  const mq = window.matchMedia( "(min-width: 47.5em)" );
  if (showhidebuttons !== null) {
    Array.prototype.forEach.call(showhidebuttons, function(button, i){
      var buttontarget = button.dataset.target;
      var bid = button.dataset.showhidebuttonid;
      if (button.getAttribute('data-large-aria-expanded') && mq.matches) {
        if (button.getAttribute('data-large-aria-expanded') == "true") {
          button.setAttribute('aria-expanded', 'true');
        }
        if (button.getAttribute('data-large-aria-expanded') == "false") {
          button.setAttribute('aria-expanded', 'false');
        }
      }
      Array.prototype.forEach.call(document.querySelectorAll(buttontarget), function(el, i){
        if(button.getAttribute('aria-expanded') == "true") {
          el.removeAttribute('hidden');
          button.innerHTML = button.dataset.hidetext;
        } else {
          el.setAttribute('hidden', "true");
          button.innerHTML = button.dataset.showtext;
        }
      });
      if (sessionStorage.getItem(bid) == 'hidden') {
        Array.prototype.forEach.call(document.querySelectorAll(buttontarget), function(el, i){
          el.setAttribute('hidden', "true");
        });
        button.setAttribute('aria-expanded','false');
        button.innerHTML = button.dataset.showtext;
      }
      if (sessionStorage.getItem(bid) == 'visible') {
        Array.prototype.forEach.call(document.querySelectorAll(buttontarget), function(el, i){
            el.removeAttribute('hidden');
          });
        button.setAttribute('aria-expanded','true');
        button.innerHTML = button.dataset.hidetext;
      }
    });

    Array.prototype.forEach.call(showhidebuttons, function(button, i){
      button.addEventListener('click', function(event){
        var buttontarget = event.target.dataset.target;
        var buttonstatus = event.target.getAttribute('aria-expanded');
        var targetelms   = document.querySelectorAll(buttontarget);
        if (buttonstatus == "true") { // buttonstatus=true => Expanded, so hide target
          Array.prototype.forEach.call(targetelms, function(el, i){
            el.setAttribute('hidden', true);
          });
          if(targetelms.length >= 1) {
            button.setAttribute('aria-expanded','false');
            button.innerHTML = button.dataset.showtext;
          }
          if (event.target.dataset.showhidebuttonid) {
            sessionStorage.setItem(event.target.dataset.showhidebuttonid, 'hidden');
          }
        } else {
          Array.prototype.forEach.call(targetelms, function(el, i){
            el.removeAttribute('hidden');
            if ((i === 0) && (targetelms.length === 1)) {
              el.setAttribute('tabindex', '-1');
              el.focus();
            }
          });
          if(targetelms.length >= 1) {
            button.setAttribute('aria-expanded','true');
            button.innerHTML = button.dataset.hidetext;
          }
          if (event.target.dataset.showhidebuttonid) {
            sessionStorage.setItem(event.target.dataset.showhidebuttonid, 'visible');
          }
        }
      })
    });

  }


// Create an observer
var observer = new MutationObserver(function (mutationsList, observer) {
    var mutationsList = mutationsList.filter(function(mutation) {
      return ((mutation.type === 'attributes') && (mutation.attributeName === 'hidden'));
    });

    for (var i = mutationsList.length - 1; i >= 0; i--) {
      var mutation = mutationsList[i];
      var button = document.querySelector('button[data-target="#' + mutation.target.id +'"]');

      if (button && mutation.target.getAttribute('hidden')) {
        button.setAttribute('aria-expanded','false');
        button.innerHTML = button.dataset.showtext;
      } else if (button) {
        button.setAttribute('aria-expanded','true');
        button.innerHTML = button.dataset.hidetext;
      }
    }
});

// Observe the target infobox
if (document.querySelector('main')) {
  observer.observe(document.querySelector('main'), { attributes: true, subtree: true });
}

  /* Tutorial style headings */

  var spc = document.createTextNode(' ');

  var headings = document.querySelectorAll('article h2[id], article h3[id], article h4[id]');
  var firstheading = headings[0];

  if (firstheading) {
    addclass(firstheading, 'first');

    var toc_elements = headings; // $('.content h2[id], .ap')

    var excount = 1,
        apcount = 1;

    // var toc_outer = document.createElement('figure');
    // toc_outer.setAttribute('role', 'navigation');
    // toc_outer.setAttribute('aria-describedby', 'toc_desc');
    // toc_outer.innerHTML = '<figcaption id="toc_desc">On this page <a href="#skipotp" class="visuallyhidden focusable">(skip)</a></figcaption><div class="figcontent"></div>';
    // if (toc_outer.classList)
    //   toc_outer.classList.add('toc');
    // else
    //   toc_outer.className += ' ' + ('toc');
    var toc_wrap = document.createElement('ul');
    var toc_elem = document.createElement('li');
    var nesting = false;
    var subnesting = false;
    var sub_wrap, sub_sub_wrap, last_elem, last_sub_elem;
    Array.prototype.forEach.call(toc_elements, function(el, i){ // … .each(…)
      // console.log(el.localName + ': ' + el.textContent + ' // ' + nesting);
      var cur_elem = toc_elem.cloneNode(true);
      if ((el.localName==="h4") && (subnesting===false)) {
        sub_sub_wrap = toc_wrap.cloneNode(false);
      }
      if ((el.localName==="h3") && (nesting===false)) {
        sub_wrap = toc_wrap.cloneNode(false);
      }
      if ((el.localName==="h3") && (subnesting===true)) {
        last_sub_elem.appendChild(sub_sub_wrap);
        subnesting = false;
      }
      if ((el.localName==="h2") && (nesting===true)) {
        if (subnesting===true) {
          last_sub_elem.appendChild(sub_sub_wrap);
          subnesting = false;
        }
        last_elem.appendChild(sub_wrap);
        nesting = false;
      }

      if (hasclass(el,"ex")) {
        el.insertAdjacentHTML('afterbegin', "<b>Example " + excount + ":</b> ");
        excount++;
        if (!hasclass(el, "inap")) {
          apcount = 1;
        }
      }
      if (hasclass(el,"ap")) {
        el.insertAdjacentHTML('afterbegin', "<b>Approach " + apcount + ":</b> ");
        apcount++;
      }
      if (hasclass(el,"newex")) {
        excount = 1;
      }
      if (hasclass(el,"newap")) {
        apcount = 1;
      }

    //   cur_elem.innerHTML = '<a class="' + el.getAttribute('class') + '" href="#' + el.getAttribute('id') + '">' + el.innerHTML + '</a>';

    //    console.log(cur_elem);
    //   if (el.localName==="h4") {
    //     sub_sub_wrap.appendChild(cur_elem);
    //     subnesting = true;
    //   } else if (el.localName==="h3") {
    //     sub_wrap.appendChild(cur_elem);
    //     nesting = true;
    //     last_sub_elem = cur_elem;
    //   } else {
    //     toc_wrap.appendChild(cur_elem);
    //     last_elem = cur_elem;
    //   }
    });

    // if (nesting===true) {
    //   last_elem.appendChild(sub_wrap);
    //   nesting = false;
    // }

    // toc_outer.querySelectorAll('.figcontent')[0].innerHTML = toc_wrap.outerHTML;

    //var inner = document.querySelectorAll('.inner > :first-child')[0];
    //inner.insertAdjacentHTML('beforebegin', toc_outer.outerHTML + '<span id="skipotp" class="visuallyhidden"></span>');

  }

  var last_known_scroll_position = 0;
  var ticking = false;

  window.addEventListener('scroll', function(e) {

    last_known_scroll_position = window.scrollY;

    if (!ticking) {

      window.requestAnimationFrame(function() {
        if (last_known_scroll_position > (window.innerHeight * 0.75)) {
          addclass(document.querySelector('.button-backtotop'), 'active');
          if ((window.innerHeight/document.querySelector('.button-backtotop').clientHeight) < 6) {
            // If the back to top button is higher than 20% of the available viewport size, add a inline class
            addclass(document.querySelector('.button-backtotop'), 'inline');
          } else {
            remclass(document.querySelector('.button-backtotop'), 'inline');
          }
        } else {
          if (last_known_scroll_position < 1) {
            remclass(document.querySelector('.button-backtotop'), 'active');
          }
        }
        ticking = false;
      });

      ticking = true;

    }

  });

  /* Navigation button */

  var metanav  = document.querySelector('.metanav'   );
  var mainnav  = document.querySelector('.mainnav'   );
  var sidenav  = document.querySelector('.sidenav'   );
  var breadnav = document.querySelector('.breadcrumb');
  var navbtn   = document.querySelector('#openmenu'  );

  if (navbtn !== null) {
    navbtn.addEventListener('click', function(event) {
      if (hasclass(navbtn, 'open')) {
        remclass(navbtn, 'open');
        remclass(metanav, 'open');
        remclass(mainnav, 'open');
        if (sidenav) {
          remclass(sidenav, 'open');
        }
        if (breadnav) {
          breadnav.style.display='block';
        }
        navbtn.setAttribute('aria-expanded', 'false');
      } else {
        addclass(navbtn, 'open');
        addclass(metanav, 'open');
        addclass(mainnav, 'open');
        if (sidenav) {
          addclass(sidenav, 'open');
        }
        if (breadnav) {
          breadnav.style.display='none';
        }
        navbtn.setAttribute('aria-expanded', 'true');
      }
    });
  }

  /* Expand collapse support*/
  var excolAll = document.querySelectorAll('.excol-all');
  var excols = document.querySelectorAll('details');
  var excols2 = document.querySelectorAll('div[data-details]');

  if ((excolAll !== null) && (excols !== null) && (excolAll.length > 0) && ((excols.length > 1) || (excols2.length > 1))) {
    function enableButtons(els) {
      Array.prototype.forEach.call(els, function(el, i){
        el.disabled = false;
      });
    }
    function disableButtons(els) {
      Array.prototype.forEach.call(els, function(el, i){
        el.disabled = true;
      });
    }
    function setExColAllButtons() {
      setTimeout(function(){
        var open  = document.querySelectorAll('details[open]').length + document.querySelectorAll('div[data-details][aria-expanded=true]').length;
        var close = document.querySelectorAll('details:not([open])').length + document.querySelectorAll('div[data-details][aria-expanded=false]').length;
        if((open > 0) && (close === 0)) {
          enableButtons(document.querySelectorAll('.excol-all .collapse'));
          disableButtons(document.querySelectorAll('.excol-all .expand'));
        } else if ((open === 0) && (close > 0)) {
          disableButtons(document.querySelectorAll('.excol-all .collapse'));
          enableButtons(document.querySelectorAll('.excol-all .expand'));
        } else {
          enableButtons(document.querySelectorAll('.excol-all .collapse'));
          enableButtons(document.querySelectorAll('.excol-all .expand'));
        }
      }, 100);
    }

    Array.prototype.forEach.call(document.querySelectorAll('details summary'), function(el, i){
      el.addEventListener("click", function() {setExColAllButtons()});
    });

    Array.prototype.forEach.call(excolAll, function(el, i){
      const expandText = el.dataset.expandText || 'Expand All Sections';
      const collapseText = el.dataset.collapseText || 'Collapse All Sections';
      el.innerHTML = '<button class="expand button button-secondary button-small">+ ' + t(expandText) + '</button> <button class="collapse button button-secondary button-small">&minus; ' + t(collapseText) + '</button>';

      el.addEventListener("click", function(element) {
        if (hasclass(element.target, 'expand')) {
          Array.prototype.forEach.call(excols, function(el, i){
            el.setAttribute('open', 'true');
          });
        }
        if (hasclass(element.target, 'collapse')) {
          Array.prototype.forEach.call(excols, function(el, i){
            el.removeAttribute('open');
          });
        }
        var exp = (hasclass(element.target, 'expand')) ? "true" : "false";
        Array.prototype.forEach.call(excols2, function(el, i){
          el.setAttribute('aria-expanded', exp);
        });
        setExColAllButtons();
      });
    });

    setExColAllButtons();
  }

  function openHiddenNodes() {
    var fragment = window.location.hash;
    fragment = fragment.replace(':', '\\:');
    if (fragment.length) {
      var target = document.querySelector(fragment);
      var initialTarget = target;

      // Exit target is undefined / null
      if (!target) {
        return;
      } else {
        console.log(target);
      }

      // if the first element is a details element, open it. Set target to its parent node so we…
      if (target && target.nodeName.toLowerCase() == 'details') {
        target.setAttribute('open', 'true');
        target = target.parentNode;
      }

      // if the target is in a summary, it is a heading with an id. In that case we want to open the details that is the parent.

      if (target && target.parentNode.nodeName.toLowerCase() == 'summary') {
        target.parentNode.parentNode.setAttribute('open', 'true');
        target = target.parentNode.parentNode;
      }

      // can see if that parent node is visible. If it is _not_, but is a details element, we open that details element.
      // Then we move on to its parent until we arrive at a visible element
      while (!isVisible(target)) {
        if (target.nodeName.toLowerCase() == 'details') {
          target.setAttribute('open', 'true');
        }
        target = target.parentNode;
      }

      // That last visible element might be a details element, so we need to make sure to open it as well.
      if (target.nodeName.toLowerCase() == 'details') {
        target.setAttribute('open', 'true');
      }

      initialTarget.setAttribute('tabindex', '-1');
      initialTarget.scrollIntoView(true);
      initialTarget.focus();
    }
  }

  window.addEventListener("hashchange", openHiddenNodes);

  openHiddenNodes();

  // Enhance footnotes

  var footnoteBox = document.querySelector('div.footnotes');

  if (footnoteBox !== null) {
    var footnotesTitle = document.querySelector('body').getAttribute('data-footnotestitle');
    if (!footnotesTitle) {
      footnotesTitle = 'Footnotes';
    }

    addclass(footnoteBox, 'box');
    addclass(footnoteBox, 'box-simple');
    footnoteBox.setAttribute('role', 'complementary');
    footnoteBox.setAttribute('aria-label', footnotesTitle);

    var header = document.createElement("header");
    header.innerHTML = '<h2>' + footnotesTitle + '</h2>';
    addclass(header, 'box-h');
    footnoteBox.insertBefore(header, footnoteBox.querySelector('ol'));

    var footnoteLinks = document.querySelectorAll('sup a.footnote');

    Array.prototype.forEach.call(footnoteLinks, function(element, i){
      element.setAttribute('aria-label', t('to footnote') + ' ' + element.textContent);
      element.setAttribute('title',      t('to footnote') + ' ' + element.textContent);
    });

    const pageLang = document.documentElement.lang || document.getElementsByTagName('html')[0].getAttribute('xml:lang');

    var footnoteBackLinks = footnoteBox.querySelectorAll('a.reversefootnote');

    Array.prototype.forEach.call(footnoteBackLinks, function(element, i){
      const footnoteIndex = element.getAttribute('href').replace('#fnref:', '')

      if (pageLang === "ja") {
        element.setAttribute('aria-label', t('in text') + ' ' + footnoteIndex + ' ' + t('back to footnote'));
        element.setAttribute('title',      t('in text') + ' ' + footnoteIndex + ' ' + t('back to footnote'));
      }
      else {
        element.setAttribute('aria-label', t('back to footnote') + ' ' + footnoteIndex + ' ' + t('in text'));
        element.setAttribute('title',      t('back to footnote') + ' ' + footnoteIndex + ' ' + t('in text'));
      }
    });

  }

}());
