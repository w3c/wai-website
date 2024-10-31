---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Making Audio and Video Media Accessible"
nav_title: "Audio & Video Media"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2024-09-17  # Keep the date of the English version
first_published: "September 2019"

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-media-guide

permalink: /media/av/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/   # Do not change

resource:
  title: "Making Audio and Video Media Accessible"
  ref: /media/av/
navigation:
  next: /media/av/users-orgs/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Covers captions/subtitles, description of visual information (audio description, video description, described video), media players, and other accessibility requirements.
image: /content-images/media-guide/social.png
 
# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
   <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Originally drafted as part of the <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA Project</a> funded by the <abbr title="United States">U.S.</abbr> Access Board. Revised as part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a> funded by the Ford Foundation.</p>
---

This resource explains how to make media accessible, whether you develop it yourself or outsource it. It helps you figure out which accessibility aspects your specific audio or video needs, provides project management guidance, and includes requirements from the Web Content Accessibility Guidelines (WCAG) standard.

Address the following components:

* {:.left} [{% include image.html src="media-guide/body.svg" alt="" %} User Experiences and Benefits to Organizations](/media/av/users-orgs/):<br>Understand the needs of people with disabilities. Learn about benefits to organizations, and benefits to everyone in a variety of situations.

* {:.left} [{% include image.html src="media-guide/planning.svg" alt="" %} Planning Audio and Video Media](/media/av/planning/):<br>Plan for accessibility from the very start of your project, to save time and money. For example, [integrated description](/media/av/av-content/#integrate-description) is easier and better for accessibility, and it needs to be included in the script before filming.

* {:.left} [{% include image.html src="media-guide/av-content.svg" alt="" %} Audio Content and Video Content](/media/av/av-content/):<br>Make new audio and video content accessible. Avoid accessibility barriers when planning, scripting, storyboarding, and recording your media.

* {:.left} [{% include image.html src="media-guide/ad.svg" alt="" %} Description of Visual Information](/media/av/description/):<br>Provide description so that people who are blind and others who cannot see the video adequately get the visual information needed to understand the content. This includes things like charts, graphs, and text such as speaker names, titles, and e-mail addresses.

* {:.left} [{% include image.html src="media-guide/cc.svg" alt="" %} Captions/Subtitles](/media/av/captions/):<br>Provide captions (also called “subtitles”) so that people who are Deaf and hard-of-hearing get a text version of the speech and non-speech audio information needed to understand the content.

* {:.left} [{% include image.html src="media-guide/transcript.svg" alt="" %} Transcripts](/media/av/transcripts/):<br>Provide a transcript, that is, a text version of the speech and non-speech audio information. Ideally, make it a descriptive transcript that also includes text description of the visual information. Descriptive transcripts are required to provide video content to people who are both Deaf and blind. ([descriptive transcript excerpt example](/media/av/transcripts/#descriptive))

* {:.left} [{% include image.html src="media-guide/sign.svg" alt="" %} Sign Languages](/media/av/sign-languages/):<br>Provide sign language when your audience needs it, so that Deaf people whose native language is sign get the content in their native language.

* {:.left} [{% include image.html src="media-guide/player.svg" alt="" %} Media Players](/media/av/player/):<br>Use a media player that supports accessibility.
{:.nolist.withicons.mini}

<br>

An example accessible video is on the [Colors with Good Contrast page.<br>
{% include image.html src="media-guide/contrast-still.png" alt="" class="normal video" %}](/perspective-videos/contrast/)

That page provides:
* audio and video content with accessibility considerations, such as low background audio
* a version of the video with description of visual information integrated in the main audio, and description available as text
* captions
* a descriptive transcript
* a media player with accessibility support, including an interactive transcript
