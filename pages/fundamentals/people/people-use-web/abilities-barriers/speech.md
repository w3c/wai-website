---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Speech"
nav_title: "Speech"
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

permalink: /people-use-web/abilities-barriers/speech/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/speech/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/abilities-barriers/physical/
  next: /people-use-web/abilities-barriers/visual/

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

Speech disabilities include difficulty producing speech that is recognizable by others or by speech recognition software. For example, the loudness or clarity of someone's voice might be difficult to understand.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_speech.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_speech.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Diverse Abilities and Barriers - Speech"
   poster="content-images/people-use-web/abilities-barriers/speech-video-frame.png"
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

People with speech disabilities encounter barriers with voice-based services, such as automated hotlines and applications that are operated using voice commands. To use services that rely on voice, people with speech disabilities need alternative modes of interaction such as text-based chat to interact with hotline representatives. Also, when the telephone numbers is the only means of communicating with an organization, it poses barriers for people with speech disabilities. Alternative means of communication include e-mail and feedback forms.

## Examples of speech disabilities {#examples-of-speech-disabilities}

- **Apraxia of speech (AOS)**{:#apraxia} – includes inconsistent articulation and production of speech sounds, and errors producing sounds in the correct order so that spoken words or phrases become difficult to understand.
- **Cluttering**{:#cluttering} (also called "tachyphemia") – includes increased speaking rate, incorrect rhythm, intonation, and co-articulation of sounds, and other influent speech that is sometimes similar to [stuttering](#stuttering){:.termref}.
- **Dysarthria**{:#dysarthria} – involves weakness or complete paralysis of muscles that are necessary to produce speech, including lips, lungs, throat, tongue, and others.
- **Speech sound disorder**{:#sound} – involves difficulty or inability to produce certain sounds or patterns of sound and sometimes results in addition, distortion, omission, or substitution of such sounds with others.
- **Stuttering**{:#stuttering} – includes influent speech, repetition of individual sounds or entire words and phrases, and misplacement or prolongation of pauses and sounds while speaking that is different from [cluttering](#cluttering){:.termref}.
- **Muteness**{:#muteness} (also called "mutism") – involves the inability to speak due to various reasons such as anxiety, brain injuries, or inability to hear and learn speech.

## Examples of barriers for people with speech disabilities {#examples-of-barriers-for-people-with-speech-disabilities}

-   Web-based services, including web applications, that rely on interaction using voice only.
-   Websites that offer phone numbers as the only way to communicate with the organizations.

{% include excol.html type="start" id="video-transcript" %}

##  Video:  Diverse Abilities and Barriers - Speech {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="abilities-barriers_speech"
  yt-id="oFF0lbRskKg"
%}
<p><em>This video is also available on a W3C server: <a href="https://media.w3.org/wai/people-use-web/abilities-barriers_speech.mp4">Video: Diverse Abilities and Barriers - Speech (file format: MP4, file size: 199MB)</a>.</em></p>

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology: speech disabilities. | How People with Disabilities Use Digital Technology: Speech Disabilities |
| Speech disabilities affect how people speak, including not speaking, or speaking in a range of different patterns, pitches, and sounds. | Collage of 4 people doing various activities on technology devices or with them nearby. |
| Some people do not speak at all. This can include people who are Deaf, autistic, have injured or no vocal organs, or have other conditions impacting physical or cognitive speech production. | Deaf man signing to colleagues on a video conference call. |
| Unfortunately, although it's a common misperception, speaking differently is not an indication of a person's intellectual capabilities. Many people stutter, pause, or pronounce words in a range of different patterns, pitches, and utterances due to various disabilities. | Man speaks to phone laying on table beside him, but looks frustrated. |
| While you might be able to understand me, automatic speech recognition systems often don't. | Man speaks to the camera. |
| Some people use a variety of different assistive technologies to generate speech. | Man in wheelchair typing on large keyboard. |
| I use software for generating speech, which is often not recognized by automatic speech recognition. | The phrase is shown with each word highlighted as it is spoken by the computer. |
| Websites and apps that require speech input can be a barrier for people with speech disabilities, especially when they rely on automatic speech recognition. | Man using laptop is frustrated. Website shows Customer Support that is only available by telelphone. |
| Instead, websites and apps, such as customer support systems, need to provide alternatives to voice calls, like chat or email. | Man continues to use laptop at desk. |
| You can help make technology accessible to me. Accessibility: It's about people. | Man speaks this phrase then pans to collage of 12 people with different colored backgrounds. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}