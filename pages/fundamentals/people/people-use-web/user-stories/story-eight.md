---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Stefan, student with attention deficit hyperactivity disorder and dyslexia"
nav_title: "Stefan"
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

permalink: /people-use-web/user-stories/story-eight/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-eight/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-seven/
  next: /people-use-web/user-stories/story-nine/

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

Stefan is a student who has dyslexia and attention deficit hyperactivity disorder (ADHD). Stefan finds it hard to maintain focus on his schoolwork, especially when reading a lot of dense text or following written instructions. He likes digital textbooks and websites that allow him to use text-to-speech software because he can follow both the written and auditory words. It’s important though that websites and other digital technology use plain language, a consistent layout, and don’t display pop-up ads or moving images, which are very distracting and confusing. Mobile apps and websites are often less cluttered and easier to use.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_8.mp4"
   captions="wai-videos/people-use-web/user-stories_8.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Stefan, student with attention deficit hyperactivity disorder and dyslexia"
   poster="content-images/people-use-web/user-stories/stefan-video-frame.png"
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

## About Stefan

> My text reader helps me focus on what I am reading. I don't use it all the time but for long text it is super helpful.

Stefan is a student with dyslexia and attention deficit hyperactivity disorder (ADHD). As a person with ADHD, Stefan has difficulty following multi-step or long tasks. This can make it hard to maintain focus on his schoolwork. Visual supports, such as icons and images, and good use of whitespace around what he is looking at can help him to focus. He can become lost in dense text and is unable to find the meaning. When this happens he gives up because it takes too long and is tiring. This has caused him to fall behind in his work compared to other students.

Stefan's school has recently transitioned to using digital textbooks. This has been a huge improvement for Stefan who can now use his text-to-speech software to aid his understanding of what are sometimes complex texts. Stefan also uses the web for research. Unfortunately, his experience on the web can be varied. Often sites contain content such as animated advertisments and graphics which he can find distracting.

Stefan finds it easier to use websites that have a simple and consistent layout with content written in plain language. Images or icons can also help to reinforce the meaning of the text. Sometimes he uses functionality in his text-to-speech software that allows him to change the page background color. This is especially helpful when he is tired. Stefan also uses captions when watching videos because both hearing and seeing the words reinforces their meaning.

Stefan is a fan of old science fiction movies and spends a lot of time on fan made sites and forums. He has spending limits on his card and he uses this to buy fan memorabilia. The design of these sites and purchasing process can make this difficult. They are often quite busy with distracting advertisements and complicated checkout forms. He has found that he can access these sites on his mobile phone where he can switch on the browser reading mode to remove a lot of the background clutter. This allows him to focus on the task and makes the steps much clearer.

Stefan experiences problems with sites where the navigation of the site is unclear. He finds it much easier to use sites that include functions such as a sitemap, breadcrumb trails, or a search function. Stefan has difficulty with spelling so benefits from search functionality, which suggests alternative spellings and error corrections.

## Barrier examples

Spelling suggestions
: **Barrier:** "I have difficulty with spelling and sometimes misspell words. Sometimes I don't get the search results I'm looking for."
: **Works well:** "I like when search tools offer alternative spellings or alternative search suggestions instead of just returning no results."

Browser settings aren't respected
: **Barrier:** "I use browser settings to specify the font, text size, and line spacing I need but some sites don't display my settings."
: **Works well:** "When I change settings in my browser, websites show those settings."

<!--Distracting pop-ups
: **Barrier:** "Banner ads and popups are distracting and make me lose focus on what I'm doing."
: **Works well:** "It's great when I can turn off these images using the ad blocker in my browser."-->

Complex language
: **Barrier:** "Complex language and sentence structure are confusing to me and hard to read and retain.
: **Works well:** Use short sentences and plain language as much as possible."

Excessive acronyms and abbreviations
: **Barrier:** "Excessive use of acronyms and abbreviations is distracting and I often must reread several times or sometimes just get stuck and give up."
: **Works well:** "Spell out the complete words of an acronym at least the first time it is used. Avoid or explain abbreviations."

## Assistive technologies and adaptive strategies used

