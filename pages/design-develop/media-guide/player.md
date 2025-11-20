---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Media Players"
title_image: /content-images/media-guide/player-nobackground.svg
nav_title: "Media Player"
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

permalink: /media/av/player/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/player/   # Do not change this

resource:
  ref: /media/av/
navigation:
  previous: /media/av/sign-languages/
  next: /media/av/acknowledgements/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Introduces considerations for providing a media player that supports accessibility.
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

Some media players are not accessible to people with disabilities. There are players developed specifically for accessibility. Usually it's best to use one of these existing players, rather than code your own.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introduction

Modern browsers provide a default media player. Most have limited functionality to support accessibility.

Rather than coding all the things needed to make a player support accessibility, most organizations choose to use an existing player with good accessibility support.

There are players developed specifically for accessibility. Some are free, open source and some are commercial.

## Skills Needed {#skills}

Using an existing media player developed for accessibility requires moderate HTML skills.

Developing your own accessible media player requires advanced HTML and JavaScript skills.

## Player Accessibility Functionality {#player-accessibility-functionality}

Accessible media players provide a user interface that works without a mouse, through speech interface, when the page is zoomed larger, and with screen readers. For example, media players need to:
* Provide keyboard support ([in Understanding WCAG: Keyboard Accessible](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible))
* Make the keyboard focus indicator visible ([in Understanding WCAG: Focus Visible](https://www.w3.org/WAI/WCAG22/Understanding/focus-visible))
* Provide clear labels ([in Understanding WCAG: Labels or Instructions](https://www.w3.org/WAI/WCAG22/Understanding/labels-or-instructions), [Info and Relationships](https://www.w3.org/WAI/WCAG22/Understanding/info-and-relationships))
* Have sufficient contrast between colors for text, controls, and backgrounds ([in Understanding WCAG: Contrast (Minimum)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-minimum), [Contrast (Enhanced)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-enhanced), [Non-text Contrast](https://www.w3.org/WAI/WCAG22/Understanding/non-text-contrast.html))

Some media players provide additional accessibility functionality to users such as:
* Changing the speed of the video
* Setting how captions are displayed (e.g., text style, text size, colors, and position of the captions)
* Reading the captions with a screen reader and braille device
* Interactive transcripts

Interactive transcripts use the captions file. Interactive transcripts highlight text phrases as they are spoken. Users can select text in the transcript and go to that point in the video.

<img src="{{ "/content-images/media-guide/interactive-transcript.png" | relative_url }}" alt="">

More details on player accessibility functionality are in a separate document: [Media Accessibility User Requirements](https://www.w3.org/TR/media-accessibility-reqs/).

## Existing Players {#existing-players}

There is information online about the accessibility of media players. For example, [Web-Based Media Player Accessibility Comparison Table _(last updated July 2016)_ {% include_cached external.html %}](https://kensgists.github.io/apt/).

Each media player provides documentation of the steps to set it up in a web page. For example, [AblePlayer Setup Steps {% include_cached external.html %}](https://ableplayer.github.io/ableplayer/#setup-step-1-use-html5-doctype).

### Support for Description Methods

Media player functionality is required for some methods of providing description of visual information *(called audio description, video description, or described video)*, as explained in the [Description page](/media/av/description/). To the best of our knowledge, the following media players provide such functionality:
* Supports description in text file (VTT format):
   * AblePlayer &mdash; supports description when there is space in the audio, and when the video needs to pause ("extended description")
   * video.js &mdash; supports description when there is space in the audio; does **not** support description when the video needs to pause ("extended description")
* Supports separate audio file with description:
   * AblePlayer
   * OzPlayer
   * video.js &mdash; with plug-in

_(If you know of other players that provide that functionality, please let us know via GitHub or e-mail with the links in [Help improve this page below](#helpimprove). Thanks!)_
