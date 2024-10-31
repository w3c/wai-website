---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Authoring Tool Accessibility Guidelines (ATAG) Overview"
nav_title: "ATAG Overview"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2023-12-07   # Keep the date of the English version
first_published: "July 2005"

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-atag-intro

permalink: /standards-guidelines/atag/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/atag/  # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: |
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/shawn">Shawn Lawton Henry</a>.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) and the Authoring Tool Accessibility Working Group (<a href="https://www.w3.org/WAI/AU/">AUWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces the Authoring Tool Accessibility Guidelines (ATAG) web standard.

Quick links to resources:
* [[ATAG at a Glance]](/standards-guidelines/atag/glance/)
* [ATAG 2.0 Standard](https://www.w3.org/TR/ATAG20/)
* [Implementing ATAG 2.0](https://www.w3.org/TR/IMPLEMENTING-ATAG20/)
* [ATAG Report Tool](https://www.w3.org/WAI/atag/report-tool/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Authoring Tools and ATAG

Authoring tools are software and services that "authors" (web developers, designers, writers, etc.) use to produce web content (static web pages, dynamic web applications, etc.). Examples of authoring tools are listed below under "[Who ATAG is for](#who-atag-is-for)".

Authoring Tool Accessibility Guidelines (ATAG) explains how to:

-   make the authoring tools themselves accessible, so that people with disabilities can create web content, ***and***
-   help authors create more accessible web content — specifically: enable, support, and promote the production of content that conforms to Web Content Accessibility Guidelines ([WCAG](/standards-guidelines/wcag/)).

ATAG is part of a series of accessibility guidelines, including Web Content Accessibility Guidelines (WCAG) and User Agent Accessibility Guidelines (UAAG). [Essential Components of Web Accessibility](/fundamentals/components/) explains the relationship between the different guidelines.

ATAG is relevant today, as it is technology agnostic. ATAG was published in 2015 and references WCAG 2.0. We encourage you to use the latest version of [WCAG 2](https://www.w3.org/TR/WCAG2/).

## Who ATAG is for {#who-atag-is-for}

ATAG is primarily for developers of authoring tools, including the following types of authoring tools:

-   web page authoring tools, for example, what-you-see-is-what-you-get (WYSIWYG) HTML editors
-   software for generating websites, for example, content management systems (CMS) and learning management systems (LMS), courseware tools, content aggregators, no-code website builders
-   software that converts documents to web content technologies, for example, word processors and other office document applications with Save as HTML or EPUB
-   multimedia authoring tools
-   websites that let users add content, such as blogs, wikis, photo sharing sites, online forums, and social networking sites
-   other types of tools listed in the glossary definition of [authoring tools](https://www.w3.org/TR/ATAG20/#def-Authoring-Tool)

ATAG and supporting resources are also intended to meet the needs of many different audiences, including policy makers, managers, and others. For example:

-   People who want to choose authoring tools that are accessible and that produce accessible content can use ATAG to evaluate authoring tools.
-   People who want to encourage their existing authoring tool developer to improve accessibility in future versions can refer the authoring tool vendor to ATAG.

## What is in ATAG

**ATAG** has two main parts:

-   Part A is about making the authoring tool itself accessible.
-   Part B is about the authoring tool helping authors produce accessible content.

[[**ATAG at a Glance**]](/standards-guidelines/atag/glance/) provides a short summary of the accessibility principles and guidelines in ATAG.

**ATAG** is organized in layers:

-   **Principles** provide high-level organization for the guidelines.
-   **Guidelines** provide the framework and objectives for the success criteria.
-   **Success criteria are the accessibility requirements**, which are written as testable statements, at [three levels](https://www.w3.org/TR/ATAG20/#intro_understand_levels_conformance): A, AA, AAA.

[**ATAG 2.0**](https://www.w3.org/TR/ATAG20/) is a _W3C Recommendation_, which is a technical standard.

[**Implementing ATAG 2.0**](https://www.w3.org/TR/IMPLEMENTING-ATAG20/) is a supporting informative document that helps readers understand and use ATAG. Implementing ATAG provides the rationale for each guideline. For each success criterion, it provides explanation of the intent of the success criteria, examples, and links to resources.

## ATAG Report Tool

The [**ATAG Report Tool**](https://www.w3.org/WAI/atag/report-tool/) helps evaluators report on the accessibility of authoring tools. It guides you through the ATAG requirements, lets you record your evaluation results for each requirement, and generates a report of the authoring tool's ATAG conformance.

## Translations

ATAG 2.0 is available as an Authorized W3C Translation in Chinese, Simplified: [无障碍创作工具指南(ATAG) 2.0](https://www.w3.org/Translations/ATAG20-zh/).

## Who developed ATAG

ATAG was developed by the Authoring Tool Accessibility Guidelines Working Group ([ATAG WG](https://www.w3.org/WAI/AU/)) as part of the World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)).

Opportunities for contributing to WAI work is explained in [[Participating in WAI]](/about/participating/).
