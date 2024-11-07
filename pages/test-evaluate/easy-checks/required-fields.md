---
title: "Required Fields - Easy Checks"
permalink: /test-evaluate/easy-checks/required-fields/
ref: /test-evaluate/easy-checks/required-fields/
nav_title: "Required Fields"
lang: en
last_updated: 2024-03-19

doc-note-type: draft

github:
  label: wai-easy-checks

navigation:
  previous: /test-evaluate/easy-checks/form-field-labels/
  next: /test-evaluate/easy-checks/

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p>
    <strong>Editor:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a><br>
    ACKNOWLEDGEMENTS<br>
    Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
  </p>

bookmarklet: javascript:void%20function(){document.querySelectorAll(%22%23wai-styles,%23wai-info-box,.required-span%22).forEach(function(a){a.remove()}),document.querySelector(%22body%22).insertAdjacentHTML(%22afterbegin%22,%22%3Cstyle%20id='wai-styles'%3E%23wai-info-box{z-index:1000;color:black;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;border:solid%201px%20%23ddd;background-color:%23fff;box-shadow:0%204px%208px%200%20rgba(0,0,0,0.2),0%206px%2020px%200%20rgba(0,0,0,0.19);}%23wai-info-box%20header{font-weight:700;background-color:%23f2f2f2;color:%23005a6a;padding:8px%2016px;}%23wai-info-box%20header%20a{float:right;text-decoration:none}%23wai-info-box%20div{padding:8px%2016px;}.wai-more-info{position:fixed;bottom:5em;right:5em}.wai-error{position:fixed;width:40%25;top:40%25;left:50%25;transform:translate(-50%25,-50%25)}.required-span{display:block;width:fit-content;color:black;font-weight:bold;font-size:small;font-family:Noto%20Sans,Trebuchet%20MS,Helvetica%20Neue,Arial,sans-serif;background-color:%23eed009;padding:4px;speak:literal-punctuation}.required-label{outline:%23eed009%202px%20dashed}%3C/style%3E%22);const%20a=Array.prototype.slice.call(document.querySelectorAll(%22label%22)),b=[],c=[];if(a){for(let%20d,e=0;e%3Ca.length;e++){d=%22%22,(d=a[e].querySelector(%22input,select,textarea%22))%3F(d.required||a[e].innerText.search(/\*/))%26%26b.push({labelText:a[e].innerText,label:a[e],field:d}):a[e].getAttribute(%22for%22)%26%26(d=document.getElementById(a[e].getAttribute(%22for%22)),(d.required||0%3C=a[e].innerText.search(/\*/))%26%26b.push({labelText:a[e].innerText,label:a[e],field:d}));let%20f=[...a[e].innerText.matchAll(/\w{2,}/g)];f.forEach(a=%3E{c[a[0]]%3Fc[a[0]]++:c[a[0]]=1})}for(let%20d%20in%20c)if(2%3Cc[d]){let%20c=a.filter(function(a){return%200%3C=a.textContent.search(d)});if(0%3Cc.length)for(let%20a=0;a%3Cc.length;a++)b[c[a].innerText]||b.push({labelText:c[a].innerText,label:c[a],requiredText:d})}for(let%20a,c=0;c%3Cb.length;c++)a=b[c],a.requiredText%3F(a.label.classList.add(%22required-label%22),a.label.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class='required-span'%3ECorrectly%20marked%20with%20'%22+a.requiredText+%22'%3F%3C/span%3E%22)):(a.label.classList.add(%22required-label%22),a.label.insertAdjacentHTML(%22afterbegin%22,%22%3Cspan%20class='required-span'%3ERequired%20field%3C/span%3E%22))}document.querySelector(%22body%22).insertAdjacentHTML(%22beforeend%22,%22%3Caside%20id=%27wai-info-box%27%20class=%27wai-more-info%27%3E%3Cheader%3EFind%20out%20more%3Ca%20href=javascript:document.querySelectorAll(%27%23wai-styles,%23wai-info-box,.required-span%27).forEach(function(el){el.remove()});%20aria-label=dismiss%3EX%3C/a%3E%3C/header%3E%3Cdiv%3E%3Ca%20href=%27https://w3.org/wai/test-evaluate/easy-checks/required-fields/%27%3EChecking%20Required%20Fields%3C/a%3E%3C/div%3E%3C/aside%3E%22)}();
---

## What is a Required Field?

![Example of field with asterisk to mark required status]({{ "/content-images/easy-checks/example-required-asterisk.png" | relative_url }}){:.normal .right}

![Example of field with text to mark required status]({{ "/content-images/easy-checks/example-required-label.png" | relative_url }}){:.normal .right}

A required form field must be completed before you submit a form.

The best way to indicate a required field is to include the word 'required' as part of the label. Many forms use a red asterisk, '\*', in the label. The asterisk is often not announced to screen reader users because it's considered punctuation. People with low vision can often miss the '\*' too due to it's small size and the color that is used.

Some forms don't mark required fields but state that all fields are required unless marked 'optional'.

A required field should also be flagged as required in the HTML code. This needs to include some visible indicator as well. If it doesn't then everyone is likely to receive an error message that the required fields haven't been completed.

## Why are Required Fields important?

Indicating required fields visually is important for everyone to know what parts of a form they are required to complete.

## Checking for Required Fields

### Checking this page

This is just for practice. Also, you can see what the check will look like on an accessible page.

Click on the button below:

{::nomarkdown}
<p>
  <a class="button active" href="{{ page.bookmarklet }}">Check required fields on this page</a>
</p>
{:/}

Example form fields:

<form>
  <p>
    <label for="name1">First name</label>
    <input id="name1" required="required">
  </p>
  <p>
    <label for="name2">Last name *</label>
    <input id="name2">
  </p>
  <p>
    <label for="not-required">Favorite color</label>
    <input id="not-required">
  </p>
</form>

### Checking other pages

To check other pages you need to add the check link as a bookmark.

1. Make sure your browser bookmarks bar is open. Ctrl/CMD+Shift+B will usually toggle the bar
2. Drag this link to your browser bookmarks bar: <a href="{{ page.bookmarklet }}">Check required fields</a>
3. Visit the page you want to check
4. Click on the ‘Check required fields’ link in your bookmarks

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

* Check to see that fields marked as required have a visible indicator that they are required
* If fields are marked as 'optional' and not 'required' then check to make sure there is a message to say that all fields are required unless marked otherwise
* Submit the form and check to see that the fields you thought were required are indicated so

## Learn more

* Tip: [Provide clear instructions](https://www.w3.org/WAI/tips/writing/#provide-clear-instructions)
* [Understanding: 3.3.2: Labels or Instructions](https://www.w3.org/WAI/WCAG22/Understanding/labels-or-instructions.html)

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