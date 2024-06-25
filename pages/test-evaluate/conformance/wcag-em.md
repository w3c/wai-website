---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".
title: "WCAG-EM Overview: Website Accessibility Conformance Evaluation Methodology"
title_html: "WCAG-EM Overview:<br>Website Accessibility Conformance Evaluation Methodology"
nav_title: "WCAG-EM Conformance Methodology"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2020-01-01  # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-wcag-em

permalink: /test-evaluate/conformance/wcag-em/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /test-evaluate/conformance/wcag-em/   # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p>Note about video description: The video on this page does not include synchronized audio description because the visuals only illustrate the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. Description of visual information is integrated in the Text Transcript with Description of Visuals (“descriptive transcript”).</p>
  <p><strong>Date:</strong> Updated 28 April 2020. First published as "Conformance Evaluation of Web Sites for Accessibility" in September 2005.</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>) and the WCAG 2.0 Evaluation Methodology Task Force (<a href="https://www.w3.org/WAI/ER/2011/eval/eval-tf">Eval TF</a>). Video developed with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> project funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces the Website Accessibility Conformance Evaluation Methodology (WCAG-EM).

Quick links to the resources:

-   [Website Accessibility Conformance Evaluation Methodology (WCAG-EM)](http://www.w3.org/TR/WCAG-EM/)
-   [WCAG-EM Report Tool: Website Accessibility Evaluation Report Generator](http://www.w3.org/WAI/eval/report-tool/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include_cached toc.html levels="2" %}


{% include excol.html type="all" %}

{% include excol.html type="start" id="video-intro" %}

## {% include image.html src="test-eval/video-thumb-conformance.png" alt="" class="video tiny" %} Video: Conformance Evaluation Overview {#video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="conformance-evaluation"
  yt-id="u-mOCGX8ckw"
%}

_This video is also available on a W3C server: [Video: Conformance Evaluation Overview (file format: MP4, file size: 30MB)](https://media.w3.org/wai/evaluation-intros/conformance-evaluation.mp4)._

{% include excol.html type="start" id="video-intro-transcript" %}

Text Transcript with Description of Visuals

{% include excol.html type="middle" %}

<table>
  <thead>
    <tr>
      <th width="65%">Audio</th>
      <th>Visual</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Web accessibility conformance evaluation. </td>
      <td>Web accessibility conformance evaluation.</td>
    </tr>
    <tr>
      <td>Conformance evaluation determines how well your content meets specific accessibility standards, such as the "W3C Web Content Accessibility Guidelines", or "WCAG" for short. </td>
      <td>Conformance evaluation. A progress bar is filled until meets the WCAG.</td>
    </tr>
    <tr>
      <td>Often you'll want to do conformance evaluation:
        <ul>
          <li> as a final check before releasing a product</li>
          <li> in order to provide information to potential purchasers of your product</li>
          <li> to regularly monitor the accessibility of your website</li>
          <li> before procuring a product</li>
        </ul></td>
      <td>Icons for each stage: open box with a check mark; round "i"; magnifying glass on a computer; and shopping trolley.</td>
    </tr>
    <tr>
      <td>(continued list)
        <ul>
          <li> and when getting started with implementing accessibility, to get a list of accessibility issues that you need to address.</li>
        </ul></td>
      <td>All icons are integrated in a skyrocket icon. A document with the list of accessibility issues.</td>
    </tr>
    <tr>
      <td>To do effective conformance evaluation, you need expertise in:
        <ul>
          <li> accessibility standards</li>
          <li> accessible web design and development</li>
          <li> assistive technologies</li>
          <li> and how people with disabilities use the Web.</li>
        </ul></td>
      <td>Icons are shown in turn: conformation evaluation words; award ribbon; paint brush and coding icon; assistive technologies icons; and finally people figures.</td>
    </tr>
    <tr>
      <td>You'll probably also want to use evaluation tools to be more efficient. </td>
      <td>A tool box with a gauge moving up.</td>
    </tr>
    <tr>
      <td>"WCAG-EM", the "Website Accessibility Conformance Evaluation Methodology", provides a structure for your evaluation process. </td>
      <td>WCAG-EM, Website Accessibility Conformance Evaluation Methodology. A magnifying glass with the word accessibility.</td>
    </tr>
    <tr>
      <td>It describes a process to:
        <ul>
          <li> define the scope of your evaluation</li>
          <li> explore your website assets</li>
          <li> select a representative sample of web pages from your website</li>
          <li> evaluate the selected sample</li>
          <li> and report your evaluation findings.</li>
        </ul></td>
      <td>Text boxes load one after the other: define scope; explore assets; select sample; evaluate sample; and report findings.</td>
    </tr>
    <tr>
      <td>WCAG-EM also recommends involving real users with disabilities during evaluation, to help you address the real-life experience of your website users. </td>
      <td>A person in front of a computer displaying a website. Passes and fails are marked.</td>
    </tr>
    <tr>
      <td>The open source WCAG-EM Report Tool helps you follow the methodology, record the outcomes, and download a report of your evaluation. </td>
      <td>WCAG-EM Report Tool. A progress bar shows the various stages of the evaluation methodology. A record document is displayed in the computer screen and downloaded.
      </td>
    </tr>
    <tr>
      <td>Web accessibility: essential for some, useful for all. </td>
      <td>Icons around a computer: hand; eye; brain; ear; and mouth with sound waves.</td>
    </tr>
    <tr>
      <td>For information on web accessibility conformance evaluation, visit w3.o-r-g/W-A-I/evaluation. </td>
      <td>Conformance Evaluation, W3C and Web Accessibility Initiative (WAI) logos.</td>
    </tr>
  </tbody>
</table>

{% include excol.html type="end" %}

{% include excol.html type="end" %}

## Introduction

Website Accessibility Conformance Evaluation Methodology (WCAG-EM) is an approach for determining how well a website conforms to Web Content Accessibility Guidelines ([WCAG](/standards-guidelines/wcag/)).

If you want to get a general sense of how a web page addresses a few accessibility issues, see [Easy Checks - A First Review of Web Accessibility](/test-evaluate/preliminary/). It is usually best to do preliminary checks before applying WCAG-EM, and to address potential accessibility barriers before investing in a more thorough review such as WCAG-EM.

WCAG-EM is a supporting resource for the WCAG standard; it does not define additional WCAG requirements. It is published as a W3C Working Group Note.

### Scope

WCAG-EM applies to all websites, including web applications and mobile websites. It covers different situations, including self-assessment and third-party evaluation. It is independent of particular evaluation tools, web browsers, or assistive technologies.

WCAG-EM is primarily for evaluating conformance of existing websites. However, accessibility should not be left until the evaluation stage; it should be integrated from the beginning and throughout the project lifecycle — in planning, design, and development.

Other aspects of evaluation are addressed in related pages of the [Evaluating Web Accessibility](/test-evaluate/) resource suite. For example, guidance to help you better understand real-world accessibility issues and evaluate effective accessibility solutions is in [Involving Users in Evaluating Web Accessibility](/test-evaluate/involving-users/).

Who WCAG-EM is for {#for}
--------------------------

WCAG-EM is for anyone who wants a common procedure for auditing websites. It is for direct use by internal evaluators, external auditors, benchmarkers, and researchers. Additionally, WCAG-EM can be referred to by managers, procurers, policy makers, regulators, and others. 

Applying WCAG-EM successfully requires knowledge of WCAG, accessible web design, assistive technologies, and how people with different disabilities use the Web (as described in the WCAG-EM [Required Expertise section](https://www.w3.org/TR/WCAG-EM/#expertise)).

What is in WCAG-EM {#whatis}
-----------------------------

WCAG-EM provides guidance on using the methodology and considerations for specific situations. The conformance evaluation procedure is detailed under 5 main steps:

1.  **Define the scope of the evaluation** - defining what is included in the evaluation; the goal of the evaluation; and the WCAG conformance level (A, AA, AAA).
2.  **Explore the website** - identifying key web pages; key functionality; types of web content, designs, functionality, etc.; required web technologies.
3.  **Select a representative sample** - guidance on structured and randomly selected web pages when it is not feasible to evaluate every web page on a website.
4.  **Evaluate the selected sample** - determining successes and failures in meeting WCAG; accessibility support for website features; and recording evaluation steps.
5.  **Report the evaluation findings** - aggregating and reporting evaluation findings; making evaluation statements; and calculating overall scores.

### Technical document format

WCAG-EM follows the W3C format for technical specifications which includes several sections at the beginning: links to different versions, editors, copyright, abstract, and status with the link to errata and the email address for comments. There is a link at the top to the Table of Contents.

WCAG-EM Report Tool {#wert}
----------------------------

The [**WCAG-EM Report Tool: Website Accessibility Evaluation Report Generator**](https://www.w3.org/WAI/eval/report-tool/) helps you follow the steps of WCAG-EM and generate a structured report from the input that you provide.

Who develops WCAG-EM {#wg}
---------------------------

WCAG-EM is developed by the WCAG 2.0 Evaluation Methodology Task Force ([Eval TF](https://www.w3.org/WAI/ER/2011/eval/eval-tf)), which is a joint task force of the Web Content Accessibility Guidelines Working Group ([WCAG WG](https://www.w3.org/WAI/GL/)) and Evaluation and Repair Tools Working Group ([ERT WG](https://www.w3.org/WAI/ER/)). The Working Groups are part of the World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)).

