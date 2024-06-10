---
layout: null
permalink: /business-case/archive/legal-and-general-case-study.php
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
    "title" => "Legal &amp; General Group (L&amp;G) - Case Study of Accessibility Benefits",
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
Legal &amp; General Group (L&amp;G)</h1>
<div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
    <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
  </div>
<p>This page is part of the <a href="http://www.w3.org/WAI/bcase/resources">Resources for Developing a Web Accessibility Business Case for Your Organization</a>.</p>
<blockquote><p>&ldquo;The new site has almost doubled the number of visitors seeking quotes and buying Legal &amp; General financial products online. It has cut maintenance costs by two thirds and increased the amount of natural search traffic we get by half as much again.&rdquo;</p>
<p>(Caroline Fawcett, L&amp;G Customer Experience Director<sup><a href="#nine">9</a></sup>)</p>
</blockquote>

<h2>About the business</h2>
<p>Established as a life assurance provider in 1836 (and exclusively for those belonging to the legal profession until 1929), the Legal &amp; General Group (L&amp;G) provides over 6.5 million<sup><a href="#one">1</a></sup> people with life assurance, investment plans, pensions and general insurance policies in the UK. The group is responsible for the investment of over &pound;180 billion <acronym title="United Kingdon pounds">GBP</acronym><sup><a href="#two">2</a></sup> worldwide on behalf of investors, policyholders and institutions.</p>
<h2>Website visitor numbers</h2>
<p><a href="http://www.legalandgeneral.com/">www.legalandgeneral.com</a>, 13,000 visitors per month as of March 2006<sup><a href="#three">3</a></sup></p>

<h2>Accessibility changes</h2>
<p><strong>Implemented:</strong> 31st July 2005<sup><a href="#four">4</a></sup></p>

<p><strong>Measures taken:</strong></p>
<ul>
<li>Accessibility audit and usability testing of existing site</li>
<li>Market research from the existing customer membership</li>
<li>Incorporation of the accessibility needs of the target audience most likely to be excluded or obstructed by inaccessible websites<sup><a href="#two">2</a></sup></li>
</ul>

<p>A new site was designed and built, seeking to ensure conformation to all relevant accessibility standards, successful passing usability testing and evaluation by users with disabilities<sup><a href="#five">5</a></sup> before going live in Summer 2005.</p>

<h2>Results</h2>
<ul>
 <li>Within 24 hours natural search engine traffic saw a 25% increase, eventually growing to 50%.<sup><a href="#four">4</a>,<a href="#five">5</a></sup></li>
 <li><q>Significant improvement</q> in Google rankings <q>for all target keywords</q><sup><a href="#six">6</a></sup></li>
 <li>Reduction in maintenance costs by 66%<sup><a href="#two">2</a></sup></li>
 <li>Site visitors receiving quotations doubled within 3 months<sup><a href="#two">2</a></sup></li>
 <li>100% return on investment (ROI) in 12 months<sup><a href="#two">2</a></sup></li>
</ul>

<h3>Additional benefits</h3>
<ul>
 <li>Average times for content maintenance jobs reducing from 5 days to 0.5 days, saving &pound;200,000 <acronym title="United Kingdon pounds">GBP</acronym> per year<sup><a href="#three">3</a></sup></li>
 <li>Page loading times reduced by 75%<sup><a href="#eight">8</a></sup></li>
 <li>Positive customer feedback on noticeably improved performance of site<sup><a href="#five">5</a></sup></li>
 <li>Inaccessibility complaints reduced to zero<sup><a href="#five">5</a></sup></li>
 <li>New site is accessible to mobile devices<sup><a href="#seven">7</a></sup></li>
</ul>

<h2>References</h2>
<ol>
 <li id="one">Legal &amp; General (accessed 2009), Website: www.legalandgeneralgroup.com (<a href="http://www.legalandgeneralgroup.com/">www.legalandgeneralgroup.com/</a>)</li>
 <li id="two">Wilton, D. &amp; Howell, J. 2007. <em>Accessibility helping business: the case of Legal &amp; General in United Kingdom</em>. (<a href="http://inova.snv.jussieu.fr/evenements/colloques/colloques/article.php?c=45&l=en&a=49">http://inova.snv.jussieu.fr/evenements/colloques/colloques/article.php?c=45&amp;l=en&amp;a=49</a>)</li>
<li id="three">Nicholl, C. 2006. <em>Legal &amp; General Business Case</em>. (<a href="http://www.shaw-trust.org.uk/files/legal___general_business_case.doc">www.shaw-trust.org.uk/files/legal___general_business_case.doc</a>)</li>
<li id="four">Various Authors 2007. <em>Legal &amp; General Case Study</em>. (<a href="http://icant.co.uk/webstandardsforbusiness/pmwiki.php/Main/LegalAmpGeneral">icant.co.uk/webstandardsforbusiness/pmwiki.php/Main/LegalAmpGeneral</a>)</li>
<li id="five">Abrahams, P. 2007. <em>Massive Business Case For Accessibility</em>. (<a href="http://www.it-director.com/business/compliance/content.php?cid=9258">www.it-director.com/business/compliance/content.php?cid=9258</a>)</li>
<li id="six">Lawson, B. 2006. <em>PAS 78: Guide to good practice in commissioning accessible websites</em>. (<a href="http://www.brucelawson.co.uk/2006/pas-78-guide-to-good-practice-in-commissioning-accessible-websites/">www.brucelawson.co.uk/2006/pas-78-guide-to-good-practice-in-commissioning-accessible-websites/</a>)</li>
<li id="seven">Econsultancy.com 2007. <em>Fortune Cookie and Legal &amp; General demonstrate outstanding business returns in government web accessibility film</em>. (<a href="http://econsultancy.com/press-releases/2512-fortune-cookie-and-legal-general-demonstrate-outstanding-business-returns-in-government-web-accessibility-film">econsultancy.com/press-releases/2512-fortune-cookie-and-legal-general-demonstrate-outstanding-business-returns-in-government-web-accessibility-film</a>)</li>
<li id="eight">Sloan, D. 2006. <em>PAS 78: A New Standard In Web Accessibility</em>. (<a href="http://www.dmag.org.uk/resources/design_articles/pas78.asp">www.dmag.org.uk/resources/design_articles/pas78.asp</a>)</li>
<li id="nine">Davies, M. 2009 (accessed). <em>Web Accessibility</em>. (<a href="http://www.isolani.co.uk/presentations/wsg/wsg-webaccessibility.pdf">www.isolani.co.uk/presentations/wsg/wsg-webaccessibility.pdf</a>)</li>
</ol>
</div>
<!--end #main -->

<div id="footer">
<h2>Document Information</h2>

<p><strong>Content last updated:</strong> 14 December 2009<strong> [<a href="http://www.w3.org/WAI/EO/changelogs/cl-bcase-update.html">changelog</a>]</strong><br />
Editor: Sunil Patel. Developed with the Education and Outreach Working Group (<a
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
