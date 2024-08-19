---
title: "Easy Checks – A First Review of Web Accessibility"
permalink: /test-evaluate/easy-checks/
ref: /test-evaluate/easy-checks/
nav_title: "Overview"

lang: en

doc-note-type: draft

github:
  label: wai-easy-checks

acknowledgements: /test-evaluate/easy-checks/acknowledgements/
footer: >
  <p><strong>Status:</strong> Updated March 2024</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/kevin/">Kevin White</a>, Andrew Arch, and  <a href="https://www.w3.org/People/shawn/">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors, credits, and funders.</p>
---

{::nomarkdown}

<style>
  #summary {
    display: flex;
  }
  
  #summary p:first-of-type {
    font-size:120%;
    margin-top: 0.5em;
  }
  
  .video-card {
    margin: 1em;
    float: none !important;
    max-width: inherit !important;
    width: 90em !important;
    flex-grow: 1;
  }
  .video-card p {
    font-size: 90% !important;
  }
  .video-card video {
    border-radius: 5px;
  }

  .icon {
    width: 1em;
    height: 1em;
  }
  
  .box-sections>div>div {
    display:flex;
  }
  .box-sections {
    margin-top: 3em;
  }
  .box-sections .box-i {
    padding: 0;
  }
  .box-sections .box-i div {
    clear: left;
    padding: 8px 16px;
    border-bottom: solid 1px var(--line-grey);
  }
  .box-sections .box-i div:last-child {
    border-bottom: none;
  }
  .box-sections .splash {
    width: 8em;
    max-width: inherit;
  }
  .box-sections h3 {
    margin: 0;
  }
  </style>

<aside id="summary" class="box box-i box-simple">
  <div>
    <p>This page helps you start to assess the accessibility of a web page. With these simple checks, you can find out whether or not accessibility is addressed in even the most basic way.</p>
    <nav aria-labelledby="tocheading" id="toc">
      <header id="tocheading" class="box-h box-h-simple">Page Contents</header>
      <ul id="markdown-toc">
        <li><a href="#introduction" id="markdown-toc-introduction">Introduction</a></li>
        <li><a href="#common" id="markdown-toc-common-checks">Common Checks</a></li>
        <li><a href="#audio-visual" id="markdown-toc-audio-visual-checks">Audio/Visual Checks</a></li>
        <li><a href="#forms" id="markdown-toc-forms-checks">Form Checks</a></li>
      </ul>
    </nav>
  </div>
{:/}
{% include video-card.html
    video-url="//media.w3.org/wai/evaluation-intros/easy-checks-accessibility.mp4"
    captions="https://www.w3.org/WAI/wai-videos/evaluating/easy-checks-accessibility.en.vtt|en|default"
    poster="https://www.w3.org/WAI/content-images/test-eval/video-thumb-easy-checks.png"
    accessible-version="https://www.w3.org/WAI/test-evaluate/preliminary/#video-intro"
    accessible-version-label="Video: Easy Checks Overview"
    poster="https://www.w3.org/WAI/content-images/test-eval/video-thumb-easy-checks.png"
%}
{::nomarkdown}
</aside>
{:/}

{::nomarkdown}
{% include box.html type="start" title="Disclaimer" icon="warning" %}
{:/}

<p>These checks cover just a few accessibility issues and are designed to be quick and easy, rather than exhaustive. A web page could seem to pass these checks, yet still have significant accessibility barriers. More extensive assessment is needed to evaluate accessibility comprehensively.</p>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Introduction

You will be able to perform any of the following checks on any web page. The results will give you a basic idea of how accessible the page is. Each check explains briefly what it is checking for and why this matters. The checks also tell you what you should be looking for.

{::nomarkdown}
{% include box.html type="start" id="common" class="sections" h="2" title="Common checks" %}
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-alt-text.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Image Alternative Text](/test-evaluate/easy-checks/image-alt/)

Image alternative text ("alt text") is a short description that conveys the purpose of an image. Alternative text is used by people who do not see the image.

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-page-title.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Page Title](/test-evaluate/easy-checks/title/)

Page titles are shown in the window title bar or tab in browsers. They are the first thing read by screen readers and help people know where they are. 

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-heading-structure.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Headings](/test-evaluate/easy-checks/headings/)

Headings communicate the organization of the content on the page, like a table of contents. Screen reader users often use page headings as a way to navigate a web page.

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-color-contrast.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Color Contrast](/test-evaluate/easy-checks/color-contrast/)

Color contrast refers to the difference between adjacent colors. Typically this is the text and background color. It also includes interactive elements and their background, and parts of graphs or charts. Some people cannot read text or find elements if there is insufficient contrast between colors.

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-skip-link.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Skip Link](/test-evaluate/easy-checks/skip-link/)

A skip link is the first interactive element on a page. People using keyboards, screen readers and other assistive technologies can use skip links to quickly and easily reach the main page content.

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-keyboard-focus.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Visible Keyboard Focus](/test-evaluate/easy-checks/keyboard-focus/)

Keyboard focus is a visible indicator that identifies the element with focus and moves as your tab through a page. For people who rely on a keyboard to navigate it is important that they know which link or form control has focus. 

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-page-language.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Language of Page](/test-evaluate/easy-checks/language/)

Web pages should identify the primary language of the page. Specifying the language of the page means that assistive technology that speaks content can correctly pronounce words.

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-zoom.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Zoom](/test-evaluate/easy-checks/zoom/)

Zoom is used to enlarge the text and images on web pages to make them more readable. Some people need to enlarge content in order to read it. When content is zoomed it still needs to legible and usable.

{::nomarkdown}
  </div>
</div>
{:/}

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::nomarkdown}
{% include box.html type="start" id="audio-visual" class="sections" h="2" title="Audio/Visual Checks" %}
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-captions.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Captions](/test-evaluate/easy-checks/captions/)

Captions are a text version of the speech and non-speech audio information needed to understand the video and displayed with the video. The audio in video content needs to be available to people who are Deaf or hard of hearing. 

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-transcripts.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Transcripts](/test-evaluate/easy-checks/transcripts/)

Transcripts are a text version of the speech and non-speech information in audio content and available separately from the video. They are used by people who are Deaf, hard of hearing or who have difficulty processing audio information.

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-description.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Audio Description](/test-evaluate/easy-checks/description/)

Audio description describes visual information needed to understand the content, including text displayed in the video, as part of the video. It provides content to people who are blind and others who cannot see the video adequately.

{::nomarkdown}
  </div>
</div>
{:/}

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::nomarkdown}
{% include box.html type="start" id="forms" class="sections" h="2" title="Form Checks" %}
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-form-labels.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Labels](/test-evaluate/easy-checks/form-field-labels/)

Form field labels are the text beside form fields. They should tell us what information to enter or what checkbox to select. Everyone needs labels to understand how to interact with a form. 

{::nomarkdown}
  </div>
</div>
<div>
  <p><img src="{{ "/content-images/easy-checks/icon-required.svg" | relative_url }}" alt="" class="splash" /></p>
  <div>
{:/}

### [Required Fields](/test-evaluate/easy-checks/required-fields/)

A required form field must be completed before you submit a form. Marking which fields are required in a form makes it easier for everyone to complete forms.

{::nomarkdown}
  </div>
</div>
{:/}

{::nomarkdown}
{% include box.html type="end" %}
{:/}
