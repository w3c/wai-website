---
title: "WAI-Tools"
lang: en
permalink: /about/projects/wai-tools/
ref: /about/projects/wai-tools/
---

![An EU Project]({{ "/content-images/about/eu.svg" | relative_url }}){:.right.small}

{::nomarkdown}
{% include_cached box.html type="start" h="2" title="Introduction" class="full" %}
{:/}

This page provides information on the Web Accessibility Initiative - Advanced Decision Support Tools for Scalable Web Accessibility Assessments **(WAI-Tools) Project**, a European Commission (EC) co-funded project, Horizon 2020 Program (780057). This project ended on 31 January 2021.

{::nomarkdown}
{% include_cached box.html type="end" %}
{% include toc.html type="start" title="Page Contents" %}
{:/}

{::options toc_levels="2" /}

-   The TOC will replace this text.
{:toc}


{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Announcements
{:#announcements}

-   **[Final Open Meeting]({{"/about/projects/wai-tools/final-open-meeting/" | relative_url }})** was held online on 26 January 2021
    -   View video recordings from [Session 1]({{"/about/projects/wai-tools/session1/" | relative_url }}), [Session 2]({{"/about/projects/wai-tools/session2/" | relative_url }}), [Session 3]({{"/about/projects/wai-tools/session3/" | relative_url }}), [Session 4]({{"/about/projects/wai-tools/session4/" | relative_url }}), [Session 5]({{"/about/projects/wai-tools/session5/" | relative_url }})
-   Norwegian [Pilot Monitoring](https://www.uutilsynet.no/english/wai-tools-documentation-pilot-monitoring/177) and [WCAG Interpretion](https://www.uutilsynet.no/english/wai-tools-documentation-wcag-interpretation-and-test-rule/800) were published on 26 October 2020
-   [Third Open Meeting]({{"/about/projects/wai-tools/third-open-meeting/" | relative_url }}) was held online on 22 September 2020
-   [WCAG-EM Report Tool](https://www.w3.org/WAI/eval/report-tool/) was updated on 22 January 2020
-   [Portuguese national observatory](https://observatorio.acessibilidade.gov.pt/) was updated on 31 October 2019
-   [Second Open Meeting]({{"/about/projects/wai-tools/second-open-meeting/" | relative_url }}) was held on 20 May 2019 in Brussels, Belgium
-   [Developing an Accessibility Statement](https://www.w3.org/WAI/planning/statements/) was published on 29 November 2018
-   [Open Format for Accessibility Test Results](https://github.com/w3c/earl) was released on 31 October 2018
-   [Online Symposium on ACT Rules for Manual Methodologies]({{"/about/projects/wai-tools/symposium/" | relative_url }}) was held on 14 March 2018
-   [First Open Meeting]({{"/about/projects/wai-tools/first-open-meeting/" | relative_url }}) was held on 29 November 2017 in Brussels, Belgium

## Project Results
{:#results}

**[Accessibility Conformance Testing (ACT) Rules](https://act-rules.github.io/rules/)**
:  Includes writing, reviewing, implementing, and validating "Accessibility Conformance Testing (ACT) Rules". About 55 rules were developed through the project so far, with another 15 to follow this year. This is the result of project deliverables D1.1, D1.2, and D1.3, which are continually developed through the [W3C ACT Rules Community Group](https://act-rules.github.io/) (previously Auto-WCAG Community Group, which has been renamed).

**[Prototype large-scale monitoring](http://qualweb.di.fc.ul.pt/placm/)**
:  Includes open source tool to visualize and compare accessibility test results gathered from different sources, including conformance evaluation reports and accessibility statements. It uses the [Open Format for Accessibility Test Results](https://github.com/w3c/earl) developed by the project as the backbone for open linked data on accessibility.

**[Norwegian national observatory](https://www.uutilsynet.no/english/information-english/252)**
:  Includes running and documenting [Pilot Monitoring](https://www.uutilsynet.no/english/wai-tools-documentation-pilot-monitoring/177) in accordance with the [EU Web Accessibility Directive (WAD)](https://eur-lex.europa.eu/eli/dir/2016/2102/oj), as well as documenting the local  [WCAG Interpretion and ACT Rules](https://www.uutilsynet.no/english/wai-tools-documentation-wcag-interpretation-and-test-rule/800) mappings. These reports provide practical insights on an example national monitoring initiative with many key take-aways for the project and beyond.

**[Portuguese national observatory](https://observatorio.acessibilidade.gov.pt/)**
:  Includes processing test results from multiple tools that provide output in the open format developed by the project (see corresponding project deliverable listed below). These tools include the open source engines from Siteimprove, Deque, and University of Lisbon developed through the project. These implement ACT Rules to provide consistent results.

**[Updated WCAG-EM Report Tool](https://www.w3.org/WAI/eval/report-tool/)**
:  Includes all the Success Criteria from WCAG 2.0 and 2.1, as well as user-interface improvements to support the selection between these two standards. This version also includes a new "Import" functionality to allow importing of test results, for example from automated testing tools. [Further improvements](https://github.com/w3c/wcag-em-report-tool/issues) are currently in planning.

**[Developing an Accessibility Statement](https://www.w3.org/WAI/planning/statements/)**
:  Includes guidance on how to develop accessibility statements for websites, mobile applications, and other digital content, as well as a free and open source accessibility statements generator tool. More information in the blog post [How to Create Accessibility Statements](https://www.w3.org/blog/2018/11/how-to-create-accessibility-statements/).

**[Open Format for Accessibility Test Results](https://github.com/w3c/earl)**
:  Includes the definition of an open data format to express accessibility test results. It is a [JSON-LD 1.0](https://www.w3.org/TR/json-ld/) serialization of the [EARL 1.0 Schema](https://www.w3.org/TR/EARL10-Schema/), and is implemented by the open source [Alfa](https://github.com/siteimprove/alfa) and [aXe Reporter](https://github.com/dequelabs/axe-reporter-earl) testing engines.

## Project Deliverables
{:#deliverables}

-   **Development of Test Rules**
    -   **D1.1: Development of Test Rules** — development of accessibility conformance test rules according to the [ACT Rules Format 1.0](https://www.w3.org/TR/act-rules-format/) standard from W3C.
    -   **D1.2: Implementation of Test Rules** — implementation of the test rules developed by the project in at least two open source testing engines, [Alfa](https://github.com/siteimprove/alfa) and [aXe Core](https://github.com/dequelabs/axe-core).
    -   **D1.3: Validation of Test Rules** — validate and refine test rules developed by the project, to meet the requirements for authoritative [ACT Rules](https://act-rules.github.io/rules/).
-   **Deployment of Test Rules**
    -   **D2.1: Open Format for Test Results** — develop open format built on [Evaluation and Report Language (EARL)](https://www.w3.org/WAI/intro/earl) and [Test Case Description Language (TCDL)](https://www.w3.org/WAI/ER/tests/).
    -   **D2.2: Applying to Portuguese Observatory** — applying the test rules and tooling developed by the project in the [Portuguese national observatory](https://observatorio.acessibilidade.gov.pt/).
    -   **D2.3: Applying to Norwegian Observatory** — running [Pilot Monitoring](https://www.uutilsynet.no/english/wai-tools-documentation-pilot-monitoring/177) and documenting [WCAG Interpretion](https://www.uutilsynet.no/english/wai-tools-documentation-wcag-interpretation-and-test-rule/800) for the [Norwegian national observatory](https://www.uutilsynet.no/english/information-english/252).
-   **Integration of Test Rules**
    -   **D3.1: Accessibility Statement Generator** — open source tool, to assist help [create accessibility statements](https://www.w3.org/WAI/planning/statements/).
    -   **D3.2: Extended Accessibility Report Tool** — extending the [WCAG-EM Report Tool](https://www.w3.org/WAI/eval/report-tool/) with functionality to import fully- and semi-automated test results.
    -   **D3.3: Large-Scale Test Data Browser** — [open source prototype](http://qualweb.di.fc.ul.pt/placm/), based on existing standards and tools, to browse large amounts of accessibility test results.

These deliverables were complemented by project management, dissemination, and engagement efforts.

## How To Participate
{:#participate}

Most of the project work listed above was developed through or in coordination with:

-   [W3C ACT Rules Community Group](https://act-rules.github.io/) (previously Auto-WCAG Community Group, which has been renamed)
-   [Accessibility Conformance Testing (ACT) Task Force](/about/groups/task-forces/conformance-testing/)
-   [Education and Outreach Working Group (EOWG)](/about/groups/eowg/)

We invited participation, comments, and contributions by anyone interested. This includes reviewing drafts of these resources and actively participating in the relevant groups to help develop these resources. All project results are provided openly on royalty-free basis. Work of the project continues in various W3C groups, in particular the ones listed above.

See also [Participating in WAI](http://www.w3.org/WAI/participation). If you have any questions, contact [Shadi Abou-Zahra](http://www.w3.org/People/shadi/) (Scientific Coordinator).

## About the Project
{:#about}

WAI-Tools, Advanced Decision Support Tools for Scalable Web Accessibility Assessments, was an Innovation Action project, co-funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 780057). The project started on 1 November 2017 for a duration of three years. WAI-Tools drove web accessibility evaluation and repair through:

-   Building on the on-going W3C efforts on [WCAG Accessibility Conformance Testing (ACT)](http://www.w3.org/wai/gl/task-forces/conformance-testing/);
-   Ensuring consistent accuracy across automated, semi-automated, and manual testing;
-   Pursuing leading edge technologies testing, including dynamic and mobile applications;
-   Leveraging the existing market of commercial, free, and open source evaluation tools;
-   Demonstrating large-scale accessibility monitoring built on open standards and tools.

WAI-Tools achieved this by carrying out key efforts in the vendor-neutral environment of the World Wide Web Consortium (W3C). WAI-Tools drew together key expertise from industry, public bodies, and research to develop common understanding of web accessibility requirements.

See [project deliverables](#deliverables) above and contact [Shadi Abou-Zahra](http://www.w3.org/People/shadi/) (Scientific Coordinator) for more information.

## Project Partners
{:#partners}

WAI-Tools project partners included:

-   [Web Accessibility Initiative (WAI)](https://www.w3.org/WAI/) – as part of W3C, France
-   [Siteimprove {% include_cached external.html %}](https://siteimprove.com/), Denmark
-   [Deque Research {% include_cached external.html %}](https://www.deque.com/), Netherlands
-   [Accessibility Foundation {% include_cached external.html %}](https://www.accessibility.nl/), Netherlands
-   [Norwegian Digitalisation Agency {% include_cached external.html %}](https://www.uutilsynet.no/), Norway
-   [Administrative Modernization Agency {% include_cached external.html %}](https://www.ama.gov.pt/), Portugal
-   [University of Lisbon, Faculty of Sciences Association for Research and Development {% include_cached external.html %}](http://www.fciencias-id.pt/), Portugal
