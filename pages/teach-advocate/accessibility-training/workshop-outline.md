---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Example Outline for a Web Accessibility Workshop"
nav_title: Workshop Outline
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2019-01-09 # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 3

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-accessibility-training

permalink: /teach-advocate/accessibility-training/workshop-outline/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /teach-advocate/accessibility-training/workshop-outline/  # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:", "Editors:", "Previous editor" and "Contributors"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p><strong>Date:</strong> Some links and organization updated 9 January 2019. Content updated 21 February 2013. First published November  2000.</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Andrew/">Andrew Arch</a> and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Previous editor: <a href="https://www.w3.org/People/Brewer/">Judy Brewer</a>. Contributors: <a href="https://www.w3.org/People/shawn/">Shawn Lawton Henry</a>, Sharron Rush, Heather Hasner, Michael Stenitzer, Jennifer Sutton, <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf.html">WAI-AGE Task Force</a> participants, and <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>. </p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>), with the <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf.html">WAI-AGE Task Force</a>. Developed as part of the <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> funded by the European Commission under the 6th Framework.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

This page describes an example three-day hands-on workshop on web accessibility. You can use it as a basis for developing customized training for specific audience needs and goals. It links to [Accessibility Topics]({{ "/teach-advocate/accessibility-training/topics/" | relative_url }}) and WAI resources that you can use as building blocks to develop your presentation and activity materials.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}
{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}
- TOC is created automatically.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

**Note:** For guidance on making your presentations and training accessible to people with disabilities and others in your audience, see [How to Make Your Presentations Accessible to All](/teach-advocate/accessible-presentations/).

{% include_cached excol.html type="all" %}

{% include_cached excol.html type="start" id="overview" open="true" %}

## Overview

{% include_cached excol.html type="middle" %}

**Scenario:** A three-day hands-on workshop to inform participants about web accessibility and to teach developers how to implement accessibility requirements.

**Target audience:**

- Managers and decision makers &mdash; Day 1
- Web content authors and visual designers &mdash; Days 1 and 2
- Website developers and application programmers &mdash; Days 1, 2, and 3

**Other key audiences** include staff from public relations, marketing, communications, human resources, procurement, legal and policy advisors, staff representatives, and many more involved with the web.

### Overall learning objectives

Managers and decision makers should be able to:

- Explain the importance of web accessibility for people with disabilities and older people
- List common barriers experienced by people with disabilities and older people
- Describe the business case that influences an organization's web accessibility efforts

Authors and non-technical developers should be able to do above and **also**:

- Explain the role of the WAI guidelines and other components in achieving an accessible web
- Apply basic principles of accessibility during the preparation of web content
- Carry out preliminary checks of websites for accessibility and communicate the results

Website developers and application programmers should be able to do above and **also**:
- Utilize WCAG and its supporting documents as a guide to implementing accessible websites
- Apply WCAG techniques to develop accessible layouts, forms, tables, and other content
- Evaluate websites for conformance with WCAG and communicate the results

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="start" id="schedule" %}

## Schedule

{% include_cached excol.html type="middle" %}

### Day 1 schedule
{:.no_toc}

