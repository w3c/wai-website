---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Cognitive and learning"
nav_title: "Cognitive and learning"
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

permalink: /people-use-web/abilities-barriers/cognitive/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/cognitive/  # Do not change this

navigation:
  previous: /people-use-web/abilities-barriers/auditory/
  next: /people-use-web/abilities-barriers/physical/

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

Cognitive and learning disabilities affect how people store, retrieve, or use information. Often, only some functions are impaired while others are unaffected. Many of these disabilities do not affect overall intelligence. Cognitive and learning disabilities are usually invisible and can be age-related. Many users may not have a formal diagnosis or disclose having a disability due to social stigma, vocational concerns and prejudices. Poor design or content choices can undermine or make impossible these different approaches.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_cognitive.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_cognitive.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Diverse Abilities and Barriers - Cognitive"
   poster="content-images/people-use-web/abilities-barriers/cognitive-video-frame.png"
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

Cognitive and learning disabilities is an umbrella term for a large spectrum of differences and disabilities. They may affect the ability to:

* Learn, communicate, read, write, do math, or process sensory input;
* Understand or process new or complex information and learn new skills;
* Use memory and attention or visual, language, or numerical thinking.

Often, only some functions are impaired while other cognitive functions are unaffected. For example, someone with dyslexia may have trouble reading words but not math equations. Sometimes, cognitive and learning disabilities may include intellectual impairments that affect comprehension, alongside written and spoken expression. People may also experience more than one type of cognitive and learning disability. Note that the terminology and definitions used for cognitive and learning disabilities varies between countries.

Computer technologies provide many opportunities for people with cognitive and learning disabilities to interact with content and to process information in ways that are more usable to them. For example, people can navigate digital content using different strategies, access information in text, audio, or other formats, and change the presentation of the content according to their individual needs or preferences.

To use the digital technology effectively, people with cognitive and learning disabilities often rely on:

* Clearly structured content that helps users focus and find what they need;
* Consistent labeling of forms, buttons, and other content parts so that users understand what they are being asked to do;
* Predictable link targets, functionality, and overall interaction;
* Different ways of navigating websites, such as hierarchical menus and search;
* Options to suppress blinking, flickering, flashing, and continually changing content;
* Clear content with simple words, short sentences, short blocks of text that is supported by images, graphs, and other illustrations;
* Designs that make errors less likely and that make it easy for users to correct errors.

People with cognitive and learning disabilities may use different types of browsing methods or tools to support their particular needs. For example, spell checkers to help when filling in forms, passwords management tools, and text-to-speech with synchronized highlighting of the phrase being read. Some people use tools that resize text and spacing or customize colors to assist reading. Others may require alternative presentation of content, such as additional symbols or simplification. For these methods to work, developers need to make products that support adaptation and personalization.

## Examples of cognitive and learning disabilities {#examples-of-cognitive-and-learning-disabilities}

