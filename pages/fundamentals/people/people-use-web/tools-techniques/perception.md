---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Perception - hearing, feeling and seeing"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: Introduces some of the techniques and tools that people with disabilities use to interact with digital technology — browser settings, text-to-speech, speech recognition, and many more.

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/tools-techniques/perception/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/tools-techniques/perception/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/tools-techniques/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/
  next: /people-use-web/tools-techniques/presentation/

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Note about video description: The video on this page does not include synchronized audio description because the visuals only illustrate the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. Description of visual information is available in the Text Transcript with Description of Visuals (“descriptive transcript”).</p>
  <p><strong>Date:</strong> Updated 25 June 2024. First published as a draft in 1999.<!-- CHANGELOG.--></p>
  <p><strong>Editor:</strong> Shadi Abou-Zahra. Previous editor: Judy Brewer. Contributors listed in ACKNOWLEDGEMENTS.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https//www.w3.org/WAI/EO/">EOWG</a>) with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> and <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> co-funded by the European Commission (EC).</p>
---

{::nomarkdown}
<style>
  #introduction p, #introduction ul {
    font-size:120%;
    margin: 0.5em 0 0 0;
  }
  #introduction .box-i {
  }
  #introduction nav {
    border: 0;
    margin-top: 0;
  }
  #introduction nav header {
    padding: 8px 16px;
  }
  #introduction .video-card {
    margin: 1em;
    float: none !important;
    max-width: inherit !important;
    min-width: 45% !important;
  }
  #introduction .video-card p {
    font-size: 90%;
    margin: 0;
  }
  #introduction .video-card p:first-child {
    height: 190px;
  }
  #introduction img.video {
    border-radius: 5px;
    width: 300px;
    max-width: 300px;
  }
  #introduction .video-card .play-button {
    position: relative;
    top: -55px;
    left: -185px;
    width: 60px;
    height: 60px;
  }
  @media all and (min-width: 576px) {
    #introduction .box-i {
      display: flex;
      flex: 0 1;
    }
    #introduction .video-card .play-button {
      position: relative;
      top: -120px;
      left: 120px;
      width: 60px;
      height: 60px;
    }
  }
</style>

{% include_cached blockquote.html class="pull alt-2" content="<p>Accessibility: It's about people</p>" %}

<aside id="introduction" class="box"><div class="box-i">
  <div>
{:/}

People perceive content through different senses depending on their needs and preferences. For example, some people are not seeing the screen or hearing the audio. Examples of perception include:

-   **Auditory** - such as speech, music, and sound that can be *heard*.
-   **Tactile** - such as dots, bars, and vibration that can be *felt*.
-   **Visual** - such as images, text, and video that can be *seen*.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_perception.mp4"
   captions="wai-videos/people-use-web/tools-techniques_perception.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Tools and Techniques - Perception"
   poster="content-images/people-use-web/tools-techniques/perception-video-frame.png"
%}

</div>

{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}

</aside>
{:/}

**Note:** The examples given in this section are not a complete list of all the ways that people interact with digital technology.

## Description

