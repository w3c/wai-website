---
layout: null
permalink: /business-case/archive/socog-case-study.php
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
    "title" => "Sydney Olympics Website - A Cautionary Tale of Inaccessibility",
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
  Sydney Olympics Website</h1>
<div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
  <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
</div>
<p><strong><a href="http://www.w3.org/WAI/bcase/resources">Resources for Developing a Web Accessibility Business Case for Your Organization</a> provides case studies showing the positive business benefits of accessibility.</strong> This page is an example of negative consequences of not making your website accessible.</p>
<blockquote>
<p>&ldquo;I am comfortably satisfied that his [the plaintiff] limited access to the web site caused him considerable feelings of hurt, humiliation and rejection. One cannot overstate the consequential effect upon him of his having to cope with the persistent need to counter what he saw as a negative, unhelpful and dismissive attitude on the part of an organization charged with the presentation of the most notable sporting event in the history of this country.&rdquo;</p>
<p>(William Carter QC, Inquiry Commissioner - Human Rights &amp; Equal Opportunities Commission<sup><a href="#four">4</a></sup>)</p>
</blockquote>

<h2>About the business</h2>

<p>The Sydney Olympic Games official website provided a back-catalogue of records, highlights and Olympic history, as well as venue, scheduling and ticketing information.<sup><a href="#two">2</a></sup></p>

<p>The site was owned by The Sydney Organizing Committee for the Olympic Games (SOCOG), a statutory corporation established under legislation of the New South Wales parliament to stage the Games of the 27th Olympiad in the year 2000.</p>
<h2>Site visitor numbers</h2>
<p>Unknown.</p>
<h2>What happened?</h2>
<p><strong>Complaint made:</strong> by Bruce Lindsay Maguire, a web user who has been blind from birth, who accesses the web by means of a refreshable braille display<sup><a href="#one">1</a></sup>, in July 1999<br />
<strong>Hearing:</strong> July 2000<sup><a href="#one">1</a></sup></p>

<p>The <strong>plaintiff's case</strong> put to the Human Rights and Equal Opportunities Commission (HREOC) was that SOCOG's website was inaccessible with regards to the Commonwealth Disability Discrimination Act 1992 (Cth DDA), with specific request that:</p>
<ul>
 <li>provision of alternative (&quot;alt&quot;) text on images be implemented</li>
 <li>access from the Schedule page to the Index of Sports be available</li>
 <li>access to the Results Tables on the website be available during the Games, with witnesses for the plaintiff suggesting that a period of four weeks for a small team at modest cost should be sufficient to action this </li>
</ul>

<p>The <strong>respondent's position</strong> on these was that:</p>
<ul>
<li>alt text was being progressively implemented as part of continual development</li>
<li>access from the Schedule page to the Index of Sports was possible by inputting the required Uniform Resource Locator (URL) into the web browser directly</li>
<li>access to the Results Tables would cause the respondent unjustifiable hardship to comply as the site had already undergone 'substantial implementation' and planning, and that resolution would cost an estimated $2.2 million<acronym title="Australian dollars"> AUD</acronym> over 368 working days</li>
</ul>

<p>The <strong>HREOC's findings</strong> after referring to the W3C Content Accessibility Guidelines 1999 (WCAG 1.0) were:</p>

<ul>
<li>by virtue of the ongoing provision of alt text as opposed to initial implementation, it is sound reasoning to expect that the respondent can make similar improvements and provisions in other areas even if they had already undergone 'substantial implementation' and planning</li>
<li>expecting users to directly input non-intuitively structured URL strings into their browsers as a means of navigation was contradictory to the intent of how information on the Internet should be available, i.e. accessible via a network of structured and contextually meaningful links, and for the respondent to submit this as a suitable alternative was unreasonable</li>
<li>non-compliance in providing access to Results Tables online during the Games would not be the unjustified hardship claimed by the respondent</li>
</ul>

<p>In addition the HREOC ruled that the potential benefit of compliance with the Cth DDA would be of extreme benefit to the plaintiff, the hardship incurred by the respondent moderate, and if the matter had been taken into account from the beginning, negligible.<sup><a href="#one">1</a></sup></p>



<h2>Results</h2>

<p>The HREOC's ruling set a precedent that creating a website intended for use by and to inform the general public, where such a website is more accessible to a sighted user than the same intent and information is not available for a user who is blind by virtue of disability. They are therefore being discriminated against by lack of provision, and the creator of the website is in breach of the Cth DDA.<sup><a href="#one">1</a></sup></p>

<ul>
<li>Australian governments subsequently adopted the W3C Guidelines<sup><a href="#five">5</a></sup></li>
<li>The Commonwealth Government required all agency websites to pass accessibility tests by 1 December 2000.<sup><a href="#three">3</a></sup></li>
</ul>

<p>The HREOC ruled that the respondent pay damages of $20,000 <acronym title="Australian dollars">AUD</acronym> to the plaintiff.<sup><a href="#four">4</a></sup></p>

<h2>References</h2>
<ol>
 <li id="one">Sloan M, 2001. <em>Web Accessibility and the DDA - 4.1 Maguire Vs. SOCOG</em> (<a href="http://www2.warwick.ac.uk/fac/soc/law/elj/jilt/2001_2/sloan/#a4.1">www2.warwick.ac.uk/fac/soc/law/elj/jilt/2001_2/sloan/#a4.1</a>).</li>
 <li id="two">SOCOG, 1999. <em>Olympics 2000 Website</em> (<a href="http://pandora.nla.gov.au/parchive/2000/S2000-Jan-11/www.olympics.com/eng/about_our_site/home.html">pandora.nla.gov.au/parchive/2000/S2000-Jan-11/www.olympics.com/eng/about_our_site/home.html</a>)</li>
 <li id="three">Worthington T, 2001. <em>Olympic Failure: A Case for Making the Web Accessible</em> (<a href="http://www.tomw.net.au/2001/bat2001f.html">www.tomw.net.au/2001/bat2001f.html</a>)</li>
 <li id="four">Carter W, 2000. <em>Bruce Lindsay Maguire v. Sydney Organising Committee for the Olympic Games (Respondent)</em> (<a href="http://www.humanrights.gov.au/disability_rights/decisions/comdec/2000/DD000200.htm">www.humanrights.gov.au/disability_rights/decisions/comdec/2000/DD000200.htm</a>)</li>
 <li id="five">Seventh Ministerial meeting of the Online Council - Media Release, 2000. (<a href="http://www.dbcde.gov.au/Article/0,,0_4-2_4008-4_15092,00.html">www.dbcde.gov.au/Article/0,,0_4-2_4008-4_15092,00.html</a>)</li>
</ol>
</div>
<!--end #main -->

<div id="footer">
<h2>Document Information</h2>

<p><strong>Content last updated:</strong> 14 December 2009<strong> [<a href="http://www.w3.org/WAI/EO/changelogs/cl-bcase-update.html">changelog</a>]</strong><br />
Editor: Sunil Patel and Liam McGee. Developed with the Education and Outreach Working Group (<a
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
