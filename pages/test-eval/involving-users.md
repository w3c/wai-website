---
title: "Involving Users in Evaluating Web Accessibility"
permalink: /test-evaluate/involving-users/
---

Introduction
----------------------
{:#intro.no_toc.no-display}

Web accessibility evaluation often focuses on [conformance to
accessibility standards](http://www.w3.org/WAI/eval/conformance) such as
[WCAG](http://www.w3.org/WAI/intro/wcag.php). While conformance is
important, there are many [benefits to evaluating with real
people](http://www.w3.org/WAI/EO/Drafts/involving/Overview.html#why) to
learn how your website or web tool really works for users and to better
understand accessibility issues. Evaluating with users with disabilities
and with older users identifies usability issues that are not discovered
by conformance evaluation alone.

This page is part of a multi-page [Evaluating Web Accessibility resource
suite](/WAI/eval/Overview) that outlines different aspects of evaluating
web accessibility. It is the second of two pages on including users in
web projects; **please read [Including Users in Web Projects for
Better, Easier Accessibility](/WAI/users/involving), which covers
broader issues of including users *early* in website design, tool
development, standards, and other web projects.**

Initial Review {#prelim}
-------------------------

A first step in evaluating web accessibility is reviewing the website to
check for any obvious accessibility problems. The [Preliminary
Review](http://www.w3.org/WAI/eval/preliminary.html) and [Conformance
Evaluation](http://www.w3.org/WAI/eval/conformance.html) pages provide
guidance.

Even web developers with little accessibility knowledge can find some accessibility issues through a
preliminary review. An accessibility expert with first-hand experience
of how people with different disabilities interact with the web can:

-   evaluate accessibility issues for a broad range of users, which
    might not be found by individual users;
-   help fix any known barriers before bringing in users; and
-   focus the evaluation with users on potential areas of concern.

**The initial review identifies any significant accessibility barriers
to fix before evaluating with users. It also helps define what to focus
on for evaluation with users.**

Range of User Evaluation {#range}
----------------------------------

Users with disabilities and older users can be included in a wide range
of evaluation activities, from brief consultations to large-scale
usability studies. **There are many options in between these extremes**:

-   Informal evaluation of a specific accessibility issue can be as
    simple as asking someone you know who uses a screen reader, someone
    with other disabilities, or even your grandmother, to find some data
    in an early draft of a data table that you are developing, observing
    her interaction, and discussing issues.
-   Formal usability testing of a website follows established protocols
    to gather quantitative and qualitative data from representative
    users performing specific tasks. [Formal usability tests can be
    optimized](#ut-access) to focus on accessibility issues.

What type of evaluation you do depends on factors such as the stage in
your project, for example, initial investigation of design ideas,
testing specific areas of prototypes, or reviewing final designs.

**Conducting informal evaluations throughout development is more
effective than only formal usability testing at the end of a project.**

Basics {#basics}
-----------------

In most cases, including users in evaluation involves:

-   getting a few people with disabilities - and depending on your
    target audience, older users,
-   including them throughout the development process to complete sample
    tasks on prototypes so you can see how the different aspects of the
    design and coding could be improved, and
-   discussing accessibility issues with them.

**See [Including Users in Web Projects for Better, Easier
Accessibility](/WAI/users/involving)** for guidance on [getting a range
of users](/WAI/users/involving#diverse) and [users' experience
interacting with the web](/WAI/users/involving#experience)

Just as with any evaluation with users, whether you include novice,
average, or advanced users depends on your target users. For example, if
you are developing a web application to be used by accountants inside a
company, you probably want advanced assistive technology users; for a
public website to apply for disability benefits, you want novice
assistive technology users.

<mark><strong>Caution: Carefully consider all feedback and avoid
assuming that feedback from one person with a disability applies to all
people with disabilities.</strong></mark> A person with a disability does not
necessarily know how other people with the same disability interact with
the web, nor know enough about other disabilities to provide valid
guidance on other accessibility issues.

Note: In addition to finding accessibility problems, evaluating with
users with disabilities usually reveals general usability problems that
impact all users, including those *without* disabilities.

Analyzing Accessibility Issues {#analyz}
-----------------------------------------

Web accessibility depends on several [components of web development and
interaction working together](/WAI/intro/components.php), including web
browsers, assistive technologies (AT), and web content.

Accessibility problems can be caused by one or more different
components. For example, if a user who cannot use a mouse has trouble
with keyboard access, it could be because:

-   the developer did not markup/code the web page properly, or
-   the browser or media player isn't handling the markup properly, or
-   the user's AT isn't handling the markup properly, or
-   the user doesn't know how to use the browser, media player, or AT's
    keyboard access features, or
-   the page is poorly designed and it is a general usability problem
    for all users, including those *without* disabilities.

Combine User Evaluation with Standards {#stdstoo}
--------------------------------------------------

Involving users with disabilities in evaluation has many benefits;
however, it alone cannot determine if a website is accessible. Combine
user involvement with [evaluating conformance to
WCAG](http://www.w3.org/WAI/eval/conformance) to ensure that
accessibility is provided to users with a range of disabilities and
situations.

Drawing Conclusions and Reporting {#drawing}
---------------------------------------------

Be careful drawing conclusions from limited evaluations or studies.
Results from only a couple of people with disabilities cannot be
generalized to apply to all people with similar disabilities or people
with other disabilities. See the [Caution](#caution) above.

Reports should include the scope of the study and the evaluation
parameters, such as the testing methods and the user characteristics.
For example, if a study included only usability testing with
participants who are blind, its report should clarify that it did not
evaluate conformance to accessibility guidelines and that it does not
apply to all people with disabilities. Thus the report can help readers
draw appropriate conclusions.

While small studies often provide useful information, they are not
robust enough to provide statistical significance.

Note for usability professionals {#ut-access}
----------------------------------------------

When specifically exploring accessibility barriers, the protocol is
usually different from a general usability test; for example:

-   you would likely use a think-aloud technique with high facilitator
    interaction;
-   data collection would focus on understanding errors related to
    accessibility barriers, rather than on time-on-task or user
    satisfaction; and
-   tasks would concentrate on specific areas of concern for potential
    accessibility problems, rather than general site usage.

Note that is is also important to evaluate general usability, user
satisfaction, and other such criteria for users with disabilities.

The More Information section below includes additional guidance
specifically for usability professionals.

More Information and Guidance {#fmi}
-------------------------------------

This document briefly addresses a few points of a very complex topic.
Many resources on other aspects of involving users in evaluation are
available on the Web.

-   [Involving Users in Web Projects for Better, Easier
    Accessibility](http://www.w3.org/WAI/users/involving.html) is a
    prerequisite for this document that covers broader issues of
    including users *early* in website design, tool development,
    standards, and other web projects.
-   [Just Ask: Integrating Accessibility Throughout Design](http://www.uiaccess.com/accessucd/overview.html)
    provides guidance on incorporating accessibility throughout design
    of websites and other products. The chapter on [Usability Testing
    for Accessibility](http://www.uiaccess.com/accessucd/ut.html)
    includes:
    -   Planning for usability testing for accessibility – [determining
        participant
        characteristics](http://www.uiaccess.com/accessucd/ut_plan.html#characteristics),
        [recruiting
        participants](http://www.uiaccess.com/accessucd/ut_plan.html#recruiting),
        providing compensation
    -   Preparing for usability testing for accessibility – preparing
        test materials, ensuring the facility is accessible, setting up
        and testing the assistive technology, conducting a pilot test,
        using [screening
        techniques](http://www.uiaccess.com/accessucd/screening.html)
    -   Conducting a usability test for accessibility – [interacting
        with people with
        disabilities](http://www.uiaccess.com/accessucd/ut_conduct.html#interacting),
        setting up the room
    -   [Reporting usability testing for
        accessibility](http://www.uiaccess.com/accessucd/ut_report.html)
        – distinguishing between accessibility and usability issues,
        drawing conclusions, writing about people with disabilities
-   [White paper: conducting user evaluations with people with
    disabilities](http://www-03.ibm.com/able/resources/userevaluations.html)
-   Many books, articles, conference presentations, and other resources
    cover usability evaluation techniques, including different types of
    usability testing; test design; developing test protocol including
    questionnaires, tasks, data collection; conducting pilot tests; and
    how many participants to include in usability testing. For example:
    [Usability Testing Demystified](http://www.alistapart.com/articles/usability-testing-demystified/),
    [sample test plans and forms from The Handbook of Usability Testing](http://www.wiley.com/WileyCDA/WileyTitle/productCd-0470185481,descCd-DOWNLOAD.html),
    and [Rocket Surgery Made Easy: The Do-It-Yourself Guide to Finding
    and Fixing Usability Problems](http://www.sensible.com/rocketsurgery/index.html)
    with a sample usability test, scripts, and forms online.
-   There are organizations around the world that specialize in helping
    recruit people with disabilities and conduct evaluations with users
    with disabilities.

