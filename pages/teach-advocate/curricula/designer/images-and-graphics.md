---
title: "5: Images and Graphics in Designer Modules | Curricula"
title_html: "Module 5: Images and Graphics&nbsp;"
nav_title: "Images and Graphics"
permalink: /curricula/designer-modules/images-and-graphics/
ref: /curricula/designer-modules/images-and-graphics/
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
    name: "Designer Modules"
  - ref: /curricula/
    name: "Curricula on Web Accessibility"
navigation:
  previous: /curricula/designer-modules/interaction-design/
  next: /curricula/designer-modules/multimedia-and-animations/
---

## Introduction
{:.no-display}

Courses based on this module should:

* explain strategies that people with disabilities use to access information contained in images and graphics
* explain accessibility requirements related to images and graphics, including text alternatives and contrast ratio

## Learning Outcomes for Module

Students should be able to:

* explain how images and graphics help people with disabilities to process information, identify content, and understand functionality
* explain how text alternatives are essential for people with disabilities to understand the information contained in images
* specify meaningful and consistent text alternatives for functional images, for example those included in buttons, links, icons, and logos
* define consistent imagery to help users recognize the purpose of icons, thumbnails, and other graphical components
* explain the issues associated with perception, interpretation, and rendering of images of text
* explain how to avoid images of text by using technologies that achieve the desired visual presentation wherever possible
* evaluate the potential overuse of images
* select alternative ways to provide the information contained in images, including tables and plain text
* identify related requirements for:
  * developers to code images and text alternatives appropriately
  * content authors to provide appropriate descriptions for images, including charts, diagrams, and other complex graphics

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
  * [WCAG Success Criterion 1.1.1 Non-Text Content](https://www.w3.org/WAI/WCAG21/quickref/#non-text-content)
  * [WCAG Success Criterion 1.4.1 Use of Color](https://www.w3.org/WAI/WCAG21/quickref/#use-of-color)
  * [WCAG Success Criterion 1.4.3 Contrast (Minimum)](https://www.w3.org/WAI/WCAG21/quickref/#contrast-minimum)
  * [WCAG Success Criterion 1.4.5 Images of Text](https://www.w3.org/WAI/WCAG21/quickref/#images-of-text)
  * [WCAG Success Criterion 1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/quickref/#contrast-enhanced)
  * [WCAG Success Criterion 1.4.9 Images of Text (No Exception)](https://www.w3.org/WAI/WCAG21/quickref/#images-of-text-no-exception)
  * [WCAG Success Criterion 1.4.11 Non-Text Contrast](https://www.w3.org/WAI/WCAG21/quickref/#non-text-contrast)
* In-depth knowledge of:
  * [Foundation Prerequisites](/curricula/designer-modules/#foundation-prerequisites)
  * Prior [Designer Modules](/curricula/designer-modules/)
  * Visual Design
  * Prototyping
  * Responsive Design
  * Information Architecture
  * Content Design
  * Technical Writing

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Functional Images

{% include excol.html type="middle" %}

Functional images convey the purpose of a component. For example, search, print, and save functionality are often presented using icon imagery. Explain requirements related to color and contrast to help users distinguish these images from other components. Show examples of graphical links and buttons as well as logos. Discuss with students how they would describe each of those examples.

#### Learning Outcomes for Topic

Students should be able to:

* specify text alternatives for functional images using the following methods:
  * text alternatives for images
  * combinations of text alternatives for images and adjacent text inside components
  * adjacent text inside components to understand their function
* specify consistent naming and imagery for components that have the same functionality across web pages
* explain the benefits of using text labels and decorative images for functionality, instead of using images with text alternatives that are only available to some users, such as screen reader users
* apply appropriate contrast ratio for functional images

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Demonstrate the use of images to convey functionality, for example printing, searching, or saving a document. Explain that these images need an equivalent, succinct text alternative that explains the function rather than a description of the image. For reference on how to provide a text alternative for an image conveying function, see technique [G94: Providing short text alternative for non-text content that serves the same purpose and presents the same information as the non-text content](https://www.w3.org/WAI/WCAG21/Techniques/general/G94.html).
* Invite students to research the most common iconography and naming for elements such as print, save, and search. Explain that these iconography and names must be consistent throughout the website.
* Refer back to [Designer Module 1: Visual Design, Topic Color](/curricula/designer-modules/visual-design/#topic-color) to explain contrast ratio requirements for functional images.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Give students different examples of images conveying function, such as a printer for a "print" button and a magnifying glass for a "search" button. Ask students to provide an appropriate text alternative for each. Assess how students identify images that convey function and how they provide text alternatives that describe the functionality of the component.
* Practical &mdash; Ask students to design a series of graphical buttons and links in a way that they are perceivable and distinguishable by all users. Assess how students apply accessibility requirements, such as contrast ratio, to graphical buttons and links.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Informative Images

{% include excol.html type="middle" %}

Informative images convey information that is necessary to understand the content. Their description generally requires a short phrase or sentence. Show examples of images that convey information, such as pictures in a piece of news. Discuss how to describe them. 

Explain that providing text alternatives for informative images is a responsibility shared with the content author.

#### Learning Outcomes for Topic

Students should be able to:

* specify text alternatives that are equally informative as the described images using the following methods:
  * boilerplate descriptions that would then be completed and maintained through the development and authoring phases
  * adjacent textual information to complement images and icons, for example in a news headline
  * text alternatives that describe the information conveyed by images
* apply the appropriate contrast ratio to images that are necessary to understand the content
* collaborate with developers and content authors to use styled text when the technology in use can provide the desired visual presentation
* explain the accessibility considerations of relying only on one form of biometrics and CAPTCHA
* specify alternatives to biometrics and CAPTCHA, for example using visual, auditory, and logical CAPTCHA
* specify alternative ways to convey the information contained in images, including plain text
* identify related requirements for developers to code alternative texts for informative images

### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of different images that convey information, such as images to provide instructions, and to identify people and objects. Explain that users who do not see the image need text alternatives to understand such information. Emphasize that these alternatives may require coordination among designers, developers, and content authors. For references on how to provide text alternatives for images, see [G82: Providing a text alternative that identifies the purpose of the non-text content](https://www.w3.org/WAI/WCAG21/Techniques/general/G82.html).
* Refer back to [Designer Module 1: Visual Design, Topic Color](/curricula/designer-modules/visual-design/#topic-color) to explain contrast ratio requirements for informative images.
* Explain that images of text present information intended to be read as text. Emphasize that sometimes it is difficult to tell visually if text has been coded as text or as an image. Coordination among designers, developers, and content authors is therefore needed to determine if the technologies in use can achieve the same desired visual presentation in a text format. Emphasize that, if an image of text is still required, there must be a text alternative that conveys the same information as the image of text. Explain that coding an image of text appropriately is a responsibility of the developer, whereas providing descriptions for images of text is a responsibility shared with the content author.
* Show examples of different verification systems, such as CAPTCHA, to identify humans trying to access a service or system. Explain that these verification systems must support several modalities, including visual, auditory, and cognitive. For references on how to provide accessible CAPTCHA, see technique [G143: Providing a text alternative that describes the purpose of the CAPTCHA](https://www.w3.org/WAI/WCAG21/Techniques/general/G143.html) and [G144: Ensuring that the Web Page contains another CAPTCHA serving the same purpose using a different modality](https://www.w3.org/WAI/WCAG21/Techniques/general/G144.html).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment.

* Practical &mdash; Give students a set of informative images. Ask students to annotate text alternatives that help developers and content authors provide the descriptions in the implementation phase. Assess how students provide boilerplate descriptions that would then be completed and maintained through the development and authoring phases.
* Practical &mdash; Give students an image of text and ask them to collaborate with other team roles such as developers and content authors to ensure the image has an equivalent alternative text. Assess how students identify the need for alternative text for images of text.
* Short Answer Questions &mdash; Present students with a situation where a human verification system needs to be used and ask them to provide various authentication alternatives for biometrics and CAPTCHA. Assess how students understand the need for providing various authentication alternatives for biometrics and CAPTCHA.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Complex Images

{% include excol.html type="middle" %}

Complex images are those whose description requires more than a short phrase or sentence. Show examples of complex images, including diagrams and charts, and explain accessibility requirements that these images have, such as appropriate contrast ratio and appropriate text descriptions.

Explain that designers must coordinate with different team members to specify the placement, operation, and functionality of complex images visually and through the provided alternatives.

#### Learning Outcomes for Topic

Students should be able to:

* apply appropriate contrast ratio for complex images
* evaluate the potential overuse of complex images
* select alternative ways to present the information contained in complex images, for example using tables, simpler images, and plain text
* determine if and how complex images are operated using input devices, including mouse, keyboard, touch, and voice
* define the placement and spacing for alternatives to complex images
* specify clear and consistent identification methods for image descriptions, including appropriate headings and expandable and collapsible components
* design user experiences for complex images, including:
  * how to get to the image descriptions
  * what the descriptions should look like
  * ensuring the descriptions are equivalent to the information provided in the image
* identify related requirements for content authors to:
  * provide descriptive, equivalent textual information to understand complex images and graphics, including diagrams, charts, maps, and infographics
  * break down complex images into smaller and more manageable pieces, for example simpler images, tables, and plain text

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Provide examples of complex images and graphics, such as charts, diagrams, maps, and infographics. Refer back to [Designer Module 1: Visual Design, Topic Color](/curricula/designer-modules/visual-design/#topic-color). Explain that they must have a contrast ratio of at least 3:1, depending on text size and format when they are necessary to understand the content. For references on how to provide complex graphics that meet the required contrast ratio, see technique [G18: Ensuring that a contrast ratio of at least 4.5:1 exists between text (and images of text) and background behind the text](https://www.w3.org/WAI/WCAG21/Techniques/general/G18.html).
* Explain that complex images must also have text descriptions that allow people who don’t see them to understand and interact with the image content. Explain that providing these text alternatives is a designer's responsibility, whereas providing the text descriptions is a responsibility shared with the content author.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Have students add complex images to a website, such as charts or diagrams, and ensure they have the required contrast ratio. Assess how students understand the contrast requirements for complex images.
* Practical &mdash; Have students collaborate with developers and content authors to implement a map that can be understood and effectively used by all. Assess how students identify the need for text alternatives for complex images and collaborate with other team members to ensure such alternatives are effective.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Decorative Images

{% include excol.html type="middle" %}

Decorative images are used for ornamental purposes and convey no information or function. Decorative images require empty text alternatives, so that they can be ignored by assistive technologies, and reduce noise. Explain that determining if an image is decorative is a responsibility shared with the content author.

#### Learning Outcomes for Topic

Students should be able to:

* describe the differences between decorative and non-decorative images depending on the type of information conveyed by the image and the overall context
* describe different ways to present information contained in an image in the surrounding content so that the image can be considered decorative
* evaluate the potential overuse of decorative images
* select decorative images that avoid distractions and cognitive overload
* explain how the overuse of decorative images could slow down loading times and interaction for users
* identify related requirements for developers to code decorative images so that they are skipped by assistive technologies

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of images and graphics that do not convey function or information, such as ornamental icons. Explain that they serve ornamental purposes as long as people can understand and interact with the user interface with or without such icons. Explain that deciding what are the images' role is a designer's responsibility, whereas coding the images so that they render with the appropriate role is a developer's responsibility.
* Invite students to research how overuse of decorative images can impact some users. For example, too many decorative images can create distractions and cognitive overload, as well as slow down loading times.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Practical &mdash; Ask students to provide decorative images to illustrate a text article and ask them to ensure these icons are visible in different screen sizes and devices. Assess how students understand the need for decorative images to adapt to the different user needs and preferences.
* Practical &mdash; Give students an interface with too many decorative images and ask students to identify the ones that are likely to cause distractions, cognitive overload, and slow loading times. Assess how students select decorative images that minimize distractions, cognitive overload, and loading times.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students which types of images require which contrast ratio. Assess how students understand the different types of images and their requirements for contrast ratio.
* Portfolio &mdash; Have students design the imagery for a website. Assess how students include accessibility requirements in the images and graphics they design, for example contrast ratio, text alternatives that belong to the design phase, and placeholders for any other text alternative that is planned for later stages of the design and development process.

## Teaching Resources

Suggested resources to support your teaching:

* [Designing for Web Accessibility](/tips/designing/) &mdash; Tips for user interface and visual design.
* [Images (WAI Web Accessibility Tutorials)](/tutorials/images/) &mdash; Shows how to provide alternatives to images that are accessible to people with disabilities.
* [[How People with Disabilities Use the Web]](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Keyboard Compatibility (Web Accessibility Perspectives)](/perspective-videos/keyboard/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Colors with Good Contrast (Web Accessibility Perspective)](/perspective-videos/contrast/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Clear Layout and Design (Web Accessibility Perspective)](/perspective-videos/layout/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.

