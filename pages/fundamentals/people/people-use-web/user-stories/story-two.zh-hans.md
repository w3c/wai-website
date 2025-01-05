---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ian，患有自闭症的数据录入员"
nav_title: "Ian"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translation:
  last_updated: 2024-12-18

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
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

Ian是一名患有自闭症的数据科学家。一般来说，数字技术对Ian来说很容易，
直到意想不到的事情发生，比如软件更新影响了他必须用到的部分系统。这让Ian非常焦虑。
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

> 我发现在繁忙的页面上很难集中注意力。例如，大量的动画和视频，尤其是在我什么都没做的情况下就开始播放的动画和视频，真的很让人沮丧。

Ian患有自闭症。由于语言发育迟缓，他在很小的时候就被发现患有自闭症。
Ian接受了很多早期儿童支持，这有助于他发展语言和社交技能。但是，他在语言交流方面仍然存在一些障碍，尤其是在焦虑的时候。

Ian是一名兼职的数据科学家。使用电脑对Ian来说很容易，但如果数据录入应用程序的界面发生重大变化，就会给他带来麻烦。
如果Ian不知道即将发生的变化，也没有时间去适应，就会产生焦虑感。
如果有人要求Ian做一些工作，导致他需要使用他不熟悉的系统部分，这也会给Ian带来困难。
系统使用一致的布局和导航，这一点很重要。

Ian认为通过电子邮件与同事互动很容易。他与他的团队合作，帮助他们理解使用通俗语言和不引入新的隐喻对他的帮助。很多人都说，他们也喜欢少用企业术语。

Ian在父母家中有自己的生活空间，包括自己的厨房。他一直在通过在线视频学习如何烹饪。
然而，一些视频中含糊的语言、隐喻和暗示的内容让他难以理解。
他认为直接、实用、循序渐进的视频很有帮助。
Ian使用的一些烹饪网站上有很多广告横幅和视频，这可能会分散他的注意力。
如果还有音频，情况就更糟糕了，尤其是Ian不容易控制的时候。
网站最好不要自动播放音频和视频广告，或者至少让Ian自己控制。

## 障碍示例

非字面文本
: **障碍:** “我很难理解隐喻、缩略语、缩写以及非字面意义上的词语。”
: **效果良好:** “对我来说，那些把所有东西都说清楚并且不使用比喻的网站更容易理解。”

平实的语言
: **障碍:** “使用 “华丽 ”语言或长句来描述一个简单概念的网站很难让人理解。”
: **效果良好:** ”如果作者只是使用平实的语言和简单的句子，我就能更好地理解内容。“

一致的布局和导航
: **障碍:** “当我进入一个网站的不同页面时，如果布局和导航不一样，我就会感到困惑。”
: **效果良好:** “当网站页面的 “外观 ”一致时，我就能知道东西在哪里。”

标题结构
: **障碍:** “长篇大论，不分章节，难以阅读和理解。”
: **效果良好:** “像提纲一样的描述性标题有助于我找到想要的内容，并更好地理解内容。”

移动或闪烁的内容
: **障碍:** “移动或闪烁的内容会分散我的注意力，让我想不起来要做什么。”
: **效果良好:** “网站最好不要使用移动或闪烁的内容，但如果使用，请让我关闭。”

## 使用的辅助技术和适应策略

