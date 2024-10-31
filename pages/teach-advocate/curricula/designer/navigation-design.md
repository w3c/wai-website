---
title: "3: Navigation Design"
title_html: "Module 3: Navigation Design&nbsp;"
nav_title: "Navigation Design"
permalink: /curricula/designer-modules/navigation-design/
ref: /curricula/designer-modules/navigation-design/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
custom_changelog: /curricula/changelog/
footer: >
  <p><strong>Date:</strong> Updated 9 February 2022. First published December 2019. </p>
  <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Contributors: <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
   <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245).</p>
parent_in_h1:
  - ref: /curricula/designer-modules/
    name: nav_title
  - ref: /curricula/
    name: "Curricula on Web Accessibility"
navigation:
  previous: /curricula/designer-modules/information-design/
  next: /curricula/designer-modules/interaction-design/
---

## Introduction
{:.no-display}

Courses based on this module should:

* explain strategies that people with disabilities use to navigate websites and applications
* describe accessible behaviors, visual affordances, and interaction patterns of navigation menus and other navigational components

## Learning Outcomes for Module

Students should be able to:

* explain strategies that people with disabilities use to navigate websites and applications
* design different navigational components, including menus, tables of contents, and search functionalities
* describe different interactions for navigational components, including by keyboard, mouse, touch, and speech
* specify clear and consistent visual and non-visual:
  * presentation of menus and menu items
  * indication of state changes for menu items
