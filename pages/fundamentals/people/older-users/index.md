---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: "Older Users and Web Accessibility: Meeting the Needs of Ageing Web Users"
title_html: "Older Users and Web Accessibility:<br>Meeting the Needs of Ageing Web Users"
nav_title: "Meeting the Needs of Ageing Web Users"
lang: en  # Change "en" to the translated language shortcode
last_updated: 2024-03-04  # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 1

# translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-older-users

resource:
  ref: /older-users/  # Do not change this

permalink: /older-users/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /older-users/  # Do not change this

changelog: /older-users/changelog/  # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:", "Editors:" and "Contributors".
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Updated 4 March 2024. First published 2010. CHANGELOG</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Contributors: <a href="https://www.w3.org/People/Andrew/" >Andrew Arch</a>, <a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>, and Vicki Menezes Miller.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Related to the  <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> funded by the European Commission under the 6th Framework.</p>  
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

Designing products that are easier for older people to use is similar to designing for people with disabilities.

Guidance on how to make your websites, web applications, and web tools work better for older users is covered in existing international accessibility standards from the <abbr title="World Wide Web Consortium">W3C</abbr>, including Web Content Accessibility Guidelines (WCAG).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}
{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}
-   TOC is created automatically.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Background
{:#background}

Older web users are an increasing market segment and an important target group for many businesses, governments, and other organizations.

The European Commission-funded [WAI-AGE Project](https://www.w3.org/WAI/WAI-AGE/) researched:

-   the needs of older web users,
-   existing guidance for addressing older user needs, and
-   the overlap with web accessibility for people with disabilities.

The results of the research and subsequent work determined that existing international accessibility standards from the [W3C](https://www.w3.org) Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)) address most older user needs.

{::nomarkdown}
{% include box.html type="start" h="3" title="More Background: Literature Review and Article" class="simple aside" %}
{:/}

[Overview of "Web Accessibility for Older Users: A Literature Review"](/older-users/literature/)
: Provides a brief introduction of the scope, audience, and content of the [Literature Review {% include_cached external.html label="Different format" %}](https://www.w3.org/TR/wai-age-literature/).

[Older Users Online - WAI Guidelines Address Older Users’ Web Experience](https://www.w3.org/WAI/posts/2009/older-users-online)<br /><cite>(Originally published in User Experience Magazine, Vol 8, Issue 1, 2009)</cite>
: Explains age-related impairments that impact web use, requirements for web design that enhance the ability of older people to use the web and how existing accessibility guidelines for people with disabilities cover the needs of older users, and future work in this area.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Overlapping Needs: People who are Elderly and People with Disabilities
{:#needs}

Many older people have age-related impairments that can affect how they use the web, such as declining:

-   **vision** — including reduced contrast sensitivity, color perception, and near-focus, making it difficult to read web pages
-   **physical ability** — including reduced dexterity and fine motor control, making it difficult to use a mouse and click small targets
-   **hearing** — including difficulty hearing higher-pitched sounds and separating sounds, making it difficult to hear podcasts and other audio, especially when there is background music
-   **cognitive ability** — including reduced short-term memory, difficulty concentrating, and being easily distracted, making it difficult to follow navigation and complete online tasks

These issues overlap with the accessibility needs of people with disabilities. Thus, websites, applications, and tools that are accessible to people with disabilities are more accessible to older users as well.

{::nomarkdown}
{% include box.html type="start" h="3" title=" More About Older User Needs " class="simple aside" %}
{:/}

-   **For statistics on the prevalence of age-related impairments and more on how they impact web use, see the [Summary of Impact and Prevalence section](/older-users/literature/#summary) of the Literature Review Overview.**
-   For short story (_persona_) showing some accessibility issues that an older person can face on the web, see [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/#retiree) in Stories of Web Users.
-   If you want to learn about older users directly by including real people in your user studies, see [[Involving Users in Web Projects for Better, Easier Accessibility]](/planning/involving-users/).
-   **For videos** and descriptions of issues that impact people who are elderly and people with disabilities, see [Web Accessibility Perspectives](/perspective-videos/). These videos include older users: [Customizable Text](/perspective-videos/customizable/), [Colors with Good Contrast](/perspective-videos/contrast/), [Notifications and Feedback](/perspective-videos/notifications/), [Understandable Content](/perspective-videos/understandable/), and [Large Links, Buttons, and Controls.](/perspective-videos/controls/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Guidelines and Other Standards
{:#standards}

The World Wide Web Consortium ([W3C](https://www.w3.org/Consortium/)) is an international consortium that develops web standards. W3C's Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)) focuses on making the web accessible to people with disabilities. Standards that are particularly relevant for older users include:

[Web Content Accessibility Guidelines (WCAG)](/standards-guidelines/wcag/)
: WCAG materials include guidelines and techniques for making websites and web applications work better for people with disabilities, as well as for older users with accessibility needs due to ageing.

[User Agent Accessibility Guidelines (UAAG)](/standards-guidelines/uaag/)
: UAAG explains how to make web browsers and media players accessible. Browser features are particularly important to older users who have accessibility needs that should be met through browsers instead of requiring additional [assistive technologies](/planning/involving-users/#at).

[Authoring Tool Accessibility Guidelines (ATAG)](/standards-guidelines/atag/)
: Authoring tools are used to create web content. Examples of authoring tools are HTML editors and content management systems (CMS). Websites that let users add content &mdash; such as blogs, wikis, photo sharing sites, online forums, and social networking sites &mdash; are also authoring tools. These need to be accessible so that older people can use them.

{::nomarkdown}
{% include box.html type="start" h="3" title="More About Standards" class="simple aside" %}
{:/}

-   For an introduction to accessibility guidelines and other standards, see [[W3C Accessibility Standards Overview]](/standards-guidelines/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Specific Guidance on Designing for Older Users
{:#wcag-details}

**A key resource for designers, developers, managers, researchers, and others is [Developing Websites for Older People: How Web Content Accessibility Guidelines (WCAG) 2.0 Applies](/older-users/developing/).** It:

-   Introduces how to use WCAG 2.0 to improve the accessibility and usability of websites and web applications for older people.
-   Is organized by user needs and WCAG principles.
-   Lists specific WCAG success criteria and techniques that apply to improving the user experience of older people.
-   Includes references to the Literature Review.

## Advocating and Educating
{:#promote }

The following resources can help promote accessibility for older users.

<!-- @@ add back when updated
["Web Accessibility for Older Users" Presentation](https://www.w3.org/WAI/presentations/ageing/)  
: Presents the changing worldwide demographics, the prevalence and impact of age-related limitations and older people's use of the web, some requirements of older users, and the role of WAI accessibility guidelines in meeting these requirements.
-->

[The Business Case for Digital Accessibility](/business-case/)
: Includes some statistics and ideas related to older users.\
(The separate old archived version includes the following sections that specifically apply to older users: [Overlap with Older Users' Needs](/WAI/business-case/archive/soc.php#older) and [Access for Older People](/WAI/business-case/archive/soc.php#of).)

[Better Web Browsing: Tips for Customizing Your Computer](https://www.w3.org/WAI/users/browsing)
: Provides guidance for users on how to set your computer to work better for your specific needs and preferences so it's easier to use websites; for example, enlarging text, making the mouse pointer bigger, and using the keyboard instead of the mouse to browse websites.\
_**Note:** This resource has not been updated recently. Some details are out of date, yet the general concepts still apply._