---
title: "Page Title - Easy Checks"
permalink: /test-evaluate/easy-checks/title/
ref: /test-evaluate/easy-checks/title/
nav_title: "Page Title"
lang: en
last_updated: 2024-03-19

doc-note-type: draft

github:
  label: wai-easy-checks

navigation:
  previous: /test-evaluate/easy-checks/image-alt/
  next: /test-evaluate/easy-checks/headings/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>

bookmarklet: javascript:void%20function(){document.querySelectorAll(%22%23wai-styles,%23wai-info-box%22).forEach(function(a){a.remove()}),document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstyle%20id='wai-styles'%3E%23wai-info-box{position:fixed;width:40%25;top:40%25;left:50%25;transform:translate(-50%25,-50%25);z-index:1000;color:black;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif}aside{border:solid%201px%20%23ddd;background-color:%23fff;box-shadow:0%204px%208px%200%20rgba(0,0,0,0.2),0%206px%2020px%200%20rgba(0,0,0,0.19);}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px;}%23wai-info-box%20header%20a{float:right;text-decoration:none}%23wai-info-box%20div{padding:8px%2016px;}%23wai-info-box%20div%20span{font-weight:700;}%3C/style%3E%22);var%20a=%22%22;a+=document.title%3F%22%27%3Cspan%3E%22+document.title+%22%3C/span%3E%27%22:%22Page%20title%20is%20missing%22,document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Caside%20id=%27wai-info-box%27%20tabindex=%27-1%27%3E%3Cheader%3EPage%20Title%3Ca%20href=javascript:document.querySelectorAll(%27%23wai-styles,%23wai-info-box%27).forEach(function(el){el.remove()});%20aria-label=dismiss%3EX%3C/a%3E%3C/header%3E%3Cdiv%3E%22+a+%22%3Cp%3EFind%20out%20more%20about%20%3Ca%20href=%27https://www.w3.org/wai/test-evaluate/easy-checks/title/%27%3EChecking%20Page%20Title%3C/a%3E%3C/div%3E%3C/aside%3E%22),document.getElementById(%22wai-info-box%22).focus()}();
---

## What are Page Titles?

![Example of webpage with title highlighted]({{ "/content-images/easy-checks/example-page-title.png" | relative_url }}){:.normal .right}

Page titles are:
*   shown in the window title bar in some browsers
*   shown in browsers' tabs when there are multiple web pages open
*   shown in search engine results
*   used for browser bookmarks/favorites
*   read by screen readers

## Why are Page Titles important?

The page title is the first information said by screen readers when opening a page. They help screen reader users understand what page is loading.

Page titles are also reflected in the browser tabs names and assist screen reader users navigate among open tabs.
## Checking Page Titles

### Checking this page

This is just for practice. Also, you can see what the check will look like on an accessible page.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check page title on this page</a>
</p>
{:/}

### Checking other pages

To check other pages you need to add the check link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Check page title</a>
3. Visit the page you want to check
4. Click on the ‘Check page title’ link in your bookmarks

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

* Check that there is a title that adequately and briefly describes the content of the page
* Check that the title on the page your are checking is different from other pages on the website

### Tips

There is flexibility on what makes a good page title. However, best practice is for the important and unique information to come first. This is called "front-loading".

For example:

* Poor titles:
  * Welcome to home page of Acme Web Solutions, Inc.
  * Acme Web Solutions, Inc. - About Us
  * Acme Web Solutions, Inc. - Contact Us
  * Acme Web Solutions, Inc. - History
* Better page titles:
  * Acme Web Solutions home page _**or**_ Acme Web Solutions
  * About Acme Web Solutions _**or**_ About us - Acme Web Solutions
  * Contact Acme Web Solutions _**or**_ Contact us - Acme Web Solutions
  * History of Acme Web Solutions _**or**_ Our History - Acme Web Solutions

## Learn more

* Tip: [Provide informative, unique page titles](https://www.w3.org/WAI/tips/writing/#provide-informative-unique-page-titles)
* [Understanding 2.4.2: Page Titled](https://www.w3.org/WAI/WCAG22/Understanding/page-titled.html)

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