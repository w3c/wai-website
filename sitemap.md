---
title: "Sitemap"
nopagefooter: true
permalink: /sitemap/
---
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
              <a href="{{ i.url | relative_url }}"><span>{{i.name}}</span></a>
              {%- for n in i.pages -%}
                {%- if forloop.first %}<ul>{% endif -%}
                  <li><a href="{{n.url | relative_url}}">{{n.name}}</a></li>
                {%- if forloop.last %}</ul>{% endif -%}
              {%- endfor -%}
            </li>
          {% endfor %}
          {% for i in item.cols[1].pages %}
            <li>
              <a href="{{ i.url | relative_url }}"><span>{{i.name}}</span></a>
              {%- for n in i.pages -%}
                {%- if forloop.first %}<ul>{% endif -%}
                  <li><a href="{{n.url | relative_url}}">{{n.name}}</a></li>
                {%- if forloop.last %}</ul>{% endif -%}
              {%- endfor -%}
            </li>
          {% endfor %}
           {% for i in item.cols[2].pages %}
            <li>
              <a href="{{ i.url | relative_url }}"><span>{{i.name}}</span></a>
              {%- for n in i.pages -%}
                {%- if forloop.first %}<ul>{% endif -%}
                  <li><a href="{{n.url | relative_url}}">{{n.name}}</a></li>
                {%- if forloop.last %}</ul>{% endif -%}
              {%- endfor -%}
            </li>
          {% endfor %}
        </ul>
      {%- endif -%}
{%- endfor -%}
</ul>
{:/}