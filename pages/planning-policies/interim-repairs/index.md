---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Web Accessibility First Aid: Approaches for Interim Repairs"
title_html: "Web Accessibility First Aid:<br> Approaches for Interim Repairs"
nav_title: Approaches for Interim Repairs
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2019-01-09   # Keep the date of the English version
first_published: "March 2006"

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-first-aid

permalink: /planning/interim-repairs/   # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /planning/interim-repairs/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:", "Editor:" and "Previous contributors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p>History: Previously titled "Short Term Website Accessibility Improvements" and "Improving the Accessibility of Your Website".</p>
  <p><strong>Editor: </strong><a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Previous editors: <a href="https://www.w3.org/People/kevin">Kevin White</a> and <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.  Previous contributors: Sharron Rush, Anna Belle Leiserson, Judy Brewer, and <a href="https://www.w3.org/groups/wg/eowg/participants/">EOWG Participants</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>). First developed with support from <a href="https://www.w3.org/WAI/TIES/"><abbr title="Web Accessibility Initiative: Training, Implementation, Education, Support">WAI-TIES</abbr> Project</a>, then updated with support of the <a href="https://www.w3.org/WAI/ACT/"><abbr title="Web Accessibility Initiative - Cooperation Framework for Guidance on Advanced Technologies, Evaluation Methodologies, and Research Agenda Setting to Support eAccessibility">WAI-ACT</abbr> Project</a>, and later the <a href="https://www.w3.org/WAI/DEV/"><abbr>WAI-DEV</abbr> Project</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

Do you need to urgently address accessibility in an on-going web project?
This page provides a concise overview with pointers to help address the most critical issues.
Find a more comprehensive accessibility approach for the entire design and development process in [Planning and Managing Web Accessibility](/planning-and-managing/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}
{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}
- TOC is created automatically.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

Key Resources for Designers and Developers {#resources}
------------------------------------------

- [[Tips for Getting Started]](/tips/) — Practical considerations with examples for designing, writing, and developing accessible web content.
- [[Web Accessibility Tutorials]](/tutorials/) — Detailed information on specific topics with guidance on addressing accessibility requirements.
- [How to Meet WCAG (Quick Reference)](https://www.w3.org/WAI/WCAG22/quickref/) — A customizable quick reference to Web Content Accessibility Guidelines (WCAG) 2.

What is Accessibility? {#understand}
----------------------

If you are new to accessibility, it is often helpful to first get a basic understanding of accessibility:

- [[Introduction to Web Accessibility]](/fundamentals/accessibility-intro/) — Introduces essential concepts, rationale, and resources.
- [Web Accessibility Perspectives](/perspective-videos/) — Short non-technical videos that introduce accessibility features and their benefits for everyone.

### More Background {#background}

When you need more in-depth background:

- [[How People with Disabilities Use the Web]](/people-use-web/) — Introduces experiences and terminology in accessibility and disability.
- [[Accessibility Principles]](/fundamentals/accessibility-principles/) — Introduces accessibility requirements defined by the W3C guidelines.

Identify the Issues {#explore}
-------------------

If you already know your accessibility issues, you can skip this section. If you need to identify potential issues, these resources can help:

- [[Easy Checks — A First Review of Web Accessibility]](/test-evaluate/preliminary/) — Simple checks that can be carried out by anyone, regardless of technical skills and accessibility knowledge.
- [List of Web Accessibility Evaluation Tools](https://www.w3.org/WAI/ER/tools/) — Customizable list that allows you to search for different types of tools.

### Detailed Review {#comprehensive}

When you want to do a comprehensive evaluation:

- [Website Accessibility Conformance Evaluation Methodology (WCAG-EM)](/test-evaluate/conformance/wcag-em/) — Provides a structured approach to help evaluate websites for accessibility.
- [WCAG-EM Report Tool](https://www.w3.org/WAI/eval/report-tool/) — Free online tool to help create evaluation reports following the WCAG-EM procedure.

Consider the Scope {#scope}
------------------

You may not be able to address all the issues on every part of your website at once. To determine which parts you want to improve right away, and which to address in later stages, consider prioritizing:

- **Key tasks**, such as registration, search, submit, or checkout processes. Include all steps involved to complete each task.
- **Key content**, such as frequently accessed content and content that is relevant to people with disabilities.
- **Reported content**, that has known barriers; for example, from user comments submitted through the website feedback form.
- **In-development content**, such as areas of the website that are currently being redesigned, to avoid the creation of new barriers.

Within your scope of repair, consider prioritizing what you repair first by focusing on:

- **High-impact repairs**
  - Appear on multiple web pages, such as navigation bars
  - Appear on frequently-used web pages, such as the home page
  - Are critical to complete processes, such as purchase forms
  - Web Content Accessibility Guidelines (WCAG) Level A issues
- **Low-effort repairs**
  - Require less time, cost, or skills to repair
  - Requires less testing and validation

Set your Accessibility Target Level {#target}
-----------------------------------

The generally accepted target for accessibility is the latest version of [Web Content Accessibility Guidelines (WCAG)](/standards-guidelines/wcag/) Level AA. This may already be the standard specified in your organizational policy or it may be the legal requirement for your website.

You may need to define a phased approach with different dates for different levels. For example, meet particular WCAG success criteria in the next release, and meet all [Level A and Level AA](https://www.w3.org/WAI/WCAG22/quickref/?currentsidebar=%23col_customize&levels=aaa) success criteria in the following release.

Note that in some cases, some Level AAA success criteria may be fairly easy to meet. For example, refining appropriate link text (2.4.4, Level A) and heading structure (2.4.10, Level AAA) may be easy to address together when revising content.

Tips for Efficient Repair {#repair}
-------------------------

- **Leverage the different skills in your team** — While many tasks will be for developers, other roles have plenty to contribute. For example, designers can select better colors and content authors can improve the wording of links, headings, and text alternatives. The resource [[Using Combined Expertise to Evaluate Web Accessibility]](/test-evaluate/combined-expertise/) may be helpful.
- **Communicate requirements across your team** — Ensure that everyone involved in repairs understands the basics of web accessibility and the specific requirements they need to address. Distribute the [Important Resources](#resources) to the relevant members of your team.
- **Validate solutions as early as possible** — Ensure that any solutions adequately address the issues raised to avoid implementing changes that do not work in practice. If at all possible, it is important to involve people with disabilities in such validation. The resources about [involving users in web projects](/planning/involving-users/) and [evaluating with users](/test-evaluate/involving-users/) provide more background.
- **Optimize your Tools** — Explore and configure accessibility settings in the authoring tools you use to create web content, such as your content management system (CMS). The resources about [selecting evaluation tools](/test-evaluate/tools/selecting/) and [selecting authoring tools](https://www.w3.org/WAI/impl/software) may be helpful.

Longer Term: Planning and Managing {#plan}
----------------------------------

Once you have addressed some of the most critical web accessibility issues on your web project, it is essential you plan to integrate accessibility throughout future design and development processes. The [Planning and Managing Web Accessibility](/planning-and-managing/) guide can help you develop that plan.
