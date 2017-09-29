---
title: Developing Organizational Policies on Web Accessibility
permalink: /plan/org-policies/
date: 2016-05-08
people:
  editorslabel: "Editor"
  editors:
    - name: Kevin White
      url: https://www.w3.org/People/kevin/
    - name: shadi Abou-Zahra
      url: https://www.w3.org/People/Shadi/
  contributors:
    - name: Judy Brewer
      url: https://www.w3.org/People/Brewer/
    - name: Shawn Lawton Henry
      url: https://www.w3.org/People/Shawn/
support:
  - name: WAI-ACT Project, a project of the European Commission IST Programme
    url: http://www.w3.org/WAI/ACT/
---

This guide helps you develop a policy for creating, managing, and
delivering accessible websites. Refer to [Planning and Managing Web
Accessibility](https://www.w3.org/WAI/impl/Overview) to learn about how
such policies form part of a broader approach to implementing
accessibility.

{::options toc_levels="2" /}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}


### Designing a policy {#about}

Your web accessibility policy may be standalone or integrated into other
policies, such as non-discrimination or equal opportunity policies.
Ideally web accessibility should also be reflected in related documents,
such as brand guidelines, coding standards, and project management
frameworks. This helps accessibility to be considered as a core feature
rather than an afterthought.

Your organizational policy may be an internal document and not suitable
for the public. To communicate your effort, consider providing a public
accessibility statement that reflects your policy, goals, and
achievements.

#### Example of simple policy

> ACME Inc. is committed to ensuring that its website is accessible to
people with disabilities. All the pages on our website will meet W3C
WAI's [Web Content Accessibility Guidelines](/TR/WCAG/) 2.0, Level AA
conformance. Any issues should be reported to <accessibility@example.com>.

