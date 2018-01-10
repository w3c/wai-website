---
title: Introduction to Web Accessibility
permalink: /fundamentals/accessibility-intro/
---

<h2>Summary</h2>
<p>@@</p>
<p class="summary">A shorter version of this information is on a W3C page: <a href="http://www.w3.org/standards/webdesign/accessibility">Accessibility - W3C</a>.</p>
<p class="summary">A 4-minute video introduction is at: <a href="https://www.w3.org/WAI/videos/standards-and-benefits.html">Video Introduction to Web Accessibility and W3C Standards</a>.</p>
<div id="contents">
  <h3>Page Contents</h3>
  <ul>
    <li><a href="#intro">Accessibility in Context</a></li>
    <li><a href="#i-what">What is Web Accessibility</a></li>
    <li><a href="#important">Accessibility is Important for Individuals, Organizations, Society</a></li>
    <li><a href="#making">Making the Web Accessible</a></li>
    <li><a href="#evaluate">Evaluating Accessibility</a></li>
    <li><a href="#more-info">For More Information</a></li>
  </ul>
  <!-- end (page) contents (list)--></div>
<h2 id="intro">Accessibility in Context</h2>
<blockquote>
  <p><q>The power of the Web is in its universality.<br />
    Access by everyone regardless of disability is an essential aspect.</q><br />
    <span class="quotee"><strong>Tim Berners-Lee, W3C Director and inventor of the World Wide Web</strong></span></p>
</blockquote>
<p>The Web is fundamentally designed to work for all people, whatever their hardware, software, language,  location, or  ability. When the Web meets this goal, it is accessible to people with a diverse range of hearing, movement, sight, and cognitive ability.</p>
<p>Thus <strong>the impact of disability is radically changed on the Web because the Web removes barriers</strong> to communication and interaction that many people face in the physical world. However, when websites,  applications, technologies, or  tools are badly designed, they can create barriers that exclude people from using the Web.</p>
<p style="background-color: #f1f7fb"><strong>Accessibility is essential for developers and organizations that want to create high quality websites and web tools, and not exclude people from using their products and services.</strong></p>
<h2 id="i-what">What is Web Accessibility</h2>
<p>@@ Properly designed websites and  tools can be used by people with disabilities. However, currently many sites and tools are developed with accessibility barriers that make it difficult or impossible for some people to use them. @@</p>
<p>@@ Web accessibility means websites and web tools are designed so that people with disabilities can use the Web.@@<br>
  Web accessibility means that people with disabilities can use the Web.
  More specifically, it means  people with disabilities can:</p>
<ul>
  <li>perceive, understand, navigate, and interact with the Web</li>
  <li>contribute to the Web</li>
</ul>
<p>Web accessibility encompasses all disabilities that  affect access to the Web, including:</p>
<ul>
  <li>auditory</li>
  <li>cognitive</li>
  <li>neurological</li>
  <li>physical</li>
  <li>speech</li>
  <li>visual </li>
</ul>
<p class="more"><em>More: When you want to learn more about how different
  disabilities affect Web use and read about scenarios of people with
  disabilities using the Web, see <a href="http://www.w3.org/WAI/intro/people-use-web/Overview.html">How People with Disabilities Use the Web</a></em>.</p>
<p><s>Millions of people  have disabilities that affect their use
  of the Web. Currently most websites and <a href="#software">Web software</a> have <strong>accessibility barriers</strong> that make it
  difficult or impossible for many people with disabilities to use the Web. As more accessible websites and  software become available, people with disabilities are able to use and contribute to the Web more effectively.</s></p>
<p>Web accessibility  also <strong>benefits</strong> people <em>without</em> disabilities, including:</p>
<ul>
  <li>people using mobile phones, smart watches, digital TVs, etc.</li>
  <li>older people with changing abilities due to ageing</li>
  <li>people with "temporary disabilities" such as a broken arm</li>
  <li>people is an environment where they cannot listen to audio</li>
  <li>people using a slow Internet connection, or how have limited or expensive bandwidth</li>
</ul>
<p class="more"><em>(More: If you want specific examples, see <a href="https://www.w3.org/WAI/bcase/soc#groups">Web Accessibility Benefits People With and Without Disabilities</a>.)</em></p>
<p>To see a 7-minute video with examples of how accessibility is essential for people with disabilities and useful for everyone in a variety of situations, check out: <a href="https://www.youtube.com/watch?v=3f31oufqFSM">Web Accessibility Perspectives Video</a>.</p>

