---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Presentation - distinguishing and understanding"
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

permalink: /people-use-web/tools-techniques/presentation/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/tools-techniques/presentation/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/tools-techniques/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/perception/
  next: /people-use-web/tools-techniques/input/

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

People adjust the presentation of content to make it easier to distinguish and understand. These adjustments include:

- Making audio content easier to hear and visual content easier to see;
- Combining audio and visual content to make information easier to understand;
- Providing alternative presentations of the content, such as sign-language.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_presentation.mp4"
   captions="wai-videos/people-use-web/tools-techniques_presentation.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Tools and Techniques - Presentation"
   poster="content-images/people-use-web/tools-techniques/presentation-video-frame.png"
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

Some people need larger text and image sizes or higher contrast between text and background colors to see the content better, and some people need louder audio with lower background noise to better hear the content. Some people need to turn off pop-up windows and animations that disorient or distract them. A sound that is automatically played, such as background music on a website, can also distract people or interfere with text-to-speech software. Digital content, browsers, and tools need to support adjusting the presentation according to peoples' needs and preferences.

Making text more readable is of particular importance. This involves changing its visual appearance, using additional text-to-speech, and adapting the content. For example, changing the font type, colors, spacing, and line width makes texts more readable for many people. Sometimes text-to-speech is used to assist reading further. Adapting the content involves rearranging sections of web pages, adding functionality such as dictionaries and glossaries, and hiding less used functionality. While these changes are often managed using specialized browsers and tools, website authors need to provide adequate coding to support such adjustments and adaptations.

Also, people process information differently. This aspect is particularly relevant for learning environments but also applies to many other situations. In some cases, authors can provide different representations of the same information to address the widest audience possible, such as graphical and tabular representations of data for people with different learning styles.

## Accessibility feature examples {#examples-of-accessibility-features}

