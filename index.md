---
layout: home
title: "Home"
lang: 'en'
inline_css: |
  li::marker {
    color: var(--faded-red);
  }
  .audiences-inline li, .teaser-sponsors li{
    color: var(--faded-red);
  }
  .audiences-inline li a {
    color: var(--w3c-blue);
  }
  .teaser-sponsors li>span{
    color: var(--off-black);
  }
---
<h1 class="visuallyhidden">W3C Web Accessibility Initiative Home</h1>
<section class="default-grid teaser making-web-accessible" aria-labelledby="mwa-title">
  <header class="inner teaser-h">
    <h2 id="mwa-title">
      <span class="title">Making the Web Accessible</span>
    </h2>
    <p class="subtitle">Strategies, standards, and supporting resources to help you make the Web more accessible to people with disabilities.</p>
  </header>
  <div class="inner grid-3">
    <div class="col1 making-web-accessible-box">
      <h3>{%- include_cached icon.html name="hp-book" class="mwa-icon mwa-icon-book" -%} W3C</h3>
      <p>The World Wide Web Consortium (W3C) develops international standards for the Web: HTML, CSS, and many more.</p>
    </div>
    <div class="col2 making-web-accessible-box">
      <h3>{%- include_cached icon.html name="hp-tools" class="mwa-icon" -%} WAI</h3>
      <p>The W3C Web Accessibility Initiative (WAI) develops standards and support materials to help you understand and implement accessibility.</p>
    </div>
    <div class="col3 making-web-accessible-box">
      <h3>{%- include_cached icon.html name="hp-computer" class="mwa-icon mwa-icon-computer" -%} You</h3>
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
	    <h3>Current Work</h3>
	    <p><small>(updated monthly)</small></p>
	    <p><strong>See <a href="{{ '/update/' | relative_url }}">What We're Working On &ndash; Accessibility Activities and Publications</a></strong></p>
        {%- for post in site.posts -%}
          <article class="news-teaser">
              <h3>{%comment%}<a href="{{ post.url | relative_url }}">{%endcomment%}{{post.title}}{%comment%}</a>{%endcomment%}</h3>
              <p><small>({{post.date | date: "%Y-%b-%d"}})</small></p>
              {{ post.content | markdownify }}
          </article>
          {%- if forloop.index == 7 -%}
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
        <li><a href="{{ '/resources/' | relative_url }}">Everyone (All WAI Resources)</a></li>
        <li><a href="{{ '/translations/' | relative_url }}">Other Languages</a></li>
      </ul>
    </section>
    <section class="teaser resource-inline" aria-labelledby="course-title">
      <a class="teaser-c stealthy-link col1" href="https://www.w3.org/WAI/fundamentals/foundations-course/">
        <header class="teaser-h">
          <h2 id="course-title">
            <span class="subtitle">Training Course:</span>
            <span class="title">Digital Accessibility Foundations</span>
          </h2>
        </header>
        <img src="{{ "/content-images/news/2019-12-03-w3cx-accessibility-intro.jpg" | relative_url }}" alt="">
        <p>The free "Introduction to Web Accessibility" online course provides the foundation you need to make your digital technology accessible. It's designed for:</p>
        <ul>
          <li>technical and non-technical learners</li>
          <li>developers, designers, ux, writers, managers, advocates</li>
          <li>professionals, instructors, students</li>
        </ul>

        <div>
          <span class="button">About the Free Online Course</span>
        </div>
      </a>
    </section>
	
	

    <section class="teaser media-inline" aria-labelledby="perspectives-title">
      <header class="teaser-h">
        <h2 id="perspectives-title">
          <span class="subtitle">Web Accessibility Perspectives: </span>
          <span class="title">Video Captions</span></h2>
      </header>
      <div class="media-wrapper">
        <iframe title="Video" width="560" height="315" src="https://www.youtube-nocookie.com/embed/iWO5N3n1DXU" allowfullscreen=""></iframe>
      </div>
      <p>Captions are the audio information in text that is synchronized with the audio and visual content. Captions are called "subtitles" in some regions. </p>
      <p>Video Captions are essential for people with disabilities and benefit everyone in a variety of situations.</p>
      <div class="button-group">
        <a class="button button-more" href="{{ '/perspective-videos/captions/' | relative_url }}"><span>More About Video Captions</span></a>
        <a class="button button-more button-secondary" href="{{ '/perspective-videos/' | relative_url }}"><span>See All Perspectives Videos</span></a>
      </div>
    </section>

    <section class="teaser resource-inline" aria-labelledby="media-title">
      <a class="teaser-c stealthy-link col1" href="{{ '/media/av/' | relative_url }}">
        <header class="teaser-h">
          <h2 id="media-title">
            <span class="subtitle">Featured Resource: </span>
            <span class="title">Making Audio and Video Media Accessible</span>
          </h2>
        </header>
        <img src="{{ "/content-images/news/2019-09-10-making-audio-and-video-media-accessible.png" | relative_url }}" alt="">
        <p>This media resource helps you understand and create captions/subtitles, audio description of visual information, descriptive transcripts, and sign language for media. It introduces user experiences and benefits to organizations.</p>
        <div>
          <span class="button">Making Audio and Video Media Accessible</span>
        </div>
      </a>
    </section>
<!--
    <section class="teaser resource-inline" aria-labelledby="translations-title">
      <a class="teaser-c stealthy-link col1" href="{{ '/translations/' | relative_url }}">
        <header class="teaser-h">
          <h2 id="translations-title">
            <span class="subtitle">Feature: </span>
            <span class="title">Translations</span>
          </h2>
        </header>
        <img src="{{ "/content-images/social-translations.png" | relative_url }}" alt="">
        <p>WAI accessibility resources are available in over 20 languages, with more coming. Translations are linked from the top of WAI website pages.</p>
        <div>
          <span class="button">All WAI Translations</span>
        </div>
      </a>
    </section>
-->
</div>
</div>

<div class="default-grid teaser teaser-sponsors">
  <div class="inner">
    <header class="teaser-h">
      <h2 class="title">Sponsors and Funders</h2>
    </header>
    <p>WAI is supported in part by the following organizations. Thank you!</p>
    <ul>
      <li><span><a href="https://www.hp.com">HP</a></span></li>
      <li><span><a href="http://www.ibm.com/able">IBM Corporation</a></span></li>
      <li><span><a href="https://www.fordfoundation.org/">Ford Foundation</a>, <a href="https://www.fordfoundation.org/work/challenging-inequality/technology-and-society/">Technology and Society Program</a><!-- (<a href="https://www.w3.org/WAI/about/projects/wai-core-ford/">WAI-Core Ford Project</a>)--></span></li>
      <li><span>US Department of Health and Human Services, <a href="https://www.acl.gov/about-acl/about-national-institute-disability-independent-living-and-rehabilitation-research">National Institute for Disability, Independent Living and Rehabilitation Research</a>, contract HHSP23301500054<!-- (<a href="https://www.w3.org/WAI/Core2015/">WAI-Core 2015, 2022 Project</a>)--></span></li>
    </ul>
    <p>WAI welcomes <a href="{{ '/about/sponsoring/' | relative_url }}">additional sponsors</a>.</p>
    <br><p id="netlify" style="font-size: small">Previews of this site are powered by <a href="https://www.netlify.com/" style="color:black">Netlify</a>. <!-- <a rel="me" href="https://w3c.social/@wai">Mastodon</a> --></p>
  </div>
</div>
