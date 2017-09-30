---
title: "Topics for Web Accessibility Presentations and Training"
order: 1
date: 2013-02-21
people:
---

## Introduction
{:#intro.no-display}

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
  line-height: 1;
}

details[open] > summary > *:first-child::before {
  content: '–';
}
</style>

<p>This page provides material for web accessibility topics that you
  can  use as building blocks to create presentations and training
  sessions. These are examples that you can adapt and combine for your
  specific audience and goals.</p>
<h2>List of Topics</h2>
<ul class="toc">
  <li><strong>Introducing Accessibility </strong>
     <ol>
        <li><a href="#introduction">Introducing Web Accessibility</a></li>
        <li><a href="#people">How People with Disabilities Use the Web</a></li>
        <li><a href="#components">Components of Web Accessibility</a> (sample presentation available)</li>
        <li><a href="#promoting">Promoting Web Accessibility</a></li>
     </ol>
  </li>
  <li><strong>Guidelines and Techniques </strong>
     <ol start="5">
        <li><a href="#intro20">Introducing WCAG 2.0</a> (related presentation  available)</li>
        <li><a href="#migrate">Migrating to WCAG 2.0</a></li>
        <li><a href="#design">Designing and Developing Accessible Websites with WCAG 2</a></li>
        <li><a href="#browsers">Browser Accessibility and UAAG</a></li>
        <li><a href="#authoring">Authoring Tool Accessibility and ATAG</a></li>
        <li><a href="#aria">Accessible Rich Internet Applications (WAI-ARIA)</a></li>
     </ol>
  </li>
  <li><strong>Managing Accessibility</strong>
     <ol start="11">
        <li><a href="#bcase">Business Case for Web Accessibility</a></li>
        <li><a href="#improve">Improving the Accessibility of Existing Websites</a></li>
        <li><a href="#involving">Involving Users in Web Projects</a></li>
        <li><a href="#older">Web Accessibility and Older People</a> (sample presentation available)</li>
        <li><a href="#mobile">Accessibility  and the Mobile Web</a></li>
        <li><a href="#policy">Web Accessibility Policy and Legislation</a></li>
     </ol>
  </li>
  <li><strong>Evaluating Accessibility</strong>
     <ol start="17">
        <li><a href="#check">Quick Check for Web Accessibility</a></li>
        <li><a href="#conform">Conformance Evaluation for Web Accessibility</a></li>
     </ol>
  </li>
</ul>
<p><strong><em>See also:</em></strong> <a href="http://www.w3.org/WAI/training/accessible">How to Make Your Presentations Accessible to All</a> for guidance on ensuring that your training is accessible to all of your audience, including participants with disabilities.</p>

{% include excol.html type="start" id="intro" %}
<h2>1. Introducing Web Accessibility</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Communicate the basic principles of web accessibility, why it is important, and who is affected.</p>
<p><strong>Audience:</strong> Anyone with an interest in the web, disability, or related topics.</p>
<h3>Description</h3>
<p>This topic introduces the importance of the Web
  as an essential communication tool and the fact that people with
  disabilities and older people should have equal, barrier-free access.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Access to the Web is an essential requirement for full participation in the information society</li>
  <li>Effect of accessibility barriers on people's access to web based information systems and services</li>
  <li>Meaning and importance of web accessibility for people with disabilities and older people</li>
  <li>WAI guidelines and resources as the international standard for web accessibility</li>
  <li>How to get involved and where to get more information about web accessibility</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/standards/webdesign/accessibility">Accessibility - W3C</a> - introduces the why, what and how of web accessibility</li>
  <li><a href="http://www.w3.org/WAI/intro/accessibility">Introduction to Web Accessibility</a> - a longer introduction to the what, why and how of web accessibility</li>
  <li><a href="http://www.w3.org/Talks/WAI-Intro/"><strong>Overview of WAI presentation</strong></a>, in particular:
     <ul>
        <li><a href="http://www.w3.org/Talks/WAI-Intro/slide3-0">What is web accessibility</a></li>
        <li><a href="http://www.w3.org/Talks/WAI-Intro/slide4-0">Why web accessibility is an issue</a></li>
        <li><a href="http://www.w3.org/Talks/WAI-Intro/slide5-0">Impact of Web on people with disabilities</a></li>
        <li><a href="http://www.w3.org/Talks/WAI-Intro/slide7-0">Demographics of the disability marketplace</a></li>
     </ul>
  </li>
  <li><a href="http://www.w3.org/WAI/presentations/ageing/"><strong>Web Accessibility for Older Users presentation</strong></a>, in particular:
     <ul>
        <li><a href="http://www.w3.org/WAI/presentations/ageing/waiage#webuse">Use of the Web section</a></li>
        <li><a href="http://www.w3.org/WAI/presentations/ageing/waiage#demog">Changing population demographics section</a></li>
     </ul>
  </li>
  <li><a href="http://www.w3.org/WAI/intro/people-use-web">How People with Disabilities use the Web</a> - provides examples of people with different disabilities using Web sites, applications, browsers, and authoring tools</li>
  <li><a href="http://www.w3.org/WAI/intro/components.php#guidelines">WAI Guidelines for addressing different components</a> of the web accessibility equation</li>
  <li><a href="http://www.w3.org/WAI/participation">Participating in WAI</a></li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#glance">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.0</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Discussion:</strong> Discuss scenarios from <a href="http://www.w3.org/WAI/intro/people-use-web">How People with Disabilities use the Web</a> to illustrate the importance of web accessibility.</li>
  <li><strong>Demonstration:</strong> Show some <a href="http://www.uiaccess.com/accessucd/resources_videos.html">videos of people with disabilities using the Web <img src="/Icons/offsite.png" alt="- external page" /></a>.</li>
  <li><strong>Demonstration:</strong> Show examples of accessible and
     inaccessible websites, and the effect they have on access with assistive
     technologies. Consider using the <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a>.</li>
  <li><strong>Activity:</strong> Ask attendees what kind of
     accessibility accommodations in buildings, transport, or every day life
     are they aware of? When they answer ramps, curb cuts, captions,
     automatic doors, elevators, etc., ask if anyone uses those
     accommodations other than people with disabilities. Discuss how
     accessibility features benefit everyone. Draw the analogy with web
     accessibility.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="people" %}
<h2>2. How People with Disabilities Use the Web</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Provide an understanding of how people with
  disabilities and older people access the Web, and the type of barriers
  they can encounter. Highlight the importance of web accessibility in an
  information society.</p>
<p><strong>Audience:</strong> Anyone with an interest in the web, disability, ageing, or related topics.</p>
<h3>Description</h3>
<p>This topic explores accessibility barriers for
  people with disabilities and older people using the Web. It also gives
  an introduction to the principles of accessible web design, and an
  overview on assistive technologies and adaptive browsing strategies.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Broad diversity of people, abilities, skills, and preferences</li>
  <li>Impact of web accessibility on people with disabilities, including people with age-related impairments</li>
  <li>Accessibility needs and examples of common barriers that affect millions of people</li>
  <li>Assistive technologies and adaptive strategies used by people with disabilities</li>
  <li>Accessibility requirements and technical standards for web accessibility</li>
  <li>Where to get more information</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/intro/people-use-web">How People with Disabilities use the Web</a> - provides examples of people with different disabilities using websites, web applications, browsers, and authoring tools</li>
