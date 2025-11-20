---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Physical"
nav_title: "Physical"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version
first_published: "as a draft in 1999"
description: Explores the wide diversity of people and abilities. Highlights accessibility barriers that people may experience because of inaccessible digital technology.

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/abilities-barriers/physical/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/physical/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/abilities-barriers/cognitive/
  next: /people-use-web/abilities-barriers/speech/

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

Physical disabilities (sometimes called "motor disabilities") include weakness and limitations of muscular control (such as involuntary movements including tremors, lack of coordination, or paralysis), limitations of sensation, joint disorders (such as arthritis), pain that impedes movement, and missing limbs.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_physical.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_physical.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Video: Diverse Abilities and Barriers - Physical"
   poster="content-images/people-use-web/abilities-barriers/physical-video-frame.png"
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

To use digital technology, people with physical disabilities often use specialized hardware and software such as:

- Ergonomic or specially designed keyboard or mouse;
- Head pointer, mouth stick, and other aids to help with typing;
- On-screen keyboard with trackball, joysticks, or other pointing devices;
- Switches operated by foot, shoulder, sip-and-puff, or other movements;
- Speech recognition, eye tracking, and other approaches for hands-free interaction.

People with physical disabilities may be using a mouse or mouse-like device only, or keyboard or keyboard-like device only to operate the computer. People with physical disabilities rely on keyboard support to activate functionality provided on web pages. They may need more time to type, click, or carry out other interactions, and they may type single keystrokes in sequence or use sticky keys rather than typing simultaneous keystrokes ("chording") to activate commands. Such keystrokes include commands for special characters, shortcut keys, and to active menu items.

People with physical disabilities may have trouble clicking small areas and are more likely to make mistakes in typing and clicking. Providing large clickable areas, enough time to complete tasks, and error correction options for forms are important design aspects. Other important design aspects include providing visible indicators of the current focus, and mechanisms to skip over blocks, such as over page headers or navigation bars. People with cognitive and visual disabilities share many of these requirements.

## Examples of physical disabilities {#examples-of-physical-disabilities}

