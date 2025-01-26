---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Sophie，患有唐氏综合症的篮球迷"
nav_title: "Sophie"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translations:
  last_updated: 2025-01-08

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-five/zh-hans # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-five/  # Do not change this

navigation:
  previous: /people-use-web/user-stories/story-four/
  next: /people-use-web/user-stories/story-six/

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

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
  <p><strong>日期：</strong>2024年6月25日更新。初稿发布于1999年。<!-- CHANGELOG.--></p>
  <p><strong>编辑：</strong>Kevin White和Shadi Abou-Zahra。 以往编辑：Judy Brewer和Norah Sinclair。贡献者：Brent Bakken，Jade Matos Carew，Jayne Schurick，Michele Williams，和ACKNOWLEDGEMENTS中所列出的其他人员。</p>
  <p>在欧盟委员会（EC）共同资助的 <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide项目</a> 和 <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE项目</a> 的支持下，由教育及外联工作组 (<a href="https//www.w3.org/WAI/EO/">EOWG</a>) 开发。</p>
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

Sophie，一名患有唐氏综合症的母亲，她在一家篮球馆工作。她想成为一名高级助理，但她犹豫不决，
因为她必须学习新的网站和软件，而这些网站和软件可能不是用她能理解的语言编写的，例如使用陌生的单词以及缩略语和缩写。
前后一致、用通俗易懂的语言书写、小段落的信息都有助于Sophie理解书面内容。
工作之余，Sophie喜欢带孩子们去看篮球比赛，她发现使用场馆的应用程序买票更方便，因为选项更少，也不那么杂乱。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_5.mp4"
   captions="wai-videos/people-use-web/user-stories_5.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频：Sophie，患有唐氏综合症的篮球迷"
   poster="content-images/people-use-web/user-stories/sophie-video-frame.png"
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

## 关于Sophie

> 我喜欢购买主场比赛的门票，因为我对该网址非常熟悉。如果要购买客场比赛的门票，我就很难办了。所有不同的网站都有不同的方式。

Sophie天生患有唐氏综合症，在处理抽象概念、阅读和数学计算时会遇到障碍。
由于她独特的面部外貌和说话困难，很多人都低估了Sophie的智力和能力。
尽管表达有困难，但Sophie能理解很多东西。
她在职业学校学习了基本的计算机技能，从那时起，她就开始自学如何使用网站订购生活用品和维护自己的银行账户等。

Sophie热爱篮球。她曾在学校球队打球，现在在当地的一家俱乐部打球。
她是一个狂热的球迷，有空就会带孩子们去看比赛。对于Sophie来说，网上购票有时很困难。
所有场馆似乎都有不同的购票方式，有时会让人感到困惑。尤其是当场馆网站链接到一个看起来完全不同的独立网站时，就更难了。
尤其让她困惑的是，她点击了一个链接，结果却进入了一个PDF文件。
Sophie喜欢从一个版块到另一个版块、从一个页面到另一个页面都有一致“感觉”的网站。
这意味着整体布局保持相似的主题，导航的位置不会有太大的变化，而且当她点击一个链接进入另一个网站时会得到警告。

Sophie在一家篮球馆做兼职工作。她很想成为全职员工，但担心工作场所的专业术语会让她一开始难以接受。
用“通俗语言”写作确实很有帮助。如果能用更简单的术语或更短的句子来表达某件事情，她就更容易理解和使用这些信息。
此外，缩略语和缩写真的会拖慢她的速度，因为她不得不花时间去琢磨或去查找。
标题也是一个很大的帮助，因为它可以把页面分割开来，她可以把信息消化成小块，有点像页面大纲。
在浏览页面时，有好的链接焦点和链接样式可以帮助她知道自己在哪里，可以点击什么。

买手机对Sophie来说是件大事。她发现选项少、决定少的应用程序对她来说更清晰，也更容易使用。
使用手机购物对Sophie来说非常简单。能够找到她经常购买的东西对她帮助很大。

## 障碍示例

Breadcrumb trail
: **障碍：** "When I follow several links, sometimes I feel lost and I just want to get back to where I started."
: **效果良好：** "A breadcrumb at the top of the page that shows all of the pages I was on helps me feel oriented and lets me go back to a familiar page."

Plain language
: **障碍：** "Sometimes when I'm looking something up, I don't understand the words they use."
: **效果良好：** "If simpler words can be used, use them. If there aren't simpler words, give me a definition or point me to a glossary. Avoid the use of acronyms and abbreviations."

Clear link styling
: **障碍：** "Designers like to get fancy with links and sometimes it's hard to figure out the difference between the links and highlighted text or headings."
: **效果良好：** "Use blue underlined text for unvisited links and purple for visited links."

Forms
: **障碍：** "When I'm filling out forms, it's sometimes hard to know what they want in each field."
: **效果良好：** "Tell me what fields are required, put a simple and clear label on each form field, and give me an example of the format they want, especially for dates."