</ul>
<h4>Additional resources</h4>
<ul>
  <li><a href="http://www.w3.org/Talks/WAI-Intro/">Overview of WAI presentation</a>, in particular <a href="http://www.w3.org/Talks/WAI-Intro/slide6-0">Web accessibility is a Cross-Disability Issue</a></li>
  <li><a href="http://www.w3.org/WAI/presentations/ageing/">Web Accessibility for Older Users presentation</a>, in particular material from <a href="http://www.w3.org/WAI/presentations/ageing/waiage#abilities">Changing Abilities of Older People</a></li>
  <li><a href="http://www.w3.org/WAI/intro/components.php">Essential Components of Web Accessibility</a> - shows how Web accessibility depends on several components  working together and the role of the WAI guidelines</li>
  <li><a href="http://www.w3.org/WAI/users/browsing">Better Web Browsing: Tips for Configuring Your Computer</a> - references to resources to help people customize their web browser and computer setup</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#resources">WAI Web Accessibility Resources</a> - includes information about Essential Components of Web Accessibility with a diagram</li>
  <li><a href="http://www.w3.org/WAI/flyer/#glance">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines (WCAG) 2.0</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Demonstration:</strong> Show examples of using assistive technologies and adaptive strategies, and/or show <a href="http://www.uiaccess.com/accessucd/resources_videos.html">videos of people with disabilities using the Web <img src="/Icons/offsite.png" alt="- external page" /></a>.</li>
  <li><strong>Activity/Demonstration:</strong> Explore the usage of
     accessible versus inaccessible websites, while using the keyboard only
     to navigate; wearing mittens or gardening gloves; very fast mouse
     pointer; onscreen keyboard (no physical keyboard); blurred glasses; very
     high browser zoom; no sound; etc. Discuss the difficulties with
     inaccessible websites and the solutions used in accessible websites.</li>
  <li><strong>Tip:</strong> Give accessibility a human face, for
     example by relating it to older relatives, such as grandparents, who may
     be encountering accessibility barriers as they go online.</li>
  <li><strong>Tip:</strong> Suggest participants repeat the activity/demonstration on other websites after the session.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="components" %}
<h2>3. Components of Web Accessibility</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Introduction to the WAI standards and guidelines for web accessibility.</p>
<p><strong>Audience:</strong> Web developers and others responsible for creating accessible online content and applications, accessibility advocates, <abbr title="information and communications technology">ICT</abbr> departments</p>
<h3>Description</h3>
<p class="listwithp listintro">This topic explores the components of web accessibility, in particular the WAI Guidelines for:</p>
<ul class="listwithp listintro">
  <li>user agents (browsers and media players)</li>
  <li>authoring tools (tools used by content authors and web developers)</li>
  <li>web content</li>
</ul>
<p>It covers how these components work together to improve web accessibility.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Three related sets of WAI guidelines working together:
     <ul>
        <li>User Agent Accessibility Guidelines (UAAG)</li>
        <li>Authoring Tool Accessibility Guidelines (ATAG)</li>
        <li>Web Content Accessibility Guidelines (WCAG)</li>
     </ul>
  </li>
  <li>Understand the role of each guideline in creating and maintaining an accessible Web</li>
  <li>Role of underlying technologies (HTML, XML, CSS, SVG, SMIL, etc.) to enable accessibility</li>
  <li>WAI-ARIA for dynamic web pages and applications</li>
  <li>Understand how various guidelines and specifications interact to deliver accessibility</li>
  <li>Where to get more information</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Sample presentation</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/presentations/components/"><strong>Components of Web Accessibility presentation</strong></a> - can be used as the basis for this topic</li>
</ul>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/intro/components.php">Essential Components of Web Accessibility</a> - shows how Web accessibility depends on several components working together</li>
  <li><a href="http://www.w3.org/WAI/intro/people-use-web">How People with Disabilities use the Web</a> - provides examples of people with different disabilities using websites, web applications, browsers, and authoring tools</li>
  <li><a href="http://www.w3.org/WAI/intro/wcag">Web Content Accessibility Guidelines (WCAG) Overview</a> - an overview of WCAG and the related documentation</li>
  <li><a href="{% link pages/standards/atag.md %}">Authoring Tool Accessibility Guidelines (ATAG) Overview</a> - an overview of ATAG and the related documentation</li>
  <li><a href="{% link pages/standards/uaag.md %}">User Agent Accessibility Guidelines (UAAG) Overview</a> - an overview of UAAG and the related documentation</li>
  <li><a href="http://www.w3.org/WAI/intro/aria">WAI-ARIA Overview</a> - describes the problems that WAI-ARIA addresses, and introduces the WAI-ARIA suite of technical documents</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#resources">WAI Web Accessibility Resources</a> - includes information about Essential Components of Web Accessibility with a diagram</li>
  <li><a href="http://www.w3.org/WAI/flyer/#glance">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.0</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Question:</strong> Ask audience if they have ever used <a href="http://en.wikipedia.org/wiki/Velcro" class="termref">velcro</a>,
     and think about how it works. Each side of the velcro must do a job,
     one can't work without the other. Draw an analogy to assistive
     technologies, adaptive strategies, and accessible web design.</li>
  <li><strong>Tip:</strong> Remind participants that even if they are
     not browser or authoring tool developers, they can help improve such
     tools by requesting accessibility features, especially during
     procurement.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="promoting" %}
<h2>4. Promoting Web Accessibility</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Encourage web accessibility advocates and support their efforts to promote inclusive design practices.</p>
<p><strong>Audience:</strong> Accessibility advocates</p>
<h3>Description</h3>
<p>This topic provides support for speakers who are
  promoting and furthering web accessibility within groups of all sizes
  and in any situation, from formal talks to personal conversations.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Web accessibility is an ongoing challenge that needs a high level of awareness</li>
  <li>WAI resources to help you reach your audience</li>
  <li>Opportunities to promote web accessibility</li>
  <li>Participation opportunities in WAI and other W3C projects</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/users/inaccessible">Contacting Organizations about Inaccessible Websites</a> - steps and tips to help  report websites with accessibility problems</li>
  <li><a href="http://www.w3.org/WAI/Policy/harmon">Why Standards Harmonization is Essential to Web Accessibility</a> - explains the key role that harmonization of standards plays in increasing the accessibility of the Web</li>
  <li><a href="http://www.w3.org/WAI/intro/w3c-process">How WAI Develops Accessibility Guidelines through the W3C Process: Milestones and Opportunities to Contribute</a> - introduces how WAI works through a  process  designed to encourage community input and consensus development</li>
  <li><a href="http://www.w3.org/WAI/participation">Participating in WAI</a> - describes the different participation opportunities in WAI</li>
  <li><a href="http://www.w3.org/WAI/groups">WAI Working Groups and Interest Groups</a> - listing of all the WAI working groups and interest groups with links to their individual pages</li>
  <li><a href="http://www.w3.org/WAI/WCAG2-Conformance">WCAG logos</a> and <a href="http://www.w3.org/WAI/ATAG10-Conformance">ATAG logos</a> - how and when to use the conformance logos</li>
