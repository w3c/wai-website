---
layout: null
permalink: /business-case/archive/resources.php
---
<?php
  include '/afs/w3.org/pub/WWW/WAI/lib/functions.php';

  $customcss = <<<EOF
#faqcontents ul {
  margin: 0.3em 0 0 0;
  padding: 0;
  list-style: none;
}
#faqcontents li {
  margin: 0;
  padding: 0;
  display: inline;    /* HACK: otherwise too much space in WinIE */
}
#faqcontents a {
  color: #930;    /* WinIE6 doesn't support 'transparent' */
  display: block;    /* Make background clickable in many browsers*/
  margin: 0;
  padding: 0 0 0 1em;
  background: url(/Icons/downinpage.png) top left no-repeat;
}
#faqcontents h2 {
  color: #000000;
  border-bottom: none;
}
#contents {
  border: none;
  float: right;
  clear: right;
  margin: 0;
  padding: 0;
  width: 0;
  background: #fffaf5;
}
EOF;

  $config = [
    "title" => "Resources for Developing a Web Accessibility Business Case for Your
  Organization",
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
    <li><a href="tech" shape="rect">Technical Factors</a></li>
    <li><a href="fin" shape="rect">Financial Factors</a></li>
    <li><a href="pol" shape="rect">Legal &amp; Policy Factors</a></li>
    <li class="hmenuselection"><a shape="rect">Resources</a></li>
  </ul>
    <h1><span style="background-color: #eed009;color: #091832;display: inline-block;padding: 4px 8px;margin-top: -8px;margin-right: 8px;font-size: 14px;font-family: sans-serif;text-transform: uppercase;letter-spacing: 1px;font-weight: 700;vertical-align: middle;border-radius: 3px;">Archived</span>Resources for Developing a Web Accessibility Business Case for
    Your Organization</h1>
    <div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
    <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
  </div>
    <div id="contents"> </div>
    <div class="sidebar">
    <h2>Sidebar</h2>
    <p><img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /> icon indicates links that leave the WAI website.</p>
  </div>
    <p>This page is an appendix to <a href="../bcase/Overview" shape="rect">Developing a
      Web Accessibility Business Case for Your Organization</a>.</p>
    <p><em>Resources are for information purposes only, no endorsement
      is implied.</em></p>
    <div id="faqcontents">
    <h2>Contents:</h2>
    <ul>
        <li><a href="#cases" shape="rect">Case Studies of Accessibility Improvements</a></li>
        <li><a href="#statecom" shape="rect">Statistics on People with Disabilities and
          Web Use</a></li>
        <li><a href="#seo" shape="rect">Accessibility Improving Search Engine
          Optimization</a></li>
        <li><a href="#roi" shape="rect">Example for ROI calculations</a></li>
        <li><a href="#casesnot" shape="rect">Cautionary Tales of Inaccessibility</a></li>
        <li><a href="#promo" shape="rect">Promoting Accessibility</a></li>
        <li><a href="#more" shape="rect">Sharing Your Resources</a></li>
      </ul>
  </div>
    <h2><a name="cases" id="cases" shape="rect"></a>Case Studies of Accessibility
    Improvements</h2>
    <ul class="listspaced">
    <li><strong>Legal &amp; General
      Group</strong> - doubled visitor numbers, cut maintenance costs by
        two thirds, increased natural search traffic by 50%. <a href="legal-and-general-case-study" shape="rect">Read the Legal &amp; General
      case study</a>. (2007, UK)</li>
    <li><strong>Tesco</strong> -
        £35 thousand <acronym title="United Kingdon pounds">GBP</acronym> to
        build website, £13 million <acronym title="United Kingdon pounds">GBP</acronym> per year in resultant revenue. <a href="http://www.w3.org/WAI/bcase/tesco-case-study" shape="rect">Read the Tesco case
      study</a>. (2004, UK)</li>
    <li><strong>CNET</strong> - 30% increase in traffic from Google after CNET
        started providing transcripts (reported <a href="http://teachingcommons.cdl.edu/access/docs_multi/documents/CaptioningExperts.ppt" shape="rect">AST(.ppt)<img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /></a>). <q><em>We saw a significant increase in SEO referrals when we launched an
        HTML version of our site, the major component of which was our
        transcripts.</em></q> - Justin Eckhouse, CNET, 2009.</li>
  </ul>
    <h2><a name="statecom" id="statecom" shape="rect"></a>Statistics on People with
    Disabilities and Web Use</h2>
    <p>See <a href="http://www.w3.org/WAI/bcase/soc#stats" shape="rect">Number of People Affected (statistics)</a> section in the Social Factors page for important information on statistics.</p>
    <ul class="listspaced">
    <li><a href="http://www.microsoft.com/enable/research/phase1.aspx" shape="rect">The
      Market for Accessible Technology <img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /></a> - Research by Forrester,
        commissioned by Microsoft. Example: Among US computer users in 2003 ranging from 18 to   64, 57% (74.2 million) are likely to directly
        or indirectly benefit from the use of accessible technology due to
        difficulties and impairments that may impact computer use.</li>
    <li><a href="http://www.realising-potential.org/case-studies/industry/e-commerce.html" shape="rect">Industry
      sector case studies: ecommerce <img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /></a> - a round up of data from a number of
        sources by the UK Employers Forum on Disability. Example: 71% of people
        with disabilities in the UK use the Web to find information on goods and
        services.</li>
    <li><a href="http://www.w3.org/WAI/presentations/ageing/" shape="rect">Web Accessibility for Older Users Presentation</a> and <a href="http://www.w3.org/WAI/intro/wai-age-literature.php" shape="rect">Web Accessibility for Older Users: A Literature Review</a> - includes statistics on older users online. Example: number of people over 65 is increasing rapidly; in 2020 (just   10 years away) it is expected to be nearly 30% in Japan, 20% in Europe,   and 16% in U.S. <br clear="none" />
      </li>
  </ul>
    <h2><a name="seo" id="seo" shape="rect"></a>Accessibility Improving Search Engine
    Optimization</h2>
    <ul class="listspaced">
    <li><a href="http://www.communis.co.uk/blog/2009-08-06-seo-and-accessibility-overlap" shape="rect">SEO
      and Accessibility Overlap <img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /></a> - an article detailing many of the overlaps
        between accessibility guidelines and best practice for Search Engine
        Optimization (SEO).</li>
    <li><a href="http://www.webmasterworld.com/search_engine_promotion/3810495.htm" shape="rect">Webmaster
      World Forum: General Search Engine Promotion and Marketing Issues <img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /></a> - a
        lengthy thread of discussion of the applicability of the WCAG 2.0
        techniques documents to "on-page SEO".</li>
  </ul>
    <h2><a name="roi" id="roi" shape="rect"></a>Example for ROI calculations</h2>
    <ul class="listspaced">
    <li>Brinck, T. <a href="http://books.google.co.uk/books?id=kDVgsGgkF4cC&amp;pg=PA385&amp;lpg=PA385&amp;dq=accessibility+roi&amp;source=bl&amp;ots=9dHbCcotGz&amp;sig=ryfaImiey14CMpR0DMwuqNDlhjI&amp;hl=en&amp;ei=9TZXSqImgtKMB6TrsN4C&amp;sa=X&amp;oi=book_result&amp;ct=result&amp;resnum=3#v=onepage&amp;q=accessibility%20roi&amp;f=false" shape="rect">Return
      on Goodwill: Return on Investment for Accessibility <img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /></a>. In <cite>Cost-Justifying Usability</cite>, Randolph G. Bias, Deborah J.
        Mayhew, eds. 2005. Example calculation gives a market increase of 8% and
        ROI of 2.4:1.</li>
  </ul>
    <h2><a name="casesnot" id="casesnot" shape="rect"></a>Cautionary Tales of
    Inaccessibility</h2>
    <p>When organizations do not make their websites accessible, they risk legal
    action and negative publicity, as the case studies below illustrate.</p>
    <ul class="listspaced">
    <li><strong>Target Corporation</strong> -
        settlement for damages of $6 million <acronym title="United States dollars">USD</acronym> and attorney's fees and costs
        over $3.7 million after lawsuit by US National Federation of the Blind
        (NFB). <a href="target-case-study" shape="rect">Read the Target case study</a>. (2008,
        USA)</li>
    <li><strong>Sydney Olympic Games</strong> -
        required to pay $20,000 <acronym title="Australian dollars">AUD</acronym> in damages due to poor accessibility. <a href="socog-case-study" shape="rect">Read the
      Sydney Olympics case study</a>. (2000, Australia)</li>
    <li><strong>Amex</strong> - "Bank upgrade is excluding blind. Visually
        impaired customers of American Express say they can no longer read their
        credit card statements online." - headlines after making its statements
        less accessible in a format change. [<a href="http://news.bbc.co.uk/2/hi/programmes/moneybox/7332216.stm" shape="rect">BBC
      News <img src="http://www.w3.org/Icons/offsite.png" alt="links off WAI website" /></a>] (2008, UK)</li>
  </ul>
    <h2><a name="promo" id="promo" shape="rect"></a>Promoting Accessibility</h2>
    <p>Tips, guidance, and case studies are available from the WAI-Engage wiki page on <a href="http://www.w3.org/community/wai-engage/wiki/Promoting_web_accessibility" shape="rect">Promoting web accessibility</a>.</p>
    <h2><a name="more" id="more" shape="rect"></a>Sharing Your Resources</h2>
    <p><strong>Please send additional resources and case study information to: <a href="mailto:team-accessibility-business-case@w3.org" shape="rect">team-accessibility-business-case@w3.org</a></strong></p>
    <p><strong>If you have made accessibility improvements to your website in the
      last three years</strong>, we may be able to help you gather data and develop
    a case study. Please contact: <a href="mailto:team-accessibility-business-case@w3.org" shape="rect">team-accessibility-business-case@w3.org</a> for details.</p>
    <!--
<p>[<a href="#faqcontents">back to top contents</a>]</p>
-->
  </div>
<!--end #main -->
<div id="footer">
    <h2>Document Information</h2>
    <p><strong>Status:</strong> Updated 7 September 2012 (first published August 2005)<br clear="none" />
    Editors: <a href="/People/Shawn" shape="rect">Shawn Lawton Henry</a> and Andrew Arch. Previous editor: Judy Brewer (until 2003). <a href="ack.html" shape="rect">Acknowledgements</a> lists
    additional contributors.
    Updated in 2010 as part of <a href="../WAI-AGE/Overview.html" shape="rect">WAI-AGE</a>, a project of the European Commission FP6 IST Programme.</p>
    <div class="footer-nav">
    <p>[<a href="http://www.w3.org/WAI/sitemap.html" shape="rect">WAI Site Map</a>] [<a href="http://www.w3.org/WAI/sitehelp.html" shape="rect">Help with WAI Website</a>] [<a href="http://www.w3.org/WAI/search.php" shape="rect">Search</a>] [<a href="/WAI/contacts" shape="rect">Contacting WAI</a>]<br clear="none" />
        <strong>Feedback welcome to <a href="mailto:wai-eo-editors@w3.org" shape="rect">wai-eo-editors@w3.org</a></strong> (a publicly archived list) or <a href="mailto:wai@w3.org" shape="rect">wai@w3.org</a> (a WAI staff-only list).</p>
  </div>
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
