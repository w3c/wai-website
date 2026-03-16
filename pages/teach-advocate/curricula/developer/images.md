---
title: "3: Images in Developer Modules | Curricula"
title_html: "Module 3: Images&nbsp;"
nav_title: "Images"
permalink: /curricula/developer-modules/images/
ref: /curricula/developer-modules/images/
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
  previous: /curricula/developer-modules/menus/
  next: /curricula/developer-modules/tables/
---

## Introduction
{:.no-display}

Courses based on this module should:

* demonstrate how people with disabilities rely on text alternatives to access information contained in images
* explain coding techniques to provide text alternatives for images

## Learning Outcomes for Module

Students should be able to:

* explain how text alternatives enable people with disabilities to access information contained in images
* describe different types of images from an accessibility perspective, such as informative, textual, decorative, functional, and complex images
* write code to provide appropriate markup and text alternatives for images
* write code that supports markup of additional descriptions for images
* use CSS to style text instead of using images of text
* describe how SVG can be used to create accessible graphics
* describe how MathML can be used to present accessible mathematical expressions
* describe related requirements for content authors and designers to provide accessible images

{% include excol.html type="all" %}

## Competencies

Skills required for this module:

{% include excol.html type="start" %}

### Students

{% include excol.html type="middle" %}

* [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)
* Basic knowledge of:
  * [HTML `img` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/embedded-content.html#the-img-element)
  * [HTML `picture` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/embedded-content.html#the-picture-element)
  * [CSS Specifications](https://www.w3.org/TR/CSS)
  * [SVG](https://www.w3.org/TR/SVG2/)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Instructors

{% include excol.html type="middle" %}

* Applied expertise in teaching:
  * [WCAG 2 Success Criterion 1.1.1 Non-text Content](https://www.w3.org/WAI/WCAG21/quickref/#non-text-content)
  * [WCAG 2 Success Criterion 1.4.5 Images of Text](https://www.w3.org/WAI/WCAG21/quickref/#images-of-text)
  * [WCAG 2 Success Criterion 1.4.9 Images of Text (No Exception)](https://www.w3.org/WAI/WCAG21/quickref/#images-of-text-no-exception)
  * [WCAG 2 Success Criterion 4.1.2 Name, Role, Value](https://www.w3.org/WAI/WCAG21/quickref/#name-role-value)
  * [HTML `img` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/embedded-content.html#the-img-element)
  * [HTML `alt` attribute {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/embedded-content.html#attr-img-alt)
  * [HTML `longdesc` attribute {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/obsolete.html#dom-frame-longdesc)
  * [HTML `picture` element{% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/embedded-content.html#the-picture-element)
  * [HTML `Figure` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/grouping-content.html#the-figure-element)
  * [HTML `figcaption` element {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/grouping-content.html#the-figcaption-element)
  * [CSS Specifications](https://www.w3.org/TR/CSS)
  * [SVG](https://www.w3.org/TR/SVG2/)
  * [WAI-ARIA `img` role](https://www.w3.org/TR/wai-aria-1.1/#img)
  * [WAI-ARIA `aria-label` attribute](https://www.w3.org/TR/wai-aria-1.1/#aria-label)
  * [WAI-ARIA `aria-labelledby` attribute](https://www.w3.org/TR/wai-aria-1.1/#aria-labelledby), 
  * [WAI-ARIA `aria-describedby` attribute](https://www.w3.org/TR/wai-aria-1.1/#aria-describedby)
* In-depth knowledge of [Foundation Prerequisites](/curricula/developer-modules/#foundation-prerequisites)

{% include excol.html type="end" %}

## Topics to Teach

Topics to achieve the learning outcomes:

{% include excol.html type="start" %}

### Topic: Text Alternatives

{% include excol.html type="middle" %}

Demonstrate how text alternatives allow people to access information included in images. Explain how text alternatives can be presented in different ways, for example visually in different text sizes, through text-to-speech, as braille, and as symbols. Explain different coding techniques to provide text alternatives for images.

#### Learning Outcomes for Topic

Students should be able to:

* explain how text alternatives for images are processed by assistive technologies and how they can be presented to people with disabilities in different ways, such as text, text-to-speech, braille, and symbols
* identify images that convey information, including images of text, versus images that are purely decorative
* write markup for informative images using the HTML attributes `alt` and `title`, and WAI-ARIA attributes `aria-label` and `aria-labelledby`, and describe how these attributes are processed by assistive technologies to provide text alternatives
* write markup for decorative images using empty text alternatives and using CSS so that they are ignored by assistive technologies
* describe related requirements for content authors to provide short text alternatives for informative images

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Explain that the HTML attribute `alt` should contain concise and clear information about the image. State why it is not necessary to include the word "image" in the text alternative because the HTML element `img` is already announced by assistive technologies. Mention that decorative images should have empty ("") values in the `alt` attributes, or that they should be included in the web page using CSS instead, so that they are ignored by assistive technologies. Examples of how to use `alt` to code text alternatives are provided in techniques [H2: Combining adjacent image and text links for the same resource](https://www.w3.org/WAI/WCAG21/Techniques/html/H2) and [H37: Using alt attributes on `img` elements](https://www.w3.org/WAI/WCAG21/Techniques/html/H37).
* Demonstrate other ways to provide text alternatives, such as the HTML attribute `title` and WAI-ARIA attributes `aria-label` and `aria-labelledby`. Explain that these may not be well supported by older browsers and assistive technologies. Examples of how to use `aria-label` and `aria-labelledby` to provide descriptions for images are provided in techniques [ARIA6: Using aria-label to provide labels for objects](https://www.w3.org/WAI/WCAG21/Techniques/aria/ARIA6.html) and [ARIA10: Using aria-labelledby to provide a text alternative for non-text content](https://www.w3.org/WAI/WCAG21/Techniques/aria/ARIA10.html).
* Show different examples of informative images (including images of text) and contrast them with decorative images. Explain how context can affect the meaning of the same image. Emphasize how each context may require a different text alternative, including an empty text alternative when the image is decorative. Descriptions of informative and decorative images are provided in the WAI tutorials on [Decorative Images](/tutorials/images/decorative/) and [Informative Images](/tutorials/images/informative/).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short Answer Questions &mdash; Ask students about the different HTML and WAI-ARIA elements and attributes to provide text alternatives for images. Assess students' knowledge of the different coding techniques to provide text alternatives for images.
* Practical &mdash; Students provide text alternatives for a given set of informative and decorative images. Assess how students relate a given image with its specific function within a website.
* Practical &mdash; Give students the same image in different contexts and ask students to provide the corresponding text alternative for each. Assess how students consider the context of an image to provide its text alternative.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Functional Images

{% include excol.html type="middle" %}

Explain why images that indicate functionality, such as images in links and buttons, require text alternatives that describe the purpose of the function rather than to describe the image itself. Explain how the text alternative depends on the context of the image, such as any adjacent text.

#### Learning Outcomes for Topic

Students should be able to:

* write text alternatives for button images and image input types that describe the action these images are carrying out
* write text alternatives for images in links that, along with any adjacent link text, describe the action the links are carrying out
* write text alternatives that are consistent across the content so that the same function is recognized when it is placed in different places of the content
* write markup for functional images using the HTML attributes `alt` and `title`, and WAI-ARIA attributes `aria-label` and `aria-labelledby`, and describe how these attributes are processed by assistive technologies to provide text alternatives

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Explain that functional images serve to initiate an action, rather than to convey information. An explanation of functional images is provided in the WAI tutorials on [Images Concepts](/tutorials/images/).
* Show examples of button and image input types, such as those for printing and saving a document. Explain that their text alternatives need to refer to the action that the image conveys. Examples of several text alternatives for functional images are provided in the WAI tutorials on [Functional Images](/tutorials/images/functional/).
* Show examples of adjacent link and button texts that may influence the text alternative for a functional image. Explain that when the adjacent text conveys the action performed by the image, a null text alternative should be provided.

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Short Answer Questions &mdash; Ask students what a functional image is. Assess students' knowledge of what a functional image is.
* Practical &mdash; Give students functional images with and without surrounding text and ask students to provide text alternatives accordingly. Assess how students provide text alternatives for functional images based on context.

{% include excol.html type="end" %}

{% include excol.html type="start" %}

### Topic: Complex Images

{% include excol.html type="middle" %}

Explain that complex images, such as charts, diagrams, and infographics, provide rich information and require longer text alternatives to describe them. Discuss mechanisms to provide additional descriptions for complex images, including providing these descriptions for everyone directly in the content.

#### Learning Outcomes for Topic

Students should be able to:

* write markup for additional descriptions for images using one of the following techniques:
  * HTML elements `figure` and `figcaption` (and HTML attribute `alt` when individual images require specific descriptions)
  * WAI-ARIA attribute `aria-describedby`
  * HTML attribute `longdesc` (in certain contexts, such as ePub)
* style text using CSS Transforms and CSS Fonts instead of using images of text
* write code to update text alternatives when images are changed dynamically, including animations
* explain how to provide accessible charts, diagrams, and infographics by using SVG instead of non-scalable images
* explain how to provide accessible mathematical expressions by using MathML instead of using images of text
* describe related requirements for designers to provide charts, diagrams, and infographics that are easy to understand
* describe related requirements for authors to write meaningful text alternatives for textual and complex images

#### Teaching Ideas for Topic

Optional ideas to teach the learning outcomes:

* Explain ways to provide additional descriptions for complex images and groups of images such as charts, diagrams, and screen shots of materials that are intended to be read as text. For example, the HTML elements `figure` and `figcaption`, the WAI-ARIA attribute `aria-describedby` and the HTML attribute `longdesc`. Explain that the `alt` attribute may be also advised if there are individual images within those groups of images that require specific descriptions. Mention that `longdesc` may not be well supported by some browsers and assistive technologies. Examples of how to describe complex images are provided in the WAI tutorials on [Complex images](/tutorials/images/complex/) and [images of Text](/tutorials/images/textual/).
* Discuss how working with the content authors and designers can often lead to simpler ways of communicating the information for everyone. Also discuss how descriptions for complex images benefit many people, so that providing these descriptions directly in the content is often more beneficial than providing these as text alternatives for users of assistive technologies only.
* Demonstrate how SVG can be used to provide graphics, including animations. Discuss the support for SVG in browsers and assistive technologies, as well as authoring tools to create such graphics. Explain the benefits of graphics provided as SVG, which allows them to be resized without pixelating, allows text and objects within the image to be accessed by assistive technologies, and allows the presentation to be customized.
* Demonstrate how MathML can be used to code mathematical expressions. Emphasize that screen reader support for MathML is growing, but others may need additional browser extensions to access contents in MathML. Examples of how to use the MathML language to code mathematical expressions are provided in the WAI tutorials on [mathematical expressions](/tutorials/images/textual/#mathematical-expressions).
* Demonstrate that many visual effects can now be achieved by using CSS Transforms and CSS Fonts, instead of using images of text. Explain the benefits of using real text, which can be resized and adapted, as opposed to images that do not support such uses. Examples of how to use CSS3 properties to style text decorations are provided in the WAI tutorials on [Using CSS](/tutorials/images/textual/#using-css3).

#### Ideas to Assess Knowledge for Topic

Optional ideas to support assessment:

* Practical &mdash; Ask students to code descriptions for a set of given charts and graphics. Assess how students code descriptions for complex images.
* Practical &mdash; Give students a set of images of text and ask students to code them using CSS Transforms and CSS Fonts. Assess students' knowledge of CSS Transforms and CSS Font technologies.
* Practical &mdash; Give students charts, diagrams, and infographics and ask students to code them using SVG, providing descriptions as appropriate. Assess students' knowledge of how to code  graphics using SVG and how to provide their descriptions when necessary.

{% include excol.html type="end" %}

{% include excol.html type="all" %}

## Ideas to Assess Knowledge for Module

Optional ideas to support assessment:

* Practical &mdash; Supervise students using  mechanisms that assistive technologies provide to move to next and previous image and to show all the images of a web page in an isolated list. Assess students’ knowledge of mechanisms of assistive technologies to move through images.
* Guided Quiz &mdash; Give students a set of images in the context of a website and ask students to provide their type and possible text alternative. Assess how students identify different types of images and provide text alternatives based on their purpose and context.
* Portfolio &mdash; Students add different types of images to the website they are building. Assess how students code images and how they provide text alternatives based on their knowledge or with the help of other roles.

## Teaching Resources

Suggested resources to support your teaching:

* [Images (WAI Web Accessibility Tutorials)](/tutorials/images/) &mdash; Shows how to provide alternatives to images that are accessible to people with disabilities.
* [How People with Disabilities Use the Web](/people-use-web/) &mdash; Provides stories of people with disabilities using the Web; describes types of disabilities and some of the barriers that people encounter using the Web; and introduces types of assistive technologies and adaptive strategies that some people use.
* [Video Captions (Web Accessibility Perspectives)](/perspective-videos/captions/) &mdash; Is one of the Web accessibility perspectives videos that show accessibility features and how they impact people with disabilities.
* [WCAG](/standards-guidelines/wcag/) &mdash; Address accessibility of web content on desktops, laptops, tablets, and mobile devices.
* [WAI-ARIA](/standards-guidelines/aria/) &mdash; Describes the roles, states, and properties that define accessible user interface elements and can be used to improve the accessibility and interoperability of web content and applications.
* [HTML5 living standard {% include_cached icon.html name="external-link" %}](https://html.spec.whatwg.org/multipage/) &mdash; The core markup language for the web.
* [CSS Specifications](https://www.w3.org/TR/CSS).
* [SVG](https://www.w3.org/TR/SVG2/)
