---
title: "Workshop Outline"
order: 3
date: 2017-05-15
---

<style>
details {
  padding-left: 2rem;
}
summary {
  display: block;
  margin-left: -2rem;
}

summary > * {
  display: inline;
}

summary::-webkit-details-marker {
  display: none;
}

summary > *:first-child::before {
  content: '+';
  margin-right: 0.5rem;
  margin-bottom: .25rem;
  display: inline-block;
  border-radius: 5px;
  width: 1.5rem;
  height: 1.5rem;
  background: #036;
  color: #fff;
  text-align: center;
  font-weight: bold;
}

details[open] > summary > *:first-child::before {
  content: '–';
}
</style>

{% include excol.html type="start" id="overview" open="true" %}
<h2>Overview</h2>
{% include excol.html type="middle" %}
<p><strong>Scenario:</strong> A three-day hands-on workshop to inform
  participants about web accessibility and to teach developers how to
  implement accessibility requirements.</p>
<p><strong>Target audience:</strong></p>
<ul>
  <li>Day 1: Managers and decision makers</li>
  <li>Days 1 and 2: Web content authors and visual designers</li>
  <li>All 3 days: Website developers and application programmers</li>
</ul>
<p><strong>Other key audiences</strong> include staff from public
  relations, marketing, communications, human resources, procurement,
  legal and policy advisors, staff representatives, and many more involved
  with the Web.</p>
<h3>Overall learning objectives:</h3>
<p>After the training, managers and decision makers should be able to:</p>
<ul>
  <li>Explain the importance of web accessibility for people with disabilities and older people</li>
  <li>List common barriers experienced by people with disabilities and older people</li>
  <li>Describe the business case that influences an organization's web accessibility efforts</li>
</ul>
<p>In addition, authors and non-technical developers should also be able to:</p>
<ul>
  <li>Explain the role of the WAI guidelines and other components in achieving an accessible Web</li>
  <li>Apply basic principles of accessibility during the preparation of web content</li>
  <li>Carry out preliminary checks of websites for accessibility and communicate the results</li>
</ul>
<p>Website developers and application programmers should additionally be able to:</p>
<ul>
  <li>Utilize WCAG 2.0 and its supporting documents as a guide to implementing accessible websites</li>
  <li>Apply WCAG 2.0 techniques to develop accessible layouts, forms, tables, and other content</li>
  <li>Evaluate websites for conformance with WCAG 2.0 and communicate the results</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="schedule" %}
<h2>Schedule</h2>
{% include excol.html type="middle" %}
<h3>Day 1 schedule</h3>
<ol style="list-style:none">
  <li><strong>09:00 - 10:30 <a href="#d1s1">Session 1 - Introduction to web accessibility</a></strong></li>
  <li>10:30 - 11:00 Break</li>
  <li><strong>11:00 - 12:30 <a href="#d1s2">Session 2 - Components of web accessibility</a></strong></li>
  <li>12:30 - 13:30 Lunch</li>
  <li><strong>13:30 - 15:00 <a href="#d1s3">Session 3 - Managing web accessibility</a></strong></li>
  <li>15:00 - 15:30 Break</li>
  <li><strong>15:30 - 17:00 <a href="#d1s4">Session 4 - Accessible content authoring</a></strong></li>
</ol>
<h3>Day 2 schedule</h3>
<ol style="list-style:none">
  <li><strong>09:00 - 09:30 <a href="#d2s1">Session 1 - Working with WCAG 2.0</a></strong></li>
  <li><strong>09:30 - 10:30 <a href="#d2s2">Session 2 - Accessible visual design and CSS</a></strong></li>
  <li>10:30 - 11:00 Break</li>
  <li><strong>11:00 - 11:45 <a href="#d2s3">Session 3 - Accessible images</a></strong></li>
  <li><strong>11:45 - 12:30 <a href="#d2s4">Session 4 - Accessible multimedia</a></strong></li>
  <li>12:30 - 13:30 Lunch</li>
  <li><strong>13:30 - 15:00 <a href="#d2s5">Session 5 - Accessible page structure</a></strong></li>
  <li>15:00 - 15:30 Break</li>
  <li><strong>15:30 - 17:00 <a href="#d2s6">Session 6 - Accessible navigation and orientation</a></strong></li>
