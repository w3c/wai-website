---
title: "6: Custom Widgets in Developer Modules | Curricula"
title_html: "Module 6: Custom Widgets&nbsp;"
nav_title: "Custom Widgets"
permalink: /curricula/developer-modules/custom-widgets/
ref: /curricula/developer-modules/custom-widgets/
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
  previous: /curricula/developer-modules/forms/
  next: /curricula/developer-modules/rich-applications/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on properties, states, keyboard and focus interactions, and live regions to interact with custom widgets
* explain coding techniques to create accessible custom widgets, including buttons, carousels, sliders, tabs, treeviews, and others defined in the WAI-ARIA Authoring Practices, section [Design patterns and widgets](https://www.w3.org/TR/wai-aria-practices/#aria_ex)

## Learning Outcomes for Module

Students should be able to:

* explain strategies that people with disabilities use to identify, operate, and interact with widgets
* explain the accessibility benefits of using native HTML elements
* write code for custom widgets using appropriate roles, accessible names, and descriptions when necessary
* write code for states and properties of custom widgets that reflects their current state in an accessible way
* identify and write code for the necessary keyboard interactions, focus management, and meaningful sequence
* describe related requirements for content authors and designers to ensure widgets are understandable

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* Prior [Developer Modules](/curricula/developer-modules/)
* Knowledge of [HTML5 living standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.4.13 Content on Hover or Focus](https://www.w3.org/WAI/WCAG21/quickref/#content-on-hover-or-focus)
  * [WCAG 2 Success Criterion 2.2.2 Pause, Stop, Hide](https://www.w3.org/WAI/WCAG21/quickref/#pause-stop-hide)
  * [WCAG 2 Success Criterion 2.5.1 Pointer Gestures](https://www.w3.org/WAI/WCAG21/quickref/#pointer-gestures)
  * [WCAG 2 Success Criterion 3.2.1 On Focus](https://www.w3.org/WAI/WCAG21/quickref/#on-focus)
  * [WCAG 2 Success Criterion 4.1.1 Parsing](https://www.w3.org/WAI/WCAG21/quickref/#parsing)
  * [WCAG 2 Success Criterion 4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/quickref/#name-role-value)
  * [HTML5 Living Standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/)
  * [WAI-ARIA specification](https://www.w3.org/TR/wai-aria/)
  * [WAI-ARIA Authoring Practices 1.1](https://www.w3.org/TR/wai-aria-practices/)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
  * Prior [Developer Modules](/curricula/developer-modules/)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Role Definitions

{% include excol.html type="middle" %}

Build on previous modules, in particular [Developer Module 5: Forms](/curricula/developer-modules/forms/) and [Developer Module 1: Page Structure](/curricula/developer-modules/page-structure/) to explain the importance of proper role definitions for widgets. Demonstrate how native HTML interactive elements, such as controls and links, provide such semantics by default. Demonstrate and explain the use of WAI-ARIA attributes to define additional roles when HTML interactive elements are not sufficient.

#### Learning Outcomes for Topic

Students should be able to:

* explain how assistive technologies, such as text-to-speech and voice interaction, process roles to allow people with disabilities to identify and interact with widgets, and how missing role definitions make custom widgets unusable
* identify the appropriate roles for widgets, including buttons, carousels, sliders, tabs, treeviews, and others defined in the WAI-ARIA Authoring Practices, section [Design patterns and widgets](https://www.w3.org/TR/wai-aria-practices/#aria_ex)
* identify when HTML controls, such as `button`, `input`, and `option` as well as HTML links, can be used as the basis for custom widgets, such as buttons that are styled as switches, text input fields that are styled as sliders, and such
* explain the accessibility benefits of using native HTML interactive elements, such as controls and links, as the basis for creating custom widgets rather than using non-interactive elements, such as `div`, `span`, and `section`, as the basis
* write code for custom widgets using native HTML interactive elements, such as controls and links, with the necessary styling
* write code for custom widgets using additional WAI-ARIA attributes when native HTML interactive elements are not sufficient
* describe related requirements for content authors and designers to ensure that custom widgets are easy to understand

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of standard and custom widgets such as buttons, checkboxes, and lists. Emphasize that widgets created with standard HTML elements that convey semantic information inherit roles by default. However, custom widgets need to have these roles expressed explicitly, especially when using HTML elements with not enough semantic information.
* Compare use of standard and custom widgets with assistive technologies. Explain that accessibility support for WAI-ARIA properties may vary, so checking its current accessibility support is recommended. Mention that WAI-ARIA roles override the implicit roles of native HTML elements where they are used. For an explanation of how WAI-ARIA can provide both powerful and dangerous experiences see the WAI-ARIA Authoring Practices [Read me first](https://www.w3.org/TR/wai-aria-practices-1.1/#no_aria_better_bad_aria).
* Explain that accessibility properties allow people using assistive technologies to get semantic information about a widget. Mention that widgets requiring extended keyboard interaction put assistive technologies into application mode, where all keyboard and focus interactions are controlled by the author of the widget. Mention that some assistive technologies provide custom hints based on these properties so that people can interact with those widgets more efficiently.
* Show examples of WAI-ARIA roles applied to different types of custom widgets where native HTML elements do not convey enough semantic information. Explain that these roles  help assistive technologies determine its type. For a list of roles, see the WAI-ARIA specification [roles](https://www.w3.org/TR/wai-aria/#roles).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students a set of HTML elements and ask students about the semantics they convey. Assess students' knowledge of HTML elements and their associated semantic properties.
* Practical &mdash; Give students different custom widgets that do not contain accessibility properties and ask students to code them using standard HTML elements to the extent possible. Assess students' understanding of when to use standard and custom widgets.
* Practical &mdash; Give students custom widgets that do not convey roles by default and ask students to assign their roles. Assess how students code roles for custom widgets.
* Short Answer Questions &mdash; Ask students about the different roles that exist in the WAI-ARIA specification. Assess students' knowledge of the different roles in the WAI-ARIA specification.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Accessible Names and Descriptions

{% include excol.html type="middle" %}

Refer back to [Developer Module 5: Forms](/curricula/developer-modules/forms/) to review the importance of labels for controls. Demonstrate how custom widgets also require similar labeling techniques, and explain how to provide accessible names for widgets. Demonstrate how some custom widgets require additional descriptions, and explain how to provide such descriptions for widgets.

#### Learning Outcomes for Topic

Students should be able to:

* explain how assistive technologies, such as text-to-speech and voice interaction, use accessible names and descriptions to allow people with disabilities to identify, understand, and interact with custom widgets
* write code to convey accessible names for custom widgets by using HTML elements and attributes such as `label`, `title`, and WAI-ARIA attributes such as `aria-label` and `aria-labelledby`
* write code to convey descriptions for custom widgets by adjusting label texts and by using the WAI-ARIA attribute `aria-describedby` when necessary
* describe how accessible names are calculated by different browsers and assistive technologies, and how this impacts the appropriate coding in different situations
* describe related requirements for content authors and designers to provide appropriate accessible names and descriptions for custom widgets

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Explain that accessible names are short strings that provide information about the purpose and intent of widgets. Mention that descriptions are strings that provide additional information, such as instructions and required input formats. For explanations on what accessible names and descriptions mean in the context of Web accessibility, see the WAI-ARIA Authoring Practices, [What are accessible names and descriptions](https://www.w3.org/TR/wai-aria-practices-1.1/#names_and_descriptions_definition).
* Demonstrate different ways to code accessible names and descriptions, such as naming with child content, using strings in HTML `label` elements and the WAI-ARIA attributes `aria-label`, `aria-labelledby`, and `aria-describedby`. Also explain the possible use of other HTML structures, such as legends, captions, and titles. For an explanation about how to code accessible names and descriptions, see the WAI-ARIA Authoring Practices, [Providing accessible names and descriptions](https://www.w3.org/TR/wai-aria-practices-1.1/#names_and_descriptions). For examples of good practices when providing accessible names and descriptions, see the WAI-ARIA Authoring Practices [Accessible names](https://www.w3.org/TR/wai-aria-practices-1.1/#accessible_names) and [Accessible descriptions](https://www.w3.org/TR/wai-aria-practices-1.1/#accessible_descriptions).
* Mention that browsers use different algorithms to calculate accessible names and descriptions due to the multiple combinations that exist based on the coding patterns mentioned above. Show several browsers and examples of how they may render different accessible names from the same coding pattern. For a set of rules that help avoid mistakes when providing accessible names and descriptions, see the WAI-ARIA Authoring Practices [How are name and description strings derived](https://www.w3.org/TR/wai-aria-practices-1.1/#names_and_descriptions_derivation).
* Show how different assistive technologies present the contents of accessible names and descriptions. Explain that some present both types of contents consecutively, but others leave a pause between the accessible name and the accessible description. Mention that sometimes accessible descriptions require additional user input to be revealed by assistive technologies. 

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short Answer Questions &mdash; Ask students about the different ways in which accessible names and descriptions can be provided and the precedence of each. Assess students' knowledge of the different coding mechanisms to provide accessible names and descriptions.
* Short Answer Questions &mdash; Ask students about the different ways in which assistive technologies can present the contents of accessible names and descriptions. Assess students' knowledge of the different ways in which assistive technologies present the contents of accessible names and descriptions.
* Practical &mdash; Give students custom widgets that do not convey their accessible names and descriptions and ask students to provide these properties. Assess how students code accessible names and descriptions for custom widgets.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: States and Properties

{% include excol.html type="middle" %}

Demonstrate the use of states, properties, and values defined in the WAI-ARIA specification, [Supported States and Properties](https://www.w3.org/TR/wai-aria-1.1/#states_and_properties) to create accessible widgets. Explain how states and properties, including their values, communicate the state of widgets.

#### Learning Outcomes for Topic

Students should be able to:

* explain how assistive technologies, such as text-to-speech and voice interaction, use states and properties to allow people with disabilities to identify, understand, and interact with custom widgets
* identify and write code for the appropriate states and properties to make widgets usable to people with disabilities; this includes:
  * [Global States and Properties](https://www.w3.org/TR/wai-aria-1.1/#global_states)
  * [Widget Attributes](https://www.w3.org/TR/wai-aria-1.1/#attrs_widgets)
  * [Live Region Attributes](https://www.w3.org/TR/wai-aria-1.1/#attrs_liveregions)
  * [Drag-and-Drop Attributes](https://www.w3.org/TR/wai-aria-1.1/#attrs_dragdrop)
  * [Relationship Attributes](https://www.w3.org/TR/wai-aria-1.1/#attrs_relationships)
* identify and write code for appropriate values for states and properties, and ensure these values are updated to reflect the current state of widgets as users interact with them and as they are otherwise updated
* describe related requirements for content authors and designers to provide distinguishable styles for different states of custom widgets

#### Teaching Ideas for Topic
 
Optional ideas to teach the learning outcomes:

* Provide examples of widgets using different WAI-ARIA states and properties. Explain that some attributes convey information about the current state of widgets, and others support interaction such as drag-and-drop and communicating changes to the content (live regions). 
* Demonstrate the use of WAI-ARIA global states and properties. Explain that they may be applied to any host language element as they are meant to extend the semantics provided by native elements. For examples of global attributes, see the WAI-ARIA specification [Global states and properties](https://www.w3.org/TR/wai-aria-1.1/#global_states).
* Demonstrate the use of states and properties for widget roles. Explain that they serve to communicate information about states, user input, and user actions. For reference on widget attributes, see the WAI-ARIA specification [Widget attributes](https://www.w3.org/TR/wai-aria-1.1/#attrs_widgets).
* Demonstrate the use of properties and values to communicate drag and drop capabilities of a widget. For reference on drag-and-drop attributes, see the WAI-ARIA specification [Drag-and-drop attributes](https://www.w3.org/TR/wai-aria-1.1/#attrs_dragdrop).
* Show examples of dynamic regions, such as carousels, chat logs, and feeds. Explain that people using screen readers cannot perceive these types of updates by default as they can only be focused at one thing at a time. Examples of how to communicate the changes using `aria-live` are provided in the WAI-ARIA Authoring Practices, [Auto-rotating image carousel](https://www.w3.org/TR/wai-aria-practices/examples/carousel/carousel-1.html).
* Show examples of widgets where the relationships or associations between its components cannot be established via document object model (DOM) order. Explain the use of WAI-ARIA properties to convey such relationships or associations. For examples of WAI-ARIA attributes that express relationships or associations between widget components, see the WAI-ARIA specification [Relationship attributes](https://www.w3.org/TR/wai-aria-1.1/#attrs_relationships).
* Demonstrate the use of styling conventions to distinguish widget states from each other. Mention that styling different widget states is a shared responsibility among different team members: designers and developers.  For tips on when (or when not) to make states distinguishable, see the WAI-ARIA Authoring Practices [Focus vs selection and the perception of visual focus](https://www.w3.org/TR/wai-aria-practices/#kbd_focus_vs_selection).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short Answer Questions &mdash; Ask students about the differences between WAI-ARIA states, properties, and values. Assess students' knowledge of the WAI-ARIA attributes to convey states, properties, and values.
* Practical &mdash; Give students a widget that reveals content based on user action and ask students to code it using `aria-haspopup` when necessary. Assess students' knowledge of the WAI-ARIA attribute `aria-haspopup`.
* Practical &mdash; Give students custom widgets that have different states based on user action and ask students to code them accessibly. Assess how students code different states and its corresponding values.
* Practical &mdash; Give students a widget that allows for drag-and-drop functionality and ask students to code it using WAI-ARIA attributes that convey such functionality. Assess students' knowledge of WAI-ARIA drag-and-drop attributes.
* Practical &mdash; Give students a chat application and ask students to code it appropriately so that it can be understood by people using text-to-speech. Assess students' knowledge of the types of live regions as well as its roles and properties.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Keyboard and Focus Management

{% include excol.html type="middle" %}

Demonstrate how people with different types of disabilities interact with widgets, and explain the relevance of appropriate keyboard commands, focus indicator, and meaningful sequence of items inside [composite widgets](https://www.w3.org/TR/wai-aria-1.1/#composite), such as carousels, grids, listboxes, tabs, and treeviews. Explain relevant coding techniques and mechanisms to ensure appropriate focus and meaningful sequence when the state and contents of widgets are changed.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with different types of disabilities interact with widgets, including keyboard only and voice interaction users, and how keyboard commands, including tab, arrow, and shortcut keys, are used to operate widgets
* explain how people with different types of disabilities rely on meaningful sequence of items inside composite widgets
* explain how people with different types of disabilities rely on focus indicators that are provided in the code and visually
* write code that allows custom widgets to be operated using the keyboard only and other input devices, such as voice interaction
* identify and write code for appropriate keyboard commands, including tab, arrow, and shortcut keys, to operate custom widgets
* identify and write code for the appropriate order of items inside composite widgets, such as carousels, grids, listboxes, tabs, and treeviews, so that the different items can be navigated through keyboard in meaningful sequences
* identify situations in which it is appropriate to use `tabindex`, including on non-focusable HTML elements, to change the tab order, and explain the potential accessibility challenges associated with manipulating the tab order
* identify situations in which it is appropriate to use shortcut keys to facilitate keyboard and voice interaction, and explain the potential accessibility challenges associated with using shortcut keys, such as introducing potential conflicts with shortcut keys of operating systems, browsers, and assistive technologies
* identify when changes to widgets, such as adding, removing, and updating items inside composite widgets, impact the current focus and sequence of items, and write code to restore appropriate focus and meaningful sequence when such changes occur
* describe related requirements for content authors and designers to provide distinguishable styles for focus indicators

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Invite students to use the keyboard to navigate accessible widgets such as carousels, tabs, and treeviews. Explain that tabbing moves between widgets and using the arrow keys moves inside components. Emphasize that there should be only one tab stop per widget on a page, and that additional keyboard interactions are made available only when the widget gains focus. An explanation of these keyboard interactions is provided in the WAI-ARIA Authoring Practices, [Fundamental keyboard navigation conventions](https://www.w3.org/TR/wai-aria-practices/#kbd_generalnav).
* Show examples of well-formed DOM structures for composite widgets. Explain that a sequential DOM order allows for a predictable keyboard navigation. 
* Demonstrate the use of event listeners that allow for several ways of interaction. For example, keyboard, mouse, and tactile gestures. Emphasize that, in addition to making an element focusable, it is also necessary to take care of all additional functionality, such as which keys need to be pressed to operate it. For a pointer on what functionality needs to be added for a custom widget to allow keyboard functionality, see the WAI-ARIA Authoring Practices [A role is a promise](https://www.w3.org/TR/wai-aria-practices/#a_role_is_a_promise).
* Demonstrate the use of the `tabindex` attribute to add focus to an element that is not focusable by default. Explain the use of the value `-1` to mark up an element so that it can be focusable when it becomes visible. Explain the use of the value `0` to make an element focusable and put it in the relative order of the navigation according to the DOM structure. An example of how to use the `tabindex` attribute is provided in the WAI-ARIA Authoring Practices, [Managing focus within components using a roving tabindex](https://www.w3.org/TR/wai-aria-practices/#kbd_roving_tabindex).
* Demonstrate the use of focus indicators for users to keep track of where they are as they are interacting with the widget. Mention that providing the specific styles is a shared responsibility among different team members: designers, and developers. Tips on how to make navigation predictable within widgets are provided in the WAI-ARIA Authoring Practices, section [Discernible and predictable keyboard focus](https://www.w3.org/TR/wai-aria-practices/#kbd_focus_discernable_predictable).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short Answer Questions &mdash; Ask students to provide all the meaningful values for accessibility that the `tabindex` attribute can have and to explain what each of those values means. Assess students' knowledge of the attribute `tabindex` and its values.
* Practical &mdash; Give students a custom button and ask students to code it using WAI-ARIA roles, `tabindex` attribute, and event listeners for keyboard, mouse, and tactile devices. Assess students understanding of the different ways in which users can interact with custom widgets.
* Practical &mdash; Give students a custom list and ask students to code a tab stop for its container layer. Assess how students understand sequential focus order and navigation.
* Practical &mdash; Give students a treeview and ask students to code focus management and internal keyboard interactions. Assess how students understand internal keyboard interaction conventions.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to support assessment:

* Practical &mdash; Ask students to select a date from an accessible calendar widget using only the keyboard. Assess students' knowledge of keyboard interactions for custom widgets.
* Portfolio &mdash; Students add custom widgets to the website they are building. Assess students' knowledge of the WAI-ARIA roles and properties to expand semantics of host languages as well as additional states and keyboard interactions.

## Teaching Resources

Suggested resources to support your teaching:

* [WAI-ARIA Authoring Practices 1.1](https://www.w3.org/TR/wai-aria-practices/) &mdash; Provides readers with an understanding of how to use WAI-ARIA 1.1 to create accessible rich internet applications.
* [How People with Disabilities Use the Web](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Notifications and Feedback (Web Accessibility Perspectives)](/perspective-videos/notifications/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Keyboard Compatibility (Web Accessibility Perspectives)](/perspective-videos/keyboard/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Text to Speech (Web Accessibility Perspectives)](/perspective-videos/speech/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Clear Layout and Design (Web Accessibility Perspectives)](/perspective-videos/layout/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
* [WAI-ARIA](/standards-guidelines/aria/) &mdash; Describes the roles, states, and properties that define accessible user interface elements and can be used to improve the accessibility and interoperability of web content and applications.
* [HTML5 living standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/) &mdash; The core markup language for the web.
