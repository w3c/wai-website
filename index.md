---
layout: home
title: "WAI Home"
nopagefooter: true
---

<section class="teaser featured grid-three-five" style="background-image: url({{ site.github.url }}/assets/images/teaser-image@1x.jpg); background-image: -webkit-image-set(url({{ site.github.url }}/assets/images/teaser-image@1x.jpg) 1x, url({{ site.github.url }}/assets/images/teaser-image@2x.jpg) 2x)">
    <a class="teaser-c stealthy-link col1" href="{{ site.github.url }}/tutorials/">
        <header class="teaser-h featured">
            <p class="subtitle">Featured Resource</p>
            <h2 class="title">
              {% include icon.html name="development" class="teaser-h-icon" %}
              Web Accessibility Tutorials
            </h2>
        </header>
        <p>
            Guidance on developing content that is accessible to people with disabilities.
        </p>
        <div>
            <span class="button">Read More</span>
        </div>
    </a>
</section>

<section class="teaser grid-five-three">
    <div class="col1 teaser-about grid-line-right">
        <header class="teaser-h">
            <h2>What is the W3C Web Accessibility Initiative (WAI)?</h2>
        </header>
        <p>[Placeholder short description] W3C’s WAI develops guidelines widely regarded as the international standard for Web accessibility support materials to help understand and implement Web accessibility resources, through international collaboration.</p>
    </div>
    <a href="{{site.github.url}}/tips/designing/#provide-sufficient-contrast-between-foreground-and-background" class="col2 stealthy-link teaser-tip">
        <header class="teaser-h">
            <h2>
              {% include icon.html name="lightbulb" class="tips" %}
              <span>Tip of the Week</span>
            </h2>
        </header>
        <p class="fakelink">Provide sufficient contrast between foreground and background{% include icon.html name="chevron-right" %}</p>
        <!-- <span class="fakelink">More Design Tips{% include icon.html name="chevron-right" %}</span> -->
    </a>
</section>

<div class="grid-4q teaser teaser-media">
    <div class="q1-start q2-end">
        <header class="teaser-h">
            <p class="subtitle">
                Web Accessibility Perspectives
            </p>
            <h2 class="title">Keyboard Compatibility</h2>
        </header>
        <p>All functionality must be usable with the keyboard. That is, users can access and move between links, buttons, forms, and other controls using the Tab key and other keystrokes. Websites should not require a mouse. Learn more about how Keyboard Compatibility is essential for people with disabilities and useful for all.</p>
        <div class="button-group">
            <a href="{{ site.github.url }}/perspective-videos/keyboard/" class="button button-more"><span>More About Keyboard Compatibility</span></a>
            <!-- <a href="{{ site.github.url }}/perspective-videos/"          class="button button-more button-secondary"><span>See All Perspectives Videos</span></a> -->
        </div>
    </div>
    <div class="q3-start q4-end media">
        <a href="{{site.github.url}}/perspective-videos/keyboard/" class="media-wrapper" style="display:block;">
            <div class="img" style="background-image: url('{{site.github.url}}/perspective-videos/img/keyboard.jpg'); background-size: stretch; background-position: center;">
                <span class="visuallyhidden">Keyboard Compatibility Video Page</span>
            </div>
        </a>
    </div>
</div>

<div class="grid-five-three">
    <div class="col12 teaser-h">
        <h2 class="title">Featured Resources</h2>
    </div>
</div>
<div class="grid-4q nogap teaser">
    <a href="{{site.github.url}}/plan/interim-repairs/" class="q1-start q1-end stealthy-link area-teaser">
        <header class="teaser-h">
            <h3 class="title">
                {% include icon.html name="loupe" class="teaser-h-icon full" %}
                <span class="subtitle">Help Getting Started</span><br>
                First Aid: Approaches for Interim Repairs
            </h3>
        </header>
        <p>If you need to urgently address accessibility in an existing web project, see Web Accessibility First Aid: Approaches for Interim Repairs.</p>
        <!-- <span class="fakelink">Learn more{% include icon.html name="chevron-right" %}</span> -->
    </a>
    <a href="{{site.github.url}}/fundamentals/accessibility-principles/" class="q2-start q2-end stealthy-link area-teaser">
        <header class="teaser-h">
            <h3 class="title">
                {% include icon.html name="design" class="teaser-h-icon full" %}
                <span class="subtitle">Learn the Basics</span><br>
                Web Accessibility Principles
            </h3>
        </header>
        <p>For an introduction to requirements for websites, web applications, browsers, and other tools, see Web Accessibility Principles.</p>
        <!-- <span class="fakelink">Learn more{% include icon.html name="chevron-right" %}</span> -->
    </a>
    <a href="https://www.w3.org/WAI/WCAG20/quickref/" class="q3-start q3-end stealthy-link area-teaser">
        <header class="teaser-h">
            <h3 class="title">
                {% include icon.html name="checkmark" class="teaser-h-icon full" %}
                <span class="subtitle">WCAG Checklist</span><br>
                How to Meet WCAG 2.0
            </h3>
        </header>
        <p>For a customizable checklist of Web Content Accessibility Guidelines requirements (success criteria), see How to Meet WCAG 2.0.</p>
        <!-- <span class="fakelink">Learn more{% include icon.html name="chevron-right" %}</span> -->
    </a>
    <a href="{{site.github.url}}/standards/wcag/21/" class="q4-start q4-end stealthy-link area-teaser">
        <header class="teaser-h">
            <h3 class="title">
                {% include icon.html name="development" class="teaser-h-icon full" %}
                <span class="subtitle">WCAG 2.1 Update</span><br>
                What About WCAG 2.1?
            </h3>
        </header>
        <p>To learn more about the status of the WCAG 2.1 Working Draft and plans for completing it in 2018, see What about WCAG 2.1?</p>
        <!-- <span class="fakelink">Learn more{% include icon.html name="chevron-right" %}</span> -->
    </a>
