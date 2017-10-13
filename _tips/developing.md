---
title: Tips on Developing for Web Accessibility
nav_title: Developing
order: 3
---
This page introduces some basic considerations to help you get started developing web content that is more accessible to people with disabilities. These tips are good practice to help you meet Web Content Accessibility Guidelines (WCAG) requirements. Follow the links to the related WCAG requirements, detailed background in the "Understanding" document, guidance from Tutorials, user stories, and more.

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
{:/}

<div class="form-labels html-example">
  <div>
    <% html_example do %>
      <label for="username">Username</label>
      <input id="username" type="text" name="username">
    <% end %>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Labels or Instructions 3.3.2](/WAI/WCAG20/quickref/#minimize-error-cues) ([Understanding 3.3.2](/TR/UNDERSTANDING-WCAG20/minimize-error-cues.html))
* **Tutorial**
  * [Labelling Controls](/WAI/tutorials/forms/labels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Include alternative text for images

Ensure that alternative text for images is added to all informational and functional images. Use empty alternative text, `alt=""` for decorative images, or include them in the CSS instead. Text alternatives are usually provided by those responsible for written content.

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Non-text Content 1.1.1](/WAI/WCAG20/quickref/#qr-text-equiv-all) ([Understanding 1.1.1](/TR/UNDERSTANDING-WCAG20/text-equiv-all.html))
* **Tutorial**
  * [Images](/WAI/tutorials/images/)
* **User Story**
  * [Describes the value of text alternatives to a blind user](/WAI/intro/people-use-web/stories#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Identify page language and language changes

Indicate the primary language of every page by using the `lang` attribute in the `html` tag, for example `<html lang="en">`. Use the `lang` attribute on specific elements when the language of the element differs from the rest of the page.

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Language of Page 3.1.1](/WAI/WCAG20/quickref/#meaning-doc-lang-id) ([Understanding 3.1.1](/TR/UNDERSTANDING-WCAG20/meaning-doc-lang-id.html))
  * [Language of Parts 3.1.2](/WAI/WCAG20/quickref/#meaning-other-lang-id) ([Understanding 3.1.2](/TR/UNDERSTANDING-WCAG20/meaning-other-lang-id.html))
* **How To**
  * [Declaring language in HTML](/International/questions/qa-html-language-declarations)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Use mark-up to convey meaning and structure

Use appropriate mark-up for headings, lists, tables, etc. HTML5 provides additional elements, such as `<nav>` and `<aside>`, to better structure your content. <abbr>WAI-ARIA</abbr> roles can provide additional meaning, for example, using `role="search"` to identify search functionality. Work with designers and content writers to agree on meanings and then use them consistently.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using HTML to provide structure and meaning" class="example" %}
{:/}

<div class="mark-up html-example">
  <div>
    <% html_example do %>
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
    <% end %>
  </div>
</div>
{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}


{::nomarkdown}
{% include_cached box.html type="start" title="Example: Search field using <abbr>WAI-ARIA</abbr>" class="example" %}
{:/}
<div class="mark-up html-example">
  <div>
    <% html_example do %>
    <form action="#" method="post">
      <div role="search">
        <label for="search">Search for</label>
        <input type="search" id="search" aria-describedby="search-help">
        <div id="search-help">Search records by customer id or name</div>
        <button type="submit">Go</button>
      </div>
    </form>
    <% end %>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Info and Relationships 1.3.1](/WAI/WCAG20/quickref/#content-structure-separation-programmatic) ([Understanding 1.3.1](/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic.html))
* **Tutorial**
  * [Page Structure](/WAI/tutorials/page-structure/)
  * [Tables](/WAI/tutorials/tables/)
* **User Story**
  * [Describes how structural information helps a screen reader user](/WAI/intro/people-use-web/stories#accountant)

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
{:/}

<div class="avoid-mistakes html-example">
  <div>
    <% html_example do %>
      <label for="phone">Phone</label>
      <input id="phone" name="phone" type="tel" pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$" aria-describedby="phone-desc">
      <p id="phone-desc">For example, (02) 1234 1234</p>
    <% end %>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Error Identifications 3.3.1](/WAI/WCAG20/quickref/#qr-minimize-error-identified) ([Understanding 3.3.1](/TR/UNDERSTANDING-WCAG20/minimize-error-identified.html))
* **Tutorial**
  * [Validating Input](/WAI/tutorials/forms/validation/)
* **User Story**
  * [Describes how helpful errors help a user with dyslexia](/WAI/intro/people-use-web/stories#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Reflect the reading order in the code order

Ensure that the order of elements in the code matches the logical order of the information presented. One way to check this is to remove CSS styling and review that the order of the content makes sense.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Reflecting the logical reading order in the code" class="example" %}
{:/}

<div class="order">
  <article class="product">
    <h3 class="name">Space trainers</h3>
    {% include_cached img.html src="trainer.png" alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" %}
    <p class="desc">Space trainer for a classic and stylish look.</p>
    <p class="buy"><a href="javascript:return false"><%= svg_icon 'cart-plus' %> Add to cart</a></p>
  </article>
  <div class="two-column">
    <figure>
      <figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} Image before heading may be missed</figcaption>
      <div class="fail code">
        <% code('html') do %>
<img src="images/trainer.png" alt="...">
<h3>Space trainers</h3>
<p>Space...</p>
<a href="...">Add to cart</a>
        <% end %>
      </div>
      <a id="order-fail-fullcode" class="modal-open" href="#order-fail-fullcode-holder">View full source code</a>
      <div id="order-fail-fullcode-holder">
        <h4 id="order-fail-fullcode-title">Full source code for Image before heading may be missed</h4>

        <p>HTML:</p>
          <% code('html') do %>
<article class="product">
  <img alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" src="images/trainer.png">
  <h3 class="name">Space trainers</h3>
  <p class="desc">Space trainer for a classic and stylish look.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Add to cart</a></p>
</article>
          <% end %>
      </div>
    </figure>

    <figure>
      <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Heading marks the start of the section</figcaption>
      <div class="pass code">
        <% code('html') do %>
<h3>Space trainers</h3>
<img src="images/trainer.png" alt="...">
<p>Space...</p>
<a href="...">Add to cart</a>
        <% end %>
      </div>
      <a id="order-pass-fullcode" class="modal-open" href="#order-pass-fullcode-holder">View full source code</a>
      <div id="order-pass-fullcode-holder">
        <h4 id="order-pass-fullcode-title">Full source code for Heading marks the start of the section</h4>

        <p>HTML:</p>
          <% code('html') do %>
<article class="product">
  <h3 class="name">Space trainers</h3>
  <img alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" src="images/trainer.png">
  <p class="desc">Space trainer for a classic and stylish look.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Add to cart</a></p>
</article>
          <% end %>
      </div>
    </figure>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Meaningful Sequence 1.3.2](/WAI/WCAG20/quickref/#qr-content-structure-separation-sequence) ([Understanding 1.3.2](/TR/UNDERSTANDING-WCAG20/content-structure-separation-sequence.html))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Write code that adapts to the user's technology

Use responsive design to adapt the display to different zoom states and viewport sizes, such as on mobile devices and tablets. When font size is increased by at least 200%, avoid horizontal scrolling and prevent any clipping of content. Use progressive enhancement to help ensure that core functionality and content is available regardless of technology being used.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using media queries to adapt navigation" class="example" %}
{:/}

<div class="adapt-code">
  <figure>
    <div class="code">
      <div class="two-column">
        <% code 'css' do %>
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
      <% end %>
      <% code 'css' do %>
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
      <% end %>
    </div>
  </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Resize text 1.4.4](/WAI/WCAG20/quickref/#visual-audio-contrast-scale) ([Understanding 1.4.4](/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-scale.html))
  * [Consistent Identification 3.2.4](/WAI/WCAG20/quickref/#consistent-behavior-consistent-functionality) ([Understanding 3.2.4](/TR/UNDERSTANDING-WCAG20/consistent-behavior-consistent-functionality.html))
* **Background**
  * [Small Screen Size](/TR/mobile-accessibility-mapping/#h-small-screen-size)
* **User Story**
  * [Describes how alternative views of zoomed pages can be helpful](/WAI/intro/people-use-web/stories#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Provide meaning for non-standard interactive elements

Use <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> to provide information on function and state for custom widgets, such as accordions and custom-made buttons. For example, `role="navigation"` and `aria-expanded="true"`. Additional code is required to implement the behavior of such widgets, such as expanding and collapsing content or how the widget responds to keyboard events.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Menu function and state identified using WAI-ARIA" class="example" %}
{:/}

<div class="non-standard">
  <figure>
      <div class="code">
        <% code 'html' do %>
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
      <% end %>
      </div>
  </figure>
</div>
{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Name, Role, Value 4.1.2](/WAI/WCAG20/quickref/#ensure-compat-rsv) ([Understanding 4.1.2](/TR/UNDERSTANDING-WCAG20/ensure-compat-rsv.html))
* **Background**
  * [Notes on Using ARIA in HTML](/TR/aria-in-html/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Ensure that all interactive elements are keyboard accessible

Think about keyboard access, especially when developing interactive elements, such as menus, mouseover information, collapsable accordions, or media players. Use `tabindex="0"` to add an element that does not normally receive focus, such as `<div>` or `<span>`, into the navigation order when it is being used for interaction. Use scripting to capture and respond to keyboard events.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Keyboard accessible menu button" class="example" %}
{:/}

<div class="keyboard-accessible html-example">
  <div>
    <figure class="rendered">
      <figcaption><%= svg_icon 'screen' %> Rendered</figcaption>
      <div class="rendered">
        <div id="example-button" class="menu-button" role="button" aria-expanded="false" aria-controls="example-button-menu" tabindex="0"><%= svg_icon 'bars' %> Menu</div>
        <div id="example-button-menu" class="menu" aria-hidden="true" tabindex="-1">
          <ul>
            <li><a href="javascript:return false">About</a></li>
            <li><a href="javascript:return false">News</a></li>
            <li><a href="javascript:return false">Tickets</a></li>
            <li><a href="javascript:return false">Fun</a></li>
          </ul>
        </div>
      </div>
    </figure>
    <figure class="code">
      <figcaption><%= svg_icon 'markup' %> Code</figcaption>
      <div>
        <% code 'javascript' do %>
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
        <% end %>
      </div>
    </figure>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Keyboard 2.1.1](/WAI/WCAG20/quickref/#keyboard-operation-keyboard-operable) ([Understanding 2.1.1](/TR/UNDERSTANDING-WCAG20/keyboard-operation-keyboard-operable.html))
* **User Story**
  * [Describes how a user with RSI needs keyboard support](/WAI/intro/people-use-web/stories#reporter)

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
  * [Non-text Content 1.1.1](/WAI/WCAG20/quickref/#text-equiv-all) ([Understanding 1.1.1](/TR/UNDERSTANDING-WCAG20/text-equiv-all.html))
* **Background**
  * [Inaccessibility of CAPTCHA](/TR/turingtest/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Learn more about accessibility

These tips are a few of the things you need to consider for web accessibility. The following resources help you learn why accessibility is important, and about guidelines for making the web more accessible to people with disabilities.

* [Accessibility Introduction](/standards/webdesign/accessibility) – Introduces accessibility and provides links to many helpful resources
* [Accessibility Principles](/WAI/intro/people-use-web/principles) – An introduction to the <abbr>WCAG</abbr> requirements
* [How people with disabilities use the web](/WAI/intro/people-use-web) – Real-life examples of the benefits of accessibility for people with disabilities
* [Web Accessibility Tutorials](/WAI/tutorials/) – Shows you how to develop web content that is accessible to people with disabilities
* [Before and After Demonstration](/WAI/demos/bad/) – Example accessible and inaccessible websites that share the same visual design, with annotations that highlight key accessibility barriers and repairs, and evaluation reports for <abbr>WCAG</abbr> 2.0
* [<abbr>WCAG</abbr> Quick Reference](/WAI/WCAG20/quickref/) – customizable reference of all <abbr>WCAG</abbr> 2.0 requirements and techniques
* [Web Accessibility Evaluation Tools List](/WAI/ER/tools/) – Provides a range of tools to help explore the accessibility of code
* [<abbr>WAI-ARIA</abbr> Overview](/WAI/intro/aria) – Introduction to <abbr>WAI-ARIA</abbr> with links to all the specifications
