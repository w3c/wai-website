---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Captions/Subtitles"
title_image: /content-images/media-guide/cc.svg
nav_title: "Captions/Subtitles"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2024-09-17  # Keep the date of the English version
first_published: "September 2019"

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-media-guide

permalink: /media/av/captions/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/captions/   # Do not change this

resource:
  ref: /media/av/
navigation:
  previous: /media/av/description/
  next:     /media/av/transcripts/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Helps you understand and create captions (also called “subtitles”) for audio and video media accessibility.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Editor:</strong> <a href=" https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
   <p>Developed by the Education and Outreach Working Group (<a href=" https://www.w3.org/WAI/EO/">EOWG</a>). Originally drafted as part of the <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA Project</a> funded by the <abbr title="United States">U.S.</abbr> Access Board. Revised as part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a> funded by the Ford Foundation.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

Captions (called "subtitles" in some areas) provide content to people who are Deaf and hard-of-hearing. Captions are a text version of the speech and non-speech audio information needed to understand the content. They are synchronized with the audio and usually shown in a media player when users turn them on.

This page helps you understand and create captions and subtitles.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{::options toc_levels="2,3" /}
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introduction

_Who:_ Captions (also called "intralingual subtitles") provide content to people who are Deaf and others who cannot hear the audio. They are also used by people who process written information better than audio.

{% include image.html src="media-guide/captions.png" alt="" class="normal right" %}

_What:_ Captions are a text version of the speech and non-speech audio information needed to understand the content. They are displayed within the media player and are synchronized with the audio.

Most are "closed captions" that can be hidden or shown by people watching the video. They can be "open captions" that are always displayed and cannot be turned off.

### Captions and Subtitles

The terms "captions" and "subtitles" are used for the same thing in different regions of the world. This resource uses:
* _Captions_ for the same language as the spoken audio.
* _Subtitles_ for spoken audio translated into another language.

Some regions use _subtitles_ for both the same language as the audio and for the translation. Sometimes they are distinguished as _intralingual subtitles_ (same language) and _interlingual subtitles_ (different language).

Subtitles are implemented the same way as captions. Subtitles/interlingual subtitles are usually only the spoken audio (for people who can hear the audio but do not know the spoken language). They can be a translation of the caption content, including non-speech audio information.

Captions are needed for accessibility, whereas subtitles in other languages are not directly an accessibility accommodation.

### Live Captions

Live captions are usually done by professional real-time captioners or Communication Access Realtime Translation (CART) providers. Live captions can be done in-person or remotely. That is, the person doing the captioning/CART does not have to be at the same location as the live action; they can be doing the live captions by listening to the audio over a phone or Internet connection.

If you have live captions and you post a recording, you will probably need to do minor editing for accuracy.

This rest of this page addresses developing captions for pre-recorded media.

### Interactive Transcripts from Captions
{:.no_toc}

Caption files are used by some media players to provide _interactive transcripts_. Interactive transcripts highlight text phrases as they are spoken. Users can select text in the transcript and go to that point in the video. Some players provide interactive transcript functionality.

<img src="{{ "/content-images/media-guide/interactive-transcript.png" | relative_url }}" alt="">

### Notes
{:.no_toc}

For optimum accessibility, provide a separate caption file of the description of visual information (called audio description, video description, or described video).

**Captions and transcripts include the same text, so one can be used to develop the other.**

## Does My Media Need Captions? {#checklist}

