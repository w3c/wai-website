---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Designing for Web Accessibility – Tips for Getting Started"
title_html: "Designing for Web Accessibility"
nav_title: Tips for Designing
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2024-07-16   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/  # Do not change this

navigation:
  previous: /tips/writing/ # Do not change this
  next: /tips/developing/ # Do not change this

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips

permalink: /tips/designing/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/designing/   # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#designing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Minor update 16 July 2024. Updated 16 July 2024. First published September 2015.</p>
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, and <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS.</p>
  <p>Developed by the <a href="https://www.w3.org/WAI/EO/">Education and Outreach Working Group (EOWG)</a>. Developed with support from the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission <abbr title="Information Society Technologies">IST</abbr> Programme.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces some basic considerations to help you get started making your user interface design and visual design more accessible to people with disabilities. These tips are good practice to help you meet Web Content Accessibility Guidelines (WCAG) requirements. Follow the links to the related WCAG requirements, detailed background in the "Understanding" document, guidance from Tutorials, user stories, and more.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Provide sufficient contrast between foreground and background

Foreground text needs to have sufficient contrast with background colors. This includes text on images, background gradients, buttons, and other elements. This does not apply for logos, or incidental text, such as text that happens to be in a photograph. The links below provide more information on the minimum contrast ratio as required by the <abbr>WCAG</abbr> and how to check contrast. "Contrast ratio" is a short version of the more technically correct term "luminance contrast ratio".

{::nomarkdown}
{% include_cached box.html type="start" title="<strong>Example:</strong> Contrast ratio" class="example" %}
{:/}

