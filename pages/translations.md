---
title: "All WAI Translations"
lang: en
description: Translations of current accessibility standards and other resources from the W3C Web Accessibility Initiative (WAI).
teaser_text: Web accessibility resources in multiple languages. Translations of W3C Web Accessibility Initiative (WAI) resources covering strategies, standards, and support to make the Web accessible to people with disabilities.

permalink: /translations/
ref: /translations/
parent: /

sidebaricon: translations
image: /content-images/social-translations.png
feedbackmail: wai@w3.org
footer: |
  <p>Translations managers: <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a> and Rémi Bétin. Programmers: Eric Eggert and Rémi Bétin.</p>
  <p>Translations management is part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access</a> and <a href="https://www.w3.org/WAI/about/projects/wai-core-ford/">WAI-Core Ford</a> projects, funded by the Ford Foundation; and the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-Coop</a> project, co-funded by the European Commission.</p>

inline_css: |
  dl.translations > div {
    margin-block-end: 1em;
  }
  dl.translations .resource div {
    margin-inline-start: 32px;
  }
  .translation-level {
    background-color: rgba(206, 205, 205, 0.5);
    border-radius: 0.25rem;
    display: inline-block;
    margin-top: 0.3125rem;
    padding: 0.15625rem 0.3125rem;
    font-size: 0.9rem;
  }
  .translation-level--authorized {
    background-color: var(--w3c-classic);
    color: #fff;
  }
  .translation-level--unofficial {
    background-color: var(--cloudy-subtle);
    color: #000;
  }

subtitles_only:
  - video_id: video-introduction
    langs:
      - fa
      - gu
      - hi
      - hu
      - it
      - kok
      - ml
      - mr
      - pl
      - te
      - tr

