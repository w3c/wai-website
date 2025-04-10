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

<cite>Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)</cite> describes how the Web Content Accessibility Guidelines (WCAG) can be applied to non-web information and communications technologies (ICT), including documents and software. WCAG2ICT is the acronym used for the W3C Guidance on Applying WCAG 2 to Non-web Information and Communication Technology Group Note.

The WCAG2ICT Group Note provides:
* [Informative](https://www.w3.org/TR/WCAG22/#dfn-informative) **guidance** that is not [normative](https://www.w3.org/TR/WCAG22/#dfn-normative) and that does not set requirements.
* **Comments on applicability** of the Web Content Accessibility Guidelines (WCAG) when applied to non-web information and communications technologies (ICT) - this includes  non-web documents and software, including mobile apps, native applications, platform software, and [software on ICT with closed functionality[(https://www.w3.org/TR/wcag2ict/#comments-on-closed-functionality).
* **Technology-specific explanations or difficulties** for some success criteria. This is especially the case where WCAG makes assumptions on the presence of a browser that would not be true for non-web documents and software. Not all ICT have these concepts.

The WCAG2ICT Group Note is intended to help clarify how to use WCAG 2 to make non-web documents and non-web software more accessible to people with disabilities.  Addressing accessibility involves addressing the needs of people with auditory, cognitive, neurological, physical, speech, and visual disabilities, and the needs of people with accessibility requirements due to the effects of aging.  Although this document covers a wide range of issues, it is not able to address all the needs of all people with disabilities.

WCAG2ICT supports harmonized accessibility solutions across a range of technologies. WCAG2ICT has been a key resource for including WCAG in ICT accessibility regulation, legislation, and standards around the world.

### Background and Development History for WCAG2ICT

[WCAG 2 was developed for the Web]( https://www.w3.org/WAI/standards-guidelines/wcag/glance/).  Addressing accessibility for non-web documents and non-web software involves requirements beyond those included in WCAG 2 and the WCAG2ICT Group Note.  Authors and developers are encouraged to seek other relevant advice about current best practices to ensure that non-web documents and non-web software are accessible, as far as possible, to people with disabilities.

The 2013 WCAG2ICT Group Note helped regulatory bodies develop standards (i.e., 508, EN 301549) adopt WCAG criteria for non-web documents and non-web software. The 2013 Group Note covered WCAG 2.0 (level A and AA) and the latest version of WCAG2ICT Group Note covers all WCAG 2 versions (level A and AA).

*Background:* **WCAG 2.0** is a normative web standard — it is a W3C Recommendation and an ISO International Standard ([ISO/IEC 40500:2012](https://www.w3.org/QA/2012/10/wcag_20_is_now_also_isoiec_405.html)) — that explains how to make web content (including static web pages, dynamic web applications, etc.) more accessible to people with disabilities. WCAG 2.1 was published in 2018 and **WCAG 2.2** was published in 2023. The [WCAG Overview](/standards-guidelines/wcag/) introduces the WCAG documents and links to supporting resources such as [[WCAG 2.0 at a Glance]](/standards-guidelines/wcag/20/glance/) and [How to Meet WCAG 2 (Quick Reference)](https://www.w3.org/WAI/WCAG20/quickref/).

### Goals
The objective of the WCAG2ICT Task Force is to develop documentation describing how WCAG 2.x and its principles, guidelines, and success criteria could apply to non-Web Information and Communications Technologies (ICT).

### Intent and Usage of WCAG2ICT

WCAG2ICT, like any other  [W3C Group Note](https://www.w3.org/policies/process/#Note), is informative — it is not normative and does not set requirements. It provides guidance on the application of WCAG 2 principles, guidelines, and success criteria to non-web documents and software. The WCAG2ICT Group Note was developed to provide an authoritative interpretation of how WCAG 2 can apply in different contexts.

The main focus of the WCAG2ICT Group Note is to provide verbiage replacements for web-based language in the WCAG success criteria and definitions as well as provide additional insights into where WCAG criteria may make assumptions of the presence and functionality of a user agent and assistive technology. This is because not all software has a user agent or platform software with accessibility APIs and services, nor do all technologies have or support assistive technology that acts on programmatic information. 

While WCAG2ICT Group Note provides guidance on applying WCAG in non-web contexts, at this time it may not provide sufficient clarity for some success criteria on how they can be applied to electronic documents whose source is driven by non-web markup technologies when they are delivered via a website. Likewise, there may not be sufficient clarity for mobile applications.  


### Versions
* [Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://www.w3.org/TR/wcag2ict-22/) was published 8 October 2024 and covers WCAG 2.0, 2.1, and 2.2
* older version: [Guidance on Applying WCAG 2.0 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://www.w3.org/TR/wcag2ict-20/) was published 5 September 2013 and covers WCAG 2.0
* The URI [https://www.w3.org/TR/wcag2ict/](https://www.w3.org/TR/wcag2ict/) points to the latest completed version

## Who WCAG2ICT is for {#for}

The WCAG2ICT Group Note is for standards developers, ICT managers, ICT developers, policy makers, and any others wanting to understand how WCAG 2 can be applied to non-web documents and software.
* Accessibility [standards organizations](https://en.wikipedia.org/wiki/Standards_organization) - to provide non-web language in the success criteria and definitions and to provide interpretation notes to help the organization make any potential adjustments or notes needed for specific technologies, if needed.
* ICT managers  - who are familiar with WCAG to quickly get an overview of using WCAG as an accessibility benchmark for non-web ICT.
* Technology developers - to provide the language substitutions for non-web language in WCAG success criteria where existing accessibility standards don’t contain an interpretation.
* Policy makers (which includes legislators, regulators) - to inform policy makers how the WCAG2ICT note is being used to influence standards requirements where WCAG is being applied to non-web ICT.
* Others include auditors, educators, litigators, vendors, and any individuals looking to learn more about digital accessibility.


## What WCAG2ICT Does Not Do

The WCAG2ICT Group Note:
* Does not make or help developers make a determination on which WCAG 2 provisions (principles, guidelines, or success criteria) should not be applied to non-web documents and software or to any particular technology or product.
* Does not propose changes to WCAG 2 or its supporting documents.
* Does not address any gaps between WCAG criteria and the accessibility requirements needed to address non-user interface aspects of platforms, user-interface components as individual items, and closed product software (where there is no assistive technology to communicate programmatic information).
* Does not apply WCAG to hardware aspects of products, because WCAG  does not apply to hardware.
Does not provide techniques for implementing WCAG in any type of technology, web or non-web.
* Is not a standard and does not describe how non-web ICT should conform to WCAG. 
* Does not incorporate or interpret any of the WCAG supplemental guidance. 

See the [Guidance in this Document[(https://w3c.github.io/wcag2ict/#guidance-in-this-document) section of the WCAG2ICT Group Note for more details.

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

The WCAG2ICT Group Note is developed by a [Task Force (TF)](https://www.w3.org/WAI/about/groups/task-forces/wcag2ict/) of the [Accessibility Guidelines Working Group (AG WG)](https://www.w3.org/WAI/about/groups/agwg/). The [work statement](https://www.w3.org/WAI/about/groups/task-forces/wcag2ict/work-statement/) defines the objectives, scope, approach, and so on for the WCAG2ICT Group Note. The participants of the WCAG2ICT TF are volunteers drawn from [W3C member organizations](https://www.w3.org/membership/list/) and [invited experts](https://www.w3.org/invited-experts/) and are supported by [Web Accessibility Initiative (WAI)](https://www.w3.org/WAI/about/#wai-staff).

### Related Documents

We realize that there are many more standards that cover non-web software aspects of ICT. The following is not an extensive or complete list of references that may use WCAG2ICT:
* W3C WAI [Web Accessibility Laws and Policies](https://www.w3.org/WAI/policies/) page
* [Fact Sheet: New Rule on the Accessibility of Web Content and Mobile Apps Provided by State and Local Governments | ADA.gov](https://www.ada.gov/resources/2024-03-08-web-rule/)
* U.S. Dept. of Justice Rule [Nondiscrimination on the Basis of Disability; Accessibility of Web Information and Services of State and Local Government Entities](https://www.federalregister.gov/documents/2024/04/24/2024-07758/nondiscrimination-on-the-basis-of-disability-accessibility-of-web-information-and-services-of-state)
* [Web Content Accessibility Guidelines (WCAG)](https://www.w3.org/TR/WCAG22/)
* [WCAG2ICT Task Force](https://www.w3.org/WAI/about/groups/task-forces/wcag2ict/)) 
* [WCAG2ICT Work Statement](https://www.w3.org/WAI/about/groups/task-forces/wcag2ict/work-statement/)
* [EN 301 549](https://www.etsi.org/deliver/etsi_en/301500_301599/301549/03.02.01_60/en_301549v030201p.pdf) and country-specific standards based on the EN 301 549
  * [CAN/ASC - EN 301 549 Accessibility requirements for ICT products and services (EN 301 549, IDT](https://accessible.canada.ca/en-301-549-accessibility-requirements-ict-products-and-services-1)) (Canada standards adoption of the EN 301 549 verbatim)
  * [AS EN 301 549](https://www.standards.org.au/standards-catalogue/standard-details?designation=as-en-301-549-2020) (Australia standards adoption of the EN 301 549 verbatim)
  * [IS 17802 Part 1](https://broadbandindiaforum.in/wp-content/uploads/2022/08/IS-17802_1_2021.pdf) and [IS 17802 Part 2](https://broadbandindiaforum.in/wp-content/uploads/2022/08/IS-17802_2_2022.pdf) (India standard based on the EN 301 549)
  * [KS 2952-1](KS 2952-1) and [KS 2952-2](https://webstore.kebs.org/index.php?route=product/product&product_id=17112) (Kenya standard based on the EN 301 549)
  * CPR-6201, JEN 301 549 (Japan standard based on the EN 301 549)
* [CSA/ASC B651.2:22](https://www.csagroup.org/wp-content/uploads/2430258.pdf?srsltid=AfmBOoqlJl3r-eDhOggnJXIs7mLdzYJMBawVua_mDI1ss6iGX9czQ93f) (National Standard of Canada) CSA Group Accessible design for service-interactive devices including automated banking machines.
* [U.S. Section 508 of the Rehabilitation Act](https://www.access-board.gov/about/law/ra.html#section-508-federal-electronic-and-information-technology) requires ICT developed, procured, maintained, or used by U.S. federal agencies be accessible to people with disabilities.
* [Section 508 Standards](https://www.access-board.gov/ict/) is a U.S. regulation that defines what is necessary for ICT to be considered accessible

### Comments

**If you have any comments on the Additional Guidance sections of WCAG2ICT**, you can [open a new GitHub issue](https://github.com/w3c/wcag2ict/issues/new). It is free to create a GitHub account. Please open a separate GitHub issue for each topic, rather than commenting on multiple topics in a single issue.

If it is not feasible for you to use GitHub, you can put your comments in the body of an e-mail message and send them to: <public-wcag2ict-comments@w3.org>.

**If you have comments on the wording taken from WCAG 2 or Understanding WCAG 2**, please read the [[Instructions for Commenting on WCAG 2 Documents]](/standards-guidelines/wcag/commenting/).
