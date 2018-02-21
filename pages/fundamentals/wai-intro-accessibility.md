---
title: Introduction to Web Accessibility
permalink: /fundamentals/accessibility-intro/
layout: default
github:
  repository: w3c/wai-intro-accessibility
  branch: gh-pages
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

<p>When websites and web tools are properly designed and coded, people with disabilities can use them. However, currently many sites and tools are developed with accessibility barriers that make them difficult or impossible for some people to use.</p>
<p>Making the web accessible benefits individuals, businesses, and society. International web standards define what is needed for accessibility.</p>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

<ul>
<li><a href="#context">Accessibility in Context</a></li>
<li><a href="#what">What is Web Accessibility</a></li>
<li><a href="#important">Accessibility is Important for Individuals, Businesses, Society</a></li>
<li><a href="#making">Making the Web Accessible</a></li>
<li><a href="#evaluate">Evaluating Accessibility</a></li>
<li><a href="#examples">Examples</a></li>
<li><a href="#more-info">For More Information</a></li>
</ul>

<p><span class="box-h box-h-simple box-h-full">Related Resource</span><br>
{% include video-link.html title="Video Introduction to Web Accessibility and W3C Standards <em>(4 minutes)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits.html" src="/content-images/wai-intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}
</p>

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

<h2 id="context">Accessibility in Context</h2>
<blockquote>
  <p>The power of the Web is in its universality.<br />
    Access by everyone regardless of disability is an essential aspect.</p>
  <footer><cite>Tim Berners-Lee, W3C Director and inventor of the World Wide Web</cite></footer>
</blockquote>
<p>The Web is fundamentally designed to work for all people, whatever their hardware, software, language,  location, or  ability. When the Web meets this goal, it is accessible to people with a diverse range of hearing, movement, sight, and cognitive ability.</p>
<p>Thus the impact of disability is radically changed on the Web because the Web removes barriers to communication and interaction that many people face in the physical world. However, when websites,  applications, technologies, or  tools are badly designed, they can create barriers that exclude people from using the Web.</p>
<p><strong>Accessibility is essential for developers and organizations that want to create high-quality websites and web tools, and not exclude people from using their products and services.</strong></p>

<h2 id="what">What is Web Accessibility</h2>
<p>Web accessibility means that websites, tools, and technologies are designed and developed so that people with disabilities can use them. More specifically, people can:</p>
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
<p>Web accessibility also benefits people <em>without</em> disabilities, for example:</p>
<ul>
  <li>people using mobile phones, smart watches, smart TVs, and other devices with small screens, different input modes, etc.</li>
  <li>older people with changing abilities due to ageing</li>
  <li>people with “temporary disabilities” such as a broken arm or lost glasses</li>
  <li>people with “situational limitations” such as in bright sunlight or  in an environment where they cannot listen to audio</li>
  <li>people using a slow Internet connection, or who have limited or expensive bandwidth</li>
</ul>
<p>For a 7-minute video with examples of how accessibility is essential for people with disabilities and useful for everyone in a variety of situations, see:<br>
{% include video-link.html title="Web Accessibility Perspectives Video <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/wai-intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}</p>

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on What is Accessibility" class="simple aside" %}
{:/}
<ul>
  <li>When you want to learn more about how different disabilities affect Web use, and read about scenarios of people with disabilities using the Web, see <a href="http://www.w3.org/WAI/intro/people-use-web/Overview.html">How People with Disabilities Use the Web</a>.</li>
  <li>If you want more examples of benefits for others, with <acronym title="Web Content Accessibility Guidelines">WCAG</acronym> to back it up, see <a href="https://www.w3.org/WAI/bcase/soc#groups">Web Accessibility Benefits People With and Without Disabilities</a> and <a href="https://www.w3.org/WAI/mobile/experiences">Shared Web Experiences: Barriers Common to Mobile Device Users and People with Disabilities</a>.</li>
</ul>
{::nomarkdown}
{% include box.html type="end" %}
{:/}

<h2 id="important">Accessibility is Important for Individuals, Businesses, Society</h2>
<p>The Web is an increasingly important resource in many aspects of life: education, employment, government, commerce, health care, recreation, and more. It is essential that the Web be accessible in order to provide equal access and equal opportunity to people with diverse abilities. Access to information and communications technologies, including the Web, is defined as a basic human right in the United Nations Convention on the Rights of Persons with Disabilities (UN <a href="https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html">CRPD</a>).</p>
<p>The Web offers the possibility of unprecedented access to information and interaction for many people with disabilities. That is, the  accessibility barriers to print, audio, and visual media can be much more easily overcome through web technologies.</p>
<p>Accessibility supports social inclusion for people with disabilities as well as others, such as:</p>
<ul>
  <li>older people</li>
  <li>people in rural areas</li>
  <li>people in developing countries</li>
</ul>
<p><strong>There is also a strong business case for accessibility.</strong> Accessibility overlaps with other best practices such as mobile web design, device independence, multi-modal interaction, usability, design for older users, and search engine optimization (SEO). Accessible websites can have better search results, reduced maintenance costs,  increased audience reach, and demonstrate  corporate social responsibility (CSR).</p>
<p>Web accessibility is <strong>required by law </strong>in many situations.</p>

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Accessibility is Important" class="simple aside" %}
{:/}
<ul>
  <li>Details on business benefits are in <a href="/WAI/bcase/Overview">Developing a Web Accessibility Business Case for Your Organization</a>.</li>
  <li>Guidance on figuring out legal requirements is in <a href="https://www.w3.org/WAI/bcase/pol">Legal and Policy Factors</a>.</li>
</ul>
{::nomarkdown}
{% include box.html type="end" %}
{:/}

<h2 id="making">Making the Web Accessible</h2>
<p>Web accessibility depends on several components working together, including web technologies, web browsers and other "user agents", authoring tools, and websites.</p>
<p>The W3C Web Accessibility Initiative (<a href="../about-links">WAI</a>) develops technical specifications, guidelines, techniques, and supporting resources that describe accessibility solutions. These are considered international standards for web accessibility; for example, <abbr title="Web Content Accessibility Guidelines (WCAG)">WCAG</abbr> 2.0 is also an <abbr title="International Organization for Standardization">ISO</abbr> standard: ISO/<abbr title="International Electrotechnical Commission">IEC</abbr> 40500.</p>

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Making the Web Accessible" class="simple aside" %}
{:/}

<ul>
  <li>More about these aspects of accessibility working together is in <a href="components.php">Essential Components of Web Accessibility</a>.</li>
  <li>Web Content Accessibility Guidelines (WCAG), Authoring Tool Accessibility Guidelines (ATAG), ARIA for Accessible Rich Internet Applications, and other important resources are introduced in <a href="https://www.w3.org/WAI/guid-tech">W3C Accessibility Standards Overview</a>.</li>
  <li>To learn more about how W3C WAI develops material through multi-stakeholder, international participation and how you can contribute, see <a href="https://www.w3.org/WAI/about">About WAI</a> and <a href="https://www.w3.org/WAI/participation">Participating in WAI</a>.</li>
</ul>
{::nomarkdown}
{% include box.html type="end" %}
{:/}

<h3 id="website">Making Your Website Accessible</h3>
<p>Most of the basics of accessibility are fairly easy to implement.  If you are new to accessibility, it takes some time and effort to learn the common issues and solutions.</p>
<p>Some accessibility barriers are more complicated to avoid. Some accessibility solutions take more  time and effort to implement.</p>
<p>It is most efficient and effective to incorporate accessibility from the very beginning of projects and throughout organizations.</p>

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Making Your Website Accessible" class="simple aside" %}
{:/}
<ul>
  <li><a href="https://www.w3.org/WAI/intro/people-use-web/principles"></a> For an  introduction to accessibility requirements and international standards, see <a href="https://www.w3.org/WAI/intro/people-use-web/principles">Accessibility Principles</a>.</li>
  <li><a href="https://www.w3.org/WAI/eval/preliminary"></a>To understand some common accessibility barriers from the perspective of testing, see <a href="https://www.w3.org/WAI/eval/preliminary">Easy Checks - A First Review</a>.</li>
  <li><a href="https://www.w3.org/WAI/gettingstarted/tips/"></a> For some basic considerations on designing, writing, and developing for accessibility, see <a href="https://www.w3.org/WAI/gettingstarted/tips/">Tips for Getting Started</a>.</li>
  <li>When you're ready to know more about developing and designing, you'll probably use resources such as:
    <ul>
      <li><a href="http://www.w3.org/WAI/WCAG20/quickref/">How to Meet WCAG 2.0: A customizable quick reference...</a></li>
      <li><a href="https://www.w3.org/WAI/tutorials/">Web Accessibility Tutorials</a></li>
    </ul>
  </li>
  <li>For project management and organizational considerations, see <a href="https://www.w3.org/WAI/impl/">Planning and Managing Web Accessibility</a>.<br>
If you need to make quick fixes now, see <a href="https://www.w3.org/WAI/impl/improving">Approaches for Interim Repairs</a>.</li>
</ul>
{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
<h2 id="evaluate">Evaluating Accessibility</h2>
<p>When developing or redesigning a website, evaluate accessibility early and throughout the development process to identify accessibility problems early, when it is easier to address them. Simple steps, such as changing settings in a browser, can help you evaluate some aspects of accessibility. Comprehensive evaluation to determine if a website meets all accessibility guidelines takes more effort.</p>
<p>There are evaluation  tools that  help with evaluation. However, no tool alone can determine if a site meets accessibility guidelines. Knowledgeable human evaluation is required to determine if a site is accessible.</p>

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Evaluating Accessibility" class="simple aside" %}
{:/}
<ul>
  <li>Resources to help with accessibility evaluation are described in <a href="/WAI/eval/Overview.html">Evaluating Websites for Accessibility</a>.</li>
</ul>
{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}
<h2 id="examples">Examples</h2>
{% include excol.html type="middle" %}

<h3>Alternative Text for Images</h3>
<img class="right" src="http://www.w3.org/WAI/intro/alt-logo.png" alt="image of logo; HTML markup img alt='Web Accessibility Initiative logo'">
<p>Images should include <em><a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv.html">equivalent alternative text</a></em> (alt text) in the markup/code.</p>
<p>If alt text isn't provided for images, the image information is inaccessible, for example, to people who cannot see and use a screen reader that reads aloud the information on a page, including the alt text for the visual image.</p>
<p>When equivalent alt text is provided, the information is available to people who are blind, as well as to people who turn off images (for example,  in  areas with expensive or low bandwidth). It's also available to technologies that cannot see images, such as search engines.</p>

<h3>Keyboard Input</h3>
<img class="left" src="https://www.w3.org/WAI/intro/no-mouse.png" width="67" height="45" alt="mouse crossed out" />
<p class="di">Some people cannot use a mouse, including many older users with limited fine motor control. An accessible website does not rely on the mouse; it makes <a href="http://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html">all functionality available from a keyboard</a>. Then people with disabilities can use <a href="http://www.w3.org/WAI/users/involving#at">assistive technologies</a> that mimic the keyboard, such as speech input.</p>

<h3>Transcripts for Audio</h3>
<p><a href="http://www.w3.org/WAI/highlights/200606wcag2interview.html"><img src="http://www.w3.org/WAI/intro/transcript.png" class="right" width="251" height="254" alt="example transcript" /></a></p>
<p>Just as images aren't available to people who can't see, audio files aren't available to people who can't hear. Providing a text transcript makes the audio information accessible to people who are deaf or hard of hearing, as well as to search engines and other technologies that can't hear.</p>
<p>It's easy and relatively inexpensive for websites to provide transcripts. There are also <a href="http://www.uiaccess.com/transcripts/transcript_services.html">transcription services</a> that create text transcripts in HTML format.</p>

{::nomarkdown}
{% include box.html type="start" h="3" title="More Examples" class="simple aside" %}
{:/} 
<ul>
  <li><a href="https://www.w3.org/WAI/gettingstarted/tips/">Tips for Getting Started</a></li>
  <li><a href="https://www.w3.org/WAI/eval/preliminary">Easy Checks - A First Review</a></li>
  <li>{% include video-link.html class="small list" title="Web Accessibility Perspectives &mdash; videos and descriptions" href="https://www.w3.org/WAI/perspectives/" src="/content-images/wai-intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}
</li>
</ul>
{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

<h2 id="more-info">For More Information</h2>
<p>W3C WAI provides a wide range of resources on different aspects of web accessibility <a href="https://www.w3.org/WAI/guid-tech">standards</a>, <a href="https://www.w3.org/WAI/train">education</a>, <a href="https://www.w3.org/WAI/eval">testing/evaluation</a>, <a href="https://www.w3.org/WAI/managing">project management, and policy</a>. We encourage you to explore this website, or look through the <a href="http://www.w3.org/WAI/Resources/">WAI Resources</a> list.</p>
