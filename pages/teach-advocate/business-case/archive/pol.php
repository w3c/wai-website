---
layout: null
permalink: /business-case/archive/pol.php
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
.add {background-color:#CCFFFF;
}
.os {  position:absolute;
  left: -1000em;
}
.subtract {     background-color:#FFCCCC;
   text-decoration:line-through;
}
.style2 {background-color: #CCFFFF; font-weight: bold; }
EOF;

  $config = [
    "title" => "Legal and Policy Factors in Developing a Web Accessibility Business Case for Your Organization",
    "hmenu" => true,
    "excol" => false,
    "customcss" => $customcss
  ];
  wai_html_head($config);
?>
<?php wai_header($config); ?>
<?php wai_menu(); ?>
    <div id="main"><div id="skipwrapper"><a id="skip" shape="rect">-</a></div>
  <h2 class="no-display">In-Suite Navigation</h2>
  <ul class="hmenu6">
    <li><a href="Overview" shape="rect">Overview</a></li>
    <li><a href="soc" shape="rect">Social Factors</a></li>
    <li><a href="tech" shape="rect">Technical Factors</a></li>
    <li><a href="fin" shape="rect">Financial Factors</a></li>
    <li class="hmenuselection"><a shape="rect">Legal &amp; Policy Factors</a></li>
    <li><a href="resources" shape="rect">Resources</a></li>
  </ul>

  <h1><a name="top" id="top" shape="rect"></a><span style="background-color: #eed009;color: #091832;display: inline-block;padding: 4px 8px;margin-top: -8px;margin-right: 8px;font-size: 14px;font-family: sans-serif;text-transform: uppercase;letter-spacing: 1px;font-weight: 700;vertical-align: middle;border-radius: 3px;">Archived</span>Legal and Policy Factors in Developing a Web Accessibility Business Case for Your Organization</h1>
  <div style="border: 2px solid #eed009;padding: 8px;background-color: #fff;margin-bottom: 20px;">
    <p>This page is part of an older version of <a href="https://www.w3.org/WAI/business-case/">The Business Case for Digital Accessibility</a> and made available here for archival purposes.</p>
  </div>
  <div id="contents">
    <h2>Page Contents</h2>
    <ul>
      <li><a href="#intro" shape="rect">Introduction</a></li>
      <li><a href="#custom" shape="rect">Identifying Legal and Policy Factors for a Specific
Organization</a></li>
      <li><a href="#apply" shape="rect">Determining Applicable Policies</a></li>
      <li><a href="#multiple" shape="rect">Addressing Multiple Standards</a></li>
      <li><a href="#risks" shape="rect">Understanding Risks for Non-Compliance</a></li>
    </ul>
    <!-- end (page) contents (list)-->
  </div>


<h2><a name="intro" id="intro" shape="rect"></a>Introduction</h2>

<p>This page is part of a resource suite that describes the <a href="soc.html" shape="rect"><strong>social</strong></a>, <a href="tech.html" shape="rect"><strong>technical</strong></a>, <a href="fin.html" shape="rect"><strong>financial</strong></a>, and legal and policy factors relevant to <a href="Overview.html" shape="rect">developing a customized business case for Web
accessibility</a> for a specific organization.</p>

<p>Note that the term "policy" is used broadly in this document to refer to
requirements from governments and other organizations in the form of laws,
policies, regulations, standards, guidelines, directives, communications,
orders, or other types of documents, which have different degrees of
authority in different systems.</p>

<p>Legal and policy factors apply differently to specific organizations and
situations. For example, one organization might be required by explicit
government regulations to make its websites accessible, while another
organization follows the Web accessibility policies recommended by its trade
association and required by a partner company.</p>
<p>Many countries are ratifying the <a href="http://www.un.org/disabilities/default.asp?navid=12&amp;pid=150" shape="rect"><acronym title="United Nations">UN</acronym> Convention on the Rights of Persons with Disabilities</a> which specifically includes accessibility of the Internet and other information and communications technology (ICT). Thus, countries that have ratified the Convention might be introducing new "policies, laws and administrative  measures" related to Web accessibility.</p>
<p>This page provides guidance on addressing legal and policy factors in a
    business case for Web accessibility.</p>

<h2><a name="custom" id="custom" shape="rect">Identifying Legal and Policy Factors for a
Specific Organization</a></h2>

<p class="listwithp">The following questions help identify how the legal and policy aspects
of Web accessibility apply to the organization:</p>
<ul>
  <li class="listspaced"><strong>Is the organization required by law or other
    legal mandate to make its website accessible?</strong><br clear="none" />
     If so, the business case can list those laws or mandates that
    the organization is required to meet. See <a href="#apply" shape="rect">Determining
    Applicable Policies</a>.</li>
  <li class="listspaced"><strong>Are there other Web accessibility policies
    the organization should comply with?</strong> <br clear="none" />
    If so, the business case can list those policies that the organization
    should comply with. See <a href="#apply" shape="rect">Determining Applicable
      Policies</a>.</li>
  <li class="listspaced"><strong>Are the requirements adequate to meet the
    needs of people with disabilities and older users?<br clear="none" />
    </strong> If the required guidelines might not adequately meet the needs
    of the website's users with some disabilities, the organization can
    include in its business case additional guidelines it chooses to meet.
    See <a href="#beyond" shape="rect">Considerations Beyond Requirements</a>.</li>
  <li class="listspaced"><strong>Are there specified guidelines, conformance
    levels, and dates for compliance?<br clear="none" />
    </strong> For example, does the policy state that a certain level of
    compliance is required by one date, and a higher level of compliance is
    required by a later date? See <a href="#future" shape="rect">Considerations for the
    Future</a>.</li>
  <li class="listspaced"><strong>Might the org be subject to policies in the future?</strong><br clear="none" />
    For example, requirements might be in development now that will be enforced in the future; or, an organization might expand into countries or other markets
    where Web accessibility policies already apply. See <a href="#future" shape="rect">Considerations for the Future</a>.</li>
  <li class="listspaced"><strong>Does the organization understand the risks
    of failing to provide accessible websites?<br clear="none" />
    </strong> In some cases it is useful to include in a business case the
    negative impact on reputation and potential legal costs associated with
    defending against legal action for not complying with Web accessibility
    requirements. See <a href="#risks" shape="rect">Understanding Risks for
    Non-Compliance</a>.</li>
</ul>

<h2><a name="apply" id="apply" shape="rect">Determining Applicable Policies</a></h2>

<p>Web accessibility requirements can be in the form of policies, laws,
regulations, standards, guidelines, directives, communications, orders, or
other types of documents. <a href="/WAI/Policy/Overview.html" shape="rect">Web Accessibility Laws and Policies</a> lists governmental legislation and related
information for many countries and regions.</p>

<p>Some governments have laws that <strong>specifically</strong> require that
certain types of websites are accessible. For example, some organizations that receive government funding are required to comply with government policies on accessibility. Other governments might not directly specify
Web accessibility, yet the web is <strong>indirectly</strong> covered under
broader anti-discrimination legislation, information and communications
technology (ICT) policy, or other laws or policies. In some countries, organizations' intranets and internal applications are covered by laws requiring accessibility accommodation in the workplace for people with disabilities or by age discrimination legislation with respect to older employees.</p>
<p>An organization might be <strong>required</strong> by non-governmental
policies to make its website accessible, such as a university Web
accessibility policy that requires department websites be accessible.
Sometimes organizations are compelled to meet other
policies, such as policies from trade or industry associations, professional
associations, or standards organizations.</p>

<h3><a name="considerations" id="considerations" shape="rect"></a>Considerations for
Different Types of Organizations</h3>
<ul>
  <li class="listspaced"><a name="gov" id="gov" shape="rect"></a><strong>Government</strong> - Some governmental Web
    accessibility requirements apply only to national government ministries'
    or agencies' websites; some also apply to provincial, state, or local governments.  Some lower levels of government establish requirements independent of national requirements.</li>
  <li class="listspaced"><a name="ed" id="ed" shape="rect"></a><strong>Education</strong>
    - Many educational institutions and organizations are covered by
    governmental requirements for accessibility of web-based educational
    resources and online learning environments. In some countries or regions,
    educational institutions are covered in broad policies along with other
    types of organizations; and in others there are policies specifically
    addressing educational institutions. In addition to governmental
    requirements, some educational institutions and organizations have
    established separate or more extensive requirements for accessibility. In
    some cases there is a specific policy on Web accessibility; in other
    cases Web accessibility is covered under broader accessibility
  policies.</li>
  <li class="listspaced"><a name="organizations" id="organizations" shape="rect"></a><strong>Industry and Non-Governmental (Non-Profit) Organizations (NGO)</strong> - Some
    government policies require industry and NGO websites to be accessible.
    These types of organizations might also choose to follow other Web
    accessibility policies, such as recommendations from trade, industry, or professional associations. Many corporations and NGOs
    establish their own policies for Web accessibility, which are often more
    extensive than those required by government policies. In some cases,
    policies established by corporations or NGOs might also apply to
    subsidiaries, vendors, and others who do business with the
  organization.</li>
</ul>

<h3><a name="beyond" id="beyond" shape="rect">Considerations Beyond Requirements</a></h3>  <p>Sometimes the required standards or minimum conformance level might not
adequately meet the needs of the website's users with  disabilities.
If the needs of people with some disabilities are left out of the required accessibility standards,  an organization might choose to meet additional
guidelines in order to provide sufficient
accessibility.</p>

<h3><a name="future" id="future" shape="rect">Considerations for the Future</a></h3>
  <p>It is almost always significantly easier, more
effective, and less expensive to incorporate accessibility early in website development or
redesign, rather than retrofit existing sites later. Therefore, many
organizations that might be subject to Web accessibility requirements in the
future choose to incorporate Web accessibility as soon as feasible.</p>

<p class="listintro">An organization might be subject to additional Web accessibility requirements
in the future because:</p>
<ul class="listwithp">
  <li>there are policies in development that will apply to the
  organization</li>
  <li>the organization expands into countries or other markets where Web
    accessibility policies apply</li>
</ul>

<p>Some policies reference specific guidelines or standards for Web
accessibility and include dates for compliance. For example, a policy might
state that websites meet <a href="/WAI/intro/wcag.php" shape="rect">Web Content Accessibility Guidelines (WCAG)</a> WCAG 2.0 Level A success criteria by a certain date and Level AA success criteria by a  later date. However, an organization
might determine that it is most efficient to address all the requirements at
the same time.</p>

<h2><a name="multiple" id="multiple" shape="rect">Addressing Multiple Standards</a></h2>
<p>As described above, an organization could be subject to multiple Web
accessibility policies; for example, standards from governments in different
counties where they operate, from a trade association, and from a partner
organization. Addressing different standards is more complex than addressing
a single standard; however, because there is almost always significant
overlap between standards, the work to meet two different standards is not
twice the work to address one standard. In most cases an organization meeting
the more comprehensive standard can easily ensure that other standards are
also met.</p>

  <p>For organizations that are concerned about meeting multiple standards, it
can be effective to include in the business case detail on the overlap
between standards. For example,  include an appendix
that shows the similarities between the different
standards that shows where it is not much more effort to meet multiple standards.</p>

  <!-- @@ perhaps link to stds harmonization doc if appropriate when it is done -->

<h2><a name="risks" id="risks" shape="rect">Understanding Risks for Non-Compliance</a></h2>
<p>Some organizations have faced legal action for not making their websites or intranets and web-based applications accessible. Not complying with accessibility requirements can result in
significant legal costs and have negative impact on the organization's reputation.</p>

<p>Sometimes the legal requirements for an organization might not be clear. <strong>Some organizations determine that it is in their best interest
(financially and otherwise) to make their sites accessible, rather than risk
legal action.</strong></p>

<p>[ <a href="fin.html" shape="rect"><strong>Previous Page</strong> - Financial Factors</a> | <a href="#top" shape="rect">Top of Page</a> ]</p>
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