- **Customized fonts and colors**{:#style} – changing the font types, sizes, colors, and spacing to make text easier to read. Customization involves browser settings and, for more advanced users, cascading style sheets (CSS) to override the default appearance of web content.
- **Document outline**{:#outline} – representation of the content that only shows the headings and relevant structures (such as headings nesting and hierarchy) to help provide orientation and an overview of the contents.
- **Easy-to-read text**{:#etr} – simplified summaries for passages of text to help make it easier to understand.
- **Progressive disclosure**{:#progressive} – design technique that involves showing only the least amount of information or functions necessary for a given task or purpose, to avoid overloading the user with information.
- **Reduced interface**{:#reduced} – representation of the content that only shows most relevant information or more frequently used functions; for example, by hiding other parts of the content that can distract users.
- **Screen magnification**{:#display} – changing the settings of the web browser, operating system, or screen to enlarge or reduce text size and images. Some people use magnification lenses, binoculars, or other visual aids, and software such as [screen magnifiers](#magnifiers){:.termref} to better see the content.
- **Symbols**{:#symbols} – icons that represent words or concepts used instead of text by some people with impaired communication, including people with difficulties reading or writing.

## Assistive technology and adaptive strategy examples {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Pop-up and animations blockers**{:#blockers} – web browser plug-ins or other software tools that stop automatic pop-up windows and redirection, and options to stop, pause, and hide animations.
- **Reading assistants**{:#reading} – software that changes the presentation of content and provides other functionality to make it more readable. Examples include:
  - Customizing the font type, size, spacing, or foreground and background colors;
  - Scanning the text for complex words and phrases, and linking them to glossaries;
  - Hiding less relevant parts of the content, such as sidebars and header areas;
  - Providing outlines of the page headings and summaries of the text passages;
  - Reading the content aloud and highlight the text as it is being read out loud.
- **Screen magnifier**{:#magnifiers} – software used primarily by people with partial sight to enlarge the content to make it easier to see. Some screen magnifiers provide [text-to-speech](#tts){:.termref} and other functionality.
- **Volume control**{:#volume} – options to adjust the volume of audio content being played, including options to turn off the sound altogether, that are separate from the overall system settings.

## Stories related to presentation {#stories-related-to-presentation}

- [Lexie, online shopper who cannot distinguish between certain colors](/people-use-web/user-stories/story-four/)
- [Dhruv, older adult student who is deaf](/people-use-web/user-stories/story-six/)
- [Stefan, student with attention deficit hyperactivity disorder and dyslexia](/people-use-web/user-stories/story-eight/)
- [Elias, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/story-nine/)
- [Sophie, basketball fan with Down syndrome](/people-use-web/user-stories/story-five/)
- [Marta, marketing assistant who is deaf and blind](/people-use-web/user-stories/story-seven/)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Tools and Techniques - Presentation {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
    video-id="tools-techniques_presentation"
    yt-id="tHS_WUAmkMo"
%}

_This video is also available on a W3C server: [Video: Tools and Techniques - Presentation (file format: MP4, file size: 334MB)](https://media.w3.org/wai/people-use-web/tools-techniques_presentation.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; presentation - distinguishing and understanding. | How people with disabilities use digital technology: Presentation - distinguishing and understanding |
| When content is accessible, people can adjust its presentation to make it easier to distinguish and understand. This could include adjusting screen size and color to see better, adjusting audio volume to hear better, or adjusting how text is presented to read it better. | Collage of 4 people doing different activities. |
| Some people with low vision increase the text size to make it easier to read. They might adjust properties in the web browser or operating system, such as increasing the default text size, font type, and line spacing, to better see the text. | Woman with low vision views her desktop monitor through a magnifier screen in front of the monitor. |
| Websites and apps that are programmed and designed to adapt to these properties, allow people to use the content without the text overlapping, getting cropped, or requiring them to scroll both vertically and horizontally. | Text on a W3C-WAI website is increased using the browser zoom feature, triggering responsive design. As the text size gets bigger, the navigation menus collapse into a single menu button and the text adjusts so all text fits in the screen width like what would be seen on a mobile device. |
| Other people with low vision increase everything on the screen, not only text. They might use screen magnification software as a digital magnifying glass. Some might also change the text and background colors to better read the text, and use text-to-speech to hear the text while they are reading. This means that websites and apps need to be programmed and designed to allow people to change the colors rather than forcing them to appear in a certain way. | The woman now explores a school website using magnification software, causing her to see portions of the page while moving the mouse to the right, opening a navigation menu, then moving left to read the list of choices. |
| Presentation is not only visual. People with auditory disabilities, for example, might need to increase the volume of online meetings and multimedia like videos, podcasts, and music, without increasing the volume of other system sounds, like notification alerts. Adjusting the bass, treble, and balance of the sound can make the audio easier to hear, so operating systems and media players need to provide these settings. Also, these settings work better with high-quality audio that does not have background noise. | Man with hearing aid watches a video on his laptop. While watching, he increases the volume within the video player. |
| Presentation adjustments can also make content easier to focus on, particularly for people with different types of cognitive and learning disabilities. This includes "reading modes" that hide less relevant parts of the content, such as sidebars and front matter; pop-up and animation blockers that help avoid distraction and interruption; and digital reading rules that help readers focus on one line at a time. | Man explores a W3C-WAI website on a tablet and activates the reading mode feature in the browser. This removes all content except text and makes the page look more like an e-reader book page in sephia coloring. |
| Some reading assistants, for example, those that some people with dyslexia might use, adjust how the text is presented to make it easier to read. This includes changing the font type, text size, colors, and the spacing between letters, sentences, and paragraphs. Some people read better with serif-type fonts and others with sans-serif fonts. Adjusting these properties are individual from one person to another, which is why flexible design is so important. | Woman uses her laptop to read an article. She uses font settings in the browser to change the font size and style of the article text. |
| Other reading assistants support comprehension. Some can process the text to simplify words and phrases, and sometimes also simplify complex sentences. These tools rely on proper programming and design to work. | Woman with Down syndrome reads a basketball article. The word "calorie" is underlined and, once hovered, shows a definition and image in a pop-up. |
| You can help make technology accessible to me. | Woman with Down syndrome speaks to camera. |
| Accessibility: It's about people. | Collage of 12 people with different colored backgrounds. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology,  visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}