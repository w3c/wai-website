---
title: "Module 2: Information Design in Designer Modules | Curricula"
title_html: "2: Information Design&nbsp;"
nav_title: "Information Design"
permalink: /curricula/designer-modules/information-design/
ref: /curricula/designer-modules/information-design/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
changelog: /curricula/changelog/
footer: >
  <p><strong>Date:</strong> Updated 9 February 2022. First published December 2019. CHANGELOG</p>
  <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Contributors: <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245).</p>
parent_in_h1:
  - ref: /curricula/designer-modules/
    name: "Designer Modules"
  - ref: /curricula/
    name: "Curricula on Web Accessibility"
navigation:
  previous: /curricula/designer-modules/visual-design/
  next: /curricula/designer-modules/navigation-design/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities obtain and process information using a variety of methods, including text, labels, instructions, semantics, and imagery
* explain accessible approaches to communicate the structure, relations, and purpose of information

## Learning Outcomes for Module

Students should be able to:

* explain how people with disabilities use several methods to obtain and process information, including text, labels, instructions, semantics, and imagery
* describe approaches to define content in discrete and more manageable segments, for example using:
  * pages, landmarks, and headings
  * lists, simpler tables, and plain text
  * groups of form controls that share a common purpose
* specify methods to communicate all relevant information about multi-step processes visually and non-visually
* describe how to communicate the structure of multi-page articles or processes visually and non-visually
* describe how to provide information about the name and purpose of user interface components using descriptive labels and instructions
* discuss ways to break down information presented in tables, including the use of simple tables, lists, imagery, and plain text
* evaluate the use of several methods to convey information, including text, labels, instructions, semantics, and imagery depending on user needs
* identify related requirements for developers to programmatically associate landmarks, headings, table header cells and data cells, as well as form labels and instructions to their corresponding control

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/designer-modules/#foundation-prerequisites)
* [Designer Module 1: Visual Design](/curricula/designer-modules/visual-design/)
* Basic knowledge of:
  * Visual Design
  * Prototyping
  * Responsive Design
  * Information Architecture

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG Success Criterion 1.1.1	Non-text Content](https://www.w3.org/WAI/WCAG21/quickref/#non-text-content)
  * [WCAG Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG Success Criterion 1.3.3 Sensory Characteristics](https://www.w3.org/WAI/WCAG21/quickref/#sensory-characteristics)
  * [WCAG Success Criterion 1.3.5 Identify Input Purpose](https://www.w3.org/WAI/WCAG21/quickref/#identify-input-purpose)
  * [WCAG Success Criterion 1.4.5 Images of Text](https://www.w3.org/WAI/WCAG21/quickref/#images-of-text)
  * [WCAG Success Criterion 2.4.4 Link purpose (In Context)](https://www.w3.org/WAI/WCAG21/quickref/#link-purpose-in-context)
  * [WCAG Success Criterion 2.4.6 Headings and Labels](https://www.w3.org/WAI/WCAG21/quickref/#headings-and-labels)
  * [WCAG Success Criterion 3.1.3 Unusual Words](https://www.w3.org/WAI/WCAG21/quickref/#unusual-words)
  * [WCAG Success Criterion 3.1.4 Abbreviations](https://www.w3.org/WAI/WCAG21/quickref/#abbreviations)
  * [WCAG Success Criterion 3.3.2 Labels or Instructions](https://www.w3.org/WAI/WCAG21/quickref/#labels-or-instructions)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/designer-modules/#foundation-prerequisites)
  * [Designer Module 1: Visual Design](/curricula/designer-modules/visual-design/)
  * Visual Design
  * Prototyping
  * Responsive Design
  * Information Architecture

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Text and Structure 

{% include excol.html type="middle" %}

Discuss ways to use text and semantic structure to communicate the organization of pages and documents. For example, using pages to split the content into logical units, landmarks to define page regions, and headings with their corresponding rank levels to group related information.

Discuss the use of diagrams and illustrations to help users understand the information provided in text.

#### Learning Outcomes for Topic

Students should be able to:

* design textual content to be easily consumed, for example by splitting larger blocks of text into more manageable segments using:
  * pages
  * landmarks with their corresponding region type
  * headings (with their corresponding rank levels)
  * sidebars and other page regions
  * paragraphs, lists, and other structures to convey content meaning
* define the presentation of:
  * diagrams and illustrations to make textual information easier to understand; for example, a diagram of the process described in the text 
  * textual information to make diagrams and illustrations perceivable, for example a text description of an electronic device in a user manual
  * methods to provide specific definitions of words and meaning of phrases, such as professional terms, idioms, and jargon
  * methods to provide the expanded form or meaning of acronyms and abbreviations
* identify related requirements for:
  * developers to code the regions, headings, and language of pages and parts
  * content authors to provide clear language and easy-to-read texts whenever possible

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Discuss different types of page regions, including header, navigation, main, and footer. Demonstrate that, in addition to visually distinguishing these regions, some people need semantics and text to understand the relations between them. Explain that defining and planning the different regions is a designer's responsibility, whereas adding the semantics is a responsibility shared with the developer.
* Show examples of online articles and forms. Discuss how these are divided into manageable pieces so that they are easier to understand and to navigate. For example, by using headings with their corresponding rank levels to indicate the different parts, as well as sections, paragraphs, and lists to convey content meaning.
* Show examples of diagrams and illustrations that can complement the information presented in text. For example, visual instructions that supplement the text of a user manual. Explain that they help users with reading disabilities to understand difficult pieces of text. Explain that defining the presentation of such diagrams and illustrations is a responsibility of the designer, whereas providing the diagrams and illustrations is a responsibility of the content author. For reference on how to provide visual illustrations, pictures, and symbols to help explain ideas, events, and processes, see technique [G103: Providing visual illustrations, pictures, and symbols to help explain ideas, events, and processes](https://www.w3.org/WAI/WCAG21/Techniques/general/G103).
* Show examples of text descriptions to make diagrams and illustrations perceivable. For example, text descriptions of an electronic device layout. Explain that these descriptions help people who don’t see the images to perceive the information. Explain that defining the presentation of such descriptions is a responsibility of the designer, whereas providing such descriptions is a responsibility shared with the content author. Text alternatives will be discussed in detail in [Designer Module 5: Images and Graphics](/curricula/designer-modules/images-and-graphics/).
* Show examples of words that may be difficult to understand or that are used in a specialized way. Explain that people who are not familiar with such words need definitions to understand their meaning. Explain that defining the methods to provide such definitions is a designer's responsibility, whereas providing the definitions is a responsibility shared with the content author.
* Show examples of abbreviations, such as short forms of words and acronyms. Explain that people who are not familiar with the abbreviations need an explanation or an expansion of that abbreviation to understand them. Explain that specifying the methods to provide such explanations or expansions is a designer's responsibility, whereas providing the explanations or expansions is a responsibility shared with the content author.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Give students an eBook. Ask them to propose how it might be split into smaller and more manageable pieces to make content easier to understand and navigate. Assess how students use pages, landmarks, and headings with their corresponding rank levels as well as paragraphs, lists, and other structures to split large amounts of text into smaller and more manageable pieces.
* Practical &mdash; Give students a complex piece of text. Ask them to select diagrams and illustrations that complement the text. Assess how students select diagrams and illustrations to complement processes and instructions presented in text.
* Practical &mdash; Give students diagrams and illustrations. Ask them to select descriptions to make information perceivable for people who cannot see the images. Assess how students select descriptions for diagrams and illustrations.
* Practical &mdash; Give students unusual words and abbreviations. Ask them to select methods to explain such words or expand the abbreviations. Assess how students select methods to provide explanations of unusual words and expansions of abbreviations.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Naming and Grouping

{% include excol.html type="middle" %}

Discuss the use of labels, instructions, and graphical representations to help people understand the purpose and functionality of user interface components. Explain that defining the presentation of labels, instructions, and graphical representations is a responsibility of the designer, whereas providing such labels and instructions is a responsibility shared with the content author.

#### Learning Outcomes for Topic

Students should be able to:

* specify clear and distinguishable labels for components, including visual and programmatic names
* define overall instructions to make information in multi-step processes more understandable, for example text and graphical representations 
* define visual and non-visual instructions to communicate the total number of steps and the current step in multi-step forms and processes
* associate controls that share the same purpose, such as those collecting personal information, payment methods, or consent to legal conditions, and communicate such groups visually and non-visually

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of labels, including names for links, buttons, and form controls. Explain that these labels help users identify these components. Explain that defining the presentation of these labels is a designer's responsibility, implementing these labels is a developer's responsibility, and providing labels is a responsibility shared with the content author.
* Show examples of overall instructions, such as indications of what will happen after pressing a button. Explain that these instructions help users better understand the purpose and functionality of components. Explain that instruction presentation is a designer's responsibility, implementing these instructions is a developer's responsibility, and defining the content of these instructions is a responsibility shared with the content author.
* Show examples of multi-step processes, such as a multi-step form, with instructions to indicate the current step and total number of steps in the process. Then show examples of multi-step processes without such instructions. Compare the user experiences for each of the examples. Explain that people rely on such instructions to get an understanding of where they are in the process and how many steps the process has. Explain that defining the presentation of such instructions is a designer's responsibility, implementing these instructions is a developer's responsibility, and providing these instructions is a responsibility shared with the content author.
* Show examples of form controls that share the same purpose, such as those collecting personal information, payment methods, or consent to legal conditions. Explain that grouping them is essential for some people to understand and fill in such forms and is useful for all users. Discuss several ways to group those controls both visually and non-visually, such as using proximity relations or putting each of the groups on a dedicated step of the process. Explain that designing the grouping relations and defining how they look is a designer's responsibility, whereas coding those relations is a developer's responsibility.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Have students group related information in a form that collects personal information, payment methods, and consent to legal conditions. Assess how students build groups of related information, and how students provide ways for users to identify each of the groups.
* Practical &mdash; Give students a long list of items and ask them to select ways to split the list into smaller subsets. Assess how students use different strategies to group long sets of data into smaller subsets.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Tables

{% include excol.html type="middle" %}

Investigate strategies that people with disabilities use to interact with information presented in tables. For example, using textual descriptions, graphical representations of the table content, as well as several simpler tables or individual lists to present the information in a complex table.

#### Learning Outcomes for Topic

Students should be able to:

* identify uses of tables to present data that share a logical relationship
* define table header cells and data cells, and provide clear and distinguishable styles for each
* define graphical representations of complex tables that help users more easily understand their purpose and meaning
* evaluate the use of complex tables and select simpler ways to provide the information, for example:
  * simpler tables
  * charts, diagrams, and other graphical representations
  * individual lists
  * plain text
* identify related requirements for
  * developers to programmatically associate table descriptions, data cells, and header cells with their corresponding table
  * content authors to provide table descriptions where appropriate

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of different types of information presented in tables. Explain that tables are used when there is a logical, tabular relationship between the information presented, for example when displaying a list of events with their date and venue.
* Refer back to [Designer Module 1: Visual Design, Topic: Flexible Layouts](/curricula/designer-modules/visual-design/#topic-flexible-layouts) and explain that some users may require different ways of presenting tabular information. For example, providing graphical representations for complex tables, splitting complex tables into simpler ones, and using lists to group the logically related information.
* Show examples of table data cells and header cells. Discuss with students which of these cells should be the header cells and which should be the data cells. Emphasize that the relation between the table data cells and header cells must be perceived both visually and non-visually. Explain that providing the styles is a designer's responsibility, whereas establishing the programmatic relation is a responsibility shared with the developer.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Give students a table and ask them to define the table's header cells and data cells. Assess how students understand the difference between header cells and data cells.
* Practical &mdash; Give students a set of tables and ask them to provide clear styles to distinguish header cells from data cells. Assess how students provide clear and distinguishable styles for header cells and data cells.
* Practical &mdash; Give students a complex table and ask them to split the information using simpler tables, lists, and graphical representations where appropriate. Assess how students provide alternative ways to present tabular information.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about the different approaches they can use to communicate the structure in web pages and documents. Assess how students recognize structures such as pages, headings, and landmarks.
* Portfolio &mdash; Have students organize different pieces of information on a website, including text, forms, and images. Assess how students provide methods for users to identify different pieces of information, how students split large amounts of information into smaller and more manageable pieces, and how students group related information together.

## Teaching Resources

Suggested resources to support your teaching:

* [Designing for Web Accessibility](/tips/designing/) &mdash; Tips for user interface and visual design.
* [[How People with Disabilities Use the Web]](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Keyboard Compatibility (Web Accessibility Perspectives)](/perspective-videos/keyboard/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Understandable Content (Web Accessibility Perspective)](/perspective-videos/understandable/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
