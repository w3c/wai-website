---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Authoring Tool Accessibility Guidelines (ATAG) Overview"
nav_title: "ATAG Overview"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2026-11-09   # Keep the date of the English version
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
  <p>Updated with input from the Authoring Tool Accessibility Guidelines Community Group (<a href="https://www.w3.org/groups/cg/atag/">ATAG CG</a>).</p>
  <!-- <p>Developed with input from the Authoring Tool Accessibility Working Group (<a x(href="https://www.w3.org/WAI/AU/">AUWG</a>).</p> -->
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

ATAG is the standard for accessibility support of content management systems (CMS), social media, and other web authoring tools.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


## Background

For background on how authoring tools can help make vast amounts of web content more accessible with less effort, see the blog post:
[The multiplier effect: How authoring tools can transform web accessibility](https://www.w3.org/blog/2026/@@).


## What are authoring tools {#who-atag-is-for}

<!-- leave the {#who-atag-is-for} anchor because we have lots of pointers to it for the list of authoring tools -->

Authoring tools are software and services that "authors" (developers, designers, writers) use to produce web content (web pages, web applications, social media, and more). There are many different types of authoring tools, including:

-   web page authoring tools, for example, what-you-see-is-what-you-get (WYSIWYG) HTML editors
-   software for generating websites, for example, content management systems (CMS) and learning management systems (LMS), courseware tools, content aggregators, no-code website builders
-   software that converts documents to web content technologies, for example, word processors and other office document applications with Save as HTML or EPUB
-   multimedia authoring tools
-   websites that let users add content, such as blogs, wikis, photo sharing sites, online forums, and social networking sites
-   other types of tools listed in the glossary definition of [authoring tools](https://www.w3.org/TR/ATAG20/#def-Authoring-Tool)


## What is ATAG

Authoring Tools Accessibility Guidelines (ATAG) is a global web standard. [ATAG 2.0](https://www.w3.org/TR/ATAG20/) explains how to:
- make authoring tools accessible, so that people with disabilities can create web content, ***and***
- help authors create more accessible web content — specifically: enable, support, and promote the production of content that conforms to Web Content Accessibility Guidelines (WCAG).


## Who ATAG is for

ATAG is primarily for authoring tool developers.

ATAG and supporting resources are also intended to meet the needs of many different audiences, including policy makers, managers, and others. For example:

-   People who want to choose authoring tools that are accessible and that produce accessible content can use ATAG to evaluate authoring tools.
-   People who want to encourage their existing authoring tool developer to improve accessibility in future versions can refer the authoring tool vendor to ATAG.


## What is in ATAG

### Structure

ATAG has two main parts:
-   Part A is about making the authoring tool itself accessible.
-   Part B is about the authoring tool helping authors produce accessible content.

ATAG is organized in layers:
-   **Principles** provide high-level organization for the guidelines.
-   **Guidelines** provide the framework and objectives for the success criteria.
-   **Success criteria are the accessibility requirements**, which are written as testable statements, at three levels: A, AA, AAA.

[[ATAG at a Glance]](/standards-guidelines/atag/glance/) provides a short summary of the accessibility principles and guidelines in ATAG.

### How ATAG 2 is related to WCAG 2

ATAG is part of a series of accessibility guidelines, including Web Content Accessibility Guidelines ([WCAG](/standards-guidelines/wcag/)) and User Agent Accessibility Guidelines ([UAAG](/standards-guidelines/uaag/)). [Essential Components of Web Accessibility](/fundamentals/components/) explains the relationship between the different guidelines.

ATAG includes references to WCAG when setting requirements for:
- the accessibility of web-based authoring tool user interfaces
- how tools should support authors toward producting accessible content.

ATAG 2.0 refers to WCAG 2.0 because it was the current version at the time of publishing. Today, **we encourage you to use the latest version of [WCAG 2](/standards-guidelines/wcag/)**.

## The ATAG documents

[**ATAG at a Glance**](/standards-guidelines/atag/glance/) 
: Provides a short summary of the accessibility principles and guidelines in ATAG.

[**ATAG 2.0**](https://www.w3.org/TR/ATAG20/) 
: Provides a global standard (called a "W3C Reccommendationn").@@spell

[**Implementing ATAG 2.0**](https://www.w3.org/TR/IMPLEMENTING-ATAG20/) 
: Helps readers understand and use ATAG. This informative document provides the rationale for each guideline. For each success criterion, it provides explanation of the intent of the success criteria, examples, and links to resources.

[**ATAG Report Tool**](https://www.w3.org/WAI/atag/report-tool/)
: Helps evaluators report on the accessibility of authoring tools. It guides you through the ATAG requirements, lets you record your evaluation results for each requirement, and generates a report of the authoring tool's ATAG conformance.

[**Authoring Tools List**](https://www.w3.org/WAI/tools-list/authoring/)
: Provides information on accessibility support in content management systems (CMS), learning management systems (LMS), web page editors, and other authoring tools.

**Promotional material**
: Encourages authoring tools to meet ATAG. The following resources introduce accessibility issues and how ATAG applies to specific types of tools. Note that these address just a few of the many types of tools listed above.
  * [[Standards to Make Your LMS Accessible]](/standards-guidelines/atag/education/)
  * [[Guidelines to Make Your No-Code Website Tool Accessible]](/standards-guidelines/atag/no-code/)
  * [[Guidelines to Make Your Social Media Platform Accessible]](/standards-guidelines/atag/social-media/)

## Translations

ATAG 2.0 is available as an Authorized W3C Translation in Simplified Chinese: [无障碍创作工具指南(ATAG) 2.0](https://www.w3.org/Translations/ATAG20-zh/).

## Who develops ATAG

ATAG was developed by the Authoring Tool Accessibility Guidelines Working Group (ATAG WG) as part of the World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)).

In 2026, the ATAG Community Group (CG) and Accessibility Standards Canada (ASC) explored updating ATAG at W3C. In November 2026, W3C staff proposed a new charter for the ATAG Working Group to update ATAG as a joint W3C ASC standard.

Anyone is welcome to join the [ATAG Community Group](https://www.w3.org/community/atag/).

<!-- For more information on contributing to WAI work, see [[Participating in WAI]](/about/participating/). -->

To get notification when ATAG drafts are available for review, [subscribe to get WAI news](https://www.w3.org/WAI/news/subscribe/).