</ul>
<h4>Additional resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/translation">Translating WAI Documents</a> - pointer to translation policy; list of existing translations; priority list of documents for translation</li>
  <li><a href="{% link _planning-and-managing/implement.md %}">Developing Organizational Policies on Web Accessibility</a> - addresses considerations that can arise when developing  organizational policies on Web accessibility</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#resources">WAI Web Accessibility Resources</a> - includes information about Essential Components of Web Accessibility with a diagram</li>
  <li><a href="http://www.w3.org/WAI/flyer/#glance">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.0</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="intro20" %}
<h2>5. Introducing WCAG 2.0</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Provide basic familiarity with WCAG 2.0 and its benefits.</p>
<p><strong>Audience:</strong> Anyone requiring an introduction to WCAG 2.0 and familiarization with the WCAG 2.0 documents.</p>
<h3>Description</h3>
<p>This topic presents the use of WCAG 2.0 when
  developing websites (especially techniques to use and techniques to
  avoid) that will improve accessibility for people with disabilities and
  older people.</p>
<h3>What this topic covers</h3>
<ul>
  <li>The four basic principles (Perceivable, Operable, Understandable, Robust) under which WCAG 2.0 is organized</li>
  <li>Relationship of the organizing principles to the supporting Guidelines, Success Criteria and associated techniques</li>
  <li>Structure of WCAG 2.0 success criteria and associated techniques (Sufficient, Advisory, Failure)</li>
  <li>Benefits of WCAG 2.0 in relation to  internationalization, interoperability, adaptability to emerging technologies, etc.</li>
  <li>Tools and documents provided to support practical implementation and testing</li>
  <li>How to locate supporting resources through the &quot;How to Meet WCAG 2.0&quot; gateway</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Sample presentation</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/presentations/WCAG20_benefits/"><strong>Benefits of WCAG 2 presentation</strong></a> - a related presentation to draw from</li>
</ul>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/intro/wcag">Web Content Accessibility Guidelines (WCAG) Overview</a> - an overview of WCAG and the related documentation</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/intro#introduction-fourprincs-head">Understanding the Four Principles of Accessibility</a> (from understanding WCAG 2.0)</li>
  <li><a href="http://www.w3.org/WAI/intro/wcag20">The WCAG 2.0 Documents</a> - describes the different WCAG 2.0 technical documents, to help  know where to go for different types of information</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0</a> - a customizable quick reference to WCAG 2.0 requirements and techniques</li>
</ul>
<h4>Additional resources</h4>
<ul>
  <li><a href="http://www.w3.org/TR/WCAG20/">Web Content Accessibility Guidelines (WCAG) 2.0</a> - formal technical specification (W3C Technical Report)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/">Understanding WCAG 2.0</a> - a guide to understanding and implementing Web Content Accessibility Guidelines 2.0</li>
  <li><a href="http://www.w3.org/TR/WCAG20-TECHS/">Techniques for WCAG 2.0</a> - techniques and failures for Web Content Accessibility Guidelines 2.0</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#glance">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.0</li>
  <li><a href="http://www.w3.org/WAI/flyer/#resources">WAI Web Accessibility Resources</a> - includes information about Essential Components of Web Accessibility with a diagram.</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Demonstration:</strong> Show how to effectively access WCAG 2.0 Guidelines, Success Criteria and associated techniques using <a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0</a>.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="migrate" %}
<h2>6. Migrating to WCAG 2</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Help people wanting to transition to WCAG 2.0.</p>
<p><strong>Audience:</strong> Web developers, policy makers, and accessibility advocates</p>
<h3>Description</h3>
<p>This topic provides support for those who have
  previously incorporated older accessibility standards and are interested
  in WCAG 2. Guidance to help prioritize, analyze, and document technical
  and organizational requirements.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Acknowledgement that the basic goals of web accessibility have not changed</li>
  <li>Advantages of WCAG 2.0 as a common target for accessibility</li>
  <li>Identification of priority areas for revision based on impact and effort</li>
  <li>The need to analyze and relate those priorities to WCAG 2.0 Principles, Guidelines and Success Criteria</li>
  <li>Methods to document the process and update organizational policies and supporting materials</li>
  <li>Where to get more information, including WCAG 2.0 translations</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Sample presentation</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/presentations/WCAG20_benefits/"><strong>Benefits of WCAG 2 presentation</strong></a> - a related presentation to draw from</li>
</ul>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/intro/wcag">Web Content Accessibility Guidelines (WCAG) Overview</a> - an overview of WCAG and the related documentation</li>
  <li><a href="http://www.w3.org/WAI/intro/wcag20">The WCAG 2.0 Documents</a> - describes the different WCAG 2.0 technical documents, to help  know where to go for different types of information</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/from10/websites">How to Update Your Web Site from WCAG 1.0 to WCAG 2.0</a> - detailed guidance for designers, developers, and  project managers</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/from10/diff">How WCAG 2.0 Differs from WCAG 1.0</a> - describes the differences in structure and the different support resources</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/from10/comparison/">Comparison of WCAG 1.0 Checkpoints to WCAG 2.0</a> - lists the new requirements in WCAG 2.0, and shows how each  WCAG 1.0 checkpoint relates to WCAG 2.0</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/translations">WCAG 2.0 Translations</a> - a list of complete and in-progress translations</li>
</ul>
<h4>Additional resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/impl/improving">Improving the  Accessibility of Your Web Site</a> - approaches to make the process  of improving accessibility more efficient and effective</li>
  <li><a href="http://www.w3.org/WAI/impl/">Implementation Plan for Web  Accessibility</a> - considerations for the planning process for implementing web accessibility</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#glance">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.0</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Tip:</strong> Explain to participants that communicating migration plans in accessibility statements helps manage expectations.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="design" %}
<h2>7. Designing and Developing Accessible Websites with WCAG 2</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Teach web developers how to create accessible web content and applications.</p>
<p><strong>Audience:</strong> Web designers and developers</p>
<h3>Description</h3>
<p>This topic presents the use of WCAG 2.0  when
  developing websites (especially techniques to use, and techniques to
  avoid) that will improve accessibility for people with disabilities and
  older people.</p>
<p><strong>Note:</strong> This topic could be presented as an introduction (such as part of a <a href="http://www.w3.org/WAI/training/presentation-outlines#design">lecture to web design students</a>) or as a <a href="workshop-outlines">multi-day workshop for developers</a>. See also the related <a href="#authoring">Topic 9: Accessibility of Authoring Tools</a>.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Applicability of WCAG 2.0 Success Criteria to all web technologies, including dynamic content, multimedia, and other formats</li>
  <li>Application of techniques to meet WCAG 2.0 Success Criteria</li>
  <li>Distinguishing between the different categories of techniques (sufficient, advisory, and failure)</li>
  <li>Using advisory techniques to optimize accessibility beyond the minimum requirements</li>
  <li>Using How to Meet WCAG 2.0 to effectively access WCAG 2.0 Guidelines, Success Criteria and associated techniques</li>
  <li>Role of WAI-ARIA for dynamic applications using JavaScript, AJAX, and other technologies</li>
  <li>Where to get more information</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/intro/wcag">Web Content Accessibility Guidelines (WCAG) Overview</a> - an overview of WCAG and the related documentation</li>
  <li><a href="http://www.w3.org/WAI/intro/wcag20">The WCAG 2.0 Documents</a> - describes the different WCAG 2.0 technical documents, to help  know where to go for different types of information</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0</a> - a customizable quick reference to WCAG 2.0 requirements and techniques</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/quickref/Overview.php?introopt=Y#conformance-reqs">WCAG 2.0 Conformance</a> - lists the WCAG 2.0 conformance levels and requirements</li>
  <li><a href="http://www.w3.org/WAI/intro/aria">WAI-ARIA Overview</a> - describes the problems that WAI-ARIA addresses, and introduces the WAI-ARIA suite of technical document</li>
  <li><a href="http://www.w3.org/WAI/presentations/WCAG20_benefits/">Benefits of WCAG 2 presentation</a> - a complete presentation to draw from</li>
