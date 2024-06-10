---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Evaluating Web Accessibility Overview"
nav_title: "Evaluation Overview"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2023-08-01 # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-evaluation-overview

permalink: /test-evaluate/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /test-evaluate/  # Do not change this

changelog: /test-evaluate/changelog/ # Do not change this
feedbackmail: wai@w3.org
class: tight-page

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p>Note about video description: The videos on this page do not include synchronized audio description because the visuals only illustrate the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. Description of visual information is integrated in the Text Transcript with Description of Visuals (“descriptive transcript”).</p>
  <p><strong>Date:</strong> Updated 1 August 2023. CHANGELOG.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Videos developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> project funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245). <a href="./acknowledgements/">Acknowledgements</a>.</p>
  <p><a rel="license" href="https://creativecommons.org/licenses/by/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a> The videos are licensed under a <a rel="license" href="https://creativecommons.org/licenses/by/4.0/">Creative Commons Attribution 4.0 International License</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page links to resources to help evaluate web accessibility. Accessibility evaluation is also called "assessment", "audit", and "testing".

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction {#intro}

{% comment %}
This abuses the video-card component and tries to make it work with an embedded YouTube player that is enhanced with the AblePlayer library. Remove and replace with regular video-card component in case of bugs.
{% endcomment %}
<div class="video-card">
  {% include video-player-data.html
      video-id="evaluating-resources-overview"
      yt-id="C4GIqWeywiI"
  %}
  <p><a href="#alternatives">Alternatives for Video Introduction - Resources Overview</a></p>
</div>

When developing or redesigning a website or web application, evaluate accessibility early and throughout the development process to identify accessibility problems early, when it is easier to address them.

There are evaluation tools that help with evaluation. However, no tool alone can determine if a site meets accessibility standards. Knowledgeable human evaluation is required to determine if a site is accessible.

## Initial Checks {#initial}

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/easy-checks-accessibility.mp4"
  captions="/wai-videos/evaluating/easy-checks-accessibility.en.vtt|en|default"
  poster="video-thumb-easy-checks.png"
  accessible-version="https://www.w3.org/WAI/test-evaluate/preliminary/#video-intro"
  accessible-version-label="Video: Easy Checks Overview"
  poster="/content-images/test-eval/video-thumb-easy-checks.png"
%}

Even if you don’t know anything about accessibility and you don’t have a robust accessibility tool, you can check some aspects of accessibility.

[Easy Checks — A First Review of Web Accessibility](/test-evaluate/preliminary/)
:   Provides step-by-step guidance and brief explanations for checking some aspects of accessibility.

## Tools

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/tools-for-evaluating.mp4"
  captions="/wai-videos/evaluating/tools-for-evaluating.en.vtt|en|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/tools/#video-intro"
  accessible-version-label="Video: Evaluation Tools Overview"
  poster="/content-images/test-eval/video-thumb-tools.png"
%}

Web accessibility evaluation tools are software programs or online services that help determine if web content meets accessibility standards.

[Web Accessibility Evaluation Tools List](/test-evaluate/tools/list/)
:   Includes information on more than 100 tools. You can use the filters to narrow down the list to the types of tools you are interested in.

[[Selecting Web Accessibility Evaluation Tools]](/test-evaluate/tools/selecting/)
:   Provides guidance on choosing tools. It describes the features and functionality of different types of evaluation tools, and discusses things to consider for your situation.

## Conformance Evaluation and Reports {#conformance}

{% include video-card.html
video-url="//media.w3.org/wai/evaluation-intros/conformance-evaluation.mp4"
captions="/wai-videos/evaluating/conformance-evaluation.en.vtt|en|default"
accessible-version="https://www.w3.org/WAI/test-evaluate/conformance/#video-intro"
accessible-version-label="Video: Conformance Evaluation Overview"
poster="/content-images/test-eval/video-thumb-conformance.png"
%}

Conformance evaluation determines how well web pages or applications meet accessibility standards. W3C’s Website Accessibility Conformance Evaluation Methodology (WCAG-EM) is an approach for determining conformance to Web Content Accessibility Guidelines (WCAG).

