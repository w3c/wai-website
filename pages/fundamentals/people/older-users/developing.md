---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: "Developing Websites for Older People: How Web Content Accessibility Guidelines (WCAG) 2.0 Applies"
title_html: "Developing Websites for Older People:<br>How Web Content Accessibility Guidelines (WCAG) 2.0 Applies"
nav_title: "How WCAG 2.0 Applies"
lang: en  # Change "en" to the translated language shortcode
last_updated: 2010-09-22  # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 2

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-older-users

resource:
  ref: /older-users/  # Do not change this

permalink: /older-users/developing/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /older-users/developing/ # Do not change this

changelog: /older-users/changelog/  # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:", "Editors:" and "Contributors".
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Reviewed January 2018. Updated 22 September 2010. CHANGELOG</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Andrew/">Andrew Arch</a> and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Contributors: <a href="https://www.w3.org/People/Shawn/">Shawn Henry</a>, Suzette Keith, Kate Roberts. </p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>), with the <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf.html#participants">WAI-AGE Task Force</a>. Related to the  <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> funded by the European Commission under the 6th Framework.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

An extensive [literature review](https://www.w3.org/WAI/intro/wai-age-literature) identified that existing standards from the W3C Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)) address the accessibility needs of older web users. This page introduces how to use Web Content Accessibility Guidelines (WCAG) 2.0 to improve the accessibility and usability of websites and web applications for older people.

Please see **[Web Accessibility and Older People: Meeting the Needs of Ageing Web Users](https://www.w3.org/WAI/older-users/)** for additional background and resources on the overlapping needs of older people and people with disabilities.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2..4" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

- TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## About WCAG 2.0 {#wcag}

The Web Content Accessibility Guidelines (WCAG) 2.0 includes organizing principles and guidelines, and has success criteria at three levels: A, AA, AAA. WAI recommends meeting at least all WCAG 2.0 Level A and AA success criteria.

A related document provides techniques that include specific details on meeting the success criteria, such as code examples. WAI encourages developers to use the [How to Meet WCAG 2.0 quick reference](https://www.w3.org/WAI/WCAG20/quickref/) to access the guidelines, success criteria, and techniques, along with the additional descriptions, examples, and resources from “Understanding WCAG 2.0”.

To learn more about WCAG, see:

- [WCAG Overview](/standards-guidelines/wcag/) - provides background, an introduction to WCAG, and links to additional information
- [The WCAG 2.0 Documents](https://www.w3.org/WAI/intro/wcag20) - describes the different WCAG 2.0 technical and supporting documents
- [How to Meet WCAG 2.0](https://www.w3.org/WAI/WCAG20/quickref/) - is a customizable quick reference to Web Content Accessibility Guidelines 2.0 requirements (Success Criteria) and techniques

## How WCAG 2.0 Applies to Older People {#map}

This section explains how many of the Web Content Accessibility Guidelines (WCAG) 2.0 guidelines and success criteria specifically meet the needs of older web users. Although not all the WCAG 2.0 success criteria are listed here, WAI recommends meeting at least all WCAG 2.0 Level A and AA success criteria. Some of the Level AAA success criteria that are particularly important for older people are listed in this section too.

When implementing WCAG 2.0, developers can use different techniques to meet the success criteria. In some cases, using one technique instead of another can optimize accessibility for certain users. This section lists some of the techniques that can help optimize websites for older people. (Many of the techniques link to additional information; those with "(future link)" will be written up with later edits to the WCAG Techniques.)

This section is organized under the four principles of web accessibility from WCAG 2.0: perceivable, operable, understandable, and robust. Success criteria are listed thematically, to help readability. Sometimes they are drawn from different guidelines to address a particular aspect.

### Perceivable information and user interface {#p}

{::nomarkdown}
{% capture boxtitle %}
{:/}

#### Text size {#textsize}

{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Many older people require large text due to declining vision, including text in form fields and other controls.

**WCAG 2.0 success criteria:**

- [1.4.4 - Resize text](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-scale) (AA) says "text can be resized without assistive technology up to 200 percent without loss of content or functionality"

**Example techniques to consider:**

- Using relative font-sizes such as percent ([C12](https://www.w3.org/TR/WCAG20-TECHS/C12)) or ems ([C14](https://www.w3.org/TR/WCAG20-TECHS/C14)) and ensuring text containers resize ([C28](https://www.w3.org/TR/WCAG20-TECHS/C28))
- Providing large fonts by default (future link)
- [C17: Scaling form elements which contain text](https://www.w3.org/TR/WCAG20-TECHS/C17)
- Avoiding the use of text in raster images (future link)
- [G178: Providing controls on the Web page that allow users to incrementally change the size of all text on the page up to 200 percent](https://www.w3.org/TR/WCAG20-TECHS/G178)

More techniques are listed under [1.4.4 - Resize text](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-scale) in "How to Meet WCAG 2.0".

**Literature review reference:** [Vision decline with ageing](https://www.w3.org/TR/wai-age-literature/#whatvision).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Text style and text layout {#textstyle}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Text style and its visual presentation impacts how hard or easy it is for people to read, especially older people with declining vision.

**WCAG 2.0 success criteria:**

- [1.4.8 - Visual Presentation](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-visual-presentation) (AAA) includes requirements on text style, text justification, line spacing, line length, and horizontal scrolling

**Example techniques to consider:**

- Avoiding fully-aligned text ([C19](https://www.w3.org/TR/WCAG20-TECHS/C19)) or center-aligned text (future link)
- Using readable fonts (future link)
- Using upper and lower case according to the spelling conventions of the text language (future link)
- Avoiding chunks of italic text (future link)
- [G188: Providing a button on the page to increase line spaces and paragraph spaces](https://www.w3.org/TR/WCAG20-TECHS/G188)
- Providing sufficient inter-column spacing (future link)
- Avoiding overuse of different styles on individual pages and in sites (future link)

More techniques are listed under [1.4.8 - Visual Presentation](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-visual-presentation) in "How to Meet WCAG 2.0".

**Literature review references:** [Vision decline with ageing](https://www.w3.org/TR/wai-age-literature/#whatvision), [Previous approaches to ‘senior friendly’ Web guidelines](https://www.w3.org/TR/wai-age-literature/#existguide), and [Studies of elderly Web users’ specific disabilities - Vision](https://www.w3.org/TR/wai-age-literature/#elderlyusersvision).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Color and contrast {#color}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Most older people's color perception changes, and they lose contrast sensitivity.

**WCAG 2.0 success criteria:**

- [1.4.1 - Use of Color](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-without-color) (A) requires that color is not used as the only visual means of conveying information, indicating an action, prompting a response, or distinguishing a visual element
- [1.4.3 - Contrast (Minimum)](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-contrast) (AA) requires a contrast ratio of at least 4.5:1 for the visual presentation of text and images
- [1.4.6 - Contrast (Enhanced)](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast7) (AAA) requires a higher contrast ratio of at least 7:1 for the visual presentation of text and images

**Example techniques to consider:**

- [G18: Ensuring that a contrast ratio of at least 4.5:1 exists between text (and images of text) and background behind the text](https://www.w3.org/TR/WCAG20-TECHS/G18)
- [G14: Ensuring that information conveyed by color differences is also available in text](https://www.w3.org/TR/WCAG20-TECHS/G14)
- Using a light pastel background rather than a white background behind black text to create sufficient but not extreme contrast (future link)
- [G183: Using a contrast ratio of 3:1 with surrounding text and providing additional visual cues on focus for links or controls where color alone is used to identify them](https://www.w3.org/TR/WCAG20-TECHS/G183)

More techniques are listed under [1.4.1 - Use of Color](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-without-color), [1.4.3 - Contrast (Minimum)](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-contrast) and [1.4.6 - Contrast (Enhanced)](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast7) in "How to Meet WCAG 2.0".

**Literature review references:** [Vision decline with ageing](https://www.w3.org/TR/wai-age-literature/#whatvision), and [Studies of elderly Web users’ specific disabilities: vision](https://www.w3.org/TR/wai-age-literature/#elderlyusersvision).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Multimedia {#multimedia}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Because many older people's hearing or vision declines, they often need transcripts, captions, and low background sound.

**WCAG 2.0 success criteria:**

- [1.2.1 - Audio-only and Video-only (Prerecorded)](https://www.w3.org/WAI/WCAG20/quickref/#media-equiv-av-only-alt) (A)
- [1.2.2 - Captions (Prerecorded)](https://www.w3.org/WAI/WCAG20/quickref/#qr-media-equiv-captions) (A)
- [1.2.3 - Audio Description or Media Alternative (Prerecorded video)](https://www.w3.org/WAI/WCAG20/quickref/#media-equiv-audio-desc) (A)
- [1.2.4 - Captions (Live)](https://www.w3.org/WAI/WCAG20/quickref/#qr-media-equiv-real-time-captions) (A)
- [1.2.5 - Audio Description (Prerecorded video)](https://www.w3.org/WAI/WCAG20/quickref/#media-equiv-audio-desc-only) (AA)
- [1.2.7 - Extended Audio Description (Prerecorded video)](https://www.w3.org/WAI/WCAG20/quickref/#media-equiv-extended-ad) (AAA)
- [1.2.8 - Media Alternative (Prerecorded)](https://www.w3.org/WAI/WCAG20/quickref/#media-equiv-text-doc) (AAA)
- [1.2.9 - Audio-only (Live)](https://www.w3.org/WAI/WCAG20/quickref/#qr-media-equiv-live-audio-only) (AAA)
- [1.4.7 - Low or No Background Audio (Prerecorded)](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-noaudio) (AAA)

**Example techniques to consider:**

- All transcript, caption, and audio description techniques from the listed success criteria should be considered as appropriate, for example:
  -   [G69: Providing an alternative for time based   media](https://www.w3.org/TR/WCAG20-TECHS/G69)
  -   [G158: Providing an alternative for time-based media for   audio-only content](https://www.w3.org/TR/WCAG20-TECHS/G158)
  -   [G159: Providing an alternative for time-based media for   video-only content](https://www.w3.org/TR/WCAG20-TECHS/G159)
  -   [G93: Providing open (always visible)   captions](https://www.w3.org/TR/WCAG20-TECHS/G93)
  -   [G173: Providing a version of a movie with audio   descriptions](https://www.w3.org/TR/WCAG20-TECHS/G173)
- [G56: Mixing audio files so that non-speech sounds are at least 20 decibels lower than the speech audio content](https://www.w3.org/TR/WCAG20-TECHS/G56)

More techniques are listed under the success criteria for [Guideline 1.2 (Time-based Media)](https://www.w3.org/WAI/WCAG20/quickref/#media-equiv) and under [1.4.7 - Low or No Background Audio (Prerecorded)](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-noaudio) in "How to Meet WCAG 2.0".

**Literature review references:** [Vision decline with ageing](https://www.w3.org/TR/wai-age-literature/#whatvision) and [Hearing loss with age](https://www.w3.org/TR/wai-age-literature/#whathearing).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Text-to-speech (speech synthesis) {#speech}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Some older people use text-to-speech (speech synthesis) software, which is becoming increasingly available in browsers and operating systems.

**WCAG 2.0 success criteria:**

- [1.1.1 - Non-text Content](https://www.w3.org/WAI/WCAG20/quickref/#text-equiv-all) (A) says "a text alternative that serves the equivalent purpose" is required
- [1.3.1 - Info and Relationships](https://www.w3.org/WAI/WCAG20/quickref/#content-structure-separation-programmatic) (A) says "information, structure, and relationships" to be made available, for example to text-to-speech software

**Example techniques to consider:**

- [G94: Providing short text alternative for non-text content that serves the same purpose and presents the same information as the non-text content](https://www.w3.org/TR/WCAG20-TECHS/G94)
- [H44: Using label elements to associate text labels with form controls](https://www.w3.org/TR/WCAG20-TECHS/H44)
- [H42: Using h1-h6 to identify headings](https://www.w3.org/TR/WCAG20-TECHS/H42)

More techniques are listed under [1.1.1 - Non-text Content](https://www.w3.org/WAI/WCAG20/quickref/#text-equiv-all) and [1.3.1 - Info and Relationships](https://www.w3.org/WAI/WCAG20/quickref/#content-structure-separation-programmatic) in "How to Meet WCAG 2.0".

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### CAPTCHA {#captcha}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Older people with declining eyesight may not be able to discern the characters in a CAPTCHA, especially because CAPTCHAs often have low contrast and do not increase in size when users have text sized larger.

CAPTCHA stands for 'Completely Automated Public Turing tests to tell Computers and Humans Apart'. An example of CAPTCHA is:<br>![the letters 'c a p t c h a' are difficult to read because they are skewed and on a complex background]({{ "/content-images/older-users/captcha.png" | relative_url }})

**WCAG 2.0 success criteria:**

- [1.1.1 - Non-text Content](https://www.w3.org/WAI/WCAG20/quickref/#text-equiv-all) (A) includes a requirement for alternative CAPTCHAs

**Example techniques to consider:**

- [G143: Providing a text alternative that describes the purpose of the CAPTCHA](https://www.w3.org/TR/WCAG20-TECHS/G143) *AND* [G144: Ensuring that the Web Page contains another CAPTCHA serving the same purpose using a different modality](https://www.w3.org/TR/WCAG20-TECHS/G144)
- Providing more than two modalities of CAPTCHAs (future link)
- Providing access to a human customer service representative who can bypass CAPTCHA (future link)
- Not requiring CAPTCHAs for authorized users (future link)

**Literature review reference:** [Vision decline with ageing](https://www.w3.org/TR/wai-age-literature/#whatvision).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Operable user interface and navigation {#o}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Links {#links}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Many older people need links to be particularly clear and identifiable due to declining vision and cognition.

**WCAG 2.0 success criteria:**

- [2.4.4 - Link Purpose (In Context)](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-refs) (A) requires that the purpose of a link can be determined from the link text alone, or from the link text together with its surrounding context
- [2.4.9 - Link Purpose (Link Only)](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-link) (AAA) says "a mechanism is available to allow the purpose of each link to be identified from link text alone"
- [2.4.7 - Focus Visible](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-focus-visible) (AA) requires a visible keyboard focus indicator that shows what component on the web page has focus

**Example techniques to consider:**

- [G91: Providing link text that describes the purpose of a link](https://www.w3.org/TR/WCAG20-TECHS/G91)
- Limiting the number of links per page (future link)
- Making links visually distinct (future link)
- [G195: Using an author-supplied, highly visible focus indicator](https://www.w3.org/TR/WCAG20-TECHS/G195)
- Highlighting a link or control when the mouse hovers over it, or when it receives keyboard focus (future links)

More techniques are listed under [2.4.4 - Link Purpose (In Context)](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-refs), [2.4.9 - Link Purpose (Link Only)](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-link), and [2.4.7 - Focus Visible](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-focus-visible) in "How to Meet WCAG 2.0".

**Literature review reference:** [Previous approaches to ‘senior friendly’ Web guidelines](https://www.w3.org/TR/wai-age-literature/#existguide).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Navigation and location {#navigation}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Many older people need navigation to be particularly clear due to declining cognitive abilities.

**WCAG 2.0 success criteria:**

- [2.4.5 - Multiple Ways](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-mult-loc) (AA) says "more than one way is available to locate a Web page within a set of Web pages"
- [2.4.8 - Location](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-location) (AAA) says "information about the user's location within a set of Web pages is available"
- [2.4.2 - Page Titled](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-title) (A) says "web pages have titles that describe topic or purpose" (this is important for search results as the page title is usually displayed first in the listing)

**Example techniques to consider:**

- [G63: Providing a site map](https://www.w3.org/TR/WCAG20-TECHS/G63)
- [G161: Providing a search function to help users find content](https://www.w3.org/TR/WCAG20-TECHS/G161)
- [G88: Providing descriptive titles for Web pages](https://www.w3.org/TR/WCAG20-TECHS/G88) to help understand the results from Search based navigation
- [G65: Providing a breadcrumb trail](https://www.w3.org/TR/WCAG20-TECHS/G65)
- [G128: Indicating current location within navigation bars](https://www.w3.org/TR/WCAG20-TECHS/G128)
- Providing a link to the home page or main page (future link)

More techniques are listed under [2.4.5 - Multiple Ways](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-mult-loc), [2.4.8 - Location](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-location) and [2.4.2 - Page Titled](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-title) in "How to Meet WCAG 2.0".

**Literature review references:** [Previous approaches to ‘senior friendly’ Web guidelines](https://www.w3.org/TR/wai-age-literature/#existguide) and [Studies of elderly Web users’ specific disabilities - Cognition](https://www.w3.org/TR/wai-age-literature/#elderlyuserscog).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Mouse use {#mouse}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

It is difficult for some older people to use a mouse due to declining vision or dexterity.

**WCAG 2.0 success criteria:**

- [2.4.7 - Focus Visible](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-focus-visible) (AA) says that focus indicators should be visible
- [3.3.2 - Labels or Instructions](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-cues) (A) says that labels should be provided "when content requires user input"
- [1.1.1 - Text Alternatives](https://www.w3.org/WAI/WCAG20/quickref/#text-equiv) (A) says to provide "text alternatives for any non-text content" such as form controls
- [1.4.4 - Resize Text](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-scale) (AA) says that text should be resizable up to 200 percent

**Example techniques to consider:**

- Highlighting a link or control when the mouse hovers over it (future link)
- [G195: Using an author-supplied, highly visible focus indicator](https://www.w3.org/TR/WCAG20-TECHS/G195)
- [H44: Using label elements to associate text labels with form controls](https://www.w3.org/TR/WCAG20-TECHS/H44) which increases the clickable area for form controls
- Using real text with relative font size (e.g. [C12](https://www.w3.org/TR/WCAG20-TECHS/C12), [C14](https://www.w3.org/TR/WCAG20-TECHS/C14)) and avoiding the use of text in raster images (future link) as larger text is easy to click

More techniques are listed under [2.4.7 - Focus Visible](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-focus-visible), [3.3.2 - Labels or Instructions](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-cues), [1.1.1 - Text Alternatives](https://www.w3.org/WAI/WCAG20/quickref/#text-equiv) and [1.4.4 - Resize Text](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-scale) in "How to Meet WCAG 2.0".

**Literature review references:** [Motor skill diminishment](https://www.w3.org/TR/wai-age-literature/#whatmotor) and [Studies of elderly Web users’ specific disabilities - Mobility](https://www.w3.org/TR/wai-age-literature/#elderlyusersmobility).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Keyboard use and tabbing {#keyboard}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Some older people cannot use a mouse well or at all and instead use a keyboard.

**WCAG 2.0 success criteria:**

- [2.1.1 - Keyboard](https://www.w3.org/WAI/WCAG20/quickref/#keyboard-operation-keyboard-operable) (A) says "the content is operable through a keyboard interface"
- [2.1.2 - No Keyboard trap](https://www.w3.org/WAI/WCAG20/quickref/#keyboard-operation-trapping) (A) makes sure that keyboard focus "can be moved away from that component using only a keyboard"
- [2.1.3 - Keyboard (No Exception)](https://www.w3.org/WAI/WCAG20/quickref/#keyboard-operation-all-funcs) (AAA) says "all functionality of the content is operable through a keyboard interface"
- [2.4.1 - Bypass Blocks](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-skip) (A) says "a mechanism is available to bypass blocks of content that are repeated"
- [2.4.3 - Focus Order](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-focus-order) (A) says "components receive focus in an order that preserves meaning and operability"
- [2.4.7 - Focus Visible](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-focus-visible) (AA) requires an ability for the "keyboard focus indicator (to be) visible"

**Example techniques to consider:**

- [H91: Using HTML form controls and links](https://www.w3.org/TR/WCAG20-TECHS/H91) to ensure that users can use the form without the mouse
- [G90: Providing keyboard-triggered event handlers](https://www.w3.org/TR/WCAG20-TECHS/G90)
- [G1: Adding a link at the top of each page that goes directly to the main content area](https://www.w3.org/TR/WCAG20-TECHS/G1)
- [G59: Placing the interactive elements in an order that follows sequences and relationships within the content](https://www.w3.org/TR/WCAG20-TECHS/G59)
- [G195: Using an author-supplied, highly visible focus indicator](https://www.w3.org/TR/WCAG20-TECHS/G195)
- Providing a highly visible highlighting mechanism for links or controls when they receive keyboard focus (future link)

More techniques are listed under various success criteria for [Guideline 2.1 - Keyboard Accessible](https://www.w3.org/WAI/WCAG20/quickref/#keyboard-operation) and [Guideline 2.4 - Navigable](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms) in "How to Meet WCAG 2.0".

**Literature review references:** [Motor skill diminishment](https://www.w3.org/TR/wai-age-literature/#whatmotor) and [Studies of elderly Web users’ specific disabilities - Mobility](https://www.w3.org/TR/wai-age-literature/#elderlyusersmobility).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Distractions {#distractions}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Some older people are particularly distracted by any movement and sound on web pages.

**WCAG 2.0 success criteria:**

- [2.2.2 - Pause, Stop, Hide](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-pause) (A) says "a mechanism for the user to pause, stop, or hide" moving or blinking content
- [2.2.4 - Interruptions](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-postponed) (AAA) says "interruptions can be postponed or suppressed"
- [1.4.2 - Audio Control](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-dis-audio) (A) says "a mechanism is available to pause or stop the audio"

**Example techniques to consider:**

- [G4: Allowing the content to be paused and restarted from where it was paused](https://www.w3.org/TR/WCAG20-TECHS/G4)
- [G11: Creating content that blinks for less than 5 seconds](https://www.w3.org/TR/WCAG20-TECHS/G11)
- Providing the user with a means to stop moving content even if it stops automatically within 5 seconds (future link)
- [G76: Providing a mechanism to request an update of the content instead of updating automatically](https://www.w3.org/TR/WCAG20-TECHS/G76)
- [G60: Playing a sound that turns off automatically within three seconds](https://www.w3.org/TR/WCAG20-TECHS/G60)
- [G171: Playing sounds only on user request](https://www.w3.org/TR/WCAG20-TECHS/G171)

More techniques are listed under [2.2.2 - Pause, Stop, Hide](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-pause), [2.2.4 - Interruptions](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-postponed), and [1.4.2 - Audio Control](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-dis-audio) in "How to Meet WCAG 2.0".

**Literature review references:** [Cognitive decline with age](https://www.w3.org/TR/wai-age-literature/#whatcog) and [Studies of elderly Web users’ specific disabilities - Cognition.](https://www.w3.org/TR/wai-age-literature/#elderlyuserscog)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Sufficient time {#timing}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

It takes some older people longer to read text and complete transactions due to declining vision, dexterity, or cognition.

**WCAG 2.0 success criteria:**

- [2.2.1 - Timing Adjustment](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-required-behaviors) (A) says that users can turn off, adjust, or extend any time limits
- [2.2.3 - No Timing](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-no-exceptions) (AAA) says "timing is not an essential part of the event or activity presented by the content" (except for multimedia or real-time events)
- [2.2.2 - Pause, Stop, Hide](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-pause) (A) says that scrolling content should be able to be paused and that auto updating content can be also paused or controlled

**Example techniques to consider:**

- [G4: Allowing the content to be paused and restarted from where it was paused](https://www.w3.org/TR/WCAG20-TECHS/G4)
- [G198: Providing a way for the user to turn the time limit off](https://www.w3.org/TR/WCAG20-TECHS/G198)
- [SCR16: Providing a script that warns the user a time limit is about to expire](https://www.w3.org/TR/WCAG20-TECHS/SCR16) *and*\
[SCR1: Allowing the user to extend the default time limit](https://www.w3.org/TR/WCAG20-TECHS/SCR1)

More techniques are listed under [2.2.1 - Timing Adjustment](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-required-behaviors), [2.2.3 - No Timing](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-no-exceptions), and [2.2.2 - Pause, Stop, Hide](https://www.w3.org/WAI/WCAG20/quickref/#time-limits-pause) in "How to Meet WCAG 2.0".

**Literature review references:** [Cognitive decline with age](https://www.w3.org/TR/wai-age-literature/#whatcog) and [Studies of elderly Web users’ specific disabilities - Cognition.](https://www.w3.org/TR/wai-age-literature/#elderlyuserscog)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Understandable information and user interface {#u}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Page organization {#pageorg}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Many older people are inexperienced web users without advanced browsing habits and therefore read the whole page, so good page organization is important.

**WCAG 2.0 success criteria:**

- [2.4.6 - Headings and Labels](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-descriptive) (AA) says "headings and labels describe topic or purpose"
- [2.4.10 - Section Headings](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-headings) (AAA) says "section headings are used to organize the content"
- [1.4.8 - Visual](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-visual-presentation)[Presentation](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-visual-presentation) (AAA) includes techniques to help with text organization

**Example techniques to consider:**

- [G130: Providing descriptive headings](https://www.w3.org/TR/WCAG20-TECHS/G130)
- [G131: Providing descriptive labels](https://www.w3.org/TR/WCAG20-TECHS/G131)
- [G141: Organizing a page using headings](https://www.w3.org/TR/WCAG20-TECHS/G141)
- Using vertical (bulleted or numbered) lists rather than inline lists (future link)

More techniques are listed under [2.4.6 - Headings and Labels](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-descriptive), [2.4.10 - Section Headings](https://www.w3.org/WAI/WCAG20/quickref/#navigation-mechanisms-headings) and [1.4.8 - Visual](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-visual-presentation)[Presentation](https://www.w3.org/WAI/WCAG20/quickref/#visual-audio-contrast-visual-presentation) in "How to Meet WCAG 2.0".

**Literature review references:** [Cognitive decline with age](https://www.w3.org/TR/wai-age-literature/#whatcog) and [Previous approaches to ‘senior friendly’ Web guidelines](https://www.w3.org/TR/wai-age-literature/#existguide).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Understandable language {#language}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Many older people find it particularly difficult to understand complex sentences, unusual words, and technical jargon.

**WCAG 2.0 success criteria:**

- [3.1.3 - Unusual Words](https://www.w3.org/WAI/WCAG20/quickref/#meaning-idioms) (AAA) says "a mechanism is available for identifying specific definitions of words or phrases used in an unusual or restricted way"
- [3.1.4 - Abbreviations](https://www.w3.org/WAI/WCAG20/quickref/#meaning-located) (AAA) says "a mechanism for identifying the expanded form or meaning of abbreviations is available"
- [3.1.5 - Reading Level](https://www.w3.org/WAI/WCAG20/quickref/#meaning-supplements) (AAA) requires providing a version that "does not require reading ability more advanced than the lower secondary education level"

**Example techniques to consider:**

- Using the clearest and simplest language appropriate for the content (future link)
- [G102: Providing the expansion or explanation of an abbreviation](https://www.w3.org/TR/WCAG20-TECHS/G102)
- [G153: Making the text easier to read](https://www.w3.org/TR/WCAG20-TECHS/G153)

More techniques are listed under [3.1.3 - Unusual Words](https://www.w3.org/WAI/WCAG20/quickref/#meaning-idioms), [3.1.4 - Abbreviations](https://www.w3.org/WAI/WCAG20/quickref/#meaning-located) and [3.1.5 - Reading Level](https://www.w3.org/WAI/WCAG20/quickref/#meaning-supplements) in "How to Meet WCAG 2.0".

**Literature review references:** [Cognitive decline with age](https://www.w3.org/TR/wai-age-literature/#whatcog) and [Previous approaches to ‘senior friendly’ Web guidelines](https://www.w3.org/TR/wai-age-literature/#existguide).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Consistent navigation and labeling {#consistent}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

For people who are new to the web, and older people with some types of cognitive decline, consistent navigation and presentation is particularly important.

**WCAG 2.0 success criteria:**

- [3.2.3 - Consistent Navigation](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-consistent-locations) (AA) requires that navigation is presented in the same relative order across a website
- [3.2.4 - Consistent Identification](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-consistent-functionality) (AA) requires that components with similar functionality are identified consistently

**Example techniques to consider:**

- [G61: Presenting repeated components in the same relative order each time they appear](https://www.w3.org/TR/WCAG20-TECHS/G61)
- [G197: Using labels, names, and text alternatives consistently for content that has the same functionality](https://www.w3.org/TR/WCAG20-TECHS/G197)

More techniques are listed under [3.2.3 - Consistent Navigation](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-consistent-locations) and [3.2.4 - Consistent Identification](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-consistent-functionality) in "How to Meet WCAG 2.0".

**Literature review references:** [Cognitive decline with age](https://www.w3.org/TR/wai-age-literature/#whatcog) and [Previous approaches to ‘senior friendly’ Web guidelines](https://www.w3.org/TR/wai-age-literature/#existguide).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Pop-ups and new windows {#popups}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Some older people experiencing cognitive decline can be confused or distracted by pop-ups, new windows, or new tabs.

**WCAG 2.0 success criteria:**

- [3.2.1 - On Focus](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-receive-focus) (A) says "when any component receives focus, it does not initiate a change of context"
- [3.2.5 - Change on Request](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-no-extreme-changes-context) (AAA) says "changes of context are initiated only by user request or a mechanism is available to turn off such changes"

**Example techniques to consider:**

- Giving users advanced warning when opening a new window (future link)
- [G107: Using "activate" rather than "focus" as a trigger for changes of context](https://www.w3.org/TR/WCAG20-TECHS/G107)
- Opening new windows only when best from an accessibility perspective (future link)
- [SCR24: Using progressive enhancement to open new windows on user request](https://www.w3.org/TR/WCAG20-TECHS/SCR24)
- Opening new windows by providing normal hyperlinks without the target attribute (future link), because many user agents allow users to open links in a new window or tab

More techniques are listed under [3.2.1 - On Focus](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-receive-focus) and [3.2.5 - Change on Request](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-no-extreme-changes-context) in "How to Meet WCAG 2.0".

**Literature review reference:** [Training the elderly to Use ICT and the Web](https://www.w3.org/TR/wai-age-literature/#training)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Page refresh and updates {#refresh}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

Some older people with declining vision or cognition can miss content that automatically updates or refreshes in a page.

**WCAG 2.0 success criteria:**

- [3.2.1 - On Focus](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-receive-focus) (A) says "when any component receives focus, it does not initiate a change of context"
- [3.2.2 - On Input](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-unpredictable-change) (A) says that changing a setting does not automatically change the context unless the user has been advised beforehand
- [3.2.5 - Change on Request](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-no-extreme-changes-context) (AAA) says "changes of context are initiated only by user request or a mechanism is available to turn off such changes"

**Example techniques to consider:**

- [G80: Providing a submit button to initiate a change of context](https://www.w3.org/TR/WCAG20-TECHS/G80)
- [G13: Describing what will happen before a change to a form control that causes a change of context to occur is made](https://www.w3.org/TR/WCAG20-TECHS/G13)
- [G107: Using "activate" rather than "focus" as a trigger for changes of context](https://www.w3.org/TR/WCAG20-TECHS/G107)
- Not causing persistent changes of state or value when a component receives focus, or providing an alternate means to reset any changes (future link)
- [G76: Providing a mechanism to request an update of the content instead of updating automatically](https://www.w3.org/TR/WCAG20-TECHS/G76)
- [SCR19: Using an onchange event on a select element without causing a change of context](https://www.w3.org/TR/WCAG20-TECHS/SCR19)

More techniques are listed under [3.2.1 - On Focus](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-receive-focus), [3.2.2 - On Input](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-unpredictable-change) and [3.2.5 - Change on Request](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-no-extreme-changes-context) in "How to Meet WCAG 2.0".

**Literature review reference:** [Studies of elderly Web users’ specific disabilities - Cognition](https://www.w3.org/TR/wai-age-literature/#elderlyuserscog)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Instructions and input assistance {#instructions}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

It is difficult for some older people to understand the requirements of forms and transactions.

**WCAG 2.0 success criteria:**

- [3.3.2 - Labels or Instructions](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-identified) (A) says "labels or instructions are provided when content requires user input"
- [3.3.5 - Help](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-context-help) (AAA) says "context-sensitive help is available"
- [3.2.4 - Consistent Identification](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-consistent-functionality) (AA) says "components that have the same functionality within a set of Web pages are identified consistently"

**Example techniques to consider:**

- [G184: Providing text instructions at the beginning of a form or set of fields that describes the necessary input](https://www.w3.org/TR/WCAG20-TECHS/G184)
- Providing linear form design and grouping similar items (future link)
- [G194: Providing spell checking and suggestions for text input](https://www.w3.org/TR/WCAG20-TECHS/G194)
- [G89: Providing expected data format and example](https://www.w3.org/TR/WCAG20-TECHS/G89)
- [G197: Using labels, names, and text alternatives consistently for content that has the same functionality](https://www.w3.org/TR/WCAG20-TECHS/G197)

More techniques are listed under the success criteria for [3.3.2 - Labels or Instructions](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-identified), [3.3.5 - Help](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-context-help) and [3.2.4 - Consistent Identification](https://www.w3.org/WAI/WCAG20/quickref/#consistent-behavior-consistent-functionality) in "How to Meet WCAG 2.0".

**Literature review reference:** [Aspects of Web Design affecting the elderly - Forms](https://www.w3.org/TR/wai-age-literature/#designforms).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Error prevention and recovery for forms {#errors}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}

It is difficult for some older people to use forms and complete transactions due to declining cognitive abilities.

**WCAG 2.0 success criteria:**

- [3.3.4 - Error Prevention (Legal, Financial, Data)](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-reversible) (AA) says that pages with legal commitments or financial transactions have reversible submissions and can be checked and corrected
- [3.3.6 - Error Prevention (All)](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-context-help) (AAA) says that users can check and correct any information they submit
- [3.3.1 - Error Identification](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-identified) (A) says "if an input error is automatically detected, the item that is in error is identified and the error is described to the user"
- [3.3.3 - Error Suggestion](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-suggestions) (AA) says "if an input error is automatically detected and suggestions for correction are known, then the suggestions are provided to the user"

**Example techniques to consider:**

- [G98: Providing the ability for the user to review and correct answers before submitting](https://www.w3.org/TR/WCAG20-TECHS/G98)
- Accepting input data in a variety of formats (future link)
- Informing the user what irreversible action is about to happen (future link)
- Making error messages easy to understand and distinguishable from other text in the Web page (future link)
- [G83: Providing text descriptions to identify required fields that were not completed](https://www.w3.org/TR/WCAG20-TECHS/G83)
- [G85: Providing a text description when user input falls outside the required format or values](https://www.w3.org/TR/WCAG20-TECHS/G85)
- [G139: Creating a mechanism that allows users to jump to errors](https://www.w3.org/TR/WCAG20-TECHS/G139)
- Re-displaying a form with a summary of errors (future link)
- [G177: Providing suggested correction text](https://www.w3.org/TR/WCAG20-TECHS/G177)
- Providing a text description that contains information about the number of input errors, suggestions for corrections to each item, and instructions on how to proceed (future link)

More techniques are listed under the success criteria for [Guideline 3.3 - Input Assistance](https://www.w3.org/WAI/WCAG20/quickref/#minimize-error-reversible) in "How to Meet WCAG 2.0".

**Literature review reference:** [Aspects of Web Design affecting the elderly - Forms](https://www.w3.org/TR/wai-age-literature/#designforms).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Robust content and reliable interpretation {#r}

{::nomarkdown}
{% capture boxtitle %}
{:/}
#### Older equipment/software {#oldequip}
{::nomarkdown}
{% endcapture %}
{% include box.html type="start" title=boxtitle class="large" %}
{:/}


Some older people will be using older browsers that might not be as capable or fault tolerant as current releases.

**WCAG 2.0 success criteria:**

- [4.1.1 - Parsing](https://www.w3.org/WAI/WCAG20/quickref/#ensure-compat-parses) (A) requires that markup is used correctly according to specification

**Example techniques to consider:**

- [G134: Validating Web pages](https://www.w3.org/TR/WCAG20-TECHS/G134)
- [G192: Fully conforming to specifications](https://www.w3.org/TR/WCAG20-TECHS/G192)

More techniques are listed under [4.1.1 - Parsing](https://www.w3.org/WAI/WCAG20/quickref/#ensure-compat-parses) in "How to Meet WCAG 2.0".

{::nomarkdown}
{% include box.html type="end" %}
{:/}