</ul>
<h4>Additional resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/impl/improving">Improving the  Accessibility of Your Web Site</a> - approaches to make the process  of improving accessibility more efficient and effective</li>
  <li><a href="http://www.w3.org/WAI/impl/">Implementation Plan for Web  Accessibility</a> - considerations for the planning process for implementing web accessibility</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/WCAG20/glance/">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.0</li>
  <li><a href="http://www.w3.org/WAI/flyer/#pwds">Including People with Disabilities in Design Studies</a></li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Demonstration:</strong> Show how to effectively access WCAG 2.0 Guidelines, Success Criteria and associated techniques using <a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0</a>.</li>
  <li><strong>Activity/Demonstration:</strong> Explore the failures and repairs in the <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a>.
     Consider carrying out evaluations on the inaccessible pages of the Demo
     and comparing with the reports provided, or carrying out repairs and
     comparing with the accessible pages of the Demo.</li>
  <li><strong>Tip:</strong> Show examples of accessible websites with
     advanced features, such as multimedia or scripting, to illustrate how
     accessible web design can be applied to a wide range of websites.</li>
  <li><strong>Tip:</strong> Suggest participants repeat the activity/demonstration on other websites after the session.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="browsers" %}
<h2>8. Browser Accessibility and UAAG</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Help people understand the importance of browsers and media players in enabling web accessibility.</p>
<p><strong>Audience:</strong> Web browser and media player developers, plug-in developers, assistive technology developers, <abbr title="information and communications technology">ICT</abbr> and procurement departments, web developers, accessibility advocates</p>
<h3>Description</h3>
<p>This topic explains the relationship between user
  agents (browsers, media players, and other tools that access content),
  web content, assistive technologies and adaptive strategies. It
  introduces the User Agent Accessibility Guidelines (UAAG), and explains
  their importance for people with disabilities and older people.</p>
<p><strong>Note:</strong> See also the related <a href="#components">Topic 3: Components of Web Accessibility</a>.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Understanding how UAAG relates to other WAI guidelines</li>
  <li>Understanding user agents as one of the key components for web accessibility</li>
  <li>Principles and checkpoints for accessibility of user agents</li>
  <li>How user agents interface with assistive technologies</li>
  <li>Adaptive strategies used by people with disabilities in using user agents</li>
</ul>
<p><strong>Note:</strong> UAAG 2.0 is a mature draft and we expect that it will not change   significantly. We recommend that you use the UAAG 2.0 draft in most   cases,  understanding that it might change. (For more information on the   status of UAAG 2.0, see the <a href="{% link pages/standards/uaag.md %}#version" rel="nofollow">UAAG Versions section</a> of the UAAG Overview.)</p>
<h3>Resources for developing a presentation</h3>
<h4>Sample presentation</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/presentations/components/"><strong>Components of Web Accessibility presentation</strong></a> - a related presentation to draw from</li>
</ul>
<h4>Primary resources</h4>
<ul>
  <li><a href="{% link pages/standards/uaag.md %}">User Agent Accessibility Guidelines (UAAG) Overview</a> - an overview of UAAG and the related documentation</li>
  <li><a href="http://www.w3.org/TR/UAAG20/">[Draft] User Agent Accessibility Guidelines (UAAG) 2.0</a> - working draft for UAAG 2.0</li>
  <li><a href="http://www.w3.org/TR/UAAG10/">User Agent Accessibility Guidelines 1.0</a> - specifies requirements that, if satisfied by user agent developers, will lower barriers to accessibility</li>
  <li><a href="http://www.w3.org/TR/UAAG/uaag10-chktable">Table of Checkpoints for User Agent Accessibility Guidelines 1.0</a> - list may be used to review a tool or set of tools for accessibility</li>
  <li><a href="http://www.w3.org/WAI/users/browsing">Better Web Browsing: Tips for Configuring Your Computer</a> - references to resources to help people customize their web browser  and computer setup</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#resources">WAI Web Accessibility Resources</a> - includes information about Essential Components of Web Accessibility with a diagram.</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Tip:</strong> Emphasize the important role of browser
     accessibility, such as increasing text size or supporting keyboard
     navigation, especially for people who do not use assistive technologies
     such as many older people.</li>
  <li><strong>Activity/Demonstration:</strong> Explore how browsers
     and media players support adjusting text size or colors, navigating
     content using keyboard only, displaying captions, and other strategies
     from <a href="http://www.w3.org/WAI/users/browsing">Better Web Browsing: Tips for Configuring Your Computer</a>. Discuss the importance of user agents as the point of contact between people and the Web.</li>
  <li><strong>Tip:</strong> Suggest participants repeat the activity/demonstration with different user agents and websites after the session.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="authoring" %}
<h2>9. Authoring Tool Accessibility and ATAG</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Help people understand the importance of authoring tools in achieving web accessibility.</p>
<p><strong>Audience:</strong> Authoring tool developers, web developers, <abbr title="information and communications technology">ICT</abbr> and procurement departments, web developers, accessibility advocates</p>
<h3>Description</h3>
<p>This topic explains the relationship between
  authoring tools (editors, content management systems, blogging tools,
  and other tools that produce content) and web content. It introduces the
  Authoring Tool Accessibility Guidelines (ATAG), and explains the
  importance of authoring tools to achieve and maintain accessible
  websites.</p>
<p><strong>Note:</strong> See also the related <a href="#components">Topic 3: Components of Web Accessibility</a>.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Understanding how ATAG relates to other WAI guidelines</li>
  <li>Understanding authoring tools as one of the key components for web accessibility</li>
  <li>Principles and checkpoints for accessibility of authoring tools</li>
  <li>Role of authoring tools to manage the accessibility of web content, including user generated content</li>
  <li>Considerations for selecting and using authoring tools that support accessibility</li>
  <li>Ensuring that authoring tools are themselves accessible to people with disabilities</li>
</ul>
<p><strong>Note:</strong> ATAG 2.0 is a mature draft and we expect that it will not change   significantly. We recommend that you use the ATAG 2.0 draft in most   cases,  understanding that it might change. (For more information on the   status of ATAG 2.0, see the <a href="{% link pages/standards/atag.md %}#version" rel="nofollow">ATAG Versions section</a> of the ATAG Overview.)</p>
<h3>Resources for developing a presentation</h3>
<h4>Sample presentation</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/presentations/components/"><strong>Components of Web Accessibility presentation</strong></a> - a related presentation to draw from</li>
</ul>
<h4>Primary resources</h4>
<ul>
  <li><a href="{% link pages/standards/atag.md %}">Authoring Tool Accessibility Guidelines (ATAG) Overview</a> -  an overview of ATAG and the related documentation</li>
  <!-- Checklist for ATAG 2.0 has been discontinued at at mid-2012 - may return when ATAG 2.0 finalsed -->
  <!--
