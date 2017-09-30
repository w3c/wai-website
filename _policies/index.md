---
title: "Web Accessibility Laws & Policies"
nav_title: Overview
permalink: /policies/
order: 0
layout: sidenav
---

This page lists governmental policies related to web accessibility, although it is not a comprehensive or definitive listing. We welcome additions or corrections to these listings via the <a href="submission.html">submission form</a>.

The information on this page is _not_ legal advice. If you have questions about the applicability of the policies to specific situations, please consult legal authorities for the appropriate jurisdiction.

For guidance on developing an accessibility policy for an organization, see [Developing Organizational Policies on Web Accessibility]({% link _planning-and-managing/implement.md %}).

<details open>
 <summary><h3 id="xterms" style="display:inline-block;">Terms used on this page</h3></summary>
     <div>
         <ul class="terms">
           <li><strong>Law</strong> – A law has completed the legislation process, and is put into effect as the law of the land.</li>
           <li><strong>Policy</strong> – Outlines the goals of a government ministry or agency as well as the methods and principles to achieve those goals. Policies are not laws, but can lead to the development of laws.</li>
           <li><strong>Public sector</strong> – Includes government and government-run or owned entities, and entities that receive government funding.</li>
           <li><strong>Private sector</strong> – Businesses and organizations that are not part of the public sector, including non-profit organizations.</li>
           <li><strong>WCAG derivative</strong> - Used when a standard is based on a version of the Web Content Accessibility Guidelines (WCAG), but some requirements were excluded or modified or additional non-WCAG requirements were added.</li>
           <li><strong>Procurement law</strong> - A law that requires government purchase of accessible goods and services.</li>
           <li><strong>Procurement recommendation</strong> - An optional, but encouraged goal to purchase accessible goods and services.</li>
           <li><strong>Mandatory policy</strong> - Required accessibility goals or implementation that is not regulated by law.</li>
         </ul>
     </div>
 </details>


 <h2 id="xtable">Law and Policy Overview Table</h2>
  <div>
  <details open>
    <summary>
    <h3 style="display:inline-block;">Filter policies to show:</h3>
    </summary>
    <div id="facets"></div>
  </details>
    <table class="sortable overviewtable">
      <caption>
        <h3>Overview Table:</h3>
        <div id="infos"></div>
      </caption>
      <thead>
      <tr>
        <th>Country</th>
        <th>Name</th>
        <th>Date enacted</th>
        <th>Type (Policy, law, legislation, etc.)</th>
        <th>Scope</th>
        <th>Web Only</th>
        <th>WCAG Version Used</th>
      </tr>
      </thead>
      <tbody id="results">
        {% for policy in site.policies %}
        {% for p in policy.policies %}
        <tr data-updated="{{policy.updated}}">
          <td>{% assign curl = policy.country.en | slugify | prepend: '#x' %}
            {% include multilang-title.html title=policy.country url=curl %}</td>
          <td><a href="{{ policy.url | prepend: site.baseurl }}#{{ p.title.en | slugify }}">{{p.title.en}}</a></td>
          <td>{{p.enactdate}}</td>
          <td>{{p.type}}</td>
          <td>{{p.scope}}</td>
          <td>{%if p.webonly == true %}yes{% else %}no{%endif%}</td>
          <td>{{p.wcagver}}</td>
        </tr>
        {% endfor %}
        {% endfor %}
      </tbody>
    </table>
  </div>

  <script type="text/template" id="results-template">
  <tr>
    <td><a href="<%= obj.countryhref %>"><%= obj.title %></a></td>
    <td><a href="<%= obj.policyhref %>"><%= obj.policyname %></a></td>
    <td><%= obj.enactdate %></td>
    <td><%= obj.type %></td>
    <td><% if (obj.scope instanceof Array && obj.scope.length > 1) { %>
      <%= obj.scope.join(', ') %>
    <% } else { %>
      <%= obj.scope %>
    <% } %></td>
    <td><%= obj.webonly %></td>
    <td><%= obj.wcagver %></td>
  </tr>
</script>


<script src="{{site.github.url}}/policies/js/jquery.js"></script>
<script src="{{site.github.url}}/policies/js/underscore.js"></script>
<script src="{{site.github.url}}/policies/js/uri.js"></script>
<script src="{{site.github.url}}/policies/js/facetedsearch.js"></script>
<script src="{{site.github.url}}/policies/js/sorttable.js"></script>
<script>var path = "{{site.github.url}}";</script>
<script src="{{site.github.url}}/policies/js/script.js"></script>
<style>@import url('{{site.github.url}}/policies/css/policies.css');</style>