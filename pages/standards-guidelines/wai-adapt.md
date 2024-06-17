---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: WAI-Adapt Overview
title_html: "<span style='line-height:1'>WAI-Adapt Overview<br><span style='font-style: italic; font-size: 0.75em'>Enabling users to adapt content presentation</span>"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2023-01-05  # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-adapt

permalink: /adapt/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /adapt/  # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p><strong>Date:</strong> Updated 05 January 2023. First published March 2019.</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> and <a href="https://www.w3.org/People/roy/">Ruoxi Ran</a>.</p>
  <p>Developed with input from the <a href="https://www.w3.org/WAI/APA/task-forces/adapt/">WAI-Adapt Task Force</a>.<p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces the WAI-Adapt series of technical specifications. WAI-Adapt enables users to adapt (or 'personalize') how content is presented.
  
Why Adapt: It's important to meet individual needs and preferences, including the accessibility needs of people with disabilites.

Quick links to select documents:
* [WAI-Adapt Explainer](https://www.w3.org/TR/adapt/)
* [Requirements for WAI-Adapt Specifications](https://www.w3.org/TR/adapt-requirements/)
* [WAI-Adapt: Symbols Module](https://www.w3.org/TR/adapt-symbols/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}
 
## Introduction
  
WAI-Adapt specifications enable users to personalize how content is presented in order to meet their needs and preferences.
  
<!-- edit to simplify -->As web technology broadens in scope and reach, and understanding of users' needs increases through research and experience, the set of accessibility considerations for websites becomes larger. Rather than developing complex solutions for a wide range of users, designing sites in a way that they can be personalized to the needs of each user provides more optimal accessibility.

WAI-Adapt enables users to use adaptive widgets and user preferences to customize their user experience. It enables content authors to provide a default design and enable user adaptation with minimal work.

### Examples of WAI-Adapt to Meet User Needs {#examples}

* Some people are easily **distracted or overwhelmed by lots of information** on a website. They have difficulty finding and focusing on key information. WAI-Adapt allows users to hide extraneous information so they only get what they need to understand and use the main content.
* Some people have **difficulty understanding numbers** ("dyscalculia"). WAI-Adapt allows users to change numeric information. For example, a temperature of 32&deg;F/0&deg;C is replaced with a picture of a person wearing a hat, scarf, and mittens, and the text "very cold".
* Some people with severe language impairment **cannot read text**. They use symbols to represent words. WAI-Adapt allows users to change text to symbols.

## Who the WAI-Adapt Specifications are for
* **Content developers** can add syntax to support adaptation. 
* **User agents** such as browser extensions and assistive technology can use the syntax to manipulate the content to meet the user’s need. User agents can also use user preferences for different interface options.

## The WAI-Adapt Documents
* [WAI-Adapt Explainer](https://www.w3.org/TR/adapt/) (Working Draft Note) is the core introductory document that explains general use cases, vocabulary, and anticipated uses.
* [Requirements for WAI-Adapt Specifications](https://www.w3.org/TR/adapt-requirements/) (Working Draft Note) includes user stories, specific use cases, and requirements for enabling adaptable content.
* [WAI-Adapt: Symbols Module](https://www.w3.org/TR/adapt-symbols/) (Candidate Recommendation specification) is the technical specification that enables symbols to replace text in web content.
* [W3C Augmentative and Alternative Communication (AAC) Symbols Registry](https://www.w3.org/TR/aac-registry/) ([Registry](https://www.w3.org/2021/Process-20211102/#registries)) provides a mapping between concepts expressed in text and corresponding symbols in AAC symbol sets.

Additional drafts provide information on potential future standards:
* [WAI-Adapt: Content Module](https://www.w3.org/TR/adapt-content/) (Working Draft specification) has draft ideas for terms authors can use to enhance web content with information about controls and user interface elements. The symbols section is now a separate module.
* [WAI-Adapt: Help and Support Module](https://www.w3.org/TR/adapt-help/) (Working Draft) lists examples of the adapted help and support properties.
* [WAI-Adapt: Tools Module](https://www.w3.org/TR/adapt-tools/) (Working Draft) lists examples of the adapt tools properties.

## Who Develops WAI-Adapt
WAI-Adapt documents are developed by the [WAI-Adapt Task Force](https://www.w3.org/WAI/APA/task-forces/adapt/) of the Accessible Platform Architectures Working Group ([APA WG](https://www.w3.org/WAI/APA/)), which is part of the World Wide Web Consortium ([W3C](https://www.w3.org/)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)). For more information about the task force, see the [WAI-Adapt Task Force page](https://www.w3.org/WAI/APA/task-forces/adapt/).

Formal periods for public review are described in [[How WAI Develops Accessibility Guidelines through the W3C Process: Milestones and Opportunities to Contribute]](/standards-guidelines/w3c-process/). To submit comments on specific WAI-Adapt documents, see the “Status of this Document” section of the resource. To get notices of opportunities for review and comment on WAI documents, see [[Get WAI News]](/news/subscribe/).

Opportunities for contributing to WAI-Adapt and other WAI work are introduced in [[Participating in WAI]](/about/participating/).
