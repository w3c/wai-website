---
layout: null
permalink: /business-case/archive/fin.php
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
.os {
  position:absolute;
  left: -1000em;
}
.subtract {
  background-color:#FFCCCC;
  text-decoration:line-through;
}
.open {
  background-color: #CCFFCC;
  border: 1px outset #FF0000;
}
.sc-grey {
  color: #595959
}
EOF;

  $config = [
    "title" => "Financial Factors in Developing a Web Accessibility Business Case for Your Organization",
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
      <li class="hmenuselection"><a shape="rect">Financial Factors</a></li>
      <li><a href="pol" shape="rect">Legal &amp; Policy Factors</a></li>
      <li><a href="resources" shape="rect">Resources</a></li>
   </ul>
   <h1><a name="top" id="top" shape="rect"></a><span style="background-color: #eed009;color: #091832;display: inline-block;padding: 4px 8px;margin-top: -8px;margin-right: 8px;font-size: 14px;font-family: sans-serif;text-transform: uppercase;letter-spacing: 1px;font-weight: 700;vertical-align: middle;border-radius: 3px;">Archived</span>Financial Factors in Developing a Web Accessibility Business Case for Your Organization</h1>
  <div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
    <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
  </div>
   <div id="contents">
      <h2>Page Contents</h2>
      <ul>
         <li><a href="#intro" shape="rect">Introduction</a></li>
         <li><a href="#custom" shape="rect">Identifying Financial Factors for a Specific
            Organization</a></li>
         <li><a href="#increase-use" shape="rect">Increases Website Use</a></li>
         <li><a href="#direct" shape="rect">Direct Cost Savings</a></li>
         <li><a href="#invest" shape="rect">Cost Considerations</a></li>
         <li><a href="#decreasing" shape="rect">Decreasing Costs</a></li>
      </ul>
      <!-- end (page) contents (list)-->
   </div>
   <h2><a name="intro" id="intro" shape="rect"></a>Introduction</h2>
   <p>This page is part of a resource suite that describes the <a href="soc.html" shape="rect"><strong>social</strong></a>, <a href="tech.html" shape="rect"><strong>technical</strong></a>, financial, and <a href="pol.html" shape="rect"><strong>legal and policy</strong></a> factors relevant to <a href="Overview.html" shape="rect">developing a customized business case for Web
      accessibility</a> for a specific organization.</p>
   <p>An organization's efforts to make its website accessible often have a
      financial impact, and can result in positive return on investment and cost
      efficiencies. Financial costs and benefits in developing accessible websites
      apply differently to specific organizations and situations. For example,
      costs related to Web accessibility are often lower when building a new site
      than when fixing an existing site, and sometimes complex sites are less
      costly to fix than simple sites because they use templates and content
      management systems (CMS).</p>
   <p>This page provides guidance on addressing financial factors in a
      business case for Web accessibility.</p>
   <h2><a name="custom" id="custom" shape="rect">Identifying Financial Factors for a Specific
      Organization</a></h2>
   <p>The following questions help identify how the financial aspects of Web
      accessibility apply to the organization:</p>
   <ul>
      <li><strong>What is the main goal for the organization's website?</strong><br clear="none" />
         For example, if the main goal is increasing online sales, the business
         case can emphasize increasing potential market share, findability, and
         usability. See <a href="#increase-use" shape="rect">Increased Website Use</a>.</li>
      <li class="listspaced"><strong>Are there other efforts in the organization
         that overlap with the financial factors of Web accessibility?</strong><br clear="none" />
         For example, if the organization is focusing on improving its search engine
         rankings, increasing market share, or improving usability for all users,
         the business case can show how Web accessibility helps those efforts. See <a href="#increase-use" shape="rect">Increased Website Use</a>.</li>
      <li class="listspaced"><strong>How concerned is the organization with
         cutting web-related costs?</strong><br clear="none" />
         For example, an organization with high maintenance and upgrading costs
         can emphasize cost savings from technical improvements. See <a href="#direct" shape="rect">Direct Cost Savings</a>.
         <ul>
                  <li class="listspaced"><strong>Is the organization legally obligated to
                     make its website accessible,</strong> or might it be in the
                     future?<br clear="none" />
                     See <a href="#legal" shape="rect">Decreases potential for high legal
                        expenses</a>.</li>
            <li class="listspaced"><strong>Is the organization obligated to provide
               alternative formats of printed material</strong>, or might it be in
               the future?<br clear="none" />
               See <a href="#alt-format" shape="rect">Decreases cost of alternative format
                  materials</a>.</li>
            <li class="listspaced"><strong>Does the organization provide web pages
               in different languages,</strong> or might it in the future?<br clear="none" />
               See <a href="#translate" shape="rect">Decreases cost of translating</a>.</li>
         </ul>
      </li>
      <li class="listspaced"><strong>What type of web content does the
         organization have?</strong><br clear="none" />
         For example, an organization with little multimedia content will have
         fewer on-going costs. See <a href="#on-going" shape="rect">On-Going Costs</a>.</li>
      <li class="listspaced"><strong>How does the organization update its website?</strong><br clear="none" />
         For example, an organization with simple content updates that do not
         require rigorous testing will have few on-going testing costs. See <a href="#on-going" shape="rect">On-Going Costs</a>.</li>
      <li class="listspaced"><strong>Is the organization starting a new web
         development or redesign effort?</strong><br clear="none" />
         If so, the business case can emphasize the cost savings of incorporating
         accessibility early in the project. See <a href="#decreasing" shape="rect">Decreasing
            costs</a>.</li>
      <li class="listspaced"><strong>Does the organization have several web projects?</strong><br clear="none" />
         If so, the business case can clarify that initial costs can be shared
         among different projects. See <a href="#decreasing" shape="rect">Decreasing
            costs</a>.</li>
      <li><strong>Is it a priority in the organization  to retain the knowledge and experience of its older  employees?</strong><br clear="none" />
         If so, the business case can emphasize the  benefits of an accessible intranet and internal web applications for older users. See <a href="#direct" shape="rect">Direct Cost Savings</a>.</li>
   </ul>
   <p>See <a href="/WAI/intro/wcag.php" shape="rect">Web
      Content Accessibility Guidelines (WCAG) Overview</a> for more information about  the WCAG references below.</p>
   <h2><a name="increase-use" id="increase-use" shape="rect"> Increases Website Use</a></h2>
   <p>A major benefit of Web accessibility is the potential for direct and
      indirect financial gains from increased website use. Web accessibility can
      make it easier for people to find a website, access it, and use it
      successfully, thus resulting in increased audience (more users) and increased
      effectiveness (more use).</p>
   <p>Many organizations <strong>benefit financially when more people
      successfully use their website</strong>; for example, commercial companies
      can get more sales, educational institutions can get more students, and
      non-profit organizations can get more funding by demonstrating
      successful outreach and dissemination. Increasingly, <strong>websites are
         used to cut costs</strong> by decreasing customer support services and
      letting customers complete transactions online rather than requiring
      personnel and paper interactions. The many examples of cost savings from
      online transactions include citizens renewing licenses; filing tax returns and making payments online; investors
      trading stock and monitoring their pension funds online; and students registering for classes and completing course work online. Thus,
      increased site use can result in financial gains and cost savings.</p>
   <p><em>Increase in audience</em> (website users) can result from the following
      benefits of Web accessibility:</p>
   <dl>
      <dt><strong><a name="morepeople" id="morepeople" shape="rect"></a>Increases potential use by more people, expands potential market
         share</strong></dt>
      <dd>Accessible sites can be used by more people - including people with
         disabilities, people using mobile devices, older people, people with low literacy, people who are not fluent in the language of the site, people with low
         bandwidth connections to the Internet, people with older technologies,
         and new and infrequent web users, as discussed in <a href="soc.html" shape="rect">Social Factors</a> - thus
         increasing the market segments and number of people who can
         successfully use the site.
         <ul>
                  <li>An important potential market for many
                     organizations is older people. People are generally living longer and older people are an increasingly large percentage of web users.</li>
            <li>Accessible websites are  more usable to people who have temporary or permanent impairments due to accident, illness, or ageing.</li>
            <li>When web use is a significant part of a job, intranets and web applications that are accessible can help with employee recruiting and retention.</li>
            <li>People with disabilities and older people are particularly likely to be loyal customers of websites that work well for them. Furthermore, word-of-mouth or "viral marketing" can be significant among these groups.</li>
         </ul>
      </dd>
      <dt><a name="seo" id="seo" shape="rect"></a><strong>Increases findability with search engine optimization (SEO)</strong></dt>
      <dd>Accessibility techniques increase the findability of web pages by
         exposing content to search engines, both internally (within a website)
         and externally (across the World Wide Web). For example:
         <ul>
               <li>Alternative text for images and multimedia is available to search
                  engines <br clear="none" />
                         <span class="sc-grey">(WCAG 2.0 success criteria 1.1.1, 1.2.1, 1.2.8; WCAG 1.0 checkpoint 1.1)</span></li>
            <li>Most search engines access text and not images <br clear="none" />
                     <span class="sc-grey">(WCAG 2.0 success criteria 1.4.5, 1.4.9; WCAG 1.0
                        checkpoint 3.1)</span></li>
            <li>Some search engines give higher weight to text that is marked up
               as headings <br clear="none" />
                         <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 2.4.10; WCAG 1.0 checkpoint 3.5)</span></li>
            <li>Some search engines are unable to access some script-generated content such as mouse-overs<br clear="none" />
                     <span class="sc-grey">(WCAG 2.0 success criteria 2.1.1)</span></li>
         </ul>
      </dd>
      <dd>Additional perspectives on the benefits of accessibility for <acronym title="search engine optimization">SEO are available on the Web</acronym>.</dd>
   </dl>
   <p><em>Increase in effectiveness</em> (website use) can result from the following
      benefits of Web accessibility:</p>
   <dl>
      <dt><strong><a name="situations" id="situations" shape="rect"></a>Increases potential use in more situations</strong></dt>
      <dd>Accessible sites can be used in more situations. websites that can
         be used by people with disabilities can also be used more easily by people <em>without</em> disabilities who are limited by their situation, such as:
         <ul>
                  <li>in a noisy environment <br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 success criteria 1.2.1, 1.2.2, 1.2.4, 1.2.9; WCAG 1.0 checkpoints 1.1, 1.4)</span></li>
            <li>using a small black-and-white display or a mobile device outdoors<br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 success criteria 1.4.1, 1.4.3, 1.4.4, 1.4.6; WCAG 1.0 checkpoints 2.1,
                           2.2)</span></li>
            <li>low bandwidth<br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 success criteria 1.1.1, 1.2.8, 1.4.5, 1.4.9; WCAG 1.0 checkpoints
                           1.1, 3.1)</span></li>
         </ul>
      </dd>
      <dd>The <a href="tech.html#repurpose" shape="rect">Enable Content on Different
         Configurations</a> section of Technical Factors
         describes how accessibility techniques help web pages work with
         different configurations, including on <a href="http://www.w3.org/WAI/mobile/overlap.html" shape="rect">mobile devices</a>. Situational limitations such as <a href="soc.html#lowtech" shape="rect">low bandwidth
            and older technology</a> are discussed in Social Factors.</dd>
      <dt><strong><a name="usability" id="usability" shape="rect"></a>Increases usability</strong></dt>
      <dd>Accessible sites are generally more usable to everyone, including
         people with disabilities and people without disabilities. Increased
         usability means website users achieve their goals effectively,
         efficiently, and satisfactorily. When users have a positive experience
         with a website, they are more likely to use the site more thoroughly,
         return to the site more often, and to tell others about the site
         ("viral marketing"). Some accessibility guidelines directly increase
         usability to all users, such as:
         <ul>
                  <li>clear and consistent design, navigation, and links <br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 success criteria  2.4.2, 2.4.4, 2.4.5, 2.4.6, 2.4.9, 3.2.3, 3.2.4, guideline 3.3; WCAG 1.0
                           checkpoints 13.1, 13.3, 13.4, 13.5, 13.6, 13.7, 13.8, 14.3)</span></li>
            <li>blocks of information divided into groups <br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 2.4.10; WCAG 1.0 checkpoint
                           12.3)</span></li>
            <li>clear and simple language as appropriate <br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 success criteria 3.1.5, 3.1.3; WCAG 1.0 checkpoint
                           14.1)</span></li>
            <li>supplemental illustrations <br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 guideline 3.1; WCAG 1.0 checkpoint 14.2)</span></li>
            <li>good color contrast<br clear="none" />
                        <span class="sc-grey">(WCAG 2.0 success criteria 1.4.3, 1.4.6; WCAG 1.0 checkpoint 2.2)</span></li>
         </ul>
         Other accessibility guidelines can indirectly increase usability, for
         example, by making web pages load faster, as discussed in the <a href="soc.html#lowtech" shape="rect">Access for People with Low Bandwidth
            Connections to the Internet and Older Technologies</a> section of
         Social Factors.</dd>
      <dt><strong><a name="image" id="image" shape="rect">Increases positive image</a></strong></dt>
      <dd>An organization's efforts in Web accessibility are a public relations
         opportunity to increase its positive image, which can increase website
         use. The <a href="soc.html" shape="rect">Social Factors</a> page discusses Web
         accessibility as a social issue and an aspect of corporate social
         responsibility (CSR). CSR has been shown to improve financial
         performance, enhance brand image and reputation, increase sales and
         customer loyalty, increase ability to attract and retain employees, and
         provide access to capital and funding. Additional perspectives on CSR, such as statistics that show how CSR impacts customers, are available on the Web.</dd>
   </dl>
   <h2><a name="direct" id="direct" shape="rect">Direct Cost Savings</a></h2>
   <p>In addition to the benefits from increased website use discussed above,
      many organizations realize direct cost savings from improving Web
      accessibility.</p>
   <p class="listintro">Many of the aspects of Web accessibility that are discussed in <a href="tech.html" shape="rect">Technical Factors</a> can provide direct cost savings:</p>
   <ul class="listwithp">
      <li class="listspaced"><strong>Decreases personnel costs for maintaining
         the site</strong> when accessibility reduces site maintenance</li>
      <li class="listspaced"><strong>Decreases the amount of server capacity
         needed and saves on additional server costs</strong> when accessibility
         reduces server load</li>
      <li class="listspaced"><strong>Decreases the need for creating multiple
         versions of a site for different devices</strong> when accessibility
         enables content to work on different devices</li>
      <li class="listspaced"><strong>Decreases the cost of upgrading for new
         technologies</strong> when accessibility helps take advantage of advanced
         web technologies and be prepared for future web technologies</li>
   </ul>
   Potential direct costs savings also result from the following benefits of Web
   accessibility:
   <dl>
      <dt><strong><a name="legal" id="legal" shape="rect">Decreases potential for high legal
         expenses</a></strong></dt>
      <dd>Ensuring that websites are accessible reduces the risk of high legal
         costs associated with defending against legal action for not complying
         with Web accessibility requirements. <a href="pol.html" shape="rect">Legal and Policy Factors</a> discusses policy considerations for different organizations.</dd>
      <dt><strong><a name="alt-format" id="alt-format" shape="rect">Decreases cost of alternative
         format materials</a></strong></dt>
      <dd>For organizations that provided printed materials in alternate
         formats (large print, embossed braille, computer disk), an accessible
         website can reduce the demand for alternate formats when people chose
         to use the Web, thus saving some production and distribution costs.</dd>
      <dt><strong><a name="translate" id="translate" shape="rect">Decreases cost of
         translating</a></strong></dt>
      <dd class="listintro">The cost of translating a website to other languages can be
         decreased by following accessibility guidelines for:
         <ul>
               <li>clear and simple language as appropriate <br clear="none" />
                     <span class="sc-grey">(WCAG 2.0 success criteria 3.1.5, 3.1.3; WCAG 1.0 checkpoint
                        14.1)</span></li>
            <li>styled text instead of bitmap images of text to convey
               information <br clear="none" />
                         <span class="sc-grey">(WCAG 2.0 success criteria 1.4.5, 1.4.9; WCAG 1.0 checkpoint 3.1)</span></li>
            <li>separating content from presentation <br clear="none" />
                     <span class="sc-grey">(WCAG 2.0 success criteria 1.3.1, 2.4.10; WCAG 1.0 checkpoint
                        3.3)</span></li>
            <li>clear and consistent design, navigation, and links <br clear="none" />
                     <span class="sc-grey">(WCAG 2.0 success criteria 2.4.2, 2.4.4, 2.4.5, 2.4.6, 2.4.9, 2.4.10, 3.1.5, 3.2.3, 3.2.4; WCAG 1.0
                        checkpoints 13.1, 13.3, 13.4, 13.5, 13.6, 13.7, 13.8, 14.3)</span></li>
         </ul>
      </dd>
      <dt><strong><a name="workers" id="workers" shape="rect">Decreases personnel costs</a></strong></dt>
      <dd class="listintro">An accessible  intranet and web applications can help an organization:
         <ul>
               <li>decrease training, support, and accommodation costs</li>
            <li>help retain the valued expertise and experience of older employees as they develop age-related impairments</li>
            <li>decrease the costs of recruiting and training new employees</li>
         </ul>
      </dd>
   </dl>
   <h2><a name="invest" id="invest" shape="rect"></a>Cost Considerations</h2>
   <p>When accessibility is incorporated from the beginning of website
      development it is often a small percentage of the overall website cost.</p>
   <h3><a name="initial" id="initial" shape="rect">Initial Costs</a></h3>
   <p>When an organization starts incorporating accessibility, there are initial
      investments in acquiring knowledge, establishing processes, and increased
      development and testing time.</p>
   <p><em>Personnel-related costs</em> associated with an
      initial investment in accessibility can include:</p>
   <dl>
      <dt><strong>Providing training and skills development</strong></dt>
      <dd>Providing training and skills development includes the cost of
         training and time away from other work. During skills development there
         is initially an increase in development and testing time because using
         new skills is often slower. In addition to training on direct
         accessibility issues, organizations that move to different technologies
         in an effort to improve accessibility might incur training costs on the
         new technologies.</dd>
      <dt><strong>Hiring expertise</strong></dt>
      <dd>Many organizations starting Web accessibility efforts hire consultants or employees with accessibility expertise, such as people with
         disabilities to help with testing.</dd>
      <dt><strong>Incorporating accessibility into procedures</strong></dt>
      <dd>Incorporating accessibility into protocols and procedures, such as
         quality assurance (QA) testing and usability evaluation, takes personnel
         time.</dd>
      <dt><strong>Assessing existing website accessibility</strong></dt>
      <dd>When fixing an existing site, assessing (auditing or evaluating)
         existing website accessibility is a common initial cost. The
         assessment cost is either a direct expense if using a service outside
         the organization, or a personnel cost if using internal resources.
         Making accessibility improvements in existing websites is almost
         always more costly in personnel time than incorporating accessibility during initial development or redesign.</dd>
   </dl>
   <p>Potential <em>initial capital expenditures</em> related to Web accessibility
      include:</p>
   <dl>
      <dt><strong>Purchasing accessibility evaluation tools</strong></dt>
      <dd><a href="/WAI/ER/tools/" shape="rect">Web accessibility evaluation
         tools</a> are software or online services that help identify accessibility problems.
         While these are not a required expense, many organizations find that
         using accessibility evaluation tools saves time and money.</dd>
      <dt><strong>Purchasing assistive technologies</strong></dt>
      <dd>Some people with disabilities use <a href="http://www.w3.org/WAI/eval/users.html#at" shape="rect">assistive
         technologies</a> to access the Web. Developers,
         designers, and evaluators sometimes use assistive technologies
         throughout the development process to understand how people interact
         with web pages and to test web pages. In many cases it is effective to use free assistive technologies for initial testing and to use people with disabilities for more thorough testing.</dd>
      <dt><strong>Upgrading technologies and tools</strong></dt>
      <dd>Sometimes organizations determine that it will be more  efficient to implement accessibility with different technologies. For example, some organizations upgrade or change to
         a content management system (CMS) or other authoring tool  that better supports production of accessible
         websites. (<a href="/WAI/impl/software.html" shape="rect">Selecting and Using
            Authoring Tools for Web Accessibility</a> includes guidance on
         evaluating and selecting authoring tools.)</dd>
   </dl>
   <h3><a name="on-going" id="on-going" shape="rect">On-Going Costs</a></h3>
   <p>While most of the costs of Web accessibility are associated with
      initial accessibility efforts, there are some on-going costs to making websites accessible, including:</p>
   <dl>
      <dt><strong>Additional development</strong></dt>
      <dd>Once an organization is experienced in accessibility, incorporating
         accessibility in a web project often adds negligible extra cost.
         However, for some types of accessible content additional development
         cost or time is required, for example providing transcripts for podcasts and captions for multimedia.</dd>
      <dt><strong>Additional testing</strong></dt>
      <dd class="listintro">Organizations committed to providing usable, accessible sites will
         likely increase testing time. Accessibility testing activities include:
         <ul>
               <li>Testing design ideas and early prototypes with users with disabilities and older users, and with assistive
                  technologies</li>
            <li>Reviewing early prototypes and final web pages for conformance to
               accessibility standards and guidelines</li>
            <li>Quality assurance testing of specific accessibility issues, such
               as checking for missing alternative text for images</li>
         </ul>
         The information in the WAI resource <a href="/WAI/eval/" shape="rect">Evaluating Web
            Sites for Accessibility</a> can help in determining the potential costs of additional testing. </dd>
   </dl>
   <h2><a name="decreasing" id="decreasing" shape="rect">Decreasing Costs</a></h2>
   <p class="listintro">There are several things organizations can do to decrease the cost of
      implementing accessibility, including the following:</p>
   <dl>
      <dt><strong>Incorporating accessibility from the beginning</strong></dt>
      <dd>Incorporating accessibility from the beginning of a website
         development or redesign process is almost always significantly easier,
         less expensive, and more effective than making accessibility
         improvements to an existing site later as a separate project.</dd>
      <dt><strong>Sharing accessibility resources</strong></dt>
      <dd>Most costs associated with Web accessibility are investments at an
         organization level, rather than costs required for each
         web development project. In many organizations the initial costs can be
         shared among multiple projects, rather repeated for each project.</dd>
      <dt><strong>Using authoring tools that support accessibility</strong></dt>
      <dd>Using authoring tools, such content management systems (CMS), that support accessibility and meet <a href="http://www.w3.org/WAI/intro/atag.php" shape="rect">Authoring Tool Accessibility Guidelines (ATAG)</a> can help decrease the time and effort needed to make websites accessible.</dd>
      <dt><strong>Addressing accessibility and mobile together</strong></dt>
      <dd>Designers and developers can more efficiently develop websites (including applications) that work well by people using mobile devices and by people with disabilities, when  they understand the significant overlap between the two and design for both together. The overlap between the barriers and solutions is introduced in <a href="http://www.w3.org/WAI/mobile/overlap" shape="rect">Web Content Accessibility and Mobile Web</a>.<br clear="none" />
      </dd>
   </dl>
   <p>[ <a href="tech.html" shape="rect"><strong>Previous Page</strong> - Technical Factors</a> | <a href="#top" shape="rect">Top of Page</a> |<strong> <a href="pol.html" shape="rect">Next Page</a></strong><a href="pol.html" shape="rect"> - Legal and Policy Factors</a> ]</p>
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
