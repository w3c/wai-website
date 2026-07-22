---
title: "Form Field Labels - Easy Checks"
permalink: /test-evaluate/easy-checks/form-field-labels/
ref: /test-evaluate/easy-checks/form-field-labels/
nav_title: "Form Field Labels"
lang: en
last_updated: 2024-03-19

doc-note-type: draft

github:
  label: wai-easy-checks

navigation:
  previous: /test-evaluate/easy-checks/description/
  next: /test-evaluate/easy-checks/required-fields/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>

bookmarklet: javascript:void%20function(){document.querySelectorAll(%22%23wai-styles,%23wai-info-box,.wai-label%22).forEach(a=%3E{a.remove()}),document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstyle%20id='wai-styles'%3E.wai-label{color:black;font-weight:bold;font-size:small;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;background-color:%23eed009;margin:0%202px;padding:2px;speak:literal-punctuation}.wai-good{outline:2px%20solid%20%23005a6a}.wai-bad{outline:3px%20dashed%20%23c0272d}label{line-height:200%25}%23wai-info-box{z-index:1000;color:black;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;border:solid%201px%20%23ddd;background-color:%23fff;box-shadow:0%204px%208px%200%20rgba(0,0,0,0.2),0%206px%2020px%200%20rgba(0,0,0,0.19)}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px}%23wai-info-box%20header%20a{float:right;text-decoration:none}%23wai-info-box%20div{padding:8px%2016px}.wai-more-info{position:fixed;bottom:5em;right:5em}%3C/style%3E%22);for(let%20a%20of%20document.querySelectorAll(%22input,%20textarea,%20select%22))if(!a.getAttribute(%22type%22).match(/hidden|button|submit|reset/)){let%20b=document.querySelector(%22label[for=%27%22+a.getAttribute(%22id%22)+%22%27]%22);if(!!b)a.insertAdjacentHTML(%22beforebegin%22,%22%3Cspan%20class=%27wai-good%27%3E%3Cspan%20class=%27wai-label%27%3E\u2713%20Labelled%3C/span%3E%3C/span%3E%22),a.previousElementSibling.appendChild(a),b.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class=%27wai-label%27%3ELabel%20for%20field%20with%20ID=%27%3Ca%20href=%27%23%22+b.getAttribute(%22for%22)+%22%27%3E%22+b.getAttribute(%22for%22)+%22%3C/a%3E%27%3C/span%3E%22),b.classList.add(%22wai-good%22);else%20if(a.getAttribute(%22aria-labeledby%22)){let%20b=a.getAttribute(%22aria-labeledby%22).split(/%20+/);if(0%3C=b.length){a.getAttribute(%22id%22)||a.setAttribute(%22id%22,b[0]+%22-field%22),a.insertAdjacentHTML(%22beforebegin%22,%22%3Cspan%20class=%27wai-good%27%3E%3Cspan%20class=%27wai-label%27%3E\u2713%20Labelled%3C/span%3E%3C/span%3E%22),a.previousElementSibling.appendChild(a);for(let%20c%20of%20b){let%20b=document.querySelector(%22%23%22+c);b.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class=%27wai-label%27%3ELabel%20for%20ID=%27%3Ca%20href=%27%23%22+a.getAttribute(%22id%22)+%22%27%3E%22+a.getAttribute(%22id%22)+%22%3C/a%3E%27%3C/span%3E%22),b.classList.add(%22wai-good%22)}}}else%20a.getAttribute(%22aria-label%22)%3F(a.insertAdjacentHTML(%22beforebegin%22,%22%3Cspan%20class=%27wai-good%27%3E%3Cspan%20class=%27wai-label%27%3E!%20Labelled%20(using%20ARIA)%3C/span%3E%3C/span%3E%22),a.previousElementSibling.appendChild(a)):%22LABEL%22==a.parentElement.tagName%3F(a.parentElement.classList.add(%22wai-good%22),a.parentElement.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class=%27wai-label%27%3E\u2713%20Labelled%3C/span%3E%22)):(a.getAttribute(%22id%22)%3Fa.insertAdjacentHTML(%22beforebegin%22,%22%3Cspan%20class=%27wai-bad%27%3E%3Cspan%20class=%27wai-label%27%3E\u2717%20Missing%20label%20(No%20matching%20label%20for%20ID=%27%22+a.getAttribute(%22id%22)+%22%27%20found)%3C/span%3E%3C/span%3E%22):a.insertAdjacentHTML(%22beforebegin%22,%22%3Cspan%20class=%27wai-bad%27%3E%3Cspan%20class=%27wai-label%27%3E\u2717%20Missing%20label%3C/span%3E%3C/span%3E%22),a.previousElementSibling.appendChild(a))}for(let%20a%20of%20document.querySelectorAll(%22label%22))a.getAttribute(%22for%22)%26%26!document.querySelector(%22%23%22+a.getAttribute(%22for%22))%26%26(a.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class=%27wai-label%27%3ELabel%20with%20no%20matching%20field%20with%20ID=%27%22+a.getAttribute(%22for%22)+%22%27%3C/span%3E%22),a.classList.add(%22wai-bad%22));document.querySelector(%22body%22).insertAdjacentHTML(%22beforeend%22,%22%3Caside%20id=%27wai-info-box%27%20class=%27wai-more-info%27%3E%3Cheader%3EFind%20out%20more%3Ca%20href=javascript:document.querySelectorAll(%27%23wai-styles,%23wai-info-box,.wai-label%27).forEach(function(el){el.remove()});%20aria-label=dismiss%3EX%3C/a%3E%3C/header%3E%3Cdiv%3E%3Ca%20href=%27https://w3.org/wai/test-evaluate/easy-checks/form-field-labels/%27%3EChecking%20Field%20Labels%3C/a%3E%3C/div%3E%3C/aside%3E%22)}();
---

## What are Form Field Labels?

Form field labels are the text beside or above form fields. They should tell us what information to enter or what checkbox or radio button to select. 

![Example of labeled login fields]({{ "/content-images/easy-checks/example-form-field-names.png" | relative_url }}){:.medium}

## Why are Form Field Labels important?

Form field labels that are coded correctly are important for people listening to the page being read out by a screen reader in order to know how to complete a form.

People with low dexterity using a mouse need the visual label to be associated with the form field in the code to create a larger clickable area, especially for radio buttons and checkboxes.

## Checking Form Field Labels

### Checking this page

This is just for practice. Also, you can see what the check will look like on an accessible page.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check field labels on this page</a>
</p>
{:/}

Example form fields:

<form>
  <label for="name">Name:</label> <input id="name" type="text"><br>
  <span>Role:</span> <input type="text"><br>
  <fieldset>
    <legend>Which flowers do you like:</legend>
    <input id="rose" type="checkbox" name="flower" value="rose"> <label>Roses</label><br>
    <input id="poppy" type="checkbox" name="flower" value="poppy"> <label for="poppy">Poppy</label><br>
    <label><input type="checkbox" name="flower" value="hellebore"> Hellebore</label><br>
  </fieldset>
  </form>

### Checking other pages
To check other pages you need to add the check link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Check field labels</a>
3. Visit the page you want to check
4. Click on the ‘Check field labels’ link in your bookmarks

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

There are many ways to provide a label. To support assistive technology users, including mouse users, form elements must have a programatically associated label. When using the 'Check field labels' link, this is shown by the form element being marked as 'Labelled' and the form label being marked with 'Label for field with ID=...'. For example,

![Example of form field with correctly associated label]({{ "/content-images/easy-checks/example-correct-label.png" | relative_url }})

Other checks to make include:

* Click on a label. If the form field is correctly coded then it should receive keyboard focus
* After using the 'Check field labels' link, check that there are no fields marked with '✗ Missing label'
* Check for labels marked with '! Labelled (using ARIA)'. This isn't a failure but it isn't as helpful as using a proper label

## Learn more

* Tip: [Ensure that form elements include clearly associated labels](https://www.w3.org/WAI/tips/designing/#ensure-that-form-elements-include-clearly-associated-labels)
* Tip: [Associate a label with every form control](https://www.w3.org/WAI/tips/developing/#associate-a-label-with-every-form-control) in the Tips for Developers page
* Tutorial: [Labeling Controls](https://www.w3.org/WAI/tutorials/forms/labels/)
* [Understanding 3.3.2: Labels or Instructions](https://www.w3.org/WAI/WCAG22/Understanding/labels-or-instructions.html)

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