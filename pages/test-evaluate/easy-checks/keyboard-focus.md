---
title: "Visible Keyboard Focus - Easy Checks"
permalink: /test-evaluate/easy-checks/keyboard-focus/
ref: /test-evaluate/easy-checks/keyboard-focus/
nav_title: "Visible Keyboard Focus"
lang: en
last_updated: 2024-03-19

doc-note-type: draft

github:
  label: wai-easy-checks

navigation:
  previous: /test-evaluate/easy-checks/skip-link/
  next: /test-evaluate/easy-checks/language/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>

bookmarklet: javascript:void%20function(){document.querySelectorAll(%22%23wai-styles,%23wai-info-box%22).forEach(a=%3E{a.remove()}),document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstyle%20id='wai-styles'%3E%23wai-info-box{z-index:1000;color:black;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;border:solid%201px%20%23ddd;background-color:%23fff;box-shadow:0%204px%208px%200%20rgba(0,0,0,0.2),0%206px%2020px%200%20rgba(0,0,0,0.19);}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px;}%23wai-info-box%20header%20a{float:right;text-decoration:none}%23wai-info-box%20div{padding:8px%2016px;}.wai-more-info{position:fixed;bottom:5em;right:5em}}%3C/style%3E%22);for(const%20b%20of%20document.querySelectorAll(%22a[href],button,select,input:not([type=%27hidden%27]),textarea,summary,details,area,[tabindex],[contenteditable]:not([contenteditable=%27false%27])%22)){b.setAttribute(%22data-style%22,b.getAttribute(%22style%22));let%20c=%22%22;b.style.transition=%22none%22,b.focus();let%20d=getComputedStyle(b);for(var%20a=0;a%3Cd.length;a++)c+=d[a]+%22:%22+d.getPropertyValue(d[a])+%22;%22;b.setAttribute(%22style%22,c)}document.querySelector(%22body%22).insertAdjacentHTML(%22beforeend%22,%22%3Caside%20id=%27wai-info-box%27%20class=%27wai-more-info%27%3E%3Cheader%3EFind%20out%20more%3Ca%20href=javascript:document.querySelectorAll(%27%23wai-styles,%23wai-info-box%27).forEach(function(el){el.remove()});document.querySelectorAll(%27[data-style]%27).forEach(function(el){el.setAttribute(%27style%27,el.getAttribute(%27data-style%27))});%20aria-label=dismiss%3EX%3C/a%3E%3C/header%3E%3Cdiv%3E%3Ca%20href=%27https://w3.org/wai/test-evaluate/easy-checks/keyboard-focus/%27%3EChecking%20Keyboard%20Focus%3C/a%3E%3C/div%3E%3C/aside%3E%22)}();
---

## What is Keyboard Focus?

![Example of navigation field showing visible keyboard focus]({{ "/content-images/easy-checks/example-keyboard-focus.png" | relative_url }}){:.normal .right}

Visible keyboard focus indicates which interactive element - link, button, form field - you might have moved to using the tab key.

## Why is Keyboard Focus important?

People navigating by keyboard or voice need an indication about which element they’ve moved to.

Many sighted users with physical disabilities will use the keyboard to navigate a web page, including:

* people with quadriplegia
* people with limited dexterity
* people with tremors such as Parkinson's Disease

People who are blind also navigate the web with the keyboard, but will use non-visual cues to determine where they are.

## Checking Keyboard Focus

### Checking this page

This is just for practice. Also, you can see what the check will look like on an accessible page.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check keyboard focus on this page</a>
</p>
{:/}

### Checking other pages

To check other pages you need to add the check link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Check keyboard focus</a>
3. Visit the page you want to check
4. Click on the ‘Check keyboard focus’ link in your bookmarks

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

* Check that all interactive elements have an obvious visual styling
* Check that no blank space is highlighted by the check; this indicates a possible link with no text

## Learn more

* Tip: [Ensure that interactive elements are easy to identify](https://www.w3.org/WAI/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* [Functionality is available from a keyboard](https://www.w3.org/WAI/fundamentals/accessibility-principles/#keyboard)
* [Understanding 2.4.7: Focus Visible](https://www.w3.org/WAI/WCAG22/Understanding/focus-visible)

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