</ol>
<h3>Day 3 schedule</h3>
<ol style="list-style:none">
  <li><strong>09:30 - 11:00 <a href="#d3s1">Session 1 - Accessible tables</a></strong></li>
  <li>11:00 - 11:30 Break</li>
  <li><strong>11:30 - 12:30 <a href="#d3s2">Session 2 - Accessible forms</a></strong></li>
  <li>12:30 - 13:30 Lunch</li>
  <li><strong>13:30 - 15:00 <a href="#d3s3">Session 3 - Basics of accessible scripting and WAI-ARIA</a></strong></li>
  <li>15:00 - 15:30 Break</li>
  <li><strong>15:30 - 16:00 <a href="#d3s4">Session 4 - Principles of conformance evaluation</a></strong></li>
  <li><strong>16:00 - 17:00 <a href="#d3s5">Session 5 - Workshop review and lessons learned</a></strong></li>
</ol>
{% include excol.html type="end" %}
{% include excol.html type="start" id="sessions" %}
<h2>Session Descriptions</h2>
{% include excol.html type="middle" %}
<h3><a name="d1s1" id="d1s1">Day 1 - Session 1: Introduction to web accessibility</a></h3>
<p><strong>Target audience:</strong> Managers and decision makers, web
  content authors and visual designers, website developers and
  application programmers, and other key audiences</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Explain the importance of web accessibility for people with disabilities and older people</li>
  <li>List common barriers experienced by people with disabilities and older people</li>
  <li>Describe the benefits of web accessibility for people with and without disabilities</li>
  <li>Understand that the W3C/WAI Guidelines are the international standard for web accessibility</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Overview of web accessibility, including what web accessibility is and why it's important</li>
  <li>Videos showing people with disabilities using the Web</li>
  <li>Information about the ageing population and ageing-related impairments</li>
  <li>Relevant legislation or other policies applicable to participants' organizations</li>
  <li>Carry-over benefits of universal design for people with and without disabilities</li>
  <li>Business benefits of web accessibility, including some case studies</li>
  <li>Overlapping experiences of people with disabilities and mobile users</li>
  <li>Introduction to WAI guidelines as the international standard for making the Web accessible</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#intro">Introducing Web Accessibility</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#people">How People with Disabilities Use the Web</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#bcase">Business Case for Web Accessibility</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#older">Web Accessibility and Older People</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#policy">Web Accessibility Policy and Legislation</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#mobile">Accessibility and the Mobile Web</a></li>
</ul>
<h3><a name="d1s2" id="d1s2">Day 1 - Session 2: Components of web accessibility</a></h3>
<p><strong>Target audience:</strong> Managers and decision makers, web
  content authors and visual designers, website developers and
  application programmers, and other key audiences</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Explain the components of web accessibility, including authoring tools and user agents</li>
  <li>Explain the role of the W3C/WAI Guidelines in providing a technical standard for accessibility</li>
  <li>Define the basic concepts of WCAG 2.0, its organizing principles and guidelines</li>
  <li>Describe the importance of authoring tools that support the production of accessible content</li>
  <li>Describe the benefits of involving people with disabilities throughout any web development</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Hands-on experiential session showing the use of adaptive strategies and assistive technologies</li>
  <li>Introduction to the components of web accessibility</li>
  <li>Introduction to WCAG 2.0, its four basic design principles, and guidelines</li>
  <li>Benefits of WCAG 2.0</li>
  <li>Importance of accessible authoring tools, including content management systems</li>
  <li>Benefits of involving users in all aspects of web projects from the beginning</li>
</ul>
<h4>Handouts:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/Overview.html#glance">WCAG 2 at a Glance</a></li>
  <li> <a href="http://www.w3.org/WAI/flyer/Overview.html#pwds">Including People with Disabilities in Design Projects</a></li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#components">Components of Web Accessibility</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#involving">Involving Users in Web Projects</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#intro20">Introducing WCAG 2.0</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#people">How People with Disabilities Use the Web</a></li>
