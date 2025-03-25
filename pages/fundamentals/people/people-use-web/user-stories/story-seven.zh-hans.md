---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Marta，失聪和失明的营销助理"
nav_title: "Marta"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translations:
  last_updated: 2025-03-22

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-seven/zh-hans  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-seven/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-six/
  next: /people-use-web/user-stories/story-eight/

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

Marta是一名营销助理，先天性极重度失聪，现在视力逐渐减退。
目前，她可以放大电脑屏幕来查看内容，但随着视力的不断衰退，她将需要学习新的与电脑互动的新方法。
Marta正在学习盲文，并希望使用新的盲文显示器进行阅读、书写和导航应用程序。
此外，盲文显示屏还包括一些常用的应用程序，如日历、电子邮件和笔记。这将方便她外出时使用。
Marta正在学习服装设计课程，她知道自己需要与学校讨论自己的特殊需求，因为她可能需要在盲文显示器上能够阅读课程内容。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_7.mp4"
   captions="wai-videos/people-use-web/user-stories_7.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频：Marta，失聪和失明的营销助理"
   poster="content-images/people-use-web/user-stories/marta-video-frame.png"
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

## 关于 Marta

> 我喜欢看视频，如果视频有字幕，我可以把字幕放大，这样就能跟上对话了。

Marta是一名营销助理，先天性极重度失聪。她用手语与人交流，曾就读于一所聋哑学校。
最近，Marta得知自己患有退行性疾病，导致视力逐渐下降。随着视力的衰退，Marta需要学习与电脑互动的新方法。
幸运的是，如果编码得当，Marta可以通过调整大小和对比度设置来访问在线内容，而她正变得越来越依赖这两点。

Marta一直对服装很感兴趣，她的视野不断衰退，这更加激发了她对鲜艳色彩、夸张造型和独特纹理的热情。
她已经开始在当地大学选修时装设计课程，并对学习时装史感到非常兴奋。
Marta在与其他听力受损的同龄人和当地社区交流时，一直依靠字幕或语音转文字应用程序。
她知道自己必须与残障办公室联系，申请手语翻译。
但是，她不知道由于最近的诊断，她现在可能还需要哪些额外的资源。
她希望能讨论有多少课程材料是用字幕和文本记录呈现的。

Marta目前正在学习盲文，并正在尝试使用盲文显示器来访问她当前的技术。
她很高兴得知盲文显示器包括日历、电子邮件、网页浏览和笔记功能，因此她可以拥有一个一体化设备。
这将减少Marta必须携带的设备数量，以便她可以安全地在校园中穿行。
她希望能够独立浏览大学平台以访问课程材料、与教授交流并提交作业，而不必在无法直观访问信息时依赖他人。
到目前为止，Marta使用盲文显示器的成功程度参差不齐。
当内容经过编码以便设备可以识别时，它效果很好。
不幸的是，在一个案例中，因为按钮的编码不正确导致她无法提交表单。

在社交方面，Marta喜欢和朋友们一起外出。
她不能开车，所以需要依赖公共交通。这对她来说并不新鲜，因为她住在市区。
然而，她知道平台和时间总会在最后一刻发生变化。她担心收到这些信息的提醒。
她已经很难读懂时间，而且网站没有针对移动设备进行优化，缩放时效果也不好。
她有兴趣定制她的设备，这样她就可以利用触觉功能来接收生活中各个方面的通知和警报。
Marta渴望了解可用的无障碍技术，这样她就可以继续成为一名成功的时装设计师。

## 障碍示例

一致的布局
: **障碍：** "我访问的一些购物网站不同部分的样式完全不同。我花了好一会儿才弄清楚每个部分的内容，这真的很令人沮丧。"
: **效果良好:** "我使用的购物网站的所有部分都有相同的布局，这使我可以轻松地浏览各个页面。"

没有文本记录
: **障碍：** "有些视频仅有嵌入字幕，我无法轻松访问。"
: **效果良好:** "有文本记录很有帮助。有了盲文设备，我读起来就容易多了。"

非无障碍友好的CAPTCHA
: **障碍：** "如果某个网站的CAPTCHA使用图像或音频，那么我就无法使用它。我可能需要很长时间才能弄清楚图像，而且我听不到音频。"
: **效果良好:** "没有CAPTCHA是最好的，但有时有些简单的事情则可以问一个非常简单的问题"

键盘导航
: **障碍：** "当我Tab到日期输入字段后，弹出一个日期选择器，但是我无法使用这个日期选择器因为它无法使用键盘操作。"
: **效果良好:** "我可以使用键盘Tab到不同的日期或者我可以在不使用日期选择器时输入日期。"

页面其他地方发生变更
: **障碍：** "我需要将我以前的地址添加到申请表中，但当我按下“添加新地址”按钮时什么也没发生。我不知道新地址字段可能添加到页面的哪个位置。"
: **效果良好:** "当我按下“添加新地址”按钮时，我会被带到刚刚添加到按钮上方的表单字段。"

## 使用的辅助技术和适应策略

