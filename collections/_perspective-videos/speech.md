---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Text to Speech"
nav_title: "Text to Speech"
lang: en    # Change "en" to the translated-language shortcode
last_updated: 2019-01-23    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 4

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
    label: wai-perspective-videos

permalink: /perspective-videos/speech/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/speech/    # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Short video about text to speech for web accessibility - what is it, who depends on it, and what needs to happen to make it work.
image: /content-images/perspective-videos/speech.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Status:</strong> Updated 23 January 2019. <br><strong>Editor and project lead:</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a> with support from the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission. Updated with support from the Ford Foundation. ACKNOWLEDGEMENTS.</p>
---

Web accessibility is essential for people with disabilities and useful for all. Learn about the impact of accessibility and the benefits for everyone in a variety of situations.

## Video on Text to Speech
{:#film.no-display}

{% include video-player-data.html
    video-id="speech"
    yt-id="8Rn5pXCdZWU"
    yt-id-ad="F3A1VffiOH4"
%}

This video information is available as a [Text Transcript with Description of Visuals](#transcript) below.

What is "Text to Speech"? {#what}
-------------------------

Many computers and mobile devices today have built in text-to-speech software. Some people with disabilities, including people who are blind, use specialized software called screen readers. Screen readers provide important functionality such as navigating through headings, speaking image alternatives, and identifying internal and external links. They can also highlight the text as it is being read aloud for people to see and hear the content at the same time. Content must be coded properly so that all of the functionality of the text-to-speech software works with the content.

Who depends on this feature? {#who}
----------------------------

-   People who are blind and cannot see what is on the screen.
-   People who have partial sight (often legally blind) and cannot see certain types of content.
-   People with dyslexia and other cognitive and learning disabilities who need to hear and see the text to better understand it.

What are the additional benefits? {#others}
---------------------------------

-   Content can be read aloud for people who cannot read the written language.
-   Content can be read aloud for people who prefer to listen, for example, while multi-tasking.

What needs to happen for this to work? {#action}
--------------------------------------

Use semantic HTML markup for structures such as headings, paragraphs, lists, forms, and tables. Provide text alternatives for images, icons, and other non-text content. Ensure [keyboard compatibility](/perspective-videos/keyboard/), and ensure that text information is understandable without the visual context.

Learn more {#resources}
----------

-   **Accessibility Principle:**
    -   [Text alternatives for non-text content](/fundamentals/accessibility-principles/#alternatives)
    -   [Content can be presented in different ways](/fundamentals/accessibility-principles/#adaptable)
-   **Getting Started:**
    -   [Write meaningful text alternatives for images](/tips/writing/#write-meaningful-text-alternatives-for-images)
    -   [Use headings to convey meaning and structure](/tips/writing/#use-headings-to-convey-meaning-and-structure)
    -   [Identify page language and language changes](/tips/developing/#identify-page-language-and-language-changes)
-   **Easy Check:**
    -   [Image text alternatives ("alt text")](/test-evaluate/preliminary/#images)
    -   [Basic Structure Check](/test-evaluate/preliminary/#structure)
-   **User Story:**
    -   [Ilya, senior staff member who is blind](/people-use-web/user-stories/#accountant)
    -   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/#teenager)
    -   [Preety, middle school student with attention deficit hyperactivity disorder and dyslexia](/people-use-web/user-stories/#classroomstudent)
-   **Web Content Accessibility Guidelines ([WCAG Overview](/standards-guidelines/wcag/)):**
    -   [Success Criteria relating to "images" and "structure"](https://www.w3.org/WAI/WCAG21/quickref/?tags=images%2Cstructure)
-   **Mobile Applicability:**
    -   [Non-text objects (images, sound, video) with no text alternative](/standards-guidelines/shared-experiences/#non-text)
    -   [Information conveyed only using CSS (visual formatting)](/standards-guidelines/shared-experiences/#visual-formatting)
    -   [Non-descriptive link label](/standards-guidelines/shared-experiences/#link-label)
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
      <td>Web Accessibility Perspectives: Text to Speech</td>
      <td>Web Accessibility Perspectives:<br>
        Text to Speech</td>
    </tr>
    <tr>
      <td>(Computer) &quot;Some people can't see the text on this screen.&quot;<br>
(Computer)                     &quot;Fortunately, computers can convert text to speech.&quot;</td>
      <td>A man is using a laptop with the text on the screen being highlighted as it is spoken.</td>
    </tr>
    <tr>
      <td>It's technology that many people who are blind have been relying on for years.</td>
      <td>A service dog is next to the man. He may be blind.</td>
    </tr>
    <tr>
      <td>But it's also important for many people with dyslexia.</td>
      <td>A woman is reading on a tablet and listen with headphones.</td>
    </tr>
    <tr>
      <td>And very useful for people with difficulty reading text.</td>
      <td>A man removes his glasses and listens to a news article on his tablet.</td>
    </tr>
    <tr>
      <td>As well as some people who just like to multi-task.</td>
      <td>A man listens to a magazine article as they do the washing.</td>
    </tr>
    <tr>
      <td>But for this to work, websites and apps need to be properly coded.</td>
      <td>The website is not properly working for the woman with headphones. She is frustrated.</td>
    </tr>
    <tr>
      <td>Which has the added benefit of helping search engines index websites' contents better.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Web accessibility: Essential for some, useful for all.</td>
      <td>The man with the service dog is using his mobile device outside with bone conducting headphones. Different people from earlier are seen using text-to-speech.</td>
    </tr>
    <tr>
      <td>Visit w3.org/WAI/perspectives for more information on Text to Speech</td>
      <td>Visit<br>
        w3.org/WAI/perspectives<br>
        for more information on<br>
        Text to Speech. <br>
        W3C Web Accessibility Initiative logo</td>
    </tr>
  </tbody>
</table>
