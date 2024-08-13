---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ian, data entry clerk with autism"
nav_title: "Ian"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-two/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-two/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-one/
  next: /people-use-web/user-stories/story-three/

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
  <p><strong>Date:</strong> Updated 25 June 2024.  First posted as a draft in 1999.<!-- CHANGELOG.--></p>
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

Ian is a data scientist who is autistic. Digital technology is generally easy for Ian, until 
something unexpected happens like a software update that affects parts of the system he has to 
work with. This causes Ian extreme anxiety. Outside of work, Ian likes to cook and uses recipe 
videos he finds online. Whether using his computer at work or at home, plain language and 
consistent navigation and page layouts are important. If something changes as the result of an 
update, it is best to tell Ian what has changed and give him time to adjust. Also, like many 
people with cognitive and learning disabilities, pop-up ads and videos that start playing 
automatically are frustrating and confusing.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>

  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_2.mp4"
   captions="wai-videos/people-use-web/user-stories_2.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Ian, data entry clerk with autism"
   poster="content-images/people-use-web/user-stories/ian-video-frame.png"
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

## About Ian

> I find it hard to focus on busy pages. For example, lots of animations and videos, particarly ones that start without me doing anything are really frustrating.

Ian is autistic. His autism was identified at an early age because of delays in speech development. Ian received a lot of early childhood support, which helped him develop language and social skills. However, he still experiences some barriers with verbal communication, especially when experiencing anxiety.

Ian works part-time as a data scientist. Working with a computer is easy for Ian, although updates to the data entry application can cause him problems if there are significant changes to the interface. This can cause feelings of axiety for Ian if he doesn't know the change is coming and given time to adapt. It can also be difficult for Ian if someone asks for some work that causes him to use parts of the system that he is not as familiar with. It is important that systems use a consistent layout and navigation.

Ian finds interacting with colleagues via email easy. He has worked with his team to help them appreciate how using plain language and not introducing new metaphors can help him. Many have said they also prefer less corporate jargon as well. 

Ian has his own living space in his parent's home, including his own kitchen. He has been learning how to cook using online videos. However, vague language, metaphors, and implied content in some of the videos makes them to understand. He finds straightforward, practical, step-by-step videos really helpful. Some of the cooking sites Ian uses have a lot of adverts on them with banners and video, which can be distracting. This is particularly bad if there is audio as well, especially if Ian can't control it easily. It is best when websites don't automatically play audio and video adverts, or at least let Ian control them.

## Barrier examples

Non-literal text
: **Barrier:** "I have difficulty understanding metaphors, acronyms, abbreviations, and words that aren't used in their literal sense."
: **Works well:** "Websites that spell everything out and don't use metaphors are easier for me to understand."

Plain language
: **Barrier:** "Sites that use "fancy" language or long sentences to describe a simple concept are hard to understand."
: **Works well:** "I'm better at understanding the content when the authors just use plain language and simple sentences."

Consistent layout and navigation
: **Barrier:** "I get confused when I go to a different page on a website and the layout and navigation aren't the same."
: **Works well:** "When there is a consistent "look" to the pages on a site, I can learn where things are."

Heading structure
: **Barrier:** "Long pages that are not broken up into sections are hard to read and understand."
: **Works well:** "Descriptive headings that are styled like an outline help me to find what I want and better understand the content."

Moving or blinking content
: **Barrier:** "Moving or blinking content is distracting and I can't remember what I wanted to do.
: **Works well:** It's best when sites don't use moving or blinking content but if they do, let me turn it off."

## Assistive technologies and adaptive strategies used

