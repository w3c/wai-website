---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Auditory"
nav_title: "Auditory"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: Explores the wide diversity of people and abilities. Highlights accessibility barriers that people may experience because of inaccessible digital technology.

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/abilities-barriers/auditory/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/auditory/  # Do not change this

navigation:
  previous: /people-use-web/abilities-barriers/
  next: /people-use-web/abilities-barriers/cognitive/

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/
acknowledgements: /people-use-web/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Note about video description: The video on this page does not include synchronized audio description because the visuals only illustrate the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. Description of visual information is available in the Text Transcript with Description of Visuals (“descriptive transcript”).</p>
  <p><strong>Date:</strong> Updated 25 June 2024. First published as a draft in 1999.<!-- CHANGELOG.--></p>
  <p><strong>Editor:</strong> Shadi Abou-Zahra. Previous editor: Judy Brewer. Contributors listed in ACKNOWLEDGEMENTS.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>) with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> and <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> co-funded by the European Commission (EC).</p>
---
{::nomarkdown}

<style>
  #introduction p {
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

Auditory disabilities range from mild or moderate hearing loss in one or both ears (“hard of hearing”) to substantial and uncorrectable hearing loss in both ears (“deafness”). Some people with auditory disabilities can hear sounds but sometimes not sufficiently to understand all speech, especially when there is background noise. This can include people using hearing aids.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_auditory.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_auditory.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Diverse Abilities and Barriers - Auditory"
   poster="content-images/people-use-web/abilities-barriers/auditory-video-frame.png"
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

**Note:** The examples given in this section are not a complete list of all disabilities or barriers.


## Introduction

While multimedia provides many opportunities for people with auditory disabilities, it also poses challenges when content is not designed to be accessible. For example, while video content can be used to communicate information visually, audio content needs to have alternatives, such as transcripts and captions, so that it is accessible for people with auditory disabilities.

To use multimedia, people with auditory disabilities often rely on:

-   Transcripts and captions of audio content, including audio-only content and audio tracks in multimedia;
-   Media players that display captions and provide options to adjust the text size and colors of captions;
-   Options to stop, pause, and adjust the volume of audio content (independently of the system volume);
-   High-quality foreground audio that is clearly distinguishable from any background noise.

For some people with auditory disabilities, sign language is the primary language, and they may not read the written language as fluently. Providing important information in sign language and using simpler text that is supplemented by images, graphs, and other illustrations help make digital content more understandable to many people. However, it is important to remember that not all people with auditory disabilities know sign language.

## Examples of auditory disabilities {#examples-of-auditory-disabilities}

-   **Hard of hearing**{:#hardofhearing} – mild or moderate hearing impairments in one or both ears.
-   **Deafness**{:#deafness} – substantial, uncorrectable impairment of hearing in both ears.
-   **Deaf-blindness**{:#deafblindness} – substantial, uncorrectable hearing and visual impairments.

## Examples of barriers for people with auditory disabilities {#examples-of-barriers-for-people-with-auditory-disabilities}

-   Audio content, such as videos with voices and sounds, without captions or transcripts.
-   Media players that do not display captions and that do not provide volume controls.
-   Media players that do not provide options to adjust the text size and colors for captions.
-   Web-based services, including web applications, that rely on interaction using voice only.
-   Lack of sign language to supplement important information and text that is difficult to read.

## Stories related to auditory disabilities {#stories-related-to-auditory-disabilities}

-   [Dhruv, older adult student who is deaf](/people-use-web/user-stories/story-six/)
-   [Marta, marketing assistant who is deaf and blind](/people-use-web/user-stories/story-seven/)


{% include excol.html type="start" id="video-transcript" %}

##  Video:  Diverse Abilities and Barriers - Auditory {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="abilities-barriers_auditory"
  yt-id="WZ4J8tKQ-Kw"
%}
<p><em>This video is also available on a W3C server: <a href="https://media.w3.org/wai/people-use-web/abilities-barriers_auditory.mp4">Video: Diverse Abilities and Barriers - Auditory (file format: MP4, file size: 362MB)</a>.</em></p>

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How People with Disabilities Use Digital Technology: Auditory Disabilities | How People with Disabilities Use Digital Technology: Auditory Disabilities |
| Auditory disabilities affect how people hear, including hearing less in one or both ears, not hearing, and hearing sounds in a range of different ways. | Collage of four people in different settings using laptops. |
| High-quality sound is important for many people with reduced hearing. Audio needs to be clear and background noise low to make speech easier to understand. | A woman nods as she watches a video on her laptop, but then turns her head trying to hear more clearly. |
| Websites and apps that allow users to adjust the volume of the audio that it is currently playing without changing the volume for other sounds from the computer, such as notifications, make it easier for people to hear the audio. | The woman adjusts the volume of the video from within the video player itself. |
| Some people with auditory disabilities use hearing devices but this does not always mean they can hear all audio, or hear it clearly. Websites and apps that do not rely on audio alone make it easier for people with different types of auditory disabilities to perceive the information. | A man wearing a hearing aid types on his laptop. |
| This includes using visual alerts and haptic feedback, such as vibration on mobile phones, in addition to audio. | A small notification dialog slides in and shakes on the man's laptop screen in the upper right corner. |
| Another example of visual alternatives to audio are captions. Captions provide important audio information in text format. They indicate who is speaking and important sounds, such as significant sound effects in a movie. | The man is now watching a video with captions turned on. He also adjusts his hearing aid. |
| Many people who use captions need to adjust the text size, font, and color to make the captions more readable. | A zoomed in view of the video player shows a "Captions Preferences" dialog with adjustable options including font, text color, and opacity. |
| While automatic captions are gradually improving, they are usually too inaccurate to rely on as an alternative. For example, they don't recognize specialized terms well, and the sentences can sometimes run together making it hard to keep up. | Hard to understand captions on a video read "thank you sir oh I'm so happy to be where I'm so thank you I'm trying to". The man viewing the video sighs out of frustration. |
| While many people with auditory disabilities do not use sign language, for many it is their primary language. There are many sign languages in different countries, regions, and cultures. Sign language is also different from written and spoken language. That means people are often translating between sign language and written language, and people’s levels of understanding of written language can vary. | A man uses sign language on a video call with colleagues. A sign language interpreter is visible along with the colleague currently speaking; the interpreter's video is "Pinned" to stay in view. |
| In order to see sign language clearly, people rely on high-quality video transmissions. This includes needing access to high-speed internet and devices that can handle high-quality video. | The man now leans into his laptop to see something more clearly. |
| People with auditory disabilities also include people who are deaf-blind. | A woman leans into a monitor which has a magnifiying screen in front of it. |
| Many people who are deaf-blind rely on communication that is tactile, like braille. Portable braille displays can convert text on the computer to braille letters that can be felt on the fingertips. And for multimedia, like videos, people rely on descriptive transcripts. This is text, such as an article or script, that contains all the audio and visual information so that the video can be understood without watching it. | The woman now reads from a refreshable braille display instead of looking at the screen. |
| You can help make technology accessible to me. | Man with hearing aids signs and speaks the phrase, "You can help make technology accessible to me". |
| Accessibility: It's about people. For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people  | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}