---
title: "1: Page Structure in Developer Modules | Curricula"
title_html: "Module 1: Page Structure&nbsp;"
nav_title: "Page Structure"
permalink: /curricula/developer-modules/page-structure/
ref: /curricula/developer-modules/page-structure/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
changelog: /curricula/changelog/
footer: >
  <p><strong>Date:</strong> Updated 4 March 2021. First published December 2019.</p>
  <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Contributors: <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245).</p>
parent_in_h1: 
  - ref: /curricula/developer-modules/
    name: "Developer Modules"
  - ref: /curricula/
    name: "Curricula on Web Accessibility"
navigation:
  previous: /curricula/developer-modules/
  next: /curricula/developer-modules/menus/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on headings, sections, and other structures to orient themselves and navigate within web pages
* demonstrate how people with disabilities rely on semantics in web page coding to identify page components and understand their meaning
* explain coding techniques to convey the structure and semantics in accessible content

## Learning Outcomes for Module

Students should be able to:

* explain how page structure enables people with disabilities to orient themselves and navigate within web pages
* identify and convey the hierarchy of sections of content by using headings
* write markup for the structure of sections of content, such as paragraphs and lists
* write markup for different page regions, such as header, footer, and main content
* write markup for page meta-information to facilitate identification and interpretation
* outline the benefits of using HTML native elements for compatibility with assistive technologies and adaptive strategies
* write code to allow people to skip over blocks of repeated content
* write code for content so that it is presented in a meaningful sequence
* write styles and code for content so that it has a distinguishable focus indicator

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* Basic knowledge of:
  * [HTML5 sections {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/sections.html#sections)
  * [HTML5 grouping content {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/grouping-content.html#grouping-content)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG 2 Success Criterion 1.3.2 Meaningful Sequence](https://www.w3.org/WAI/WCAG21/quickref/#meaningful-sequence)
  * [WCAG 2 Success Criterion 2.1.1 Keyboard](https://www.w3.org/WAI/WCAG21/quickref/#keyboard)
  * [WCAG 2 Success Criterion 2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/quickref/#bypass-blocks)
  * [WCAG 2 Success Criterion 2.4.2 Page Titled](https://www.w3.org/WAI/WCAG21/quickref/#page-titled)
  * [WCAG 2 Success Criterion 2.4.3 Focus Order](https://www.w3.org/WAI/WCAG21/quickref/#focus-order)
  * [WCAG 2 Success Criterion 2.4.4 Link Purpose (In Context)](https://www.w3.org/WAI/WCAG21/quickref/#link-purpose-in-context)
  * [WCAG 2 Success Criterion 2.4.6 Headings and Labels](https://www.w3.org/WAI/WCAG21/quickref/#headings-and-labels)
  * [WCAG 2 Success Criterion 2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/quickref/#focus-visible)
  * [WCAG 2 Success Criterion 2.4.10 Section Headings](https://www.w3.org/WAI/WCAG21/quickref/#section-headings)
  * [WCAG 2 Success Criterion 3.1.1 Language of Page](https://www.w3.org/WAI/WCAG21/quickref/#language-of-page)
  * [WCAG 2 Success Criterion 3.1.2 Language of Parts](https://www.w3.org/WAI/WCAG21/quickref/#language-of-parts)
  * [WCAG 2 Success Criterion 3.2.4 Consistent Identification](https://www.w3.org/WAI/WCAG21/quickref/#consistent-identification)
  * [WCAG 2 Success Criterion 4.1.1 Parsing](https://www.w3.org/WAI/WCAG21/quickref/#parsing)
  * [WCAG 2 Success Criterion 4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/quickref/#name-role-value)
  * [HTML5 sections {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/sections.html#sections)
  * [HTML5 grouping content {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/grouping-content.html#grouping-content)
  * [WAI-ARIA landmark roles](https://www.w3.org/TR/wai-aria/#landmark_roles)
* In-depth knowledge of [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Section Headings

{% include excol.html type="middle" %}

Demonstrate the use of the HTML elements `h1` through `h6` to distinguish and label sections of content. Demonstrate the use of the WAI-ARIA properties `role="heading"` and `level="1-6"` when HTML headings cannot be used. Explain how different people use headings for orientation and navigation.

#### Learning Outcomes for Topic

Students should be able to:

* explain how headings and their rank levels are used by different types of assistive technologies and adaptive strategies, such as text to speech and custom stylesheets, to allow people with disabilities to understand and navigate the content
* write markup for headings using the HTML elements `h1` through `h6`, and using the WAI-ARIA properties `role="heading"` and `level="1-6"` when HTML headings cannot be used
* rank heading levels according to the hierarchical structure of the content
* describe related requirements for authors and designers to provide meaningful texts and distinguishable styles for headings

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Explain that headings are organized in a hierarchical structure, i.e., h1 being the first rank and h6 being the last one. Emphasize that native HTML elements are more likely to be supported by browsers and assistive technologies. Show examples of how headings can be nested to distinguish and label different sections and subsections of content. Examples of how to structure pages using headings are provided in the WAI Tutorials on [Headings that Reflect the Page Organization](/tutorials/page-structure/headings/#headings-that-reflect-the-page-organization).
* Present examples of headings and reflect with students if they are descriptive of the sections they entitle. Mention that providing descriptive headings is a shared responsibility among different team members: content authors, designers, and developers. Descriptions of how to mark up headings to organize passages of text are provided in the WAI Tutorials on [Organize Passages of Text](/tutorials/page-structure/headings/#organize-passages-of-text).
* Demonstrate the use of voice commands, keystrokes, and gestures provided by assistive technologies and adaptive strategies to navigate web pages through headings. Explore advanced functionality that some tools provide, such as presenting all headings in a list where users can select the heading they are interested in. Examples of how people with disabilities interact with the Web are provided in [How People with Disabilities Use the Web](/people-use-web/).

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students how many heading levels there are in the HTML specification, and how each of the heading levels can be coded. Assess students' knowledge of the HTML elements `h1` through `h6`, as well as the WAI-ARIA properties `role="heading"` and `level="1-6"`.
* Practical &mdash; Give students a web page that contains incorrect heading ranks and ask students to use `h1` through `h6` elements to indicate the correct heading structure. Assess how students relate the visual layout of the page with the underlying structure.
* Practical &mdash; Give students headings that do not describe the sections they entitle and ask students to replace the text of the headings with descriptive information. Assess how students provide descriptive titles for sections.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Sections of Content

{% include excol.html type="middle" %}

Explain the use of HTML elements to convey the structure of contents. For example, the proper coding of sections, paragraphs, and lists.

#### Learning Outcomes for Topic

Students should be able to:

* explain how properly coded sections of content can be presented in different ways; for example, read aloud using text-to-speech technologies, rendered using custom styling, and displayed in different screen and text sizes
* describe the purpose of the HTML elements `section`, `article`, `p`, `ul`, `ol`, `li`, `dl`, `dt`, and `dd`
* write markup for sections of content using the HTML elements `section` and `article`
* write markup for paragraphs using the HTML element `p`
* write markup for lists using the HTML element `ul`, `ol`, and `dl`
* write markup for list items using the HTML elements `li`, `dt`, and `dd`
* write markup for inline and block quotes using the HTML elements `q` and `blockquote` respectively
* apply corresponding WAI-ARIA properties when native HTML elements cannot be used
* describe related requirements for content authors to use appropriate structures to convey content meaning, such as paragraphs and lists

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Define the `section` element as a thematic grouping of content. An example of how to mark up the `section` element is provided in the WAI Tutorials on [Sections](/tutorials/page-structure/content/#sections).
* Define the `article` element as a self-containing unit within the web page. An example of how to mark up the `article` element is provided in the WAI Tutorials on [Articles](/tutorials/page-structure/content/#articles).
* Explain that the `p` element is used to mark up paragraphs of text. An example of how to mark up the `paragraph` element is provided in the WAI Tutorials on [Paragraphs](/tutorials/page-structure/content/#paragraphs).
* Explain that unordered lists are used to group items where the numbering is not relevant, and ordered lists are used when numbering of items matters. Explain that these lists are marked up with the `ul` or `ol` element, and each of the items is coded with the `li` element. Emphasize that each of the list items can contain headings, paragraphs, and other lists. An example of how to mark up unordered lists is provided in the WAI Tutorials on [Lists](/tutorials/page-structure/content/#lists).
* Define description lists as a grouping of several terms and descriptions. Description lists are marked up with the `dl` element, terms are marked up with the `dt` element, and descriptions are marked up with the `dd` element. Examples of how to mark up description lists are provided in the WAI Tutorials on [Description Lists](/tutorials/page-structure/content/#description-lists).
* Define quotes as text attributed to another author. Explain that there can be inline or block quotes, and that they are marked up using the HTML elements `q` and `blockquote` respectively. Examples of how to mark up quotes are provided in the WAI tutorials on [Quotes](/tutorials/page-structure/content/#quotes).

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Research &mdash; Students research the HTML specification and provide information about the different ways of coding sections of content. Assess students' knowledge of the HTML elements for marking up content.
* Practical &mdash; Give students several types of lists and ask students to code them using their corresponding HTML list element. Assess students' knowledge of the different types of lists.
* Practical &mdash; Give students a passage of text containing several sections, paragraphs, lists, and quotes. Ask students to code the passage using the corresponding HTML elements.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Page Regions

{% include excol.html type="middle" %}

Explain the use of common markup to identify page regions, such as header, footer, navigation, and main content areas. Explain how page regions support orientation and navigation for people with disabilities.

#### Learning Outcomes for Topic

Students should be able to:

* explain how properly coded page regions can be presented in different ways; for example, read aloud using text-to-speech technologies, rendered using custom styling, and displayed in different screen and text sizes
* describe the purpose of the HTML elements `header`, `nav`, `main`, `section`, `article`, `aside`, and `footer`
* write markup for regions of a page using the HTML elements `header`, `nav`, `main`, `section`, `article`, `aside`, and `footer`, as well as their corresponding WAI-ARIA landmarks when HTML structures cannot be used
* label regions using HTML headings, `aria-label`, and `aria-labelledby` when necessary

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of different page layouts, and their markup of the header, navigation, main content, section, article, complementary, and footer regions. Emphasize that native HTML elements are more likely to be supported by newer browsers and assistive technologies. Examples of using HTML elements to code page regions are provided in the WAI Tutorials on [Regions](/tutorials/page-structure/regions/).
* Explain that WAI-ARIA landmarks provide broader support for old assistive technologies and browsers. Emphasize that they can also enhance HTML 4 semantics if applied to an ordinary `div` element. Examples of using WAI-ARIA landmarks to code page regions are provided in the WAI Tutorials on [Page Regions in HTML5 Using WAI-ARIA](/tutorials/page-structure/regions/#accessupport).
* Show examples of providing labels for page regions, included by using HTML headings, `aria-label`, and `aria-labelledby`. Explain that page regions need to be labeled to distinguish them from one another, for example when two regions of the same type are used in a web page. Descriptions of how to label page regions are provided in the WAI Tutorials on [Labeling regions](/tutorials/page-structure/labels/).
* Demonstrate the use of voice commands, keystrokes, and gestures provided by assistive technologies and adaptive strategies to navigate page regions. Explore advanced functionality that some tools provide, such as presenting all page regions in a list or tree where users can select the region they are interested in. Examples of how people with disabilities interact with the Web are provided in [Stories of Web Users](/people-use-web/user-stories/).
* Invite students to try out functionality built-in to some browsers to facilitate reading. Explain that it changes the layout of the page, showing the main content of a web page when it is marked up appropriately. Discuss with students how this can improve readability for all users. Refer to the support pages of browsers for more information on the particular reading modes they provide.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about the types of page regions and how each of these can be coded in HTML and WAI-ARIA. Assess students' knowledge of the different coding techniques for page regions.
* Practical &mdash; Give students several page layouts and ask students to mark them up using HTML elements and WAI-ARIA landmarks. Assess students' knowledge of the different types of page regions and the different coding techniques to mark them up.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Page Orientation and Navigation

{% include excol.html type="middle" %}

Explain how page regions, sections of content, and section headings (described in prior topics) are combined to provide a coherent over-arching page structure. Explain how orientation and navigation across the page is facilitated by additional mechanisms, such as links, visible focus indicator, meaningful sequence, and meta-information.

#### Learning Outcomes for Topic

Students should be able to:

* write markup for page titles to identify web pages
* write markup for the primary language of web pages to allow correct interpretation by assistive technologies
* label blocks of content repeated on multiple pages with consistent names
* write code to allow people using only the keyboard to skip over blocks of repeated content
* write code that allows to present content in a meaningful sequence
* write code for distinguishable focus indicators, for example by using the CSS `:focus` selector
* describe related requirements for content authors to write meaningful link texts and page titles
* describe related requirements for designers to provide distinguishable focus indicators for links and other navigational elements
* describe related requirements for content authors and designers to provide clear layouts and designs that support different viewport sizes

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate the use of the HTML element `title` within the `head` element to convey the topic or purpose of the page. Show examples of where and how browsers and assistive technologies show the contents of the `title` element: screen reader keystrokes, browser tabs, browser window titles, and search results. Relate this requirement to WCAG success criterion [2.4.2 Page Titled](https://www.w3.org/WAI/WCAG21/quickref/#page-titled). Examples of how to provide descriptive titles are provided in techniques [G88: Providing descriptive titles for Web pages](https://www.w3.org/WAI/WCAG21/Techniques/general/G88.html) and [H25: Providing a title using the title element](https://www.w3.org/WAI/WCAG21/Techniques/html/H25). Examples of how to write page titles are provided in the Easy Checks resource, section [Page title](/test-evaluate/preliminary/#title).
* Demonstrate the use of the `lang` attribute, together with a valid language tag, to convey the main language of a web page. Explain that it is placed within the `html` tag. Examples of how to convey the main language of a web page are provided in technique [H57: Using the language attribute on the HTML element](https://www.w3.org/WAI/WCAG21/Techniques/html/H57.html).
* Emphasize that, when there is a passage of text in a different language than the default, the `lang` attribute needs to be used with a valid language tag that corresponds to the language of that passage. For an explanation of how to code the `lang` attribute to convey changes in language, see [H58: Using language attributes to identify changes in the human language](https://www.w3.org/WAI/WCAG21/Techniques/html/H58.html).
* Demonstrate the use of HTML links and other navigational elements, such as those that allow to bypass blocks of content that repeats on multiple pages. Mention that these links need to have the HTML attribute `href`, together with a value containing their destination in the form of a uniform resource identifier (URI). Explain that people using only the keyboard rely on bypass blocks mechanisms to skip large blocks of repetitive content, such as headers and navigation bars. Examples of how to code such links are provided in technique [G1: Adding a link at the top of each page that goes directly to the main content area](https://www.w3.org/WAI/WCAG21/Techniques/general/G1.html).
* Show content in different layouts, for example, with different style sheets applied. Emphasize that content always needs to follow a meaningful sequence that allows to adapt the content to different ways of presentation. For information on how to ensure a meaningful sequence, see technique [G57: Ordering the content in a meaningful sequence](https://www.w3.org/WAI/WCAG21/Techniques/general/G57).
* Emphasize that keeping focus order is needed for consistency between the visual and programmatic order of items. Show examples of web pages where source order matches visual presentation and compare them with pages where it does not. Link this requirement to WCAG success criterion [2.4.3 Focus Order](https://www.w3.org/WAI/WCAG21/quickref/#focus-order).
* Show examples of default and custom visual focus indicators. Explain that these indicators can help people know where they are as they browse the web page. Mention that it is sometimes best practice to provide custom indicators for better visibility and contrast ratios. Link this requirement to WCAG success criterion [2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/quickref/#focus-visible).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students a set of web pages. Ask students to choose a title that best describes each of the pages and code it appropriately. Assess students' knowledge of the `title` element and how to provide descriptive content.
* Practical &mdash; Give students several passages of text written in different languages and ask students to code them using the correct language tag. Assess students' knowledge of how to code the different language tags.
* Practical &mdash; Students build a mechanism to bypass blocks of content. Assess students' understanding of the difference between repeated blocks and content specific to a web page.
* Short answer questions &mdash; Ask students about different navigational mechanisms they are aware of and request students to explain their main features. Assess students' knowledge of how people navigate within web pages and find specific content.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to support assessment:

* Practical &mdash; Supervise students using different mechanisms that assistive technologies provide to move to next and previous heading and to show all the headings of a web page in an isolated list. Assess students’ knowledge of mechanisms of assistive technologies to move through headings.
* Practical &mdash; Supervise students using different mechanisms that assistive technologies provide to move to next and previous region and to show all the regions of a web page in an isolated list. Assess students’ knowledge of mechanisms of assistive technologies to move through regions.
* Practical &mdash; Supervise students using different mechanisms that assistive technologies provide to check page titles. Assess students' knowledge of mechanisms of assistive technologies to check page titles.
* Portfolio &mdash; Students build a simple web page with proper structure and semantics. Assess how students mark up different features, including regions of the page, sections of content, headings, passages of text, title, and page language.

## Teaching Resources

Suggested resources to support your teaching:

* [Page Structure (WAI Web Accessibility Tutorials)](/tutorials/page-structure) &mdash; Shows how to provide page structures that are accessible to people with disabilities.
* [How People with Disabilities Use the Web](/people-use-web/) &mdash; Describes some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Text to Speech (Web Accessibility Perspective)](/perspective-videos/speech/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Clear Layout and Design (Web Accessibility Perspectives)](/perspective-videos/layout/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
* [WAI-ARIA](/standards-guidelines/aria/) &mdash; Describes the roles, states, and properties that define accessible user interface elements and can be used to improve the accessibility and interoperability of web content and applications.
* [HTML5 living standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/) &mdash; The core markup language for the web.
