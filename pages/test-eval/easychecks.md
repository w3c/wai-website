---
title: "Easy Checks – A First Review of Web Accessibility"
permalink: /test-evaluate/easychecks/
order: 0
date: 2017-08-09
people:
  editorslabel: "Editor"
  editors:
    - name: Shawn Lawton Henry
      url: https://www.w3.org/People/Shawn
  contributors:
    - name:  Sharron Rush
    - name: Suzette Keith
    - name: Anna Belle Leiserson
    - name: Andrew Arch
    - name: Wayne Dick
    - name: Caleb Watson
    - name: Vicki Menezes Miller
    - name: Jennifer Sutton
    - name: Ian Pouncey
    - name: Denis Boudreau
    - name: Tom Jewett
---

<style>
details {
  padding-left: 2rem;
}
summary {
  display: block;
  margin-left: -2rem;
}

summary > * {
  display: inline;
}

summary::-webkit-details-marker {
  display: none;
}

summary > *:first-child::before {
  content: '+';
  margin-right: 0.5rem;
  margin-bottom: .25rem;
  display: inline-block;
  border-radius: 5px;
  width: 1.5rem;
  height: 1.5rem;
  background: #036;
  color: #fff;
  text-align: center;
  font-weight: bold;
}

details[open] > summary > *:first-child::before {
  content: '–';
}
</style>

<p><strong>This page helps you start to assess the accessibility of a web page. With these simple steps, you can get an idea whether or not accessibility is addressed in even the most basic way.</strong></p>
<h3 id="scope">Scope</h3>
<p>These checks cover just a few accessibility issues and are designed to be quick and easy, rather than definitive. A web page could seem to pass these checks, yet still have significant accessibility barriers. More robust assessment is needed to evaluate accessibility comprehensively.</p>
<p><a id="toc"></a>This page provides checks for the following specific aspects of a web page. It also provides guidance on <span class="ptoc"><a href="#next">Next Steps</a></span> and links to more <a href="#evalresources">evaluation resources</a>.</p>

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

<ul class="toc listafterpul">
  <li><a href="#title">Page title</a></li>
  <li><a href="#images">Image text alternatives (“alt text”)</a> (pictures, illustrations, charts, etc.)</li>
  <li><strong>Text:</strong>
    <ul>
      <li><a href="#headings">Headings</a></li>
      <li><a href="#contrast">Contrast ratio (“color contrast”)</a></li>
      <li><a href="#resize">Resize Text</a></li>
    </ul>
  </li>
  <li><strong>Interaction:</strong>
     <ul>
        <li><a href="#interaction">Keyboard access and visual focus</a></li>
        <li><a href="#forms">Forms, labels, and errors</a> (including  Search fields)</li>
     </ul>
  </li>
  <li><strong>General:</strong>
     <ul>
        <li><a href="#moving">Moving, Flashing, or Blinking Content</a></li>
        <li><a href="#media">Multimedia (video, audio) alternatives</a></li>
        <li><a href="#structure">Basic Structure Check</a></li>
     </ul>
</li>
</ul>

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

<h2><a id="using"></a>Using these Easy Checks</h2>
<h3 id="excolbuttomns">Click headings with [+] buttons to get hidden information</h3>
<p>Some sections of this page might not apply to your situation, for example, they are for a  browser you don't have, or you  only need to read them once. These sections are hidden by default so they don't clutter the page. You can expand them to see the information. The headings of hidden  sections have a plus button [+] before them. Screen readers will say something like: “graphic, expand this section”. To get the hidden information, click the button or click anywhere on the heading.</p>
<p>The  sections below all have hidden information under expandable headings. The first time you read this page, <strong>we recommend that you expand the headings of these five sections and  read them.</strong></p>
{% include_cached excol.html type="start" id="tools" %}
<h3>Tools: WebDev Toolbar and IE WAT <em>(optional)</em></h3>
{% include_cached excol.html type="middle" %}
   <p><strong>You can do most of these checks with any browser, that is, you do <i>not</i> need to download special tools.</strong></p>
<p>However, some checks are easier if you can download tools. To keep it simple, we’ve included instructions for just two tools: the Web Developer Toolbar for Chrome, Opera, and Firefox (“WebDev Toolbar”) and the Web Accessibility Toolbar for Internet Explorer (“IE WAT”). Both are free extensions/add-ons available in different languages.</p>
<ul>
<li>WebDev Toolbar - To do the checks that are indicated “with the WebDev Toolbar”, you’ll need <em>either</em>
<ul>
  <li>the <a href="http://www.google.com/chrome/">Chrome browser</a> and the <a href="https://chrome.google.com/webstore/detail/web-developer/bfbameneiokkgbdmiekhjnmfkcnldhhm">Web Developer extension for Chrome</a></li>
  <li>the <a href="http://www.opera.com/">Opera browser</a> and the <a href="https://addons.opera.com/en/extensions/details/web-developer/?display=en-US">Web Developer extension for Opera</a></li>
  <li>the <a href="https://www.mozilla.org/en-US/firefox/new/">Firefox browser</a> and the <a href="https://addons.mozilla.org/en-US/firefox/addon/web-developer/">Web Developer extension/add-on for Firefox</a></li>
</ul>
</li>
<li>IE WAT - To do the checks that are indicated “with IE WAT”, you’ll need the <a href="https://www.microsoft.com/en-us/download/Internet-Explorer-11-for-Windows-7-details.aspx">Internet Explorer (IE) browser</a> version 9 or later and the <a href="https://www.paciellogroup.com/resources/wat/">Web Accessibility Toolbar</a> version  19 July 2013 or later.</li>
</ul>
<p>Note that we’re not endorsing these tools over others. There are many other useful <a href="http://www.w3.org/WAI/eval/selectingtools">tools to help with evaluation</a>.</p>
<p><i>(If you can’t download these tools, that’s OK; you can still do the checks indicated “with any browser”.)</i></p>
{% include_cached excol.html type="end" %}

{% include_cached excol.html type="start" id="wcaglinks" %}
<h3>WCAG links</h3>
{% include_cached excol.html type="middle" %}
<p>These checks are based on the Web Content Accessibility Guidelines (WCAG) 2.0. The main points in WCAG are called “Success Criteria”. In the “Learn more from” sections of this page, there are links to pages that explain the relevant success criteria in the “Understanding WCAG 2.0” document.</p>
<p><strong>Please see the <a href="http://www.w3.org/WAI/intro/wcag">WCAG Overview</a> for an introduction to WCAG.</strong></p>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" id="bad" %}
<h3>Practicing with BAD, the Before-After Demo</h3>
{% include_cached excol.html type="middle" %}
<p>The <a href="http://www.w3.org/WAI/demos/bad/">Before and After Demonstration (BAD)</a> from W3C WAI shows an inaccessible website and a retrofitted version of this same website with the accessibility barriers fixed. You can use the BAD pages to learn how to do these checks. For example, first, do the check on an accessible version of a page to see what it should look like. Then, do the check on the corresponding inaccessible page to see what it looks like when there are accessibility barriers.</p>
<p>The BAD pages have annotations that are notes on what is accessible and not accessible in the demo pages. To turn on annotations, click “Show Annotations” in the yellow box near the top, middle of the page; then click a number and a box titled <em>“Note ##”</em> will open with the explanation.</p>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" id="background" %}
<h3>Background</h3>
{% include_cached excol.html type="middle" %}
<p>These checks are designed for anyone who can use the web. You don’t need much knowledge or skill. Some of the checks require seeing the web page or hearing the audio. However, there are many things that anyone can check.</p>
<p>Here are some things to know that will help you understand the brief explanations throughout this page:</p>
<ul>
  <li><strong><em><a id="markup"></a>markup</em></strong> refers to web page code, called HTML. You can see the markup of a web page in most browsers by selecting from the menu: View &gt; Source. You do not  need to look at the markup to do these checks; however, it does help to understand what  “markup” and “marked up” means.</li>
  <li><i><a href="http://www.w3.org/WAI/intro/people-use-web/browsing#at">assistive technologies</a></i> (AT) are software or hardware that people with disabilities use to improve interaction with the web.</li>
  <li><i><a href="http://www.w3.org/WAI/intro/people-use-web/browsing#sr">screen readers</a></i> are software that reads aloud the information in web pages and enables keyboard navigation. They are used by people who are blind.</li>
  <li><i><a href="http://www.w3.org/WAI/intro/people-use-web/browsing#voice">voice input</a></i> is using speech instead of a keyboard and mouse.</li>
</ul>
<p>To learn more, see:</p>
<ul>
  <li><a href="http://www.w3.org/WAI/intro/people-use-web/principles">Accessibility Principles</a></li>
  <li><a href="http://www.w3.org/standards/webdesign/accessibility">Introduction to Accessibility</a></li>
  <li><a href="http://www.w3.org/WAI/yourWAI">Other WAI resources</a></li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" id="ctrlcmd" %}
<h3>Keyboard instructions: Ctrl for Windows, cmd for Mac</h3>
{% include_cached excol.html type="middle" %}
<p>Some of the  keyboard instructions are different for Windows and Mac; for example, “Ctrl” versus “cmd” in:</p>
<ul>
  <li>For Windows: With the keyboard: Ctrl+Alt+4, then arrow down to "Show Images".</li>
  <li>For Mac: With the keyboard: cmd+Alt+4, then arrow down to "Show Images".</li>
</ul>
<p>To reduce clutter, these are listed as:</p>
<ul>
  <li>With the keyboard: Ctrl/cmd+Alt+4, then arrow down to "Show Images".</li>
</ul>
<p>For such instructions, Windows users press the Ctrl key, and Mac users press the cmd key.</p>
{% include_cached excol.html type="end" %}
<h2 id="title">Page title</h2>
<p>Page titles are:</p>
<ul>
   <li>shown in the window title bar in some browsers</li>
   <li>shown in browsers' tabs when there are multiple web pages open</li>
   <li>shown in search engine results</li>
   <li>used for browser bookmarks/favorites</li>
   <li>read by  screen readers</li>
