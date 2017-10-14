---
title: Labeling Regions
order: 3
group: page-structure
wcag_success_criteria:
  - 2.4.1
  - 2.4.6
wcag_techniques:
  - H69
  - ARIA11
technologies: HTML5, WAI-ARIA
editors:
- Eric Eggert: "https://www.w3.org/People/yatil/"
- Shadi Abou-Zahra: "https://www.w3.org/People/shadi/"
contributors:
- The Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>)
support: Developed with support from the <a href="https://www.w3.org/WAI/ACT/">WAI-ACT project</a>, co-funded by the <strong>European Commission <abbr title="Information Society Technologies">IST</abbr> Programme</strong>.
---
Provide labels to distinguish two page regions of the same type, such as “main navigation” and “sub-navigation” menus using a `<nav>` element on the same page. Labels are also used to change the default identification of page regions, for example, to identify a `<aside>` region as “advertisement”. Regions that are unique, such as `<main>`, do not need additional labels.

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


## Using `aria-labelledby`
{:.ap}

{::nomarkdown}
{% include_cached sidenote.html type="start" %}
{:/}

Use `aria-labelledby` to point to an existing element by its (unique) `id`. The label of the region is the content of the referenced element. Every element can be a label this way. Labels should be short and descriptive. If a heading is present in the region, consider using it as the label:

{::nomarkdown}
{% include_cached box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<nav aria-labelledby="regionheading">
  <h3 id="regionheading">On this Page</h3>
    …
</nav>
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

Note: This approach using headings is also backward compatible for older web browsers and assistive technologies do not process HTML5 and WAI-ARIA.

## Using `aria-label`
{:.ap}



Use the WAI-ARIA `aria-label` attribute to label the region. Consider this approach if the label should not appear visually on the page.

{::nomarkdown}
{% include_cached sidenote.html type="start" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Code" class="example" %}
{:/}

~~~html
<nav aria-label="Main Navigation">
  …
</nav>
~~~

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached sidenote.html type="middle" %}
{:/}

View a [complete code example]({% link _tutorials/page-structure/example.md %}) with regions and labels.

{::nomarkdown}
{% include_cached sidenote.html type="end" %}
{:/}
