---
title: Evaluation and Report Language (EARL)
permalink: /standards/earl/
---

[TODO: Add quicklinks]

Page Contents
-------------
{:.no_toc}
{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

Introduction
------------
{:#intro.no_toc}

The Evaluation and Report Language (EARL) is a machine-readable format
for expressing test results. The primary motivation for developing EARL
is to facilitate the processing of test results, such as those generated
by web accessibility evaluation tools, using a vendor-neutral and
platform-independent format.

Web authoring tools and quality assurance software can use EARL to
aggregate test results obtained from different testing tools including
web accessibitity evaluation tools, validators, and other types of
content checkers. EARL uses the Resource Description Framework (RDF) to
define the terms for expressing test results.

Who EARL is for {#for}
-----------------------

EARL is primarily intended for developers of:

-   Web accessibility evaluation tools
-   Web quality assurance and validation tools
-   Web authoring and development tools
-   Web content description and labeling frameworks

What is in EARL 1.0 {#whatis}
------------------------------

EARL is an RDF vocabulary, the terms of which are defined by the
following specifications:

-   [Evaluation And Report Language (EARL) 1.0 Schema](http://www.w3.org/TR/EARL10-Schema/) -
    Last Call Working Draft 10 May 2011 - defines the core schema for
    EARL. It is planned to become a W3C Web standard, called a *W3C
    Recommendation.*
-   [Developer Guide for Evaluation And Report Language (EARL) 1.0
   ](http://www.w3.org/TR/EARL10-Guide/) -
    Working Draft 10 May 2011 - describes the motivations for EARL and
    provide a tutorial introduction on how to use the terms. It is
    planned to become a *W3C Note.*
-   [HTTP Vocabulary in RDF 1.0](http://www.w3.org/TR/HTTP-in-RDF10/) -
    Working Draft 10 May 2011 - provides terms to record HTTP exchanges
    between a client and a server in RDF. It is planned to become a *W3C
    Note.*
-   [Representing Content in RDF 1.0](http://www.w3.org/TR/Content-in-RDF10/) -
    Working Draft 10 May 2011 - provides terms to represent content
    (such as HTTP body entities) in RDF. It is planned to become a *W3C
    Note.*
-   [Pointer Methods in RDF 1.0](http://www.w3.org/TR/Pointers-in-RDF10/) -
    Working Draft 10 May 2011 - provides terms for representing
    pointers - entities that permit identifying a portion or segment of
    a piece of content. It is planned to become a *W3C Note.*
-   [Requirements for the Evaluation and Report Language (EARL) 1.0](http://www.w3.org/TR/EARL10-Requirements/) -
    Working Draft 29 October 2009 - describes the requirements for the
    scope, design, and features of EARL.

The difference between W3C Recommendations and W3C Notes are described
in [How WAI Develops Accessibility Guidelines through the W3C
Process](http://www.w3.org/WAI/intro/w3c-process).

EARL 1.0 reuses other RDF terms such as those provided by the [Dublin
Core Metadata Initiative (DCMI)](http://www.dublincore.org/) and the
[Friend Of A Friend (FOAF)](http://www.foaf-project.org/) project. EARL
terms can also be reused for other purposes, such as for content
description and content labeling.

What is the status of EARL 1.0 {#status}
-----------------------------------------

On 10 May 2011 ERT WG published EARL 1.0 Schema as a Last Call Working
Draft. This Last Call publication is accompanied by Working Draft
publications of the remaining four EARL 1.0 specifications. ERT WG
believes to have addressed all comments received so far and is looking
for final feedback, especially on the EARL 1.0 Schema document. The
"Status of this Document" sections of the respective publications
includes specific questions and guidance for providing comments. The
review period for this series of publications ends on **10 June 2011**,
after which ERT WG will assess the next steps.

The [ERT WG Charter](http://www.w3.org/WAI/ER/charter4) lists the
deliverables and milestones that the Working Group expects to
accomplish, see also [How WAI Develops Accessibility Guidelines through
the W3C Process](http://www.w3.org/WAI/intro/w3c-process) for more
information on how these deliverables are accomplished.

### Technical document format

The EARL 1.0 documents follow the W3C format for technical
specifications, which includes several sections at the beginning: links
to different versions, editors, copyright, abstract, and status with the
link to errata and the email address for comments. Most WAI
specifications have a link at the top to the Table of Contents.

Who develops EARL {#wg}
------------------------

EARL documents are developed by the [Evaluation and Repair Tools Working
Group (ERT WG)](/WAI/ER), which is part of the World Wide Web Consortium
([W3C](http://www.w3.org)) Web Accessibility Initiative ([WAI](/WAI/)).
For more information about the Working Group, see the [ERT WG home
page](/WAI/ER/).

The ERT Working Group encourages feedback about EARL by developers and
researchers who have interest in software-supported evaluation and
validation of Web sites. Feedback from developers and researchers who
have interest in Semantic Web technologies for content description,
annotation, and adaptation is also strongly encouraged. Please send
comments to
[public-wai-ert@w3.org](lists.w3.org/Archives/Public/public-wai-ert/), a
publicly archived mailing list.

In addition to feedback on an on-going basis there are formal periods
for public review, which are described in [How WAI Develops
Accessibility Guidelines through the W3C Process: Milestones and
Opportunities to Contribute](http://www.w3.org/WAI/intro/w3c-process).
Opportunities for review and comment of WAI documents are announced on
the [WAI home page](http://www.w3.org/WAI/) and [WAI Interest Group
(IG)](http://www.w3.org/WAI/IG/) mailing list. An email address for
sending comments is included in the "Status of this Document" section.
For more information about the development of EARL or to be added to a
EARL reviewer list of people who want to get direct notification of EARL
documents for review, contact the [ERT WG Team
Contact](../contacts.html#team).

Opportunities for contributing to ERT WG and other WAI work are
introduced in [Participating in WAI](/WAI/participation).
