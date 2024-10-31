---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "WCAG 3 Introduction"
nav_title: "WCAG 3 Draft"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-05-16 # Keep the date of the English version

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/wcag3-intro/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/wcag3-intro/    # Do not change this

description: Introduces the W3C Accessibility Guidelines (WCAG) 3.0 Working Draft. WCAG documents explain how to make the web more accessible to people with disabilities.
image: /content-images/wcag/wcag3_social.png
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Contributors: Rachael Bradley Montgomery, Jeanne Spellman, Kevin White.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>), Accessibility Guidelines Working Group (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>), Silver Task Force, and Silver Community Group.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

Many aspects of W3C Accessibility Guidelines (WCAG) 3 are in an exploratory phase, and will change. We published an updated [WCAG 3 Working Draft](https://www.w3.org/TR/wcag-3.0/) on 16 May 2024.

WCAG 3 will have similar fundamental and specific accessibility requirements as WCAG 2. WCAG 3 will have a different structure, different conformance model, and broader scope.

Please share this page as the starting point for official information about WCAG 3 now and in the future. short link: w3.org/WAI/wcag3

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2,3" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction
{:.no_toc}

WCAG 3 is currently an incomplete draft. WCAG 3 is intended to develop into a W3C Standard **in a few years**. The current standard, Web Content Accessibility Guidelines (WCAG 2), is introduced in the [WCAG 2 Overview](/standards-guidelines/wcag/).

The WCAG 3 documents will explain how to make the web more accessible to people with disabilities. WCAG 3 applies to web content, apps, tools, publishing, and emerging technologies on the web. 

We will update this page regularly as work on the WCAG 3 Draft progresses.

## Status: Exploratory Draft

The May 2024 [WCAG 3 Working Draft](https://www.w3.org/TR/wcag-3.0/) includes **potential** outcomes that we are exploring. The final set of outcomes in WCAG 3 will be different from this draft. Outcomes will be edited, added, combined, and removed.

The purpose of this draft is to:
* better understand the scope of user needs and how they could be addressed in an accessibility standard,
* request assistance in identifying gaps, and
* request assistance locating and conducting research to validate or invalidate the drafted outcomes.

Some of the outcomes are marked as needing research. We are particularly interested in assistance identifying or conducting research to support or refute them.

### For your review

When reviewing this update, please focus on the Guidelines section. We did not make changes to conformance related sections.

Please consider the following questions when reviewing the outcomes in this draft:
* What outcomes needed to make web content accessible are missing?
* What research supports or refutes these outcomes?
* Are any of these outcomes out of scope for accessibility standards? If so, please explain why.

To provide input, please file GitHub issues at: [https://github.com/w3c/wcag3/issues](https://github.com/w3c/wcag3/issues)<br>
Or, if you are unable to use GitHub, send email to public-agwg-comments@w3.org

Please create separate GitHub issues or email messages for each topic (rather than putting multiple topics in a single issue or email).

### Status of Sections

Each normative section has a status that indicates how far along in the development process this section is, how ready it is for experimental adoption, and what kind of feedback we are looking for.

* **Placeholder:** This content is temporary. It shows the type of content or section to expect. Placeholder text will be replaced. It is hidden by default in the Editor's draft. No feedback is needed on placeholder content.
* **Exploratory:** The Working Group is exploring what direction to take with this section. This content is not refined; details and definitions may be missing. It is hidden by default in the Editor's draft. We invite feedback on the proposed direction.
* **Developing:** There is rough agreement on what is needed for this section, although not all high-level concerns have been settled. Details are included, yet they are not all agreed on. We invite general feedback on how understandable, usable, and reasonable the section is generally.
* **Refining:** The Working Group has reach consensus on this section. It is ready for broad public review and experimental adoption. We seek feedback on feasibility and issues with implementations.
* **Mature:** The Working Group thinks this content is ready for the final standard. Feedback should be focused on edge case scenarios the Working Group might not have anticipated.

<img src="{{ "/content-images/wcag/dialogs2.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

**There are substantial open issues that are still being discussed, particularly about testing and conformance.**

<!--
### Review and Comments

We welcome input from evaluators, developers, designers, project managers, policy makers, people with disabilities, and others.

We also welcome comments on the goals and parameters in [Requirements for WCAG 3.0](https://www.w3.org/TR/wcag-3.0-requirements/).

The best way to provide this feedback is by opening new [GitHub issues](https://github.com/w3c/wcag3/issues/new). Alternatively, e-mail public-agwg-comments@w3.org

Please put each topic in a separate GitHub issue or e-mail.

Additionally, we welcome comments on ways that the Accessibility Guidelines Working Group can better support your review, feedback, and inclusion in the process of creating WCAG 3. Please e-mail these to group-ag-chairs@w3.org
-->

## WCAG 3 Draft Approach

<img src="{{ "/content-images/wcag/brain-icon.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### Some Similar, Some Different {#compare}

**Goals** for WCAG 3 include:
* be easier to understand
* cover more user needs, including more needs of people with cognitive disabilities
* be flexible to address different types of web content, apps, tools, and organizations

WCAG 3 is **similar** to previous versions in some ways. It has similar:
* goal of providing guidance on making web content and apps accessible to people with disabilities
* fundamental and specific accessibility requirements

WCAG 3 is very **different** from previous versions in some ways. It has:
* different structure
* different conformance model
* broader scope, beyond just web content

### Structure

This WCAG 3 draft has:
* **Guidelines**
   * Solutions to accessibility problems
   * More **granular** than the guidelines in WCAG 2
   * Each guideline has outcomes
* **Outcomes**
   * Verifiable statements
   * Similar to **success criteria** in WCAG 2
   * More granular and more focused on the desired results than the technical means for achieving them<br>(More _granular_ means they are more specific, instead of broad. That generally makes them simpler. It also means there will be more of WCAG 3 outcomes than WCAG 2 success criteria.)
* **Assertions**
   * Formal claim of fact, attributed to a person or organization
   * Assertions in WCAG 3 state that an organization has completed a procedure that can improve accessibility
   * Example procedures include usability testing, assistive technology testing, and plain language reviews
   * Assertions are used when the results of the same usability would be very different between testers

<!-- @@ ??? SLH needs more clarity -->

WCAG 3 supporting material includes:
* **Methods**
   * Technology-specific ways to achieve an outcome
   * Tests for the outcome
   * Similar to **Techniques** for WCAG 2
* **How-To documents**
   * Explain more about each guideline, such as how it addresses accessibility needs <!-- @@ each outcome or each guideline ? -->
   * Information for designers, developers, people new to accessibility, and project planners
   * Similar to the  **Understanding** documents for WCAG 2
* **Functional categories** of **functional needs**
   * Categorized list of needs of people with disabilities

### Draft Conformance Model {#model}

The _conformance model_ is the way to determine and communicate how well a website (or app, tool, etc.) meets WCAG. The conformance model in this draft of WCAG 3 will be very different from WCAG 2. It is intended to:
* be more flexible for organizations (that is, owners and developers of websites, apps, tools, etc.)
* encourage more accessible user experiences

We are reworking the conformance model based on feedback and we encourage additional feedback as we iterate. 

## Development

### Timeline

<img src="{{ "/content-images/wcag/calandara.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 20%; max-width: 111px">

The First Public Working Draft of WCAG 3.0 was published on 21 January 2021. The July 2023 draft has many changes that resulted from public feedback. We plan to publish updated drafts every 3-6 months.

**WCAG 3 is not expected to be a completed W3C standard for a few more years.** 

The Working Group will focus on creating an initial set of guidelines and outcomes. Then will focus on refining the structure and conformance model. They will provide updated drafts for review throughout this process. Once the conformance approach is more stable, the Group will focus on refining the accessibility requirements (guidelines, outcomes, assertions, and support material). We will then provide material to help those wanting to transition to WCAG 3; for example, mapping between WCAG 2 and 3 requirements.

WCAG 3 will not supersede WCAG 2, and WCAG 2 will not be deprecated, for at least several years after WCAG 3 is finalized.

We will update this section with more specific timeline information as it is available.

### WCAG 3 Name (formerly "Silver" project)

The name of WCAG 3 is different from WCAG 2:
* WCAG **3** is W3C Accessibility Guidelines
* WCAG **2** is Web Content Accessibility Guidelines

“W3C Accessibility Guidelines (WCAG) 3.0” was chosen:
* because of wide-spread familiarity with the “WCAG” acronym
* to encompass the broader scope beyond “content”

### Who Develops WCAG 3

The WCAG technical documents are developed by the Accessibility Guidelines Working Group ([AG WG](https://www.w3.org/WAI/GL/)) (previously under the Silver Task Force) with the Silver Community Group. These Groups are part of the World Wide Web Consortium ([W3C](https://www.w3.org)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)). You can learn about the development process from [[How WAI Develops Accessibility Standards through the W3C Process: Milestones and Opportunities to Contribute]](/standards-guidelines/w3c-process/).

We welcome your comments on WCAG 3 Working Drafts. The best way to provide feedback is by opening new [GitHub issues](https://github.com/w3c/wcag3/issues). Alternatively, e-mail public-agwg-comments@w3.org

Opportunities for contributing more directly to WCAG and other WAI work are introduced in [[Participating in WAI]](/about/participating/).
