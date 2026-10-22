---
title: "Images for pure decoration"
permalink: /tutorials/images/pure-decoration/
ref: /tutorials/images/pure-decoration/
lang: en
description:
image: /content-images/tutorials/images/social.png
github:
  label: wai-tutorials

resource:
  ref: /tutorials/images/
navigation:
  previous: /tutorials/images/informative/
  next: /tutorials/images/functional/

wcag_techniques:
- H2
- H67

metafooter: true
last_updated: 2026-10-10
editors:
  - Eric Eggert: "https://www.w3.org/People/yatil/"
  - Shadi Abou-Zahra: "https://www.w3.org/People/shadi/"
contributing_participants:
  - see <a href="/WAI/tutorials/acknowledgements/">Acknowledgements</a>
support: Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/groups/wg/eowg">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/ACT/">WAI-ACT project</a>, co-funded by the <strong>European Commission <abbr title="Information Society Technologies">IST</abbr> Programme</strong>.
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Overview" class="full" %}
{:/}

Images that don’t add information to the content of a page are pure decoration. Pure decoration images are only included to make the website more visually attractive. If a pure decoration image is unavailable, the content and feel of the site would not change drastically.

In these cases, an empty `alt` attribute should be provided (`alt=""`). Images that use such a "null alt" are then ignored by assistive technologies, such as screen readers. Non-empty values for these types of images add audible clutter to screen reader output. Leaving out the `alt` attribute is also not an option because when it is not provided, some screen readers will announce the file name of the image instead.

Whether to treat an image as pure decoration or [informative](/tutorials/images/informative/) can be made based on the reason for including the image on the page. Images are pure decoration when they are:

-   Visual styling such as borders, spacers, and corners;
-   Supplementary to link text to improve its appearance or increase the clickable area;
-   Illustrative of adjacent text but not contributing information (“eye-candy”);
-   Identified and described by surrounding text.

The examples below show how to use the `alt` attribute when pure decoration images are provided using the `<img>` element. Many of the usecases of pure decoration images should be covered by other technologies, including background images or CSS borders and shadows.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include_cached toc.html %}

## **Example 1:** Image used as part of page design

This image is used as a border in the page design and has a purely
decorative purpose.

{::nomarkdown}
{% include box.html type="start" title="Example" class="example" %}
{:/}

![]({{ "/content-images/tutorials/images/topinfo_bg.png" | relative_url }})

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~ html
<img src="topinfo_bg.png" alt="">
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Screen readers also allow the use of ARIA to hide elements by using `aria-hidden="true"`. However, there is no advantage using ARIA instead of using the empty `alt` attribute.

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~ html
<img src="topinfo_bg.png" aria-hidden="true">
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Note" class="simple note" %}
{:/}

If the image was used to indicate a thematic break, e.g. a scene change in a story, or a transition to another topic, using the `<hr>` element would be appropriate to notify assistive technology.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## **Example 2:** Redundant image as part of a text link

This illustration of a crocus bulb is used to make the link easier to identify and to increase the clickable area but doesn’t add to the information already provided in the adjacent link text (of the same link). In this case, use an empty `alt` attribute for the image.

{::nomarkdown}
{% include box.html type="start" title="Example" class="example" %}
{:/}

[![]({{ "/content-images/tutorials/images/crocus.jpg" | relative_url }}){:style="vertical-align: middle; margin-right: 1em;"}**Crocus bulbs**]({{ "/example-link/" | relative_url }})

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~ html
<a href="crocuspage.html">
  <img src="crocus.jpg" alt="">
  <strong> Crocus bulbs</strong>
</a>
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## **Example 3:** Image used for ambiance (eye-candy)

This image is used only to add ambiance or visual interest to the page.

{::nomarkdown}
{% include box.html type="start" title="Example" class="example" %}
{:/}

![]({{ "/content-images/tutorials/images/kew.jpg" | relative_url }}){:style="float:left; margin-right: 1em;"} Don’t miss the impressive Tropical House – a huge greenhouse that displays examples of exotic plant-life from every tropical environment on the planet.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Code" class="example" %}
{:/}

~~~ html
<img src="tropical.jpg" alt="">
~~~

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Note" class="simple note" %}
{:/}

If the purpose of this image was to identify a plant or convey other information, rather than just to improve the look of the page, it must be treated as [informative](/tutorials/images/informative/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
