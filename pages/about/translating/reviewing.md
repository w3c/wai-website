---
title: "Reviewing a WAI Translation"
nav_title: Reviewing a Translation
lang: en
last_updated: 2024-11-21
description: Help make the Web accessible to people with disabilities around the world. We appreciate your contributions to translating W3C WAI accessibility resources.

# Do not delete the following translators/contributors lines: they are used to display an example in the page.
translators:
  - name: Translator 1
  - name: Translator 2
contributors:
  - name: Contributor 1
  - name: Contributor 2

permalink: /about/translating/reviewing/
ref: /about/translating/review/
redirect_from:
  - /about/translating/guides/review-translation/

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

This page explains how you can participate in reviewing translations of Web Accessibility Initiative (WAI) resources.

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

The W3C Web Accessibility Initiative (WAI) welcomes contributions to review volunteer translations before they are published on the WAI website.

There are 3 steps to contribute as a reviewer:

1. **[Find a translation](#find)** that is ready for review

2. **[Declare your intent](#volunteer)** to review the translation by a date.

3. **[Review the translation](#review)** and work together with the translator(s) and other reviewer(s).

## Step 1: How to find a translation ready for review? {#find}

You can find translations to review in the [“Review needed” view of the dedicated GitHub project {% include_cached external.html %}](https://github.com/orgs/w3c/projects/46/views/9).

If you have trouble using this tool, you can contact us at [group-wai-translations@w3.org](mailto:group-wai-translations@w3.org)[^1].

## Step 2: How to volunteer? {#volunteer}

### New volunteer:

Please send an email to [group-wai-translations@w3.org](mailto:group-wai-translations@w3.org)[^1], expressing your interest in joining the WAI translator volunteers community. We will guide you through the next steps.

### Regular volunteer:

Indicate that you are volunteering to review the translation in the related GitHub issue.

**Please always indicate the date by which you plan to review the translation.** This way, we can ask other volunteers if you are unable to complete the review by this date.

## Step 3: How to review a translation? {#review}

Review discussions take place directly in the Pull Request(s) opened by the translator. These are listed in the GitHub issue related to the translation.

We encourage you to respectfully share your comments, suggested changes, spotted issues; and to work together with the translator(s) and other reviewer(s) to improve the translation.

The most important things for review are:
- the translation **accurately conveys the meaning from the English version** in the translated language. You must not change or adapt or add to the meaning of the English version in the translation.
- the translation **uses respectful disability terminology** in the target language and region.

For that, you need to read the English version and compare it to the translation. Often, it is best to have them open in side-by-side windows. A preview is included in most Pull Requests, to see the rendered page.

{::nomarkdown}
{% include box.html type="start" title="Helpful tip" %}
{:/}

A technique for proof-reading is to listen to the translation being read aloud, for example with a screen reader or text-to-speech in the operating system.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Specific wording {#specific-wording}
- Check [other translations in your language](/translations) to see how similar words and concepts have been translated. In particular, [Authorized Translations](https://www.w3.org/Translations/authorized.html) have had significant review and input.
- Consider different dialects. Where possible, the translation should use words and phrases that will be best understood across different areas.
- The translator and reviewer(s) might want to work together to consider different options for some wording.
- When you decide on translation of unclear words and phrases that will likely be in other resources, feel free to add them to the [Glossary for your language {% include_cached external.html %}](https://github.com/w3c/wai-translations/tree/main/glossaries/).

{::nomarkdown}
{% include box.html type="start" title="We are here to help" %}
{:/}

If you have any questions for us about the wording, you can report them in the GitHub issue or send email to [group-wai-translations@w3.org](mailto:group-wai-translations@w3.org)[^1].

We are happy to help you decide on the best translated wording by sharing the considerations and nuances that went into choosing the wording for the English page.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Things to check {#initial-things-to-check}

#### For all translations

1. There is no code showing in the rendered page.
2. All of the text that should be translated, is actually translated.
3. The links work.
4. In the raw file, all alternative texts and other not-visible content are translated.

#### For most resources on WAI website

{::nomarkdown}
<ol>
  <li>
{:/}

The language codes in the [frontmatter](/about/translating/resources/technical-steps/#frontmatter) are correct.

{::nomarkdown}
  </li>
  <li>
{:/}

The information in the "About this translation" box is correct.

{::nomarkdown}
{% include box.html type="start" title='There should be 3 lines, for example:' %}
{:/}
<section class="doc-note-box doc-note-translation">
    <h2 class="visuallyhidden">{% include_cached t.html t="About this translation" lang=page.lang %}</h2>
    <p>
      {%- assign replace_pattern = page.url | relative_url | prepend: "$1|" -%}
      {%- include t.html t='This volunteer translation might not accurately reflect the intentions of the <a href="$1">English original</a>.' replace=replace_pattern lang=page.lang -%}
    </p>
    <p>
      {%- capture translatorslabel %}<strong>{% include_cached t.html t='Translator:' lang=page.lang %}</strong>{%- endcapture %}
      {%- include peoplelist.html label=translatorslabel people=page.translators -%}
      {%- capture contributorslabel %}{% include_cached t.html t='Contributor:' lang=page.lang %}{%- endcapture -%}
      {%- include peoplelist.html label=contributorslabel people=page.contributors -%}
      <br />
      {%- assign replace_pattern = "/about/translating/" | relative_url | prepend: "$1|" -%}
      {%- include_cached t.html t='The Web Accessibility Initiative (WAI) thanks translators, and welcomes other <a href="$1">translations</a>.' replace=replace_pattern lang=page.lang -%}
    </p>
</section>
 {::nomarkdown}
 {% include box.html type="end" %}
 {:/}

If some translator or contributor names are missing, it is because they are still commented out.\
In the code, delete the hashmark and space (`# `) from the beggining of the lines.

{::nomarkdown}
  </li>
  <li>
{:/}

In the footer, the dates are the same in the English version and the translated version.

{::nomarkdown}
  </li>
  <li>
{:/}

For any videos on the page, the `[CC]` icon of the video player defaults to the translated language.\
See for example [_Keyboard Compatibility_ video in French](https://www.w3.org/WAI/perspective-videos/keyboard/fr).

If not, some [video subtitles steps](/about/translating/resources/subtitles/) are probably missing.

{::nomarkdown}
  </li>
</ol>
{:/}

## I do _not_ know the translated language, can I help?

Yes, you can still help with reviews by looking for things like: 
- English text that is not translated (like alt text)
- Link accuracy,
- Formatting issues,
- and other things listed [at the top of this section](#initial-things-to-check).

You can also help find missing content or potential issues with the specific wording.

{::nomarkdown}
{% include box.html type="start" title="Suggestion: Compare three versions side-by-side" %}
{:/}
 
- The English original
- The translation for review
- A machine translation of the translation back into English (of course, this will be very inaccurate, yet sometimes it still works to spot issues)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

[^1]: Emails sent to `group-wai-translations@w3.org` are not publicly visible.