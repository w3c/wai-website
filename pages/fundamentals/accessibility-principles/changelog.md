---
# Do not translate Changelog
title: "Changelog for Accessibility Principles"
title_html: 'Changelog for <a href="https://www.w3.org/WAI/fundamentals/accessibility-principles/">Accessibility Principles</a>'
nav_title: "Changelog"
lang: en
last_updated: 2024-07-16

permalink: /fundamentals/accessibility-principles/changelog/
ref: /fundamentals/accessibility-principles/changelog/

parent: /fundamentals/accessibility-principles/
github:
  label: wai-accessibility-principles
---

## July 2024

* Updated links to [User Stories](/people-use-web/user-stories/).

## May 2019

* Links to QuickRef updated

* Added to metadata/frontmatter:

  ```
  teaser_text: The Accessibility Principles page introduces some of the web accessibility requirements for websites, web applications, browsers, and other tools. It provides references to the international standards from W3C Web Accessibility Initiative (WAI) and to stories of web users.
  ```

* Edit under [Content can be presented in different ways](/fundamentals/accessibility-principles/#adaptable). First list item changed from:

  ```
  * Headings, lists, tables and other structures in the content are marked-up properly
  ```
  
  to:
  
  ```
  * Headings, lists, tables, input fields, and content structures are marked-up properly
  ```

* Edits under [Content is easier to see and hear](/fundamentals/accessibility-principles/#distinguishable). 
List item added and changed from:

  ```
  * Text is resizable up to 200% without losing information, using a standard browser;
  ```

  to:
  
  ```
  * When users resize text up to 400% or change text spacing, no information is lost
  * Text reflows in small windows ("viewports") and when users make the text larger
  ```

* [Heading with seizures](/fundamentals/accessibility-principles/#safe).

  * Heading changed from:

    ```
    Content does not cause seizures
    ``` 
 
    to:

    ```
    Content does not cause seizures and physical reactions
    ```

  * Sentence and list added. Was:

    ```
    Content that flashes at certain rates or patterns can cause photosensitive reactions, including seizures. Flashing content is ideally avoided entirely or only used in a way that does not cause known risks.
    ```

    now:

    ```
    Content that flashes at certain rates or patterns can cause photosensitive reactions, including seizures. Flashing content is ideally avoided entirely or only used in a way that does not cause known risks. Also animations and moving content can cause discomfort and physical reactions.
  
    Examples of avoiding causing seizures and physical reactions:
    - Do not include content that flashes at particular rates and patterns
    - Warn users before flashing content is presented, and provide alternatives
    - Provide mechanisms to switch off animations, unless they are essential
    ```

* New section added – including heading, paragraphs, list, and 2 subsections:  
  **[Users can use different input modalities beyond keyboard](/fundamentals/accessibility-principles/#modalities)**
