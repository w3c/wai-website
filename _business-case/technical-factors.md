---
title: "Technical Factors"
order: 3
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

## Introduction
{:#intro}

This page is part of a resource suite that describes the
[**social**](social-factors.html), technical, [**financial**](financial-factors.html), and
[**legal and policy**](legal-policy-factors.html) factors relevant to [developing a
customized business case for Web accessibility](Overview.html) for a
specific organization.

Implementing Web accessibility solutions often results in improved
technical performance. The relative importance of various technical
benefits of Web accessibility is different for specific organizations
and situations. For example, reducing server load might be most
important to an organization with a large, mission-critical,
high-traffic site; whereas another organization that focuses on
cutting-edge technology might be more interested in interoperability and
being prepared for advanced web technologies. However, these same
technical benefits might not be very important for organizations with
small, simple sites; they might be more interested in simplifying site
maintenance.

This page provides guidance on addressing technical factors in a
business case for Web accessibility.

## Identifying Technical Factors for a Specific Organization
{:#custom}

The following questionshelp identify how the technical aspects of Web
accessibility apply to the organization:

-   **Is the organization starting a new web development or redesign
    effort?**<br>
    If so, the business case can emphasize the technical benefits of
    incorporating accessibility early in the project. See [Reduce Site
    Development and Maintenance Time](#maint).
-   **Does the organization change site content or design frequently?**<br>
    If so, the business case can emphasize that Web accessibility can
    reduce maintenance time. See [Reduce Site Development and
    Maintenance Time](#maint).
-   **How important is it to the organization to reduce bandwidth use or
    server load?**<br>
    For example, if it is important for the organization to reduce the
    need for additional servers or increase the download speed, the
    business case can emphasize these factors. See [Reduce Bandwidth Use
    and Server Load](#server).
-   **Does the organization want its website to work in different
    configurations?**<br>
    For example, if the organization wants its website to work on
    multiple operating systems, web browsers, and devices, the business
    case can show how Web accessibility contributes to interoperability
    and device-independence. See [Enable Content on Different
    Configurations](#repurpose).
-   **How important is it to the organization to be prepared for
    advanced web technologies?**<br>
    For example, if the organization is interested in taking advantage
    of advanced web technologies, this factor can be included in the
    business case. See [Be Prepared for Advanced Web
    Technologies](#advanced).
-   **Does the organization want to have high-quality websites that meet
    standards?**<br>
    If so, the business case can point out the overlap between Web
    accessibility standards and other standards. See [Have High Quality
    Websites](#quality).

See [Web Content Accessibility Guidelines (WCAG)
Overview](/WAI/intro/wcag.php) for more information about the WCAG
references below.

## Reduce Site Development and Maintenance Time
{:#maint}

Incorporating accessibility usually increases site development time
initially, as discussed in [Financial Factors](financial-factors.html). However, in
the long term Web accessibility can reduce the time an organization
spends on site development and maintenance, as follows:

-   **Reduce time and effort needed to change presentation** across a
    site by defining presentation through a style sheet and using proper
    markup (for example, in XHTML) for structure.<br>
    Presentation includes design and style such as font size, font face,
    and background color. If the presentation is defined in an external
    style sheet, it can be changed throughout the site by making the
    change to that one style sheet. However, if the presentation was
    improperly defined throughout the HTML, the presentation markup
    would have to be changed in every instance on every web page.<br>
    (WCAG 2.0 success criteria 1.3.1, 1.4.5, 1.4.9, 2.4.10; WCAG 1.0
    checkpoints 3.1, 3.3, 3.5, 3.6, 3.7, 5.4)
-   **Facilitate efficient debugging** with automated validation tools
    by conforming to standards and identifying a DOCTYPE. Facilitate
    efficient human debugging by simplifying markup and using style
    sheets to define presentation.<br>
    (WCAG 2.0 success criteria 1.3.1, 4.1.1, 4.1.2; WCAG 1.0
    checkpoints 3.2, 3.3, 11.1, 11.2)
-   **Reduce redesign and translation time and skills** needed by using
    standard markup and style sheets to style and format text, instead
    of using bitmap images of text or math.<br>
    Site designers often use bitmap images for stylized text. In such
    cases, to change or translate text content or style, each image has
    to be manipulated. If instead the text was not in an image and the
    style was provided in a style sheet, then the text can be easily
    changed or translated. To change the design is a simple style sheet
    change instead of restyling images of text.<br>
    (WCAG 2.0 success criteria 1.4.5, 1.4.9; WCAG 1.0 checkpoint
    3.1)
-   **Reduce development and maintenance** by having one accessible
    version of a site, rather than multiple versions, as described in
    "[Enable Content on Different Configurations](#repurpose)" section
    below.

## Reduce Bandwidth Use and Server Load
{:#server}

Web accessibility techniques can reduce the server load, which increases
the download speed and can reduce the need for additional bandwidth or
servers, as follows:

-   **Reduce the size of each page served** by defining presentation in
    style sheets (which are only requested once per session) rather than
    the markup of each page, and by using text rather than bitmap images
    of text.<br>
    (WCAG 2.0 success criteria 1.3.1, 1.4.5, 1.4.9; WCAG 1.0
    checkpoints 3.3, 3.1)
-   **Reduce downloading of large image and multimedia files** by
    including alternative text for images and transcripts for multimedia
    files. For example, this lets users with low bandwidth connections
    browse with images off, and lets users preview the information and
    decide whether or not to download it.<br>
    (WCAG 2.0 success criteria 1.1.1, 1.2.8; WCAG 1.0 checkpoint
    1.1)
-   **Reduce unwanted page downloading, and thus server requests,** by
    providing clear and consistent design, navigation, and links.<br>
    (WCAG 2.0 success criteria 2.4.4, 2.4.9, 2.4.5, 3.2.3, 3.2.4,
    2.4.1, 2.4.6, 3.2.3, 3.2.4; WCAG 1.0 checkpoints 13.1, 13.3, 13.4,
    13.5, 13.6, 13.7, 13.8, 14.3)

## Enable Content on Different Configurations
{:#repurpose}


Many organizations are increasingly interested in web interoperability
and device-independence, such as making their websites work well on
mobile devices. Web accessibility can enable web content to be rendered
and interacted with on different configurations, including different
devices, operating systems, and web browsers, as follows:

-   **Allow users and user agents to access content for different
    configurations, and servers to provide content for different
    configurations** by using current versions of technologies with
    built-in accessibility support such as XHTML, XML, RDF, SMIL, CSS,
    XSL, XSLT, and PNG.<br>
    (WCAG 2.0 success criteria 4.1.1, 4.1.2 and conformance
    requirements 1, 4; WCAG 1.0 checkpoints 11.1, 3.2)
-   **Render styled text across a wide range of configurations** by
    providing information as text and using style sheets to define
    presentation, rather than using bitmap images of text.<br>
    (WCAG 2.0 success criteria 1.3.1, 1.4.1, 1.4.3, 1.4.4, 1.4.5,
    1.4.6; WCAG 1.0 checkpoints 3.1, 3.3)
-   **Facilitate interaction with different input devices** by designing
    for device independence.<br>
    (WCAG 2.0 success criteria 2.1.1, 2.1.2, 2.1.3, 2.4.3, 2.4.7; WCAG
    1.0 checkpoints 6.4, 9.1, 9.2, 9.3, 9.4, 9.5)
-   **Allow users and user agents to request content** in a way that
    suits their capabilities by using markup for structure and style
    sheets for presentation.<br>
    (WCAG 2.0 success criteria 1.3.1, 2.4.10; WCAG 1.0 checkpoint
    3.3)

For a detailed list of how accessibility overlaps mobile design/development, along with links to WCAG success criteria, see [Shared Web Experiences](http://www.w3.org/WAI/mobile/experiences).
{:#mobileexperiences}

## Be Prepared for Advanced Web Technologies
{:#advanced}


Web accessibility can help organizations take advantage of advanced web
technologies and be prepared for future web technologies, for example:

-   **Allow content re-use** by enabling tools to extract and present
    information to users in different modalities.<br>
    (WCAG 2.0 success criteria 1.3.1, 1.4.3, 1.4.4, 1.4.6,
    4.1.2)
-   **Simplify forward migration and backwards-compatibility** by
    defining presentation in a style sheet, using proper markup
    structure, and using the latest standards.<br>
    (WCAG 2.0 success criteria 4.1.1, 1.3.1, 1.4.8, 1.4.4, 1.3.1,
    2.4.10; WCAG 1.0 checkpoints 11.1, 3.2, 3.3, 3.5, 3.6, 3.7,
    5.4)

## Have High Quality Websites
{:#quality}


Some developers and organizations pride themselves on producing high
quality websites that meet technical standards.[Web Content
Accessibility Guidelines (WCAG)](http://www.w3.org/WAI/intro/wcag.php)
and other [accessibility
specifications](http://www.w3.org/WAI/guid-technical-factors.md) from the World
Wide Web Consortium (W3C) Web Accessibility Initiative (WAI) are
widely-recognized international standards. Additional resources
addressing the business case for web standards in general are available
on the Web.