---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Sophie, basketball fan with Down syndrome"
nav_title: "Sophie"
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

permalink: /people-use-web/user-stories/story-five/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-five/  # Do not change this

navigation:
  previous: /people-use-web/user-stories/story-four/
  next: /people-use-web/user-stories/story-six/

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

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

Sophie, a mother with Down syndrome, works at a basketball stadium. She would like to be a senior assistant
but is hesitant to apply because she will have to learn new websites and software that may not
be written in language she can understand, for example using unfamiliar words, as well as
acronyms and abbreviations. Consistency, writing in plain language, and having small
paragraphs of information all help Sophie comprehend written content. Outside of work, Sophie
likes to take her kids to basketball games and has found that buying tickets using the venue’s
app is easier because there are fewer options and less clutter.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_5.mp4"
   captions="wai-videos/people-use-web/user-stories_5.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Sophie, basketball fan with Down syndrome"
   poster="content-images/people-use-web/user-stories/sophie-video-frame.png"
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

## About Sophie

> I like to buy tickets for home games because I know the site well. When I have to buy tickets for away games it is hard for me. All the different sites do things in different ways.

Sophie was born with Down syndrome and experiences barriers when dealing with abstract concepts, reading, and math calculations. Due to her distinct facial appearance and difficulties with speech, many people underestimate Sophie' intelligence and capabilities. Even though she has difficulty expressing herself, Sophie understands a great deal. She learned basic computer skills in vocational school and since then, she has taught herself how to use websites to order groceries and maintain her bank account, among other things.

Sophie loves basketball. She played on her school team and now plays in a local club. She is  an enthusiastic fan and takes her kids to games when she can. Buying tickets online can be difficult sometimes for Sophie. Venues all seem to have different ways to buy tickets and it can sometimes be confusing. This is particularly difficult when the venue website links off to a separate site that looks totally different. Especially confusing is when she clicks on a link and ends up in a PDF file. Sophie likes sites that have a consistent "feel" when going from section to section and page to page. This means the overall layout maintains a similar theme and the placement of the navigation doesn't change too much, and that she is warned when clicking on a link that goes to a different site.

Sophie works part-time at a basketball stadium. She is keen to become full-time job but worries that the jargon in the workplace will make this difficult at first. Writing in "plain language" is really helpful. If something can be said using simpler terminology or shorter sentences, that makes it easier for her to understand and use the information. Also, acronyms and abbreviations really slow her down because she has to spend time trying to figure them out or going to look them up. Headings are also a huge help as it splits up the page and she can digest information in smaller chunks, kind of like an outline of the page. When navigating a page, having good focus and link styling helps her know where she is and what she can click on.

Getting a mobile phone was a huge deal for Sophie. She finds that apps that have fewer options and fewer decisions are clearer for her and easier to use. Using the phone for shopping is really easy for Sophie. Being able to find the things she usually buys is a huge help.

## Barrier examples

Breadcrumb trail
: **Barrier:** "When I follow several links, sometimes I feel lost and I just want to get back to where I started."
: **Works well:** "A breadcrumb at the top of the page that shows all of the pages I was on helps me feel oriented and lets me go back to a familiar page."

Plain language
: **Barrier:** "Sometimes when I'm looking something up, I don't understand the words they use."
: **Works well:** "If simpler words can be used, use them. If there aren't simpler words, give me a definition or point me to a glossary. Avoid the use of acronyms and abbreviations."

Clear link styling
: **Barrier:** "Designers like to get fancy with links and sometimes it's hard to figure out the difference between the links and highlighted text or headings."
: **Works well:** "Use blue underlined text for unvisited links and purple for visited links."

Forms
: **Barrier:** "When I'm filling out forms, it's sometimes hard to know what they want in each field."
: **Works well:** "Tell me what fields are required, put a simple and clear label on each form field, and give me an example of the format they want, especially for dates."

Timeouts
: **Barrier:** "Because I'm a slow reader, it's frustrating when the website times out and I need to start all over."
: **Works well:** "Give a warning before the website times out and offer an option to stay online."

Headings and Links
: **Barrier:** "I get confused and overwhelmed when I'm on a page that has a lot of text."
: **Works well:** "It helps when pages are broken up into sections with clear headings. Also, pictures or images that show what is being said help my understanding and they break up the page so it's not so overwhelming. In-page links, like a table of contents, can help me to know what is on the page so I can quickly get to the information I'm looking for."

