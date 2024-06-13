---
title: "Session 1: WAI-Tools Project Overview"   # Do not translate "title:". Do translate the text after "title:".
nav_title: "Project Overview" # A short title that is used in the navigation
lang: en
last_updated: 2021-03-16
permalink: /about/projects/wai-tools/session1/
ref: /about/projects/wai-tools/
---

{% include video-player.html 
  yt-id="Pbtw8KFw6q8"
  path="/content-images/about/wai-tools/"
  captions="video1.vtt|en|default"
%}

This video information is available:
* As a **[Text Transcript with Description of Visuals](#transcript)** below
* [On YouTube](https://www.youtube.com/watch?v=Pbtw8KFw6q8)
* On a W3C server — [video (file format: MP4, file size: 60MB)](http://media.w3.org/wai/wai-tools-project/x01%20WAI-Tools%20Project%20Overview.mp4), [English captions file (VTT)](http://media.w3.org/wai/wai-tools-project/x01%20WAI-Tools%20Project%20Overview.vtt)

## Audio Description {#audio-description}

This video does not include audio description because the visuals only support the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. The Transcript with Description below includes descriptions of the supporting visuals.

## Text Transcript with Description of Visuals {#transcript}

This is video is accompanied by **[slides 01 {% include_cached external.html %}](https://www.w3.org/WAI/Tools/slides/meeting4/01%20WAI-Tools%20Project%20Overview.pptx)**

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
        Slide 1: About the Project</td>
      <td>Just a little bit about the project itself. WAI-Tools Project is an acronym for Advanced Decision Support Tools for Scalable Web Accessibility Assessments of the Web Accessibility Initiative. So, WAI-Tools. <br />
      So, it’s a project of the W3C Web Accessibility Initiative co-funded by the European Commission, the EC, under the Horizon 2020 program. It’s a so-called Innovation Action project. So there are different types of projects that the European Commission supports and this is one of them. It’s under the line of innovation action. <br />
      It started on the 1st of November in 2017. It also – it already feels like many decades ago. And unfortunately actually, coming to an end at the end of this month. As I mentioned, it’s been a really great project, great fun working with the partners.</td>
    </tr>
    <tr>
      <td>Slide 2: Project Partners</td>
      <td>Speaking of the partners of the project, the lead partner is the European Research Consortium for Informatics and Mathematics, ERCIM which is the European host for W3C. So, this is the legal footing of W3C in Europe. <br />
      Other partners in the project are Siteimprove from Denmark, the Accessibility Foundation in the Netherlands, the Norwegian Digitalisation Agency, Digdir, and the Administrative Modernization Agency in Portugal, AMA. The University of Lisbon, FCID, in Portugal, and Deque Research which is based in the Netherlands. <br />
      So, these are the project partners who together are responsible for moving this forward, this project, but really a lot of this work is happening or happened in – directly in open W3C groups and we’re going to be talking more about that, about how the project work has happened and how you can still contribute to some of this project work which is going to continue happening in these groups.</td>
    </tr>
    <tr>
      <td>Slide 3: Objective 1</td>
      <td>But just to give you a little bit of the objectives of the project, what did we really want to achieve with the project? One of the main objectives here on the screen is an illustration where at the very top of the illustration is kind of the ultimate goal. We all want compatible results, right? <br />
      When we are evaluating for the Web Content Accessibility Guidelines which is the layer below, we’re evaluating for accessibility or testing for accessibility, we’re using different methodologies, so different methods. But at the end of the day, we’re testing for the same set of guidelines and we want to get compatible results. We want to get the same results when we test the same things, right, no matter how we actually test them.</td>
    </tr>
    <tr>
      <td>Same slide; highlight around "ACT Test Rules (open royalty free)" middle layer of the diagram</td>
      <td>And so, this was really the focus of the project, to look at what we call ACT test rules, Accessibility Conformance Testing rules. The point is these are very, very small procedures for testing that can be combined together for different methodologies. And methodologies here is a broad term. It could be automated tools or anything. Any procedure that you follow for manually checking, this is a methodology as well. So, really, anything that encodes how you check accessibility is a methodology. It could be manual. It could be automated. It could be a combination, semi-automated, so a combination of automated and non-automated approaches together. <br />
      So, if we have very small building blocks, and they are depicted here as these small boxes, these small squares, very, very small, like Lego pieces, we can combine these together to provide different methodologies but at the end of the day, if we test the same thing, we want to get the same result. <br />
      So, that’s really the objective or the vision of the project is to try to get consistency because we know that one of the big issues of accessibility right now is that we don’t have that consistency. We have different tools that provide different results or different evaluation methods. So, you go to one person and you get one result and then sometimes you can get slightly different results when you go to a different person to get it checked. That’s a big problem for accessibility that we’re trying to address to have more consistency of how we test.</td>
    </tr>
    <tr>
      <td>Slide 4: Objective 2</td>
      <td>Another objective of the project, by defining these checks and finally agreeing on them and not having to constantly re-repeat how we test certain things, how do we test the text alternative or how do we test the label. If we can finally decide and agree on a common interpretation for these checks, maybe we can increase automation in that. <br />
      Right now, a very large part of accessibility needs to be tested manually. But we also know that there is a lot of advancements happening in the technology. Buzzwords, artificial intelligence or machine learning, natural language processing. All of these technologies are evolving, all of these innovations that would essentially allow us to increase the level of automation. <br />
      It doesn’t mean that accessibility will be fully automatable, at least in the foreseeable future, but at least we can maybe increase the amount of tool support which would be – would make things much more effective and much more efficient if we can increase this level of automation.</td>
    </tr>
    <tr>
      <td>Slide 5: Project Deliverables</td>
      <td>So, these are really the objectives or the core pieces of the project. The deliverables of the project, which we’re going to go into more detail, but hopefully from a more applied side, is the main part of the project, the heart piece is to develop Accessibility Conformance Testing rules, right. So, this is to create an initial set hopefully to get the work in the community kickstarted to help establish an active community that will sustain beyond the project. So, this is a call on – call for action for you to get involved in this work that will continue beyond the project. <br />
      We implemented these rules that we developed in different tools from project partners in the project, here specifically the partners Siteimprove in their checker called Alfa, in Deque in their checker called Axe-core, and in – a tool from the University of Lisbon in a checker called QualWeb. <br />
      And we also validated these rules in real-life situations. We had a set of websites that we took and that we ran these rules across. <br />
      Now, these rules were applied in different ways, were test-driven, or were taken up by the Portuguese and Norwegian observatories. These were part of the project to kind of really ground us and look at when entire countries want to do large scale monitoring of accessibility, what are their needs? What can we learn from that? And how can we provide them with different types of rules that will support getting them valuable information? <br />
      We looked at improving the existing WCAG-EM Report Tool. So, people might know that tool. It already existed. WCAG-EM stands for WCAG evaluation methodology. It actually has a longer name, Website Accessibility Conformance Evaluation Methodology. It’s a long name. But this is an evaluation methodology for WCAG that can be used to test entire websites. And it was a tool to help you walk through that and now we have added to that tool an import function so that you can import test results from automated tools, again here to show the idea that we can combine automated and manual when we’re using open standards here. <br />
      We also created an accessibility statements generator tool. So, this helps you create accessibility statements for your website once you have done the testing to explain to the world the accessibility that you have on your website. <br />
      And last but not least, a demo, a proof of concept to show, to demonstrate the potential of open linked data for accessibility. So, what if – right – what if we had these test results being published, at least those by public bodies, and we could connect these and we could scrape these and we could do a more active or decentralized monitoring approach?</td>
    </tr>
    <tr>
      <td>Slide 6: Project Results and Furhter Information</td>
      <td>So, these are the project deliverables. More information is on the website. We will provide you these links at the end again so you don’t need to start looking at the links. The address is w3.org/WAI/Tools. That is the project page for the WAI-Tools Project and you can find here further information, all the resources, all the deliverables, including this open meeting with the slides online as well.</td>
    </tr>
  </tbody>
</table>
