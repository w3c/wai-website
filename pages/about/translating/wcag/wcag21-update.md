---
title: How to update WCAG 2.1 translations
nav_title: "Update WCAG 2.1 translations"
lang: en
last_updated: 2024-10-22
description: Technical instructions on updating WCAG 2.1 translations

permalink: /about/translating/wcag/wcag21-update/
ref: /about/translating/wcag/wcag21-update/

github:
  label: wai-translation-guidance

image: /content-images/about/social-translations.png

feedbackmail: wai@w3.org
footer: |
  <p><strong>Editor:</strong> Rémi Bétin.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

Web Content Accessibility Guidelines (WCAG) 2.1 have been updated on 21 September 2023:
- The version published on 21 September 2023: [https://www.w3.org/TR/2023/REC-WCAG21-20230921/](https://www.w3.org/TR/2023/REC-WCAG21-20230921/)
- The outdated version, published on 5 June 2018: [https://www.w3.org/TR/2018/REC-WCAG21-20180605/](https://www.w3.org/TR/2018/REC-WCAG21-20180605/)

This page guides you through the steps to update an existing WCAG 2.1 translation.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

- This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Refer to the relevant process

To update a W3C technical report translation, you must follow the same process as for an initial translation:
- Unofficial translations: [Instructions for W3C technical reports translations](https://www.w3.org/Consortium/Translation/#how)
- Authorized translations: [Policy for Authorized W3C Translations](https://www.w3.org/2005/02/TranslationPolicy.html)

Considering the limited scope of the WCAG 2.1 update, we will do our best to ensure that the W3C's steps run as smoothly as possible.

## Browse the content changes

The easiest way to spot the changes between the two versions is to use a "diff checker" tool, such as the [W3C HTML Diff service](https://services.w3.org/htmldiff). 

Use the following input values :

Address of reference document
: [https://www.w3.org/TR/2018/REC-WCAG21-20180605/](https://www.w3.org/TR/2018/REC-WCAG21-20180605/)

Address of new document
: [https://www.w3.org/TR/2023/REC-WCAG21-20230921/](https://www.w3.org/TR/2023/REC-WCAG21-20230921/)

You can use this direct link: [Diff between 2018 and 2023 WCAG 2.1 versions, via W3C HTML diff service](https://services.w3.org/htmldiff?doc1=https%3A%2F%2Fwww.w3.org%2FTR%2F2018%2FREC-WCAG21-20180605%2F&doc2=https%3A%2F%2Fwww.w3.org%2FTR%2F2023%2FREC-WCAG21-20230921%2F)

We also recommend that you read the [WCAG 2.1 Change log](https://www.w3.org/TR/WCAG21/#changelog).

## Update the translation

In January 2024, we have published a guide on translating WCAG 2: [How to translate WCAG 2](/about/translating/wcag/). It explains how to use the content in [`w3c/wcag` {% include_cached external.html %}](https://github.com/w3c/wcag/) repository to start translating WCAG.

If you want to use this method, refer to the [`WCAG21-20230921` tag](https://github.com/w3c/wcag/tree/WCAG21-20230921) to get the files of the 21 September 2023 version.

If starting over with this new method is overly complex for you, you can update your existing files.

## (Authorized translations) Update the translation header

Each "Authorized Translation" must contain a translation header (also called "disclaimer") at the top of the document. When updating a WCAG 2.1 translation, the following information will need update:

Date of publication
: Translation publication date will be updated by W3C.

This version:
: URI will be updated by W3C.

Most recent version:
: Keep the existing URI. Example: [https://www.w3.org/Translations/WCAG21-fr/](https://www.w3.org/Translations/WCAG21-fr/)

Previous version:
: Dated URI of the initial translation. Example: [https://www.w3.org/Translations/WCAG21-fr-20220711/](https://www.w3.org/Translations/WCAG21-fr-20220711/) \
Please add and translate this new text.

Original version:
: Use [https://www.w3.org/TR/2023/REC-WCAG21-20230921/](https://www.w3.org/TR/2023/REC-WCAG21-20230921/)

Errata:
: URI of an errata page. Please create and host a new errata page specific to this translation version.

Lead translating organization:
: Update information when relevant.

Partners in the translation review:
: Update URI as relevant.

Summary of public comments on the Candidate Authorized Translation:
: Update URI as relevant.

## Check your translation thoroughly

Please properly check your files before submission to W3C. 

In particular, make sure that:
- All links are valid. You can use [W3C Link Checker](https://validator.w3.org/checklink)
- HTML is valid. You can use [W3C Markup Validation Service](https://validator.w3.org/)
- CSS is valid. You can use [W3C CSS Validation Service](https://jigsaw.w3.org/css-validator/)
- Pages are internationalization-friendly. You can use [W3C Internationalization Checker](https://validator.w3.org/i18n-checker/)
- All relevant content has been properly translated
- All `id`s are in English; that is, they have not been translated. 
  - If you have followed [How to Translate WCAG 2 – Get the source files](/about/translating/wcag/#get-source-files), this should be fine.
  - If you have translated WCAG 2 before January 2024, you might want to check this.
- `lang` and `xml:lang` attributes of the `<html>` tag are correct
- `hreflang` attribute has been added to links when relevant
- `lang` attribute has been used when relevant (especially when some text has been kept in English)
- The links/anchors of the original and translated versions match.
- “Jump to table of contents”, “Collapse sidebar” and “Hide sidebar” have been translated.
- There is no code showing in the rendered page.
- No custom CSS has been added.
- (Authorized translation) An errata has been created and is hosted on the Lead Translation Organization (LTO)'s website.