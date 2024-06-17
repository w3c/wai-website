---
title: "Web Content Accessibility and Mobile Web: Making a Website Accessible Both for People with Disabilities and for Mobile Devices"
title_html: "Web Content Accessibility and Mobile Web:<br>Making a Website Accessible Both for People with Disabilities and for Mobile Devices"
lang: en
permalink: /standards-guidelines/wcag-mobile-overlap/
github:
  label: wai-wcag-mob-overlap
doc-note-type: archived
doc-note-message-md: >
  This page introduces how:

  -   The user experience of *people with disabilities using "traditional" computers* is related to the user experience of *all mobile users (particularly those without disabilities)*

  -   Accessibility guidelines and mobile best practices overlap.

  This page was developed in 2008, and most of it is still relevant.

  **For more recent information on *mobile accessibility* — that is, people with disabilities using content on mobile devices, see [www.w3.org/WAI/mobile/](https://www.w3.org/WAI/mobile/)**
footer: >
  <p>
    <strong>Status:</strong>
    Updated 31 August 2012 (first published January 2008 at www.w3.org/WAI/mobile/Overview.html, moved to www.w3.org/WAI/mobile/overlap.html in August 2012)<br>
    Editors: <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> and Justin Thorp. Developed by the Web Accessibility Initiative Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">WAI EOWG</a>) with the Mobile Web Best Practices Working Group (<a href="https://www.w3.org/2005/MWI/BPWG/">MWI BPWG</a>).
  </p>
---

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

Quick links: [Shared Web
Experiences](http://www.w3.org/WAI/mobile/experiences), [Relationship
between MWBP and WCAG](http://www.w3.org/TR/mwbp-wcag/) <br>
Related page: [Mobile Accessibility](http://www.w3.org/WAI/mobile/)

## Introduction

With global mobile phone use at an all time high, there has been a surge
of interest in developing websites that are accessible from a mobile
device. Similarly, making websites accessible for people with
disabilities is an integral part of high quality websites, and in some
cases a legal requirement.

Most Mobile Web specialists don't know about design issues for people
with disabilities. Likewise, most web accessibility specialists don't
know Mobile Web design best practices.

**Websites (including applications) can more efficiently meet both goals
when designers and developers understand the significant overlap between
making a website accessible for a mobile device and for people with
disabilities.** The similarities are introduced below along with
benefits of addressing both and [resources with technical details of the
overlap](#doc_resources).

## Similar Barriers

Users of mobile devices and people with disabilities experience similar
barriers when interacting with web content. For example, mobile phone
users will have a hard time if a website's navigation requires the use
of a mouse because they typically only have an alphanumeric keypad.
Similarly, desktop computer users with a motor disability will have a
hard time using a website if they can't use a mouse. Additionally,
people with disabilities sometimes use mobile devices to access
websites.

## Similar Solutions

The W3C provides guidelines/standards on making accessible content and
best practices for making mobile-friendly content.

-   [Web Content Accessibility Guidelines
    (WCAG)]({{ "/standards-guidelines/wcag/" | relative_url }}) is a guide for making
    websites accessible to people with disabilities.
-   [Mobile Web Best Practices](http://www.w3.org/TR/mobile-bp/) (MWBP)
    is a guide for making websites usable from a mobile device.
-   [Mobile Web Application Best Practices](http://www.w3.org/TR/mwabp/)
    (MWABP) is a guide for developing and delivering web applications on
    mobile devices.

There is an overlap between MWBP, MWABP and WCAG. For example, the MWBP
best practice on [tab order](http://www.w3.org/TR/mobile-bp/#TAB_ORDER)
("Create a logical order through links, form controls and objects")
corresponds with the WCAG 2.0 success criteria on [focus
order](http://www.w3.org/TR/WCAG20/#navigation-mechanisms-focus-order)
("...focusable components receive focus in an order that preserves
meaning and operability").

## Doing Both - Designing for Mobile and for Accessibility

Following these two guidelines makes your web content more accessible to
everyone regardless of situation, environment, or device. Designing to
the guidelines together, instead of separately, can make the process
more efficient — especially when considered [early in the
project]({{ "/planning/involving-users/" | relative_url }}).

Websites that already meet WCAG or MWBP are already well on the way to
meeting the other.

Understanding the overlap also strengthens the business case for
adopting WCAG or MWBP in a website that already complies with one, or
for adopting both together. See also [Developing a Web Accessibility
Business Case for Your
Organization](http://www.w3.org/WAI/bcase/Overview).

## Resources

The following resources provide a detailed mapping of the overlap
between the barriers and solutions for making websites accessible to
people with disabilities and usable on mobile devices.

-   [**Shared Web Experiences: Barriers Common to Mobile Device Users
    and People with
    Disabilities**](http://www.w3.org/WAI/mobile/experiences) lists web
    interaction that is similar by a user with a disability and by a
    user with a mobile device. It links to recommendations
    for designing web content without these barriers from WCAG, MWBP,
    and MWABP.
-   [**Relationship between Mobile Web Best Practices (MWBP) and Web
    Content Accessibility Guidelines
    (WCAG)**](http://www.w3.org/TR/mwbp-wcag/) includes the following
    pages:
    -   [**From MWBP to WCAG
        2.0**](http://www.w3.org/TR/mwbp-wcag/mwbp-wcag20.html)
        and [From MWBP to WCAG
        1.0](http://www.w3.org/TR/mwbp-wcag/mwbp-wcag10.html) are
        designed for those who already know MWBP and want to learn how
        they relate to the Web Content Accessibility Guidelines (WCAG).
    -   [**From WCAG 2.0 to
        MWBP**](http://www.w3.org/TR/mwbp-wcag/wcag20-mwbp.html) and
        [From WCAG 1.0 to
        MWBP](http://www.w3.org/TR/mwbp-wcag/wcag10-mwbp.html) are
        designed for those who already know WCAG and want to learn how
        it relates to the Mobile Web Best Practices (MWBP).