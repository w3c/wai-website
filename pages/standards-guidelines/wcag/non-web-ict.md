---
title: "WCAG2ICT Overview"
lang: en
last_updated: 2025-08-21
description: "Introduces the W3C Group Note: Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)."

permalink: /standards-guidelines/wcag/non-web-ict/
ref: /standards-guidelines/wcag/non-web-ict/

github:
  label: wai-wcag-intro

image: /content-images/wcag/general-social.jpg
footer: >
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>, Mary Jo Mueller, Chris Loiselle, and <a href="https://www.w3.org/staff/#dmontalvo">Daniel Montalvo</a>. Past contributor: Judy Brewer.</p>
  <p>Developed with the <a href="https://www.w3.org/groups/tf/wcag2ict/">WCAG2ICT Task Force</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

<cite>Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies [(WCAG2ICT)](https://www.w3.org/TR/wcag2ict/)</cite> is a [W3C Group Note](https://www.w3.org/standards/types/#x2-5-2-group-note) that describes how Web Content Accessibility Guidelines (WCAG) principles, guidelines, and success criteria can be applied to documents, software, and other information and communications technologies (ICT).

This page provides an overview of the WCAG2ICT accessibility guidance, its purpose, who it is for, what it does and does *not* do, and how to comment on WCAG2ICT.

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

WCAG2ICT provides guidance that describes how WCAG 2.0, 2.1, and 2.2 (WCAG 2) criteria can be applied to non-web documents and software — including mobile apps, native applications, platform software, and software on ICT with closed functionality. For specific criteria, the guidance also provides technology-specific explanations that include highlighting difficulties with applying some WCAG 2 success criteria.  This is especially the case where WCAG makes assumptions on the presence of a browser that would not be true for non-web documents and software. Not all ICT have these concepts.

WCAG2ICT guidance is intended to help clarify how to use WCAG 2 to make non-web documents and software more accessible to people with disabilities. Addressing accessibility involves addressing the needs of people with auditory, cognitive, neurological, physical, speech, and visual disabilities, as well as the needs of people with accessibility requirements due to the effects of aging. Although this document covers a wide range of issues, it is not able to address all the needs of all people with disabilities.

WCAG2ICT supports harmonized accessibility solutions across a range of technologies. It has been a key resource for including WCAG in ICT accessibility regulation, legislation, and standards around the world.

## Background

The first version of WCAG2ICT was published in 2013 to address accessibility requirements for non-web ICT. It helped regulatory bodies develop standards (e.g., Section 508 and EN 301 549) to adopt WCAG criteria for non-web documents and software. 

The 2013 version covered WCAG 2.0 Level A and Level AA. The latest version covers WCAG 2 Level A and Level AA.

**Note:** WCAG 2 was developed for the web and not for non-web ICT. This means that fully addressing accessibility for non-web documents and software involves requirements beyond those included in WCAG 2 and WCAG2ICT. For this reason, authors, designers and developers are encouraged to seek other relevant advice about current best practices to ensure that non-web documents and software are as accessible as possible to people with disabilities.

### About WCAG 2

**WCAG 2.0** is a normative web standard — that is, a W3C Recommendation and an ISO International Standard ([ISO/IEC 40500:2012](https://www.w3.org/QA/2012/10/wcag_20_is_now_also_isoiec_405.html)) — that explains how to make web content (including static web pages and dynamic web applications) more accessible to people with disabilities. **WCAG 2.1** was published in 2018 and **WCAG 2.2** was published in 2023. 

For more information on WCAG 2, see:
- [WCAG 2 Overview](https://www.w3.org/WAI/standards-guidelines/wcag/)
- [WCAG 2 at a Glance](https://www.w3.org/WAI/standards-guidelines/wcag/glance/)
- [How to Meet WCAG 2 (Quick Reference)](https://www.w3.org/WAI/WCAG22/quickref/)

## Intent and usage of WCAG2ICT

WCAG2ICT is a [W3C Group Note](https://www.w3.org/standards/types/#x2-5-2-group-note) that is [informative](https://www.w3.org/TR/WCAG22/#dfn-informative) — it is not [normative](https://www.w3.org/TR/WCAG22/#dfn-normative) and does not set requirements. It provides guidance on the application of WCAG 2 principles, guidelines, and success criteria to non-web documents and software. WCAG2ICT was developed to provide an authoritative interpretation of how WCAG 2 can apply in different contexts.

The main focus of WCAG2ICT is to provide replacements for web-based language in WCAG success criteria and definitions. It also provides insights into where WCAG criteria may make assumptions of the presence and functionality of a user agent and assistive technology when these may not exist. This is because not all non-web software has a user agent or platform software with accessibility <abbr title="application programming interfaces">APIs</abbr> and services, nor do all non-web technologies have or support assistive technology that acts on programmatic information.

While WCAG2ICT provides guidance on applying WCAG in non-web contexts, application of some success criteria to electronic documents, whose source is driven by non-web markup technologies when they are delivered via a website, may benefit from more specific guidance. Likewise, guidance for mobile applications may also benefit from a greater level of detail.  

### WCAG2ICT versions
* [Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://www.w3.org/TR/wcag2ict-22/) — published on 15 November 2024 and covers WCAG 2.0, 2.1, and 2.2
* Older version: [Guidance on Applying WCAG 2.0 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://www.w3.org/TR/wcag2ict-20/) — published on 5 September 2013 and covers WCAG 2.0
* The URI [https://www.w3.org/TR/wcag2ict/](https://www.w3.org/TR/wcag2ict/) — points to the latest completed version

## Who WCAG2ICT is for {#for}

WCAG2ICT is for anyone wanting to understand how WCAG 2 can be applied to non-web documents and software, including:
* accessibility standards organizations — to provide them with the non-web language in WCAG success criteria and definitions, as well as the interpretation notes to help them make adjustments or notes that might be needed when WCAG is applied to specific technologies
* ICT managers who are familiar with WCAG — to enable them to quickly get an overview of using WCAG as an accessibility benchmark for non-web ICT
* technology developers and designers — to provide them with the non-web language substitutions for language in WCAG success criteria, where existing accessibility standards do not contain an interpretation
* policy makers (including regulators when making regulations) — to inform them how WCAG2ICT is being used to influence standards requirements where WCAG is being applied to non-web ICT
* others, including auditors, educators, litigators, and vendors — to help them learn more about digital accessibility

## What is in WCAG2ICT {#whatis}

WCAG2ICT provides:

-   **overall context** for applying WCAG 2 to non-web documents and software
-   **guidance on applying WCAG principles, guidelines, and Levels A and AA success criteria** to non-web documents and software
-   **key terms** related to applying WCAG 2 to non-web documents and software
-   **comments on the definitions** in the WCAG 2 Glossary
-   **comments on conformance**
-   **background information** on some topics

### Technical document format

WCAG2ICT follows the W3C format for technical reports, which has several sections at the beginning, including links to different versions, editors, abstract, and status.

## What WCAG2ICT does not do

WCAG2ICT:
* does not make or help developers determine which WCAG 2 provisions (principles, guidelines, or success criteria) should not be applied to non-web documents and software, or to any particular technology or product
* does not propose changes to WCAG 2 or its supporting documents
* does not address any gaps between WCAG success criteria and the accessibility requirements needed to address non-user interface aspects of platforms, user-interface components as individual items, and closed product software (where there is no assistive technology to communicate programmatic information)
* does not apply WCAG to hardware aspects of products, because WCAG does not apply to hardware
* does not provide techniques for implementing WCAG in any type of technology — web or non-web
* is not a standard and does not describe how non-web ICT should conform to WCAG
* does not incorporate or interpret any of the WCAG supplemental guidance

## Who develops WCAG2ICT {#wg}

WCAG2ICT guidance is developed by the WCAG2ICT Task Force of the Accessibility Guidelines Working Group (AGWG). The Task Force work statement defines the objectives, scope, and approach for WCAG2ICT.

The participants of the WCAG2ICT Task Force are volunteers from W3C Member organizations and invited experts, and they are supported by W3C Web Accessibility Initiative (WAI) staff.

### Comments

To comment on the WCAG2ICT guidance, [open a new GitHub issue](https://github.com/w3c/wcag2ict/issues/new). Please create a separate GitHub issue for each topic, rather than commenting on multiple topics in a single issue. It is free to create a GitHub account.

If it’s not feasible for you to use GitHub, email your comments to: <public-wcag2ict-comments@w3.org>. Please put your comments in the body of the message, not as an attachment.

If you have comments on the wording quoted from WCAG 2 or Understanding WCAG 2, follow the [Instructions for Commenting on WCAG 2 Documents](/standards-guidelines/wcag/commenting/).

## Related documents
W3C WAI resources related to WCAG2ICT:
* [WCAG2ICT Task Force](/about/groups/task-forces/wcag2ict/)
* [WCAG2ICT Task Force Work Statement](/about/groups/task-forces/wcag2ict/work-statement/)
* [Web Accessibility Laws and Policies](/policies/)
* [Web Content Accessibility Guidelines (WCAG) Overview](/standards-guidelines/wcag/)

Though there are many standards that cover non-web software aspects of ICT, the following is a non-exhaustive list of standards and rules that use or reference WCAG2ICT: 
* [Nondiscrimination on the Basis of Disability; Accessibility of Web Information and Services of State and Local Government Entities](https://www.federalregister.gov/documents/2024/04/24/2024-07758/nondiscrimination-on-the-basis-of-disability-accessibility-of-web-information-and-services-of-state) (Rule by the U.S. Department of Justice) 
* [Fact Sheet: New Rule on the Accessibility of Web Content and Mobile Apps Provided by State and Local Governments](https://www.ada.gov/resources/2024-03-08-web-rule/) (ADA.gov)
* [EN 301 549 (PDF)](https://www.etsi.org/deliver/etsi_en/301500_301599/301549/03.02.01_60/en_301549v030201p.pdf) and country-specific standards based on EN 301 549:
  * [CAN/ASC - EN 301 549 Accessibility requirements for ICT products and services (EN 301 549, IDT](https://accessible.canada.ca/en-301-549-accessibility-requirements-ict-products-and-services-1)) (Canada standards adoption of EN 301 549 verbatim)
  * [AS EN 301 549](https://www.standards.org.au/standards-catalogue/standard-details?designation=as-en-301-549-2020) (Australia standards adoption of EN 301 549 verbatim)
  * [IS 17802 Part 1 (PDF)](https://broadbandindiaforum.in/wp-content/uploads/2022/08/IS-17802_1_2021.pdf) and [IS 17802 Part 2 (PDF)](https://broadbandindiaforum.in/wp-content/uploads/2022/08/IS-17802_2_2022.pdf) (India standard based on EN 301 549)
  * [KS 2952-1](https://webstore.kebs.org/index.php?route=product/product&product_id=17111) and [KS 2952-2](https://webstore.kebs.org/index.php?route=product/product&product_id=17112) (Kenya standard based on EN 301 549)
  * CPR-6201, JEN 301 549 (Japan standard based on EN 301 549)
* [U.S. Section 508 of the Rehabilitation Act](https://www.access-board.gov/about/law/ra.html#section-508-federal-electronic-and-information-technology) — requires ICT that is developed, procured, maintained, or used by U.S. federal agencies to be accessible to people with disabilities
* [Section 508 Standards](https://www.access-board.gov/ict/) — a U.S. regulation that defines what is necessary for ICT to be considered accessible

