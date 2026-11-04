---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Authoring Tool Accessibility Guidelines (ATAG) Overview"
nav_title: "ATAG Overview"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2026-11-04   # Keep the date of the English version
first_published: "July 2005"
doc-note-type: draft

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
  <!-- <p>Developed with input from the Authoring Tool Accessibility Working Group (<a href="https://www.w3.org/WAI/AU/">AUWG</a>).</p> -->
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces the Authoring Tool Accessibility Guidelines (ATAG) web standard.

Please share this page as the starting point for official information about ATAG now and in the future.\
Short link: w3.org/WAI/atag/
<!-- TODO: Create shortlink -->

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

## [Introduction | What is WCAG]

Authoring Tools Accessibility Guidelines (ATAG) is a global web standard.

ATAG explains how to:
- make authoring tools accessible, so that people with disabilities can create web content, ***and***
- help authors create more accessible web content — specifically: enable, support, and promote the production of content that conforms to Web Content Accessibility Guidelines (WCAG).

Authoring tools are software and services that "authors" (web developers, designers, writers, etc.) use to produce web content (static web pages, dynamic web applications, etc.). Examples of authoring tools are listed under "[Who ATAG is for](#who-atag-is-for)".

The current standard is [**ATAG 2.0**](https://www.w3.org/TR/ATAG20/), which is a [W3C Recommendation](https://www.w3.org/standards/types/#x5-1-recommendation). W3C recommends its wide adoption.

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

### Structure

ATAG has two main parts:
-   Part A is about making the authoring tool itself accessible.
-   Part B is about the authoring tool helping authors produce accessible content.

[[**ATAG at a Glance**]](/standards-guidelines/atag/glance/) provides a short summary of the accessibility principles and guidelines in ATAG.

ATAG is organized in layers:
-   **Principles** provide high-level organization for the guidelines.
-   **Guidelines** provide the framework and objectives for the success criteria.
-   **Success criteria are the accessibility requirements**, which are written as testable statements, at [three levels](https://www.w3.org/TR/ATAG20/#intro_understand_levels_conformance): A, AA, AAA.

### Relationship to Web Content Accessibility Guidelines (WCAG)

ATAG is part of a series of accessibility guidelines, including Web Content Accessibility Guidelines ([WCAG](/standards-guidelines/wcag/)) and User Agent Accessibility Guidelines ([UAAG](/standards-guidelines/uaag/)). [Essential Components of Web Accessibility](/fundamentals/components/) explains the relationship between the different guidelines.

ATAG includes references to WCAG when setting requirements for:
- the accessibility of web-based authoring tool user interfaces
- how tools should support authors toward producting accessible content.

ATAG 2.0 refers to WCAG 2.0 because it was the current version at the time of publishing. Today, **we encourage you to use the latest version of [WCAG 2](/standards-guidelines/wcag/)**.

## [ATAG resources | Resources | Supporting resources]

[**Implementing ATAG 2.0**](https://www.w3.org/TR/IMPLEMENTING-ATAG20/) 
: Helps readers understand and use ATAG. This informative document provides the rationale for each guideline. For each success criterion, it provides explanation of the intent of the success criteria, examples, and links to resources.

[**ATAG Report Tool**](https://www.w3.org/WAI/atag/report-tool/)
: Helps evaluators report on the accessibility of authoring tools. It guides you through the ATAG requirements, lets you record your evaluation results for each requirement, and generates a report of the authoring tool's ATAG conformance.

[**Authoring Tools List**](https://www.w3.org/WAI/tools-list/authoring/)
: Provides information on accessibility support in content management systems (CMS), learning management systems (LMS), web page editors, and other authoring tools.

The following resources introduce accessibility issues and how ATAG applies to specific types of tools:
  * [[Standards to Make Your LMS Accessible]](/standards-guidelines/atag/education/)
  * [[Guidelines to Make Your No-Code Website Tool Accessible]](/standards-guidelines/atag/no-code/)
  * [[Guidelines to Make Your Social Media Platform Accessible]](/standards-guidelines/atag/social-media/)

## Translations

ATAG 2.0 is available as an Authorized W3C Translation in Simplified Chinese: [无障碍创作工具指南(ATAG) 2.0](https://www.w3.org/Translations/ATAG20-zh/).

## Who developed ATAG

ATAG was developed by the Authoring Tool Accessibility Guidelines Working Group ([ATAG WG](https://www.w3.org/WAI/AU/)) as part of the World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)).

## [Development | Current development | Future development | Future ATAG updates]

The [Authoring Tools Accessibility Guidelines (ATAG) Community Group (CG)](https://www.w3.org/community/atag/) is exploring updating ATAG.

For information on contributing to WAI work, see [[Participating in WAI]](/about/participating/).