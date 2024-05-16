---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".
title: Selecting Web Accessibility Evaluation Tools
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-05-13  # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  repository: w3c/wai-website
  path: pages/test-eval/evaluation-tools/selecting-eval-tools.md  # Add the language shortcode to the middle of the filename, for example: content/index.fr.md
  label: wai-selecting-eval-tools

permalink: /test-evaluate/tools/selecting/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /test-evaluate/tools/selecting/  # Do not change this

layout: default

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Latest editors and developers:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
   <p><strong>Date:</strong> Information on specific tools is updated frequently, as we receive it. In the information for each tool there is a last updated date. The Evaluation Tools List user interface was updated in December 2023. First published in March 2006.</p>
   <p><strong>Latest editors and developers:</strong> <a href="https://www.w3.org/People/kevin/">Kevin White</a>, Eric Velleman, Michel Hansma, and Vera Lange. <strong>Content maintainer:</strong> José Ramón Hilera González. <a href="https://www.w3.org/WAI/ER/tools/acknowledgements">Acknowledgements</a> lists contributors and previous editors, including <a href="https://www.w3.org/groups/wg/eowg/participants/">EOWG participants</a>, Eric Eggert, and Shadi Abou-Zahra.</p>
   <p>Developed by the Accessibility Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) Developed with support from the <a href="https://www.w3.org/WAI/TIES/">WAI-TIES Project</a> in 2006, updated with support from the <a href="https://www.w3.org/WAI/ACT/">WAI-ACT Project</a> in 2014, and revised in 2023 as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Introduction" class="full" %}
{:/}

Web accessibility evaluation tools are software programs or online services that help determine if web content meets accessibility guidelines. This document highlights features of evaluation tools, and discusses different aspects to consider when selecting these tools. Links to different tools are provided in the [[Web Accessibility Evaluation Tools List]](/test-evaluate/tools/list/). That page also offers a filter assistant to help you make a first selection to find the tool that may best help you.

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

## Video: Evaluation Tools Overview {#video}

{% include video-player-data.html
    yt-id="bn1XJSjc_qM"
    video-id="tools-for-evaluating"
%}