<div class="two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} Insufficient</figcaption>
    <div>
      <p style="color: #999;">Some people cannot read text if there is not sufficient contrast between the text and background. For others, bright colors (high luminance) are not readable; they need low luminance.</p>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Sufficient</figcaption>
    <div>
      <p class="pass">Some people cannot read text if there is not sufficient contrast between the text and background. For others, bright colors (high luminance) are not readable; they need low luminance.</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Contrast (Minimum) 1.4.3](/WAI/WCAG21/quickref/#contrast-minimum) ([Understanding 1.4.3](/WAI/WCAG21/Understanding/contrast-minimum))
* **User Stories**
  * [[Lexie, online shopper who cannot distinguish between certain colors (color blindness)]](/people-use-web/user-stories/story-four/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)
* **Easy Check**
  * [How to check contrast ratio](/test-evaluate/preliminary/#contrast)
* **Support Tools**
  * [List of tools to help determine contrast ratio](/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html#visual-audio-contrast-contrast-resources-head)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Don't use color alone to convey information

While color can be useful to convey information, color should not be the only way information is conveyed. When using color to differentiate elements, also provide additional identification that does not rely on color perception. For example, use an asterisk in addition to color to indicate required form fields, and use labels to distinguish areas on graphs.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using color to convey meaning" class="example" %}
{:/}

<div class="color-alone two-column">
  <figure class="reference fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} Color only</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">Required fields are in red</span></p>
        <div class="row">
          <label for="name1">Name</label> <input type="text" id="name1" name="name">
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email1">Email</label> <input type="text" id="email1" name="email">
        </div>
      </form>
    </div>
  </figure>
  <figure class="reference pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Color and symbol</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">Required fields</span> are in red and marked with an <span class="required" style="color: #992929;">*</span></p>
        <div class="row">
          <label for="name2">Name</label> <input type="text" id="name2" name="name"><br>
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email2">Email *</label> <input type="text" id="email2" name="email">
        </div>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Refer to something using color alone" class="example" %}
{:/}
<div class="color-alone two-column">
  <figure class="question fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} Color only</figcaption>
    <div>
      <svg version="1.1" width="153" height="154" aria-labelledby="inaccessible-triangles-title" role="img">
        <g>
          <title id="inaccessible-triangles-title">Four triangles with different angles</title>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D"/>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">Which is the right-angled triangle?</legend>
          <input id="answer-green1" name="answer1" value="green" type="radio"> <label for="answer-green1">Green</label><br>
          <input id="answer-blue1" name="answer1" value="blue" type="radio"> <label for="answer-blue1">Blue</label><br>
          <input id="answer-red1" name="answer1" value="red" type="radio"> <label for="answer-red1">Red</label><br>
          <input id="answer-yellow1" name="answer1" value="yellow" type="radio"> <label for="answer-yellow1">Yellow</label><br>
          <input id="answer-pass1" name="answer1" value="pass" type="radio"> <label for="answer-pass1">Don't know</label>
        </fieldset>
      </form>
    </div>
  </figure>
  <figure class="question pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Color and number</figcaption>
    <div>
      <svg version="1.1" width="153" height="154">
        <g>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D" />
          <text fill="#f4f4f4" y="51" x="44"><tspan>1</tspan><tspan dx="100" style="opacity:0">Green triangle: Angles are 30°, 60°, 90°</tspan></text>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <text fill="#f4f4f4" y="54" x="132"><tspan>2</tspan><tspan dx="100" style="opacity:0"> Blue triangle: Angles are 30°, 30°, 120°</tspan></text>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <text fill="#f4f4f4" y="114" x="110"><tspan>3</tspan><tspan dx="100" style="opacity:0"> Red triangle: Angles are 40°, 70°, 70°</tspan></text>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
          <text fill="#333" y="118" x="48"><tspan>4</tspan><tspan dx="100" style="opacity:0"> Yellow triangle: Angles are 60°, 60°, 60°</tspan></text>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">Which is the right-angled triangle?</legend>
          <input id="answer-green2" name="answer2" value="green" type="radio"> <label for="answer-green2">Green (1)</label><br>
          <input id="answer-blue2" name="answer2" value="blue" type="radio"> <label for="answer-blue2">Blue (2)</label><br>
          <input id="answer-red2" name="answer2" value="red" type="radio"> <label for="answer-red2">Red (3)</label><br>
          <input id="answer-yellow2" name="answer2" value="yellow" type="radio"> <label for="answer-yellow2">Yellow (4)</label><br>
          <input id="answer-pass2" name="answer2" value="pass" type="radio"> <label for="answer-pass2">Don't know</label>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Use of Color 1.4.1](/WAI/WCAG21/quickref/#use-of-color) ([Understanding 1.4.1](/WAI/WCAG21/Understanding/use-of-color))
* **User Story**
  * [[Lexie, online shopper who cannot distinguish between certain colors (color blindness)]](/people-use-web/user-stories/story-four/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}


## Ensure that interactive elements are easy to identify

Provide distinct styles for interactive elements, such as links and buttons, to make them easy to identify. For example, change the appearance of links on mouse hover, keyboard focus, and touch-screen activation. Ensure that styles and naming for interactive elements are used consistently throughout the website.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Unique styles for different link states" class="example" %}
{:/}

<div class="focus two-column">
  <div>
    <figure>
      <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Style links to stand out from text</figcaption>
      <div>
        <p>Some people can't use a mouse and use only a <a href="javascript:return false;" aria-label="Link is styled to stand out from main text">keyboard to navigate</a> through web pages.</p>
        <p>It is important that users can reach all interactive elements using the keyboard, and that it is clear which element has focus.</p>
        <p>Visible keyboard focus could be a border or highlight that moves as you tab through the web page.</p>
      </div>
    </figure>
  </div>
  <div>
    <figure class="hover">
      <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Mouse hover style</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Link is styled with a subtle background to highlight hover state" style="color: #850BAC; background-color: rgba(253, 247, 15, 0.3)">keyboard to navigate</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
    <figure class="keyboard">
      <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Keyboard focus style</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Link is styled with a stronger version of the hover style to make it stand out" style="color: #850BAC; background-color: #fdf70f">keyboard to navigate</a></p>
      </div>
    </figure>
    <figure class="active">
      <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Touch or click style</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Link is given a strong styling to show an action will occur" style="background: #850BAC; color: #f4f4f4">keyboard to navigate</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Focus Visible 2.4.7](/WAI/WCAG21/quickref/#focus-visible) ([Understanding 2.4.7](/WAI/WCAG21/Understanding/focus-visible))
  * [Consistent Identification 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([Understanding 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **User Stories**
  * [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
  * [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
  * [[Lexie, online shopper who cannot distinguish between certain colors (color blindness/)]](/people-use-web/user-stories/story-four/)
  * [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
  * [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Provide clear and consistent navigation options

Ensure that navigation across pages within a website has consistent naming, styling, and positioning. Provide more than one method of website navigation, such as a site search or a site map. Help users understand where they are in a website or page by providing orientation cues, such as breadcrumbs and clear headings.

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Consistent Navigation 3.2.3](/WAI/WCAG21/quickref/#consistent-navigation) ([Understanding 3.2.3](/WAI/WCAG21/Understanding/consistent-identification))
  * [Multiple Ways 2.4.5](/WAI/WCAG21/quickref/#multiple-ways) ([Understanding 2.4.5](/WAI/WCAG21/Understanding/multiple-ways))
* **User Stories**
  * [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
  * [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
  * [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Ensure that form elements include clearly associated labels

Ensure that all fields have a descriptive label adjacent to the field. For left-to-right languages, labels are usually positioned to the left or above the field, except for checkboxes and radio buttons where they are usually to the right. Avoid having too much space between labels and fields.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Labels and input fields associated by proximity" class="example" icon="check-circle" %}
{:/}

<div class="labels">
  <figure>
    <div>
      <form action="#" method="post">
        <fieldset>
          <legend>Add a comment</legend>
          <div class="row">
            <label for="email4">Your E-mail</label>
            <input type="text" id="email4" name="email">
          </div>
          <div class="row checkbox">
            <input type="checkbox" id="contact1" name="contact">
            <label for="contact1">I am happy for you to contact me</label>
          </div>
          <div class="row">
            <label for="website2">Your Website</label>
            <input type="text" id="website2" name="website">
          </div>
          <div class="row">
            <label for="comment2">Comment</label>
            <textarea name="comment" id="comment2"></textarea>
          </div>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Labels or Instructions 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Understanding 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
  * [Headings and Labels 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([Understanding 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
* **Tutorial**
  * [Visual position of label text](/tutorials/forms/labels/#visual-position-of-label-text)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Provide easily identifiable feedback

Provide feedback for interactions, such as confirming form submission, alerting the user when something goes wrong, or notifying the user of changes on the page. Instructions should be easy to identify. Important feedback that requires user action should be presented in a prominent style.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using error list, icon, and background color to make errors stand out" class="example" icon="check-circle" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <div class="error-list">
        <p>Please correct the following errors:</p>
        <ol>
          <li id="error_email">{% include_cached icon.html name="warning" label="Error" %} <a href="javascript:document.getElementById('email5').focus()">Email address is invalid</a></li>
          <li id="error_comment">{% include_cached icon.html name="warning" label="Error" %} <a href="javascript:document.getElementById('comment3').focus()">A Comment is required</a></li>
        </ol>
      </div>
      <form action="#" method="post">
        <fieldset>
          <legend>Add a comment</legend>
          <p class="instruction"><span class="required">Required fields</span> are in red and marked with an <span class="required">*</span></p>
          <div class="row">
            <label for="name5">Name</label>
            <input type="text" id="name5" name="name" value="Superbear">
          </div>
          <div class="row error">
            <label class="required" for="email5">{% include_cached icon.html name="warning" label="Error" %} E-mail *</label>
            <input type="text" id="email5" name="email" value="superbear@@hq.example.com" aria-invalid="true" aria-describedby="error_email">
          </div>
          <div class="row">
            <label for="website3">Website</label>
            <input type="text" id="website3" name="website">
          </div>
          <div class="row error">
            <label class="required" for="comment3">{% include_cached icon.html name="warning" label="Error" %} Comment *</label>
            <textarea name="comment" id="comment3" aria-invalid="true" aria-describedby="error_comment"></textarea>
          </div>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Error Identification 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([Understanding 3.3.1](/WAI/WCAG21/Understanding/error-identification))
  * [Labels or Instructions 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Understanding 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
  * [Error Suggestion 3.3.3](/WAI/WCAG21/quickref/#error-suggestion) ([Understanding 3.3.3](/WAI/WCAG21/Understanding/error-suggestion))
* **Tutorial**
  * [User Notifications](/tutorials/forms/notifications/)
* **User Stories**
  * [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
  * [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Use headings and spacing to group related content

Use whitespace and proximity to make relationships between content more apparent. Style headings to group content, reduce clutter, and make it easier to scan and understand.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Spacing highlights relationship between content" class="example" %}
{:/}

<div class="headings two-column">
  <figure class="fail">
    <figcaption id="inaccessible-headings-title">{% include_cached icon.html name="ex-circle" label="Wrong" %} Little spacing and unclear relationship</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="inaccessible-headings-title" aria-describedby="inaccessible-headings-desc" role="img">
        <g>
          <desc id="inaccessible-headings-desc">Single heading with large blocks of text, poor separation of sub-headings, and unclear image relationship</desc>
          <text class="heading" x="0" y="14">Main heading</text>
          <rect x="0" y="18" width="247" height="3"/>
          <rect x="0" y="24" width="244" height="3"/>
          <rect x="0" y="30" width="249" height="3"/>
          <rect class="image" x="180" y="36" width="70" height="55"/>
          <line x1="181" y1="37" x2="249" y2="90" stroke-width="1"/>
          <line x1="181" y1="90" x2="249" y2="37" stroke-width="1"/>
          <rect x="0" y="36" width="168" height="3"/>
          <rect x="0" y="42" width="171" height="3"/>
          <rect x="0" y="48" width="166" height="3"/>
          <rect x="0" y="54" width="172" height="3"/>
          <rect x="0" y="60" width="120" height="3"/>
          <text class="sub-heading" x="0" y="74">Sub heading</text>
          <rect x="0" y="76" width="144" height="3"/>
          <rect x="0" y="82" width="136" height="3"/>
          <rect x="0" y="88" width="142" height="3"/>
          <rect x="0" y="94" width="236" height="3"/>
          <rect x="0" y="100" width="249" height="3"/>
          <rect x="0" y="106" width="239" height="3"/>
          <rect x="0" y="112" width="205" height="3"/>
          <text class="sub-heading" x="0" y="126">Sub heading</text>
          <rect x="0" y="128" width="236" height="3"/>
          <rect x="0" y="134" width="242" height="3"/>
          <rect x="0" y="140" width="243" height="3"/>
          <rect x="0" y="146" width="250" height="3"/>
          <rect x="0" y="152" width="245" height="3"/>
          <rect x="0" y="158" width="187" height="3"/>
        </g>
      </svg>
    </div>
  </figure>
  <figure class="pass">
    <figcaption id="accessible-headings-title">{% include_cached icon.html name="check-circle" label="OK" %} More spacing and clearer relationship</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="accessible-headings-title" aria-describedby="accessible-headings-desc" role="img">
        <g>
          <desc id="accessible-headings-desc">Main heading, multiple sub headings, lists, and no large text blocks</desc>
          <text class="heading" x="0" y="14">Main heading</text>
          <rect x="0" y="21" width="175" height="3"/>
          <rect x="0" y="27" width="170" height="3"/>
          <rect x="0" y="33" width="159" height="3"/>
          <rect x="0" y="39" width="95" height="3"/>
          <rect x="0" y="51" width="175" height="3"/>
          <rect x="0" y="57" width="170" height="3"/>
          <rect x="0" y="63" width="159" height="3"/>
          <rect x="0" y="69" width="172" height="3"/>
          <rect x="0" y="75" width="143" height="3"/>
          <rect class="image" x="180" y="21" width="70" height="55"/>
          <line x1="181" y1="22" x2="249" y2="75"/>
          <line x1="181" y1="75" x2="249" y2="22"/>
          <text class="sub-heading" x="0" y="98">Sub heading</text>
          <rect x="0" y="103" width="106" height="3"/>
          <rect x="0" y="109" width="99" height="3"/>
          <rect x="0" y="115" width="114" height="3"/>
          <rect x="0" y="121" width="110" height="3"/>
          <rect x="0" y="127" width="110" height="3"/>
          <rect x="0" y="139" width="99" height="3"/>
          <rect x="0" y="145" width="114" height="3"/>
          <rect x="0" y="151" width="110" height="3"/>
          <rect x="0" y="157" width="84" height="3"/>
          <text class="sub-heading" x="135" y="98">Sub heading</text>
          <rect x="135" y="103" width="106" height="3"/>
          <rect x="135" y="109" width="99" height="3"/>
          <rect x="135" y="115" width="114" height="3"/>
          <rect x="135" y="127" width="114" height="3"/>
          <rect x="135" y="133" width="110" height="3"/>
          <rect x="135" y="139" width="99" height="3"/>
          <rect x="135" y="145" width="108" height="3"/>
          <rect x="135" y="151" width="110" height="3"/>
          <rect x="135" y="157" width="62" height="3"/>
        </g>
      </svg>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Headings and Labels 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([Understanding 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
  * [Section Headings 2.4.10](/WAI/WCAG21/quickref/#section-headings) ([Understanding 2.4.10](/WAI/WCAG21/Understanding/section-headings))
* **Tutorial**
  * [Headings](/tutorials/page-structure/headings/)
* **User Stories**
  * [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Create designs for different viewport sizes

Consider how page information is presented in different sized viewports, such as mobile phones or zoomed browser windows. Position and presentation of main elements, such as header and navigation can be changed to make best use of the space. Ensure that text size and line width are set to maximize readability and legibility.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Content and navigation adapt to smaller mobile screen" class="example" %}
{:/}

<div class="responsive">
  <figure>
    <div>
      {% include_cached image.html src="tips/content_in_browser.png" %}
      {% include_cached image.html src="tips/content_in_phone.png" %}
      <p>Display in a wide window with small text uses multiple columns for primary content, visible navigation options, and visible secondary information.</p>
      <p>Display in a narrow window, such as a mobile phone, or with large text uses single column for primary content, navigation options are revealed using an icon, and secondary information is also revealed via icon.</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **Background**
  * [Small Screen Size](/TR/mobile-accessibility-mapping/#h-small-screen-size)
  * [Mobile considerations related to Understandability](/TR/mobile-accessibility-mapping/#mobile-accessibility-considerations-related-primarily-to-principle-3-understandable)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Include image and media alternatives in your design

Provide a place in your design for alternatives for images and media. For example, you might need:

* Visible links to transcripts of audio
* Visible links to audio described versions of videos
* Text along with icons and graphical buttons
* Captions and descriptions for tables or complex graphs

Work with content authors and developers to provide alternatives for non-text content.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Design includes links to a transcript and to an audio described video" class="example" %}
{:/}

<div class="text-alt">
  <figure>
    <div>
      {% include_cached image.html src="tips/example_media_player.png" alt="A media player is shown. In additon to the standard play/pause buttons, progress bar and volume, a closed captions (CC) button is available as well as links to a transcript and a version with audio description." %}
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Non-text Content 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Understanding 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Tutorial**
  * [Images](/tutorials/images/)
* **User Story**
  * [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Provide controls for content that starts automatically

Provide visible controls to allow users to stop any animations or auto-playing sound. This applies to carousels, image sliders, background sound, and videos.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Show play/stop and selection controls in carousel design" class="example" %}
{:/}

<div class="autoplay">
  <figure>
    <div>
      {% include_cached image.html src="tips/carousel_controls.png" alt="Example of carousel with play and slide selection controls" %}
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="More Information" class="simple" %}
{:/}

* **WCAG**
  * [Audio Control 1.4.2](/WAI/WCAG21/quickref/#audio-control) ([Understanding 1.4.2](/WAI/WCAG21/Understanding/audio-control))
  * [Pause, Stop, Hide 2.2.2](/WAI/WCAG21/quickref/#pause-stop-hide) ([Understanding 2.2.2](/WAI/WCAG21/Understanding/pause-stop-hide))
* **Tutorial**
  * [Carousel Concepts](/tutorials/carousels/)
* **User Story**
  * [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Learn More About Accessibility" class="large" icon="readmore" %}
{:/}

These tips are a few of the things you need to consider for web accessibility. The following resources help you learn why accessibility is important, and about guidelines for making the web more accessible to people with disabilities.

* [Introduction to Web Accessibility](/fundamentals/accessibility-intro/) — covers broad issues, such as the business case, and links to helpful resources
* [Accessibility Principles](/fundamentals/accessibility-principles/) — introduces the concepts behind the web accessibility requirements
* [How people with disabilities use the web](/people-use-web/) — explores the impact of accessible design with real-life examples
* [Web Accessibility Tutorials](/tutorials/) — includes some guidance related to designing, for example, [providing alternative text for images](/tutorials/images/)
* [Before and After Demonstration](/WAI/demos/bad/) — shows an inaccessible and accessible version of the same website, with annotations on accessibility barriers and repairs
* [How to Meet WCAG (Quick Reference)](/WAI/WCAG21/quickref/) — customizable reference of all WCAG requirements and techniques
* [Web Accessibility Evaluation Tools List](/WAI/ER/tools/) — includes tools to help explore contrast ratio

{::nomarkdown}
{% include box.html type="end" %}
{:/}
