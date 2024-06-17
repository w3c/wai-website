---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: Why Standards Harmonization is Essential to Web Accessibility
lang: en    # Change "en" to the translated-language shortcode
last_updated: 2024-04-25    # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
    label: wai-std-harmonization

permalink: /standards-guidelines/harmonization/ # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/harmonization/   # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:", "Editors:" & "Contributors"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p><strong>Date:</strong> Updated October 2002 (minor updates of links in April 2024 and minor updates in November 2011 to account for WCAG 2.0 publication; otherwise, not edited). An <a href="https://www.w3.org/WAI/EO/Drafts/standards/standards_harmon">incomplete, unapproved draft update</a> of this document is available.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Brewer">Judy Brewer</a>.  Contributors:  <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed with support from <a href="https://www.w3.org/WAI/TIES/"><acronym title="Web Accessibility Initiative: Training, Implementation, Education, Support">WAI-TIES</acronym></a>, a project of the European Commission <acronym title="Information Society Technologies">IST</acronym> Programme.</p>

---

{::nomarkdown}
{% include box.html type="start" h="2" title="Abstract" class="full" %}
{:/}

This document explains the key role that harmonization of standards plays in increasing the accessibility of the Web for people with disabilities. It examines how adoption of a consistent set of international technical standards, the World Wide Web Consortium's (W3C) Web Accessibility Initiative (WAI) guidelines for Web content, authoring tools, browsers and media players can drive more rapid progress on Web accessibility, and make the design and development of accessible Web sites more efficient.

Common standards for Web content accessibility and for authoring tools encourages the development of tools that support production of accessible Web content. Likewise, the adoption of a consistent standard for browser and media player accessibility would improve access to and reinforce the accessibility of Web content, and would help ensure that accessible content will be more available through assistive technologies used by some people with disabilities.

This document introduces the concept of harmonization and causes of fragmentation in the area of Web accessibility standards, and examines the impact of harmonization and fragmentation on Web developers, tool developers, and organizations. It also suggests action steps for promoting Web accessibility standards harmonization.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Overview

In this document **"standards harmonization"** refers to **the adoption of a consistent  set of** **international** **technical standards for accessibility of:**

-   Web content
-   browsers and media players
-   authoring tools

Around the world there is currently **fragmentation** – **conflicting**, **divergent technical standards** – rather than harmonization of Web accessibility standards. While W3C's Web Content Accessibility Guidelines (WCAG) is the most broadly adopted Web accessibility standard internationally, many countries have developed or are in the process of developing their own versions of technical guidelines or standards.

Furthermore, there is sometimes one version of a guideline or standard at the national level, different versions at the provincial or state level, and yet different versions adopted by commercial, educational, and non-governmental organizations within the same country. For organizations with audiences spanning different regions or economic sectors, simply keeping track of the different requirements can be a challenge.

Harmonization of Web accessibility standards is key to making an accessible Web, because it creates a unified market for authoring tools that produce conformant content. This unified market in turn drives more rapid development of improved authoring tools. Improved authoring tools make it easier to create accessible Web sites, and to repair previously inaccessible sites; for instance, by prompting for accessibility information such as alternative text for graphics, captions for audio, or summaries for data tables. Widespread availability of improved authoring tools can enable accessible design to become the prevailing design mode even for Web developers only minimally aware of the rationale for Web accessibility, or disinclined to learn guidelines and techniques for accessibility.

Standards harmonization also creates a more compelling market for developers of tools used to evaluate Web content accessibility. It enables re-use of training and technical assistance resources for Web accessibility across different regions and economic sectors. Standards harmonization enables better access to information through browsers and media players, and better interoperability with specialized technologies that some people with disabilities must rely on. It enables development of information repositories containing accessible, compatible, and re-usable content.

