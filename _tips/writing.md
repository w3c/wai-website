---
title: Tips on Writing for Web Accessibility
nav_title: Writing
order: 2
---

This page introduces some basic considerations to help you get started writing web content that is more accessible to people with disabilities. These tips are good practice to help you meet Web Content Accessibility Guidelines (WCAG) requirements. Follow the links to the related WCAG requirements, detailed background in the "Understanding" document, guidance from Tutorials, user stories, and more.

{:.toc .no_toc}
## On this page

{:toc .toc}
* Will be replaced with the ToC

{::nomarkdown}
<%= tip %>
{:/}

{:.attach_permalink}
## Provide informative, unique page titles

For each web page, provide a short title that describes the page content and distinguishes it from other pages. The page title is often the same as the main heading of the page. Put the unique and most relevant information first; for example, put the name of the page before the name of the organization. For pages that are part of a multi-step process, include the current step in the page title.

{::nomarkdown}
<%= example 'Page titles' %>

<div class="page-title">
  <figure>
    <figcaption><%= svg_icon 'tick' %> Home page title</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption><%= svg_icon 'tick' %> Page name followed by organization name</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Latest News &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption><%= svg_icon 'tick' %> Page name including step in a process</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Buy Your Bear (Step 1 of 3) &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
</div>

<%= example :end %>
{:/}

{::nomarkdown}
<%= more_information %>
{:/}

