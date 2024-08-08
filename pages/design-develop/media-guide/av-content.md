---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Audio Content and Video Content"
title_image: /content-images/media-guide/av-content.svg
nav_title: "Audio Content & Video Content"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2022-08-31   # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-media-guide

permalink: /media/av/av-content/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/av-content/   # Do not change this

resource:
  ref: /media/av/
navigation:
  previous: /media/av/planning/
  next:     /media/av/description/

changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Describes accessibility considerations when planning, scripting, storyboarding, recording, and producing audio and video media.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG and ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Date:</strong> Updated 31 August 2022. First published September 2019. CHANGELOG.</p>
   <p><strong>Editor:</strong> <a href=" https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
   <p>Developed by the Education and Outreach Working Group (<a href=" https://www.w3.org/WAI/EO/">EOWG</a>). Originally drafted as part of the <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA Project</a> funded by the <abbr title="United States">U.S.</abbr> Access Board. Revised as part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a> funded by the Ford Foundation.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

This page describes accessibility considerations when planning, scripting, storyboarding, recording, and producing audio and video.

It covers **common accessibility barriers** including:
* [missing description of visual information](#plan-description) (such as text in the video) for people who cannot see the video
* [requiring sight to understand the content](#sensory) of the video
* [making text in the video hard for some people to see ](#readable) because there is not enough contrast between the text and the background colors

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}
{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introduction

This page addresses accessibility considerations when planning, scripting, storyboarding, recording, and producing audio and video.

Some of the guidance below is related to requirements in Web Content Accessibility Guidelines (WCAG) and has links to a separate resource. _(The Planning page of this resource introduces the [WCAG Standard](/media/av/planning/#wcag-standard).)_ Other guidance is good practice.

Additional guidance is in the resource [[Making Events Accessible - Checklist for meetings, conferences, training, and presentations that are remote/virtual, in-person, or hybrid]](/teach-advocate/accessible-presentations/):
* [Preparing Slides and Projected Material](/teach-advocate/accessible-presentations/#preparing-slides-and-projected-material-speakers)
* [During the Presentation](/teach-advocate/accessible-presentations/#during-the-presentation-speakers)

## Audio

### Create high-quality audio – _recording setup_

* Use high-quality microphone(s) and recording software.
* When feasible, record in a room that is isolated from all external sounds.
* Avoid rooms with hard surfaces, such as tile or wood floors.

### Use low background audio – _recording, post-production_ (WCAG AAA)

When the main audio is a person speaking and you have background music, set the levels so people with hearing or cognitive disabilities can easily distinguish the speaking from the background.

Specifically, make the background sounds at least 20 decibels lower than the foreground speech content (with the exception of occasional sounds that last for only one or two seconds).

Avoid sounds that can be distracting or irritating, such as some high pitches and repeating patterns.

<span style="color:#585858; font-style:italic;">More information is in [Understanding Success Criterion 1.4.7: Low or No Background Audio (AAA)](https://www.w3.org/WAI/WCAG21/Understanding/low-or-no-background-audio.html).</span>

### Speak clearly and slowly – _speakers_

Speak clearly. This is important for people wanting to understand the content, and for captioners.

Speak as slowly as appropriate. This will enable listeners to understand better, and make the timing better for captions and sign language.

### Give people time to process information – _speakers, post-production_

Pause between topics.

### Use clear language – _script_

Avoid or explain jargon, acronyms, and idioms. For example, expressions such as “raising the bar” can be interpreted literally by some people with cognitive disabilities and can be confusing.

### Provide redundancy for sensory characteristics – _script_ (WCAG A)  {#sensory}

Make your information work for people who cannot see and/or cannot hear.

For example, instead of saying:
<blockquote>Attach this to the green end.</blockquote>
Say:
<blockquote>Attach the small ring to the green end, which is the larger end.</blockquote>

<span style="color:#585858; font-style:italic;">More information that primarily addresses web pages, yet is relevant to audio and video, is in [Understanding Success Criterion 1.3.3: Sensory Characteristics (A)](https://www.w3.org/WAI/WCAG21/Understanding/sensory-characteristics.html).</span>

## Video

### Avoid causing seizures – _storyboarding, post-production_ (WCAG A)

Avoid anything that flashes more than three times in any one second period. 

<span style="color:#585858; font-style:italic;">More information is in [Understanding Success Criterion 2.3.2: Three Flashes (AAA)](https://www.w3.org/WAI/WCAG21/Understanding/three-flashes.html) and [Understanding Success Criterion 2.3.1: Three Flashes or Below Threshold (A)](https://www.w3.org/WAI/WCAG21/Understanding/three-flashes-or-below-threshold.html)</span>

### Consider speaker visibility – _storyboarding, recording, post-production_

Some people use mouth movement to help understand spoken language. When feasible, ensure that the speaker's face is visible and in good light.

### Make overlay text readable – _storyboarding, post-production_ (WCAG AA, AAA) {#readable}

For any text, consider the font family, size, and contrast between the text and background.

<span style="color:#585858; font-style:italic;">More information is in [Understanding Success Criterion 1.4.3: Contrast (Minimum) (AA)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-minimum.html) and [Understanding Success Criterion 1.4.6: Contrast (Enhanced) (AAA)](https://www.w3.org/WAI/WCAG21/Understanding/contrast-enhanced).</span>

### Plan for sign language – _storyboarding, script, recording_ (WCAG AAA)

Often sign languages are provided as an overlay in the bottom right corner of videos. For example: [NHS 111 British Sign Language (BSL) Advert (YouTube)<br>{% include image.html src="media-guide/sign-example.jpg" alt="" class="normal video" %}](https://www.youtube.com/watch?v=TCq3ru9HQSc)

Plan for the video not to include important information that would be obstructed by a sign language overlay.

For other guidance including recording, see another page of this resource: [Sign Languages](/media/av/sign-languages/)

### Plan for description of visual information – _storyboarding, recording_  (WCAG A, AA) {#plan-description}

_Description_ provides content to people who are blind and others who cannot see the video adequately. It describes the visual information needed to understand the content, **including text displayed in the video**.

Plan to either:
* Integrate description into the main audio content,<br>_**or**_
* Record the audio and video with timing to accommodate separate description.

#### Integrate description {#integrate-description}

For some videos, such as presentations and instructional videos, the best way to handle description is not to need it at all &mdash; that is, all the visual information that users need to understand the content is integrated in the main audio. This is called "integrated description". When planned in advance, this is fairly simple for many videos on the web. For example:

<table>
  <tr>
    <th scope="col">Instead of the speaker saying:</th>
    <th scope="col">The speaker can say:</th>
  </tr>
  <tr>
    <td>As you can see on this chart, sales increased significantly from the first quarter to the second quarter.</td>
    <td>This chart shows that sales increased significantly, from 1 million in the first  quarter to 1.3 million in the second quarter.</td>
  </tr>
  <tr>
    <td>Whip the mixture until it looks like this.</td>
    <td>Whip the mixture until the oil, vinegar, and spices are well combined.</td>
  </tr>
  <tr>
    <td>Attach this to the green end.</td>
    <td>Attach the small ring to the green end, which is the larger end.</td>
  </tr>
</table>

Here is an example [training video with the description integrated in what the trainer is saying (YouTube)<br>{% include image.html src="media-guide/eg-integrated-description.png" alt="" class="normal video" %}](https://www.youtube.com/watch?v=JUfmCvdzqbM)

If you want guidance on what to include in description, see the "Description of Visual Information" page, [Tips for Writing Description section](/media/av/description/#writing).

#### Time for description {#time-for-description}

For some types of videos, such as dramas, the description of the visual information cannot be smoothly handled by the speakers in the main video. For those videos, the description will be separate.

Where the description is fairly short, plan space in the audio to add the description.

Where the description is longer than you want to leave space in the main audio, you can record extra time in the scene to accommodate the description without having to pause the scene. That is, the same scene is shorter in the main video. In the described version, that same scene is a little longer at the beginning or the end of it. For example:

<table>
  <tr>
    <th scope="col">Narration</th>
    <th scope="col">Main Video Scene Duration</th>
    <th scope="col">Described Video Scene Duration</th>
    <th scope="col">Description</th>
  </tr>
  <tr>
    <td><q>Captions are also handy for people who want to watch video in loud environments.</q></td>
    <td>3&nbsp;seconds</td>
    <td>7&nbsp;seconds</td>
    <td>A man is watching the captioned video with a group of people chatting away next to him.</td>
  </tr>
  <tr>
    <td><q>Or where you need to be very, very quiet.</q></td>
    <td>2&nbsp;seconds</td>
    <td>5&nbsp;seconds</td>
    <td>Turns out that they are in a library. The group is shushed by the librarian.</td>
  </tr>
</table>

An example of this is the [Web Accessibility Perspectives: Video Captions](/perspective-videos/captions/) video. The main video is 48 seconds long. The described version is 1 minute and 18 seconds long, yet there are no pauses in the visual aspect of the video.

#### More about description

More information is in the next page of this resource: [Description of Visual Information](/media/av/description/).
