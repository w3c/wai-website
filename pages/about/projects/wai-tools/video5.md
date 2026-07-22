---
title: "Session 5: Accessibility Data Browser"   # Do not translate "title:". Do translate the text after "title:".
nav_title: "Test Data Browser" # A short title that is used in the navigation
lang: en
last_updated: 2021-03-16
permalink: /about/projects/wai-tools/session5/
ref: /about/projects/wai-tools/
github:
  label: wai-projects
---

{% include video-player.html 
  yt-id="iv1sHHjh3zo"
  path="/content-images/about/wai-tools/"
  captions="video5.vtt|en|default"
%}

This video information is available:
* As a **[Text Transcript with Description of Visuals](#transcript)** below
* [On YouTube](https://www.youtube.com/watch?v=iv1sHHjh3zo)
* On a W3C server — [video (file format: MP4, file size: 71MB)](http://media.w3.org/wai/wai-tools-project/x05%20WAI-Tools%20Data%20Browser.mp4), [English captions file (VTT)](http://media.w3.org/wai/wai-tools-project/x05%20WAI-Tools%20Data%20Browser.vtt)

## Audio Description {#audio-description}

This video does not include audio description because the visuals only support the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. The Transcript with Description below includes descriptions of the supporting visuals.

## Text Transcript with Description of Visuals {#transcript}

This is video is accompanied by **[slides 05 {% include_cached external.html %}](https://www.w3.org/WAI/Tools/slides/meeting4/05%20WAI-Tools%20Data%20Browser.pptx)**

<table>
  <thead>
    <tr>
      <th>Visual</th>
      <th width="65%">Audio</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>[Carlos speaking] <br />
        Title Slide: Test Data Browser</td>
      <td>All right.  So as Shadi mentioned, earlier in the project we tried to think of ways that we could use all the data that might come out of tools that implementation rules and other open data formats, and it was one of our goals to propose a prototype that could show how we could browse the large amounts of accessibility testing data that might become available in such a future.</td>
    </tr>
    <tr>
      <td>Slide 1: Objectives</td>
      <td>So for this, we tried to look at this from the perspective of someone that's responsible for monitoring efforts, and so we asked ourselves:  How can we leverage the support of open data for those monitoring bodies?  And we came up with this prototype, and we emphasize this.  It is a prototype.  It's not something that's production ready, but we developed this as a way to support future explorations of what can such a tool offer.</td>
    </tr>
    <tr>
      <td>Slide 1: Objectives</td>
      <td>So let me start by addressing what types of data did we consider for this prototype.  So to begin with, we need to get data from somewhere, and we can see there are two sources.  First, the accessibility evaluation reports that we have been listening to.  So these evaluation reports are written using EARL so that we can import them.  So something that's an output of an Axe evaluation and Alfa evaluation or a QualWeb evaluation, all tools that can output their evaluation reports in EARL we could import that to this browser. <br />
      And, second, all the accessibility statements.  We included statements that use the open format, both the one that Eric just presented and that was developed as part of the project, but also the one that we adapted to be used in Portugal. <br />
      And from both of these sources, we collect an interesting variety of data.  So we extract from these sources data on success criteria, on the elements that have been assessed on the ACT Rules that were used to check if the tool uses ACT Rules, the assertions that were made, and the outcomes of those assertions.  And so that we can browse this, we have also added the five -- a set of metadata that can be used to categorize and support this evaluation data.  So here we can see the continent, country, the category of the website or the mobile app owner.  So if it's a private or a public entity, the sector where the entity operates in, and even what evaluation tool it was used to produce the report.</td>
    </tr>
    <tr>
      <td>Slide 2: Features</td>
      <td>And we in the tool designed a number of visualizations.  So you will be able to see -- we'll do a short demo after the slide.  So most data is presented using bar charts with -- that are grouped by the assertions or the success criteria. <br />
      We -- besides the bar charts, we have a table.  We provide access to a table with the equivalent data of the bar charts, but we made an effort so that all the charts are keyboard navigable, and we also include a timeline view so that it's easier to get this grasping of how the different metrics have evolved over time.</td>
    </tr>
    <tr>
      <td>Live demo of PLACM</td>
      <td>And I think it's best to illustrate the different ways that we can interact with the demo, with the data, by showing you a demo.  So let me switch to new -- a new window.  Okay.  And so now this is the -- the initial page that you access when you enter this tool. <br />
      Here we have -- let me start with a disclaimer.  All the data that's being presented in this demo was randomly generated, including the name of websites and the evaluation tools, so everything has been randomly generated.  And the volume of data that we have here is representative of the number of evaluations that a country the size of Portugal can expect to have in their monitoring process. <br />
      So as I was saying, this is the initial visualization.  You get a chart grouped by pages that have been evaluated over different continents.  We start at the continent level.  You can include information about the assertions, the passed assertions, the failed assertions, the ones that the tool can't tell if they have passed or failed, the inapplicable ones, and the untested ones.  So similar to what Eric just showed previously. <br />
      You can, instead of showing assertions, show the information based on success criteria.  So passed, fail, can't tell, inapplicable, and untested criteria.  And let me go back to assertions and move this Zoom window to another place and show you the data table that we have.  Basically, the same data that you have in the bar charts can be presented in the tabular format. <br />
      Okay.  So if you want to see data grouped by country, you just pick that on that sidebar.  And now that's -- instead of just seeing, okay, like, seeing everything on the sector page, I just want to know information about the two -- the testability of the private and public sectors in the British Indian Ocean territory.  So I just select that bar, and I can drill down on sector information on the model window that shows up.  And now I have the information about just the British Indian Ocean territory grouped by private sector and public sector, and I can compare that. <br />
      So if I want to see all data about sectors, I can just press there.  And I see, okay, I have over 4,000 pages on the private sector and over 3,000 pages on the public sector. <br />
      And now let's say I want to compare data of the public sector onto specific countries.  So instead of drilling down, I want to group by this -- a way to group this kind of data using another category and, say, okay, let me group this, for instance, France and Luxembourg.  Okay.  So I can now see the data on public sector bodies only.  So we're comparing sector public grouped by two countries, France and Luxembourg.  And in this visualization I can have them both at the same time. <br />
      Let me move to another class.  Let me see.  We can see tags or categories.  Here we have, once again, randomized data.  Don't forget if I want to see how health    how the health sector has been doing over time, I can just, once again, select this on the bar charts.  Sorry.  And then I can go and do -- and select the timeline option, which will show me for every month that I have collected data on this -- on websites or mobile apps that have been tagged as health, I can see the data here. <br />
      Let me go back to tag and show you how I can compare, for instance, data on the health and the media sector.  So here I can use the comparison and health, which is the one that I've selected it already.  Previously selected.  And now I can also select media, and the comparison page will show me, okay, the number of pages that have been evaluated and the passed assertions, failed assertions, can't tell assertions, inapplicable, and untested assertions for both sectors side by side so that I can compare them.  <br />
      Let me just present one more feature.  If I go -- this is specific at this level.  If I go to the application website and I change my visualization from the assertions to the success criteria, now I can have access to specific tests of each success criteria for one application.  So we can see here for the front applications of the fair success criteria, and I'm going to select here this application or website, whatever. <br />
      And I have this -- it's only in this view that I have this option here, the Details option.  So if I go to the Details page, now I have -- okay, for this application or website, I know that passed the success criteria, and I can see the different tests that tell me that, and I see that it failed this success criteria.  And, once again, I have access to the different tests where it fails. <br />
      So we can, in fact, go all the way up from a grouping of the data by continent to specific assertions of one application.  So this shows us the range that we can have just by visualizing data that's made available from this -- from these tools.</td>
    </tr>
    <tr>
      <td>Slide 3: Thank you</td>
      <td>So let me go back to the slides and just -- I've finished my presentation. <br />
      So all of this is open source.  You can play with this demo.  It's available at www.qualweb.di.fc.ul.pt/placm/test.  The source code will be really soon available at this rep.  It's not there yet because we're moving this to a dedicated repository for this -- for these tools.  So you will be able to find it at GitHub.com/carlosapaduarte.  That's -- C-A-R-L-O-S-A-P-A-D-U-A-R-T-E /placm.  Okay? <br />
      And if you have any questions or any problems getting this to run, you can get in touch with me at caduarte@campus.ul.pt. <br />
      And thank you.  I think I've gone a little bit over my time.  Sorry for that, Shadi.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>No.  You're spot on.  Thank you, Carlos. <br />
      And as I told folks earlier on, this is a bit more aspirational part.  So just to recap, we looked at, you know, in the morning of these many, many small rules, right, that test very, very specific parts.  And we looked at so called implementation reports for these.  So how do we collect information from these different rules and the tools and the methodologies implemented?  And then if we can aggregate that on a, say, monitoring body level or, you know, even more widely, can we collect all this data, all this information?  <br />
      I understand this seems a bit more futuristic, but, you know, why not think about that.  Public websites are required to be public.  The monitoring of their reports is required to happen.  If we can provide this open data, we can look more -- and this is not about shaming people.  This is about analyzing where are there issues, which particular sectors need more support, need more training and advocation, and, you know, Member States or countries or even organizations.  It could be on an organization level could use that to improve their actions and what they're doing to make sure accessibility is implemented. <br />
      So the key word here is EARL, the evaluation and report language.  This is a format to write down test results, basically.  I'll read out the GitHub URL for that, where you can go and see that syntax for writing such results.  So it's github.com/w3c/earl, E A R L, Evaluation And Report Language. <br />
      Okay.  We had a question for you, Carlos.  My master's student is studying the Portuguese public libraries website accessibility.  He has full list of public libraries' addresses.  Can he import the list to test data browser and do a summary analysis of all of them?</td>
    </tr>
    <tr>
      <td>[Carlos speaking]</td>
      <td>No.  No.  Because this, too, does not do the accessibility evaluation.  If you have the accessibility evaluation of all of those libraries in EARL format, as Shadi was just mentioning, yes, then you can import those reports and use this tool to go over and do the -- what kind of analysis that you want to do.</td>
    </tr>
  </tbody>
</table>
