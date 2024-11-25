---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ian，患有自闭症的数据录入员"
nav_title: "Ian"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translation:
  last_updated: 2024-11-25

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  - link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-two/zh-hans  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-two/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-one/
  next: /people-use-web/user-stories/story-three/

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this
# In the footer below:
# Do not change the dates
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>关于视频说明的注意事项： 本页面上的视频不包含同步语音描述，因为视觉效果只能说明音频，而不能提供其他信息。在这种情况下，音频描述对大多数人（包括无法看到视觉效果的人）来说，与其说是有用的，不如说是分散注意力的。视觉信息的描述可在带视觉描述的文本（“描述性誊本”）中找到。</p>
  <p><strong>日期:</strong> 2024年6月25日。初稿发布于1999年。<!-- CHANGELOG.--></p>
  <p><strong>编辑:</strong> Kevin White 和 Shadi Abou-Zahra. 以往编辑: Judy Brewer 和 Norah Sinclair. 贡献者: Brent Bakken, Jade Matos Carew, Jayne Schurick, Michele Williams, 和 ACKNOWLEDGEMENTS 中所列出的其他人员。</p>
  <p>在欧盟委员会（EC）共同资助的 <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide 项目</a> 和 <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE 项目</a> 的支持下，由教育及外联工作组 (<a href="https//www.w3.org/WAI/EO/">EOWG</a>) 开发。</p>
---

{::nomarkdown}

<style>
  #introduction p {
    font-size:120%;
    margin: 0.5em 0 0 0;
  }
  #introduction .box-i {
  }
  #introduction nav {
    border: 0;
    margin-top: 0;
  }
  #introduction nav header {
    padding: 8px 16px;
  }
  #introduction .video-card {
    margin: 1em;
    float: none !important;
    max-width: inherit !important;
    min-width: 45% !important;
  }
  #introduction .video-card p {
    font-size: 90%;
    margin: 0;
  }
  #introduction .video-card p:first-child {
    height: 190px;
  }
  #introduction img.video {
    border-radius: 5px;
    width: 300px;
    max-width: 300px;
  }
  #introduction .video-card .play-button {
    position: relative;
    top: -55px;
    left: -185px;
    width: 60px;
    height: 60px;
  }
  @media all and (min-width: 576px) {
    #introduction .box-i {
      display: flex;
      flex: 0 1;
    }
    #introduction .video-card .play-button {
      position: relative;
      top: -120px;
      left: 120px;
      width: 60px;
      height: 60px;
    }
  }
</style>

{% include_cached blockquote.html class="pull alt-2" content="<p>无障碍：以人为本</p>" %}

<aside id="introduction" class="box"><div class="box-i">
  <div>
{:/}

Ian是一名患有自闭症的数据科学家。一般来说，数字技术对Ian来说很容易，直到 
意想不到的事情发生，比如软件更新影响了他必须用到的部分系统。这让Ian非常焦虑。
工作之余，Ian喜欢烹饪，并使用他在网上找到的食谱视频。
无论是在公司还是在家里使用电脑，简洁的语言、一致的导航和页面布局很重要。
如果更新导致某些内容发生变化，最好告诉Ian发生了什么变化，并给他时间进行调整。
此外，像许多有认知和学习障碍的人一样，弹出式广告和自动播放的视频会让人感到沮丧和困惑。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>

  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_2.mp4"
   captions="wai-videos/people-use-web/user-stories_2.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频: Ian，患有自闭症的数据录入员"
   poster="content-images/people-use-web/user-stories/ian-video-frame.png"
%}

</div>

