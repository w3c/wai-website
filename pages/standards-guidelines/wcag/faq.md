---
title: "WCAG 2 FAQ"
nav_title: "FAQ"
lang: en
last_updated: 2026-05-05
first_published: "October 2006"
description: Answers to some frequently asked questions (FAQ) about Web Content Accessibility Guidelines (WCAG).

permalink: /standards-guidelines/wcag/faq/
ref: /standards-guidelines/wcag/faq/
changelog: /standards-guidelines/wcag/changelog/ # Do not change this

github:
    label: wai-wcag-intro

image: /content-images/wcag/general-social.png
footer: >
    <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
    <p>Developed with input from the Accessibility Guidelines Working Group (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

The starting place for information about Web Content Accessibility Guidelines (WCAG) is the  [WCAG 2 Overview](/standards-guidelines/wcag/).

This page answers some frequently asked questions (FAQ) about WCAG. Let us know what <a href="#more">other questions</a> you have.<br>
~<em><a href="https://w3.org/People/Shawn/">Shawn Lawton Henry</a></em>, <abbr title="World Wide Web Consortium">W3C</abbr> Web Accessibility Initiative (WAI) Director, <em>updated May 2026</em>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2, 3" /}

<ul class="questions">
  <li>Top questions
    <ul>
      <li><a href="#start">Where should I start learning about WCAG 2?</a></li>
      <li><a href="#next">What about WCAG 3?</a></li>
      <li><a href="#parsing411">How and why is WCAG 2 Success Criteria 4.1.1 Parsing obsolete?</a></li>
    </ul>
  </li>
  <li>WCAG 2 versions and updates
    <ul>
      <li><a href="#wcag-stable">When a new version of WCAG 2 is published, does it change the previous version?</a></li>
      <li><a href="#done">What is different in WCAG 2.0, 2.1, and 2.2?</a></li>
      <li><a href="#Dec2024">What was updated in WCAG 2.2 in December 2024?</a></li>
      <li><a href="#Sept2023">What was updated in WCAG 2.1 in 2023 and 2024?</a></li>
      <li><a href="#i18n22">What was updated in WCAG 2 for internationalization?</a></li>
    </ul>
  </li>
  <li>Supporting documents
    <ul>
      <li><a href="#docs">What are the different WCAG 2 documents?</a></li>
      <li><a href="#independent">Do the supporting documents change WCAG 2 requirements and conformance?</a></li>
      <li><a href="#techs">Do content authors (developers, designers, etc.) have to follow W3C's techniques to meet WCAG?</a></li>
      <li><a href="#techsnot">What would be the negative consequences of allowing only W3C's published techniques to be used for conformance to WCAG 2?</a></li>
    </ul>
  </li>
  <li>Scope
    <ul>
      <li><a href="#mobile">Does WCAG 2 address mobile accessibility?</a></li>
      <li><a href="#wcag2ict">Does WCAG 2 apply to documents and non-web software?</a></li>
      <li><a href="#othertechs">Do the techniques ensure accessibility in different technologies?</a></li>
      <li><a href="#coga">Does WCAG 2 cover the accessibility needs of people with cognitive and learning disabilities?</a></li>
    </ul>
  </li>
  <li>Get updates and more information
    <ul>
      <li><a href="#getnews">How can I get notified of updates?</a></li>
      <li><a href="#more">Where can I find answers to more of my questions?</a></li>
      <li><a href="#languages">Is WCAG 2 available in other languages?</a></li>
    </ul>
  </li>
</ul>

{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Top questions

### Where should I start learning about WCAG 2? {#start}

For introductory resources, see [Accessibility Fundamentals Overview](/fundamentals/).

If you want a really short introduction to three web accessibility issues (alternative text for images, keyboard input, and transcripts), see [Examples of Web Accessibility](/fundamentals/accessibility-intro/#examples).

To learn about web accessibility principles and guidelines, see [[Accessibility Principles]](/fundamentals/accessibility-principles/).

**To learn about WCAG 2 specifically, start with the [WCAG Overview](/standards-guidelines/wcag/).** It provides an important foundation for understanding the different WCAG 2 documents, and points to several resources for using WCAG 2.

[How to Meet WCAG 2: A customizable quick reference](https://www.w3.org/WAI/WCAG22/quickref/) is the primary resource for developers using WCAG 2.

### What about WCAG 3? {#next}

WCAG 3 is years away from being completed.

WCAG 3 is the result of the project previously referred to as “Silver”.

**Please see important up-to-date information in the [WCAG 3 Introduction page](https://www.w3.org/WAI/wcag3).**

#### WCAG 3 Name {#wcag3name}

WCAG 2 and WCAG 3 have different names.

The new standard is currently referred to as “W3C Accessibility Guidelines (WCAG) 3.0”. This name was chosen because of wide-spread familiarity with the “WCAG” acronym, and to encompass the broader scope beyond “web content”.

### How and why is WCAG 2 Success Criteria 4.1.1 Parsing obsolete? {#parsing411}

Success Criteria 4.1.1 Parsing is obsolete. WCAG 2.2 indicates it as [4.1.1 Parsing (Obsolete and removed)](https://www.w3.org/TR/WCAG22/#parsing), along with a note.

WCAG 2.1 and WCAG 2.0 now include this note from a conformance perspective:
<blockquote>This Success Criteria should be considered as always satisfied for any content using HTML or XML.</blockquote>

That note is in:

* Updated WCAG 2.1 that includes new notes under [4.1.1 Parsing](https://www.w3.org/TR/WCAG21/#parsing) and incorporates errata listed in the [WCAG 2.1 changelog](https://www.w3.org/TR/WCAG21/#changelog)
* WCAG [2.0 errata](https://www.w3.org/WAI/WCAG20/errata/)
* Understanding WCAG documents

Parsing was included in WCAG 2.0 to ensure that browsers and assistive technologies could accurately parse markup and content. Since then, specifications (such as HTML) and browsers have improved how they handle parsing errors. Also, previously assistive technology did their own markup parsing. Now they rely on the browser.

With today's technology, accessibility issues that would have failed 4.1.1, will fail other criteria, such as Info and Relationships ([SC 1.3.1](https://www.w3.org/WAI/WCAG22/Understanding/info-and-relationships.html)) or Name, Role, Value ([SC 4.1.2](https://www.w3.org/WAI/WCAG22/Understanding/name-role-value)). Therefore 4.1.1 is no longer needed for accessibility.

(Using tools that assess parsing errors and fixing parsing issues may still be useful &mdash; it's just not required for accessibility.)

## WCAG 2 versions and updates

### When a new version of WCAG 2 is published, does it change the previous version? {#wcag-stable}

No. The WCAG 2 requirements (success criteria) are the same in later versions. For example, the success criteria in WCAG 2.1 are not changed in WCAG 2.2. Later versions add new success criteria, and do not change existing success criteria. One exception is [4.1.1 Parsing noted above](#parsing411).

Each updated WCAG standard (called a "W3C Recommendation") has a unique web address (URI). The standard at that URI does not change. For example, the standard published [5 June 2018 at https://www.w3.org/TR/2018/REC-WCAG21-20180605/](https://www.w3.org/TR/2018/REC-WCAG21-20180605/) will not change.

### What is different in WCAG 2.0, 2.1, and 2.2? {#done} {#v21} {#v22}

See:
* [WCAG 2.0, 2.1, 2.2 section of WCAG 2 Overview ](https://www.w3.org/WAI/standards-guidelines/wcag/#versions)
* [What's New in WCAG 2.1](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-21/)
* [What's New in WCAG 2.2](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-22/)

The Accessibility Guidelines Working Group (AG WG) is not planning to do another version of WCAG 2, that is, not do WCAG 2.3. AG WG is working on WCAG 3.

### What was updated in WCAG 2.2 in December 2024? {#Dec2024}

On 12 December 2024, we published an update to WCAG 2.2. The update includes:
* modified definitions of single pointer, used in an unusual or restricted way, motion animation, and programmatically determined
* minor formatting and editorial changes listed in the [WCAG 2.2 Change Log](https://www.w3.org/TR/WCAG22/#changelog)

### What was updated in WCAG 2.1 in 2023 and 2024? {#Sept2023}

On 12 December 2024, we published an update to WCAG 2.1. The update includes:
* minor formatting and editorial changes listed in the [WCAG 2.1 Change Log](https://www.w3.org/TR/WCAG21/#changelog)

On 21 September 2023, we published an update to WCAG 2.1. The update includes:
* added informative notes to success criteria 4.1.1 Parsing (more information is in [Why is success criteria 4.1.1 Parsing obsolete](https://www.w3.org/WAI/standards-guidelines/wcag/faq/#parsing411))
* incorporation of existing errata that are mostly minor wording corrections

You can link to the latest version or specific versions of WCAG 2.1:
* for the latest version of WCAG 2.1: [https://www.w3.org/TR/WCAG21/](https://www.w3.org/TR/WCAG21/)
* the version published 12 December 2024: [https://www.w3.org/TR/2024/REC-WCAG21-20241212/](https://www.w3.org/TR/2024/REC-WCAG21-20241212/)
* the version published 21 September 2023: [https://www.w3.org/TR/2023/REC-WCAG21-20230921/](https://www.w3.org/TR/2023/REC-WCAG21-20230921/)
* the version published 5 June 2018: [https://www.w3.org/TR/2018/REC-WCAG21-20180605/](https://www.w3.org/TR/2018/REC-WCAG21-20180605/)

More info on linking is in [Referencing and Linking to WAI Guidelines](https://www.w3.org/WAI/standards-guidelines/linking/).

### What was updated in WCAG 2 for internationalization? {#i18n22}

Updates to WCAG documents will better support accessibility in different languages.

In October 2023, we added Notes to WCAG 2.2 to clarify that differences in languages do not impact conformance:
* [1.4.8 Visual Presentation, AAA](https://www.w3.org/TR/2023/REC-WCAG22-20231005/#visual-presentation)
* [1.4.13 Text Spacing, AA](https://www.w3.org/TR/2023/REC-WCAG22-20231005/#text-spacing)

We are updating Understanding WCAG 2.2 documents to address internationalization considerations more thoroughly.

## Supporting documents

### What are the different WCAG 2 documents? {#docs}

Along with WCAG are supporting materials including Understanding WCAG, WCAG Techniques, and How to Meet WCAG 2 (Quick Reference).

To learn how the different WCAG 2 technical documents are related and linked, see [[The WCAG 2 Documents]](/standards-guidelines/wcag/docs/).

Some background: Here’s a little more perspective on the different technical documents. When content authors and developers were using WCAG ***1.0***, they had many questions on how to implement it, how to evaluate conformance, and the reasons behind its requirements. W3C wanted to provide this information with WCAG 2. Since those details do not fit well in a technical standard, they are in separate supporting documents.

### Do the supporting documents change WCAG 2 requirements and conformance?  {#independent}

No. 

**Important: Only the WCAG technical standard includes requirements**, which are called "normative" requirements. The supporting materials are informative; they are not normative. That means the Techniques, Understanding documents, and other supporting materials:
* do not set or change requirements for WCAG
* are not required for conformance to WCAG

Updates to supporting material provide additional clarification, address public comments, and cover changes in technologies and tools. The updates do not change or alter WCAG 2 requirements or conformance.

### Do content authors (developers, designers, etc.) have to follow W3C’s techniques to meet WCAG? {#techs}

**No**, you do not have to use the techniques in W3C’s Techniques for WCAG 2 document.

The techniques are informative; that means they are not required. The basis for determining conformance to WCAG 2 is the success criteria from the WCAG 2 standard — not the techniques.

While many authors find W3C-documented techniques useful, there may be other ways to meet WCAG success criteria. You can use other techniques. Web content could even fail a particular technique test, yet still meet WCAG in a different way. Also, content that uses some of the Techniques does not necessarily meet all WCAG success criteria.

**For important additional information, see the [Understanding Techniques for WCAG Success Criteria section](https://www.w3.org/WAI/WCAG21/Understanding/understanding-techniques) of Understanding WCAG 2.1**.

### What would be the negative consequences of allowing *only* W3C’s published techniques to be used for conformance to WCAG 2? {#techsnot}

Background: Some organizations have considered requiring all web content to use W3C’s published techniques.

**W3C recommends that the only thing that is required is meeting the WCAG 2 success criteria.** The basis for determining conformance to WCAG 2 is the success criteria from the WCAG 2 standard --- not the techniques. W3C’s _Techniques for WCAG 2_ document is informative (that is, not required, non-normative).

**W3C cautions against requiring web content to use only W3C’s published sufficient techniques and not allowing other techniques** for several reasons, including:

-   **It would prevent the use of new technologies (for example, HTML5 and WAI-ARIA) while the technologies and relevant sufficient techniques are being developed, which is usually more than a year.** 

    It often takes several years for technologies to be developed and finalized. Once a technology is stable, it usually takes several months for the WCAG Working Group to develop techniques, test them with user agents and assistive technologies, make them available for public review, revise them as needed, and formally publish them.

-   W3C’s *Techniques for WCAG 2* is not comprehensive and may not cover newer technologies and situations. There may be techniques that are sufficient to meet a given success criteria, but that are not yet included in W3C’s published document.
-   W3C’s published sufficient techniques may not always be the best techniques in a specific circumstance.
-   It is not always possible to use the W3C’s published sufficient techniques — for example, because of the way the content is designed — and there are other ways to meet the success criteria.
-   It would prevent the use of new techniques and best practices until W3C published them.

**Therefore, W3C’s published techniques should not be required as the only way to meet WCAG 2 success criteria unless the limitations and consequences above are understood and acceptable.**

For additional information, see: [Understanding Techniques for WCAG Success Criteria](https://www.w3.org/WAI/WCAG22/Understanding/understanding-techniques) section of Understanding WCAG 2.

## Scope

### Does WCAG 2 address mobile accessibility? {#mobile}

**Yes.** See [[Mobile Accessibility at W3C]](/standards-guidelines/mobile/).

### Does WCAG 2 apply to documents and non-web software? {#wcag2ict}

For an introduction to "Guidance on Applying WCAG 2.2 to Non-Web Information and Communications Technologies (WCAG2ICT)", see the  [WCAG2ICT Overview](https://www.w3.org/WAI/standards-guidelines/wcag/non-web-ict/).
  
### Do the techniques ensure accessibility in different technologies? {#othertechs}

WCAG 2 is designed to apply to a broad range of web technologies.

[Techniques for WCAG 2](https://www.w3.org/WAI/WCAG22/Techniques/) has techniques for several different web technologies. *Note that publication of techniques for a specific technology does not imply that the technology can be used in all cases to create accessible content that meets WCAG 2.*

Developers need to be aware of the limitations of specific technologies and ensure that they create content in a way that is accessible to all their potential users.

### Does WCAG 2 cover the accessibility needs of people with cognitive and learning disabilities? {#coga}

See [[Cognitive Accessibility at W3C]](/cognitive/) for information on:
* accessibility for people with cognitive and learning disabilities (“cognitive accessibility”)
* existing standards from the World Wide Web Consortium (W3C) Web Accessibility Initiative (WAI)
* informative guidance beyond the standards
* ongoing work on cognitive accessibility support at W3C WAI

## Get updates and more information

### How can I get notified of updates? {#getnews}

We will announce when more information is available on WCAG 2 and WCAG 3. To get announcements of updated drafts for review, see [Get WAI News](https://www.w3.org/WAI/news/subscribe/).

### Where can I find answers to more of my questions? {#more}

First, look through the documents on the W3C WAI website.

WAI hosts an Interest Group (WAI IG) mailing list where the community discusses web accessibility issues. WAI IG provides ideas from different perspectives. If you have a question that might be relevant to the WAI IG list, you can:

-   Search the [WAI IG list archives](https://lists.w3.org/Archives/Public/w3c-wai-ig/) to see if your question has already been addressed sufficiently.
-   Join the self-subscription list and post an appropriate question. Please read the [Using the WAI IG mailing list](/about/groups/waiig/#mailinglist) section of the WAI IG page.

WAI staff are actively developing guidelines, technical reports, and supporting material, and generally are not available to answer individual questions. However, you can send questions to <wai@w3.org> and we will integrate answers into this page and other documents as we are able.

### Is WCAG 2 available in other languages? {#languages} 

**Yes.** Authorized Translations and unofficial translations of the technical documents WCAG 2 are listed in [[WCAG 2 Translations]](/standards-guidelines/wcag/translations/).

Unofficial translations of other WAI documents are listed in [All WAI Translations](/translations/).

For more information on how you can contribute to WAI translations, see [[Translating WAI Documents]](/about/translating/).
