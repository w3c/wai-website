---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Customizable Text"
nav_title: "Customizable Text"
lang: en    # Change "en" to the translated-language shortcode
last_updated: 2019-01-23    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 7

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
    label: wai-perspective-videos

permalink: /perspective-videos/customizable/    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/customizable/  # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Short video about customizable text for web accessibility - what is it, who depends on it, and what needs to happen to make it work.
image: /content-images/perspective-videos/customizable.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Status:</strong> Updated 23 January 2019. <br><strong>Editor and project lead:</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a> with support from the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission. Updated with support from the Ford Foundation. ACKNOWLEDGEMENTS.</p>
---

Web accessibility is essential for people with disabilities and useful for all. Learn about the impact of accessibility and the benefits for everyone in a variety of situations.

## Video on Customizable Text
{:#film.no-display}

{% include video-player-data.html
    video-id="customizable"
    yt-id="rbiI65Jcz5s"
    yt-id-ad="L4WLeVc5l5k"
%}

This video information is available as a [Text Transcript with Description of Visuals](#transcript) below.

What is "Customizable Text"? {#what}
----------------------------

Some users need to be able to change the way text is displayed so that they can read the text. This includes changing the size, spacing, font, color, and other text properties. When users change these properties, no information or functionality should be lost, and the text should re-flow so users don't have to scroll horizontally to read sentences. Text customization is more than the zoom functionality, which only changes the text size.

Who depends on this feature? {#who}
----------------------------

-   People with low vision who are not using screen magnification software.
-   People with some forms of dyslexia and other cognitive and learning disabilities who need a particular presentation of text to read it.

What are the additional benefits? {#others}
---------------------------------

-   Content is more adaptable to smaller and larger screen sizes.
-   Content is more adaptable to personal preferences and comfort.
-   Content is more adaptable when translated, since words and sentences are different lengths in different languages.

What needs to happen for this to work? {#action}
--------------------------------------

Content must be properly designed and coded so that it can adapt to different customization settings. This includes using relative rather than absolute units for the size of fonts, controls, and other objects. Applications should use the operating system and web browser text settings. Websites and applications could also provide information to help users change their settings. Web browsers and other web tools need to provide users with text customization functionality.

Learn more {#resources}
----------

-   **Accessibility Principle:**
    -   [Content can be presented in different ways](/fundamentals/accessibility-principles/#adaptable)
-   **Getting Started:**
    -   [Write code that adapts to the user's technology](/tips/developing/#write-code-that-adapts-to-the-users-technology)
-   **Easy Check:**
    -   [Resize text](/test-evaluate/preliminary/#resize)
-   **User Story:**
    -   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/#retiree)
    -   [Preety, middle school student with attention deficit hyperactivity disorder and dyslexia](/people-use-web/user-stories/#classroomstudent)
-   **Web Content Accessibility Guidelines ([WCAG Overview](/standards-guidelines/wcag/)):**
    -   [Success Criteria relating to "text"](https://www.w3.org/WAI/WCAG21/quickref/?tags=text)
-   **User Agent Accessibility Guidelines ([UAAG
    Overview](/standards-guidelines/uaag/)):**
    -   [Provide text configuration](https://www.w3.org/TR/2015/NOTE-UAAG20-20151215/#gl-text-config)
    -   [Multi-Column Text Reflow](https://www.w3.org/TR/UAAG20/#sc_1813)
    -   [Linearize Content](https://www.w3.org/TR/UAAG20/#sc_1815)
-   **User Needs:**
    -   [Accessibility Requirements for People with Low Vision](https://www.w3.org/TR/low-vision-needs/)
        
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
      <td>Web Accessibility Perspectives: Customizable Text</td>
      <td>Web Accessibility Perspectives:<br>Customizable Text</td>
    </tr>
    <tr>
      <td>What's right for you doesn't necessarily work for the next person.</td>
      <td>Toast with different levels of darkness.</td>
    </tr>
    <tr>
      <td>Customization isn't always just the question of preference though. Sometimes it's a necessity.</td>
      <td>Two men are sitting with a toaster between them. One of the men turns the toaster dial.</td>
    </tr>
    <tr>
      <td>Being able to adjust the text is crucial for people with low vision and dyslexia.</td>
      <td>A woman puts on glasses to read a website on her laptop. The woman is squinting at the website with small text and an unusual font.</td>
    </tr>
    <tr>
      <td>Properly coded websites and applications allow the text to be customized. For example, to change its size, spacing, font, and colors without loss of functions or clarity.</td>
      <td>The woman uses the web browsers settings to adjust the
        text size and style. It appears more legible and the woman is relieved.</td>
    </tr>
    <tr>
      <td>Web accessibility: Essential for some, useful for all.</td>
      <td>Cutback to the two men: One of the men takes a piece of
        toast out of the toaster.</td>
    </tr>
    <tr>
      <td>Visit w3.org/WAI/perspectives for more information on Customizable
        Text </td>
      <td>Visit<br>
        w3.org/WAI/perspectives<br>
        for more information on<br>
        Customizable Text.<br>
        W3C Web Accessibility Initiative logo</td>
    </tr>
  </tbody>
</table>
        

