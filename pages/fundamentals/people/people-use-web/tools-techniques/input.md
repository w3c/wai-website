---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Input - typing, writing, and clicking"
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

permalink: /people-use-web/tools-techniques/input/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/tools-techniques/input/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/tools-techniques/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/presentation/
  next: /people-use-web/tools-techniques/navigation/

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

People use different approaches to enter text and activate commands, for example:

- Keyboard only by people with cognitive, physical, and visual disabilities;
- Touch screen only by people with cognitive and physical disabilities;
- Mouse and keyboard with software that compensates for hand tremor;
- Speech recognition and other hands-free interaction.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_input.mp4"
   captions="wai-videos/people-use-web/tools-techniques_input.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Tools and Techniques - Input"
   poster="content-images/people-use-web/tools-techniques/input-video-frame.png"
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

## Introduction

Some people use software and customized settings to enhance the efficiency of typing, writing, and clicking. For example, some people assign personalized shortcut keys to functions they frequently use. Some people use word prediction software to help complete words and sentences with minimal typing, grammar and spelling tools to help correct text, and tools to help click, select text, and scroll with minimal movement.

Digital content needs to be designed to support these different types of approaches. For example, forms, links, and other functionality need to be usable by keyboard. In particular, applications ("client-side scripting"), embedded media players, and other programmatic objects need to provide full keyboard support that does not trap the keyboard focus within the program and larger clickable areas for buttons and links.

Accessible content supports people who need more time typing, writing, and clicking, or are more likely to make mistakes. For instance, some people forget to select options and fill out form entries, misspell words and mistype data (such as dates), or unintentionally activate buttons and links. Accessible content also provides enough time to complete tasks, clear and helpful error messages and options for correcting input.

