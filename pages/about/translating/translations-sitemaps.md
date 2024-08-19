---
title: "Translations Sitemaps"
nav_title: Translations Sitemaps
lang: en
last_updated: 2024-08-13
description: Help make the Web accessible to people with disabilities around the world. We appreciate your contributions to translating W3C WAI accessibility resources.

permalink: /about/translating/sitemaps/
ref: /about/translating/sitemaps/

github:
  label: wai-translation-guidance

image: /content-images/about/social-translations.png
feedbackmail: group-wai-translations@w3.org

footer: |
  <p><strong>Date:</strong> Updated 13 August 2024.</p>
  <p><strong>Editors:</strong> Rémi Bétin and <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Developed as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Summary" class="" %}
{:/}

Translations sitemaps help you easily find a WAI resource to translate in your language.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}
{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Overview

**A translation sitemap allows volunteer translators to [browse the list of WAI resources](#browse) for which translations are welcome, and [volunteer to translate it](#volunteer).**

We currently have [{{ site.translations-sitemaps.size }} translations sitemaps](#list).

_If you are a new volunteer_, please [send us an e-mail to express your interest](/about/translating/resources/#intent) first.

## List of Translations Sitemaps {#list}

_Languages are listed alphabetically by their English names._

{::nomarkdown}
<ul>
  {% for sitemap in site.translations-sitemaps %}
    {% assign langname=site.data.lang[sitemap.tlang].name %}
    {% assign langnativename=site.data.lang[sitemap.tlang].nativeName %}
    <li><a href="{{ sitemap.permalink | relative_url }}"><span lang="sitemap.tlang" style="text-transform: capitalize;">{{ langnativename }}</span> ({{ langname }})</a></li>
  {% endfor %}
</ul>
{:/}

{::nomarkdown}
{% include box.html type="start" title="Note" class="simple" %}
{:/}

Translations sitemaps are generated for languages with an active volunteer community.\
If you are an active volunteer and wish to use this feature, feel free to contact us at [group-wai-translations@w3.org](mailto:group-wai-translations@w3.org).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## How to use a translation sitemap {#how-to-use}

### Browse the list {#browse}

- _Priorities_ section only lists [priority resources](/about/translating/resources/#priorities) identified by the WAI team.
- _Sitemap_ section lists all WAI resources for which translations are welcome, grouped by top-level pages.

{::nomarkdown}
{% include box.html type="start" title="Note" class="simple" %}
{:/}

Some WAI Resources are not listed in Translations Sitemaps. That may be because a resource will be updated soon, is not intented for translation, or is far from ready to be translated. The list is regularly updated.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

For each resource listed, you can see:
- The name and URL of the resource (in English), in the "WAI Resource" column: ;
- The status of the translation, in the "Translation Status" column:
  - <p>{% include_cached icon.html name="check-circle" %} Up-to-date. A URL points to the translation.</p>
  - <p>{%- include_cached icon.html name="warning" -%} Translation needs update. We welcome a volunteer translation update.</p>
  - <p>{% include_cached icon.html name="ex-circle" %} No translation. We welcome a volunteer translation.</p>

### Volunteer to translate a page or to update a translation {#volunteer}

If a resource has not been translated in this language, or if a translation needs update, a link is displayed in the "Translation status" column. For example, "Volunteer to translate this page".

Clicking on this link allows you to declare your intent, by pre-filling a GitHub issue in the [wai-translations repository {% include_cached external.html %}](https://github.com/w3c/wai-translations/).

**After submitting your intent, please always wait for a reply from WAI team**. We will check that the file is not currently being translated by someone else, and that it is not about to be updated.