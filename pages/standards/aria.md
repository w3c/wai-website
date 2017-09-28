---
title: Accessible Rich Internet Applications (WAI-ARIA)
permalink: /standards/aria/
---

[TODO: Add quicklinks]

{::options toc_levels="2" /}

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

Introduction
------------
{:#intro.no_toc.no-display}

**WAI-ARIA, the Accessible Rich Internet Applications Suite, defines a
way to make Web content and Web applications more accessible to people
with disabilities. It especially helps with dynamic content and advanced
user interface controls developed with Ajax, HTML, JavaScript, and
related technologies.**

Currently certain functionality used in Web
sites is not available to some users with disabilities, especially
people who rely on screen readers and people who cannot use a mouse.
WAI-ARIA addresses these accessibility challenges, for example, by
defining new ways for functionality to be provided to assistive
technology. With WAI-ARIA, developers can make advanced Web applications
accessible and usable to people with disabilities.

This page describes the problems that WAI-ARIA addresses, and introduces
the WAI-ARIA suite of technical documents. Many of the terms used in
this page – including *Web content*, *user agent*s, and *assistive
technology* – are described in [Introduction to Web
Accessibility](/WAI/intro/accessibility.php) and [Essential Components
of Web Accessibility](/WAI/intro/components). Additional information is
available in:

-   Blog post [Accessible Rich Internet Applications (WAI-ARIA) 1.0 is a
    W3C
    Recommendation](/blog/2014/03/wai-aria-expands-web-accessibility)
-   Press release: [W3C's Accessible Rich Internet Applications
    (WAI-ARIA) 1.0 Expands Accessibility of the Open Web
    Platform](/2014/03/aria.html.en)
-   [WAI-ARIA FAQ](/WAI/aria/faq) answers questions such as: "What
    happens in current and older browsers when WAI-ARIA is implemented?"
    and "As a Web content developer, what should I do with WAI-ARIA
    now?"

Making Ajax and Related Technologies Accessible {#issues}
----------------------------------------------------------

<figure style="float:right">
<img alt="tree control: a list of items with one of the list items expanded to
show a sub-list" src="tree-nav.png">
<figcaption>Figure 1: Tree control</figcaption>
</figure>

Web sites are increasingly using more advanced and complex user
interface controls, such as tree controls for Web site navigation like
the example in Figure 1. To provide an accessible user experience to
people with disabilities, assistive technologies need to be able to
interact with these controls. However, the information that the
assistive technologies need is not available with most current Web
technologies.

Another example of an accessibility barrier is drag-and-drop
functionality that is not available to users who use a keyboard only and
cannot use a mouse. Even relatively simple Web sites can be difficult if
they require an extensive amount of keystrokes to navigate with only a
keyboard.

Many Web applications developed with Ajax (also known as AJAX), DHTML,
and other technologies pose additional accessibility challenges. For
example, if the content of a Web page changes in response to user
actions or time- or event-based updates, that new content may not be
available to some people, such as people who are blind or people with
cognitive disabilities who use a screen reader.

**WAI-ARIA addresses these accessibility challenges by defining how
information about this functionality can be provided to assistive
technology. With WAI-ARIA, an advanced Web application can be made
accessible and usable to people with disabilities.**

### Technical Solutions

More specifically, WAI-ARIA provides a framework for adding attributes
to identify features for user interaction, how they relate to each
other, and their current state. WAI-ARIA describes new navigation
techniques to mark regions and common Web structures as menus, primary
content, secondary content, banner information, and other types of Web
structures. For example, with WAI-ARIA, developers can identify regions
of pages and enable keyboard users to easily move among regions, rather
than having to press Tab many times.

WAI-ARIA also includes technologies to map controls, Ajax live regions,
and events to accessibility application programming interfaces (APIs),
including custom controls used for rich Internet applications. WAI-ARIA
techniques apply to widgets such as buttons, drop-down lists, calendar
functions, tree controls (for example, expandable menus), and others.

WAI-ARIA provides Web authors with the following:

-   Roles to describe the type of widget presented, such as "menu",
    "treeitem", "slider", and "progressmeter"
-   Roles to describe the structure of the Web page, such as headings,
    regions, and tables (grids)
-   Properties to describe the state widgets are in, such as "checked"
    for a check box, or "haspopup" for a menu.
-   Properties to define live regions of a page that are likely to get
    updates (such as stock quotes), as well as an interruption policy
    for those updates—for example, critical updates may be presented in
    an alert dialog box, and incidental updates occur within the page
-   Properties for drag-and-drop that describe drag sources and drop
    targets
-   A way to provide keyboard navigation for the Web objects and events,
    such as those mentioned above

Versions 1.0, 1.1, future {#versions}
-------------------------

[WAI-ARIA 1.0](/TR/wai-aria/) was published as a completed W3C
Recommendation on 20 March 2014.

[WAI-ARIA 1.1](/TR/wai-aria-1.1/) is expected to include only a few
changes from 1.0. [Most potential changes will be considered for
WAI-ARIA 2.0.]{.listintro}

The latest status is updated in the [FAQ: What is the current status of
WAI-ARIA development?](/WAI/aria/faq#update)

### WAI-ARIA 1.1 {#wai-aria-1_1}

The 1.1 version will extend WAI-ARIA 1.0 to provide a small number of
features to complete the HTML + ARIA accessibility model. It is intended
complement HTML 5.1. For 1.1, user agent implementation guidance is
provided as a suite of accessbility API mapping specifications that
describe how to expose semantics of WAI-ARIA and other web content
languages to accessibility APIs.

Published WAI-ARIA 1.1 Working Drafts are as follows:

-   **[WAI-ARIA 1.1](/TR/wai-aria-1.1/) technical specification**,
    provides features to define accessible user interface elements and
    in order to improve the accessibility and interoperability of web
    content and applications. It is primarily for developers of Web
    browsers, assistive technologies, and other user agents; developers
    of Web technologies (technical specifications); and developers of
    accessibility evaluation tools.
-   **[Digital Publishing WAI-ARIA Module 1.0](/TR/dpub-aria-1.0/)**,
    extends WAI-ARIA 1.1 to define an ontology of roles, states, and
    properties specific to digital publishing. It facilitates automated
    processing and accessibility support by providing semantics that are
    not included in base languages such as HTML. It allows authors to
    convey structural information to assistive technologies, and to
    enable semantic navigation, styling, and interactive features used
    by readers.
-   **[Graphics WAI-ARIA Module 1.0](/TR/graphics-aria-1.0/)**, extends
    WAI-ARIA 1.1 to allow an author to express the logical structure of
    the graphic to assistive technologies. Assistive technologies could
    then enable semantic navigation and adapt styling and interactive
    features, to provide an optimal experience for the audience.
-   **[Core Accessibility API Mappings 1.1](/TR/core-aam-1.1/)**,
    describes how user agents should expose semantics of web content
    languages to accessibility APIs. The core module defines support
    that applies across multiple content technologies, including general
    keyboard navigation support and mapping of general-purpose WAI-ARIA
    features; other specifications will extend this for specific
    technologies.
-   **[Accessible Name and Description: Computation and API Mappings
    1.1](/TR/accname-aam-1.1/)**, describes how user agents determine
    names and descriptions of accessible objects from web content
    languages and expose them in accessibility APIs. This allows
    assistive technologies to associate and relay the name or
    description of objects to users.
-   **[Digital Publishing Accessibility API Mappings
    1.0](/TR/dpub-aam-1.0/)**, extends Core Accessibility API Mappings
    1.1 to define how user agents map roles in the Digital Publishing
    WAI-ARIA Module to platform accessibility application programming
    interfaces (APIs).
-   **[HTML Accessibility API Mappings 1.0](/TR/html-aam-1.0/)**,
    extends Core Accessibility API Mappings 1.1 and Accessible Name and
    Description: Computation and API Mappings 1.1 to define how user
    agents map HTML markup to platform accessibility application
    programming interfaces (APIs). Provides HTML-specific guidance for
    how the HTML user agent must respond to keyboard focus, native HTML
    features, and role, state and property attributes provided via
    WAI-ARIA.
-   **[SVG Accessibility API Mappings 1.0](/TR/svg-aam-1.0/)**, extends
    Core Accessibility API Mappings 1.1 to define how user agents map
    SVG markup to platform accessibility application programming
    interfaces (APIs). When supported by user agents, its features allow
    SVG authors to create accessible rich internet applications,
    including charts, graphs, and other drawings. Provides SVG-specific
    guidance for how the SVG user agent must respond to keyboard focus,
    native SVG features, and role, state and property attributes
    provided via WAI-ARIA.
-   **[WAI-ARIA Authoring Practices 1.1](/TR/wai-aria-practices-1.1/)**,
    recommends approaches to help web application developers make
    widgets, navigation, and behaviors accessible using WAI-ARIA roles,
    states, and properties. It describes considerations that might not
    be evident to most authors from the WAI-ARIA specification which is
    oriented primarily at user agent implementers.

Additional documents are expected in this suite, including other
accessibility API mappings and updated authoring guidance. Editors'
drafts under development can be accessed in the [WAI-ARIA GitHub
Repository](https://github.com/w3c/aria/).

### WAI-ARIA 1.0 {#is}

In-progress "Editors' Drafts" of the WAI-ARIA documents are available
from the [Accessible Rich Internet Applications (ARIA) Working
Group](/WAI/ARIA/).

Published WAI-ARIA Working Drafts are as follows:

-   **[WAI-ARIA](/TR/wai-aria/) technical specification**, a completed
    W3C Recommendation Web standard, combines the two
    previously-published WAI-ARIA draft specifications: Roles for
    Accessible Rich Internet Applications (WAI-ARIA Roles) and the
    States and Properties Module for Accessible Rich Internet
    Applications (WAI-ARIA States and Properties). It is primarily for
    developers of Web browsers, assistive technologies, and other user
    agents; developers of Web technologies (technical specifications);
    and developers of accessibility evaluation tools.
-   [**WAI-ARIA User Agent Implementation
    Guide**](/TR/wai-aria-implementation/), a completed W3C
    Recommendation Web standard, describes how browsers and other user
    agents should support WAI-ARIA; specifically, how to expose WAI-ARIA
    features to platform accessibility APIs.
-   [**WAI-ARIA Authoring Practices**](/TR/wai-aria-practices/),
    describes how Web content developers can develop accessible rich
    internet applications using WAI-ARIA. It provides detailed advice
    and examples directed primarily to Web application developers, yet
    also useful to user agent and assistive technology developers. *This
    document has been retired and replaced by WAI-ARIA Authoring
    Practices 1.1.*
-   [**WAI-ARIA Primer**](/TR/wai-aria-primer/) introduces developers to
    the accessibility problems that WAI-ARIA is intended to solve, the
    fundamental concepts, and the technical approach of WAI-ARIA. *This
    document has been retired and replaced by WAI-ARIA Authoring
    Practices 1.1.*
-   **[WAI-ARIA Roadmap](/TR/wai-aria-roadmap/)** defines the path to
    make rich Web content accessible, including steps already taken,
    remaining future steps, and a timeline. Much of the content from
    previous drafts of the Roadmap has been moved to the WAI-ARIA
    Primer.

*W3C Recommendations* and *Working Group Notes* are briefly explained in
[How WAI Develops Accessibility Guidelines through the W3C
Process](/WAI/intro/w3c-process), which also describes milestones in the
W3C Process.

### Technical document format

The WAI-ARIA documents follow the W3C format for technical
specifications which includes several sections at the beginning: links
to different versions, editors, copyright, abstract, and status with the
link to errata and the email address for comments.

Who develops WAI-ARIA {#wg}
----------------------------

The WAI-ARIA technical documents are developed by the Accessible Rich
Internet Applications Working Group ([ARIA WG](/WAI/ARIA/)), which is
part of the World Wide Web Consortium ([W3C](/)) Web Accessibility
Initiative ([WAI](/WAI/)). For more information about the working group,
see the [ARIA WG public page](/WAI/ARIA/).

[How WAI Develops Accessibility Guidelines through the W3C Process:
Milestones and Opportunities to Contribute](/WAI/intro/w3c-process)
describes formal periods for public review. Opportunities for review and
comment of WAI documents are announced on the [WAI home page](/WAI/) and
[WAI Interest Group](/WAI/IG/) mailing list. An email address for
sending comments is included in the "Status of this Document" section.

Opportunities for contributing to WAI-ARIA and other WAI work are
introduced in [Participating in WAI](/WAI/participation).
