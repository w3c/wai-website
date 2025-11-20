---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Visual"
nav_title: "Visual"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version
first_published: "as a draft in 1999"
description: Explores the wide diversity of people and abilities. Highlights accessibility barriers that people may experience because of inaccessible digital technology.

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/abilities-barriers/visual/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/visual/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/abilities-barriers/speech/

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
  <p><strong>Editor:</strong> Shadi Abou-Zahra. Previous editor: Judy Brewer. Contributors listed in ACKNOWLEDGEMENTS.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> and <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> co-funded by the European Commission (EC).</p>
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

Visual disabilities range from mild or moderate vision loss in one or both eyes ("low vision") to substantial vision loss in both eyes ("blindness"). Some people have reduced or lack of sensitivity to certain colors (often called "color blindness"), or increased sensitivity to bright colors. These variations in perception of colors and brightness can be independent of the visual acuity.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_visual.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_visual.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Diverse Abilities and Barriers - Visual"
   poster="content-images/people-use-web/abilities-barriers/visual-video-frame.png"
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

People with visual disabilities typically rely on changing the presentation of digital technology into forms that are more usable for their particular needs. For example by:

-   Enlarging or reducing text size and images;
-   Customizing settings for fonts, colors, and spacing;
-   Listening to text-to-speech synthesis of the content;
-   Listening to audio descriptions of video in multimedia;
-   Reading text using refreshable Braille.

For these browsing methods to work, developers should use style sheets to separate content from its presentation and correctly code the structure so that it can be processed and presented in different ways by browsers and assistive technologies. For example, some people do not see the content and rely on lists, headings, tables, and other page structures to be properly coded so that they can be identified by browsers and assistive technologies.

Some people are only seeing small portions of the content at a time or are perceiving the colors and design differently. Some people are using customized fonts, colors, and spacing to make the content more readable, or they are navigating through the content using keyboard only because they cannot see the mouse pointer. An accessible design supports different presentations of the digital content and different ways of interaction.

## Examples of visual disabilities {#examples-of-visual-disabilities}

- **Color vision deficiency**{:#colorblindness} – includes difficulty distinguishing between colors such as between red and green, or between yellow and blue, and sometimes inability to perceive any color (often called "color blindness"). 
- **Low vision**{:#lowvision} – (in some regions also called "partial sight") includes: 
   - Vision that is not sharp or clear (low visual acuity)
   - Intolerance to light (photophobia or light sensitivity)
   - Inability to distinguish bright and dim areas of images or text against a background (contrast sensitivity)
   - Inability to obtain information when looking straight ahead (field of vision loss; can be central, peripheral, or scattered)
- **Blindness**{:#blindness} – substantial, uncorrectable loss of vision in both eyes. 
- **Deaf-blindness**{:#deafblind} – substantial, uncorrectable visual and hearing impairments.

## Examples of barriers for people with visual disabilities {#examples-of-barriers-for-people-with-visual-disabilities}

- Images, controls, and other structural elements that do not have equivalent text alternatives. 
- Text, images, and page layouts that cannot be resized, or that lose information when resized. 
- Missing visual and non-visual orientation cues, page structure, and other navigational aids. 
- Video content that does not have text or audio alternatives, or an audio-description track. 
- Inconsistent, unpredictable, and overly complicated navigation mechanisms and page functions. 
- Text and images with insufficient contrast between foreground and background color combinations. 
- Websites, web browsers, and authoring tools that do not support the use of custom color combinations. 
- Websites, web browsers, and authoring tools that do not provide full keyboard support.

## Stories related to visual disabilities {#stories-related-to-visual-disabilities}

- [Lakshmi, senior accountant who is blind](/people-use-web/user-stories/story-three/) 
- [Lexie, online shopper who cannot distinguish between certain colors](/people-use-web/user-stories/story-four/)
- [Marta, marketing assistant who is deaf and blind](/people-use-web/user-stories/story-seven/)
- [Elias, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/story-nine/) 


{% include excol.html type="start" id="video-transcript" %}

##  Video:  Diverse Abilities and Barriers - Visual {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
    video-id="abilities-barriers_visual"
    yt-id="bm8h1p9knzY"
%}

_This video is also available on a W3C server: [Video: Diverse Abilities and Barriers - Visual (file format: MP4, file size: 318MB)](https://media.w3.org/wai/people-use-web/abilities-barriers_visual.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How People with Disabilities Use Digital Technology: Visual Disabilities | How People with Disabilities Use Digital Technology: Visual Disabilities |
| Visual disabilities affect how people see, including partial vision in one or both eyes, not seeing at all, or seeing in a range of different ways including colors and brightness. | Collage of 4 people using digital devices in various settings. |
| People who are blind use assistive technology on computers and mobile phones called screen readers. These software tools can read the information on the screen out loud, or they can present it in Braille. | Man with sunglasses uses laptop at desk. |
| Screen readers can process websites and apps with correctly coded headings, lists, links, button, and other structures much better. \[Computer voice\] Bird migration is the regular seasonal movement, often north and south along a flyway, between breeding and wintering grounds. Many species of bird migrate. Migration carries high costs. A map of the world, showing some example bird migration routes, image.| Website scrolls with text and images defining bird migration terms. The paragraph read by the screen reader is highlighted. |
| Websites and apps also need to work with the keyboard, and have text alternatives for images. | Man continues to use his laptop. |
| However, most people with visual disabilities are not blind but have some form of low vision. This means that people can partially see, just not clearly or within the full range of vision. | Woman on couch uses her mobile phone. She looks frustrated while trying to see something. |
| Some people with low vision use screen magnification software as a digital magnifying glass to enlarge everything on the screen. This includes images, text, and the mouse pointer. With this, people only see small parts of the screen at a time, so they rely on visual cues and consistent design in websites and apps to stay oriented and navigate effectively. | On her phone she activates the zoom feature which enlarges the view of a webpage. The page pans across the screen to take in all the content. |
| Others with low vision might not use the same assistive technology. They might adjust properties in the web browser or operating system, such as increasing the default text size, to better see the text. Websites and apps that are programmed and designed to adapt to the properties set by users, such as different text sizes, font type, and line spacing, allow people to use the content without the text overlapping, getting cropped, or requiring them to scroll both vertically and horizontally. | Man uses laptop but struggles to see the current webpage. He presses Control+ to increase the text size, but the words on the page start to overlap and become unreadable. |
| People who cannot distinguish certain colors are often called "color blind". Websites and apps that avoid text with low contrast are easier to use. | Woman uses tablet while sitting on couch. |
| It’s also important that websites and apps don't use only color to communicate information, but do use text and symbols in addition to color, such as an asterisk to indicate required input fields. | A web form for shopping checkout shows required fields both with red text labels and an asterisk. Instructions explain "Required fields are marked in red with an *". |
| Some people are sensitive to bright light, so it's important that websites and apps can adapt to the color schemes that people might set in their browsers and operating systems. | A search results webpage shown with white background and black text is changed to a black background with white text by selecting a browser setting to "Dark Theme". | 
| You can help make technology accessible to me. Accessibility: It's about people. | Woman speaks the phrase, "You can help make technology accessible to me," then pans to a collage of 12 people with different colored backgrounds. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}