</ul>
<h3><a name="d1s3" id="d1s3">Day 1 - Session 3: Managing web accessibility</a></h3>
<p><strong>Target audience:</strong> Managers and decision makers, web
  content authors and visual designers, website developers and
  application programmers, and other key audiences</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Describe the steps needed to develop an implementation plan for web accessibility</li>
  <li>Describe the steps needed to develop organizational policies on web accessibility</li>
  <li>Identify key players in achieving an accessible website</li>
  <li>Describe the principles for selecting appropriate authoring and evaluation tools</li>
  <li>Conduct a preliminary check of websites for accessibility and communicate the results</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Developing a web accessibility implementation plan</li>
  <li>Requirements for an accessibility policy for an organization</li>
  <li>Approaches to improving the accessibility of an organization's existing website</li>
  <li>Identification of key players (people, departments) with the
     organization who might be responsible for developing, managing, and
     maintaining an accessible site</li>
  <li>Considerations in selecting authoring tools and content management systems (CMS's)</li>
  <li>Selecting evaluation tools for checking web accessibility</li>
  <li>Undertaking and documenting a quick check for web accessibility with exercise</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#improve">Improving the Accessibility of Existing Websites</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#policy">Web Accessibility Policy and Legislation</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#authoring">Authoring Tool Accessibility and ATAG</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#check">Quick Check for Web Accessibility</a></li>
</ul>
<h3><a name="d1s4" id="d1s4">Day 1 - Session 4: Accessible content authoring</a></h3>
<p><strong>Target audience:</strong> Managers and decision makers, web
  content authors and visual designers, website developers and
  application programmers, and other key audiences</p>
<p><strong>Note:</strong> This session provides an introduction to the
  preparation of accessible web content. Additional and focused training
  may be required for web content authors.</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Describe accessibility requirements relevant to content authors, including for text, colors, and presentation</li>
  <li>Author accessible web content, including text-alternatives, text, links, and other page elements</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the accessibility requirements for making web
     content readable and understandable, including reading level
     considerations and creating clear links</li>
  <li>Introduction to other important accessibility features for content:
     <ul>
        <li>Describing the purpose of images using alt-text (e.g. non-text content)</li>
        <li>Page organization (e.g. headings, labels, and other relationships)</li>
        <li>Visual presentation of text (e.g. colors, size, spacing, etc)</li>
     </ul>
  </li>
  <li>Hands-on accessible content exercise, for instance one of the following:
     <ul>
        <li>rewriting material to make it more readable and understandable</li>
        <li>organizing/structuring page content</li>
        <li>writing appropriate alt-text for a variety of different images in different contexts</li>
        <li>improving the visual presentation of the page</li>
     </ul>
  </li>
  <li>Additional requirements for preparing accessible content (e.g. abbreviations and acronyms, and jargon and unusual words)</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with  WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#check">Quick Check for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning">Guideline 3.1 Make text content readable and understandable</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning-supplements">3.1.5 Reading Level</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-refs">2.4.4 Link Purpose (In Context)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv-all">1.1.1 Non-text Content</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-headings">2.4.10 Section Headings</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-descriptive">2.4.6 Headings and Labels</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic">1.3.1 Info and Relationships</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-without-color">1.4.1 Use of Color</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast">1.4.3 Contrast (Minimum)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation">1.4.8 Visual Presentation</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning-located">3.1.4 Abbreviations</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning-idioms">3.1.3 Unusual Words</a></li>
</ul>
<h3><a name="d2s1" id="d2s1">Day 2  - Session 1: Working with WCAG 2.0</a></h3>
<p><strong>Target audience:</strong> Web content authors and visual designers, website developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Explain the concepts of WCAG 2.0 and list its supporting documents</li>
  <li>Use WCAG 2.0 documents to support practical implementation and testing</li>
  <li>Explain the improvements and benefits of WCAG 2.0</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the WCAG 2.0 documents</li>
  <li>Demonstration of the &quot;How to Meet WCAG 2.0&quot; customizable quick reference</li>
  <li>Benefits of WCAG 2.0, especially in relation to testability and applicability to different situations</li>
  <li>Applicability of WCAG 2.0 to all web technologies</li>
  <li>Introduction to accessibility support</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#intro20">Introducing WCAG 2.0</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance#uc-accessibility-support-head">Understanding Accessibility Support</a></li>
</ul>
<h3><a name="d2s2" id="d2s2">Day 2  - Session 2: Accessible visual design and CSS</a></h3>
<p><strong>Target audience:</strong> Web content authors and visual designers, website developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Embrace the differences between the Web and print media</li>
  <li>Know the accessibility requirements for visual web page design and how to test for them</li>
  <li>Incorporate accessibility requirements in the visual design and development of web pages</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Overview of the adaptability of the Web, highlighting the differences from print media</li>
  <li>Accessibility aspects of visual design of websites</li>
  <li>Importance of the use of color and contrast in accessible design</li>
  <li>Advisory techniques that enhance a site's readability, including the visual presentation</li>
  <li>Accessibility requirements for resizable text and flexible page layout</li>
  <li>Practical exercise, such as identifying pages  with inaccessible visual design</li>
  <li>Introduction to the issues associated with movement on web pages (e.g. from scrolling text, animations, flashing/flickering)</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation">1.4.8 Visual Presentation</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-without-color">1.4.1 Use of Color</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast">1.4.3 Contrast (Minimum)</a> &amp; <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast7">1.4.6 Contrast (Enhanced)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/meaning#meaning-advisory">Guideline 3.1 Readable</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-scale">1.4.4 Resize Text</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits-pause">2.2.2 Pause, Stop, Hide</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/seizure">2.3.1 Seizures</a></li>
</ul>
<h3><a name="d2s3" id="d2s3">Day 2 - Session 3: Accessible images</a></h3>
<p><strong>Target audience:</strong> Web content authors and visual designers, website developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Know the technical accessibility requirements for images</li>
  <li>Implement and test appropriate text alternatives for a wide range of image-based content</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the many different types of images and different contexts that require consideration for accessibility</li>
  <li>Providing access to data and longer descriptions for diagrams, graphs, photographs, etc</li>
  <li>Use of CSS to include decorative and formatting images</li>
  <li>Introduction to the accessibility issues of images of text</li>
  <li>Practical hands-on  exercise, for instance to improve the accessibility of some image-heavy pages</li>
  <li>Introduction to additional image-related issues such as sensory experiences and use of CAPTCHA</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv-all">1.1.1 Non-text Content</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-text-images">1.4.8 Images of Text (No Exception)</a></li>
</ul>
<p>From <a href="http://www.w3.org/TR/WCAG20-TECHS/">Techniques for WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/2007/WD-WCAG20-TECHS-20071211/C9">C9: Using CSS to include decorative images</a></li>
</ul>
<h3><a name="d2s4" id="d2s4">Day 2 - Session 4: Accessible multimedia</a></h3>
<p><strong>Target audience:</strong> Web content authors and visual designers, website developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Know the accessibility requirements for multimedia </li>
  <li>Implement and test appropriate accessible alternatives for multimedia materials</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the need for accessible synchronized media (audio and video; recorded and real-time)</li>
  <li>Illustration of the accessibility issues with some media players</li>
  <li>Solutions for accessible pre-recorded media, including transcripts, captions, and audio-description</li>
  <li>Practical hands-on exercise, for instance captioning some video with an appropriate tool</li>
  <li>Introduction to the issues and solutions for live audio and live synchronized media (video)</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#browsers">Browser Accessibility and UAAG</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv">Guideline 1.2 Time-based Media</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-captions">1.2.2 Captions (Prerecorded)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-audio-desc">1.2.3 Audio Description or Media Alternative (Prerecorded)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-sign">1.2.6 Sign Language (Prerecorded)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-live-audio-only">1.2.9 Audio-only (Live)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-real-time-captions">1.2.4 Captions (Live)</a></li>
</ul>
<h3><a name="d2s5" id="d2s5">Day 2 - Session 5: Accessible page structure</a></h3>
<p><strong>Target audience:</strong> Web content authors and visual designers, website developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Know the necessity of structural relationships for understanding web pages</li>
  <li>Implement and test semantic structure and links to aid understanding and navigation of web pages</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the importance of page information and structure</li>
  <li>Use of headings for organizing page content, and the use of correct heading levels</li>
  <li>Importance of lists in understanding and navigating web pages</li>
  <li>Additional page navigation techniques such as 'skip links' and providing a table of contents</li>
  <li>Importance of ensuring that content is presented in a meaningful sequence with a sequential navigation order</li>
  <li>Practical hands-on exercise, for instance one of the following:
     <ul>
        <li>Identification of accessibility improvements to page structure</li>
        <li>Coding accessible page navigation, headings, and lists</li>
     </ul>
  </li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic">1.3.1 Info and Relationships</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-descriptive">2.4.6 Headings and Labels</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-sequence">1.3.2 Meaningful Sequence</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-focus-order">2.4.3 Focus Order</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-skip">2.4.1 Bypass Blocks</a></li>
</ul>
<p>From <a href="http://www.w3.org/TR/WCAG20-TECHS/">Techniques for WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/G141">G141: Organizing a page using headings</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H42">H42: Using h1-h6 to identify headings</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H48">H48: Using ol, ul and dl for lists</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/G64">G64: Providing a Table of Contents</a></li>
</ul>
<h3><a name="d2s6" id="d2s6">Day 2 - Session 6: Accessible site navigation and orientation</a></h3>
<p><strong>Target audience:</strong> Web content authors and visual designers, website developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Know the requirements for accessible website navigation and orientation</li>
  <li>Implement and test accessible navigation elements and provide meaningful navigation across a website</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the importance of website navigation, including:
     <ul>
        <li>Provision of multiple ways to locate a web page</li>
        <li>Provision of consistent navigation across a website</li>
        <li>Ensuring that the purpose of links is clear</li>
     </ul>
  </li>
  <li>Provision of information about the user's current location,
     including the importance of page titles that describe the page's topic
     or purpose</li>
  <li>Practical hands-on exercise, for instance one of the following:
     <ul>
        <li>Identifying inaccessible navigation on some sites</li>
        <li>Identifying orientation improvements for some sites</li>
     </ul>
  </li>
  <li>Introduction to some of the known failures for creating links
     and menus such as scripts emulating links and scripted drop-down boxes</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-mult-loc">2.4.5 Multiple Ways</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/consistent-behavior-consistent-locations">3.2.3 Consistent Navigation</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-refs">2.4.4 Link Purpose (In Context)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-location">2.4.8 Location</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-title">2.4.2 Page Titled</a></li>
</ul>
<p>From <a href="http://www.w3.org/TR/WCAG20-TECHS/">Techniques for WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/2008/NOTE-WCAG20-TECHS-20081211/F42">F42:
     Failure of Success Criterion 1.3.1 and 2.1.1 due to using scripting
     events to emulate links in a way that is not programmatically
     determinable</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/">F36:
     Failure of Success Criterion 3.2.2 due to automatically submitting a
     form and presenting new content without prior warning when the last
     field in the form is given a value</a></li>
</ul>
<h3><a name="d3s1" id="d3s1">Day 3 - Session 1: Accessible tables</a></h3>
<p><strong>Target audience:</strong> Web developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Know the requirements for accessible data tables</li>
  <li>Implement and test accessible data tables</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the concept of accessible tables requiring explicit information and relationships to aid understanding</li>
  <li>Introduction of the known failures for presenting tables</li>
  <li>Accessible table markup, including header cells with scope attributes, table titles and summaries</li>
  <li>Advanced table markup for more complex tables, including cell association</li>
  <li>Illustration of table navigation techniques used by assistive technology users</li>
  <li>Practical hands-on exercise, for instance one of the following:
     <ul>
        <li>Coding some simple and complex tables</li>
        <li>Evaluating some tables for accessibility and recommending improvements</li>
     </ul>
  </li>
  <li>Introduction of some advisory techniques for tables such as cell highlighting on hover</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic">1.3.1 Info and Relationships</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-visual-presentation#visual-audio-contrast-visual-presentation-94-head">1.4.8 Visual Presentation</a></li>
</ul>
<p>From <a href="http://www.w3.org/TR/WCAG20-TECHS/">Techniques for WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H51">H51: Using table markup to present tabular information</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H63">H63: Using the scope attribute to associate header cells and data cells in data tables</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H39">H39: Using caption elements to associate data table captions with data tables</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H73">H73: Using the summary attribute of the table element to give an overview of data tables</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H43">H43: Using id and headers attributes to associate data cells with header cells in data tables</a></li>
</ul>
<h3><a name="d3s2" id="d3s2">Day 3 - Session 2: Accessible forms</a></h3>
<p><strong>Target audience:</strong> Web developers and application programmers </p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Know the accessibility requirements for accessible forms</li>
  <li>Implement and test accessibility features of forms</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction of the information and relationship requirements for basic form accessibility</li>
  <li>Introduction of some of the known failures for forms such as automatic submission and issues with phone numbers</li>
  <li>Accessible form features such as labels, instructions, keyboard compatible controls, and indicating required fields</li>
  <li>Advisory techniques such as linear form design and warning users about changes of context</li>
  <li>Practical hands-on exercise, for instance one of the following:
     <ul>
        <li>Coding accessible forms</li>
        <li>Evaluating online forms for accessibility and recommending improvements</li>
     </ul>
  </li>
  <li>Introduction to advanced accessibility approaches for completing
     forms, including error correction suggestions, error prevention,
     context sensitive help, client-side validation, and re-authenticating</li>
  <li>Accessibility implications of error correction and reporting approaches (client-side - server-side)</li>
  <li>Adequate interaction time as an issue for form completion</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic">1.3.1 Info and Relationships</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-cues">3.3.2 Labels or Instructions</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-suggestions">3.3.3 Error Suggestion</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-reversible">3.3.4 Error Prevention (Legal, Financial, Data)</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-context-help">3.3.5 Help</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits-server-timeout">2.2.5 Re-authenticating</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits-required-behaviors">2.2.1 Timing Adjustable</a></li>
</ul>
<p>From <a href="http://www.w3.org/TR/WCAG20-TECHS/">Techniques for WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/">F36:
     Failure of Success Criterion 3.2.2 due to automatically submitting a
     form and presenting new content without prior warning when the last
     field in the form is given a value</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/F82">F82: Failure of Success Criterion 3.3.2 by visually formatting a set of phone number fields but not including a text label</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/H91">H91: Using HTML form controls and links</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/h92">H92: Including a text cue for colored form control labels</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/G13">G13: Describing what will happen before a change to a form control that causes a change of context to occur is made</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/SCR18">SCR18: Providing client-side validation and alert</a></li>
</ul>
<h3><a name="d3s3" id="d3s3">Day 3 - Session 3: Basics of accessible scripting and WAI-ARIA</a> <strong> (Accessible Rich Internet Applications)</strong></h3>
<p><strong>Target audience:</strong> Web developers and application programmers </p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Identify common barriers in scripted content</li>
  <li>Learn to include progressive enhancement techniques in the development process</li>
  <li>Understand the additional accessibility provided by WAI-ARIA for rich internet applications</li>
  <li>Implement and test basic accessibility scripting features</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction to the barriers created by some scripting techniques</li>
  <li>Introduction to the concept of progressive enhancement with scripting</li>
  <li>Introduction to scripting techniques that satisfy WCAG 2.0 success criteria</li>
  <li>Introduction to WAI-ARIA and accessibility barriers in rich internet applications</li>
  <li>WAI-ARIA techniques to improve keyboard usage and setting of focus</li>
  <li>Hands-on analysis of scripting challenges and solutions related to web applications, for example:
     <ul>
        <li>embedded objects such as media players</li>
        <li>device specific events</li>
        <li>generic elements as interface controls</li>
        <li>scripting elements to emulate links</li>
        <li>scripted drop-down boxes</li>
     </ul>
  </li>
  <li>Provision of related resources, including the use of libraries and toolkits with WAI-ARIA support</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#design">Designing Accessible Websites with WCAG 2</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#aria">Accessible Rich Internet Applications</a></li>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/WCAG20-TECHS/">Techniques for WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/client-side-script">Client-side Scripting Techniques for WCAG 2.0</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/F54">F54:
     Failure of Success Criterion 2.1.1 due to using only
     pointing-device-specific event handlers (including gesture) for a
     function</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/F59">F59: Failure of Success Criterion 4.1.2 due to using script to make div or span a user interface control in HTML</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/F42">F42:
     Failure of Success Criterion 1.3.1 and 2.1.1 due to using scripting
     events to emulate links in a way that is not programmatically
     determinable</a></li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/F36">F36:
     Failure of Success Criterion 3.2.2 due to automatically submitting a
     form and presenting new content without prior warning when the last
     field in the form is given a value</a></li>
</ul>
<h3><a name="d3s4" id="d3s4">Day 3 - Session 4: Principles of conformance evaluation</a></h3>
<p><strong>Target audience:</strong> Web developers and application programmers</p>
<h4>Learning Objectives:</h4>
<ul>
  <li>Define the concept of a conformance evaluation for websites</li>
  <li>Understand the importance of involving users in web accessibility evaluation</li>
  <li>Understand the concept of accessibility support and its applicability to the organization's website</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>Introduction of the concept of website conformance testing as a formal extension of the testing done in previous sessions</li>
  <li>Process for conformance evaluation of websites for accessibility</li>
  <li>WCAG 2.0 conformance requirements and conformance claims</li>
  <li>Selection of automated tools and their benefits and drawbacks</li>
  <li>Combining testing with users with formal conformance evaluation methods</li>
  <li>Introduction of the concept of accessibility supported technologies</li>
</ul>
<h4>Related Accessibility Topics:</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/training/topics#conform">Conformance Evaluation for Web Accessibility</a></li>
</ul>
<h4>Relevant WCAG 2.0 Resources:</h4>
<p>From <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a>:</p>
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance">Understanding Conformance</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/conformance#uc-accessibility-support-head">Understanding Accessibility Support</a></li>
</ul>
<h3><a name="d3s5" id="d3s5">Day 3 - Session 5: Workshop review and lessons learned</a></h3>
<p><strong>Target audience:</strong> Web developers and application programmers</p>
<h4>Session Objectives:</h4>
<ul>
  <li>Ensure participants have understood the key messages from the workshop</li>
  <li>Provide an opportunity for questions and answers to outstanding issues</li>
</ul>
<h4>Outline:</h4>
<ul>
  <li>General questions and answers (<acronym>Q&amp;A)</acronym> to elaborate on anything needing clarification</li>
  <li>Summary of the overall requirements for accessible web design and development</li>
  <li>Reiteration of the value of using &quot;How to Meet WCAG 2.0&quot; as a gateway to WCAG 2.0</li>
  <li>Opportunities for follow-up, including the <a href="http://www.w3.org/WAI/IG/">WAI Interest Group</a> (and the associated <a href="http://www.w3.org/WAI/WCAG20/quickref/">WAI-IG email list</a>)</li>
</ul>
<h4>Suggested activity:</h4>
<ul>
  <li>Ask participants to write down something they learned in the
     last two days that they will incorporate in their work immediately,
     something that surprised them, or the most interesting thing they
     learned. Discuss some of the impressions from the participants to share
     lessons learned.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="notes" %}
