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

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


## Page header

{% include img.html src="page-structure-header.png" srcset="page-structure-header.png, page-structure-header@2x.png 2x, page-structure-header@3x.png 3x" alt="" class="symbol" %} Most websites have a region at the top of every page that contains site-wide information, such as the website logo, search function, and navigation options. HTML5 provides the `<header>` element, which can be used to define such a region.

{::nomarkdown}
{% include_cached notes.html type="start" %}
{:/}

**Note:** If the `<header>` element is used inside `<article>` and `<section>` elements, it is not associated with the whole page, but only with that specific `<article>` or `<section>`.

{::nomarkdown}
{% include_cached notes.html type="end" %}
{:/}

{::nomarkdown}
{% include sidenote.html type="start" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<header>
  …
  <img src="/images/logo.png" alt="SpaceBear Inc.">
  …
</header>
~~~

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include sidenote.html type="middle" %}
{:/}

View a [complete code example]({% link _tutorials/page-structure/example.md %}) for all regions combined.

{::nomarkdown}
{% include sidenote.html type="end" %}
{:/}

## Page footer

{% include img.html src="page-structure-footer.png" srcset="page-structure-footer.png, page-structure-footer@2x.png 2x, page-structure-footer@3x.png 3x" alt="" class="symbol" %} Similar to the page header, most websites also have a region at the bottom of every page that contains site-wide information, such as copyright information, privacy statements, or disclaimers. HTML5 provides the `<footer>` element, which can be used to define such a region.

{::nomarkdown}
{% include_cached notes.html type="start" %}
{:/}

**Note:** If the `<footer>` element is used inside `<article>` and `<section>` elements, it is not identified as the footer for the whole page but only relates to that specific `<article>` or `<section>`.

{::nomarkdown}
{% include_cached notes.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<footer>
  …
  <p>&copy; 2014 SpaceBears Inc.</p>
  …
</footer>
~~~

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Navigation

{::nomarkdown}
{% include_cached sidenote.html type="start" %}
{:/}

{% include img.html src="page-structure-navigation.png" srcset="page-structure-navigation.png, page-structure-navigation@2x.png 2x, page-structure-navigation@3x.png 3x" alt="" class="symbol" %} The HTML5 `<nav>` element can be used to identify a navigation menu. A web page can have any number of navigation menus. Use [labels]({% link _tutorials/page-structure/labels.md %}) to identify each navigation menu.

{::nomarkdown}
{% include_cached box.html type="start" title="Code" class="example" %}
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
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached sidenote.html type="middle" %}
{:/}

The [Menus tutorial]({% link _tutorials/menus/index.md %}) provides more details on creating menus.

{::nomarkdown}
{% include_cached sidenote.html type="end" %}
{:/}

## Main content

{% include img.html src="page-structure-main.png" srcset="page-structure-main.png, page-structure-main@2x.png 2x, page-structure-main@3x.png 3x" alt="" class="symbol" %} Use the HTML5 `<main>` element to identify the main content region of a web page or application.

{::nomarkdown}
{% include_cached box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<main>
  <h1>Stellar launch weekend for the SpaceBear 7!</h1>
  …
</main>
~~~

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Complementary content

{% include img.html src="page-structure-aside.png" srcset="page-structure-aside.png, page-structure-aside@2x.png 2x, page-structure-aside@3x.png 3x" alt="" class="symbol" %} Use the HTML5 `<aside>` element to identify regions that support the main content, yet are separate and meaningful sections on their own; For example, a side note explaining or annotating the main content.

{::nomarkdown}
{% include_cached box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<aside>
  <h3>Related Articles</h3>
  …
</aside>
~~~

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Page Regions in HTML5 Using WAI-ARIA
{:#accessupport}

{::nomarkdown}
{% include_cached sidenote.html type="start" %}
{:/}

Most current web browsers support the above HTML5 elements and convey the information to assistive technology through the accessibility APIs. However, to maximize compatibility with web browsers and assistive technologies that support WAI-ARIA but do not yet support HTML5, it is currently advisable to use both the HTML5 elements and the corresponding WAI-ARIA roles.

{::nomarkdown}
{% include_cached box.html type="start" title="Code: Examples in HTML5" class="example" %}
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
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached sidenote.html type="middle" %}
{:/}

Explore other WAI-ARIA resources:

* [WAI-ARIA Overview](https://www.w3.org/WAI/intro/aria)
* [Notes on Using ARIA in HTML](https://www.w3.org/TR/aria-in-html/)

{::nomarkdown}
{% include_cached sidenote.html type="end" %}
{:/}

## Page Regions in HTML4 Using WAI-ARIA
{:#accessupport}

If HTML5 cannot be used or if an HTML4 page is retrofitted to improve accessibility, add WAI-ARIA code to `div` elements that function as their HTML5 counterparts, for example:

{::nomarkdown}
{% include_cached box.html type="start" title="Code: Examples in HTML4" class="example" %}
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
{% include_cached box.html type="end" %}
{:/}