<li><a href="http://www.w3.org/TR/ATAG/atag10-chktable">Checklist of Checkpoints for Authoring Tool Accessibility Guidelines 1.0</a> - lists of all checkpoints from the Authoring Tool Accessibility Guidelines 1.0</li>
-->
  <li><a href="http://www.w3.org/TR/ATAG20/">[Draft] Authoring Tool Accessibility Guidelines (ATAG) 2.0</a> - working draft for ATAG 2.0</li>
  <li><a href="http://www.w3.org/TR/IMPLEMENTING-ATAG20/">[Draft] Implementing ATAG 2.0</a> - a guide to understanding and implementing Authoring Tool Accessibility Guidelines 2.0</li>
  <li><a href="http://www.w3.org/TR/ATAG10/">Authoring Tool Accessibility Guidelines 1.0</a> - specifies requirements that, if satisfied by authoring tool developers, will lower barriers to accessibility</li>
  <li><a href="http://www.w3.org/WAI/impl/software">Selecting and Using Authoring Tools for Web Accessibility</a> - provides information which may help find improved authoring  tools and/or work around the gaps in existing authoring tools</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#resources">WAI Web Accessibility Resources</a> - includes information about Essential Components of Web Accessibility with a diagram.</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Tip:</strong> Ensure that audience understand the wide range of authoring tools, including <abbr title="what you see is what you get">WYSIWYG</abbr> HTML editor, word processor, text editor, content management systems (<abbr>CMS</abbr>), blogging tools, social media applications, and websites that enable user generated content such as comments and reviews.</li>
  <li><strong>Tip:</strong> Emphasize the importance of training for
     content authors and publishers in using the accessibility features of
     authoring tools to produce accessible web content.</li>
  <li><strong>Activity/Demonstration:</strong> Explore how accessible
     authoring tools are, and how well the produce web content. For instance,
     can the authoring tool be used without a mouse, and does the generated
     content meet accessibility standards? Discuss the significant role of
     authoring tools to achieve and maintain accessibility, and the
     importance that authoring tools are themselves accessible to people with
     disabilities. Remind participants that there are people with
     disabilities among developers too.</li>
  <li><strong>Tip:</strong> Suggest participants repeat the activity/demonstration with other authoring tools after the session.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="aria" %}
<h2>10. Accessible Rich Internet Applications (WAI-ARIA)</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Provide an understanding of the requirements for accessible rich internet applications.</p>
<p><strong>Audience:</strong> Web developers, framework/library developers, assistive technology developers, <abbr title="information and communications technology">ICT</abbr> and procurement departments</p>
<h3>Description</h3>
<p>This topic presents the use of  WAI-ARIA
  resources and other accessibility techniques to develop rich internet
  applications that are accessible to people with disabilities.</p>
<p><strong>Note:</strong> See also the related <a href="#components">Topic 3: Components of Web Accessibility</a>.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Accessibility barriers of rich internet applications</li>
  <li>Basic steps to make rich internet applications accessible</li>
  <li>Relationship between WAI-ARIA and WCAG 2.0</li>
  <li>Technical solutions provided by WAI-ARIA, including:
     <ul>
        <li>WAI-ARIA features that help make Ajax, DHTML, etc accessible</li>
        <li>WAI-ARIA Roles, States, Properties, plus relationships and live regions</li>
        <li>WAI-ARIA keyboard navigation and focus handling</li>
     </ul>
  </li>
  <li>Reminder that HTML 5 does not make WAI ARIA redundant</li>
  <li>Know where to get more information, including JavaScript toolkits and widget libraries</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/intro/aria">WAI-ARIA Overview</a> - describes the problems that WAI-ARIA addresses, and introduces the WAI-ARIA suite of technical documents</li>
  <li><a href="http://www.w3.org/TR/wai-aria-practices/">[Draft] WAI-ARIA Authoring Practices 1.0</a> - a guide to understanding and implementing Accessible Rich Internet Applications</li>
  <li><a href="http://www.w3.org/TR/wai-aria-primer/">[Draft] WAI-ARIA Primer</a> - introduces developers to the accessibility problems that WAI-ARIA is
     intended to solve, the fundamental concepts, and the technical approach
     of WAI-ARIA</li>
  <li><a href="http://www.w3.org/WAI/aria/faq">WAI-ARIA FAQ</a> - some frequently asked questions (FAQ) about WAI-ARIA</li>
  <li>WAI-ARIA and scripting techniques from <a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0</a></li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#resources">WAI Web Accessibility Resources</a> - includes information about Essential Components of Web Accessibility and a link to the WAI-ARIA Overview page.</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Demonstration:</strong> Show examples of making rich
     internet applications accessible using WAI-ARIA. Discuss some of the
     current issues, including incomplete support and other open issues that
     will be resolved when WAI-ARIA is completed.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="bcase" %}
<h2>11. Business Case for Web Accessibility</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Provide an appreciation of the business case for web accessibility.</p>
<p><strong>Audience:</strong> Managers and decision makers, <abbr title="information and communications technology">ICT</abbr> and procurement departments, marketing and legal departments,
  accessibility advocates and others who inform decisions and policies</p>
<h3>Description</h3>
<p>This topic explores the social, technical,
  financial and legal factors that influence an organization's decision
  about web accessibility. It also provides an introduction to the
  development of web accessibility policies.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Benefits for people with and without disabilities, including the increasing ageing population</li>
  <li>Reduction of development and operational costs, including server load, bandwidth, and maintenance</li>
  <li>Improved cross-device browsing, including mobile phones, interactive television, and other delivery channels</li>
  <li>The legal and policy landscape, and liabilities associated with not implementing web accessibility</li>
  <li>Developing policies, including procurement practices, relating to web accessibility</li>
  <li>Case studies, statistic, and figures covering return on investment from web accessibility</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/bcase/">Developing a Web Accessibility Business Case for Your Organization</a> - a suite of pages covering the social, technical, financial, and legal
     and policy factors in the business case for web accessibility</li>
  <li><a href="http://www.w3.org/WAI/bcase/resources">Resources for Developing a Web Accessibility Business Case for Your Organization</a>, including:
     <ul>
        <li><a href="http://www.w3.org/WAI/bcase/resources#cases">Case Studies of Accessibility Improvements</a></li>
        <li><a href="http://www.w3.org/WAI/bcase/resources#statecom">Statistics on People with Disabilities and Web Use</a></li>
        <li><a href="http://www.w3.org/WAI/bcase/resources#seo">Accessibility Improving Search Engine Optimization</a></li>
        <li><a href="http://www.w3.org/WAI/bcase/resources#roi">Example for ROI calculations</a></li>
        <li><a href="http://www.w3.org/WAI/bcase/resources#casesnot">Cautionary Tales of Inaccessibility</a></li>
     </ul>
  </li>
  <li><a href="http://www.w3.org/Talks/WAI-Intro/">Overview of WAI presentation</a>, in particular:
     <ul>
        <li><a href="http://www.w3.org/Talks/WAI-Intro/slide7-0">Web accessibility is a marketplace issue</a></li>
        <li><a href="http://www.w3.org/Talks/WAI-Intro/slide8-0">Accessibility contributes to universal design</a></li>
     </ul>
  </li>
  <li><a href="http://www.w3.org/WAI/presentations/ageing/">Web Accessibility for Older Users presentation</a>, in particular:
     <ul>
        <li><a href="http://www.w3.org/WAI/presentations/ageing/waiage#demog">Changing demographics</a></li>
        <li><a href="http://www.w3.org/WAI/presentations/ageing/waiage#abilities">Changing abilities</a> of older people</li>
     </ul>
  </li>
  <li><a href="http://www.w3.org/WAI/Policy/">Policies Relating to Web Accessibility</a> - links to laws and policies regarding web accessibility around the world</li>
  <li><a href="{% link _planning-and-managing/implement.md %}">Developing Organizational Policies on Web Accessibility</a> - addresses considerations that can arise when developing organizational policies on web accessibility</li>
