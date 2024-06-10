---
layout: null
permalink: /business-case/archive/target-case-study.php
---
<?php
  include '/afs/w3.org/pub/WWW/WAI/lib/functions.php';

  $customcss = <<<EOF
blockquote {border: solid #ccc 1px; background: #eee; margin: 1em 0; padding: 0 0.5em}.open {
  background-color: #CCFFCC;
}
#faqcontents ul {
    margin: 0;
    padding: 0;
    list-style: none;
}
#faqcontents li {
    margin: 0;
  pading: 0;
    display: inline;    /* HACK: otherwise too much space in WinIE */
}
#faqcontents a {
    color: #930;    /* WinIE6 doesn't support 'transparent' */
    display: block;    /* Make background clickable in many browsers*/
    margin: 0;
    padding: 0 0 0 1em;
    background:   url(/Icons/downinpage.png) top left no-repeat;
}
EOF;

  $config = [
    "title" => "Target Corporation - A Cautionary Tale of Inaccessibility",
    "hmenu" => true,
    "excol" => false,
    "customcss" => $customcss
  ];
  wai_html_head($config);
?>
<?php wai_header($config); ?>
<?php wai_menu(); ?>
<div id="main">
  <h2 class="no-display">In-Suite Navigation</h2>
  <ul class="hmenu6">
    <li><a href="Overview" shape="rect">Overview</a></li>
    <li><a href="soc" shape="rect">Social Factors</a></li>
    <li><a href="tech" shape="rect">Technical Factors</a></li>
    <li><a href="fin" shape="rect">Financial Factors</a></li>
    <li><a href="pol" shape="rect">Legal &amp; Policy Factors</a></li>
    <li><a href="resources" shape="rect">Resources</a></li>
  </ul>

<h1><span style="background-color: #eed009;color: #091832;display: inline-block;padding: 4px 8px;margin-top: -8px;margin-right: 8px;font-size: 14px;font-family: sans-serif;text-transform: uppercase;letter-spacing: 1px;font-weight: 700;vertical-align: middle;border-radius: 3px;">Archived</span>A Cautionary Tale of Inaccessibility:<br />
Target Corporation</h1>
<div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
    <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
  </div>
<p><strong><a href="http://www.w3.org/WAI/bcase/resources">Resources for Developing a Web Accessibility Business Case for Your Organization</a> provides case studies showing the positive business benefits of accessibility.</strong> This page is an example of negative consequences of not making your website accessible.</p>
<blockquote>
  <p>&ldquo;Precedent Establishes That Retailers Must Make Their Websites Accessible to the Blind Under the ADA&rdquo;<br />
    (National Federation of the Blind (NFB)<sup><a href="#nine">9</a></sup>)</p>
</blockquote>

<h2>About the business</h2>
<p>Target Corporation originated in 1902 under the banner of the Dayton Dry Goods Company; the name Target was not adopted until 60 years later when the Dayton Company opened the first outlet bearing that name. Today Target operates some 1600 stores throughout the continental United States as well as Hawaii and Alaska, offering discount consumer products and recently launching fresh food offerings and general groceries nationwide. In 1999 Target moved into online sales with the launch of Target.com, and in 2005 Target broke the $50 billion annual sales barrier.<sup><a href="#two">2</a></sup></p>


<h2>Site visitor numbers</h2>
<p>Approximately 934,265 visitors daily <sup><a href="#three">3</a></sup></p>


<h2>What happened?</h2>

<h3>May 2005</h3>
<p>The National Federation of the Blind (NFB), a non-profit organization representing blind people in the United States, based in Baltimore, Maryland, notified Target Corporation that its website, Target.com, was not accessible to blind and visually impaired users. Key issues cited were:</p>
<ul>
 <li>a lack of alternative (alt) text on the site</li>
 <li>online purchases could not be completed without the use of a mouse</li>
 <li>image maps to show store locations were inaccessible</li>
 <li>many headings important to navigating the site were missing</li>
</ul>
<p>Target Corporation would not commit to any action to remedy this.<sup><a href="#one">1</a></sup></p>

<h3>January 2006</h3>
<p>The NFB filed a lawsuit alleging that Target.com's lack of accessibility violated:</p>
<ul>
 <li>the California Unruh Civil Rights Act (California Civil Code Section 51 et. seq.) requiring any business establishment of any kind to be accessible if doing business in California</li>
 <li>the California Disabled Persons Act (California Civil Code Section 54 et. seq.) requiring any public place 'and other places to which the public are invited' to be accessible</li>
 <li>the Americans with Disabilities Act (ADA) which prohibits discrimination against people with disabilities in &quot;places of public accommodation&quot;<sup><a href="#one">1</a></sup></li>
</ul>

<h3>September 2006</h3>
<p>A Federal Judge ruled that the lawsuit can proceed past Target Corporation's motions to dismiss the case. The Judge found that California anti-discrimination law covers websites whether or not they are, or are connected to, a physical place, and that those aspects of Target.com's services that are sufficiently integrated with those of physical Target Stores are covered by the ADA's non-discrimination provisions.<sup><a href="#four">4</a></sup></p>
<h3>August 2008</h3>
<p>Target Corporation settled class action lawsuit with the NFB.<sup><a href="#five">5</a></sup></p>
<h2>Results</h2>
<ul>
<li>Target Corporation settled the class action lawsuit filed by NFB in August 2008 and agreed to pay class damages of $6 million.<sup><a href="#five">5</a></sup></li>
<li>The ruling set a landmark precedent encouraging online retailers to incorporate accessibility measures into their websites.<sup><a href="#seven">7</a>,<a href="#nine">9</a></sup></li>
<li>The settlement required Target's progress in making the Target website accessible to be monitored by the NFB ('monitored compliance'), and that the site be fully accessible by February 28, 2009.<sup><a href="#seven">7</a></sup></li>
<li>The National Federation of the Blind was awarded reasonable attorney's fees and costs of $3,738,864.96.<sup><a href="#eight">8</a></sup></li>
<li>Target's own legal costs have not been published.</li>
</ul>


