---
title: Page Regions
order: 2
group: page-structure
wcag_success_criteria:
  - 1.3.1
  - 2.4.1
  - 2.4.6
wcag_techniques:
  - ARIA11
technologies: HTML5, WAI-ARIA
editors:
- Eric Eggert: "https://www.w3.org/People/yatil/"
- Shadi Abou-Zahra: "https://www.w3.org/People/shadi/"
contributors:
- The Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>)
support: Developed with support from the <a href="https://www.w3.org/WAI/ACT/">WAI-ACT project</a>, co-funded by the <strong>European Commission <abbr title="Information Society Technologies">IST</abbr> Programme</strong>.
---

Mark up different regions of web pages and applications, so that they can be identified by web browsers and assistive technologies.

## Page header

{::nomarkdown}<%= image_tag 'page-structure-header.png', srcset: image_path('page-structure-header.png') + ', ' + image_path('page-structure-header@2x.png') + ' 2x, ' + image_path('page-structure-header@3x.png') + ' 3x', :alt => '', :class => "symbol" %>{:/nomarkdown} Most websites have a region at the top of every page that contains site-wide information, such as the website logo, search function, and navigation options. HTML5 provides the `<header>` element, which can be used to define such a region.

{::nomarkdown}
{% include notes.html type="start" %}
{:/}

**Note:** If the `<header>` element is used inside `<article>` and `<section>` elements, it is not associated with the whole page, but only with that specific `<article>` or `<section>`.

{::nomarkdown}
{% include notes.html type="end" %}
{:/}

{::nomarkdown}
<%= demo :start %>
{:/}

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<header>
  …
  <img src="/images/logo.png" alt="SpaceBear Inc.">
  …
</header>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
<%= demo :middle %>
{:/}

View a [complete code example]({% link _tutorials/page-structure/example.md %}) for all regions combined.

{::nomarkdown}
<%= demo :end %>
{:/}

## Page footer

{::nomarkdown}<%= image_tag 'page-structure-footer.png', srcset: image_path('page-structure-footer.png') + ', ' + image_path('page-structure-footer@2x.png') + ' 2x, ' + image_path('page-structure-footer@3x.png') + ' 3x', :alt => '', :class => "symbol" %>{:/nomarkdown} Similar to the page header, most websites also have a region at the bottom of every page that contains site-wide information, such as copyright information, privacy statements, or disclaimers. HTML5 provides the `<footer>` element, which can be used to define such a region.

{::nomarkdown}
{% include notes.html type="start" %}
{:/}

**Note:** If the `<footer>` element is used inside `<article>` and `<section>` elements, it is not identified as the footer for the whole page but only relates to that specific `<article>` or `<section>`.

{::nomarkdown}
{% include notes.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<footer>
  …
  <p>&copy; 2014 SpaceBears Inc.</p>
  …
</footer>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Navigation

{::nomarkdown}
<%= ref :start %>
{:/nomarkdown}

{::nomarkdown}<%= image_tag 'page-structure-navigation.png', srcset: image_path('page-structure-navigation.png') + ', ' + image_path('page-structure-navigation@2x.png') + ' 2x, ' + image_path('page-structure-navigation@3x.png') + ' 3x', :alt => '', :class => "symbol" %>{:/nomarkdown} The HTML5 `<nav>` element can be used to identify a navigation menu. A web page can have any number of navigation menus. Use [labels]({% link _tutorials/page-structure/labels.md %}) to identify each navigation menu.

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<nav aria-label="Main Navigation">
  …
</nav>
…
<nav aria-labelledby="quicknav-heading">
  <h5 id="quicknav-heading">Quick Navigation</h5>
  …
</nav>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
<%= ref :middle %>
{:/nomarkdown}

The [Menus tutorial]({% link _tutorials/menus/index.md %}) provides more details on creating menus.

{::nomarkdown}
<%= ref :end %>
{:/nomarkdown}

## Main content

{::nomarkdown}<%= image_tag 'page-structure-main.png', srcset: image_path('page-structure-main.png') + ', ' + image_path('page-structure-main@2x.png') + ' 2x, ' + image_path('page-structure-main@3x.png') + ' 3x', :alt => '', :class => "symbol" %>{:/nomarkdown} Use the HTML5 `<main>` element to identify the main content region of a web page or application.

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<main>
  <h1>Stellar launch weekend for the SpaceBear 7!</h1>
  …
</main>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Complementary content

{::nomarkdown}<%= image_tag 'page-structure-aside.png', srcset: image_path('page-structure-aside.png') + ', ' + image_path('page-structure-aside@2x.png') + ' 2x, ' + image_path('page-structure-aside@3x.png') + ' 3x', :alt => '', :class => "symbol" %>{:/nomarkdown} Use the HTML5 `<aside>` element to identify regions that support the main content, yet are separate and meaningful sections on their own; For example, a side note explaining or annotating the main content.

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<aside>
  <h3>Related Articles</h3>
  …
</aside>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Page Regions in HTML5 Using WAI-ARIA
{:#accessupport}

{::nomarkdown}
<%= ref :start %>
{:/nomarkdown}

Most current web browsers support the above HTML5 elements and convey the information to assistive technology through the accessibility APIs. However, to maximize compatibility with web browsers and assistive technologies that support WAI-ARIA but do not yet support HTML5, it is currently advisable to use both the HTML5 elements and the corresponding WAI-ARIA roles.

{::nomarkdown}
{% include box.html type="start" title="Code: Examples in HTML5" class="example" %}
{:/}
~~~html
<header role="banner">…</header>
~~~
~~~html
<main role="main">…</main>
~~~
~~~html
<nav role="navigation">…</nav>
~~~
~~~html
<footer role="contentinfo">…</footer>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
<%= ref :middle %>
{:/nomarkdown}

Explore other WAI-ARIA resources:

* [WAI-ARIA Overview](https://www.w3.org/WAI/intro/aria)
* [Notes on Using ARIA in HTML](https://www.w3.org/TR/aria-in-html/)

{::nomarkdown}
<%= ref :end %>
{:/nomarkdown}

## Page Regions in HTML4 Using WAI-ARIA
{:#accessupport}

If HTML5 cannot be used or if an HTML4 page is retrofitted to improve accessibility, add WAI-ARIA code to `div` elements that function as their HTML5 counterparts, for example:

{::nomarkdown}
{% include box.html type="start" title="Code: Examples in HTML4" class="example" %}
{:/}

~~~html
<div class="header" role="banner">…</div>
~~~
~~~html
<div id="main" role="main">…</div>
~~~
~~~html
<div id="nav" role="navigation">…</div>
~~~
~~~html
<div id="footer" role="contentinfo">…</div>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}
