---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Essential Components of Web Accessibility
nav_title: "Components of Web Accessibility" # A short title that is used in the navigation
lang: en   # Change "en" to the translated language shortcode
last_updated: 2024-03-14   # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-components

permalink: /fundamentals/components/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/components/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>
    <strong>Permission to use:</strong> 
    You may use the images on this page for accessibility education and outreach if you:<br> 
    1. Include the URI <strong><span class="changed">w3.org/WAI/fundamentals/components/</span> <em>prominently</em></strong> near the image, and <br>
    2. Include the artist credit, editor, and copyright reference in any published or posted material:<br>
    <cite>Image by Michael Duffy, from: Essential Components of Web  Accessibility. S.L. Henry, ed. Copyright W3C <sup>®</sup> (MIT, ERCIM, Keio, Beihang). w3.org/WAI/fundamentals/components/</cite><br>
    For more information, see <a href="https://www.w3.org/WAI/about/using-wai-material/">Using WAI Materials</a>.
  </p>
  <p><strong>Date: </strong>Updated 14 March 2024.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. Graphic artist: Michael Duffy.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page shows how web accessibility depends on several components working together, and how improvements in specific components could substantially improve web accessibility.

It provides the foundation for understanding the different accessibility standards developed by the <abbr title="World Wide Web Consortium">W3C</abbr> Web Accessibility Initiative (WAI).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

- This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction {#intro}
{:.no_toc}

It is essential that several different components of web development and interaction work together in order for the web to be accessible to people with disabilities. These components include:

- **content** - the information in a web page or web application, including:
  - natural information such as text, images, and sounds
  - code or markup that defines structure, presentation, etc.
- **web browsers, media players**, and other "user agents"
- **assistive technology**, in some cases - screen readers, alternative keyboards, switches, scanning software, etc.
- **users**' knowledge, experiences, and in some cases, adaptive strategies using the web
- **developers** - designers, coders, authors, etc., including developers with disabilities and users who contribute content
- **authoring tools** - software that creates websites
- **evaluation tools** - web accessibility evaluation tools, HTML validators, CSS validators, etc.

## How the Components Relate {#relate}

{% assign longdesc_url = "/fundamentals/components/examples/#relate" | relative_url %}
{% include image.html src="components/relate.png" alt="Illustration showing how components relate" longdesc=longdesc_url %}

Web **developers** usually use **authoring tools** and evaluation tools to create web **content**.

**People** ("**users**") use web **browsers, media players, assistive technologies,** or other "**user agents**" to get and interact with the **content**.

## Interdependencies Between Components {#depend}

There are significant interdependencies between the components; that is, the components must work together in order for the web to be accessible. For example, for alternative text on images:

- **technical specifications** address alternative text (for example, HTML defines the alternative text attribute (`alt`) of the image element (`img`))
- **WAI guidelines** ([WCAG, ATAG, UAAG described below](#guidelines)) - define how to implement alternative text for accessibility in the different components
- **developers** provide the appropriate alternative text wording
- **authoring tools** enable, facilitate, and promote providing alternative text in a web page
- **evaluation tools** are used to help check that alternative text exists
- **user agents** provide human and machine interface to the alternative text
- **assistive technologies** provide human interface to the alternative text in various modalities
- **users** know how to get the alternative text from their user agent and/or assistive technology as needed

### The Implementation Cycle

When accessibility features are effectively implemented in one component, the other components are more likely to implement them.

{% include image.html src="components/cycle.png" alt="" %}

- When **web browsers, media players, assistive technologies, and other user agents** support an accessibility feature, users are more likely to demand it and developers are more likely to implement it in their **content**.
- When developers want to implement an accessibility feature in their **content**, they are more likely to demand that their **authoring tool** make it easy to implement.
- When **authoring tools** make a feature easy to implement, developers are more likely to implement it in their **content**.
- When an accessibility feature is implemented in **most content**, developers and users are more likely to demand that **user agents** support it.

### When One Component is Weak

If an accessibility feature is not implemented in one component, there is little motivation for the other components to implement it when it does not result in an accessible user experience. For example, developers are unlikely to implement an accessibility feature that authoring tools do not support and that most browsers or assistive technologies do not implement consistently.

{% assign longdesc_url = "/fundamentals/components/examples/#weak" | relative_url %}
{% include image.html src="components/bridge.png" alt="Illustration of what happens when one component is weak" longdesc=longdesc_url %}

If one component has poor accessibility support, sometimes other components can compensate through "work-arounds" that require much more effort and are not good for accessibility overall. For example,

- developers can do more work to compensate for some lack of accessibility support in authoring tools; for example, coding markup directly instead of through a tool
- users can do more work to compensate for some lack of accessibility support in browsers, media players, and assistive technology and lack of accessibility of content; for example, using different browsers or assistive technologies to overcome different accessibility issues

However, in most cases the works-arounds are not implemented and the result is still poor accessibility. Additionally, sometimes poor accessibility support in one component cannot be reasonably overcome by other components and the result is inaccessibility, making it impossible for some people with disabilities to use a particular website, page, or feature.

## Guidelines and Other Standards {#guidelines}

The World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)) develops **web accessibility standards** for the different components:

- [[Authoring Tool Accessibility Guidelines (ATAG)]](/standards-guidelines/atag/) addresses authoring tools
- [[Web Content Accessibility Guidelines (WCAG)]](/standards-guidelines/wcag/) addresses web content, and is used by developers, authoring tools, and accessibility evaluation tools
- [[User Agent Accessibility Guidelines (UAAG)]](/standards-guidelines/uaag/) addresses web browsers and media players, including some aspects of assistive technologies


These accessibility guidelines are based on the fundamental technical specifications of the web, and are developed in coordination with all <a href="https://www.w3.org/TR/">W3C technical specifications</a> (HTML, CSS, SVG, SMIL, etc.). W3C also develops technical specifications that directly address accessibility, including:

* [ARIA, the Accessible Rich Internet Applications](/standards-guidelines/aria/) Suite, which defines a way to make web applications more accessible to people with disabilities. It especially helps with dynamic content and advanced user interface controls developed with Ajax, HTML, JavaScript, and related technologies.

{% assign longdesc_url = "/fundamentals/components/examples/#guide" | relative_url %}
{% include image.html src="components/specs.png" alt="Illustration showing the guidelines for the different components" longdesc=longdesc_url %}

For more information, see [[W3C Accessibility Standards Overview]](/standards-guidelines/).