1.  **09:00 - 10:30 [Session 1 - Introduction to web accessibility](#d1s1)**
2.  10:30 - 11:00 Break
3.  **11:00 - 12:30 [Session 2 - Components of web accessibility](#d1s2)**
4.  12:30 - 13:30 Lunch
5.  **13:30 - 15:00 [Session 3 - Managing web accessibility](#d1s3)**
6.  15:00 - 15:30 Break
7.  **15:30 - 17:00 [Session 4 - Accessible content authoring](#d1s4)**
{:style="list-style:none;"}

### Day 2 schedule
{:.no_toc}

1.  **09:00 - 09:30 [Session 1 - Working with WCAG](#d2s1)**
2.  **09:30 - 10:30 [Session 2 - Visual design and CSS](#d2s2)**
3.  10:30 - 11:00 Break
4.  **11:00 - 11:45 [Session 3 - Images](#d2s3)**
5.  **11:45 - 12:30 [Session 4 - Multimedia](#d2s4)**
6.  12:30 - 13:30 Lunch
7.  **13:30 - 15:00 [Session 5 - Page structure](#d2s5)**
8.  15:00 - 15:30 Break
9.  **15:30 - 17:00 [Session 6 - Navigation and orientation](#d2s6)**
{:style="list-style:none;"}

### Day 3 schedule
{:.no_toc}

1.  **09:30 - 11:00 [Session 1 - Tables](#d3s1)**
2.  11:00 - 11:30 Break
3.  **11:30 - 12:30 [Session 2 - Forms](#d3s2)**
4.  12:30 - 13:30 Lunch
5.  **13:30 - 15:00 [Session 3 - Basics of accessible scripting and WAI-ARIA](#d3s3)**
6.  15:00 - 15:30 Break
7.  **15:30 - 16:00 [Session 4 - Principles of conformance evaluation](#d3s4)**
8.  **16:00 - 17:00 [Session 5 - Workshop review and lessons learned](#d3s5)**
{:style="list-style:none;"}

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="start" id="sessions" %}

## Session Descriptions

{% include_cached excol.html type="middle" %}

### Introduction to web accessibility &mdash; Day 1 Session 1 {#d1s1}

**Target audience:** Managers and decision makers, web content authors and visual designers, website developers and application programmers, and other key audiences

#### Learning Objectives:

- Explain the importance of web accessibility for people with disabilities and older people
- List common barriers experienced by people with disabilities and older people
- Describe the benefits of web accessibility for people with and without disabilities
- Understand that the W3C/WAI Guidelines are the international standard for web accessibility

#### Outline:

- Overview of web accessibility, including what web accessibility is and why it's important
- Videos showing people with disabilities using the web
- Information about the ageing population and ageing-related impairments
- Relevant legislation or other policies applicable to participants' organizations
- Carry-over benefits of universal design for people with and without disabilities
- Business benefits of web accessibility, including some case studies
- Overlapping experiences of people with disabilities and mobile users
- Introduction to WAI guidelines as the international standard for making the web accessible

#### Related Topics with More Information:

- [Introducing Web Accessibility](/teach-advocate/accessibility-training/topics/#intro)
- [How People with Disabilities Use the Web](/teach-advocate/accessibility-training/topics/#people)
- [Business Case for Web Accessibility](/teach-advocate/accessibility-training/topics/#bcase)
- [Web Accessibility and Older People](/teach-advocate/accessibility-training/topics/#older)
- [Web Accessibility Policy and Legislation](/teach-advocate/accessibility-training/topics/#policy)
- [Accessibility and the Mobile Web](/teach-advocate/accessibility-training/topics/#mobile)

### Components of web accessibility &mdash; Day 1 Session 2 {#d1s2}

**Target audience:** Managers and decision makers, web content authors and visual designers, website developers and application programmers, and other key audiences

#### Learning Objectives:

- Explain the components of web accessibility, including authoring tools and user agents
- Explain the role of the W3C/WAI Guidelines in providing a technical standard for accessibility
- Define the basic concepts of WCAG, its organizing principles and guidelines
- Describe the importance of authoring tools that support the production of accessible content
- Describe the benefits of involving people with disabilities throughout any web development

#### Outline:

- Hands-on experiential session showing the use of adaptive strategies and assistive technologies
- Introduction to the components of web accessibility
- Introduction to WCAG, its four basic design principles, and guidelines
- Benefits of WCAG
- Importance of accessible authoring tools, including content management systems
- Benefits of involving users in all aspects of web projects from the beginning

#### Handouts:

- [WCAG 2.1 at a Glance](/standards-guidelines/wcag/glance/)
- [Including People with Disabilities in Design Projects](https://www.w3.org/WAI/flyer/Overview.html#pwds)

#### Related Topics with More Information:

- [Components of Web Accessibility](/teach-advocate/accessibility-training/topics/#components)
- [Involving Users in Web Projects](/teach-advocate/accessibility-training/topics/#involving)
- [Introducing WCAG 2.0](/teach-advocate/accessibility-training/topics/#intro20)
- [How People with Disabilities Use the Web](/teach-advocate/accessibility-training/topics/#people)

### Managing web accessibility &mdash; Day 1 Session 3 {#d1s3}

**Target audience:** Managers and decision makers, web content authors and visual designers, website developers and application programmers, and other key audiences

#### Learning Objectives:

- Describe the steps needed to develop an implementation plan for web accessibility
- Describe the steps needed to develop organizational policies on web accessibility
- Identify key players in achieving an accessible website
- Describe the principles for selecting appropriate authoring and evaluation tools
- Conduct a preliminary check of websites for accessibility and communicate the results

#### Outline:

- Developing a web accessibility implementation plan
- Requirements for an accessibility policy for an organization
- Approaches to improving the accessibility of an organization's existing website
- Identification of key players (people, departments) with the organization who might be responsible for developing, managing, and maintaining an accessible site
- Considerations in selecting authoring tools and content management systems (CMS's)
- Selecting evaluation tools for checking web accessibility
- Undertaking and documenting a preliminary check for web accessibility with exercise

#### Related Topics with More Information:

- [Improving the Accessibility of Existing Websites](/teach-advocate/accessibility-training/topics/#improve)
- [Web Accessibility Policy and Legislation](/teach-advocate/accessibility-training/topics/#policy)
- [Authoring Tool Accessibility and ATAG](/teach-advocate/accessibility-training/topics/#authoring)
- [Preliminary Check for Web Accessibility](/teach-advocate/accessibility-training/topics/#check)

### Content authoring &mdash; Day 1 Session 4 {#d1s4}

**Target audience:** Managers and decision makers, web content authors and visual designers, website developers and application programmers, and other key audiences 

**Note:** This session provides an introduction to the preparation of accessible web content. Additional and focused training may be required for web content authors.

#### Learning Objectives:

- Describe accessibility requirements relevant to content authors, including for text, colors, and presentation
- Author accessible web content, including text-alternatives, text, links, and other page elements

#### Outline:

- Introduction to the accessibility requirements for making web content readable and understandable, including reading level considerations and creating clear links
- Introduction to other important accessibility features for content:
- Describing the purpose of images using alt-text (e.g. non-text   content)
- Page organization (e.g. headings, labels, and other   relationships)
- Visual presentation of text (e.g. colors, size, spacing, etc)
- Hands-on accessible content exercise, for instance one of the following:
- rewriting material to make it more readable and understandable
- organizing/structuring page content
- writing appropriate alt-text for a variety of different images   in different contexts
- improving the visual presentation of the page
- Additional requirements for preparing accessible content (e.g. abbreviations and acronyms, and jargon and unusual words)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Tips for Getting Started Writing for Web Accessibility](/tips/writing/) - tips for writing and presenting content
- [Preliminary Check for Web Accessibility](/teach-advocate/accessibility-training/topics/#check)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [Guideline 3.1 Make text content readable and understandable](https://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning)
- [3.1.5 Reading Level](https://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning-supplements)
- [2.4.4 Link Purpose (In Context)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-refs)
- [1.1.1 Non-text Content](https://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv-all)
- [2.4.10 Section Headings](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-headings)
- [2.4.6 Headings and Labels](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-descriptive)
- [1.3.1 Info and Relationships](https://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic)
- [1.4.1 Use of Color](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-without-color)
- [1.4.3 Contrast (Minimum)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast)
- [1.4.8 Visual Presentation](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation)
- [3.1.4 Abbreviations](https://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning-located)
- [3.1.3 Unusual Words](https://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning-idioms)

### Working with WCAG &mdash; Day 2 Session 1  {#d2s1}

**Target audience:** Web content authors and visual designers, website developers and application programmers

#### Learning Objectives:

- Explain the concepts of WCAG and list its supporting documents
- Use WCAG documents to support practical implementation and testing
- Explain the improvements and benefits of WCAG

#### Outline:

- Introduction to the WCAG documents
- Demonstration of the "How to Meet WCAG (Quick Reference)", and how to use the filters
- Benefits of WCAG, especially in relation to testability and applicability to different situations
- Applicability of WCAG to all web technologies
- Introduction to accessibility support

#### Related Topics with More Information:

- [Introducing WCAG 2.0](/teach-advocate/accessibility-training/topics/#intro20)
- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [Understanding Accessibility Support](https://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance#uc-accessibility-support-head)

### Visual design and CSS &mdash; Day 2 Session 2 {#d2s2}

**Target audience:** Web content authors and visual designers, website developers and application programmers

#### Learning Objectives:

- Embrace the differences between the web and print media
- Know the accessibility requirements for visual web page design and how to test for them
- Incorporate accessibility requirements in the visual design and development of web pages

#### Outline:

- Overview of the adaptability of the web, highlighting the differences from print media
- Accessibility aspects of visual design of websites
- Importance of the use of color and contrast in accessible design
- Advisory techniques that enhance a site's readability, including the visual presentation
- Accessibility requirements for resizable text and flexible page layout
- Practical exercise, such as identifying pages with inaccessible visual design
- Introduction to the issues associated with movement on web pages (e.g. from scrolling text, animations, flashing/flickering)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Tips for Getting Started Designing for Web Accessibility](/tips/designing/) - tips for user interface and visual design
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [1.4.8 Visual Presentation](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation)
- [1.4.1 Use of Color](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-without-color)
- [1.4.3 Contrast (Minimum)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast) & [1.4.6 Contrast (Enhanced)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast7)
- [Guideline 3.1 Readable](https://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning#meaning-advisory)
- [1.4.4 Resize Text](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-scale)
- [2.2.2 Pause, Stop, Hide](https://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits-pause)
- [2.3.1 Seizures](https://www.w3.org/TR/UNDERSTANDING-WCAG20/seizure)

### Images &mdash; Day 2 Session 3 {#d2s3}

**Target audience:** Web content authors and visual designers, website developers and application programmers

#### Learning Objectives:

- Know the technical accessibility requirements for images
- Implement and test appropriate text alternatives for a wide range of image-based content

#### Outline:

- Introduction to the many different types of images and different contexts that require consideration for accessibility
- Providing access to data and longer descriptions for diagrams, graphs, photographs, etc
- Use of CSS to include decorative and formatting images
- Introduction to the accessibility issues of images of text
- Practical hands-on exercise, for instance to improve the accessibility of some image-heavy pages
- Introduction to additional image-related issues such as sensory experiences and use of CAPTCHA

#### Tutorial:

- [Images Tutorial](/tutorials/images/)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [1.1.1 Non-text Content](https://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv-all)
- [1.4.8 Images of Text (No Exception)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-text-images)

From [Techniques for WCAG](https://www.w3.org/TR/WCAG20-TECHS/):

- [C9: Using CSS to include decorative images](https://www.w3.org/TR/2007/WD-WCAG20-TECHS-20071211/C9)

### Multimedia &mdash; Day 2 Session 4 {#d2s4}

**Target audience:** Web content authors and visual designers, website developers and application programmers

#### Learning Objectives:

- Know the accessibility requirements for multimedia
- Implement and test appropriate accessible alternatives for multimedia materials

#### Outline:

- Introduction to the need for accessible synchronized media (audio and video; recorded and real-time)
- Illustration of the accessibility issues with some media players
- Solutions for accessible pre-recorded media, including transcripts, captions, and audio-description
- Practical hands-on exercise, for instance captioning some video with an appropriate tool
- Introduction to the issues and solutions for live audio and live synchronized media (video)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)
- [Browser Accessibility and UAAG](/teach-advocate/accessibility-training/topics/#browsers)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [Guideline 1.2 Time-based Media](https://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv)
- [1.2.2 Captions (Prerecorded)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-captions)
- [1.2.3 Audio Description or Media Alternative (Prerecorded)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-audio-desc)
- [1.2.6 Sign Language (Prerecorded)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-sign)
- [1.2.9 Audio-only (Live)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-live-audio-only)
- [1.2.4 Captions (Live)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-real-time-captions)

### Page structure &mdash; Day 2 Session 5 {#d2s5}

**Target audience:** Web content authors and visual designers, website developers and application programmers

#### Learning Objectives:

- Know the necessity of structural relationships for understanding web pages
- Implement and test semantic structure and links to aid understanding and navigation of web pages

#### Outline:

- Introduction to the importance of page information and structure
- Use of headings for organizing page content, and the use of correct heading levels
- Importance of lists in understanding and navigating web pages
- Additional page navigation techniques such as 'skip links' and providing a table of contents
- Importance of ensuring that content is presented in a meaningful sequence with a sequential navigation order
- Practical hands-on exercise, for instance one of the following:
- Identification of accessibility improvements to page structure
- Coding accessible page navigation, headings, and lists

#### Tutorial:

- [Page Structure Tutorial](/tutorials/page-structure/)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [1.3.1 Info and Relationships](https://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic)
- [2.4.6 Headings and Labels](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-descriptive)
- [1.3.2 Meaningful Sequence](https://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-sequence)
- [2.4.3 Focus Order](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-focus-order)
- [2.4.1 Bypass Blocks](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-skip)

From [Techniques for WCAG](https://www.w3.org/TR/WCAG20-TECHS/):

- [G141: Organizing a page using headings](https://www.w3.org/TR/WCAG20-TECHS/G141)
- [H42: Using h1-h6 to identify headings](https://www.w3.org/TR/WCAG20-TECHS/H42)
- [H48: Using ol, ul and dl for lists](https://www.w3.org/TR/WCAG20-TECHS/H48)
- [G64: Providing a Table of Contents](https://www.w3.org/TR/WCAG20-TECHS/G64)

### Site navigation and orientation &mdash; Day 2 Session 6 {#d2s6}

**Target audience:** Web content authors and visual designers, website developers and application programmers

#### Learning Objectives:

- Know the requirements for accessible website navigation and orientation
- Implement and test accessible navigation elements and provide meaningful navigation across a website

#### Outline:

- Introduction to the importance of website navigation, including:
- Provision of multiple ways to locate a web page
- Provision of consistent navigation across a website
- Ensuring that the purpose of links is clear
- Provision of information about the user's current location, including the importance of page titles that describe the page's topic or purpose
- Practical hands-on exercise, for instance one of the following:
- Identifying inaccessible navigation on some sites
- Identifying orientation improvements for some sites
- Introduction to some of the known failures for creating links and menus such as scripts emulating links and scripted drop-down boxes

#### Tutorial:

- [Menus Tutorial](/tutorials/menus/)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [2.4.5 Multiple Ways](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-mult-loc)
- [3.2.3 Consistent Navigation](https://www.w3.org/TR/UNDERSTANDING-WCAG20/consistent-behavior-consistent-locations)
- [2.4.4 Link Purpose (In Context)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-refs)
- [2.4.8 Location](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-location)
- [2.4.2 Page Titled](https://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-title)

From [Techniques for WCAG](https://www.w3.org/TR/WCAG20-TECHS/):

- [F42: Failure of Success Criterion 1.3.1 and 2.1.1 due to using scripting events to emulate links in a way that is not programmatically determinable](https://www.w3.org/TR/2008/NOTE-WCAG20-TECHS-20081211/F42)
- [F36: Failure of Success Criterion 3.2.2 due to automatically submitting a form and presenting new content without prior warning when the last field in the form is given a value](https://www.w3.org/TR/WCAG20-TECHS/)

### Tables &mdash; Day 3 Session 1 {#d3s1}

**Target audience:** Web developers and application programmers

#### Learning Objectives:

- Know the requirements for accessible data tables
- Implement and test accessible data tables

#### Outline:

- Introduction to the concept of accessible tables requiring explicit information and relationships to aid understanding
- Introduction of the known failures for presenting tables
- Accessible table markup, including header cells with scope attributes, table titles and summaries
- Advanced table markup for more complex tables, including cell association
- Illustration of table navigation techniques used by assistive technology users
- Practical hands-on exercise, for instance one of the following:
- Coding some simple and complex tables
- Evaluating some tables for accessibility and recommending   improvements
- Introduction of some advisory techniques for tables such as cell highlighting on hover

#### Tutorial:

- [Tables Tutorial](/tutorials/tables/)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [1.3.1 Info and Relationships](https://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic)
- [1.4.8 Visual Presentation](https://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation#visual-audio-contrast-visual-presentation-94-head)

From [Techniques for WCAG](https://www.w3.org/TR/WCAG20-TECHS/):

- [H51: Using table markup to present tabular information](https://www.w3.org/TR/WCAG20-TECHS/H51)
- [H63: Using the scope attribute to associate header cells and data cells in data tables](https://www.w3.org/TR/WCAG20-TECHS/H63)
- [H39: Using caption elements to associate data table captions with data tables](https://www.w3.org/TR/WCAG20-TECHS/H39)
- [H73: Using the summary attribute of the table element to give an overview of data tables](https://www.w3.org/TR/WCAG20-TECHS/H73)
- [H43: Using id and headers attributes to associate data cells with header cells in data tables](https://www.w3.org/TR/WCAG20-TECHS/H43)

### Forms &mdash; Day 3 Session 2 {#d3s2}

**Target audience:** Web developers and application programmers

#### Learning Objectives:

- Know the accessibility requirements for accessible forms
- Implement and test accessibility features of forms

#### Outline:

- Introduction of the information and relationship requirements for basic form accessibility
- Introduction of some of the known failures for forms such as automatic submission and issues with phone numbers
- Accessible form features such as labels, instructions, keyboard compatible controls, and indicating required fields
- Advisory techniques such as linear form design and warning users about changes of context
- Practical hands-on exercise, for instance one of the following:
- Coding accessible forms
- Evaluating online forms for accessibility and recommending   improvements
- Introduction to advanced accessibility approaches for completing forms, including error correction suggestions, error prevention, context sensitive help, client-side validation, and re-authenticating
- Accessibility implications of error correction and reporting approaches (client-side - server-side)
- Adequate interaction time as an issue for form completion

#### Tutorial:

- [Forms Tutorial](/tutorials/forms/)

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [1.3.1 Info and Relationships](https://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic)
- [3.3.2 Labels or Instructions](https://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-cues)
- [3.3.3 Error Suggestion](https://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-suggestions)
- [3.3.4 Error Prevention (Legal, Financial, Data)](https://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-reversible)
- [3.3.5 Help](https://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-context-help)
- [2.2.5 Re-authenticating](https://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits-server-timeout)
- [2.2.1 Timing Adjustable](https://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits-required-behaviors)

From [Techniques for WCAG](https://www.w3.org/TR/WCAG20-TECHS/):

- [F36: Failure of Success Criterion 3.2.2 due to automatically submitting a form and presenting new content without prior warning when the last field in the form is given a value](https://www.w3.org/TR/WCAG20-TECHS/)
- [F82: Failure of Success Criterion 3.3.2 by visually formatting a set of phone number fields but not including a text label](https://www.w3.org/TR/WCAG20-TECHS/F82)
- [H91: Using HTML form controls and links](https://www.w3.org/TR/WCAG20-TECHS/H91)
- [G13: Describing what will happen before a change to a form control that causes a change of context to occur is made](https://www.w3.org/TR/WCAG20-TECHS/G13)
- [SCR18: Providing client-side validation and alert](https://www.w3.org/TR/WCAG20-TECHS/SCR18)

### Basics of accessible scripting and WAI-ARIA (Accessible Rich Internet Applications) &mdash; Day 3 Session 3 {#d3s3}

**Target audience:** Web developers and application programmers

#### Learning Objectives:

- Identify common barriers in scripted content
- Learn to include progressive enhancement techniques in the development process
- Understand the additional accessibility provided by WAI-ARIA for rich internet applications
- Implement and test basic accessibility scripting features

#### Outline:

- Introduction to the barriers created by some scripting techniques
- Introduction to the concept of progressive enhancement with scripting
- Introduction to scripting techniques that satisfy WCAG success criteria
- Introduction to WAI-ARIA and accessibility barriers in rich internet applications
- WAI-ARIA techniques to improve keyboard usage and setting of focus
- Hands-on analysis of scripting challenges and solutions related to web applications, for example:
- embedded objects such as media players
- device specific events
- generic elements as interface controls
- scripting elements to emulate links
- scripted drop-down boxes
- Provision of related resources, including the use of libraries and toolkits with WAI-ARIA support

#### Related Topics with More Information:

- [Designing Accessible Websites with WCAG 2](/teach-advocate/accessibility-training/topics/#design)
- [Accessible Rich Internet Applications](/teach-advocate/accessibility-training/topics/#aria)
- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Techniques for WCAG](https://www.w3.org/TR/WCAG20-TECHS/):

- [Client-side Scripting Techniques for WCAG 2.0](https://www.w3.org/TR/WCAG20-TECHS/client-side-script)
- [F54: Failure of Success Criterion 2.1.1 due to using only pointing-device-specific event handlers (including gesture) for a function](https://www.w3.org/TR/WCAG20-TECHS/F54)
- [F59: Failure of Success Criterion 4.1.2 due to using script to make div or span a user interface control in HTML](https://www.w3.org/TR/WCAG20-TECHS/F59)
- [F42: Failure of Success Criterion 1.3.1 and 2.1.1 due to using scripting events to emulate links in a way that is not programmatically determinable](https://www.w3.org/TR/WCAG20-TECHS/F42)
- [F36: Failure of Success Criterion 3.2.2 due to automatically submitting a form and presenting new content without prior warning when the last field in the form is given a value](https://www.w3.org/TR/WCAG20-TECHS/F36)

### Principles of conformance evaluation &mdash; Day 3 Session 4 {#d3s4}

**Target audience:** Web developers and application programmers

#### Learning Objectives:

- Define the concept of a conformance evaluation for websites
- Understand the importance of involving users in web accessibility evaluation
- Understand the concept of accessibility support and its applicability to the organization's website

#### Outline:

- Introduction of the concept of website conformance testing as a formal extension of the testing done in previous sessions
- Process for conformance evaluation of websites for accessibility
- WCAG conformance requirements and conformance claims
- Selection of automated tools and their benefits and drawbacks
- Combining testing with users with formal conformance evaluation methods
- Introduction of the concept of accessibility supported technologies

#### Related Topics with More Information:

- [Conformance Evaluation for Web Accessibility](/teach-advocate/accessibility-training/topics/#conform)

#### Relevant WCAG Resources:

From [Understanding WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/):

- [Understanding Conformance](https://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance)
- [Understanding Accessibility Support](https://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance#uc-accessibility-support-head)

### Workshop review and lessons learned &mdash; Day 3 Session 5 {#d3s5}

**Target audience:** Web developers and application programmers

#### Session Objectives:

- Ensure participants have understood the key messages from the workshop
- Provide an opportunity for questions and answers to outstanding issues

#### Outline:

- General questions and answers (Q&A) to elaborate on anything needing clarification
- Summary of the overall requirements for accessible web design and development
- Reiteration of the value of using "How to Meet WCAG (Quick Reference)" as a gateway to WCAG
- Opportunities for follow-up, including the [WAI Interest Group](https://www.w3.org/WAI/IG/) (and the associated [WAI-IG email list](https://www.w3.org/WAI/WCAG20/quickref/))

#### Suggested activity:

- Ask participants to write down something they learned in the last two days that they will incorporate in their work immediately, something that surprised them, or the most interesting thing they learned. Discuss some of the impressions from the participants to share lessons learned.

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="start" id="notes" %}

## Important Notes

{% include_cached excol.html type="middle" %}

This example workshop is not a complete set of training material.
Trainers will need to adapt the material to suit their audience. For example, for an in-house workshop, trainers should focus on the issues most common to the organization's content and development environment, and could use the organization's website and authoring tools for examples and activities.

This material assumes that trainers are experienced web accessibility practitioners and trainers. That is, it does not attempt to train trainers.

This outline is for an initial workshop. Follow up workshops might be needed. For example, content authors would benefit from specific instruction on how to use their content management system (CMS) or other authoring tools to provide accessible content.

### Additional notes for presenters for the technical sessions on days 2 and 3
{:.no_toc}

- Allow time at the end of each session to sum up the requirements and clarify any issues arising from the session.
- Finish days 1 and 2 with a brief summary of the day, and start days 2 and 3 with a brief summary of the previous day. Seek feedback at the end of each day and adjust remaining material as appropriate.
- Clarify that not all WCAG success criteria are being presented and discussed in this workshop.
- Describe the intent of accessibility requirements, and their relationship to barriers for people with disabilities and [older people](/older-users/). Also describe the broader benefits for [mobile users](/standards-guidelines/wcag-mobile-overlap/), search engine optimization (SEO), and more.
- Draw illustrative examples from sites and material that are relevant to the participants backgrounds, e.g. government, commerce, etc.
- The [Before and After Demonstration](https://www.w3.org/WAI/demos/bad/) provides accessible and inaccessible web pages, including evaluation reports, that can be used as examples. Using the participants' own websites or similar websites to theirs (such as websites from competitor organizations) helps make the examples more tangible.
- Emphasize the benefits of [How to Meet WCAG 2 (Quick Reference)](https://www.w3.org/WAI/WCAG20/quickref/), a customizable quick reference to WCAG requirements and techniques, including 'best practice' advisory techniques.
- Introduce appropriate evaluation techniques and tools for each issue as it is covered.
- Carry out activities and exercises to reinforce the learning effect.

{% include_cached excol.html type="end" %}

{% include_cached excol.html type="all" %}