<h2>Important Notes</h2>
{% include excol.html type="middle" %}
<p>This example workshop is not a complete set of training material.
  Trainers will need to adapt the material to suit their audience. For
  example, for an in-house workshop, trainers should focus on the issues
  most common to the organization's content and development environment,
  and could use the organization's website and authoring tools for
  examples and activities.</p>
<p>This material assumes that trainers are experienced web
  accessibility practitioners and trainers. That is, it does not attempt
  to train trainers.</p>
<p>This outline is for an initial workshop. Follow up workshops might
  be needed. For example, content authors would benefit from specific
  instruction on how to use their content management system (CMS) or other
  authoring tools to provide accessible content.</p>
<h3><strong>Additional notes for presenters for the technical sessions on days 2 and 3:</strong></h3>
<ul class="listspaced">
  <li class="listspaced">Allow time at the end of each session to sum up the requirements and clarify any issues arising from the session.</li>
  <li class="listspaced">Finish days 1 and 2 with a brief summary of the day, and start days 2 and 3 with a brief summary of the previous day. Seek feedback at the end of each day and adjust remaining material as appropriate.</li>
  <li class="listspaced">Clarify that not all WCAG 2.0 success criteria are being presented and discussed in this workshop.</li>
  <li class="listspaced">Describe the intent of accessibility
     requirements, and their relationship to barriers for people with
     disabilities and older people. Also describe the broader benefits for <a href="http://www.w3.org/WAI/mobile/">mobile users</a>, search engine optimization (<acronym>SEO</acronym>), and more.</li>
  <li class="listspaced">Draw illustrative examples from sites and material that are relevant to the participants backgrounds, e.g. government, commerce, etc.</li>
  <li class="listspaced">The <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a> provides accessible and inaccessible web pages, including evaluation
     reports, that can be used as examples. Using the participants' own
     websites or similar websites to theirs (such as websites from competitor
     organizations) helps make the examples more tangible.</li>
  <li class="listspaced">Emphasize the benefits of <a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0</a>, a customizable quick reference to WCAG 2.0 requirements and techniques, including 'best practice' advisory techniques.</li>
  <li class="listspaced">Introduce appropriate evaluation techniques and tools for each issue as it is covered.</li>
  <li class="listspaced">Carry out activities and exercises to reinforce the learning effect.</li>
</ul>
{% include excol.html type="end" %}