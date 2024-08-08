---
title: "5: Forms in Developer Modules | Curricula"
title_html: "Module 5: Forms&nbsp;"
nav_title: "Forms"
permalink: /curricula/developer-modules/forms/
ref: /curricula/developer-modules/forms/
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
  previous: /curricula/developer-modules/tables/
  next: /curricula/developer-modules/custom-widgets/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on form structures, labels, instructions, and notifications to understand and interact with forms
* explain coding techniques to mark up form controls, groups of form controls, and labels for form controls, as well as to provide instructions and notifications in accessible forms

## Learning Outcomes for Module

Students should be able to:

* explain strategies that people with disabilities use to understand, navigate, and interact with forms
* write code that supports clear association between controls and labels in form controls
* write code for groups of form controls that share a common purpose and provide labels for such groups
* write code for instructions, notifications, and other feedback so that they are perceivable by all users
* describe shared requirements for content authors and designers to ensure that form controls, labels, instructions, notifications, feedback, and other behavior is understandable and operable by all users

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* [Developer Modules](/curricula/developer-modules)
  * [Module 1: Page Structure](/curricula/developer-modules/page-structure/)
* Basic knowledge of [HTML forms {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/forms.html#forms)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG 2 Success Criterion 1.3.5 Identify Input Purpose](https://www.w3.org/WAI/WCAG21/quickref/#identify-input-purpose)
  * [WCAG 2 Success Criterion 2.2.1 Timing Adjustable](https://www.w3.org/WAI/WCAG21/quickref/#timing-adjustable)
  * [WCAG 2 Success Criterion 2.4.6 Headings and Labels](https://www.w3.org/WAI/WCAG21/quickref/#headings-and-labels)
  * [WCAG 2 Success Criterion 2.5.3 Label in Name](https://www.w3.org/WAI/WCAG21/quickref/#label-in-name)
  * [WCAG 2 Success Criterion 3.2.2 On Input](https://www.w3.org/WAI/WCAG21/quickref/#on-input)
  * [WCAG 2 Success Criterion 3.3.1 Error Identification](https://www.w3.org/WAI/WCAG21/quickref/#error-identification)
  * [WCAG 2 Success Criterion 3.3.2 Labels or Instructions](https://www.w3.org/WAI/WCAG21/quickref/#labels-or-instructions)
  * [WCAG 2 Success Criterion 3.3.3 Error Suggestion](https://www.w3.org/WAI/WCAG21/quickref/#error-suggestion)
  * [WCAG 2 Success Criterion 3.3.4 Error Prevention](https://www.w3.org/WAI/WCAG21/quickref/#error-prevention-legal-financial-data)
  * [WCAG 2 Success Criterion 4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/quickref/#name-role-value)
  * [WCAG 2 Success Criterion 4.1.3 Status Messages](https://www.w3.org/WAI/WCAG21/quickref/#status-messages)
  * [HTML forms {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/forms.html#forms)
  * [HTML `form` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/forms.html#the-form-element)
  * [HTML `label` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/forms.html#the-label-element),
  * [HTML `input` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/input.html#the-input-element)
  * [HTML `Button` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/form-elements.html#the-button-element)
  * [HTML `fieldset` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/form-elements.html#the-fieldset-element)
  * [HTML `legend` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/form-elements.html#the-legend-element)
  * [HTML common input element attributes {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/input.html#common-input-element-attributes)
  * [HTML date, time, and input formats {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/forms.html#input-author-notes)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
  * [Developer Module 1: Page Structure](/curricula/developer-modules/page-structure/)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Controls and Labels

{% include excol.html type="middle" %}

Explain the use of HTML elements and, if necessary, WAI-ARIA attributes to provide form controls and labels for form controls. Demonstrate how these semantics benefit different users in different situations, such as people using screen readers, screen magnification, voice interaction, and other assistive technologies. Non-standard form controls are addressed in [Developer Module 6: Custom Widgets](/curricula/developer-modules/custom-widgets/).

#### Learning Outcomes for Topic

Students should be able to:

* explain how assistive technologies, such as text-to-speech and voice interaction, associate labels with form controls and allow these to be used in different ways
* explain how people with different disabilities benefit from form controls with clearly associated labels, for example to create larger activation areas for controls
* write markup for form controls using native HTML elements, and additional WAI-ARIA attributes when necessary
* identify the type of form control and use the corresponding HTML code to facilitate auto-complete
* write markup to convey labels for form controls using the HTML element `label` and attribute `for`
* identify situations in which it is necessary to use other techniques to provide labels for form controls, and mark up form controls using the following techniques as appropriate:
  * WAI-ARIA attributes `aria-label` and `aria-labelledby`
  * HTML element `title`
* write code for groups of form controls using the HTML element `fieldset` and label such groups of form controls using the HTML element `legend`

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Provide examples of explicit and implicit associations using the `label` element. Explain that an implicit association can be achieved by wrapping the `label` element and its content around the form control. Explain explicit associations by means of the `for` attribute and indicate that its value must be a unique identifier of the form control that the label refers to. Explain the use of other explicit associations using the HTML attribute `title`, the WAI-ARIA attributes `aria-label` and `aria-labelledby`. Explain that use of `placeholder` for labels should be avoided as its value disappears once the user has entered a value. Examples of how to label form controls are provided in the WAI tutorials on [Labeling controls](/tutorials/forms/labels/).
* Show examples of form controls that are related to each other, such as checkboxes and radio buttons to select possible answers for a given question. Mention that the `fieldset` element is used to group them all, and that the `legend` element provides the label they share. Examples of how to group form controls are provided in the WAI tutorials on [Grouping controls](/tutorials/forms/grouping/).
* Invite students to navigate form controls using the keyboard only. Demonstrate the use of the tab key to move through different form controls. Demonstrate the use of the arrow keys to select options from combo boxes and lists.
* Demonstrate the use of voice commands, keystrokes, and gestures provided by assistive technologies and adaptive strategies to navigate through form controls. Explore advanced functionality that some tools provide, such as  presenting all form controls in a list where users can select the form control they are interested in. Examples of how people with disabilities interact with the Web are provided in [How People with Disabilities Use the Web](/people-use-web/).
* Demonstrate how people with mobility impairments or with low vision can click the label element to activate a specific form control if both are associated with each other.

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short answer questions &mdash; Ask students to recite different ways to label form controls using HTML. Assess students' knowledge of the different HTML ways to label form controls.
* Practical &mdash; Give students a group of form controls and ask students to provide their labels. Assess how students make use of the HTML element `label` together with the HTML attribute `for`, the HTML attribute `title`, and the WAI-ARIA attributes `aria-label`, and `aria-labelledby`.
* Practical &mdash; Give students a set of radio buttons that allow to rate a piece of content based on stars, and a piece of text saying, "Rate this". Ask students to properly associate them with their overall label. Assess how students use the HTML elements `fieldset` and `legend`.
* Practical &mdash; Ask students to activate a set of form controls by clicking their labels. Assess how students understand the relevance of proper click targets for people with mobility impairments.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Instructions

{% include excol.html type="middle" %}

Explain how form instructions allow people to understand the purpose of form controls.

#### Learning Outcomes for Topic

Students should be able to:

* write code to convey overall instructions for forms, and specific instructions for individual form controls and groups of form controls, so that they are clearly presented to all users, including through assistive technologies in *forms mode*
* write code to convey required form controls using label text in addition to the HTML attribute `required` or the WAI-ARIA attribute `aria-required`
* describe shared requirements for content authors and designers to, whenever possible, provide:
  * clear and concise instructions for forms, form controls, and groups of form controls
  * overall instructions for forms before the forms, including each form in multi-step forms
  * specific instructions for individual form controls and groups of forms as part of the labels
  * information about the overall process and current step in the process, in multi-step forms
  * information about any time limits, and about stopping, adjusting, and extending time limits
  * information about ways that may be available to interrupt, save, and resume sessions

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of common instructions for form controls such as those related to allowed data formats, and general timing instructions. Explain that these instructions need to be provided before the form controls appear, so that they are clearly perceivable before initiating form completion. Examples of how to code general instructions for form controls are provided in the WAI tutorials, [Overall instructions](/tutorials/forms/instructions/#overall-instructions).
* Show examples of additional instructions for form controls provided using the HTML attribute `title` or `placeholder`, or the WAI-ARIA attributes `aria-label`, or `aria-labelledby`. Mention that `title` and `placeholder` may not be well supported by some assistive technologies. Explain that the value of the `placeholder` disappears when the user enters a value, so essential instructions need to be provided using the other described methods. Emphasize that contents provided using WAI-ARIA are available for assistive technologies only and are not visible on screen. For examples of additional methods to provide labels for form controls, see technique [H65: Using the title attribute to identify form controls when the label  element cannot be used](https://www.w3.org/WAI/WCAG21/Techniques/html/H65). Examples of how to provide in-line instructions for form controls are provided in the WAI tutorials, [In-line instructions](/tutorials/forms/instructions/#in-line-instructions).
* Show examples of required form controls using the HTML attribute `required` and corresponding text added in the label. Explain why it is necessary to provide this information in multiple ways so that it is available to all users, rather than to rely on color alone or on the HTML semantics alone.

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students overall instructions for a set of form controls such as the current and total number of steps of the form and ask students to code them appropriately. Assess students' knowledge of how to code overall instructions.
* Practical &mdash; Give students in-line instructions for form controls such as examples of how data should be entered and ask students to code them appropriately. Assess students' knowledge of the different techniques to code in-line instructions.
* Practical &mdash; Give students a set of form controls and ask students to code them so that they are required. Assess how students make use of the HTML attribute `required` and corresponding text in the label of the form control.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Notifications

{% include excol.html type="middle" %}

Explain the use of HTML and WAI-ARIA to provide notifications about errors, successes, and other feedback resulting from interaction by the user. This includes feedback at the end of the process, such as submitting a form, and within the process, such as from validating input as the user types.

#### Learning Outcomes for Topic

Students should be able to:

* describe shared requirements for content authors and designers to:
  * provide error and success messages when sessions and transactions are completed
  * provide clear feedback on the status of transition from one step of the process to another in multi-step forms
  * ensure that error and success messages that appear when forms are submitted are easy to perceive and understand by users
  * ensure that in-line error messages and other feedback that appears from user interaction with forms is clearly identifiable
  * provide warnings about any imminent time limits, and appropriate mechanisms to stop, adjust, or extend such time limits
  * allow users to check the entered data before finalizing transactions, or to undo transactions after submission
* write code that supports perception of error and success messages that appear when forms are submitted; this includes reflecting these messages in the page title, main heading of the page, and modal dialogs as appropriate
* write code that associates in-line feedback that appears from user interaction with the corresponding form controls; this includes using the control labels and the WAI-ARIA `aria-describedby` attribute
* write code to convey instant feedback, such as that resulting from validating input from the user as it is being provided, using WAI-ARIA `aria-live` regions, and identify the appropriate priority values `polite`, `assertive`, and `off` for feedback
* write code to convey alerts using WAI-ARIA `role="alert"` and identify situations in which it is appropriate to interrupt users

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Introduce the different ways in which errors can be announced after form submission. Explain how warning messages can be included in the title of pages and their main headings, so that users are aware of the errors. Examples of how to communicate error messages are provided in the WAI tutorials on [Overall feedback](/tutorials/forms/notifications/#overall-feedback).
* Demonstrate the use of mechanisms to provide in-line error messages for form controls, such as using the HTML element `label` or the WAI-ARIA attribute `aria-describedby`. Explain that programmatic associations help assistive technologies and adaptive strategies relate error messages to their specific field as users move around. Explain that WAI-ARIA live regions can be used to provide instant feedback as users are typing in a form control or as validation outputs appear so that people using screen readers can understand the information provided. Examples of how to code in-line error messages are provided in the WAI tutorials on [In-line feedback](/tutorials/forms/notifications/#inline).
* Demonstrate the use of some common HTML5 elements, such as `date`, `time`, `url`, `email`, and `pattern`. Explain that they allow users to enter data more reliably and help validation. Examples of how to validate common input are provided in the WAI tutorials on [Validating common input](/tutorials/forms/validation/#validating-common-input).
* Demonstrate the use of the WAI-ARIA attribute `aria-live` together with its values to indicate the priority with which updates are announced. For reference on the meaning of the different values of the WAI-ARIA attribute `aria-live`, see the WAI-ARIA specification, [`aria-live`](https://www.w3.org/TR/wai-aria/#aria-live).
* Explain the use of the WAI-ARIA attribute `aria-relevant` to communicate which changes of the region should be announced: additions, removals, or all. For reference on how to use `aria-relevant`, see the WAI-ARIA specification, [`aria-relevant`](https://www.w3.org/TR/wai-aria/#aria-relevant).
* Demonstrate the use of alert widgets such as a time warning and an error. Explain that these alerts may not be noticed while using assistive technologies, so additional markup is required. Examples of how to code these alerts are provided in the WAI-ARIA Authoring Practices [Alert](https://www.w3.org/TR/wai-aria-practices/examples/alert/alert.html).
* Show examples of mechanisms that allow to stop the time limit, such as a check box at the beginning of the form. For an example of how to provide these mechanisms, see techniques [G198: Providing a way for the user to turn the time limit off](https://www.w3.org/WAI/WCAG21/Techniques/general/G198.html) and [G133: Providing a checkbox on the first page of a multipart form that allows users to ask for longer session time limit or no session time limit](https://www.w3.org/WAI/WCAG21/Techniques/general/G133).
* Show examples of mechanisms that allow to adjust time limits when they are about to expire. For examples of how to write code to adjust time limits, see technique [SCR16: Providing a script that warns the user a time limit is about to expire](https://www.w3.org/WAI/WCAG21/Techniques/client-side-script/SCR16.html).
* Show examples of mechanisms that allow to extend time limits. Explain that they need to allow for extensions of up to 10 times the original time limit. For an example of a mechanism that allows to extend time limits, see technique [SCR1: Allowing the user to extend the default time limit](https://www.w3.org/WAI/WCAG21/Techniques/client-side-script/SCR1.html).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Give students a set of form control errors and ask students to provide a list of messages that explain such errors. Assess students' knowledge of how to group and communicate errors in a form control.
* Practical &mdash; Give students a set of form controls with errors marked up using color alone. Then ask students to mark up these error messages using text in the vicinity of each of the form controls. Assess students' knowledge of how to associate form errors with their corresponding form control.
* Practical &mdash; Give students a form submission containing errors. Then ask students to associate known corrections that may exist for the errors with each of the form controls. Assess students' understanding of how to associate known corrections with their corresponding form controls.
* Practical &mdash; Give students a form control that outputs notifications as the user is typing to indicate the strength of a password and ask students to code accessible notifications. Assess students' knowledge of live regions to convey notifications.
* Practical &mdash; Give students different types of alerts. Ask students to indicate their priority level and to code them appropriately. Assess students' understanding of the attribute `aria-live` and its values `polite`, `assertive`, and `off`.
* Practical &mdash; Give students an alert and ask students to code it appropriately. Assess students' knowledge of `role="alert"`.
* Practical &mdash; Give students a form that has a time limit related to a security requirement ask students to determine which mechanism they would choose to make it accessible. Assess students' knowledge of how to code mechanisms to stop, adjust, and extend time limits.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to support assessment:

* Practical &mdash; Supervise students filling in form controls using mechanisms that assistive technologies provide to move to next and previous form control and to show all form controls in an isolated list. Assess students' knowledge of mechanisms of assistive technologies to interact and fill in form controls.
* Portfolio &mdash; Students add a set of form controls to the website they are building. Assess how students identify, label, and group form controls as well as how they provide feedback based on user input.

## Teaching Resources

Suggested resources to support your teaching:

* [Designing for Web Accessibility](/tips/designing/) &mdash; Tips for user interface and visual design.
* [Forms (WAI Web Accessibility Tutorials)](/tutorials/forms) &mdash; Shows how to develop forms that are accessible to people with disabilities.
* [How People with Disabilities Use the Web](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Notifications and Feedback (Web Accessibility Perspectives)](/perspective-videos/notifications/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, form controls, and mobile devices.
* [WAI-ARIA](/standards-guidelines/aria/) &mdash; Describes the roles, states, and properties that define accessible user interface elements and can be used to improve the accessibility and interoperability of web content and applications.
* [HTML5 living standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/) &mdash; The core markup language for the web.
