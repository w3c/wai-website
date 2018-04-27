---
layout: home
title: "Home"
---
<h1 class="visuallyhidden">W3C Web Accessibility Initiative Home</h1>
<section class="default-grid teaser making-web-accessible" aria-labelledby="mwa-title">
  <header class="inner teaser-h">
    <h2 id="mwa-title">
      <span class="title">Making the Web Accessible</span>
      <span class="subtitle">Strategies, standards, and supporting resources to help you make the Web more accessible to people with disabilities.</span>
    </h2>
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
              {{ post.excerpt | markdownify }}
              <p><small>({{post.date | date: "%Y-%m-%d"}})</small></p>
          </article>
          {%- if forloop.index == 5 -%}
              {%- break -%}
          {%- endif -%}
        {%- endfor -%}
        <a href="{{ '/news/' | relative_url }}" class="button button-more"><span>See All News</span></a>
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
      <ul class="two columns">
        <li><a href="{{ '/audiences/designers/' | relative_url }}">Designers</a></li>
        <li><a href="{{ '/audiences/developers/' | relative_url }}">Developers</a></li>
        <li><a href="{{ '/audiences/managers/' | relative_url }}">Managers</a></li>
        <li><a href="{{ '/audiences/policy-makers/' | relative_url }}">Policy Makers</a></li>
        <li><a href="{{ '/audiences/testers/' | relative_url }}">Testers/Evaluators</a></li>
        <li><a href="{{ '/audiences/trainers/' | relative_url }}"> Trainers/Educators </a></li>
        <li><a href="{{ '/audiences/users/' | relative_url }}">Web Users, Advocates</a></li>
      </ul>
    </section>
    <section class="teaser media-inline" aria-labelledby="perspectives-title">
      <header class="teaser-h">
        <h2 id="perspectives-title">
          <span class="subtitle">Web Accessibility Perspectives: </span>
          <span class="title">Keyboard Compatibility</span>
        </h2>
      </header>
      <div class="media-wrapper">
        <iframe title="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/93UgG72os8M" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <p>[Short description for Keyboard Compatibility] All functionality must be usable with the keyboard. That is, users can access and move between links, buttons, forms, and other controls using the Tab key and other keystrokes. Websites should not require a mouse;…</p>
      <div class="button-group">
        <a class="button button-more" href="{{ '/perspective-videos/keyboard/' | relative_url }}"><span>More About Keyboard Compatibility</span></a>
        <a class="button button-more button-secondary" href="{{ '/perspective-videos/' | relative_url }}"><span>See All Perspectives Videos</span></a>
      </div>
    </section>

    <section class="teaser resource-inline" aria-labelledby="easychecks-title">
      <a class="teaser-c stealthy-link col1" href="{{ '/test-evaluate/preliminary/' | relative_url }}">
        <header class="teaser-h">
          <h2 id="easychecks-title">
            <span class="subtitle">Featured Resource: </span>
            <span class="title">Easy Checks</span>
          </h2>
        </header>
        <p>
          Is accessibility addressed in even the most basic way on your site?
        </p>
        <div>
          <span class="button">More About EasyChecks</span>
        </div>
      </a>
    </section>
  </div>
</div>

<div class="default-grid teaser teaser-sponsors">
    <div class="inner">
        <header class="teaser-h">
            <h2 class="title">Sponsors and Funders</h2>
        </header>
        <p>WAI is supported in part by the following organizations. Thank you!</p>
        <ul>
          <li><a href="https://bocoup.com/">Bocoup</a></li>
          <li><a href="http://www.hp.com/">HP Inc.</a></li>
          <li><a href="http://www.ibm.com/able">IBM Corporation</a></li>
          <li>European Commission (<abbr>EC</abbr>) <a href="https://ec.europa.eu/programmes/horizon2020/">Horizon 2020</a> (780057) (<a href="https://www.w3.org/WAI/Tools/">WAI-Tools Project</a>)</li>
          <li>US Department of Health and Human Services, <a href="https://www.acl.gov/about-acl/about-national-institute-disability-independent-living-and-rehabilitation-research">National Institute for Disability, Independent Living and Rehabilitation Research</a>, contract HHSP23301500054 (<a href="https://www.w3.org/WAI/Core2015/">WAI-Core 2015 Project</a>)</li>
        </ul>
        <p>WAI welcomes <a href="{{ '/about/sponsoring/' | relative_url }}">additional sponsors</a>.</p>
    </div>
</div>