-   **Age-related forgetfulness**{:#ageforgetful} (sometimes called "age-appropriate forgetfulness" or "age-related memory loss") —  impaired memory that can be a normal part of healthy aging, such as taking longer to learn new things and occasionally forget particular words.
-   **Attention deficit hyperactivity disorder (ADHD)**{:#adhd} (formerly "attention deficit disorder (ADD)") – involves difficulty focusing on a single task, focusing for longer periods, or being easily distracted.
-   **Autism spectrum disorder (ASD)**{:#asd} (includes “autism,” “Asperger syndrome,” and “pervasive developmental disorder” (PDD)) - involves impairments of social communication and interaction abilities, and sometimes restricted habits and interests.
-   **Brain Injury**{:injury} (traumatic or acquired) — damage that can happen at any stage in life and can lead to long-term impairment of executive function, memory, learning, coordination, speech, and emotions as well as other physical and sensory impairments.
-   **Dementia** — includes memory loss and trouble concentrating, following a conversation, and finding the right word.
-   **Dyslexia** - learning disability best known for its effect on the development of literacy and language-related skills.
-   **Dyscalculia** - learning disability that affects a person's ability to understand number-based information, including math.
-   **Intellectual disabilities**{:#intellectual} (called "[learning disabilities](#learning){:.termref}" or "developmental disabilities" in some areas) – involves impairments of intelligence, learning more slowly, or difficulty understanding complex concepts.
-   **Learning disabilities**{:#learning} – a general term used to describe difficulty learning new concepts. In Europe and some other countries, it refers to [intellectual disabilities](#intellectual){:.termref}.
-   **Mild cognitive impairment (MCI)**{:mci} — sometimes considered the stage between age-related forgetfulness and the more serious decline of dementia.
-   **Mental health disabilities**{:#mhealth} – includes disabilities that interfere with daily functioning due to challenges with self-regulation of emotions and thoughts. Examples include depression, anxiety, and post-traumatic stress disorder. These conditions may cause temporary or long-term challenges with accessing information, such as difficulty focusing on information, processing information, or understanding it.
-   **Multiple sclerosis**{:#ms} – causes damage to nerve cells in the brain and spinal cord, and can affect cognitive, physical, and visual abilities, in particular during relapses.

## Examples of barriers for people with cognitive and learning disabilities {#examples-of-barriers-for-people-with-cognitive-and-learning-disabilities}

-   Complex, multi-stage process such as forms.
-   Complex or inconsistent navigation mechanisms and page layouts that are difficult to understand and use.
-   Complex sentences that are difficult to read and unusua words that are difficult to understand.
-   Metaphors and other non-literal text whose meaning is not predictable from the usual meanings of the words.
-   Long passages of text without images, graphs, or other illustrations to highlight the context.
-   Moving, blinking, or flickering content, and background audio that cannot be turned off.
-   Passwords and access codes that rely on memory.
-   Time-outs on activities
-   Web browsers and media players that do not provide mechanisms to suppress animations and audio.
-   Visual page designs that cannot be adapted using web browser controls or custom style sheets.

## Stories related to cognitive and learning disabilities {#stories-related-to-cognitive-and-learning-disabilities}

- [Sophie, basketball fan with Down syndrome](/people-use-web/user-stories/story-five/)
- [Ian, data entry clerk with autism](/people-use-web/user-stories/story-two/)
- [Stefan, student with attention deficit hyperactivity disorder and dyslexia](/people-use-web/user-stories/story-eight/)
- [Elias, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/story-nine/)

{% include excol.html type="start" id="video-transcript" %}

##  Video:  Diverse Abilities and Barriers - Cognitive {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="abilities-barriers_cognitive"
  yt-id="4UaUSbyVFjk"
%}
<p><em>This video is also available on a W3C server: <a href="https://media.w3.org/wai/people-use-web/abilities-barriers_cognitive.mp4">Video: Diverse Abilities and Barriers - Cognitive (file format: MP4, file size: 321MB)</a>.</em></p>
###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
How People with Disabilities use Digital Technology: Cognitive and Learning Disabilities. | How People with Disabilities use Digital Technology: Cognitive and Learning Disabilities |
| Cognitive and learning disabilities affect how people process, understand, and remember information. They cover a wide range of cognitive differences and disabilities, and many of them do not affect overall intelligence. | Collage of four people in different settings using various technology. |
| For example, many people have varying degrees of dyslexia. Dyslexia affects the ability to recognize and sound out written words, which impact spelling and reading comprehension. Websites and apps with sufficient white space and headings to separate the content make it easier for people to read. | Man sits while using laptop on his lap. |
| Clear navigation with distinct section headers also make it easier for people to navigate through the content. | Scrolling view of a "Gifts for Book Lovers" e-commerce site with a clear page heading, side navigation for filtering results, and main section with a grid of items to purchase. |
| Websites and apps also need to work with reading tools, including tools that adjust how the text is presented, read the text aloud, and help with spelling and grammar. | Within an e-book, the man selects from among options that change the font and background styles. |
| Similarly, some people have varying degrees of dyscalculia. Dyscalculia affects the ability to process and work with numbers in mathematical concepts. Websites and apps that provide alternatives to mathematical abstractions, are easier to use for people with dyscalculia. | Woman using laptop at desk. |
| This could include showing a progress bar instead of or in addition to showing a percentage. | On a website, the 4 steps to complete an order are shown in a step progress bar along the top.|
| Websites and apps can also provide visual aids and text descriptions for things like schedules and temperatures. | Returns to the woman at her laptop nodding as she follows along with the content. |
| People have varying degrees of memory abilities, including short-term and working memory. Reduced short-term memory affects the ability to remember new things, such as passwords, or where in a process someone might be, especially in stressful situations. | Man uses his laptop at a desk. |
| Websites and apps with clear navigation and layout, prominent and unique page titles, and distinct instructions and cues can make it easier for people to remember where they are in the content. | A webpage  for entering shipping information has clearly labelled input fields and highly visible focus outlines on the currently active field. |
| Websites and apps can also help people remember information they have previously added, such as addresses and telephone numbers. | Returns to the man at his laptop, looking pleased to have completed his task. |
| People might have different levels of attention and focus. This includes people with attention deficit hyperactivity disorder (ADHD), brain trauma, age-related forgetfulness, and dementia. These cognitive differences affect the ability to focus and to resume a task after the user is distracted. | A woman at her laptop looks frustrated while using it. |
| In addition to breaking up longer passages of text and using headings, websites and apps without pop-up windows and automatically playing videos, sounds, or animations make it easier for people to focus and follow the content. | On a webpage, a distracting "promo" pop-up dialog window overtakes the screen and must be closed to continue. |
| Some people experience difficulty orienting themselves in layouts and visual designs that are new to them. | A man uses a desktop computer at his desk. |
| It may also be difficult for them to learn new keystrokes or gestures needed for interaction. Websites and apps with consistent and predictable designs and with clear and distinct instructions make it easier for people to know where they are and complete tasks. | While clicking through a website, the top navigation keeps changing on each new page, causing visible frustration on how to interact. |
| You can help make technology accessible to me. | Woman with dyscalculia speaks this phrase. |
| Accessibility: It's about people. | A collage of 16 different people with disabilities, including those featured in the video. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}
