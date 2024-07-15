---
title: "4: Images in Content Author Modules | Curricula"
title_html: "Module 4: Images&nbsp;"
nav_title: "Images"
permalink: /curricula/content-author-modules/images/
ref: /curricula/content-author-modules/images/
lang: en
github:
  label: wai-curricula
license: creative-commons
acknowledgements: /curricula/acknowledgements/
changelog: /curricula/changelog/
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
  previous: /curricula/content-author-modules/forms/
  next: /curricula/content-author-modules/data-tables/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how text alternatives for images enable people who cannot see the images to understand the image content
* explain accessibility requirements for text alternatives of informative, decorative, functional, and complex images

## Learning Outcomes for Module

Students should be able to:

* explain how people with disabilities rely on text alternatives for images (including diagrams, charts, maps, and infographics) to understand the image content
* explain the purpose of the following types of images:
  * informative &mdash; require descriptions that convey their information
  * functional &mdash; require descriptions that convey their functionality
  * decorative &mdash; require empty alternative text that convey their ornamental purpose
  * complex &mdash; require short and long descriptions and sometimes alternative data visualizations
* write equivalent, appropriate text alternatives for images based on the image purpose and context
* provide textual information using regular text instead of an image file
* identify requirements for authoring tools to include and manage alternatives for images (including text alternatives and different modalities of CAPTCHA)
* identify related requirements for designers and developers to support accessible images

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
  * [WCAG Success Criterion 1.1.1 Non-Text Content](https://www.w3.org/WAI/WCAG21/quickref/#non-text-content)
  * [WCAG Success Criterion 1.4.1 Use of Color](https://www.w3.org/WAI/WCAG21/quickref/#use-of-color)
  * [WCAG Success Criterion 1.4.3 Contrast (Minimum)](https://www.w3.org/WAI/WCAG21/quickref/#contrast-minimum)
  * [WCAG Success Criterion 1.4.5 Images of Text](https://www.w3.org/WAI/WCAG21/quickref/#images-of-text)
  * [WCAG Success Criterion 1.4.6 Contrast (Enhanced)](https://www.w3.org/WAI/WCAG21/quickref/#contrast-enhanced)
  * [WCAG Success Criterion 1.4.9 Images of Text (No Exception)](https://www.w3.org/WAI/WCAG21/quickref/#images-of-text-no-exception)
  * [WCAG Success Criterion 1.4.11 Non-Text Contrast](https://www.w3.org/WAI/WCAG21/quickref/#non-text-contrast)
* In-depth knowledge of
  * [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
  * Prior [Content Author Modules](/curricula/content-author-modules/)
  * [Accessible authoring tools](/standards-guidelines/atag/)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Informative Images

{% include excol.html type="middle" %}

Informative images convey information visually. Examples include icons, photos, graphs, and illustrations. They require a short, clear description provided in the image text alternative or through the adjacent text. Discuss different approaches for providing alternative text for informative images.

When images do not convey information, they are marked as decorative with an empty alternative text.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with disabilities rely on text alternatives for informative images to understand the image content
* provide quality text alternatives that convey the information in the image using one of the following:
  * a clear and descriptive text alternative associated with the image
  * adjacent text that conveys the same information as the image
* write text content as regular text instead of including text content in an image file
* collaborate with designers and developers to:
  * ensure availability of different modalities of CAPTCHA, including visual, auditory, and biometrics
  * mark an image as decorative when it does not convey information
* identify requirements for authoring tools to:
  * support the inclusion of alternative text for informative images
  * support marking an image as decorative
  * enable authors to amend automatically generated text alternatives for quality and accuracy
  * produce appropriate markup for informative and decorative images
  * support different modalities of CAPTCHA, including visual, auditory, and biometrics

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of informative images, including icons, pictures, and illustrations. Explain that these images are considered informative when they present information that is not otherwise available in the adjacent text. Discuss what text alternatives to include for these images based on the image content and on the information provided in the text adjacent to the image.
* Discuss examples of images that can be both informative and decorative based on context. Explain that decorative images require empty alternative text. Some authoring tools let content authors specify when an image is decorative. Otherwise, content authors must provide annotations for designers and developers to implement images as decorative.
* Explain the differences between providing textual information as text and providing text in an image file. Explain that some assistive technologies may be able to recognize some text in an image but may still miss the structure and semantics in the text.
* Reflect with students on available authentication systems to identify humans, including visual, auditory, and logical CAPTCHA, as well as biometrics. Describe challenges associated with relying only on one modality of CAPTCHA. Emphasize that authors, designers, and developers must ensure people can authenticate through several modalities of CAPTCHA. This includes ensuring the tool provides such modalities itself and using plugins that include that functionality.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about the type of information that alternative text for informative images should convey. Assess how students explain the type of information that alternative text for informative images should convey.
* Practical &mdash; Give students several informative images with adjacent text. Ask them to determine if the adjacent text provides enough information to understand the image and to include alternative text when needed. Assess how students provide alternative text for informative images based on the information conveyed in the image and on its adjacent text.
* Practical &mdash; Give students several pages containing the same image. Ask them to determine when the image is informative and when it is decorative. Assess what text students select for the informative images, as well as how students distinguish informative from decorative images based on context.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Functional Images

{% include excol.html type="middle" %}

Functional images convey functionality. Examples include: a magnifying glass for search, an envelope for mail, and a printer for print functionality. Discuss different approaches for providing text alternatives for functional images, including for icons as well as for graphical buttons and links.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with disabilities rely on text alternatives for functional images to understand the image function
* write short, succinct, and quality text alternatives to provide information about the image function
* identify requirements for authoring tools to:
  * support the inclusion of text alternatives for images
  * enable authors to amend automatically generated text alternatives when needed
  * produce appropriate markup for functional images, including for graphical buttons and links

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Explain that text alternatives for functional images must describe the functionality of the component instead of describing the image appearance. Examples include: "Search" instead of "magnifying glass", and "print" instead of "printer".
* Show examples of functional images, including for graphical buttons and links. Discuss with students what text alternative to include for these images.
* Refer back to [Content Author Module 1: Clear Content](/curricula/content-author-modules/clear-content/). Demonstrate the use of iconography to provide information and functionality. Explain that it is best practice to complement icons with text that helps people understand the meaning of icons.
* Introduce accessible authoring tools that support the inclusion of text alternatives for images and that produce appropriate markup for those images. Explain that some tools may refer to alternative texts as "image descriptions".

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about the type of information that alternative text for functional images should convey. Assess how students understand the type of information that alternative text for functional images should convey.
* Practical &mdash; Give students examples of functional images and ask them to provide their text alternative. Assess how students include information about the image function in the text alternative.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Complex Images

{% include excol.html type="middle" %}

Complex images require short descriptions that identify the image and long descriptions that provide equivalent information as that contained in the image. Complex images include charts, diagrams, maps, and infographics. Describe different approaches for providing short and long descriptions for complex images.

Explain that complex images can serve as alternative data visualizations for complex data sets, including descriptive text, tables, diagrams, charts, and infographics.

#### Learning Outcomes for Topic

Students should be able to:

* explain how people with disabilities rely on equivalent, quality text alternatives, including short and long descriptions, for complex images to understand the image content
* write short, succinct, and clear descriptions for complex images that:
  * identify the image
  * include reference to the alternative long description for the image
* provide equivalent, long descriptions for complex images that help people understand and process the image contents using:
  * additional blocks of content in the same page
  * separate pages containing the long descriptions
* provide other graphical representations as alternative data visualizations for complex images
* identify related requirements for designers and developers to ensure:
  * appropriate contrast ratios for complex images and descriptions
  * reliable identification of short and long descriptions for complex images

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Show examples of complex images. Discuss with students different approaches for providing an alternative for such images. These alternatives may include data tables, regular text descriptions, and other complex image types.
* Demonstrate the use of assistive technologies and adaptive strategies for navigating alternatives to complex images.
* Discuss examples of short descriptions for complex images. Explain that these descriptions should contain clear and concise information about what the image is about as well as information about how to get to the long descriptions for the images when available. Emphasize that it is best practice to display instructions on how to get to the long descriptions on screen, as they are beneficial for all users.
* Reflect with students on how different groups of people with disabilities access information contained in maps, charts, diagrams, and infographics. Explain that it is best practice to provide several data visualizations when presenting complex and large data sets, including through data tables, regular text descriptions, and other complex image types.

#### Ideas to Assess Knowledge for Topic

Optional ideas to assess knowledge:

* Short Answer Questions &mdash; Ask students about the type of information that short and long descriptions for complex images should convey. Assess how students explain the type of information that short and long descriptions for complex images should convey.
* Practical &mdash; Give students a complex image and ask them to provide an alternative data visualization for the image, for example through a data table or through a descriptive piece of text. Assess how students provide alternative data visualizations for complex images.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to assess knowledge:

* Research &mdash; Ask students to research different approaches for providing text alternatives for informative, functional, and complex images based on the image context and functionality. Assess how students understand how to provide text alternatives for images based on the image context and functionality.
* Portfolio &mdash; Have students include text alternatives for several types of images on the website they are creating. Assess how students determine the type of text alternative to include based on the types of images and their context.

## Teaching Resources

Suggested resources to support your teaching:

* [Writing for Web Accessibility](/tips/writing/) -- Introduces some basic considerations to help you get started writing web content that is more accessible to people with disabilities.
* [Images (WAI Web Accessibility Tutorials)](/tutorials/images/) &mdash; Shows how to provide alternatives to images that are accessible to people with disabilities.
* [[How People with Disabilities Use the Web]](/people-use-web/) &mdash; Describes some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Understandable Content (Web Accessibility Perspective)](/perspective-videos/understandable/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [Inaccessibility of CAPTCHA](https://www.w3.org/TR/turingtest/) &mdash; examines a number of approaches that allow systems to test for human users and the extent to which these approaches adequately accommodate people with disabilities. 
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