{% include_cached toc.html type="start" title="页面目录" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
    
</aside>
{:/}

**注:** 本用户故事是这类残疾人的一个例子。有相同残疾的其他人可能会有不同的经历。

## 关于Ian

> I find it hard to focus on busy pages. For example, lots of animations and videos, particarly ones that start without me doing anything are really frustrating.

Ian is autistic. His autism was identified at an early age because of delays in speech development. Ian received a lot of early childhood support, which helped him develop language and social skills. However, he still experiences some barriers with verbal communication, especially when experiencing anxiety.

Ian works part-time as a data scientist. Working with a computer is easy for Ian, although updates to the data entry application can cause him problems if there are significant changes to the interface. This can cause feelings of axiety for Ian if he doesn't know the change is coming and given time to adapt. It can also be difficult for Ian if someone asks for some work that causes him to use parts of the system that he is not as familiar with. It is important that systems use a consistent layout and navigation.

Ian finds interacting with colleagues via email easy. He has worked with his team to help them appreciate how using plain language and not introducing new metaphors can help him. Many have said they also prefer less corporate jargon as well. 

Ian has his own living space in his parent's home, including his own kitchen. He has been learning how to cook using online videos. However, vague language, metaphors, and implied content in some of the videos makes them to understand. He finds straightforward, practical, step-by-step videos really helpful. Some of the cooking sites Ian uses have a lot of adverts on them with banners and video, which can be distracting. This is particularly bad if there is audio as well, especially if Ian can't control it easily. It is best when websites don't automatically play audio and video adverts, or at least let Ian control them.

## Barrier examples

Non-literal text
: **Barrier:** "I have difficulty understanding metaphors, acronyms, abbreviations, and words that aren't used in their literal sense."
: **Works well:** "Websites that spell everything out and don't use metaphors are easier for me to understand."

Plain language
: **Barrier:** "Sites that use "fancy" language or long sentences to describe a simple concept are hard to understand."
: **Works well:** "I'm better at understanding the content when the authors just use plain language and simple sentences."

Consistent layout and navigation
: **Barrier:** "I get confused when I go to a different page on a website and the layout and navigation aren't the same."
: **Works well:** "When there is a consistent "look" to the pages on a site, I can learn where things are."

Heading structure
: **Barrier:** "Long pages that are not broken up into sections are hard to read and understand."
: **Works well:** "Descriptive headings that are styled like an outline help me to find what I want and better understand the content."

Moving or blinking content
: **Barrier:** "Moving or blinking content is distracting and I can't remember what I wanted to do.
: **Works well:** It's best when sites don't use moving or blinking content but if they do, let me turn it off."

## Assistive technologies and adaptive strategies used

* [Pop-up and animation blockers (Presentation)](/people-use-web/tools-techniques/presentation/#blockers)
* [Reading assistants (Presentation)](/people-use-web/tools-techniques/presentation/#reading)
* [Volume control (Presentation)](/people-use-web/tools-techniques/presentation/#volume)
* [Spelling and grammar tools (Input)](/people-use-web/tools-techniques/input/#lexical)
* [Word prediction (Input)](/people-use-web/tools-techniques/input/#prediction)

## Related WAI resources

* Use case: [Amy: An Autistic Computer Scientist](https://www.w3.org/TR/coga-usable/#amy-an-autistic-computer-scientist)
* Video: [Understandable Content](/perspective-videos/understandable/)
* Tip: [Use headings to convey meaning and structure](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Tip: [Provide clear instructions](/tips/writing/#provide-clear-instructions)
* Tip: [Keep content clear and concise](/tips/writing/#keep-content-clear-and-concise)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Provide clear and consistent navigation options](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Tip: [Provide easily identifiable feedback](/tips/designing/#provide-easily-identifiable-feedback)
* Tip: [Help users avoid and correct mistakes](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Check: [Headings](/test-evaluate/preliminary/#headings)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)

## Related principles

* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content does not cause seizures and physical reactions (Operable)](/fundamentals/accessibility-principles/#safe)
* [Text is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Ian, data entry clerk with autism {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
    video-id="user-stories_2"
    yt-id="bhV7KMfoyT4"
%}

_This video is also available on a W3C server: [Video: Ian, data entry clerk with autism (file format: MP4, file size: 291MB)](https://media.w3.org/wai/people-use-web/user-stories_2.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Ian, data scientist with autism.| How people with disabilities use digital technology; Ian, data scientist with autism. |
|Hello! I’m Ian. I’m autistic. I work for a software company three bus stops from my home. | A man speaks directly to the camera. |
| I’m a data scientist. I enjoy my work very much. Others find this work difficult because it’s quite technical. But for me, it’s really easy. | The man is sitting at a desk using a computer and talking to a woman, standing next to him, about what they can see on the monitor. |
| Except when something changes and I don’t have enough time to figure out what changed. Like, when I was trying to get to an online meeting and found that the buttons on the app changed. It was very stressful because I was worried about being late to the meeting. Apps that ask for permission before updating allow me to find a suitable time and adjust to the changes. | The man is sitting and working at his desk. A software update appears on his computer screen. |
| Sometimes I press the wrong thing and everything just changes and I don’t know how to go back. It makes me feel like I just can’t cope. I am trying to work, but I just can’t and I start to panic, and then I can’t even talk anymore. It’s very important to me when I can roll back and undo changes that I didn’t intend or expect to happen. | The man is participating in an online meeting using a video conferencing app. He alternates between single participant and multiple participant view. |
| It’s also really frustrating when I have to stop work because of an error message that doesn’t tell me what the error is. Error messages that just say “input error” are so useless. Often it’s something really simple, like I didn’t use the right format for the date. Why doesn’t it say that? | The man is working at his desk. He is trying to complete a form and receives an ‘input error’ message. |
| I love to cook when I’m not working. My friends love to eat what I cook because I find the best recipes! Some cooking websites and apps are easy to use — my favourite recipe sites list the exact ingredients and have step-by-step instructions. It’s easy to find the recipes using the tags and to follow them. | The man is preparing food in a kitchen and reading instructions from a tablet. |
| Unfortunately, I can’t use some recipe sites even though they have recipes I really want to try. Especially the ones where all sorts of videos start playing and pop-up windows appear without me pressing anything. I didn’t ask for this! These are overwhelming and aren’t the recipe. All I want is the recipe! | The man is having difficulty reading the instructions because of advertisements and pop-up windows. |
| Or, some sites use meaningless words and phrases and don’t even bother explaining them. I mean, what is a ‘scant cup of brown sugar’? ‘Scant’ could mean so many different things. Instead of ‘scant’ just say what you mean, like ‘a cooking cup filled just below the top’, or ‘not quite a full cup’. That would be easier to understand for everyone.  | The man is preparing food in a kitchen and reading instructions from a tablet. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |



{% include excol.html type="end" %}
