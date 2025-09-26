---
title: "Page Regions"
permalink: /tutorials/page-structure/regions/
ref: /tutorials/page-structure/regions/
lang: en
github:
  label: wai-tutorials

resource:
  ref: /tutorials/page-structure/

navigation:
  previous: /tutorials/page-structure/
  next: /tutorials/page-structure/labels/

wcag_success_criteria:
  - 1.3.1
  - 2.4.1
  - 2.4.6
wcag_techniques:
  - ARIA11

metafooter: true
last_updated: 2024-05-13
editors:
- Eric Eggert: "https://www.w3.org/People/yatil/"
- Shadi Abou-Zahra: "https://www.w3.org/People/shadi/"
update_editors:
  - Brian Elton
contributing_participants:
  - see <a href="/WAI/tutorials/acknowledgements/">Acknowledgements</a>
support: Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/groups/wg/eowg">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/ACT/">WAI-ACT project</a>, co-funded by the <strong>European Commission <abbr title="Information Society Technologies">IST</abbr> Programme</strong>.

---

{::nomarkdown}
{% include box.html type="start" h="2" title="Overview" class="full" %}
{:/}

Mark up different regions of web pages and applications, so that they can be identified by web browsers and assistive technologies.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include_cached toc.html %}

## Page header

{::nomarkdown}{% include image.html src="tutorials/page-structure/page-structure-header.png" srcset="tutorials/page-structure/page-structure-header.png, tutorials/page-structure/page-structure-header@2x.png 2x, tutorials/page-structure/page-structure-header@3x.png 3x" alt="" class="small right" %}{:/nomarkdown} Most websites have a region at the top of every page that contains site-wide information, such as the website logo, search function, and navigation options. HTML5 provides the `<header>` element, which can be used to define such a region.

{::nomarkdown}
{% include box.html type="start" title="Note" class="simple notes" %}
{:/}

**Note:** If the `<header>` element is used inside `<article>` and `<section>` elements, it is not associated to those elements. It does not get the WAI-ARIA `banner` role and does not have special behavior in assistive technologies.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Code Snippet" class="example" %}
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

{% include ednote.html note="Figure out how to display example link now that the sidebar is not available anymore." %}

View a [complete code example](/tutorials/page-structure/example/) for all regions combined.

## Page footer

{::nomarkdown}{% include image.html src="tutorials/page-structure/page-structure-footer.png" srcset="tutorials/page-structure/page-structure-footer.png, tutorials/page-structure/page-structure-footer@2x.png 2x, tutorials/page-structure/page-structure-footer@3x.png 3x" alt="" class="small right" %}{:/nomarkdown} Similar to the page header, most websites also have a region at the bottom of every page that contains site-wide information, such as copyright information, privacy statements, or disclaimers. HTML5 provides the `<footer>` element, which can be used to define such a region.

{::nomarkdown}
{% include box.html type="start" title="Note" class="simple notes" %}
{:/}

**Note:** If the `<footer>` element is used inside `<article>` and `<section>` elements, it is not associated to those elements. It does not get the WAI-ARIA `contentinfo` role and does not have special behavior in assistive technologies.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Code Snippet" class="example" %}
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

{::nomarkdown}{% include image.html src="tutorials/page-structure/page-structure-navigation.png" srcset="tutorials/page-structure/page-structure-navigation.png, tutorials/page-structure/page-structure-navigation@2x.png 2x, tutorials/page-structure/page-structure-navigation@3x.png 3x" alt="" class="small right" %}{:/nomarkdown} The HTML5 `<nav>` element can be used to identify a navigation menu. A web page can have any number of navigation menus. Use [labels](/tutorials/page-structure/labels/) to identify each navigation menu.

{::nomarkdown}
{% include box.html type="start" title="Code Snippet" class="example" %}
{:/}

~~~html
<nav aria-label="Main">
  …
</nav>
…
<nav aria-labelledby="regionheading">
  <h2 id="regionheading">On this page</h2>
  …
</nav>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include ednote.html note="Figure out how to display reference link now that the sidebar is not available anymore." %}

The [Menus tutorial](/tutorials/menus/) provides more details on creating menus.


## Main content

{::nomarkdown}{% include image.html src="tutorials/page-structure/page-structure-main.png" srcset="tutorials/page-structure/page-structure-main.png, tutorials/page-structure/page-structure-main@2x.png 2x, tutorials/page-structure/page-structure-main@3x.png 3x" alt="" class="small right" %}{:/nomarkdown} Use the HTML5 `<main>` element to identify the main content region of a web page or application.

{::nomarkdown}
{% include box.html type="start" title="Code Snippet" class="example" %}
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

{::nomarkdown}{% include image.html src="tutorials/page-structure/page-structure-aside.png" srcset="tutorials/page-structure/page-structure-aside.png, tutorials/page-structure/page-structure-aside@2x.png 2x, tutorials/page-structure/page-structure-aside@3x.png 3x" alt="" class="small right" %}{:/nomarkdown} Use the HTML5 `<aside>` element to identify regions that support the main content, yet are separate and meaningful sections on their own; For example, a side note explaining or annotating the main content.

{::nomarkdown}
{% include box.html type="start" title="Code Snippet" class="example" %}
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

## Responsive design
Components may be collapsed or even hidden on smaller screens, but components that show should appear in the same order for a particular view (set size and orientation). If possible, page structure should be consistent across different screen sizes and orientations, though not a specific WCAG requirement.

## Page regions in HTML4 using WAI-ARIA
{:#accessupport-html4}

If HTML5 cannot be used or if an HTML4 page is retrofitted to improve accessibility, add WAI-ARIA code to `div` elements that function as their HTML5 counterparts, for example:

{::nomarkdown}
{% include box.html type="start" title="Examples in HTML4" class="example" %}
{:/}

~~~html
<div class="header" role="banner">…</div>
<div id="main" role="main">…</div>
<div id="nav" role="navigation">…</div>
<div id="footer" role="contentinfo">…</div>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Explore other WAI-ARIA resources:

* [WAI-ARIA Overview](/standards-guidelines/aria/)
* [Notes on Using ARIA in HTML](https://www.w3.org/TR/html-aria/)