* [Pop-up and animation blockers (Presentation)](/people-use-web/tools-techniques/presentation/#blockers)
* [Reading assistants (Presentation)](/people-use-web/tools-techniques/presentation/#reading)
* [Volume control (Presentation)](/people-use-web/tools-techniques/presentation/#volume)
* [Spelling and grammar tools (Input)](/people-use-web/tools-techniques/input/#lexical)
* [Word prediction (Input)](/people-use-web/tools-techniques/input/#prediction)

## Related WAI resources

* Use case: [Amy: An Autistic Computer Scientist](https://www.w3.org/TR/coga-usable/#amy-an-autistic-computer-scientist)
* Video: [Understandable Content](/perspective-videos/understandable/)
* Tip: [Use headings to convey meaning and structure](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Tip: [Provide clear instructions](/tips/writing/#provide-clear-instructions)
* Tip: [Keep content clear and concise](/tips/writing/#keep-content-clear-and-concise)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Provide clear and consistent navigation options](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Tip: [Provide easily identifiable feedback](/tips/designing/#provide-easily-identifiable-feedback)
* Tip: [Help users avoid and correct mistakes](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Check: [Headings](/test-evaluate/preliminary/#headings)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)

## Related principles

* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content does not cause seizures and physical reactions (Operable)](/fundamentals/accessibility-principles/#safe)
* [Text is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Ian, data entry clerk with autism {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
    video-id="user-stories_2"
    yt-id="bhV7KMfoyT4"
%}

_This video is also available on a W3C server: [Video: Ian, data entry clerk with autism (file format: MP4, file size: 291MB)](https://media.w3.org/wai/people-use-web/user-stories_2.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Ian, data scientist with autism.| How people with disabilities use digital technology; Ian, data scientist with autism. |
|Hello! I’m Ian. I’m autistic. I work for a software company three bus stops from my home. | A man speaks directly to the camera. |
| I’m a data scientist. I enjoy my work very much. Others find this work difficult because it’s quite technical. But for me, it’s really easy. | The man is sitting at a desk using a computer and talking to a woman, standing next to him, about what they can see on the monitor. |
| Except when something changes and I don’t have enough time to figure out what changed. Like, when I was trying to get to an online meeting and found that the buttons on the app changed. It was very stressful because I was worried about being late to the meeting. Apps that ask for permission before updating allow me to find a suitable time and adjust to the changes. | The man is sitting and working at his desk. A software update appears on his computer screen. |
| Sometimes I press the wrong thing and everything just changes and I don’t know how to go back. It makes me feel like I just can’t cope. I am trying to work, but I just can’t and I start to panic, and then I can’t even talk anymore. It’s very important to me when I can roll back and undo changes that I didn’t intend or expect to happen. | The man is participating in an online meeting using a video conferencing app. He alternates between single participant and multiple participant view. |
| It’s also really frustrating when I have to stop work because of an error message that doesn’t tell me what the error is. Error messages that just say “input error” are so useless. Often it’s something really simple, like I didn’t use the right format for the date. Why doesn’t it say that? | The man is working at his desk. He is trying to complete a form and receives an ‘input error’ message. |
| I love to cook when I’m not working. My friends love to eat what I cook because I find the best recipes! Some cooking websites and apps are easy to use — my favourite recipe sites list the exact ingredients and have step-by-step instructions. It’s easy to find the recipes using the tags and to follow them. | The man is preparing food in a kitchen and reading instructions from a tablet. |
| Unfortunately, I can’t use some recipe sites even though they have recipes I really want to try. Especially the ones where all sorts of videos start playing and pop-up windows appear without me pressing anything. I didn’t ask for this! These are overwhelming and aren’t the recipe. All I want is the recipe! | The man is having difficulty reading the instructions because of advertisements and pop-up windows. |
| Or, some sites use meaningless words and phrases and don’t even bother explaining them. I mean, what is a ‘scant cup of brown sugar’? ‘Scant’ could mean so many different things. Instead of ‘scant’ just say what you mean, like ‘a cooking cup filled just below the top’, or ‘not quite a full cup’. That would be easier to understand for everyone.  | The man is preparing food in a kitchen and reading instructions from a tablet. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |



{% include excol.html type="end" %}
