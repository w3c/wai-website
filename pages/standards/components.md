---
title: Essential Components of Web Accessibility
permalink: /standards/web-accessibility-components/
---

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

<p>This page shows how web accessibility depends on several components working together, and how improvements in specific components could substantially improve web accessibility.</p>
<p>It provides the foundation for understanding the different accessibility standards develop by the <abbr title="World Wide Web Consortium">W3C</abbr> Web Accessibility Initiative (WAI). W3C's web standards are called <em>W3C Recommendations</em>. WAI's <em><strong>accessibility guidelines</strong></em> that are W3C Recommendations are international web standards.</p>

Introduction {#intro}
----------------------
{:.no_toc}

It is essential that several different components of Web development and
interaction work together in order for the Web to be accessible to
people with disabilities. These components include:

-   **content** - the information in a Web page or Web application,
    including:
    -   natural information such as text, images, and sounds
    -   code or markup that defines structure, presentation, etc.
-   **Web browsers, media players**, and other "user agents"
-   **assistive technology**, in some cases - screen readers,
    alternative keyboards, switches, scanning software, etc.
-   **users**' knowledge, experiences, and in some cases, adaptive
    strategies using the Web
-   **developers** - designers, coders, authors, etc., including
    developers with disabilities and users who contribute content
-   **authoring tools** - software that creates Web sites
-   **evaluation tools** - Web accessibility evaluation tools, HTML
    validators, CSS validators, etc.

How the Components Relate {#relate}
------------------------------------

![illustration showing how components relate, detailed description at http://www.w3.org/WAI/intro/components-desc.html#relate](images/relate.png)

Web **developers** usually use **authoring tools** and evaluation tools
to create Web **content**.

**People** ("**users**") use Web **browsers, media players, assistive
technologies,** or other "**user agents**" to get and interact with the
**content**.

Interdependencies Between Components {#depend}
-----------------------------------------------

There are significant interdependencies between the components; that is,
the components must work together in order for the Web to be accessible.
For example, for alternative text on images:

-   **Technical specifications** address alternative text (for example,
    HTML defines the alternative text attribute (alt) of the image
    element (img))
-   **WAI guidelines** - WCAG, ATAG, and UAAG, [described
    below](#guidelines) - define how to implement alternative text for
    accessibility in the different components
-   **Developers** provide the appropriate alternative text wording
-   **Authoring tools** enable, facilitate, and promote providing
    alternative text in a Web page
-   **Evaluation tools** are used to help check that alternative text
    exists
-   **User agents** provide human and machine interface to the
    alternative text
-   **Assistive technologies** provide human interface to the
    alternative text in various modalities
-   **Users** know how to get the alternative text from their user agent
    and/or assistive technology as needed

### The Implementation Cycle

When accessibility features are effectively implemented in one
component, the other components are more likely to implement them.

![illustration of implementation cycle, detailed description at http://www.w3.org/WAI/intro/components-desc.html#cycle](images/cycle.png)

-   When **Web browsers, media players, assistive technologies, and
    other user agents** support an accessibility feature, users are more
    likely to demand it and developers are more likely to implement it
    in their **content**.
-   When developers want to implement an accessibility feature in their
    **content**, they are more likely to demand that their **authoring
    tool** make it easy to implement.
-   When **authoring tools** make a feature easy to implement,
    developers are more likely to implement it in their **content**.
-   When an accessibility feature is implemented in **most content**,
    developers and users are more likely to demand that **user agents**
    support it.

### When One Component is Weak

If an accessibility feature is not implemented in one component, there
is little motivation for the other components to implement it when it
does not result in an accessible user experience. For example,
developers are unlikely to implement an accessibility feature that
authoring tools do not support and that most browsers or assistive
technologies do not implement consistently.

![illustration of what happens when one component is weak, detailed
description at http://www.w3.org/WAI/intro/components-desc.html#weak](images/bridge.png)

If one component has poor accessibility support, sometimes other
components can compensate through "work-arounds" that require much more
effort and are not good for accessibility overall. For example,

-   developers can do more work to compensate for some lack of
    accessibility support in authoring tools; for example, coding markup
    directly instead of through a tool
-   users can do more work to compensate for some lack of accessibility
    support in browsers, media players, and assistive technology and
    lack of accessibility of content; for example, using different
    browsers or assistive technologies to overcome different
    accessibility issues

However, in most cases the works-arounds are not implemented and the
result is still poor accessibility. Additionally, sometimes poor
accessibility support in one component cannot be reasonably overcome by
other components and the result is inaccessibility, making it impossible
for some people with disabilities to use a particular Web site, page, or
feature.

Guidelines and Other Standards {#guidelines}
--------------------------------------------------

The World Wide Web Consortium ([W3C](/)) Web Accessibility Initiative
([WAI](/WAI/)) develops **Web accessibility standards** for the
different components:

-   [Authoring Tool Accessibility Guidelines (**ATAG**)](atag.php)
    addresses authoring tools
-   [Web Content Accessibility Guidelines (**WCAG**)](wcag.php)
    addresses Web content, and is used by developers, authoring tools,
    and accessibility evaluation tools
-   [User Agent Accessibility Guidelines (**UAAG**)](uaag.php) addresses
    Web browsers and media players, including some aspects of assistive
    technologies

<p>These accessibility guidelines are based on the fundamental technical specifications of the Web, and are developed in coordination with all <a href="https://www.w3.org/TR/">W3C technical specifications</a> (HTML, XML, CSS, SVG, SMIL, etc.). W3C also develops technical specifications that directly address accessibility, including:</p>
<ul>
  <li><a href="https://w3c.github.io/wai-website/standards/aria/">ARIA, the Accessible Rich Internet Applications</a> Suite, which defines a way to make web applications more accessible to people with disabilities. It especially helps with dynamic content and advanced user interface controls developed with Ajax, HTML, JavaScript, and related technologies.</li>
  <li><a href="https://www.w3.org/TR/ttml1/">Timed Text Markup Language</a></li>
  <li><a href="https://www.w3.org/TR/webvtt1/">WebVTT: The Web Video Text Tracks Format</a></li>
  <li>@@...</li>
</ul>

![illustration showing the guidelines for the different components, detailed description at http://www.w3.org/WAI/intro/components-desc.html#guide](images/specs.png)

