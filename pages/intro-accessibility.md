---
title: Introduction to Accessibility
permalink: /fundamentals/accessibility-intro/
---

> “The power of the Web is in its universality.<br>
> Access by everyone regardless of disability is an essential aspect.”<br>
> **Tim Berners-Lee, W3C Director and inventor of the World Wide
> Web**

The Web is fundamentally designed to work for all people, whatever their
hardware, software, language, culture, location, or physical or mental
ability. When the Web meets this goal, it is accessible to people with a
diverse range of hearing, movement, sight, and cognitive ability.

Thus **the impact of disability is radically changed on the Web because
the Web removes barriers** to communication and interaction that many
people face in the physical world. However, when websites, web
technologies, or web tools are badly designed, they can create barriers
that exclude people from using the Web.

The mission of the [Web Accessibility Initiative (WAI)](#wai) is to lead
the Web to its full potential to be accessible, enabling people with
disabilities to participate equally on the Web.

See below for:

-   [why: the case for web accessibility](#case)
-   [what: examples of web accessibility](#examples)
-   [how: make your website and web tools accessible](#doit)
-   [Web Accessibility Initiative (WAI) at W3C](#wai)
-   [learn more](#learnmore)

Why: The Case for Web Accessibility {#case}
--------------------------------------------

It is essential that the Web be accessible in order to provide equal
access and equal opportunity to people with diverse abilities. Indeed,
the [UN Convention on the Rights of Persons with
Disabilities](http://www.un.org/disabilities/convention/conventionfull.shtml)
recognizes access to information and communications technologies,
including the Web, as **a basic human right**.

**Accessibility supports social inclusion** for people with disabilities
as well as [others](http://www.w3.org/WAI/bcase/soc.html#groups), such
as [older people](http://www.w3.org/WAI/bcase/soc.html#older), people in
rural areas, and people in developing countries.

Accessibility also benefits people without disabilities. The [Web
Accessibility Perspectives
video](https://www.youtube.com/watch?v=3f31oufqFSM) shows examples of
how accessibility is essential for people with disabilities and useful
for everyone in a variety of situations.

**There is also a strong business case for accessibility.**
Accessibility overlaps with other best practices such as [mobile web
design](http://www.w3.org/WAI/mobile/), device independence, multi-modal
interaction, usability, [design for older
users](http://www.w3.org/WAI/bcase/soc.html#older), and [search engine
optimization (SEO)](http://www.w3.org/WAI/bcase/fin.html#seo). Case
studies show that accessible websites have better search results,
reduced maintenance costs, and increased audience reach, among other
benefits. [Developing a Web Accessibility Business Case for Your
Organization](/WAI/bcase/Overview) details the social, technical,
financial, and legal benefits of web accessibility.

What: Examples of Web Accessibility {#examples}
-----------------------------------

Properly designed websites and web tools can be [used by people with
disabilities](http://www.w3.org/WAI/intro/people-use-web.php). However,
currently many sites and tools are developed with accessibility barriers
that make it difficult or impossible for some people to use them. Below
are just a few examples.

### Alternative Text for Images

![image of logo; HTML markup img alt='Web Accessibility Initiative
logo'](http://www.w3.org/WAI/intro/alt-logo.png)

Alt text is the classic example. Images should include *[equivalent
alternative
text](http://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv.html)* in the
markup/code.

If alt text isn't provided for images, the image information is
inaccessible, for example, to people who cannot see and use a screen
reader that reads aloud the information on a page, including the alt
text for the visual image.

When equivalent alt text is provided, the information is available to
people who are blind, as well as to people who turned off images on
their mobile phone to lower bandwidth charges, people in a rural area
with low bandwidth who turned off images to speed download, and others.
It's also available to technologies that cannot see the image, such as
search engines.

### Keyboard Input

![mouse crossed
out](https://www.w3.org/WAI/intro/no-mouse.png)

Some people cannot use a mouse, including many older users with limited
fine motor control. An accessible website does not rely on the mouse; it
provides [all functionality via a
keyboard](http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html).
Then people with disabilities can use [assistive
technologies](http://www.w3.org/WAI/users/involving#at) that mimic the
keyboard, such as speech input.

### Transcripts for Audio

[![example
transcript](http://www.w3.org/WAI/intro/transcript.png)](http://www.w3.org/WAI/highlights/200606wcag2interview.html)

Just as images aren't available to people who can't see, audio files
aren't available to people who can't hear. Providing a text transcript
makes the audio information accessible to people who are deaf or hard of
hearing, as well as to search engines and other technologies that can't
hear.

It's easy and relatively inexpensive for websites to provide
transcripts. There are also [transcription
services](http://www.uiaccess.com/transcripts/transcript_services.html)
that create text transcripts in HTML format.

How: Make Your Website and Web Tools Accessible {#doit}
--------------------------------------------------------

Most of the basics of accessibility are even easier and less expensive
than providing transcripts. However, the proper techniques are poorly
integrated into some web tools, education, and development processes. If
you are new to accessibility, it takes some time and effort to learn the
common issues and solutions. Here are places to start:

-   [Accessibility
    Principles](https://www.w3.org/WAI/intro/people-use-web/principles)
    — introduces accessibility requirements and provides references
    international web accessibility standards.
-   [Easy Checks - A First
    Review](https://www.w3.org/WAI/eval/preliminary) — helps you start
    to test the accessibility of a web page and understand some common
    accessibility barriers.
-   [Tips for Getting
    Started](https://www.w3.org/WAI/gettingstarted/tips/) — introduces
    some basic considerations for designing, writing, and developing for
    web accessibility.

Some accessibility barriers are more complicated to avoid and the
solutions take more development time and effort. W3C WAI provides
extensive resources to help, such as [Understanding WCAG 2.0: A guide to
understanding and implementing Web Content Accessibility Guidelines
2.0](http://www.w3.org/TR/UNDERSTANDING-WCAG20/).

Using [authoring tools that support
accessibility](http://www.w3.org/WAI/impl/software) makes it easier for
website developers. Browsers also play a role in accessibility.
[Essential Components of Web
Accessibility](http://www.w3.org/WAI/intro/components.php) explains the
relationships between the different components of web development and
interaction.

**Accessibility is essential for developers and organizations that want
to create high quality websites and web tools, and not exclude people
from using their products and services.**

Web Accessibility Initiative (WAI) at W3C {#wai}
-------------------------------------------------

The W3C [Web Accessibility Initiative (WAI)](http://www.w3.org/WAI/)
brings together people from industry, disability organizations,
government, and research labs from around the world to [develop
guidelines](http://www.w3.org/WAI/intro/w3c-process.php) and
[resources](http://www.w3.org/WAI/Resources/) to help make the Web
accessible to people with disabilities including auditory, cognitive,
neurological, physical, speech, and visual disabilities.

WAI's coverage of web accessibility includes '[web
content](http://www.w3.org/WAI/intro/wcag.php)' (websites and web
applications), [authoring tools](http://www.w3.org/WAI/intro/atag.php)
(such as content management systems (CMS) and blog software), browsers
and other '[user agents](http://www.w3.org/WAI/intro/uaag.php)', and
[W3C technical specifications](http://www.w3.org/WAI/PF/), including
[WAI-ARIA](http://www.w3.org/WAI/intro/aria.php) for accessible rich
Internet applications.

We invite individuals and organizations to [participate in
WAI](http://www.w3.org/WAI/participation) by implementing, promoting,
and reviewing guidelines; contributing to the [WAI Interest
Group](http://www.w3.org/WAI/IG/); and participating in [Working
Groups](http://www.w3.org/WAI/groups.html).

Learn More {#learnmore}
----------

WAI provides a wide range of resources on different aspects of web
accessibility [standards](https://www.w3.org/WAI/guid-tech),
[education](https://www.w3.org/WAI/train),
[testing/evaluation](https://www.w3.org/WAI/eval), [project management,
and policy](https://www.w3.org/WAI/managing). We encourage you to
explore the [WAI website](http://www.w3.org/WAI/), or look through the
[WAI Resources](http://www.w3.org/WAI/Resources/) list.

Current Status of Specifications {#specifications}
--------------------------------

Learn more about the current status of specifications related to:

-   [Accessibility (All)](/standards/techs/accessibility)
-   [Web Content Accessibility Guidelines (WCAG)](/standards/techs/wcag)
-   [Accessible Rich Internet Applications
    (WAI-ARIA)](/standards/techs/aria)
-   [User Agent Accessibility Guidelines (UAAG)](/standards/techs/uaag)
-   [Authoring Tool Accessibility Guidelines
    (ATAG)](/standards/techs/atag)
-   [Evaluation and Report Language (EARL)](/standards/techs/earl)
-   [IndieUI](/standards/techs/indieui) *\[@@ need to figure out how to
    have this not included in this list\]*
-   [Mobile Accessibility](/standards/techs/mobileaccessibility) *\[@@
    need to figure out how to have this not included in this list\]*

These [W3C Groups](/Consortium/activities) are working on the related
specifications:

-   [Education and Outreach Working Group](http://www.w3.org/WAI/EO/)
-   [Evaluation and Repair Tools Working
    Group](http://www.w3.org/WAI/ER/)
-   [Web Content Accessibility Guidelines Working
    Group](http://www.w3.org/WAI/GL/)
-   [Accessible Rich Internet Applications Working
    Group](http://www.w3.org/WAI/ARIA/)
-   [Digital Publishing Interest Group](http://www.w3.org/dpub/IG/)
-   [Internationalization Working
    Group](http://www.w3.org/International/core/)
-   [SVG Working Group](http://www.w3.org/Graphics/SVG/WG/)
-   [Timed Text Working Group](http://www.w3.org/AudioVideo/TT/)
-   [Web Platform Working Group](http://www.w3.org/WebPlatform/WG/)

Current Status {#current-status}
--------------

-   [Accessibility (All)](/standards/techs/accessibility)
-   [Web Content Accessibility Guidelines (WCAG)](/standards/techs/wcag)
-   [Accessible Rich Internet Applications
    (WAI-ARIA)](/standards/techs/aria)
-   [User Agent Accessibility Guidelines (UAAG)](/standards/techs/uaag)
-   [Authoring Tool Accessibility Guidelines
    (ATAG)](/standards/techs/atag)
-   [Evaluation and Report Language (EARL)](/standards/techs/earl)
-   ~~[IndieUI](/standards/techs/indieui)~~
-   ~~[Mobile Accessibility](/standards/techs/mobileaccessibility)~~


Use It {#use-it}
------

\[@@ what do we want in this section?\]

-   [How People with Disabilities Use the
    Web](http://www.w3.org/WAI/Resources/)
-   [Improving the Accessibility of Your Web
    Site](http://www.w3.org/WAI/impl/improving)
-   [Managing Accessibility](http://www.w3.org/WAI/managing.html)
-   [Evaluating Web Accessibility](http://www.w3.org/WAI/eval/)
-   [More resources…](/WAI/Resources/)