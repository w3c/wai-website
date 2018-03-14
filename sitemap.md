---
title: "WAI Site Map"
nopagefooter: true
permalink: /sitemap/
---

<!-- See also: [annotated list of primary WAI
Resources](https://www.w3.org/WAI/Resources/Overview). @@not sure if we'll update and include this or not... -->

{::nomarkdown}
<ul>
{%- for item in site.data.navigation -%}
  {%- assign the_url = item.name | slugify | prepend: "/sitemap/#" -%}
  <li id="{{item.name | slugify}}">
    <strong>{{item.name}}</strong>
      {%- if item.cols -%}
        <ul>
          {% for i in item.cols[0].pages %}
            <li>
              <a href="{% include path.html path=i.url %}"><span>{{i.name}}</span></a>
              {%- for n in i.pages -%}
                {%- if forloop.first %}<ul>{% endif -%}
                  <li><a href="{% include path.html path=n.url %}">{{n.name}}</a></li>
                {%- if forloop.last %}</ul>{% endif -%}
              {%- endfor -%}
            </li>
          {% endfor %}
          {% for i in item.cols[1].pages %}
            <li>
              <a href="{% include path.html path=i.url %}"><span>{{i.name}}</span></a>
              {%- for n in i.pages -%}
                {%- if forloop.first %}<ul>{% endif -%}
                  <li><a href="{% include path.html path=n.url %}">{{n.name}}</a></li>
                {%- if forloop.last %}</ul>{% endif -%}
              {%- endfor -%}
            </li>
          {% endfor %}
           {% for i in item.cols[2].pages %}
            <li>
              <a href="{% include path.html path=i.url %}"><span>{{i.name}}</span></a>
              {%- for n in i.pages -%}
                {%- if forloop.first %}<ul>{% endif -%}
                  <li><a href="{% include path.html path=n.url %}">{{n.name}}</a></li>
                {%- if forloop.last %}</ul>{% endif -%}
              {%- endfor -%}
            </li>
          {% endfor %}
        </ul>
      {%- endif -%}
{%- endfor -%}
</ul>
{:/}

{% include excol.html type="all" %}

{% include excol.html type="start" id="" %}

## Archived Support Material

{% include excol.html type="middle" %}

- Overlap Between Mobile and Accessibility [@@heading not linked]
    -   [Web Content Accessibility and Mobile Web: Making a Web Site Accessible Both for People with Disabilities and for Mobile Devices](https://www.w3.org/WAI/mobile/overlap)
    -   [Shared Web Experiences: Barriers Common to Mobile Device Users and People with Disabilities](https://www.w3.org/WAI/mobile/experiences)
    -   [Relationship between Mobile Web Best Practices (MWBP) and Web Content Accessibility Guidelines (WCAG) ![technical report](https://www.w3.org/Icons/tr.png){width="15" height="1"}](/TR/mwbp-wcag/)
- [Better Web Browsing: Tips for Customizing Your Computer](https://www.w3.org/WAI/users/browsing)
- @@old RDWG stuff
- Accessibility Information for Specific Technologies (https://www.w3.org/WAI/specific-techs)

{% include excol.html type="end" %}
{% include excol.html type="start" id="" %}

## Archived WAI Information

{% include excol.html type="middle" %}

- [WAI Press Releases and Document Release Notices](https://www.w3.org/WAI/about/releases)
- [WAI Events](https://www.w3.org/WAI/events)
    -   [Authoring Tool Accessibility Guidelines Working Group (AUWG)](https://www.w3.org/WAI/AU/)
    -   [Evaluation and Repair Tools Working Group (ERT WG)](https://www.w3.org/WAI/ER/)
    -   [Independent User Interface (Indie UI) Working Group](https://www.w3.org/WAI/IndieUI/)
    -   [Protocols and Formats Working Group (PFWG)](https://www.w3.org/WAI/PF/)
    -   [Research and Development Working Group (RDWG)](https://www.w3.org/WAI/RD/)
    -   [User Agent Accessibility Guidelines Working Group (UAWG)](https://www.w3.org/WAI/UA/)
@@ how to handle that some projects are active and some are archive?
- [WAI Projects](https://www.w3.org/WAI/about/projects)
    -   [WAI-Core 2015](https://www.w3.org/WAI/CORE2015/)
    -   [WAI-Core 2010](https://www.w3.org/WAI/Core/)
    -   [WCAG TA](https://www.w3.org/WAI/WCAGTA/)
    -   [WAI-DEV Project Reference](https://www.w3.org/WAI/DEV/)
    -   [WAI-ACT Project Reference](https://www.w3.org/WAI/ACT/)
    -   [WAI-AGE Project Reference](https://www.w3.org/WAI/WAI-AGE/)
    -   [WAI-TIES Project Reference](https://www.w3.org/WAI/TIES/)
    -   [WAI-DA Project Reference Guide ![different format](https://www.w3.org/Icons/tr.png){width="15" height="1"}](https://www.w3.org/WAI/WAIDA/)
    -   [WAI-DE / WAI-TIDE Final report ![different format](https://www.w3.org/Icons/tr.png){width="15" height="1"}](https://www.w3.org/WAI/TIDE/FR2.htm)

{% include excol.html type="end" %}

{% include excol.html type="all" %}
