---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: User Agent Accessibility Guidelines (UAAG) Overview
nav_title: "UAAG Overview"
lang: en # Change "en" to the translated-language shortcode
last_updated: 2024-03-04

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
    label: wai-intro-uaag

permalink: /standards-guidelines/uaag/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/uaag/    # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: |
  <p><strong>Date:</strong> Updated May 2016. First published July 2005.</p>
  <p><strong>Editors:</strong> Jeanne Spellman, Jim Allan, <a href="https://www.w3.org/People/shawn">Shawn Lawton Henry</a>.</p>
  <p>Developed with input from the User Agent Accessibility Guidelines Working Group (<a href="https://www.w3.org/WAI/UA/">UAWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page introduces User Agent Accessibility Guidelines (UAAG) **for browsers, media players, and other "user agents"**.

Quick links to resources:
* [UAAG 2.0 Working Group Note](https://www.w3.org/TR/UAAG20/)
* [UAAG 2.0 Reference](https://www.w3.org/TR/UAAG20-Reference/)
* [UAAG 2.0 Mobile Examples](https://www.w3.org/TR/2015/NOTE-UAAG20-Reference-20151215/mobile.html)

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

## User Agent Accessibility Guidelines (UAAG)

The User Agent Accessibility Guidelines (UAAG) documents explain how to make user agents accessible to people with disabilities. User agents include browsers, browser extensions, media players, readers and other applications that render web content. Some accessibility needs are better met in the browser than in the web content, such as text customization, preferences, and user interface accessibility. A user agent that follows UAAG 2.0 will improve accessibility through its own user interface and its ability to communicate with other technologies, including assistive technologies (software that some people with disabilities use to meet their requirements). All users, not just users with disabilities, will benefit from user agents that follow UAAG 2.0.

UAAG is part of a series of accessibility guidelines, including the Web Content Accessibility Guidelines (WCAG) and the Authoring Tool Accessibility Guidelines (ATAG). [Essential Components of Web Accessibility](/fundamentals/components/) explains the relationship between the different guidelines.

## Who UAAG is for

UAAG is primarily for developers of Web browsers, browser extensions, media players, readers and other applications that render web content.

UAAG and supporting resources are also intended to meet the needs of many different audiences, including policy makers, managers, and others. For example:

-   People who want to choose user agents that are more accessible can use UAAG to [evaluate user agents](https://www.w3.org/WAI/UA/2001/10/eval)
-   People who want to encourage their existing user agent developer to improve accessibility in future versions can file bugs against UAAG or can refer the user agent vendor to UAAG.

## UAAG 2.0

[UAAG 2.0](https://www.w3.org/TR/UAAG20/) was developed to help make future generations of Web browsers more accessible, to provide alternative information based on the users technology and platform, and to align with WCAG 2.0 and ATAG 2.0. UAAG 2.0 is complete. It provides specific guidance for browsers and other user agents, and reference information for accessibility professionals.

The User Agent Accessibility Guidelines Working Group (UAWG) has identified implementations of the features ("success criteria") of UAAG 2.0, demonstrating that it is possible to implement the UAAG 2.0 success criteria. The threshold for a specification becoming a formal W3C Recommendation ordinarily involves extensive formal testing of implementations of each success criteria across multiple user agents -- which in the case of UAAG 2.0 would have required manual testing of many browser user interfaces. Sufficient testing resources were not available for this level of testing. W3C does not currently plan to advance UAAG 2.0 to Recommendation status. W3C plans to include user agent accessibility considerations in future accessibility guidelines work.

UAAG 2.0 is still needed and relevant, and may be increasingly relevant in the future. The work of the current task forces for Mobile Accessibility and Low Vision Accessibility show the importance of combined consideration of content, user interface, extensions, applications and user agents. While many of the UAAG 2.0 features are supported in individual browsers, there is a need for more consistent and reliable support for accessibility features across all browsers and user agents. UAAG 2.0 provides specific accessibility guidance for user agent developers who want to build a better user experience for all.

**We recommend that you use UAAG 2.0.**

## UAAG 2.0 Supporting Documents

[UAAG 2.0 Reference: Explanations, Examples, and Resources for User Agent Accessibility Guidelines 2.0](https://www.w3.org/TR/UAAG20-Reference/) provides supporting information for those using UAAG 2.0. Each UAAG 2.0 success criterion is explained with the intent of the success criterion, examples, additional resources, where it is typically implemented and what aspect of the user agent it applies to.

The [Mobile Accessibility Examples](https://www.w3.org/TR/2015/NOTE-UAAG20-Reference-20151215/mobile.html) are a subset of the UAAG 2.0 Reference. These examples (or use cases) highlight how UAAG can help people with disabilities who are using mobile devices.

## UAAG 1.0

[User Agent Accessibility Guidelines 1.0](https://www.w3.org/TR/UAAG10/) was approved in December 2002

## Who develops UAAG

UAAG technical documents are developed by the User Agent Accessibility Guidelines Working Group ([UAWG](https://www.w3.org/WAI/UA/)), which is part of the World Wide Web Consortium ([W3C](https://www.w3.org)) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)). For more information about the working group, see the [UAWG page](https://www.w3.org/WAI/UA/). The UAWG is closed as of January 2016.

[How WAI Develops Accessibility Guidelines through the W3C Process: Milestones and Opportunities to Contribute](/standards-guidelines/w3c-process/) describes formal periods for public review. Opportunities for review and comment of WAI documents are announced on the [WAI home page](https://www.w3.org/WAI/) and [WAI Interest Group](/about/groups/waiig/) mailing list. An email address for sending comments is included in the [Status of this Document](https://www.w3.org/TR/UAAG20/#status) section in UAAG 2.0.

Opportunities for contributing to UAAG and other WAI work are introduced in [Participating in WAI](/about/participating/).
