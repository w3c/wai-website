---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ade, reporter with limited use of his arms"
nav_title: "Ade"
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

permalink: /people-use-web/user-stories/story-one/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-one/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/
  next: /people-use-web/user-stories/story-two/

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

Ade is a reporter who has limited use of his arms. He has several strategies for navigating websites, including using his palm to operate a joystick, using one finger to press keys on the keyboard, which allows him to move up and down the page and tab from link to link, and, more recently, using speech recognition. All of these methods, however, have drawbacks. When using the joystick, it’s hard to click on small targets such as placing the cursor between words or at the end of a sentence. When using the keyboard, it’s sometimes hard to know which page element has focus, plus the order of links often does not always match what he sees when looking at the page. Speech recognition has promise, but it involves a whole new way of working for someone who is used to typing. So that Ade can switch from one method to another, it’s important to make sure that links and other interactive page elements have visual focus indicators; that the tab order matches the visual order of the links on the page; and that content reflows correctly when zoomed to enlarge it.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_1.mp4"
   captions="wai-videos/people-use-web/user-stories_1.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Ade, reporter with limited use of his arms"
   poster="content-images/people-use-web/user-stories/ade-video-frame.png"
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



## About Ade

> It’s not like I can’t use a keyboard or pointer, I just can’t use them for long periods because it is tiring.

Ade was involved in an accident that injured his spinal cord. This left him with limited use of his arms and no movement or sensation in his legs. He has worked as a reporter for many years. Ade sometimes uses a keyboard with larger keys to help him more easily press the correct key, and a joystick instead of a mouse. However, using these devices for extended periods can be tiring for Ade. So he has started using speech recognition software for some tasks, such as dictating long passages or words to transcribe them into text.

Rather than using his fingers to maneuver a mouse, Ade uses the palm of his hand to operate a joystick with an enlarged lever. This can be inaccurate to use, particularly when pointing to and clicking on small areas. When this happens, he sometimes switches to using a keyboard for navigation, where he can use the tab key to move through links and form elements. Ade has found that on some sites while using a keyboard, he cannot see which field or link has focus. He has also found that sometimes the links are not in a logical order, which makes it hard to find the content he’s interested in. He could always revert to using his joystick, but that can interrupt his flow and slow him down. Sites often include good visual styling when you hover over a link, but sometimes they do not include such styling when the link has keyboard focus. For Ade, it’s important that websites clearly show which link has focus and that he can navigate through links in a logical order — that is, the order of the links he tabs to follows the visual order of the links on the page.

When using a keyboard, Ade has found some features really help. For example, a skip link that enables him to jump past all the navigation links to the start of the main content on the page saves him a lot of time. Ade tries to avoid sites that do not have a skip link. However, this can limit his research sources.

Ade has started using speech control software, which helps him avoid having to use a joystick and keyboard so much. The software allows him to select and ‘click’ on links by speaking, but this is only possible when the links are clear and coded correctly. Speech control software also has a speech-to-text dictation feature that Ade finds useful. As someone who has spent years typing out his articles, Ade is having to train himself in a new way of working since his accident. He would still prefer to type as he thinks he’s much slower using dictation, but he’s hopeful that his speed will improve.

Outside work, Ade finds his tablet easier to use than his computer because it has simpler navigation and does not require a pointer device. He also has more options to place the device in a position he is comfortable with. He wishes his employer would create a mobile-friendly or responsive site that he could use for his job.

## Barrier examples

Focus styling barrier
: **Barrier:** “When I tab through links and form fields there is no visual styling to show me which element I am on.”
: **Works well:** “There is clear, strong visual styling for links and form fields when they receive focus.”

Process time outs barrier
: **Barrier:** “I usually take much longer to complete long forms or processes and often get timed out.”
: **Works well:** “At the start of a long form or process, I am told that there is a time out and given the option to set it to be slightly longer.”

Saving progress barrier
: **Barrier:** “Completing long forms with no way to save progress and take a break can be tiring.”
: **Works well:** “I have an option to save progress and take a break when completing long, multi-step forms, like when I have to get a code in email or text and type it in.”

Popup windows barrier
: **Barrier:** “When a window opens and I can’t close it using only the keyboard it can be difficult.”
: **Works well:** “New windows have a close icon that I can access using the keyboard, and some include the option to press the Escape key to close them.”

## Assistive technologies and adaptive strategies used

* [Accelerators (Input)](/people-use-web/tools-techniques/input/#accelerators)
* [Alternative keyboard and mouse (Input)](/people-use-web/tools-techniques/input/#input)
* [Speech recognition (Input)](/people-use-web/tools-techniques/input/#speech)
* [Word prediction (Input)](/people-use-web/tools-techniques/input/#prediction)
* [Keyboard navigation (Interaction)](/people-use-web/tools-techniques/navigation/#keyboard)
* [Skip links (Interation)](/people-use-web/tools-techniques/navigation/#skip)

## Related WAI resources

* Video: [Speech Recognition](/perspective-videos/voice/)
* Tip: [Use headings to convey meaning and structure](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Associate a label with every form control](/tips/developing/#associate-a-label-with-every-form-control)
* Tip: [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Check: [Keyboard access and visual focus](/test-evaluate/preliminary/#interaction)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)

## Related principles

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Functionality is available from a keyboard (Operable)](/fundamentals/accessibility-principles/#keyboard)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Users are helped to avoid and correct mistakes (Understandable)](/fundamentals/accessibility-principles/#tolerant)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Ade, reporter with limited use of his arms {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_1"
  yt-id="Z5dMdJzUy7w"
%}

_This video is also available on a W3C server: [Video: Ade, reporter with limited use of his arms (file format: MP4, file size: 162MB)](https://media.w3.org/wai/people-use-web/user-stories_1.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Ade, reporter with limited use of his arms. | How people with disabilities use the digital technology; Ade, reporter with limited use of his arms. |
| Hello! I’m Ade. I’m quadriplegic, which means I have limited movement in my arms as well as in my legs. | A man in a wheelchair speaks directly to the camera. |
| The technology I use is really important to me. I use a lot of keyboard shortcuts, especially for the programs that I use often. For example, scrolling a page is much easier with the arrow keys on the keyboard than by clicking on that button in the scroll bar. | The man is sitting at a desk using a laptop. He uses the arrow keys to scroll up and down a web page. |
| Unfortunately, many websites and apps don’t work well with my keyboard. Often what has focus isn’t clear or jumps around completely out of order. | The man uses the Tab key to complete sections of a form. |
| Sometimes that doesn’t work well because some websites and apps don’t work in landscape orientation, which is how I setup my tablet so that the buttons are big enough for me to click. | The man is sitting and using his tablet in landscape orientation. The web page he is trying to view does not rotate to a landscape orientation. |
| While I can use a keyboard and joystick, I can’t use them for long periods because it’s tiring. So, I recently started using speech control software as well. It allows me to dictate text instead of typing, and to say certain commands instead of clicking. It’s really hard to learn a new way of working after so many years, but I’ve been patient with it and I’m slowly getting used to it. The most difficult thing is buttons without labels – it’s not clear which voice command would activate them. | The man is sitting at a desk. He is talking to his laptop to write an email. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}
