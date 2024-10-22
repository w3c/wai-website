---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Dhruv, older adult student who is deaf"
nav_title: "Dhruv"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-six/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-six/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-five/
  next: /people-use-web/user-stories/story-seven/

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this
# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Note about video description: The video on this page does not include synchronized audio description because the visuals only illustrate the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. Description of visual information is available in the Text Transcript with Description of Visuals (“descriptive transcript”).</p>
  <p>First posted as a draft in 1999.</p>
  <p><strong>Editors:</strong> Kevin White and Shadi Abou-Zahra. Previous editors: Judy Brewer and Norah Sinclair. Contributors: Brent Bakken, Jade Matos Carew, Jayne Schurick, Michele Williams, and others in ACKNOWLEDGEMENTS.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https//www.w3.org/WAI/EO/">EOWG</a>) with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> and <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> co-funded by the European Commission (EC).</p>
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

Dhruv is a student who is deaf. Because his first, or native, language is sign language, Dhruv has difficulty reading content that is not well structured with consistent layout and navigation. At his university, many of the lectures are being posted online. This can present a barrier to Dhruv if the videos don’t contain captions or if the captions have mistakes or lag behind what the lecturer is saying. In his free time, Dhruv likes to watch movies and TV shows on his mobile device. These must contain accurate captions and also be coded so that he knows who is speaking.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_6.mp4"
   captions="wai-videos/people-use-web/user-stories_6.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Dhruv, older adult student who is deaf"
   poster="content-images/people-use-web/user-stories/dhruv-video-frame.png"
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

**Note:** This user story is an example of a person with this type of disability. Other people with this disability may have different experiences.

## About Dhruv

> Most people don't realise that sign language is a completely different language. I can read text captions but it takes me longer as they are not in my first language. Captions and signing aren't interchangeable.

Dhruv has been deaf since birth. He is a mature student, taking online courses. While he can hear some sounds, he does not hear enough to understand speech. Dhruv learned to sign as a young child. Sign language is his first language. As a result, written language can be difficult. He prefers written content to have good structure and headings with minimal jargon so that it's easier to understand.

Dhruv can lip read but can only do so effectively when he can see the full face of the person who is speaking. Even then, he can only do it well enough to pick up a few words here and there and can't rely on lip reading alone to understand content.

The university where Dhruv studies provides sign language interpreters and Communication Access Realtime Translation (CART); however, this captioning is not always present on video and other media content. The university is now working to caption all content across their curriculum, however it is a lengthy process. As more and more content is captioned, Dhruv is finding it easier to complete his studies remotely.

Dhruv spends a lot of his free time watching streamed content on video streaming services. The improvement in captioning of these services in recent years has meant he is able to watch more programmes than he was before. He can have difficulty when captions aren't clearly color coded to show who is speaking. Auto-captioning can be useful for him but it can also cause him problems if it's available but incorrect.

## Barrier examples

Inaccurate captions
: **Barrier:** "I love that my classes are recorded and available online but sometimes the captions don't convey the exact words that the instructor is saying, especially in some of my more technical classes."
: **Works well:** "When the captioner gets to know the material so they don't miss words or make mistakes."

Design of captions
: **Barrier:** "When watching movies online, the captions often cover parts of the video. Sometimes I miss things in the video and it makes the captions hard to read depending on the background."
: **Works well:** "Captions appear at the bottom of the screen but I can also move them if necessary. They are shown against a solid color background that offers good contrast between the captions and background."

Good camera position for speaker
: **Barrier:** "Some classes record the instructor speaking. This is great because I am good at lip reading but the camera is often too far away."
: **Works well:** "The camera is positioned to focus in on the instructor's face."

No alternative for audio
: **Barrier:** "When watching a news program online, there isn't an option for me to understand what the speaker is saying."
: **Works well:** "Provide audio alternatives such as sign language, captions or transcript. If there is a speaker in camera, focus in on the speaker."

## Assistive technologies and adaptive strategies used

* [Captions (Perception)](/people-use-web/tools-techniques/perception/#captions)
* [Transcripts (Perception)](/people-use-web/tools-techniques/perception/#transcripts)
* [Sign language (Perception)](/people-use-web/tools-techniques/perception/#sign)

## Related WAI resources


* Video: [Video Captions](/perspective-videos/captions/)
* Tip: [Create transcripts and captions for multimedia](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* Tip: [Include image and media alternatives in your design](/tips/designing/#include-image-and-media-alternatives-in-your-design)
* Tip: [Provide controls for content that starts automatically](/tips/designing/#provide-controls-for-content-that-starts-automatically)
* Tip: [Write code that adapts to the user's technology](/tips/developing/#write-code-that-adapts-to-the-users-technology)
* Check: [Multimedia (video, audio) alternatives](/test-evaluate/preliminary/#media)

## Related principles

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Captions and other alternatives for multimedia (Perceivable)](/fundamentals/accessibility-principles/#captions)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Success Criteria relating to “captions”](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions)


{% include excol.html type="start" id="video-transcript" %}

##  Video: Dhruv, older adult student who is deaf {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_6"
  yt-id="jft__DXkPv8"
%}

_This video is also available on a W3C server: [Video: Dhruv, older adult student who is deaf (file format: MP4, file size: 307MB)](https://media.w3.org/wai/people-use-web/user-stories_6.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Dhruv, older adult student who is deaf. | How people with disabilities use digital technology; Dhruv, older adult student who is deaf. |
| Hello! My name’s D-H-R-U-V, Dhruv. I’m Deaf. I can hear some sounds but not enough to understand speech. I use British Sign Language – I think and dream in signs. | A man speaks and signs directly to the camera. |
| I recently enrolled in an online degree. For my classes, I schedule interpreters who can interpret the lectures and conversations and voice for me. I need video conferencing apps with functionality to “pin” videos of the interpreters so that I can always see them. | The man is sitting at a desk using a laptop. He is participating in an online meeting using a video conferencing app. He alternates between multiple participant and pinned participant view. |
| Some lectures have real-time captioning typed by human captioners. This is more accurate than automatic captions, which often don’t recognize specialized terms in the lectures. For our assigned videos, I rely on good captions. These are edited so that each sentence appearing on the screen is not too long and is synchronized with the audio. I also often find myself needing to adjust the text size and colors of the captions, to be able to read them better. Some apps also allow me to move the captions to the top or bottom of the video, so that they are not in the way. | The man is watching a video in a media player and selecting English captions from a list of language options. He then selects options for how he wants the captions to be displayed. |
| In some situations, I find myself lip reading. For example, when I’m on unplanned calls without interpreters or other people who can sign. I learned lip reading over the years because of such situations but it’s not always reliable for me. I need to see the person’s mouth, have them speak clearly, and seeing their gestures also helps. Yet it’s exhausting and not really something I can keep doing for too long. | The man is sitting at a desk using a laptop. He is participating in an online meeting using a video conferencing app. |
| I also use the chat function. Some chat tools support real-time text rather than line-by-line text messages only. This is much more interactive. I can engage with my friends in text conversations as others do by voice. | The man is sitting at a desk using a laptop to talk to other people using a chat function. |
| Of course, the classes also come with a lot of reading. I’m fine with that, except when the writing is unnecessarily complex and without structures like lists and headings. People don’t realize that for me reading text involves extra effort, because sign language is my native language. So, like for everyone else, clear and simple writing makes text easier to understand. | The man is sitting at a desk using a laptop and reading through a long, complex text. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}