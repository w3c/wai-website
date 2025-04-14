---
title: "WCAG2ICT Overview"
lang: en
last_updated: 2024-10-08
description: "Introduces the document: Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)."

permalink: /standards-guidelines/wcag/non-web-ict/
ref: /standards-guidelines/wcag/non-web-ict/

github:
  label: wai-wcag-intro

image: /content-images/wcag/general-social.jpg
footer: >
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Contributors: Mary Jo Mueller, Judy Brewer, and Daniel Montalvo.</p>
  <p>Developed with input from the <a href="https://www.w3.org/groups/tf/wcag2ict/">WCAG2ICT Task Force</a> and the Education and Outreach Working Group (<a href="https://www.w3.org/groups/wg/eowg/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces the document "Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)". It describes how Web Content Accessibility Guidelines (WCAG) principles, guidelines, and success criteria can be applied to non-web ICT, specifically to non-web documents and software. The document covers WCAG 2.0, 2.1, and 2.2.

Quick link:
* [Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://www.w3.org/TR/wcag2ict-22/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction {#intro}

<cite>Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)</cite> describes how the Web Content Accessibility Guidelines (WCAG) can be applied to non-web information and communications technologies (ICT), including documents and software. WCAG2ICT is a W3C Group Note that provides informative guidance (not normative requirements).

WCAG2ICT supports harmonized accessibility solutions across a range of technologies. WCAG2ICT has been a key resource for including WCAG in ICT accessibility regulation, legislation, and standards around the world.

*Background:* **WCAG 2.0** is a normative web standard — it is a W3C Recommendation and an ISO International Standard ([ISO/IEC 40500:2012](https://www.w3.org/QA/2012/10/wcag_20_is_now_also_isoiec_405.html)) — that explains how to make web content (including static web pages, dynamic web applications, etc.) more accessible to people with disabilities. WCAG 2.1 was published in 2018 and **WCAG 2.2** was published in 2023. The [WCAG Overview](/standards-guidelines/wcag/) introduces the WCAG documents and links to supporting resources such as [[WCAG 2.0 at a Glance]](/standards-guidelines/wcag/20/glance/) and [How to Meet WCAG 2 (Quick Reference)](https://www.w3.org/WAI/WCAG20/quickref/).

*This document:* **WCAG2ICT** is a W3C Group Note that is informative — it is not normative and does not set requirements. It provides guidance on the application of WCAG 2 principles, guidelines, and success criteria to non-web documents and software. WCAG2ICT was developed to provide an authoritative interpretation of how WCAG 2 can apply in different contexts. For information on the scope of WCAG2ICT, see the [Introduction section of WCAG2ICT](https://www.w3.org/TR/wcag2ict/#intro).

*Scope*: WCAG2ICT does not include techniques for how to meet WCAG success criteria in specific technologies. More information is in the [Excluded from Scope section](https://www.w3.org/TR/wcag2ict-22/#excluded-from-scope).

### Versions
* [Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://www.w3.org/TR/wcag2ict-22/) was published 8 October 2024 and covers WCAG 2.0, 2.1, and 2.2
* older version: [Guidance on Applying WCAG 2.0 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://www.w3.org/TR/wcag2ict-20/) was published 5 September 2013 and covers WCAG 2.0
* The URI [https://www.w3.org/TR/wcag2ict/](https://www.w3.org/TR/wcag2ict/) points to the latest completed version

## Who WCAG2ICT is for {#for}

WCAG2ICT is for ICT managers, ICT developers, policy makers, and others wanting to understand how WCAG 2 can be applied to non-web documents and software.

## What is in WCAG2ICT {#whatis}

WCAG2ICT provides:

-   **Overall context** for applying WCAG 2 to non-web documents and software.
-   **Guidance on applying the WCAG principles, guidelines, and Levels A and AA success criteria** to non-web documents and software.
-   **Key Terms** related to applying WCAG 2 to non-web documents and software.
-   **Comments on the definitions** in the WCAG 2 Glossary.
-   **Comments on conformance**.
-   **Background information** on some topics.

WCAG2ICT includes material from the WCAG 2 standard to provide context, along with specific guidance related to non-web ICT, formatted as follows:

-   **WCAG 2 principles, guidelines, and success criteria** — the exact text from the WCAG 2 standard. *These are quoted fragments, visually styled in pale yellow boxes.*
-   **Guidance on applying each success criteria to non-web documents and software**. *These are visually styled in pale blue boxes with a heading on a dark blue background that starts with "Applying ...".*

### Technical document format

WCAG2ICT follows the [W3C](https://www.w3.org) format for technical reports, which has several sections at the beginning, including links to different versions, editors, abstract, and status.

## Who develops WCAG2ICT {#wg}

WCAG2ICT is developed by the [WCAG2ICT Task Force](https://www.w3.org/WAI/GL/WCAG2ICT-TF/), provided for public review, and approved by the Accessibility Guidelines Working Group ([AG WG](https://www.w3.org/WAI/GL/)), which is part of the World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)).

### Comments

**If you have any comments on the Additional Guidance sections of WCAG2ICT**, you can [open a new GitHub issue](https://github.com/w3c/wcag2ict/issues/new). It is free to create a GitHub account. Please open a separate GitHub issue for each topic, rather than commenting on multiple topics in a single issue.

If it is not feasible for you to use GitHub, you can put your comments in the body of an e-mail message and send them to: <public-wcag2ict-comments@w3.org>.

**If you have comments on the wording taken from WCAG 2 or Understanding WCAG 2**, please read the [[Instructions for Commenting on WCAG 2 Documents]](/standards-guidelines/wcag/commenting/).