other_resources:
  - lang: "fr"
    docs:
      - title: "Outil de rapport WCAG-EM"
        en_title: "WCAG-EM Report Tool"
        url: https://www.w3.org/WAI/eval/report-tool/
        translators:
          - name: "Alexandre Massot"
            org: "République et canton de Genève"
          - name: "Mark Thiebaut"
            org: "Iron Cloud"
          - name: "Yves Dubois-Pèlerin"
            org: "République et canton de Genève"
          - name: "Eric Porlier"
        contributors:
          - name: "Julien Conti"
            org: "République et canton de Genève"
          - name: "Dimitri Zaslavsky"
            org: "République et canton de Genève"
          - name: "Audrey Maniez"
            org: "Access 42"
          - name: "Rémi Bétin"
  - lang: "nl"
    docs:
      - en_title: "WCAG-EM Report Tool"
        url: https://www.w3.org/WAI/eval/report-tool/
        translators:
          - name: "Roel Antonisse"
            org: "accessibility.nl"
          - name: "Michel Hansma"
            org: "HAN University"
          - name: "Hidde de Vries"
            org: "W3C WAI"
  - lang: "pl"
    docs:
      - title: "Generator raportów WCAG-EM"
        en_title: "WCAG-EM Report Tool"
        url: https://www.w3.org/WAI/eval/report-tool/
        translators:
          - name: "Stefan Wajda"
        contributors:
          - name: "Wojtek Kutyla"
            org: "Human Thing Ltd"
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page lists translations of current accessibility standards and other resources from the Web Accessibility Initiative ([WAI](https://www.w3.org/WAI/)).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

**WAI thanks translators. We welcome other translations**. If you might be interesting in translating resources, see [[Translating WAI Resources]](/about/translating/).

_Languages are listed alphabetically by language code. For example, "Chinese" is sorted by "zh", thus it is near the bottom of this page._

{::nomarkdown}
{% include toc.html type="start" title="Page Contents" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

{% include excol.html type="all" %}

{% assign lang1=site.documents | where_exp:"item", "item.lang != 'en'" | where_exp:"item", "item.lang !=  nil" | map: "lang" %}
{% assign lang2=site.pages | where_exp:"item", "item.lang != 'en'" | where_exp:"item", "item.lang !=  nil" | map: "lang" %}
{% assign lang3 = site.data.standards-translations | where_exp: "item", "item.type == 'authorized' or item.type == 'unofficial'" | map: "lang" %}

{% assign video-translations=page.subtitles_only | map: "langs" %}
{%- for video in video-translations -%}
{%- for video-lang in video -%}
{%- if forloop.first and forloop.parentloop.first -%}{% assign lang4 = video-lang %}{% else %}{% assign lang4 = lang4 | append: "," | append: video-lang %}{% endif -%}
{%- endfor -%}
{%- endfor -%}
{% assign lang4 = lang4 | split: ',' %}

{% for lang-others in page.other_resources %}
{%- if forloop.first %}{% assign lang5 = lang-others.lang %}{%else%}{% assign lang5 = lang5 | append: "," | append: lang-others.lang %}{% endif -%}
{% endfor %}
{% assign lang5 = lang5 | split: "," %}

{% assign langs = lang5 | concat: lang4 | concat: lang3 | concat: lang2 | concat: lang1 | uniq | sort %}

{%- for l in langs -%}
{% if l %}

{% include excol.html type="start" id=l %}

## <span lang="{{l}}" bidi="auto" style="text-transform: capitalize;">{{ site.data.lang[l].nativeName }}</span> ({{ site.data.lang[l].name }})

{::nomarkdown}
{% if site.data.lang[l].rtl -%}{%- include excol.html type="middle" dir="rtl" lang=l -%}{%- else -%}{%- include excol.html type="middle" -%}{%- endif %}

{%- assign p1=site.documents | where: "lang", l -%}
{%- assign p2=site.pages | where: "lang", l -%}
{%- assign resource_pages = p1 | concat: p2 | sort: "title" -%}
{%- assign resources = resource_pages | group_by_exp: 'item', 'item.resource.ref' -%}
{%- for pages in resources -%}
  {% if forloop.first %}
    <h3>{% include_cached t.html t='Resources' lang=l hideTranslationHints=true %}</h3>
    <dl lang="{{l}}" class="translations">
  {%- endif -%}
  {%- if pages.name -%}
      <div class="resource">
        <h4>{% include_cached resource-title.html to=pages.name lang=l %}</h4>
  {% endif %}
  {% for p in pages.items %}
        <div>
          <dt><a href="{{ p.url | relative_url }}">{{ p.title }}</a></dt>
          <dd>
            {%- capture translatorslabel %}{% include_cached t.html t='Translator:' lang=l %}{%- endcapture %}
            {% include_cached peoplelist.html label=translatorslabel people=p.translators %}
            {%- capture contributorslabel %}{% include_cached t.html t='Contributor:' lang=l%}{%- endcapture %}
            {% include_cached peoplelist.html label=contributorslabel people=p.contributors %}
          </dd>
          <dd lang="en">
            {%- assign o1=site.documents | where: "ref", p.ref | where: "lang", "en" -%}
            {%- assign o2=site.pages | where: "ref", p.ref | where: "lang", "en" -%}
            {%- assign original = o1 | concat: o2 | sort: "title" -%}
            English title: <i>{{original.first.title}}</i>
          </dd>
        </div>
  {% endfor %}
  {% if pages.name %}
      </div>
  {% endif %}
  {%- if forloop.last -%}
    </dl>
  {%- endif -%}
{% endfor %}

{% assign other_resources = page.other_resources | where: "lang", l %}
{%- for resource in other_resources.first.docs -%}
  {%- if forloop.first -%}
    <dl lang="{{l}}" class="translations">
  {%- endif -%}
      <div>
        <dt><a href="{{ resource.url }}"{% if resource.title %}>{{ resource.title }}{% else %} lang="en">{{ resource.en_title }}{% endif %}{% if resource.type == "external" %} {% include_cached external.html lang=l %}{% endif %}</a></dt>
        {%- if resource.translators -%}
        <dd>
          {% include_cached peoplelist.html label=translatorslabel people=resource.translators %}
          {% include_cached peoplelist.html label=contributorslabel people=resource.contributors %}
        </dd>
        {%- endif -%}
        <dd lang="en">
          English title: <i>{{resource.en_title}}</i>
        </dd>
      </div>
  {%- if forloop.last -%}
    </dl>
  {%- endif -%}
{%- endfor -%}

{% assign stds = site.data.standards-translations | where_exp: "item", "item.lang == l and item.type == 'authorized' or item.type == 'unofficial'" %}
{% for std in stds %}
  {% assign std_data = site.data.standards | where_exp: "item", "item.standard == std.standard and item.standard_version == std.standard_version" | first %}
  {%- if forloop.first -%}
    <h3>{% include_cached t.html t='Standards/Guidelines' lang=l hideTranslationHints=true %}</h3>
    <dl lang="{{l}}" class="translations">
  {%- endif -%}
      <div>
        <dt><a href="{{std.url}}"{%if std.title %}>{{ std.title }}{% else %} lang="en">{{std_data.title}}{%endif%}{% if std.type == "external" %} {% include_cached external.html lang=l %}{% endif %}</a></dt>
        {% case std.type %}
          {% when "authorized" %}
            <dd><span class="translation-level translation-level--authorized" lang="en">{% include_cached t.html t='Authorized Translation' lang=l hideTranslationHints=true %}</span></dd>
          {% when "unofficial" %}
            <dd><span class="translation-level translation-level--unofficial" lang="en">{% include_cached t.html t='Unofficial Translation' lang=l hideTranslationHints=true %}</span></dd>
        {% endcase %}
        {%- if std.translator -%}
        <dd>{% include_cached t.html t='Translator:' lang=l hideTranslationHints=true %} {{std.translator}}</dd>
        {%- endif -%}
        <dd lang="en">English title: <i>{{std_data.title}}</i></dd>
      </div>
  {%- if forloop.last -%}
    </dl>
  {%- endif -%}
{% endfor %}

{% assign videos = page.subtitles_only | where_exp: "item", "item.langs contains l" %}
{% for video in videos %}
  {%- assign video-data=site.data.video-metadata | where: "id", video.video_id | first -%}
  {%- assign alldocs=site.documents | concat: site.pages -%}
  {%- if forloop.first -%}
    <h3>{% include_cached t.html t='Video Subtitles' lang=l hideTranslationHints=true %}</h3>
    <dl lang="{{l}}" class="translations">
  {%- endif -%}
      <div>
        <dt>
        <a href="{{ video-data.main-page | relative_url }}">
        {% if video-data.name[l] %}{{ video-data.name[l]}}{% else %}<span lang="en">{{ video-data.name.en }}</span>{% endif %}
        </a>
        </dt>
        <dd lang="en">{% if video-data.name[l] %}English title: <i>{{ video-data.name.en }}</i>{% endif %}</dd>
      </div>
  {%- if forloop.last -%}
    </dl>
  {%- endif -%}
{% endfor %}

{% include excol.html type="end" %}
{:/}

{% endif %}
{% endfor %}


## Other WAI Translations Listings

_The lists below are for specific standards; the lists above include all published WAI translations. The completed translations in the lists below are included under the languages above._

* [WCAG 2 Translations](/standards-guidelines/wcag/translations/) lists in-progress and completed translations of Web Content Accessibility Guidelines (WCAG) 2.2, 2.1, and 2.0, including Authorized W3C Translations and unofficial translations.
* [Authorized Translations of W3C Recommendations](https://www.w3.org/Translations/authorized.html) lists completed Authorized W3C Translations of WCAG 2.2, WCAG 2.1, WCAG 2.0, Authoring Tool Accessibility Guidelines (ATAG) 2.0, and others.
