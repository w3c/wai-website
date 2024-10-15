---
title: "Language - Easy Checks"
permalink: /test-evaluate/easy-checks/language/
ref: /test-evaluate/easy-checks/language/
nav_title: "Language"
lang: en
last_updated: 2024-03-01

doc-note-type: draft

github:
  label: wai-easy-checks

navigation:
  previous: /test-evaluate/easy-checks/keyboard-focus/
  next: /test-evaluate/easy-checks/zoom/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>

bookmarklet: javascript:void%20function(){document.querySelectorAll(%22%23wai-styles,%23wai-info-box%22).forEach(a=%3E{a.remove()}),document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstyle%20id='wai-styles'%3E%23wai-info-box{position:fixed;width:40%25;top:40%25;left:50%25;transform:translate(-50%25,-50%25);z-index:1000;color:black;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif}%23wai-info-box{border:solid%201px%20%23ddd;background-color:%23fff;box-shadow:0%204px%208px%200%20rgba(0,0,0,0.2),0%206px%2020px%200%20rgba(0,0,0,0.19);}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px;}%23wai-info-box%20header%20a{float:right;text-decoration:none}%23wai-info-box%20div{padding:8px%2016px;}%23wai-info-box%20div%20span{font-weight:700;}%3C/style%3E%22);let%20a=navigator.language||navigator.userLanguage,b=new%20Intl.DisplayNames([a],{type:%22language%22});var%20c=%22%22;let%20d=document.documentElement.lang||document.getElementsByTagName(%22html%22)[0].getAttribute(%22xml:lang%22);c+=d%3F%22%3Cspan%3E%22+d+%22%20(%22+b.of(d)+%22)%3C/span%3E%22:%22Page%20language%20is%20not%20specified%22,document.querySelector(%22body%22).insertAdjacentHTML(%22beforeend%22,%22%3Caside%20id=%27wai-info-box%27%20tabindex=%27-1%27%3E%3Cheader%3EPage%20Language%3Ca%20href=javascript:document.querySelectorAll(%27%23wai-styles,%23wai-info-box%27).forEach(function(el){el.remove()});%20aria-label=dismiss%3EX%3C/a%3E%3C/header%3E%3Cdiv%3E%22+c+%22%3Cp%3EFind%20out%20more%20about%20%3Ca%20href=%27https://www.w3.org/wai/test-evaluate/easy-checks/language/%27%3EChecking%20Page%20Language%3C/a%3E%3C/div%3E%3C/aside%3E%22),document.getElementById(%22wai-info-box%22).focus()}();
---

## How is Language identified?

Web pages should identify the primary language of the page.

The following images show an examples of webpages in English, Japanese and German.

![Example of Japanese webpage with JP declared]({{ "/content-images/easy-checks/example-language-jp.png" | relative_url }}){:.medium} ![Example of German webpage with DE declared]({{ "/content-images/easy-checks/example-language-de.png" | relative_url }}){:.medium}

## Why is Language being identified important?

The language of a page needs to be declared so that screen readers and other technologies that convert text into synthetic speech know how to correctly pronounce text.

## Checking Language

This is just for practice. Also, you can see what the check will look like on an accessible page.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check language on this page</a>
</p>
{:/}

### Checking other pages

To check other pages you need to add the check link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Check page language</a>
3. Visit the page you want to check
4. Click on the ‘Check page language’ link in your bookmarks

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

* Check that the primary language is identified correctly
* If there is no page language set, it will display: "Page language is not specified"

Note that this check does not identify language changes within a page.

## Learn more

* [Understanding 3.1.1: Language of Page](https://www.w3.org/WAI/WCAG22/Understanding/language-of-page.html)
* [Understanding 3.1.2: Language of Parts](https://www.w3.org/WAI/WCAG22/Understanding/language-of-parts)

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