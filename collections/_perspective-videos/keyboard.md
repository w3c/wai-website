---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Keyboard Compatibility"
nav_title: "Keyboard Compatibility"
lang: en    # Change "en" to the translated-language shortcode
last_updated: 2024-07-15    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 1

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
    label: wai-perspective-videos

permalink: /perspective-videos/keyboard/    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/keyboard/  # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Short video about keyboard compatibility for web accessibility - what is it, who depends on it, and what needs to happen to make it work.
image: /content-images/perspective-videos/keyboard.jpg
teaser_text: All functionality must be usable with the keyboard. That is, users can access links, buttons, forms, and other controls using the Tab key and other keystrokes. Websites should not require a mouse. Keyboard accessibility is essential for people with disabilities and benefits everyone in a variety of situations.

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Status:</strong> Updated 15 July 2024. <br><strong>Editor and project lead:</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a> with support from the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission. Updated with support from the Ford Foundation. ACKNOWLEDGEMENTS.</p>
---

Web accessibility is essential for people with disabilities and useful for all. Learn about the impact of accessibility and the benefits for everyone in a variety of situations.

## Video on Keyboard Compatibility
{:#film.no-display}

{% include video-player-data.html
    video-id="keyboard"
    yt-id="93UgG72os8M"
    yt-id-ad="1rBwxGMT9ZM"
%}

This video information is available as a [Text Transcript with Description of Visuals](#transcript) below.

## What is "Keyboard Compatibility"?
{:#what}

All functionality must be usable with the keyboard. That is, users can access and move between links, buttons, forms, and other controls using the Tab key and other keystrokes. Websites should not require a mouse; for example, pop-up calendars should also let users type in a date.

## Who depends on this feature?
{:#who}

-   People with physical disabilities who cannot use the mouse.
-   People who are blind, and cannot see the mouse pointer on the screen.
-   People with chronic conditions, such as repetitive stress injuries (RSI), who should limit or avoid use of a mouse.

## What are the additional benefits?
{:#others}

-   Content works for people with temporary limitations, such as a broken arm or broken mouse.

## What needs to happen for this to work?
{:#action}

Native HTML controls, like links, buttons, and form elements, work with the keyboard by default and should be used where possible. Custom-made controls, CSS styles, and scripts that control interaction may need additional coding for keyboard compatibility. Ensure that the tab order is logical, to allow keyboard navigation around the content and controls. Provide a way for users to jump between blocks of content and controls, and to close pop-up boxes and menus using the keyboard. Keyboard issues occur particularly in forms, menus, and applications with many controls.

## Learn more
{:#resources}

-   **Accessibility Principle:**
    -   [Functionality is available from a keyboard](/fundamentals/accessibility-principles/#keyboard)
-   **Getting Started:**
    -   [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
-   **Easy Check:**
    -   [Keyboard access and visual focus](/test-evaluate/preliminary/#interaction)
-   **User Story:**
    -   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/#reporter)
    -   [Ilya, senior staff member who is blind](/people-use-web/user-stories/#accountant)
    -   [Kaseem, teenager who is deaf and blinc](/people-use-web/user-stories/#teenager)
-   **Web Content Accessibility Guidelines ([WCAG Overview](/standards-guidelines/wcag/)):**
    -   [Success Criteria relating to "keyboard"](https://www.w3.org/WAI/WCAG21/quickref/?tags=keyboard)
-   **Mobile Applicability:**
    -   [Mouse required for interaction and navigation](/standards-guidelines/shared-experiences/#mouse)
-   **Tutorial:**
    -   [Web Accessibility Tutorials](https://www.w3.org/WAI/tutorials/) (several related topics)

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
      <td>Web Accessibility Perspectives: Keyboard Compatibility</td>
      <td>Web Accessibility Perspectives:<br>
        Keyboard Compatibility</td>
    </tr>
    <tr>
      <td>Not being able to use your computer because your mouse doesn't work, is frustrating.</td>
      <td>A man drops his computer mouse off the desk. The computer mouse no longer works.</td>
    </tr>
    <tr>
      <td>Many people use only the keyboard to navigate websites &mdash; either through preference or circumstance.<br></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Whether it's temporarily limited mobility,</td>
      <td>A woman with her arm in a sling is typing on a keyboard &mdash; but the website requires the use of a mouse to select the date.</td>
    </tr>
    <tr>
      <td>a permanent physical disability,</td>
      <td>A man with a wheelchair is using a mouth-stick to type.</td>
    </tr>
    <tr>
      <td>or simply a broken mouse,<br>
        the result is the same:</td>
      <td>The man with the wheelchair also cannot use the site.</td>
    </tr>
    <tr>
      <td>Websites and apps need to be operable by keyboard.</td>
      <td>He switches to a different website that allows typing the date.</td>
    </tr>
    <tr>
      <td>Web accessibility: Essential for some, useful for all.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Visit w3.org/WAI/perspectives for more information on Keyboard Compatibility</td>
      <td>Visit<br>
        w3.org/WAI/perspectives<br>
        for more information on<br>
        Keyboard Compatibility.<br>
        W3C Web Accessibility Initiative logo</td>
    </tr>
  </tbody>
</table>