</div>

<div class="teaser news">
    <div class="grid-five-three">
        <div class="col12 teaser-h">
            <h2 class="title">News &amp; Announcements</h2>
        </div>
    </div>
    <div class="grid-five-three">
        <div class="col1 grid-line-right">
            <h3>News</h3>
            <article class="news-teaser">
                <h3 id="x20170912b">Wide review draft of WCAG 2.1</h3>
                <p>A new Working Draft of <a href="https://www.w3.org/TR/WCAG21/">Web Content Accessibility Guidelines 2.1</a> has been published. This draft has all the new Success Criteria that the Working Group plans to add to WCAG 2.1. After this publication, the Working Group will work to optimize the structure of the WCAG 2.1 requirements. To support this work, the Working Group requests wide review of this draft <strong>as soon as possible</strong> or by <strong>10 October 2017</strong>. The Working Group plans to publish another Working Draft in November that incorporates the above work plus addresses remaining public comments received on this and earlier drafts. (<span class="date">2017-September-12</span>)</p>
            </article>
            <article class="news-teaser">
                <h3 id="x20170912a">For Review: ACT Rules Format 1.0 Working Draft</h3>
                <p>An updated Working Draft of <a href=" https://www.w3.org/TR/act-rules-format/">Accessibility Conformance Testing (ACT) Rules Format</a> is available for review. This draft addresses all comments received on the previous draft, and is accompanied by fully- and semi-automated <a href="https://w3c.github.io/wcag-act-rules/">sample ACT Rules</a> that implement this rules format. Please submit any comments, especially comments related to implementation experience, as soon as possible, before <strong>10 October 2017</strong>. (<span class="date">2017-09-12</span>)</p>
            </article>
            <article class="news-teaser">
                <h3 id="x20170816a">WCAG 2.1 Working Draft for review</h3>
                <p>A new Working Draft of <a href="https://www.w3.org/TR/WCAG21/">Web Content Accessibility Guidelines 2.1</a> has been published. This is the last Working Draft before the Working Group stops adding new requirements to WCAG 2.1. A draft is planned for September that will comprise the final set of new success criteria. In November a draft will be published that incorporates those changes from the September draft, and is intended to be the final version beginning implementation testing.<strong>Please submit any comments related to potential new success criteria as soon as possible</strong>, before 13 September 2017. (<span class="date">2017-August-16</span>)</p>
            </article>
            <article class="news-teaser">
                <h3 id="x20170607a">Updated: Web Accessibility Laws and Policies Listing</h3>
                <p>The <a href="https://www.w3.org/WAI/Policy/Overview">Web Accessibility Laws and Policies</a> list has been updated and now includes an overview table with filters and sortable columns. Additional information is available in the <a href="https://lists.w3.org/Archives/Public/w3c-wai-ig/2017AprJun/0195.html">Web Accessibility Laws and Policies Listing Updated</a> e-mail. (<span class="date">2017-06-07</span>)</p>
            </article>
            <a href="{{site.github.url}}/news/" class="button button-more"><span>See All News</span></a>
        </div>
        <div class="col2">
            <h3>Announcements</h3>
            <ul class="nolist announcements-list">
                <li class="announce-box">Open position: <a href="#">Web Accessibility Engineer (China)</a></li>
                <li class="announce-box"><a href="#">Get WAI News</a></li>
            </ul>
            <h3>Upcoming Events, Meetings, and Presentations</h3>
            <div class="announce-box">
                <p>At AccessU in Austin, TX, USA in November 2018</p>
                <ul>
                    <li><a href="#">Catching Up with Accessibility: Beginner’s Basics</a></li>
                    <li><a href="#">Easy Checks for Web Accessibility: Get the Gist (No Experience Necessary)</a></li>
                    <li><a href="#">The WAI to Web Accessibility: An Interactive Tour Through Resources from the W3C Web Accessibility Initiative</a></li>
                </ul>
            </div>
            <div class="announce-box">
                <a href="#">See Past Events</a>
            </div>
        </div>
    </div>
</div>

<div class="default-grid teaser teaser-sponsors">
    <div class="inner">
        <header class="teaser-h">
            <h2 class="title">Sponsors and Funders</h2>
        </header>
        <p>WAI is supported in part by the following organizations. Thank you!</p>
        <ul class="">
            <li><a href="#">Adobe Systems</a></li>
            <li><a href="#">Deque Systems</a></li>
            <li><a href="#">ETS</a></li>
            <li><a href="#">HP Enterprise</a></li>
            <li><a href="#">HP Inc.</a></li>
            <li><a href="#">IBM Corporation</a></li>
            <li>US Department of Health and Human Services, <a href="#">National Institute for Disability</a>, Independent Living and Rehabilitation Research, contract HHSP23301500054 (<a href="#">WAI-Core 2015 Project</a>)</li>
            <li>US Access Board (<a href="#">WCAG TA Project</a>)</li>
        </ul>
        <p>WAI welcomes <a href="#">additional sponsors and contributors</a>.</p>
    </div>
</div>
