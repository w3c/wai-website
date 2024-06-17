---
layout: default
lang: en
title: "Template for Accessibility Evaluation Reports"
permalink: '/test-evaluate/report-template/'
github:
  label: wai-eval-report-template
footer: >
  <p><strong>Date:</strong> Substantive content updated 2002. Versions and links updated April 2024. Link to Report Tool added February 2022.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Brewer">Judy Brewer</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" title="Updated Template" icon="default" %}
{:/}

More robust information on evaluation reports is in the **[WCAG-EM Report Tool](/eval/report-tool/)**.<br>From there you can:
* Go through the pages to get explanations for each field. Click the "+" buttons to show info.
* Use the [blank report as a template](https://www.w3.org/WAI/eval/report-tool/evaluation/view-report). Click the "Download Report (HTML)" button.
* Enter your information in the tool and it will generate a report for you.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

This document presents a recommended format for communicating results of the evaluation of website accessibility according to Web Content Accessibility Guidelines (WCAG) 2. A consistent and comprehensive evaluation report format can help ensure effective evaluations as well as accurate comparisons of accessibility levels over time and between different websites.

Suggested items in the report format may vary depending the context. Words in brackets \[...\] are intended to be filled in with information from the actual review. Related documents describing the evaluation method and organization of review teams are listed in the References section below.


## Template {#template}

{::options toc_levels="3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Template Sections" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


### 1. Executive Summary {#summary}

This report describes the conformance of the \_\_\_\_\_\_\_ website with [W3C's Web Content Accessibility Guidelines (WCAG)](/standards-guidelines/wcag/). The review process is described in Section 5 below and is based on evaluation described in [Accessibility Evaluation Resources](/test-evaluate/).

Based on this evaluation, the \_\_\_\_\_\_\_\_ website \[meets/ does not meet/ is close to meeting\] WCAG 2.2, Conformance Level AA. Detailed review results are available in Section 6 below. Resources for follow-up study are listed in Section 7 below. Feedback on this evaluation is welcome.

### 2. Background about Evaluation {#background}

Conformance evaluation of web accessibility requires a combination of [semi-automated evaluation tools](/test-evaluate/tools/list/) and manual evaluation by an experienced reviewer. The evaluation results in this report are based on evaluation conducted on the following date(s): \_\_\_\_\_\_\_. The website may have changed since that time.

### 3. Scope of Review {#website}

-   \[Name of website\]
    -   \[and purpose of site, if relevant\]
-   \[Base URL of site\]
-   \[URLs included in review\]
    -   \[if dynamically generated website, provide sample screen captures to demonstrate what was reviewed\]
    -   \[indicate which pages were reviewed manually as opposed to by semi-automated evaluation tools\]
-   \[URLs excluded from review\]
-   \[Exact date, or range of dates, on which review conducted\]
-   \[Natural language(s) of website\]

### 4. Reviewer(s) {#reviewers}

-   \[Name of reviewer or review team, unless anonymous\]
-   \[Organization with which reviewer(s) is/are affiliated, if relevant and if not anonymous\]
-   \[Contact information for reviewer(s) or reviewer(s) organization, unless anonymous\]\
-   \[Reviewer(s) areas of expertise, by reference to "expertise of review teams" in [Using Combined Expertise to Evaluate Web Accessibility](/test-evaluate/combined-expertise/)\]
-   \[Natural language(s) with which reviewer(s) is/are fluent, or familiar\]

### 5. Review Process {#process}

-   \[Identify WCAG 2.2 Level for which conformance was tested, e.g., WCAG 2.2 Level A, AA, AAA\]
-   \[Identify [evaluation and validation tools](/test-evaluate/tools/list/) used, and versions thereof\]
-   \[Description of manual reviews (usability testing of accessibility features) used\]s

### 6. Results and Recommended Actions {#results}

-   \[Interpretative summary of review results\]
    -   \[e.g. this website appears to \[meet/ not meet/ is close to meeting\] WCAG 2.2 A, AA, AAA\]
    -   \[accessibility features in which this site is strong include \_\_\_\_\_\_\_\]
    -   \[recommended priorities for addressing inaccessible features of site\]
-   \[Detailed results, structured according to WCAG 2.2\]
    -   \[include links to WCAG 2.2 success criteria and techniques for all non-conformant items\]
    -   \[attach or link to specific reports in appendices, e.g. output of validators and evaluation tools\]
    -   \[provide recommendations for addressing non-conformant checkpoints\]
-   \[Describe or point to a suggested program of on-going monitoring of
    website accessibility, re-evaluation of authoring tools, etc.\]

### 7. References {#references}

-   {:#wcag-overview} [Web Content Accessibility Guidelines (WCAG) Overview](/standards-guidelines/wcag/)<br>
    https://www.w3.org/WAI/standards-guidelines/wcag/
-   {:#wcag} [Web Content Accessibility Guidelines 2.2](https://www.w3.org/TR/WCAG22/)<br>
    https://www.w3.org/TR/WCAG22/
-   {:#techs} [Techniques for WCAG 2](https://www.w3.org/WAI/WCAG22/Techniques/)<br>
    https://www.w3.org/WAI/WCAG22/Techniques/
-   {:#eval} [Accessibility Evaluation Resources](/test-evaluate/)<br>
    https://www.w3.org/WAI/test-evaluate/
-   {:#tools} [Web Accessibility Evaluation Tools List](/test-evaluate/tools/list/)<br>
    https://www.w3.org/WAI/test-evaluate/tools/list/
-   {:#reviewteams} [Using Combined Expertise to Evaluate Web Accessibility](/test-evaluate/combined-expertise/)<br>
    https://www.w3.org/WAI/test-evaluate/combined-expertise/

### 8. Appendices {#appendix}

-   \[Attach detailed validator and evaluation tool reports here\]

\[End of template\]
