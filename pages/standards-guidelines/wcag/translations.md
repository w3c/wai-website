---
title: WCAG 2 Translations
nav_title: "Translations"
lang: en
last_updated: 2025-12-18
first_published: "2 March 2009"
description: Links to translations of Web Content Accessibility Guidelines (WCAG) 2.2, 2.1 and 2.0.

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/translations/
ref: /standards-guidelines/wcag/translations/

image: /content-images/wcag/general-social.png
footer: >
  <p><strong>Editors:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>, Shadi Abou_Zahra, Xueyuan Jia, Rémi Bétin.</p>
  <p>Developed with input from the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>). Updated as part of the <a href="https://www.w3.org/WAI/about/projects/wai-coop/">WAI-CooP project</a>, co-funded by the European Commission.</p>

inline_css: |
  .translation-level {
    background-color: rgba(206, 205, 205, 0.5);
    border-radius: 0.25rem;
    display: inline-block;
    margin-bottom: 0.3125rem;
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
  .translations-table p{
    margin: 0.2rem 0;
  }
  .translations-table .translation_item:not(:first-child) {
    border-top: 1px solid var(--cloudy);
    padding-top: 12px;
    margin-top: 1rem;
  }
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

This page lists translations of Web Content Accessibility Guidelines (WCAG) 2.2, 2.1 and 2.0.

Translations of other accessibility resources are listed in **[All WAI Translations](https://www.w3.org/WAI/translations/)**.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Types of Translations

Two types of translations are listed on this page:

-   _[Authorized Translations](https://www.w3.org/2005/02/TranslationPolicy)_ follow a formal review process and are endorsed by W3C.
-   _Unofficial translations_ are not reviewed and are not endorsed by W3C.

{% assign wcag_trans = site.data.standards-translations | where_exp: "item", "item.standard == 'wcag'" %}
{% assign wcag20 = site.data.standards | where_exp: "item", "item.standard == 'wcag' and item.standard_version == '2.0'" | first %}
{% assign wcag21 = site.data.standards | where_exp: "item", "item.standard == 'wcag' and item.standard_version == '2.1'" | first  %}
{% assign wcag22 = site.data.standards | where_exp: "item", "item.standard == 'wcag' and item.standard_version == '2.2'" | first  %}

{% assign wcag20_trans = wcag_trans | where_exp: "item", "item.standard_version == '2.0'" | group_by: "lang" %}
{% assign wcag21_trans = wcag_trans | where_exp: "item", "item.standard_version == '2.1' or item.standard_version == '2.1_2018' or item.standard_version == '2.1_2023'" | group_by: "lang" %}
{% assign wcag22_trans = wcag_trans | where_exp: "item", "item.standard_version == '2.2' or item.standard_version == '2.2_2023'" | group_by: "lang" %}

## WCAG 2.2

<table class="quiet translations-table">
  <thead>
    <tr>
      <th scope="col">Language</th>
      <th scope="col">Translations</th>
    </tr>
  </thead>
  <tbody>
  {%- for trans_lang in wcag22_trans -%}
    <tr>
      <th id="{{ trans_lang.name }}22">{{ site.data.lang[trans_lang.name].name }} (<span lang="{{ trans_lang.name }}">{{ site.data.lang[trans_lang.name].nativeName }}</span>)</th>
      <td>
        {%- for trans in trans_lang.items -%}
          <div class="translation_item">
          {% case trans.type %}
            {% when "authorized" %}
              <span class="translation-level translation-level--authorized">Authorized Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag22.title }}{%- endif -%}</a></strong></p>
              {% if trans.translator %}<p>Lead Translating Organization: {{ trans.translator}}</p>{% endif %}
            {% when "unofficial" %}
              <span class="translation-level translation-level--unofficial">Unofficial Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag22.title }}{%- endif -%} {% include_cached external.html %}</a></strong></p>
              {% if trans.translator %} <p>Volunteer translator: {{ trans.translator}}</p>{% endif %}
            {% when "cat" %}
              <span class="translation-level">Candidate Authorized Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag22.title }}{%- endif -%} {% include_cached external.html %}</a></strong></p>
              {% if trans.translator %}<p>Lead Translating Organization: {{ trans.translator}}</p>{% endif %}
            {% when "intent-unofficial" %}
              <span class="translation-level">Planned Unofficial Translation</span>
              {% if trans.intent_email %}<p><a href="{{ trans.intent_email }}">Notification of intent ({{ trans.intent_date | date: "%-d %B %Y"}})</a></p>{% endif %}
            {% when "intent-authorized" %}
              <span class="translation-level">Planned Authorized Translation</span>
              {% if trans.intent_email %}<p><a href="{{ trans.intent_email }}">Notification of intent ({{ trans.intent_date | date: "%-d %B %Y"}})</a></p>{% endif %}
          {% endcase %}
            {% if trans.comment %}<p>{{ trans.comment }}</p>{% endif %}
          </div>
        {%- endfor -%}
      </td>
    </tr>
  {%- endfor -%}
  </tbody>
</table>

## WCAG 2.1

