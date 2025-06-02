---
title: "WCAG 2 FAQ"
nav_title: "FAQ"
lang: en
last_updated: 2024-12-12
first_published: "October 2006"
description: Answers to some frequently asked questions (FAQ) about Web Content Accessibility Guidelines (WCAG).

permalink: /standards-guidelines/wcag/faq/
ref: /standards-guidelines/wcag/faq/

github:
    label: wai-wcag-intro

image: /content-images/wcag/general-social.jpg
footer: >
    <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
    <p>Developed with input from the Accessibility Guidelines Working Group (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

The starting place for information about Web Content Accessibility Guidelines (WCAG) is the  [WCAG Overview](/standards-guidelines/wcag/).

This page answers to some frequently asked questions (FAQ) about (WCAG. Let us know what <a href="#more">other questions</a> you have.<br>
~<em><a href="https://w3.org/People/Shawn/">Shawn Henry</a></em>, <abbr title="World Wide Web Consortium">W3C</abbr> <abbr title="Web Accessibility Initiative">WAI</abbr>, <em>updated 12 December 2024</em>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

  <ul class="questions">
    <li><a href="#parsing411">How and why is success criteria 4.1.1 Parsing obsolete?</a></li>
    <li>New: <a href="#Dec2024">What was updated in WCAG 2.2 in December 2024?</a></li>
    <li>New: <a href="#Sept2023">What was updated in WCAG 2.1 in September 2023 and December 2024?</a></li>
    <li><a href="#i18n22">What was updated in WCAG 2.2 for internationalization?</a></li>
    <li><a href="#done">What is different in WCAG 2.0, 2.1, and 2.2?</a></li>
    <li><a href="#next">What about WCAG 3.0? What about “Silver”?</a></li>
    <li><a href="#getnews">How Can I Get Updates?</a></li>
    <li><a href="#mobile">Does WCAG address mobile accessibility?</a></li>
    <li><a href="#wcag2ict">Does WCAG 2 apply to documents and non-web software?</a></li>
    <li><a href="#start">Where should I start?</a></li>
    <li><a href="#docs">What are the different WCAG 2 documents?</a></li>
    <li><a href="#techs">Do content authors (developers, designers, etc.) have to follow W3C's techniques to meet WCAG?</a></li>
    <li><a href="#techsnot">What would be the negative consequences of allowing <em>only</em> W3C's published techniques to be used for conformance to WCAG 2?</a></li>
    <li><a href="#iso">Is ISO/IEC 40500 the same as WCAG 2.0?</a></li>
    <li><a href="#languages">Is WCAG 2 available in other languages?</a></li>
    <li><a href="#othertechs">Can I meet WCAG 2 with JavaScript and other technologies?</a></li>
    <li><a href="#more">Where can I find answers to more of my questions?</a></li>
  </ul>
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## How and why is success criteria 4.1.1 Parsing obsolete? {#parsing411}

Success criteria 4.1.1 Parsing is obsolete. WCAG 2.2 indicates it as [4.1.1 Parsing (Obsolete and removed)](https://www.w3.org/TR/WCAG22/#parsing), along with a note.

WCAG 2.1 and WCAG 2.0 now include this note from a conformance perspective:
<blockquote>This Success Criterion should be considered as always satisfied for any content using HTML or XML.</blockquote>

That note is in:

* Updated WCAG 2.1 that includes new notes under [4.1.1 Parsing](https://www.w3.org/TR/WCAG21/#parsing) and incorporates errata listed in the [WCAG 2.1 changelog](https://www.w3.org/TR/WCAG21/#changelog)
* WCAG [2.0 errata](https://www.w3.org/WAI/WCAG20/errata/)
* Understanding WCAG documents

Parsing was included in WCAG 2.0 to ensure that browsers and assistive technologies could accurately parse markup and content. Since then, specifications (such as HTML) and browsers have improved how they handle parsing errors. Also, previously assistive technology did their own markup parsing. Now they rely on the browser.

With today's technology, accessibility issues that would have failed 4.1.1, will fail other criteria, such as Info and Relationships ([SC 1.3.1](https://www.w3.org/WAI/WCAG22/Understanding/info-and-relationships.html)) or Name, Role, Value ([SC 4.1.2](https://www.w3.org/WAI/WCAG22/Understanding/name-role-value)). Therefore 4.1.1 is no longer needed for accessibility.

(Using tools that assess parsing errors and fixing parsing issues may still be useful &mdash; it's just not required for accessibility.)

## What was updated in WCAG 2.2 in December 2024? {#Dec2024}

On 12 December 2024, we published an update to WCAG 2.2. The update includes:
* modified definitions of single pointer, used in an unusual or restricted way, motion animation, and programmatically determined
* minor formatting and editorial changes listed in the [WCAG 2.2 Change Log](https://www.w3.org/TR/WCAG22/#changelog)

You can link to the latest version or specific versions of WCAG 2.2:
* for the latest version of WCAG 2.2: [https://www.w3.org/TR/WCAG22/](https://www.w3.org/TR/WCAG22/)
* the version published 12 December 2024: [https://www.w3.org/TR/2024/WD-wcag-3.0-20241212//](https://www.w3.org/TR/2024/WD-wcag-3.0-20241212/)
* the version published 5 October 2023: [https://www.w3.org/TR/2023/REC-WCAG22-20231005/](https://www.w3.org/TR/2023/REC-WCAG22-20231005/)

More info on linking is in [Referencing and Linking to WAI Guidelines](https://www.w3.org/WAI/standards-guidelines/linking/).

## What was updated in WCAG 2.1 in 2023 and 2024? {#Sept2023}

On 12 December 2024, we published an update to WCAG 2.1. The update includes:
* minor formatting and editorial changes listed in the [WCAG 2.1 Change Log](https://www.w3.org/TR/WCAG21/#changelog)

On 21 September 2023, we published an update to WCAG 2.1. The update includes:
* added informative notes to success criteria 4.1.1 Parsingl more information is above in [Why is success criteria 4.1.1 Parsing obsolete](https://www.w3.org/WAI/standards-guidelines/wcag/faq/#parsing411)
* incorporation of existing errata that are mostly minor wording corrections

You can link to the latest version or specific versions of WCAG 2.1:
* for the latest version of WCAG 2.1: [https://www.w3.org/TR/WCAG21/](https://www.w3.org/TR/WCAG21/)
* the version published 12 December 2024: [https://www.w3.org/TR/2024/REC-WCAG21-20241212/](https://www.w3.org/TR/2024/REC-WCAG21-20241212/)
* the version published 21 September 2023: [https://www.w3.org/TR/2023/REC-WCAG21-20230921/](https://www.w3.org/TR/2023/REC-WCAG21-20230921/)
* the version published 5 June 2018: [https://www.w3.org/TR/2018/REC-WCAG21-20180605/](https://www.w3.org/TR/2018/REC-WCAG21-20180605/)

More info on linking is in [Referencing and Linking to WAI Guidelines](https://www.w3.org/WAI/standards-guidelines/linking/).

## What was updated in WCAG 2 for internationalization? {#i18n22}

Updates to WCAG documents will better support accessibility in different languages.

In October 2023, we added Notes to WCAG 2.2 to clarify that differences in languages do not impact conformance:
* [1.4.8 Visual Presentation, AAA](https://www.w3.org/TR/2023/REC-WCAG22-20231005/#visual-presentation)
* [1.4.13 Text Spacing, AA](https://www.w3.org/TR/2023/REC-WCAG22-20231005/#text-spacing)

We are updating Understanding WCAG 2.2 documents to address internationalization considerations more thoroughly.

## What is different in WCAG 2.0, 2.1, and 2.2? {#done} {#v21} {#v22}

See:
* [WCAG 2.0, 2.1, 2.2 section of WCAG 2 Overview ](https://www.w3.org/WAI/standards-guidelines/wcag/#versions)
* [What's New in WCAG 2.1](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-21/)
* [What's New in WCAG 2.2](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-22/)

The Accessibility Guidelines Working Group (AG WG) will probably not do another version of WCAG 2, that is, not do WCAG 2.3. AG WG is working on WCAG 3.0.

## What about WCAG 3.0? What about “Silver”? {#next}

WCAG 3.0 is the result of the project previously temporarily referred to as “Silver”.

**Please see important up-to-date information in the [WCAG 3 Introduction page](https://www.w3.org/WAI/wcag3).**

### WCAG 3.0 Name {#wcag3name}

WCAG 2 and WCAG 3 have different names.

The new standard is currently referred to as “W3C Accessibility Guidelines (WCAG) 3.0”. This name was chosen because of wide-spread familiarity with the “WCAG” acronym, and to encompass the broader scope beyond “content”.

## How Can I Get Updates? {#getnews}

We will announce when more information is available on WCAG 2.2 and WCAG 3.0. To get announcements of updated drafts for review in e-mail, tweets, and RSS, see [Get WAI News](https://www.w3.org/WAI/news/subscribe/).

## Does WCAG 2 address mobile accessibility? {#mobile}

**Yes.** See the [[Mobile Accessibility at W3C]](/standards-guidelines/mobile/) page.

## Does WCAG 2 apply to documents and non-web software? {#wcag2ict}

For an introduction to "Guidance on Applying WCAG 2.2 to Non-Web Information and Communications Technologies (WCAG2ICT)", see the  [WCAG2ICT Overview](https://www.w3.org/WAI/standards-guidelines/wcag/non-web-ict/).

  
## Where should I start? {#start}

For introductory resources, see [Accessibility Fundamentals Overview](/fundamentals/).

If you want a really short introduction to 3 web accessibility issues (alternative text for images, keyboard input, and transcripts), see [Examples of Web Accessibility](/fundamentals/accessibility-intro/#examples).

To learn about web accessibility principles and guidelines, see [[Accessibility Principles]](/fundamentals/accessibility-principles/).

**To learn about WCAG 2 specifically, start with the [WCAG Overview](/standards-guidelines/wcag/).** It provides an important foundation for understanding the different WCAG 2 documents, and points to several resources for using WCAG 2.

[How to Meet WCAG 2: A customizable quick reference](https://www.w3.org/WAI/WCAG21/quickref/) is the primary resource for developers using WCAG 2.

## What are the different WCAG 2 documents? {#docs}

To learn how the different WCAG 2 technical documents are related and linked, see [[The WCAG 2 Documents]](/standards-guidelines/wcag/docs/).

Here’s a little more perspective on the different technical documents. When web content and web software developers were using WCAG ***1.0***, they had many questions on how to implement it, how to evaluate for it, and the reasons behind its requirements. WAI wanted to provide this information with WCAG 2, and since those details don’t fit well in a technical standard, they are in the supporting documents.

Thus with WCAG 2, there are extensive supporting materials, which are advisory documents. The WCAG 2 guidelines document itself is the only document that is a web standard, and it is fairly short.

## Do content authors (developers, designers, etc.) have to follow W3C’s techniques to meet WCAG? {#techs}

**No**, you do not have to use the techniques in W3C’s Techniques for WCAG 2 document.

The techniques are informative; that means they are not required. The basis for determining conformance to WCAG 2 is the success criteria from the WCAG 2 standard — not the techniques.

While many authors find W3C-documented techniques useful, there may be other ways to meet WCAG success criteria. You can use other techniques. Web content could even fail a particular technique test, yet still meet WCAG in a different way. Also, content that uses some of the Techniques does not necessarily meet all WCAG success criteria.

**For important additional information, see the [Understanding Techniques for WCAG Success Criteria section](https://www.w3.org/WAI/WCAG21/Understanding/understanding-techniques) of Understanding WCAG 2.1**.


## What would be the negative consequences of allowing *only* W3C’s published techniques to be used for conformance to WCAG 2? {#techsnot}

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

For additional information, see: [Understanding Techniques for WCAG Success Criteria](https://www.w3.org/WAI/WCAG21/Understanding/understanding-techniques) section of Understanding WCAG 2.1.


## Is ISO/IEC 40500 the same as WCAG 2.0? {#iso}

**Yes.** WCAG 2.0 is approved as an ISO standard: ISO/IEC 40500:2012. ISO/IEC 40500 is exactly the same as the original Web Content Accessibility Guidelines (WCAG) 2.0 from the [W3C](https://www.w3.org/) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)).

The content of ISO/IEC 40500 is freely available from [www.w3.org/TR/WCAG20](https://www.w3.org/TR/WCAG20/); it is available for purchase from the [ISO catalogue {% include_cached external.html %}](https://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=58625).

**For supporting resources that provide practical advice for meeting ISO/IEC 40500 (which is WCAG 2.0), see the [WCAG Overview](/standards-guidelines/wcag/).**

The approval was announced 15 October 2012 in a [press release](https://www.w3.org/2012/07/wcag2pas-pr.html) and [blog post](https://www.w3.org/QA/2012/10/wcag_20_is_now_also_isoiec_405.html). If you want more information on W3C and the ISO process, see [W3C PAS FAQ](https://www.w3.org/2010/04/pasfaq).


### Benefits of WCAG as ISO

Approval of WCAG 2.0 as an ISO standard benefits countries and organizations that can more easily adopt ISO standards. Countries that previously adapted WCAG 2.0 may now be able to *adopt WCAG 2.0 as is* by referencing ISO/IEC 40500. 

### Translations {#isotranslations}

W3C has offered our [WCAG 2.0 Authorized Translations](/standards-guidelines/wcag/translations/) to be used for the ISO/IEC translations. We will update this page when more information about translations is available. 

## Does W3C plan to send WCAG 2.1 or WCAG 2.2 to ISO for endorsement? {#iso212}

W3C does not plan to send WCAG 2.1 to ISO for endorsement and would not support that action, because WCAG 2.2 was finalized on 5 October 2022 and is an improvement in several respects.

**W3C expects to send WCAG 2.2 to ISO for endorsement**, and has started that process by notifying the ISO/IEC Joint Technical Committee 1 (JTC 1) of our intention to do so.

## Is WCAG 2 available in other languages? {#languages} 

**Yes.** Authorized Translations and unofficial translations of the technical documents WCAG 2 are listed in [[WCAG 2 Translations]](/standards-guidelines/wcag/translations/).

Unofficial translations of other WAI documents are listed in [[All WAI Translations]](/translations/).

For more information on how you can contribute to WAI translations, see [[Translating WAI Documents]](/about/translating/).

## Can I meet WCAG 2 with JavaScript and other technologies? {#othertechs}

WCAG 2 is designed to apply to a broad range of web technologies.

[Techniques for WCAG 2](https://www.w3.org/WAI/WCAG21/Techniques/) has techniques for several different web technologies. *Note that publication of techniques for a specific technology does not imply that the technology can be used in all cases to create accessible content that meets WCAG 2.* Developers need to be aware of the limitations of specific technologies and ensure that they create content in a way that is accessible to all their potential users.


## Where can I find answers to more of my questions? {#more}

First, look through the documents on the W3C WAI website.

WAI hosts an Interest Group (WAI IG) mailing list where the community discusses web accessibility issues. WAI IG provides ideas from different perspectives. If you have a question that might be relevant to the WAI IG list, you can:

-   Search the [WAI IG list archives](https://lists.w3.org/Archives/Public/w3c-wai-ig/) to see if your question has already been addressed sufficiently.
-   Join the self-subscription list and post an appropriate question. Please read the [Using the WAI IG mailing list](/about/groups/waiig/#mailinglist) section of the WAI IG page.

WAI staff are actively developing guidelines, technical reports, and supporting material, and generally are not available to answer individual questions. However, you can send questions to <wai@w3.org> and we will integrate answers into this page and other documents as we are able.