<h2>References</h2>
<ol>
 <li id="one">Out-Law.com, February 2006. <em>Target sued over web accessibility</em> (<a href=""http://www.out-law.com/page-6634">www.out-law.com/page-6634</a>)</li>
 <li id="two">Target Corporation, September 2009 (accessed). <em>Target: Our History</em> (<a href="http://sites.target.com/site/en/company/page.jsp?contentId=WCMP04-031697">sites.target.com/site/en/company/page.jsp?contentId=WCMP04-031697</a>)</li>
 <li id="three">Web Traffic Agents, September 2009 (accessed). <em>Target.com Site Metrics</em> (<a href="http://www.webtrafficagents.com/WebSiteValue/www.target.com">www.webtrafficagents.com/WebSiteValue/www.target.com</a>)</li>
 <li id="four">Sliwa C &amp; Rosencrance L, September 2006. <em>Court: Accessibility lawsuit against Target can proceed</em> (<a href="http://www.computerworld.com/s/article/9003129/Court_Accessibility_lawsuit_against_Target_can_proceed?taxonomyId=62&amp;pageNumber=1">www.computerworld.com/s/article/9003129/Court_Accessibility_lawsuit_against_Target_can_proceed?taxonomyId=62&amp;pageNumber=1</a>)</li>
 <li id="five">Magain M, August 2008. <em>Target Settles Accessibility Lawsuit for $6 Million</em> (<a href="http://www.sitepoint.com/blogs/2008/08/29/target-settles-accessibility-lawsuit-for-6-million/">www.sitepoint.com/blogs/2008/08/29/target-settles-accessibility-lawsuit-for-6-million/</a>)</li>
 <li id="six">Holding R, October 2006. <em>Missing the target</em> (<a href="http://www.time.com/time/nation/article/0,8599,1544275,00.html">www.time.com/time/nation/article/0,8599,1544275,00.html</a>)</li>
 <li id="seven">Disability Rights Advocates 2008. <em>National Federation of the blind v. Target</em> (<a href="http://www.dralegal.org/cases/private_business/nfb_v_target.php">www.dralegal.org/cases/private_business/nfb_v_target.php</a>)</li>
 <li id="eight">United States District Court, Northern District of California. <em>National Federation of the Blind et al., plaintiffs, v. Target Corporation, Defendant</em> (Case3:06-cv-01802-MHP Document214 Filed 08/03/09)</li>
 <li id="nine">Legal Precedent Set for Web Accessibility, September 2006.<br />
 (<a href="http://web.archive.org/web/20061205232104/http://biz.yahoo.com/prnews/060907/cgth051.html?.v=55">web.archive.org/web/20061205232104/http://biz.yahoo.com/prnews/060907/cgth051.html?.v=55</a>)</li>
</ol>
</div>
<!--end #main -->

<div id="footer">
<h2>Document Information</h2>

<p><strong>Content last updated:</strong> 14 December 2009<strong> [<a href="http://www.w3.org/WAI/EO/changelogs/cl-bcase-update.html">changelog</a>]</strong><br />
Editors: Sunil Patel and Liam McGee. Developed with the Education and Outreach Working Group (<a
href="http://www.w3.org/WAI/EO/">EOWG</a>).</p>

<p>[<a href="http://www.w3.org/WAI/contacts">Contacting WAI</a>] Feedback
welcome to <a href="mailto:wai-eo-editors@w3.org">wai-eo-editors@w3.org</a>
(a publicly archived list).</p>

<div class="copyright">
<p><a rel="Copyright" href="/Consortium/Legal/ipr-notice#Copyright"
shape="rect">Copyright</a> © 1994-2009 <a href="/" shape="rect"><acronym
title="World Wide Web Consortium">W3C</acronym></a><sup>®</sup> (<a
href="http://www.csail.mit.edu/" shape="rect"><acronym
title="Massachusetts Institute of Technology">MIT</acronym></a>, <a
href="http://www.ercim.org/" shape="rect"><acronym
title="European Research Consortium for Informatics and Mathematics">ERCIM</acronym></a>,
<a href="http://www.keio.ac.jp/" shape="rect">Keio</a>), All Rights Reserved.
W3C <a href="/Consortium/Legal/ipr-notice#Legal_Disclaimer"
shape="rect">liability</a>, <a
href="/Consortium/Legal/ipr-notice#W3C_Trademarks"
shape="rect">trademark</a>, <a rel="Copyright"
href="/Consortium/Legal/copyright-documents" shape="rect">document use</a>
and <a rel="Copyright" href="/Consortium/Legal/copyright-software"
shape="rect">software licensing</a> rules apply. Your interactions with this
site are in accordance with our <a
href="/Consortium/Legal/privacy-statement#Public" shape="rect">public</a> and
<a href="/Consortium/Legal/privacy-statement#Members" shape="rect">Member</a>
privacy statements.</p>
</div>
<!-- end footer -->
</div>
<?php wai_analytics(); ?>
</body>
</html>