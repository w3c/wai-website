---
title: "7: Forms Design in Designer Modules | Curricula"
title_html: "Module 7: Forms Design&nbsp;"
nav_title: "Forms Design"
permalink: /curricula/designer-modules/forms-design/
ref: /curricula/designer-modules/forms-design/
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
  previous: /curricula/designer-modules/multimedia-and-animations/
  next:
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities interact with forms 
* explain accessibility requirements related to forms, including placement, structure, labels, instructions, and notifications

## Learning Outcomes for Module

Students should be able to:

* explain how people with disabilities rely on placement, structure, labels, instructions, and notifications to understand, navigate, and interact with forms
* design consistent use, placement, and appearance of form elements
* specify interactions with form elements, including through mouse, keyboard, touch, and speech
* specify clear and distinguishable names as well as visual and non-visual instructions to help understand the purpose and functionality of form elements
* define clear and descriptive visual and non-visual instructions for the current step and the total number of steps in multi-step forms
* specify clear and descriptive error messages that:
  * identify the field in error 
  * provide suggestions for correction when possible
* apply meaningful and descriptive visual and non-visual notifications, including for:
  * imminent time limits
  * success messages
  * status changes
  * feedback from user input
* describe related requirements for developers to implement semantics and programmatic relationships for forms

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/designer-modules/#foundation-prerequisites)
* Prior [Designer Modules](/curricula/designer-modules/)
* Knowledge of:
  * Visual Design
  * Prototyping
  * Responsive Design
  * Information Design
  * Interaction Design

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG Success Criterion 1.3.1 Info and Relationships](https://www.w3.org/WAI/WCAG21/quickref/#info-and-relationships)
  * [WCAG Success Criterion 1.3.2 Meaningful Sequence](https://www.w3.org/WAI/WCAG21/quickref/#meaningful-sequence)
  * [WCAG Success Criterion 1.3.3 Sensory Characteristics](https://www.w3.org/WAI/WCAG21/quickref/#sensory-characteristics)
  * [WCAG Success Criterion 1.3.4 Orientation](https://www.w3.org/WAI/WCAG21/quickref/#orientation)
  * [WCAG Success Criterion 1.3.5 Identify Input Purpose](https://www.w3.org/WAI/WCAG21/quickref/#identify-input-purpose)
  * [WCAG Success Criterion 1.4.1 Use of Color](https://www.w3.org/WAI/WCAG21/quickref/#use-of-color)
  * [WCAG Success Criterion 1.4.3 Contrast (Minimum)](https://www.w3.org/WAI/WCAG21/quickref/#contrast-minimum)
  * [WCAG Success Criterion 1.4.4 Resize Text](https://www.w3.org/WAI/WCAG21/quickref/#resize-text)
  * [WCAG Success Criterion 1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/quickref/#contrast-enhanced)
  * [WCAG Success Criterion 1.4.8 Visual Presentation](https://www.w3.org/WAI/WCAG21/quickref/#visual-presentation)
  * [WCAG Success Criterion 1.4.10 Reflow](https://www.w3.org/WAI/WCAG21/quickref/#reflow)
  * [WCAG Success Criterion 1.4.11 Non-Text Contrast](https://www.w3.org/WAI/WCAG21/quickref/#non-text-contrast)
  * [WCAG Success Criterion 1.4.12 Text Spacing](https://www.w3.org/WAI/WCAG21/quickref/#text-spacing)
  * [WCAG Success Criterion 2.1.1 Keyboard](https://www.w3.org/WAI/WCAG21/quickref/#keyboard)
  * [WCAG Success Criterion 2.1.2 No Keyboard Trap](https://www.w3.org/WAI/WCAG21/quickref/#no-keyboard-trap)
  * [WCAG Success Criterion 2.2.1 Timing Adjustable](https://www.w3.org/WAI/WCAG21/quickref/#timing-adjustable)
  * [WCAG Success Criterion 2.2.5 Re-Authenticating](https://www.w3.org/WAI/WCAG21/quickref/#re-authenticating)
  * [WCAG Success Criterion 2.2.6 Timeouts](https://www.w3.org/WAI/WCAG21/quickref/#timeouts)
  * [WCAG Success Criterion 2.4.3 Focus Order](https://www.w3.org/WAI/WCAG21/quickref/#focus-order)
  * [WCAG Success Criterion 2.4.6 Headings and Labels](https://www.w3.org/WAI/WCAG21/quickref/#headings-and-labels)
  * [WCAG Success Criterion 2.4.7 Focus Visible](https://www.w3.org/WAI/WCAG21/quickref/#focus-visible)
  * [WCAG Success Criterion 3.3.1 Error Identification](https://www.w3.org/WAI/WCAG21/quickref/#error-identification)
  * [WCAG Success Criterion 3.3.2 Labels and Instructions](https://www.w3.org/WAI/WCAG21/quickref/#labels-or-instructions)
  * [WCAG Success Criterion 3.3.3 Error Suggestion](https://www.w3.org/WAI/WCAG21/quickref/#error-suggestion)
  * [WCAG Success Criterion 3.3.4 Error Prevention](https://www.w3.org/WAI/WCAG21/quickref/#error-prevention-legal-financial-data)
  * [WCAG Success Criterion 4.1.3 Status Messages](https://www.w3.org/WAI/WCAG21/quickref/#status-messages)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/designer-modules/#foundation-prerequisites)
  * Prior [Designer Modules](/curricula/designer-modules/)
  * Visual Design
  * Prototyping
  * Responsive Design
  * Information Design
  * Interaction Design
* Basic knowledge of coding techniques

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Form Elements

{% include excol.html type="middle" %}

Explore different form elements and their purpose, including edit boxes, checkboxes, radio buttons, and buttons. Explain standard versus non-standard uses of form elements (for example using read-only edit boxes when expecting text input) and how non-standard uses of form elements impacts accessibility.

#### Learning Outcomes for Topic

Students should be able to:

* identify the purposes of form elements, including edit boxes, checkboxes, radio buttons, and buttons
* describe how non-standard uses of form elements can cause compatibility issues and cognitive overload
* evaluate the use of standard versus non-standard form elements
* select form elements that minimize extra work to make them accessible in the implementation phase
* identify related requirements for developers to write code for form elements that programmatically identifies their purpose as well as their current state and value

### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of different form elements and reflect on their purposes. For example, edit boxes, checkboxes, radio buttons, and buttons. Emphasize that non-standard uses of form elements can cause cognitive overload as well as compatibility issues with assistive technologies and adaptive strategies.
* Demonstrate the use of standard versus non-standard form elements. Explain that standard elements are generally accessible by default, and that there is little need for extra work to make them accessible at a later phase. However, use of non-standard elements generally requires additional coding to ensure these elements are usable with the keyboard and compatible with assistive technologies.

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short Answer Questions &mdash; Give students specific purposes for form elements. Ask them to research how to communicate these purposes using standard elements. If standard elements are found to be inadequate for the purpose, have students discuss the accessibility requirements for using non-standard elements and how they would approach such requirements. Assess how students understand and communicate the accessibility requirements for using non-standard elements.
* Practical &mdash; Ask students to select the appropriate form elements based on a given set of input requirements. Ask students to use standard elements when possible for each of these input requirements and to annotate keyboard interaction and expected behavior with assistive technologies when using non-standard elements. Assess how students annotate keyboard interactions and expected behavior with assistive technologies when using non-standard elements.
 
{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Labels and Instructions

{% include excol.html type="middle" %}

Refer back to [Designer Module 2: Information Design, Topic Naming and Grouping](/curricula/designer-modules/information-design/#topic-naming-and-grouping). Show examples of labels and instructions in the context of forms.

#### Learning outcomes for Topic

Students should be able to:

* design user experiences that consider position and appearance for labels and instructions
* specify clear and consistent names for form elements across websites and applications
* specify visual and non-visual instructions for:
  * required input fields
  * major changes in the content before the component that originates such changes
  * existing time limits in a form and how to adjust them, extend them, and turn them off
  * the current step and the total number of steps involved in a multi-step form
* associate form elements that share the same purpose, such as those to provide an address, and communicate these groups visually and non-visually
* identify related requirements for developers to provide semantics for labels and instructions

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate how labels for form fields are placed differently depending on the components, the language, and the user expectations. For example, labels for edit boxes are placed to the left of the field or above it in left-to-right languages, and to the right of the field or below it in right-to-left languages. Labels for radio buttons are placed to the right of the field or below it in left-to-right languages, or to the left of the field or above it in right-to-left languages.
* Show examples of different form elements, including buttons, checkboxes, text boxes, and listboxes, across websites and applications. Emphasize that each should have a clear name that identifies its purpose. For reference on how to provide consistent names for different form elements across websites and applications, see technique [G197: Using labels, names, and text alternatives consistently for content that has the same functionality](https://www.w3.org/WAI/WCAG21/Techniques/general/G197).
* Demonstrate the use of several methods to provide instructions for required form fields, including color as well as visual and non-visual instructions.
* Invite students to reflect on time limits, such as those warning about session expirations. Explain that visual and non-visual instructions must be provided so that users are aware of the time limits, and methods must be implemented to stop, adjust, or extend time limits. Explain that defining and providing the instructions is a designer's responsibility, whereas implementing methods to stop, extend, or adjust time limits is a responsibility shared with the developer.
* Discuss groups of form elements that share the same purpose, for example those to provide an address. Explain that form elements that share the same purpose need clear visual and non-visual associations.
* Show examples of multi-step forms. Explain that overall instructions should be provided about the current step in a form and about the total number of steps involved.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Give students a form and ask them to assign labels for each of the fields. Assess how students provide clear and descriptive names for each of the form fields.
* Practical &mdash; Give students a form with required and non-required fields and ask them to provide visual and non-visual instructions to communicate the required  fields. Assess how students provide clear and understandable instructions for each required field.
* Practical &mdash; Give students a form and ask them to provide the necessary instructions for users to understand each of the fields and fill in the form. Assess how students provide clear and concise instructions.
* Practical &mdash; Give students a form and ask them to associate those which share the same purpose. Assess how students associate form elements that share the same purpose.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Errors

{% include excol.html type="middle" %}

Show examples of common input errors and suggestions for correcting them. Explain that users rely on clear indications of each of the fields in error and on suggestions for correction when possible.

#### Learning Outcomes for Topic

Students should be able to:

* define the placement and appearance of error messages
* specify error messages in the page title or before the form that:
  * identify the fields in error
  * describe the cause of the error
  * provide suggestions to correct the error when possible
* specify methods to reverse, check, and confirm critical submissions, including legal, financial, and sensitive data

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show both effective and ineffective examples of placement and appearance of error messages. Explain that some users rely on consistent placement and appearance of these messages to identify the errors.
* Show examples of overall information about submission errors. Explain that this information makes users aware that their submission contains errors and help them search for specific error messages in the rest of the content.
* Show effective and ineffective examples of specific messages that identify each of the fields in error. Explain that these messages help users identify and locate the specific fields that contain errors. Mention that it is best practice to keep the original submission when possible, so that users can understand what needs to be corrected.
* Show effective and ineffective examples of suggestions for correction. Explain that these suggestions help users understand what the right way is to submit the form. Emphasize that these suggestions should be provided when possible, unless they compromise the security and the purpose of the form.
* Show examples of critical submissions, including buying an airline ticket and submitting legal data. Discuss methods to reverse, check, and confirm the information included in such submissions.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Give students an interface containing errors and ask them to provide an overall descriptive message informing that there are submission errors. Assess how students provide overall informative messages when there are submission errors
* Practical &mdash; Give students a form field submission containing errors and ask them to provide messages about each of the wrongly submitted fields. Assess how students provide appropriate error messages for wrongly submitted fields and how they provide suggestions for correction when possible.
* Practical &mdash; Give students a form field submission containing errors and ask them to provide suggestions for correction when possible. Assess how students provide suggestions for correction.
* Practical &mdash; Give students a form submission containing legal data and ask them to provide methods to reverse, check, and confirm that submission. Assess how students understand the need for methods to reverse, check, and confirm critical submissions.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Notifications

{% include excol.html type="middle" %}

Show examples of notification messages. Explain that users need visual and non-visual methods to identify and distinguish such notifications.

Show examples of visual and non-visual notifications for error messages and other types of feedback for forms. Explain that notifications may have different levels of priority when in the context of a complex form. Explain that defining such levels of priority and which types of notifications each of these levels should contain is a designer's responsibility, whereas implementing these levels is a developer's responsibility.

#### Learning Outcomes for Topic

Students should be able to:

* specify the placement and appearance of notifications
* specify meaningful and descriptive notification messages, including:
  * on input (to communicate if the provided input is valid or invalid)
  * on task completion (to communicate success or failure of a specific task)
* design user experiences to queue and prioritize application notifications coming from different components
* design user experiences to store notifications that disappear after a period of time to be checked at the users' pace
* identify related requirements for developers to implement notifications

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of placement and appearance of notifications. Explain that these notifications must be distinguishable both visually and non-visually. Explain that defining the notifications placement and appearance is responsibility of the designer, whereas implementing such notifications is a developer's responsibility.
* Discuss different methods to communicate notifications, such as through text messages, semantic relations, haptic and audio feedback, and popup windows. Explain that there needs to be a variety of methods available to allow interaction by different groups of users.
* Show examples of overlapping notifications. Explain that some users may find it daunting to process several notifications at the same time, so a method needs to be defined that allows to prioritize notifications based on their relevance. Explain that defining methods to prioritize notifications based on their relevance is a designer's responsibility, whereas implementing the methods is a developer's responsibility.
* Demonstrate how assistive technologies, including screen readers and voice assistants, process notifications. Explain that the notifications may come at a faster pace than the technology is able to process, so users may end up missing information. Emphasize that it is good practice to design methods to store the notifications to allow users to check the notifications at their own pace.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Give students a form field that validates on user input and ask them to provide descriptive validation messages. Assess how students provide clear validation messages for fields that validate on user input.
* Practical &mdash; Give students a form with notifications coming from different fields and ask them to define methods to queue and prioritize such notifications. Assess how students prioritize and organize notifications coming from different views.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students when it is possible to provide suggestions for correction and when it is not. Assess how students identify scenarios where it is possible to provide suggestions for correction and scenarios where it is not.
* Portfolio &mdash; Have students design a form. Assess how students consider placement, structure, labels, instructions, and notifications when designing accessible forms.

## Teaching Resources

Suggested resources to support your teaching:

* [Designing for Web Accessibility](/tips/designing/) &mdash; Tips for user interface and visual design.
* [How People with Disabilities Use the Web](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Keyboard Compatibility (Web Accessibility Perspectives)](/perspective-videos/keyboard/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Colors with Good Contrast (Web Accessibility Perspective)](/perspective-videos/contrast/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Clear Layout and Design (Web Accessibility Perspective)](/perspective-videos/layout/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Large Links, Buttons, and Controls (Web Accessibility Perspectives)](/perspective-videos/controls/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Notifications and Feedback (Web Accessibility Perspectives)](/perspective-videos/notifications/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