</ul>
<h4>Additional resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/mobile/overlap.html">Web Content Accessibility and Mobile Web: Making a Web Site Accessible Both for People with Disabilities and for Mobile Devices</a></li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Discussion:</strong> Explore how accessibility solutions
     are becoming increasing available in mainstream products and services.
     For example, text-to-speech (speech synthesis), voice recognition
     (speech input), touch screens, motion sensors, and others in mobile
     devices, car navigation systems, interactive television, game consoles,
     and many more. Discuss how accessibility features benefit everyone,
     including people with and without disabilities.</li>
  <li><strong>Question:</strong> Ask if anyone has experienced problems browsing the Web with a mobile phone. Discuss the <a href="http://www.w3.org/WAI/mobile/experiences">barriers common to mobile device users and people with disabilities</a>, and how accessible web design benefits mobile web users.</li>
  <li><strong>Discussion:</strong> Explore the international, national, or organizational policies that are applicable to the participants. Discuss relevant <a href="http://www.w3.org/WAI/Policy/">policies relating to web accessibility</a>, <a href="http://www.w3.org/WAI/bcase/pol">legal and policy factors</a> in a web accessibility business case, and <a href="http://www.w3.org/WAI/bcase/resources#casesnot">cautionary tales of inaccessibility</a>.</li>
  <li><strong>Discussion:</strong> Explore effective ways to increase
     the adoption of web accessibility within organizations. Discuss the role
     of key players, such as management, procurement, and local advocates.</li>
  <li><strong>Tip:</strong> Refer to your local disability
     organizations for further background on statistics, local policies, and
     examples of good and bad practices.</li>
  <li><strong>Tip:</strong> Give accessibility a human face, for
     example by relating it to older relatives, such as grandparents, who may
     be encountering accessibility barriers as they go online.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="improve" %}
<h2>12. Improving the Accessibility of Existing Websites</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Assistance for organizations taking the initial steps towards implementing web accessibility.</p>
<p><strong>Audience:</strong> Web developers, website owners, decision makers</p>
<h3>Description</h3>
<p>This topic introduces the process of embracing
  web accessibility by improving existing websites. The topic also covers
  how to maintain the website's accessibility over time.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Considerations for setting appropriate web accessibility targets</li>
  <li>Identifying scope and nature of existing accessibility problems</li>
  <li>Creating an implementation plan to achieve the accessibility targets</li>
  <li>Ideas for prioritizing repairs according to different strategies</li>
  <li>Planning for ongoing monitoring and maintenance of accessibility</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/impl/improving">Improving the Accessibility of Your Web Site</a> - approaches to make the process of improving accessibility more efficient and effective</li>
  <li><a href="http://www.w3.org/WAI/impl/">Implementation Plan for Web Accessibility</a> - considerations for the planning process for implementing web accessibility</li>
  <li><a href="{% link pages/test-eval/easychecks.md %}">Preliminary Review of Web Sites for Accessibility</a> - describes a method to quickly identify some accessibility problems on a website</li>
  <li><a href="{% link pages/test-eval/conformance-eval.md %}">Conformance Evaluation of Web Sites for Accessibility</a> - describes a conformance evaluation method that combines automatic, semi-automatic, and manual testing</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Activity/Demonstration:</strong> Explore web accessibility barriers using some of the techniques from <a href="{% link pages/test-eval/easychecks.md %}">Preliminary Review of Web Sites for Accessibility</a>. For example use some techniques for examining pages using <a href="{% link pages/test-eval/easychecks.md %}#guibrowsers">graphical browsers</a> or <a href="{% link pages/test-eval/easychecks.md %}#altbrowsers">specialized browsers</a>.</li>
  <li><strong>Discussion:</strong> Explore the failures and repairs in the <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a>. Discuss how websites can be made accessible with little or no change to their visual design.</li>
  <li><strong>Tip:</strong> Suggest participants repeat the activity/demonstration with other websites, including their own, after the session.</li>
</ul>{% include excol.html type="end" %}
{% include excol.html type="start" id="involving" %}
<h2>13. Involving Users in Web Projects</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Encourage all web projects to involve users from the start.</p>
<p><strong>Audience:</strong> Managers, development teams, quality assurance and usability departments</p>
<h3>Description</h3>
<p>This topic covers benefits involving people with
  disabilities and older people from the beginning of any web development
  project. It demonstrates how users can identify usability aspects of
  accessibility that are not always discovered by conformance evaluation
  alone.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Benefits of involving users with disabilities and older users in development and evaluation of web sites</li>
  <li>How and when to engage users with disabilities and older users</li>
  <li>How testing with users can complement the technical conformance to guidelines</li>
  <li>Involving users is not an add-on at the end but needs to be part of the workflow throughout development process</li>
  <li>Care required when drawing conclusions from observing users</li>
  <li>Where to get more information</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="{% link pages/plan/involving-users.md %}">Involving Users in Web Projects for Better, Easier Accessibility</a> - a start to reaping the benefits of involving people with disabilities and older people throughout your projects</li>
  <li><a href="http://www.w3.org/WAI/eval/users">Involving Users in Evaluating Web Accessibility</a> - describes the benefits of evaluating with real people and identifying
     usability issues that are not discovered by conformance evaluation
     alone</li>
  <li><a href="http://www.w3.org/WAI/intro/people-use-web">How People with Disabilities use the Web</a> - provides examples of people with different disabilities using websites, web applications, browsers, and authoring tools</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#pwds">Including People with Disabilities in Design Studies</a></li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Discussion:</strong> Ask participants to share
     experiences of involving users in their projects. Discuss the benefits
     of involving users throughout design processes. Help participants
     identify opportunities to involve users in their own projects.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="older" %}
<h2>14. Web Accessibility and Older People</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Help people understand the importance of web accessibility for older people.</p>
<p><strong>Audience:</strong> Managers and decision makers, web developers, <abbr title="information and communications technology">ICT</abbr> and procurement departments, marketing and legal departments,
  accessibility advocates and others who inform decisions and policies</p>
<h3>Description</h3>
<p>This topic explores the importance of the
  adoption of WAI guidelines to meet the needs of people with
  ageing-related impairments. It provides some statistics highlighting the
  demographic changes.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Facts about the ageing world population and the increasing numbers of older users online</li>
  <li>Relationship between ageing-related impairments and web accessibility</li>
  <li>Importance of conforming to WAI Guidelines to meet the accessibility needs of older people</li>
  <li>Scope and deliverables of the WAI-AGE Project, and resources for industry and users</li>
  <li>Where to get more information</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Sample presentation</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/presentations/ageing/"><strong>Web Accessibility for Older Users presentation</strong></a> - can be used as the basis for a presentation on this topic</li>
