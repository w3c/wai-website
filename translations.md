---
title: "All WAI Translations"
permalink: /translations/
parent: /
layout: default
github:
  repository: w3c/wai-website
  path: translations.md
feedbackmail: wai@w3.org
footer: |
  <p>Translations management is part of the <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access project</a>, funded by the Ford Foundation.</p>
---

Translations of current Web Accessibility Initiative (WAI) website resources are listed below.

Translations of Web Content Accessibility Guidelines (WCAG) 2.0 and 2.1 are listed in [WCAG 2 Translations]( https://www.w3.org/WAI/standards-guidelines/wcag/translations/).<br>Other accessibility Technical Reports (including Authoring Tool Accessibility Guidelines (ATAG) 2.0) are listed in [Translations of W3C Technical Reports](https://www.w3.org/Translations/?filter=accessibility). <!-- When ARIA and other key ones are translated, list them here, too. ... if we haven't gotten them integrated in the list below yet. :-) -->

{% include excol.html type="all" %}

{% assign lang1=site.documents | where_exp:"item", "item.lang != 'en'" | sort: 'lang'| map: "lang" %}
{% assign lang2=site.pages | where_exp:"item", "item.lang != 'en'" | sort: 'lang' | map: "lang" %}

{% assign langs = lang1 | concat: lang2 | uniq %}

{%- for l in langs %}
{% if l %}

{::nomarkdown}

{% include excol.html type="start" id=l %}

{:/}

<span lang="{{l}}" bidi="auto" style="text-transform: capitalize;">{{ site.data.lang[l].nativeName }}</span> ({{ site.data.lang[l].name }})

{::nomarkdown}

  {% if site.data.lang[l].rtl %}
    {% include excol.html type="middle" dir="rtl" lang=l %}
  {% else %}
    {% include excol.html type="middle" %}
  {% endif %}

{:/}


  {% assign p1=site.documents | where: "lang", l %}
  {% assign p2=site.pages | where: "lang", l %}
  {% assign pages = p1 | concat: p2 | sort: "title" %}
  {% for p in pages %}
    {%- if forloop.first %}<ul lang="{{l}}">{% endif -%}
      <li>
        <a href="{{ p.url | relative_url }}">{{ p.title }}</a> —
        {%- capture translatorslabel %}{% include_cached t.html t='Translator:' lang=l %}{%- endcapture %}
        {% include_cached peoplelist.html label=translatorslabel people=p.translators %}
        {%- capture contributorslabel %}{% include_cached t.html t='Contributor:' lang=l%}{%- endcapture %}
        {% include_cached peoplelist.html label=contributorslabel people=p.contributors %}
      </li>
    {%- if forloop.last  %}</ul>{% endif -%}
  {% endfor %}

{::nomarkdown}

{% include excol.html type="end" %}

{:/}

{% endif %}
{% endfor -%}

If you might be interesting in translating resources, see [Translating WAI Resources]({{ "/about/translating/" | relative_url }}).
