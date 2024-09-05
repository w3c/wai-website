---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Accessibility Principles
nav_title: "Accessibility Principles"
lang: en   # Change "en" to the translated language shortcode
last_updated: 2024-07-15   # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: An overview of the fundamental web accessibility requirements for websites, web applications, browsers, and other tools.
teaser_text: The Accessibility Principles page introduces some of the web accessibility requirements for websites, web applications, browsers, and other tools. It provides references to the international standards from W3C Web Accessibility Initiative (WAI) and to stories of web users.

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-accessibility-principles

permalink: /fundamentals/accessibility-principles/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-principles/  # Do not change this

image: /content-images/accessibility-principles/social.png
changelog: /fundamentals/accessibility-principles/changelog/ # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Updated 16 July 2024. CHANGELOG</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/shadi/">Shadi Abou Zahra</a>. <a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">Acknowledgments</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https//www.w3.org/WAI/EO/">EOWG</a>). Previously developed with the <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">WAI-AGE Task Force</a>, with support of the <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces some of the web accessibility requirements for websites, web applications, browsers, and other tools. It provides references to the international standards from W3C Web Accessibility Initiative (WAI) and to [stories of web users](/people-use-web/user-stories/).

**Note:** This is not a complete list of all accessibility requirements.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


{% include excol.html type="all" %}

## Web accessibility standards {#standards}

Web accessibility relies on several components that work together. Some of these include:

