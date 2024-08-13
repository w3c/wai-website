---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Introduction to Web Accessibility
lang: en   # Change "en" to the translated-language shortcode
last_updated: 2024-03-07   # Put the date of this translation YYYY-MM-DD (with month in the middle)

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-intro/     # Do not change this

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this
  
# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Updated 7 March 2024. First published February 2005. CHANGELOG.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

When websites and web tools are properly designed and coded, people with disabilities can use them. However, currently many sites and tools are developed with accessibility barriers that make them difficult or impossible for some people to use.

Making the web accessible benefits individuals, businesses, and society. International web standards define what is needed for accessibility.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">Related Resource</span><br>
{% include video-link.html title="Video Introduction to Web Accessibility and W3C Standards <em>(4 minutes)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Accessibility in Context {#context}

<blockquote class="pull">
  <p>The power of the Web is in its universality.<br />
    Access by everyone regardless of disability is an essential aspect.</p>
  <footer><cite>Tim Berners-Lee, W3C Director and inventor of the World Wide Web</cite></footer>
</blockquote>

The Web is fundamentally designed to work for all people, whatever their hardware, software, language, location, or ability. When the Web meets this goal, it is accessible to people with a diverse range of hearing, movement, sight, and cognitive ability.

Thus the impact of disability is radically changed on the Web because the Web removes barriers to communication and interaction that many people face in the physical world. However, when websites, applications, technologies, or tools are badly designed, they can create barriers that exclude people from using the Web.

**Accessibility is essential for developers and organizations that want to create high-quality websites and web tools, and not exclude people from using their products and services.**


## What is Web Accessibility {#what}

Web accessibility means that websites, tools, and technologies are designed and developed so that people with disabilities can use them. More specifically, people can:

-   perceive, understand, navigate, and interact with the Web
-   contribute to the Web

Web accessibility encompasses all disabilities that affect access to the Web, including:

-   auditory
-   cognitive
-   neurological
-   physical
-   speech
-   visual

Web accessibility also benefits people *without* disabilities, for example:

-   people using mobile phones, smart watches, smart TVs, and other devices with small screens, different input modes, etc.
-   older people with changing abilities due to ageing
-   people with "temporary disabilities" such as a broken arm or lost glasses
-   people with "situational limitations" such as in bright sunlight or in an environment where they cannot listen to audio
-   people using a slow Internet connection, or who have limited or expensive bandwidth

For a 7-minute video with examples of how accessibility is essential for people with disabilities and useful for everyone in a variety of situations, see:<br>
{% include video-link.html title="Web Accessibility Perspectives Video <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on What is Accessibility" class="simple aside" %}
{:/}

-   When you want to learn more about how different disabilities affect Web use, and read about scenarios of people with disabilities using the Web, see [[How People with Disabilities Use the Web]](/people-use-web/).
-   If you want more examples of benefits for others, see the multimedia resource [Used by People With and Without Disabilities](/media/av/users-orgs/#situations), the archived resource [Web Accessibility Benefits People With and Without Disabilities](https://www.w3.org/WAI/business-case/archive/soc#groups) and the archived mobile resource [[Shared Web Experiences: Barriers Common to Mobile Device Users and People with Disabilities]](/standards-guidelines/shared-experiences/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Accessibility is Important for Individuals, Businesses, Society {#important}

The Web is an increasingly important resource in many aspects of life: education, employment, government, commerce, health care, recreation, and more. It is essential that the Web be accessible in order to provide equal access and equal opportunity to people with diverse abilities. Access to information and communications technologies, including the Web, is defined as a basic human right in the United Nations Convention on the Rights of Persons with Disabilities (UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html)).

The Web offers the possibility of unprecedented access to information and interaction for many people with disabilities. That is, the accessibility barriers to print, audio, and visual media can be much more easily overcome through web technologies.

Accessibility supports social inclusion for people with disabilities as well as others, such as:

-   older people
-   people in rural areas
-   people in developing countries

**There is also a strong business case for accessibility.** As shown in the previous section, accessible design improves overall user experience and satisfaction, especially in a variety of situations, across different devices, and for older users. Accessibility can enhance your brand, drive innovation, and extend your market reach.

Web accessibility is **required by law** in many situations.

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Accessibility is Important" class="simple aside" %}
{:/}

-   General information on business benefits is in [[The Business Case for Digital Accessibility]](/business-case/).
    -   Examples of the benefits of [making audio and video media accessible](/media/av/) is in the section [Benefits to Organizations](/media/av/users-orgs/#benefits).
-   Guidance on figuring out legal requirements is in the archived [Legal and Policy Factors](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Making the Web Accessible {#making}

Web accessibility depends on several components working together, including web technologies, web browsers and other \"user agents\", authoring tools, and websites.

The W3C Web Accessibility Initiative ([WAI](/about/participating/)) develops technical specifications, guidelines, techniques, and supporting resources that describe accessibility solutions. These are considered international standards for web accessibility; for example, <abbr title="Web Content Accessibility Guidelines (WCAG)">WCAG</abbr> 2.0 is also an <abbr title="International Organization for Standardization">ISO</abbr> standard: ISO/<abbr title="International Electrotechnical Commission">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Making the Web Accessible" class="simple aside" %}
{:/}

-   More about these aspects of accessibility working together is in [[Essential Components of Web Accessibility]](/fundamentals/components/).
-   Web Content Accessibility Guidelines (WCAG), Authoring Tool Accessibility Guidelines (ATAG), ARIA for Accessible Rich Internet Applications, and other important resources are introduced in [[W3C Accessibility Standards Overview]](/standards-guidelines/).
-   To learn more about how W3C WAI develops material through multi-stakeholder, international participation and how you can contribute, see [[About WAI]](/about/) and [[Participating in WAI]](/about/participating/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Making Your Website Accessible {#website}

Many aspects of accessibility are fairly easy to understand and implement. Some accessibility solutions are more complex and take more knowledge to implement.

It is most efficient and effective to incorporate accessibility from the very beginning of projects, so you don't need go back and to re-do work.

{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Making Your Website Accessible" class="simple aside" %}
{:/}

-   For an introduction to accessibility requirements and international standards, see [[Accessibility Principles]](/fundamentals/accessibility-principles/).
-   To understand some common accessibility barriers from the perspective of testing, see [[Easy Checks - A First Review]](/test-evaluate/preliminary/).
-   For some basic considerations on designing, writing, and developing for accessibility, see [[Tips for Getting Started]](/tips/).
-   When you're ready to know more about developing and designing, you'll probably use resources such as:
    -   [How to Meet WCAG (Quick Reference)](https://www.w3.org/WAI/WCAG22/quickref/)
    -   [Web Accessibility Tutorials](/tutorials/)
-   For project management and organizational considerations, see [[Planning and Managing Web Accessibility]](/planning-and-managing/).<br>
    If you need to make quick fixes now, see [[Approaches for Interim Repairs]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## Evaluating Accessibility {#evaluate}

When developing or redesigning a website, evaluate accessibility early and throughout the development process to identify accessibility problems early, when it is easier to address them. Simple steps, such as changing settings in a browser, can help you evaluate some aspects of accessibility. Comprehensive evaluation to determine if a website meets all accessibility guidelines takes more effort.

There are evaluation tools that help with evaluation. However, no tool alone can determine if a site meets accessibility guidelines. Knowledgeable human evaluation is required to determine if a site is accessible.


{::nomarkdown}
{% include box.html type="start" h="3" title="More Info on Evaluating Accessibility" class="simple aside" %}
{:/}

-   Resources to help with accessibility evaluation are described in [[Evaluating Websites for Accessibility]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Examples

{% include excol.html type="middle" %}

### Alternative Text for Images

![image of logo; HTML markup img alt='Web Accessibility Initiative logo'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Images should include *[equivalent alternative text](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (alt text) in the markup/code.

If alt text isn't provided for images, the image information is inaccessible, for example, to people who cannot see and use a screen reader that reads aloud the information on a page, including the alt text for the visual image.

When equivalent alt text is provided, the information is available to people who are blind, as well as to people who turn off images (for example, in areas with expensive or low bandwidth). It's also available to technologies that cannot see images, such as search engines.

### Keyboard Input

![mouse crossed out](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Some people cannot use a mouse, including many older users with limited fine motor control. An accessible website does not rely on the mouse; it makes [all functionality available from a keyboard](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible). Then people with disabilities can use [assistive technologies](/planning/involving-users/#at) that mimic the keyboard, such as speech input.

### Transcripts for Audio

[![example transcript](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Just as images aren't available to people who can't see, audio files aren't available to people who can't hear. Providing a text transcript makes the audio information accessible to people who are deaf or hard of hearing, as well as to search engines and other technologies that can't hear.

It's easy and relatively inexpensive for websites to provide transcripts. There are also [transcription services](http://www.uiaccess.com/transcripts/transcript_services.html) that create text transcripts in HTML format.

{::nomarkdown}
{% include box.html type="start" h="3" title="More Examples" class="simple aside" %}
{:/} 

-   [[Tips for Getting Started]](/tips/)
-   [[Easy Checks - A First Review]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Web Accessibility Perspectives &mdash; videos and descriptions" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## For More Information {#more-info}

W3C WAI provides a wide range of resources on different aspects of web accessibility [standards](/standards-guidelines/), [education](/teach-advocate/), [testing/evaluation](/test-evaluate/), [project management, and policy](/planning/). We encourage you to explore this website, or look through the [WAI Resources](/resources/) list.

**[[Digital Accessibility Foundations - Free Online Course]](/courses/foundations-course/)** provides the foundation you need to make your digital technology accessible.
