---
title: "Session 4: WCAG-EM Report Tool and Statements Generator"   # Do not translate "title:". Do translate the text after "title:".
nav_title: "Support Tools" # A short title that is used in the navigation
lang: en
last_updated: 2021-03-16
permalink: /about/projects/wai-tools/session4/
ref: /about/projects/wai-tools/
---

{% include video-player.html 
  yt-id="zhbhMYZjZF8"
  path="/content-images/about/wai-tools/"
  captions="video4.vtt|en|default"
%}

This video information is available:
* As a **[Text Transcript with Description of Visuals](#transcript)** below
* [On YouTube](https://www.youtube.com/watch?v=zhbhMYZjZF8)
* On a W3C server — [video (file format: MP4, file size: 195MB)](http://media.w3.org/wai/wai-tools-project/x04%20WAI-Tools%20Support%20Tools.mp4), [English captions file (VTT)](http://media.w3.org/wai/wai-tools-project/x04%20WAI-Tools%20Support%20Tools.vtt)

## Audio Description {#audio-description}

This video does not include audio description because the visuals only support the audio and do not provide additional information. In this case, audio description would be more distracting than useful to most people, including people who cannot see the visuals. The Transcript with Description below includes descriptions of the supporting visuals.

## Text Transcript with Description of Visuals {#transcript}

This is video is accompanied by **[slides 04 {% include_cached external.html %}](https://www.w3.org/WAI/Tools/slides/meeting4/04%20WAI-Tools%20Support%20Tools.pptx)**

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
        Title Slide: Reporting Support Tools</td>
      <td>For the reporting support tools, I would like to call Eric Velleman from the Accessibility Foundation to come to the virtual stage.  Eric, please introduce yourself and take it away from here.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Okay.  So, hi.  I'm Eric Velleman.  And let me first start up here on my desktop here.  So I hope you all see this.  That should be it. <br />
      So I'm Eric Velleman.  I'm from the -- I work at the Accessibility Foundation in the Netherlands.  We worked on the ACT Rules and on the reporting support tools.  So I'll be presenting the two tools that we worked on recently.  Both tools are undergoing an update.  And in this short -- the two short presentations that will follow now, I'll show you what the updated tools will look like.  And probably -- and I hope you can see them soon on the W3C website.</td>
    </tr>
    <tr>
      <td>Slide 1: Web Accessibility Reporting Tool (1)</td>
      <td>Okay.  So first the WCAG EM Report Tool.  So it used to be the -- does everybody see this?</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Yeah, we see your screen, Eric.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Okay.  Good.  So it used to be this left thing here, which is if you still go to the website, you will still see this one.  And in the meantime, we've been working on this one, the one on the right.  So it's the updated version.</td>
    </tr>
    <tr>
      <td>Slide 2: Web Accessibility Reporting Tool (2)</td>
      <td>And to get an overview, it can be found at w3.org/WAI -- W A I -- /eval/reports -- how do you call that small line tool -- forward slash. <br />
      And what we did is we follow the procedure to evaluate websites in the reporting tool.  It helps you generate a report according to WCAG EM.  It supports and links to relevant information and tools.  It aligns with the WCAG conformant claims.  And it supports WCAG 2.0 and WCAG 2.1.  It doesn't support WCAG 3 yet.  And it can also show the difference between the two.  So if you had a previous one in WCAG -- a previous evaluation in WCAG 2.0, you can just add -- just only show the WCAG 2.1 success criteria.</td>
    </tr>
    <tr>
      <td>Slide 3: Web Accessibility Reporting Tool (3)</td>
      <td>It is a manual tool, so it doesn't do any automated checks by itself, but it does have the possibility, the new version, to import automated checks.  So if you use Axe or Alfa by Siteimprove, you can import the results as long as they comply with the JSON standard for the import. <br />
      It has the possibility to open and save input, so you can exchange results.  So at the end of an evaluation, you can sort of save your evaluation, send it to a friend, and the friend can import the evaluation and continue with it or check it and send it back to you or -- well, in this way you can work with multiple people on an evaluation as long as you don't work on it at the same time. <br />
      It supports and links to relevant information tools.  I think I said that in the previous slide.  It's an easy translation file.  So it used to be rather complex to translate, but now it's -- it has an easy translation file, so that makes it easy.  There is an English file.  If you translate everything that is in English to your language, you will have your own language file or your own language version of the reporting tool. <br />
      It has changed the new WAI design and framework, and it has the possibility of importing data from tools using the EARL format. <br />
      So now let's shift to the live demo.  It should be this one.  Yeah.</td>
    </tr>
    <tr>
      <td>Live demo of Website Accessibility Evaluation Report Generator</td>
      <td>So this is the live demo of the tool that is currently still on GitHub.  And we are working on it, so you will see that you have the same walk through here.  So the Overview, Scope, Explore, Sample, Audit, Summary, and View Report are the menu items.  And it explains you how the tool works.  It gives tips for using it.  If you go to it, at the right there's sort of a menu bar.  You can view the reports, start a new evaluation, open an evaluation from a JSON file, or import data from automated evaluation tools. <br />
      So to start a new evaluation, you just click the button, and then you go to the first page, Scope.  Well, here you can -- this is not really different from the previous version, only that it also has a WCAG 2.1 and it works a bit better.  It has all the parts that were in the previous tools except, of course, the nice part is this one.  I should show you the translation file here.  So I should push Netherlands.  You'll get the Netherlands version of the tool, which is, of course, great.  If you want your language there, you just translate the file, and ask somebody at W3C to put it in the right folder.  And then all of a sudden, you will have your own language web accessibility evaluation report tool generator. <br />
      Here, the sample.  You can audit the selected sample, which is, like, here with perceivable.  You can sort of declare something as passed, failed, cannot tell, not present, or not checked, et cetera, for all the guidelines and success criteria.  You can add information for a summary, like the name of the evaluator, the evaluation commissioner, the date, executive summary.  And then, finally, you can sort of view the report.  Multiple buttons to do that.  And it will generate the complete report with all the things that you just input in the previous pages. <br />
      And on this page is the interesting button.  Save the evaluation data as a JSON file.  So if you click it, you'll see here at the bottom it saves an evaluation.json.  And if you go to the first page, you can then open the evaluation from JSON.  I won't do that here because you'll see all the documents on my computer, but trust me, it works. <br />
      That's the website accessibility report generator live.  But, once again, great translation.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>So you just changed from English to Dutch.  Thank you, Eric. <br />
      So there are already a couple of questions and just some additional visual description.  So this is not the final design of how it will look like.  It's the kind of tool Eric had read out the URL.  And you can find that URL also from the project page and from the agenda, the report tool.  We're updating it primarily to support translations more easily, but also to put it in the new WAI style.  Many things here is not going to be the final way it looks.  It's still a work in progress.  And so, yeah -- yeah. <br />
      There's several questions, Eric, that -- if you can stop moving around because it's distracting me.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Sorry.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Moving content is distracting.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Oh, sorry.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Yeah.  So can you clarify the difference between open and importing data?</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Yeah.  So open is to open a file.  So I just showed you at the end of the evaluation you can save your evaluation report in the form of a JSON file.  And somebody else can open your report. <br />
      So an import, that is to import data from automated tools.  So like Axe, for instance.  So you can use a tool to evaluate a website, and then the evaluation results can be imported into the WCAG EM Report Tool.  The small angle there is that the only thing that will be imported currently are the URLs that are in the sample.  So it will choose from all the URLs that you have checked with the automated tools.  It will only use the results of the pages that are in your sample at the moment.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Excellent.  Thank you.  And then some more technical questions regarding the underlying data.  Somebody is concerned.  The underlying JSON data, will it stay the same in the new version?</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Yeah, as far as I know.  You know, I'm not sure about that.  So you mean if you have JSON data from the previous tool?</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Yeah.  No.  The reports you have so far will stay valid.  So, yeah, so the functionality, the importing and the opening and closing will be the same, and the JSON format will remain unchanged. <br />
      Okay.  Another question that came also in the -- similar question was on the registration.  Can you export -- so we can now export an HTML and in JSON format for machine readable.  Are there other formats, for example, pdf or Word or Excel or something?</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>No.  No.  Just HTML as far as I know and JSON.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Right.  We do have GitHub where you can put wish list requirements or you can open issues.  Also, if you find bugs, please do report these, and we will -- yeah, we will see what we can do in the future.  But right now, yeah, we do not export to other formats. <br />
      There was a question:  Can you show an example of importing an Axe EARL report?  So this was about reporting from -- importing from automated tools.  So on -- I think you said you don't want to show the files on your computer, which is fair enough.  I think the best we can do is there's -- the EARL GitHub -- and I'll give the URL later to the EARL GitHub.  I think it should be linked from the WAI Tools Project page as well, and there -- there should be some sample reports there that you can use from there. <br />
      Okay.  Eric, does the report generator evaluate web or mobile apps?</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Web.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>And it's WCAG, so it's independent.  So, actually, the important thing is this is not an automated tool, so it actually uses all the criteria, so you can use it just as well to create reports for the apps.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>At Accessibility Foundation, we use the same tool to evaluate apps.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Right.  Good.  Good to hear.  Wow, there's a whole bunch of questions coming in.  We want to move on.  When this new version will be released?  That's a really good question.  Yeah.  We hope in the coming week or two.  So please hang on.  We'll let you know as quickly as possible.  At the end of the presentation today, at the end of the session, I'll be giving you information on how you can receive updates, how you can be notified, and so we'll let you know as soon as the new version is available. <br />
      Another question:  Austria and Spain uses the tool from monitoring bodies and make changes.  Is there any exchange between your organizations?  So, yes, we did actually ask for inputs through GitHub.  And I believe we got comments from Austria, I believe, maybe directly, maybe indirectly.  And so, yeah, we developed this, you know, openly.  Of course, we always love more input so that we can consider any requirements in future versions.  
Then another question.  Would it be easy to add non WCAG criteria to the report generator?  For example, other clauses from the EN, from the European standard of the directive.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Well, I mean, if you have a programmer then I think it would be easy maybe.  But it's -- yeah.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>It's open source.  So, yeah, you would be -- yeah.  It's --</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>All on GitHub.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Not out of the box, but you should be able to adapt the -- okay.  And then last question before we move to your next presentation, Eric.  We often have multiple analysts working on evaluating a site at the same time.  Is there any way to break out of a page for evaluation and upload these results back to the main evaluation so they could work in tandem so that somebody -- I understand the question that somebody evaluates part and then the other evaluates other parts and then we can combine the reports.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>No, not if do you that simultaneously.  So if somebody stops evaluating and another takes up, then you can send each other the JSON file, and the other one can continue.  But if you -- as far as I know, if you both do the evaluation, you import the file.  I'm not quite sure what happens then.  So could be that it is added.  Hmm.  I'll put it on the list of things to check.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Right.  Yeah.  And then information in Germany, we also use the tool and make changes, but we're still at work.  So, obviously, using that and making changes to it, yeah, welcome to -- we also welcome translations</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Yep.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>For all resources that you've talked about.  There were some questions on translations that I'll come back to later again in the Q&A.  Yeah.  So -- oh, and somebody -- at the moment we add an Excel converter.  So that's nice to hear that there's something like that.  Again, this is an open source project, so you're always welcome to contribute things back into GitHub if you wanted to. <br />
      There are several issues in GitHub of people asking to have, for example, this collaborative so that multiple people can edit at the same time.  We know that this is a feature request, but that's actually quite a project on its own.  For now we started really with just this import to allow when you select a sample of pages from your site and you have automated results, you can fill in what the tool knows, but you still need to continue doing the manual part of your work.  But it helps combine automated and manual testing. <br />
      Okay.  We're a bit behind schedule, Eric, so please go ahead and continue.</td>
    </tr>
    <tr>
      <td>[Eric speaking] <br />
        Tile Slide: Accessibility Statements</td>
      <td>Okay.  Let me get my presentation back.  Get you back.  Share screen.  So there we are. <br />
      The accessibility statements.  Well, this is a shorter story because we did a lot more work on the evaluation tool, and not just adding translation -- the possibility of easy translation there, but also adding a lot of functionality like the imports and like the saving and opening files and to be able to share evaluations.</td>
    </tr>
    <tr>
      <td>Slide 1: Accessibility Statement Generator (1)</td>
      <td>So for the accessibility statements generator, it is still the version that you can see live on the W3 website.  If you search for statements generator on W3, you'll find it immediately.  It's at W3.org/WAI -- W A I -- /planning/statements and slash.</td>
    </tr>
    <tr>
      <td>Slide 2: Accessibility Statement Generator (2)</td>
      <td>And there's a page there to generate an accessibility statement with a lot of information on the Preview button, but you still have to fill in everything by hand.  So what the generator does is it guides you on providing accessibility statements.  It is aligned with the EU Web Accessibility Directive and with WCAG 2 Conformance Claims.  It is a manual generator, so this one does not do any automatic checks.  But you could link to the evaluation reports or to a JSON file, but you output it from the previous tool. <br />
      The output is available in both human and machine readable formats.  The tool includes examples of statements, guidance, how to make accessibility statements.  Most people are, like, what is important for people with disabilities?  What would they like to see in a statement like that?  And a statements generator tool.  It includes input from communities and experts, and it is almost ready for translation to your language because we're still working the last bits of that.  So, also, in, like, a week or two, this should be done.  And then you could just take one file, translate everything in that file, and you would immediately have your language version of the accessibility statements generator.  The only thing that has to be done is that somebody at W3C will then have to put the translated file into a folder.</td>
    </tr>
    <tr>
      <td>Slide 3: Accessibility Statement Generator (3)</td>
      <td>So why would you provide an accessibility statement?  Well, that is to show users that you care about them and about accessibility, to provide them with valuable help, for CSR reasons, or it may be a requirement, like in Europe for the Directive, for public sector bodies. <br />
      And what does the tool then do?  Well, the tool asks you the questions you need to answer.  So it asks you basic information, your efforts, technical information about the accessibility, and regarding the approval and complaints process.  It helps create an accessibility statement that can be further customized and branded, et cetera.  So you can just save the end result and make your very much most -- more beautiful version out of it. <br />
      It helps make accessibility statements conformant with the EU Directive.  And the output is not for lawyers, but for users of your content.  So make sure they understand so they know what to do.  That was the idea behind the accessibility statement generator. <br />
      And the future work is the translations.  We're working on it now.  And we also looked into the possibility to add your own questions.  That was one of the issues.  So if you go to the GitHub page, you'll find a lot of proposals there for changes to the accessibility statements generator.  We had to prioritize.  So besides a few other things, the most important thing was the translations.  But all the code is there.  So, also, in this case you could take the complete code and add your own questions.  And I think in the case of the accessibility statements generator, that would really be a fairly simple thing to do.  I think even if you're not really extremely technical you could probably do that.</td>
    </tr>
    <tr>
      <td>Live demo of Generate an Accessibility Statement</td>
      <td>Okay.  Now for the live demo.  Let me go here.  So this is the live page on the W3 website.  And it's at W3.org/WAI/planning/statements.  And then if you go to /generator and then slash -- well, then you will get to this create page, where it asks you basic information like the name of your organization, which could be like this, and then a telephone number or address of your website.  That's not a correct one.  Over here the standards applied, the conformance status, the additional considerations.  Don't send them me.  Et cetera. <br />
      So there's the efforts you did, like organizational measures you took or any other measures, you can add them here.  Technical information like the accessibility limitations, compatibility with user environment, et cetera.  So it's all -- this is all described in detail.  If you show info here, below every header or form fields, there is -- or above every form field, there is more information about what you could fill in there.  The technologies used, et cetera. <br />
      Then somewhere at the bottom you can preview your accessibility statement, and it takes you to your accessibility statement.  So I haven't filled in anything, so now it's website name.  But if I would go back, let's see here.  I will put at least a name in here.  Oh, I did put the name in here.  Terrible things of life.  Okay.  Well, here it is.  So I probably forgot something.  It does the description of the name.  So it's a few forms later.  So it will generate -- everything that you fill out will be appearing below here.  So that is why it is currently very short, but the more information you input, the more information you get in this accessibility statement.  That's it. <br />
      And then above here -- of course, before I say that's it, I should have said somewhere here above you will soon see this translation button where you can get the file, translate it to your language, and then see your own language version of this accessibility statement.  Yeah.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thank you, Eric.  Yeah.  So right on time.  We have a couple of questions that I think are a little bit beyond the scope of this project, but they're really good questions. <br />
      So one question is:  I've seen public sector websites publishing accessibility statements only to conform with regulations.  In those statements they say that some parts are not accessible.  What's the use of having such statements? <br />
      So, yeah, that's a really good question.  And this is one of the reasons why, you know, in addition to the generator, we have guidance, including examples of accessibility statements, to really try to promote good practice.  But, yeah, this issue, I guess, of what people do or don't is a little bit beyond our scope. <br />
      Another question that also Jorge might be interested to weigh in.  It was saying:  I was interested to learn that in Portugal there's a proposed standard URL pass for accessibility statements.  So on a public website if you write "acessibilidade" in the URL, you should get the accessibility statement.  Are there more countries with such standard locations? <br />
      Eric, first, are you aware of other countries that have a similar practice?</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Yeah.  I know that the Netherlands has a standard location where you can find all the accessibility statements.  That is at the toegankelijkheidsverklaring.nl.  And you can find enough of you of 2,500 toegankelijkheidsverklaring.  And that is also the place -- sometimes they're not even on the website or you can't find them on the website of the public sector body, but you can find them on this website that is hosted by the central government.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Jorge, any other thoughts on this?</td>
    </tr>
    <tr>
      <td>[Jorge speaking]</td>
      <td>Well, I don't know other countries where they use also the standard URL.  But, yes, in Portugal we are using this one.  For example, I know that in Italy they centralized the accessibility statement in a website, and you make a link to that website.  The accessibility statement is not on the website of the -- of the public sector bodies, so it is outside, centralized in a server managed by the national authority.  But I don't know other -- or other examples.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Thank you.  Yeah.  And that goes directly to the next question.  Do all countries adopt this statement generator, knowing that some countries in the EU have additional requirements, for example, France and Netherlands?  The latter also has its own generator.  And then there is the Dutch name, which I cannot read.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Toegankelijkheidsverklaring.nl.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Yeah, be nice to the captioner, Eric.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Oh, that’s trouble.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Having a match.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Woops.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Okay.  So we do not -- yeah.  We provide this accessibility statement generator as an example as the minimum requirements in the Directive.  Also something internationally -- this is not only for Europe, but providing accessibility statements as a best practice internationally.  And the expectation is whoever wants can take it, adapt it.  So this is why Eric mentioned that you can actually add additional questions, so we try to write the code in such a way that you can extend this basis and also translations so that you can use this separately. <br />
      So, yeah, it's a tool to help.  Some have reused it, like in Portugal.  Others have not.  And it's totally up to -- you know, to people what they do with it.  We did notice -- we did learn from Portugal that the translation was not as easy, and this is why we're redoing that, to support translation.  
Good.  And then somebody re -- put the Dutch URL again.  I think somebody wants to have fun with Dutch.  Good.  Thank you very much, Eric.</td>
    </tr>
    <tr>
      <td>[Eric speaking]</td>
      <td>Sorry.</td>
    </tr>
    <tr>
      <td>[Shadi speaking]</td>
      <td>Dutch lesson in the next webinar.  Let's now move on.</td>
    </tr>
  </tbody>
</table>
