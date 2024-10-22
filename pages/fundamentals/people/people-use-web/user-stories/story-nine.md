---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Elias, retiree with low vision, hand tremor, and mild short-term memory loss"
nav_title: "Elias"
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

permalink: /people-use-web/user-stories/story-nine/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-nine/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-eight/

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

Elias is an 85-year-old retired architect. Over the years, Elias has experienced a decrease in vision, hearing, and short-term memory and he has a slight hand tremor. He uses digital technology for all sorts of activities including staying in touch with family, reading the news and architecture articles, and ordering groceries. However, using technology can be difficult when he can't use the adjustments he needs, like when sites and apps don't allow increased text size, require clicking small areas of the page, and make him type information with each visit rather than store it.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_9.mp4"
   captions="wai-videos/people-use-web/user-stories_9.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Elias, retiree with low vision, hand tremor, and mild short-term memory loss"
   poster="content-images/people-use-web/user-stories/elias-video-frame.png"
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

## About Elias

> I love all this new technology. It is great to see my grandchildren. It takes me a bit to find all the controls and sometimes they are a bit on the small side, but I get there in the end.

Elias is hard of hearing and has low vision, hand tremor, and short term memory loss. Elias had a long and successful career as an architect. He delayed retirement until he was in his 70's because as the senior architect in his firm, he was often sought after to mentor the new hires and guest lecture at local universities. Elias has macular degeneration that blurs his vision and makes reading more difficult. Over time, the demands of the close-up work necessary to render architectural drawings strained his eyes to the point that he could only work a couple of hours at a time. He finally had to stop work when he developed a mild hand tremor and found it too difficult to maintain the precision required for his work.

Currently, at age 85, Elias's family has started to notice some short term memory loss. Even so, Elias maintains an active interest in the history of architecture and is part of a small group of people who share his passion and write about it online. His blog has an active following and helps ensure he is still able to contribute to the field.

Like many older people, Elias has difficulty reading small text. He subscribes to an online rather than physical version of the newspaper because he is able to increase the size of the text, making it easier to read. However, on some sites this does not work as well because either the text gets cut off or the larger text doesn’t flow to the next line and he has to scroll horizontally off screen. His tremor makes it difficult to scroll across in a straight line. While this is easier than managing the large pages of a print newspaper, the best instance is when the text resizes and reflows properly.

For all of the benefits of using a computer to read the news and stay active in his field, Elias often has difficulty with the security on some websites. On sites that use CAPTCHA, it is sometimes hard for him to identify the distorted text or identify the images in photos because they are usually not clearly rendered. On sites that send a security code, Elias has to interrupt what he is doing to look on his phone and copy a code, and sometimes the codes are long and hard to transcribe correctly. When using a site that requires CAPTCHA, Elias finds it much simpler if the text or images are easy to identify. If a security code is required, a short group of numbers or letters makes it easier to read and transcribe.


## Barrier examples

Inaccessible CAPTCHA
: **Barrier**: "When I login to my online banking I need to complete a CAPTCHA but I can't really read it well."
: **Works well**: "My banking login sends me a text with a simple code to confirm it is me."

Text doesn't reflow
: **Barrier**: "When I resize a website using my browser some of the text disappears or is cut short and sometimes I have to scroll across the screen as well as down."
: **Works well**: "When I resize a website using my browser the text is all still available and is presented in a longer thinner column that doesn't need to be scrolled sideways."

Distracting animations
: **Barrier:** "When my screen is magnified, animations are very distracting because I don't get the full context of what is going on."
: **Works well:** "Allow me to stop any animation on the screen so I can concentrate on what I'm looking at."

Tables don't zoom well
: **Barrier:** "Online tables sometimes have a lot of space between the columns and when I'm zoomed it, I have to scroll from left to right to see all of the content and I often miss the association from one column to the next."
: **Works well:** "When I zoom the tables change from lots of columns to being presented more like a list with each row being shown as a list item."

Breadcrumb
: **Barrier:** "I often lose my place on websites. Sometimes I follow several links and it's not what I'm looking for. I can use the back button to go back page by page but I still get lost."
: **Works well:** "A breadcrumb at the top of each page that shows my path through the site keeps me on track, plus it helps me get back to the home page really quickly."

Login page
: **Barrier:** "I have accounts with so many different websites that sometimes I forget my password."
: **Works well:** "An option to remember my password for this site and a means of resetting my password if I need to."

Saved information
: **Barrier:** "When I place an order, I have trouble remembering things, like telephone number, address, and credit card details."
: **Works well:** "This store remembers from before, so I only need to select right address in the text field, rather than need typing each time."

## Assistive technologies and adaptive strategies used

