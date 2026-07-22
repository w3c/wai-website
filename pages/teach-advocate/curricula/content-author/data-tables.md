---
title: "5: Data Tables in Content Author Modules | Curricula"
title_html: "Module 5: Data Tables&nbsp;"
nav_title: "Data Tables"
permalink: /curricula/content-author-modules/data-tables/
ref: /curricula/content-author-modules/data-tables/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
custom_changelog: /curricula/changelog/
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
  previous: /curricula/content-author-modules/images/
  next: /curricula/content-author-modules/multimedia/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on the visual and non-visual relations between the table cells to understand, navigate, and process information contained in data tables
* explain accessibility requirements for data tables

## Learning Outcomes for Module

Students should be able to:

* explain how people with disabilities rely on appropriate table markup and clear relations between header and data cells to understand, navigate, and process information presented in data tables
* provide data tables as an alternative to data visualizations contained in charts, diagrams, and infographics
* designate the cell role and scope in a table, including header and data cells
* provide table summaries and descriptions to help users understand the purpose of complex tables
* explain the accessibility considerations of using layout tables and avoid using layout tables when possible
* ensure presentation of data table content in a meaningful sequence, including the reading order, for different user configurations and assistive technologies
* identify related requirements for:
  * designers to ensure sufficient contrast ratios for data tables
  * authoring tools to produce appropriate markup for data tables

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* Prior [Content Author Modules](/curricula/content-author-modules/)
* Basic knowledge of:
  * Writing
  * Copy-editing
  * Proofreading
  * Content creation

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.1.1 Non-Text Content](https://www.w3.org/WAI/WCAG21/quickref/#non-text-content)
  * [WCAG 2 Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG 2 Success Criterion 1.3.2 Meaningful Sequence](https://www.w3.org/WAI/WCAG21/quickref/#meaningful-sequence)
* In-depth knowledge of
  * [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
  * Prior [Content Author Modules](/curricula/content-author-modules/)
  * [Accessible authoring tools](/standards-guidelines/atag/)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Table Header Cells

{% include excol.html type="middle" %}

Table header cells and their scope identify the type of information provided in a row or column. Explain why specifying the table header cells and their scope is essential for some groups of people with disabilities to understand, navigate, and process the table content.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with disabilities rely on accessible table header cells to understand, navigate, and process data tables
* define table header cells as those which identify the type of information in a row or column
* provide short, descriptive column and row headers for tables
* specify the scope for headers that span multiple rows or columns
* identify requirements for authoring tools to produce appropriate markup for table headers, including the header scope

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate the use of screen readers to navigate data tables. Emphasize how header cells are announced before or after the data cells they are associated with.
* Show examples of header cells. Explain that these cells must convey clear and succinct information about the data in the column or row.
* Show examples of tables with headers that span multiple rows or columns. Discuss with students which of the cells should be the header cells and how many rows or columns the headers should span. Some authoring tools let content authors specify the scope of header cells. Otherwise, content authors must provide the header scope through annotations for designers and developers to implement these tables.
* Introduce accessible tools that produce appropriate markup for header cells. Explain how to designate a given cell as header and how to define the header scope via the tool's user interface.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students what type of information header cells should convey. Assess how students understand the type of information that header cells should convey.
* Practical &mdash; Give students a table without designated headers. Ask them which cells should be the header cells and how many rows and/or columns the headers should span. Assess how students recognize the header cells as well as their scope.
* Practical &mdash; Have students designate the header cells and their scope using a given authoring tool. Assess how students use authoring tools to designate the header cells and their scope.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Table Data Cells

{% include excol.html type="middle" %}

Table data cells contain the individual pieces of data that make up the table. Explain how clear and meaningful order and relations in tables help people with disabilities better understand the table contents.

#### Learning Outcomes for Topic

Students should be able to:

* explain how assistive technologies associate data cells with their corresponding header cells
* describe data cells as those which contain the specific pieces of data that make up the table
* provide unique, clear, and succinct information in each data cell
* ensure the order and relations in tables make sense for people using different screen sizes, configurations, and assistive technologies
* split complex tables into simpler ones to make the information easier to understand
* specify the scope for cells that span multiple rows or columns
* identify related requirements for
  * authoring tools to produce appropriate markup for table data cells, including the cell scope
  * designers and developers to support association of data cells with their corresponding table header cells

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate the use of screen readers to navigate data cells. This includes navigating by column and row. Emphasize how data cells are associated to their corresponding header cells. Some screen readers announce the header cell before the data cell, others announce the header cell after the data cell.
* Explain that data cells contain the specific pieces of data that make up the table. Explain that cells spanning multiple rows or columns are problematic for some people that have difficulty to understand the cell's scope.
* Show examples of complex tables. Demonstrate how to split them into simpler ones to make the information easier to understand.
* Introduce accessible authoring tools that produce appropriate markup for data cells. Explain how to designate a cell as data cell and how to define the cell scope using the tool's user interface.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students what a data cell contains. Assess how students understand what a data cell contains.
* Practical &mdash; Give students a table. Ask them which cells should be the data cells and how many columns and/or rows these cells should span. Assess how students recognize the data cells as well as their scope.
* Practical &mdash; Give students a complex table and ask them to split it into simpler tables to make the information easier to understand. Assess how students split complex tables into simpler ones to make the information easier to understand.
* Practical &mdash; Ask students to mark the data cells as such and to define their scope using a given authoring tool. Assess how students use authoring tools to mark the data cells and their scope.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Table Summaries and Descriptions

{% include excol.html type="middle" %}

Table summaries identify the table purpose and explain what the table is about. Table descriptions explain how the table is organized, especially for complex tables. Table summaries and descriptions help people with disabilities distinguish a table from other tables on a page.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with disabilities rely on meaningful table summaries and descriptions to understand the table purpose and to distinguish a table from other tables
* provide summaries that identify the table purpose and explain what the table is about
* write descriptions that:
  * explain how the table is organized
  * provide information about the type of data in each column and row
* identify requirements for authoring tools to:
  * support the inclusion of summaries and descriptions
  * produce appropriate markup for summaries and descriptions

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate how screen readers announce the summary and description as the user moves through different tables on the same page. Explain that this information helps users distinguish one table from the other when there are several tables on the page. 
* Show examples of table summaries. Explain that summaries identify the table purpose and provide information about what the table is about. Emphasize that it is best practice to display these summaries on screen, as they are beneficial for all users.
* Explain that complex tables often need descriptions for users to understand how the table is organized. These include tables with headers that span multiple rows or columns, tables that are difficult to navigate, and tables with information that is difficult to process.
* Show examples of tables that need summaries and descriptions. Discuss with students which information they would include in the summary and which information they would include in the description.
* Introduce accessible authoring tools that produce appropriate markup for table summaries and descriptions. Some tools may refer to summaries as "titles" or "names". Some tools may refer to descriptions as "descriptions" or "captions". Others may have just one "caption" field for both the summary and the description.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students what type of information the table summary and description should convey. Assess how students explain what type of information the table summary and description should convey.
* Practical &mdash; Have students include the table summary and description using a given authoring tool. Assess how students rely on the tool's built-in functionality to include the table summary and description.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to assess knowledge:

* Practical &mdash; Give students a chart, diagram, or infographic and ask them to provide an alternative to that data visualization using a regular data table. Assess how students provide alternatives to data visualizations contained in charts, diagrams, and infographics using regular data tables.
* Portfolio &mdash; Have students include data tables in the web page they are creating. Assess how students designate the table header and data cells and their scope as well as how they provide table summaries and descriptions where appropriate.

## Teaching Resources

Suggested resources to support your teaching:

* [Writing for Web Accessibility](/tips/writing/) -- Introduces some basic considerations to help you get started writing web content that is more accessible to people with disabilities.
* [Tables (WAI Web Accessibility Tutorials)](/tutorials/tables/) &mdash; Shows how to develop tables that are accessible to people with disabilities.
* [[How People with Disabilities Use the Web]](/people-use-web/) &mdash; Describes some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Clear Layout and Design (Web Accessibility Perspectives)](/perspective-videos/layout/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Understandable Content (Web Accessibility Perspective)](/perspective-videos/understandable/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