This section tells you:
* What is required in the WCAG standard at Level A, AA, and AAA. _([WCAG](/media/av/planning/#wcag-standard) is introduced in the Planning page of this resource.)_
* What is needed to meet user needs, beyond WCAG. If there are no "A"s, then it is not required in WCAG.

{% capture boxhead %}
Audio-only (e.g., podcast):
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-ao" %}
{:/}

*   For pre-recorded:
    *   Captions are useful for people who are hard of hearing to get the richness of listening to the audio and fill in what they don’t hear well by reading the captions.<br>Captions are not required to meet WCAG. (Transcripts are at Level A.)
    {:.alt}
*   For live:
    *   Captions are useful for people who are hard of hearing to get the richness of listening to the audio and fill in what they don’t hear well by reading the captions.<br>Live text stream or accurate script of the audio available when live is in WCAG at Level AAA.
    {:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% capture boxhead %}
Video-only (no audio content):
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-vo" %}
{:/}

*   For pre-recorded and live:
    *   Captions are not needed because there is no audio information.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{% capture boxhead %}
Video with audio content:
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-va" %}
{:/}

Does the video have audio information that is needed to understand what the video is communicating?

*   If no (for example, it is just background music):
    *   Captions are not needed because there is no important audio content. Consider [informing users](/media/av/planning/#none).
*   If yes:
    *   For pre-recorded:
        *   Captions are needed to provide the audio content to people who are Deaf or hard of hearing.  
            Captions are _**required**_ in WCAG at Level A.
        {:.alt}
    *   For live:
        *   Captions are needed to provide the audio content to people who are Deaf or hard of hearing.  
            Captions are _**required**_ in WCAG at Level AA.
        {:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

<br>

**WCAG excerpts** with links to more information in "Understanding WCAG":
* [A 1.2.2 Captions](https://www.w3.org/WAI/WCAG22/Understanding/captions-prerecorded.html) (Prerecorded): Captions are provided for all prerecorded audio content in synchronized media...
* [AA 1.2.4 Captions](https://www.w3.org/WAI/WCAG22/Understanding/captions-live.html) (Live): Captions are provided for all live audio content in synchronized media. 

## Skills and Tools {#skills-and-tools}

Creating captions requires typing up the audio ("transcribing") and formatting it in a file with timestamps. Transcribing an audio file is fairly difficult and takes quite a bit of time for people who don't have the software and skill for it. The file format for captions are simple, yet it's tedious to add timestamps, especially without software or service for developing caption files.

Creating high-quality captions requires knowledge of which non-speech audio information should be included in the captions. It's more art than science --- for example, it's not always clear which non-speech audio information to include and how to communicate it in text.

Even correcting an automatic caption files takes quite a bit of time for people who don't do it regularly.

However, people who have the software, skills, and experience in developing captions, can develop them much faster.

For these reasons, many organizations choose to outsource their captions.

## Automatic Captions are Not Sufficient {#automatic-captions-are-not-sufficient}

Automatically-generated captions do not meet user needs or accessibility requirements, unless they are confirmed to be fully accurate. Usually they need significant editing. 

There are tools that use speech recognition technology to turn a soundtrack into a timed caption file. For example, some common video websites provide automatic captions. However, often the automatic caption text is wrong and does not match the spoken audio — sometimes in ways that change the meaning (or are embarrassing). For example, missing just one word such as "not" can make the captions contradict the actual audio content.

{::nomarkdown}
{% include box.html type="start" title="Example of bad automatic captions (that cause a fire)" class="simple aside"  %}
{:/}

{% include image.html src="media-guide/food-fire.jpg" alt="food on fire under broiler" class="normal right" %}
  _Spoken audio:_<br>&quot;Broil on high for <strong>4 to 5 minutes</strong>. You should <strong>not</strong> preheat the oven.&quot;<br>
  _Automatic caption:_<br>&quot;Broil on high for <strong>45 minutes</strong>. You should <strong>know to</strong> preheat the oven.&quot;

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Automatic captions can be used as a starting point for developing accurate captions and transcripts.

## Creating Captions

### Caption File Format

The most common format for captions on the web is [WebVTT](https://www.w3.org/TR/webvtt/): The Web Video Text Tracks Format.

{::nomarkdown}
{% include box.html type="start" title="Example VTT file with speakers identified" class="" %}
{:/}

```
WEBVTT

00:11.000 --> 00:13.000
<v Rajwinder Kaur>Welcome to the podcast.

00:13.000 --> 00:17.000
<v Shawn Henry>Thank you for this opportunity to share information about accessibility.

00:17.000 --> 00:20.000
<v Rajwinder>Would you start by telling us a little about your role at W3C?

00:20.000 --> 00:24.000
<v Shawn>I work within the Web Accessibility Initiative, W-A-I, pronounced "way".
```

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
Other caption formats are: SRT and Timed Text Markup Language ([TTML](https://www.w3.org/TR/ttml2/)).

### Caption Tools

Most people use software or services to help develop captions. There are several free captioning software programs and online services available.

Several free and fee-based tools create automatic captions that you can use as a starting point. For example, a common video website includes automatic captions and tools for you to edit the captions. **You will need to edit automatic captions for accuracy.**

If you already have transcription of the audio into text, there are free tools that will generate a captions file with timestamps. You will need to edit it for line breaks as described in another page of this resource, Transcribing Audio to Text: [More on Captions](/media/av/transcribing/#more-on-captions).

Most caption-editing tools can export a plain text transcript.

<img src="{{ "/content-images/media-guide/caption-editing.png" | relative_url }}" alt="" style="width: 50%; max-width: 500px"><br>_The screen capture shows one tool for editing captions, in the area underneath the video._

### Transcribing Audio to Text

For specific guidance on what to type up, see another page in this resource: [[Transcribing Audio to Text]](/media/av/transcribing/).

## Positioning and Styling Captions

There are options for authors to position and style captions. Support in browsers and other media players is inconsistent and sometimes unreliable. Most web videos just use the player's default presentation style, which is usually white characters in a black box.

Some media players enable users to set preferences for how and where captions are displayed, including text style, text size, colors, and position of the captions.
