---
title: "Image Alternative Text - Easy Checks"
permalink: /test-evaluate/easy-checks/image-alt/
ref: /test-evaluate/easy-checks/image-alt/
nav_title: "Image Alternative Text"

lang: en

doc-note-type: draft

github:
  label: wai-easy-checks
  
navigation:
  previous: /test-evaluate/easy-checks/
  next: /test-evaluate/easy-checks/title/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Status:</strong> Updated December 2023<br>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>

bookmarklet: javascript:void%20function(){document.querySelectorAll(%22%23wai-styles,%23wai-info-box,.image-span%22).forEach(a=%3E{a.remove()}),document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstyle%20id='wai-styles'%3E.image-span,%23failure,%23success%20{color:black;font-weight:bold;font-size:small;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;background-color:%23eed009;margin:0%202px;padding:2px;speak:literal-punctuation}%23success{position:absolute;width:0;height:0;clip:rect(0,0,0,0);}%23wai-info-box{z-index:1000;color:black;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;border:solid%201px%20%23ddd;background-color:%23fff;box-shadow:0%204px%208px%200%20rgba(0,0,0,0.2),0%206px%2020px%200%20rgba(0,0,0,0.19);}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px;}%23wai-info-box%20header%20a{float:right;text-decoration:none}%23wai-info-box%20div{padding:8px%2016px;}.wai-more-info{position:fixed;bottom:5em;right:5em}.wai-good{outline:5px%20solid%20%23005A6A;padding:2px}.wai-bad{outline:5px%20solid%20%23c0272d;padding:2px}.wai-note{outline:2px%20dashed%20%23eed009}%3C/style%3E%22),document.querySelectorAll(%22img,%20[role=img]%22).forEach(function(a){var%20b=%22%22;if(a.hasAttribute(%22role%22)%26%26(b+=%22Role=%27%22+a.getAttribute(%22role%22)+%22%27%3Cbr%3E%22),a.hasAttribute(%22aria-label%22)%26%26(b+=%22\u2753aria-label=%27%22+a.getAttribute(%22aria-label%22)+%22%27%3Cbr%3E%22),a.hasAttribute(%22aria-describedby%22)){b+=%22Described%20by%20ID(s)=%22;var%20c=a.getAttribute(%22aria-describedby%22),d=c.split(%22%20%22);for(i=0;i%3Cd.length;i++){var%20e=document.querySelector(%22[id=%27%22+d[i]+%22%27]%22);b+=%22%3Ca%20href=%27%23%22+d[i]+%22%27%3E%22+d[i]+%22%3C/a%3E%22,i%3Cd.length-1%26%26(b+=%22,%20%22),e%26%26(e.classList.add(%22wai-note%22),e.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class=%27image-span%27%3Eid=%27%22+d[i]+%22%27%3C/span%3E%22))}}if(a.hasAttribute(%22aria-labelledby%22)){b+=%22Labelled%20by%20ID(s)=%22;var%20f=a.getAttribute(%22aria-labelledby%22),g=f.split(%22%20%22);for(i=0;i%3Cg.length;i++){var%20h=document.querySelector(%22[id=%27%22+g[i]+%22%27]%22);b+=%22%3Ca%20href=%27%23%22+g[i]+%22%27%3E%22+g[i]+%22%3C/a%3E%22,i%3Cg.length-1%26%26(b+=%22,%20%22),h%26%26(h.classList.add(%22wai-note%22),h.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class=%27image-span%27%3Eid=%27%22+g[i]+%22%27%3C/span%3E%22))}}a.classList.add(%22wai-good%22),a.hasAttribute(%22alt%22)%3F%22A%22==a.parentNode.nodeName%3F%22%22==a.getAttribute(%22alt%22)%3Fb+=%22%3Cspan%20style=%27border-bottom:2px%20solid%20%23003366;%27%3E\u2753Empty%20link%20alt%20text.%20Ok%3F%3C/span%3E%22:b+=%22%3Cspan%20style=%27border-bottom:2px%20solid%20%23003366;%27%3E\u2713%20Link%20alt%20text=%27%22+a.getAttribute(%22alt%22)+%22%27.%20Suitable%3F%3C/span%3E%22:b+=%22\u2713%20Alt%20text=%27%22+a.getAttribute(%22alt%22)+%22%27.%20Suitable%3F%22:%22A%22==a.parentNode.nodeName%3F!a.hasAttribute(%22aria-label%22)%26%26!a.hasAttribute(%22aria-labelledby%22)%26%26!a.hasAttribute(%22aria-describedby%22)%26%26!a.hasAttribute(%22title%22)%26%26(a.classList.replace(%22wai-good%22,%22wai-bad%22),b+=%22%3Cspan%20style=%27border-bottom:2px%20solid%20%23003366;%27%3E\u274C%20Link%20image%20missing%20alt%20text%3C/span%3E%22):!a.hasAttribute(%22aria-label%22)%26%26!a.hasAttribute(%22aria-labelledby%22)%26%26!a.hasAttribute(%22aria-describedby%22)%26%26!a.hasAttribute(%22title%22)%26%26(a.classList.replace(%22wai-good%22,%22wai-bad%22),b+=%22\u274C%20Image%20missing%20alt%20text%22),a.hasAttribute(%22title%22)%26%26(b+=%22\u2753Image%20has%20title=%27%22+a.getAttribute(%22title%22)+%22%27%22),a.hasAttribute(%22longdesc%22)%26%26(b+=%22\u2753Image%20linked%20to%20a%20long%20description=%27%22+a.getAttribute(%22longdesc%22)+%22%27%22),b%26%26a.insertAdjacentHTML(%22afterend%22,%22%3Cspan%20class=%27image-span%27%3E%22+b+%22%3C/span%3E%22)}),document.querySelectorAll(%22img,%20[role=img]%22).length%3F(document.querySelector(%22body%22).insertAdjacentHTML(%22beforeend%22,%22%3Cdiv%20id=%27success%27%20role=%27alert%27%3ESuccess!%20Images%20Found%20on%20Page:%20%22+document.title+%22%3C/div%3E%22),setTimeout(function(){document.querySelector(%22%23success%22).remove()},3e3)):(document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstrong%20id=%27failure%27%20role=%27alert%27%3ENo%20Images%20Found%20on%20Page:%20%22+document.title+%22%3C/strong%3E%22),setTimeout(function(){document.querySelector(%22%23failure%22).remove()},6e3)),document.querySelector(%22body%22).insertAdjacentHTML(%22beforeend%22,%22%3Caside%20id=%27wai-info-box%27%20class=%27wai-more-info%27%3E%3Cheader%3EFind%20out%20more%3Ca%20href=javascript:document.querySelectorAll(%27%23wai-styles,%23wai-info-box,.image-span%27).forEach(function(el){el.remove()});%20aria-label=dismiss%3EX%3C/a%3E%3C/header%3E%3Cdiv%3E%3Ca%20href=%27https://w3.org/wai/test-evaluate/easy-checks/image-alt/%27%3EChecking%20Image%20Alternative%20Text%3C/a%3E%3C/div%3E%3C/aside%3E%22)}();
---

## What is Image Alternative Text?

Image alternative text (“alt text”) is a short description that conveys the purpose of an image. 

## Why is Image Alternative Text important?

Alternative text for images provides information about the image for people who can’t see it or may have difficulty understanding it. These include:

* People who are blind and use a screen reader to access the information on a page
* People with low vision that magnify the screen and also use text-to-speech
* Some people with with learning or reading disabilities who have information read aloud

## Checking Image Alternative Text

### Checking this page

This is just for practice. Also, you can see what the check will look like on an accessible page.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check images on this page</a>
</p>
{:/}

Example images:

![Golden Lab]({{ "/content-images/easy-checks/dog.jpg" | relative_url }}){:.normal} <img src="{{ "/content-images/easy-checks/dog.jpg" | relative_url }}" class="normal">

### Checking other pages

To check other pages you need to add the ‘Check images’ link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Check images</a>
3. Visit the page you want to check
4. Click on the ‘Check images’ link in your bookmarks

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

* Images with information relevant to the page’s content should have alternative text that describes that important information. Images with missing alternative text will be marked with:
  
  ![❌ Image missing alt text]({{ "/content-images/easy-checks/example-missing-alt.png" | relative_url }}){:.normal} 
* Images with text should have the text in the alternative text
* Images that are decorative should be noted as having an empty alt text attribute. This will be marked with:
  
  ![✓ Alt text="". Suitable?]({{ "/content-images/easy-checks/example-decorative-image.png" | relative_url }}){:.normal}
* Images that are functional, like a link or a button, should have alternative text that describes the destination page or the function of the button
* Complex images like graphs and charts should have short alternative text that describes the type of image and a short summary of the key point
  * Complex images should have the detail described elsewhere on the page or on a separate page with a link

## Learn more

* Story: [Someone relying on image alternative text to understand the page information](https://www.w3.org/WAI/people-use-web/user-stories/archived/#accountant)
* Tip: [Write meaningful text alternatives for images](https://www.w3.org/WAI/tips/writing/#make-link-text-meaningful)
* Tutorial: [Images](https://www.w3.org/WAI/tutorials/images/) in the W3C tutorials
* [Understanding 1.1.1: Non-text Content](https://www.w3.org/WAI/WCAG22/Understanding/non-text-content.html)

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