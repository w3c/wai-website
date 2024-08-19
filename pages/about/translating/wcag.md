---
title: How to Translate WCAG 2
nav_title: "How to Translate WCAG 2"
lang: en
last_updated: 2024-04-09
description: Technical instructions on translating WCAG

permalink: /about/translating/wcag/
ref: /about/translating/wcag/
redirect_from:
  - /about/translating/guides/wcag/

github:
  label: wai-translation-guidance

image: /content-images/about/social-translations.png

feedbackmail: wai@w3.org
footer: |
  <p><strong>Date:</strong> Updated 9 April 2024.</p>
  <p><strong>Editor:</strong> Rémi Bétin.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page guides you through the technical steps to translate the Web Content Accessibility Guidelines (WCAG) 2.2 and 2.1.


For general information on WCAG 2 Translations, see [Contributing to W3C Translations  {% include_cached external.html %}
](https://www.w3.org/Consortium/Translation/) and [Policy for Authorized W3C Translations {% include_cached external.html %}](https://www.w3.org/2005/02/TranslationPolicy.html).


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

## Overview

Web Content Accessibility Guidelines (WCAG) 2.1/2.2 are currently [available in more than 14 languages](/standards-guidelines/wcag/translations/)!

There are 5 main steps to create a new translation:
1. **[Get the source files](#get-source-files)** from [`w3c/wcag/` {% include_cached external.html %}](https://github.com/w3c/wcag/) repository
2. **[Translate WCAG source files](#translate-source-files)**
3. **[Export in HTML](#preview-export)**
4. **[Edit the HTML files](#edit-html)** to complete the translation
5. **[Deliver the final files to W3C](#deliver-files)**

## Step 1: Get the source files {#get-source-files}

1. Clone [`w3c/wcag` {% include_cached external.html %}](https://github.com/w3c/wcag/) repository (you can [fork {% include_cached external.html %}](https://docs.github.com/en/pull-requests/collaborating-with-pull-requests/working-with-forks/fork-a-repo) it first)
2. Base your translation on the following branch:
- [`main` branch {% include_cached external.html %}](https://github.com/w3c/wcag/tree/main) to translate WCAG 2.2
- [`WCAG-2.1` branch {% include_cached external.html %}](https://github.com/w3c/wcag/tree/WCAG-2.1) to translate WCAG 2.1

## Step 2: Translate WCAG source files {#translate-source-files}

The repository contains numerous folders and files. Only some of them are relevant to your WCAG translation.

Translate user-oriented content in:
- `guidelines/index.html`
- All files in `guidelines/sc/` folder and subfolders
- All files in `guidelines/terms/` folder and subfolders
- `guidelines/input-purposes.html`
- `guidelines/relative-luminance.html`
- `guidelines/respect-config.js`: translate Editors list.
- `guidelines/wcag.json`
- All files in `acknowledgements/` folder

Make sure to follow these translation guidelines:
- Update <html> `lang` and `xml:lang` attributes in `index.html` and `relative-luminance.html`.\
  Use the appropriate "language tag" from the [Language Subtag Registry {% include_cached external.html %}](https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry)
- Do not translate IDs
- Add `hreflang="en"` to links when needed, and `lang="en"` where needed.
- Follow the guidelines of the [W3C Internationalization Activity {% include_cached external.html %}](https://www.w3.org/International/): for example, the proper usage of language tags, encoding declarations, handling bidirectional text, etc.

## Step 3: Preview your changes and export in HTML {#preview-export}

To preview your changes, open the `index.html` file in a modern browser, on a local server. Without a server, the success criteria and glossary terms will not be included. 

Allow the script to compile and format the content.

1. If your document has "ReSpec" errors or warnings, they will shop up at the top of the page, next to the "ReSpec Menu" link.
- Check and resolve (potential) "ReSpec Errors".
- Check "ReSpec Warnings". The original document may contain some warnings. Make sure you do not introduce new ones.

2. Export in HTML using ReSpec:
- Activate the "Respec Menu" link in the top right corner
- Choose "Export...", then the "HTML" option.

## Step 4: Edit the resulting HTML file and complete the translation {#edit-html}

Rename the exported HTML file to `index.html` and make the following changes.

### Add the translation header

At the very start of your `body` element, add a [translation header, based on the provided boilerplate](https://www.w3.org/2005/02/TranslationPolicy#Disclamier).

The text in this disclaimer must be in the target language, except for the original title and the reference to the Lead Translation Organization (LTO) at the top.

### Make some edits

- Translate the `.head` section
- In each `dfn-panel`, translate “Permalink” and “Referenced in:”
- Next to each Success Criterion, translate “Understanding” and “How to Meet”
- Change the ID of the ["5. Conformance"](https://www.w3.org/TR/WCAG22/#conformance) `<section>` to "`conformance`".

Make sure to follow these translation guidelines:
- Add `hreflang="en"` to links when needed, and `lang="en"` where needed.
- Follow the guidelines of the [W3C Internationalization Activity](https://www.w3.org/International/): for example, the proper usage of language tags, encoding declarations, handling bidirectional text, etc.

### Translate the text added by `fixup.js`

The `fixup.js` file adds links that allow users to jump to the Table of contents, and to collapse/expand the sidebar. 

Download [`fixup.js` {% include_cached external.html %}](https://www.w3.org/scripts/TR/2021/fixup.js) and translate the following terms:
- "Collapse Sidebar"
- "Pop Out Sidebar"
- "Jump to Table of Contents”

## Step 5: Deliver the final files to W3C {#deliver-files}

In conformance with step 6.3 of the [Policy for Authorized W3C Translations {% include_cached external.html %}](https://www.w3.org/2005/02/TranslationPolicy.html), deliver the following files to W3C for publication:
- `index.html`
- `relative-luminance.html`
- `fixup.js`

Make sure these are valid (X)HTML documents with UTF-8 encoding.