The [World Wide Web Consortium](https://www.w3.org/) (W3C) [Web Accessibility Initiative](https://www.w3.org/WAI/) (WAI) has developed:

-   [Web Content Accessibility Guidelines (WCAG)](/standards-guidelines/wcag/), which describe how to make Web content and Web sites accessible;
-   [Authoring Tool Accessibility Guidelines (ATAG)](/standards-guidelines/atag/), which describe how to make Web authoring tools that produce content conforming to WCAG and that are accessible for people with disabilities;
-   [User Agent Accessibility Guidelines (UAAG)](/standards-guidelines/uaag/), which describe how to make browsers and media players accessible, and how to ensure their interoperability with assistive technologies.

Together these three WAI guidelines provide mutually reinforcing solutions which result in more comprehensive and effective accessibility. W3C/WAI continues to advance these three guidelines by updating and refining them as Web technologies evolve, and is currently developing updated versions of the guidelines.

## Current Situation

Fragmentation of Web accessibility guidelines can impact progress on Web accessibility in various ways:

-   **Changing the wording of individual provisions** in accessibility guidelines often changes the technical meaning of the provisions. This in turn changes what is required to meet a given level of conformance in those guidelines. This can make it more difficult for developers of authoring tools and evaluation tools (which are used to evaluate the accessibility of Web content), as they will then need to support potentially conflicting sets of implementation and evaluation techniques.
-   **Combining two or more different accessibility provisions** may likewise affect the meaning of these provisions. Again, this can change what is required to meet a given level of conformance to accessibility guidelines. As above, this can increase the burden for developers of authoring tools and evaluation tools, which play a key role in facilitating the production and evaluation of accessible Web content.
-   **Omitting or adding accessibility provisions** likewise changes what is required to meet a given level of conformance. This may similarly make it more difficult for developers of authoring tools and evaluation tools to support the resulting reduced or expanded conformance levels.

Various circumstances or beliefs in different countries and organizations can contribute to the fragmentation of Web accessibility standards. For each such factor, or "fragmentation driver," however, there is also a good reason to promote harmonization of standards:

<table>
    <thead>
        <tr>
            <th>Fragmentation Driver</th>
            <th>Reason for Harmonization</th>
        </tr>
    </thead>
  <tbody>
    <tr>
        <td>A restriction on the types of standards that governments can adopt; with a belief that W3C is not an official standards body</td>
        <td>W3C is the leading standards body for the Web industry. Many governments have adopted HTML or XML, and therefore already have mechanisms whereby they can adopt W3C standards.</td>
    </tr>
    <tr>
      <td>A requirement that only standards officially available in local language(s) can be adopted</td>
      <td>W3C now allows the development of authorized translations in local languages through its <a href="https://www.w3.org/2005/02/TranslationPolicy">Policy for Authorized W3C Translations</a>. For example, <a href="https://www.w3.org/WAI/standards-guidelines/wcag/translations/">Authorized Translations of WCAG</a> are available in several languages.</td>
    </tr>
    <tr>
      <td>The belief that only local guidelines can meet the needs of the local disability community</td>
      <td>Disability needs with regard to Web accessibility do not vary significantly from country to country. </td>
    </tr>
    <tr>
      <td>The belief that the needs of people with disabilities outside a country are different or not relevant</td>
      <td>The Web is worldwide. People with disabilities from other countries, with the same needs for accessibility and using the same kinds of assistive technologies, may need access to the Web-based resources of a particular country.</td>
    </tr>
    <tr>
      <td>The belief that W3C/WAI guidelines were developed by a single country</td>
      <td>W3C/WAI guidelines were developed with broad international input, and reflect needs from around the world.</td>
    </tr>
    <tr>
      <td>The belief that development of local guidelines is the best activity in which to invest local funding for Web accessibility</td>
      <td>Development of local guidelines takes scarce resources away from activities where building local capacity is crucial – such as development of education, awareness, training and technical assistance on Web accessibility.</td>
    </tr>
    <tr>
      <td>The belief that it is more practical in the long term to have locally developed guidelines</td>
      <td>Because Web technologies are constantly evolving, ongoing development and maintenance of local guidelines and techniques into the future may be prohibitively resource-intensive.</td>
    </tr>
    <tr>
      <td>The belief that Web accessibility can be more easily achieved through locally developed guidelines</td>
      <td>Web accessibility can be more easily achieved through increased availability of supporting tools and resources, including authoring tools, evaluation tools, browsers, media players, and training and technical resources. These tools and resources develop more rapidly when there is a unified market around a consistent international set of Web accessibility standards. </td>
    </tr>
  </tbody>
</table>


## Consequences

### Web Development {#webdev}

For Web developers using today's authoring tools, development of accessible Web sites first requires an awareness of the need for Web accessibility, then a deliberate effort to apply WCAG. It may require working around features of authoring tools that make it hard to build accessible Web sites. For instance, some authoring tools still produce non-standard markup, which can be a barrier for accessibility. Authoring tools that conform to ATAG provide built-in support for production of accessible Web sites.

When Web developers develop accessible Web sites using today's authoring tools, they may need to work around inconsistent support of Web standards in browsers and media players. For instance, inconsistent initial support in browsers for Cascading Style Sheet (CSS) features, such as CSS positioning, led many Web developers to rely on less accessible design solutions for layout for many years. Browsers and media players that conformed to UAAG would provide reliable support for accessibility features, making the jobs of Web developers much easier.

Web developers must already learn a variety of Web technologies and tools in order to be competitive in their field. Harmonization of Web accessibility standards enables Web developers to learn one consistent set of guidelines and implementation techniques, rather than needing to learn many different guidelines; and it allows them to re-use training and technical assistance resources among a broader Web community.

### Authoring Tools {#auth}

Increased availability of authoring tools conforming to the Authoring Tool Accessibility Guidelines (ATAG) is key to making the Web accessible because, with such tools, Web content developers could more easily and more automatically create accessible Web sites.

Authoring tool developers face competing priorities when deciding which features to build into their software. Product managers' decisions with regard to which features are included in product releases are frequently based on the extent of demand for a given set of features throughout their customer base. Harmonized standards mean a more unified customer demand. This strengthens the business case for accessibility for authoring tool developers and can tip the balance towards implementation of more accessibility features in their products. This, in turn, means more rapid availability of authoring tools with features supporting production of accessible content.

### Evaluation Tools {#evaldev}

Developers of evaluation tools are also impacted by fragmented standards, as these can delay, and/or increase the development cost, of the evaluation tools. Time needed to implement evaluation tests for conflicting versions of guidelines could otherwise be used to improve evaluation tools by increasing their usability or accuracy.

Harmonized Web accessibility standards would allow developers of accessibility evaluation tools to concentrate their efforts on implementing one set of evaluation tests, rather than multiple tests for overlapping or conflicting guidelines and standards in different regions or economic sectors. Improved evaluation tools enable more people to test Web sites more reliably, and help ensure more accessible Web sites.

### Organizations {#orgdev}

When there is fragmentation of standards, organizations that have audiences spanning different geographic regions, countries, or economic sectors must keep track of multiple sets of requirements. Such organizations may need to provide additional authoring tools, evaluation tools, training resources and technical assistance for their Web developers. This can divert resources from the actual development work needed to ensure accessible Web sites. The increase in cost and effort resulting from fragmented standards may consequently make it more difficult to make a convincing business case for accessibility within the organization.

Harmonized Web accessibility standards, on the other hand, allow organizations to re-use authoring and evaluation tools, training, and technical assistance resources throughout the organization, thereby achieving more cost-effective accessibility solutions.

### Browsers, Media Players, and Assistive Technologies {#browsers}

The harmonization of Web accessibility standards is also a concern with regard to browsers and media players. Conflicting standards for browser accessibility can slow implementation of accessibility support. Browsers and media players' lack of conformance to the User Agent Accessibility Guidelines (UAAG) makes it harder for people with disabilities to access content on Web sites, and even to find and use the accessibility features that are already incorporated in some browsers and media players.

Some of today's browsers and media players do not provide access to certain kinds of accessibility information that a Web content developer may have included in a Web site; for instance, long descriptions of complex visuals such as maps and graphs, or summaries of information in data tables. UAAG describes how browsers and media players can enable access to such information.

UAAG also describes requirements for browsers and media players that can work smoothly with assistive technologies, which some people with disabilities use, such as screen readers, screen magnifiers, and voice recognition software.

Implementation of accessibility standards in browsers and authoring tools is mutually reinforcing. Once browser developers implement Web accessibility features, authoring tool developers have more reason to provide authoring support for those features. For instance, once browsers provide access to summaries of data tables, authoring tool developers then have a stronger rationale to provide a means for content developers to add summaries to tables. Similarly, browser developers are influenced by what authoring tools support, and are more likely to implement accessibility features once they know that authoring tools will provide the relevant authoring support.

### Information Repositories {#repos}

Online information repositories allow the gathering and storing of content for re-use in a variety of ways, including the creation of online learning modules. If the content in an information repository conforms to a consistent accessibility standard, then that content can be more easily shared among an unlimited number of users. It can be re-purposed and personalized according to user profiles, which may include information on preferred learning styles and the accessibility requirements of users with disabilities. With harmonized standards for accessibility of content in information repositories, educators and learners are able to freely transform shared resources according to user needs.

## Action Steps

W3C continues to update and refine the WAI guidelines, supporting techniques, and other resources to keep pace with evolving Web technologies. The following steps can increase the international harmonization of Web accessibility standards, and help lead more rapidly to an accessible Web:

-   Participate in development of updated WAI guidelines and support material by reviewing and commenting on drafts, providing feedback during implementation trials, and/or participating in WAI Working Groups. *(See [[Participating in WAI]](/about/participating))*
-   Promote awareness among policy-makers, standards developers, technology developers, and disability communities of the strategic importance of standards harmonization towards achieving an accessible Web.
-   Ensure that developers of authoring tools, browsers, and media players are aware of the need for ATAG- and UAAG- conformant tools, and aware of how implementation of ATAG and UAAG can improve interoperability with assistive technologies and accelerate overall progress on Web accessibility.
-   For organizations which currently have guidelines that diverge from international standards, consider establishing mechanisms for rapid review and potential transition to the latest version of WCAG.
-   Assist in preparing authorized translations of WAI guidelines according to W3C's policy for authorized translations.
-   Redirect energies from the development of divergent standards to promoting awareness and providing implementation support for Web accessibility.

## Related Resources

For information on W3C/WAI guidelines and techniques, including versions under development, see [[W3C Accessibility Standards Overview]](/standards-guidelines/).

For examples of how to reference a consistent set of international Web accessibility standards within diverse kinds of governmental and organizational laws and policies, in order to promote standards harmonization, see [[Developing Organizational Policies for Web Accessibility]](/planning/org-policies/).
