---
title: "Captions from ACT Rules for Manual Web Accessibility Evaluation Methodologies – Online Symposium, 14 March 2018"
title_html: "Captions from ACT Rules for Manual Web Accessibility Evaluation Methodologies<br>Online Symposium, 14 March 2018"
nav_title: Record
lang: en
permalink: /about/projects/wai-tools/symposium/record/
ref: /about/projects/wai-tools/symposium/record/
parent: /about/projects/wai-tools/symposium/
github:
  label: wai-projects
---

![An EU Project]({{ "/content-images/about/eu.svg" | relative_url }}){:.right style="width: 105px; margin-top:-1px;"}

{::nomarkdown}
{% include box.html type="start" title="Sponsors" class="simple right" %}
{:/}

This online symposium was organized with support of the [WAI-Tools Project](http://www.w3.org/WAI/Tools/), funded by the [European Commission {% include_cached external.html %}](https://ec.europa.eu/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Meeting Record
{:#record}

This is the meeting record from the [online symposium on ACT Rules for
Manual Web Accessibility Evaluation Methodologies](webinar1.html), held
on 14 March 2018.

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

{::options toc_levels="3" /}

-   The TOC will replace this text.
{:toc}


{::nomarkdown}
{% include toc.html type="end" %}
{:/}

### Introduction to ACT
{:#intro}

**Shadi Abou-Zahra:** Welcome, everyone, to the online symposium on ACT
rules for manual web accessibility evaluation methodologies. As a
reminder, first of all, you should have a link to the slides in the
latest e-mail so you can follow these on your computer. We are also
showing them, sharing the screen. I hope this is working for most of you
who are joining using the online web conferencing system. If you are
dialling in, please have a look at the slides separately.

Before we dig in to the details just to put in context the long road
until where we are today, and that's important just to put some things
in context, some of these are relevant today. So some of this work on
conformance testing started really long ago. It is as old as WCAG 1,
maybe even before that when the Trace guidelines emerged. Some people
were thinking about tooling and evaluation schemes and ways to test for
these guidelines, for these requirements. So there was a lot of work
early on by Len Kadsay who unfortunately passed away, Wendy Chishom and
many others who wrote the techniques for accessibility evaluation and
repair tools. Flowed in to development of WCAG 2.0 to make it testable.
And if people remember the techniques themselves and the failures, they
have some small procedures in there. So at least intent and idea was
there.

For quite awhile there was evaluation and repair tools working at W3C
and that was focusing specifically on working with evaluation tool
developers and looking at ways to improve automation and tool support,
but also the consistency of evaluation and repair. And it was a lot of
work there. It was also a lot of generations of different kinds of
accessibility test tools and manual methodologies that emerged over the
years and how the entire industry here of testing basically matured over
the years as we went along.

An important point I think is the so called WAB Cluster. It stands for
Web Accessibility Benchmarking. And this was actually three projects
funded by the European Commission that were asked to put together the so
called Unified Web Evaluation Methodology, UWEM. We are going to look at
that in the next slide in a bit more detail, but it is actually one of
the important attempts to try to have a coordinated and aligned
methodology for testing web content. And this was actually within these
three projects together, there were maybe 24 European organizations in
there and there was a lot of work put in to try to make that happen.

And also one of the important things we are going to look at later is
test samples for WCAG 2.0. One of the projects in this cluster,
BenToWeb, and we have people on this project on the call today. So they
may be clarifying some things. But those test samples are examples of
good and bad content which were to test evaluation deals. So there was a
lot of work put in to that and this is actually coming back in the ACT
work through the idea of test cases. And we are going to look at that a
little bit later on. A lot of the work that has happened in the past has
helped inform our latest approach, our latest attempt and also some of
the work invested in the past is stuff that we can take up on and build
on for the new work that we are talking about here.

Let me talk just a little bit about the Unified Web Evaluation
Methodology. And this was an important step to try to align different
practices that were going on in different European countries and to try
to harmonize the approaches between them. In my view one of the
challenges with that UWEM was it was trying to do many things at the
same time. It was trying to be large scale monitoring. So having here an
approach for large scale monitoring and the issue with large scale
monitoring you are looking more for indicators rather than quality. You
are not really looking at the specific state of a website, but you are
trying to kind of have an idea how accessible is it and trying to relate
the degrees of accessibility among different websites or different
regions and so on. So this you kind of sacrifice a lot of the quality
for scalability when you are doing such large scale.

At the same time the UWEM was also trying to be a process for evaluating
websites, qualitative to the evaluation for improvement. Somebody who
wants to check their own website and see where they perform good, where
they perform bad and what they need to fix. So the classical evaluation
where people look at the site in detail to try to improve it.

And last but not least there was also another attempt here on
certification. And in certification again you have a slightly different
view on evaluation where you are primarily looking for problems, just
looking for issues, just trying to confirm whether no issues are found,
you are not really trying to exhaustively find all types of issues or
all issues because, you know, typically in certification you don't even
suggest the changes or the improvements. You just look for failures. And
if there are none, then you issue the certificate. And if there are
issues then you ask people to revisit their website.

So and again all these three approaches are important for accessibility.
But trying to combine them in one is really a challenge. I think each of
these needs its own methodology and its own approach to accomplish, even
if they are based on the same tests. And this is where this work comes
in to try to have a basis tests that are common that can be used in
different kinds of methodologies and scenarios.

Another issue with UWEM is that it was based on WCAG 1 and we all know
that WCAG 1 had a lot of difficulties with testability. Things like
saying provide sufficient contrast was a big issue because it is not a
testable statement. You don't know how sufficient it is. And so that
created a problem. So these were some of the issues of why UWEM had
difficulty, but at the same time I think also during that stage there
was not a lot of interest from I think particularly some of the industry
organizations but many others as well to basically share, have a common
understanding of testing. Many people felt that how they test a website
and these checks are their assets, their know how and that they need to
keep this to themselves because it is really how they differentiate
themselves from their competitors or from the others or they invested so
much in work that they don't want to give it up. So these were some of
the issues at the time that made it very difficult to really get people
together and agree on one common approach.

Moving on to slide No. 6 is really looking at the benefits of
harmonization or the impact of fragmentation. What happens when people
continue that whole process and have different evaluation results
essentially, different understanding of accessibility, how they check
something. And that really causes a lot of confusion among everyone
involved in the development life cycle. And by developers here I mean
the designers, front end, back end, the coders, the testers and so on.
Really all the developers here but also suppliers to organizations. This
happens very often. You are trying to plug in maybe something, some
template or some tool, a player or something like that and that doesn't
meet your understanding of the requirements because the suppliers maybe
have a different understanding of the accessibility requirements. And
also third party evaluations when you are doing third party evaluations
and there are differences. And that causes a lot of wasted effort. And
we don't have that many resources to spend in accessibility really to
have duplicate efforts and these kinds of differences amongst us and in
some cases actually it even causes loss of contracts.

So when you are purchasing a website and then you run a tool over it or
you do your testing, and you say hmmm, that's not accessible and the
other person says no, it is, according to there. And so, you know, maybe
even lose contracts, but in any case a lot of wasted efforts and
resources that are very rare and that we need to be careful of. But more
importantly it reduces the credibility of accessibility for the entire
field. It hurts us to have these differences in interpretation. And this
is in the last years one of the big changes that is happening which is
many more people are coming to the understanding including tool
developers who for years and years were trying to distinguish themselves
based on their testing interpretations are coming around to the
conclusion that by having a more common understanding and reliability of
how tools and methodologies perform the more basically the stronger the
market is for everyone and the more benefits we all have from that.

And there is still a lot of ways to differentiate also between
methodologies. I'll get in to that a little bit later. But the idea here
is there should be different types of methodologies. Maybe they are
going to be more educational. This is very often in say the educational
sector or in the public sector where you are trying to get people to do
evaluations who are not regularly accessibility experts but need to be
able to check some of the content.

And so these people need maybe very educational or basic methodologies
that have a lot of explanation and hand holding and guidance. Now in
other areas, let's say in methodology for a certification authority
where the primary users are accessibility experts who need to know what
they need to check. And for them maybe such an educational methodology
would be too verbose and would be too distracting and they want to have
more, you know, exact information about what they need to test and
that's it. And they will just go through that. So there are different
ways or different kinds of methodology that each have their place and
the distinguishing factors between methodologies and tools should not be
based on the interpretation of the results but on other factors. For
tools there are things like the performance of tools and how well they
fit in to your development process and many other things where tool
makers can actually differentiate themselves. Also the coverage, how
many tests they cover and so on. But it shouldn't really be on
interpretation. And so I think this is a major point here that as I said
a lot of in the community is actually coming to that conclusion and so
this has been a major step that led to this latest work on ACT,
Accessibility Conformance Testing.

Now meanwhile, on slide 7, while this was going on so to say in the
evaluation area we also had the release of WCAG 2, the Web Content
Accessibility Guidelines, 2.0 in 2008 which as most of you will know has
more testable requirements than WCAG 1 had. Also this notion of
techniques and failures I think is very important. The idea is that you
can extend, provide more detail as you go along as you find out things,
as new technologies emerge. We saw the changes of HTML4 to HTML5,
introduction of WAI ARIA and some of this WAI ARIA being integrated in
to HTML5. Technology changes very quickly. And by having this idea that
you can have techniques and failures that adapt to the current
situation, the current technological situation but that the requirements
themselves are more stable. This has proven to be really useful and
something also where we as testers can come in and adhere to the testing
aspects.

So most of the time here we are looking at failures. A lot of the checks
that we are talking about actually map to failures that the content does
not meet. Also one of the important things about WCAG 2 is that since
its release there has been much more international harmonization. Back
then with WCAG 1 or several years ago there were many more derivatives
of WCAG 1.0. The U.S. was different than Europe or the European
Commission was saying. The individual European Member States have had
different standards. Also around the world there were yet more different
interpretations of WCAG 1 mixtures between WCAG 1 and WCAG 2. And so the
situation was much more dire. It is not perfect yet. There are still
issues and differences between countries. But there is certainly much
more harmonization meanwhile which I think is a good situation to be in
to know that these testing work we are doing would cover a much broader
area, much broader market. So this strengthens our case and helps the
work that we are doing.

Also meanwhile there is Website Accessibility Conformance Evaluation
Methodology, WCAG EM. It is actually yet another different type of
methodology. It doesn't go in to the details of how to check individual
requirements, but through the process of how to evaluate a website
because WCAG focuses really on pages, on individual pages more. And this
is a non-normative specification. So this is not a W3C standard, it is a
so called Working Group Note that explains how to check a website, how
to select individual pages from a website. So they are representative
and so on. So that you can get to a useful answer at the end when you
have done that of how accessible a website is.

And meanwhile also there is a so called Auto-WCAG Community Group and I
need to explain that a little bit. At W3C we have Working Groups which
are established by the W3C membership to create a standard or a
specification. Whereas a Community Group anybody can create, and anybody
can get work started there. So this is kind of pre-standardization, what
we call incubation. And when enough community interest in there or
something really proves to be coming along then the membership may
decide to make that actually in to a Working Group.

This is actually how a lot of this latest work on Accessibility
Conformance Testing started up. There was yet again another European
funded project called EIII project. This project is one of the
descendants of the WAB Cluster. Their focus here was on more the large
scale monitoring of websites in regions. So what they were trying to do
is basically create yet again a set of tests which they can run across
sites, automated tests so they can run across sites to get an idea of
how accessible they are. Instead of just doing that work within the
project itself, they started the community group and actually also on
the call today is Wilco Fiers who is the co-facilitator of that work
today at W3C. They basically started to work in the open in this
community group. And it started to gather momentum. People started to
join that group. Started to discuss, started to exchange and again it
was focused really on automated testing. Maybe in hindsight that name is
a bit misleading because it has the automation kind of connotation
whereas meanwhile we broaden the work much more. But anyway, that was
really a kickstart in terms of having here something from the community
where we could see that there is much more interest around this, around
harmonizing than we had in the past, in the years before where people
were really not as keen on having a common interpretation.

So that takes us to slide 8, the creation of the Accessibility
Conformance Testing work within W3C. As I said, this Auto-WCAG group and
incubation work started to gather sufficient critical mass and there was
enough membership within W3C to get that work started, a task force was
created. This is W3C terminology, but basically a task force is a
subgroup of a working group. So directly within the Accessibility
Guidelines Working Group which is developing the accessibility
guidelines. So developing WCAG. Directly embedded in there is this task
force that's tasked with Accessibility Conformance Testing. As I
mentioned earlier, the co-facilitator here is not only Wilco Fiers but
also Mary Jo Mueller from IBM who is also on the call today.

These are the facilitators of the group but we have had a lot of
involvement from other organizations, from Siteimprove, from the Daisy
Consortium where they are looking at digital publishing, from Level
Access. University of Illinois was participating and several others. I'm
sorry that I'm forgetting some. And the mission of this task force is to
develop three distinct things.

First is the so called ACT Rules Format. The idea being here that if we
want people to share their test rules and contribute them we need a
common way of writing down these rules so that we can actually share
them. So we can actually have people contributing these test rules.
Another piece here to develop by the group is the ACT Review Process. So
once somebody has contributed a rule, what should be the process from
that contribution to make it in to a formal, a vetted and approved rule?
And last but not least is actually those rules that get vetted and
reviewed and approved to collect them and provide an open repository of
such rules that people can take and use in their methodologies or in
their test tools.

All these pieces are in development. All these things are still in
draft. So there is a lot of opportunity here to comment and provide
input. A lot of moving pieces but it is firming up. And next on slide 9
maybe that gives hopefully a bit of an overview of how these things, how
these pieces fit together.

In the very bottom of this diagram is the ACT Rules Format. Again this
is the common format of how you write down such rules and so that you
can share them in to the repository and there can be different sources
here. We have commitments from several different organizations. The
commitment that they will be sharing rules. We also, since November
2017, have an EC funded project called the WAI-Tools Project supporting
this work. Specifically this presentation today, this symposium is
organized by this WAI-Tools Project. And I'll mention more at the end
about that.

So we have several contributors here in order to accelerate the work.
These different sources will be contributing ACT rules. And then on the
left hand side is this vertical bar and that represents the ACT Review
Process. That really takes it from the source to the review and vetting
process in to the rules repository which already has implementations. So
part of this review process is that you need to demonstrate
implementation of these rules in order for them to be adopted in to the
rules repository. And then we can have further implementations.

The word implementation here applies to not only test tools but also to
manual methodologies. That's an important aspect here. That ACT Rules
themselves are not intended to be used directly by evaluators. These are
not what you actually go and test a website with, but these get
interpreted in to a test tool or in to a methodology. Because you have
the different flavors of methodologies and different flavors of tools.
So the ACT Rules are really addressed more to people developing tools
and developing methodologies rather than directly at the people carrying
out evaluations. These implementations, these tools and methodologies
are used by the evaluators. The hope here is that we have more
consistent results between these different evaluations. Regardless which
methodology you use or which tool you use you have more consistent
results at the end. That's the overall goal.

Moving on to slide No. 10, I should mention, going in to the individual
pieces here of this diagram is the ACT Rules Format, 1.0. This is a
working draft which we have just published another version of on the 8th
of March. Just a few days ago. The review period goes until 5th of
April. So this is your opportunity to comment. I will remind you of this
later on in the discussion. Really looking for feedback here, your
input. It is starting to firm up. We hope that our next draft will be
the last working draft and then we will be going in to the next level of
maturity at W3C. And so we are making progress here. But we do need your
input and actually specifically the purpose of this symposium today is
to introduce most of you who, from seeing your responses, are involved
in manual evaluation, manual testing. So we would like to know from
people developing manual methodologies how does this really fit with,
what you are trying to do with your development of methodologies and
your development of test rules.

So let's have a look at the outline. These are the pieces on slide No.
11 that this rules format specifies, needs to be in an ACT Rule. First
of all, a unique identifier. Every rule needs to have a unique
identifier, descriptive title, and a description. The accessibility
requirements that it maps to, things like which success criteria of WCAG
does this address. Some limitations, assumptions or exceptions,
accessibility support. Aspects under test. This is relevant for tools as
well. So you are looking at the DOM tree. Are you looking at the direct
HTTP response that you get from the server? Are you looking at the code
or the rendered code? What is it that you are actually testing on the
content and providing that information is really important.

Also a very important concept and we are going to be talking about that
in a little bit more detail in just a bit is the applicability and
expectations. When we first started this work a lot of this was based on
so called steps. Testing steps. Do this first; do this second; do this
third. The issue with that is that it doesn't map well to things like
let's say tools or approaches that are doing this, implementing this
differently. Let's say Artificial Intelligence or other types of testing
that do not really have this procedural approach but looking more at
what is it that I need to test.

The concept of a rule group, of combining different rules together to
get to a common test, to test particular requirements and finally test
cases. And test cases that I have said much earlier those test samples.
Test cases are examples of content that meet this rule and content that
doesn't. And that's really, really important. This is how you check your
implementation. Whether your implementation is a test tool or a
methodology. This is how you check if you have the correct
interpretation of the rule or not.

Let's look at a few examples just to make this a little bit more
concrete. On slide 12. I'll switch over to a browser. The first one we
will be looking at is the ACT R2, which is a rule that we have published
along with the rules format just to demonstrate how such rules would
look like. This rule is called proper use of ARIA described by. What you
are trying to check here is whether ARIA described by has been used
properly or not. And what you have is the accessibility requirement, is
which success criteria this really maps to and in this cases is success
criteria 1.1.1 which is non-text content. You then have a description
and some background, and some of the WCAG techniques and failures that
it maps to. Some of the assumptions that you are making here in order to
test. There are certain assumptions. What I talked about the aspects of
the test, so in this case you are testing the DOM tree and the CSS
styling. These things are defined in the rules format. Then the really
important piece that I wanted to show is the applicability and the
expectation.

The applicability part you describe as precisely as possible the
specific aspects that this rule applies to. So in this case it is an
element with the semantic role of image that has a non-empty ARIA
described by attribute. And it goes on. This is really what is
applicable to. It makes it very specific what it is applicable to. And
we moved away from what we previously had as things like CSS selectors
or things to try to codify this. Because it has too many limitations and
things that restrict the implementations, especially when we get in to
things that are more manual or not fully automatible.

Then you have the bunch of expectations which all need to be applied to
this applicability in order for this test procedure to be checked. So,
for instance, the first one is that each target element of this ARIA
described by has a direct identifier. This is the first expectation. The
second expectation, first of all, you have to fulfill the first
expectation but also this described by ARIA attribute. So you write down
the expectations of what you need to achieve. Now what you don't do is
you don't say which tool you should use to do this or how to do it in a
browser or so again this is not directly geared to the evaluators
themselves but people who are going to take that and implement it in
either a testing methodology. One could be more verbose or the other
more educational, the other more technical. There could be different
flavors of these methodologies, but also for tools. Also by writing it
down like this you could have more tool supports. Even if this rule may
not be fully automatible maybe tools can do different parts of these
checks. For instance, to check that certain attributes exist, a tool can
do that. But you may need to point out to the tool or support the tool
to understand what the references are.

By writing down the exact testing, first of all, we achieve a more
common understanding and more consistency in the results but also allow
for more tool support to take place, to have more scalability basically.

Moving down in the rule, again these validation tests, these are the
test cases that's really important. Here you have some test cases and
some examples of code that should pass. Some that are expected to fail.
And some that are expected to be not applicable. That's what's your
result is. When you run your methodology or you run your tool on these
test cases, that's the results that you should be expecting.

I want to also show just two other rules that are in development because
they are more related to manual testing. This is just an early draft.
You can see from GitHub it is still only an issue. It is not even a so
called pull request yet. It is the earlier stage of development. I am
looking now at the keyboard trap R1 which is in the slides, the URL with
issue 67 at the end. This one actually we have been working on that
through the WAI-Tools Project. This is actually derived from the
methodology that is used by the Norwegian Government agency called Difi
who are also on the call today. They have a check in checking the
keyboard trap. In their methodology they lead the evaluator from one
step to the other what they need to do. And we extracted from that the
actual essence of the check. The applicability and expectation. While
doing that we saw that we need to actually separate it in to two
subrules, R1 and R2. This R1 only checks that you can actually move away
from the element. Many people don't remember the success criterion of
that part. The success criterion for keyboard trap, something along the
lines that you can move away using standard keyboard controls. That you
can move away from an element that you have tabbed in to or moved in to
using the standard keys. By the way, standard keys is not defined in the
guidelines. Or the user is informed about how to move away. So this or
there, this needed a second rule to map that.

This first rule R1 checks the first part of the requirement, which is if
you can move in to an element you can actually move out of the element
again. We have put an initial definition of what these standard keys are
and these are the escape key, tab key, shift tab and enter key. This
will be for discussion but the idea here we started to define this more
specifically. What does it mean to move out using standard keys which is
not really specified in WCAG at this moment.

And then R2, as I said earlier R2 covers that or part of that success
criterion of that requirement which is that help information is
available. There are certain expectations again mapped in to how help
information can be made available if you cannot use these standard keys.
This is what we call a rule group. You have to combine in order to check
the success criteria. There are two different kinds of subchecks in
there or two atomic pieces.

These were some examples of these ACT rules to give you an idea of how
these ACT Rules look like. The important part here is that this is
really geared towards developers of methodologies, not directly at
evaluators. Then, what I have mentioned earlier, is the ACT Review
Process. We saw those two rules, actually three rules but, you know, two
sets and one looked finished. We just wanted to show the first one with
the ACT R2, we wanted to show how it would look like when it is done,
when it has completed this entire review process. The keyboard ones we
have looked at most recently which is step 1 which is the creation
stage. Step 2 is the validation stage which you make sure you have the
test cases and in the right format. So, for instance, these keyboard
tests right now they don't have all the test cases that they should
have. That's why they are still considered in step 1. When they have all
test cases and all pieces that they need, then they would then pass the
validation stage. Then comes the verification stage where people debate
and discuss. For instance, this definition that we have of what standard
keys are. Somebody may challenge that or maybe somebody will request
that another key combination get added. These are different kinds of
things that need to get agreed on. Step 4 is the implementation of these
rules. Every rule needs to have at least two independent implementations
before it can even be considered by the Working Group for acceptance.
This is how we try to do this work in the community process, outside the
Working Group, so that we are more scalable. We do that work through
community development and demonstrate that these rules are broadly
accepted and agreed on, and there are implementations for them.

Step 5 is put in brackets because it is not really a step. This is
actually an ongoing thing, the maintenance. At any time there could be
new technologies, any reason why you would need to change a rule or
maybe deprecate it or maybe there was a bug in it or things like this.
There is this maintenance aspect in this review process.

Last but not least, when there is acceptance and sufficient consensus,
it may get accepted by the Working Group in to the ACT Rules repository
as a completed ACT Rule that is ready for broader use.

Moving on to slide No. 14, we have the same diagram again that we had
earlier. Hopefully this will actually make a little bit more sense now,
this diagram. Again, at the very bottom is ACT Rules Format which is the
basis, defines what belongs in rules and how these rules should look
like and this is out for draft. We are asking for your input on this and
also review process, also this is for discussion. This also something we
would like to have input on. On the side it is written ACT Task Force.
This ACT Rules Format is what is standardized and developed by the W3C
Working Group. The rules contribution and the rules review and
processing really happens in a community group outside the W3C. Right
now it is the Auto-WCAG community group. That's the community group that
we have. But there is no reason not to have others. For instance, there
could be a community group focusing only on rules for digital publishing
let's say or we were for a while debating whether we needed to have a
manual-WCAG group or have both in the same group side by side which is
kind of what we are leaning in to.

The layer above that is implementations. We start to have implementation
already during the review process. We hope when you release rules in to
repository that will get more implementations of this. Last but not
least at the very top are the evaluators who use the implementations to
come to a conclusion.

Let's just continue to slide No. 15. I want to emphasize the auto-WCAG
group, since it is a community group, is open to anyone who wants to
participate. We do ask you do get involved if you want to create rules,
if you want to contribute. For instance, if you have ideas on the
keyboard rule that's being developed, well, chime in. Put in your
comments. Put in your issues. Let us know what your thoughts are, or if
you want to implement these rules and we will have a look at these
repositories in a bit. The URL is there but I'll also show you later on.

### Questions from the Survey {#survey}

**Shadi Abou-Zahra:** I'll start by looking at some questions that we
got from the survey. Unfortunately there were not as many as we were
hoping. Many of you actually it seemed like wanted to know more about
the ACT work and what it is which is why we have kind of switched more
to introductory mode and to have more kind of background explanation.
There were some interesting questions and I wanted to cover some of
these.

So some of the questions revolved around the idea of, you know,
accessibility evaluation cannot be completely formalized or you cannot
have, you know, to what degree can you make it so mechanical. One
comment was even saying accessibility will get boring if everything was
completely formalized and mechanical. Absolutely. There are key
limitations. There are many things that cannot be tested automatically
or even formalized, but what we are trying to do here is to document
what we already know. To get agreement on some of the things like
keyboard trap or things like headings hierarchy. There are several parts
I think in WCAG where we can just document having a common understanding
of and move on. There will be actually quite a couple of things still
open.

The next question actually also relates to that very much is kind of,
you know, we are looking here at ACT Rules on an element level or very
atomic level of issues. But very often issues are kind of in combination
or in context. There is a big picture, what if you are dealing with an
entire component rather than bits and pieces. That's another limitation
of this ACT work. This is another thing where evaluators will probably
need to bring things together. Aggregate some thoughts like, you know,
this keyboard thing is happening on navigation or versus it is happening
somewhere else. What is the failure here. That's the issue. There aren't
many things here that ACT does not fully address, but at least again we
would have common understanding for some of these atomic level things.

Some other questions where well, there is limited set here in
repository. Not a lot to see. That is yes, just, you know, chicken or
egg. We are just starting to develop some of these things. We do hope
that we will see the commitments from some organizations. We have this
European funded project that will support the development of these
rules. We hope that in the next while once these pieces start firming
up, that we will see the development of more rules here and this
repository will get fuller as we go along.

Some of the other questions that I liked about the usability of these
ACT Rules. I would like to filter them. I would like to have them
integrated with other resources. I would like to be able to use them
more directly as a developer. This is also something that we are looking
in to. I mentioned earlier we have the WCAG EM, evaluation methodology.
We have the How To Meet WCAG 2 Quick Reference Guide. So there are
several bits and pieces where we can tie together these things and have
these rules appear in these tools and resources that the evaluators use
more directly. Have them appear there, but first we need to have this
repository kind of more rules in order to start connecting some of these
thoughts.

Let's see, what else? What is out of scope of ACT? That's a really great
question. There are a lot of things that are out of scope. We talked
about the limitations, just a little bit earlier. ACT really tests on an
atomic level, on a very detailed level. It misses out a lot on the kind
of grand scheme of things. More importantly ACT, one of the things that
we really tried to or one of our important limitations is that we will
not try in any way to redefine the requirements of. So that's really
important. We are not trying to extend or change or modify the
requirements of a Working Group. That's completely out of scope to try
to define new requirements here.

There were a few others but I think I will go to the queue and I will
actually start opening up and have some discussion. If people don't get
on the speaker queue, then I will actually maybe call on some people.
Wilco and Mary Jo, can I ask you both to unmute and if you wanted to add
anything or to respond to some of the questions.

### Questions from the Floor {#floor}

**Wilco Fiers:** So to anybody who is not familiar, I'm Wilco. I work
for Deque Systems. Thank you, Shadi, for putting this all together and
for the presentation. It has been very helpful. The thing I want to
emphasize most again is what I'm hoping to accomplish with this work is
that we can start to harmonize our efforts. There is a lot of work going
on in a lot of different organizations. And we are duplicate on a lot of
stuff. So and all of that just means not just extra work. It means that
differences are going to arise. People are going to see these
differences. People are going to be confused about why does organization
A say one thing and organization B say a different thing. And that costs
us things. We lose people if they start getting confused about
accessibility and really getting a clear message helps all of us. So
that I think that's really the essence of what I'm trying to get at,
what I am hoping to get at with this kind of work.

**Mary Jo Mueller:** I'm Mary Jo Mueller and I'm with IBM. I am the
accessibility programs manager. I think that pretty much everything has
been said about what our real ultimate goals are. It is important that
there is a very consistent resulting message with tools doing testing.
That they kind of agree upon their results. And then there is no
questions that arise as far as who is right or what is exactly right
with the test for accessibility barriers, what are the real
accessibility barriers. And we get a nice consistent way to test for
conformance which we need to report for our products.

**Shadi Abou-Zahra:** Okay. Thank you both. So let's see, some questions
from the floor. So, first of all, Mark asks what does failure of a rule
mean. Does it mean that a certain particular technique does not meet the
success criteria or that the success criteria is violated. So the design
of ACT Rules goes directly to success criteria. We don't test
techniques. But we actually test directly for the success criteria. So a
rule maps to a failure. So basically you could think of it as a more
elaborate failure. There are existing WCAG failures but we need more.
Failures are sometimes also more general, like failure to provide text
alternative or something general. We are breaking down these failure
conditions in to more atomic and more specific bits and pieces, but if
there is a failure of a rule, then actually that would map directly to a
failure of at least a success criteria. Sometimes it may map to more
than one success criteria.

Wendy asks have we looked at the results format at the Sirus oasis. Yes.
We are planning to continue using EARL which Wendy, you have been
involved in creating. I would be interested to hear more of your
thoughts, whether you think that there is a particular benefit of Sirus.
We start to use JSON realization of EARL.

**Wendy Chisholm:** My name is Wendy Chishom. Nice to see the reference
there. Thank you. Some of our tools are not accessibility tools. And so
we are looking for some formats so we can use between policy areas and
looking for something that is more generic and so no decisions have been
made. We are looking at some formats right now, Sirus, that is something
that has been talked about recently. I am curious if others feel that
also or if EARL is broad enough. One of the issues that we are having
and it is funny, I haven't looked at EARL in a while and I need to go
back and look at it again, Sirus doesn't have the breadth of fields that
we are capturing, screen shots. Something we are investigating now.

**Shadi Abou-Zahra:** Okay. Would love to hear more of your thoughts. I
think GitHub, there is already this JSON realization of the role, trying
to use I think we will take back that idea of revisiting Sirus and
seeing if there are any particular things that it provides or benefits
over EARL, but if you have any thoughts, let's each look at what we
haven't looked at in awhile and see if we can come up with anything.

**Wendy Chisholm:** Yes, if you have done a gap analysis or planning to,
that would be interesting.

**Shadi Abou-Zahra:** I will take a look. Next question is from Brian.
Brian, do you want to introduce your question yourself?

**Brian Bors:** I'm Brian. I work for the Accessibility Foundation. I'm
part of the European projects. And we are dedicated to making these
rules. And I was interested in how such a manual implementation of a
rule would look like and automated implementation would be a tool that
actually tests this rule, that have bound and manual implementation
would look like. For us as an organization stating yes, we use this
rule. Would that be enough or would you have to provide a few steps that
our evaluators are following?

**Shadi Abou-Zahra:** That's a very important question. So with
implementation in order to verify that there are implementations it
would need to be publicly documented. And there are a few, there is the
- I mentioned earlier the Norwegian indicators by the Norwegian
Government agency which are on GitHub and have done the work of
translating them in to English. I don't know if anybody from Difi wants
to say something on that. There is also the Trusted Tester methodology
which is publicly documented which you can have a look at and shows how
to follow certain steps in order to check requirements. And they
actually provide additional information, like which tools to use and
which widgets or browsers. What to do in the browser to test a certain
thing. And again I wonder if anybody from Trusted Tester wants to say
any more on this. There is also the French RGAA which is also publicly
documented on GitHub. This is the French Government approach for the
same thing. And this is actually one of the things that we hope that we
will get convergence between all these different approaches that are
trying to do the same thing which is how to check something. Of course,
again they could have their own flavors. So some are like in Excel
sheets where they give you the step by step. And you have to answer a
question first. And then based on that answer, you know, another kind of
question pops up. And it is more like wizard kind of interface. Others
could be maybe more just checklist oriented and so on. So I don't know
if that answers your question, but this is how implementation would look
like. It would not be just taking these rules but really how you explain
to a tester how they do that. Again this could be more technical. Or it
could be more educational.

**Brian Bors:** So like an instruction manual for a tester?

**Shadi Abou-Zahra:** Yeah, yeah. Again this instructional manual can be
more educational if you are dealing with public sector bodies who, you
know, are not the expert. It could be more technical if you are using
that in your organization. And you are addressing more the QA testers. I
think this manuals would look very different from one to the other.

**Brian Bors:** Yes. That answers my question. Thank you.

**Shadi Abou-Zahra:** All right. And Kathy writes on IRC just related to
that the trusted tester is being updated now to include WCAG 2.0 Level A
and AA and still in progress.

**Wilco Fiers:** Right. Just real brief. I wanted to add that just to
avoid confusion, the rules format is not about an applet. However you
express your data be it in some sort of serializible format like EARL or
Sirus or whatever you are using, a plain Word document, I think that
many still do, just you write your report. It doesn't matter. The ACT
Rules Format is really about making sure that results are consistent.
About having a procedure that you follow to ensure consistency across
different tests and across different organizations. So then how you
express those results, that's the second question, that's a separate
question. There are some references to EARL in the ACT Rules Format
simply because you can't talk about accessibility testing without saying
okay, this is a pass and this is a fail. And we need to say that in one
way or another. But the serializible format that you express those
results in are not part of the rules format.

**Shadi Abou-Zahra:** Great. Thanks, Wilco. Let's move on to the next
question. Antonio says on IRC in chat, I'm very interested in
understandable principle not only from a formal point of view. He goes
on to ask accessibility content is less covered by WCAG 2, even in WCAG
2.1. Would like to contribute at this level in writing ACT rules. And
the answer is as earlier said one of the clear limitations here we are
not trying to define here any additional requirements. That's a whole
different beast to actually come to agreement on what is actually an
accessibility requirement. We leave that exercise to the Working Group
itself, which is having a lot of fun with that. If you want to get
involved in that we do need all the hands that we can get on deck. There
is a cognitive accessibility task force. There is a lot of work going on
there. There is a lot of complexity of why this is so difficult to put
some of these requirements in to testable statements.

From an ACT perspective what we have agreed on is that there will be so
called the conformance tests, these are what absolutely meet WCAG and
then best practices. We have agreed to have best practices. So we know
that a lot of things kind of pass conformance but are really ugly and
really bad practice. So yeah, we could have rules that say hey, you
know, this technically passes the requirements but it is still a warning
or a bad practice or something. So we could have these kinds of rules.
We are trying to focus right now obviously more on the more low hanging
fruit just to demonstrate and get this snowball rolling first, that's
our first priority. We can do some of this work as so called best
practices. Later on I think a lot of the cognitive aspects are also
addressed by techniques and how can create things in good practice. So
we can have rules for that. But we do not intend here with ACT to define
any additional requirements. I think that also answers Jennifer's
support for Antonio's comment here of the relationship between ACT rules
and additional WCAG requirements.

Charles says from the discussion possibility of a percentage outcome or
other model in addition to simple pass/fail outcome. Here this is a
recurring issue as well of so called metrics. Measuring accessibility
and it would be so great to have, you know, to say this website is X
percent accessible. But we couldn't really come up with that means. We
meaning W3C, we looked at this before, I will put an IRC and link for
those who are not on IRC. It is W3.org/wai/2011/metrics. And so years
and years ago in 2011 we held an online symposium like this one, only it
was longer and we had people actually submit position papers on how they
actually do some metrics calculations, how they come up with measuring
the state of a website. We came to the conclusion that until today
that's valid, we haven't found a single widely accepted process for
doing that. There are a number of different approaches be it in Germany.
There is an approach that is being used by the BITV Test and the idea of
Barrier Walkthrough developed by Georgio Brajnik and others. There is
several attempts but they have become so complex to calculate or a
measurement that doesn't reflect the accessibility requirements anymore.
We have come up with four, I believe four requirements. I can't remember
them. Accuracy, sensitivity, complexity and there was another four
dimension maybe to measure how qualitative a metric is and we haven't
found any that meet all these requirements. Thank you, Glenda. Thank
you. Validity, reliability, complexity and sensitivity. And if you are
trying to come up with how to measure the state of a website, you should
try to address these like how valid is really the metric. How reliable
it is and so on. This is also another piece that is out of scope of the
ACT work. I know this comes very often in relation to testing and
evaluation is having some percentage or some outcome. So far the WCAG
model is pass/fail. And this is what we are using in ACT as well. The
whole idea of aggregation and coming up with a final number, that's out
of scope of ACT work. And something that I think that continues to be
very interesting research work here. And maybe Charles, you are involved
in some of that, maybe Silver is the exploration for the new generation
guidelines, 3.0 maybe that was, you know, maybe that will be a different
model there.

**Daniel Montalvo:** I'm Daniel Montalvo, working in a group of ONCE in
Spain as an accessibility coordinator. My question is, you know, whether
or not you are thinking in this scope of the ACT project to incorporate
some of the assistive technology behavior once we can conclude the rules
have passed. And I gave you the example of the ARIA described by
attributes. I think something could be done to document, you know, the
screen behaviors and the fact that they are described, value is or going
to be held after the accessible main because it computes as accessible
description. The same could be said, for example, if you are going to
create rules about the title attribute and so on and so forth. I don't
know if you are thinking about that or something out of scope or what
are your thoughts about it.

**Wilco Fiers:** I knew it was coming my way. So the answer is yes, but
only to a minimal extent. So what we couldn't really do as part of ACT
rules is specific documentation of things that may not work. Right? So
we can't explicitly say screen reader X doesn't support Y. Because they
may contest that. There may be different things that are disabled by
default. There may be bugs. There is all sorts of gaps and difficulties
that come up with your work as accessibility supports and that's kind of
what this is about. This is an accessibility support question. How much
of this is supported in different assistive technologies. What is part
of the ACT Rule is a section on accessibility support as part of every
rule where it may be necessary that you document hey, we know there are
assistive technologies that have some limitations. So you could in a
rule where there are known gaps in assistive technologies you could add
that information in. Say hey, as of the writing you know there are some
limitations of certain assistive technologies without going in to high
level of detail what those are and make that notes. Where it then
continues and the reason why we put that section in we hope this will
encourage organizations that actually do the limitation. So to
developers, so accessibility agencies to take that information and run
with it, to do some of their own testing to make sure that that
information is then exposed to their clients to their users. So we did
pick this up as one of the things that we are trying to encourage, but
we can't explicitly add that in to a rule because then you are
essentially hard coding bugs in to documents which hopefully should live
much longer than the bugs. So I'm hoping that kind of answers that
question.

**Daniel Montavlo:** Yes. It does. I mean the accessibility and I was
going to ask but you already mentioned. So thank you. I was going to ask
about what your expectations, not just from your host, but from the way
in which the other organizations are going to use that and you have
pretty much answered me. So thank you very much.

**Wilco Fiers:** And I know that different organizations are looking at
this. Some of them more explicitly than others. And it probably is a
thing that the accessibility community as a whole has been kind of
ignoring and thinking not being too sure about what to do with that. But
I'm hoping by putting it in to the rules format that we do encourage
people to start thinking about it more often because I think we do have
a rather long way to go before we can do accessibility support properly.

**Shadi Abou-Zahra:** Thanks. We also have Kathy. Kathy, do you want to
speak up or maybe introduce yourself and some of the work that you are
doing if you want to answer your question? Okay. I'm not hearing
anything. I am not sure if your audio works. Kathy writes I am curious
how automated would be one set of ACT Rules.

Now so we actually started off with the idea of having rules that are
categorized, let's say automated and then other, semi automated and
others that are manual. And then maybe with time as we have more
Artificial Intelligence, and, you know, more advanced tooling and so on
that some of these will wander off from being automated to semi
automated or semi automated to automated. I came to the conclusion that
it doesn't make any sense at all in my head anymore. I think that's a
common for the rest of the Working Group is also at this stage. But this
is where I am. And we actually move away from this categorization of
automated, semi automated and manual because the intersection is just so
strong. So let's say this keyboard one, this rule that we looked at,
well, you know, maybe rules will start showing you some of the
components. Maybe they will be able to test the let's say native
components, native form fields but they can't do that in things that are
developed through JavaScript or something. So maybe you will have
certain limitations. Maybe the tools can do five of the eight tests and
then three others the developer has to do manually or evaluators.

We are not planning to differentiate anymore or to say this has to be
done manually or this has to be done automatically but maybe provide
here the applicability and expectations. This was one of the major
changes between the previous draft and this draft is to make that shift
to applicability and expectations that describe what the outcomes will
be, not really how to do it and let whatever can be tool support be tool
support. And whatever needs to be done manually and that also may be the
difference between one methodology and the other. The question that we
had earlier about how do these different implementations look like.
Maybe one methodology, you know, involves the use of tools that will do
more semi automated checking while the other methodology that is more
manual of that's a matter of taste and flavor. But this is where the
methodology developers, this is where you people, where you take these
rules and interpret them in to your methodologies or tools. They are not
intended directly to the evaluator. I am seeing some agreement. Glenda,
you have been so patient. Why don't you go ahead.

**Glenda Sims:** I wanted to voice my support for the actuals and as a
person working at Deque leading the accessibility experts there, we have
more than 50 without our internal description of what is a failure and
what's not, I'll get inconsistencies. That's how I have got to
consistency at Deque. I have put a lot of work in that. But if we want
accessibility to move forward and to be attainable and easy and
sustainable by people that haven't done accessibility for ten plus years
this is exactly what you need. So I'm thrilled about this. I can't wait
to contribute to it. Because it is just going to make those areas of
WCAG that are more complex and nuanced to understand more attainables
for everyone and with that being on that merry go round of is this a
failure or not. I'm delighted and very supportive.

**Shadi Abou-Zahra:** Great. Thank you. And you had some comments on the
categorization as well.

**Glenda Sims:** Absolutely. Absolutely. So when I heard you say that
originally you had listed whether this rule was better suited, actually
better suit for automated or was it something that you would expect semi
automation or something you are like you know, the only way we can think
of it today is manual, I do see value in that. But I get where it may
not be in scope in this first round. Sounded to me as you were talking
about that first round is let's agree on defining how you test the
accessibility test rule. And then you swing that through perhaps an
update from an efficiency standpoint because knowing there are some
people that I'll walk up to and they will test something and they will
be doing it manually where there is a tool that could have done it for
them in under a second. That's wasted time. So I see that that
categorization while tricky to maintain its accuracy for is filled just
manual, will be excellent for research for efficiency purposes.

**Wilco Fiers:** Just to add on a discussion. It was a painful thing to
drop the categorization to me personally but we didn't entirely drop. So
what is the proposal is that instead of making it part of a rule and
saying this rule is automated, this rule is not, what we are going to do
we are going to track to implement the rule because we need to know that
anyway because when you are when you want a certain number of
implementations before a rule gets published and as part of that process
tracking who implemented was it automatically, was it manual and that
way we still get that data. But it might be different for different
organizations.

**Shadi Abou-Zahra:** Yeah, thanks for this clarification. Good point
actually. I didn't talk much about that because we are not there yet but
we do actually hope to have implementers declare not only which check
they implement but also which individual test cases and how, whether
they do that automatically or manually or whatever. And this will first
give people an overview of which methodologies they can use for which
purposes. But it would also I think also give us an understanding of
where in researchers where there is more room for automation and work
here.

**Charu Phandi:** Hi. This is Charu. I also work for IBM accessibility
research. And I wanted to say this is an excellent effort. Thank you,
Shadi, Wilco, Mary Jo for leading this. I think it is much needed
because the interpretation of the WCAG is so subjective and, you know,
it leads to inconsistency in the validation from organization to
organization. I think this effort will really help harmonizing all that
and also save all the duplication. Like, Wilco, you mentioned each
organization is doing their own thing and they have so much not only
consistency but duplication. I'm so glad. And hope to contribute more.

**Shadi Abou-Zahra:** Yeah, thank you. And all the participants in this
work. This is a group effort of an entire task force and the invitation
here for everyone to get involved. You can get involved either if you
want to develop more of the specific area of the work, the rules format
and the review process or if you want to get in to writing rules or
commenting on rules I will provide again the links toward the end. We
are actually starting to close. So if you want to say any final words
now is the time to get on queue because we are kind of going towards the
end here.

**Daniel Montavlo:** Yep. As I said in the IRC just I saw those
references to the different abilities that user profile should in order
to be able to perform these kind of semi automated testings or manual
testings. In fact, there is the confirmation for the evaluators to
actually confirm that the role has passed or not. Have you dropped this
already as kind of dropped the automated and semi automated thing or
not?

**Shadi Abou-Zahra:** Wilco, do you want to take that? In auto-WCAG
there is information on user profiles. I think the answer is that this
is outdated because the auto-WCAG is following on from what has been
defined from ACT, but can you confirm that?

**Wilco Fiers:** Yeah. The auto-WCAG rules while like Shadi said latest
drop got updated less than a week ago. We are dragging a bit and it will
take time to update the rules. User profiles, I'm not sure that we are
going to keep this. I think that falls in line with the question of what
do you actually automate or not. That may be more of a question for
implementers than is something that should be part of the rule. But that
is a discussion we haven't had yet.

I had a question. And the question was kind of for the rest of the
group, especially people not involved in the work, and it is what, how
could we help to let you contribute to the support. The more voices we
have the better the quality and the more we use and are going to get out
of this. Just a thought. Please jump on queue if you have anything to
say.

**Shadi Abou-Zahra:** Very good point. What can we do to help you get
more involved. Brian actually asked a very good related question. He is
trying to get some of his colleagues up to speed what does he need to
give them basically. What do they need to know. What should they read. I
will answer that question in the closing and give some pointers but as
Wilco says this is by no means the answer. This is what we currently
have. We know there is still a lot more help that we need to do. We know
that a lot of these terminologies and groups and it is sometimes
confusing. So your feedback will be very helpful. Also after the call
feel free to send us your thoughts and comments and we will consider
this as we go along. And your input is very valuable and very much
needed.

**Katie Haritos-Shea:** My name is Katie. I have been with the WCAG
Working Group and at the W3C on various WAI groups as well as a
representative for accessibility and other W3C Working Groups. But when
Wilco first started this community group it was more than three years
ago, wasn't it? Like four? And everyone, this is obviously such a great
idea. And, you know, it was a few people on Skype and besides watching
the technology change, you know, at the W3C and somebody gets an idea
and then it turns in to this real thing, some of them don't make it and
some of them do. But this is something that couldn't make me happier
being so much of my life having been involved with the development of
WCAG 2 and working on WCAG 2.1. This is just something that is so
needed. It has been needed. And for some reason had a hard time getting
off the ground. But everyone who can please, please join this group.
Either the Working Group or the community group. This is going to help
all of us in our evaluations, in our work and are providing consistency
really for the world and giving credibility to what accessibility is and
how important it is and how it can be not something as contentious as
somebody's opinion. It doesn't cover everything. We know that. But this
is a very direct, organized way for competing companies to still be able
to do what they can do but make sure that the outcome for users which is
where, why this whole thing happens is going to be consistent. I don't
have any more time but I am thrilled.

**Shadi Abou-Zahra:** Thank you for these words and we will contact you,
but actually this question I wanted to pick up. I think, you know,
several questions now are how can we get involved or get other people
involved either as good, either get involved yourself or push others to
getting involved and that's fine as well. There is a lot of work that
needs to be done and there is a lot of ways in which you can contribute.
So let's move on to wrapping up and closing and giving you some of the
pointers, some of the information on how you can get involved. I agree
with Louis, I know a lot of the W3C stuff is confusing and overwhelming
in these different groups.

### Wrap-up and Closing {#close}

So slide No. 19, just to wrap up again, a reminder the ACT rules format
is out for public review. The link is in the slides but I'll read it
out. It is w3.org/tr/act-rules-format. And that's the technical
specification really defining how these rules look like. It also points
to some of the exampled rules that we saw today. So this is really the
basis for all this work. We hope that this will be our last as we are
maturing on this. Please send your comments by the 5th of April on this.
This is one way you can contribute is by sending your comments on this.
Anybody can do that.

The second is the auto-WCAG community group. This is as I said earlier a
community group which is open to anyone. This is the place where rules
are being developed. And in a community, so outside the Working Group.
But if they follow this review process, demonstrate consensus and
implementation, then these rules will essentially wander over to the W3C
repository and become "formal" rules. The link is also in the slides. I
will read it out. Auto-WCAG.GitHub.io/auto-WCAG.

The auto WCAG group is open to anybody who wants to participate if you
want to send comments on rules that are in development. If you want to
develop rules, if you have ideas for rules that you'd like to develop,
if you want to be involved in the development. So, you know, this
keyboard rule that is being developed if you want to be involved in that
development, if you want to implement such rule that's really the place
to interact. This is where the rules development will be happening.

And then next is the ACT task force itself, which is part of the W3C
Working Group and that's where the rules format and the review process
is being defined. So this is open to the W3 member organizations. In
some cases we can have invited experts under very specific conditions.
So but you can always comment all the work is being done in GitHub. You
can always send comments and issues and the URL for this work is
w3c.GitHub.io/WCAG-Act-rules. If you go there, Brian, that's your
question earlier, where do you send colleagues. We are trying to make
that link, the last one that I just read out, that link really the place
to go to. If you go to that link you will find some initial information
and overview where the different bits and pieces are. We are going to be
updating that page and providing more information, like the diagram that
we showed today, maybe that helps also explain, put things in to
perspective. So we will put a bit more information there. But that will
be the place where you can send people. If anybody has further ideas of
how we can provide more support, how we can help you or your colleagues
get involved, do let us know.

So these are the places where you can get involved. And if you have any
questions, write me or us. I see Wilco already taking the names of
people. And we'll be reaching out to you as well in order to help you
get involved.

Good. I think we are coming towards the end of the call. Before we do
that just, Wilco and Mary Jo, again any wrap up comments?

**Wilco Fiers:** No. Just to say thank you very much to Shadi. I
wouldn't have had the time for doing this. Thank you very much.

**Mary Jo Mueller:** Yeah, totally. Thank you for organizing this,
Shadi. And I really do encourage folks to participate and contribute to
our work. And we feel it is very important and it sounds like from you
very important to you. So it all doesn't come together unless we all
work together to get it done.

**Shadi Abou-Zahra:** Well, speaking about staying in the loop, so this
online symposium here today was organized by the WAI-Tools Project, the
EC funded project. A lot of thanks for that contribution. Without this,
a lot of the work would not be possible. Through this project we are
planning to do more such webinars, seminars, maybe also face to face
meetings. We are looking at maybe in the fall in Germany a face to face
meeting. There is also the ICT testing symposium in the fall where we
may be doing or, you know, hoping to do a pre-conference workshop maybe.
So we are going to be trying to do more kind of events in the coming
period with the support of this so you can get more involved or get your
colleagues more involved. If you do have more questions or ideas, also
if you go to that Web page, there is a list that you can subscribe to a
newsletter to get updates from that project. So you get informed, when
we organize such an event through the project. So if you are interested
in getting such newsletter update go to that Web page and subscribe. It
is only when we have events or certain results from projects, things
like that we send around. So we will be doing more of this stuff. Today
was specifically focused on people who are doing manual evaluation and
developing manual methodologies because we need to do more work here.

We are really looking forward to hearing from you, hearing your thoughts
how we can improve this work to better support you in developing your
methodologies and making those consistent with the standards and
interpretation worldwide. So let us know how we can help you in that
mission.

I want to thank everyone for all this work, in particular the working
group participants, task force participants and people in the auto-WCAG.
And all this work is done by the people in the groups. And you have
heard how many people it takes to contribute to get this international
consensus. So thank you, everyone. This concludes today's symposium. And
we'll stay in touch and all the best for everyone. Thank you.
