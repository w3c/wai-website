---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: WAI-ARIA Overview
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2025-06-12  # Keep the date of the English version
first_published: "December 2006"

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-aria-intro

permalink: /standards-guidelines/aria/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/aria/    # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: |
  <p><strong>Editors:</strong> James Nurthen, <a href="https://www.w3.org/People/cooper/">Michael Cooper</a>, <a href="https://www.w3.org/People/shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed with input from the Accessible Rich Internet Applications Working Group (<a href="https://www.w3.org/WAI/ARIA/">ARIA WG</a>) and the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces the WAI-ARIA (Accessible Rich Internet Applications) suite of web standards.

Quick links to resources:
* [WAI-ARIA standard](https://www.w3.org/TR/wai-aria/)
* [WAI-ARIA Authoring Practices Guide (APG)](/ARIA/apg/)
<!-- * [FAQ](/WAI/ARIA/faq) - including [What is the current status of WAI-ARIA development?](/WAI/ARIA/faq#update) -->

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

## Introduction

WAI-ARIA, the Accessible Rich Internet Applications Suite, defines a way to make web content and web applications more accessible to people with disabilities. It especially helps with dynamic content and advanced user interface controls developed with HTML, JavaScript, and related technologies.

Without WAI-ARIA, certain functionality used on websites is not available to some users with disabilities &mdash; especially people who rely on screen readers and people who cannot use a mouse. WAI-ARIA addresses these accessibility challenges, for example, by defining ways for functionality to be provided to assistive technology. With WAI-ARIA, developers can make advanced web applications accessible and usable to people with disabilities.

This page describes the problems that WAI-ARIA addresses, and introduces the WAI-ARIA suite of technical documents. For more information on the terms used on this page &mdash; including *web content*, *user agent*s, and *assistive technology* &mdash; see [[Introduction to Web Accessibility]](/fundamentals/accessibility-intro/) and [[Essential Components of Web Accessibility]](/fundamentals/components/).

### Technical solutions

WAI-ARIA provides a framework for adding attributes to identify features for user interaction, how they relate to each other, and their current state. WAI-ARIA describes navigation techniques to mark regions and common web structures as menus, primary content, secondary content, banner information, and other types of web structures. For example, with WAI-ARIA, developers can identify regions of pages and enable keyboard users to easily move between regions, rather than having to press Tab many times.

WAI-ARIA includes technologies to map controls, live regions, and events to accessibility application programming interfaces (APIs), including custom controls used for rich Internet applications. WAI-ARIA techniques also apply to widgets such as buttons, drop-down lists, calendar functions, and tree controls (for example, expandable menus).

WAI-ARIA provides web authors with the following semantics that make web content more accessible to users of assistive technologies:

-   Roles to describe the type of widget presented, such as "menu", "treeitem", "slider", and "progressbar"
-   Roles to describe the structure of a web page, such as headings, and regions
-   Properties to describe the state widgets are in, such as "checked" for a check box, or "readonly" for most form controls
-   Properties to define live regions of a page that are likely to get updates (such as stock quotes)
-   A way to provide keyboard navigation for web objects and events, such as those mentioned above

## Authoring Practices Guide (APG)

**[ARIA Authoring Practices Guide (APG)](/ARIA/apg/)**, recommends approaches to help web application developers make widgets, navigation, and behaviors accessible using WAI-ARIA roles, states, and properties.

It describes considerations that might not be evident to most authors from the WAI-ARIA specification, which is oriented primarily at user agent implementers.

## Versions {#versions}

[WAI-ARIA 1.2](https://www.w3.org/TR/wai-aria-1.2/) was published as a completed W3C  Recommendation on 6 June 2023.

[WAI-ARIA 1.3 Draft](https://www.w3.org/TR/wai-aria-1.3/) is under development. Proposed changes from ARIA 1.2 include:
* new roles: suggestion, comment, mark
* new attributes: aria-description, aria-braillelabel, aria-brailleroledescription
* updates to aria-details to allow multiple IDrefs

Additional changes are in the [changelog](https://www.w3.org/TR/wai-aria-1.3/#changelog).

### WAI-ARIA 1.2 {#wai-aria-1_2}

The 1.2 version extends WAI-ARIA 1.1 to add a small number of features to the HTML and ARIA (HTML + ARIA) accessibility model. For 1.2, user agent implementation guidance is provided as a suite of accessibility API mapping specifications that describe how to expose semantics of WAI-ARIA and other web content languages to accessibility APIs.

Published WAI-ARIA specifications are as follows:

-   **[WAI-ARIA 1.2](https://www.w3.org/TR/wai-aria-1.2/) technical specification** &mdash; provides features to define accessible user interface elements in order to improve the accessibility and interoperability of web content and applications. It is primarily for developers of web browsers, assistive technologies, and other user agents; developers of web technologies (technical specifications); and developers of accessibility evaluation tools.
-   **[Core Accessibility API Mappings 1.2](https://www.w3.org/TR/core-aam-1.2/)** &mdash; describes how user agents should expose semantics of web content languages to accessibility APIs. The core module defines support that applies across multiple content technologies, including general keyboard navigation support and mapping of general-purpose WAI-ARIA features; other specifications extend this for specific technologies.
-   **[Accessible Name and Description Computation 1.2](https://www.w3.org/TR/accname-1.2/)** &mdash; describes how user agents determine names and descriptions of accessible objects from web content languages and expose them in accessibility APIs. This allows assistive technologies to associate and relay the name or description of objects to users.
-   **[HTML Accessibility API Mappings 1.0](https://www.w3.org/TR/html-aam-1.0/)** &mdash; defines how user agents map HTML elements and attributes to platform accessibility application programming interfaces (APIs). It leverages and extends the Core Accessibility API Mappings 1.2 and  the Accessible Name and Description Computation 1.2 for use with the HTML host language. Documenting these mappings promotes interoperable exposure of roles, states, properties, and events implemented by accessibility APIs and helps to ensure that this information appears in a manner consistent with author intent.
-   **[SVG Accessibility API Mappings 1.0](https://www.w3.org/TR/svg-aam-1.0/)** &mdash; extends Core Accessibility API Mappings 1.2 to define how user agents map SVG markup to platform accessibility application programming interfaces (APIs). When supported by user agents, its features allow SVG authors to create accessible rich internet applications, including charts, graphs, and other drawings. Provides SVG-specific guidance for how the SVG user agent must respond to keyboard focus, native SVG features, and role, state and property attributes provided via WAI-ARIA.
-   **[Digital Publishing WAI-ARIA Module 1.1 (DPUB-ARIA)](https://www.w3.org/TR/dpub-aria-1.1/)** &mdash; defines a set of ARIA roles to help assistive technology users navigate structural divisions of long-form digital documents, such as eBooks.
-   **[Digital Publishing Accessibility API Mappings 1.1 (DPUB-AAM)](https://www.w3.org/TR/dpub-aam-1.1/)** &mdash; defines how user agents (such as eBook readers) map the DPUB-ARIA markup to platform accessibility APIs.

Additional documents are expected in this suite, including other accessibility API mappings and updated authoring guidance. Editors' drafts under development can be accessed in the [WAI-ARIA GitHub Repositories](https://www.w3.org/groups/wg/aria/tools/).

*W3C Recommendations* and *Working Group Notes* are briefly explained in [How WAI Develops Accessibility Guidelines through the W3C Process](/standards-guidelines/w3c-process/), which also describes milestones in the W3C Process.

### Technical document format

The WAI-ARIA documents follow the W3C format for technical specifications which includes several sections at the beginning: links to different versions, editors, copyright, abstract, and status of the document with the link to errata and the email address for comments.

## Who develops WAI-ARIA

The WAI-ARIA technical documents are developed by the Accessible Rich Internet Applications Working Group ([ARIA WG](/about/groups/ariawg/)), which is part of the World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](/WAI/)). For more information about the working group, see the [ARIA WG public page](/about/groups/ariawg/).

[[How WAI Develops Accessibility Guidelines through the W3C Process: Milestones and Opportunities to Contribute]](/standards-guidelines/w3c-process/) describes formal periods for public review. Opportunities for review and comment of WAI documents are announced on the [WAI home page](/WAI/) and [WAI Interest Group](/about/groups/waiig/) mailing list. An email address for sending comments is included in the "Status of this Document" section.

Opportunities for contributing to WAI-ARIA and other WAI work are introduced in [Participating in WAI](/about/participating/).
