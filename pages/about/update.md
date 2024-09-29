---
title: "What We're Working On"
title_html: "What We're Working On<br><span style='font-style: italic; font-size: 0.625em;'> Accessibility Activities and Publications, October 2024</span>"
lang: en
description: Find out what we're doing now at the W3C Web Accessibility Initiative (WAI). Get news and learn about upcoming publications and contribution opportunities.   # translate the description

permalink: /update/   # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /update/   # Translators, do not change this

github:
  label: wai-about

image: /content-images/wai-about-wai/update_social.png
feedbackmail: wai@w3.org

# In the footer below:
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
   <p><strong>Date:</strong> <!-- @@@ also update month in title !!! -->Updated 28 September 2024. First published March 2022.</p>
   <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. Contributors: <a href="https://www.w3.org/WAI/update/#who-is-we">WAI staff, Working Group Co-Chairs</a>, and others working on accessibility at W3C.</p>

inline_css: |
  h1 {
    line-height:1;
  }
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

This page highlights some current work at the [W3C](https://www.w3.org/Consortium/) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/about/)). It points out how you can contribute to making digital technology more accessible to people with disabilities.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}
{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introduction

We hope you'll find accessibility work on this page that you are interested in contributing to through W3C WAI. After each item is the acronym of the responsible Working Group (WG) and some Task Forces (TF). Information about the groups is later in this page &mdash; first, let's look at some of the work itself.

## Current Work Highlights

### Updating Core Guidelines and Other Standards

* **W3C Accessibility Guidelines (WCAG) 3** is in an exploratory phase, and will change substantially. It's years away from being finalized. Please see information on the latest draft and [review questions](/standards-guidelines/wcag/wcag3-intro/#for-your-review) in [[WCAG 3 Introduction]](/standards-guidelines/wcag/wcag3-intro/) _[AG WG]_

* **ARIA 1.3** &mdash; We're working on additional support for Braille and other [new features for ARIA 1.3](https://w3c.github.io/aria/#substantive-changes-targeted-for-the-1-3-release).  _[ARIA WG]_

### Developing New Standards

* **WAI-Adapt** enables users to adapt (or ‘personalize’) how content is presented to meet their needs and preferences. [[WAI-Adapt Overview]](/adapt/) _[APA WG, WAI-Adapt TF]_

* **Spoken Presentation** technical standards will enable screen readers and voice assistants to pronounce words correctly. [[Pronunciation Overview]](/pronunciation/) _[APA WG, Spoken Presentation TF]_

### Documenting Additional Guidance for People with Cognitive Disabilities, Low Vision, and Mobile Devices

* **Cognitive Accessibility** &mdash; We're updating several documents to better address the needs of people with cognitive and learning disabilities. A current topic is mental health. [[Cognitive Accessibility at W3C]](/cognitive/). _[AG WG, COGA TF]_

<!--
* **Low Vision Accessibility** &mdash; We're writing guidance that goes beyond the minimums required by WCAG. It is called "supplemental guidance". Current topics cover proximity, printing, and alternative themes such as high contrast and dark mode. _[AG WG, Low Vision TF]_ -->

* **Mobile Accessibility** work includes supporting on-going standards development, including supporting WCAG 3 exploration. [[Mobile Accessibility at W3C]](/standards-guidelines/mobile/) _[AG WG, Mobile TF]_

### Updating Guidance on Applying WCAG to ICT and on EPUB Accessibility

* **WCAG2ICT** describes how Web Content Accessibility Guidelines (WCAG) 2 can be applied to non-web information and communications technologies (ICT). We are updating it to include WCAG 2.1 and WCAG 2.2. [[WCAG2ICT Overview]](/standards-guidelines/wcag/non-web-ict/) _[AG WG, WCAG2ICT TF]_

* **EPUB Fixed Layout Accessibility** aims to help publishers address challenges for people with cognitive disabilities and low vision. [EPUB Fixed Layout Accessibility Editor's Draft](https://w3c.github.io/epub-specs/epub33/fxl-a11y/) _[EPUB3 WG, FXL A11y TF]_

### Defining User Requirements (AUR) and Exploring Emerging Technologies

Documenting the user needs of people with disabilities helps develop standards to meet those needs. It also helps designers, developers, and others better understand and meet user needs in order to support accessibility. <cite>XR Accessibility User Requirements</cite> and more listed at [Digital Accessibility User Requirements](/research/user-requirements/). 

* **Natural Language Interface Accessibility User Requirements ("NAUR")** is a Working Draft. A natural language interface is a user interface in which the user and the system communicate via a natural (human) language. The user provides input as sentences via speech or other input, and the system generates responses as sentences delivered by speech, text, or another modality. [About NAUR](https://www.w3.org/blog/2021/10/natural-language-interface-accessibility-user-requirements-call-for-review/), [NAUR Editor's Draft](https://w3c.github.io/naur/)  _[APA WG, Research TF]_

* **Collaboration Tools Accessibility User Requirements ("CTAUR")** is a Working Draft. It describes user needs in tools that provide support for one or more specific collaborative features. These features include real-time editing of content by multiple authors, the use of comments or annotations, and revision control. [CTAUR Editor's Draft](https://w3c.github.io/ctaur/)  _[APA WG, Research TF]_

* **How People with Disabilities Use the Web** helps you understand user needs broadly. We're updating this resource and publishing new videos to go along with it. [[How People with Disabilities Use the Web - previous version]](/people-use-web/), [in-progress update of How People with Disabilities Use the Web](https://deploy-preview-113--wai-people-use-web.netlify.app/people-use-web/)

### Testing Accessibility, Evaluation Tools

* **Easy Checks – A First Review of Web Accessibility** helps you start to assess the accessibility of a web page. We are polishing up a new iteration of this popular resource. [Easy Checks - previous version](/test-evaluate/preliminary/), [draft new version of Easy Checks](/test-evaluate/easy-checks/)
* **ACT Rules** (Accessibility Conformance Testing (ACT), also known as "WCAG 2 Test Rules") describe ways to test conformance to WCAG success criteria. They are primarily for developers of evaluation tools and test methodologies. We're documenting more. [[About WCAG 2 Test Rules]](/standards-guidelines/act/rules/about/) _[AG WG, ACT TF]_
* ACT Rules implementation reports list how test tools or methodologies address test examples in ACT Rules. We invite evaluation tool developers to [submit implementation reports](https://act-rules.github.io/pages/implementations/reporting/). _[AG WG, ACT TF]_

### Translating Resources

Existing translations of W3C accessibility resources are listed in [All WAI Transations](/translations/). We are currently working with volunteer translators to translate more resources and update existing translations, including translations of WCAG and of educational resources. See [Translating WAI resources](/about/translating/).

## Upcoming Publications

We plan to publish the following documents in 2024. <!-- To learn about "Candidate Recommendation" (**CR**), "Proposed Recommendation" (**PR**), "Recommendation",and other stages, see [How WAI Develops Accessibility Standards through the W3C Process: **Milestones** and Opportunities to Contribute](/standards-guidelines/w3c-process/). --> 

* [Guidance on Applying WCAG 2 to Non-Web Information and Communications Technologies (WCAG2ICT)](https://w3c.github.io/wcag2ict/) as a completed Note
* [Collaboration Tools Accessibility User Requirements](https://w3c.github.io/ctaur/) as a completed Note
* W3C Accessibility Guidelines (WCAG) 3 as an updated Working Draft, see [WCAG 3 Introduction](https://www.w3.org/WAI/standards-guidelines/wcag/wcag3-intro/)
* More [WAI Translations](/translations/) - usually some each week

Recent publications and other announcements are listed on the **[News page](/news/)**.

### Get Updated

To get news via e-mail, LinkedIn, Mastodon, or Atom/RSS feed when these and other accessibility documents are _ready for review_ or _published as final_, see **[[Get WAI News]](/news/subscribe/)**.

## Wait, Wait, There's More

This page _only lists about half_ of the active work on accessibility at W3C. Much of the work happens in the accessibility groups that are introduced in the [W3C Working Groups page](https://www.w3.org/groups/wg/#wg-list).

To learn more about what the Working Groups are working on right now, see:

* [APA Current Work](/about/groups/apawg/#current-work) - Accessible Platform Architectures (APA) Working Group
* ARIA - Accessible Rich Internet Applications (ARIA) Working Group
  * [ARIA Working Drafts](https://www.w3.org/groups/wg/aria/publications#WD)
  * [ARIA Authoring Practices Guide (APG)](/about/groups/task-forces/practices/)
* [AG WG Current Work](/about/groups/agwg/#current-work) - Accessibility Guidelines (AG) Working Group
  * [COGA Current Work](https://www.w3.org/WAI/GL/task-forces/coga/wiki/Main_Page) - Cognitive and Learning Disabilities Accessibility Task Force (COGA)
  <!--  * [LVTF Current Work](https://www.w3.org/WAI/GL/low-vision-a11y-tf/wiki/Main_Page) -  Low Vision Accessibility Task Force (LVTF) -->
  * [Mobile Current Work](https://www.w3.org/WAI/GL/mobile-a11y-tf/wiki/Main_Page) - Mobile Accessibility Task Force
* [EPUB 3 Working Group document publication status and milestones](https://www.w3.org/publishing/groups/epub-wg/PublStatus)

### Surprise! We already have a resource for that

Did you know the WAI website has: **videos, tips, tutorials, tools** (for generating reports and accessibility statements), **translations** (over 35 languages), **training** (a free online course), and so much more. There are [resources for](/roles/) content authors, designers, developers, evaluators, testers, managers, policy makers, trainers, educators, web users, advocates, and people with disabilities.

**Discover** accessibility resources that _you didn't even know existed_ from the annotated list of **[[WAI Resources]](/resources/).** When you find helpful information, would you **share it with others**.

## How to Get Involved {#participate}

To learn about contributing to W3C WAI accessibility work generally, **see [[Participating in WAI]](/about/participating/)**.

Links to each Working Group's "How to Participate" page are in the [Participating in Working Groups section](/about/participating/#WGs). If you are interested in a Task Force, see participation information for the parent Working Group.

We also offer ideas for [Promoting and Implementing Web Accessibility](/about/participating/#promoting-and-implementing-web-accessibility).

**Translations:** If you might want to volunteer to contribute to translations, please see [Translating WAI resources](/about/translating/). You can send questions via e-mail to [group-wai-translations@w3.org](group-wai-translations@w3.org) We are currently seeking translators in all languages and reviewers for draft translations in Czech, Greek, Indonesian and Korean.

**We look forward to your contributions to making the web more accessible to people with disabilities!**

### Who is We

"We" is:

* [W3C](https://www.w3.org/Consortium/) Web Accessibility Initiative ([WAI](/about/))
* W3C WAI Team:
  * [Shawn Lawton Henry](https://www.w3.org/staff/#shawn) is Web Accessibility Initiative (WAI) Program Lead; Accessibility Education and Communications Lead.
  * [Kevin White](https://www.w3.org/staff/#kevin) is Accessibility Technical Lead and supports the Accessibility Guidelines Working Group that develops Web Content Accessibility Guidelines (WCAG).
  * [Roy Ruoxi Ran (冉若曦)](https://www.w3.org/staff/#ran) supports accessibility Working Groups and accessibility in China.
  * [Daniel Montalvo](https://www.w3.org/staff/#dmontalvo) supports accessibility Working Groups and standards harmonization.
  * [Ken Franqueiro](https://www.w3.org/staff/#kfranqueiro) develops the new technical architecture for WCAG 2, WCAG 3, and the WAI website.
  * [Tamsin Ewing](https://www.w3.org/staff/#tamsin) supports accessibility communications, educational resources, and Working Group deliverables.
* Participants of: [AG](https://www.w3.org/groups/wg/ag/participants), [APA](https://www.w3.org/groups/wg/apa/participants), [ARIA](https://www.w3.org/groups/wg/aria/participants), [EPUB](https://www.w3.org/groups/wg/epub/participants), and other [W3C groups](https://www.w3.org/groups/)

<section class="default-grid teaser making-web-accessible" aria-labelledby="mwa-title" style="border: 1px solid var(--line-grey);">
  <header class="inner teaser-h">
    <h2 id="mwa-title">
      <span class="title">Making the Web Accessible</span>
    </h2>
    <p class="subtitle">Strategies, standards, and supporting resources to help you make the Web more accessible to people with disabilities.</p>
  </header>
  <div class="inner grid-3">
    <div class="col1 making-web-accessible-box">
      <h3>{%- include_cached icon.html name="hp-book" class="mwa-icon mwa-icon-book" -%} W3C</h3>
      <p>The World Wide Web Consortium (W3C) develops international standards for the Web: HTML, CSS, and many more.</p>
    </div>
    <div class="col2 making-web-accessible-box">
      <h3>{%- include_cached icon.html name="hp-tools" class="mwa-icon" -%} WAI</h3>
      <p>The W3C Web Accessibility Initiative (WAI) develops standards and support materials to help you understand and implement accessibility.</p>
    </div>
    <div class="col3 making-web-accessible-box">
      <h3>{%- include_cached icon.html name="hp-computer" class="mwa-icon mwa-icon-computer" -%} You</h3>
      <p>You can use W3C WAI resources to make your websites, applications, and other digital creations more accessible and usable to everyone.</p>
    </div>
  </div>
</section>

{% include_cached excol.html type="start" id="changelog" %}

## Updates to this page (changelog)

{% include_cached excol.html type="middle" %}

* 28 September 2024
  * Added WCAG 3 to [Upcoming Publications list](/update/#upcoming-publications) 
* 2 September 2024
  * Corrected WCAG2ICT document title in [Upcoming Publications list](/update/#upcoming-publications)
* 29 July 2024
  * Updated [Who is We](/update/#who-is-we) with new W3C WAI Team
  * Updated [Upcoming Publications list](/update/#upcoming-publications)
* 27 June 2024
  * Updated [Upcoming Publications list](/update/#upcoming-publications)
* 29 May 2024
  * Under "Updating Core Guidelines and Other Standards", in WCAG 3 list item, added: "Please see information on the latest draft and [review questions](/standards-guidelines/wcag/wcag3-intro/#for-your-review) in [[WCAG 3 Introduction]](/standards-guidelines/wcag/wcag3-intro/)..."
  * Updated W3C WAI Staff listing - added Ken
  * Updated [Upcoming Publications list](/update/#upcoming-publications)
* 30 April 2024
  * Just updated the dates in [Upcoming Publications list](/update/#upcoming-publications)
* 26 March 2024
  * Updated call for volunteer reviewers in [How to Get Involved](/update/##participate).
* 27 February 2024
  * Removed [Digital Publishing WAI-ARIA Module 1.1](https://www.w3.org/TR/dpub-aria-1.1/) and [Digital Publishing Accessibility API Mappings 1.1](https://www.w3.org/TR/dpub-aam-1.1/)   from [Upcoming Publications list](/update/#upcoming-publications) since we published them today as "Candidate Recommendations"
  * Updated W3C WAI Staff listing
  * Swapped order of "Applying WCAG to ICT" and "EPUB Accessibility"
* 14 February 2024
  * Added [Translating Resources section](/update/#translating-resources) and more about translations under [How to Get Involved](/update/##participate).
  * Added Easy Checks under the [Testing Accessibility section](/update/#testing-accessibility-evaluation-tools).
  * Removed inactive work.
* 1 February 2024
  * Removed ARIA 1.3 from [Upcoming Publications list](/update/#upcoming-publications) since we published it in January
* 22 December 2023
  * Just updated the dates in [Upcoming Publications list](/update/#upcoming-publications)
* 30 November 2023
  * Updated [Upcoming Publications list](/update/#upcoming-publications)
  * To [Get Updated](/update/#get-updated) section: deleted Twitter; added Mastodon and LinkedIn
  * To [How to Get Involved](/update/#participate) section, added: <q>We welcome translations! If you might want to volunteer to contribute to translations, please see [Translating WAI resources](/about/translating/)</q>
  * Updated W3C WAI Staff listing
* 30 October 2023 - no changes
* 5 October 2023
  * Removed WCAG 2.2 from Current Work Highlights and Upcoming Publications, because we published it today.
* 27 September 2023
  * Updated [Upcoming Publications list](/update/#upcoming-publications)
* 30 August 2023
  * Updated the WCAG 2.2 item under "Current Work Highlights" to change "August 2023" to "2023"
  * Removed [Artificial Intelligence (AI) and Accessibility Research Symposium report](/research/ai2023/) from current work and upcoming publications, because we published it today
  * Added links to new WCAG2ICT draft
  * Updated "Defining User Requirements (AUR) and Exploring Emerging Technologies" section with link to [Digital Accessibility User Requirements](/research/user-requirements/) and information on "Collaboration Tools Accessibility User Requirements"
  * Updated [Upcoming Publications list](/update/#upcoming-publications)
  * Added W3C WAI staff titles under [Who is We](/update/#who-is-we)
* 31 July 2023
  * Updated W3C WAI staff roles under [Who is We](/update/#who-is-we)
  * Updated [Upcoming Publications list](/update/#upcoming-publications).
  * Minor update to WCAG 3 current work highlights bullet.
* 30 June 2023
  * Updated the Upcoming Publications list, including adding WCAG2ICT
  * Updated the WCAG 2.2 item under "Current Work Highlights"
  * Added AI Accessibility Symposium under "Defining User Requirements (AUR) and Emerging Technologies"
* 6 June 2023 &mdash; From the Upcoming Publications list, removed [ARIA 1.2](https://www.w3.org/TR/wai-aria-1.2/) because we published it today as a W3C Reccommendation, Web Standard.
* 31 May 2023 &mdash; Edits and updates in [Specific Invitations](/update/#specific-invitations)
* 30 May 2023
  * Added [Specific Invitations](/update/#specific-invitations) with call for participation in EOWG work and FAST TF.
  * Updated [Upcoming Publications list](/update/#upcoming-publications).
* 28 April 2023
  * Updated W3C WAI staff roles under [Who is We](/update/#who-is-we).
  * Updated [Upcoming Publications list](/update/#upcoming-publications).
  * Minor update to WCAG 2.2 current work highlights bullet.
  * Deleted Low Vision Task Force work, since it's on hold for a while.
* 31 March 2023 &mdash; Updated [Upcoming Publications list](/update/#upcoming-publications) and minor update to WCAG 2.2 current work highlights bullet.
* 28 February 2023 &mdash; No substantive updates.
* 31 January 2023 &mdash; Updated [Upcoming Publications list](/update/#upcoming-publications).
* 21 December 2022
  * Updated [Testing Accessibility, Evaluation Tools section](/update/#testing-accessibility-evaluation-tools): updated ACT Rules wording and added invitation for evaluation tool vendors to submit implementation reports.
  * Updated [Upcoming Publications list](/update/#upcoming-publications).
* 1 December 2022 &mdash; Updated [Upcoming Publications list](/update/#upcoming-publications).
* 9 November 2022 &mdash; We're in the process of updating our <a rel="me" href="https://w3c.social/@wai">Mastodon account w3c.social/@wai</a>.
* 1 November 2022 &mdash; Updated WCAG 2.2 final publication to early 2023.
* 19 October 2022 &mdash; Updated [Upcoming Publications list](/update/#upcoming-publications).
* 29 September 2022
  * Updated [Upcoming Publications list](/update/#upcoming-publications).
  * Under Current Work Highlights section, deleted "Teaching Accessibility. Curricula on Web Accessibility...", since we published it today
* 12 September 2022
  * Updated [Upcoming Publications list](/update/#upcoming-publications).
  * Updated WCAG 2.2 bullet under Current Work Highlights.
  * Deleted "ARIA 1.2..." from Current Work Highlights because we completed documenting immplementations and are ready to go from CR to PR.
  * [GitHub diff 12 Sept](https://github.com/w3c/wai-about-wai/pull/156/files), [rich text diff 12 Sept](https://github.com/w3c/wai-about-wai/pull/156/files?short_path=a0b7030#diff-a0b70304b865682a8845dbdca495ffbbc8198d8e7fc20066ce55181ffe0d461c)
* 31 August 2022 &mdash; Updated [Upcoming Publications list](/update/#upcoming-publications).
* 24 August 2022 &mdash; Added [ARIA Authoring Practices Guide (APG)](/about/groups/task-forces/practices/). Updated [Upcoming Publications list](/update/#upcoming-publications). [GitHub diff 24 Aug](https://github.com/w3c/wai-about-wai/pull/154/files), [rich text diff 24 Aug](https://github.com/w3c/wai-about-wai/pull/154/files?short_path=a0b7030#diff-a0b70304b865682a8845dbdca495ffbbc8198d8e7fc20066ce55181ffe0d461c)
* 1 August 2022 &mdash; Updated [Upcoming Publications list](/update/#upcoming-publications).
* 12 July 2022 &mdash; added: **WCAG2ICT** describes how Web Content Accessibility Guidelines (WCAG) 2 can be applied to non-web information and communications technologies (ICT). We are updating it to include WCAG 2.1 and WCAG 2.2. [[WCAG2ICT Overview]](/standards-guidelines/wcag/non-web-ict/) _[AG WG, WCAG2ICT TF]_
* 30 June 2022 &mdash; Updated [Upcoming Publications list](/update/#upcoming-publications). Updated 'Personalization' to 'WAI-Adapt'.
* 5 May 2022 &mdash; Just a few little language edits.
* 30 April 2022 &mdash; Minor updates shown in [GitHub diff 30 Apr](https://github.com/w3c/wai-about-wai/pull/141/files), [rich text diff 30 Apr](https://github.com/w3c/wai-about-wai/pull/141/files?short_path=a0b7030#diff-a0b70304b865682a8845dbdca495ffbbc8198d8e7fc20066ce55181ffe0d461c)

{% include_cached excol.html type="end" %}
