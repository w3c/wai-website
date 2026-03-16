---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Developing for Web Accessibility – Tips for Getting Started"
title_html: "Developing for Web Accessibility"
nav_title: "Tips for Developing"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-07-16   # Keep the date of the English version

resource:
  ref: /tips/

navigation:
  previous: /tips/designing/

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips
  
permalink: /tips/developing/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/developing/  # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#developing

changelog: /tips/changelog/
acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Minor update 16 July 2024. Updated 15 April 2016. First published September 2015.</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, and <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed as part of the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces some basic considerations to help you get started developing web content that is more accessible to people with disabilities. These tips are good practice to help you meet Web Content Accessibility Guidelines (WCAG) requirements. Follow the links to the related WCAG requirements, detailed background in the "Understanding" document, guidance from Tutorials, user stories, and more.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}



## Associate a label with every form control

Use a `for` attribute on the `<label>` element linked to the `id` attribute of the form element, or using <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> attributes. In specific situations it may be acceptable to hide `<label>` elements visually, but in most cases labels are needed to help all readers understand the required input.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using <code>for</code> and <code>id</code> attributes" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendered</figcaption>
<label for="username">Username</label>
<input id="username" type="text" name="username">
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Code Snippet</figcaption>
{:/}

~~~html
<label for="username">Username</label>
<input id="username" type="text" name="username">
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Labels or Instructions 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Understanding 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
* **Tutorial**
  * [Labeling Controls](/tutorials/forms/labels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Include alternative text for images

Ensure that alternative text for images is added to all informational and functional images. Use empty alternative text, `alt=""` for decorative images, or include them in the CSS instead. Text alternatives are usually provided by those responsible for written content.

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Non-text Content 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Understanding 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Tutorial**
  * [Images](/tutorials/images/)
* **User Story**
  * [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Identify page language and language changes

Indicate the primary language of every page by using the `lang` attribute in the `html` tag, for example `<html lang="en">`. Use the `lang` attribute on specific elements when the language of the element differs from the rest of the page.

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Language of Page 3.1.1](/WAI/WCAG21/quickref/#language-of-page) ([Understanding 3.1.1](/WAI/WCAG21/Understanding/language-of-page))
  * [Language of Parts 3.1.2](/WAI/WCAG21/quickref/#language-of-parts) ([Understanding 3.1.2](/WAI/WCAG21/Understanding/language-of-parts))
* **How To**
  * [Declaring language in HTML](/International/questions/qa-html-language-declarations)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Use mark-up to convey meaning and structure

Use appropriate mark-up for headings, lists, tables, etc. HTML5 provides additional elements, such as `<nav>` and `<aside>`, to better structure your content. <abbr>WAI-ARIA</abbr> roles can provide additional meaning, for example, using `role="search"` to identify search functionality. Work with designers and content writers to agree on meanings and then use them consistently.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using HTML to provide structure and meaning" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendered</figcaption>
<section>
  <article>
    <h2>Superbear saves the day</h2>
    <time datetime="2015-08-07">7 Aug 2015</time>
    <p>The city's favorite bear yet again proves his mettle by rescuing a young cat from a tree. Witnesses say that Superbear's efforts were not appreciated by the feline, who inflicted some minor scratch wounds on his rescuer.</p>
    <aside>
      <h3>Related Articles</h3>
      <ul>
        <li><a href="#">Bear receives key to city</a></li>
        <li><a href="#">Superbear stands for mayor</a></li>
      </ul>
    </aside>
  </article>
</section>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Code Snippet</figcaption>
{:/}

~~~html
<section>
  <article>
    <h2>Superbear saves the day</h2>
    <time datetime="2015-08-07">7 Aug 2015</time>
    <p>The city's favorite bear yet again proves his mettle by rescuing a young cat from a tree. Witnesses say that Superbear's efforts were not appreciated by the feline, who inflicted some minor scratch wounds on his rescuer.</p>
    <aside>
      <h3>Related Articles</h3>
      <ul>
        <li><a href="#">Bear receives key to city</a></li>
        <li><a href="#">Superbear stands for mayor</a></li>
      </ul>
    </aside>
  </article>
</section>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Search field using <abbr>WAI-ARIA</abbr>" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendered</figcaption>
<form action="#" method="post">
  <div role="search">
    <label for="search">Search for</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">Search records by customer id or name</div>
    <button type="submit">Go</button>
  </div>
</form>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Code Snippet</figcaption>
{:/}

~~~html
<form action="#" method="post">
  <div role="search">
    <label for="search">Search for</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">Search records by customer id or name</div>
    <button type="submit">Go</button>
  </div>
</form>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Info and Relationships 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([Understanding 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
* **Tutorial**
  * [Page Structure](/tutorials/page-structure/)
  * [Tables](/tutorials/tables/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Help users avoid and correct mistakes

Provide clear instructions, error messages, and notifications to help users complete forms on your site. When an error occurs:

* Help users find where the problem is
* Provide specific, understandable explanations
* Suggest corrections

Be as forgiving of format as possible when processing user input. For example, accept phone numbers that include spaces and delete the spaces as needed.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Australian phone number field with forgiving validation" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendered</figcaption>
<label for="phone">Phone</label>
<input id="phone" name="phone" type="tel" pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$" aria-describedby="phone-desc">
<p id="phone-desc">For example, (02) 1234 1234</p>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Code Snippet</figcaption>
{:/}

~~~html
<label for="phone">Phone</label>
<input id="phone" name="phone" type="tel"
       pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$"
       aria-describedby="phone-desc">
<p id="phone-desc">For example, (02) 1234 1234</p>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Error Identifications 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([Understanding 3.3.1](/WAI/WCAG21/Understanding/error-identification))
* **Tutorial**
  * [Validating Input](/tutorials/forms/validation/)
* **User Stories**
  * [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
  * [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Reflect the reading order in the code order

Ensure that the order of elements in the code matches the logical order of the information presented. One way to check this is to remove CSS styling and review that the order of the content makes sense.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Reflecting the logical reading order in the code" class="example" %}

<div class="two-column">
<div class="order">
  <article class="product">
    <h3 class="name">Space trainers</h3>
    {% include_cached image.html src="tips/trainer.png" alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" %}
    <p class="desc">Space trainer for a classic and stylish look.</p>
    <p class="buy"><a href="javascript:return false" class="button button-icon"><span>{% include_cached icon.html name="cart-plus" %} Add to cart</span></a></p>
  </article>
</div>
<figure>
<figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} Image before heading may be missed</figcaption>
{:/}

~~~html
<img src="images/trainer.png" alt="...">
<h3>Space trainers</h3>
<p>Space...</p>
<a href="...">Add to cart</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
View complete code example
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <img alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" src="images/trainer.png">
  <h3 class="name">Space trainers</h3>
  <p class="desc">Space trainer for a classic and stylish look.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Add to cart</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
<figure>
<figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Heading marks the start of the section</figcaption>
{:/}

~~~html
<h3>Space trainers</h3>
<img src="images/trainer.png" alt="...">
<p>Space...</p>
<a href="...">Add to cart</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
View complete code example
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <h3 class="name">Space trainers</h3>
  <img alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" src="images/trainer.png">
  <p class="desc">Space trainer for a classic and stylish look.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Add to cart</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Meaningful Sequence 1.3.2](/WAI/WCAG21/quickref/#meaningful-sequence) ([Understanding 1.3.2](/WAI/WCAG21/Understanding/meaningful-sequence))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Write code that adapts to the user's technology

Use responsive design to adapt the display to different zoom states and viewport sizes, such as on mobile devices and tablets. When font size is increased by at least 200%, avoid horizontal scrolling and prevent any clipping of content. Use progressive enhancement to help ensure that core functionality and content is available regardless of technology being used.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using media queries to adapt navigation" class="example" %}

<div class="adapt-code">
  <figure>
    <div class="code">
      <div class="grid-4">
        <div class="from-col1 to-col2">
{:/}

~~~css
/* On narrow viewports, make the navigation full width */
@media screen and (min-width: 25em) {
  #nav {
    float: none;
    width: auto;
  }
  #main {
    margin-left: 0;
  }
}
~~~

{::nomarkdown}
</div>
<div class="from-col3 to-col4">
{:/}

~~~css
/* On wider viewports, put the navigation on the left */
@media screen and (min-width: 43em) {
  #nav {
    float: left;
    width: 24%;
  }
  #main {
    margin-left: 27%;
  }
}
~~~

{::nomarkdown}
      </div>
    </div>
  </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Resize text 1.4.4](/WAI/WCAG21/quickref/#resize-text) ([Understanding 1.4.4](/WAI/WCAG21/Understanding/resize-text))
  * [Consistent Identification 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([Understanding 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **Background**
  * [Small Screen Size](/TR/mobile-accessibility-mapping/#h-small-screen-size)
* **User Story**
  * [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Provide meaning for non-standard interactive elements

Use <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> to provide information on function and state for custom widgets, such as accordions and custom-made buttons. For example, `role="navigation"` and `aria-expanded="true"`. Additional code is required to implement the behavior of such widgets, such as expanding and collapsing content or how the widget responds to keyboard events.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Menu function and state identified using WAI-ARIA" class="example" %}

<div class="non-standard">
  <figure>
      <div class="code">
{:/}

~~~html
<nav aria-label="Main Navigation" role="navigation">
  <ul>
    <li><a href="...">Home</a></li>
    <li><a href="...">Shop</a></li>
    <li class="has-submenu">
      <a aria-expanded="false" aria-haspopup="true" href="...">SpaceBears</a>
      <ul>
          <li><a href="...">SpaceBear 6</a></li>
          <li><a href="...">SpaceBear 6 Plus</a></li>
      </ul>
    </li>
    <li><a href="...">MarsCars</a></li>
    <li><a href="...">Contact</a></li>
  </ul>
</nav>
~~~

{::nomarkdown}
      </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Name, Role, Value 4.1.2](/WAI/WCAG21/quickref/#name-role-value) ([Understanding 4.1.2](/WAI/WCAG21/Understanding/name-role-value))
* **Background**
  * [Notes on Using ARIA in HTML](/TR/aria-in-html/)
* **User Stories**
  * [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Ensure that all interactive elements are keyboard accessible

Think about keyboard access, especially when developing interactive elements, such as menus, mouseover information, collapsable accordions, or media players. Use `tabindex="0"` to add an element that does not normally receive focus, such as `<div>` or `<span>`, into the navigation order when it is being used for interaction. Use scripting to capture and respond to keyboard events.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Keyboard accessible menu button" class="example" %}

<div class="two-column keyboard-accessible">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendered</figcaption>
<div class="rendered">
  <div id="example-button" class="menu-button" role="button" aria-expanded="false" aria-controls="example-button-menu" tabindex="0">{% include_cached icon.html name="menu" %} Menu</div>
  <div id="example-button-menu" class="menu" aria-hidden="true" tabindex="-1">
    <ul>
      <li><a href="javascript:return false">About</a></li>
      <li><a href="javascript:return false">News</a></li>
      <li><a href="javascript:return false">Tickets</a></li>
      <li><a href="javascript:return false">Fun</a></li>
    </ul>
  </div>
</div>
<script>
  !function() {
    "use strict";
    function e(e) {
        "true" == e.getAttribute("aria-hidden") ? (e.setAttribute("aria-hidden", "false"), e.focus()) : e.setAttribute("aria-hidden", "true")
    }
    function t(e) {
        "true" == e.getAttribute("aria-checked") ? (e.setAttribute("aria-checked", "false"), e.getElementsByTagName("span")[0].innerHTML = "Off") : (e.setAttribute("aria-checked", "true"), e.getElementsByTagName("span")[0].innerHTML = "On")
    }
    var a = document.getElementById("example-button");
    a && (a.addEventListener("keydown", function(t) {
        t.keyCode && 13 == t.keyCode && (e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true"))
    }), a.addEventListener("click", function(t) {
        e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true")
    }));
    var n = document.getElementById("switch");
    n && (n.addEventListener("keydown", function(e) {
        !e.keyCode || 32 != e.keyCode && 13 != e.keyCode || t(this)
    }), n.addEventListener("click", function() {
        t(this)
    }))
}();
</script>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Code Snippet</figcaption>
{:/}

~~~javascript
var buttonExample = document.getElementById('example-button');

buttonExample.addEventListener('keydown', function(e) {
  // Toggle the menu when RETURN is pressed
  if(e.keyCode && e.keyCode == 13) {
    toggleMenu(document.getElementById('example-button-menu'));
  }
});

buttonExample.addEventListener('click', function(e) {
// Toggle the menu on mouse click
  toggleMenu(document.getElementById('example-button-menu'));
});
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Keyboard 2.1.1](/WAI/WCAG21/quickref/#keyboard) ([Understanding 2.1.1](/WAI/WCAG21/Understanding/keyboard))
* **User Stories**
  * [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
  * [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
  * [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Avoid CAPTCHA where possible

CAPTCHAs create problems for many people. There are other means of verifying that user input was generated by a human that are easier to use, such as automatic detection or interface interactions. If CAPTCHA really needs to be included, ensure that it is simple to understand and includes alternatives for users with disabilities, such as:

* Providing more than two ways to solve the CAPTCHAs
* Providing access to a human representative who can bypass CAPTCHA
* Not requiring CAPTCHAs for authorized users.

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Non-text Content 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Understanding 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Background**
  * [Inaccessibility of CAPTCHA](/TR/turingtest/)
* **User Stories**
  * [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Learn More About Accessibility" class="large" icon="readmore" %}
{:/}

These tips are a few of the things you need to consider for web accessibility. The following resources help you learn why accessibility is important, and about guidelines for making the web more accessible to people with disabilities.

* [Introduction to Web Accessibility](/fundamentals/accessibility-intro/) — Introduces accessibility and provides links to many helpful resources
* [Accessibility Principles](/fundamentals/accessibility-principles/) — An introduction to the <abbr>WCAG</abbr> requirements
* [How people with disabilities use the web](/people-use-web/) — Real-life examples of the benefits of accessibility for people with disabilities
* [Web Accessibility Tutorials](/tutorials/) — Shows you how to develop web content that is accessible to people with disabilities
* [Before and After Demonstration](/WAI/demos/bad/) — Example accessible and inaccessible websites that share the same visual design, with annotations that highlight key accessibility barriers and repairs, and evaluation reports for <abbr>WCAG</abbr>
* [How to Meet WCAG (Quick Reference)](/WAI/WCAG21/quickref/) — customizable reference of all WCAG requirements and techniques
* [Web Accessibility Evaluation Tools List](/WAI/ER/tools/) — Provides a range of tools to help explore the accessibility of code
* [<abbr>WAI-ARIA</abbr> Overview](/standards-guidelines/aria/) — Introduction to <abbr>WAI-ARIA</abbr> with links to all the specifications

{::nomarkdown}
{% include box.html type="end" %}
{:/}