* [盲文 (感知)](/people-use-web/tools-techniques/perception/#braille)
* [可刷新的盲文显示器 (感知)](/people-use-web/tools-techniques/perception/#braille_display)
* [屏幕阅读器 (感知)](/people-use-web/tools-techniques/perception/#sr)
* [文字转语音 (感知)](/people-use-web/tools-techniques/perception/#tts)
* [文本记录 (感知)](/people-use-web/tools-techniques/perception/#transcripts)
* [自定义字体和颜色（演示）](/people-use-web/tools-techniques/presentation/#style)
* [屏幕放大（演示）](/people-use-web/tools-techniques/presentation/#display)
* [屏幕放大镜（演示）](/people-use-web/tools-techniques/presentation/#magnifiers)
* [描述性标题、小标题和标签（交互）](/people-use-web/tools-techniques/navigation/#labels)
* [有用的错误和成功消息（交互）](/people-use-web/tools-techniques/navigation/#messages)
* [键盘导航（交互）](/people-use-web/tools-techniques/navigation/#keyboard)
* [跳过链接（互动）](/people-use-web/tools-techniques/navigation/#skip)

## 相关WAI资源

* 视频: [视频字幕](/perspective-videos/captions/)
* 提示: [为多媒体创建文本记录和字幕](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* 提示: [尽可能避免使用CAPTCHA](/tips/developing/#avoid-captcha-where-possible)
* 提示: [确保所有交互元素都可以通过键盘访问](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* 提示: [提供清晰一致的导航选项](/tips/designing/#provide-clear-and-consistent-navigation-options)
* 检查: [图像文本替代（“替代文本”）](/test-evaluate/preliminary/#images)
* 检查: [表单，标签和错误信息](/test-evaluate/preliminary/#forms)
* 检查: [多媒体（视频、音频）替代品](/test-evaluate/preliminary/#media)
* 检查: [基本结构检查](/test-evaluate/preliminary/#structure)

## 相关准则

* [非文本内容的文本替代（可感知）](/fundamentals/accessibility-principles/#alternatives)
* [音频和视频内容的替代品（可感知）](/fundamentals/accessibility-principles/#captions)
* [内容可以以不同的方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [内容更容易看到和听到（可感知）](/fundamentals/accessibility-principles/#distinguishable)
* [用户有足够的时间阅读和使用内容（可操作）](/fundamentals/accessibility-principles/#time)
* [用户可以轻松导航、查找内容并确定自己所在的位置（可操作）](/fundamentals/accessibility-principles/#navigable)
* [内容以可预测的方式出现和运行（可理解）](/fundamentals/accessibility-principles/#predictable)
* [内容与当前和未来的用户工具兼容（稳健性）](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

## 视频：Marta，失聪和失明的营销助理 {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_7"
  yt-id="llTnoiq2Mow"
%}

_当前视频也可以在 W3C 服务器上找到: [视频：Marta，失聪和失明的营销助理 (文件格式: MP4, 文件大小: 360MB)](https://media.w3.org/wai/people-use-web/user-stories_7.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| 残障人士如何使用数字技术。Marta，失聪和失明的营销助理。 | 残障人士如何使用数字技术。Marta，失聪和失明的营销助理。|
| 大家好！我是Marta，我是我所在的失聪人学校的一名营销助理。我失聪且失明。我生来就是失聪的，且视力正在逐渐下降，这意味着我仍然可以看见很大很近的东西，但每年能看见的东西越来越少。 | 一名妇女直接对着镜头打手势。 |
| 作为一名失聪儿童，我很早就学会了手语。这就是为什么技术对我如此重要，它让我能够与更多的人交流。在家里，我有一台电脑，它可以将我的文档放大20倍。我有一个大屏幕，但仍然只能看到屏幕的一小部分，甚至文档的一小部分，因为这就像透过放大镜看一样。我可以找到标题和部分看起来不同的文档。例如，这份简报的标题颜色与正文不同，这样我就能更容易识别它们。| 这位女士和另一位男士坐在沙发上，他们正在用手语交谈。然后这位女士坐在桌前，滚动浏览网站上的放大选项。她正在使用鼠标，并通过放大镜查看显示器。 |
| 哦，我也在学使用盲文。盲文是用手指阅读的那些点，我有一个非常酷的设备，叫做“可刷新盲文显示器”，这是一个小设备，我可以随身携带，不像我的电脑。它有电子邮件、网络和聊天应用程序，有些还有一个特殊的键盘可以输入盲文。我在设备上连续阅读盲文字符，我正在慢慢习惯。一开始学习使用新东西总是很难，但我阅读和输入盲文的能力越来越好。| 这位女士坐在桌前，使用可刷新盲文显示器。|
| 但并非所有网站和应用程序都能在放大后或在我的盲文显示器上很好地工作。比如当我需要查找公交车时刻表来和朋友见面时，当我在手机上放大那个表格时，它就不能很好地工作。更不用说用盲文阅读了。我不知道自己在哪一行或哪一列，它只是跳来跳去！这让我很紧张，因为出门在外时，我无法轻易向周围的人寻求帮助，所以我一直在学习如何发声，并要求公司提供无障碍更友好的网站和应用程序，以帮助我保持独立。| 这位女士坐在公交车站，看着手机上放大的公交时刻表应用程序。她把手机靠近脸。|
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。| 该女士直接对着镜头说话 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}