- **Amputation**{:#limbs} – includes missing fingers, limbs, or other parts of the human body.
- **Arthritis**{:#arthritis} (previously called "[rheumatism](#rheumatism){:.termref}") – inflammation, degeneration, or damage to the joints.
- **Fibromyalgia**{:#fibromyalgia} (formerly called "[rheumatism](#rheumatism){:.termref}") – the chronic pain of muscle and connective tissues.
- **Rheumatism**{:#rheumatism} – typically refers to [arthritis](#arthritis){:.termref} and other causes of bone or joint pain, and sometimes to [fibromyalgia](#fibromyalgia){:.termref} and other causes for muscular and other soft tissue pain.
- **Reduced dexterity**{:#dexterity} – is a functional term (rather than a medical condition) that describes the ability to control the hand, such as hand-eye coordination of people with cognitive and neurological disabilities.
- **Multiple sclerosis**{:#ms} – causes damage to nerve cells in the brain and spinal cord, and can affect physical, cognitive, and visual abilities, in particular during relapses.
- **Muscular dystrophy**{:#md} – progressive weakness and degeneration of muscles, sometimes including in arms and hands.
- **Repetitive stress injury (RSI)**{:#rsi} (also called "repetitive motion disorder" (RMD) and "cumulative trauma disorder" (CT)) - involves injuries to the musculoskeletal system (bones, joints, tendons, and other connective tissues) and the nervous system from repetitive tasks and damage.
- **Tremor and spasms**{:#tremor} – involuntary movement or muscle contraction, including short twitches, and continual or rhythmic muscle contractions.
- **Quadriplegia**{:#quadriplegia} (sometimes called "tetraplegia") - partial or total paralysis (includes motor control and sensation) to all four body limbs (legs and arms) and the torso.
- **Seizure disorders**{:#seizure} – includes different types of epilepsy and migraines, which may be in reaction to visual flickering or audio signals at certain frequencies or patterns.

## Examples of barriers for people with physical disabilities {#examples-of-barriers-for-people-with-physical-disabilities}

- Websites, web browsers, and authoring tools that do not provide full keyboard support.
- Insufficient time limits to respond or to complete tasks, such as to fill out online forms.
- Controls, including links with images of text, that do not have equivalent text alternatives.
- Missing visual and non-visual orientation cues, page structure, and other navigational aids.
- Inconsistent, unpredictable, and overly complicated navigation mechanisms and page functions.

## Stories related to physical disabilities {#stories-related-to-physical-disabilities}

- [Ade, reporter with limited use of arms](/people-use-web/user-stories/story-one/)
- [Elias, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/story-nine/)

{% include excol.html type="start" id="video-transcript" %}

##  Video:  Diverse Abilities and Barriers - Physical {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="abilities-barriers_physical"
  yt-id="z_5l75rksSA"
%}


_This video is also available on a W3C server: [Video: Diverse Abilities and Barriers - Physical (file format: MP4, file size: 277MB)](https://media.w3.org/wai/people-use-web/abilities-barriers_physical.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; physical disabilities. | How people with disabilities use digital technology: Physical disabilities |
| Physical disabilities affect how people move, including an inability to move, limited mobility, a lack of coordination, tremors and involuntary movement, pain that impedes movement, as well as missing and non-typical limbs. | Collage of 3 people using their devices. |
| People who use a mouse might have difficulty with fine motor control. | Man seated at desk uses his laptop. |
| For example, tremors, non-typical joints, pain, or fatigue can prevent people from being able to select small targets, such as small links, buttons, and controls. | Man is using trackpad with visible hand tremor. He uses a website where a checkbox can only be selected by clicking the checkbox square, which is difficult to do. |
Websites and apps with large clickable areas around checkboxes, radio buttons, and other controls, are easier to use for people with limited mobility and reduced dexterity. | He now uses a different website that allows selecting the text label next to a radio button and checkbox, rather than solely the radio button circle and checkbox square. |
| Other people use speech input instead. While speech input uses the keyboard interface in the background, websites and apps that are programmed and designed with consideration for speech input are more effective. For example, when the name of a button in the code matches the name displayed visually, people using speech input know what they need to say to click that button. "Click send email." | Man in wheelchair sits at a desk as he dictates an email message using his laptop. |
| Some people do not use a mouse, touch screen, or other pointing devices. They might use specialized keyboards with larger keys, or more space between the keys. Some use tools such as a mouthstick or headstick to type. | Man with irregular hand movement uses a keyboard with large keys to type. |
| Websites and apps that make functions visibly clear with active focus styles and usable with keyboard only are easier to use for people with physical disabilities. | Website for entering shipping information has clear visual outline around the currently focused field and typed letters appear at the pace of the man using the large keyboard. |
| Regardless of the input device used, websites and apps that provide sufficient time to type and to complete tasks are easier to use for people with physical disabilities because it might take people longer to navigate and type, and to correct typing mistakes. | Man in wheelchair with non-typical limbs holds and uses tablet. |
| Providing clear headings and instructions helps people to understand the tasks and reduces the time needed to complete them. This includes instructions for forms and functionality, as well as error messages and dialogs. | Web form is shown featuring large heading and instructions, clear labels, and clearly marked required fields. The man makes a selection from a dropdown. |
| Finally, websites and apps that work in both portrait and landscape orientation are easier to use for people who have their devices mounted to their wheelchair, desk, or bed. | Man in wheelchair continues to use tablet. |
| You can help make technology accessible to me. Accessibility: It's about people. | Man in wheelchair speaks the phrase, "You can help make technology accessible to me," then the view pans to collage of 12 people with different colored backgrounds. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people  |


{% include excol.html type="end" %}
