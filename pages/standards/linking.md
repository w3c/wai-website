---
title: Referencing and Linking to WAI Guidelines and Technical Documents
permalink: /standards/linking/
---

{::options toc_levels="2" /}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

This page provides general guidance on references and links, along with
[WCAG links](#wcag) for policies, tools support, and others. If you have
additional questions, you can contact WAI directly at <wai@w3.org>.

For a complete list of WAI documents, see the [WAI Site
Map](http://www.w3.org/WAI/sitemap) or the [WAI Resources annotated
list](http://www.w3.org/WAI/Resources/).

Linking to Overview Pages {#overview}
-------------------------------------

In many cases, it is best to link to the Overview page instead of the
technical specification because **the Overview page provides an
introduction, links to related documents, and the status of revisions in
progress**. Overview pages include:

-   Authoring Tool Accessibility Guidelines **(ATAG) Overview**
    <br>\<http://www.w3.org/WAI/intro/atag>
-   Evaluation and Report Language **(EARL) Overview**
    <br>\<http://www.w3.org/WAI/intro/earl>
-   User Agent Accessibility Guidelines **(UAAG) Overview**
    <br>\<http://www.w3.org/WAI/intro/uaag>
-   Web Content Accessibility Guidelines **(WCAG) Overview**
    <br>\<http://www.w3.org/WAI/intro/wcag>
-   **WAI-ARIA Overview** for Accessible Rich Internet Applications
    <br>\<http://www.w3.org/WAI/intro/aria>

Referencing Guidelines and Other Technical Specifications {#trs}
-----------------------------------------------------------------

WAI's technical specifications (WCAG, WAI-ARIA, and the others listed
above) use a "shortname" in the URI (the Web address); for example,
"WCAG" and "ATAG" are shortnames. Specific versions are indicated with a
number. Without a number, you get the latest version.

### Latest completed version

To refer to and link to the latest completed version that is the
recommended Web Standard ("W3C Recommendation"), **do not include a
number**, for example:

-   Authoring Tool Accessibility Guidelines (ATAG)
    <br>\<http://www.w3.org/TR/ATAG/>
-   User Agent Accessibility Guidelines (UAAG)
    <br>\<http://www.w3.org/TR/UAAG/>
-   Web Content Accessibility Guidelines (WCAG)
    <br>\<http://www.w3.org/TR/WCAG/>
-   Accessible Rich Internet Applications (WAI-ARIA)
    <br>\<http://www.w3.org/TR/wai-aria/>

**Note:**

-   **Links:** The content at these links will change when new versions
    are published. New versions will usually change the fragments (also
    called targets and anchors, e.g., "\#focus-area").
-   **References:** When policies do not include a number, they can be
    interpreted to reference the latest version.
-   Before the first version is published, the draft is at the URI
    without a number, e.g., as is the case with /wai-aria/ through at
    least mid-2009.

### Specific version

We recommend that you reference the latest version *without* a number as
explained above, unless there is a reason to reference a specific
version. To link to a specific version of a technical specification,
include the version number, for example:

-   Authoring Tool Accessibility Guidelines (ATAG) 1.0<br>
    \<http://www.w3.org/TR/ATAG10/>
-   User Agent Accessibility Guidelines (UAAG) 1.0<br>
    \<http://www.w3.org/TR/UAAG10/>
-   Web Content Accessibility Guidelines (WCAG) 1.0<br>
    \<http://www.w3.org/TR/WCAG10/>
-   Web Content Accessibility Guidelines (WCAG) 2.0<br>
    \<http://www.w3.org/TR/WCAG20/>

### Links to the technical specification *and* the Overview page

Even when referencing the technical specification, it is usually good to
include a link to the Overview page as well, for example:

-   [Web Content Accessibility Guidelines (WCAG)
    2.0](http://www.w3.org/TR/WCAG20), [WCAG
    Overview](http://www.w3.org/WAI/intro/wcag)

Example: Linking to WCAG {#wcag}
---------------------------------

<table border="1" cellpadding="10">
<thead>
    <tr>
      <th scope="col"><abbr title="Universal Resource Identifier">URI</abbr></th>
      <th scope="col">Use</th>
      <th scope="col">Document linked to:</th>
      <th scope="col">Will the content at this URI change?</th>
    </tr>
</thead>
<tbody>
    <tr>
      <th scope="row"><a href="http://www.w3.org/WAI/intro/wcag">www.w3.org/<strong>WAI/intro/wcag</strong></a></th>
      <td>For most links about WCAG</td>
      <td>WCAG Overview</td>
      <td><strong>Yes, content will be updated with new versions,</strong> but the fragments/targets/anchors will mostly remain stable</td>
    </tr>
    <tr>
      <th scope="row"><a href="http://www.w3.org/TR/WCAG/">www.w3.org/TR/<strong>WCAG</strong>/</a></th>
      <td>For links to the latest version of the WCAG technical specification</td>
      <td>The latest version of WCAG</td>
      <td><strong>Yes, content will change when there are new versions, and fragments/targets/anchors may also change</strong></td>
    </tr>

    <tr>
      <th scope="row"><a href="http://www.w3.org/TR/WCAG20/">www.w3.org/TR/<strong>WCAG20</strong>/</a></th>
      <td>For links specifically to Version <strong>2.0</strong> of the WCAG technical
      specification, and not subsequent versions</td>
      <td>WCAG Version <strong>2.0</strong></td>
      <td>No</td>
    </tr>
    <tr>
      <th scope="row"><a href="http://www.w3.org/TR/WCAG10/">www.w3.org/TR/<strong>WCAG10</strong>/</a></th>
      <td>For links specifically to Version <strong>1.0</strong> of the WCAG technical
      specification, and not  subsequent versions</td>
      <td>WCAG Version <strong>1.0</strong></td>
      <td>No</td>
    </tr>
    <tr>
      <th scope="row">www.w3.org/TR/WAI-WEBCONTENT</th>
      <td>Deprecated. We prefer that for WCAG 1.0 you use www.w3.org/TR/WCAG10/</td>
      <td>Deprecated link to WCAG Version 1.0</td>
      <td>No</td>
    </tr>
  </tbody>
</table>

**For more formal guidance on referring to WCAG, see [Appendix A How to
refer to WCAG 2.0 from other
documents](http://www.w3.org/TR/UNDERSTANDING-WCAG20/appendixA.html).**

Linking to Techniques and Other "Notes" {#notes}
-------------------------------------------------

While the technical specifications listed above will not change once
they are completed, the supporting material that is advisory may be
updated. WAI supporting technical material, called "W3C Working Group
Notes", includes:

-   Techniques for ATAG <br>\<http://www.w3.org/TR/ATAG-TECHS/>
-   Techniques for UAAG <br>\<http://www.w3.org/TR/UAAG-TECHS/>
-   Techniques for WCAG <br>\<http://www.w3.org/TR/WCAG-TECHS/>
-   Understanding WCAG <br>\<http://www.w3.org/TR/UNDERSTANDING-WCAG20/>
-   - WAI-ARIA Primer <br>\<http://www.w3.org/TR/wai-aria-primer/>
    - WAI-ARIA Best Practices <br>\<http://www.w3.org/TR/wai-aria-practices/>
    - WAI-ARIA Roadmap <br>\<http://www.w3.org/TR/wai-aria-roadmap/>
    - WAI-ARIA User Agent Implementation Guide
      <br>\<http://www.w3.org/TR/wai-aria-implementation/>

**The content at these URIs will change when the Notes are updated.** In
most cases, you should not include numbers in these links, so that your
links provide the latest information and best practices.

### Stable "dated URIs"

In rare cases where you want to link to specific information in a
Technique or other Note, not the latest information, use the dated URI
that is listed at the top of the main Web page under "This version:".
For example:

> `The
> <a href="http://www.w3.org/TR/2008/NOTE-WCAG20-TECHS-20081211/">Techniques
> for WCAG 2.0 published 11 December 2008</a> states that "The WCAG WG
> encourages submission of such techniques so they can be considered for
> inclusion in this document...".`

Referencing WAI-ARIA versus just ARIA {#waiaria}
-------------------------------------------------

"WAI-ARIA" is the abbreviation for the Accessible Rich Internet
Applications documents. In order to avoid confusion, **please use
"WAI-ARIA" (instead of just "ARIA"), at least in titles, headings, and
on first reference in documentation.**

Additional Information
----------------------

If you have additional questions, you can contact WAI directly at
<wai@w3.org>.

Related information is provided in [Version Management in W3C Technical
Reports (W3C-member-only link)](http://www.w3.org/2005/05/tr-versions).