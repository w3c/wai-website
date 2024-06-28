---
title: Accessibility Conformance Testing (ACT) Overview
permalink: /standards-guidelines/act/
lang: en
github:
  label: wai-intro-act
feedbackmail: wai@w3.org
footer: >
  <p><strong>Date:</strong> Updated 30 October 2020.</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a> and <a href="http://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>) and the <a href=" https://www.w3.org/WAI/GL/task-forces/conformance-testing ">ACT Task Force</a>. ACT work is supported by the <a href="https://www.w3.org/WAI/about/projects/wai-tools/">WAI-Tools Project</a>, co-funded by the European Commission.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces the [Accessibility Conformance Testing (ACT) Rules Format](https://www.w3.org/TR/act-rules-format/) and lists ACT Rules formally published by W3C.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction

The purpose of the Accessibility Conformance Testing (ACT) effort is to establish and document rules for testing the conformance of web content to accessibility standards, such as Web Content Accessibility Guidelines (WCAG). These test rules address automated, semi-automated, and manual testing. ACT makes accessibility testing more transparent, and thus reduces confusion caused by different interpretations of accessibility guidelines.

## Who ACT is for

The primary audience of Accessibility Conformance Testing (ACT) is developers of accessibility evaluation methodologies and testing tools. They write, share, and implement ACT Rules into their products and services.

A secondary audience is accessibility experts. They often assist in setting an organization's accessibility policy, and it is important for them to know what ACT Rules do, and how they relate to their own requirements.

Who ACT is **not** for: Users of accessibility tools (web developers, content authors, QA testers, etc.) are not expected to read ACT. These audiences will use products and services that implement ACT Rules.

## What is in ACT

### ACT Rules Format 1.0

**[Accessibility Conformance Testing (ACT) Rules Format 1.0](https://www.w3.org/TR/act-rules-format/)** is a W3C Recommendation (web standard) that defines a format for writing test rules.

### ACT Rules Format 1.1

**[Accessibility Conformance Testing (ACT) Rules Format 1.1](https://www.w3.org/TR/act-rules-format-1.1/)** is under development. It proposes the following changes.

* new secondary accessibility requirements 
* allowing subjective applicability statements 

The latest [Editor Draft](https://w3c.github.io/wcag-act/act-rules-format.html) and [GitHub repository](https://github.com/w3c/wcag-act/) are available for future development.

The ACT Rules Format follows the W3C format for technical specifications, which includes several sections at the beginning: links to different versions, editors, copyright, abstract, and status with the link to errata and the email address for comments.

### ACT Rules Repository

**[List of Accessibility Conformance Testing (ACT) Rules](/standards-guidelines/act/rules/)** formally published by the W3C Accessibility Guidelines Working Group (AG WG). More rules are expected in the coming months. The [ACT Rules Community Group](https://www.w3.org/community/act-r/) developed over [50 rules](https://act-rules.github.io/rules/), many of which will be submitted to the AG WG for review and approval. Other entities can also contribute candidate rules for review and approval.

#### Future of ACT Rules

We expect more ACT Rules to be formally published by W3C as further candidate rules are contributed by the community. Contact <a href="mailto:dmontalvo@w3.org">Daniel Montalvo</a> for questions on how to contribute candidate rules and participate in the review process of ACT Rules.

## Who develops ACT

The [ACT Task Force](https://www.w3.org/WAI/GL/task-forces/conformance-testing/) of the W3C Accessibility Guidelines Working Group ([AG WG](https://www.w3.org/WAI/GL/)) develops the [ACT Rules Format](https://www.w3.org/TR/act-rules-format/) specification. The ACT Task Force also reviews test rules contributed by the community in first instance. Formal publication of the ACT Rules Format specification and of ACT Rules listed on this page is made by AG WG.

The [ACT Rules Community Group](https://www.w3.org/community/act-r/) develops test rules according to the ACT Rules Format specification. These rules by the community group do not have any formal standing in the W3C process.

Opportunities for contributing to ACT and other WAI work are introduced in [Participating in WAI](/about/participating/).

## Additional information

For more information, see:
* [Calibrate Your Accessibility Evaluation with ACT blog post](https://www.w3.org/blog/2019/10/calibrate-your-accessibility-evaluation-with-act/)
* [Harmonized Accessibility Testing blog post](https://www.w3.org/blog/2019/07/harmonized-accessibility-testing/)
* [ACT Rules Community Group GitHub workspace](https://act-rules.github.io/)
