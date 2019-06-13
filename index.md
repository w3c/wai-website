---
layout: home
title: "Home"
lang: 'en'
---
<h1 class="visuallyhidden">W3C Web Accessibility Initiative Home</h1>
<section class="default-grid teaser making-web-accessible" aria-labelledby="mwa-title">
  <header class="inner teaser-h">
    <h2 id="mwa-title">
      <span class="title">Making the Web Accessible</span>
    </h2>
    <p class="subtitle">Strategies, standards, and supporting resources to help you make the Web more accessible to people with disabilities.</p>
  </header>
  <div class="inner grid-3 nogap">
    <div class="col1 making-web-accessible-box">{% include_cached icon.html name="hp-book" class="mwa-icon" %}<h3>W3C</h3>
      <p>The World Wide Web Consortium (W3C) develops international standards for the Web: HTML, CSS, and many more.</p>
    </div>
    <div class="col2 making-web-accessible-box">{% include_cached icon.html name="hp-tools" class="mwa-icon" %}<h3>WAI</h3>
      <p>The W3C Web Accessibility Initiative (WAI) develops standards and support materials to help you understand and implement accessibility.</p>
    </div>
    <div class="col3 making-web-accessible-box">{% include_cached icon.html name="hp-computer" class="mwa-icon" %}<h3>You</h3>
      <p>You can use W3C WAI resources to make your websites, applications, and other digital creations more accessible and usable to everyone.</p>
    </div>
  </div>
  <div class="inner hidesection">
    <button class="showhidebutton" data-target=".making-web-accessible .inner:not(.hidesection)" aria-expanded="true" data-showhidebuttonid="homepage-making-web-accessible" data-showtext="Show information about W3C, WAI, You" data-hidetext="Hide Section">Hide Section</button>
  </div>
</section>

<div class="white-bg grid-five-three">
  <div class="col1 grid-line-right">
    <section class="teaser news-teaser" aria-labelledby="news-teaser-title">
        <header class="teaser-h">
          <h2 id="news-teaser-title">
            <span class="subtitle">&nbsp;</span>
            <span class="title">News</span>
          </h2>
        </header>
        {%- for post in site.posts -%}
          <article class="news-teaser">
              <h3>{%comment%}<a href="{{ post.url | relative_url }}">{%endcomment%}{{post.title}}{%comment%}</a>{%endcomment%}</h3>
              {{ post.content | markdownify }}
              <p><small>({{post.date | date: "%Y-%m-%d"}})</small></p>
          </article>
          {%- if forloop.index == 5 -%}
              {%- break -%}
          {%- endif -%}
        {%- endfor -%}
        <a href="{{ '/news/' | relative_url }}" class="button button-more"><span>See All News</span></a> <a href="{{ '/news/subscribe/' | relative_url }}" class="button button-more button-secondary"><span>Subscribe to WAI News</span></a>
    </section>
  </div>
  <div class="col2">
    <section class="teaser audiences-inline" aria-labelledby="audiences-title">
      <header class="teaser-h">
        <h2 id="audiences-title">
          <span class="subtitle">See what we have for you: </span>
          <span class="title">Get Resources for…</span>
        </h2>
      </header>
      <ul class="two small columns">
        {%- assign roles = site.audiences | sort: "order" -%}
        {% for role in roles %}
          {% unless role.nav_title == "Overview" %}
          <li><a href="{{ role.url | relative_url }}">{% if role.nav_title %}{{role.nav_title}}{% else %}{{role.title}}{% endif %}</a></li>
          {% endunless %}
        {% endfor %}
      </ul>
    </section>

    {% include_cached homepage-video-teaser.html to="/perspective-videos/keyboard/" subtitle="Web Accessibility Perspectives:" secondary="/perspective-videos/" secondarylabel="See All Perspectives Videos" %}

    {% include_cached homepage-teaser.html to="/fundamentals/accessibility-principles/" %}

</div>
</div>

<div class="default-grid grid-3">
  <div class="col1">

    {% include_cached homepage-teaser.html to="/business-case/" %}

  </div>
  <div class="col2">

    {% include_cached homepage-teaser.html to="/fundamentals/accessibility-intro/" %}
  
  </div>
  <div class="col3">

      {% include_cached homepage-teaser.html to="/test-evaluate/preliminary/" %}
  
  </div>
</div>


<div class="default-grid teaser teaser-sponsors">
  <div class="inner">
    <header class="teaser-h">
      <h2 class="title">Sponsors and Funders</h2>
    </header>
    <p>WAI is supported in part by the following organizations. Thank you!</p>
    <ul>
      <li><a href="http://www.ibm.com/able">IBM Corporation</a></li>
      <li>European Commission (<abbr>EC</abbr>) <a href="https://ec.europa.eu/programmes/horizon2020/">Horizon 2020</a> (780057) (<a href="https://www.w3.org/WAI/about/projects/wai-tools/">WAI-Tools Project</a>)</li>
      <li>European Commission (<abbr>EC</abbr>) <a href="https://ec.europa.eu/programmes/horizon2020/">Horizon 2020</a> (822245) (<a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a>)</li>
      <li><a href="https://www.fordfoundation.org/">Ford Foundation</a>, <a href="https://www.fordfoundation.org/work/challenging-inequality/technology-and-society/">Technology and Society Program</a> (<a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access Project</a>)</li>
      <li>US Department of Health and Human Services, <a href="https://www.acl.gov/about-acl/about-national-institute-disability-independent-living-and-rehabilitation-research">National Institute for Disability, Independent Living and Rehabilitation Research</a>, contract HHSP23301500054 (<a href="https://www.w3.org/WAI/Core2015/">WAI-Core 2015 Project</a>)</li>
    </ul>
    <p>WAI welcomes <a href="{{ '/about/sponsoring/' | relative_url }}">additional sponsors</a>.</p>
  </div>
</div>
