---
title: "Shared Web Experiences: Barriers Common to Mobile Device Users and People with Disabilities"
title_html: "Shared Web Experiences:<br>Barriers Common to Mobile Device Users and People with Disabilities"
lang: en
permalink: /standards-guidelines/shared-experiences/
github:
  label: wai-shared-experiences
doc-note-type: archived
doc-note-message: >
  <p><strong>If you want current information on <em>mobile accessibility</em> &mdash; that is, people with disabilities using content on mobile devices, see <a  href="https://www.w3.org/WAI/mobile/">https://www.w3.org/WAI/mobile/</a></strong></p>
  <p>This page is archived. We do not plan to update it. It was developed in 2008. Much of the information is still relevant today. It is useful for understanding that:</p>
  <ul>
    <li>Many of the issues around designing for mobile devices are addressed by designing for people with disabilities.</li>
    <li>When you address accessibility, you improve the mobile experience. This can help in presenting your business case for accessibility.</li>
  </ul>
footer: >
  <p><strong>Date: Archived.</strong>  Updated 22 January 2013. First published January 2008.</p>
  <p><strong>Editors:</strong> <a href="http://www.w3.org/People/Shawn/"></a>Yeliz Yesilada (University of Manchester), Alan Chuter (Fundación ONCE), and <a href="http://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> (W3C WAI).</p>
  <p>Developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>) with the Mobile Web Best Practices Working Group (<a href="http://www.w3.org/2005/MWI/BPWG/">MWI BPWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page describes many of the barriers that people with disabilities
and people using mobile devices experience when interacting with web
content, including web applications. It shows how these **barriers are
similarly addressed in [W3C](http://www.w3.org/)'s Web Content
Accessibility Guidelines (WCAG), Mobile Web Best Practices, and Mobile
Web Application Best Practices.**

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Background

People with disabilities using computers have similar interaction
limitations as people without disabilities who are using mobile devices.
Both experience similar barriers when interacting with websites and web
applications. There is also significant overlap between the design
solutions for both. For more background, see:

-   An introduction to the overlap between W3C guidelines for
    accessibility and best practices for mobile devices: [Web Content
    Accessibility and Mobile Web: Making a Website Accessible Both for
    People with Disabilities and for Mobile
    Devices](http://www.w3.org/WAI/mobile/overlap)
-   [Introduction to Web
    Accessibility](http://www.w3.org/WAI/intro/accessibility.php)
-   [How People with Disabilities Use the
    Web](http://www.w3.org/WAI/intro/people-use-web.php)

A comprehensive comparison between MWBP and WCAG is provided in
[Relationship between Mobile Web Best Practices (MWBP) and Web Content
Accessibility Guidelines (WCAG)](http://www.w3.org/TR/mwbp-wcag/).

## Introduction

The barriers on this page are grouped under four principles:
perceivable, operable, understandable and robust. These principles lay
the foundation necessary for anyone to access and use web content, as
described in [Understanding the Four Principles of
Accessibility](http://www.w3.org/TR/UNDERSTANDING-WCAG20/intro.html#introduction-fourprincs-head)
section of Introduction to Understanding WCAG 2.0. (Mobile devices vary
widely and not all the barriers are present on all models.)

This page includes links to some relevant solutions in:

-   [Web Content Accessibility Guidelines (WCAG)
    2.0](http://www.w3.org/TR/WCAG20/)
-   [Web Content Accessibility Guidelines (WCAG)
    1.0](http://www.w3.org/TR/WCAG10/) ***Note:* [W3C WAI recommends
    using WCAG 2.0]({{ "/standards-guidelines/wcag/" | relative_url }}#version), instead
    of WCAG 1.0.**
-   [Mobile Web Best Practices 1.0](http://www.w3.org/TR/mobile-bp/)
-   [Mobile Web Application Best Practices](http://www.w3.org/TR/mwabp/)

**The information below is also available in [tabular
format](experiences-table.html).**

## Contents

-   **[Perceivable](#perceivable)**
    -   [Information conveyed solely with color](#color)
    -   [Large pages or large images](#image)
    -   [Multimedia with no captions](#multimedia)
    -   [Audio-only prompts (beeps) for important information (warnings,
        errors)](#prompts)
    -   [Non-text objects (images, sound, video) with no text
        alternative](#non-text)
    -   [Text entry](#text-entry)
    -   [Content formatted using tables or CSS, and reading order not
        correct when linearized (for example when CSS or tables not
        rendered)](#table)
    -   [Information conveyed only using CSS (visual
        formatting)](#visual-formatting)
-   **[Operable](#operable)**
    -   [Mouse required for interaction and navigation](#mouse)
    -   [Scripting required to operate content](#script)
    -   [Special plugin required](#plugin)
    -   [Missing or inappropriate page title](#title)
    -   [Inconsistency between focus (tab) order and logical document
        content sequence](#tab)
    -   [Non descriptive link label](#link-label)
-   **[Understandable](#understandable)**
    -   [Long words, long and complex sentences, jargon](#complex)
    -   [Content spawning new windows without warning user](#popups)
    -   [Blinking, moving, scrolling or auto-updating content](#dynamic)
-   **[Robust](#robust)**
    -   [Invalid or unsupported markup](#markup)
    -   [Scripting required to generate content](#script-generate)

## Perceivable

Information and user interface components must be presentable to users
in ways they can perceive.

Experiences discussed below are also available in [tabular
format](experiences-table.html#perceivable_section).

{::nomarkdown}
{% include box.html type="start" title="Information conveyed solely with color" id="color" class="large" h="3" %}
{:/}

User perceives color incorrectly or not at all, and so misses or
misunderstands information or makes mistakes.

**Disabilities Context:** User who is blind or colorblind perceives
color incorrectly or not at all.

-   WCAG 2.0 success criteria: [1.4.1 Use of
    Color](http://www.w3.org/TR/WCAG20/#visual-audio-contrast-without-color),
-    [1.3.1 Info and
    Relationships](http://www.w3.org/TR/WCAG20/#content-structure-separation-programmatic),
-    [1.4.3 Contrast
    (Minimum)](http://www.w3.org/TR/WCAG20/#visual-audio-contrast-contrast)
    and
-    [1.4.6 Contrast
    (Enhanced)](http://www.w3.org/TR/WCAG20/#visual-audio-contrast7).
{:.inline}

-   WCAG 1.0 checkpoint:
    [2.1](http://www.w3.org/TR/WAI-WEBCONTENT/wai-pageauth.html#tech-color-convey)
    and
-    [2.2](http://www.w3.org/TR/WAI-WEBCONTENT/wai-pageauth.html#tech-color-contrast).
{:.inline.wcag1}

**Mobile Context:** Many screens have limited color palette and color
difference is not presented. Device is used in poor lighting (for
example, outdoors), so colors are not clearly perceived.

-   MWBP 1.0 Best Practice:
    [USE\_OF\_COLOR](http://www.w3.org/TR/mobile-bp/#USE_OF_COLOR) and
-   [COLOR\_CONTRAST](http://www.w3.org/TR/mobile-bp/#COLOR_CONTRAST).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Large pages or large images" id="image" class="large" h="3" %}
{:/}

User only sees small areas at a time, is unable to relate different
areas of a page, and so becomes disoriented or has to scroll
excessively. Additionally, user cannot access picture details because
the picture is shrunk.

**Disabilities Context:** User with restricted field of vision or using
screen magnifier gets only small part of page or image at a time.

-   WCAG 2.0 Success Criteria: [1.4.8 Visual
    Presentation](http://www.w3.org/TR/WCAG20/#visual-audio-contrast-visual-presentation).
{:.inline}

-   WCAG 1.0 checkpoint:
    [12.3](http://www.w3.org/TR/WAI-WEBCONTENT/wai-pageauth.html#tech-group-information).
{:.inline.wcag1}

**Mobile Context:** Mobile device has small screen (viewport).

-   MWBP 1.0 Best Practice:
    [PAGE\_SIZE\_USABLE](http://www.w3.org/TR/mobile-bp/#PAGE_SIZE_USABLE) and
-   [SCROLLING](http://www.w3.org/TR/mobile-bp/#SCROLLING).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Multimedia with no captions" id="multimedia" class="large" h="3" %}
{:/}

User misses auditory information.

**Disabilities Context:** User who is deaf or hard of hearing cannot
hear.

-   WCAG 2.0 Success Criteria: [1.2.2 Captions
    (Prerecorded)](http://www.w3.org/TR/WCAG20/#media-equiv-captions),
    [1.2.4 Captions
    (Live)](http://www.w3.org/TR/WCAG20/#media-equiv-real-time-captions)
    and [1.2.8 Media Alternative
    (Prerecorded)](http://www.w3.org/TR/WCAG20/#media-equiv-text-doc).
{:.inline}

-   WCAG 1.0 checkpoint:
    [1.1](http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-text-equivalent)
    and
-    [1.4](http://www.w3.org/TR/WCAG10#tech-synchronize-equivalents).
{:.inline.wcag1}

**Mobile Context:** Mobile users often turn off sound in public places
(trains, hotel lobbies); or often cannot hear in noisy places (streets,
nightclubs).

-   MWBP 1.0 Best Practice:
    [NON-TEXT-ALTERNATIVES](http://www.w3.org/TR/mobile-bp/#NON-TEXT_ALTERNATIVES).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Audio-only prompts (beeps) for important information (warnings, errors)" id="prompts" class="large" h="3" %}
{:/}

User cannot operate or interact correctly with content, misses prompts,
makes mistakes.

**Disabilities Context:** User who is deaf or hard of hearing cannot
perceive content.

-   WCAG 2.0 Success Criteria: [1.2.1 Audio-only and Video-only
    (Prerecorded)](http://www.w3.org/TR/WCAG20/#media-equiv-av-only-alt)
{:.inline}

-   WCAG 1.0 checkpoint:
    [1.1](http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-text-equivalent)
    and
-    [1.4](http://www.w3.org/TR/WCAG10#tech-synchronize-equivalents).
{:.inline.wcag1}

**Mobile Context:** Users often cannot hear in noisy (street, nightclub)
or in public places (trains, hotel lobbies).

-   MWBP 1.0 Best Practice:
    [NON\_TEXT\_ALTERNATIVES](http://www.w3.org/TR/mobile-bp/#NON-TEXT_ALTERNATIVES).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Non-text objects (images, sound, video) with no text alternative" id="non-text" class="large" h="3" %}
{:/}

User cannot perceive important information or loses information due to
lack of alternative.

**Disabilities Context:** User who is blind cannot perceive content that
include non-text objects. Furthermore, information not available to user
whose browser, assistive technology, other user agent doesn't support
object.

-   WCAG 2.0 Success Criteria: [1.1.1 Non-text
    content](http://www.w3.org/TR/WCAG20/#text-equiv-all).
{:.inline}

-   WCAG 1.0 checkpoint:
    [1.1](http://www.w3.org/TR/WAI-WEBCONTENT-TECHS/#tech-text-equivalent).
{:.inline.wcag1}

**Mobile Context:** User can be billed for download volume so images
might be turned off to save costs. Some mobile user agents have limited
support for non-text objects so user loses information. Some user agents
also shrunk images in size to fit the device's screen which can make
images meaningless.

-   MWBP 1.0 Best Practice:
    [NON\_TEXT\_ALTERNATIVES](http://www.w3.org/TR/mobile-bp/#NON-TEXT_ALTERNATIVES)
    and
    [OBJECTS\_OR\_SCRIPT](http://www.w3.org/TR/mobile-bp/#OBJECTS_OR_SCRIPT).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title=" Text entry" id=" text-entry " class="large" h="3" %}
{:/}

User has difficulty entering text so text is entered incorrectly or
mistakes are made.

**Disabilities Context:** User with motor disability (for example,
partial paralysis, hand tremor, lack of sensitivity, coordination) has
difficulty entering information.

-   WCAG 2.0 Guideline: [3.3 Input Assistance: Help users avoid and
    correct mistakes](http://www.w3.org/TR/WCAG20/#minimize-error).
{:.inline}

**Mobile Context:** Device has small keypad which has limited
functionality compared to a full keyboard, or is held in an unsteady
hand.

-   MWBP 1.0 Best Practice:
    [MINIMIZE\_KEYSTROKES](http://www.w3.org/TR/mobile-bp/#MINIMIZE_KEYSTROKES),
-    [PROVIDE\_DEFAULTS](http://www.w3.org/TR/mobile-bp/#PROVIDE_DEFAULTS)
    and
-    [DEFAULT\_INPUT\_MODE](http://www.w3.org/TR/mobile-bp/#DEFAULT_INPUT_MODE).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Content formatted using tables or CSS, and reading order not correct when linearized (for example when CSS or tables not rendered)" id="table" class="large" h="3" %}
{:/}

User cannot understand the content correctly when it's presented in a
linear order.

**Disabilities Context:** User who is blind reads content in document
tree order.

-   WCAG 2.0 Success Criteria: [1.3.2 Meaningful
    Sequence](http://www.w3.org/TR/WCAG20/#content-structure-separation-sequence).
{:.inline}

-   WCAG 1.0 checkpoint:
    [5.3](http://www.w3.org/TR/WCAG10#tech-avoid-table-for-layout) and
-    [5.4](http://www.w3.org/TR/WCAG10#tech-table-layout).
{:.inline.wcag1}

**Mobile Context:** Meaning of content can be changed because of
reformatting or restructuring in adaptation process.

-   MWBP 1.0 Best Practice:
    [TABLES\_LAYOUT](http://www.w3.org/TR/mobile-bp/#TABLES_LAYOUT),
    [TABLES\_NESTED](http://www.w3.org/TR/mobile-bp/#TABLES_NESTED) and
    [TABLES\_ALTERNATIVES](http://www.w3.org/TR/mobile-bp/#TABLES_ALTERNATIVES).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Information conveyed only using CSS (visual formatting)" id="visual-formatting" class="large" h="3" %}
{:/}

User is unable to access information encoded in visual formatting or in
CSS.

**Disabilities Context:** User who is blind doesn't perceive visual
formatting effects.

-   WCAG 2.0 Success Criteria: [1.3.1 Info and
    relationship](http://www.w3.org/TR/WCAG20/#content-structure-separation-programmatic).
{:.inline}

-   WCAG 1.0 checkpoint:
    [6.1](http://www.w3.org/TR/WCAG10#tech-order-style-sheets).
{:.inline.wcag1}

**Mobile Context:** Often no or limited CSS support or diverging CSS
support by mobile browser.

-   MWBP 1.0 Best Practice:
    [STYLE\_SHEETS\_SUPPORT](http://www.w3.org/TR/mobile-bp/#STYLE_SHEETS_SUPPORT).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Operable
--------

User interface components and navigation must be operable.

Experiences discussed below are also available in [tabular
format](experiences-table.html#operable_section).

{::nomarkdown}
{% include box.html type="start" title="Mouse required for interaction and navigation" id="mouse" class="large" h="3" %}
{:/}

User is unable to navigate all content, or wastes time moving through
numerous links.

**Disabilities Context:** Some users with a motor disability cannot use
a mouse. Users who are blind also do not use the mouse.

-   WCAG 2.0 Guideline: [2.1 Keyboard
    Accessible](http://www.w3.org/TR/WCAG20/#keyboard-operation).
{:.inline}

-   WCAG 1.0 checkpoint:
    [6.3](http://www.w3.org/TR/WCAG10#tech-scripts),
-    [6.4](http://www.w3.org/TR/WCAG10#tech-keyboard-operable-scripts),
-    [6.5](http://www.w3.org/TR/WCAG10#tech-fallback-page) and
-    [8.1](http://www.w3.org/TR/WCAG10#tech-directly-accessible).
{:.inline.wcag1}

**Mobile Context:** Device has no mouse, only alphanumeric keypad or
joystick.

-   MWBP 1.0 Best Practice:
    [OBJECTS\_OR\_SCRIPT](http://www.w3.org/TR/mobile-bp/#OBJECTS_OR_SCRIPT),
    [IMAGE\_MAPS](http://www.w3.org/TR/mobile-bp/#IMAGE_MAPS),
    [NAVBAR](http://www.w3.org/TR/mobile-bp/#NAVBAR),
    [BALANCE](http://www.w3.org/TR/mobile-bp/#BALANCE) and
    [ACCESS\_KEYS](http://www.w3.org/TR/mobile-bp/#ACCESS_KEYS).
-   MWABP Best Practice: [3.5.3 Design for Multiple Interaction
    Methods](http://www.w3.org/TR/mwabp/#bp-presentation-interaction).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Scripting required to operate content" id="script" class="large" h="3" %}
{:/}

User cannot operate the content so loses some information.

**Disabilities Context:** User's assistive technology or browser doesn't
support scripting.

-   WCAG 2.0 Conformance Requirement: [Conformance Requirement 4: Only
    Accessibility-Supported Ways of Using
    Technologies](http://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance.html#cc4)
    and
-    [Conformance Requirement 5:
    Non-Interference](http://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance.html#cc5).
{:.inline}

-   WCAG 1.0 checkpoint:
    [6.3](http://www.w3.org/TR/WCAG10#tech-scripts),
-    [6.4](http://www.w3.org/TR/WCAG10#tech-keyboard-operable-scripts),
-   [6.5](http://www.w3.org/TR/WCAG10#tech-fallback-page) and
-    [8.1](http://www.w3.org/TR/WCAG10#tech-directly-accessible).
{:.inline.wcag1}

**Mobile Context:** Scripting turned off or not supported.

-   MWBP 1.0 Best Practice:
    [OBJECTS\_OR\_SCRIPT](http://www.w3.org/TR/mobile-bp/#OBJECTS_OR_SCRIPT).
-   MWABP Best Practice: [3.6.4 Support a non-JavaScript Variant if
    Appropriate](http://www.w3.org/TR/mwabp/#bp-devcap-scripting-support).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Special plugin required" id="plugin" class="large" h="3" %}
{:/}

User can not perceive content or can not operate interface.

**Disabilities Context:** Plugin turned off, or not installed, or not
compatible with assistive technology. Plugin not operable with preferred
input device.

-   WCAG 2.0 Success Criteria: [2.1.1
    Keyboard](http://www.w3.org/TR/WCAG20/#keyboard-operation-keyboard-operable)
    and
-    [2.1.3 Keyboard (No
    Exception)](http://www.w3.org/TR/WCAG20/#keyboard-operation-all-funcs)
{:.inline}

-   WCAG 1.0 checkpoint:
    [11.1](http://www.w3.org/TR/WCAG10#tech-latest-w3c-specs).
{:.inline.wcag1}

**Mobile Context:** Plugin turned off, or not installed, or not
available; not compatible with input device (for example, requires
mouse).

-   MWBP 1.0 Best Practice:
    [OBJECTS\_OR\_SCRIPT](http://www.w3.org/TR/mobile-bp/#OBJECTS_OR_SCRIPT).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Missing or inappropriate page title" id="title" class="large" h="3" %}
{:/}

User cannot easily scan to get an overview because of missing,
inappropriate, or long page title.

**Disabilities Context:** User who is blind typically uses a screen
reader feature to get a list of the currently open windows, by window
title. Therefore, if the page title is long, inappropriate or missing,
user cannot perceive the content.

-   WCAG 2.0 Success Criteria: [2.4.2 Page
    titled](http://www.w3.org/TR/WCAG20/#navigation-mechanisms-title).
{:.inline}

-   WCAG 1.0 checkpoint:
    [13.2](http://www.w3.org/TR/WCAG10#tech-use-metadata).
{:.inline.wcag1}

**Mobile Context:** Page title truncated to fit narrow viewport of
mobile device.

-   MWBP 1.0 Best Practice:
    [PAGE\_TITLE](http://www.w3.org/TR/mobile-bp/#PAGE_TITLE).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Inconsistency between focus (tab) order and logical document content sequence" id="tab" class="large" h="3" %}
{:/}

User is unable to navigate content in logical sequence, becomes
disoriented.

**Disabilities Context:** User with motor disability uses keyboard for
navigation not mouse. User who is blind also often use tab navigation to
move from one element to another.

-   WCAG 2.0 Success Criteria: [2.4.3 Focus
    order](http://www.w3.org/TR/WCAG20/#navigation-mechanisms-focus-order).
{:.inline}

-   WCAG 1.0 checkpoint:
    [9.4](http://www.w3.org/TR/WCAG10#tech-tab-order).
{:.inline.wcag1}

**Mobile Context:** Mobile devices may not have a pointing device so the
user may have to navigate elements serially.

-   MWBP 1.0 Best Practice:
    [TAB\_ORDER](http://www.w3.org/TR/mobile-bp/#TAB_ORDER).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Non descriptive link label" id="link-label" class="large" h="3" %}
{:/}

User cannot determine to follow or not to follow a link because the link
label is not descriptive enough.

**Disabilities Context:** User can not determine purpose of a link when
read out of context. User who is blind often accesses a list of links on
a page without the context around them.

-   WCAG 2.0 Success Criteria: [2.4.4 Link Purpose (In
    Context)](http://www.w3.org/TR/WCAG20/#navigation-mechanisms-refs)
    and
-    [2.4.4 Link Purpose (Link
    only)](http://www.w3.org/TR/WCAG20/#navigation-mechanisms-link).
{:.inline}

-   WCAG 1.0 checkpoint:
    [13.1](http://www.w3.org/TR/WCAG10#tech-meaningful-links).
{:.inline.wcag1}

**Mobile Context:** User can not determine purpose of link.

-   MWBP 1.0 Best Practice:
    [LINK\_TARGET\_ID](http://www.w3.org/TR/mobile-bp/#LINK_TARGET_ID)
    and
    [LINK\_TARGET\_FORMAT](http://www.w3.org/TR/mobile-bp/#LINK_TARGET_FORMAT).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Understandable
--------------

Information and the operation of user interface must be understandable.

Experiences discussed below are also available in [tabular
format](experiences-table.html#understandable_section).

{::nomarkdown}
{% include box.html type="start" title="Long words, long and complex sentences, jargon" id="complex" class="large" h="3" %}
{:/}

User has difficulty understanding information.

**Disabilities Context:** Users with some types of cognitive
disabilities have difficulty processing information. Users who are deaf
and whose native language is sign, have difficulty processing complex
written language.

-   WCAG 2.0 Success Criteria: [3.1.5 Reading
    level](http://www.w3.org/TR/WCAG20/#meaning-supplements).
{:.inline}

-   WCAG 1.0 checkpoint:
    [14.1](http://www.w3.org/TR/WCAG10#tech-simple-and-straightforward).
{:.inline.wcag1}

**Mobile Context:** Text is displayed in small font, and user is often
distracted by ambient conditions (background noise, conversations,
moving objects in field of vision).

-   MWBP 1.0 Best Practice:
    [SUITABLE](http://www.w3.org/TR/mobile-bp/#SUITABLE) and
-    [CLARITY](http://www.w3.org/TR/mobile-bp/#CLARITY).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Content spawning new windows without warning user" id="popups" class="large" h="3" %}
{:/}

User becomes disoriented among windows; back button doesn't work. User
closes window, not realizing it is last in stack, closing browser
instance.

**Disabilities Context:** User with low vision, or restricted field of
vision, or blindness, or cognitive disabilities doesn't realize active
window is new.

-   WCAG 2.0 Success Criteria: [3.1.2 On
    focus](http://www.w3.org/TR/WCAG20/#consistent-behavior-receive-focus),
-    [3.2.2 On
    input](http://www.w3.org/TR/WCAG20/#consistent-behavior-unpredictable-change)
    and
-    [3.2.5 Change on
    request](http://www.w3.org/TR/WCAG20/#consistent-behavior-no-extreme-changes-context).
{:.inline}

-   WCAG 1.0 checkpoint:
    [10.1](http://www.w3.org/TR/WCAG10#tech-avoid-pop-ups).
{:.inline.wcag1}

**Mobile Context:** Single window interface. Multiple stacked windows on
small screen hide each other.

-   MWBP 1.0 Best Practice:
    [POP\_UPS](http://www.w3.org/TR/mobile-bp/#POP_UPS).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Blinking, moving, scrolling or auto-updating content" id="dynamic" class="large" h="3" %}
{:/}

User has difficulty reading and comprehending content.

**Disabilities Context:** People with reading disabilities, cognitive
limitations, and learning disabilities do not have sufficient time to
read or comprehend information.

-   WCAG 2.0 Success Criteria: [2.2.2 Pause, Stop,
    Hide](http://www.w3.org/TR/WCAG20/#time-limits-pause) and [3.2.5
    Change on
    request](http://www.w3.org/TR/WCAG20/#consistent-behavior-no-extreme-changes-context).
{:.inline}

-   WCAG 1.0 checkpoint:
    [7.4](http://www.w3.org/TR/WCAG10#tech-no-periodic-refresh) and
-   [7.5](http://www.w3.org/TR/WCAG10#tech-no-auto-forward).
{:.inline.wcag1}

**Mobile Context:** Reduced size of mobile viewport or poor ambient
lighting makes it difficult to see content. Auto-refreshed pages may
also have cost implications if they are left open or put unnoticed into
the background.

-   MWBP 1.0 Best Practice:
    [AUTO\_REFRESH](http://www.w3.org/TR/mobile-bp/#AUTO_REFRESH) and
    [IMAGES\_SPECIFY\_SIZE](http://www.w3.org/TR/mobile-bp/#IMAGES_SPECIFY_SIZE).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Robust
------

Content must be robust enough that it can be interpreted reliably by a
wide variety of user agents, including assistive technologies.

Experiences discussed below are also available in [tabular
format](experiences-table.html#robust_section).

{::nomarkdown}
{% include box.html type="start" title="Invalid or unsupported markup" id="markup" class="large" h="3" %}
{:/}

User cannot access the content because browser or adaptation system
chokes on markup or rejects or garbles it.

**Disabilities Context:** User's assistive technology or browser cannot
handle markup.

-   WCAG 2.0 Success Criteria: [4.1.1
    Parsing](http://www.w3.org/TR/WCAG20/#ensure-compat-parses).
{:.inline}

-   WCAG 1.0 checkpoint:
    [3.2](http://www.w3.org/TR/WCAG10#tech-identify-grammar),
-    [11.1](http://www.w3.org/TR/WCAG10#tech-latest-w3c-specs) and
-    [11.2](http://www.w3.org/TR/WCAG10#tech-avoid-deprecated).
{:.inline.wcag1}

**Mobile Context:** Some older mobile browsers do not display content
with invalid markup.

-   MWBP 1.0 Best Practice:
    [VALID\_MARKUP](http://www.w3.org/TR/mobile-bp/#VALID_MARKUP).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Scripting required to generate content" id="script-generate" class="large" h="3" %}
{:/}

User cannot access the content so loses some information because
scripting is not supported by the user agent.

**Disabilities Context:** User's assistive technology or browser doesn't
support scripting.

-   WCAG 2.0 Success Criteria: [Understanding Guideline
    4.1](http://www.w3.org/TR/UNDERSTANDING-WCAG20/ensure-compat.html)
{:.inline}

-   WCAG 1.0 checkpoint:
    [6.3](http://www.w3.org/TR/WCAG10#tech-scripts).
{:.inline.wcag1}

**Mobile Context:** Scripting turned off or not supported.

-   MWBP 1.0 Best Practice:
    [OBJECTS\_OR\_SCRIPT](http://www.w3.org/TR/mobile-bp/#OBJECTS_OR_SCRIPT).
{:.inline}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

<style>
    .inline li {
        display: inline;
    }
    .wcag1, .wcag1 * {
        color: #767676;
    }
</style>