## Examples of assistive technologies and adaptive strategies {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Accelerators**{:#accelerators} – software and functionality that help reduce the effort needed to type or click. For example, by providing options to create shortcuts for commands or sequences of commands, by highlighting selection choices such as menu items, links, or options, and by helping to steer the mouse.
- **Alternative keyboard and mouse**{:#input} – hardware and software primarily used by people with cognitive and physical disabilities to help interact with the computer. Examples include:
  - Keyboards with larger keys, key labels, key spacing, illuminated keys, or custom layouts;
  - On-screen keyboards, touch-screens, sip-and-puff switches, and single-key switches;
  - Trackballs, joysticks, touchpads, specially designed mice, and other pointing devices;
  - [Speech recognition](#speech){:.termref}, [eye tracking](#gaze){:.termref}, and other approaches for hands-free interaction.
- **Eye tracking**{:#gaze} (sometimes called "eye-gaze") - a system that monitors eye movement to control the mouse pointer and detects blinking to initiate mouse clicks.
- **Keyboard customization**{:#kbd} – includes changing the mapping of keys, assigning shortcut keys to functions, setting [filters](#filters){:.termref}, and setting "sticky keys" to support single-handed typing.
- **Keyboard and mouse filters**{:#filters} – functions of the operating system or software tools that recognize and compensate for involuntary movements such as tremor and spasms.
- **Mouse customization**{:#mouse} – includes changing the mapping of buttons, changing the sensitivity of the mouse towards movement, setting [filters](#filters){:.termref}, and changing the size and appearance of the mouse pointer.
- **On-screen keyboard**{:#screenkbd} – virtual keyboard displayed on a screen so that it can be used with a touchscreen, mouse, trackball, joystick, or other pointing devices.
- **Speech recognition**{:#speech} (sometimes called "speech input" or "voice command") - software that recognizes the human voice and can be used to dictate text or to issue commands to operate the computer.
- **Spelling and grammar tools**{:#lexical} – web browser functions, plug-ins, or other software tools to help users write.
- **Word prediction**{:#prediction} – software that presents selections of matching words, phrases, or sentences based on the current input (and sometimes context) to save typing.

## Stories related to input {#stories-related-to-input}

- [Ade, reporter with limited use of his arms](/people-use-web/user-stories/story-one/)
- [Stefan, student with attention deficit hyperactivity disorder and dyslexia](/people-use-web/user-stories/story-eight/)
- [Elias, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/story-nine/)
- [Sophie, basketball fan with Down syndrome](/people-use-web/user-stories/story-five/)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Tools and Techniques - Input {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
    video-id="tools-techniques_input"
    yt-id="HG4PXNRjXoU"
%}

_This video is also available on a W3C server: [Video: Tools and Techniques - Input (file format: MP4, file size: 305MB)](https://media.w3.org/wai/people-use-web/tools-techniques_input.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How People with Disabilities Use Digital Technology: Input - Typing, writing, and clicking | How People with Disabilities Use Digital Technology: Input - Typing, writing, and clicking |
| When content is accessible, people can use a variety of hardware and software to enter text and activate commands. | Collage of four people in various settings using technology. |
| Some people do not use keyboards, and use only pointing devices instead. This could include a specialized mouse, joystick, trackball, or touch screen to click links and buttons and to type on on-screen keyboards. | Man in wheelchair with non-typical limbs holds and uses tablet. |
| However, even when using these tools, people might have difficulty selecting small targets, such as small links, buttons, and controls. Websites and apps with large clickable areas around checkboxes, radio buttons, and other controls, are easier to use for people with limited mobility and reduced dexterity. | A website form appears and the man is typing entries such as phone number. For a radio button and checkbox selections, they are able to tap the label text rather than having to tap the actual radio button and checkbox controls. |
| Websites and apps also need to provide support for people who use the keyboard only. This includes providing ways to skip over repeated content, such as headers and navigation bars, as well as not breaking the default functionality in browsers and operating systems. | Man with irregular hand movement uses a keyboard with large keys to type. |
| For example, using the Tab key to move around clickable items in the content, using the Enter key for selecting items, and making the currenlty active item visible by showing a rectangular box around it. | A web form with a bold yellow ring around the currently active field. The focus moves from First Name to Last Name with the Tab key (rather than a mouse click). |
| Websites and apps that provide word prediction and accelerators, for example for search terms, reduce the amount of typing, and make them more efficient for keyboard users. | Man with irregular hand movement continues to use a keyboard with large keys to type. |
| Additionally, not everyone using only the keyboard can see the screen; for example, people who are blind. So, in addition to ensuring keyboard support, websites and apps also need to provide clear instructions, labels for form controls, error messages, and status notifications, so that people know what is happening on the screen. | A blind man types on his laptop, navigating through a web-based form with several dropdowns. They are able to make selections and move to the next dropdown using just the keyboard commands. |
| Websites and apps need to help people find and correct mistakes in their input; for example, by showing a summary of the entered data before submitting it. | Woman with Down syndrome uses her mobile phone to complete a form. A confirmation screen appears to confirm the typed entries before submitting. |
| They also need to provide sufficient time to complete tasks, or avoid timing limitations altogether. Many people with disabilities require more time to navigate and orient themselves in the content, and to click and type. In particular, people with cognitive and learning disabilities. | Woman continues to use her phone while at the gym. |
| Finally, websites and apps also need to consider people who do not use keyboard or pointing devices at all, and use speech input instead. For example, websites and apps need to be programmed and designed so that the name of a button in the software code matches the name displayed to the user. "Click send email." | Man in wheelchair with nontypical limbs dictates an email on his laptop. Once complete, he speaks aloud the "send email" command to send it. |
| You can help make technology accessible to me. | Man smiling at screen while computer speech audio relays his message. |
| Accessibility: It's about people. | Collage of 12 different people with colored backgrounds. |
| For more information from the Web Accessibility Initiative on how people with disabilities use the digital technology, visit w3.org/WAI/people | Accessibility: It's about people. w3.org/WAI/people |


{% include excol.html type="end" %}