* [Captions (Perception)](/people-use-web/tools-techniques/perception/#captions)
* [Screen reader (Perception)](/people-use-web/tools-techniques/perception/#sr)
* [Text-to-speech (Perception)](/people-use-web/tools-techniques/perception/#tts)
* [Pop-up and animations blockers (Presentation)](/people-use-web/tools-techniques/presentation/#blockers)
* [Reading assistants (Presentation)](/people-use-web/tools-techniques/presentation/#reading)
* [Spelling and grammar tools (input)](/people-use-web/tools-techniques/input/#lexical)
* [Consistency and predictability (Interaction)](/people-use-web/tools-techniques/navigation/#consistency)
* [Helpful error and success messages (Interaction)](/people-use-web/tools-techniques/navigation/#messages)
* [Keyword search (Interaction)](/people-use-web/tools-techniques/navigation/#search)
* [Multiple navigation mechanisms (Interaction)](/people-use-web/tools-techniques/navigation/#navigating)

## Related WAI resources

* Use case: [Tal: A Student who has Dyslexia and Impaired Eye Hand Coordination](https://www.w3.org/TR/coga-usable/#tal-a-student-who-has-dyslexia-and-impaired-eye-hand-coordination)
* Use case: [Yuki: A Yoga Teacher who has AD(H)D](https://www.w3.org/TR/coga-usable/#yuki-a-yoga-teacher-who-has-ad-h-d)
* Video: [Clear Layout and Design](/perspective-videos/layout/)
* Tip: [Use headings to convey meaning and structure](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Tip: [Provide clear instructions](/tips/writing/#provide-clear-instructions)
* Tip: [Keep content clear and concise](/tips/writing/#keep-content-clear-and-concise)
* Tip: [Include alternative text for images](/tips/developing/#include-alternative-text-for-images)
* Tip: [Help users avoid and correct mistakes](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Provide easily identifiable feedback](/tips/designing/#provide-easily-identifiable-feedback)
* Tip: [Use headings and spacing to group related content](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Check: [Image text alternatives ("alt text")](/test-evaluate/preliminary/#images)
* Check: [Headings](/test-evaluate/preliminary/#headings)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)
* Check: [Moving, Flashing, or Blinking Content](/test-evaluate/preliminary/#moving)
* Check: [Basic structure check](/test-evaluate/preliminary/#structure)

## Related principles

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Users are helped to avoid and correct mistakes (Understandable)](/fundamentals/accessibility-principles/#tolerant)
* [Content is compatible with current and future user tools (Robust)](https://www.w3.org/WAI/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Stefan, student with attention deficit hyperactivity disorder and dyslexia {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_8"
  yt-id="Ie-RaV7UTCU"
%}

_This video is also available on a W3C server: [Video: Stefan, student with attention deficit hyperactivity disorder and dyslexia (file format: MP4, file size: 346MB](https://media.w3.org/wai/people-use-web/user-stories_8.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Stefan, student with attention deficit hyperactivity disorder and dyslexia. | How people with disabilities use digital technology; Stefan, student with attention deficit hyperactivity disorder and dyslexia. |
| Hello! I’m Stefan. I have dyslexia and attention deficit hyperactivity disorder – ADHD. | A man speaks directly to the camera. |
| I have difficulty recognizing or sounding out written words, even though I use those same words in conversation all the time. It affects my spelling and my reading comprehension. It often takes me a long time to figure out the individual words I’m reading, and then it’s hard for me to remember how the words in a sentence fit together in a meaningful way. | The man is sitting down in a living room reading a magazine. |
| Digital books and documents are often much better for me. On the computer, on a tablet, or – my favorite – on my new e-reader. I can change the font type, text size, and line spacing, which makes it easier for me to read. I also use the read-aloud function because I read better when I can see and hear the text at the same time. It also highlights the words being read aloud and has a reading ruler, so that I can follow along more easily. | The man is sitting down in a living room reading from a tablet. He is changing the text formatting by adjusting the settings on the device. He then puts on his headphones to listen to the text and follows along with the highlighted text. |
| Sometimes, though, digital books and documents don’t work well. Sometimes they are just scanned images. These also can’t be read aloud and I can’t change the text size and font. Some don’t have bookmarks, which I use to jump to the parts I want to focus on. Or, there are long chunks or text without any headings, so I have difficulty focusing on the content. It’s so much easier when text has more spacing and graphics to make them easier to follow. | The man is sitting down in a living room reading from a laptop. He is scrolling through a complex document. |
| Another problem is when I have to do online research. I type in words, but sometimes I do it wrong, or use a different word that sounds the same, like “brake” when I mean “break”. Sometimes I land on websites with all these ads and things popping up and moving around the screen. With ADHD, I get distracted by these ads and videos, and sometimes I click on them and forget what I was meant to be doing. I use several pop-up blockers but they don’t always work. | The man is sitting down in a living room reading from a laptop. We see word options Brake/Break appear on screen. He then looks at a website which contains a number of advertisements and pop-ups. |
| When I find an article I want to read, I try to remember to switch to reading mode in my browser. This usually removes all the stuff around the page and lets me focus on the text. But some websites don’t work well and the ads still appear, or the text is too difficult for me to read. I love it when websites work well with my settings and extensions. Like, the extension for spelling and grammar, which helps me when I’m typing things like email. That’s very important for me. | The man is sitting down in a living room using a laptop. He types a short text and corrects an error using the spell checker. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}
