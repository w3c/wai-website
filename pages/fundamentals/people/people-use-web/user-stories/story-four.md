---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Lexie, online shopper who cannot distinguish between certain colors (color blindness)"
nav_title: "Lexie"
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

permalink: /people-use-web/user-stories/story-four/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-four/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-three/
  next: /people-use-web/user-stories/story-five/

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

Lexie is an older adult who loves online shopping and fantasy football. Lexie cannot see all colors equally well. Websites and apps that rely on colors alone present barriers for Lexie. Using color alone to highlight text and to indicate areas in a chart also present barriers for Lexie but fortunately her work colleagues have learned ways for using other visual markers in addition to color.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_4.mp4"
   captions="wai-videos/people-use-web/user-stories_4.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Lexie, online shopper who cannot distinguish between certain colors (color blindness)"
   poster="content-images/people-use-web/user-stories/lexie-video-frame.png"
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

## About Lexie

> Sometimes completing the check out process is tricky because if I overlook a mandatory field, I get an error or warning message in red and it’s hard for me to see the message.

Lexie was born with deuteranopia and protanopia (often called "color blindness") and has difficulty distinguishing among items that are red, green, orange, and brown, all of which appear to her as kind of murky brown.

Lexie discovered that shopping for clothes online is actually an advantage over going to physical stores. In addition to just showing pictures of items in the various colors offered, her favorite sites include color labels, making coordinating what goes together much easier. Sometimes when checking out though, the required fields and error messages are notated with a red outline and Lexie has to pay special attention to identify them. She noticed lately, however, that a lot of sites are getting better about using a secondary notation like an asterisk for required fields and bold text or an arrow pointing to errors. This really helps a lot.

Much to people's surprise, Lexie is also a big football fan and has been playing fantasy football with family and workmates for years. Sometimes there can be problems with the way these sites use color to differentiate between teams, player positions, and whether or not players are selected for her team. As a result, she tends to prefer certain fantasy football apps that don't use color as the only way to indicate information that is important to playing. This means she has to try and convince friends to play using the same app.

Along with her fun, Lexie still stays connected to the latest news and happenings. This is made easier when charts and graphs related to the articles show data with other visual techniques than just color. For instance, if a pie chart also has patterns and text labels she can more easily and quickly read the information without getting frustrated or being left out completely.

## Barrier examples

Using color only
: **Barrier:** "When I select a color choice there is nothing to help me differentiate between the colors."
: **Works well:** "Color choices are shown with a descriptive name. The good sites have a link to a slightly longer description of the color."

Color only used for errors
: **Barrier:** "When filling out a form online, required fields and errors are marked with a red outline."
: **Works well:** "In addition to color, an asterisk or words are used to identify required fields and errors."

Color only in games
: **Barrier:** "When I play an online game, enemies are marked with a red circle and friends marked with a green circle and I can't tell the difference."
: **Works well:** "Enemies are also marked with a symbol or use a red triangle so I can easily identify them."

Chart labels
: **Barrier:** "When I am reading news articles with data charts, I can't understand the charts as the columns aren't labelled clearly."
: **Works well:** "The columns are directly labelled or use a texture as well as color."

## Assistive technologies and adaptive strategies used

* [Customized fonts and colors (Presentation)](/people-use-web/tools-techniques/presentation/#style)

## Related WAI resources

* Video: [Colors with Good Contrast](/perspective-videos/contrast/)
* Video: [Customizable Text](/perspective-videos/customizable/)
* Tip: [Provide sufficient contrast between background and foreground](/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* Tip: [Don't use color alone to convey meaning](/tips/designing/#dont-use-color-alone-to-convey-information)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Check: [Contrast ratio ("color contrast")](/test-evaluate/preliminary/#contrast)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)


## Related principles

* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)
* [Success Criteria relating to “contrast”](https://www.w3.org/WAI/WCAG21/quickref/?tags=contrast)


{% include excol.html type="start" id="video-transcript" %}

##  Video: Lexie, online shopper who cannot distinguish between certain colors (color blindness) {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_4"
  yt-id="eh091V45uqc"
%}

_This video is also available on a W3C server: [Video: Lexie, online shopper who cannot distinguish between certain colors (color blindness) (file format: MP4, file size: 274MB)](https://media.w3.org/wai/people-use-web/user-stories_4.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Lexie, online shopper who cannot distinguish between colors (color blindness). | How people with disabilities use digital technology; Lexie, online shopper who cannot distinguish between certain colors (color blindness). |
| Hello! I’m Lexie. I was born with deuteranopia and protanopia, which people often call “color blindness”. | A woman speaks directly to the camera. |
| I have difficulty distinguishing between red, green, orange, and brown, all of which appear to me as kind of murky brown. In a store, I often can’t tell the color of two shoes or two shirts beside each other. I love online shopping because it’s often easier for me when they use the names of the colors in addition to showing the colors. | The woman is sitting on a sofa using a tablet, looking at different coloured t-shirts in an online shop. |
| Unfortunately, not all online shops have an accessible checkout experience for me. Often the sign-up or checkout form says “fields in red are required”. Ugh! Most times I can’t tell which fields are required when they use color only. Good shops either have the word “required” or that little star beside the fields, or even better put the word “optional” beside the ones I can skip. | The woman is sitting on a sofa using a tablet, trying to complete an online form, with some sections marked in red. |
| Not relying on color alone is important for other websites and apps too. For example, my favorite fantasy football app has a symbol for each team on the jersey of the players, in addition to color. This helps me spot the players on my team more quickly, not just by reading the names under each player. | The woman is sitting on a sofa using a mobile phone, looking at a fantasy football app. |
| Color issues also happen at work. For example, when my colleagues highlight words in a document without using the commenting function. The commenting function outlines the marked text in addition to highlighting it. Another example is when charts don’t have symbols as well as the colors for lines and bars – I can’t identify them from color alone. My team is usually careful about this but sometimes the suppliers we work with aren’t. | The woman is sitting on a sofa using a tablet, reading through a report which shows highlighted words and phrases as well as a pie chart. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The woman speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}
