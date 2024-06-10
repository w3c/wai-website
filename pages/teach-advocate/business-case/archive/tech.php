---
layout: null
permalink: /business-case/archive/tech.php
---
<?php
  include '/afs/w3.org/pub/WWW/WAI/lib/functions.php';

  $customcss = <<<EOF
.listspaced {
  padding-bottom: 0.5em;
}
.listintro {
  margin-bottom: 0;
  padding-bottom: 0;
}

.note {
  background-color: #FFCCFF;
  border: 1px outset #FF0000;
}
.add {
  background-color:#CCFFFF;
}
.subtract {
  background-color:#FFCCCC;
  text-decoration:line-through;
}
.os {
  position:absolute;
  left: -1000em;
}
.sc-grey {
    color: #595959
}
EOF;

  $config = [
    "title" => "Technical Factors in Developing a Web Accessibility Business Case  for Your Organization",
    "hmenu" => true,
    "excol" => false,
    "customcss" => $customcss
  ];
  wai_html_head($config);
?>
<?php wai_header($config); ?>
<?php wai_menu(); ?>
<div id="main">
  <div id="skipwrapper"><a id="skip" shape="rect">-</a></div>
   <h2 class="no-display">In-Suite Navigation</h2>
   <ul class="hmenu6">
      <li><a href="Overview" shape="rect">Overview</a></li>
      <li><a href="soc" shape="rect">Social Factors</a></li>
      <li class="hmenuselection"><a shape="rect">Technical Factors</a></li>
      <li><a href="fin" shape="rect">Financial Factors</a></li>
      <li><a href="pol" shape="rect">Legal &amp; Policy Factors</a></li>
      <li><a href="resources" shape="rect">Resources</a></li>
   </ul>
   <h1><a name="top" id="top" shape="rect"></a><span style="background-color: #eed009;color: #091832;display: inline-block;padding: 4px 8px;margin-top: -8px;margin-right: 8px;font-size: 14px;font-family: sans-serif;text-transform: uppercase;letter-spacing: 1px;font-weight: 700;vertical-align: middle;border-radius: 3px;">Archived</span>Technical Factors in Developing a Web Accessibility Business Case for
      Your Organization</h1>
  <div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
    <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
  </div>
   <div id="contents">
      <h2>Page Contents</h2>
      <ul>
         <li><a href="#intro" shape="rect">Introduction</a></li>
         <li><a href="#custom" shape="rect">Identifying Technical Factors for a
            Specific Organization</a></li>
         <li><a href="#maint" shape="rect">Reduce Site Development and Maintenance
            Time</a></li>
         <li><a href="#server" shape="rect">Reduce Bandwidth Use and Server Load </a></li>
         <li><a href="#repurpose" shape="rect">Enable Content on Different
            Configurations</a></li>
         <li><a href="#advanced" shape="rect">Be Prepared for Advanced Web
            Technologies</a></li>
         <li><a href="#quality" shape="rect">Have High Quality Websites</a></li>
      </ul>
      <!-- end (page) contents (list)-->
   </div>
   <h2><a name="intro" id="intro" shape="rect"></a>Introduction</h2>
   <p>This page is part of a resource suite that describes the <a href="soc.html" shape="rect"><strong>social</strong></a>, technical, <a href="fin.html" shape="rect"><strong>financial</strong></a>,
      and <a href="pol.html" shape="rect"><strong>legal and policy</strong></a> factors relevant to <a href="Overview.html" shape="rect">developing a customized business case for Web
         accessibility</a> for a specific organization.</p>
   <p>Implementing Web accessibility solutions often results in improved
      technical performance. The relative importance of various technical benefits of Web
      accessibility is different for specific organizations and situations. For
      example, reducing server load might be most important to an organization with
      a large, mission-critical, high-traffic site; whereas another organization
      that focuses on cutting-edge technology might be more interested in
      interoperability and being prepared for advanced web technologies. However, these
      same technical benefits might not be very important for organizations with
      small, simple sites; they might be more interested in simplifying site maintenance.</p>
   <p>This page provides guidance on addressing technical factors in a business
      case for Web accessibility.</p>
   <h2><a name="custom" id="custom" shape="rect">Identifying Technical Factors
      for a Specific Organization</a></h2>
   <p class="listintro">The following questionshelp identify how the technical aspects of Web
      accessibility apply to the organization:</p>
   <ul class="listwithp">
      <li class="listspaced"><strong>Is the organization starting a new web
         development or redesign effort?</strong><br clear="none" />
         If so, the business case can emphasize the technical benefits of
         incorporating accessibility early in the project. See <a href="#maint" shape="rect">Reduce Site Development and Maintenance Time</a>.</li>
      <li class="listspaced"><strong>Does the organization change site content
         or design frequently?</strong><br clear="none" />
         If so, the business case can emphasize that Web accessibility can reduce
         maintenance time. See <a href="#maint" shape="rect">Reduce Site
            Development and Maintenance Time</a>.</li>
      <li class="listspaced"><strong>How important is it to the organization to
         reduce bandwidth use or server load?</strong><br clear="none" />
         For example, if it is important for the organization to reduce the need
         for additional servers or increase the download speed, the business case
         can emphasize these factors. See <a href="#server" shape="rect">Reduce
            Bandwidth Use and Server Load</a>.</li>
      <li class="listspaced"><strong>Does the organization want its website to
         work in different configurations?</strong><br clear="none" />
         For example, if the organization wants its website to work on multiple
         operating systems, web browsers, and devices, the business case can show
         how Web accessibility contributes to interoperability and
         device-independence. See <a href="#repurpose" shape="rect">Enable Content
            on Different Configurations</a>.</li>
      <li><strong>How important is it to the organization to be prepared for
         advanced web technologies?<br clear="none" />
         </strong>For example, if the organization is interested in taking
         advantage of advanced web technologies, this factor can be included in
         the business case. See <a href="#advanced" shape="rect">Be Prepared for
            Advanced Web Technologies</a>.</li>
      <li class="listspaced"><strong>Does the organization want to have
         high-quality websites that meet standards?</strong><br clear="none" />
         If so, the business case can point out the overlap between Web
         accessibility standards and other standards. See <a href="#quality" shape="rect">Have High Quality Websites</a>.</li>
   </ul>
   <p>See <a href="/WAI/intro/wcag.php" shape="rect">Web Content Accessibility
      Guidelines (WCAG) Overview</a> for more information about the WCAG references below.</p>
   <h2><a name="maint" id="maint" shape="rect"></a>Reduce Site Development and
      Maintenance Time</h2>
   <p class="listintro">Incorporating accessibility usually increases site development time
      initially, as discussed in <a href="fin.html" shape="rect">Financial Factors</a>.
      However, in the long term Web accessibility can reduce the time an
      organization spends on site development and maintenance, as follows:</p>
   <ul class="listwithp">
      <li class="listspaced"><strong>Reduce time and effort needed to change
         presentation</strong> across a site by defining presentation through a
         style sheet and using proper markup (for example, in XHTML) for
         structure. <br clear="none" />
         Presentation includes design and style such as font size, font face, and
         background color. If the presentation is defined in an external style
         sheet, it can be changed throughout the site by making the change to that
         one style sheet. However, if the presentation was improperly defined
         throughout the HTML, the presentation markup would have to be changed in
         every instance on every web page.<br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 1.4.5, 1.4.9, 2.4.10; WCAG 1.0 checkpoints 3.1, 3.3, 3.5, 3.6, 3.7, 5.4)</span></li>
      <li class="listspaced"><strong>Facilitate efficient debugging</strong> with
         automated validation tools by conforming to standards and identifying a
         DOCTYPE. Facilitate efficient human debugging by simplifying markup and
         using style sheets to define presentation. <br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 4.1.1, 4.1.2; WCAG 1.0 checkpoints 3.2, 3.3,
                  11.1, 11.2)</span></li>
      <li class="listspaced"><strong>Reduce redesign and translation time and
         skills</strong> needed by using standard markup and style sheets to style
         and format text, instead of using bitmap images of text or math. <br clear="none" />
         Site designers often use bitmap images for stylized text. In such cases,
         to change or translate text content or style, each image has to be
         manipulated. If instead the text was not in an image and the style was
         provided in a style sheet, then the text can be easily changed or translated. To change the design is a simple style sheet change instead of restyling images of text.<br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 1.4.5, 1.4.9; WCAG
                  1.0 checkpoint 3.1)</span></li>
      <li class="listspaced"><strong>Reduce development and maintenance</strong> by having one accessible version of a site, rather than multiple
         versions, as described in "<a href="#repurpose" shape="rect">Enable
            Content on Different Configurations</a>" section below.</li>
   </ul>
   <h2><a name="server" id="server" shape="rect"></a>Reduce Bandwidth Use and Server Load</h2>
   <p class="listintro">Web accessibility techniques can reduce the server load, which increases the download speed and can reduce the need for additional bandwidth or servers, as follows:</p>
   <ul class="listwithp">
      <li class="listspaced"><strong>Reduce the size of each page served</strong> by defining presentation in style sheets (which are only requested once
         per session) rather than the markup of each page, and by using text
         rather than bitmap images of text. <br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 1.4.5, 1.4.9; WCAG 1.0 checkpoints 3.3, 3.1)</span></li>
      <li class="listspaced"><strong>Reduce downloading of large image and
         multimedia files</strong> by including alternative text for images and
         transcripts for multimedia files. For example, this lets users with low
         bandwidth connections browse with images off, and lets users preview the information and decide whether or not to download it.<br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 1.1.1, 1.2.8; WCAG 1.0 checkpoint
                  1.1)</span></li>
      <li class="listspaced"><strong>Reduce unwanted page downloading, and thus
         server requests,</strong> by providing clear and consistent design,
         navigation, and links. <br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 2.4.4, 2.4.9, 2.4.5, 3.2.3, 3.2.4, 2.4.1, 2.4.6, 3.2.3, 3.2.4; WCAG 1.0 checkpoints 13.1, 13.3, 13.4, 13.5, 13.6,
                  13.7, 13.8, 14.3)</span></li>
   </ul>
   <h2><a name="repurpose" id="repurpose" shape="rect"></a>Enable Content on
      Different Configurations</h2>
   <p class="listintro">Many organizations are increasingly interested in web interoperability and device-independence, such as making their websites work well on mobile devices. Web accessibility can enable web
      content to be rendered and interacted with on different configurations, including different devices, operating systems, and web
      browsers, as follows:</p>
   <ul class="listwithp">
      <li class="listspaced"><strong>Allow users and user agents to access
         content for different configurations, and servers to provide content for
         different configurations</strong> by using current versions of technologies with built-in accessibility support such as XHTML, XML, RDF, SMIL, CSS, XSL, XSLT,
         and PNG. <br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 4.1.1, 4.1.2 and conformance requirements 1, 4; WCAG 1.0 checkpoints 11.1,
                  3.2)</span></li>
      <li class="listspaced"><strong>Render styled text across a wide
         range of configurations</strong> by providing information as text and
         using style sheets to define presentation, rather than using bitmap
         images of text. <br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 1.4.1, 1.4.3, 1.4.4, 1.4.5, 1.4.6; WCAG 1.0 checkpoints 3.1, 3.3)</span></li>
      <li class="listspaced"><strong>Facilitate interaction with different input
         devices</strong> by designing for device independence.<br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 2.1.1, 2.1.2, 2.1.3, 2.4.3, 2.4.7; WCAG 1.0
                  checkpoints 6.4, 9.1, 9.2, 9.3, 9.4, 9.5)</span></li>
      <li class="listspaced"><strong>Allow users and user agents to request
         content</strong> in a way that suits their capabilities by using markup
         for structure and style sheets for presentation. <br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 2.4.10; WCAG 1.0 checkpoint
                  3.3)</span></li>
   </ul>
   <p><a name="mobileexperiences" id="mobileexperiences" shape="rect"></a>For a  detailed list of how accessibility overlaps mobile design/development, along with links to WCAG success criteria, see <a href="http://www.w3.org/WAI/mobile/experiences" shape="rect">Shared Web Experiences</a>.</p>
   <h2><a name="advanced" id="advanced" shape="rect"></a>Be Prepared for
      Advanced Web Technologies</h2>
   <p class="listintro">Web accessibility can help organizations take advantage of advanced web
      technologies and be prepared for future web technologies, for example:</p>
   <ul class="listwithp">
      <li class="listspaced"><strong>Allow content re-use</strong> by enabling tools to extract and present information to users in different modalities.<br clear="none" />
            <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 1.4.3, 1.4.4, 1.4.6, 4.1.2)</span></li>
      <li class="listspaced"><strong>Simplify forward migration and
         backwards-compatibility</strong> by defining presentation in a style
         sheet, using proper markup structure, and using the latest standards. <br clear="none" />
               <span class="sc-grey">(WCAG 2.0 success criteria 4.1.1, 1.3.1, 1.4.8, 1.4.4, 1.3.1, 2.4.10; WCAG 1.0 checkpoints 11.1, 3.2, 3.3, 3.5, 3.6, 3.7, 5.4)</span></li>
   </ul>
   <h2><a name="quality" id="quality" shape="rect"></a>Have High Quality Websites</h2>
   <p>Some developers and organizations pride themselves on producing high
      quality websites that meet technical standards.<a href="http://www.w3.org/WAI/intro/wcag.php" shape="rect">Web Content Accessibility Guidelines (WCAG)</a> and other <a href="http://www.w3.org/WAI/guid-tech.html" shape="rect">accessibility specifications</a> from the World Wide Web Consortium (W3C) Web
      Accessibility Initiative (WAI) are widely-recognized international standards. Additional resources addressing the business case for web standards in general
      are available on the Web.</p>
   <p>[ <a href="soc.html" shape="rect"><strong>Previous Page</strong> - Social Factors</a> | <a href="#top" shape="rect">Top of Page</a> | <a href="fin.html" shape="rect"><strong>Next Page</strong> - Financial Factors</a> ]</p>
   <!-- end main -->
