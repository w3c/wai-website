---
title: "2: Structure in Content Author Modules | Curricula"
title_html: "Module 2: Structure&nbsp;"
nav_title: "Structure"
permalink: /curricula/content-author-modules/structure/
ref: /curricula/content-author-modules/structure/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
changelog: /curricula/changelog/
footer: >
  <p><strong>Date:</strong> Updated 29 September 2022. First published December 2019.</p>
  <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Contributors: <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245).</p>
parent_in_h1:
  - ref: /curricula/content-author-modules/
    name: "Content Author Modules"
  - ref: /curricula/
    name: "Curricula on Web Accessibility"
navigation:
  previous: /curricula/content-author-modules/clear-content/
  next: /curricula/content-author-modules/forms/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on headings, paragraphs, lists, and other structures to orient themselves, as well as to understand, navigate, and process content
* explain accessibility requirements related to content structure

## Learning Outcomes for Module

Students should be able to:

* explain how people with disabilities rely on headings, paragraphs, lists, and other structures to orient themselves, as well as to understand, navigate, and process content
* provide meaningful and consistent heading hierarchies for users to identify and navigate content sections
* group content using paragraphs, lists, and other structures
* collaborate with designers and developers to:
  * include methods to move back and forth through long pieces of content, including a table of contents and "back to top" links
  * ensure meaningful sequence, for example, the reading order, makes sense for different screen sizes, user configurations, and assistive technologies
