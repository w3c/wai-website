---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Standards to Make Your LMS Accessible"
nav_title: "For LMS"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2022-12-08   # Keep the date of the English version

github:
  label: wai-atag-intro

permalink: /standards-guidelines/atag/education/   # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/atag/education/   # Do not change this

license: creative-commons

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/Shawn/">Shawn Henry</a>. Contributors: Kevin White, Jade Matos Carew, and <a href="https://www.w3.org/groups/wg/eowg/participants">participants of the Education and Outreach Working Group</a>.</p>
   <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO">EOWG</a>). Developed as part of the <a href="https://www.w3.org/WAI/about/projects/wai-guide">WAI-Guide project</a>, co-funded by the European Commission.</p>

class: tight-page

inline_css: |
  .quotes {margin-bottom: 0;}
  .quotes ul {list-style-type: none;}
  .quotes li>p {display:table-row;}
  .quotes li>p span {display:table-cell;}
  .persona {font-style: italic;}
  .issue {font-style: italic; display:table-cell; width: 6em;}
  q:before {content: open-quote;color: #005a6a;font-style: italic;}
  q:after {content: close-quote;color: #005a6a;font-style: italic;}
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page briefly introduces a standard to help make your learning management system (LMS) and other education tools accessible to people with disabilities.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}
{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Why Accessibility Matters

Your current customers and potential new customers need learning management systems (LMS) that:

* are accessible to instructors and other LMS users with disabilities
* produce accessible content for students

Accessibility for instructors and students is an essential aspect of diversity, equity, and inclusion.

**Accessibility is required by law and is a procurement requirement** in many situations.

## Example Scenarios

These _persona_ scenarios show examples of accessibility _problems_ that disabled people experience using LMSs, and what _works well_ in tools that are accessible.

### Everyone can use previews

<p><span class="persona">Persona: </span>
 Zola is a physics professor at a large university. She is blind and uses a screen reader that reads aloud the information on her screen.
</p>
<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        I can't preview uploaded content for my students using my screen reader. I can't navigate the preview like I can a regular web page.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        The content preview works just like a web page in a browser. I can navigate it easily using my screen reader's functionality.
      </q></span></p>
    </li>
  </ul>
</div>

Users who have auditory, cognitive, neurological, physical, speech, or visual disabilities need to be able to preview the course content before posting it for students.

### Everyone can edit content

<p><span class="persona">Persona: </span>
  Aroon is a school administrator. He can't move his arms due to a spinal cord injury and he uses speech recognition to navigate through applications and websites.
</p>

<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        I can't sort the course attendees data table. There's no way to activate the column sort with voice.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        I can interact with the course attendees table by voice. I can select the column I want to sort by.
      </q></span></p>
    </li>
  </ul>
</div>

Some people cannot use a mouse. They need to be able to use your LMS with their tools, such as speech recognition, keyboard, and switches. 

### The LMS helps make course content accessible

<p><span class="persona">Persona: </span>
  Irina is the director of an online professional training center. She is an expert in her job; however, she doesn't know much about accessibility.
</p>
<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        I'm adding charts to our courses. I have no idea what I need to do to make them accessible to students with disabilities.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        Whenever I add a chart to a course, the tool prompts me to add a short description and a full text alternative for the chart data. There's also "Learn More" that explains why it's important for accessibility, and how to do it well.
</q></span></p>
    </li>
  </ul>
</div>

LMSs need to produce accessible content. Part of that is up to your tool and part is up to the user. Your tool can provide prompts and information to help users know what they need to do to provide accessible course content.

## The Accessibility Standard to Help You

Your learning management system (LMS) is sometimes called an "authoring tool" because people use it to author or create course content. There is an international standard that addresses accessibility needs in LMSs: Authoring Tool Accessibility Guidelines (ATAG).

**Use ATAG to help make your tool**:

* **accessible to instructors and other users with disabilities (Part A)**
* **support accessible content for students (Part B)**

{::nomarkdown}
{% include box.html type="start" title="Examples" class="simple aside" %}
{:/}

ATAG covers the example scenarios above:

* _Everyone can use previews_ &mdash; ATAG says: Ensure that previews are accessible. Course authors often periodically check how browsers will display the content to students. Authors with disabilities need the same opportunity to check their work.
* _Everyone can edit content_ &mdash; ATAG says: Provide keyboard access to authoring features. Some authors with limited mobility or visual disabilities do not use a mouse. Instead, they require keyboard interface access to all of the functionality of the authoring tool.
* _The LMS helps make course content accessible_ &mdash; ATAG says: Guide authors to produce accessible content. Assist authors with managing alternative content for non-text content. Ensure that documentation promotes the production of accessible content.

And ATAG covers much more.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

**To get started putting ATAG to work for you, see**:

* **[[ATAG Overview]](/standards-guidelines/atag/)**, with links to the ATAG standard and Implementing ATAG
* **[[ATAG at a Glance]](/standards-guidelines/atag/glance/)**, a paraphrased summary to give you an idea of what's covered in ATAG
