---
title: "All WAI Translations"

lang: en
last_updated: 2019-06-13
permalink: /translations/

parent: /

github:
  repository: w3c/wai-website
  path: translations.md

feedbackmail: wai@w3.org
footer: |
  <p>Translations management is part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a>, funded by the Ford Foundation.</p>
ref: /translations/

inline_css: |
  dl.translations > div {
    margin-block-end: 1em;
  }

translated_standards:
- lang: "zh-hans"
  docs:
  - title: "Web内容无障碍指南 (WCAG) 2.1"
    en_title: "Web Content Accessibility Guidelines (WCAG) 2.1"
    url: https://www.w3.org/Translations/WCAG21-zh/
    type: authorized
  - title: "Web内容无障碍指南 (WCAG) 2.0"
    en_title: "Web Content Accessibility Guidelines (WCAG) 2.0"
    url: http://www.w3.org/translations/wcag20-zh/
    type: authorized
- lang: "it"
  docs:
  - title: "Web内容无障碍指南 (WCAG) 2.1"
    en_title: "Web Content Accessibility Guidelines (WCAG) 2.1"
    url: https://www.w3.org/Translations/WCAG21-zh/
    type: authorized
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

Translations of current Web Accessibility Initiative (WAI) website resources are listed below.

Translations of Web Content Accessibility Guidelines (WCAG) 2.0 and 2.1 are listed in [WCAG 2 Translations](/standards-guidelines/wcag/translations/).<br>Other accessibility Technical Reports (including Authoring Tool Accessibility Guidelines (ATAG) 2.0) are listed in [Translations of W3C Technical Reports](https://www.w3.org/Translations/?filter=accessibility).

{% comment %}<!-- When ARIA and other key ones are translated, list them here, too. ... if we haven't gotten them integrated in the list below yet. :-) -->{% endcomment %}


{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="all" %}

{% assign lang1=site.documents | where_exp:"item", "item.lang != 'en'" | sort: 'lang' | map: "lang" %}
{% assign lang2=site.pages | where_exp:"item", "item.lang != 'en'" | sort: 'lang' | map: "lang" %}
{% for lang in page.translated_standards %}
{%- if forloop.first %}{% assign lang3 = lang.lang %}{%else%}{% assign lang3 = lang3 | append: "," | append: lang.lang %}{% endif -%}
{% endfor %}

{% assign lang3 = lang3 | split: "," %}
{% assign langs = lang1 | concat: lang2 | concat: lang3 | uniq %}

{%- for l in langs %}
{% if l %}

{% include excol.html type="start" id=l %}

## <span lang="{{l}}" bidi="auto" style="text-transform: capitalize;">{{ site.data.lang[l].nativeName }}</span> ({{ site.data.lang[l].name }})

{% if site.data.lang[l].rtl -%}{%- include excol.html type="middle" dir="rtl" lang=l -%}{%- else -%}{%- include excol.html type="middle" -%}{%- endif %}

{%- assign p1=site.documents | where: "lang", l -%}
{%- assign p2=site.pages | where: "lang", l -%}
{%- assign resource_pages = p1 | concat: p2 | sort: "title" -%}
{%- assign resources = resource_pages | group_by_exp: 'item', 'item.resource.ref' -%}

<dl lang="{{l}}" class="translations">

{%- for pages in resources -%}
  {%- if pages.name -%}
    <div>
      <dt>{% include_cached resource-title.html to=pages.name lang=l %}</dt>
      <dd>
        <dl>
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
        </dl>
      </dd>
    </div>
  {% endif %}
{% endfor %}

{% assign stds = page.translated_standards | where: "lang", l %}

{% for std in stds.first.docs %}
  {%- if forloop.first -%}
    <div>
      <dt>{% include_cached t.html t="Translated Standards/Guidelines" lang=l %}</dt>
      <dd>
        <dl lang="{{l}}">
  {%- endif -%}
          <div>
            <dt><a href="std.url">{{ std.title }}</a></dt>
            <dd lang="en">
              English title: <i>{{std.en_title}}</i>
            </dd>
          </div>
  {%- if forloop.last %}
        </dl>
      </dd>
    </div>
  {% endif -%}
{% endfor %}

</dl>

{% include excol.html type="end" %}

{% endif %}
{% endfor %}

If you might be interesting in translating resources, see [[Translating WAI Resources]](/about/translating/).
