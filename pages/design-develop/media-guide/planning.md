---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Planning Audio and Video Media"
title_image: /content-images/media-guide/planning.svg
nav_title: "Planning"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2024-09-17  # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-media-guide

permalink: /media/av/planning/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/planning/   # Do not change this

resource:
  ref: /media/av/
navigation:
  previous: /media/av/users-orgs/
  next:     /media/av/av-content/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Helps you plan how to make audio and video media accessible, whether you are outsourcing it or creating it in-house.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG and ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Date:</strong> Updated 17 septembre 2024. First published September 2019. CHANGELOG.</p>
   <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
   <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Originally drafted as part of the <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA Project</a> funded by the <abbr title="United States">U.S.</abbr> Access Board. Revised as part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a> funded by the Ford Foundation.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

This page helps you:
* **figure out which accessibility aspects your specific audio or video needs** (captions, description, a transcript, etc.)
* manage projects and plan what to develop in-house and what to outsource
* understand the **standards** for audio and video media in Web Content Accessibility Guidelines (WCAG)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{::options toc_levels="2" /}
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Influences

What accessibility features you provide with your media will likely be influenced by:
* [user needs and business benefits](/media/av/users-orgs/)
* governmental regulations and other policy requirements
* budget and time constraints

This multi-page resource endeavors to help you know the requirements and encourages you to meet all user needs.

## Checklists for Audio and Video {#checklist}