Reference standards {#reference}
-------------------

Reference specific standards in policy documents to ensure clear
criteria for accessibility.The W3C Web Accessibility Initiative (WAI)
provides a set of accessibility standards that are commonly recognized
by governments and organizations from around the world. These include:

-   **Web Content Accessibility Guidelines (WCAG) 2.0** is applicable to
    all web content and applications, including on mobile, television,
    and other delivery channels. The [WCAG Overview]({% link pages/standards/wcag.md %})
    provides more background.
-   **Authoring Tool Accessibility Guidelines (ATAG) 2.0** is applicable
    for websites that provide users the opportunity to generate content,
    such as adding comments, posting to forums, or uploading images or
    videos. ATAG is also relevant if your organization provides tools,
    such as CMS's, for staff or customers to manage websites and
    content. The [ATAG Overview]({% link pages/standards/atag.md %}) provides more
    background.
-   **User Agent Accessibility Guidelines (UAAG) 2.0** is applicable
    when additional plug-ins, such as media players, are provided to
    deliver content or when custom controls are developed to provide
    non-standard functionality. UAAG may also be relevant where mobile
    applications deliver web content as part of the application, and to
    the procurement process if your organization provides browsers for
    staff. The [UAAG Overview]({% link pages/standards/uaag.md %}) provides more
    background.

### Referencing Approaches

As technologies and standards continually evolve, it is important to
keep policies current. Including accessibility requirements within the
text of policies causes them to become outdated more quickly, and
introduce gaps between current accessibility standards and older
policies. Ideally a policy would reference the W3C/WAI standards, and
define a mechanism to transition to newer versions of the standards when
they become available.

Referencing options are explained in [Referencing Guidelines and Other
Technical Specifications]({% link pages/standards/linking.md %}#trs).

Define conformance levels {#conformance}
-------------------------

W3C WAI guidelines provide three levels of conformance: A, AA, and AAA.
The generally accepted level of conformance in many countries is Level
AA. Selecting a conformance level that is realistically achievable for
your particular organization is critical for the success of your policy.
Once selected, specify what level of conformance is to be achieved for
each referenced standard.

### Examples

#### Simple example of referencing WCAG

> ACME Inc. seeks to make sure our website conforms to W3C WAI
[WCAG](/TR/WCAG20/) 2.0 Level AA.

#### Example of reference to WCAG and ATAG

> At ACME Inc. we seek to ensure all of our websites and web applications,
both customer-facing and for internal use, conform to all Level AA
success criteria of W3C WAI [WCAG 2.0](/TR/WCAG20/). We also aim to
ensure that our authoring tools conform to all Level AA criteria of
[ATAG](/TR/ATAG20/).

Define scope of policy {#scope}
----------------------

Clearly state the scope of your policy, and how it applies to different
parts of the websites in scope. This includes third-party, legacy, and
mobile content and applications provided as part of these websites. Your
policy may apply to websites internal to the organization, such as
intranets, and to websites for external audiences. It also includes the
tools used to create and to access your website.

Note that broader policies, for example for public websites and services
or for access to workplace, may impact your scope considerations.

### Examples

#### Simple example of content scope

> This policy applies to all new, updated, and existing web content on
http://www.acme.inc/ and all content provided internally at
http://intranet.acme.inc/.

Set conformance milestones {#milestones}
--------------------------

For all items in scope of your policy, define clear and measureable
milestones, including dates, by which each will be met. If the policy is
already achieved, then indicate when the content was last reviewed.
Deadlines should be realistic but issues should not be left too long.

In some cases, a phased approach might be appropriate by first quickly
fixing significant accessibility barriers, then implementing fixes for
other issues, for example, as part of a planned maintenance update.
Clearly outline any details of this type of approach in your policy.

### Examples

#### Simple example of conformance milestone

> By February 1, 20XX, ACME Inc's web content will meet WCAG 2.0, Level AA
conformance.

#### Example of staged conformance milestones

> By November 1, 20XX, ACME Inc's websites will meet WCAG 2.0, Level A
conformance; and by May 1, 20XX web content will meet WCAG 2.0, Level AA
conformance.

#### Example of supplier milestone

> By June 1, 20XX, all vendors of content management systems (CMS) used by
ACME Inc's should provide information regarding their plans for ATAG 2.0
conformance in future versions of their software. By June 1, 20XX ACME
Inc. will preferentially purchase ATAG conformant authoring tools.

Consider third-party content {#thirdparty}
----------------------------

Procured or syndicated third-party content needs to be considered as
part of your accessibility policy. This is particularly relevant for
third-party content that provides essential parts of a website. For
example, this could include credit card payment services, video
streaming channels, or online mapping services.

While website owners may not have full control over such content and
services, they are responsible for ensuring accessibility or for
providing accessible alternatives. For example, social media feeds may
need to be monitored or moderated to ensure accessibility. See the WCAG
2.0 conformance requirement for [complete
processes](https://www.w3.org/TR/WCAG20/#cc3) and the concept of
[conforming alternate
version](https://www.w3.org/TR/WCAG20/#conforming-alternate-versiondef)
for more background.

### Examples

#### Example including third-party content scope

> This policy applies to all web content produced or updated by ACME Inc.
In addition, ACME Inc. will ensure third-party content providers are
aware of our web accessibility policy. ACME Inc. will also favor
providers based on their accessibility conformance claims.

Define monitoring and review process {#monitor}
------------------------------------

Progress towards policy goals should be reviewed regularly. Any changes
in timescale or milestones that have been met should be updated in the
policy.

Specify a recommended process and schedule for reviewing all web content
and tools in scope to ensure that the target level of accessibility is
maintained.

Capturing feedback from users who might find accessibility barriers can
help you identify issues that need to be fixed. Your policy should
include information on what mechanisms will be included and how feedback
is to be handled and responded to.

### Examples

#### Example simple review policy

> All areas of the ACME Inc. website will be reviewed annually using the
process described at [Website Accessibility Conformance Evaluation
Methodology](/TR/WCAG-EM/). Reviews are the responsibility of the ICT
department. Accessibility checks will be incorporated into the
publishing workflow for all new content.

#### Example of feedback policy

> Each page of the website will include a link to a form allowing users to
submit feedback on the site; this information will be compiled and
considered during the review process. Any submitted feedback will be
responded to within 48 hours.

Example policies {#examples}
----------------

### Example of simple policy

>  ACME Inc. is committed to ensuring the accessibility of its web content
to people with disabilities. All of the content on our website will meet
W3C WAI's [Web Content Accessibility Guidelines](/TR/WCAG/) 2.0, Level
AA conformance. Any issues should be reported to <accessibility@acme.inc>.

### Comprehensive policies

More comprehensive policies may capture broader information, such as how
the policy might be implemented, who or what departments are
responsible, specific exclusions.

An [example comprehensive policy]({% link pages/plan/develop-org-policies-example.md %}) is provided.

Policy template {#template}
---------------

In the template below, the <mark>[hints]</mark> in brackets are sections
for you to complete.

> <mark>[Organization name]</mark> is committed to ensuring accessibility of
its website and intranet to people with disabilities. New and updated
web content produced by our organization will meet <mark>[link to standard]</mark> <mark>[version number]</mark>, <mark>[level of conformance]</mark>, by <mark>[compliance date]</mark>.
>
> Existing web content produced by our organization will meet our standard
by <mark>[existing content compliance date]</mark>.
>
> Content provided for our site by third-party developers will meet
<mark>[third-party content standard]</mark> <mark>[version number]</mark> by
<mark>[third-party content compliance date]</mark>. This <mark>[does/does not]</mark> include user-generated content.
>
> We aim to ensure that our authoring tools and processes meet
<mark>[authoring tools standard]</mark> <mark>[version number]</mark> by
<mark>[authoring tools compliance date]</mark>. By <mark>[preferential purchasing date]</mark> we will preferentially purchase authoring tools that meet or exceed our web accessibility policy.
>
> This policy will be reviewed <mark>[review period]</mark> on or before the
<mark>[policy review date]</mark>. This policy was last reviewed on
<mark>[last review date]</mark>, by <mark>[reviewer]</mark>.

Next steps: Maintaining your policy {#maintain}
-----------------------------------

If your policy includes milestones and references to particular
standards by version number, then review the policy regularly to ensure
that it is accurate and up-to-date. Any review should check if
milestones have been met, as well as checking if any changes are
required due to new or updated standards.

Consider whether the scope of your policy needs to be adjusted due to
new content or significant changes to the structure of your website.
Changes in authoring tools or processes may also need to be thought
about.

Longer term: Strategic planning {#strategic}
-------------------------------

An accessibility policy is one part of a broader strategic approach to
accessibility. Making accessibility an integral part of your web
development strategy is more cost effective and efficient than
considering it in isolation. There are several things you can do to help
your organization create more accessible websites as standard.

[Planning and Managing Web Accessibility]({% link _planning-and-managing/index.md %}) outlines how to
integrate accessibility throughout your web development. Ensure that
when redesigns or updates are planned, accessibility is included from
the start of the project. Accessibility is much less costly and
time-consuming when tackled at the beginning of a project, rather than
the end.