_This video is also available on a W3C server: [Video: Evaluation Tools Overview (file format: MP4, file size: 51MB)](https://media.w3.org/wai/evaluation-intros/tools-for-evaluating.mp4)._

{% include excol.html type="start" id="video-intro-transcript" %}

Text Transcript with Description of Visuals

{% include excol.html type="middle" %}

<table>
  <thead>
    <tr>
      <th width="50%">Audio</th>
      <th>Visual</th>
    </tr>
  </thead>
<tbody>
  <tr>
    <td>Tools for evaluating web accessibility</td>
    <td>Tools for evaluating web accessibility</td>
  </tr>
  <tr>
    <td>There are software programs and online services to help you identify accessibility barriers. </td>
    <td>A tool box by a computer opens. A magnifying glass with the word accessibility comes out to inspect a website on the computer.</td>
  </tr>
  <tr>
    <td>They can save you lots of time and effort on evaluation, and can help you avoid creating new accessibility barriers. </td>
    <td>Save time and effort. Avoid accessibility barriers.</td>
  </tr>
  <tr>
    <td>However, tools can't do it all. Some accessibility checks just cannot be automated and require manual intervention. </td>
    <td>A person next to a computer with a website uses a magnifying glass with the word accessibility.</td>
  </tr>
  <tr>
    <td>Some tools guide you through the checks that cannot be automated. </td>
    <td>A list of checks next to the computer.</td>
  </tr>
  <tr>
    <td>Some tools check one page at a time, while others can scan entire websites. </td>
    <td>A web page and a web site are being scanned; fail, pass, and warning marks are shown.</td>
  </tr>
  <tr>
    <td>Tools can be integrated into different work environments. For example, into your web browser, content management system (C-M-S), and your development and deployment tools. </td>
    <td>Web browser, CMS and deployment around a tools icon displayed in a computer.</td>
  </tr>
  <tr>
    <td>They support different roles in a project team, such as content authors, code developers, designers, and product owners. </td>
    <td>The tools icon is surrounded with icons: pen; coding; paintbrush and person with a key.</td>
  </tr>
  <tr>
    <td>Note that in some cases tools can provide inaccurate results. </td>
    <td>A magnifying glass with a triangular exclamation mark sign.Multiple magnifying glasses are displayed.
 </td>
  </tr>
  <tr>
    <td>So avoid relying too much on what tools say over addressing the real-life experience of website users. </td>
    <td>The screen splits into 12 different people in front of a computer.</td>
  </tr>
  <tr>
    <td>"Selecting Web Accessibility Evaluation Tools" explains what tools can and cannot do, and what to look for in tools that meet your needs. </td>
    <td>Selecting Web Accessibility Evaluation Tools. A toolbox icon comes in followed by a signpost and a binoculars icon.</td>
  </tr>
  <tr>
    <td>The list of web accessibility evaluation tools has filters to help you find the right tool for your particular situation. </td>
    <td>A list of documents with the word tool scroll down and to a filter icon, only two documents come out.</td>
  </tr>
  <tr>
    <td>Equipped with tools and knowledge on how to use them, you are in good shape to find accessibility barriers more efficiently. </td>
    <td>A person with a tools and light bulb icons. The two icons merge together to form a magnifying glass with the word barriers.</td>
  </tr>
  <tr>
    <td>Web accessibility: essential for some, useful for all. </td>
    <td>Icons around a computer: hand; eye; brain; ear; and mouth with sound waves.</td>
  </tr>
  <tr>
    <td>For information on tools for evaluating web accessibility, visit <a href="https://www.w3.org/WAI/evaluation">w3.org/WAI/evaluation</a>. </td>
    <td>Evaluation tools, W3C and Web Accessibility Initiative (WAI) logos.</td>
  </tr>
</tbody>
</table>

{% include excol.html type="end" %}

## What Evaluation Tools Can Do and Can *Not* Do
{:#cannot}

Web accessibility evaluation tools can help you quickly identify potential accessibility issues. You can use them through all phases of the web design and development process. Tools can provide fully-automated checks, and help you with manual review.

Tools cannot check all accessibility aspects automatically. Human judgement is required. Sometimes evaluation tools can produce false or misleading results. Web accessibility evaluation tools can not *determine* accessibility, they can only *assist* in doing so.

## Features of Evaluation Tools
{:#features}

Web accessibility evaluation tools target different audiences. This includes designers, developers, non-technical content authors, quality assurance testers, and sometimes also end-users. Tools offer different features and functionality which may help users to compare and assess web accessibility evaluation tools for their specific needs.

### Main Features

The following features describe tools found on the [[Web Accessibility Evaluation Tools List]](/test-evaluate/tools/list/). These can be used as filters to reduce the number of tools shown.

**Purpose**
: Are you looking for a tool that can do an automated test, or should the tool help you with manual testing or a simulation of the user experience.

**Product evaluated**
: Depending on the sort of product you are evaluating (e.g. website, document, application)  you may need a specific tool that can best help you. Some tools specialize in evaluation of websites, others in documents, desktop applications, mobile applications, etc. 

**Paid or free**
: Evaluation tools are available under a variety of license types, such as Open Source, Commercial, Enterprise, etc. Some tools are paid, others free.

**Type of tool**
: Evaluation tools can be plugins (extensions) for authoring tools and web browsers, command line tools, desktop or mobile applications, and online services. Different tools may be combined, depending on your design and development process.

**Standards**
: Different organizations and governments may require conformance with different accessibility standards, thus different tools support these standards. The W3C Web Content Accessibility Guidelines (WCAG) is internationally recognized as the standard for web accessibility, and supported by most tools.

**File type**
: Most evaluation tools check the accessibility of HTML content. Some check other web technologies, such as EPUB, WAI-ARIA, CSS, SVG and PDF.

**Scope**
: The scope of what the evaluation tool can automatically test varies depending on the tool. Some tools check a single page, while others check entire groups of related pages. Some can also access password-restricted content.

**Operating system**
: Some tools only work on specific operating systems like Windows, MacOS, Linux, Android, iOS.

**Browser for plugin**
: Sometimes, tools only work in specific browsers like in Chrome, Edge, Safari, Firefox, etc.

**Accessibility statement**
: It is important that evaluation tools are accessible so that people with disabilities can use them. Some vendors provide information on the accessibility of their tool in an accessibility statement.

**ACT Rules**
: Tool vendors can describe if and how their tool(s) support the Accessibility Conformance Testing Rules. If there is a report about the implementation of the rules, the details section of the tool in the Web Accessibility Evaluation Tools List will provide a link to the report. For more information, read [ACT Rules Implementation in Test Tools and Methodologies](https://www.w3.org/WAI/standards-guidelines/act/implementations/).

**Language**
: Evaluation tools support different languages. This includes the user interface of the tools, as well as the language of the content they support (for example, for detecting language-related barriers).

**Assists by**
: Some web accessibility evaluation tools can (help you) generate a complete accessibility report. You can filter if you want a tool that can help you:

  * *Generate a report of evaluation results:* Reports are useful to determine the conformance of the criteria that can be automatically and manually checked. This may also include an accessibility score.

  * *Display information within pages:* This means that the tool can insert temporary icons and markup to display results of accessibility checks. They are useful to view issues in context. They are also useful to understand the relative importance of each issue.
  
  * *Modify the presentation of pages:* Transformation tools change the appearance of a webpage or site to help identify design issues. For example, the tool may show the site in text only or without color. These tools are useful to compensate for the limitations of automated testing.

## Further Considerations
{:#further}

There are many considerations to take into account when selecting an evaluation tool.

Each organization, project, and team has differing needs for different features.

Web designers could be looking for tools to analyze their design’s accessibility performance. Web developers will prefer tools that help them assess their code. An organization may need a fully automated evaluation tool to track their whole website. Another organization may only need occasional spot checks.

You may want to consider the following items when selecting an evaluation tool:

### Organizational Structure and Development Process

Development teams may gain from using a combination of evaluation tools. Using a combination of tools could meet the various team members’ needs during all stages of the project.

### Complexity and Size of the Web Content

Some complex sites could have a lot of multimedia content. Other complex sites could use specialist technologies such as MathML. Specialized evaluation tools may be critical for these websites.

### Skills and Knowledge of the Web Developers

Select the tool commensurate to team's skills. Some evaluation tools require users to have more knowledge of accessibility or code. Some tools also help to increase accessibility or code knowledge.
