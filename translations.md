---
title: "All WAI Translations"
permalink: /translations/
parent: /
layout: default
github:
  repository: w3c/wai-website
  path: translations.md
---

This page lists translations of Web Accessibility Initiative (WAI) website resources. For translations of Web Content Accessibility Guidelines (WCAG), see [WCAG 2 Translations]({{ "/standards-guidelines/wcag/translations/" | relative_url }}). {% comment %}after we integrate those, then we can delete this paragraph.{% endcomment %}

{% assign lang1=site.documents | where_exp:"item", "item.lang != 'en'" | sort: 'lang'| map: "lang" %}
{% assign lang2=site.pages | where_exp:"item", "item.lang != 'en'" | sort: 'lang' | map: "lang" %}

{% assign langs = lang1 | concat: lang2 | uniq %}

{%- for l in langs %}
{% if l %}
{% include excol.html type="start" id=l %}
<span lang="{{l}}" bidi="auto">{{ site.data.lang[l].nativeName }}</span> ({{ site.data.lang[l].name }})
{% include excol.html type="middle" %}
  {% assign p1=site.documents | where: "lang", l %}
  {% assign p2=site.pages | where: "lang", l %}
  {% assign pages = p1 | concat: p2 | sort: "title" %}
  {% for p in pages %}
    {%- if forloop.first %}<ul lang="{{l}}">{% endif -%}
      <li><a href="{{ p.url | relative_url }}">{{ p.title }}</a></li>
    {%- if forloop.last  %}</ul>{% endif -%}
  {% endfor%}
{% include excol.html type="end" %}
{% endif %}
{% endfor -%}

If you might be interesting in translating resources, see [Translating WAI Resources]({{ "/about/translating/" | relative_url }}).