The checklists below cover audio-only content and video content, and pre-recorded and live. They include:
* What is required in the Web Content Accessibility Guidelines (WCAG) standard at Level A, AA, and AAA. _([WCAG](#wcag-standard) is explained below.)_
* What is needed to meet user needs, beyond WCAG. (If it doesn't have any 'A', then it is not required in WCAG.)

The links below go to a web page in this resource with details on understanding and implementing each thing.

{::nomarkdown}
{% include box.html type="start" title="All Audio and Video Media" class="highlighted" id="checklist-all" %}
{:/}

- **[Audio content](/media/av/av-content/#audio) (A)** is accessible (for example, what is said and how it's recorded)
- **[Video content](/media/av/av-content/#video) (A)** is accessible (for example, doesn't cause seizures)
- **[Media player](/media/av/player/) (A)** supports accessibility
{:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### <img src="{{ "/content-images/media-guide/audio.svg" | relative_url }}" alt="" style="height:1.3em"> Audio-only Checklists

This section covers audio-only media, like podcasts that don't have video.

{% capture boxhead %}
<img src="{{ "/content-images/media-guide/recorded.svg" | relative_url }}" alt="" style="height:1em"> Pre-Recorded Audio-only
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-ap" %}
{:/}

-   **[Transcript](/media/av/transcripts/) (A)** separate from the audio
-   **[Captions](/media/av/captions/)** synchronized with the audio
-   **[Sign language(s)](/media/av/sign-languages/)**
{:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% capture boxhead %}
<img src="{{ "/content-images/media-guide/live.svg" | relative_url }}" alt="" style="height:1em"> Live Audio-only
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-la" %}
{:/}

-   **[Transcript](/media/av/transcripts/) (AAA)** &mdash; live stream or transcript when live
-   **[Captions](/media/av/captions/)**
-   **[Sign language(s)](/media/av/sign-languages/)**
{:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### <img src="{{ "/content-images/media-guide/video.svg" | relative_url }}" alt="" style="height:1.3em"> Video Checklists

{% capture boxhead %}
<img src="{{ "/content-images/media-guide/recorded.svg" | relative_url }}" alt="" style="height:1em"> Pre-Recorded Video
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-vp" %}
{:/}

**Does the video have speech or other audio** that is needed to understand the content?

-   If yes,
    -   **[Captions](/media/av/captions/)** **(A)**
    -   **[Transcript of audio information](/media/av/transcripts/) (AAA)**
    -   **[Sign language(s)](/media/av/sign-languages/) (AAA)**
    {:.alt}
-   If no, [inform users](#none).

**Does the video have visual information** that is needed to understand the content?

-   If yes,
    -   **[Audio description of the visual information](/media/av/description/) _or_  [descriptive transcript](//media/av/transcripts/) (A)**
    -   **[Audio description of the visual information](/media/av/description/) (AA)**
    -   **[Descriptive transcript](/media/av/transcripts/) (AAA)** *(If you have a descriptive transcript, you do not need an additional transcript of only audio information from the previous question.)*
    {:.alt}
-   If no, [inform users](#none).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% capture boxhead %}
<img src="{{ "/content-images/media-guide/live.svg" | relative_url }}" alt="" style="height:1em"> Live Video
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-lv" %}
{:/}

**Is there speech or other audio** that is needed to understand the content?

-   If yes,
    -   **[Captions](/media/av/captions/) (AA)**
    -   **[Sign language(s)](/media/av/sign-languages/)**
    -   Text stream available to screen readers (and braille devices)
    {:.alt}
-   If no, [inform users](#none).

**Is there visual information** that is needed to understand the content?

-   If yes,
    -   Description of important visual information in a text stream available to screen readers (and braille devices)
    {:.alt}
-   If no, [inform users](#none).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Inform Users When Not Needed {#none}

If your video does not need captions (because there is no substantive audio content) or does not need description (because there is no substantive visual content), it's good to let users know that. Otherwise, they might think that you accidentally forgot to provide it.

Users who need captions will look there, so you can provide a captions file with only the appropriate indication, such as "[background music]". Or you can provide the information in text with the video, such as:

{::nomarkdown}
{% include box.html type="start" class="" %}
{:/}

Captions not needed: The only sound in this video is background music.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" class="" %}
{:/}

Description not needed: The visuals in this video only support what is spoken; the visuals do not provide additional information.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Provide Both Captions and a Transcript {#captions-and-transcript}

It is best to provide captions and a separate transcript.

For videos, captions enable people who are Deaf or hard of hearing to see the visual content and read the captions at the same time. 

For audio-only, captions enable people who are hard of hearing to get the richness of listening to the audio and fill in what they don't hear well by reading the captions.

Transcripts are needed to provide access to people who are Deaf-blind and use braille. Also, transcripts are used by people without disabilities, as listed in the intro page of this resource under [Benefits to Organizations and Individuals](/media/av/users-orgs/#benefits).

### Descriptive Transcripts {#descriptive-transcripts}

Descriptive transcripts for videos:

* are needed for most videos to be accessible to people who are "Deaf-blind"
* meet a wide range of accessibility needs, including for people who have difficulty processing auditory information and people who cannot focus and comprehend auditory or visual information when there is changing visuals
* are used by people _without_ disabilities, and benefit your organization (examples are in the intro page under [Benefits to Organizations and Individuals](/media/av/users-orgs/#benefits))
* **are easy and inexpensive to develop** using captions and description that you already have to meet Level AA

**Captions and transcripts use the same text. Once you have one, it's fairly easy to develop the other.**

### Other Languages

Translation of the audio into other languages can be provided:
* as text, using captions format (called subtitles or interlingual subtitles)
* as spoken audio, usually as a separate audio stream (for people who cannot read captions)
* as sign language

## Project Management

<!-- maybe better image in future iteration: <img src="{{ "/content-images/media-guide/in-or-out.png" | relative_url }}" alt="" style="float: right; margin-left: 2rem; clear:right; width: 30%; max-width: 220px"> -->

Include specific accessibility requirements in your:
* Project requirements - internal and external
* Requests for Proposal (RFP) or Requests for Tender (RFT)
* Contracts

Here is an example workflow for developing an accessible video, with notes on who develops the material. Links go to other pages in this resource.

{::nomarkdown}
{% include box.html type="start" title="Example Workflow and Responsibilities" class="" %}
{:/}

1. Address accessibility in **[video content](/media/av/av-content/)** as the video is planned and produced.<br>_By:_ Script writers, videographers, producers, and others.

2. Develop a **[described version of the video](/media/av/description/)** at the same time as the main video, if needed.<br>_By:_ Usually the same people who produce the main video also produce the described version.

3. Develop **[captions](/media/av/captions/)** for the main video and for the described version.<br>_By:_ Usually if the video is professionally produced, the producers provide captions. Sometimes when informal videos are developed in-house, captions are outsourced.

4. Develop a **[descriptive transcript](/media/av/transcripts/)** using the text from the caption files.<br>_By:_ Often transcripts are developed in-house from caption files.

5. Implement it in an **[accesible media player](/media/av/player/)** (usually an existing player with good accessibility support).<br>_By:_ Usually in-house web developers.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Resourcing Accessibility {#in-or-out}

To help you **plan in-house and outsourced work**, the pages of this resource include considerations, skills, and tools needed for creating accessible media in these sections:
* [Description Considerations, Skills, and Tools](/media/av/description/#description-considerations-skills-and-tools)
* [Captions, Skills and Tools](/media/av/captions/#skills-and-tools) and [Automatic Captions are Not Sufficient](/media/av/captions/#automatic-captions-are-not-sufficient)
* [Transcripts, Process - Skills and Tools](/media/av/transcripts/#process-skills-and-tools)
* [Media Players, Skills and Tools](/media/av/player/#skills)
* [Sign Languages, Skills and Tools](/media/av/sign-languages/#skills-and-tools)

When planning and budgeting for accessible media, it is often helpful to communicate the **benefits to organizations**, such as search engine optimization (SEO), better user experience for all, improved customer satisfaction, and more listed in the intro page under [Benefits to Organizations and Individuals](/media/av/users-orgs/#benefits).

## WCAG Standard

Web Content Accessibility Guidelines (WCAG) is introduced in a separate resource: [WCAG Overview](/standards-guidelines/wcag/).

{::nomarkdown}
{% include box.html type="start" class="" %}
{:/}

This resource uses most WCAG terminology, with a few differences:
* "time-based media" in WCAG = "audio and video media" in this resource
* "[alternative for time based media in WCAG](https://www.w3.org/TR/WCAG#alt-time-based-mediadef)" = "transcript" for audio-only and "descriptive transcript" for video in this resource

{::nomarkdown}
{% include box.html type="end" %}
{:/}

WCAG includes requirements for audio and video media at Level A, AA, and AAA. (More info in a separate resource: [Understanding Levels of Conformance](https://www.w3.org/WAI/WCAG22/Understanding/conformance.html#levels).) Most media is required by governing policies to meet Level AA &mdash; which includes both A and AA listed in the tables below.

Accessibility requirements for video and audio are different based on if they are:
* pre-recorded or live
* video with audio, video without audio (video-only), or audio-only

The links in the tables below go to a page in a separate resource: Understanding WCAG 2.1.

### Pre-Recorded
{:.no_toc}

<table class="quiet">
<tr>
<td>&nbsp;</td>
<th scope="col">Transcript <span class="normal-weight">(including auditory and visual content)</span></th>
<th scope="col">Captions</th>
<th scope="col">Audio Description <span class="normal-weight">(if visual content not in audio)</span></th>
<th scope="col">Sign Language</th>
</tr>
<tr>
  <th scope="row">Audio-only</th>
  <td><strong><a href="https://www.w3.org/WAI/WCAG22/Understanding/audio-only-and-video-only-prerecorded">A 1.2.1</a></strong></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
<th scope="row">Video-only</th>
<td><strong><a href="https://www.w3.org/WAI/WCAG22/Understanding/audio-only-and-video-only-prerecorded">A 1.2.1</a></strong> (transcript <em><strong>or</strong></em> audio track)<br>
<a href="https://www.w3.org/WAI/WCAG22/Understanding/media-alternative-prerecorded">AAA 1.2.8</a></td>
<td>&nbsp;</td>
<td><strong><a href="https://www.w3.org/WAI/WCAG22/Understanding/audio-only-and-video-only-prerecorded">A 1.2.1</a></strong> (audio track <em><strong>or</strong></em> transcript)</td>
<td>&nbsp;</td>
</tr>
<tr>
  <th scope="row">Video with Audio</th>
  <td><a href="https://www.w3.org/WAI/WCAG22/Understanding/media-alternative-prerecorded">AAA 1.2.8</a></td>
  <td><strong><a href="https://www.w3.org/WAI/WCAG22/Understanding/captions-prerecorded">A 1.2.2</a></strong></td>
  <td><strong><a href="https://www.w3.org/WAI/WCAG22/Understanding/audio-description-or-media-alternative-prerecorded">A 1.2.3</a></strong>&nbsp;(audio description <em><strong>or</strong></em> transcript)<br>
    <strong><a href="https://www.w3.org/WAI/WCAG22/Understanding/audio-description-prerecorded">AA 1.2.5</a></strong><br>
    <a href="https://www.w3.org/WAI/WCAG22/Understanding/extended-audio-description-prerecorded">AAA 1.2.7</a></td>
  <td><a href="https://www.w3.org/WAI/WCAG22/Understanding/sign-language-prerecorded">AAA 1.2.6</a></td>
</tr>
</table>

### Live
{:.no_toc}

<table class="quiet">
<tr>
<td>&nbsp;</td>
<th scope="col">Transcript</th>
<th scope="col">Captions</th>
<th scope="col">Audio Description</th>
<th scope="col">Sign Language</th>
</tr>
<tr>
  <th scope="row">Audio-only</th>
  <td><a href="https://www.w3.org/WAI/WCAG22/Understanding/audio-only-live">AAA 1.2.9</a> (live stream <em><strong>or</strong></em> accurate transcript when live)</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
<th scope="row">Video-only</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
  <th scope="row">Video with Audio</th>
  <td>&nbsp;</td>
  <td><strong><a href="https://www.w3.org/WAI/WCAG22/Understanding/captions-live">AA 1.2.4</a></strong></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</table>

### More about Standards
{:.no_toc}

To learn more about WCAG requirements for media, see [Understanding Guideline 1.2: Time-based Media](https://www.w3.org/WAI/WCAG22/Understanding/time-based-media).

Other WCAG requirements related to audio and video include:
* In this resource:
  * [Accessible Audio and Video Content](/media/av/av-content/)
  * [Media Player Functionality](/media/av/player/#player-accessibility-functionality)
* In Understanding WCAG:
   * [2.2.2 Pause, Stop, Hide](https://www.w3.org/WAI/WCAG22/Understanding/pause-stop-hide) (Level A) For moving, blinking, scrolling, or auto-updating information, all of the following are true:...
   * [1.4.2 Audio Control](https://www.w3.org/WAI/WCAG22/Understanding/audio-control) (Level A) If any audio on a Web page plays automatically for more than 3 seconds, either a mechanism is available to pause or stop the audio, or a mechanism is available to control audio volume...

Your audio and video may be subject to additional requirements, for example under governmental regulations. Some of these are listed in [Web Accessibility Laws & Policies](/policies/).
