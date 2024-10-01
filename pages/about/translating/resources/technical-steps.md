---
title: "How to Translate a WAI Resource"
nav_title: New translation
lang: en
last_updated: 2024-05-27
description: Help make the Web accessible to people with disabilities around the world. We appreciate your contributions to translating W3C WAI accessibility resources.

permalink: /about/translating/resources/technical-steps/
ref: /about/translating/resources/technical-steps/
redirect_from:
  - /about/translating/guides/translation-guidance/
  - /about/translating/guides/new-translation/

github:
  label: wai-translation-guidance

image: /content-images/about/social-translations.png
feedbackmail: wai@w3.org

footer: |
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> and Rémi Bétin.</p>
  <p>Developed as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page guides you through the technical steps to translate Web Accessibility Initiative (WAI) resources, and provides other important guidance.

For instructions on translating the Web Content Accessibility Guidelines (WCAG), see [[How to Translate WCAG 2]](/about/translating/wcag/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}
{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Overview

There are 4 main technical steps to create a new WAI resource translation:

1. **[Create a new file](#create-file)**

2. **[Update the "front matter" metadata](#frontmatter)**

3. **[Translate the main content](#main-content)**

4. **[Commit your changes and open a Pull Request](#commit-changes)**

## General guidance

- **Do not change or adapt or add to the meaning of the English version** in your translation.\
If you have suggestions for changes to the English version, submit them via GitHub or e-mail using the links in the “Help improve this page” box near the bottom of the page.
- **Before starting, find the relevant ["language tag"](https://www.w3.org/International/questions/qa-choosing-language-tags)** from the [Language Subtag Registry {% include_cached external.html %}](https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry). You will use it many times during the translation.
- The markdown files are very sensitive to indentation, commas, quotes, and special characters. **We recommend that you use a markdown editor or a simple text editor** (including GitHub interface) — and not a document editor like Microsoft Word that often changes quotes and indentation.
- **Some resources have specific instructions.** Please take a look at [[Resource-Specific Translation Instructions]](/about/translating/resources/resource-specific-instructions/) to see if this applies to your targeted resource, and follow these additional instructions if it does.
- If you wish to translate the [WCAG-EM Report Tool](https://www.w3.org/WAI/eval/report-tool/), please read [this specific guidance {% include_cached external.html %}](https://github.com/w3c/wai-wcag-em-report-tool/wiki/How-to-add-a-language), as different steps have to be followed.

## Initial step: Declare your intent

In accordance with the WAI Translations process, please always [declare your intent](/about/translating/resources/#intent) and wait for reply from WAI team _before_ starting a translation.

## Step 1: Create a new file {#create-file}

Duplicate the file used by the original version, with the language shortcode added to the middle of the filename, as follows:

{::nomarkdown}
{% include box.html type="start" title="Example" %}
{:/}

- Original English file: `index.md`
- New Korean file: `index.ko.md`

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Step 2: Update the "front matter" metadata {#frontmatter}

{::nomarkdown}
{% include box.html type="start" class="highlighted" %}
{:/}

From now on, only edit the newly created translation file.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

At the top of WAI website files are some metadata, also known as "front matter".

Your first step into the file is to update this section.

{::nomarkdown}
{% include box.html type="start" title="Example of front matter (this may differ on your file)" %}
{:/}
```yaml
---
title: Evaluation Tools Overview
lang: en
last_updated: 2020-04-28

github:
  repository: w3c/wai-eval-tools-overview
  path: "content/index.md"

permalink: /test-evaluate/tools/
ref: /test-evaluate/tools/

footer: >
   <p><strong>Date:</strong> Updated 28 April 2020.</p>
   <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
   <p>Video developed by the Education and Outreach Working Group (<a href="http://www.w3.org/WAI/EO/">EOWG</a>) with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> project funded by the European Commission (EC) under the Horizon 2020 program (Grant Agreement 822245). <a href="./acknowledgements/">Acknowledgements</a>.</p>
---
```
{::nomarkdown}
{% include box.html type="end" %}
{:/}

### 2.1. Update the following front matter values:

`lang`
- Replace the original value (`en`) with the language shortcode of your translation.  

`last_updated`
- Change `last_updated: 2000-00-00` to the date you finish the translation.  
  Use the format: YYYY-MM-DD (with month in the middle).

`path` (below `github`)
- Add the language shortcode at the middle of the filename.

`permalink`
- Add the language shortcode at the end of the permalink, with no `/` at the end.

`footer` (not always present)
- If this attribute is present, translate its content.
- Do not change the dates in this section. Those dates should be the same in your translation as in the English version.

### 2.2. Add translators & contributors names.

After `last_updated`, add these lines, depending on how many translators there are and if there are contributors.  

Policy for names and links is introduced in [Translating WAI Resources]({{ "/about/translating" | relative_url }}#links).

{::nomarkdown}
{% include box.html type="start" %}
{:/}
```yaml
translators:
  - name: "Your Name"
contributors:
  - name: "Other Name"
  - name: "Other Name"
```
{::nomarkdown}
{% include box.html type="end" %}
{:/}

Or, if the lines are there with "`#`" before them to comment them out: delete the # and the space.

{::nomarkdown}
{% include box.html type="start" title="Updated front matter for a translation into French" %}
{:/}
{% include excol.html type="start" id="optional-id" %}

Show example

{% include excol.html type="middle" %}

```yaml
---
title: Evaluation Tools Overview
lang: fr
last_updated: 2023-09-13

translators:
  - name: "Your Name"
contributors:
  - name: "Other Name"
  - name: "Other Name"

github:
  repository: w3c/wai-eval-tools-overview
  path: "content/index.fr.md"

permalink: /test-evaluate/tools/fr
ref: /test-evaluate/tools/

footer: >
  <p><strong>Date :</strong> Mise à jour : 28 avril 2020.</p>
  <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Vidéo créée par le groupe de travail Éducation et Promotion (<a href="http://www.w3.org/WAI/EO/">EOWG</a>) avec le soutien du projet <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> financé par la Commission européenne (CE) dans le cadre du programme Horizon 2020 (convention de subvention n°822245) <a href="./acknowledgements/">Remerciements</a>.</p>
---
```

{% include excol.html type="end" %}
{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Follow additional inline instructions

Many resources have inline instructions in the front matter (after the "`#`" character). 

Please follow these instructions. It will help you know what to translate/update and what to not change.

## Step 3: Translate main content {#main-content}

### Markdown/Code

Please leave the code, HTML, and markdown as is without changing it.

Make sure to:

{::nomarkdown}
<ul>
<li>
{:/}

Translate titles in the markdown, such as "Summary" in:

{::nomarkdown}
{% include box.html type="start" %}
{:/}
```liquid
{% raw %}{% include box.html type="start" title="Summary" class="" %}{% endraw %}
```
{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
</li>
<li>
{:/}

Translate image alternative text, such as “mouse crossed out” in:

{::nomarkdown}
{% include box.html type="start" %}
{:/}

- in Markdown: `![mouse crossed out](https://www.w3.org/WAI/intro/no-mouse.png)`
- in HTML: `<img src="https://www.w3.org/WAI/intro/no-mouse.png" alt="mouse crossed out" />`

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
</li>
<li>
{:/}

Make sure that the quote marks stay as is, and are not converted to "smart quotes" by word processing software.

{::nomarkdown}
</li>
</ul>
{:/}

### Links

Most links are formatted with single or double brackets and parentheses; for example:

{::nomarkdown}
{% include box.html type="start" %}
{:/}
```markdown
[Text that is linked]({%raw%}/{%endraw%}path/to/filename/)
[[Title of WAI Page]]({%raw%}/{%endraw%}path/to/filename/)
```
{::nomarkdown}
{% include box.html type="end" %}
{:/}

Make sure to:
- Keep brackets and parentheses together, with no space between the closing `]` and the opening `(`.
- Keep double `[[` or single brackets `[` as they are.
- Translate the text in the links, including document titles.
- Do not manually add `(in English)`, even for external links.

### Links to W3C standards

If an [Authorized Translation of a W3C standard](https://www.w3.org/Translations/authorized.html) has been published in your language, please point to the translated version.

Example:

```
- [Le standard WCAG 2.0](https://www.w3.org/Translations/WCAG20-fr/)
- [Le standard WCAG 2.1](https://www.w3.org/Translations/WCAG21-fr/)
```

If not, translate the link text but keep the link to the English version.

Example:

```
- [Le standard WCAG 2.2](https://www.w3.org/TR/WCAG22//)
```

### Specific wording {#specific-wording}
- Check [other translations in your language](/translations/) to see how similar words and concepts have been translated. In particular, [Authorized Translations](https://www.w3.org/Translations/authorized.html) have had significant review and input.
- Read the [General Translation Glossary {% include_cached external.html %}](https://github.com/w3c/wai-translations/blob/main/glossaries/general.md) and see if there is a [glossary for your language {% include_cached external.html %}](https://github.com/w3c/wai-translations#list-of-glossaries).
- Consider different dialects. Where possible, the translation should use words and phrases that will be best understood across different areas.

### Videos & Images

- If the page has videos, refer to [[How to Create Translated Video Subtitles and Descriptions]](/about/translating/resources/video-subtitles/)
- If the page has images with text, refer to [[How to Translate Images]](/about/translating/resources/images/)

## Step 4: Commit your changes and open a Pull Request {#commit-changes}

Commit your changes and follow instructions in [[Step-by-Step Guide to Translating WAI Resources]](/about/translating/resources/#preview).

## We are here to help

If you have any questions about the translation, please report them in the related GitHub issue so that WAI team and other volunteers can help. Alternatively, send an e-mail to the publicly-archived [public-wai-translations@w3.org](mailto:public-wai-translations@w3.org) mailing-list.

We are happy to help you decide on the best translated wording by sharing the considerations and nuances that went into choosing the wording for the English page.