[[WCAG-EM Overview: Website Accessibility Conformance Evaluation Methodology]](/test-evaluate/conformance/wcag-em/)
:   A short page with basic information to get you started. We suggest you read it before going to the [full WCAG-EM document](https://www.w3.org/TR/WCAG-EM/).

[WCAG-EM Report Tool: Website Accessibility Evaluation Report Generator](https://www.w3.org/WAI/eval/report-tool/)
:   Helps you generate evaluation reports according to WCAG-EM. It does not do the checking for you. It helps you follow the steps of WCAG-EM and it generates a report from the input you provide.

[[Template for Web Accessibility Evaluation Reports]](/test-evaluate/report-template/)
:   Suggests information to include in a report.

[ATAG Report Tool](https://www.w3.org/WAI/atag/report-tool/)
:   Helps you generate a report on how a tool meets Authoring Tool Accessibility Guidelines ([ATAG](/standards-guidelines/atag/)). Authoring tools are software and services used to create web content – such as content management systems (CMS) and what-you-see-is-what-you-get (WYSIWYG) HTML editors.

[Accessibility Conformance Testing (ACT) Rules](/standards-guidelines/act/rules/about/)
:  Describe how to test conformance of accessibility standards such as WCAG and WAI-ARIA. ACT Rules are primarily used by developers of test tools and methodologies. Accessibility testers may find some rules helpful for evaluating edge cases consistently.

<!-- Communicate the results of evaluation clearly, including the scope of the evaluation. -->

Specifications for expressing test results (EARL) and for writing accessibility test rules (Accessibility Conformance Testing (ACT) Rules Format) are introduced in [Evaluation Standards Overview](/standards-guidelines/evaluation/).

## People

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/involving-users.mp4"
  captions="/wai-videos/evaluating/involving-users.en.vtt|en|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/involving-users/#video-intro"
  accessible-version-label="Video: Involving Users in Web Accessibility Overview"
  poster="/content-images/test-eval/video-thumb-involving-users.png"
%}

Getting the right people and skills involved makes your accessibility evaluations more effective.

[Using Combined Expertise to Evaluate Web Accessibility](/test-evaluate/combined-expertise/)
:   Discusses skill sets and considerations for collaborative review.

[[Involving Users in Evaluating Web Accessibility]](/test-evaluate/involving-users/)
:   Provides guidance on including people with disabilities ("users") in evaluation throughout project development.

<hr>

{% include excol.html type="start" id="video-intro-transcript" %}

##  Alternatives for Video Introduction - Resources Overview {#alternatives}

{% include excol.html type="middle" %}

_This video is also available on a W3C server: [Video: Evaluating Web Accessibility - Resources Overview (file format: MP4, file size: 45MB)](https://media.w3.org/wai/evaluation-intros/evaluating-resources-overview.mp4)._

###  Text Transcript with Description of Visuals for Video Introduction - Resources Overview {#transcript}

<table aria-labelledby="transcript">
  <tbody>
    <tr>
      <th>Audio</th>
      <th>Visual</th>
    </tr>
    <tr>
      <td>Evaluating web accessibility: resources overview </td>
      <td>Evaluating web accessibility: resources overview.</td>
    </tr>
    <tr>
       <td>Evaluation helps you ensure that your websites and applications meet accessibility requirements. </td>
      <td>A magnifying glass with the word evaluation on a computer screen with a website on it.</td>
    </tr>
    <tr>
      <td>Ideally you evaluate regularly throughout the design and development process. This way you find errors early and avoid costly repairs later in the process. </td>
      <td>The web page components rearrange on the page until following a good design.</td>
    </tr>
    <tr>
      <td>The W3C Web Accessibility Initiative, W-A-I, or WAI, provides free resources to help you with your evaluation. </td>
      <td>W3C and Web Accessibility Initiative (WAI) logos.</td>
    </tr>
    <tr>
      <td>"Easy Checks - A First Review of Web Accessibility" explains how you can do some checks yourself. </td>
      <td>"Easy Checks - A First Review of Web Accessibility". A person in front of the computer. A light bulb appears.</td>
    </tr>
    <tr>
      <td>Even if you are new to web accessibility and not technical, these checks give you a rough idea of the accessibility of any web page. </td>
      <td>A document of checks. Each check is highlighted to show fails or passes.</td>
    </tr>
    <tr>
      <td>WAI also maintains a "Web Accessibility Evaluation Tools List" that you can filter. </td>
      <td>Web Accessibility Evaluation Tools List. A list of tools displayed as icons..</td>
    </tr>
    <tr>
      <td>"Selecting Web Accessibility Evaluation Tools" explains what tools can and cannot do. </td>
      <td>Selecting Web Accessibility Evaluation Tools. The tools icons displayed in a computer.</td>
    </tr>
    <tr>
      <td>For more experienced evaluators, WAI provides "WCAG-EM", the "Website Accessibility Conformance Evaluation Methodology". </td>
      <td>WCAG-EM. Website Accessibility Conformance Evaluation Methodology. A person in front of a computer. A simplified report is displayed.</td>
    </tr>
    <tr>
      <td>The "WCAG-EM Report Tool" helps you record the findings as you follow the methodology. </td>
      <td>WCAG-EM Report Tool. A progress bar shows the various stages of the evaluation methodology.</td>
    </tr>
    <tr>
      <td>To help you better understand how different users experience your website and applications, WAI provides guidance in "Involving Users in Web Projects for Better, Easier Accessibility" and "Involving users in Evaluating Web Accessibility."</td>
      <td>The screen splits into 12 fields each with a different user in front of a computer. Involving Users in Web Projects for Better, Easier Accessibility and Involving users in Evaluating Web Accessibility</td>
    </tr>
    <tr>
      <td>With all these resources, you can learn how to check your website for accessibility and prioritize the issues you need to address first. </td>
      <td>A magnifying glass with the words check for accessibility is replaced with a list of issues.</td>
    </tr>
    <tr>
      <td>Web accessibility: essential for some, useful for all. </td>
      <td>Icons around a computer: hand; eye; brain; ear; and mouth with sound waves.</td>
    </tr>
    <tr>
      <td>For resources on evaluating web accessibility, visit w3.o-r-g/W-A-I/evaluation. </td>
      <td>Evaluation resources, W3C and Web Accessibility Initiative (WAI) logos.</td>
    </tr>
  </tbody>
</table>

{% include excol.html type="end" %}
