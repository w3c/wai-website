---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: W3C Accessibility Standards Overview
nav_title: "Standards/Guidelines" # A short title that is used in the navigation
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-02-29   # Keep the date of the English version

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-standards-guidelines

permalink: /standards-guidelines/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates

# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces guidelines and other standards related to web accessibility.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction {#intro}

The World Wide Web Consortium (W3C) develops international Web standards: <abbr title="Hypertext Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>, and many more. W3C's Web standards are called <dfn>W3C Recommendations</dfn>.

All W3C standards are reviewed for accessibility support by the Accessible Platform Architectures ([APA](/about/groups/apawg/)) Working Group.

The W3C standards and Working Group Notes introduced below are particularly relevant to accessibility.

## Accessibility Guidelines {#guidelines}

[[Essential Components of Web Accessibility]](/fundamentals/components/) shows how web accessibility depends on several components of web development and interaction working together, and how the WAI guidelines (WCAG, ATAG, UAAG) apply.

### Web Content Accessibility Guidelines (WCAG) 2 {#wcag2}

Web "content" generally refers to the information in a web page or web application, including:

* natural information such as text, images, and sounds
* code or markup that defines structure, presentation, etc.

WCAG applies to dynamic content, multimedia, "mobile", etc. WCAG can also be applied to non-web information and communications technologies (ICT), as described in [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/).

WCAG 2 info:
- [WCAG Overview](/standards-guidelines/wcag/)
- [[WCAG 2 at a Glance]](/standards-guidelines/wcag/glance/)
- [How to Meet WCAG 2 (Quick Reference)](https://www.w3.org/WAI/WCAG22/quickref/)
- [[WCAG 2 Translations]](/standards-guidelines/wcag/translations/)
- [WCAG 2.2 Standard](https://www.w3.org/TR/WCAG22/), [[What's New in WCAG 2.2]](/standards-guidelines/wcag/new-in-22/)
- [WCAG 2.1 Standard](https://www.w3.org/TR/WCAG21/), [[What’s New in WCAG 2.1]](/standards-guidelines/wcag/new-in-21/)
- [WCAG 2.0 Standard](https://www.w3.org/TR/WCAG20/)

### Authoring Tool Accessibility Guidelines (ATAG) {#atag}

Authoring tools are software and services that "authors" (web developers, designers, writers, etc.) use to produce web content. For example: HTML editors, content management systems (CMS), and websites that let users add content, such as blogs and social networking sites. ATAG documents explain how to:
* make the authoring tools themselves accessible, so that people with disabilities can create web content, and
* help authors create more accessible web content.

ATAG info:
- [ATAG Overview](/standards-guidelines/atag/)
- [[ATAG at a Glance]](/standards-guidelines/atag/glance/)
- [ATAG 2.0 Standard](https://www.w3.org/TR/ATAG/)

### User Agent Accessibility Guidelines (UAAG) {#uaag}

User agents include browsers, browser extensions, media players, readers, and other applications that render web content.

UAAG info:
- [UAAG Overview](/standards-guidelines/uaag/)
- [UAAG 2.0 Note](https://www.w3.org/TR/UAAG20/)

### W3C Accessibility Guidelines (WCAG) 3 Working Draft {#wcag3}

WCAG 3 is an early draft that is intended to become a W3C Standard. WCAG 3 applies to web content, apps, tools, publishing, and emerging technologies on the web.

WCAG 3 info:
- [[WCAG 3 Introduction]](/standards-guidelines/wcag/wcag3-intro/)

## Technical Specifications

### Accessible Rich Internet Applications (WAI-ARIA) {#aria}

ARIA provides semantics so authors can convey user interface behaviors and structural information to assistive technologies (such as screen readers). The ARIA specification provides an ontology of roles, states, and properties that define accessible user interface elements.

The ARIA suite includes <abbr title="application programming interface">API</abbr> mapping specifications that provide user agent implementation guidance. It also include modules for Graphics and Digital Publishing.

ARIA info:
- [WAI-ARIA Overview](/standards-guidelines/aria/) – includes a [list and description of modules and API mappings](/standards-guidelines/aria/#versions)
- [WAI-ARIA Authoring Practices](https://www.w3.org/TR/wai-aria-practices/)
- [WAI-ARIA 1.2 Standard](https://www.w3.org/TR/wai-aria-1.2/)

### Audio and Video {#multimedia}

- [WebVTT: The Web Video Text Tracks Format](https://www.w3.org/TR/webvtt/) is a format for captions, text video descriptions, and other metadata that is time-aligned with audio or video content.

- [Timed Text Markup Language (TTML)](https://www.w3.org/TR/ttml/) is intended to be used for transcoding or exchanging timed text information among legacy distribution content formats for subtitling and captioning.

### Evaluation {#eval}

The following resources support development of accessibility evaluation methods and tools:

- [[Accessibility Conformance Testing (ACT) Overview]](/standards-guidelines/act/) &mdash; ACT establishes and documents rules for testing the conformance of web content to accessibility standards. The [WCAG 2 Test Rules](/standards-guidelines/act/rules/about/) use the ACT rules format.

- [[Evaluation and Report Language (EARL) Overview]](/standards-guidelines/earl/) &mdash; EARL is a machine-readable format for expressing test results.

Additional resources related to evaluation are listed in the [[Evaluating Web Accessibility Overview]](/test-evaluate/), including:

- [[WCAG-EM Overview: Website Accessibility Conformance Evaluation Methodology]](/test-evaluate/conformance/wcag-em/) &mdash; WCAG-EM is an approach for determining how well a website conforms to Web Content Accessibility Guidelines (WCAG).

### WAI-Adapt

[[WAI-Adapt Overview]](/adapt/) &mdash; WAI-Adapt enables users to adapt (or ‘personalize’) how content is presented to meet their needs and preferences. Content authors can use WAI-Adapt standards to provide a default design and enable user adaptation with minimal work.

### Pronunciation

[[Pronunciation Overview]](/pronunciation/) &mdash; Pronunciation is about screen readers and other text-to-speech (TTS) synthesis pronouncing content properly.

## Other Areas of W3C WAI work

- [[Mobile Accessibility at W3C]](/standards-guidelines/mobile/)

- [[Cognitive Accessibility at W3C]](/cognitive/)

## Additional Information {#moreinfo}

- [List of all W3C accessibility-related Standards ("W3C Recommendations") and Working Group Notes](https://www.w3.org/TR/?tag=accessibility)

- [[Web Accessibility Laws & Policies]](/policies/) lists governmental laws and policies relating to web accessibility in countries and regions around the world. Many of these reference W3C accessibility standards.

- [[Why Standards Harmonization is Essential to Web Accessibility]](/standards-guidelines/harmonization/)

- [[Referencing and Linking to WAI Guidelines and Technical Documents]](/standards-guidelines/linking/)

- [How WAI Develops Accessibility Guidelines through the W3C Process: Milestones and **Opportunities to Contribute**](/standards-guidelines/w3c-process/)

{% assign longdesc_url = "/fundamentals/components/examples/#guide" | relative_url %}
{% include image.html src="components/specs.png" alt="Illustration showing the guidelines for the different components" longdesc=longdesc_url %}