<table class="quiet translations-table">
  <thead>
    <tr>
      <th scope="col">Language</th>
      <th scope="col">Translations</th>
    </tr>
     </thead>
  <tbody>
  {%- for trans_lang in wcag21_trans -%}
    <tr>
      <th id="{{ trans_lang.name }}21">{{ site.data.lang[trans_lang.name].name }} (<span lang="{{ trans_lang.name }}">{{ site.data.lang[trans_lang.name].nativeName }}</span>)</th>
      <td>
        {%- for trans in trans_lang.items -%}
          <div class="translation_item">
          {% case trans.type %} 
            {% when "authorized" %}
              <span class="translation-level translation-level--authorized">Authorized Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag21.title }}{%- endif -%}</a></strong></p>
              {% if trans.translator %}<p>Lead Translating Organization: {{ trans.translator}}</p>{% endif %}
            {% when "unofficial" %}
              <span class="translation-level translation-level--unofficial">Unofficial Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag21.title }}{%- endif -%} {% include_cached external.html %}</a></strong></p>
              {% if trans.translator %} <p>Volunteer translator: {{ trans.translator}}</p>{% endif %}
            {% when "cat" %}
              <span class="translation-level">Candidate Authorized Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag21.title }}{%- endif -%} {% include_cached external.html %}</a></strong></p>
              {% if trans.translator %}<p>Lead Translating Organization: {{ trans.translator}}</p>{% endif %}
            {% when "intent-unofficial" %}
              <span class="translation-level">Planned Unofficial Translation</span>
              {% if trans.intent_email %}<p><a href="{{ trans.intent_email }}">Notification of intent ({{ trans.intent_date | date: "%-d %B %Y"}})</a></p>{% endif %}
            {% when "intent-authorized" %}
              <span class="translation-level">Planned Authorized Translation</span>
              {% if trans.intent_email %}<p><a href="{{ trans.intent_email }}">Notification of intent ({{ trans.intent_date | date: "%-d %B %Y"}})</a></p>{% endif %}
          {% endcase %}
          {% if trans.comment %}<p>{{ trans.comment }}</p>{% endif %}
          </div>
        {%- endfor -%}
      </td>
    </tr>
  {%- endfor -%}
  </tbody>
</table>

## WCAG 2.0

<table class="quiet translations-table">
  <thead>
    <tr>
      <th scope="col">Language</th>
      <th scope="col">Translations</th>
    </tr>
     </thead>
  <tbody>
  {%- for trans_lang in wcag20_trans -%}
    <tr>
      <th id="{{ trans_lang.name }}20">{{ site.data.lang[trans_lang.name].name }} (<span lang="{{ trans_lang.name }}">{{ site.data.lang[trans_lang.name].nativeName }}</span>)</th>
      <td>
        {%- for trans in trans_lang.items -%}
          <div class="translation_item">
          {% case trans.type %} 
            {% when "authorized" %}
              <span class="translation-level translation-level--authorized">Authorized Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag20.title }}{%- endif -%}</a></strong></p>
              {% if trans.translator %}<p>Lead Translating Organization: {{ trans.translator}}</p>{% endif %}
            {% when "unofficial" %}
              <span class="translation-level translation-level--unofficial">Unofficial Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag20.title }}{%- endif -%} {% include_cached external.html %}</a></strong></p>
              {% if trans.translator %} <p>Volunteer translator: {{ trans.translator}}</p>{% endif %}
            {% when "cat" %}
              <span class="translation-level">Candidate Authorized Translation</span> {% if trans.date %}– {{ trans.date | date: "%-d %B %Y"}}{% endif %}
              <p {% if trans.title %} lang="{{ trans_lang.name }}"{% endif %}><strong><a href="{{ trans.url }}" hreflang="{{ trans_lang.name }}">{%- if trans.title -%}{{ trans.title}}{%- else -%}{{ wcag20.title }}{%- endif -%} {% include_cached external.html %}</a></strong></p>
              {% if trans.translator %}<p>Lead Translating Organization: {{ trans.translator}}</p>{% endif %}
            {% when "intent-unofficial" %}
              <span class="translation-level">Planned Unofficial Translation</span>
              {% if trans.intent_email %}<p><a href="{{ trans.intent_email }}">Notification of intent ({{ trans.intent_date | date: "%-d %B %Y"}})</a></p>{% endif %}
            {% when "intent-authorized" %}
              <span class="translation-level">Planned Authorized Translation</span>
              {% if trans.intent_email %}<p><a href="{{ trans.intent_email }}">Notification of intent ({{ trans.intent_date | date: "%-d %B %Y"}})</a></p>{% endif %}
          {% endcase %}
          {% if trans.comment %}<p>{{ trans.comment }}</p>{% endif %}
          </div>
        {%- endfor -%}
      </td>
    </tr>
  {%- endfor -%}
  </tbody>
</table>

## More Information

### About WCAG

For information on WCAG, see the [[Web Content Accessibility Guidelines (WCAG) Overview]](/standards-guidelines/wcag/).

### Other Translations

For other translations lists, see:
* **[All WAI Translations](https://www.w3.org/WAI/translations/)** for translations of other accessibility resources
* **[Translations of Current W3C Technical Reports](https://www.w3.org/Translations/)**

### About Translating

For information on translating W3C documents, see:
* [[How to Translate WCAG 2]](/about/translating/wcag/) for WCAG 2
* [Translating WAI Resources](/about/translating/) for accessibility resources
* [Contributing to W3C Translations](https://www.w3.org/Consortium/Translation/) for W3C Technical Reports

**Note:** If you are interested in translating a specific document, make sure to announce it (as instructed in the links above) to facilitate collaboration, to avoid duplication of effort, to ensure that you have the latest version, and to appropriately address pending updates and errata.

For additional information on WCAG translations, contact Shawn Lawton Henry <shawn@w3.org>.
