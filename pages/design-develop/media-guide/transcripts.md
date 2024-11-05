---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Transcripts"
title_image: /content-images/media-guide/transcript.svg
nav_title: "Transcripts"
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

permalink: /media/av/transcripts/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/transcripts/   # Do not change this

resource:
  ref: /media/av/
navigation:
  previous: /media/av/captions/
  next:     /media/av/transcribing/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Helps you understand and create transcripts for audio and video media accessibility.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
   <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Originally drafted as part of the <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA Project</a> funded by the <abbr title="United States">U.S.</abbr> Access Board. Revised as part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a> funded by the Ford Foundation.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

Basic transcripts are a text version of the speech and non-speech audio information needed to understand the content. Descriptive transcripts also include text description of the visual information needed to understand the content. Descriptive transcripts are required to provide video content to people who are both Deaf and blind.

This page helps you understand and create transcripts.

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

Basic transcripts are a text version of the speech and non-speech audio information needed to understand the content.

_Who:_ Basic transcripts are used by people who are Deaf, are hard of hearing, have difficulty processing auditory information, and others.

**_Descriptive transcripts_** for videos also include visual information needed to understand the content.

{% include image.html src="media-guide/braille.jpg" alt="" class="normal right" %}

_Who:_ Descriptive transcripts are needed to provide audio and video content to people who are both Deaf and blind. They are also used by people who process text information better than audio and visual/pictorial information.

Ideally you provide a descriptive transcript, and then you do not need a separate basic transcript.

_Interactive transcripts_ highlight text phrases as they are spoken. Users can select text in the transcript and go to that point in the video. This is a feature of the media player. It uses the captions file.

<img src="{{ "/content-images/media-guide/interactive-transcript.png" | relative_url }}" alt="">

## Does My Media Need a Transcript? {#checklist}

**Short answer: Yes, descriptive transcripts are needed to meet the wide range of user needs**.

