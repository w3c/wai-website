---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "WCAG 3 Introduction"
nav_title: "WCAG 3 Draft"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2026-09-25 # Keep the date of the English version

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

description: Introduces the W3C Accessibility Guidelines (WCAG) 3 Draft. WCAG documents explain how to make the web more accessible to people with disabilities.
image: /content-images/wcag/wcag3-social.png
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

Many aspects of W3C Accessibility Guidelines (WCAG) 3 Draft are in an exploratory or developing phase and will change substantially.

WCAG 3 will have similar accessibility requirements as WCAG 2. WCAG 3 will have a different structure, different conformance model, and broader scope.

Please share this page as the starting point for official information about WCAG 3 now and in the future. Short link: w3.org/WAI/wcag3

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2,3,4" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction
{:.no_toc}

The WCAG documents explain how to make the web more accessible to people with disabilities. WCAG 3 applies to web content, apps, tools, publishing, and emerging technologies. 

W3C Accessibility Guidelines (WCAG) 3 is currently an **incomplete draft that will change**. WCAG 3 is intended to develop into a W3C Standard **in a few years**.

The current standard, Web Content Accessibility Guidelines (WCAG) 2, is introduced in the [WCAG 2 Overview](/standards-guidelines/wcag/).

The best way to prepare for WCAG 3 in the future, is to meet WCAG 2.2 success criteria now.

WCAG 3 is being designed to:
* **have similar core requirements as WCAG 2, with some revisions and additions**
* provide additional requirements and guidance
* provide a conformance model that allows more specific reporting of progress towards conformance and above conformance

We will update this page regularly as work on the WCAG 3 Draft progresses.

{::nomarkdown}
{% include box.html type="start" title="Blog September 2026" icon="default" %}
{:/}