Animation
: **Barrier:** "Moving or animated text or pictures is really distracting. It keeps pulling my attention away from what I'm trying to do."
: **Works well:** "If there has to be moving or animated content, let me stop it."

## Assistive technologies and adaptive strategies used

* [Easy-to-read text (Presentation)](/people-use-web/tools-techniques/presentation/#etr)
* [Pop-up and animations blockers (Presentation)](/people-use-web/tools-techniques/presentation/#blockers)
* [Progressive disclosure (Presentation)](/people-use-web/tools-techniques/presentation/#progressive)
* [Reading assistants (Presentation)](/people-use-web/tools-techniques/presentation/#reading)
* [Reduced interface (Presentation)](/people-use-web/tools-techniques/presentation/#reduced)
* [Accelerators (Input)](/people-use-web/tools-techniques/input/#accelerators)
* [Spelling and grammar tools (Input)](/people-use-web/tools-techniques/input/#lexical)
* [Consistency and predictability (Interaction)](/people-use-web/tools-techniques/navigation/#consistency)
* [Descriptive titles, headings, and labels (Interaction)](/people-use-web/tools-techniques/navigation/#labels)
* [Helpful error and success messages (Interaction)](/people-use-web/tools-techniques/navigation/#messages)
* [Multiple navigation mechanisms (Interaction)](/people-use-web/tools-techniques/navigation/#navigating)

## Related WAI resources

* Use case: [George: A User who Works in a Supermarket and has Down Syndrome](https://www.w3.org/TR/coga-usable/#george-a-user-who-works-in-a-supermarket-and-has-down-syndrome)
* Video: [Understandable Content](/perspective-videos/understandable/)
* Tip: [Keep content clear and concise](/tips/writing/#keep-content-clear-and-concise)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Provide clear and consistent navigation options](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Tip: [Provide meaning for non-standard interactive elements](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* Tip: [Use heading and spacing to group related content](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)
* Check: [Moving, Flashing, or Blinking Content](/test-evaluate/preliminary/#moving)

## Related principles

* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Users are helped to avoid and correct mistakes (Understandable)](/fundamentals/accessibility-principles/#tolerant)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Sophie, basketball fan with Down syndrome {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_5"
  yt-id="gmrnVAQuSI8"
%}

_This video is also available on a W3C server: [Video: Sophie, basketball fan with Down syndrome (file format: MP4, file size: 282MB)](https://media.w3.org/wai/people-use-web/user-stories_5.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Sophie, basketball fan with Down syndrome. | How people with disabilities use digital technology; Sophie, basketball fan with Down syndrome. |
| Hello! I am Sophie. I have Down Syndrome. I love basketball! I played on my school team, and now I work in a stadium. | A woman speaks directly to the camera. |
| At work, we use an app for our team. It has a calendar with all our practices and games. My job is to record the scores and stuff like that. I can also use it to chat with the coach and with the players, and we use it to exchange photos and jokes too. | The woman is sitting in a gym, using a mobile phone. |
| Sometimes, I take longer to read things but this app is really easy to use. The event or name of the player is at the top, so I know where I am in the app. The calendar is also very clear. It shows the name of the month or the number of the week at the top too. Other apps we tried are too confusing – I could never tell where I am and how to get back. | The woman is sitting in a gym, using a basketball app on a mobile phone. |
| The biggest problem is buying tickets for games. I try to use this app for buying but sometimes I have to use other apps to get tickets. Some of these apps are too hard. When I click on something it goes somewhere else or opens another page. Or, it doesn’t have that blue box at the top and I don’t know where I am or how to get back. Sometimes, it takes too long, I have to start all over again. It’s a real pain. I wish buying tickets could be easier. | The woman is sitting in a gym, scrolling through and using a ticketing app on a mobile phone. |
| My dream is to become a senior assistant. I know I can do it. Sometimes it is hard for me to write long things but I use the spell-checker every time. It helps me when coaches use words I already know. Otherwise, it takes me even longer to find the words in the dictionary. | The woman is sitting at a desk using a laptop. She is reading a text and using the dictionary function to check words. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The woman speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |

{% include excol.html type="end" %}
