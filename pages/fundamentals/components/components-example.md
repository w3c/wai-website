---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Descriptions of Essential Components of Web Accessibility Illustrations
nav_title: Illustration Descriptions
lang: en  # Change "en" to the translated language shortcode
last_updated: 2024-03-14  # Keep the date of the English version
parent: /fundamentals/components/ # Do not change this

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-components

permalink: /fundamentals/components/examples/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/components/examples/ # Do not change this
---

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

This page describes the illustrations in the “[[Essential Components of Web Accessibility]](/fundamentals/components/)” document and the [Essential Components of Web Accessibility Slides](https://www.w3.org/WAI/intro/components-slides).

## How the Components Relate Illustration Description {#relate}

{% include image.html src="components/relate.png" alt="Illustration showing how components relate" %}

Illustration with labeled graphics of boxes, content, and people. at the top center is a pie chart, an image, a form, and text, labeled “content”. coming up from the bottom left, a line connects “developers” through “authoring tools” and “evaluation tools” to “content” at the top. coming up from the bottom right, a line connects “users” to “browsers, media players” and “assistive technologies” to “content” at the top.

## When One Component is Weak Illustration Description {#weak}

{% include image.html src="components/bridge.png" alt="Illustration of what happens when one component is weak" %}

Illustration with labeled graphics of boxes, content, and people. at the top center is a pie chart, an image, a form, and text, labeled “content”. coming up from the bottom left, a line connects “developers” to “content” at the top by going around “authoring tools”. coming up from the bottom right, a line connects “users” and “content” at the top by going through multiple “browsers, media players” and “assistive technologies”.

## Guidelines for Different Components Illustration Description {#guide}

{% include image.html src="components/specs.png" alt="Illustration showing the guidelines for the different components" %}

Illustration with labeled graphics of boxes, content, and people. at the top center is a pie chart, an image, a form, and text, labeled “content”. coming up from the bottom left, a line connects “developers” through “authoring tools” and “evaluation tools” to “content” at the top. coming up from the bottom right, an arrow connects “users” to “browsers, media players” and “assistive technologies” to “content” at the top. below these are “accessibility guidelines” which include “ATAG” with an arrow pointing to “authoring tools” and “evaluation tools”, “WCAG” pointing to “content”, and “UAAG” pointing to “browsers, media players” and “assistive technologies”. at the very bottom, “technical specifications (HTML, ARIA, CSS, SVG, SMIL, etc.)” forms a base with an arrow pointing up to the accessibility guidelines.

{% comment %}

@@ commenting out - image was used in presentation that is not on new site - leaving here in case we want to resurrect it in the future. @@

## Interdependencies Between Components, Example Illustration Description {#example-alt}

{% include image.html src="components/relate-example.jpg" alt="Illustration showing examples of how components relate" %}

Illustration with labeled graphics of boxes, content, and people. at the top center "content" and underneath it is a logo and a box with: `<img src="WAI-logo.png" alt="Web Accessibility Initiative logo">`. coming up from the bottom left, a line connects “developers” through “authoring tools” and “evaluation tools” to “content” at the top. between the “developer” and “authoring tools” is a dialog box titled: Image Tag Accessibility Attributes, a field titled: Alternative Text filled in with: Web Accessibility Initiative logo. coming up from the bottom right, a line connects “users” to “browsers, media players” and “assistive technologies” to “content” at the top. just up from the “user” is a speech bubble saying: Web Accessibility Initiative logo and a yellow box with: Web Accessibility Initiative logo. at the bottom is: `1.1 Provide a text equivalent for every non-text element` 

{% endcomment %}
