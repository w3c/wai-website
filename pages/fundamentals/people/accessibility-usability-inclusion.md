---
title: Accessibility, Usability, and Inclusion
lang: en
last_updated: 2016-05-06
first_published: "March 2010"

github:
  label: wai-inclusion

permalink: /fundamentals/accessibility-usability-inclusion/
ref: /fundamentals/accessibility-usability-inclusion/

footer: >
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>, <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>, and <a href="https://www.w3.org/People/kevin">Kevin White</a>. Contributors: Sharron Rush, and <a href="https://www.w3.org/WAI/EO/EOWG-members">EOWG Participants</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>). Previously developed with support of the <a href="/WAI/WAI-AGE/"><abbr>WAI-AGE</abbr> Project</a>.</p>
---

## Introduction
{:.no-display}

*Accessibility, usability, and inclusion* are closely related aspects in creating a web that works for everyone. Their goals, approaches, and guidelines overlap significantly. It is most effective to address them together when designing and developing websites and applications.

There are a few situations when it's important to focus specifically on one aspect. For example, when developing standards and policies. Researching the accessibility needs of people with disabilities helps with developing those.

This article briefly:

-   explains the distinctions and overlaps between accessibility, usability, and inclusive design,
-   encourages increased coordination across research and practice in these disciplines, and,
-   points out the importance of maintaining the focus of accessibility on people with disabilities.

Distinctions and Overlaps {#terms}
-------------------------

**Accessibility**: addresses discriminatory aspects related to equivalent user experience for people with disabilities. Web accessibility means that people with disabilities can equally perceive, understand, navigate, and interact with websites and tools. It also means that they can contribute equally without barriers. For more information, see the [Accessibility introduction](/fundamentals/accessibility-intro/).

**Usability**: is about designing products to be effective, efficient, and satisfying. Usability includes *user experience design*. This may include general aspects that impact everyone and do not disproportionally impact people with disabilities. Usability practice and research often does not sufficiently address the needs of people with disabilities.

**Inclusion**: is about diversity, and ensuring involvement of everyone to the greatest extent possible. In some regions this is also referred to as *universal design* and *design for all*.  It addresses a broad range of issues including:

* accessibility for people with disabilities;
* access to and quality of hardware, software, and Internet connectivity;
* computer literacy and skills;
* economic situation;
* education;
* geographic location;
* culture;
* age, including older and younger people;
* and language.

### Accessibility and Usability {#accessible-usable}

Accessibility primarily focuses on people with disabilities. Many accessibility requirements improve usability for everyone, especially in limiting situations. For example, providing sufficient contrast benefits people using the web on a mobile device in bright sunlight or in a dark room. Captions benefit people in noisy and in quiet environments. Some people have age-related functional limitations, and may not identify these as "disability". Accessibility addresses these situations too.

Accessibility includes:

-   **Requirements that are technical and relate to the underlying code rather than to the visual appearance**. For example, they ensure that websites work well with assistive technologies. This includes screen readers that read aloud content, and screen magnifiers that enlarge content. Voice recognition software used to input text is another form of assistive technology.  These aspects are typically not a focus of usability research and practice.
-   **Requirements that relate to user interaction and visual design**. Inadequate design can cause significant barriers for people with disabilities. That is why they are included. For example, understandable instructions and feedback for website forms and applications is good usability. They also help people with cognitive and learning disabilities. Without such requirements, some people with disabilities may be excluded from using the Web.

There is a significant overlap between accessibility and usability. [ISO 9241-11 {% include_cached external.html %}](https://www.iso.org/iso/catalogue_detail.htm?csnumber=16883), defines usability as:

> The "extent to which a product can be used by specified users to achieve specified goals effectively, efficiently and with satisfaction in a specified context of use".

This could address accessibility ***when***:

* "specified users" includes people with a range of disabilities, and
* "specified context of use" includes accessibility considerations such as assistive technologies.

But usability practice and research often does not consider the needs of people with disabilities.

### Accessibility and Inclusion {#inclusive-design}

Several accessibility requirements also benefit people and situations that are a focus of inclusive design. For example, [Web Accessibility
Benefits People With and *Without* Disabilities](https://www.w3.org/WAI/bcase/soc#groups) describes accessibility benefits for:

-   people with low literacy or not fluent in the language,
-   people with low bandwidth connections or using older technologies,
-   new and infrequent users, and,
-   [mobile device users](/standards-guidelines/wcag-mobile-overlap/).

However, accessibility focuses on disability and does not try to address broader issues. Other efforts, such as [internationalization](https://www.w3.org/International/), address other inclusion issues. Keeping accessibility focused on disabilities encourages research and development on the specific needs of people with disabilities, and solutions that are optimized for these specific needs.

Accessible Design
-----------------

There are [guidelines, standards, and techniques for web accessibility](/standards-guidelines/), such as the Web Content Accessibility Guidelines ([WCAG](/standards-guidelines/wcag/), which is the international standard [ISO/IEC 40500](https://www.w3.org/blog/2012/10/wcag-20-is-now-also-isoiec-405/).
Yet when designers, developers, and project managers approach accessibility as a checklist to meet these standards, the focus is only on the technical aspects of accessibility. As a result, the human interaction aspect is often lost, and accessibility is not achieved.

Combining accessibility standards and usability processes with real people ensures that web design is technically and functionally usable by people with disabilities. This is referred to as *usable accessibility* or *accessible user experience (UX)*.

### Usable Accessibility

Web designers and developers can use usability processes, methods, and techniques, to address the user interface component of accessibility.
While the considerations of people with disabilities are not always included in common practices, they can be easily integrated into user experience design.

A key aspect is incorporating **real people** in design:

-   Ensuring that everyone involved in web projects understands the basics of [how people with disabilities use the Web](/people-use-web/),
-   [Involving users with disabilities](/planning/involving-users/) early and throughout the design process, and
-   [Involving users in evaluating web accessibility](/test-evaluate/involving-users/).

**Accessibility standards** also have an important role in accessible design. For example, understanding the basic [Accessibility Principles](/fundamentals/accessibility-principles/) and using them for developing and evaluating early prototypes helps the development team provide basic accessibility in the earliest stages.
Addressing accessibility at later stages becomes increasingly difficult.

Also, usability processes and user involvement alone cannot address all accessibility issues. Even large projects cannot cover the diversity of disabilities, adaptive strategies, and assistive technologies.
Accessibility guidelines, standards, and techniques ensure that the wide range of issues are adequately covered.

Conclusion
----------

Accessibility practitioners and researchers can incorporate usability techniques to improve 'usable accessibility'. User experience designers and researchers can incorporate accessibility to make their designs work better for more people in more situations. Addressing accessibility, usability, and inclusion together can more effectively lead to a more accessible, usable, and inclusive web for everyone. Resources to help are linked throughout this page.

For more on this topic, see [The role of accessibility in a universal web {% include_cached external.html %}](https://dspace.mit.edu/handle/1721.1/88013), which:

-   provides a more in-depth exploration of the importance and benefits of accessibility as a distinct discipline, and
-   encourages increased communication and coordination between accessibility, usability, and inclusion research and practice.

