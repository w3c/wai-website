---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Dhruv，中年失聪学生"
nav_title: "Dhruv"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translations:
  last_updated: 2025-03-08

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-six/zh-hans  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-six/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-five/
  next: /people-use-web/user-stories/story-seven/

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

Dhruv 是一名失聪学生。由于他的第一语言或母语是手语，Dhruv 在阅读结构不清晰、布局和导航不一致的内容时遇到了困难。
在他所在的大学，许多讲座都是在网上发布的。如果视频不包含字幕，或者字幕有错误或落后于讲师所讲的内容，就会给 Dhruv 造成障碍。
闲暇时，Dhruv 喜欢用移动设备观看电影和电视节目。这些电影和电视节目必须包含准确的字幕，而且还要有颜色编码，这样他才能知道是谁在说话。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_6.mp4"
   captions="wai-videos/people-use-web/user-stories_6.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频：Dhruv，中年失聪学生"
   poster="content-images/people-use-web/user-stories/dhruv-video-frame.png"
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

## 关于 Dhruv

> 大多数人没有意识到手语是一种完全不同的语言。我可以阅读文本字幕，但由于文本字幕不是我的第一语言，我需要花费更多时间。字幕和手语不能互换。

Dhruv 天生失聪。他是一名成熟的学生，正在学习在线课程。虽然他能听到一些声音，但听力不足以理解语言。Dhruv 从小学习手语。手语是他的第一语言。因此，书面语言可能比较困难。他喜欢书面内容具有良好的结构和标题，尽量少用专业术语，这样更容易理解。

Dhruv 可以读唇语，但只有当他能看到说话者的全貌时才能有效地读唇语。即使在这种情况下，他也只能听懂几个单词，而不能仅仅依靠读唇来理解内容。

Dhruv 就读的大学提供手语翻译和沟通无障碍实时翻译 (CART)；但是，视频和其他媒体内容并不总是有字幕。该大学目前正在努力为所有课程内容添加字幕，但这是一个漫长的过程。随着字幕内容越来越多，Dhruv 发现远程完成学业变得更加容易。

Dhruv 利用大量空闲时间观看视频流服务上的流媒体内容。近年来，这些服务的字幕有所改进，这意味着他可以比以前观看更多的节目。如果字幕没有清晰的颜色编码来显示谁在说话，他就会遇到困难。自动字幕对他很有用，但如果有但不正确，也会给他带来麻烦。

## 障碍示例

不准确字幕
: **障碍：** “我喜欢我的课程被录制下来并可在线观看，但有时字幕并不能准确传达教师所说的话，尤其是在一些技术性较强的课程中。”
: **效果良好：** “当字幕员了解材料后，他们就不会漏字或出错。”

字幕设计
: **障碍：** “在线观看电影时，字幕经常会覆盖视频的部分内容。有时我会错过视频中的一些内容，有些背景使得字幕很难阅读。”
: **效果良好：** “字幕显示在屏幕底部，但我也可以根据需要移动字幕。字幕在纯色背景下显示，字幕和背景之间形成良好的对比。”

为发言人提供良好的拍摄位置
: **障碍：** “有些课程会录制教师的讲话。这很好，因为我擅长读唇语，但摄像头往往离得太远。”
: **效果良好：** “摄像机对准教师的脸部。”

没有音频替代品
: **障碍：** “在网上观看新闻节目时，没有一个选项可以让我听懂发言人在说什么。”
: **效果良好：** “提供音频替代方式，如手语、字幕或文本记录。如果镜头前有发言人，请对准发言人。”

## 使用的辅助技术和适应策略

