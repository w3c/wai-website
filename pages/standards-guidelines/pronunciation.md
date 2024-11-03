---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Pronunciation Overview"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2021-05-19   # Keep the date of the English version

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-pronunciation

permalink: /pronunciation/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /pronunciation/  # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> and <a href="https://www.w3.org/People/roy/">Ruoxi Ran</a>.</p>
  <p>Developed with input from the <a href="https://www.w3.org/WAI/APA/task-forces/pronunciation/">Pronunciation Task Force</a>.<p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

This page introduces work to enable screen readers and voice assistants to pronounce words correctly.

The goal is to provide standards and best practices for text-to-speech (TTS) synthesis of HTML content.

Quick link to latest publication:
* [Specification for Spoken Presentation in HTML _(Working Draft Note)_](https://www.w3.org/TR/spoken-html/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include toc.html %}

## Introduction

Most people who are blind rely on text-to-speech (TTS) software called screen readers. Some people with cognitive disabilities who have difficulty processing written text also use screen readers. Text-to-speech is essential for people with disabilities and useful for all.

TTS is now widely used in popular applications such as voice assistants. Many computers and mobile devices today have built in text-to-speech functionality that is used by people without disabilities in different situations, such as when they lose their glasses or their eyes are tired.
 
Accurate pronunciation is essential in many situations, such as education and assessment (testing students).

Currently text-to-speech pronunciation is often inaccurate and inconsistent because of technology limitations. For example, incorrect pronunciation may be based on context, regional variation, or emphasis.

{::nomarkdown}
{% include box.html type="start" title="Examples:" %}
{:/}

The address:<br>"123 Maple Dr., St. Paul, Minn" is often spoken by TTS as:<br>"123 maple doctor, street paul, min"  instead of:<br>"123 Maple Drive, Saint Paul, Minnesota".

"Reading" is pronounced differently if it is the city in England or in the phrase "reading a book".

{::nomarkdown}
{% include box.html type="end" %}
{:/}

W3C is developing normative specifications (standards) and guidance on best practices so that text-to-speech (TTS) synthesis pronounce HTML content (for example, web pages) correctly. This will allow content creators to specify how words should be pronounced.

## Explainer and User Scenarios

[Explainer: Improving Spoken Presentation on the Web](https://www.w3.org/TR/pronunciation-explainer/) provides an overview of the work. It:

- Briefly introduces the context for W3C work on pronunciation
- Describes the advantages and disadvantages of two approaches
- Poses questions for additional input

[Pronunciation User Scenarios](https://www.w3.org/TR/pronunciation-user-scenarios/) provides examples of:
- End-users, including screen reader users
- Content providers, including educators
- Software developers, including content management systems

## Exploring Technical Solutions

The Pronunciation Task Force has been exploring technical options for content authors to provide pronunciation information. A challenge is developing a solution that will be used by screen readers. One aspect of that work is analyzing how required features for accurate pronunciation are covered in existing technical specifications, including HTML5. 

[Pronunciation Gap Analysis and Use Cases](https://www.w3.org/TR/pronunciation-gap-analysis-and-use-cases/) provides details on the analysis. It:
- Provides more detailed context
- Describes required features for pronunciation and spoken presentation
- Describes specific implementation approaches for introducing presentation authoring markup into HTML5 (called “use cases”)
- Provides a gap analysis
- Describes how the required features may be met by existing approaches

**[Specification for Spoken Presentation in HTML](https://www.w3.org/TR/spoken-html/)** provides details on two markup approaches. Both satisfy the requirements and provide consistent results. We seek feedback from authors and implementors on which approach would be most implementable across all spoken presentation applications.

## Who Develops the Pronunciation Documents

Pronunciation documents are developed by the [Pronunciation Task Force](https://www.w3.org/WAI/APA/task-forces/pronunciation/) of the [Accessible Platform Working Group (APA WG)](https://www.w3.org/WAI/APA/), which is part of the World Wide Web Consortium ([W3C](https://www.w3.org)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)). For more information about the Task Force, see the [Pronunciation Task Force page](https://www.w3.org/WAI/APA/task-forces/pronunciation/).

## Contributing to the Work

Opportunities for contributing to Pronunciation and other WAI work are introduced in [[Participating in WAI]](/about/participating/).

To get notifications of drafts for review, see [[Get WAI News]](/news/subscribe/) for links to WAI tweets, RSS feed, and WAI Interest Group (WAI IG) emails. An email address for sending comments on the pronunciation documents is included in the "Status of this Document" sections.

If you are interested in becoming a participant of the Pronunciation Task Force or have questions regarding its work, e-mail [Task Force Facilitators Irfan Ali and Paul Grenier, and W3C Staff Contact Roy Ran](mailto:iali@ets.org,pgrenier@gmail.com?CC=ran@w3.org&Subject=Pronunciation%20Task%20Force).