* [弹出窗口和动画阻止程序 (呈现)](/people-use-web/tools-techniques/presentation/#blockers)
* [阅读助理 (呈现)](/people-use-web/tools-techniques/presentation/#reading)
* [音量控制 (呈现)](/people-use-web/tools-techniques/presentation/#volume)
* [拼写和语法工具 (输入)](/people-use-web/tools-techniques/input/#lexical)
* [词语预测 (输入)](/people-use-web/tools-techniques/input/#prediction)

## 相关WAI资源

* 使用案例: [Amy：一名自闭症计算机科学家](https://www.w3.org/TR/coga-usable/#amy-an-autistic-computer-scientist)
* 视频: [易于理解的内容](/perspective-videos/understandable/)
* 提示: [使用标题表达含义和结构](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* 提示: [使链接文本具有意义](/tips/writing/#make-link-text-meaningful)
* 提示: [提供清晰的指示](/tips/writing/#provide-clear-instructions)
* 提示: [保持内容清晰简洁](/tips/writing/#keep-content-clear-and-concise)
* 提示: [确保交互元素易于识别](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* 提示: [提供清晰和一致的导航选项](/tips/designing/#provide-clear-and-consistent-navigation-options)
* 提示: [提供易于识别的反馈信息](/tips/designing/#provide-easily-identifiable-feedback)
* 提示: [帮助用户避免和纠正错误](/tips/developing/#help-users-avoid-and-correct-mistakes)
* 检查: [标题](/test-evaluate/preliminary/#headings)
* 检查: [表单，标签和错误](/test-evaluate/preliminary/#forms)

## 相关准则

* [内容可通过不同方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [内容容易看到和听到（可感知）](/fundamentals/accessibility-principles/#distinguishable)
* [用户可以轻松导航、查找内容并确定自己的位置（可操作）](/fundamentals/accessibility-principles/#navigable)
* [内容不会导致癫痫发作和身体反应（可操作）](/fundamentals/accessibility-principles/#safe)
* [文字可读易懂（可理解）](/fundamentals/accessibility-principles/#readable)
* [内容以可预测的方式出现和运行（可理解）](/fundamentals/accessibility-principles/#predictable)

{% include excol.html type="start" id="video-transcript" %}

##  视频: Ian，患有自闭症的数据录入员 {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
    video-id="user-stories_2"
    yt-id="bhV7KMfoyT4"
%}

_当前视频也可以在 W3C 服务器上找到: [视频: Ian，患有自闭症的数据录入员 (文件格式: MP4, 文件大小: 291MB)](https://media.w3.org/wai/people-use-web/user-stories_2.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| 残疾人如何使用数字技术；Ian，患有自闭症的数据科学家。| 残疾人如何使用数字技术；Ian，患有自闭症的数据科学家。 |
| 你好，我叫Ian。我有自闭症。我在一家软件公司工作，离家有三个公交站。 | 一名男子直接对着镜头讲话。 |
| 我是一名数据科学家。我非常喜欢我的工作。其他人觉得这项工作很难，因为技术性很强。但对我来说，这真的很简单。 | 这名男子正坐在办公桌前使用电脑，与站在他旁边的一名女子谈论他们在显示器上看到的内容。|
| 除了有什么东西变了，而我又没有足够的时间弄清楚是什么变了的情况。比如，当我试图参加一个在线会议时，发现应用程序上的按钮变了。这让我非常紧张，因为我担心会议会迟到。在更新前征求许可的应用程序可以让我找到一个合适的时间，并适应变化。 | 这名男子正坐在办公桌前工作。他的电脑屏幕上出现了一个软件更新提示。 |
| 有时我按错了按钮，一切就都变了，我不知道该怎么回去。这让我觉得自己无法承受。我想努力工作，但就是做不到，我开始恐慌，然后我甚至无法再说话。对我来说，能够回退并撤销那些我并不打算或预计会发生的更改非常重要。 | 这名男子正在使用视频会议应用程序参加在线会议。他在单人和多人视图之间交替切换。 |
| 当我因为一条错误信息而不得不停止工作时，我也会感到非常沮丧，因为这条错误信息并没有告诉我到底出了什么错。只说 “输入错误 ”的错误信息太没用了。通常情况下，问题很简单，比如我没有使用正确的日期格式。为什么不直接说那个？ | 这名男子正在办公桌前工作。他正试图提交一份表单，接着收到了一条“输入错误”信息。 |
| 业余时间，我喜欢做饭。我的朋友们喜欢吃我做的菜，因为我总会找到最好的食谱！有些烹饪网站和应用程序很容易使用。我最喜欢的食谱网站列出了准确的配料，并有分步说明。使用标签很容易找到食谱，也很容易照着做。 | 这名男子正在厨房准备食物，并阅读平板电脑上的说明。 |
| 遗憾的是，有些食谱网站即使有我很想尝试的食谱，我也无法使用。特别是那些开始播放各种视频的网站，我什么都不按就会出现弹出窗口。我可没要求这样！这些视频让人目不暇接，而且不是菜谱。我想要的只是菜谱！ | 由于广告和弹出式窗口的存在，该男子在阅读说明时遇到了困难。 |
| 或者，有些网站使用毫无意义的单词和短语，甚至懒得解释。我的意思是，什么是 “一小杯红糖”？Scant "有很多不同的意思。与其说 “少”，不如说出你的意思，比如 “烹饪杯中的糖刚刚没过杯口”，或者 “还没满一杯”。这样大家就更容易理解了。  | 这名男子正在厨房准备食物，并阅读平板电脑上的说明。 |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。 | 该男子直接对着镜头说话。 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}
