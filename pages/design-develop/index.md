---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Design and Develop Overview"
nav_title: "Overview"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2022-05-19  # Keep the date of the English version

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-design-develop

permalink: /design-develop/ # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /design-develop/ # Do not change this
  
feedbackmail: wai@w3.org
class: tight-page

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

Guidance for writing, designing, and developing for accessibility.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include toc.html %}

## Tips for Getting Started with Web Accessibility {#tips}

These tips introduce some basic considerations for making your website more accessible to people with disabilities. They provide links to additional guidance.

[Writing for Web Accessibility](/tips/writing/) 
: Tips for writing and presenting content.

[Designing for Web Accessibility](/tips/designing/) 
: Tips for user interface and visual design.

[Developing for Web Accessibility](/tips/developing/) 
: Tips for markup and coding.
{:.paragraph-like}

## Media Resource for Audio and Video

[[Making Audio and Video Media Accessible]](/media/av/)
: Helps you understand and create captions/subtitles, audio description of visual information, descriptive transcripts, and sign language for media. Includes guidance for creating new videos, and on media player accessibility. Introduces user experiences and benefits to organizations.
{:.paragraph-like}

## Web Accessibility Tutorials {#tutorials}

The tutorials provide guidance on how to create components that meet Web Content Accessibility Guidelines (WCAG), that are more accessible to people with disabilities, and that provide a better user experience for everyone.

* **[[Page Structure Tutorial]](/tutorials/page-structure/)**
* **[[Menus Tutorial]](/tutorials/menus/)**
* **[[Images Tutorial]](/tutorials/images/)**
* **[[Tables Tutorial]](/tutorials/tables/)**
* **[[Forms Tutorial]](/tutorials/forms/)**
* **[[Carousels Tutorial]](/tutorials/carousels/)**

## Other Design and Development Resources

[How to Meet WCAG (Quick Reference)](https://www.w3.org/WAI/WCAG22/quickref/)
: A customizable reference to Web Content Accessibility Guidelines (WCAG) requirements ("success criteria") and techniques.

[WAI-ARIA Authoring Practices Guide (APG)](/ARIA/apg/)
: Provides approaches, advice, and examples to help web application developers make widgets, navigation, and behaviors accessible using WAI-ARIA (Accessible Rich Internet Applications) roles, states, and properties.

[Cognitive Accessibility Guidance](/WCAG2/supplemental/#cognitiveaccessibilityguidance)
: Provides objectives and design patterns to improve accessibility for people with cognitive and learning disabilities. Introduced in [About Supplemental Guidance](/WCAG2/supplemental/about/).

[Developing Websites for Older People: How WCAG Applies](/older-users/developing/)
: Lists specific WCAG success criteria and techniques that particularly improve accessibility and usability for older people.
{:.paragraph-like}