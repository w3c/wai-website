---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "WCAG 3 Introduction"
nav_title: "WCAG 3 Draft"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-12-12 # Keep the date of the English version

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
  <p>Developed with input from the Accessibility Guidelines Working Group (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>), Silver Task Force, and Silver Community Group.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

Many aspects of W3C Accessibility Guidelines (WCAG) 3 are in an exploratory phase, and will change substantially. We published an updated [WCAG 3 Working Draft](https://www.w3.org/TR/wcag-3.0/) on 12 December 2024.

WCAG 3 will have similar fundamental and specific accessibility requirements as WCAG 2. WCAG 3 will have a different structure, different conformance model, and broader scope.

Please share this page as the starting point for official information about WCAG 3 now and in the future. Short link: w3.org/WAI/wcag3

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

W3C Accessibility Guidelines (WCAG) 3 is currently an incomplete draft. WCAG 3 is intended to develop into a W3C Standard **in a few years**. The current standard, Web Content Accessibility Guidelines (WCAG 2), is introduced in the [WCAG 2 Overview](/standards-guidelines/wcag/).

The WCAG 3 documents will explain how to make the web more accessible to people with disabilities. WCAG 3 applies to web content, apps, tools, publishing, and emerging technologies on the web. 

We will update this page regularly as work on the WCAG 3 Draft progresses.

## Status: In-progress drafts

In December 2024, we published updated drafts:

* [Requirements for WCAG 3](https://www.w3.org/TR/wcag-3.0-requirements/) describes the key principles and requirements that will help shape how WCAG 3 develops and how to determine when it is successfully complete.
* **[Explainer for WCAG 3](https://www.w3.org/TR/wcag-3.0-explainer/)** provides background information and describes the structure of the December 2024 WCAG 3 Draft. **We suggest reading the Explainer before reading WCAG 3.**
* **[WCAG 3 Working Draft](https://www.w3.org/TR/wcag-3.0/)** includes potential guidelines and requirements that we are exploring. The final requirements in WCAG 3 will be different from this draft. Guidelines and requirements will be edited, added, combined, and removed.

### Summary of changes 
* Explanatory content is moved to the [Explainer](https://www.w3.org/TR/wcag-3.0-explainer/).
* The term 'outcome' is changed. The current draft has 'guidelines' that are written as user-centered outcomes and 'requirements' that support the guideline.
* Requirements are indicated as 'foundational' or 'supplemental', as described in the [Explainer](https://www.w3.org/TR/wcag-3.0-explainer/).
* Accessibility support is changed in [3.1.1 Only accessibility-supported ways of using technologies](https://www.w3.org/TR/2024/WD-wcag-3.0-20241212/#accessibility-supported).

### Section status
Each normative section has a status that indicates how far along in the development process this section is, how ready it is for experimental adoption, and what kind of feedback we are looking for.
* Placeholder
* Exploratory
* Developing
* Refining
* Mature

For more information on these status indicators, see the Explainer section [Current Process for Creating WCAG 3.0](https://www.w3.org/TR/2024/DNOTE-wcag-3.0-explainer-20241212/#current-process).

### For your review

In this WCAG 3 Working Draft, there are four updated sections that we would particularly like feedback on. The first three sections are guidelines:

1. [Image alternatives guideline](https://w3.org/TR/wcag-3.0/#image-alternatives)
2. [Keyboard focus appearance guideline](https://w3.org/TR/wcag-3.0/#keyboard-focus-appearance)
3. [Clear meaning guideline](https://w3.org/TR/wcag-3.0/#clear-meaning)

For these sections, does the information under 'Which foundational requirements apply?' make the guidelines easier to understand and use?

The other section we would like feedback on is:

* [Conformance](https://w3.org/TR/wcag-3.0/#conformance)

This section explains the conformance approach we are considering for WCAG 3. There are still many details to be worked out. Do you have constructive comments about this proposed conformance approach for WCAG 3?

### Research needed

Some of the guidelines and requirements are marked with "Needs additional research". We are particularly interested in assistance identifying or conducting research to support or refute them.

<img src="{{ "/content-images/wcag/dialogs2.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### Comments

To provide input, please [open an issue in the WCAG 3 GitHub repository](https://github.com/w3c/wcag3/issues/new). Or, if you are unable to use GitHub, email [public-agwg-comments@w3.org](mailto:public-agwg-comments@w3.org).

**Please create separate GitHub issues or email messages for each topic**, rather than putting multiple topics in a single issue or email.

## WCAG 3 Draft approach

<img src="{{ "/content-images/wcag/brain-icon.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### Some similar, some different {#compare}

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

### WCAG 3 name

The name of WCAG 3 is different from WCAG 2:
* WCAG **3** is W3C Accessibility Guidelines
* WCAG **2** is Web Content Accessibility Guidelines

“W3C Accessibility Guidelines (WCAG) 3.0” was chosen:
* because of wide-spread familiarity with the “WCAG” acronym
* to encompass the broader scope beyond “content”

### Structure

For a description of the structure of the December 2024 WCAG 3 Working Draft, see the Explainer section [WCAG 3.0 Structure](https://www.w3.org/TR/2024/DNOTE-wcag-3.0-explainer-20241212/#structure).

### Conformance approach {#model}

The _conformance model_ is the way to determine and communicate how well content, a website, an app, etc. meets WCAG.

The conformance model in WCAG 3 will be very different from WCAG 2. It is intended to:
* be more flexible for organizations (that is, owners and developers of websites, apps, tools, etc.)
* encourage more accessible user experiences

Developing and vetting the conformance model is a large portion of the work AG needs to complete over the next few years.

The December 2024 publications have updated information in:
* Explainer section [Conformance approach](https://www.w3.org/TR/2024/DNOTE-wcag-3.0-explainer-20241212/#conformance-models)
* WCAG 3 Working Draft section [Conformance](https://www.w3.org/TR/2024/WD-wcag-3.0-20241212/#conformance)

## Development

### Timeline

<img src="{{ "/content-images/wcag/calandara.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 20%; max-width: 111px">

**WCAG 3 is not expected to be a completed W3C standard for a few more years.**

WCAG 3 will not supersede WCAG 2 and WCAG 2 will not be deprecated for at least several years after WCAG 3 is finalized.

The Accessibility Guidelines Working Group (AG WG) has created an initial set of guidelines. In the first part of 2025, AG WG will focus on developing two or three guidelines to Refining or Mature status. We will use that experience to develop a projected timeline for WCAG 3. We expect the timeline to be available by September 2025.

For information on current timelines and activities, see [WCAG 3 Publication Plan](https://www.w3.org/WAI/GL/wiki/WCAG_3_Timeline#Publication_Plan).

We will update this section with more specific timeline information as it is available.

### Who develops WCAG 3

The WCAG technical documents are developed by the Accessibility Guidelines Working Group ([AG WG](https://www.w3.org/WAI/about/groups/agwg/)) (previously under the Silver Task Force) with the Silver Community Group. These Groups are part of the World Wide Web Consortium ([W3C](https://www.w3.org)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)). You can learn about the development process from [[How WAI Develops Accessibility Standards through the W3C Process: Milestones and Opportunities to Contribute]](/standards-guidelines/w3c-process/).

We welcome your comments on WCAG 3 Working Drafts. The best way to provide feedback is by opening new [GitHub issues](https://github.com/w3c/wcag3/issues). Alternatively, e-mail public-agwg-comments@w3.org

Opportunities for contributing more directly to WCAG and other WAI work are introduced in [[Participating in WAI]](/about/participating/).
