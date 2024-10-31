---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Interaction - navigating and finding"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version
first_published: "as a draft in 1999"
description: Introduces some of the techniques and tools that people with disabilities use to interact with digital technology — browser settings, text-to-speech, speech recognition, and many more.

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/tools-techniques/navigation/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/tools-techniques/navigation/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/tools-techniques/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/input/

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

People navigate digital technology differently depending on their preferences, skills, and abilities. Similar to using different strategies for entering text and activating commands, people may use:

- Keyboard-only by those with cognitive, physical, and visual disabilities;
- Touchscreen-only by those with cognitive, physical, and visual disabilities;
- Mouse and keyboard with software that compensates for hand tremor or limited dexterity;
- Speech recognition, virtual mice, and other hands-free interactions.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_interaction.mp4"
   captions="wai-videos/people-use-web/tools-techniques_interaction.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Tools and Techniques - Interaction"
   poster="content-images/people-use-web/tools-techniques/interaction-video-frame.png"
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

People navigate and find content using different strategies and approaches depending on their preferences, skills, and abilities. For instance, someone using a website for the first time may need clearer guidance than someone who has more experience with the particular site, and someone using the Web on a mobile device with a small screen may require more orientational cues than someone using a desktop computer. While these are typically usability aspects that affect people with and without disabilities, some situations affect people with disabilities to a greater extent.

Examples of such situations include:

- A person is not seeing the screen and needing to get an overview and orient themselves by scanning the headings on a web page; the headings need to be also designed to support such purposes.
- A person who is only seeing small portions of the screen at a time due to screen magnification, and need to orient themselves using visual cues; the visual design needs to also support such purposes.
- A person using only the keyboard (or keyboard alternatives) to navigate through the web content; the structure of web pages need to be designed to also support and efficient use of the keyboard.
- A person who has difficulty remembering the addresses, names, or particular functionality of websites; web browsers need to provide supporting functionality that is easy to use and remember.
- A person who may have difficulty with hierarchical menu navigation, as how most navigation menus are designed to be; websites need to provide alternative mechanisms for navigation.

Many functions to support different styles of navigation are built directly into browsers and assistive technologies. For example, most commonly available browsers provide bookmark functionality, and screen readers provide functions to list headings, links, and other structures on a web page. However, the design of the content is also an essential factor to support different styles of navigation.

## Accessibility feature examples {#examples-of-accessibility-features}

- **Consistency and predictability**{:#consistency} – labeling of functions such as links, buttons, and controls should be consistent, and the expected function should be predictable from the label.
- **Descriptive titles, headings, and labels**{:#labels} – page titles, section headings, and labels for forms, links, and controls are sometimes read on their own or out of context and need to be descriptive.
- **Helpful error and success messages**{:#messages} – dialogs and other messages, such as after submitting forms, need to help users complete their tasks and avoid disorientation, distraction, confusion, or discomfort.
- **Multiple navigation mechanisms**{:#navigating} – websites need to provide multiple ways to locate web pages, for example by providing sitemaps and search functionality in addition to hierarchical navigation menus.
- **Skip links**{:#skip} – mechanisms to allow keyboard users to skip over repetitive blocks of content such as page headings, navigation bars, or menus. Note: too many skip links are counterproductive to this purpose.
- **Visual orientation cues**{:#cues} – examples include using background colors to indicate different parts of the content, using unique headings, and placing relevant information in prominent areas of a web page.

## Assistive technology and adaptive strategy examples {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Bookmarks and history**{:#bookmarks} – using web browser functions to help remember pages, find previously visited pages, or quickly go to pages without needing to type a web address.
- **Keyword search**{:#search} – using web browser functions to find text within a web page, and website functionality to search for web pages by keyword. Search engines that are maintained and optimized for a particular website can provide more precise search results.
- **Keyboard navigation**{:#keyboard} – moving through the content using the keyboard, typically by using the tab key to jump from one structural item such as link, header, or list item, to the next. Keyboard navigation largely depends on web browser support but also on website design features such as [skip links](#skip){:.termref}.
- **Page maps**{:#maps} – displaying a small image of the entire web page with an indicator highlighting the portion within the web page that is being currently viewed.
- **Pictorial links**{:#pictorial} – some web browsers, plug-ins, and websites show small images of the link targets (sometimes called "screen shots") rather than the addresses or names; for example in combination with [bookmarks and history](#bookmarks){:.termref} listings, back and forward buttons in web browsers, or links on web pages.

## Stories related to interaction {#stories-related-to-interaction}

- [Ade, reporter with limited use of his arms](/people-use-web/user-stories/story-one/)
- [Lakshmi, senior accountant who is blind](/people-use-web/user-stories/story-three/)
- [Stefan, student with attention deficit hyperactivity disorder and dyslexia](/people-use-web/user-stories/story-eight/)
- [Elias, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/story-nine/)
- [Sophie, basketball fan with Down syndrome](/people-use-web/user-stories/story-five/)
- [Marta, marketing assistant who is deaf and blind](/people-use-web/user-stories/story-seven/)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Tools and Techniques - Interaction {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="tools-techniques_interaction"
  yt-id="4xF23iGIAPE"
%}

_This video is also available on a W3C server: [Video: Tools and Techniques - Interaction (file format: MP4, file size: 241MB)](https://media.w3.org/wai/people-use-web/tools-techniques_interaction.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology: Interaction - navigation and finding | How people with disabilities use digital technology: Interaction - navigation and finding |
| When content is accessible, people can navigate and find information using different strategies and approaches depending on their preferences, skills, and abilities. | Collage of four people using various technology devices |
| Many people with cognitive and learning disabilities rely on clear layout and design to find information on websites and apps. This includes different ways of navigating the content, such as using hierarchical menus as well as search functionality; with visual orientation cues, such as using background colors to indicate different parts of the content; using unique headings; and placing relevant information in prominent areas. It's also important to use a consistent and predictable design. | Man at desktop computer searches around a pet supply website inclucing using the search field to find a product. |
| While many of these are typically usability aspects that affect people with and without disabilities, these situations often affect people with disabilities to a greater extent. For example, people with low vision who use screen magnification also rely on visual orientation cues to orient themselves and find information on websites and apps. | Woman with low vision uses magnification software on her desktop to view the same pet supply website, only seeing a portion of the screen at one time. |
| And consistency and predictability helps everyone. For example, people who are blind use screen readers to scan the content structures, such as headings, links, and navigational menus to get an overview and orient themselves. Websites and apps with clear and consistent headings, labels, and structures make the content more predictable and easier to navigate. | Blind man uses his laptop to navigate a webpage about visiting a library. The headings and side navigation on the site are highlighted during narration. |
| In addition, people who are blind rely on mechanisms to skip over blocks of content, such as headings, navigation bars, or menus, repeated within websites and apps. They also rely on websites and apps to provide clear instructions and help users identify and correct mistakes, such as incorrect dates, numbers, and other input. | A "Skip to main content" link on the library page is highlighted then activated. It moves the focus to the main content of the library page (past the navigation menus). |
| In addition, people with physical disabilities rely on consistent labels on websites and apps, which allow browsers to optionally remember previous entries. This speeds up typing because people can select previous entries, for example names and addresses. | Man in wheelchair types on laptop in web form. The name and address fields are automatically filled in by selecting a dropdown in the browser that has stored this information. |
| You can help make technology accessible to me.| Man (from first scene) speaks to camera. |
| Accessibility: It's about people. | Collage of 12 people with colored backgrounds. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people. w3.org/WAI/people  |


{% include excol.html type="end" %}