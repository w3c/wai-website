---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Lakshmi, senior accountant who is blind"
nav_title: "Lakshmi"
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

permalink: /people-use-web/user-stories/story-three/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-three/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-two/
  next: /people-use-web/user-stories/story-four/

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this
# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
 <!--  <p>Note about video description: The video on this page does not include synchronized audio description because the visuals only illustrate the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. Description of visual information is available in the Text Transcript with Description of Visuals (“descriptive transcript”).</p> -->
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

Lakshmi is a senior accountant who is blind. She relies on a screen reader to announce the content in the software she uses at work and she uses a standard keyboard to enter commands to navigate and enter information. Recently Lakshmi’s company migrated from desktop software to online applications, some of which present barriers for Lakshmi, such as when images don’t include alternative text or short-cut keys conflict with the screen reader commands. Other sources of frustration include multiple levels of navigation (e.g., nested menus), forms that don’t make it clear to the screen reader what the fields are meant to contain, and visual CAPTCHA with either no or a poor auditory alternative. Lakshmi really likes using her mobile phone and tablet because of the built-in screen reader functionality, plus their portability. When away from home, Lakshmi can find directions, pay for things, and keep up with her family and friends via email and text.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  
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

## About Lakshmi

> My mobile phone is so convenient - the accessibility features on it are so easy to use. Shame I can't access our corporate systems with it!

Lakshmi is blind. She is a senior accountant at an insurance company that uses web-based documents and forms over a corporate intranet. Lakshmi's work computer has a screen reader which provides her with information on the state and content of applications on her computer in a speech output form. Because of her job, Lakshmi spends a lot of time working with spreadsheets, presentations and documents. Her company moved from using desktop applications to everything being stored online. Lakshmi was concerned that the change would make things worse for her.

Complex web applications are often challenging for Lakshmi. Many have multiple layers of navigation and require users to cross-reference content. This is more difficult to do with a screen reader which reads back content in a linear fashion. Sometimes they use short-cut keys that are the same as the quick keys used by the screen reader software. So far everything seems to work well though and it is the usual problems of colleagues not creating their documents with accessibility in mind, for example, presentations that don't include text alternatives for images.

Part of Lakshmi's role is to provide training to employees. Most of this is conducted online as staff are spread out geographically. Lakshmi and her staff evaluated a number of training tools, such as video conferencing apps, before finding an effective application with accessibility features that meet the needs of a diverse staff with diverse abilities. One of the biggest challenges Lakshmi faced with these tools was the chat function. Many of the tools don't work with Lakshmi's screen reader. She would miss messages during meetings because the software didn't make her aware when a new message was delivered.

Outside of work, Lakshmi enjoys cooking, knitting, and travel, and she uses the web to find recipes, knitting patterns, and to book travel. She has found that online communities help her generate ideas that support all of her hobbies. Generally these are great but some of them use a visual CAPTCHA as part of the login process, making it impossible for her to access the forums without someone to assist her.

When she can, Lakshmi uses her mobile phone or tablet more than she uses her laptop or desktop computer. The phone and tablet have built-in screen readers that make them much easier for her to use. Using her mobile while travelling is fantastic as she can check location details and find directions.

## Barrier examples

Good use of headings
: **Barrier:** "I can't easily scan a page to find things that might be of interest to me."
: **Works well:** "When sites are laid out using properly marked up headings and paragraphs, I can use hot keys in my screen reader to quickly jump from one heading or paragraph to another, stopping at anything that sounds interesting."

Keyboard navigation
: **Barrier:** "Sometimes I can't control things on websites such as buttons and links. I can hear they are there but I can't press them."
: **Works well:** "When I can use the keyboard to navigate to things and press return to select them without having to get someone to help me."

Consistent layout
: **Barrier:** "I need to create a mental image of how a website is laid out. If that changes from page to page then it really slows me down."
: **Works well:** "When website pages are consistent. The links are all in the same place and things that sound the same in my screen reader behave the same on different pages."

Clear error messages
: **Barrier:** "Sometimes when I fill in a form on a website it won't let me submit it and it isn't clear why not."
: **Works well:** "Sites which have clear error messages and instructions on how to correct my mistake."

Changes elsewhere on a page
: **Barrier:** "There are times when content on a website changes but I don't always know about it."
: **Works well:** "It's great when my screen reader alerts me to changes on the page that I'm visiting."

Keyboard trap
: **Barrier:** "Some sites have modal windows that I can get stuck in because I can't seem to find anyway to close it."
: **Works well:** "Modal windows include a close and/or cancel button that can be accessed with the keyboard." 

## Assistive technologies and adaptive strategies used

* [Screen reader (Perception)](/people-use-web/tools-techniques/perception/#sr)
* [Text-to-speech (Perception)](/people-use-web/tools-techniques/perception/#tts)
* [Transcripts (Perception)](/people-use-web/tools-techniques/perception/#transcripts)
* [Consistency and predictability (Interaction)](/people-use-web/tools-techniques/navigation/#consistency)
* [Descriptive titles, headings, and labels (Interaction)](/people-use-web/tools-techniques/navigation/#labels)
* [Helpful error and success messages (Interaction)](/people-use-web/tools-techniques/navigation/#messages)
* [Keyboard navigation (Interaction)](/people-use-web/tools-techniques/navigation/#keyboard)
* [Skip links (Interaction)](/people-use-web/tools-techniques/navigation/#skip)

## Related WAI resources

* Video: [Text to Speech](/perspective-videos/speech/)
* Tip: [Write meaningful text alternatives for images](/tips/writing/#write-meaningful-text-alternatives-for-images)
* Tip: [Associate a label with every form control](/tips/developing/#associate-a-label-with-every-form-control)
* Tip: [Use headings to convey meaning and structure](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Tip: [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Check: [Image text alternatives ("alt text")](/test-evaluate/preliminary/#images)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)
* Check: [Multimedia (video, audio) alternatives](/test-evaluate/preliminary/#media)
* Check: [Basic Structure Check](/test-evaluate/preliminary/#structure)

## Related principles

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Captions and other alternatives for multimedia (Perceivable)](/fundamentals/accessibility-principles/#captions)
* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Functionality is available from a keyboard (Operable)](/fundamentals/accessibility-principles/#keyboard)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)
* [Success Criteria relating to “captions”](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions)