For perspectives on the stakes and challenges developing W3C Accessibility Guidelines (WCAG) 3, see the W3C blog post [Crafting WCAG 3 for more accessible user experiences](https://www.w3.org/blog/2026/crafting-wcag-3-for-more-accessible-user-experiences/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}


## Status: In-progress drafts

The WCAG 3 Draft includes potential guidelines, requirements, and conformance model that we are exploring. The final requirements in WCAG 3 will be different from this draft. Guidelines and requirements will be edited, added, combined, and removed. The conformance model will be refined.

### Section status

Each normative section has a status that indicates how far along in the development process this section is, how ready it is for experimental adoption, and what kind of feedback we are looking for.
* Placeholder
* Exploratory
* Developing
* Refining
* Mature

For more information on the status indicators, see the Explainer section [Current process for creating WCAG 3](https://www.w3.org/TR/wcag-3.0-explainer/#current-process).

### September 2026 updates

In September 2026, we published updated drafts:

* [Explainer for WCAG 3](https://www.w3.org/TR/wcag-3.0-explainer/) provides background information and describes the structure of the WCAG 3 Draft. **We suggest reading the Explainer before reading WCAG 3.**
* [WCAG 3 Working Draft](https://www.w3.org/TR/wcag-3.0/) includes potential guidelines, requirements, and assertions that have progressed to Developing status. Those that are still Exploratory are available in the [Editor's Draft](https://w3c.github.io/wcag3/guidelines/).

**The conformance approach is substantially updated. For a brief description, see [Conformance approach](#model) below.**

<img src="{{ "/content-images/wcag/dialogs2.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

#### Review questions

We encourage review and comment, particularly on the conformance model.
* The proposed conformance approach sets a single conformance level and uses tags to provide reporting tiers below and above that level. Does this improve upon the conformance approach in previous drafts?
* An alternate conformance approach proposal in the Explainer under "Alternative approach - Scoring" uses the tags to generate a score above and below conformance. What pros and cons do you see for each approach? 
* In your role, how would you leverage reporting tiers leading to conformance or above conformance?

[Instructions for commenting](#comment) are below.

### Research needed

Some of the guidelines and requirements are marked with "Needs additional research". We are particularly interested in assistance identifying or conducting research to support or refute them.

## WCAG 3 Draft approach

<img src="{{ "/content-images/wcag/brain-icon.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### Some similar, some different {#compare}

**Goals** for WCAG 3 include:
* be easier to understand
* cover more user needs, including more needs of people with cognitive disabilities
* be flexible to apply to:
  * different types of content, apps, and tools
  * different organizational situations
  * future technology changes

WCAG 3 is **similar** to previous versions in some ways. It has similar:
* goal of providing guidance on making web content and apps accessible to people with disabilities
* fundamental and specific accessibility requirements

WCAG 3 is very **different** from previous versions in some ways. It has:
* different structure
* different conformance model
* broader scope, beyond just web content

### Structure

The WCAG 3 Draft includes:
* Guidelines (outcome statements)
  * Core Requirements
  * Supplemental Requirements
  * Assertions
  * Recommended practices

WCAG 3 Draft supporting material includes:
* Methods (that are somewhat similiar to WCAG 2 Techniques)
* How to Document (that are somewhat similiar to Understanding WCAG 2 documents)

For more information, see the Explainer section [WCAG 3 Structure](https://www.w3.org/TR/wcag-3.0-explainer/#structure).

### Conformance approach {#model}

The _conformance model_ is the way to determine and communicate how well content, a website, an app, etc. meets WCAG.

The conformance model in WCAG 3 will be very different from WCAG 2. It is intended to:
* be more flexible for organizations (that is, owners and developers of websites, apps, tools, etc.)
* encourage more accessible user experiences

#### Conformance and reporting in the September 2026 draft

Background on this conformance model is in the W3C blog post [Crafting WCAG 3 for more accessible user experiences](https://www.w3.org/blog/2026/crafting-wcag-3-for-more-accessible-user-experiences/).

To conform to WCAG 3, content must meet all core requirements.

The draft uses **_tags_** and **_tiers_** to report progress towards conformance and beyond conformance.

For this model, all **core requirements** will have **tags**:

* Physical harm — Not meeting the requirement can cause someone with a disability immediate physical harm.
* Risk — Not meeting the requirement unreasonably increases financial, medical, legal, privacy, or security risk for someone with a disability.
* Barrier — Not meeting the requirement can prevent someone with a disability from proceeding.
* Friction — Not meeting the requirement can hinder someone with a disability.

The reporting tiers are based on the requirement tags, supplemental requirements, and assertions:
* Tier 1 — "Physical harm" and "Risk" requirements
* Tier 2 — "Physical harm", "Risk", and "Barrier" requirements
* **Tier 3 Conformance** — "Physical harm", "Risk", "Barrier", and "Friction" requirements, that is, all core requirements
* Tier 4 — All core requirements and [a to-be-determined number of] supplemental requirements and assertions about content
* Tier 5 — All core requirements and [a to-be-determined greater number of] supplemental requirements and assertions about the content
* Tier 6 — All core requirements and [a to-be-determined greater number of] supplemental requirements and assertions about the content, and assertions about the organization

For more information, see:

* Explainer section [Conformance approach](https://www.w3.org/TR/wcag-3.0-explainer/#conformance-models)
* WCAG 3 Draft section [Conformance](https://www.w3.org/TR/wcag-3.0/#conformance)

### WCAG 3 name

The name of WCAG 3 is different from WCAG 2:
* WCAG **3** is W3C Accessibility Guidelines
* WCAG **2** is Web Content Accessibility Guidelines

“W3C Accessibility Guidelines (WCAG) 3” was chosen:
* because of wide-spread familiarity with the “WCAG” acronym
* to encompass the broader scope beyond “content”

## Development

### Timeline

<img src="{{ "/content-images/wcag/calandara.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 20%; max-width: 111px">

**WCAG 3 is not expected to be a completed W3C standard for a few more years.**

WCAG 3 will not supersede WCAG 2 and WCAG 2 will not be deprecated for several years after WCAG 3 is finalized.

The Accessibility Guidelines Working Group provides a projected [WCAG 3 schedule](https://github.com/w3c/wcag3/wiki/Schedule).

When WCAG 3 is more stable, we will provide guidance on transitioning from WCAG 2 to WCAG 3.

### Who develops WCAG 3

The WCAG technical documents are developed by the Accessibility Guidelines Working Group ([AG WG](https://www.w3.org/WAI/about/groups/agwg/)) (previously under the Silver Task Force) with the Silver Community Group. These groups are part of the World Wide Web Consortium ([W3C](https://www.w3.org)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)). You can learn about the development process from [[How WAI Develops Accessibility Standards through the W3C Process: Milestones and Opportunities to Contribute]](/standards-guidelines/w3c-process/).

<img src="{{ "/content-images/wcag/dialogs2.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### Your comments {#comment}

We welcome your comments on WCAG 3 draft documents.

To comment, open new issues in the [WCAG 3 GitHub repository](https://github.com/w3c/wcag3/issues). It's free to create a GitHub account to create issues. If using GitHub is not feasible, email public-agwg-comments@w3.org

Please create separate GitHub issues or email messages for each topic, rather than commenting on multiple topics in a single issue or email.
