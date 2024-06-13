---
title: "Session 2: Accessibility Conformance Testing (ACT) Rules"   # Do not translate "title:". Do translate the text after "title:".
nav_title: "ACT Rules" # A short title that is used in the navigation
lang: en
last_updated: 2021-03-16
permalink: /about/projects/wai-tools/session2/
ref: /about/projects/wai-tools/
---

{% include video-player.html 
  yt-id="MJQonlttQps"
  path="/content-images/about/wai-tools/"
  captions="video2.vtt|en|default"
%}

This video information is available:
* As a **[Text Transcript with Description of Visuals](#transcript)** below
* [On YouTube](https://www.youtube.com/watch?v=MJQonlttQps)
* On a W3C server — [video (file format: MP4, file size: 207MB)](http://media.w3.org/wai/wai-tools-project/x02%20WAI-Tools%20Accessibility%20Conformance%20Testing%20(ACT)%20Rules.mp4), [English captions file (VTT)](http://media.w3.org/wai/wai-tools-project/x02%20WAI-Tools%20Accessibility%20Conformance%20Testing%20(ACT)%20Rules.vtt)

## Audio Description {#audio-description}

This video does not include audio description because the visuals only support the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. The Transcript with Description below includes descriptions of the supporting visuals.

## Text Transcript with Description of Visuals {#transcript}

This is video is accompanied by **[slides 02 {% include_cached external.html %}](https://www.w3.org/WAI/Tools/slides/meeting4/02%20WAI-Tools%20Accessibility%20Conformance%20Testing%20(ACT)%20Rules.pptx)**

<table>
  <thead>
    <tr>
      <th>Visual</th>
      <th width="65%">Audio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>[Shadi speaking] <br />
        Title Slide: ACT Rules Developmeent</td>
      <td>So, let’s move directly to our first session on the development of Accessibility Conformance Testing rules. I want to ask on the virtual stage, Wilco Fiers from Deque and Kasper Isager from Siteimprove and Carlos Duarte – Carlos Duarte from University of Lisbon. <br />
      If the three of you could just briefly – Wilco can you say a few words about yourself, just introduce yourself to the audience.</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>I sure can. Can you guys hear me alright?</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Yep. All fine.</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>Fantastic. Alright, so my name is Wilco Fiers. I work for Deque Systems. I am a product owner and project manager. There, I am responsible for Axe-core which is Deque’s open source accessibility engine which Shadi mentioned. <br />
      In addition to that, I spend part of my time on W3C activities. I am the chair of the ACT Rules Community Group, a facilitator on the ACT Task Force, as well as a member of the Silver Task Force which is currently developing WCAG 3.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thank you, Wilco. And all these groups that Wilco mentioned, the task force and community group and so on, will be explained in this presentation.</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>Don’t worry about. We’ll get it. We’ll get to it.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>We’ll get there. Piece by piece. We love acronyms in W3C.</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>I have too many hats also, to be fair.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Kasper, please introduce yourself.</td>
    </tr>
    <tr>
      <td>[Kasper speaking]</td>
      <td>Yes, I will make it short. I don’t have as many hats. My name is Kasper Isager and I work as the product owner of Alfa at Siteimprove. And then Alfa is our accessibility conformance test engine.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Welcome. Well, you don’t need to be so humble. Kasper is a mastermind of a lot of the accessibility engines at Siteimprove as far as I know.</td>
    </tr>
    <tr>
      <td>[Carlos speaking]</td>
      <td>Hi, I’m Carlos Duarte. I teach – well my main responsibility is to teach computer science at the University of Lisbon, although my research is focused a lot on web accessibility. And so, as part of my responsibilities in teaching computer science, I also teach web accessibility to my students and I also have some more hats. <br />
      Together with Wilco, I’m co-chairing the ACT Community Group and also another hat for the W3C where I do work for the Education and Outreach Working Group, specifically on preparing the new – the curricula, the new web accessibility curricula.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thank you, Carlos. And Wilco, go ahead. Take it away please with the presentation. <br />
      And this time you are muted.</td>
    </tr>
    <tr>
      <td>[Wilco speaking] <br />
        Slide 2: Goals of ACT</td>
      <td>I should unmute. Do you mind going to the next slide? <br />
      Thank you very much. So, I just wanted to get into the goals of ACT really quick. Again, ACT stands for Accessibility Conformance Testing. The project wasn’t setup as part of WAI-Tools. It predates it by several years. Some of you may also know it as Auto-WCAG which is a group that later got renamed to the ACT Rules Group. <br />
      And the reason that group was started off is to improve consistency in accessibility testing. So, one of the greater challenges Shadi mentioned is consistent testing. You do want, when you get a report from somebody, for that report to be accurate and based on well-founded ideas. Otherwise, you might fix something and you have somebody else take a look at it and they find more things. Or they may find completely contradicting things which can be fairly frustrating. If you don’t have a clear definition of when your project is sufficiently accessible, that makes life pretty hard. <br />
      This kind of gets exacerbated when you look at something like European Union which is starting to track the accessibility of government websites across the whole of Europe.  <br />
      If Denmark tests things in a different way than the Netherlands does, what you’ll end up with is with results that don’t – aren’t very comparable. Even worse, you might have a website that is relevant in multiple countries and if they used different testing methodologies to gauge whether or not you complied with the law – because that’s what we’re getting to at a certain point; it should be legally required to meet these standards – if they are testing along different methods, you may find that your website complies in one country but not in the other even though you’re testing along the same WCAG standard. <br />
      So, that’s really the issue and the problem isn’t too extreme. Like, it’s not like WCAG is all over the place and results go anywhere. But there are differences there and it kind of erodes the trust that you can get from results like that. <br />
      So, that is what ACT was setup to do. And our goal there is, as I mentioned, we started first off with Auto-WCAG which is really focused on doing this for automation. But then we broadened it out to address testing methodologies as well. And testing methodology is not a well-established term but if you ask around in accessibility institutions around the world, most of them have some sort of document that tells you how to interpret WCAG, like what you do with this particular element on a page and with that particular element on a page. <br />
      One of the great things about the kind of accessibility guidelines is that it was written in a way that it is technology agnostic so that it can live for a long time, so that it isn’t just applicable to one particular version of the web standards, but it should be applicable to all of them. But that also means there is some vagueness there that does require that interpretation. <br />
      So those interpretations, those are what we are trying to capture with the ACT Rules and so this is applicable really to lots and lots of organizations. <br />
      Next slide please.</td>
    </tr>
    <tr>
      <td>Slide 3: Benefits of ACT</td>
      <td>So, we’ve developed this rules format, the ACT Rules Format, and the benefits of that are fairly wide. So, like I mentioned, we’ve been working with this format for several years now. That is really the goal of this project, is to use the rules format and develop these rules. And it has really improved the quality of the organizations that have adopted this, like in noticeable ways things have gotten more consistent. That has been between the project partners but also organizations outside of the WAI-Tools Project that have been using the ACT Rules to make their tools, to make their testing methodologies more consistent. So, we are seeing concrete evidence that this approach seems to be working. <br />
      By writing these rules, we then have a more authoritative set of things that we know are conforming to WCAG or are not conforming to WCAG and what we’ve ended up doing is to share these rules with the W3C and to have those published. There are currently eleven of the rules that have been developed, that have been published by the W3C. So, these are really validated by the people that wrote the standard. So, this gives us a lot more credibility as well for the work that we’ve done. This is the way you’re supposed to interpret WCAG for the HTML standard or for SVG documents. <br />
      And by doing this, we resolve a lot of open questions for WCAG. One example of such a question is if you have an image with the text right next to it and the image basically says the same as the text, does that image need to have a text alternative or not? It’s kind of a debated question. Some accessibility experts say yes, some accessibility experts say no, you absolutely should not do that, and the rules answer this question for us definitively so we do not have to have these conversations anymore. It clears things up in a lot of ways. <br />
      And by clearing this up, we enable organizations to test more consistently, which – allows accessibility results to be more widely trusted. You can trust that one organization using ACT Rules will produce almost identical results to another organization using those same sets of rules. <br />
      There can still be small differences but the differences are far smaller than what they used to be. <br />
      Next slide please.</td>
    </tr>
    <tr>
      <td>Slide 4: Festures of ACT</td>
      <td>So, just to get into some of the things that you get from ACT Rules. I think I might have been going over time already, so I’ll keep that quick. <br />
      So, ACT Rules use unambiguous language which is great because it helps you answer things in a very precise way. If you need to know what something means, how to interpret a thing, the ACT Rules offer a very precise description. <br />
      So there’s no more, well, it depends kind of thing going on. ACT Rules are very clear on when something should pass and when something should fail. <br />
      ACT Rules also document assistive technologies. If something doesn’t work in some screen readers but it does in others, you can find that information in the rules and this helps you frame how to understand the results. <br />
      So, in some cases you may still see an issue if you try something with a particular screen reader that you don’t see in the report. That really helps you understand what the results actually mean. <br />
      Then they document assumptions. So, if there are very unlikely edge cases or if there’s a particular interpretation that may be controversial or that is unusual, then that will be documented in the rule itself so you will understand why is the result the way it is and that really helps you frame the results again. <br />
      And then lastly but not least important either, diagnostic for tools and methodologies. We want ACT Rules to be something that can be implemented irrespective of whether or not you’re doing it manually or if you’re automating. That really shouldn’t matter. It shouldn’t matter if you’re using a particular technology stack in your tool or some other technology stack. These are written in a way that everybody is doing accessibility testing. Whether it be fully automated or completely manual or somewhere in between, you should be able to implement these. <br />
      I think with that, I am passing it on to Kasper.</td>
    </tr>
    <tr>
      <td>[Kasper speaking] <br />
        Slide 5: ACT Rules Developed By The Project</td>
      <td>Alrighty. So, I will just briefly talk about the rules that we developed as part of the project and then also briefly touch on how these were actually developed. <br />
      So, just for an overview, we initially set out to develop a total of seventy of these ACT Rules, of which we wanted thirty to be fully automatable, twenty-five of them were to be semi-automatable, and fifteen were to be completely manual rules. <br />
      And we started out by trying to cover as much crowd as possible in terms of the type of content that the rules dealt with. So, we were looking at the text content, graphics, audio/visual media, all the stuff that was really based on, in many cases, the existing rulesets that the individual project partners already had implemented in their individual tools. <br />
      And then later on as the project progressed, we started seeing more and more specialized rules focused on increasingly narrow aspects of their content. We started looking at stuff like orientational arcs implemented using CSS and also things like CSS declarations that couldn’t be overwritten by the users. So, much more specialized failure cases than the stuff that we initially covered. <br />
      We also ended up developing several rules that didn’t relate directly to the WCAG but we are looking at things like WAI-ARIA conformance and also its associated authoring practices that define best practices for use of WAI-ARIA. <br />
      And with that, I will cue the next slide.</td>
    </tr>
    <tr>
      <td>Slide 6: How ACT Rules Were Developed</td>
      <td>Thank you. <br />
      So, as already mentioned, these rules were developed in an open W3C Community Group, and within that group the first thing we of course had to decide, also among the project partners, were which rules we actually wanted to develop. And for this, we had a list of a defined selection criteria so we would look at things like, so, a proposed rule for example or how many new additional success criteria from the WCAG does it cover that we haven’t already covered, and what is the, sort of the options both across the project partners and how easy would it be to implement in our tools, and also how likely was it that this was a rule that would be picked up by the community. <br />
      And then once we had selected rules to develop, we would incubate them in this open community group with input both from the project partners but also the wider community. And this is really when the bulk of the work was spent, with the biggest and most important point probably being reaching a consensus on interpretation of whatever success criteria it was that the rule is supposed to test and also researching, like, the real world implications of what the rule would look at, figuring out so under what assumptions would the thing that the rule looked at actually be a problem. And in case those assumptions didn’t hold, then would there actually be an actual problem? <br />
      So, really finding out where, you know, theory and reality aligned and agreeing on an interpretation that will then form the basis of the rules that we developed. <br />
      And once we had the rules developed, they were implemented by the project partners in our various tools and also validated by another project partner on this fixed set of real web pages that we had selected beforehand. And then once implemented and validated and matured in the community, we would ship them off to the ACT Task Force to eventually be included as official live resources on the WAI webpage. <br />
      And with that, I will pass it on to Carlos.</td>
    </tr>
    <tr>
      <td>[Carlos speaking] <br />
        Slide 7: Adoption and Impact of ACT Rules</td>
      <td>Thank you, Kasper. I’m going to start by talking a bit about how does this impact you, okay. So, what does it mean for you, for the community, that we have developed seventy rules? <br />
      So, first it means that we now have more than seventy different aspects about WCAG that at least three different organizations agree on how they need to be tested. Okay, so I think this is already very significant. <br />
      And when I say at least three different organizations, I’m not saying three different project partners, and this is something that Kasper just talked about. So, because the main work we’ve done in this project was done in the scope of the ACT Community Group, which means that it was an open group and its work was publicly available. So, we are not just three project partners reaching consensus. It’s wider than that. <br />
      And there were involvement at different levels from these organizations outside the project that fortunately was not just at the rule writing and reviewing level. So, not surprisingly, the project partners included in their products, the ACT Rules that we were developing. But I think we can say that we are really happy to see that other organizations started to do the same. So, the other two vendors have now products that include conformance testing using ACT Rules, manual testing methodologies that also include ACT Rules. So, from this you can understand that ACT Rules already have an impact on several tools, on several methodologies, and let me stress this out again, not only from the tools and methodologies made available by the project partners. <br />
      So, if you use one of these tools or if you have your projects checked with one of those methodologies, then ACT Rules have already impacted you, and we can also say – you will be able to hear about this in the next presentation – that these tools and these methodologies are being used by monitoring bodies across Europe. So, we are already witnessing the impact of ACT Rules at a large scale. <br />
      And we believe that ACT Rules will play an important role for the European monitoring efforts as Wilco said. So, given the consistency that the ACT Rules offer, even when monitoring agencies from different countries use different tools, if those tools implement ACT Rules, then their results can be compared with a higher degree of confidence. <br />
      We think this is already a great start but in the future, we can only hope that the impact will be even bigger. So, as also Wilco mentioned, eleven of the ACT Rules developed by the project and adopted by the community have already been published by the W3C. There are more in the pipeline that should soon increase this number and I think that the interest in ACT Rules is only bound to grow when the community starts finding ACT Rules elsewhere. <br />
      Shadi, can you move to the next slide, please?</td>
    </tr>
    <tr>
      <td>Slide 8: Understanding ACT Rules</td>
      <td>Thanks. So, you have a screenshot, so a sneak peek at the Understanding document for WCAG 2.2 soon to be released. And you can find there – yes, thanks, Shadi – a new section on Understanding ACT Rules and we have this section at the same level that we have currently for the Understanding Techniques for WCAG’s success criteria. So, this is really exciting and we are really seeing ACT Rules being adopted and promoted.</td>
    </tr>
    <tr>
      <td>Slide 9: Getting Involved in Further work</td>
      <td>Okay, so now I want to talk to you about how you can contribute to keep ACT Rules going on. <br />
      So, we like to believe that this was a successful project and that we really kickstarted the work on ACT Rules but now it’s up to you, to the community to keep this momentum going. <br />
      And fortunately, there are many ways in which you can contribute. For instance, if you are a tool or a methodology developer, you can start by checking how well aligned your project is to the current consensus expressed in ACT Rules. So you can read the rules that are related to the checks that you support. You can see how well you do on the published test cases. And you don’t agree with some aspect of the rule? Great. We did try our best but we know we are not flawless. So, raise an issue reporting what you found and it will be discussed in the community and the rule will be updated if needed. It wouldn’t be the first time. <br />
      While you are at it, you can send us the implementation reports of your tools and methodologies. In the ACT Rules website, we have a section for implementations where all reports that we receive are displayed. <br />
      So, this is a great way to let the community know that your products are supported by ACT Rules. And irrespectively of your developing tools or methodologies or being a user of such or a monitoring body or someone that’s responsible for publishing accessible information on the web, be happy because there are other ways you can help. We are always looking for more people to help reviewing rules. So, it’s great to have people with different experience and perspectives contributing to this work. <br />
      If you have an idea for a rule, you can write it. Don’t worry if you feel overwhelmed about writing a rule. You can team up with others and do it as a collaborative project. That’s what we are all doing here, collaborating to make the web more accessible. <br />
      And to do any of this, you don’t have to be a W3C member, but if you are or want to become one, then you can actively contribute to support the adoption of more rules into WCAG 2.2 and potentially the new WCAG 3. <br />
      So, Shadi, I think we can move to the final slide.</td>
    </tr>
    <tr>
      <td>Slide 10: Thank you</td>
      <td>And you can find more details about ACT Rules and how you can join this community at act-rules.github.io. And thanks for listening and I think Shadi, now you want to take some questions, right?</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Yes. Questions are coming in. Thank you, everybody who is contributing questions. If you have questions, now is the time in the Q&A function. <br />
      Before we get to that, just to get a little bit of a feel, how many people are subscribed to the community group and roughly how many are active in the calls and, you know, the active part of the work, not just subscribed? <br />
      Who wants to take that question?</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>I’ll take it. It depends a little bit because there are two groups, one in W3C itself and a Community Group which has no official standing at the W3C but is hosted by it. The Community Group has, I believe, around ninety members right now. As for active participants, again that depends on how active you mean active. I think right now we have ten to twelve people that regularly attend meetings like every month, every twice a month, something like that. There’s a whole bunch of people that are slightly less active but that still regularly contribute. As a rule comes up that they are interested in, they’ll drop a review. That happens quite a lot and I frequently get surprised by new people who have come out of nowhere and submitted some information.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thanks. Yeah, I just wanted to give a little bit of an idea and people are, as you were saying, Wilco, participating in different ways. Some people are attending the calls and discussing things. Others completely asynchronously, they are using the GitHub platform.</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>Yeah, it’s – it takes relatively little time for anybody to participate. You can spend as little or as much time as you want. I do also think it’s worth mentioning that just from the people that have joined over the last year maybe, year and half, I frequently hear that they join and they find it a lot of fun and they learn a lot. <br />
      It is a group where you get to learn quite a lot of in-depth accessibility. So, if you’re interested in the nitty gritty details of accessibility, this is really a good group for you to participate in.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Great. So, one of the questions that we have is – I’ll read it aloud – WCAG is supposed to be interpreted to be relevant in different contexts. In one country, users might be using older assistive technology for example and it would be relevant to use all the techniques to meet the requirement. <br />
      Then in a country where all users have the latest versions of assistive technology, in practice it means a solution that is good enough in Germany for example, might not be good enough in Italy for example. And that is fine. So, how do the ACT Rules take this into account? <br />
      Silence?</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>You want to pick somebody? I mean I can answer all of them if you want, but.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Go ahead.</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>Okay. So, it’s a really good question. Thank you. How do ACT Rules deal with that? ACT Rules have an accessibility support section, so if we know about these differences, we will mention them in that section. You can find information about things that may work slightly differently depending on which technology you were using. That information is documented in the rule and if you happen to know any that isn’t, please open an issue and we will add it. It belongs in those documents. <br />
      I also think it’s worth mentioning those differences aren’t that big anymore. The types of assistive technologies that people are using tend to be international ones. There are only a handful of big players out there, so the differences really aren’t that big anymore these days. <br />
      What does matter a little bit is whether or not you exclude some of them. So, for example, if you want to exclude a common screen reader on the Mac, you might have slightly different tasks then if you wanted to include those. <br />
      The rule documents this kind of information for you. That freedom is available within the rule.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thank you. Kasper, I think this one is for you. So, do ACT Rules only cover accessibility tests that can be semi-automated or fully automated? Or are there also rules that clarify rather subjective WCAG criteria like 2.4.6, adding the label that needs to be manually evaluated?</td>
    </tr>
    <tr>
      <td>[Kasper speaking]</td>
      <td>You know, I can definitely provide an answer to that. And the answer is yes, we also have affordances for manual rules. I also mentioned we did set out to implement fifteen fully manual rules, so rules that could not reasonably be implemented in automated tools but could be implemented as part of manual test methodologies. <br />
      I would say, the manual rules are slightly more difficult in the sense that you still have to follow the ACT Rules from it, of course. And the ACT Rules from it are fairly strict on what kind of rules you all have to write. <br />
      One of the big things is that the applicability section of the rules for the description of what kinds of content the rule applies to has to be both completely unambiguous and objective. <br />
      And for some of the success criteria, the objectiveness criteria is really difficult to meet, it has proved. So, yes, you can author manual rules using the ACT Rules format. But it may be slightly more difficult that you still have to remain objective in the applicability section of the rule and that’s difficult to do with some of the more, I would say, subjective WCAG success criteria.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Right, but that’s – I think an important – thank you, Kasper. I think that’s an important question because it also came up in the questions that people asked in the registration form. <br />
      I think a lot of people think about when they hear rules, they automatically think of automated tools only and I think here it’s really important to emphasize that these apply to both manual and not – in fact, actually, we have several rules that we created as part of the project that relate to that specific success criteria on headings and we have others on labels. So, yes – it is done and we also have manual methodology developers who have been implementing these rules in their methodology, comparing their methodology. <br />
      Speaking of, this is a question that also came up in the registration form. Carlos, maybe this is for you. So, somebody wants to create an implementation report for their tool or for their methodology. How do they do that? Can you first explain what an implementation report is and then how they actually do that, how they provide such information?</td>
    </tr>
    <tr>
      <td>[Carlos speaking]</td>
      <td>Yeah, sure. So, perhaps I need to start by providing a bit of context on what’s inside an ACT Rule and specifically an ACT Rule besides having an applicability and expectation as a set of examples. <br />
      Some of them are examples of elements, documents, pages that meet the criteria and so pass the rules. Some of them are failed examples and some of them are examples of pieces of code that are inapplicable for that rule. <br />
      So, what we expect to have in an implementation report is how well does your implementation fair against those examples? So, does it pass the test examples? Does it fail the failed examples? And does it not consider the inapplicable examples of such a rule? <br />
      So, an implementation report is basically a report of the outcomes of your implementation for the different test cases that are described in an ACT Rule. <br />
      How can you submit one and how can you prepare one? Well, we expect your reports to be provided using EARL. The Evaluation And Report Language, serialized in JSON-LD. So, if you do provide us that, we can import that into our website and display it together with the current displayed implementation reports. <br />
      We have a section on the website, so if you go online to the website, there’s a section dedicated specifically to implementations and there are instructions there on how you can submit an implementation. And we have some tools that you can use to help you prepare an implementation report. We have all the test cases for all the rules accessible. So, it can help you prepare for implementation. <br />
      If you have some problems setting up an infrastructure for preparing implementation, do reach out to us and we should be able to assist you in that, in your project.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thank you, Carlos. While I have you on the line, we’re kind of running out of time. There are more questions coming so we might need to push some of these towards the end of the day just to move on. But I think, maybe briefly, Carlos, this one it says, can you give a concrete example of the rule on should we have alt text in an image if the text that is next to the image is the same? <br />
      I think it would help to understand how you choose a specific rule. I think here, if you can explain the test cases in the context here that are part of the rules to help you understand what the rule actually refers to.</td>
    </tr>
    <tr>
      <td>[Carlos speaking]</td>
      <td>Wilco, you seem to have the rules in your head better than I. Which – this is definitely coming from the example that you gave in your presentation. Can you point me?</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Sorry. We don’t actually have the time to go into this.</td>
    </tr>
    <tr>
      <td>[Carlos speaking]</td>
      <td>Okay.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>We could come back to this later. So maybe let me summarize. So, the point is that this rule, there would be a rule that is talking about, let’s say text alternatives for images and these will consider different techniques and the examples, the test cases in the rule would have an example when what happens if there is a description next to the image. What in that case, what the alt text should be? <br />
      So, if we were to write the rule for a good alt text, so the rule that we have right now only checks for alt text whether it exists or not. And if we would have a rule that checks how good an alt text is, it would be – we would have tests cases where we would have different types of situations and so that people could compare test cases towards that. <br />
      Again, we could come back to this later on. We are kind of running out of time but one of the things that was asked is, do rules cover all of the success criteria? Or will the work continue to cover everything? <br />
      Who wants to take that one?</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>I’ll go. So, we haven’t completed all the success criteria. I don’t know if we ever will fully complete everything but we certainly intend to continue to go on with this work. WAI-Tools Project is over but the ACT work is not. <br />
      This is going to be, you know, ongoing projects to continue to extend the coverage. Some of the things not currently done is so – our main focus has been on HTML where it sees it as an SVG. There are definitely still gaps in those, specifically the things that are difficult to automate, but beyond that, there are other technologies to consider as well. There are currently no rules for PDF for example. That is certainly a thing that I would love to see us develop. <br />
      So, there’s definitely more work and it is also good to mention that this is an ongoing process. As technology develops, as the HTML standard develops, as assistive technologies develop, these rules will continually get updated. So, unlike WCAG, these rules are an ongoing thing that need to be maintained so this work is never going to end and I’m going to continue doing this until I retire, so.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Yeah. I like to use the metaphor of snowballs, especially now in winter for many of us, so snowballing, and I think this project started the snowball with seventy rules and now it’s really, as Carlos was saying, now it’s up to you the community to help continue that. <br />
      Speaking of, Wilco, while I have you on the line, there was a question for you. This might be a misunderstanding. Can you talk about how authoritative the ACT Rules are versus the WCAG success criteria? What is the normative part and what is informative?</td>
    </tr>
    <tr>
      <td>[Wilco speaking]</td>
      <td>That’s a fantastic question. So, the WCAG success criteria are published by the W3C as a Recommendation. They’ve gone through an extensive process of public reviews by the W3C and they are an internationally recognized standard. <br />
      So, those are solid as anything. ACT Rules are written by smaller groups. They go through a less involved process of review and they get published still by the W3C but not by the whole of the W3C. There is no massive W3C-wide review but there is a review and an approval that comes from the Accessibility Guidelines Working Group which are the authors of WCAG. <br />
      So, you can see them as these are rules published by the authors of WCAG, whereas WCAG itself is published by the W3C as a standards organization as a whole, so.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thanks. We call these – internally we call them supporting documents. These are the so-called Techniques documents, the Understanding documents - Understanding WCAG 2. So, with every success criteria, there is a document associated with it called Understanding Success Criteria XYZ that explains more background and would help and so on. <br />
      Then there are several Techniques, how you can meet that requirement, and now we also have tests associated with success criteria. <br />
      These supporting documents are informative, so they’re not normative like the success criteria themselves. That is what you have to meet but these are all – all these supporting documents help you make sure that you meet the requirements. <br />
      Good. I will take the liberty of answering two more questions and then we’ll move on. One question was when will WCAG 2.2, when will it be released? That was a teaser from you, Carlos, because you mentioned that in your slides. Currently, it’s planned for mid-2021, so mid this year we expect the new version of WCAG 2.2, and hopefully with as many test rules as possible as part of the supporting documents. <br />
      And then there was another really good question. When can we expect – can we expect the WCAG 3 guidelines to follow the same approach as ACT Rules so WCAG 3 success criteria can be tested more objectively with automation where relevant? <br />
      This is a really good question because just this – just last week on Thursday, fresh, hot off the press, we, the W3C, published the first public draft of WCAG 3.0. This is still a very, very early draft and we would love your comments.  We, of course, want to make WCAG 3.0 more testable and so we want to look at as much approaches, as much carry-over as possible of the ACT Rules. At the same time, WCAG 3 has a very new conformance model. So, they are looking at different ways of evaluating, so not just binary but maybe on a scale. This is maybe a topic for another webinar about WCAG 3.0 but the thing is, yes, we are working closely to try to get – improve the testing in future versions of WCAG.</td>
    </tr>
  </tbody>
</table>