* [字幕（感知）](/people-use-web/tools-techniques/perception/#captions)
* [文本记录（感知）](/people-use-web/tools-techniques/perception/#transcripts)
* [手语（感知）](/people-use-web/tools-techniques/perception/#sign)

## 相关WAI资源

* 视频: [视频字幕](/perspective-videos/captions/)
* 提示: [为多媒体创建文本记录和字幕](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* 提示: [在设计中加入图像和媒体替代方案](/tips/designing/#include-image-and-media-alternatives-in-your-design)
* 提示: [为自动启动的内容提供控制功能](/tips/designing/#provide-controls-for-content-that-starts-automatically)
* 提示: [编写适应用户技术的代码](/tips/developing/#write-code-that-adapts-to-the-users-technology)
* 检查: [多媒体（视频、音频）替代品](/test-evaluate/preliminary/#media)

## 相关准则

* [非文本内容的文本替代方案（可感知）](/fundamentals/accessibility-principles/#alternatives)
* [多媒体字幕和其他替代方案（可感知）](/fundamentals/accessibility-principles/#captions)
* [内容更容易被看到和听到（可感知）](/fundamentals/accessibility-principles/#distinguishable)
* [内容可读易懂（易懂）](/fundamentals/accessibility-principles/#readable)
* [与 “字幕 ”相关的成功标准](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions)


{% include excol.html type="start" id="video-transcript" %}

##  视频： Dhruv，中年失聪学生 {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_6"
  yt-id="jft__DXkPv8"
%}

_当前视频也可以在 W3C 服务器上找到: [视频: Dhruv，中年失聪学生 (文件格式: MP4, 文件大小: 307MB)](https://media.w3.org/wai/people-use-web/user-stories_6.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| 残疾人如何使用数字技术；Dhruv，中年失聪学生。 | 残疾人如何使用数字技术；Dhruv，中年失聪学生。|
| 你好！我叫D-H-R-U-V，Dhruv。我是失聪的。我能听到一些声音，但不足以理解语言。我使用英国手语--我用手语思考和做梦。 | 一名男子打着手语对着镜头讲话。 |
| 我最近注册了一个在线学位。我为我的课程安排了翻译员，他们可以为我翻译讲座、对话和语音。我需要一款视频会议应用程序，它具有 “固定 ”翻译员视频的功能，这样我就能随时看到他们。 | 这名男子正坐在办公桌前使用笔记本电脑。他正在使用视频会议应用程序参加在线会议。他在多个与会者和固定与会者视图之间交替切换。 |
| 有些讲座有人工字幕员打出的实时字幕。这比自动字幕更准确，因为自动字幕往往无法识别讲座中的专业术语。对于我们指定的视频，我依赖于优秀的字幕。这些字幕经过编辑，屏幕上出现的每句话都不会太长，而且与音频同步。我还经常发现自己需要调整字幕的文字大小和颜色，以便更好地阅读。有些应用程序还允许我将字幕移到视频的顶部或底部，这样字幕就不会碍事了。 | 这名男子正在媒体播放器中观看视频，并从语言选项列表中选择了英语字幕。然后，他选择了希望字幕显示方式的选项。 |
| 在某些情况下，我需要读唇语。例如，当我在没有翻译员或其他会手语的人的情况下接听计划外的视频会议时。多年来，我就是在这种情况下学会读唇语的，但这对我来说并不总是可靠的。我需要看到对方的嘴，让他们说清楚，看到他们的手势也有帮助。然而，这样做很累，我真的无法坚持太久。 | 这名男子正坐在办公桌前使用笔记本电脑。他正在使用一款视频会议应用程序参加在线会议。 |
| 我还使用聊天功能。有些聊天工具支持实时文本，而不仅仅是逐行文本信息。这样互动性更强。我可以与我的朋友进行文字对话，就像其他人用语音聊天一样。 | 这名男子坐在办公桌前，使用笔记本电脑通过聊天功能与其他人聊天。 |
| 当然，这些课程也伴随着大量的阅读。我对此没意见，除非文章过于复杂，没有列表和标题等结构。人们不知道，对我来说，阅读文章需要付出额外的努力，因为手语是我的母语。因此，和其他人一样，简洁明了的文字会更容易理解。 | 这名男子正坐在办公桌前使用笔记本电脑，阅读一篇复杂的长文。 |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。 | 该男子直接对着镜头说话 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}