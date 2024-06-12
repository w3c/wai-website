---
# Do not translate Changelog
title: "Changelog for Video Introduction to Web Accessibility and W3C Standards"
title_html: 'Changelog for <a href="https://www.w3.org/WAI/videos/standards-and-benefits/">Video Introduction to Web Accessibility and W3C Standards</a>'
nav_title: "Changelog"
lang: en
class: tight-page

github:
  label: wai-video-introduction

permalink: /videos/standards-and-benefits/changelog/
ref: /videos/standards-and-benefits/changelog/

feedbackmail: wai@w3.org
footer: >
 <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Contributor: Tolu Adegbite.</p>
---

{::nomarkdown}
{% include box.html type="start" title="About" class="" %}
{:/}

This page is designed so translators can copy and paste from this rendered changelog page.

<!-- For others, **particularly significant or substantive changes are summarized after “Significant:”**. -->

{::nomarkdown}
{% include box.html type="end" %}
{:/}
{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{::options toc_levels="2,3" /}
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

**_Translators:_**
* Change `last_updated` to the date of the translation update.
* The other dates after `footer >` should match the English version.
* From the GitHub pull request, after a couple of minutes, you can get a preview of your rendered page by selecting the "Details" link after "netlify/wai-.../deploy-preview — Deploy preview ready!". Then select your language at the top.

## For Translators - VTT files

Here is the latest list of subtitles:

```
subtitles="W3C_INTRO_SFHI.ar.vtt|ar,W3C_INTRO_SFHI.de.vtt|de,W3C_INTRO_SFHI.es.vtt|es,W3C_INTRO_SFHI.fr.vtt|fr,W3C_INTRO_SFHI.gu.vtt|gu,W3C_INTRO_SFHI.hi.vtt|hi,W3C_INTRO_SFHI.kok.vtt|kok,W3C_INTRO_SFHI.ko.vtt|ko,W3C_INTRO_SFHI.ml.vtt|ml,W3C_INTRO_SFHI.mr.vtt|mr,W3C_INTRO_SFHI.nl.vtt|nl,W3C_INTRO_SFHI.pt-BR.vtt|pt-BR,W3C_INTRO_SFHI.te.vtt|te,W3C_INTRO_SFHI.zh.vtt|zh,W3C_INTRO_SFHI.ja.vtt|ja,W3C_INTRO_SFHI.it.vtt|it,W3C_INTRO_SFHI.hu.vtt|hu,W3C_INTRO_SFHI.el.vtt|el,W3C_INTRO_SFHI.ru.vtt|ru,W3C_INTRO_SFHI.cs.vtt|cs,W3C_INTRO_SFHI.id.vtt|id,W3C_INTRO_SFHI.fa.vtt|fa"
```

**To set the video subtitles to default to your language:**
1. Delete ```|default``` from: ``` captions="W3C_INTRO_SFHI.vtt|en|default" ``` so it's:<br><code>captions="W3C_INTRO_SFHI.vtt|en"</code>
2. Add ```|default``` after your language vtt. For example:<br><conde> ,W3C_INTRO_SFHI.ar.vtt|ar|default, </code>

## May 2021 updates

* Added to end of footer text (in the frontmatter near the top):
  ```Video clips developed with support from the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission. Translations managed with support from the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a>, funded by the Ford Foundation.```
  <br>(Put it inside the closing ```</p>``` )
* Added changelog:
  1. Added "changelog: /videos/standards-and-benefits/changelog/" between ref and layout:
   ```
   ref: /videos/standards-and-benefits/   # Do not change this
   changelog: /videos/standards-and-benefits/changelog/
   layout: default
   ```
  2. Added "CHANGELOG." after date:<br>
   ```Updated 4 May 2021. First published 4 December 2017. CHANGELOG.```
  
_Thanks to Tolu Adegbite for work on May 2021 updates!_