</ul>
<p>(In the web page <a href="#markup" class="termref">markup</a> they are the &lt;title&gt; within the &lt;head&gt;.)</p>
<p>The image below shows the page title “Easy Checks - A First Review of Web Accessibility” in the title bar, and the titles of 4 pages in the tabs. Note that in the tabs,  only the first part of the page title is shown.</p>
<figure> <img src="images/page-title.png" alt="" width="674" height="100"/>
   <figcaption class="figcaption">Figure: Firefox browser with full title  in the title bar and partial titles in the tabs.</figcaption>
   <!--figure-->
</figure>
<p>Good page titles are particularly important for  orientation — to help people know where they are and move between pages open in their browser. The first thing screen readers say when the user goes to a different web page is the page title.</p>
<h3 class="whathead">What to do:</h3>
<ul>
   <li>Look at the page’s title (or with a screen reader, listen to it).</li>
   <li>Look at titles of other pages within the website.</li>
</ul>
<h3 class="whathead">What to check for:</h3>
<ul>
   <li>Check that there is a title that adequately and briefly describes the content of the page.</li>
   <li>Check that the title is different from other pages on the website, and adequately distinguishes the page from other web pages.</li>
</ul>
{% include_cached excol.html type="start" id="titletips" %}
<h3>Tips</h3>
{% include_cached excol.html type="middle" %}
   <ul>
      <li>There is flexibility on what makes a good page title.</li>
      <li>Best practice is for titles to be “front-loaded” with the important and unique identifying information first.<br />
         For example:
         <ul>
            <li>Poor titles:
               <ul>
                  <li>Welcome to home page of  Acme Web Solutions, Inc.</li>
                  <li>Acme Web Solutions, Inc. | About Us</li>
                  <li>Acme Web Solutions, Inc. | Contact Us</li>
                  <li>Acme Web Solutions, Inc. | History</li>
               </ul>
            </li>
            <li>Better page titles:
               <ul>
                  <li>Acme Web Solutions home page</li>
                  <li>About Acme Web Solutions</li>
                  <li>Contact Acme Web Solutions</li>
                  <li>History of Acme Web Solutions</li>
               </ul>
            </li>
         </ul>
      </li>
   </ul>
{% include_cached excol.html type="end" %}
<h3>Page title checks</h3>
{% include_cached excol.html type="start" %}
<h4>To check page title <em>with different browsers</em></h4>
{% include_cached excol.html type="middle" %}
<ul>
  <li>If you have a  browser that displays the page title in the window title bar by default, use that browser. Some versions of Firefox, Safari, Opera, and older versions of IE show the title by default.
     <ul>
        <li>Firefox on Windows: If the title bar isn't displayed you might be able to display it by pressing: Alt+V, T, M (or right-mouse click in the empty area after the tab and select Menu Bar).</li>
     </ul>
  </li>
  <li>If your browser doesn't have a title bar, you can do try one of these:
     <ul>
        <li>With your mouse, hover over the browser tab to see the full page title, like this:<br />
           <figure>
              <div class="figcontent"><img src="images/page-title-tab-popup.png" alt="" width="674" height="110" /></div>
              <figcaption class="figcaption">Figure: Page title in popup, displayed with mouse hover over tab.</figcaption>
           </figure>
           <!--figure-->
        </li>
        <li>Display the Add Bookmark dialog box, which includes the title. In some Windows browsers, press Ctrl+D. In some Mac browsers, press cmd+D to get the Add Bookmark dialog box.</li>
     </ul>
  </li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}
<h4>To check page title <em>with IE WAT</em></h4>
{% include_cached excol.html type="middle" %}
<p><em>(Some versions of IE have the title bar so you can just look there, you don't need to do the steps below.)</em></p>
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Structure”, then “Heading structure”. Or, with the keyboard: Ctrl/cmd+Alt+6, then down arrow key to “Heading structure”.<br/>
     <em>A new page opens.</em><br />
 The page title is shown after “Title:”.</li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}