-   **Web content**{:#webcontent} - refers to any part of a website, including text, images, forms, and multimedia, as well as any markup code, scripts, applications, and such.
-   **User agents**{:#useragents} - software that people use to access web content, including desktop graphical browsers, voice browsers, mobile phone browsers, multimedia players, plug-ins, and some [assistive technologies](/people-use-web/tools-techniques/#at "definition").
-   **Authoring tools**{:#authoringtools} - software or services that people use to produce web content, including code editors, document conversion tools, content management systems, blogs, database scripts, and other tools.

{% include excol.html type="start" %}

### More about web accessibility standards
{:.no_toc}

{% include excol.html type="middle" %}

These components inter-relate and support each other. For instance, **web content** needs to include text alternatives for images. This information needs to be processed by **web browsers** and then conveyed to **assistive technologies**, such as screen readers. To create such text alternatives, authors need **authoring tools** that support them to do so. More background is provided in [[Essential Components of Web Accessibility]](/fundamentals/components/).

Standards play a vital role in defining accessibility requirements for each of these components. Some accessibility requirements are easy to meet, yet understanding the basics of how people with disabilities use the Web helps implement them more effectively and efficiently. Some aspects of accessibility require more technical skills or advanced knowledge of how people use the Web. In all cases, [involving users early and throughout your web projects](/test-evaluate/involving-users/) will make your work better and easier.

The W3C Web Accessibility Initiative (WAI) provides a set of guidelines that are internationally recognized as the standard for web accessibility. These include:

-   **[Web Content Accessibility Guidelines (WCAG)](/standards-guidelines/wcag/)**
-   **[User Agent Accessibility Guidelines (UAAG)](/standards-guidelines/uaag/)**
-   **[Authoring Tool Accessibility Guidelines (ATAG)](/standards-guidelines/atag/)**

There is also a WAI specification for **[Accessible Rich Internet Applications (WAI-ARIA)](/standards-guidelines/aria/)**, which include dynamic content and advanced user interface controls developed with Ajax, JavaScript, and related web technologies.

{% include excol.html type="end" %}

## Perceivable information and user interface {#perceivable}

### Text alternatives for non-text content {#alternatives}

Text alternatives are equivalents for non-text content. Examples include:

-   Short equivalents for images, including icons, buttons, and graphics
-   Description of data represented on charts, diagrams, and illustrations
-   Brief descriptions of non-text content such as audio and video files
-   Labels for form controls, input, and other user interface components

Text alternatives convey the purpose of an image or function to provide an equivalent user experience. For instance, an appropriate text alternative for a search button would be "*search*" rather than "*magnifying lens*".

Text alternatives can be presented in a variety of ways. For instance, they can be read aloud for people who cannot see the screen and for people with reading difficulties or displayed on braille devices. The surrounding body text or caption text for images can also be text alternatives. In such cases, users can enlarge text size to make it easier to read.  Text alternatives serve as labels for controls and functionality to aid keyboard navigation and navigation by voice recognition (speech input). They also act as labels to identify audio, video, and files in other formats, as well as applications that are embedded as part of a website.

{% include excol.html type="start" %}

#### Accessibility requirements related to text alternatives (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.1 - Text Alternatives](https://www.w3.org/WAI/WCAG22/quickref/#text-alternatives)

**UAAG**

-   [Guideline 1.1 - Alternative content](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.1: (For the authoring tool user interface) Make alternative content available to authors](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### Stories related to text alternatives
{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
- [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

### Captions and other alternatives for multimedia {#captions}

People who cannot hear audio or see video need alternatives. Examples include:

-   Text transcripts and captions for audio content, such as recordings of a radio interview
-   Audio descriptions, which are narrations to describe important visual details in a video
-   Sign language interpretation of audio content, including relevant auditory experiences

Well-written text transcripts containing the correct sequence of any auditory or visual information provide a basic level of accessibility and facilitate the production of captions and audio descriptions.

{% include excol.html type="start" %}

#### Accessibility requirements related to multimedia (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.2 - Time-based Media](https://www.w3.org/WAI/WCAG22/quickref/#time-based-media)

**UAAG**

-   [Guideline 1.1 - Alternative content](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.1: (For the authoring tool user interface) Make alternative content available to authors](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### Stories related to multimedia {#stories-related-to-multimedia}
{:.no_toc}

{% include excol.html type="middle" %}

- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
- [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)

{% include excol.html type="end" %}

### Content can be presented in different ways {#adaptable}

For users to be able to change the presentation of content, it is necessary that:

-   Headings, lists, tables, input fields, and content structures are marked-up properly
-   Sequences of information or instructions are independent of any presentation
-   Browsers and assistive technologies provide settings to customize the presentation

Meeting this requirement allows content to be correctly read aloud, enlarged, or adapted to meet the needs and preferences of different people. For instance, it can be presented using custom color combinations, text size, or other styling to facilitate reading. This requirement also facilitates other forms of adaptation, including automatic generation of page outlines and summaries to help people get an overview and to focus on particular parts more easily.

{% include excol.html type="start" %}

#### Accessibility requirements related to adaptability (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.3 - Adaptable](https://www.w3.org/WAI/WCAG22/quickref/#adaptable)

**UAAG**

-   [Guideline 1.4 - Text configuration](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Guideline 1.5 - Volume configuration](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Guideline 1.6 - Synthesized speech configuration](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Guideline 1.7 - User style sheet configuration](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Guideline 1.9 - Alternative views](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Guideline 1.10 - Element information](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to adaptability
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
- [[Lexie, online shopper who cannot distinguish between certain colors (color blindness)]](/people-use-web/user-stories/story-four/)
- [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

### Content is easier to see and hear {#distinguishable}

Distinguishable content is easier to see and hear. Such content includes:

-   Color is not used as the only way of conveying information or identifying content
-   Default foreground and background color combinations provide sufficient contrast
-   When users resize text up to 400% or change text spacing, no information is lost
-   Text reflows in small windows ("viewports") and when users make the text larger
-   Images of text are resizable, replaced with actual text, or avoided where possible
-   Users can pause, stop, or adjust the volume of audio that is played on a website
-   Background audio is low or can be turned off, to avoid interference or distraction

Meeting this requirement helps separate foreground from background, to make important information more distinguishable. This includes considerations for people who do not use assistive technologies and for people using assistive technologies who may observe interference from prominent audio or visual content in the background. For instance, many people with color blindness do not use any particular tools and rely on a proper design that provides sufficient color contrast between text and its surrounding background. For others, audio that is automatically played could interfere with text-to-speech or with [assistive listening devices (ALDs)](/teach-advocate/accessible-presentations/#ald "definition").

{% include excol.html type="start" %}

#### Accessibility requirements related to distinguishability (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.4 - Distinguishable](https://www.w3.org/WAI/WCAG22/quickref/#distinguishable)

**UAAG**

-   [Guideline 1.3 - Highlighting](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [Guideline 1.4 - Text configuration](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Guideline 1.5 - Volume configuration](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Guideline 1.6 - Synthesized speech configuration](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Guideline 1.7 - User style sheet configuration](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Guideline 1.8 - Orientation in viewports](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [Guideline 1.9 - Alternative views](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Guideline 1.10 - Element information](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to distinguishability
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
- [[Lexie, online shopper who cannot distinguish between certain colors (color blindness)]](/people-use-web/user-stories/story-four/)
- [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

## Operable user interface and navigation {#operable}

### Functionality is available from a keyboard {#keyboard}

Many people do not use the mouse and rely on the keyboard to interact with the Web. This requires keyboard access to all functionality, including form controls, input, and other user interface components.

Keyboard accessibility includes:

-   All functionality that is available by mouse is also available by keyboard
-   Keyboard focus does not get trapped in any part of the content
-   Web browsers, authoring tools, and other tools provide keyboard support

Meeting this requirement helps keyboard users, including people using alternative keyboards such as keyboards with ergonomic layouts, on-screen keyboards, or switch devices. It also helps people using voice recognition (speech input) to operate websites and to dictate text through the keyboard interface.

{% include excol.html type="start" %}

#### Accessibility requirements related to keyboard accessibility (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.1 - Keyboard accessible](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-accessible)

**UAAG**

-   [Guideline 2.1 - Keyboard access](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [Guideline 2.2 - Sequential navigation](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Guideline 2.3 - Direct navigation and activation](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Guideline 2.11 - Other Input Devices](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.1: (For the authoring tool user interface) Provide keyboard access to authoring features](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to keyboard accessibility
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)

{% include excol.html type="end" %}

### Users have enough time to read and use the content {#time}

Some people need more time than others to read and use the content. For instance, some people require more time to type text, understand instructions, operate controls, or to otherwise complete tasks on a website.

Examples of providing enough time include providing mechanisms to:

-   Stop, extend, or adjust time limits, except where necessary
-   Pause, stop, or hide moving, blinking, or scrolling content
-   Postpone or suppress interruptions, except where necessary
-   Re-authenticate when a session expires without losing data

{% include excol.html type="start" %}

#### Accessibility requirements related to sufficient time (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.2 - Enough time](https://www.w3.org/WAI/WCAG22/quickref/#enough-time)

**UAAG**

-   [Guideline 2.8 - Time-independent interaction](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [Guideline 2.10 - Time-based media](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.2: (For the authoring tool user interface) Provide authors with enough time](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to sufficient time
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

### Content does not cause seizures and physical reactions {#safe}

Content that flashes at certain rates or patterns can cause photosensitive reactions, including seizures. Flashing content is ideally avoided entirely or only used in a way that does not cause known risks. Also animations and moving content can cause discomfort and physical reactions.

Examples of avoiding causing seizures and physical reactions:

-   Do not include content that flashes at particular rates and patterns
-   Warn users before flashing content is presented, and provide alternatives
-   Provide mechanisms to switch off animations, unless they are essential

{% include excol.html type="start" %}

#### Accessibility requirements related to seizures (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.3 - Seizures](https://www.w3.org/WAI/WCAG22/quickref/#seizures-and-physical-reactions)

**UAAG**

-   [Guideline 2.9 - Flashing](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.3: (For the authoring tool user interface) Help authors avoid flashing that could cause seizures](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to seizures
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)


{% include excol.html type="end" %}

### Users can easily navigate, find content, and determine where they are {#navigable}

Well organized content helps users to orient themselves and to navigate effectively. Such content includes:

-   Pages have clear titles and are organized using descriptive section headings
-   There is more than one way to find relevant pages within a set of web pages
-   Users are informed about their current location within a set of related pages
-   There are ways to bypass blocks of content that are repeated on multiple pages
-   The keyboard focus is visible, and the focus order follows a meaningful sequence
-   The purpose of a link is evident, ideally even when the link is viewed on its own

Meeting this requirement helps people to navigate through web pages in different ways, depending on their particular needs and preferences. For instance, while some people rely on hierarchical navigation structures such as menu bars to find specific web pages, others rely on search functions on websites instead. Some people may be seeing the content while others may be hearing it or seeing and hearing it at the same time. Some people may be using the content with only a mouse or a keyboard, while others may be using both.

{% include excol.html type="start" %}

#### Accessibility requirements related to navigation (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.4 - Navigable](https://www.w3.org/WAI/WCAG22/quickref/#navigable)

**UAAG**

-   [Guideline 2.2 - Sequential navigation](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Guideline 2.3 - Direct navigation and activation](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Guideline 2.4 - Text search](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [Guideline 2.5 - Structural navigation](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [Guideline 2.7 - Graphical controls](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.4: (For the authoring tool user interface) Enhance navigation and editing via content structure](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [Guideline A.3.5: (For the authoring tool user interface) Provide text search of the content](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to navigation
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
- [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

### Users can use different input modalities beyond keyboard {#modalities}

Input modalities beyond keyboard, such as touch activation, voice recognition (speech input), and gestures make content easier to use for many people. Yet not everyone can use each of these input modalities, and to the same degree. Particular design considerations maximize the benefit of these input modalities. This includes:

-   Gestures that require dexterity or fine movement have alternatives that do not require high dexterity
-   Components are designed to avoid accidental activation, for example by providing undo functionality
-   Labels presented to users match corresponding object names in the code, to support activation by voice
-   Functionality that is activated by movement can also be activated through user interface components
-   Buttons, links, and other active components are large enough to make them easier to activate by touch

Meeting this requirement makes the content easier to use for many people with a wide range of abilities using a wide range of devices. This includes content used on mobile phones, tablet computers, and self-service terminals such as ticketing machines.

{% include excol.html type="start" id="" %}

#### Accessibility requirements related to input modalities (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.5 - Input Modalities](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

## Understandable information and user interface {#understandable}

### Text is readable and understandable {#readable}

Content authors need to ensure that text content is readable and understandable to the broadest audience possible, including when it is read aloud by text-to-speech. Such content includes:

-   Identifying the primary language of a web page, such as Arabic, Dutch, or Korean
-   Identifying the language of text passages, phrases, or other parts of a web page
-   Providing definitions for any unusual words, phrases, idioms, and abbreviations
-   Using the clearest and simplest language possible, or providing simplified versions

Meeting this requirement helps software, including assistive technology, to process text content correctly. For instance, this requirement helps software to read the content aloud, to generate page summaries, and to provide definitions for unusual words such as technical jargon. It also helps people who have difficulty understanding more complex sentences, phrases, and vocabulary. In particular, it helps people with different types of cognitive disabilities.

{% include excol.html type="start" %}

#### Accessibility requirements related to readability (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 3.1 - Readable](https://www.w3.org/WAI/WCAG22/quickref/#readable)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.4.2: (For the authoring tool user interface) Document the user interface, including all accessibility features](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to readability
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
- [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
- [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

### Content appears and operates in predictable ways {#predictable}

Many people rely on predictable user interfaces and are disoriented or distracted by inconsistent appearance or behavior. Examples of making content more predictable include:

-   Navigation mechanisms that are repeated on multiple pages appear in the same place each time
-   User interface components that are repeated on web pages have the same labels each time
-   Significant changes on a web page do not happen without the consent of the user

Meeting this requirement helps people to quickly learn the functionality and navigation mechanisms provided on a website, and to operate them according to their specific needs and preferences. For instance, some people assign personalized shortcut keys to functions they frequently use to enhance keyboard navigation. Others memorize the steps to reach certain pages or to complete processes on a website. Both rely on predictable and consistent functionality.

{% include excol.html type="start" %}

#### Accessibility requirements related to predictability (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 3.2 - Predictable](https://www.w3.org/WAI/WCAG22/quickref/#predictable)

**UAAG**

-   [Guideline 3.3 - Predictable](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.4.2: (For the authoring tool user interface) Document the user interface, including all accessibility features](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to predictability
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
- [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

### Users are helped to avoid and correct mistakes {#tolerant}

Forms and other interaction can be confusing or difficult to use for many people, and, as a result, they may be more likely to make mistakes. Examples of helping users to avoid and correct mistakes include:

-   Descriptive instructions, error messages, and suggestions for correction
-   Context-sensitive help for more complex functionality and interaction
-   Opportunity to review, correct, or reverse submissions if necessary

Meeting this requirement helps people who do not see or hear the content, and may not recognize implicit relationships, sequences, and other cues. It also helps people who do not understand the functionality, are disoriented or confused, forget, or make mistakes using forms and interaction for any other reason.

{% include excol.html type="start" %}

#### Accessibility requirements related to input assistance (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 3.3 - Input assistance](https://www.w3.org/WAI/WCAG22/quickref/#input-assistance)

**UAAG**

-   [Guideline 3.1 - Mistakes](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.4.1: (For the authoring tool user interface) Help authors avoid and correct mistakes](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to input assistance
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

## Robust content and reliable interpretation {#robust}

### Content is compatible with current and future user tools {#compatible}

Robust content is compatible with different browsers, assistive technologies, and other user agents. Examples of how this can be achieved include:

-   Ensuring markup can be reliably interpreted, for instance by ensuring it is valid
-   Providing a name, role, and value for non-standard user interface components

Meeting this requirement helps maximize compatibility with current and future user agents, including assistive technologies. In particular, it enables assistive technologies to process the content reliably, and to present or to operate it in different ways. This includes non-standard (scripted) buttons, input fields, and other controls.

{% include excol.html type="start" %}

#### Accessibility requirements related to compatibility (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 4.1 - Compatible](https://www.w3.org/WAI/WCAG22/quickref/#compatible)

**UAAG**

-   [Guideline 2.6 - Preference settings](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [Guideline 4.1 - Assistive technology](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [Guideline 5.1 - Follow specifications](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Stories related to compatibility
{:.no_toc}

{% include excol.html type="middle" %}

- [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
- [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
- [[Lexie, online shopper who cannot distinguish between certain colors (color blindness)]](/people-use-web/user-stories/story-four/)
- [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
- [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
- [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
- [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{% include excol.html type="end" %}

{% include excol.html type="all" %}