Timeouts
: **障碍：** "Because I'm a slow reader, it's frustrating when the website times out and I need to start all over."
: **效果良好：** "Give a warning before the website times out and offer an option to stay online."

Headings and Links
: **障碍：** "I get confused and overwhelmed when I'm on a page that has a lot of text."
: **效果良好：** "It helps when pages are broken up into sections with clear headings. Also, pictures or images that show what is being said help my understanding and they break up the page so it's not so overwhelming. In-page links, like a table of contents, can help me to know what is on the page so I can quickly get to the information I'm looking for."

Animation
: **障碍：** "Moving or animated text or pictures is really distracting. It keeps pulling my attention away from what I'm trying to do."
: **效果良好：** "If there has to be moving or animated content, let me stop it."

## Assistive technologies and adaptive strategies used

* [Easy-to-read text (Presentation)](/people-use-web/tools-techniques/presentation/#etr)
* [Pop-up and animations blockers (Presentation)](/people-use-web/tools-techniques/presentation/#blockers)
* [Progressive disclosure (Presentation)](/people-use-web/tools-techniques/presentation/#progressive)
* [Reading assistants (Presentation)](/people-use-web/tools-techniques/presentation/#reading)
* [Reduced interface (Presentation)](/people-use-web/tools-techniques/presentation/#reduced)
* [Accelerators (Input)](/people-use-web/tools-techniques/input/#accelerators)
* [Spelling and grammar tools (Input)](/people-use-web/tools-techniques/input/#lexical)
* [Consistency and predictability (Interaction)](/people-use-web/tools-techniques/navigation/#consistency)
* [Descriptive titles, headings, and labels (Interaction)](/people-use-web/tools-techniques/navigation/#labels)
* [Helpful error and success messages (Interaction)](/people-use-web/tools-techniques/navigation/#messages)
* [Multiple navigation mechanisms (Interaction)](/people-use-web/tools-techniques/navigation/#navigating)

## 相关WAI资源

* Use case: [George: A User who Works in a Supermarket and has Down Syndrome](https://www.w3.org/TR/coga-usable/#george-a-user-who-works-in-a-supermarket-and-has-down-syndrome)
* Video: [Understandable Content](/perspective-videos/understandable/)
* Tip: [Keep content clear and concise](/tips/writing/#keep-content-clear-and-concise)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Provide clear and consistent navigation options](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Tip: [Provide meaning for non-standard interactive elements](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* Tip: [Use heading and spacing to group related content](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)
* Check: [Moving, Flashing, or Blinking Content](/test-evaluate/preliminary/#moving)

## 相关准则

* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Users are helped to avoid and correct mistakes (Understandable)](/fundamentals/accessibility-principles/#tolerant)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

##  视频：Sophie，患有唐氏综合症的篮球迷 {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_5"
  yt-id="gmrnVAQuSI8"
%}

_当前视频也可以在 W3C 服务器上找到: [视频：Sophie，患有唐氏综合症的篮球迷 (文件格式: MP4, 文件大小: 282MB)](https://media.w3.org/wai/people-use-web/user-stories_5.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| 残疾人如何使用数字技术；Sophie，患有唐氏综合症的篮球迷。 | 残疾人如何使用数字技术；Sophie，患有唐氏综合症的篮球迷。 |
| 你好，我是Sophie！我患有唐氏综合症。我喜欢篮球！我在学校球队打球，现在我在体育馆工作。 | 一名女士直接对着镜头讲话。 |
| 在工作中，我们的团队使用一个应用程序。它有一个日历，记录了我们所有的训练和比赛。我的工作就是记录分数之类的东西。我还可以用它与教练和球员聊天，我们还可以用它交换照片和笑话。| 这位女士坐在健身房里使用手机。 |
| 有时，我需要花更多的时间来阅读，但这款应用程序真的很好用。事件或球员的名字位于顶部，因此我知道自己在应用程序中的位置。日历也非常清晰。顶部还显示了月份或星期的名称。我们试过的其他应用程序都太混乱了，我根本无法分辨自己在哪里，也不知道怎么回去。 | 这位女士坐在健身房里，使用手机上的篮球应用程序。 |
| 最大的问题是购买比赛门票。我尽量用这个应用程序买票，但有时不得不用其他应用程序买票。有些应用程序太难了。当我点击某样东西时，它会转到其他地方或打开另一个页面。或者，顶部没有蓝色方框，我不知道我在哪里，也不知道如何返回。有时花的时间太长，我不得不重新开始。真是麻烦。我希望买票能更容易些。| 这位女士正坐在健身房里，翻阅和使用手机上的票务应用程序。 |
| 我的梦想是成为一名高级助理。我知道我能行。有时我很难写出很长的东西，但我每次都会使用拼写检查器。当教练使用我已经认识的单词时，它会帮助我。否则，我就需要花更多的时间在字典中查找这些单词。| 这位女士正坐在办公桌前使用笔记本电脑。她正在阅读一篇文字，并使用词典功能查词。 |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。 | 该女士直接对着镜头说话。 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |

{% include excol.html type="end" %}
