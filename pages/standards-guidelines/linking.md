---
title: Referencing and Linking to WAI Guidelines and Technical Documents
permalink: /standards-guidelines/linking/
last_updated: 2024-03-21
first_published: "11 March 2009"
github:
  label: wai-linking-intro
feedbackmail: wai@w3.org
footer: >
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page provides general guidance on how to reference and link to guidelines and other technical documents. It suggests that you include a link to the overview page. It describes when to include a version number and when not to.

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

## Linking to Overview Pages {#overview}

In most cases, it is best to link to  the Overview page instead of the technical specification because **the Overview page provides an introduction, links to related documents, and the status of revisions in progress**. Overview pages include:

- **WCAG 2 Overview** for Web Content Accessibility Guidelines [https://www.w3.org/WAI/intro/wcag](/standards-guidelines/wcag/)
- **Authoring Tool Accessibility Guidelines (ATAG) Overview** [https://www.w3.org/WAI/intro/atag](/standards-guidelines/atag/)
- **User Agent Accessibility Guidelines (UAAG) Overview** [https://www.w3.org/WAI/intro/uaag](/standards-guidelines/uaag/)
- **WAI-ARIA Overview** for Accessible Rich Internet Applications [https://www.w3.org/WAI/intro/aria](/standards-guidelines/aria/)

## Referencing Guidelines and Other Technical Specifications {#trs}

WAI's technical specifications (WCAG, WAI-ARIA, and the others listed above)  use a "shortname" in the URI (the Web address); for example, "WCAG" and "ATAG" are  shortnames. Specific versions are indicated with a number in the URL. Without a number, you get the latest version.

### Latest completed version

To link to the latest completed version,**do not include a number**. For example:

- Web Content Accessibility Guidelines (WCAG) [https://www.w3.org/TR/WCAG/](https://www.w3.org/TR/WCAG/)
- Authoring Tool Accessibility Guidelines (ATAG) [https://www.w3.org/TR/ATAG/](https://www.w3.org/TR/ATAG/)
- User Agent Accessibility Guidelines (UAAG) [https://www.w3.org/TR/UAAG/](https://www.w3.org/TR/UAAG/)
- Accessible Rich Internet Applications (WAI-ARIA) [https://www.w3.org/TR/wai-aria/](https://www.w3.org/TR/wai-aria/)

**Note:**

- **Links:** The content at these links will change when new versions are published. New versions will  often  change the internal links (called <dfn>fragments</dfn>, <dfn>targets</dfn>, or <dfn>anchors</dfn>, e.g., "#focus-area").
- **References:** When policies do not include a version number, they can be interpreted to reference the latest version.

### Specific version

We recommend that you reference the latest version <em>without</em> a number as explained above, unless there is a  reason to reference a specific version. To link to a specific version, include the version number, for example:

- Web Content Accessibility Guidelines (WCAG) 2.2 [https://www.w3.org/TR/WCAG22/](https://www.w3.org/TR/WCAG22/)
-  Accessible Rich Internet Applications (WAI-ARIA) 1.2 [https://www.w3.org/TR/wai-aria-1.2/](https://www.w3.org/TR/wai-aria-1.2/)
- Authoring Tool Accessibility Guidelines (ATAG) 2.0 [https://www.w3.org/TR/ATAG20/](https://www.w3.org/TR/ATAG20/)
- User Agent Accessibility Guidelines (UAAG) 2.0 [https://www.w3.org/TR/UAAG20/](https://www.w3.org/TR/UAAG20/)

### Links to the technical specification _and_ the Overview page

Even when linking to the standard, it is usually good to include a link to the Overview page as well. For example:

- [Web Content Accessibility Guidelines (WCAG) 2.2](https://www.w3.org/TR/WCAG22), [WCAG Overview](/standards-guidelines/wcag/)

<div class="fullwidth">
  <h2><a name="wcag" id="wcag"></a>Example: Linking to WCAG</h2>
  <table border="1" cellpadding="10">
    <tbody>
      <tr>
        <th scope="col">URI</th>
        <th scope="col">Use</th>
        <th scope="col">Document linked to:</th>
        <th scope="col">Will the content at this   URI change?</th>
      </tr>
      <tr>
        <th scope="row"><a href="{{ "/standards-guidelines/wcag/" | relative_url }}">www.w3.org/<strong>WAI/intro/wcag</strong></a></th>
        <td>For most links about WCAG</td>
        <td>WCAG Overview</td>
        <td><strong>Yes, content will be updated with new versions,</strong> but the fragments/targets/anchors will mostly remain stable</td>
      </tr>
      <tr>
        <th scope="row"><a href="https://www.w3.org/TR/WCAG/">www.w3.org/TR/<strong>WCAG</strong>/</a></th>
        <td>For links to the latest version of the WCAG standard</td>
        <td>The latest version of WCAG</td>
        <td><strong>Yes, content will change when there are new versions, and fragments/targets/anchors may also change</strong></td>
      </tr>
      <tr>
        <th scope="row"><a href="https://www.w3.org/TR/WCAG22/">www.w3.org/TR/<strong>WCAG22</strong>/</a></th>
        <td>For links specifically to Version <strong>2.2</strong> of the WCAG technical
          specification, and not subsequent versions</td>
        <td>WCAG Version <strong>2.2</strong></td>
        <td>No</td>
      </tr>
    </tbody>
  </table>
</div>

**For more formal guidance on referring to WCAG, see [How to Refer to WCAG from Other Documents](https://www.w3.org/WAI/WCAG22/Understanding/refer-to-wcag).**

## Linking to Techniques, Understanding Documents, and Other "Notes" {#notes}

While the standards listed above will not change once they are completed, most of the the supporting  material that is advisory will be updated. Supporting technical material is usually published as WAI Resources. This includes:

- Understanding WCAG [https://www.w3.org/WAI/WCAG22/Understanding/](https://www.w3.org/WAI/WCAG22/Understanding/)
- Techniques for WCAG [https://www.w3.org/WAI/WCAG22/Techniques/](https://www.w3.org/WAI/WCAG22/Techniques/)
- <abbr title="Accessible Rich Internet Applications">ARIA</abbr> Authoring Practices Guide (APG) [https://www.w3.org/WAI/ARIA/apg/](https://www.w3.org/WAI/ARIA/apg/)

**The content at these URIs will change when they are updated.** In most cases, you should not include numbers in these links, so that your links provide the latest information and best practices.

<!-- 
<h3>Stable "dated URIs"</h3>
<p>In rare cases when you want to link to specific information in a Technique or other Note, **and not the latest information**, use the &quot;dated URI&quot; that is listed at the top of the main web page under "This version:". For example:</p>
<blockquote>The <code>&lt;a href="https://www.w3.org/TR/2008/NOTE-WCAG20-TECHS-20081211/"&gt;</code>Techniques for WCAG 2.0 published 11 December 2008<code>&lt;/a&gt;</code> states that "The WCAG WG encourages submission of such techniques so they can be considered for inclusion in this document...".</blockquote>
-->

## Referencing WAI-ARIA versus just ARIA {#waiaria)

"WAI-ARIA" is the formal abbreviation for the Accessible Rich Internet Applications documents. It is now acceptable to use just &quot;ARIA&quot; in informal references.

## Additional Information

If you have additional questions, you can contact WAI directly at [wai@w3.org](mailto:wai@w3.org).

Related information is provided in [Version Management in W3C Technical Reports (W3C-member-only link)](https://www.w3.org/2005/05/tr-versions).
