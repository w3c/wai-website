---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Speech Recognition"
nav_title: "Speech Recognition"
lang: en    # Change "en" to the translated-language shortcode
last_updated: 2021-02-26    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 8

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors


github:
    label: wai-perspective-videos

permalink: /perspective-videos/voice/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/voice/ # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Short video about speech recognition for web accessibility - what is it, who depends on it, and what needs to happen to make it work.
image: /content-images/perspective-videos/voice.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Status:</strong> Updated 26 February 2021. First published May 2016. <a href="../changelog/">Changelog</a>.<br><strong>Editor and project lead:</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a> with support from the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission. Updated with support from the Ford Foundation. ACKNOWLEDGEMENTS.</p>
---

Web accessibility is essential for people with disabilities and useful for all. Learn about the impact of accessibility and the benefits for everyone in a variety of situations.

Update: The video uses "voice recognition". This page is updated to use "speech recognition". "Speech recognition" is about recognizing words for speech-to-text (STT) transcription, virtual assistants, and other speech user interfaces. "Voice recognition" or "speaker recognition" is technology that identifies who the speaker is, not the words they're saying. We hope to update the video to use "speech recognition" in late 2022. 

## Video on Speech Recognition
{:#film.no-display}

{% include video-player-data.html
    video-id="voice"
    yt-id="7RHG_XiQ0ck"
    yt-id-ad="21yWr7evHTs"
%}

This video information is available as a [Text Transcript with Description of Visuals](#transcript) below.

What is "Speech Recognition"? {#what}
----------------------------

Speech recognition can be used for dictating text in a form field, as well as navigating to and activating links, buttons, and other controls. Most computers and mobile devices today have built-in speech recognition functionality. Some speech recognition tools allow complete control over computer interaction, allowing users to scroll the screen, copy and paste text, activate menus, and perform other functions.

Who depends on this feature? {#who}
----------------------------

-   People with physical disabilities who cannot use the keyboard or mouse.
-   People with chronic conditions, such as repetitive stress injuries (RSI), who need to limit or avoid using the keyboard or mouse.
-   People with cognitive and learning disabilities who need to use speech rather than to type.

What are the additional benefits? {#others}
---------------------------------

-   Content works for people with temporary limitations, such as a broken arm.
-   Content is more usable for people who prefer to speak rather than type, for example, while multi-tasking.

What needs to happen for this to work? {#action}
--------------------------------------

Content must be properly designed and coded so that it can be controlled by speech. [keyboard compatibility](/perspective-videos/keyboard/) is the basis for such coding. In addition, labels and identifiers for controls in the source code need to match their visual presentation, so that it is clear which speech command will activate a control.

Learn more {#resources}
----------

-   **Accessibility Principle:**
    -   [Functionality is available from a keyboard](/fundamentals/accessibility-principles/#keyboard)
    -   [Content appears and operates in predictable ways](/fundamentals/accessibility-principles/#predictable)
-   **Getting Started:**
    -   [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
    -   [Provide meaning for non-standard interactive elements](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
    -   [Provide alternative text for images](/tips/designing/#include-image-and-media-alternatives-in-your-design)
-   **Easy Check:**
    -   [Keyboard access and visual focus](/test-evaluate/preliminary/#interaction)
    -   [Forms, labels, and errors](/test-evaluate/preliminary/#forms)
-   **User Story:**
    -   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/#reporter)
-   **Web Content Accessibility Guidelines ([WCAG Overview](/standards-guidelines/wcag/)):**
    -   [Success Criteria relating to "keyboard" and "controls"](https://www.w3.org/WAI/WCAG21/quickref/?tags=keyboard%2Ccontrols)
-   **Mobile Applicability:**
    -   [Mouse required for interaction and navigation](/standards-guidelines/shared-experiences/#mouse)
    -   [Non descriptive link label](/standards-guidelines/shared-experiences/#link-label)
-   **Tutorial:**
    -   [Web Accessibility Tutorials](/tutorials/) (several related topics)

## Text Transcript with Description of Visuals {#transcript}

<table>
  <thead>
    <tr>
      <th width="65%">Audio</th>
      <th>Visual</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Web Accessibility Perspectives: [Speech] Recognition</td>
      <td>Web Accessibility Perspectives:<br>
        [Speech] Recognition</td>
    </tr>
    <tr>
      <td>Imagine if you could only communicate with your family by writing.<br></td>
      <td>A woman writes &quot;what would you like for breakfast?&quot;, and passes the note to the man next to her.<br></td>
    </tr>
    <tr>
      <td>Sometimes it's just easier to speak.<br>
        One of the advances of technology is [speech] recognition.<br>
        Whether it's searching the web:</td>
      <td>A man is using a tablet by speech.</td>
    </tr>
    <tr>
      <td>(Tablet user) &quot;Nineteenth century architecture.&quot;</td>
      <td>Search results appear on the screen.</td>
    </tr>
    <tr>
      <td>Dictating emails.</td>
      <td>An older man is also using a tablet by speech.</td>
    </tr>
    <tr>
      <td>Or controlling your navigation app.</td>
      <td>A woman is speaking to her mobile phone and follows the directions on the screen.</td>
    </tr>
    <tr>
      <td><p>Many people with physical disabilities rely on [speech] recognition to use the computer.<br>
          (Man in wheelchair) &quot;Place order.&quot;<br>
        </p></td>
      <td>A man with a wheelchair is using a headset for the computer.</td>
    </tr>
    <tr>
      <td>But for that to happen websites and apps need to be properly coded.<br>
(Man in wheelchair)                     &quot;Cancel?&quot;</td>
      <td>Nothing happens on the computer.</td>
    </tr>
    <tr>
      <td> [Speech] recognition can help lots of other people with temporary limitations too, like an injured arm.<br>
(Woman)                     &quot;Place order.&quot;</td>
      <td>A woman with her arm in a sling successfully using speech.</td>
    </tr>
    <tr>
      <td>It can also prevent injuries becoming worse, like RSI: Repetitive Stress Injury.</td>
      <td>A man is outside with a dog taking speech notes on his mobile phone.</td>
    </tr>
    <tr>
      <td>Or for people simple preferring [speech].<br>
        (Man in wheelchair) &quot;Place Order.&quot;</td>
      <td>The man with the wheelchair is now using a website that works.</td>
    </tr>
    <tr>
      <td>Web accessibility: Essential for some, useful for all.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Visit w3.org/WAI/perspectives for more information on [Speech] Recognition</td>
      <td>Visit<br>
        w3.org/WAI/perspectives<br>
        for more information on<br>
        [Speech] Recognition. <br>
        W3C Web Accessibility Initiative logo</td>
    </tr>
  </tbody>
</table>