{% include excol.html type="start" id="examples" %}

<h3>[+/-] 3 Examples of Web Accessibility</h3>

{% include excol.html type="middle" %}

<h4>Alternative Text for Images</h4>
<span class="example-alt"><img src="http://www.w3.org/WAI/intro/alt-logo.png" alt="image of logo; HTML markup img alt='Web Accessibility Initiative logo'" /></span>
<p>Images should include <em><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv.html">equivalent alternative text</a></em> (alt text) in the markup/code.</p>
<p>If alt text isn't provided for images, the image information is inaccessible, for example, to people who cannot see and use a screen reader that reads aloud the information on a page, including the alt text for the visual image.</p>
<p>When equivalent alt text is provided, the information is available to people who are blind, as well as to people who turn off images (for example,  in  areas with expensive or low bandwidth). It's also available to technologies that cannot see images, such as search engines.</p>




<h4>Keyboard Input</h4>
<span class="example-di"><img src="https://www.w3.org/WAI/intro/no-mouse.png" width="67" height="45" alt="mouse crossed out" /></span>
<p class="di">Some people cannot use a mouse, including many older users with limited fine motor control. An accessible website does not rely on the mouse; it makes <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html">all functionality available from a keyboard</a>. Then people with disabilities can use <a href="http://www.w3.org/WAI/users/involving#at">assistive technologies</a> that mimic the keyboard, such as speech input.</p>


<h4>Transcripts for Audio</h4>
<span class="example-transcript"><a href="http://www.w3.org/WAI/highlights/200606wcag2interview.html"><img src="http://www.w3.org/WAI/intro/transcript.png" width="251" height="254" alt="example transcript" /></a></span>
<p>Just as images aren't available to people who can't see, audio files aren't available to people who can't hear. Providing a text transcript makes the audio information accessible to people who are deaf or hard of hearing, as well as to search engines and other technologies that can't hear.</p>
<p>It's easy and relatively inexpensive for websites to provide transcripts. There are also <a href="http://www.uiaccess.com/transcripts/transcript_services.html">transcription services</a> that create text transcripts in HTML format.</p>

{% include excol.html type="end" %}

<h2 id="important"> Accessibility is Important for Individuals, Organizations, Society</h2>
<p>The Web is an increasingly important resource in many aspects of life: education, employment, government, commerce, health care, recreation, and more. It is essential that the Web be accessible in order to provide <strong>equal access</strong> and <strong>equal opportunity</strong> to people with diverse abilities. An accessible Web can also help people with disabilities more actively participate  in society. Access to information and communications technologies, including the Web, is defined as <strong>a basic human right</strong> in the <a href="http://www.un.org/disabilities/convention/conventionfull.shtml">UN Convention on the Rights of Persons with Disabilities</a>.</p>
<p>The Web offers the possibility of <strong>unprecedented access to information and interaction</strong> for many people with disabilities. That is, the  accessibility barriers to print, audio, and visual media can be much more easily overcome through web technologies.</p>
<p><strong>Accessibility supports social inclusion</strong> for people with disabilities as well as others, such as older people, people in rural areas, and people in developing countries.</p>
<p><strong>There is also a strong business case for accessibility.</strong> Accessibility overlaps with other best practices such as mobile web design, device independence, multi-modal interaction, usability, design for older users, and search engine optimization (SEO). Accessible websites can have better search results, reduced maintenance costs,  increased audience reach, and demonstrate  corporate social responsibility (CSR).</p>
<p class="more"><em>More: Details are available in <a href="/WAI/bcase/Overview">Developing a Web Accessibility Business Case for Your Organization</a>.</em></p>
<p>Web accessibility is <strong>required by law </strong>in some cases.</p>
<p class="more"><em>More: Guidance on figuring out legal requirements is in <a href="https://www.w3.org/WAI/bcase/pol">Legal and Policy Factors</a>.</em></p>
<h2 id="making">Making the Web Accessible</h2>
<p>Web accessibility depends on several components working together, including web technologies,  browsers,  tools, and websites.</p>
<p><s>Using authoring tools that support accessibility makes it easier for web developers. Browsers also play a role in accessibility.</s></p>
<p>The W3C Web Accessibility Initiative (<a href="../about-links">WAI</a>) develops guidelines, techniques,  technical specifications, and supporting resources that describe accessibility solutions. These    are considered the international standard for web accessibility; for example, the Web Content Accessibility Guidelines (WCAG) 2.0 is also an <abbr title="International Organization for Standardization">ISO</abbr> standard: ISO/<abbr title="International Electrotechnical Commission">IEC</abbr> 40500.</p>
<p class="more"><em>More: To learn more about the different roles and accessibility standards, see <a href="components.php">Essential Components of
  Web Accessibility</a>.</em></p>
