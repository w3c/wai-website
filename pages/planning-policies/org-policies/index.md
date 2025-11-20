---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".
title: Developing Organizational Policies on Web Accessibility
nav_title: "Developing an Organizational Policy"
lang: en  # Change "en" to the translated-language shortcode
last_updated: 2016-06-05  # Keep the date of the English version
first_published: "October 2002"

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Translator Name Here" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-org-policies

permalink: /planning/org-policies/  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /planning/org-policies/  # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:", "Editors:" and "Contributors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/#kevin">Kevin White</a> and <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Contributors: <a href="https://www.w3.org/People/Brewer/">Judy Brewer</a>, <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>, and <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Updated with support from <a href="https://www.w3.org/WAI/ACT/"><abbr title="Web Accessibility Initiative - Cooperation Framework for Guidance on Advanced Technologies, Evaluation Methodologies, and Research Agenda Setting to Support eAccessibility">WAI-ACT</abbr></a>, a project of the European Commission <abbr title="Information Society Technologies">IST</abbr> Programme.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page helps you develop a policy for creating, managing, and delivering accessible websites.

To learn about how such policies form part of a broader approach to implementing accessibility, see [Planning and Managing Web
Accessibility](/planning-and-managing/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


### Designing a policy {#about}

Your web accessibility policy may be standalone or integrated into other policies. The accessibility policy could be part of a non-discrimination or equal opportunity policy. Other related documents should also mention web accessibility. For example,  brand guidelines, coding standards, and project management frameworks. This helps considering accessibility as a core feature, rather than an afterthought.

Your organizational policy may not be suitable for the public if it is an internal document. Consider providing a public accessibility statement that reflects your policy, goals, and achievements. This will communicate your efforts towards improving accessibility.

{::nomarkdown}
{% include box.html type="start" title="Example of simple policy" class="example" %}
{:/}

ACME Inc. is committed to ensuring that its website is accessible to people with disabilities. All the pages on our website will meet W3C WAI's [Web Content Accessibility Guidelines](/TR/WCAG/) 2.1,  Level AA conformance. Report any issues to <accessibility@acme.inc>.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Reference standards {#reference}

Reference specific standards in policy documents to ensure clear criteria for accessibility. The W3C Web Accessibility Initiative (WAI) provides a set of accessibility standards that are commonly recognized by governments and organizations from around the world. These include:

-   **Web Content Accessibility Guidelines (WCAG)** applies to all web content and applications. This includes content on mobile, television, and other delivery channels. The [WCAG Overview](/standards-guidelines/wcag/) provides more background.
-   **Authoring Tool Accessibility Guidelines (ATAG)** applies to websites that provide users the opportunity to generate content. For example, adding comments, posting to forums, or uploading images or videos. ATAG is also relevant if your organization provides tools, such as CMS's, for staff or customers to manage websites and content. The [ATAG Overview](/standards-guidelines/atag/) provides more background.
-   **User Agent Accessibility Guidelines (UAAG)** applies when additional plugins are provided to deliver additional content. Media players are a good example of this. UAAG also applies when custom controls are used to provide non-standard functionality. UAAG may also be relevant where mobile applications deliver web content as part of the application. It may also be relevant to the procurement process if your organization provides browsers for staff. The [UAAG Overview](/standards-guidelines/uaag/) provides more background.


### Referencing Approaches

As technologies and standards continually evolve, it is important to
keep policies current. The text of policies that include accessibility requirements tend to quickly become outdated. This introduces gaps between current accessibility standards and older policies. Ideally, a policy would reference the W3C/WAI standards. It should also define a mechanism to transition to newer versions of the standards when they become available.

[Referencing Guidelines and Other Technical Specifications](/standards-guidelines/linking/#trs) Explains options relating to referencing.

## Define conformance levels {#conformance}

W3C WAI guidelines provide three levels of conformance: A, AA, and AAA. The generally accepted level of conformance in many countries is Level AA. It is critical for the success of your policy to select a conformance level you can realistically achieve. Once selected, specify what level of conformance is to be achieved for each referenced standard.

### Examples {#ex1}

{::nomarkdown}
{% include box.html type="start" title="Simple example of referencing WCAG" class="example" %}
{:/}

ACME Inc. seeks to make sure our website conforms to W3C WAI
[WCAG](/TR/WCAG20/) 2.1 Level AA.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Example of reference to WCAG and ATAG" class="example" %}
{:/}

At ACME Inc. we seek to ensure all of our websites and web applications, conform to all Level AA success criteria of W3C WAI [WCAG 2.1](/TR/WCAG21/). This applies to both customer-facing and for internal use. We also aim to ensure that our authoring tools conform to all Level AA criteria of [ATAG](/TR/ATAG/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Define scope of policy {#scope}

Clearly state the scope of your policy, and how it applies to  different parts of the websites in scope. This includes third-party, legacy, and mobile content. It also applies to applications provided as part of these websites. Your policy may apply to websites internal to the organization, such as intranets, and to websites for external audiences. It also includes the tools used to create and to access your website.

Note that broader policies may impact your scope considerations. For example, public websites and services could be different from access to the workplace.

### Examples {#ex2}

{::nomarkdown}
{% include box.html type="start" title="Simple example of content scope" class="example" %}
{:/}

This policy applies to all new, updated, and existing web content on
http://www.acme.inc/ and all content provided internally at
http://intranet.acme.inc/.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Set conformance milestones {#milestones}

For all items in scope of your policy, define clear and measureable
milestones, including dates, by which each will be met. If the policy is already achieved, then say when the content was last reviewed. Deadlines should be realistic but issues should not be left too long.

In some cases, a phased approach might be appropriate. First, quickly fix significant accessibility barriers. Then implement fixes for other issues. You could do this as part of a planned maintenance update. Clearly outline any details of this type of approach in your policy.

### Examples {#ex3}

{::nomarkdown}
{% include box.html type="start" title="Simple example of conformance milestone" class="example" %}
{:/}

By February 1, 20XX, ACME Inc's web content will meet WCAG 2.1, Level AA conformance.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Example of staged conformance milestones" class="example" %}
{:/}

By November 1, 20XX, ACME Inc's websites will meet WCAG 2.1, Level A conformance. By May 1, 20XX web content will meet WCAG 2.1, Level AA conformance.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Example of supplier milestone" class="example" %}
{:/}

By June 1, 20XX, all vendors of content management systems (CMS) used by ACME Inc's should provide information regarding their plans for ATAG 2.0 conformance in future versions of their software. By June 1, 20XX ACME Inc. will preferentially purchase ATAG conformant authoring tools.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Consider third-party content {#thirdparty}

Your accessibility policy needs to consider procured or syndicated third-party content.  This is particularly relevant for third-party content that provides essential parts of a website. For example, this could include credit card payment services, video streaming channels, or online mapping services.

Site owners are responsible for ensuring accessibility or for providing accessible alternatives. This is true even if site owners don't have full control over such content and services. For example, social media feeds may need to be monitored or moderated to ensure accessibility. See the WCAG 2.1 conformance requirement for [complete processes](/TR/WCAG21/#cc3) and the concept of [conforming alternate version](/TR/WCAG21/#conforming-alternate-versiondef) for more background.

### Examples {#ex4}

{::nomarkdown}
{% include box.html type="start" title="Example including third-party content scope" class="example" %}
{:/}

This policy applies to all web content produced or updated by ACME Inc. ACME Inc. will also ensure third-party content providers are aware of our web accessibility policy. ACME Inc. will also favor providers based on their accessibility conformance claims.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Define monitoring and review process {#monitor}

Regularly review progress towards policy goals. Update the policy when there are changes to the timescale or when you meet milestones

To maintain the target level of accessibility, specify a process and schedule to review content and tools in scope.

Feedback from users who might find accessibility barriers can help you identify issues. Your policy should include information on how you will gather feedback. It should also include information on how your organization will handle and respond to feedback.

### Examples {#ex5}

{::nomarkdown}
{% include box.html type="start" title="Example simple review policy" class="example" %}
{:/}

ACME Inc. will review all area of the website every year. We will use the process described at [Website Accessibility Conformance Evaluation Methodology](/TR/WCAG-EM/). Reviews are the responsibility of the ICT department. Accessibility checks will be incorporated into the publishing workflow for all new content.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Example of feedback policy" class="example" %}
{:/}

Each page of the website will include a link to a form allowing users to submit feedback on the site. We will compile and consider this information during the review process. We will respond to any feedback within 48 hours of submission.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Example policies {#examples}

{::nomarkdown}
{% include box.html type="start" title="Example of simple policy" class="example" %}
{:/}

ACME Inc. is committed to ensuring the accessibility of its web content to people with disabilities. All of the content on our website will meet W3C WAI's [Web Content Accessibility Guidelines](/TR/WCAG/) 2.1, Level AA conformance. Report any issues to <accessibility@acme.inc>.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Comprehensive policies

More comprehensive policies may capture broader information. For example, how to implement the policy, or who or what departments are responsible, specific exclusions.

An [example comprehensive policy](/planning/org-policies/example/) is provided.

## Policy template {#template}

In the template below, the <mark>[hints]</mark> in brackets are sections for you to complete.

{::nomarkdown}
{% include box.html type="start" title="Example Policy Template" class="example" %}
{:/}

<mark>[Organization name]</mark> is committed to ensuring accessibility of its website and intranet to people with disabilities. New and updated web content produced by our organization will meet <mark>[link to standard]</mark> <mark>[version number]</mark>, <mark>[level of conformance]</mark>, by <mark>[compliance date]</mark>.

Existing web content produced by our organization will meet our standard by <mark>[existing content compliance date]</mark>.

Content provided for our site by third-party developers will meet
<mark>[third-party content standard]</mark> <mark>[version number]</mark> by <mark>[third-party content compliance date]</mark>. This <mark>[does/does not]</mark> include user-generated content.

We aim to ensure that our authoring tools and processes meet
<mark>[authoring tools standard]</mark> <mark>[version number]</mark> by <mark>[authoring tools compliance date]</mark>. By <mark>[preferential purchasing date]</mark> we will preferentially purchase authoring tools that meet or exceed our web accessibility policy.

We will review this policy <mark>[review period]</mark> on or before the <mark>[policy review date]</mark>. This policy was last reviewed on <mark>[last review date]</mark>, by <mark>[reviewer]</mark>.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Next steps: Maintaining your policy {#maintain}

Keep your policy accurate and up to date. Regularly review your policy if it includes milestones.  This is also true if it references particular standards by version number. Reviews should check that milestones have been met. It should also check if changes are required due to new or updated standards.

You may need to adjust your policy's scope if you have new content. You may also need to adjust the scope if you make significant changes to the structure of your website. Changes in authoring tools or processes may also need to be thought about.

## Longer term: Strategic planning {#strategic}

An accessibility policy is one part of a broader strategic approach to accessibility. Making accessibility an integral part of your web development strategy is more cost effective and efficient than considering it in isolation. You can do several things to help your organization create more accessible websites as standard.

[Planning and Managing Web Accessibility](/planning-and-managing/) outlines how to integrate accessibility throughout your web development. When you plan a redesign or updates, include accessibility from the start of the project. Accessibility is cheaper when tackled at the start of a project, rather than at the end. It will also take less time and resources to include accessibility from the get-go.
