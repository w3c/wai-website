---
# Do not translate Changelog
title: "Changelog for W3C Accessibility Standards Overview"
title_html: "Changelog for <a href='/WAI/standards-guidelines/'>W3C Accessibility Standards Overview</a>"
nav_title: "Changelog"
lang: en
class: tight-page

permalink: /standards-guidelines/changelog/
ref: /standards-guidelines/changelog/

github:
  label: wai-standards-guidelines

feedbackmail: wai@w3.org
footer: >
 <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Contributor: Tolu Adegbite.</p>
---

## April 2021

* In the frontmatter at the top, add `changelog: /standards-guidelines/changelog/` between ref and layout:<br>
`ref: /standards-guidelines/   # Do not change this`<br>
`changelog: /standards-guidelines/changelog/`<br>
`layout: default`<br>
* In the frontmatter, under `footer: >`:
  * Update the date.
  * Add `CHANGELOG.` after the date. _Leave it in all capital letters and do not translate it._<br>
`<p><strong>Date:</strong> Updated 30 April 2021. CHANGELOG.</p>`

## 6 January 2021

**Significant: Added links to [[What's New in WCAG 2.2 Working Draft]](/standards-guidelines/wcag/new-in-22/) and [[WCAG 3 Introduction]](/standards-guidelines/wcag/wcag3-intro/).**

* Add “2” with WCAG:
  * Change "### Web Content Accessibility Guidelines (WCAG) {#wcag}" to:<br>
  `### Web Content Accessibility Guidelines (WCAG) 2 {#wcag2}`
  * Change "WCAG info:" to:<br>
  `WCAG 2 info:`

* Add links under WCAG info:
  * Before `- [WCAG 2.0 Standard](https://www.w3.org/TR/WCAG20/)`add:<br>`- [``[WCAG 2 Translations]``](/standards-guidelines/wcag/translations/)`
  * On the same line with `- [WCAG 2.1 Standard](https://www.w3.org/TR/WCAG21/)` add:<br>`, [``[What’s New in WCAG 2.1]``](/standards-guidelines/wcag/new-in-21/)`
  * Add a new line at the end:<br>`- [``[What's New in WCAG 2.2 Working Draft]``](/standards-guidelines/wcag/new-in-22/)`
  * Check this matches the [published version of the list](https://www.w3.org/WAI/standards-guidelines/#wcag2). Here's the full code block:<br>
`- [WCAG Overview](/standards-guidelines/wcag/)`<br>
`- [``[WCAG 2.1 at a Glance]``](/standards-guidelines/wcag/glance/)`<br>
`- [How to Meet WCAG 2 (Quick Reference)](https://www.w3.org/WAI/WCAG21/quickref/)`<br>
`- [``[WCAG 2 Translations]``](/standards-guidelines/wcag/translations/)`<br>
`- [WCAG 2.0 Standard](https://www.w3.org/TR/WCAG20/)`<br>
`- [WCAG 2.1 Standard](https://www.w3.org/TR/WCAG21/), [``[What’s New in WCAG 2.1]``](/standards-guidelines/wcag/new-in-21/)`<br>
`- [``[What's New in WCAG 2.2 Working Draft]``](/standards-guidelines/wcag/new-in-22/)`<br>

* Before “## Technical Specifications”, add:<br>
`### W3C Accessibility Guidelines (WCAG) 3 Working Draft {#wcag3}`<br>
`WCAG 3 is an early draft that is intended to become a W3C Standard. WCAG 3 applies to web content, apps, tools, publishing, and emerging technologies on the web.`<br><br>
`WCAG 3 info:`<br>
`* [``[WCAG 3 Introduction]``](/standards-guidelines/wcag/wcag3-intro/)`<br><br>
**Note** that WCAG 3 = "W3C Accessibility Guidelines" (whereas WCAG 2 = Web Content Accessibility Guidelines). 

## 11 September 2019 Significant
**Significant: Added links to [[Pronunciation Overview]](/pronunciation/).**

* Before “## Other Areas of W3C WAI work”, add:<br>
`### Pronunciation`<br>
`[``[Pronunciation Overview]``](/pronunciation/) &mdash; Pronunciation is about screen readers and other text-to-speech (TTS) synthesis pronouncing content properly.`

## 17 July 2019
* Under “## Additional Information {#moreinfo}”, in first item, change URI link to `https://www.w3.org/TR/?tag=accessibility`:<br>
`- [List of all W3C accessibility-related Standards ("W3C Recommendations") and Working Group Notes](https://www.w3.org/TR/?tag=accessibility)`