* [Screen magnification (Presentation)](/people-use-web/tools-techniques/presentation/#display)
* [Alternative keyboard and mouse (Input)](/people-use-web/tools-techniques/input/#input)
* [Keyboard and mouse filters (Input)](/people-use-web/tools-techniques/input/#filters)
* [Mouse customization (Input)](/people-use-web/tools-techniques/input/#mouse)
* [Bookmarks and history (Interaction)](/people-use-web/tools-techniques/navigation/#bookmarks)
* [Consistency and predictability (Interaction)](/people-use-web/tools-techniques/navigation/#consistency)
* [Descriptive titles, headings, and labels (Interaction)](/people-use-web/tools-techniques/navigation/#labels)
* [Helpful error and success messages (Interaction)](/people-use-web/tools-techniques/navigation/#messages)

## Related WAI resources

* Use case: [Gopal: A Retired Lawyer with Dementia](https://www.w3.org/TR/coga-usable/#gopal-a-retired-lawyer-with-dementia)
* Video: [Large Links, Buttons, and Controls](/perspective-videos/controls/)
* Tip: [Provide sufficient contrast between foreground and background](/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* Tip: [Avoid CAPTCHA where possible](/tips/developing/#avoid-captcha-where-possible)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Tip: [Provide clear instructions](/tips/writing/#provide-clear-instructions)
* Tip: [Keep content clear and concise](/tips/writing/#keep-content-clear-and-concise)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Provide clear and consistent navigation options](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Tip: [Provide easily identifiable feedback](/tips/designing/#provide-easily-identifiable-feedback)
* Tip: [Use headings and spacing to group related content](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Tip: [Help users avoid and correct mistakes](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Tip: [Provide meaning for non-standard interactive elements](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* Tip: [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Check: [Contrast ratio ("color contrast")](/test-evaluate/preliminary/#contrast)
* Check: [Resize Text](/test-evaluate/preliminary/#resize)
* Check: [Keyboard access and visual focus](/test-evaluate/preliminary/#interaction)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)

## Related principles

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Users are helped to avoid and correct mistakes (Understandable)](/fundamentals/accessibility-principles/#tolerant)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)


{% include excol.html type="start" id="video-transcript" %}

##  Video: Elias, retiree with low vision, hand tremor, and mild short-term memory loss {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_9"
  yt-id="c-IqJdL0i38"
%}

_This video is also available on a W3C server: [Video: Elias, retiree with low vision, hand tremor, and mild short-term memory loss (file format: MP4, file size: 162MB)](https://media.w3.org/wai/people-use-web/user-stories_9.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| ----- | ----- |
| How people with disabilities use digital technology; Elias, retiree with low vision, hand tremor, and mild short-term memory loss. | How people with disabilities use digital technology; Elias, retiree with low vision, hand tremor, and mild short-term memory loss. |
| Hello! I’m Elias. I’m a retired architect. Life moves slower now that I’m retired, and I think my body does too! | A man speaks directly to the camera. |
| I see less and hear less than in my younger days. Also, my hands shake a little. My children live far away, so we see each other online instead. We also write to each other and send pictures. It’s so much easier and quicker than going to the post office every time. | The man is sitting at his desk using a laptop. He is participating in an online video call with one other person using a video conferencing app. |
| My trouble is all this small text! Why do they write so small? I know how to make the text size bigger but it doesn’t work with all websites. Sometimes everything seems to break down – the text overlaps or goes somewhere else or disappears completely. Or, I have to scroll sideways to read – I don’t have the time and energy for that. | The man is sitting at his desk using a laptop. He is trying to use a website which does not have responsive design. |
| It’s the same with apps. I made the text bigger on my mobile phone. I can’t see without doing that on such a small screen. Most apps work well but not the banking app. The text on that app is still small, and I need to use it to log into my bank account. I already called them several times about this but nothing happens. | The man is sitting at his desk using a zoomed-in messaging app on a mobile phone. He then changes to using a banking app. |
| It’s not only reading, though. When the text is small, all the buttons and links are also small. Sometimes tiny. Especially on forms where you have to click and select all these things – it’s hard with my hands, they don’t behave like they used to. | The man is sitting at his desk using a laptop. He tries to make a selection from a list, but the text is very small. |
| Our grocery store now has an online shop, which is fantastic because I don’t have to carry all the shopping any more. The text is big and it has big links and buttons. It just seems clearer and easier to find things – everything is where it should be on every page. Usually, I have trouble remembering things, like the telephone number, address, and credit card details. This store remembers from before, so I only need to select the right address in the text field rather than needing to type it each time. I wish all websites could be that easy. | The man is sitting at his desk using a laptop. He is successfully using the website of his online grocery store. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}


