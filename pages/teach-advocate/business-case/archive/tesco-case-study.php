---
layout: null
permalink: /business-case/archive/tesco-case-study.php
---
<?php
  include '/afs/w3.org/pub/WWW/WAI/lib/functions.php';

  $customcss = <<<EOF
blockquote {border: solid #ccc 1px; background: #eee; margin: 1em 0; padding: 0 0.5em}
.open {
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
.highlight-version {
  margin-top: 15px;
  }
EOF;

  $config = [
    "title" => "Tesco - Case Study of Accessibility Benefits",
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

<h1><span style="background-color: #eed009;color: #091832;display: inline-block;padding: 4px 8px;margin-top: -8px;margin-right: 8px;font-size: 14px;font-family: sans-serif;text-transform: uppercase;letter-spacing: 1px;font-weight: 700;vertical-align: middle;border-radius: 3px;">Archived</span>Case Study of Accessibility Benefits:<br />
Tesco
</h1>
<div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
  <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
</div>
<p>This page is part of the <a href="http://www.w3.org/WAI/bcase/resources">Resources for Developing a Web Accessibility Business Case for Your Organization</a>.</p>
<blockquote>
<p>&ldquo;Not only do we get the satisfaction of doing the right thing, but it's a  great market opportunity in its own right.&rdquo;<br />
  (John Browett, Tesco Chief Executive<sup><a href="#three">3</a></sup>)</p>
<p>Many fully-sighted people find Tesco's Access site easier to use than other sites. Although originally designed for visually impaired users, the site now attracts a much wider audience, spending £13 million a year, which is a fraction of the original cost of £35,000 to develop the accessible site.<sup><a href="#four">4</a></sup> (See <a href="#note">*Note on current best practice</a>)</p>
</blockquote>

<h2>About the business</h2>
<p>Tesco was started in 1919,  amongst the East End grocers’ markets of London (although the first Tesco  brand products and Tesco store came 5 and 10 years later respectively), and in 1932  Tesco became a public limited company. It is one of the UK’s largest grocery  retailers, with annual profits in 2005 reaching £2 billion <acronym title="United Kingdon pounds">GBP</acronym><sup><a href="#one">1</a></sup>. In addition,  Tesco supplies a wide range of non-grocery consumer products, covering  home and lifestyle, entertainment, and   insurance. In 2000, Tesco.com was launched.<br />
</p>
<h2>Website visitor numbers</h2>
<p><a href="http://www.tesco.com/access/">www.tesco.com/access/</a> Unknown, but  substantial<sup><a href="#two">2</a></sup><br />
</p>

<h2>Accessibility changes</h2>
<p><strong>Implemented:</strong> 22 May 2001<sup><a href="#three">3</a></sup></p>

<p><strong>Measures taken:</strong></p>
<ul>
<li>
  <p>2000,  June-September: Alpha testing by 20  users of varied visual impairment in tandem with progressive development of a  new interface design.<sup><a href="#three">3</a></sup><br />
      </p>
</li>
<li>  2001, January-May: Beta testing of the new interface by 70 users who are blind and partially  sighted, recruited in liaison with the Royal National Institute of Blind  People (RNIB).<sup><a href="#three">3</a></sup></li>
</ul>

<p><strong>Key changes:</strong></p>
<ul>
  <li>superfluous images stripped  from the site<sup><a href="#three">3</a></sup></li>
  <li>clear description of all link text<sup><a href="#three">3</a></sup></li>
  <li>elimination of main site’s  column-based layout allowing for intuitive navigation<sup><a href="#three">3</a></sup></li>
</ul>
<p>It should be noted that this new interface did not replace the existing site,  but was made available as an accessible alternative for those users who had no  need for the picture heavy content some home-shoppers used.<sup><a href="#three">3</a></sup> (See <a href="#note">*Note on current best practice</a>)<br />
</p>
<h2>Results</h2>
<ul>
 <li>
   <p>Revenue from site sales has increased to £13 million <acronym title="United Kingdon pounds">GBP</acronym> annually. Under the  principle that a user should be able to make a purchase of 30 items within 15  minutes (over a 56K connection), Tesco have enabled users with and without visual impairmentss to achieve this target regardless of which interface they  prefer.<sup><a href="#four">4</a></sup></p>
 </li>
 <li>   Pre-christmas orders (2001) increased to 700,000 per week, with an average  spend of £95 <acronym title="United Kingdon pounds">GBP</acronym>.<sup><a href="#three">3</a></sup></li>
 </ul>

<h3>Additional benefits:</h3>
<ul>
  <li>The accessible site displays well on mobile browsing devices and via low speed  connections.<sup><a href="#three">3</a></sup></li>
  </ul>
<h2>References</h2>
<ol>
 <li id="one">Tesco PLC 2009 (accessed),  website: www.tescoplc.com
   (<a href="http://www.tescoplc.com/">www.tescoplc.com/</a>)</li>
 <li id="two">Statbrain.com 2009  (accessed), Report: Tesco Visitor Statistics
   (<a href="http://www.statbrain.com/www.tesco.com/">www.statbrain.com/www.tesco.com/</a>)</li>
 <li id="three">Mc Manus, S. 31st May  2001, “Tesco launches visionary website” (<a href="http://www.sean.co.uk/a/webdesign/accessibility.shtm">www.sean.co.uk/a/web design/accessibility.shtm</a>)</li>
 <li id="four">Employers’ Forum on  Disability 2009 (accessed), &quot;Realising Potential&quot; (<a href="http://www.realising-potential.org/case-studies/industry/e-commerce.html">www.realising-potential.org/case-studies/industry/e-commerce.html</a>)</li>
 </ol>
<h2><a name="note" id="note"></a>*Note on current best practice</h2>
<p>It is generally <em>not current best practice to develop a separate accessible website</em>; instead, it is <strong>best practice to make your main website accessible</strong>. [<a href="http://www.uiaccess.com/myth-textonly.html">Myth: Separate Accessible Versions (Text-Only)</a>]</p>
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