Some people need to convert content from one form to another to perceive it. For example, someone who is deaf-blind requires audio and visual content in a tactile form (such as [Braille](#braille){:.termref}). Other people need to perceive content through multiple senses, such as someone with dyslexia who may need to hear and see the text to understand it better.

Content in textual form can be more easily converted into other forms and is therefore particularly useful. However, text-only content poses barriers for many people who have difficulty with written language. Graphics and illustrations can be made accessible and often improve understandability, ease-of-use, and satisfaction with digital technology for everyone.

In some cases, content can be converted into different forms using software or hardware. For example, a text-to-speech software can convert text into speech. In other cases, content authors need to provide alternative forms of the content. For example, at least some level of human intervention is necessary to create textual descriptions for images and captions for audio content. Sometimes software tools, such as speech and picture recognition, can assist authors in providing such alternatives but the conversion is usually not fully automatable.

## Accessibility feature examples {#examples-of-accessibility-features}

- **Audio descriptions**{:#audio} – (also referred to as "video descriptions" and "described video") narrations that describe important visual details in a video. These narrations can be during natural pauses in the audio, or in separate audio files or audio tracks in multimedia.
- **Auditory, tactile, and visual notifications**{:#notifications} – prompting or alerting the user in different ways such as by blinking or displaying visual dialogs, by using sound, or by vibration.
- **Braille**{:#braille} – a system using six to eight raised dots in various patterns, to represent letters and numbers. These characters are read by scanning over the raised dots using the fingertips. Braille is used by people who are blind but not all individuals who are blind know braille.
- **Captions**{:#captions} (called “subtitles” in some areas) – a text version of the speech and non-speech audio information needed by people who are deaf and hard-of-hearing to understand content. Captions are synchronized with the audio and usually shown in a media player when users turn them on.
- **Sign language**{:#sign} – a visual form of communication that is primarily used by people who are deaf. It involves hand, body, and facial expressions to transmit words, phrase, and tone. For instance, the intensity of a gesture could indicate the mood or emphasis of particular information. As in written languages, there are many sign languages and dialects, some of which are recognized as official languages in some countries. Not all people who have auditory disabilities or who are deaf know sign language.
- **Symbols**{:#symbols} – icons that represent words or concepts used instead of text by some people with impaired communication, including people with difficulties reading or writing.
- **Text-to-speech**{:#tts} (sometimes called "speech synthesis" or "speech output") - automatic conversion of text into a synthesized voice reading the text aloud.
- **Transcripts**{:#transcripts} – text manuscripts containing the correct sequence of verbatim recording of any speech, and descriptions of important auditory or visual information.

## Assistive technology and adaptive strategy examples {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Refreshable Braille display**{:#braille_display} – a mechanical terminal that displays a line of [Braille](#braille){:.termref} characters (usually 40-80) by raising and lowering the dots (pins) dynamically. Braille displays may also be attached to standalone devices that have other functionality such as taking notes, calculating numbers, or to interface with devices such as public information kiosks.
- **Screen reader**{:#sr} – software that processes content on the desktop and in web browsers, and converts it to [text-to-speech](#tts){:.termref} and [Braille](#braille){:.termref}. Some screen readers provide other functions such as shortcut keys, different modes for processing content and interacting with it, and the ability to highlight the text that is being read aloud.
- **Voice browser**{:#vb} – similar to [screen reader](#sr){:.termref} but usually only processes web content. Voice browsers are typically not developed as assistive tools but as alternative web browsers for mobile devices or similar.

## Stories related to perception {#stories-related-to-perception}

- [Dhruv, older adult student who is deaf](/people-use-web/user-stories/story-six/)
- [Lakshmi, senior accountant who is blind](/people-use-web/user-stories/story-three/)
- [Stefan, student with attention deficit hyperactivity disorder and dyslexia](/people-use-web/user-stories/story-eight/)
- [Marta, marketing assistant who is deaf and blind](/people-use-web/user-stories/story-seven/)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Tools and Techniques - Perception {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="tools-techniques_perception"
  yt-id="dL8W-A4F1ZE"
%}

_This video is also available on a W3C server: [Video: Tools and Techniques - Perception (file format: MP4, file size: 264MB)](https://media.w3.org/wai/people-use-web/tools-techniques_perception.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology: Perception - hearing, feeling and seeing |  How people with disabilities use digital technology: Perception - hearing, feeling and seeing |
| When content is accessible, people can perceive it through different senses depending on their needs and preferences. For example, some people who can't see a screen or hear audio, rely on websites and apps that can present the information in different ways. | Collage of three people using technology devices. |
| People who are blind may use assistive technology on computers and mobile phones called screen readers. These software tools read the information on the screen out loud, or they can present it in Braille. | Blind man uses laptop to explore Wikipedia-style page about birds. |
| Link, heading level 2, Bird. Birds are a group of warm-blooded vertebrates constituting the class Aves, (/’eIvi:z/), characterised by feathers, toothless beaked jaws, the laying of -- | The content being read is highlighted on the page during narration. |
| Screen readers process websites and apps with correctly coded headings, lists, links, button, and other structures much better. | Man continues to use laptop. |
| People who are blind rely on hearing or touch, rather than sight. For video, content creators need to ensure that visual information is provided in auditory form as well. | The camera zooms to highlight an "Audio Description" button available below a video player on a website. |
| Often these descriptions of visual information can be placed in existing pauses in the audio, or the script can be created from the start with sufficient description of the scenes, characters, and other important visual information. | Man continues to use his laptop at his desk. |
| People who are deaf-blind also use screen readers to present the information using a device called a refreshable Braille display. Braille characters are a combination of raised or lowered dots, which people read by scanning over them with their fingertips. | Woman who is deaf-blind scans her fingers across a Braille device. |
| Similarly to people who are blind and deaf-blind, people who are Deaf and hard of hearing may use haptic feedback too; for example, through vibration alerts on a mobile phone instead of auditory notifications. | Deaf woman uses her laptop at a desk with her phone next to her. Her phone's camera flash blinks to alert her of a new message in a chat app. |
| People who are Deaf or hard of hearing often rely on seeing instead of hearing. For example, while watching a video they may use captions or sign language as an alternative to the audio. | Deaf man signs to colleagues on a video call, and an interpreter signs back their verbal response. |
| You can help make technology accessible to me. | Deaf-blind woman signs to the camera. |
| Accessibility: It's about people. | Collage of 12 people with different colored backgrounds. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people  |


{% include excol.html type="end" %}
