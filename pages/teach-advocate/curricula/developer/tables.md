---
title: "4: Tables in Developer Modules | Curricula"
title_html: "Module 4: Tables&nbsp;"
nav_title: "Tables"
permalink: /curricula/developer-modules/tables/
ref: /curricula/developer-modules/tables/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
custom_changelog: /curricula/changelog/
footer: >
  <p><strong>Date:</strong> Updated 04 March 2021. First published December 2019.</p>
  <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Contributors: <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245).</p>
parent_in_h1: 
  - ref: /curricula/developer-modules/
    name: "Developer Modules"
  - ref: /curricula/
    name: "Curricula on Web Accessibility"
navigation:
  previous: /curricula/developer-modules/images/
  next: /curricula/developer-modules/forms/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on table structures, including headers and data cells, to understand information presented in tables
* explain coding techniques to mark up headers and data cells, and to describe the topic and purpose of tables

## Learning Outcomes for Module

Students should be able to:

* explain strategies that people with disabilities use to understand and navigate information presented in tables
* write markup for tables, table headers, and data cells using the appropriate HTML elements, and WAI-ARIA attributes when necessary
* write markup for additional structures that associate table headers with data cells in complex and irregular tables
* identify situations in which table descriptions are required and mark up table descriptions using appropriate techniques
* describe related requirements for authors and designers to provide information about the relationships between header and data cells in complex table cells

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* Basic knowledge of the [HTML `table` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-table-element)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.3.1. Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG 2 Success Criterion 4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/quickref/#name-role-value)
  * [HTML `table` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-table-element)
  * [HTML `tr` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-tr-element)
  * [HTML `th` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-th-element)
  * [HTML `td` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-td-element)
  * [HTML `colgroup` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-colgroup-element)
  * [HTML `col` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-col-element)
  * [HTML `tbody` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-tbody-element)
  * [HTML `scope` attribute {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#attr-th-scope)
  * [HTML `headers` attribute {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#attr-tdth-headers)
  * [HTML `Caption` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/tables.html#the-caption-element)
  * [HTML `Summary` attribute {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/obsolete.html#attr-table-summary)
* In-depth knowledge of [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)

{% include excol.html type="end" %}

## Topics to Teach
Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Simple Tables

{% include excol.html type="middle" %}

Simple tables have one row and/or column header. Explain the use of HTML elements to mark up such tables, including table headers and table cells. Demonstrate how this markup allows the table to be presented in different ways by browsers and assistive technologies.

#### Learning Outcomes for Topic

Students should be able to:

* explain how table markup allows assistive technologies, such as text-to-speech, to associate information in header and data cells
* explain how table markup supports adaptive strategies, such as displaying tables using custom style sheets and on different screen sizes
* identify tables that present data and write markup for such data tables using the HTML element `table`
* identify and write markup for table headers using the HTML element `th`
* identify and write markup for table data cells using the HTML element `td`
* identify tables that are used for layout purposes rather than to present data, and write code for such layout using CSS techniques instead of using HTML structures

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Define simple tables as those that contain one row or column header. Explain that speech technologies can associate information in the header and data cells if they are marked up appropriately. Examples of simple tables are provided in the WAI tutorials on [Tables with one header](/tutorials/tables/one-header/).
* Show examples of use of the HTML elements `table`, `th`, and `td`. Explain that `table` is used to mark up the table layer, `th` is used to code header cells, and `td` is used to code data cells. For examples of how to mark up a simple table, refer to technique [H51: Using table markup to present tabular data](https://www.w3.org/WAI/WCAG21/Techniques/html/H51).
* Demonstrate the use of voice commands, keystrokes, and gestures provided by assistive technologies and adaptive strategies to navigate tables, including moving between header and data cells. Explore advanced functionality that some tools provide, such as presenting tables as linear information. Examples of how people with disabilities interact with the web are provided in [How People with Disabilities Use the Web](/people-use-web/).
* Provide examples of alternative renderings for tables, such as splitting the table into several lists, or showing only parts of the table in a mobile viewport.
* Explain why layout tables should be avoided, and CSS techniques for visual design should be used instead. Mention that, if a layout table still needs to be used, marking up the table element using `role="presentation"` will help assistive technologies present the information contained in the layout table without the table semantics.

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short Answer Questions &mdash; Ask students which HTML elements are needed to mark up a simple table structure. Assess students' knowledge of the HTML elements `table`, `th`, and `td`.
* Practical &mdash; Give students a simple table and ask students to identify the table headers and to code them using the `th` element. Assess students’ understanding of the `th` element.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Complex Tables

{% include excol.html type="middle" %}

Complex tables have multiple or irregular row or column headers. Build on the prior topic Simple Tables to explain the use of additional techniques to convey structure and layout for complex tables. This includes the HTML elements `col` and `colgroup`, the HTML attributes `scope` and `headers`, and the WAI-ARIA attribute `aria-sort`.

#### Learning Outcomes for Topic

Students should be able to:

* identify and write markup for the direction of table headers using the HTML attribute `scope`
* identify and write markup for headers that span several columns using the HTML elements `col` and `colgroup`
* identify and write markup for headers that span several rows using the HTML elements `row` and `rowgroup`
* identify and write markup for table parts using the HTML elements `thead`, `tbody`, and `tfoot`
* write code to convey irregular headers for cells using the HTML attribute `headers`
* write code for headers that allow for data sorting using the WAI-ARIA attribute `aria-sort` with the values `ascending`, `descending`, `other`, and `none`
* write code that allows users to operate sorting functionality using different input methods, including keyboard only and voice interaction
* describe related requirements for content authors and designers to provide simpler presentation of information when possible, such as splitting complex tables into simple tables that are easier to understand

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:
 
* Explain that complex tables have multiple or irregular column or row headers. Indicate that assistive technologies may not interpret the direction and scope of such headers, so that it is necessary to provide additional markup to explicitly associate header and data cells.
* Demonstrate the use of the HTML attribute `scope` and its values `row`, `col`, `rowgroup`, and `colgroup`, to code the direction of the headers. Explain that these values indicate headers for row, column, group of rows, and group of columns respectively. Examples of how to use the HTML attribute `scope` are provided in the WAI tutorials on [Tables with two headers](/tutorials/tables/two-headers/).
* Show examples of headers that span multiple rows or columns. Explain how to code them using the HTML elements `col`, `colgroup`, `thead` and `tbody`, as well as the attributes `colspan`, `rowspan`, and `rowgroup`. Examples of how to code headers that span several rows or columns are provided in the WAI tutorials on [Tables with irregular headers](/tutorials/tables/irregular/).
* Show examples of uses of the `headers` attribute together with unique identifiers to associate more than two headers that relate to the same data cell. Explain that the identifiers of the corresponding header cells need to be separated by spaces in the value of the attribute `headers`. Examples of how to use the `headers` attribute are provided in the WAI tutorials on [Tables with multi-level headers](/tutorials/tables/multi-level/).
* Show examples of sortable tables. Explain that the component that allows to sort the data is usually coded as a button so that it can be used with different input methods. Emphasize that additional feedback may need to be provided based on the support for the WAI-ARIA attribute `aria-sort`, so that users are aware of how data is currently sorted. Examples of how to provide sortable tables are provided in the WAI-ARIA Authoring Practices [Data grid example 2](https://www.w3.org/TR/wai-aria-practices/examples/grid/dataGrids.html).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short answer questions &mdash; Ask students how table headers that span several rows or columns are coded in HTML. Assess students' knowledge of the HTML elements to code multiple row and column headers.
* Practical &mdash; Give students a table containing headers that span several columns or rows and ask students to code them. Assess how students use the HTML elements `th`, `col`, `tbody`, and the attribute `scope` to indicate the scope of the table headers and convey their direction.
* Practical &mdash; Give students an irregular table and ask students to code its headers using the attribute `headers`. Assess how students use the attribute `headers` and its corresponding identifiers in data cells.
* Practical &mdash; Give students a sortable table and ask students to code it. Assess students' knowledge of how to use `aria-sort` and functionality that allows to sort data using different input methods.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Table Descriptions

{% include excol.html type="middle" %}

Explain the use of HTML elements and, if necessary, WAI-ARIA attributes to provide information about the purpose of a table. Mention that these descriptions for tables are typically provided by content authors.

#### Learning Outcomes for Topic

Students should be able to:

* write markup for table descriptions using the HTML element `caption`
* identify situations in which it is necessary to use other techniques to provide table descriptions, and write markup for table descriptions using the following techniques as appropriate:
  * WAI-ARIA attributes `aria-labelledby` and `aria-describedby`
  * HTML elements `figure` and `figcaption`
  * HTML attribute `summary` (recommended for fallback purposes)
* describe related requirements for content authors to write meaningful table summaries and descriptions

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of use of the HTML element `caption` to provide descriptions for the purpose of a table. Mention that it needs to be the first child of the element `table` and that its contents are visible for all users by default. Examples of how to use the element `caption` are provided in technique [H39: Using caption elements to associate data table captions with data tables](https://www.w3.org/WAI/WCAG21/Techniques/html/H39).
* Explain the use of methods to provide further details about the structure and contents of a table. For example, the HTML elements `figure` and `figcaption`, and the WAI-ARIA attributes `aria-labelledby` and `aria-describedby`. Explain that the element `table` needs to be wrapped by the element `figure`, and that the element `figcaption` containing the text needs to be the first child of the element `figure`. Examples of how to code a table summary are provided in the WAI tutorials on [Caption and summary](/tutorials/tables/caption-summary/).
* Explain the use of the attribute `summary` to provide people using a screen reader with detailed information about the structure of complex tables. Emphasize that it is obsolete according to the HTML5 specification. Its usage is only advisable for fallback purposes. Newer techniques (discussed above on this topic) are recommended. Examples of how to use the attribute `summary` are provided in technique [H73: Using the summary attribute of the table element](https://www.w3.org/WAI/WCAG21/Techniques/html/H73).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students a table and ask students to provide mechanisms for authors to add a short text to describe its purpose. Assess students' understanding of the `caption` element to describe the purpose of a table.
* Practical &mdash; Give students a complex table and ask students to include mechanisms for authors to provide extended details about its contents and overall structure. Assess students' knowledge of HTML elements and attributes to provide table summaries.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to support assessment:

* Practical &mdash; Supervise students using mechanisms that assistive technologies provide to move to next and previous table, to move between table cells, and to show all the tables of a web page in an isolated list. Assess students’ knowledge of mechanisms of assistive technologies to move through table content and between tables.
* Short Answer Questions &mdash; Direct students to a web page where there are several tables. Then ask students to use an accessibility evaluation extension to find all table header and data cells and to compare these with the visual structure of the tables. Assess how students analyze if a table is coded appropriately to reflect its structure.
* Practical &mdash; Give students a table with neither visual nor programmatic headers. Then ask students to figure out the table headers and decide if the table could be considered simple or complex. Assess how students identify table headers and distinguish between simple and complex tables.
* Portfolio &mdash; Students add tables to the website they are building. Assess how students code table headers and table cells, as well as how they provide a table caption and additional descriptions for tables.

## Teaching Resources

Suggested resources to support your teaching:

* [Tables (WAI Web Accessibility Tutorials)](/tutorials/tables/) &mdash; Shows how to develop tables that are accessible to people with disabilities.
* [How People with Disabilities Use the Web](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Text to Speech (Web Accessibility Perspectives)](/perspective-videos/speech/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Clear Layout and Design (Web Accessibility Perspectives)](/perspective-videos/layout/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
* [WAI-ARIA](/standards-guidelines/aria/) &mdash; Describes the roles, states, and properties that define accessible user interface elements and can be used to improve the accessibility and interoperability of web content and applications.
* [HTML5 living standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/) &mdash; The core markup language for the web.