* define blocks of repeated content
* create site maps and descriptive page titles to help users locate specific web pages within websites
* evaluate the use of navigational components, including menus, tables of contents, and site maps
* select navigational components that minimize distractions and unnecessary noise
* identify related requirements for developers to implement:
  * interactions for navigational components, including by keyboard, mouse, touch, and speech
  * clear and descriptive names for navigational components
  * additional semantics for navigational components, including menus, menu items, and menu item states
  * methods to bypass blocks of repeated content

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/designer-modules/#foundation-prerequisites)
* Prior [Designer Modules](/curricula/designer-modules/)
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
  * [WCAG Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG Success Criterion 1.3.2 Meaningful Sequence](https://www.w3.org/WAI/WCAG21/quickref/#meaningful-sequence)
  * [WCAG Success Criterion 2.1.1 Keyboard](https://www.w3.org/WAI/WCAG21/quickref/#keyboard)
  * [WCAG Success Criterion 2.1.2 No Keyboard Trap](https://www.w3.org/WAI/WCAG21/quickref/#no-keyboard-trap)
  * [WCAG Success Criterion 2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/quickref/#bypass-blocks)
  * [WCAG Success Criterion 2.4.2 Page Titled](https://www.w3.org/WAI/WCAG21/quickref/#page-titled)
  * [WCAG Success Criterion 2.4.5 Multiple Ways](https://www.w3.org/WAI/WCAG21/quickref/#multiple-ways)
  * [WCAG Success Criterion 2.4.6 Headings and Labels](https://www.w3.org/WAI/WCAG21/quickref/#headings-and-labels)
  * [WCAG Success Criterion 2.4.8 Location](https://www.w3.org/WAI/WCAG21/quickref/#location)
  * [WCAG Success Criterion 3.2.3 Consistent Navigation](https://www.w3.org/WAI/WCAG21/quickref/#consistent-navigation)
  * [WCAG Success Criterion 3.2.4 Consistent Identification](https://www.w3.org/WAI/WCAG21/quickref/#consistent-identification)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/designer-modules/#foundation-prerequisites)
  * Prior [Designer Modules](/curricula/designer-modules/)
  * Visual Design
  * Prototyping
  * Responsive Design
  * Information Architecture

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Menus

{% include excol.html type="middle" %}

Explore different types of navigation menus, for example static, fly-out, and mega menus. Explain the different scenarios where each of them can be used. For references on the different types of menus and their uses, see the WAI tutorials on [Menus](/tutorials/menus/).

Explain styling conventions for menus, such as expected location, appropriate size, and ability for menus and menu items to resize depending on different user configurations. For references on how to apply accessible menu styles, see the WAI tutorial on [Menu Styling](/tutorials/menus/styling/).

#### Learning Outcomes for Topic

Students should be able to:

* describe uses of different types of navigation menus, such as static, fly-out, and mega menus
* define visual and text indications to identify menus, including:
  * consistent styling for menu identification across websites
  * visual and non-visual indications about the current page in the navigation menu 
* specify interactions inside navigation menus, including through mouse, keyboard, touch, and speech
* design navigation menus that adapt to different text sizes, screen magnifications, and screen sizes and resolutions 
* apply distinguishable and consistent styles for menu items in their different states, for example in fly-out menus
* identify related requirements for developers to implement:
  * non-visual identification and naming of menus
  * semantics for different menu states and properties, such as hover, focus, current, active, and visited
  * support for different interaction methods, including keyboard, mouse, touch, and speech
  * support for different text and screen sizes

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Present different types of navigation menus, such as static, fly-out, and mega menus. Explain conventions for accessible navigation menus, for example clear and consistent styling to convey menu behaviors and states.
* Demonstrate interactions with navigation menus using different input devices, including keyboard, mouse, touch, and speech. For example, activating a menu option by tapping, pressing the Enter and Space keys, and mouse clicking. Explain that defining the interactions is a designer's responsibility, whereas providing the underlying code is a developer's responsibility.
* Show examples of navigation menus and menu items with large text. Explain that the text needs to adapt to different viewports and screen configurations, for example lines of text must wrap to avoid horizontal scrolling. Explain that different languages may have different word sizes, so designers must consider provisions for different word lengths.
* Show examples of different menu and submenu item states, such as hover, focus, current, active, and visited. Explain how to communicate the states of these menu items visually and non-visually. Explain that defining the visual presentation is a designer's responsibility, whereas providing the underlying code is a developer's responsibility.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Have students define mouse, keyboard, touch, and speech interactions for navigation menus. For example, how to open, navigate, activate, and close such menus using the mouse, keyboard, touch, and speech. Assess how students understand the need for different interaction patterns based on the input method in use.
* Practical &mdash; Give students different navigation menu states, such as hover, focus, current, active, and visited, and ask them to provide visual and non-visual methods to distinguish them from one another. Assess how students communicate navigation menus and menu items states visually and non-visually.
* Practical &mdash; Give students a navigation menu and ask them to provide visual and non-visual indications about the currently selected item. Assess how students provide appropriate indications about the currently selected item.
* Practical &mdash; Give students navigation menus containing long strings of text. Ask them to ensure the text is displayed irrespective of the viewport and screen configuration used. Assess how students understand the diversity among different languages, viewports, and screen configurations.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Site Navigation

{% include excol.html type="middle" %}

Discuss strategies that people use to navigate to different pages of the same site, including menus, breadcrumb trails, search functionalities, and site maps. Explain that different people rely on different navigational components. Discuss strategies to use several site navigational methods to favor various user experiences.

#### Learning Outcomes for Module

Students should be able to:

* select navigational components to help navigate to different pages of the same site, including:
  * navigational menus to provide the overall site structure
  * breadcrumb trails to communicate the current location within the site
  * site maps to provide an overview of the entire website
  * search functionalities to navigate to specific parts of the site
* design methods for users to locate specific web pages within websites, for example:
  * descriptive page titles
  * text and visual indications about the current page in the navigation menu 
* evaluate the amount of site navigational components in use
* identify related requirements for developers to apply semantics and styles to site navigational components

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of breadcrumb trails. Explain that they provide information about the user's location in the context of a whole website. Emphasize that they are useful especially in cases where the navigation contains several nested levels. For reference on how to provide breadcrumb trails, see technique [G65: Providing a breadcrumb trail](https://www.w3.org/WAI/WCAG21/Techniques/general/G65).
* Show examples of site maps and explain that they provide an overview of the whole site. Explain that some users rely on site maps to better understand the structure of the site and to find their way more easily through it. For references on how to provide a site map, see [G63: Providing a site map](https://www.w3.org/WAI/WCAG21/Techniques/general/G63.html).
* Show examples of search functionalities. Explain that they help users find content by supporting navigation to different parts of the site. Emphasize that some users prefer this way of navigating, especially when they are already familiar with the site and know what they are looking for. For references on how to provide a search functionality, see technique [G161: Providing a search function to help users find content](https://www.w3.org/WAI/WCAG21/Techniques/general/G161).
* Invite students to research different ways to present information in page titles. Reflect with them on how well the titles describe the page contents. Explain that page titles are useful to identify the purpose of a specific web page within a website. Mention that it is best practice to put the title text both in the page title and in the first heading of level 1 on the page. Some browsers and assistive technologies may truncate the titles or not show them at all. Explain that providing page titles is a responsibility shared with the content author. For references on how to provide descriptive page titles, see technique [G88: Providing descriptive titles for Web pages](https://www.w3.org/WAI/WCAG21/Techniques/general/G88.html).
* Show examples of visual and non-visual indications in menus about the current page with respect to the website.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Give students a website and ask them to provide multiple ways to navigate across the website. Assess how students identify and design the different user experiences for site navigation, including search functionalities, breadcrumb trails, and site maps.
* Practical &mdash; Give students a website and ask them to provide descriptive titles that identify each of the pages. Assess how students provide clear and descriptive page titles.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Page Navigation

{% include excol.html type="middle" %}

Discuss strategies that people use to navigate to different parts of a web page, including tables of contents and methods to bypass blocks of repeated content. Explain that different groups of users rely on different navigational components. Discuss how to use page navigation components that minimize distractions and unnecessary noise.

### Learning Outcomes for Topic

Students should be able to:

* specify visual and non-visual methods to help users identify blocks of repeated content, including navigation bars and header contents
* apply methods to skip blocks of repeated content using the following approaches:
  * a link at the top of each page that goes directly to the main content area
  * a link at the beginning of a block of repeated content to go to the end of the block
  * tables of contents at the top of the page that go to each area of the content
  * expandable and collapsible contents to make it easier for users to skip over them
* evaluate the amount of page navigational components in use
* select components that minimize distractions and unnecessary noise

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of methods to bypass blocks of repeated content, such as a link at the top of the page and the use of expandable and collapsible components. Explain that navigating through sets of repeated blocks of content using only the tab key is time consuming. For examples on how to provide a method to bypass blocks of repeated content, see the following techniques:
  * [G1: Adding a link at the top of each page that goes directly to the main content area](https://www.w3.org/WAI/WCAG21/Techniques/general/G1.html),
  * [G123: Adding a link at the beginning of a block of repeated content to go to the end of the block](https://www.w3.org/WAI/WCAG21/Techniques/general/G123.html), and
  * [G124: Adding links at the top of the page to each area of the content](https://www.w3.org/WAI/WCAG21/Techniques/general/G124.html).
* Show tables of contents for electronic books or documents. Explain that they provide an overview of the whole document and allow navigation to specific parts of the content. For references on how to provide a table of contents, see technique [G64: Providing a Table of Contents](https://www.w3.org/WAI/WCAG21/Techniques/general/G64.html).
* Invite students to research how the overuse of page navigational components can cause distractions and unnecessary noise for some users. For example, too many methods to bypass blocks of repeated content can contribute to a more cluttered keyboard user experience instead of making navigation easier.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Have students identify and describe the blocks of repeated content in a website and collaborate with developers to provide a way for users to bypass such blocks. Assess how students identify and describe blocks of repeated content and how they collaborate with developers to provide a method to bypass such blocks.
* Practical &mdash; Give students a document and ask them to provide the table of contents. Assess how students provide the table of contents for documents.
* Practical &mdash; Give students an interface with too many page navigational components. Ask students to identify the ones that are likely to cause distractions and unnecessary noise. Assess how students select page navigational components that minimize distractions and unnecessary noise.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students to outline the different types of navigational methods that exist and to provide examples for each. Assess how students understand and communicate the different types of navigational methods for websites, documents, and applications.
* Practical &mdash; Give students an interface with excessive use of navigational components and ask them to determine which are necessary and which should be removed. Assess how students select navigational components that minimize distractions and unnecessary noise.
* Portfolio &mdash; Have students design the navigation menu and other navigational components for a website. Assess how students understand accessibility features of navigation across websites and applications.

## Teaching Resources

Suggested resources to support your teaching:

* [Designing for Web Accessibility](/tips/designing/) &mdash; Tips for user interface and visual design.
* [Menus (WAI Web Accessibility Tutorials)](/tutorials/menus/) &mdash; Shows how to design navigational mechanisms that are accessible to people with disabilities.
* [[How People with Disabilities Use the Web]](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Keyboard Compatibility (Web Accessibility Perspectives)](/perspective-videos/keyboard/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Colors with Good Contrast (Web Accessibility Perspective)](/perspective-videos/contrast/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Text to Speech (Web Accessibility Perspectives)](/perspective-videos/speech/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Large Links, Buttons, and Controls (Web Accessibility Perspectives)](/perspective-videos/controls/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.