</div>
<div id="footer">
   <h2>Document Information</h2>
   <p><strong>Status:</strong> Updated 7 September 2012 (first published August 2005)<br clear="none" />
      Editors: <a href="/People/Shawn" shape="rect">Shawn Lawton Henry</a> and Andrew Arch. Previous editor: Judy Brewer (until 2003). <a href="ack.html" shape="rect">Acknowledgements</a> lists
      additional contributors.
      Updated in 2010 as part of <a href="../WAI-AGE/Overview.html" shape="rect">WAI-AGE</a>, a project of the European Commission FP6 IST Programme.</p>
   <div class="footer-nav"><p>[<a href="http://www.w3.org/WAI/sitemap.html" shape="rect">WAI Site Map</a>] [<a href="http://www.w3.org/WAI/sitehelp.html" shape="rect">Help with WAI Website</a>] [<a href="http://www.w3.org/WAI/search.php" shape="rect">Search</a>] [<a href="/WAI/contacts" shape="rect">Contacting WAI</a>]<br clear="none" />
         <strong>Feedback welcome to <a href="mailto:wai-eo-editors@w3.org" shape="rect">wai-eo-editors@w3.org</a></strong> (a publicly archived list) or <a href="mailto:wai@w3.org" shape="rect">wai@w3.org</a> (a WAI staff-only list).</p></div>
   <div class="copyrightcc">
      <p><a rel="Copyright" href="http://www.w3.org/Consortium/Legal/ipr-notice#Copyright" shape="rect">Copyright</a> © 1994-2012 <a href="http://www.w3.org/" shape="rect"><acronym title="World Wide Web Consortium">W3C</acronym></a><sup>®</sup> (<a href="http://www.csail.mit.edu/" shape="rect"><acronym title="Massachusetts Institute of Technology">MIT</acronym></a>, <a href="http://www.ercim.org/" shape="rect"><acronym title="European Research Consortium for Informatics and Mathematics">ERCIM</acronym></a>, <a href="http://www.keio.ac.jp/" shape="rect">Keio</a>), All Rights Reserved. <br clear="none" />
         <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" shape="rect"><img alt="Creative Commons License" style="float: left; border: 0; margin: 5px" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a> This work is published and licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/" shape="rect">Creative Commons Attribution 3.0 Unported License</a>.<br clear="none" />
         <strong>For attribution requirements, see the <a href="http://www.w3.org/WAI/about/usingWAImaterial#cc" shape="rect">"Creative Commons License (CC)" section of Using WAI Material</a>.</strong></p>
   </div>
   <!-- end footer -->
</div>
<?php wai_analytics(); ?>
</body>
</html>