* identify requirements for authoring tools to produce appropriate markup for headings, paragraphs, lists, and other content structures
* identify related requirements for developers and designers to ensure:
  * accessible content structures, including headings, paragraphs, lists, quotes, and others
  * adequate content grouping and spacing to communicate semantic structures visually

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* [Content Author Module 1: Clear Content](/curricula/content-author-modules/clear-content/)
* Basic knowledge of:
  * Writing
  * Copy-editing
  * Proofreading

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG 2 Success Criterion 1.3.2 Meaningful Sequence](https://www.w3.org/WAI/WCAG21/quickref/#meaningful-sequence)
  * [WCAG 2 Success Criterion 2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/quickref/#bypass-blocks)
  * [WCAG Success Criterion 2.4.3 Focus Order](https://www.w3.org/WAI/WCAG21/quickref/#focus-order)
  * [WCAG 2 Success Criterion 2.4.6 Headings and Labels](https://www.w3.org/WAI/WCAG21/quickref/#headings-and-labels)
  * [WCAG 2 Success Criterion 2.4.10 Section Headings](https://www.w3.org/WAI/WCAG21/quickref/#section-headings)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
  * [Content Author Module 1: Clear Content](/curricula/content-author-modules/clear-content/)
  * [Accessible authoring tools](/standards-guidelines/atag/)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Headings

{% include excol.html type="middle" %}

The heading hierarchy communicates the structure of web pages and documents. Headings enable people with disabilities to identify and navigate the different content sections. Explain different purposes of headings and how to include them.

When content authors change the visual appearance of headings, they must ensure headings remain accessible.

#### Learning Outcomes for Topic

Students should be able to:

* explain how proper heading hierarchies enable users to identify and navigate the different content sections
* provide proper heading hierarchies that enable users to identify and navigate the different content sections
* write descriptive and easy to understand heading text based on the heading purpose or the following text content
* describe the characteristics of accessible headings, including text, visual appearance, and markup
* identify requirements for authoring tools to produce appropriate markup for heading hierarchies
* identify related requirements for designers and developers to ensure accessible headings

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate the use of voice commands, keystrokes, and gestures provided by assistive technologies and adaptive strategies to navigate web pages through headings. Explore advanced functionality that some tools provide, such as presenting the heading hierarchy in a list where users can select the heading they are interested in. Examples of how people with disabilities interact with the Web are provided in [How People with Disabilities Use the Web](/people-use-web/).
* Discuss the use of heading hierarchies for identifying content sections. Explain that it is best practice to use heading level one for including the information of the page title. Some tools automate this process, some require the author to do it manually. 
* Explain different uses of heading text. These uses include providing a headline for a piece of news which effectively summarizes the content which follows.
* Show examples of how headings can look like visually. Explain that predefining the styles is a designer's and authoring tool vendor's responsibility. When content authors change these styles, they must ensure visual and non-visual accessibility of headings themselves.
* Introduce accessible authoring tools that produce appropriate markup for headings. Explain that changing the font size alone does not produce an accessible heading. It is more efficient to rely on the tool's built-in functionality and then change the style later.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about situations where they would use headings. Assess how students identify situations where they would use headings.
* Practical &mdash; Have students specify the heading hierarchy in a page using a given authoring tool. Assess how students rely on the tool's built-in functionality to specify the heading hierarchy.
* Practical &mdash; Have students visit a page with an inaccessible heading hierarchy. Ask students to identify inaccessible examples and to propose accessible alternatives for the inaccessible examples. Assess how students identify inaccessible heading hierarchies and propose accessible alternatives.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Paragraphs and Lists

{% include excol.html type="middle" %}

Paragraphs and lists group related content. They enable people with disabilities to better read and understand content. Explain different types of lists and how to include them.

When content authors change the visual appearance of paragraphs and lists, they must ensure paragraphs and lists remain accessible.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with disabilities rely on paragraphs and lists to understand and process related content
* group related content using:
  * paragraph structures to group thematic units
  * unordered lists when item numbering is not relevant
  * ordered lists when item numbering is relevant
  * description lists for terms and their definitions
* identify requirements for authoring tools to produce appropriate markup for paragraphs, lists, and other content structures

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate the use of voice commands, keystrokes, and gestures provided by assistive technologies and adaptive strategies to navigate web pages through paragraphs and lists. Explore advanced functionality that some tools provide, such as presenting all lists in a list where users can select the list they are interested in. Mention that different assistive technologies announce terms and descriptions of a definition list differently. Some may not support description lists. Examples of how people with disabilities interact with the Web are provided in [How People with Disabilities Use the Web](/people-use-web/).
* Explain different uses of paragraphs to group thematic units.
* Refer back to [Content Author Module 1: Clear content](/curricula/content-author-modules/clear-content/). Explain that structured lists favor readability of the content. Information provided using inline lists inside paragraphs is more difficult to understand.
* Explain uses of different types of lists. Ordered lists (where numbering matters), unordered lists (where numbering does not matter), and description lists (for terms and their definitions).
* Reflect with students on how content authors can produce accessible paragraphs and lists. Explain that some authoring tools natively support the creation of accessible paragraphs, ordered lists, and unordered lists. Emphasize that description lists may require developers to code them.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about the purpose of paragraphs, unordered lists, ordered lists, and description lists. Assess how students describe the purpose of paragraphs, unordered lists, ordered lists, and description lists.
* Practical &mdash; Give students a piece of content and ask them to group related content using paragraphs and lists. Assess how students use paragraphs and lists to group related content.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Orientation and Navigation

{% include excol.html type="middle" %}

Introduce navigation and orientation methods that enable people with disabilities to orient themselves and navigate through content. These include a correct reading order, a table of contents, footnotes, and methods for users to move back and forth through long passages of text.

Authoring tools may not produce accessible navigation and orientation methods. When this occurs, different team members, including content authors, designers, and developers, need to collaborate to make navigation and orientation methods accessible.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with disabilities rely on a correct reading order, a table of contents, and other orientation and navigation methods to orient themselves and navigate through content
* utilize a table of contents to:
  * provide a summary of the overall content structure
  * help users navigate to parts of the content
* ensure availability of methods for users to move through different sections in long passages of text, for example using:
  * a table of contents
  * a link to get back to the top of the content and to the top of specific sections
  * methods to move from a footnote marker to the footnote content and from the footnote content back to the footnote marker
* identify related requirements for:
  * designers and developers to ensure accessible orientation and navigation methods
  * authoring tools to support accessible orientation and navigation methods

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate the use of assistive technologies to navigate through long passages of text. Explain that several groups of users rely on orientation and navigation methods to understand the overall content structure and to move back and forth through different content sections.
* Show web pages with a table of contents. Explain that they provide a summary of the overall structure of the whole piece of content. They also enable users to get to the specific sections they are interested in.
* Discuss the use of links to get to the top of the document and to get back to the top of specific content sections in long passages of text. Explain that these methods enable users to get back to the table of contents more efficiently when they have finished reading a specific section.
* Demonstrate assistive technology and keyboard interaction with document footnotes. Explain that keyboard users need methods to move from the footnote marker to the footnote content and to move back from the footnote content to the footnote marker.
* Refer back to Foundation Module 5: Getting Started with Accessibility, [Topic Roles and Responsibilities](/curricula/foundation-modules/getting-started-with-accessibility/#topic-roles-and-responsibilities). Explain that, when authoring tools do not support accessible orientation and navigation methods, different team members need to collaborate to specify the appearance of and interaction with the methods.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about different methods to help users orient themselves and navigate long passages of text. Assess how students recall methods to help users orient themselves and navigate long passages of text, including a correct reading order, a table of contents, and a "Back to top" link.
* Practical &mdash; Ask students to provide the table of contents for an article of a given website. Assess how students provide the table of contents for an article.
* Practical &mdash; Ask students to use a given authoring tool to include accessible footnotes. Assess how students include accessible footnotes using an authoring tool.
* Practical &mdash; Ask students to collaborate with other team members to provide accessible navigation and orientation methods. Assess how students collaborate with other team members to provide accessible orientation and navigation methods.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about methods that people with disabilities use to navigate content based on existing headings, paragraphs, and lists. Assess how students recall methods that people with disabilities use to navigate content based on existing headings, paragraphs, and lists.
* Portfolio &mdash; Have students create a page with accessible content structures, including headings, paragraphs, lists, and others. Assess how students include accessible headings, paragraphs, lists, and others in their pages.

## Teaching Resources

Suggested resources to support your teaching:

* [Writing for Web Accessibility](/tips/writing/) &mdash; Introduces some basic considerations to help you get started writing web content that is more accessible to people with disabilities.
* [Page Structure (WAI Web Accessibility Tutorials)](/tutorials/page-structure) &mdash; Shows how to provide page structures that are accessible to people with disabilities.
* [[How People with Disabilities Use the Web]](/people-use-web/) &mdash; Describes some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Clear Layout and Design (Web Accessibility Perspectives)](/perspective-videos/layout/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Understandable Content (Web Accessibility Perspective)](/perspective-videos/understandable/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