</ul>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/older-users/">Web Accessibility and Older People: Meeting the Needs of Ageing Web Users</a> - introduces the issues facing older people with age-related impairments and associated WAI resources</li>
  <li><a href="http://www.w3.org/WAI/intro/wai-age-literature">Overview of &quot;Web Accessibility for Older Users: A Literature Review&quot;</a> - the Literature Review informs educational activities and enables
     better promotion of accessibility solutions for older Web users</li>
  <li><a href="http://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> - contains an overview of the education and outreach materials  updated or developed within the WAI-AGE Project</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#glance">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Demonstration:</strong> Show some <a href="http://www.uiaccess.com/accessucd/resources_videos.html">videos with older people using the Web <img src="/Icons/offsite.png" alt="- external page" /></a>.</li>
  <li><strong>Activity:</strong> Show some simulations of low vision; get participants to experience some impairments, e.g. using the mouse with other hand and browsing some sites with text enlarged.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="mobile" %}
<h2>15. Accessibility and the Mobile Web</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Provide an understanding of the overlapping issues between web accessibility and mobile web use.</p>
<p><strong>Audience: </strong>Managers and decision makers, web developers, <abbr title="information and communications technology">ICT</abbr> and procurement departments, accessibility advocates and others who inform decisions and policies</p>
<h3>Description</h3>
<p>This topic encourages concurrent development of
  websites for both accessibility and mobile use through understanding the
  common needs of both groups. It covers the overlapping solutions
  available to developers, and the efficacy of meeting the needs of both
  groups simultaneously.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Similar experiences of web users with disabilities and users of mobile devices</li>
  <li>W3C standards and guidelines for web accessibility and mobile web</li>
  <li>Overlapping technical requirements for web accessibility and mobile friendly websites</li>
  <li>Benefits of a combined approach for making accessible and mobile friendly websites</li>
  <li>Meeting one set of requirements if the other set of requirements has already been met</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/mobile/">Mobile Accessibility</a> - summarizes existing and developing resources related to mobile accessibility</li>
  <li><a href="http://www.w3.org/WAI/mobile/overlap.html">Web Content Accessibility and Mobile Web: Making a Web Site Accessible Both for People with Disabilities and for Mobile Devices</a> - introduces the similarities along with benefits of addressing both areas</li>
  <li><a href="http://www.w3.org/WAI/mobile/experiences">Shared Web Experiences: Barriers Common to Mobile Device Users and People with Disabilities</a> - provides examples of barriers that people with disabilities and
     people using mobile devices experience when interacting with Web content</li>
  <li><a href="http://www.w3.org/TR/mwbp-wcag/">Relationship between Mobile Web Best Practices (MWBP) and Web Content Accessibility Guidelines (WCAG)</a> - technical report describing the similarities and differences between the requirements in WCAG and MWBP</li>
  <li><a href="http://www.w3.org/TR/mwbp-wcag/mwbp-wcag20">From MWBP  to WCAG 2.0</a> (and <a href="http://www.w3.org/TR/mwbp-wcag/mwbp-wcag10">From MWBP to WCAG 1.0)</a> - outlines what also needs to be done to meet WCAG for those familiar with MWBP</li>
  <li> <a href="http://www.w3.org/TR/mwbp-wcag/wcag20-mwbp"> From WCAG 2.0  to MWBP</a> (and <a href="http://www.w3.org/TR/mwbp-wcag/wcag10-mwbp">From WCAG 1.0 to MWBP</a>) - outlines what also needs to be done to meet MWBP for those familiar with WCAG</li>
  <li><a href="http://www.w3.org/TR/mobile-bp/">Mobile Web Best Practices 1.0</a> - technical report specifying Best Practices for delivering web content to mobile devices</li>
  <li><a href="http://www.w3.org/TR/mwabp/" title="http://www.w3.org/TR/mwabp/" rel="nofollow">Mobile Web Application Best Practices</a> - technical report to aid the development of rich and dynamic mobile Web applications</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/2007/02/mwbp_flip_cards">Mobile Web Best Practices (MWBP) Flipcards</a> - a summary of the <a href="http://www.w3.org/TR/mobile-bp">Mobile Web Best Practices 1.0</a> document</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/glance/">WCAG 2 at a Glance</a> - a paraphrased summary of Web Content Accessibility Guidelines WCAG 2.0</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Discussion:</strong> Explore some of the <a href="http://www.w3.org/WAI/mobile/experiences">overlapping issues</a> for mobile web users and people with disabilities. For example, explore
     issues with websites that do not provide keyboard support, resizable
     text, sufficient color contrast, and such. Discuss how accessibility
     benefit mobile web users and many more.</li>
  <li><strong>Tip:</strong> Use Independent User Interfaces (<a href="http://www.w3.org/WAI/intro/indieui">IndieUI</a>) to attract advanced web   developers to leading edge accessibility work and how it is relevant to   many others.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="policy" %}
<h2>16. Web Accessibility Policy and Legislation</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Provide an appreciation of local web
  accessibility policy and legislation, the need for  international
  harmonization, and the essential elements of an organizational policy.</p>
<p><strong>Audience:</strong> Managers and decision makers, <abbr title="information and communications technology">ICT</abbr> and procurement departments, marketing and legal departments,
  accessibility advocates and others who inform decisions and policies</p>
<h3>Description</h3>
<p>This topic examines global policy and legal
  requirements that companies and organizations face as they meet local
  nondiscrimination and web accessibility laws. It also explores the move
  towards international standards harmonization, and covers the
  development and implementation of organizational accessibility policies.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Web accessibility laws and policies specific to the local audience</li>
  <li><abbr title="United Nations">UN</abbr> Convention on the Rights of Persons with Disabilities (CRPD) and local implications</li>
  <li>Importance and benefits of international standards harmonization for organizations and for users</li>
  <li>Developing policies, including procurement practices, relating to web accessibility</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/bcase/pol">Legal and Policy Factors in Developing a Web Accessibility Business Case for Your Organization</a> - provides guidance on addressing legal and policy factors in a business case for Web accessibility</li>
  <li><a href="http://www.un.org/disabilities/default.asp?navid=12&amp;pid=150"><abbr title="United Nations">UN</abbr> Convention on the Rights of Persons with Disabilities (CRPD) <img src="/Icons/offsite.png" alt="- external page" /></a> - ratified by many countries and specifically includes accessibility of
     the Internet and other information and communications technology (ICT)</li>
  <li>International <a href="http://www.w3.org/WAI/Policy/">Policies Relating to Web Accessibility</a> - links to laws and policies regarding Web accessibility around the world (not definitive)</li>
  <li><a href="http://www.w3.org/WAI/Policy/harmon">Why Standards Harmonization is Essential to Web Accessibility</a> - explains the key role that harmonization of standards plays in increasing the accessibility of the Web</li>
  <li><a href="{% link _planning-and-managing/implement.md %}">Developing Organizational Policies on Web Accessibility</a> - addresses considerations that can arise when developing organizational policies on Web accessibility</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Discussion:</strong> Explore the impact of fragmented
     technical standards on sharing resources, expertise, know how, and
     tools. Discuss the benefits of internationally harmonized standards for
     web accessibility.</li>
  <li><strong>Discussion:</strong> Explore the international, national, or organizational policies that are applicable to the participants. Discuss relevant <a href="http://www.w3.org/WAI/Policy/">policies relating to web accessibility</a>, <a href="http://www.w3.org/WAI/bcase/pol">legal and policy factors</a> in a web accessibility business case, and <a href="http://www.w3.org/WAI/bcase/resources#casesnot">cautionary tales of inaccessibility</a>.</li>
  <li><strong>Discussion:</strong> Explore effective ways to increase
     the adoption of web accessibility within organizations. Discuss the role
     of key players, such as management, procurement, and local advocates.</li>
  <li><strong>Tip:</strong> Refer to your local disability
     organizations for further background on statistics, local policies, and
     examples of good and bad practices.</li>
  <li><strong>Tip:</strong> Give accessibility a human face, for
     example by relating it to older relatives, such as grandparents, who may
     be encountering accessibility barriers as they go online.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="check" %}