* **WCAG**
  * [Page Titled 2.4.2](/WAI/WCAG20/quickref/#navigation-mechanisms-title) ([Understanding 2.4.2](/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-title.html))

{::nomarkdown}
<%= more_information :end %>
{:/}

{::nomarkdown}
<%= tip :end %>
<%= tip %>
{:/}

{:.attach_permalink}
## Use headings to convey meaning and structure

Use short headings to group related paragraphs and clearly describe the sections. Good headings provide an outline of the content.

{::nomarkdown}
<%= example 'Using headings to organize content' %>

<div class="heading-structure two-column">
  <figure>
    <figcaption><%= svg_icon 'cross' %> Lack of headings</figcaption>
    <div>
      <a id="no-headings-modal" class="modal-open" href="#no-headings-modal-holder"><img src="images/headings-poor.png" alt=""><br>View example in pop-up</a>
    </div>
    <div id="no-headings-modal-holder" class="heading-structure">
      <h2 id="no-headings-modal-title"><span class="visuallyhidden">Example: </span>Headings and Subheadings</h2>

      <p>HTML elements provide information on structural hierarchy of a document. Using elements correctly will help convey additional meaning to assistive technology. In many cases, doing so will also make your document easier to edit.</p>

      <p>For documents longer than three or four paragraphs, headings and subheadings are important for usability and accessibility. They help readers to determine the overall outline of a document and to navigate to specific information of interest.</p>

      <p>Headings are classified into levels from one to six. The highest level is "Level 1" and often corresponds to the title of the page or major document section. Sub-headers proceed through increasing header levels. The lower the number, the smaller and more detailed a section.</p>

      <p>Visual readers identify headers by scanning pages for text of a larger size or a different style. Assistive technology users are not able to see these visual changes, so changing the style is not a sufficient cue.</p>

      <p>Instead, the headings must be semantically "tagged" so that assistive technology can identify headings. This can be presented to the user as a navigation aid.</p>

      <p>This makes adding headings one of the most important tools for a screen reader user so that he or she can learn what is on the page. Note that tagging usually triggers a formatting change visually which can be adjusted in many documents.</p>

      <cite>Adapted from <a href="http://accessibility.psu.edu/headings/">Headings and Subheadings at Penn State</a></cite>
    </div>
  </figure>
  <figure>
    <figcaption><%= svg_icon 'tick' %> Using headings and subheadings</figcaption>
    <div>
      <a id="headings-modal" class="modal-open" href="#headings-modal-holder"><img src="images/headings-good.png" alt=""><br>View example in pop-up</a>
    </div>
    <div id="headings-modal-holder" class="heading-structure">
      <h2 id="headings-modal-title"><span class="visuallyhidden">Example: </span>Headings and Subheadings</h2>

      <p><abbr>HTML</abbr> elements provide information on structural hierarchy of a document. Using elements correctly will help convey additional meaning to assistive technology. In many cases, doing so will also make your document easier to edit.</p>

      <h3><span class="visuallyhidden">Example: </span>Purpose of Headings</h3>

      <p>For documents longer than three or four paragraphs, headings and subheadings are important for usability and accessibility. They help readers to determine the overall outline of a document and to navigate to specific information of interest.</p>

      <h4><span class="visuallyhidden">Example: </span>Heading Levels</h4>

      <p>Headings are classified into levels from one to six. The highest level is "Level 1" and often corresponds to the title of the page or major document section. Sub-headers proceed through increasing header levels. The lower the number, the smaller and more detailed a section.</p>

      <h3><span class="visuallyhidden">Example: </span>Meaning vs. Formatting</h3>

      <p>Visual readers identify headers by scanning pages for text of a larger size or a different style. Assistive technology users are not able to see these visual changes, so changing the style is not a sufficient cue.</p>

      <p>Instead, the headings must be semantically "tagged" so that assistive technology can identify headings. This can be presented to the user as a navigation aid.</p>

      <p>This makes adding headings one of the most important tools for a screen reader user so that he or she can learn what is on the page. Note that tagging usually triggers a formatting change visually which can be adjusted in many documents.</p>

      <cite>Adapted from <a href="http://accessibility.psu.edu/headings/">Headings and Subheadings at Penn State</a></cite>
    </div>
  </figure>
</div>

<%= example :end %>
{:/}

{::nomarkdown}
<%= more_information %>
{:/}

* **WCAG**
  * [Headings and Labels 2.4.6](/WAI/WCAG20/quickref/#navigation-mechanisms-descriptive) ([Understanding 2.4.6](/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-descriptive.html))
  * [Section Headings 2.4.10](/WAI/WCAG20/quickref/#qr-navigation-mechanisms-headings) ([Understanding 2.4.10](/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-headings.html))
  * [Info and Relationships 1.3.1](/WAI/WCAG20/quickref/#content-structure-separation-programmatic) ([Understanding 1.3.1](/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic.html))
* **User Story**
  * [How a screen reader user uses headings to navigate](/WAI/intro/people-use-web/stories#accountant)

{::nomarkdown}
<%= more_information :end %>
{:/}

{::nomarkdown}
<%= tip :end %>
<%= tip %>
{:/}

{:.attach_permalink}
## Make link text meaningful

Write link text so that it describes the content of the link target. Avoid using ambiguous link text, such as 'click here' or 'read more'. Indicate relevant information about the link target, such as document type and size, for example, 'Proposal Documents (RTF, 20MB)'.

{::nomarkdown}
<%= example 'Using link text to describe target page' %>

<div class="meaningful-links two-column">
  <figure>
    <figcaption><%= svg_icon 'cross' %> No information</figcaption>
    <div>
      <p class="fail">For more information on device independence, <a href="javascript:return false">click here</a>.</p>
    </div>
  </figure>
  <figure>
    <figcaption><%= svg_icon 'tick' %> Meaningful information</figcaption>
    <div>
      <p class="pass">Read more <a href="javascript: return false">about device independence</a>.</p>
    </div>
  </figure>
</div>

<%= example :end %>
{:/}

{::nomarkdown}
<%= more_information %>
{:/}

* **WCAG**
  * [Link Purpose (In Context) 2.4.4](/WAI/WCAG20/quickref/#navigation-mechanisms-refs) ([Understanding 2.4.4](/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-refs.html))
  * [Link Purpose (Link Only) 2.4.9](/WAI/WCAG20/quickref/#navigation-mechanisms-link) ([Understanding 2.4.9](/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-link.html))

{::nomarkdown}
<%= more_information :end %>
{:/}

{::nomarkdown}
<%= tip :end %>
<%= tip %>
{:/}

{:.attach_permalink}
## Write meaningful text alternatives for images

For every image, write alternative text that provides the information or function of the image. For purely decorative images, there is no need to write alternative text.

{::nomarkdown}
<%= example 'Using alternative text to communicate important information'%>

<div class="text-alt two-column">
  <figure>
    <figcaption><%= svg_icon 'cross' %> Uninformative</figcaption>
    <div>
      <img src="images/phone_charging.png" alt="Charging phone">
      <div>
        <p> Charging the phone: Connect the phone to a power outlet using the cable and power adaptor provided.</p>
        <p><strong>Alternative text for image</strong>: "Charging phone"</p>
      </div>
    </div>
  </figure>
  <figure>
    <figcaption><%= svg_icon 'tick' %> Informative</figcaption>
    <div>
      <img src="images/phone_charging.png" alt="Plug cable into the bottom edge of the phone.">
      <div>
        <p>Charging the phone: Connect the phone to a power outlet using the cable and power adaptor provided.</p>
        <p><strong>Alternative text for image</strong>: "Plug cable into the bottom edge of the phone."</p>
      </div>
    </div>
  </figure>
  <p class="note">Alternative text is usually not visible; it is included in this example just so you can see what it is.</p>
</div>

<%= example :end %>
{:/}

{::nomarkdown}
<%= more_information %>
{:/}

* **WCAG**
  * [Non-text Content 1.1.1](/WAI/WCAG20/quickref/#qr-text-equiv-all) ([Understanding 1.1.1](/TR/UNDERSTANDING-WCAG20/text-equiv-all.html))
* **Tutorial**
  * [Images](/WAI/tutorials/images/)
* **User Story**
  * [Describes the value of text alternatives to a blind user](/WAI/intro/people-use-web/stories#accountant)

{::nomarkdown}
<%= more_information :end %>
{:/}

{::nomarkdown}
<%= tip :end %>
<%= tip %>
{:/}

{:.attach_permalink}
## Create transcripts and captions for multimedia

For audio-only content, such a podcast, provide a transcript. For audio and visual content, such as training videos, also provide captions. Include in the transcripts and captions the spoken information and sounds that are important for understanding the content, for example, 'door creaks'. For video transcripts, also include a description of the important visual content, for example 'Athan leaves the room'.

{::nomarkdown}
<%= more_information %>
{:/}

* **WCAG**
  * [Captions (Prerecorded) 1.2.2](/WAI/WCAG20/quickref/#media-equiv-captions) ([Understanding 1.2.2](/TR/UNDERSTANDING-WCAG20/media-equiv-captions.html))
  * [Audio Description or Media Alternative (Prerecorded) 1.2.3](/WAI/WCAG20/quickref/#media-equiv-audio-desc) ([Understanding 1.2.3](/TR/UNDERSTANDING-WCAG20/media-equiv-audio-desc.html))
* **User Story**
  * [Describes how captions help a deaf student](/WAI/intro/people-use-web/stories#onlinestudent)

{::nomarkdown}
<%= more_information :end %>
{:/}

{::nomarkdown}
<%= tip :end %>
<%= tip %>
{:/}

{:.attach_permalink}
## Provide clear instructions

Ensure that instructions, guidance, and error messages are clear, easy to understand, and avoid unnecessarily technical language. Describe input requirements, such as date formats.

{::nomarkdown}
<%= example 'Instructions communicate what information the user should provide' %>

<div class="errors">
  <figure>
    <div>
      <form action="#" method="post">
        <p id="password-desc">Password should be at least six characters with at least one number (0-9).</p>
        <div class="row">
          <label for="password">Password</label>
          <input aria-describedby="password-desc" type="password" id="password" name="password" value="">
        </div>
      </form>
    </div>
  </figure>
</div>
<%= example :end %>
<%= example 'Error indicates what the problem is and, possibly, how to fix it' %>
<div class="errors">
  <figure>
    <div>
      <ol class="fa-ul error-list">
        <li id="error_email"><%= svg_icon 'error' %> <a href="javascript:return false">The username 'superbear' is already in use.</a></li>
        <li id="error_password"><%= svg_icon 'error' %> <a href="javascript:return false">The password needs to include at least one number.</a></li>
      </ol>
    </div>
  </figure>
</div>

<%= example :end %>
{:/}

{::nomarkdown}
<%= more_information %>
{:/}

* **WCAG**
  * [Labels or Instructions 3.3.2](/WAI/WCAG20/quickref/#minimize-error-cues) ([Understanding 3.3.2](/TR/UNDERSTANDING-WCAG20/minimize-error-cues.html))
* **User Story**
  * [Describes simple instructions help someone with learning difficulties](/WAI/intro/people-use-web/stories#supermarketassistant)

{::nomarkdown}
<%= more_information :end %>
{:/}

{::nomarkdown}
<%= tip :end %>
<%= tip %>
{:/}

{:.attach_permalink}
## Keep content clear and concise

Use simple language and formatting, as appropriate for the context.

* Write in short, clear sentences and paragraphs.
* Avoid using unnecessarily complex words and phrases. Consider providing a glossary for terms readers may not know.
* Expand acronyms on first use. For example, Web Content Accessibility Guidelines (WCAG).
* Consider providing a glossary for terms readers may not know.
* Use list formatting as appropriate.
* Consider using images, illustrations, video, audio, and symbols to help clarify meaning.

{::nomarkdown}
<%= example 'Making content readable and understandable' %>

<div class="two-column">
  <figure>
    <figcaption><%= svg_icon 'cross' %> Unnecessarily complex</figcaption>
    <div>
      <p class="fail">CPP: In the event of a vehicular collision, a company assigned representative will seek to ascertain the extent and cause of damages to property belonging to all parties involved. Once our representative obtains information that allows us to understand the causality, we may or may not assign appropriate monetary compensation. The resulting decision may occasion one of the following options: the claim is not approved and is assigned a rejected status, the status of the claim is ambiguous and will require additional information before further processing can occur, the claim is partially approved and reduced payment is assigned and issued, or claim is fully approved and total claim payment is assigned and issued.</p>
    </div>
  </figure>
  <figure>
    <figcaption><%= svg_icon 'tick' %> Easier to understand</figcaption>
    <div>
      <p class="pass">Claims Processing Procedure (CPP): If you have a car accident, our agent will investigate. Findings will determine any claim payment. This could result in:</p>
      <ul>
        <li>Approved claim - full payment</li>
        <li>Partially approved claim - reduced payment</li>
        <li>Undetermined claim - more information needed</li>
        <li>Rejected claim - no payment</li>
      </ul>
      <p><img src="images/clear_text_diagram.png" alt=""></p>
    </div>
  </figure>
</div>

<%= example :end %>
{:/}

{::nomarkdown}
<%= more_information %>
{:/}

* **WCAG**
  * [Reading Level 3.1.5](/WAI/WCAG20/quickref/#meaning-supplements) ([Understanding 3.1.5](/TR/UNDERSTANDING-WCAG20/meaning-supplements.html))
  * [Unusual Words 3.1.3](/WAI/WCAG20/quickref/#meaning-idioms) ([Understanding 3.1.3](/TR/UNDERSTANDING-WCAG20/meaning-idioms.html))
  * [Abbreviations 3.1.4](/WAI/WCAG20/quickref/#meaning-located) ([Understanding 3.1.4](/TR/UNDERSTANDING-WCAG20/meaning-located.html))
* **User Story**
  * [User with reading disabilities benefits from easy to read text](/WAI/intro/people-use-web/stories#classroomstudent)

{::nomarkdown}
<%= more_information :end %>
{:/}

{::nomarkdown}
<%= tip :end %>
<%= tip %>
{:/}

{:.attach_permalink}
## Learn more about accessibility

These tips are a few of the things you need to consider for web accessibility. The following resources help you learn why accessibility is important, and about guidelines for making the web more accessible to people with disabilities.

* [Accessibility Introduction](/standards/webdesign/accessibility) &mdash; Introduces accessibility and provides links to many helpful resources
* [Accessibility Principles](/WAI/intro/people-use-web/principles) &mdash; An introduction to the <abbr>WCAG</abbr> requirements
* [How people with disabilities use the web](/WAI/intro/people-use-web) &mdash; Real-life examples showing the importance of accessibility for people with disabilities
* [<abbr>WCAG</abbr> Quick Reference](/WAI/WCAG20/quickref/) &mdash; customizable reference of all <abbr>WCAG</abbr> 2.0 requirements and techniques

{::nomarkdown}
<%= tip :end %>
{:/}