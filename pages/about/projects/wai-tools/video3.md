---
title: "Session 3: Portuguese national observatory"   # Do not translate "title:". Do translate the text after "title:".
nav_title: "Portuguese Observatory" # A short title that is used in the navigation
lang: en
last_updated: 2021-03-16
permalink: /about/projects/wai-tools/session3/
ref: /about/projects/wai-tools/
github:
  label: wai-projects
---

{% include video-player.html 
  yt-id="k-xbzdxaysA"
  path="/content-images/about/wai-tools/"
  captions="video3.vtt|en|default"
%}

This video information is available:
* As a **[Text Transcript with Description of Visuals](#transcript)** below
* [On YouTube](https://www.youtube.com/watch?v=k-xbzdxaysA)
* On a W3C server — [video (file format: MP4, file size: 49MB)](http://media.w3.org/wai/wai-tools-project/x03%20WAI%20Tools%20Portuguese%20Observatory.mp4), [English captions file (VTT)](http://media.w3.org/wai/wai-tools-project/x03%20WAI%20Tools%20Portuguese%20Observatory.vtt)

## Audio Description {#audio-description}

This video does not include audio description because the visuals only support the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. The Transcript with Description below includes descriptions of the supporting visuals.

## Text Transcript with Description of Visuals {#transcript}

This is video is accompanied by **[slides 03 {% include_cached external.html %}](https://www.w3.org/WAI/Tools/slides/meeting4/03%20WAI-Tools%20Portuguese%20Observatory.pptx)**

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
        Title Slide: Portuguese Observatory</td>
      <td>The Portuguese observatory. So, Jorge, do you want to introduce yourself briefly and then please get started. And you are muted.</td>
    </tr>
    <tr>
      <td>[Jorge speaking]</td>
      <td>Sorry. Because the button changed the position of the mic. Let me also put my camera to see me. <br />
      Okay. Hi, everyone. I'm Jorge Fernandes from the Portuguese Agency, the AMA, Administrative Modernization Agency. We are responsible for the monitorization in Portugal of the web accessibility. We are the body responsible for that. We belong to the Ministry of the Modernization of State and Public Administration. And, well, I'm working in the field of web accessibility since 1999, so in the beginning of the WCAG 1.0. And I'm here to present you the Portuguese observatory.</td>
    </tr>
    <tr>
      <td>Slide 1: An Observatory to Raise Awareness ...</td>
      <td>I think I can continue now, Shadi?  Okay.  In the -- sorry.  I will try to get the connection with my slides.  Okay.  Next one.  So in the Portuguese legislation, we have explicitly a method of evaluation mentioned based in the simplified method of the directive.  In the preamble of the Implementation Act about monitoring, I underlined these two ideas.  The monitoring should raise awareness and encourage learning in Member States, and the overall results of the monitoring activities should be made publicly available.  These must involve all entities, all public sector bodies.  And the monitoring is not an external exercise to them.  So it's something that they need to do it by theirselves.</td>
    </tr>
    <tr>
      <td>Slide 2: The Directive and PT Trasposition</td>
      <td>That is one of the reasons why we in Portugal abide the centralized model of evaluation, a method of three steps to each entity evaluate.  The simplified method based on automatic and semi-automatic tools.  And in that what we call an in depth light is a manual evaluation based on a checklist that we call the ten critical aspects of the functional accessibility, such a kind of W3C Easy Check. <br />
      And, according to our legislation, this is mandatory, these two references, these two methods of evaluation, and is recommended, also, usability tests with people with disability with a minimum of one task, one users' typology of the European standards, like, you know, the EN 301 549.</td>
    </tr>
    <tr>
      <td>Slide 3: Simplified Method Based in Evaluation Tools</td>
      <td>About the simplified method, as you know, in the Implementing Act, the page sample needs to have a number of pages appropriate to the estimated size and complexity of the website.  This is the main principle mentioned in the Directive. <br />
      In the Portuguese proposal, the page sample is composed by the home page plus all pages linked from the home page.  From the historical studies in Portugal, we know that this means about 60 pages per website in public administration. <br />
      Evaluate with automatic tools to WCAG 2.1 AA.  And the public sector body can use any kind of tool, but our team will load all the samples in the Portuguese observatory, and all of them is public.</td>
    </tr>
    <tr>
      <td>Slide 4: Portuguese Evaluation Tools</td>
      <td>All our tools used same engine, the QualWeb, that already Carlos mentioned.  We have the AccessMonitor.  That is a tool that produced a web accessibility report of one page.  That is also in our website.  And the observatory is an awareness tool with global statistics of the entities.  If the entity want to know more details, they need MyMonitor.  So the observatory don't give the detail of the information -- all information of the sample.  To do that, the entities need to have -- to have access to another tool.  That is the MyMonitor.  So we give them the MyMonitor, and, of course, we include our contact network of people that is working in the field.</td>
    </tr>
    <tr>
      <td>Slide 5a: Impact of the ACT-Rules</td>
      <td>So the impact of the ACT Rules in our tools.  Until now we change 20 of 80 of our tests based in 13 ACT Rules.  Get a more comprehensive analysis, a post processing browser analysis, see more -- at the moment, our tool see more HTML elements.  Our tool is also ready to translate to other languages.  The output is in EARL and the CSV format.  We can output all the results in these two formats. <br />
      The tools are open source.  All the source are in the GitHub.  You can find them at the amagovpt.github.io/eed.  It is the local where you found the source code.</td>
    </tr>
    <tr>
      <td>Slide 5b: Impact of the ACT-Rules</td>
      <td>So the biggest impact of the WAI Tools Project are in the test rules.  Just to mention two examples, the headings and the images that we already spoke in this presentation today.  Well, talking about the headings, in the past we have headings as traditional H1 to H6.  We detect that.  Now we detect more headings because we have the traditional ones and the new ones that I mention here has an ARIA-like.  We have the attribute role heading in conjunction with the attribute level with 1 to 6 and maybe more headings with more levels.  So all of them at the moment are detected by our tool.</td>
    </tr>
    <tr>
      <td>Slide 5c: Impact of the ACT-Rules</td>
      <td>About the images, in the past, we only analyzed the alt of the images.  Now we have four different attributes where we can put also the alternative text, the ARIA labelledby, the ARIA label, the alt, and also when we use the title alone.</td>
    </tr>
    <tr>
      <td>Slide 6: QualWeb Engine</td>
      <td>If you want to try all the ACT Rules that we have at the moment, you can check -- you can check the QualWeb.  That is in qualweb.di.fc.ul.pt.  So qualweb.di.fc.ul.pt.  And there you can try all the 67 -- 67 rules that we have at the moment from the branch of 70.</td>
    </tr>
    <tr>
      <td>Slide 6: Demo of the Observatory</td>
      <td>So let's try a demo of the observatory.  And now is the moment of David Attenborough.  I will put running a video.  Let me try.</td>
    </tr>
    <tr>
      <td>Video in slide playing</td>
      <td>Let's try a demo of the observatory.  The observatory is organized from the big picture until the drill down of one entity.  So the first page of the observatory have the big picture.  Global score from 1 to 10.  Ten is a good practice.  Total number of categories, total number of websites, pages, a ranking table of the categories with the number of pages conformed by level. <br />
      We started by entering the 308 Portuguese municipalities with the sample home page plus all pages linked to the home page.  We have more than 50,000 pages introduced at the moment.  We have data graphics as histogram of scores and the ten most frequent errors. <br />
      Let's go now to a category, for example, the category of the municipalities.  Second level, the level of category or directory, in this case, the municipalities.  The same organization of the first level with the score, the statistical graphics, the total number of websites, the ranking table of entities. <br />
      Let's see the municipality of Murca.  The average score of 9.9, the total number of pages, 243, three pages conform with level A, and 226 pages conform with AAA.  It's a good one.  Let's see the Murca municipality in detail in the third level.  Again, the same organization of data.  Histogram, the ten most frequent errors, the top five errors by conformity level, an accessibility plot in a radar graphic.  The more full the circumference is, the better.  And a table with detailed error distribution.  Work in progress.  An observatory with more info and with a new look.  The evolution of page conformity on the left graphic, the accessibility plot on the right.  The histogram of scores.  The bad practices, but also the board of good practices with the better practices by WCAG level.  And, also, the detailed distribution of all the better practices found. <br />
      Let's try a demo of the observatory.</td>
    </tr>
    <tr>
      <td>Slide 7: The Accessibility Statement</td>
      <td>And now I have also a demonstration of our accessibility statement that is made based on -- in the WAI Tools accessibility statement.  We have a crawler to pass through all websites of the public administration, and we can collect information about the conformity level of the -- that is mentioned in the accessibility statement.  And our goal is to collect all the information because our accessibility statement is machine readable, so it is possible with a crawler to get this information automatically. <br />
      And I will show you also what we can also do with the machine-readable reading, for example, an accessibility statement already published and use it to create my accessibility statement.  Let's see another demo.</td>
    </tr>
    <tr>
      <td>Video in slide playing</td>
      <td>A demo of the Portuguese statement generator.  Technically the Portuguese generator is based on the WAI Tools generator.  Imagine that you are navigating in the ePortugal, the citizen portal of Portugal.  And you want to found the accessibility statement.  You know that if you use the suffix "accessibility" in the URL, "acessibilidade" in Portuguese, it is supposed to find the accessibility statement.  And here it is, the accessibility statement, with the references of the analysis done, following the model of the directive and the Portuguese legislation. <br />
      At the bottom of all statements, we found a link to the generator used to do it.  My goal is to create the accessibility statement to my website.  I can use the button "upload by URL."  I can create my accessibility statement based on the one of ePortugal.  I enter the URL of ePortugal statement page, I press OK, and is done.  And I have the form with all the data of the ePortugal accessibility statement. <br />
      Now I change the data according to my organization and website, press the button "Preview and Download," and the statement is already with my data.  Well, more or less, because in this demo I only change one field, the name of the organization.  Then I press the button "Download HTML." <br />
      I got the HTML format.  Only the structure of the document, not the styles.  I copy paste this HTML code to my website.  And when I did that, my accessibility statement got the style of my site, and everything is in place.  And we got another accessibility statement machine readable, in this case, based on the ePortugal.</td>
    </tr>
    <tr>
      <td>[Jorge speaking]</td>
      <td>Okay.  So a demo of the Portuguese statement generator again.  At the moment, we -- with the crawler, it is possible from data from today we know that we have 32 accessibility statements.  We do 16 compliant, eight partially compliant, and eight no compliant is some of the data that it is possible to get automatically from the accessibility statement.</td>
    </tr>
    <tr>
      <td>Slide 8: Thank you</td>
      <td>So if you want to see live the Portuguese observatory, you can use the URL observatorio.acessibilidade.gov.pt.  So observatorio, O B S E R V A T O R I O.   <br />
      And that's it for my presentation.  Thank you very much.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thank you, Jorge.  Yeah.  So, actually, we have a question right away.  The question is --</td>
    </tr>
    <tr>
      <td>[Jorge speaking]</td>
      <td>Don't say.  Yes.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>If we want to install the testing service to our own server, do we need -- oop, and I moved -- do we need the QualWeb core in GitHub only, or what is the purpose of the monitor service, et cetera, repos in ama.gov.pt repos?  So this is a bit of a technical question.</td>
    </tr>
    <tr>
      <td>[Jorge speaking]</td>
      <td>Yeah.  Maybe Carlos can help me.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>About the installation of this.  Somebody wants to use it locally.  Carlos?</td>
    </tr>
    <tr>
      <td>[Carlos speaking]</td>
      <td>Yeah, sure.  I can help, definitely.  You don't need to install any QualWeb related service to have the observatory and the tools in the observatory ecosystem working.  The monitor server that you mentioned in that question includes the QualWeb core.  So everything that requires an accessibility evaluation is handled through the monitor server, which is also tasked with translating the outcomes of QualWeb into the formats that the tools in the PT observatory ecosystem use.  So everything that you need to have your own copy of this ecosystem is available from the AMA GitHub repository.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Right.  So that's one particular aspect is that this entire observatory and all the tools are completely open source, and I'm sure they welcome contributions as well. <br />
      Now, Jorge, another question was:  I don't understand why a new accessibility statement can be made by copying a published -- an existing accessibility statement.  Can you please clarify?</td>
    </tr>
    <tr>
      <td>[Jorge speaking]</td>
      <td>Yeah.  You know, one of the things in the -- when you need to fulfill the accessibility statement is to understand what is in different parts of the statement.  So when you can visualize a final declaration already full field, we know that this help also to adapt and to fulfill our own declaration.  So it's something that it is helpful to do that, and it is also when you already have the declaration in your website and want to do changes, you need -- you also can use the same method that I used here in the demo to make changes of your own declaration.  So it is a question of it's more easier to understand how to fulfill the new declaration and also help to modify our own declaration.</td>
    </tr>
  </tbody>
</table>
