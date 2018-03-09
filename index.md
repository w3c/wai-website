---
layout: home
title: "Home"
nopagefooter: true
---

<section class="default-grid teaser making-web-accessible">
  <div class="inner">
    <h2>Making the Web Accessible</h2>
    <p>Strategies, guidelines, and resources to make the web accessible to people with disabilities.</p>
  </div>
  <div class="inner grid-3">
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
    <section class="teaser news-teaser">
        <header class="teaser-h">
          <h2>
            <span class="subtitle">&nbsp;</span>
            <span class="title">News</span>
          </h2>
        </header>
        {%- for post in site.posts -%}
            <article class="news-teaser">
                <h4>{{post.title}}</h4>
                {{ post.excerpt | markdownify }}
                <footer>(<a href="{{ post.url | relative_url }}" title="Permalink for {{ post.title | escape }}">{{post.date | date: "%Y-%m-%d"}}</a>)</footer>
            </article>
            {%- if forloop.index == 5 -%}
                {%- break -%}
            {%- endif -%}
        {%- endfor -%}
        <a href="{{site.github.url}}/news/" class="button button-more"><span>See All News</span></a>
    </section>
  </div>
  <div class="col2">
    <section class="teaser audiences-inline">
      <header class="teaser-h">
        <h2>
          <span class="subtitle">See what we have for you!</span>
          <span class="title">Get Resources for…</span>
        </h2>
      </header>
      <ul class="two columns">
        <li><a href="…">Developers</a></li>
        <li><a href="…">Designers</a></li>
        <li><a href="…">Managers</a></li>
        <li><a href="…">Policy Makers</a></li>
        <li><a href="…">Testers</a></li>
        <li><a href="…">Advocates</a></li>
      </ul>
    </section>
    <section class="teaser media-inline">
      <header class="teaser-h">
        <h2>
          <span class="subtitle">Web Accessibility Perspectives</span>
          <span class="title">Keyboard Compatibility</span>
        </h2>
      </header>
      <div class="media-wrapper">
        <iframe title="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/93UgG72os8M" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <p>[Short description for Keyboard Compatibility] All functionality must be usable with the keyboard. That is, users can access and move between links, buttons, forms, and other controls using the Tab key and other keystrokes. Websites should not require a mouse;…</p>
      <div class="button-group">
        <a class="button button-more" href="{{site.github.url}}/perspective-videos/keyboard/"><span>More About Keyboard Compatibility</span></a>
        <a class="button button-more button-secondary" href="{{site.github.url}}/perspective-videos/"><span>See All Perspectives Videos</span></a>
      </div>
    </section>

    <section class="teaser resource-inline">
      <a class="teaser-c stealthy-link col1" href="{{site.github.url}}/test-evaluate/easychecks/">
        <header class="teaser-h">
          <h2>
            <span class="subtitle">Featured Resource</span>
            <span class="title">Easy Checks</span>
          </h2>
        </header>
        <p>
          Is accessibility addressed in even the most basic way on your site?
        </p>
        <div>
          <span class="button">Read More</span>
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
          <li>European Commission (<acronym>EC</acronym>) <a href="https://ec.europa.eu/programmes/horizon2020/">Horizon 2020</a> (780057) (<a href="https://www.w3.org/WAI/Tools/">WAI-Tools Project</a>)</li>
          <li>US Department of Health and Human Services, <a href="https://www.acl.gov/about-acl/about-national-institute-disability-independent-living-and-rehabilitation-research">National Institute for Disability, Independent Living and Rehabilitation Research</a>, contract HHSP23301500054 (<a href="https://www.w3.org/WAI/Core2015/">WAI-Core 2015 Project</a>)</li>
        </ul>
        <p>WAI welcomes <a href="{{ "/about/sponsoring/" | relative_url }}">additional sponsors and contributors</a>.</p>
    </div>
</div>
