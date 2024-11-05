---
title: "Color Contrast - Easy Checks"
permalink: /test-evaluate/easy-checks/color-contrast/
ref: /test-evaluate/easy-checks/color-contrast/
nav_title: "Color Contrast"
lang: en
last_updated: 2024-03-19

doc-note-type: draft

github:
  label: wai-easy-checks

navigation:
  previous: /test-evaluate/easy-checks/headings/
  next: /test-evaluate/easy-checks/skip-link/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>
 
bookmarklet: javascript:void%20function(){document.querySelectorAll(%22%23wai-styles,%23wai-info-box%22).forEach(a=%3E{a.remove()}),document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstyle%20id='wai-styles'%3E%23wai-info-box{z-index:1000;color:black;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;border:solid%201px%20%23ddd;background-color:%23fff;box-shadow:0%204px%208px%200%20rgba(0,0,0,0.2),0%206px%2020px%200%20rgba(0,0,0,0.19);}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px;}%23wai-info-box%20header%20a{float:right;text-decoration:none}%23wai-info-box%20div{padding:8px%2016px;}.wai-more-info{position:sticky;width:25%25;margin-left:70%25;bottom:5em;}body{filter:grayscale(1)}%3C/style%3E%22),document.querySelector(%22body%22).insertAdjacentHTML(%22beforeend%22,%22%3Caside%20id=%27wai-info-box%27%20class=%27wai-more-info%27%3E%3Cheader%3EFind%20out%20more%3Ca%20href=javascript:document.querySelectorAll(%27%23wai-styles,%23wai-info-box%27).forEach(function(el){el.remove()});%20aria-label=dismiss%3EX%3C/a%3E%3C/header%3E%3Cdiv%3E%3Ca%20href=%27https://w3.org/wai/test-evaluate/easy-checks/color-contrast/%27%3EChecking%20Color%20Contrast%3C/a%3E%3C/div%3E%3C/aside%3E%22)}();
---

## What is Color Contrast?


Color contrast refers to the contrast between:
* text and the background color
* interactive elements such as [focus indicators](/test-evaluate/easy-checks/keyboard-focus/) and their background
* elements in a graph, chart or map that need to be understood

The following images show an example of the same part of a webpage. The first example has poor contrast and the second one has good contrast.

![Example of webpage with poor contrast]({{ "/content-images/easy-checks/example-contrast-poor.png" | relative_url }}){:.normal}
![Example of webpage with good contrast]({{ "/content-images/easy-checks/example-contrast-good.png" | relative_url }}){:.normal}

Technically, color contrast is the relative luminance of two or more colors to each other, particularly between text and its background. The tools we can use to measure this take care of the math and make checking that we have enough contrast easy. 

## Why is Color Contrast important?

Good contrast is important for many people with low vision who have reduced contrast acuity. People with color deficient vision (‘color blindness’) often need good contrast too.

## Checking Color Contrast

### Quick check

Determine contrast issues by viewing the page in grayscale.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check grayscale on this page</a>
</p>
{:/}

This gives a rough check as to whether the text on the page is easily read or needs increased  contrast.

To return to full color, close the dialog that appears.

### Checking other pages

To check other pages you need to add the check link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Convert to grayscale</a>
3. Visit the page you want to check
4. Click on the 'Covert to grayscale' link in your bookmarks
5. To return to full color, close the dialog that appears 

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

### Accurate check

Tools are available to help you test more thoroughly. These will do the math and tell you if the colors meet the correct ratios for sufficient contrast.

Search the [Evaluation Tools List](https://www.w3.org/WAI/ER/tools/) for 'color' or 'colour' to find tools that will help.

Some tools allow you to sample the colors directly. For example, by using an eye dropper to select the colors. Other tools need you to know what the <a href="https://simple.wikipedia.org/wiki/RGB">color code</a> is for the colors being checked. For example, RGB (238, 208, 9) or Hex #eed009 is the code for a gold/yellow color.

## Learn more

* Story: [How a user with “color blindness” experiences the Web](https://www.w3.org/WAI/people-use-web/user-stories/archived/#shopper)
* Tip: [Provide sufficient contrast between foreground and background](https://www.w3.org/WAI/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* [Understanding 1.4.3: Contrast (Minimum)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-minimum)
* [Understanding 1.4.6: Contrast (Enhanced)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-enhanced)
* [Understanding 1.4.11: Non-text Contrast](https://www.w3.org/WAI/WCAG22/Understanding/non-text-contrast.html)

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