<h3>Learn more about page titles</h3>
{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-title.html">Page Titled</a> - Understanding Success Criterion 2.4.2 for WCAG 2.0 (Level A)</li>
</ul>
{% include_cached excol.html type="end" %}

  <h2 id="images">Image text alternatives (“alt text”)</h2>
  <p>Text alternatives (“alt text”) convey the purpose of an image, including pictures, illustrations, charts, etc. Text alternatives are used by people who do not see the image. (For example, people who are blind and use screen readers can hear the alt text read out; and people who have turned off images to speed download or save bandwidth can see the alt text.)</p>
  <p>The text should be functional and provide an equivalent user experience, not necessarily describe the image. (For example,  appropriate text alternative for a search button <img src="images/search-button.png" alt="" width="36" height="24" /> would be “search”, not “magnifying glass”.)</p>
  <p>You don’t usually see the alt text on a web page, it is in the web page <a href="#markup" class="termref">markup</a> (like this:<br />
     <code>&lt;img src="pointer_to_image.png” alt="here's where the alternative text goes&quot;&gt;</code>).<br />
     Every image should include <code>alt</code> in the markup.</p>
  <ul>
     <li>If an image conveys information useful for interacting with or understanding the web page content, then it needs alternative text.</li>
     <li>If an image is just decorative and people don’t need to know about the image, then it should have null alt (<code>alt="”</code>).</li>
  </ul>
  <p>Automated tests can tell you if <code>alt</code> is missing. To determine if the alternative text is appropriate, you need to see the image and judge it in context.</p>
  <h3 class="whathead">What to check for:</h3>
  <ul>
     <li>Every image has <code>alt</code> with appropriate alternative text.</li>
  </ul>
  <h3>Tips</h3>
  <p>Appropriate alternative text is not an exact science. Some people prefer most images to have more detailed  description; and others prefer much less description.</p>
{% include_cached excol.html type="start" %}  <h4 class=" listintro">Appropriate alt text:</h4>{% include_cached excol.html type="middle" %}
     <ul class="listspaced">
        <li>The text needs to convey the same meaning as the image. That is, if someone cannot see the image, they get the important information from the image in the alternative text.</li>
        <li>Alternative text depends on context. For example, for an image of a dog on a kennel club website, the alt text might include the breed of the dog; however, the same image on a dog park website may be there just to make the page more attractive, and the image might not need any alt text (and should have null alt). One way to help think about appropriate alt text is: if you were helping someone read and interact with the web page and they cannot see it, what would you say about the image?</li>
        <li>Images that are functional — for example,  images that initiate actions (like submit buttons) and linked images (like in navigation) — need alt text that is the functional equivalent.</li>
        <li>If there is text in the image — for example,  in a logo — that text needs to be included in the alt text.<br/>
        </li>
        <li>If the image has complex information  — such as charts or graphs — the image should have a short alt text to identify the image, and then the detailed description of the information should be provided elsewhere (for example, in a data table).</li>
     </ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class=" listintro">What is not needed in the alt text:</h4>{% include_cached excol.html type="middle" %}
<ul class="listspaced">
  <li>If the image is not important for understanding the content — for example, it is just decoration or “eye candy” — it should have null alt (<code>alt=""</code>). One way to help determine if an image should have null alt is to ask yourself: <em>If the image was removed, would the user still get all the information from the page?</em></li>
  <li>The alternative text does not need to include the words “button”, “link”, or “image of”. (Screen readers automatically provide that information.)</li>
  <li>If the image is sufficiently described in the text — for example, a simple diagram illustrating what’s written in the web page text — it can have brief alt text such as “Diagram of work flow as describe above.”</li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class=" listintro"><code>alt</code> attribute in HTML (not “alt tag”)</h4>{% include_cached excol.html type="middle" %}
     <p>In HTML (which is web page code, called <a href="#markup" class="termref">markup</a>), alt is an attribute of the image element, and other elements. (So “alt tag” is technically incorrect; the correct terminology is “alt attribute”, or you can say “alt text”.) It looks like this in markup: <code>&lt;img alt="WAI logo" src="/wai/logo.png"&gt;</code></p>
{% include_cached excol.html type="end" %}
  <h3>Alt text checks</h3>
  <p>There are three options to check alt text listed below. The first one is the easiest, if you have the IE WAT toolbar. If you don’t have any toolbars, there is a check at the end for any browser.</p>
{% include_cached excol.html type="start" %}  <h4 class="">To check alt text <em>with IE WAT</em></h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Images”, then “Show Images”. Or, with the keyboard: Ctrl/cmd+Alt+4, then arrow down to “Show Images”<br />
     <figure>
        <div class="figcontent"><img src="images/alt-ie.png" alt="" width="674" height="223" /></div>
        <figcaption class="figcaption">Figure:  IE WAT toolbar with 'Images' drop down and 'Show Images' highlighted.</figcaption>
        <!--figure-->
     </figure>
     <em>If there are any images missing alt, a dialog box appears with the number of images without alt attributes.<br/>
     The alt text will be displayed before the images in quotes on a light background.</em></li>
  <li>To check for missing alt: Look for the text “NoAlt!” (visually, or with find-in-page). If you find it, that means the following image is missing alt.</li>
  <li>To check if alt text is appropriate:<br/>
     For each image, see if the alt text adequately conveys the information in the image it is next to, per the Tips above. </li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 id="altff" class="">To check alt text <em>with WebDev toolbar</em></h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Images”, then “Outline Images”, then “Outline Images Without Alt Attributes”. Or, with the keyboard: Alt+T, W (to Web Developer Extension), I, O, A<br />
                 <em>Red boxes appear around any images missing alt.</em>
     <figure>
        <div class="figcontent"><img src="images/alt-ff-missing.png" width="676" height="278" alt=""/></div>
        <figcaption class="figcaption">Figure:  WebDev toolbar menu, and red boxes around images.</figcaption>
        <!--figure-->
     </figure>
</li>
  <li>Note images without any alt text.</li>
  <li>In the toolbar, select “Images”, then “Display Alt Attributes”. Or, with the keyboard: Alt+T, W (to Web Developer Extension), I, A
<br />
     <em>The alt text will be displayed before the images as white letters on a red background.</em>
     <figure>
        <div class="figcontent"><img src="images/ff-toolbar-display-alt.png" alt="" width="674" height="175" /></div>
        <figcaption class="figcaption">Figure:  WebDev toolbar menu, and alt text displayed.</figcaption>
        <!--figure-->
     </figure>
</li>
  <li>For each image, see if the alt text adequately conveys the information in the image it is next to, per the Tips above.</li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">To check alt text <em>with any browser</em></h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>Open <a href="http://wave.webaim.org/">WAVE</a> web accessibility evaluation tool web page.</li>
  <li>Type the website address in the box after “Enter the URL of the web site you want to evaluate:”</li>
  <li>Click the “WAVE this page!” button.<br/>
     <em>Your web page will show up in the browser with lots of little icons on it.</em></li>
  <li>To check for missing alt: Look for the red alt icon (<img src="images/alt_missing.png" alt="Red Alt Missing WAVE Tool Icon" />), or search for the alt text “ERROR: Missing alt text”. If you find it, that means the following image is missing alt.</li>
  <li>To check if alt text is appropriate: <br/>
     Look for the green alt icon (<img src="images/alt.png" alt="Green Alt Exists WAVE Tool Icon" />). Next to it is text on a light blue background; the alt text is in between the asterisks (*). See if that text adequately conveys the information in the image it is next to, per the Tips above.
<figure>
<div class="figcontent"><img src="images/alt-wave5.png" alt="" width="676" height="314"/></div>
<figcaption class="figcaption">Figure: WAVE showing alt text.</figcaption>
<!--figure-->
</figure>
</li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="" id="bad-alt">To practice checking alt text in BAD</h4>{% include_cached excol.html type="middle" %}
<p>With one of the checks above, use the inaccessible home page <code><a href="http://www.w3.org/WAI/demos/bad/before/home">www.w3.org/WAI/demos/bad/before/home</a></code> <br />
  Notice: </p>
<ul>
  <li>Missing alt:
     <ul>
        <li>There are lots of images without alt text. (Many of these are just decorative and should have null alt text, per the Tips above.)</li>
        <li>The weather image of the cloud and sun is missing alt.</li>
     </ul>
  </li>
  <li>Inappropriate alt text:
     <ul>
        <li>Near the top, left, see the long alt text starting with “Red dot with...”. That description is way too detailed and includes unimportant information. The appropriate alt text in the accessible page is: “Citylights: your access to the city.”</li>
        <li>Near the bottom in the middle, see the image of text: “(1)269C-H-O-K-E”. The alt is 123456789, which is not equivalent.</li>
     </ul>
  </li>
  <li>Appropriate alt text:
     <ul>
        <li>Near the top, see the W3C image; the alt text is: “W3C logo”.</li>
     </ul>
  </li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h3 class="">Learn more about alt text</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="http://www.w3.org/WAI/intro/people-use-web/principles#alternatives">Text alternatives for non-text content</a> is an easy introduction with links to more details</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv-all.html">Non-text Content</a> - Understanding Success Criterion 1.1.1 for WCAG 2.0 (Level A)</li>
  <li><a href="https://www.w3.org/WAI/tutorials/images/decision-tree/">An alt text decision tree</a></li>
</ul>
{% include_cached excol.html type="end" %}

  <h2 id="headings">Headings</h2>
  <p>Web pages often have sections of information separated by visual headings, for example, heading text is bigger and bold (like “Headings” right above this sentence :-). To make these work for everyone, the headings need to be <a href="#markup" class="termref">marked up</a>. That way people can navigate to the headings — including people who cannot use a mouse and use only the keyboard, and people who use a screen reader.</p>
  <p>Heading levels should have a meaningful hierarchy, e.g.: </p>
  <ul>
     <li>Heading Level 1 &lt;h1&gt;
       <ul>
           <li>Heading Level 2 &lt;h2&gt;
             <ul>
                 <li>Heading Level 3 &lt;h3&gt;</li>
                 <li>Heading Level 3 &lt;h3&gt;</li>
              </ul>
           </li>
           <li>Heading Level 2 &lt;h2&gt;
             <ul>
                 <li>Heading Level 3 &lt;h3&gt;
                   <ul>
                       <li>Heading Level 4 &lt;h4&gt;</li>
                       <li>Heading Level 4 &lt;h4&gt;</li>
                    </ul>
                 </li>
              </ul>
           </li>
           <li>Heading Level 2 &lt;h2&gt; </li>
        </ul>
     </li>
  </ul>
  <h3 class="whathead" id="headingswhattocheck">What to check for:</h3>
  <ul>
     <li>The page has a heading. In almost all pages there should be at least one heading.</li>
     <li>All text that looks like a heading is marked up as a heading.</li>
     <li>All text that is marked up as a heading is really a conceptual section heading.</li>
     <li>The heading  hierarchy is meaningful. Ideally the page starts with an “h1” — which is usually similar to the page title — and does not skip levels; however, these are not absolute requirements.</li>
  </ul>
  <h3>Headings checks</h3>
  <p>The checks below provide instructions with different browsers for how to get an outline from headings or headings markup in a page.</p>
  <p>Headings outline: an outline of the headings that are marked up on page, for example:</p>
  <figure>
    <div class="figcontent"><img src="images/headings-outline.png" alt="" width="674" height="263" /></div>
    <figcaption class="figcaption">Figure: Outline of headings.</figcaption>
  <!--figure-->
  </figure>
  <p>Headings markup in page: a view of the page with the heading markup shown, for example:</p>
  <figure>
      <div class="figcontent"><img src="images/headings-in-page.png" alt="" width="674" height="230" /></div>
      <figcaption class="figcaption">Figure: Heading markup in page.</figcaption>
    <!--figure-->
  </figure>
{% include_cached excol.html type="start" %}  <h4 class="">To check headings <em>with WebDev toolbar</em></h4>{% include_cached excol.html type="middle" %}
<h5>Headings outline:</h5>
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Information”, then “View Document Outline”.Or, with the keyboard: Alt+T, W (to Web Developer Extension), I, M<br/>
     <em>A new page opens with the outline</em>. </li>
  <li>Non-visual checks:
     <ul>
        <li>Are headings listed. If there are no headings marked up, it will say “0 headings”.</li>
        <li>Does the outline start with [H1] and follow a meaningful hierarchy? (That’s not required, but strongly suggested.)</li>
     </ul>
  </li>
  <li>Visual checks: Compare the Document Outline to the visual rendering of the page.
     <ul>
        <li>Are the things that look like headings on the page listed in the Document Outline?</li>
        <li>Are there things in the Document Outline that aren’t really headings? </li>
     </ul>
  </li>
</ol>
<h5>Heading markup in the page: </h5>
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Outline”, then “Show Element Tags Names When Outlining”. Or, with the keyboard: Alt+T, W (to Web Developer Extension), O, S<br/>
  </li>
  <li>In the toolbar, select “Outline”, then “Outline Headings”. Or, with the keyboard: Alt+T, W (to Web Developer Extension), O, H<br/>
     <em>The headings will be outlined and &lt;h1&gt;, &lt;h2&gt;, etc. icons will be before the headings.</em> </li>
  <li>Anything that is a functional heading should have a heading icon before it.</li>
  <li>Anything that is a <b>not</b> functional heading should <b>not</b> have a heading icon before it.</li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">To check headings <em>with IE WAT</em></h4>{% include_cached excol.html type="middle" %}
<h5>Headings outline:</h5>
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Structure”, then “Heading Structure”. Or, with the keyboard: Ctrl/cmd+Alt+6, then down arrow  to “Heading structure”.<br/>
     <em>A new page opens with the outline.</em> </li>
  <li>Non-visual checks:
     <ul>
        <li>Are headings listed? If there are no headings marked up, it will say “0 headings”.</li>
        <li>Does the outline start with [H1] and follow a meaningful hierarchy? (That’s not required, but strongly suggested.)</li>
     </ul>
  </li>
  <li>Visual checks: Compare the Document Outline to the visual rendering of the page.
     <ul>
        <li>Are the things that look like headings on the page listed in the Document Outline?</li>
        <li>Are there things in the Document Outline that aren’t really headings? </li>
     </ul>
  </li>
</ol>
<h5>Heading markup in the page:</h5>
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Structure”, then “Headings”. Or, with the keyboard: Ctrl/cmd+Alt+6, then down arrow  to “Headings”.<br/>
     <em>Headings will be surrounded with &lt;h1&gt;, &lt;h2&gt;, etc. icons in purple text on a light background.</em></li>
  <li>Anything that is a functional heading should have a heading icon before it.</li>
  <li>Anything that is a <b>not</b> functional heading should <b>not</b> have a heading icon before it.</li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">To check headings <em> in any browser</em></h4>{% include_cached excol.html type="middle" %}
<h5>Headings outline:</h5>
<ol>
  <li>In any browser, open the <a href="http://validator.w3.org/">W3C HTML Validator (The W3C Markup Validation Service)</a>.</li>
  <li>In the Address field, type the URI (e.g., www.w3.org).</li>
  <li>Click the More Options link.</li>
  <li>Select the Outline checkbox.</li>
  <li>Click the Check button.<br/>
     <em>The results page appears (with title starting either [Valid] or [Invalid]).</em> </li>
  <li>In the results page, near the top, at the end of the “Jump to:” line, click the Outline text link.</li>
  <li>Non-visual checks:
     <ul>
        <li>Is there anything there? If there is no text between “Below is an outline for this document, automatically generated from the heading tags (&lt;h1&gt; through &lt;h6&gt;.)” and “If this does not look like a real outline...” it means there are no headings marked up on the page.</li>
        <li>Does the outline start with [H1] and follow a meaningful hierarchy? (That’s not required, but strongly suggested.)</li>
     </ul>
  </li>
  <li>Visual checks: Compare the Document Outline to the visual rendering of the page.
     <ul>
        <li>Are the things that look like headings on the page listed in the Document Outline?</li>
        <li>Are there things in the Document Outline that aren’t really headings? </li>
     </ul>
  </li>
</ol>
<h5>Heading markup in the page:</h5>
<ol>
  <li>Open <a href="http://wave.webaim.org/">WAVE</a> web accessibility evaluation tool.</li>
  <li>Type the website address in the box after “Enter the URL of the web site you want to evaluate:”</li>
  <li>Click the “WAVE this page!” button.<br/>
     <em>Your web page will show up in the browser with lots of little icons on it.</em> </li>
  <li>Anything that is a functional heading should have a heading icon (<img src="images/h1.png" alt="H1 WAVE Tool Icon" />, <img src="images/h2.png" alt="H2 WAVE Tool Icon" />, <img src="images/h3.png" alt="H3 WAVE Tool Icon" />, etc.) before it.</li>
  <li>Anything that is a <b>not</b> functional heading should <b>not</b> have a heading icon before it.</li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="" id="bad-headings">To practice checking headings in BAD:</h4>{% include_cached excol.html type="middle" %}
<h5>Headings outline:</h5>
<ul>
  <li>Follow  one of the instructions under “Headings outline” above and use the accessible News page: <code><a href="http://www.w3.org/WAI/demos/bad/after/news">www.w3.org/WAI/demos/bad/after/news</a></code>. Notice there is a nice hierarchical outline.</li>
  <li>Next, use the inaccessible News page: <code><a href="http://www.w3.org/WAI/demos/bad/before/news">www.w3.org/WAI/demos/bad/before/news</a></code>. (In HTML Validator, the “Check” button might now say “Revalidate”.) Notice there is just one heading.</li>
</ul>
<h5>Heading markup in the page:</h5>
<ul>
  <li>Start by visually looking at the inaccessible BAD news page: <a href="http://www.w3.org/WAI/demos/bad/before/news.html"><code>www.w3.org/WAI/demos/bad/before/news</code></a>. What looks like headings? <i>(Citylights News, Heat wave linked to temperatures, Man Gets Nine Months in Violin Case, ...)</i></li>
  <li>Next, see how it should look. Follow one of the instructions for “Heading markup in the page” above on the accessible News page: <code><a href="http://www.w3.org/WAI/demos/bad/after/home">www.w3.org/WAI/demos/bad/after/home</a></code>. Notice the headings have icons next to them.</li>
  <li>Next, see what it looks like when headings are not marked up. Use the inaccessible News page: <code><a href="http://www.w3.org/WAI/demos/bad/before/home">www.w3.org/WAI/demos/bad/before/home</a></code>. Notice there is text that visually looks like headings, but does not have headings icons next to it. (With WAVE, there are yellow icons with “h?” because it thinks these might be headings.)</li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h3 class="" id="headingsmore">Learn more about headings</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic.html">Info and Relationships</a> - Understanding Success Criterion 1.3.1 for WCAG 2.0 (Level A)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-descriptive.html">Headings and Labels</a> - Understanding Success Criterion 2.4.6 for WCAG 2.0 (Level AA)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-headings.html">Section Headings</a> - Understanding Success Criterion 2.4.10 for WCAG 2.0 (Level AAA)</li>
</ul>
{% include_cached excol.html type="end" %}
<h2 id="contrast"> Contrast ratio (“color contrast”)</h2>
<p>Some people cannot read text if there is not sufficient contrast between the text and background, for example,  light gray text on a light background.</p>
<figure> <div class="figcontent"><img src="images/contrast-gray-white.png" alt="" width="301" height="127" /></div>
   <figcaption class="figcaption">Figure: Gray text on light background. </figcaption>
   <!--figure-->
</figure>
<p>High contrast (for example, dark text on light background or bright text on dark background) is required by some people with visual impairments, including many older people who lose contrast sensitivity from ageing.</p>
<figure>
   <div class="figcontent">
      <img src="images/contrast-b-on-w.png" alt="" width="301" height="127" />
      <img class="last-of-type" src="images/contrast-yellow.png" alt="" width="301" height="127"/>
   </div>
   <figcaption>Figure: Dark text on light background, and yellow text on black background.</figcaption>
</figure>
<!--figure-->
<p>While some people need high contrast, for others &mdash; including some people with  reading disabilities such as dyslexia &mdash;  bright colors (high luminance) are not readable. They need low luminance.</p>
<figure> <div class="figcontent"><img src="images/contrast-lowlum1.png" alt="" width="301" height="127" /><img class="last-of-type" src="images/contrast-lowlum2.png" alt="" width="301" height="127" /></div>
   <figcaption>Figure: Brown text on dark background, and dark text on medium brown background.</figcaption>
</figure>
<!--figure-->
<p>Web browsers should allow people to change the color of text and background, and web pages need to work when people change colors. There should also be sufficient contrast between text and its background by default, so that many people can read it without changing the colors.</p>
<p>(This accessibility requirement is sometimes called sufficient “color contrast&quot;; however,  that is incorrect &mdash; technically it's “luminance contrast”. On this page we use “contrast ratio” as short for “luminance contrast ratio” because it's less jargony.) There is much more to know about contrast; we’ve just introduced the basics here.</p>
<h3 class="whathead">What to check for:</h3>
<p>The contrast between all text and its background is at least 4.5:1 for normal-size text.</p>
<p>There are basically three ways to check  contrast, each with strengths and weaknesses. </p>
<ol>
   <li><strong>Table with contrast ratio</strong> - The tool displays a table with all the possible contrast ratios in the web page. With some tools, you can click in the table and it will show where that color combination is in the web page.
      <ul>
         <li><em>Pro: </em>Comprehensive.</li>
         <li><em>Con: </em>Can be inaccurate, specifically, it can show some color combinations that are not really in the displayed page.</li>
      </ul>
   </li>
   <li><strong>Eye-dropper to select colors</strong> - The tool lets you select a text color and a background color, then it shows you the contrast ratio.<br />
      <ul>
         <li><em>Pro: </em>Accurate.</li>
         <li><em>Con: </em>Can only test one item at a time. Need to be able to see and use a mouse.</li>
      </ul>
   </li>
   <li><strong>Turn off color.</strong> The tool shows the page in grayscale.
      <ul>
         <li><em>Pro:</em> Gives you direct experience.</li>
         <li><em>Con: </em>Imprecise, does not provide contrast ratio value.</li>
      </ul>
   </li>
</ol>
<h3 id="contrastchecks">Contrast checks</h3>
<p>Below are instructions for checking contrast with IE WAT; a list of other contrast analyzer tools is in the <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html#visual-audio-contrast-contrast-resources-head">Related Resources section</a> of Understanding Success Criterion 1.4.3.</p>
{% include_cached excol.html type="start" %}  <h4 class="" id="contrastiewat">To check contrast <em> with IE WAT</em></h4>{% include_cached excol.html type="middle" %}
<p>Here's how to do the three checks for sufficient contrast described above.</p>
<ol>
  <li><strong>Table with contrast ratio</strong>:
     <ul>
        <li>In the toolbar, select  Color &gt; Juicy Studio Luminosity Analyser.
           Or, with the
           keyboard: Ctrl/cmd+Alt+5, then down arrow to “Juicy Studio   Luminosity Analyser”.<br />
           <img src="images/color-wat-table.png" alt="" width="700" height="72" class="imgbreathe" /><br />
           <em>A  new window  opens titled Colour Contrast Analyser with the table of results. The last column is Luminosity Contrast Ratio.</em></li>
     </ul>
  </li>
  <li><strong>Eye-dropper to select colors</strong>:
     <ul>
        <li>In the toolbar, select: Color &gt; Contrast Analyser [application]. Or, with the
           keyboard: Ctrl+Alt+5, then down arrow to “Contrast Analyser [application]”.<br />
           <em>The Color Contrast Analyser application window opens.</em><br />
        </li>
        <li>Using the first eye-dropper icon from the foreground color section, pick the foreground color (usually the text) you want to analyze.</li>
        <li> Using the second eye-dropper icon from the background color section, pick the corresponding background color.</li>
        <li><em>In the bottom of the Color Contrast Analyser window, the resulting luminosity Contrast ratio will show (for example: 7.5:1), along with “Pass” or “Fail” and a visual example of the colors.</em></li>
     </ul>
  </li>
  <li><strong>Turn off color:</strong>
     <ul>
        <li>In the toolbar, select  Color &gt; Grey Scale.  Or, with the
       keyboard: Ctrl+Alt+5, then down arrow to “Gray Scale”.</li>
        <li>Check if any information is lost or hard to see when  all colors are converted to grayscale.</li>
     </ul>
  </li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">Checking contrast <em>with other browsers</em></h4>{% include_cached excol.html type="middle" %}
<p>There is not an easy way to check contrast with the WebDev toolbar. There is a <a href="https://addons.mozilla.org/en-US/firefox/addon/juicy-studio-accessibility-too/">Juicy Studio Accessibility Toolbar</a> add-on that provides the same information as IE WAT above and works with Firefox.</p>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">To practice checking contrast with BAD</h4>{% include_cached excol.html type="middle" %}
<p>Open the  inaccessible Tickets page: <code><a href="http://www.w3.org/WAI/demos/bad/before/tickets.html">www.w3.org/WAI/demos/bad/before/tickets</a><br/>
  </code>Use one of the checks above. Notice:</p>
<ul>
  <li>The text in some rows is dark gray on light gray with a contrast ratio of 3.76:1.</li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h3 class="">Learn more about contrast ratio</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast">Contrast (Minimum)</a> - Understanding Success Criterion 1.4.3 for WCAG 2.0 (Level AA)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast">Contrast (Enhanced)</a> - Understanding Success Criterion 1.4.6 for WCAG 2.0 (Level AAA)<br />
  </li>
</ul>
{% include_cached excol.html type="end" %}
  <a id="zoom"></a>
  <!-- for old links -->
  <h2 id="resize">Resize text</h2>
  <p>Some people need to enlarge web content in order to read it. Some  need to change other aspects of text display: font, space between lines, and more.</p>
  <p>Most browsers allow users to change text size through:</p>
  <ul>
     <li> text size settings (usually through Options or Preferences)</li>
     <li>text-only  zoom</li>
     <li>page zoom (which also zooms images, buttons, etc.)</li>
  </ul>
  <p>When pages are not designed properly, they  can be unusable when the text size is changed, especially when it is changed through  text-only zoom or text settings. Sometimes columns and sections overlap, the space between lines disappears,  lines of text become too long, or text disappears.</p>

  <figure>
     <div class="figcontent"><img src="images/zoom-100.png" alt="" width="305" height="224" /><img src="images/zoom-overlap.png" alt="" width="305" height="224" /></div>
     <figcaption>Figure: Two screen captures show that when text size is increased, the heading overlaps the main text, the main text overlaps the sidebar text; and the sidebar text is cut off at the bottom.</figcaption>
  </figure>
  <!--figure-->

  <p>When text size is increased, sometimes part of the sentences are not visible  and users have to scroll horizontally to read a sentence, as shown in the third example below. Most people cannot effectively read text that requires horizontal scrolling, and some disabilities make this impossible.</p>
  <figure> <div class="figcontent"><img src="https://www.w3.org/WAI/images/easychecks/resize-normal.png" width="246" height="139" alt=""> <img src="https://www.w3.org/WAI/images/easychecks/resize-wrap.png" width="246" height="253" alt=""> <img src="https://www.w3.org/WAI/images/easychecks/resize-scroll.png" width="246" height="139" alt=""></div>
     <figcaption>Figure: The first image shows normal-size text. In the second image, the larger text “wraps” to fit the width. In the third image, some of the larger text is not visible without scrolling horizontally.</figcaption>
  </figure>
  <!--figure-->
<h3 class="whathead">What to do:</h3>
  <ul>
     <li> Increase the text size.</li>
  </ul>
  <h3 class="whathead">What to check for:</h3>
  <ul>
     <li> All text  gets larger. (A common problem is that text is not provided as actual text format but instead the text is in an image. Text in images does not get larger when users increase text size.)</li>
     <li>Text doesn't disappear or get cut off.</li>
     <li>Text, images, and other content do not overlap.</li>
     <li>All buttons, form fields, and other controls are visible and usable.</li>
     <li>Horizontal scrolling is not required to read sentences or “blocks of text”. It is best practice that when text size is increased, all the text in a sentence is visible. It is acceptable to have to scroll horizontally to get to different sections of a page. <em>(For top-to-bottom languages, change “horizontal scrolling” to “vertical scrolling”.)</em></li>
  </ul>
  <h3>Resize text checks</h3>
  <p><em>The instructions below are for text-only zoom. You can also change the text size settings, for example, through Tools &gt; Options or Preferences. To keep this simple, we don't include instructions for changing those settings. We also don't include instructions for page zoom because it does not usually reveal the accessibility barriers described above.</em></p>
{% include_cached excol.html type="start" %}  <h4 class="">To check text-only zoom in Firefox, Safari, and some other browsers</h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>From the menubar,
     do one of the following <em>(depending on your browser) </em>
     <ul>
        <li> select View &gt; Zoom &gt; Zoom Text Only. Or, with the keyboard in Firefox: Alt+V, Z, T</li>
        <li>select View &gt; Zoom Text Only. Or, with the keyboard in Safari: control+F2, V,  return, ZZ</li>
     </ul>
  </li>
  <li>Incrementally increase text-only zoom:
     <ul>
        <li>In Windows, press Ctrl+[+] <em>(the control key and the + key at the same time)</em> 4 times</li>
        <li>On Mac, press command+[+] <em>(the Command key and the + key at the same time)</em> 4 times</li>
     </ul>
     <em>(To confirm that you have text-only zoom set per step 1, make sure  that only the text is getting larger, not the images.) </em></li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">To check text resize  in IE</h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>From the menubar, select View &gt; Text Size &gt; Largest. Or, with the keyboard: Alt+V, X, G.</li>
</ol>
<p>If you don't have a menubar, one of these may work to display it, depending on your version:</p>
<ul>
  <li>In the search box, type Internet Explorer,  then in the list of results, click Internet Explorer.<br />
     To display the menus temporarily: Press the Alt key.<br />
     To display the menus permanently: Click the Tools button, point to Toolbars, and then click Menu Bar.</li>
  <li>In the blank space at the top of the browser where menu bars usually are, right-click with the mouse.<br />
     <em>A pop-up menu appears.</em><br />
     Select Menu bar.<span class="quiet"></span></li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h3 class="">Learn more about resize text</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-scale">Resize text</a> - Understanding Success Criterion  1.4.4 for WCAG 2.0 (Level AA)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-text-presentation">Images of Text</a> - Understanding Success Criterion  1.4.5 for WCAG 2.0 (Level AA)<br />
  </li>
</ul>
  {% include_cached excol.html type="end" %}

  <h2 id="interaction">Keyboard access and visual focus</h2>
  <p>Many people cannot use a mouse and rely on the keyboard to interact with the Web. People who are blind and some sighted people with mobility impairments  rely on the keyboard or on assistive technologies and strategies that rely on keyboard commands, such as voice input. Accessible websites enable people to access all content and functionality &mdash; links, forms, media controls, etc. &mdash; through a keyboard.</p>
  <p>Keyboard focus should be visible and should follow a logical order through the page elements. Visible keyboard focus could be a  border or highlight, as shown below, that moves as  you tab through the web page.</p>
  <div class="multifigs">
  <figure> <div class="figcontent"><img src="images/focus-highlight-border.png" alt="" width="348" height="126" /></div>
     <figcaption class="figcaption">Figure: Dotted border on middle link.</figcaption>
  </figure>
  <figure> <div class="figcontent"><img src="images/focus-highlight-field.jpg" alt="" width="412" height="150" /></div>
     <figcaption class="figcaption">Figure: Name field is highlighted red.</figcaption>
  </figure>
  </div>

  <h3 class="whathead">What to do:</h3>
  <p>In a browser that supports  keyboard navigation with the Tab key (for example, Firefox, IE, Chrome, and Safari; <em>not</em> Opera): </p>
  <ul>
     <li>In Mac browsers, enable keyboard navigation to all controls.
        <ul>
           <li>In newer browsers: Select System Preferences &gt; Keyboard &gt; Shortcuts. Select the “All controls” option button.</li>
           <li>In older browsers: Select System Preferences &gt; Keyboard &gt; Keyboard Shortcuts. In the “Full Keyboard Access” section, check “All Controls”.</li>
        </ul>
     </li>
     <li>Click in the address bar, then put your mouse aside and <b>do not use it</b>.</li>
     <li>Press the 'Tab' key to move through the elements on the page. You can press 'Shift-Tab' to go backwards.</li>
     <li>To move within elements such as drop-down lists and menu bars, press the arrow keys.</li>
     <li>To select a specific item within a drop-down list:
        <ul>
           <li>Tab to the list box,</li>
           <li>use the arrow keys to move the focus to items,</li>
           <li>when an item has focus,  press the Enter key or Space bar to select that item.</li>
        </ul>
     </li>
  </ul>
  <h3 class="whathead">What to check for:</h3>
  <ul class="listspaced">
     <li><strong>Tab to all:</strong> Check that you can  tab to all the elements, including links, form fields, buttons, and media player controls. (A common problem is that you cannot tab to media player controls.)</li>
     <li><strong>Tab away:</strong> Check that you can  tab <strong>away</strong> from all elements that you can tab into.  (A common problem is the keyboard focus gets caught in media controls and you cannot get out; it's called the “keyboard trap”.)</li>
     <li><strong>Tab order: </strong>Check that the  tab order follows the logical reading order (e.g., for left-to-right languages: top to bottom, left to right) in sequence.</li>
     <li><strong>Visual focus: </strong>Check that the focus  is clearly visible as you tab through the elements, that is, you can tell which element has focus, e.g., links have a gray outline around them or are  highlighted.</li>
     <li><strong>All functionality by keyboard: </strong>Check that you can do everything with  the keyboard; that is, you don't need the mouse to activate actions, options, visible changes, and other <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation-keyboard-operable.html#functiondef" class="termref">functionality</a>. (A common problem is that some functionality is   available only with mouse hover, and is not available with keyboard focus.)</li>
     <li><strong><a id="dropdown"></a>Drop-down lists: </strong>Check that after you  tab into a drop-down list, you can  use the arrow keys to move through all the options without triggering an action. (A common problem for drop-downs used for navigation is that as soon as you arrow down, it automatically selects the first item in the list and goes to a new page &mdash; you cannot get to other items in the list.)</li>
     <li><strong>Image links: </strong>Check that when images  are links, they have clear visual focus and  can be  activated using the keyboard (usually by pressing the Enter key).</li>
  </ul>
{% include_cached excol.html type="start" %}  <h4 id="visualfocusBAD" class="">To see visual focus with BAD</h4>{% include_cached excol.html type="middle" %}
<p>Open the accessible Survey page: <code><a href="http://www.w3.org/WAI/demos/bad/after/survey">www.w3.org/WAI/demos/bad/after/survey</a><br/>
  </code>Tab through the page. Notice:</p>
<ul>
  <li>Most things get a red background when they get focus.</li>
  <li>The other Survey pages get a dotted border and arrows.</li>
  <li>The radio buttons get a dotted border.</li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h3 class="">Learn more about keyboard access</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="http://www.w3.org/WAI/intro/people-use-web/principles#keyboard">Functionality is available from a keyboard</a> section in Accessibility Principles</li>
  <li><a href="http://www.w3.org/WAI/users/browsing#keyboard">Browsing the Web by Keyboard</a> section in Better Web Browsing: Tips for Customizing Your Computer</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html">Guideline 2.1</a>:  Make all functionality available from a keyboard.
     <ul>
        <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation-keyboard-operable.html">Keyboard</a> -  Understanding Success Criterion 2.1.1 for WCAG 2.0 (Level A)</li>
        <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation-trapping.html">No Keyboard Trap</a> - Understanding Success Criterion 2.1.2 for WCAG 2.0 (Level A)</li>
     </ul>
  </li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-focus-order.html">Focus Order</a> - Understanding Success Criterion 2.4.3  for WCAG 2.0 (Level A) </li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/navigation-mechanisms-focus-visible.html">Focus Visible</a> - Understanding Success Criterion 2.4.7  for WCAG 2.0 (Level AA)</li>
</ul>
  {% include_cached excol.html type="end" %}

  <h2 id="forms">Forms, labels, and errors</h2>
  <p><em>Note: This section is more complex than the others. If it's too complicated, consider skipping it for now and proceeding through the remaining checks</em>.</p>
  <p>Labels, keyboard access, clear instructions, and effective error handling are  important for forms accessibility.</p>
  <p>Form fields and other form controls usually have visible labels, such as “E-mail Address:” as the label for a text field.<br />
     <img src="images/form-label-text.png" width="242" height="29" alt="" class="imgbreathe"/><br />
     When these labels are <a href="#markup" class="termref">marked up</a> correctly,  people can interact with them using  only the keyboard, using voice input, and using screen readers. Also, the label itself becomes clickable, increasing the target area and making it easier to select small radio buttons or checkboxes.</p>
  <h3 class="whathead">What to do:</h3>
  <p class="whathead">Find  any forms on the page. A form could be a single text box, such as Search, or could be a complex form with text  fields, radio buttons, checkboxes, drop-down lists, and  buttons.</p>
  <h3 class="whathead">What to check for:</h3>
  <h4 class="small4">Keyboard access</h4>
  <ul>
     <li> Check that all form controls are keyboard accessible by following the <a href="#interaction">keyboard access</a> checks above, including checking that you can get to all items in any <a href="http://www.w3.org/WAI/EO/Drafts/eval/checks#dropdown">drop-down lists</a>.</li>
  </ul>
  <h4 class="small4">Labels</h4>
  <ul>
     <li>Check that every form control has a label associated with it <span> using 'label', 'for', and 'id'</span>, as shown in the <a href="#labelschecks">labels checks</a> below. (This is best practice in most cases, though not a requirement because a form control label can be associated in other ways.)</li>
     <li>Check that the labels are positioned correctly. For left-to-right languages, labels should usually be:
        <ul>
           <li>Left of text boxes and drop-down lists.<br />
              <img src="images/form-label-text.png" width="242" height="29" alt="" class="imgbreathe"/></li>
           <li>Right of radio buttons and checkboxes. <br/>
              <img src="images/form-label-radio.png" alt="" width="216" height="64" class="imgbreathe"/> </li>
        </ul>
     </li>
  </ul>
  <h4 class="small4">Required fields and other instructions</h4>
  <ul>
     <li>Check that any fields that are required/mandatory are clearly indicated.
        <ul>
           <li>Check that the indicator does not rely on color alone, for example, if required fields were only indicated by red colored labels, they would not be accessible to people who do not see the different colors.</li>
           <li>Check that the indicator (such as asterisks (*)) is included in the marked up field label for text boxes and drop-down lists, or legend for  radio buttons and checkboxes, as shown in the <a href="#labelschecks">labels checks</a> below.</li>
        </ul>
     </li>
     <li>Check that any instructions for completing the form are before they are needed, for example,
        <ul>
           <li>General instructions should usually be at the top of the form or the section they relate to.</li>
           <li>Check that required formats, such as dates (year-month-date in the format 0000-00-00), are included in the marked up label, using the <a href="#labelschecks">labels checks</a> below.</li>
        </ul>
     </li>
  </ul>
  <h4 class="small4 listintro">Error handling</h4>
  <p class="listintro spacenotop">Some simple forms, such as a single search field, might not have any errors. If you think the form(s) on the page you are checking might have error messages, try leaving required fields blank or entering incorrectly-formatted information (such as telephone number or e-mail address), then submitting the form. If you get errors:</p>
  <ul>
     <li>Check that clear and specific guidance is provided to help people understand and fix the error. If the error concerns a format such as date, time, or address, check that the  correct format is clearly explained.</li>
     <li>Check that the errors are easily findable. Generally it is best if the error messages are before the form, rather than after the form.</li>
     <li>Check that the fields without errors are still populated with the data you entered. (This is best practice, though not a requirement.) People should not have to re-enter all the information in the form, except for some sensitive data such as credit card numbers.</li>
  </ul>
  <h3 id="labelschecks">Labels checks</h3>
  <p><span><em><strong>Note:</strong></em> These instructions help you check  if labels are <a href="#markup" class="termref">marked up</a> with 'label', 'for', and 'id'; they do <strong>not</strong> check if  form controls are identified in other ways.</span> Therefore, even if a form does not pass these checks, it might still meet WCAG 2.0.</p>
{% include_cached excol.html type="start" %}  <h4 class="" id="labelsWAT">To check  labels <em>with IE WAT</em></h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>Open the web page you are checking.</li>
  <li>In the toolbar, select “Structure”, then “FieldSet / Labels”.
     Or, with the keyboard: Ctrl+Alt+6, then down arrow key to “FieldSet / Labels”, and select.
    <ul>
        <li><em>A dialog box appears with the number of errors and controls.</em> <!-- <span class="changed">[@@ shall we explain “to check out&quot;?] </span> -->
           <figure>
              <div class="figcontent"><img src="images/forms-wat-dialog.png" alt="" width="449" height="209" /></div>
              <figcaption class="figcaption">Figure: IE WAT dialog box.</figcaption>
              <!--figure-->
           </figure>
           <p><strong>The dialog box tells you the number of  identified errors, the total number of form controls, and the number of controls that you need to check manually. For the rest of the steps you need to look at the text around the labels. If this is difficult, you could skip the next steps.</strong></p>
        </li>
        <li><em>The form elements (labels and controls) are outlined in a red box, the markup is shown, and potential errors are indicated.<br />
           Example with no errors:</em><br />
           <figure>
              <div class="figcontent"><img src="images/forms-wat-good.png" alt="" width="674" height="316" /></div>
              <figcaption class="figcaption">Figure: Form markup shown. Date label includes format.</figcaption>
              <!--figure-->
           </figure>
           <em>Example with potential errors:</em><br />
           <figure>
              <div class="figcontent"><img src="images/forms-wat-bad.png" alt="" width="674" height="305" /></div>
              <figcaption class="figcaption">Figure: Form markup shown. Date label does not include format. Fieldset missing legend.</figcaption>
              <!--figure-->
           </figure>
        </li>
     </ul>
  </li>
  <li>Check that every field label has <code>label for="x”</code> before it and <code>id="x”</code> in the box with it, and that the text in quotes matches. <em>(“x” can be anything; for example, <code>for="park”</code>, <code>id="park”</code>)</em>
     <!-- <span class="quiet">[@@ work with screen reader?]</span> -->
     <ul>
        <li>If the label is missing, it will indicate “Label no for”.</li>
        <li>If the <code>for</code> and <code>id</code> do not match, it will indicate “input No Match id="x”  Error”.</li>
     </ul>
  </li>
  <li>Check that the required field indicator is in the field label, or for radio button and check boxes, it is in the “legend”. For example:
    <ul>
        <li>Correct: The asterisk (*) is included in the box around the label.
           <!-- TODO Low Priority Add Image <span class="quiet">[image coming slh]</span> -->
        </li>
        <li>Incorrect: The asterisk (*) is outside of the box around the label.
           <!-- TODO Low Priority Add Image <span class="quiet">[image coming slh]</span> -->
        </li>
        <li>Correct: “(required)” is in the legend.
           <!-- TODO Low Priority Add Image <span class="quiet">[image coming slh]</span> -->
        </li>
        <li>Incorrect: “(required)” is not in the legend.
           <!-- TODO Low Priority Add Image <span class="quiet">[image coming slh]</span> -->
        </li>
     </ul>
  </li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">Checking labels <em> with other browsers</em>  </h4>{% include_cached excol.html type="middle" %}
<p>There is not an easy way to check form control labels with the WebDev toolbar. There is a <a href="http://jimthatcher.com/favelets/">Form Labels favelet</a> that provides the same information as <a href="#labelsWAT">IE WAT above</a> and works with Firefox. It requires installation.</p>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="" id="labelsmarkup">To check labels if you're comfortable looking at the <a href="#markup" class="termref">HTML markup</a></h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>Open the source HTML and find the form markup.</li>
  <li>Check that:
     <ul>
        <li>Each form control has a <code>label</code> element with a <code>for</code> attribute that  matches the value of the <code>id</code> attribute in the related control. For example:<br />
           <code>&lt;label for="firstname&quot;&gt;First name: &lt;/label&gt;<br />
           &lt;input type="text” name="firstname” id="firstname” /&gt;<br />
           </code> </li>
        <li>Each <code>id</code> is unique within the web page.</li>
     </ul>
  </li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="" id="formsbad">To practice checking form labels and errors with  BAD</h4>{% include_cached excol.html type="middle" %}
<h5>Labels:</h5>
<ol>
  <li>Open the Accessible Survey Page: <a href="http://www.w3.org/WAI/demos/bad/after/survey">www.w3.org/WAI/demos/bad/after/survey</a> that has several forms. Do  the label  checks above.
     Notice the '<code>label</code>'s, '<code>for</code>'s, and '<code>id</code>'s.</li>
  <li>Open the Inaccessible Survey Page: <a href="http://www.w3.org/WAI/demos/bad/before/survey">www.w3.org/WAI/demos/bad/before/survey</a> and do the label checks above.<br />
 In IE WAT, you get the dialog box saying there are errors and the errors are marked in the page with  “&lt;input    Error&gt;”.</li>
</ol>
<h5 id="formerrorsbad">Errors:</h5>
<ul>
  <li>Open the Accessible Survey Page: <a href="http://www.w3.org/WAI/demos/bad/after/survey">www.w3.org/WAI/demos/bad/after/survey</a>. Leave the fields blank and Submit the form.<br />
 Notice the error messages at the top and the asterisks to indicate required fields. Also, the page title includes “Submission Failed”.</li>
  <li>Open the Inaccessible Survey Page: <a href="http://www.w3.org/WAI/demos/bad/before/survey">www.w3.org/WAI/demos/bad/before/survey</a>. Leave the fields blank and Submit the form.<br />
     Notice errors are only indicated by the label being red, and there is no explanation of the errors.</li>
</ul>
</div>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h3 class="">Learn more about forms</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li> <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-cues.html">Labels or Instructions</a> - Understanding Success Criterion 3.3.2 for WCAG 2.0 (Level A)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/content-structure-separation-programmatic.html">Info and Relationships</a> - Understanding Success Criterion 1.3.1 for WCAG 2.0 (Level A)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-identified.html">Error Identification</a> - Understanding Success Criterion 3.3.1 for WCAG 2.0 (Level A)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-suggestions.html">Error Suggestion</a> - Understanding Success Criterion 3.3.3 for WCAG 2.0 (Level AA)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/minimize-error-reversible.html">Error Prevention (Legal, Financial, Data)</a> - Understanding Success Criterion 3.3.4 for WCAG 2.0 (Level AA) </li>
</ul>
{% include_cached excol.html type="end" %}



<h2 id="moving">Moving, Flashing, or Blinking Content</h2>
<p>Moving, flashing, or blinking content includes carousels (<a href="https://www.w3.org/WAI/tutorials/carousels/animations/#c">example carousel</a>), ads, videos, auto-updating stock tickers, scrolling news feeds, and more. Users need to be able to control moving content, especially some people with attention deficit disorder or visual processing disorders.</p>

<p>Potential accessibility problems with moving, flashing, or blinking content include:</p>
 <ol class="listspaced">
        <li>Understanding moving information — Some people read and process information slowly. The content may disappear before people have time to read it. Some people have difficulty tracking moving objects.</li>
        <li>Distraction from moving content — Moving content can make focusing and reading elsewhere difficult; that is, people cannot focus on some content because the movement in another area of the web page grabs their attention.</li>
 </ol>
 <p>Additionally,  flashing or blinking content can cause seizures in people with photosensitive epilepsy, particularly if it:</p>
 <ol>
   <li>flashes more than three times in one second,</li>
        <li>covers a large enough area of the screen, and</li>
        <li>is bright enough.</li>
 </ol>

<h3 class="whathead">What to check for:</h3>
<ul>
  <li>Check if there is any <strong>moving, blinking, or scrolling information</strong> that starts automatically and lasts more than five seconds. If there is, check that there is a way for the user to pause, stop, or hide the movement.</li>
  <li>Check if there is any <strong>auto-updated information</strong> (such as stock price). If there is, check that there is a way for the user to pause, stop, or hide the updated information, or for the user to control the frequency of the update.</li>
  <li>Check that <strong>no content flashes or blinks</strong> more than three times in one second. If it does, further evaluation is needed as explained in <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/seizure-does-not-violate.html">Three Flashes or Below Threshold</a>.</li>
</ul>
{% include_cached excol.html type="start" %}<h3 class="">To learn more about moving, flashing, or blinking content</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="https://www.w3.org/TR/UNDERSTANDING-WCAG20/time-limits-pause.html">Pause, Stop, Hide</a> – Understanding Success Criterion 2.2.2 for WCAG 2.0 (Level A)</li>
  <li><a href="https://www.w3.org/WAI/tutorials/carousels/animations/">Carousel Animations</a> – WAI Web Accessibility Tutorial</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/seizure-does-not-violate.html">Three Flashes or Below Threshold</a> Understanding Success Criterion 2.3.1 for WCAG 2.0 (Level A)</li>
</ul>
{% include_cached excol.html type="end" %}

  <h2 id="media">Multimedia (video, audio) alternatives</h2>
  <p>Information in podcasts or other audio is not available to people who are deaf or some people who are hard of hearing, unless it is provided in an alternative format such as captions and text  transcripts. Visual information in videos is not available to people who are blind or some people what have low vision, unless it is provided in an alternative format such as audio or  text. (Text can be read  by a screen reader or Braille display, or enlarged and reformatted for people with low vision.)</p>
  <p> (Remember these easy checks  are not comprehensive or definitive.)</p>
  <h3 class="whathead">What to check for:</h3>
  <h4>Keyboard access</h4>
  <p>Follow the steps above for <a href="#interaction">keyboard access</a> to ensure that the media player controls are labeled and keyboard accessible.</p>
  <h4>Auto-start control</h4>
  <p>It is best if audio (including background noise and video with sound) does not start automatically when a web page opens. If it does start automatically, it should either:</p>
  <ul>
     <li>Stop after 3 seconds.</li>
     <li>Include controls to pause or stop the audio.</li>
     <li>Include controls to turn down the volume.</li>
  </ul>
  <h4>Captions</h4>
  <p>(Captions are known as “subtitles” in some areas.)</p>
  <p>Most video on the web that provides captions has “closed captions” that can be turned on and off. (“Open captions” are always shown.) For example, in YouTube, you turn on captions with the CC button <img src="images/cc-button.png" alt="" width="26" height="21" /> (no known keyboard access). If there is not a CC button, there are no captions available for that video.</p>
  <p>Automatic captions are not sufficient for accessibility because they are not accurate enough. For example, in YouTube, if only “automatic captions” are listed<!-- TODO Low Priority Add Image (as in the image above) -->, there are no sufficient captions and the video is not accessible. Captions in the specific language need to be listed.<!-- [@@ say more ?] --></p>
  <figure>
     <div class="figcontent"><img src="images/captions-both.png" alt="" width="231" height="173" /></div>
     <figcaption class="figcaption">Figure: Captions listed: French (automatic captions), Norwegian.</figcaption>
     <!--figure-->
  </figure>

  <p>If there are captions, you can check that:</p>
  <ul>
     <li>The captions seem in sync with the spoken content.</li>
     <li>The people who are speaking are identified when they speak.</li>
     <li>Important sound other than dialogue &mdash; e.g., footsteps approaching, doors closing, glass breaking &mdash; is included.</li>
  </ul>
  <h4>Transcript</h4>
  <p>It is best practice to provide both  captions and transcripts, although  not always required; <a href="http://www.uiaccess.com/transcripts/transcripts_on_the_web.html#benes">providing transcripts has many benefits</a> &mdash; both to people with disabilities and to website owners.</p>
  <p>Transcripts should be easy to find near the audio/video itself and any links to the audio/video.</p>
  <p>Check that  transcripts include all audio information, including dialogue with  the speakers  identified, and all important sound  &mdash; e.g., footsteps approaching, doors closing, glass breaking.</p>
  <p>A transcript for a video could provide all the audio and all the visual information, so that a person can get all the content of the video by reading the text.</p>
  <h4>Audio description</h4>
  <p>Audio description (sometimes known as described video, video description, or visual interpretation) is description of important visual information in a video, in order to make it accessible to people who cannot see. For example, some videos start out with a title in text, have speaker names  in text, and have illustrations. That visual information  needs to be provided to people who cannot see the video. It can be provided through:</p>
  <ul>
     <li>Audio description - where the audio track includes someone describing the important visuals. Audio description can be included in the main video, or it can be provided in a separate video.</li>
     <li>Text transcript - that includes description of meaningful visual information (so it's kind of like  a screenplay).</li>
  </ul>
{% include_cached excol.html type="start" %}  <h3 class="">Learn more about multimedia alternatives</h3>{% include_cached excol.html type="middle" %}
<ul>
  <li><a href="http://www.w3.org/2008/06/video-notes">W3C Multimedia Accessibility FAQ</a></li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-captions.html" >Captions</a> - Understanding Success Criterion 1.2.2 for WCAG 2.0 (Level A)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-audio-desc.html" >Audio Description or Media Alternative</a> - Understanding Success Criterion 1.2.3 for WCAG 2.0 (Level A)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-dis-audio.html">Audio Control</a> - Understanding Success Criterion 1.4.2 for WCAG 2.0 (Level A)</li>
  <li><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/media-equiv-text-doc.html">Media Alternative</a> - Understanding Success Criterion 1.2.8 for WCAG 2.0 (Level AAA)</li>
</ul>
{% include_cached excol.html type="end" %}

  <a id="plain"></a>
  <!-- anchor for historical purposes - so old links work -->
  <h2 id="structure">Basic structure check</h2>
  <p><em>While the other checks on this page focus on specific success criteria in WCAG 2.0, this check is more broad. It helps you understand how some people “see” the web page differently. For this basic structure check, you look at the web page without images, styles, and layout.</em></p>
  <p>Web pages are often designed with multiple columns, sections, colors, and other visual  aspects that help organize information for people who see the page in its default display. However, some people do not see the page this way. People who are blind listen to the page with a screen reader or read it from a Braille display. Some people  with low vision and others change the way the page is displayed so they can read it; for example, change from multiple columns to one column, change the text size, and more.</p>
  <p>An important issue is how the web page works when it is “linearized” into one column and the presentation is changed, as shown in the images below.</p>
{% include_cached excol.html type="start" %}  <p class="" id="limgs"><strong>Images showing linearized and changed display </strong><em>(click to show images)</em></p>{% include_cached excol.html type="middle" %}
<p>The images below illustrate how a web page is displayed in 3 columns by default and how it can be changed.</p>
<p>Figure A shows the default display of three columns, with the navigation at the left.</p>
<figure>
<div class="figcontent"><img src="images/lin-start.png" alt="" width="363" height="150"/></div>
<figcaption class="figcaption">Figure A.</figcaption>
<!--figure-->
</figure>

 <p>Figure B shows the page linearized into one column, with the navigation at the top. Figure C shows the page  linearized, with the navigation at the bottom. The order of the sections (e.g., navigation at top or bottom or elsewhere) depends on how the web page is developed &mdash; the user usually cannot control the order.</p>
<div class="multifigs">
 <figure>
    <div class="figcontent"><img src="images/lin-lin.png" alt="" width="359" height="278"/></div>
    <figcaption class="figcaption">Figure B.</figcaption>
 </figure>
 <figure>
    <div class="figcontent"><img src="images/lin-awk.png" alt="" width="359" height="278"/></div>
    <figcaption class="figcaption">Figure C.</figcaption>
 </figure>
</div>
<p>Figure D shows the page linearized and with styles turned off. When you follow the <a href="#bschecks">Basic structure checks steps below</a>, your page will look like something like this:</p>
<figure>
 <div class="figcontent"><img src="images/lin-plain.png" alt="" width="359" height="266" /></div>
 <figcaption class="figcaption">Figure D.</figcaption>
 <!--figure-->
</figure>

<p>Figure E shows the page changed by a person with low vision to make it more readable, for example, the main text is big, the footer text is very small, and the headings are a different color.</p>
<figure>
 <div class="figcontent"><img src="images/lin-lv.png" alt="" width="359" height="429" /></div>
 <figcaption class="figcaption">Figure E.</figcaption>
 <!--figure-->
</figure>
{% include_cached excol.html type="end" %}

<p>While it is useful to have an experienced screen reader user check web pages, anyone can get an initial idea of  potential accessibility barriers for screen reader users and others who change the way the page is presented. The steps below show you how to disable images, disable styles for how the page is usually displayed, and linearize the page to check the page structure.</p>
<p id="dtnote">Notes:</p>
<ul>
   <li>Data tables will not make sense when linearized &mdash; that's OK because  screen readers have functionality to make data tables usable (when they are marked up correctly).</li>
   <li>BAD provides a clear example of how the basic structure check reveals accessibility barriers. (It's also a bit funny, and we suggest you check it out, by following the <a href="#plainBAD">BAD instructions</a> below.)</li>
</ul>
<h3 class="whathead listintro">What to do:</h3>
<p>Get a basic structure view of the page by following the instructions under <a href="#structure">Basic structure checks</a> below to: </p>
<ul>
   <li> Turn off images and show the text alternatives.</li>
   <li>Turn off style sheets (CSS), which specifies how the page is displayed with layout, colors, etc.</li>
   <li>Linearize the page or the tables (depending on the toolbar).</li>
</ul>
<h3 class="whathead listintro">What to check for:</h3>
<ul>
   <li>Check that the information makes sense when read in the order it is shown; for example, headings are right above the information they apply to.<br />
      <em>(Data tables do not need to make sense linearized, per the <a href="#dtnote">note</a> above.)</em></li>
   <li>Check that the alternative text provides adequate information for the missing images (per the <a href="{% link pages/test-eval/easychecks.md %}#images">Image text alternatives</a> section above).</li>
   <li>Check that blocks of information have clear headings (see also the <a href="#headings">Headings</a> section above). When navigation, main content, and other sections have  good headings, it's easier for people to find their way around the information.</li>
</ul>

<h3 id="bschecks">Basic structure checks</h3>
{% include_cached excol.html type="start" %}  <h4 class="">To check basic structure <em>with IE WAT</em></h4>{% include_cached excol.html type="middle" %}
<ol>
  <li> Open the web page you are checking.</li>
  <li>In the toolbar, select “Images”, then “Remove Images”.<br />
 Or, with the keyboard: Ctrl+Alt+4, then arrow down to “Remove Images”.</li>
  <li> In the toolbar, select “CSS”, then “Disable CSS”.<br />
 Or, with the keyboard: Ctrl+Alt+3, then arrow down to “Disable CSS”.</li>
  <li>In the toolbar, select “Tables”, then “Linearize”.<br />
 Or, with the keyboard: Ctrl+Alt+7, then arrow down to  “Linearize”.</li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">To check  basic structure <em>with WebDev toolbar</em></h4>{% include_cached excol.html type="middle" %}
<ol>
  <li> Open the web page you are checking.</li>
  <li> In the toolbar, select “Images”, then “Disable Images”, then “Disable All Images”.<br />
     Or, with the keyboard: Alt+T, W (to Web Developer Extension), I, D, D.</li>
  <li> In the toolbar, select “CSS”, then “Disable Styles”, then “Disable All Styles”.<br />
     Or, with the keyboard: Alt+T, W (to Web Developer Extension), S, D, D.</li>
  <li>In the toolbar, select “Miscellaneous”, then “Linearize Page”.<br />
     Or, with the keyboard: Alt+T, W (to Web Developer Extension), M, I.<br />
  </li>
</ol>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="">To check  basic structure <em>with any browser</em></h4>{% include_cached excol.html type="middle" %}
<p>Most browsers provide the option to turn off images and disable CSS from the menus. For example:</p>
<ul>
  <li>In Opera:
     <ul>
        <li>View &gt; Images &gt; Show Images<br />
           or, Alt+V, I, S</li>
        <li>View &gt; Style &gt; User Mode<br />
           or, Alt+V, S, U<br />
        </li>
     </ul>
  </li>
  <li>In Safari:
     <ul>
        <li>If the Develop menu is not shown in the menu bar, turn it on:
           <ul>
              <li>In Safari preferences, click Advanced.</li>
              <li>Select the “Show Develop menu in menu bar” checkbox.</li>
           </ul>
        </li>
        <li>Develop &gt; Disable Images<br />
           or, Ctrl+F2, D, down arrow to Disable Images</li>
        <li>Develop &gt; Disable Styles<br />
           or, Ctrl+F2, D, down arrow to Disable Styles</li>
     </ul>
  </li>
</ul>
{% include_cached excol.html type="end" %}
{% include_cached excol.html type="start" %}  <h4 class="" id="plainBAD">To practice checking  basic structure with BAD</h4>{% include_cached excol.html type="middle" %}
<ol>
  <li>First use the Accessible Home Page <code><a href="http://www.w3.org/WAI/demos/bad/after/home">www.w3.org/WAI/demos/bad/after/home</a></code> with one of the checks above to turn off images, disable CSS, and linearize.<br />
 Skim down and notice that under “Welcome to CityLights” there are 3 article headlines with summary text under each headline.</li>
  <li>Next use the Inaccessible Home Page <code><a href="http://www.w3.org/WAI/demos/bad/before/home">www.w3.org/WAI/demos/bad/before/home</a></code> with one of the checks above to turn off images, disable CSS, and linearize.
     <ul>
        <li>Skim down to find “Welcome to CityLights”. Notice that it's much harder to find. That's because it's not <a href="#markup" class="termref">marked up</a> as a <a href="{% link pages/test-eval/easychecks.md %}#headings">heading, per above</a>.</li>
        <li>Notice that the 3 article headings are together and the article text is together. (For fun, read the article text together.)</li>
     </ul>
  </li>
  <li>To check a form, use the Inaccessible Survey Page <a href="http://www.w3.org/WAI/demos/bad/before/survey"><code>www.w3.org/WAI/demos/bad/before/survey</code></a> (This example is easier to see with IE WAT.) Look at how the radio buttons are laid out. Then linearize.<br />
     Notice that that radio button labels are not with the buttons. (This is because the page uses layout tables incorrectly.)</li>
</ol>
{% include_cached excol.html type="end" %}

<h2 id="next">Next steps</h2>
<p>Now that you have an idea of the accessibility issues on a web page, two things you can do:</p>
<ol>
   <li>Share your findings with someone who can fix accessibility barriers.</li>
   <li>Encourage thorough accessibility evaluation.</li>
</ol>
<h3>Share your findings</h3>
<p><a href="http://www.w3.org/WAI/users/inaccessible">Contacting Organizations about Inaccessible Websites</a> has guidance on reporting accessibility problems. It is focused for people who do not work for the organization that owns the website, yet also has some useful information if you do work for the organization &mdash; particularly the Introduction, Consider Your Approach, and Sources for More Information sections.</p>
<h3 id="moreeval">Encourage thorough accessibility evaluation</h3>
<p>The checks on this page are not definitive; a web page could seem to pass these checks, yet still have significant accessibility barriers.</p>
<p>This page covers just a few accessibility issues. There are other accessibility issues not covered in these easy checks, for example: links, data table <a href="#markup" class="termref">markup</a>, reliance on color, and much more.</p>
<p id="evalresources">More robust assessment is needed to evaluate accessibility comprehensively. Guidance is available from:</p>
<ul>
 <li>Evaluation methodology and report generator &mdash;<br>
<a href="{% link pages/test-eval/conformance-eval.md %}">WCAG-EM Overview</a>: Website Accessibility Conformance Evaluation Methodology<br/> <a href="http://www.w3.org/WAI/eval/report-tool/#/">WCAG-EM Report Tool</a>: Website Accessibility Evaluation Report Generator </li>
  <li><a href="http://www.w3.org/WAI/eval/selectingtools">Selecting Web Accessibility Evaluation Tools</a></li>
  <li><a href="http://www.w3.org/WAI/eval/users">Involving Users in Evaluating Web Accessibility</a></li>
</ul>