---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "User Experiences and Benefits to Organizations"
title_image: /content-images/media-guide/body.svg
nav_title: "User Needs"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2021-11-29   # Keep the date of the English version
first_published: "September 2019 (on a different page)"

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-media-guide

permalink: /media/av/users-orgs/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/users-orgs/   # Do not change this

resource:
  ref: /media/av/
navigation:
  previous: /media/av/
  next:     /media/av/planning/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Introduces the user needs and user experiences of people with disabilities using audio and video on the web. Also, benefits of accessible media to people without disabilities and to organizations.
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

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

This page introduces user needs and user experiences. It provides the "why" behind the media accessibility requirements in this resource. It also includes examples of the business benefits to organizations.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{::options toc_levels="2" /}
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Understand the User Needs and Experiences of People with Disabilities

<div style="float:right; margin-left:1em;">
{% include image.html src="media-guide/ear.svg" alt="" class="mini" %}<br><br> 
{% include image.html src="media-guide/eye.svg" alt="" class="mini" %}<br><br>
{% include image.html src="media-guide/brain.svg" alt="" class="mini" %}<br><br>
{% include image.html src="media-guide/hand.svg" alt="" class="mini" %}<br><br>
{% include image.html src="media-guide/speech.svg" alt="" class="mini" %}
</div>

It's useful to first understand the user experiences of people with disabilities. Then you'll know the "why" behind the media accessibility requirements in this resource. For example, a person who is Deaf can't hear the audio, so you need to provide important audio information in another form.

* Many people who are **Deaf** can read text well. They get the audio information from **transcripts** or **captions**. Some people prefer **sign language**.
* Some people who are **hard of hearing** like to listen to the audio to hear what they can, and have **captions** to fill in what they can't hear adequately.
* Some people who have **difficulty processing auditory information** also use **captions**. Many use **transcripts** so they can read at their own pace.
* Some people who are **blind** or have low vision can't see videos well or at all. They use **description of visual information** to understand what's going on visually. *(Description is called audio description, video description, or described video.)*
* Some people who are **Deaf-blind** use a screen reader and braille to read **descriptive transcripts** that include the audio and visual information as text.
* Some people **cannot focus and comprehend auditory or visual information** when there are changing visuals. For most videos, they also need **descriptive transcripts**.
* Some people cannot use their hands and **use speech recognition software** to operate their computer, including the **media player**.  And people who are **blind** need the media player to work without a mouse.
* Some people use multiple accessibility features simultaneously. For example, someone might want captions, description of visual information as text, and description in audio.

If you want to learn more, see these other resources:
* [[How People with Disabilities Use the Web]](/people-use-web/)
* [Media Accessibility User Requirements](https://www.w3.org/TR/media-accessibility-reqs/)
* [[Involving Users in Web Projects for Better, Easier Accessibility]](/planning/involving-users/)

## Used by People With and _Without_ Disabilities {#situations}

Accessible media is **essential for people with disabilities**, and is **useful for everyone**. Accessibility features are also used by people _without_ disabilities in a variety of situations.

{% include image.html src="media-guide/transcript.svg" alt="" class="mini right" %}

For example, transcripts can be:
* Skimmed or read rather than watched or listened to. This is significantly easier and quicker for many users. Sometimes people want to skim the transcript first before deciding whether or not to play the media.
* Used without needing to download video files. For example, to save data on mobile.
* Used offline, printed, or converted to braille.

{% include image.html src="media-guide/cc.svg" alt="" class="mini right" %}

And captions can be used:
* In loud environments where users cannot hear the audio. For example, a bar, an airport, or a concert.
* In quiet environments where users cannot turn on sound. For example, in a library, on public transportation, or when others are sleeping.
* By people who cannot understand the spoken language well and can understand the written language better. For example, people who are not native speakers of the language.
* By people learning to read, including people learning a new language.
* To better understand content because users can hear the information in audio and see it in text at the same time. For example, a [Research Study of Closed Captions & Transcripts {% include_cached external.html %}](https://www.3playmedia.com/2019/02/21/8-benefits-of-transcribing-captioning-videos/) found that 71% of students _without_ hearing difficulties use captions, primarily to help them focus and retain information.

## Benefits to Organizations {#benefits}

{% include image.html src="media-guide/brand.svg" alt="inclusive, diverse, responsible" class="normal right" %}

Organizations that make their audio and video accessible can realize benefits such as:
* Increased traffic and website use by people with and without disabilities, for example, in the [situations described above](#situations).
* Better user experience for all and improved customer satisfaction.
* Better indexing by search engines.

{% include image.html src="media-guide/market-reach.svg" alt="" class="small right" %}

Benefits to organizations are illustrated in these other resources:
* The business case includes **case study data** from adding transcripts, and more on how accessibility can [increase your market reach](/business-case/#increase-market-reach).
* Benefits of transcripts and captions to a university are mentioned in a [**user story/persona** of an online student who is hard of hearing](/people-use-web/user-stories/archived/#onlinestudent).
* Some benefits of captions are illustrated in a 1-minute [**Video** on Captions.<br>
{% include image.html src="media-guide/captions-video-still.jpg" alt="" class="normal video" %}](/perspective-videos/captions/)

This resource helps make your media usable by people with and without disabilities, and benefit your organization. The next page gets you started **[Planning Accessible Audio and Video Media](/media/av/planning/)**.