<h3 id="specific">Making Your Website Accessible</h3>
<p>Most of the basics of accessibility are fairly easy to implement.  However, if you are new to accessibility, it takes some time and effort to learn the common issues and solutions.</p>
<div class="more">
  <p><em>More: Here are places to start understanding website accessibility issues:</em></p>
  <ul>
    <li><a href="https://www.w3.org/WAI/intro/people-use-web/principles">Accessibility Principles</a> &mdash; introduces accessibility requirements and international standards.</li>
    <li><a href="https://www.w3.org/WAI/eval/preliminary">Easy Checks - A First Review</a> &mdash; helps you start testing the accessibility of a web page and understand some common accessibility barriers.</li>
    <li><a href="https://www.w3.org/WAI/gettingstarted/tips/">Tips for Getting Started</a> &mdash; provides some basic considerations for designing, writing, and developing.</li>
  </ul>
</div>
<p><s>Many accessibility features are easily implemented if they are planned from the beginning of Web site development or redesign. Fixing inaccessible Web sites can require significant effort, especially sites that were not originally "coded" properly with standard <abbr title="Extensible HyperText Markup Language">HTML Markup</abbr>, and sites with certain types of content such as multimedia.</s></p>
<p>Some accessibility barriers are more complicated to avoid and the solutions take more development time and effort.</p>
<div class="more">
  <p><em>More: When you're ready to go deeper, you'll probably use resources such as:</em></p>
  <ul>
    <li><a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0 (Quick Reference)</a></li>
    <li><a href="https://www.w3.org/WAI/tutorials/">Web Accessibility Tutorials</a></li>
  </ul>
</div>
<p>It is most efficient and effective to incorporate accessibility from the beginning of projects and throughout organizations.</p>
<p class="more"><em>More: For guidance, see <a href="https://www.w3.org/WAI/impl/">Planning and Managing Web Accessibility</a>.</em></p>
<h2 id="evaluate">Evaluating  Accessibility</h2>
<p>When developing or redesigning a website, evaluate accessibility early and throughout the development process to identify accessibility problems early, when it is easier to address them. Simple techniques such as changing settings in a  browser can  determine if a web page meets some accessibility guidelines. A comprehensive evaluation to determine if a site  meets all accessibility guidelines  is much more complex.</p>
<p>There are evaluation  tools that  help with evaluation. However, no tool alone can determine if a site meets accessibility guidelines. Knowledgeable <strong>human evaluation is required</strong> to determine if a site is accessible.</p>
<p class="more"><em>More: Resources to help with accessibility evaluation are listed in <a href="/WAI/eval/Overview.html">Evaluating Web Sites for
  Accessibility</a>.</em></p>
<h2 id="more-info">For More Information</h2>
<p>W3C WAI provides a wide range of resources on different aspects of web accessibility <a href="https://www.w3.org/WAI/guid-tech">standards</a>, <a href="https://www.w3.org/WAI/train">education</a>, <a href="https://www.w3.org/WAI/eval">testing/evaluation</a>, <a href="https://www.w3.org/WAI/managing">project management, and policy</a>. We encourage you to explore the <a href="http://www.w3.org/WAI/">WAI website</a>, or look through the <a href="http://www.w3.org/WAI/Resources/">WAI Resources</a> list.</p>
<p>Resources for making the Web accessible are also available from other organizations, and many can be found on the Web.</p>
<h2 id="terms"><s>[deleted <a href="https://www.w3.org/WAI/intro/accessibility#terms">Terminology section</a>]</s></h2>
