---
title: "Headings - Easy Checks"
permalink: /test-evaluate/easy-checks/headings/
ref: /test-evaluate/easy-checks/headings/
nav_title: "Headings"

lang: en

doc-note-type: draft

github:
  label: wai-easy-checks

navigation:
  previous: /test-evaluate/easy-checks/title/
  next: /test-evaluate/easy-checks/color-contrast/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Status:</strong> Updated December 2023<br>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>

bookmarklet: javascript:void%20function(){function%20a(){o.style.height=%220px%22,o.style.height=q.scrollingElement.scrollHeight+%22px%22}function%20b(a,b){for(var%20c=0,d=0;d%3Ca.length;d++)a[d][b]%26%26c++;return%20c}function%20c(a){for(var%20b=%22%22,c=0;c%3Ca.length;c++){var%20e=a[c],f=e.el;b+=%22%3Cli%20class=%27%22,b+=e.wrong%3F%22wrong-level%22:%22correct-level%22,b+=e.visible%3F%22%22:%22%20hidden%22,b+=e.visuallyhidden%3F%22%20visuallyhidden%22:%22%22,b+=%22%27%20style=%27margin-left:%20%22+e.level+%22em;%27%3E%22,b+=%22%3Ca%20href=%27%23%22+c+%22%27%20target=%27_top%27%3E%22,b+=%22%3Cspan%20class=%27level%27%20data-level=%27%22+e.level+%22%27%3E%22+e.level+%22%3C/span%3E%20%22,b+=%22%3Cspan%20class=%27text%27%3E%22+d(f.textContent.replace(/\s+/g,%22%20%22)),b+=e.wrong%3F%22%20(skipped%20level)%22:%22%22,b+=e.visible%3F%22%22:%22%20(hidden)%22,b+=%22%3C/span%3E%22,b+=%22%3C/a%3E%22,b+=%22%3C/li%3E%22}return%22%3Cul%20id=%27headings%27%3E%22+b+%22%3C/ul%3E%22}function%20d(a){return(a+%22%22).replace(/%26/g,%22%26amp;%22).replace(/%3C/g,%22%26lt;%22).replace(/%3E/g,%22%26gt;%22).replace(/%22/g,%22%26quot;%22)}function%20e(a){for(var%20b=window.getComputedStyle(a),c=!1;a;){if(%22none%22===b.display)return!1;if(!c){if(%22hidden%22===b.visibility)return!1;%22visible%22===b.visibility%26%26(c=!0)}if(%22true%22===a.getAttribute(%22aria-hidden%22))return!1;a=a.parentElement;try{b=window.getComputedStyle(a)}catch(a){return!0}}return!0}function%20f(a){var%20b=a.getBoundingClientRect(a);if(%22absolute%22===window.getComputedStyle(a).position){if(1%3E=b.width%26%261%3E=b.height)return!0;if(0%3E=b.right)return!0}}function%20g(a,b){b||(a.scrollIntoViewIfNeeded%3Fa.scrollIntoViewIfNeeded():a.scrollIntoView%26%26a.scrollIntoView()),setTimeout(function(){for(var%20b=Math.max,c=Math.min,d=a.getBoundingClientRect(),e=a.parentElement;!d.height%26%26!d.width%26%26!d.left%26%26!d.top%26%26e;)d=e.getBoundingClientRect(),!1,e=e.parentElement;e%26%26((d={left:d.left,top:d.top,bottom:d.bottom,right:d.right}).left=c(window.innerWidth,d.left),d.right=b(0,d.right),d.top=c(window.innerHeight,d.top),d.bottom=b(0,d.bottom),!document.getElementById(n.id)%26%26document.body.appendChild(n),n.style.left=d.left-10+%22px%22,n.style.width=d.right-d.left+20+%22px%22,n.style.top=d.top-10+%22px%22,n.style.height=d.bottom-d.top+20+%22px%22,n.style.display=%22block%22)},100)}function%20h(a){var%20b=function(){a.checked%3Fl():m()};b(),a.addEventListener(%22click%22,b)}function%20j(a){for(var%20b=q.querySelectorAll(%22%23headings%20a%22),c=b.length-1;0%3C=c;c--)b[c]===a%3Fb[c].classList.add(%22is-active%22):b[c].classList.remove(%22is-active%22)}function%20k(a){for(var%20b=a.target,c=document.body.querySelectorAll(%22*%22),d=!1,e=c.length-1;0%3C=e;e--){var%20f=c[e];if(d){for(var%20h=r.length-1;0%3C=h;h--)if(r[h].el===f%26%26r[h].visible)return%20g(r[h].el,!0),void%20j(q.querySelector(%22%23headings%20a[href=%27%23%22+h+%22%27]%22));}else%20f===b%26%26(d=!0,e++)}j(null)}function%20l(){document.body.addEventListener(%22mouseover%22,k)}function%20m(){document.body.removeEventListener(%22mouseover%22,k)}var%20n=document.createElement(%22DIV%22);n.id=%22h1-a11y-highlighterelement%22,n.style.cssText=%22pointer-events:none;position:fixed;border:1px%20dashed%20%23eed009;box-shadow:%200%200%209px%202px%20rgba(238,208,9,0.75);display:none;z-index:%20100000;transition:all%20200ms%22;var%20o=document.getElementById(%22ec-heading-bookmarklet%22);o%26%26document.body.removeChild(o),(o=document.createElement(%22DIV%22)).id=%22ec-heading-bookmarklet%22,o.style.cssText=%22position:fixed;top:0;right:0;max-height:100%25;box-shadow:0%200%2080px%20rgba(0,0,0,0.3);width:20%25;min-width:320px;max-width:450px;z-index:100001%22;var%20p=document.createElement(%22IFRAME%22);p.id=%22wai-headers-check%22,p.style.width=%22100%25%22,p.style.height=%22100%25%22,p.style.borderWidth=%220%22;var%20q,r=function(){for(var%20a=0,b=document.querySelectorAll(%22h1,h2,h3,h4,h5,h6,h7,[role=%27heading%27]%22),c=[],d=0;d%3Cb.length;d++){var%20g=b[d],h=e(b[d]),j=parseInt(%22heading%22==g.getAttribute(%22role%22)%26%26g.getAttribute(%22aria-level%22)||g.nodeName.substr(1));if(h){var%20k=j%3Ea%26%26j!==a+1;a=j}else%20k=!1;c.push({visible:h,visuallyhidden:h%26%26f(g),wrong:k,level:j,el:g})}return%20c}();o.appendChild(p),p.onload=function(){function%20d(b,c){var%20d=q.getElementById(b),e=q.querySelector(%22.result%22);if(d){var%20f=function(b){d.checked%3Fe.classList.add(c):e.classList.remove(c),b%26%26a()};d.addEventListener(%22change%22,f,!1),d.addEventListener(%22click%22,f,!1),f()}}p.onload=function(){},(q=p.contentWindow.document).open(),q.write(%22%3Chtml%3E%20%3Chead%3E%20%3Cmeta%20name=%27viewport%27%20content=%27width=device-width,minimum-scale=1.0,initial-scale=1,user-scalable=yes%27%3E%3Cstyle%3E*{margin:0;padding:0;border:0}body{font:14px/1.6%20sans;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;color:%231d1d1d;background:rgba(255,255,255,0.95);}main{white-space:nowrap;overflow-x:hidden;text-overflow:%20ellipsis}ul{margin:0%200%200%20-10px;padding:0}li{color:%231d1d1d;list-style:none;margin-left:20px;display:-webkit-box;display:-ms-flexbox;display:flex}main%20a{color:inherit;text-decoration:none;display:inline-block;max-width:30em;overflow:hidden;text-overflow:ellipsis;padding:2px%204px%202px%2025px;position:relative;line-height:%201.3;border-radius:3px}main%20a%3E.level{display:inline-block;background-color:%23003366;color:%23FAFAFC;font-size:85%25;font-weight:bold;width:2.7ex;height:2.7ex;text-align:center;-webkit-box-sizing:border-box;box-sizing:border-box;position:absolute;left:2px;top:2px;padding-top:1px}li.hidden{color:black;text-decoration:line-through;opacity:0.5}.result:not(.show-hidden)%20li.hidden{display:none}.result.mark-visuallyhidden%20li.visuallyhidden%20.level:before{color:inherit}.result.mark-visuallyhidden%20li.visuallyhidden%20.level{border:1px%20dashed;background:white}.result.mark-visuallyhidden%20li.visuallyhidden:after{content:%27(visually%20hidden)%27}li.wrong-level{color:%23AF3A37}a.is-active{-webkit-box-shadow:0%200%205px%201px%20%233CBEFF;box-shadow:0%200%205px%201px%20%233CBEFF}main%20a:hover{background-color:%23003366}main%20a:hover%3E.text{color:%23FAFAFC}main%20a:hover%3E.level{background-color:transparent}fieldset,main{padding:%205px%2015px%2015px%2015px;margin-bottom:1em;border-bottom:1px%20solid%20%23eee}footer{padding:%200%2015px%2015px%2015px}legend{margin-right:1em;font-weight:bold}%40media(min-width:340px){legend{float:left}}.options{display:-webkit-box;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap}.options%20.input{margin-right:2em}.count{background:%23ddd;border-radius:4px;padding:1px%203px}.tooltip{font-family:Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;position:relative}.tooltip:before{content:'\u2139\uFE0F'}.tooltip:focus:after,.tooltip:hover:after{content:attr(title);position:absolute;background:white;padding:4px%2010px;top:70%25;left:70%25;width:10em;-webkit-box-shadow:0%202px%2020px%20rgba(0,0,0,0.3);box-shadow:0%202px%2020px%20rgba(0,0,0,0.3);white-space:normal;border-radius:8px;border-top-left-radius:0;z-index:1;pointer-events:none}.button-close{position:absolute;top:15px;right:15px;padding:5px%2010px;border-radius:5px;border:1px%20solid%20transparent;font-size:inherit;color:white;background-color:%23003366;cursor:pointer}.button-close:hover{color:white;background-color:%23003366}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px;}%23wai-info-box%20header%20a{float:right;text-decoration:none}%3C/style%3E%3C/head%3E%3Cbody%3E%3Caside%20id=%27wai-info-box%27%20tabindex=%27-1%27%3E%3Cheader%3EPage%20headings%3Ca%20href=%27%27%20data-action=%27close%27%20aria-label='dismiss'%3EX%3C/a%3E%3C/header%3E%3Cfieldset%3E%3Clegend%3EOptions%3C/legend%3E%3Cdiv%20class=%27options%27%3E%3Cdiv%20class=%27input%27%3E%3Cinput%20type=%27checkbox%27%20name=%27options%27%20id=%27o-hidden%27%3E%20%3Clabel%20for=%27o-hidden%27%3EShow%20hidden%20%3Cspan%20class=%27count%27%20id=%27o-hidden-count%27%3E%3C/span%3E%20%3Cspan%20class=%27tooltip%27%20title=%27also%20hidden%20for%20screenreaders%27%20tabindex=%270%27%3E%3C/span%3E%3C/label%3E%20%3C/div%3E%20%3Cdiv%20class=%27input%27%3E%20%3Cinput%20type=%27checkbox%27%20name=%27options%27%20id=%27o-visuallyhidden%27%3E%20%3Clabel%20for=%27o-visuallyhidden%27%3EMark%20visually%20hidden%20%3Cspan%20class=%27count%27%20id=%27o-visuallyhidden-count%27%3E%3C/span%3E%20%3Cspan%20class=%27tooltip%27%20title=%27only%20visible%20for%20screenreaders%27%20tabindex=%270%27%3E%3C/span%3E%3C/label%3E%20%3C/div%3E%20%3Cdiv%20class=%27input%27%3E%20%3Cinput%20type=%27checkbox%27%20name=%27options%27%20id=%27o-highlight%27%3E%20%3Clabel%20for=%27o-highlight%27%3EHover-Highlight%20%3Cspan%20class=%27tooltip%27%20title=%27Highlight%20the%20corresponding%20heading%20when%20hovering%20over%20elements%20of%20the%20page%27%20tabindex=%270%27%3E%3C/span%3E%3C/label%3E%3C/div%3E%3C/fieldset%3E%3C/div%3E%3Cmain%20id=%27result%27%20class=%27result%27%3E%3C/main%3E%3Cfooter%3EFind%20out%20more%20about%20%3Ca%20target=%27_parent%27%20href=%27https://w3.org/wai/test-evaluate/easy-checks/headings/%27%3EChecking%20Headings%3C/a%3E%3C/footer%3E%3C/body%3E%3C/html%3E%22),q.close();var%20e=q.querySelector(%22[data-action=%27close%27]%22);e%26%26e.addEventListener(%22click%22,function(){m(),window.removeEventListener(%22resize%22,a),document.body.removeChild(o),document.getElementById(n.id)%26%26document.body.removeChild(n)});var%20f=q.querySelector(%22%23result%22);f%26%26(f.innerHTML=c(r)),(f=q.querySelector(%22%23o-hidden-count%22))%26%26(f.innerText=r.length-b(r,%22visible%22)),(f=q.querySelector(%22%23o-visuallyhidden-count%22))%26%26(f.innerText=b(r,%22visuallyhidden%22)),d(%22o-hidden%22,%22show-hidden%22),d(%22o-visuallyhidden%22,%22mark-visuallyhidden%22),h(q.getElementById(%22o-highlight%22)),a(),q.addEventListener(%22click%22,function(a){var%20b;if(%22A%22===a.target.nodeName.toUpperCase()%3Fb=a.target:a.target.parentElement%26%26%22A%22===a.target.parentElement.nodeName.toUpperCase()%26%26(b=a.target.parentElement),b){var%20c=parseInt(b.getAttribute(%22href%22).substr(1),10);g(r[c].el)}},!1),window.addEventListener(%22resize%22,a)},document.body.appendChild(o),iframeDoc=p.contentDocument||p.contentWindow.document,iframeDoc.getElementById(%22wai-info-box%22).focus()}();
---

## What are Headings?

Headings communicate the organization of the content on the page. They are like a table of contents. They should be nested by their rank or level. This helps provide a summary of the structure and content of a page. For example:

```
  <h1> Headings - Easy Checks
     <h2> What are Headings?
     <h2> Who depends on Headings?
     <h2> Checking Headings
        <h3> Checking this page
        <h3> Checking other pages
        <h3> What to look for
     <h2> Learn more
     <h2> Acknowledgements
     <h2> Help improve this page
```

Headings can have 1 of 6 levels assigned and should be nested by that level and the main heading on a page is usually level 1, `<h1>`. The following headings should be at levels 2 to 6, `<h2>` to `<h6>`. Levels should not be skipped as sub-headings are created, like the table-of-contents in a book.
  
Headings should be succinct and describe the section or text of the page that follows.

## Why are Headings important?

![Screenshot of screen reader generated list of headings]({{ "/content-images/easy-checks/example-headings.png" | relative_url }}){:.normal .right}

Headings act as page navigation for many people. For example:

* Screen reader users can jump from heading to heading with a single keystroke. They can also access the heading structure and text in a dialogue box for an overview of the page.
* People with low vision often rely on larger visual headings to understand the topics and subtopics on a web page before zooming in to read the smaller paragraph text.
* Headings also help people with cognitive and learning or reading disabilities by helping them understand and focus on the topics within a page.


## Checking Headings

### Checking this page

This is just for practice. Also, you can see what the check will look like on an accessible page.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check headings on this page</a>
</p>
{:/}

### Checking other pages

To check other pages you need to add the check link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Check headings</a>
3. Visit the page you want to check
4. Click on the 'Check headings' link in your bookmarks

{% include excol.html type="start" %}
#### Add link using keyboard only
{% include excol.html type="middle" %}
1. <button onclick="copyBookmarklet()">Copy script to clipboard</button>
2. Make sure your browser bookmarks/favorites bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
3. Create a bookmark to this page using Ctrl/CMD+D
4. Edit your bookmarks - this varies depending on browser and operating system. There is usually a menu option to manage your bookmarks
5. Edit the newly added bookmark to this page
6. Paste the script copied into the URL or Link field
{% include excol.html type="end" %}

### What to look for

* Does the page have any headings?
* Did the the list start with an H1?
* Are any heading levels skipped?
* Are any headings levels blank with no text?
* Does any text look like a heading but not showing up as one?
* Does the heading text reflect the content that follows?
* Do the headings represent the structure of the content, particularly nested content?

## Learn more

* Story: [Someone who uses headings to navigate a page](https://www.w3.org/WAI/people-use-web/user-stories/#accountant)
* Tip: [Use headings to convey meaning and structure](https://www.w3.org/WAI/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Tip: [Use headings and spacing to group related content](https://www.w3.org/WAI/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Tutorial: [Headings](https://www.w3.org/WAI/tutorials/page-structure/headings/)
* [Understanding 2.4.6: Headings and Labels](https://www.w3.org/WAI/WCAG22/Understanding/headings-and-labels.html)

<script>
  function copyBookmarklet() {
    navigator.clipboard.writeText("{{page.bookmarklet}}").then(
      () => {
        alert("Check copied");        
      },
      () => {
        alert("Unable to copy the check");
      },
    );
  }
</script>