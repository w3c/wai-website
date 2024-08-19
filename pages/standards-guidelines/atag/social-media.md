---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Guidelines to Make Your Social Media Platform Accessible"
nav_title: "For Social Media Platforms"
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2022-12-08   # Put the date of this translation YYYY-MM-DD (with month in the middle)

github:
  label: wai-atag-intro

permalink: /standards-guidelines/atag/social-media/   # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/atag/social-media/   # Do not change this

license: creative-commons

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Date:</strong> Updated 8 December 2022.<!-- First published December 2022. --></p>
   <p><strong>Editors:</strong> Daniel Montalvo and <a href="https://www.w3.org/People/Shawn/">Shawn Henry</a>. Contributors: Kevin White, Sharron Rush, and <a href="https://www.w3.org/groups/wg/eowg/participants">participants of the Education and Outreach Working Group</a>.</p>
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

This page briefly introduces a standard to help you make your social media platform accessible to creators and users with disabilities.

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

People with disabilities need to use your social media tool to connect to the world.

By making your social media tool accessible, you help create more inclusive communities and improve your tool's reputation.

Content creators and content consumers need social media tools that:

* are accessible to users with disabilities
* produce accessible content

**Accessibility is required by law and is a procurement requirement** in many situations.

## Example Scenarios

These _persona_ scenarios show examples of accessibility _problems_ that disabled people experience using social media tools, and what _works well_ in tools that are accessible.

### Everyone can rely on your tool

<p><span class="persona">Persona: </span>
 Banele is a social media consultant with low vision. Her screen resolution is set so everything is bigger on her display.
</p>
<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        I used to be able to easily publish client posts using our social media platform. The last platform update doesn't work for me now. The publish button is off the screen and I can't get to it.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        The platform updates are getting even better for my configuration, and also for my colleagues with other disabilities.
      </q></span></p>
    </li>
  </ul>
</div>

Users who have auditory, cognitive, neurological, physical, speech, or visual disabilities need your platform to work with their settings and specialized software, called assistive technologies.

### Everyone can read and process content at their own pace

<p><span class="persona">Persona: </span>
  Nushi is an influencer with reading disabilities. He uses tools to have text read aloud.
  </p>
<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        When content refreshes too fast, I have problems keeping up. It is difficult for me to manage new comments.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        I can decide when to have new content appear. This way I can read at my own pace, use tools to read content aloud if needed, and make sure I am reacting and responding to my followers when I need to. 
      </q></span></p>
    </li>
  </ul>
</div>

People who use social media have different abilities. For example, they may read content at different paces. Your tool should allow them to decide how they want to process the new content that appears.

### The tool helps create accessible multimedia

<p><span class="persona">Persona: </span>
  Enhamed manages the social profile of a client. He uploads images and videos to showcase his client's activities. His client has asked him to make these media accessible, but he does not know how to do this.
</p>
<div class="quotes">
  <ul>
    <li>
      <p><span class="issue">Problem: </span><span><q>
        My client has now requested that I make all media accessible, including images, audio, and video. I am not sure how to get this done, and I can’t find anything in my tool that explains it.
      </q></span></p>
    </li>
    <li>
      <p><span class="issue">Works well: </span><span><q>
        When I upload an image, the tool asks me if it needs alternative text and gives guidance on how to write it. When I upload a video, the tool suggests that I add transcripts, captions, and descriptions as appropriate.
      </q></span></p>
    </li>
  </ul>
</div>

People who post multimedia content need tools that can create accessible images, audio, and video. This includes adding alternative texts to images, as well as transcripts, captions, and description for videos as appropriate.

## The Accessibility Standard to Help You

Your social media tool is sometimes called an "authoring tool" because people use it to share content with their family, friends, colleagues, and followers. There is an international standard that addresses accessibility needs in social media tools: Authoring Tool Accessibility Guidelines (ATAG).

**Use ATAG to help make your tool**:

* **accessible to content creators (Part A)**
* **support accessible content for content consumers (Part B)**

{::nomarkdown}
{% include box.html type="start" title="Examples" class="simple aside" %}
{:/}

ATAG covers the example scenarios above:

* _Everyone can rely on your tool_ &mdash; ATAG says: conforming to WCAG 2.0, following existing platform accessibility guidelines, and implementing communication with platform accessibility services facilitates access by all authors, including those using assistive technologies.
* _Everyone can read and process content at their own pace_ &mdash; ATAG says: Some authors who have difficulty typing, operating the mouse, or processing information can be prevented from using systems with short time limits or that require fast reaction speeds.
* _The tool helps create accessible multimedia_ &mdash; ATAG says: Assist authors with managing alternative content for non-text content. Ensure that documentation promotes the production of accessible content.

And ATAG covers much more.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

**To get started putting ATAG to work for you, see**:

* **[[ATAG Overview]](/standards-guidelines/atag/)**, with links to the ATAG standard and Implementing ATAG
* **[[ATAG at a Glance]](/standards-guidelines/atag/glance/)**, a paraphrased summary to give you an idea of what's covered in ATAG
