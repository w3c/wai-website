---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Guidelines to Make Your No-Code Website Tool Accessible"
nav_title: "For No-Code"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2022-12-08   # Keep the date of the English version

github:
  label: wai-atag-intro

permalink: /standards-guidelines/atag/no-code/   # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/atag/no-code/   # Do not change this

license: creative-commons

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/Shawn/">Shawn Henry</a>. Contributors: Kevin White, Michele Williams, and <a href="https://www.w3.org/groups/wg/eowg/participants">participants of the Education and Outreach Working Group</a>.</p>
   <p>Developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO">EOWG</a>). Developed as part of the <a href="https://www.w3.org/WAI/about/projects/wai-guide">WAI-Guide project</a>, co-funded by the European Commission.</p>

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

This page briefly introduces a standard to help you make your no-code website tool accessible to creators, designers, and end users with disabilities.

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

No-code tools let people create websites without having to code.

People with disabilities need to use your no-code tool. Your tool needs to be accessible to disabled content creators.

The websites and widgets that your tool outputs also need to be accessible to disabled website users.

**Accessibility is required by law and is a procurement requirement** in many situations.

Improving the accessibility of your tool and its output can be a strong competitive advantage, particularly with the current focus on diversity, equity, and inclusion.

## Example Scenarios

These _persona_ scenarios show examples of accessibility _problems_ that disabled people experience using no-code tools, and what _works well_ in tools that are accessible.

### Everyone can add blocks of content

<p><span class="persona">Persona: </span>
 Martin is an independent consultant who has a website to attract clients. He is blind and uses a screen reader that reads aloud the information on his screen.
</p>
<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        I want to add a new section to my home page. The tool documentation says to drag and drop a content block. I can't do that, because I can't use a mouse. I tried using my screen reader’s built-in functionality to drag and drop, but it doesn't work with this tool.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        I can use the keyboard to select the content block and put it where I want on the page. Everything is announced properly, including the block type and the location where I place it.
      </q></span></p>
    </li>
  </ul>
</div>

Users who have auditory, cognitive, neurological, physical, speech, or visual disabilities need to be able to add, customize, and remove blocks of content.

### The tool provides accessible components and templates

<p><span class="persona">Persona: </span>
  Amahle is a hairdresser and is proud that she created her own website. Clients use her website to schedule appointments, and it's a real time saver for her.
</p>

<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        Some of my older clients say they cannot use the calendar widget to schedule an appointment. One says she uses large text and the buttons are cut off. Others have complained that the light gray text is too hard to read.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        The calendar widget that the tool provides works great for all my clients, including the older ones. The tool helped me pick color combinations that are easy to see.
      </q></span></p>
    </li>
  </ul>
</div>

The templates, components, and pre-authored content that your tool provides need to be accessible. That includes making things like headings, lists, and labels accessible. When your tool offers customization options, such as colors, help content creators make accessible choices.

### The tool helps make images and videos accessible

<p><span class="persona">Persona: </span>
  Dacso runs a car repair shop and does a lot of body work. His daughter created a website for him to showcase his work. Dacso uploads before-and-after photos of his projects. He also posts videos with simple maintenance tips.
</p>
<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        I usually get lots of great feedback on my website. A couple of Deaf people say they want to learn from my videos, but of course they can't hear what I'm saying. I really want to make it so they can get advice from my videos, but I have no idea what to do.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        Whenever I upload a picture, the tool asks me for a text description. It has "more info" that explains how to write a good text description for people who are blind and can't see the image. It also has good support for adding captions to videos. And the "more info" for videos explains how to describe what I'm doing when I make the video, for people who don't see too well.
      </q></span></p>
    </li>
  </ul>
</div>

Your tool should enable and encourage content creators to provide alternative text for images, audio, and videos. It should include guidance on how to provide useful alternatives for their website consumers who have disabilities.

## The Accessibility Standard to Help You

Your no-code tool is sometimes called an "authoring tool" because people use it to author or create websites. There is an international standard that addresses accessibility needs in no-code tools: Authoring Tool Accessibility Guidelines (ATAG).

**Use ATAG to help make your tool**:

* **accessible to website creators (Part A)**
* **support accessible content for website consumers (Part B)**

{::nomarkdown}
{% include box.html type="start" title="Examples" class="simple aside" %}
{:/}

ATAG covers the example scenarios above:

* _Everyone can add blocks of content_ &mdash; ATAG says: Provide keyboard access to authoring features. Some authors with limited mobility or visual disabilities do not use a mouse and instead require keyboard interface access to all of the functionality of the authoring tool.
* _The tool provides accessible components and templates_ &mdash; ATAG says: Assist authors with accessible templates. There are accessible template options for a range of template uses. Assist authors with accessible pre-authored content.
* _The tool helps make images and videos accessible_ &mdash; ATAG says: Assist authors with managing alternative content for non-text content. Ensure that documentation promotes the production of accessible content.

And ATAG covers much more.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

**To get started putting ATAG to work for you, see**:

* **[[ATAG Overview]](/standards-guidelines/atag/)**, with links to the ATAG standard and Implementing ATAG
* **[[ATAG at a Glance]](/standards-guidelines/atag/glance/)**, a paraphrased summary to give you an idea of what's covered in ATAG
