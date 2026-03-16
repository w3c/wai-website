---
title: "2: Menus in Developer Modules | Curricula"
title_html: "Module 2: Menus&nbsp;"
nav_title: "Menus"
permalink: /curricula/developer-modules/menus/
ref: /curricula/developer-modules/menus/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
custom_changelog: /curricula/changelog/
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
  previous: /curricula/developer-modules/page-structure/
  next: /curricula/developer-modules/images/
---
 
## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on structures, labels, and styling to interact with menus
* explain coding techniques to provide accessible structures, labels, and functionality of menus

## Learning Outcomes for Module

Students should be able to:

* explain strategies that people with disabilities use to interact with menus
* write markup and labels to identify menus provided on a page
* write markup for menu structures as lists, sub-lists, and list items so that they have semantic meaning
* write styles for menus to appear and behave as required, for example on hover and focus
* write code for menus to resize depending on different viewport sizes
* write code to communicate the state of fly-out menus to people using different assistive technologies and adaptive strategies
* identify and write code for appropriate keyboard operation of interactive menus
* write code for additional markup and functionality of application menus
* describe related requirements for designers to ensure accessible behavior of menus

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* [Developer Module 1: Page Structure](/curricula/developer-modules/page-structure/)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG 2 Success Criterion 2.1.1 Keyboard](https://www.w3.org/WAI/WCAG21/quickref/#keyboard)
  * [WCAG 2 Success Criterion 2.1.2 No Keyboard Trap](https://www.w3.org/WAI/WCAG21/quickref/#no-keyboard-trap)
  * [WCAG 2 Success Criterion 2.4.1 Bypass Blocks](https://www.w3.org/WAI/WCAG21/quickref/#bypass-blocks)
  * [WCAG 2 Success Criterion 2.4.4 Link purpose (In Context)](https://www.w3.org/WAI/WCAG21/quickref/#link-purpose-in-context)
  * [WCAG 2 Success Criterion 2.4.8 Location](https://www.w3.org/WAI/WCAG21/quickref/#location)
  * [WCAG 2 Success Criterion 3.2.3 Consistent Navigation](https://www.w3.org/WAI/WCAG21/quickref/#consistent-navigation)
  * [HTML5 sections {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/sections.html#sections)
  * [HTML5 grouping content {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/grouping-content.html#grouping-content)
  * [WAI-ARIA landmark roles](https://www.w3.org/TR/wai-aria/#landmark_roles)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
  * [Developer Module 1: Page Structure](/curricula/developer-modules/page-structure/)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Menu Structure

{% include excol.html type="middle" %}

Build on [Developer Module 1: Page Structure](/curricula/developer-modules/page-structure/) to explain the use of HTML and WAI-ARIA to convey structure. Relate this to the structure of menus, in particular using lists and list items.

#### Learning Outcomes for Topic

Students should be able to:

* explain how assistive technologies process structural HTML elements, such as lists, sub-lists, and list items, and communicate to people with disabilities these structures and their relationship to one another
* describe different types of menus such as vertical, horizontal, breadcrumb trails, and application menus
* identify menus using the HTML element `nav` and headings when necessary
* write markup of menus as lists, sub-lists, and list items, for example using the HTML elements `ul`, `ol`, and `li`
* write code that allows operation of menu functionality using keyboard only, voice interaction, and other input devices
* write code for menus to display where expected according to their function and purpose

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of the HTML5 element `nav` to mark up a region as navigational. An example of how to use this element is provided in the WAI tutorials on [Identify menus](/tutorials/menus/structure/#identify-menus).
* Refer back to the HTML elements `ul`, `ol`, and `li` taught in the previous module. Explain that they serve to structure and organize lists and list items. Examples of how to use these elements within a menu structure are provided in the WAI tutorials on [Menu representation](/tutorials/menus/structure/#menu-representation).
* Provide examples of labels for menu items. Mention that these labels can be either text or graphics with their corresponding alternative texts within the HTML element `a`. Emphasize that people with cognitive disabilities and people using screen readers rely on labels to identify the purpose of each of the menu items. For examples of how to provide descriptive link texts, see technique [G91: Providing link text that describes the purpose of a link](https://www.w3.org/WAI/WCAG21/Techniques/general/G91.html).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Students identify the regions of the page that contain the menus and mark them up using navigation regions and headings as appropriate. Assess students' use of the HTML element `nav` and headings as appropriate to mark up menus.
* Practical &mdash; Students code the internal structure of each of the menus in a web page. Assess how students use list and list items to programmatically convey menu structures.
* Practical &mdash; Give students a menu and ask students to label its menu items. Assess how students describe the topic and purpose of the menu item using text within the HTML element `a`.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Menu Styling

{% include excol.html type="middle" %}

Demonstrate the use of HTML, WAI-ARIA, and CSS code to achieve the desired style for menus.

#### Learning Outcomes for Topic

Students should be able to:

* explain how appropriate CSS styles make menus easier to identify and understand, and more usable for people with disabilities using adaptive strategies such as text resize and customization, screen magnification, and touch screens
* use styles to make menus display as needed, for example vertical, horizontal, and as breadcrumb trails
* write code to convey the state of the current menu item using the WAI-ARIA property `aria-current="page"`
* write code to convey other states of menu items using the appropriate semantics as well as color, shape, and styles
* describe related requirements for authors and designers to provide appropriate menu texts and styles

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of different types of menus, such as navigational, application, and breadcrumb trails. Explain that they need to be marked up and styled so that they are placed in the expected position within the page. Mention that menu location is a shared responsibility among different team members: content authors, designers, and developers. Examples of the expected positions of menus within the page are provided in the WAI tutorials on [Location](/tutorials/menus/styling/#location).
* Introduce the different states that a menu item can have, such as hover, focus, current, active, and visited. Explain how to code these states so that they are perceived by all users. Examples of how to code these states are provided in the WAI tutorials, [Menu Items](/tutorials/menus/styling/#menu-items).
* Show examples of different layouts for menus. Explain that menus should adapt to different text sizes users may choose. Mention that menus should have enough space so that they can be operated by all users. Considerations about readability and size of menu items are provided in the WAI tutorials, [General considerations](/tutorials/menus/styling/#general-considerations).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students different types of menus and ask them to code them so that they are placed where expected. Assess students' knowledge of the menu location within web pages.
* Practical &mdash; Ask students to code the different states of menu items and to make them distinguishable from each other. Assess students' knowledge of WAI-ARIA and CSS techniques to convey the states of menu items.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Fly-out Menus

{% include excol.html type="middle" %}

Explain the use of HTML elements and WAI-ARIA attributes to indicate the presence of submenu items, for example, `aria-haspopup`. Explain how to convey visible and hidden states of submenu items using WAI-ARIA to make them usable by all users.

#### Learning Outcomes for Topic

Students should be able to:

* write markup to convey the hierarchical relationship between a menu item and its submenus using nested lists and list items
* write markup for items that contain submenu items using the WAI-ARIA attribute `aria-haspopup`
* write code for fly-out menus that support different input devices, including keyboard only and voice interaction
* write code to convey visible and hidden states of menu items using the WAI-ARIA attribute `aria-expanded`, and updating related labels accordingly
* describe related requirements for designers to ensure that fly-out menus can be used effectively in different situations, such as using screen magnification and voice interaction

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of menus that contain submenu items. Explain that the layer with the submenu items needs to be marked up as a nested list, and that each of the submenu items needs to be marked up as a list item. An example of the structure of menu and submenu items is provided in the WAI tutorials on [Indicate submenus](/tutorials/menus/flyout/#indicate-submenus).
* Explain the use of the WAI-ARIA attribute `aria-haspopup` to mark up the presence of submenu items. Indicate that this attribute should be present in the original HTML markup. An example of how to use the WAI-ARIA attribute `aria-haspopup` is provided in the WAI tutorials on [Indicate submenus](/tutorials/menus/flyout/#indicate-submenus).
* Show examples of different ways to interact with fly-out menus, such as using the mouse, keyboard, and voice interaction. Examples of how to make functionality of fly-out menus available to all users are provided in the WAI tutorials on [Fly-Out functionality](/tutorials/menus/flyout/#fly-out-functionality). 
* Explain what the WAI-ARIA attribute `aria-expanded` conveys: if the submenu items are visible or hidden. Explain that the attribute needs to be present in the original HTML markup. Examples of how to use the `aria-expanded` attribute are provided in the WAI tutorials on [Indicate submenus](/tutorials/menus/flyout/#indicate-submenus).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students a visual structure of menu and submenu items and ask students to use the appropriate markup to convey that structure. Assess how students use nested lists and list items to programmatically convey the visual structure of menu and submenu items.
* Practical &mdash; Give students a list of menu and submenu items and ask students to use the `aria-haspopup` attribute where necessary. Assess how students mark up the presence of submenu items.
* Practical &mdash; Give students a fly-out menu and ask students to make it operable with mouse and keyboard. Assess how students implement functionality of fly-out menus that is usable with mouse and keyboard.
* Practical &mdash; Give students a list of menu and submenu items that dynamically show and hide based on user input and ask students to code these dynamic changes. Assess how students use the WAI-ARIA attribute `aria-expanded` in the markup as well as icons and other visual indication of the state of the submenu items.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Application Menus

{% include excol.html type="middle" %}

Show examples of specific scenarios where application menus can be used. Application menus are commonly used in rich applications, which are further discussed in [Developer Module 7 Rich Applications](/curricula/developer-modules/rich-applications). Explain the uses of additional WAI-ARIA roles and properties to mark up application menus. Refer to coding techniques to make application menus operable using various input devices, including keyboard only.

#### Learning Outcomes for Topic

Students should be able to:

* identify situations in which it is appropriate to use application menus, such as for web applications, and explain the potential accessibility challenges of using application menus, including defining the appropriate keyboard commands for operating such menus
* write markup for application menus using the WAI-ARIA property `role="menubar"`
* write markup for individual menu items using the WAI-ARIA property `role="menuitem"`
* write markup for application menu items containing submenus using the WAI-ARIA property `role="menu"`
* write code for application menus using the HTML element `tabindex` so that they can receive keyboard focus
* write code that supports functionality of application menus using keyboard and other input devices

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of different types of menus in web applications. Emphasize that navigational menus require specific (desktop-like) keyboard interactions that are different from the tab key used in websites. Explain that additional markup is necessary for assistive technologies to render these menus adequately. Examples of how to code application menus are provided in the WAI tutorials on [Additional markup](/tutorials/menus/application-menus/#additional-markup).
* Show examples of how an application menu is operated using the keyboard. Explain that additional functionality needs to be added via scripts so that keyboard patterns resemble those of a desktop menu. Examples of how to code application menus so that they can be operable by keyboard are provided in the WAI tutorials on [Functionality](/tutorials/menus/application-menus/#functionality) and [Keyboard behavior](/tutorials/menus/application-menus/#keyboard-behavior).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students an application menu and ask students to mark it up using the required WAI-ARIA properties. Assess students' knowledge of accessible markup for application menus.
* Practical &mdash; Give students an application menu and ask students to provide keyboard functionality. Assess students' knowledge of common keyboard patterns for accessible application menus.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to support assessment:

* Portfolio &mdash; Students create a set of web pages with a navigational menu that allows users to navigate between the different pages. Assess how students identify, organize, and label navigational menus.

## Teaching Resources

Suggested resources to support your teaching:

* [Menus (WAI Web Accessibility Tutorials)](/tutorials/menus/) &mdash; Shows how to develop navigational mechanisms that are accessible to people with disabilities.
* [How People with Disabilities Use the Web](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Keyboard Compatibility (Web Accessibility Perspectives)](/perspective-videos/keyboard/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
* [WAI-ARIA](/standards-guidelines/aria/) &mdash; Describes the roles, states, and properties that define accessible user interface elements and can be used to improve the accessibility and interoperability of web content and applications.
* [HTML living standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/) &mdash; The core markup language for the web.