In some cases, transcripts are not required to meet WCAG standards. _(The Planning page of this resource introduces the [WCAG Standard](/media/av/planning/#wcag-standard).)_

{% capture boxhead %}
Audio-only (e.g., podcast):
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-ao" %}
{:/}

- For pre-recorded:
   - Transcripts are **_required_** at WCAG Level A.
   {:.alt}
- For live:
   - Transcripts are at WCAG Level AAA. Usually this needs to be a live text stream. If the audio follows a script, you can provide the text script.
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

- For pre-recorded:
   - Descriptive transcript **_or_** audio description is **_required_** at WCAG Level A.
   {:.alt}
- For live:
   - A description of the visual information is needed. Usually it is a live text stream, rather than a transcript. It is not required in WCAG.
   {:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% capture boxhead %}
Video with audio content:
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-va" %}
{:/}

- For pre-recorded:
   - Transcripts are at WCAG Level AAA. (Captions are A.)
   {:.alt}
- For live:
   - A live stream separate from the media player is needed for people who cannot access the captions. It is not required in WCAG. (Captions are AA.)
   {:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

<br>

**WCAG excerpts** with emphasis added, additions in [brackets], and links to more information in "Understanding WCAG":
* [A 1.2.1 Audio-only and Video-only](https://www.w3.org/WAI/WCAG22/Understanding/audio-only-and-video-only-prerecorded.html) (Prerecorded): For prerecorded audio-only and prerecorded video-only media, the following are true...
  * Prerecorded Audio-only: An alternative for time-based media [transcript] is provided that presents equivalent information for prerecorded audio-only content.
  * Prerecorded Video-only: Either an alternative for time-based media [descriptive transcript] ***or*** an audio track [of description] is provided that presents equivalent information for prerecorded video-only content.
* [AAA 1.2.8 Media Alternative](https://www.w3.org/WAI/WCAG22/Understanding/media-alternative-prerecorded.html) (Prerecorded):  An alternative for time-based media [transcript] is provided for all prerecorded synchronized media and for all prerecorded video-only media.
* [AAA 1.2.9 Audio-only](https://www.w3.org/WAI/WCAG22/Understanding/audio-only-live.html) (Live):  An alternative for time-based media [live stream text or transcript] that presents equivalent information for live audio-only content is provided. 

### Provide a Descriptive Transcript for Your Videos
{:.no_toc}

Descriptive transcripts are needed by people who are Deaf-blind and others. (A bit more justification is in the Planning page: [Descriptive Transcripts](/media/av/planning/#descriptive-transcripts).) And **descriptive transcripts are easy and inexpensive to make** using captions and audio description that you already have to meet Level AA, as explained on this page.

## Process – Skills and Tools {#process-skills-and-tools}

The process for providing transcripts is basically:
1.	Get a text version of the audio, called "transcribing".
2.	Format the transcript.
3.	Put the transcript online, and make it easy for users to find the transcript from the audio or video file.

### If You Start with Captions

For videos, often transcribing the audio to text is done to create captions, as described in the [captions page](/media/av/captions/). Then the captions file is used to create the transcript.

Creating transcripts from caption files is easy with basic web skills and tools.

### If You Start with Transcribing

Transcribing an audio file takes quite a bit of time for people who don't have the software and skill for it. Many organizations choose to outsource the transcribing. Guidance for doing it yourself (DIY) is in another page of this resource: [Transcribing Audio to Text](/media/av/transcribing/).

Once you have the transcription, creating the transcript is easy with basic web skills and tools.

## Creating Transcripts

If you already have captions, you can use that file to create the transcript. Most caption-editing tools provide an option to export a plain text transcript. Otherwise, you will need to delete the timestamps, or edit them per below.

If you don't have captions, you'll need transcription of the audio information. That's addressed in another page of this resource: [Transcribing Audio to Text](/media/av/transcribing/).

Captions are generally written to be viewed along with the visual video. Transcripts should include important visual infomation for those not seeing the video. When you use captions to create transcripts, **usually you will need to add visual information to the transcript**, such as text that is in the video and speaker identification.

### Transcript File Format

Most transcripts on the web are provided in HTML. There is not a set design for transcripts. Different options and examples are described throughout the guidance below.

A transcript of a podcast can be simple text paragraphs with the speakers identified.

{::nomarkdown}
{% include box.html type="start" title="Example transcript of a podcast interview with two speakers (excerpt)" class="" %}
{:/}

<p>Rajwinder Kaur: Welcome to the podcast.</p>
<p><strong>Shawn Henry:</strong> Thank you for this opportunity to share information about accessibility.</p>
<p>Rajwinder: Would you start by telling us a little about your role at W3C?</p>
<p><strong>Shawn:</strong> I work within the Web Accessibility Initiative, W-A-I, pronounced "way". </p>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

A descriptive transcript can be in a table so that readers can easily read only the audio information down a column if they choose. A [descriptive transcript example is below](#descriptive).

{% include excol.html type="start" id="" open="true" %}

### Making Transcripts More Useful

{% include excol.html type="middle" %}

Keep in mind that the main purpose of a transcript is to provide the information to people who cannot get it from the audio and/or video. That will help you know what to include and how to design it. Add information to make the transcript more useful. For example, add headings, links, a summary, and maybe time stamps, as described below. The following are optional, not requirements.

* **Put the information in logical paragraphs, lists, and sections**. If you're starting with a captions file, you will probably combine several lines into paragraphs. For example, in the [example excerpts below](#example-descriptive-transcript-from-caption-files), 6 lines of captions are grouped into 2 paragraphs of text (in table cells).

* **Add navigation and clarifications:**
   * Add headings and links where it will make the transcript more usable. (This also helps with SEO, search engine optimization.) Here's an [example with added links in short podcast transcript](https://www.w3.org/WAI/highlights/200606wcag2interview.html).
   * It is generally acceptable to add clarifying information, _as long as it is clear that it is not part of the actual audio_ &mdash; for example, words added to a paragraph put in [brackets], or separate sections with headings "Introduction", "Transcript", "Resources". Here's an [example with added headings in long presentation transcript](https://www.w3.org/WAI/highlights/200706wcag2pres).

* **Indicate the speakers based on the type of content.** For example:
   * When there are multiple speakers, you could use hanging indents to make it easy to skim for a particular speaker.
   * When you want the focus on the interviewee's answers and not the interviewer, you could bold the interviewee's name so it stands out more clearly.

* **Include timestamps only when useful.** In many cases, including timestamps would be unnecessary clutter. If you do include them, they usually don't need to be as granular as the captions, and do not need to include end times.

* **If starting with captions for video:** The video might have text information that was not included in the captions, for example, the title of the video or the name and title of people speaking. If you also have the description of visual information, it should already be in there. If not, you'll need to review the video and see if there is text visually that wasn't repeated in the captions, and add that to your transcript.

## Where to Put Transcripts

Make it is easy for users to know that a transcript is available and to get to the transcript. For example, put the transcript itself or a link to the transcript right under the video.

For media on your website, usually it's best to include the transcript on the same page. Here's an [example descriptive transcript at the bottom of same page with a video](https://www.w3.org/WAI/perspective-videos/captions/#transcript).

When your media is hosted elsewhere, you might have the transcript on a separate web page. Here's an [example podcast transcript on separate page](https://www.w3.org/WAI/highlights/200606wcag2interview.html).

{% include excol.html type="start" id="example-descriptive" %}

## Example Descriptive Transcript from Caption Files

{% include excol.html type="middle" %}

Below is an example of caption files used to create a descriptive transcript.

{::nomarkdown}
{% include box.html type="start" title="Example caption file of audio information (excerpt)" class="" %}
{:/}

```
00:00:08.120 --> 00:00:10.240
Video isn't just about pictures,

00:00:10.241 --> 00:00:12.040
it's also about sound.

00:00:12.160 --> 00:00:16.280
Without the audio, you would have to guess what this film is about.

00:00:23.140 --> 00:00:24.730
Frustrating isn't it?

00:00:24.731 --> 00:00:26.880
Not knowing what's going on.

00:00:29.620 --> 00:00:32.840
That's the situation for everyone who can't hear.
```

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Example caption file of audio description of visual information (excerpt)" class="" %}
{:/}

```
00:00:04.000 --> 00:00:07.980
<v Audio Descriptions> A man sitting at a desk starts watching a video on his computer. 

00:00:17.260 --> 00:00:20.780
<v Audio Descriptions> The video on his computer shows a person speaking to the camera.

00:00:20.780 --> 00:00:23.140
<v Audio Descriptions> It is playing with no audio.

00:00:26.880 --> 00:00:29.620
<v Audio Descriptions> The man watching the video has a hearing aid.
```

{::nomarkdown}
{% include box.html type="end" %}
{:/}

<div id="descriptive"></div>

{::nomarkdown}
{% include box.html type="start" title="Example descriptive transcript from the caption files above (excerpt)" class="" %}
{:/}

<table>
  <thead>
    <tr>
      <th width="65%">Audio</th>
      <th>Visual</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Video isn't just about pictures, it's also about sound. Without the audio, you would have to guess what this film is about.</td>
      <td>A man sitting at a desk starts watching a video on his computer.<br></td>
    </tr>
    <tr>
      <td>[no sound]</td>
      <td>The video on his computer shows a person speaking to the camera. It is playing with no audio.</td>
    </tr>
    <tr>
      <td>Frustrating isn't it? Not knowing what's going on. That's the situation for everyone who can't hear.</td>
      <td>The man watching the video has a hearing aid.</td>
    </tr>
  </tbody>
</table>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

**Notice that the single lines in the caption files have been grouped together in table cells.**

{% include excol.html type="end" %}