<h2>17. Quick Check for Web Accessibility</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Introduce the concept of a quick website accessibility check, including benefits, techniques, and limitations.</p>
<p><strong>Audience:</strong> Anyone wanting to learn how to do a quick website accessibility check</p>
<h3>Description</h3>
<p>This topic explores some easy evaluation
  techniques that will provide participants with the ability to perform
  initial reviews and present the results. It includes an explanation of
  the difference between a quick preliminary website accessibility check
  and a thorough conformance evaluation review.</p>
<h3>What this topic covers</h3>
<ul>
  <li>What is meant by a quick website accessibility check, and its limitations</li>
  <li>Basic techniques for performing a preliminary review</li>
  <li>Difference between a quick check and a full conformance review</li>
  <li>Evaluation tools and their limitations</li>
  <li>Summarizing the results of the quick check</li>
  <li>Where to get more information</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="{% link pages/test-eval/easychecks.md %}">Preliminary Review of Web Sites for Accessibility</a> - describes a method to quickly identify some accessibility problems on a website</li>
  <li><a href="http://www.w3.org/WAI/eval/selectingtools">Selecting Web Accessibility Evaluation Tools</a> - highlights different features of evaluation tools which can assist during evaluation reviews</li>
  <li><a href="http://www.w3.org/WAI/ER/tools/">Web Accessibility Evaluation Tools</a> - filterable list of Web accessibility evaluation tools</li>
  <li><a href="http://www.w3.org/WAI/eval/users">Involving Users in Evaluating Web Accessibility</a> - describes the benefits of evaluating with real people and identifying
     usability issues that are not discovered by conformance evaluation
     alone</li>
  <li><a href="http://www.w3.org/WAI/users/browsing">Better Web Browsing: Tips for Configuring Your Computer</a> - references to resources to help people customize their web browser  and computer setup</li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Activity/Demonstration:</strong> Explore web accessibility barriers using some of the techniques from <a href="{% link pages/test-eval/easychecks.md %}">Preliminary Review of Web Sites for Accessibility</a>. For example use some techniques for examining pages using <a href="{% link pages/test-eval/easychecks.md %}#guibrowsers">graphical browsers</a> or <a href="{% link pages/test-eval/easychecks.md %}#altbrowsers">specialized browsers</a>.</li>
  <li><strong>Activity/Demonstration:</strong> Use evaluation tools to help identify failures and repairs in the <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a>. Discuss the different types of evaluation tools, their benefits, and their limitations.</li>
  <li><strong>Tip:</strong> Suggest participants repeat the activities/demonstrations with other websites, including their own, after the session.</li>
</ul>
{% include excol.html type="end" %}
{% include excol.html type="start" id="conform" %}
<h2>18. Conformance Evaluation for Web Accessibility</h2>
{% include excol.html type="middle" %}
<p><strong>Goal:</strong> Provide an understanding of how to undertake a conformance review for website accessibility.</p>
<p><strong>Audience:</strong> Web developers and quality assurers, accessibility experts, researchers</p>
<h3>Description</h3>
<p>This topic provides an introduction to the
  approach, tools, and techniques for performing a thorough website
  accessibility conformance evaluation review. It also discussed the
  importance of testing with users.</p>
<p><strong>Note:</strong> This topic assumes familiarity with WCAG 2. See <a href="#intro20">Topic 5: Introducing WCAG 2.0</a>.</p>
<h3>What this topic covers</h3>
<ul>
  <li>Selecting a representative sample of web pages to evaluate, including samples from large or dynamically generated websites</li>
  <li>Selecting and using evaluation tools to support evaluation approaches and processes</li>
  <li>Benefits of involving users to achieve a more complete evaluation</li>
  <li>Reporting findings in a comprehensive and understandable way</li>
  <li>When and where to get more help and more information</li>
</ul>
<h3>Resources for developing a presentation</h3>
<h4>Primary resources</h4>
<ul>
  <li><a href="{% link pages/test-eval/conformance-eval.md %}">Conformance Evaluation of Web Sites for Accessibility</a> - describes a conformance evaluation method that combines automatic, semi-automatic, and manual testing</li>
  <li><a href="http://www.w3.org/WAI/eval/considerations">Evaluation Approaches for Specific Contexts</a> - describes considerations for evaluation of large and complex websites</li>
  <li><a href="http://www.w3.org/WAI/eval/reviewteams">Using Combined Expertise to Evaluate Web Accessibility</a> - describes the diverse kinds of expertise and perspectives required to evaluate the accessibility of web content</li>
  <li><a href="http://www.w3.org/WAI/eval/selectingtools">Selecting Web Accessibility Evaluation Tools</a> - highlights different features of evaluation tools which can assist during evaluation reviews</li>
  <li><a href="http://www.w3.org/WAI/ER/tools/">Web Accessibility Evaluation Tools</a> - filterable list of Web accessibility evaluation tools</li>
  <li><a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0</a> - a customizable quick reference to WCAG 2.0 requirements and techniques</li>
  <li><a href="http://www.w3.org/WAI/eval/users">Involving Users in Evaluating Web Accessibility</a> - describes the benefits from evaluating with real people and
     identifying usability issues that are not discovered by conformance
     evaluation alone</li>
  <li><a href="http://www.w3.org/WAI/eval/template">Template for Accessibility Evaluation Reports</a> (refers to WCAG 1.0, but applicable to WCAG 2.0);<br clear="none" />
     see also the reports from <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a></li>
  <li><a href="http://www.w3.org/TR/WCAG-EM/">[Draft] Website Accessibility Conformance Evaluation Methodology 1.0</a> - a methodology for evaluating the conformance of websites to WCAG 2.0</li>
</ul>
<h4>Handouts</h4>
<ul>
  <li><a href="http://www.w3.org/WAI/flyer/#pwds">Including People with Disabilities in Design Studies</a></li>
</ul>
<h3>Suggestions for speakers</h3>
<ul>
  <li><strong>Activity/Demonstration:</strong> Evaluate accessible and inaccessible web pages from the <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a>. Compare results among the participants and with the reports provided.</li>
  <li><strong>Activity:</strong> Have participants recommend improvements for inaccessible web pages from the <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration</a>.
     Compare with the accessible web pages from the Demo and discuss
     different types of solutions to meet accessibility requirements.</li>
  <li><strong>Tip:</strong> Suggest participants repeat the activity/demonstration with other websites, including their own, after the session.</li>
</ul>
{% include excol.html type="end" %}