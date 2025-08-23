---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Lexie，无法区分某些颜色（色盲）的网购者"
nav_title: "Lexie"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translation:
  last_updated: 2024-12-29

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-four/zh-hans # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-four/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-three/
  next: /people-use-web/user-stories/story-five/

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

Lexie是一位喜欢网上购物和梦幻足球的老年人。Lexie不能很好地看到所有颜色。仅依靠颜色的网站和应用程序会给Lexie带来障碍。仅使用颜色来突出显示文字和指示图表中的区域也会造成障碍，但幸运的是，她的同事们已经学会了在颜色之外使用其他视觉标记的方法。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_4.mp4"
   captions="wai-videos/people-use-web/user-stories_4.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频: Lexie，无法区分某些颜色（色盲）的网购者"
   poster="content-images/people-use-web/user-stories/lexie-video-frame.png"
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

## 关于Lexie

> 有时，完成结账过程很麻烦，因为如果我忽略了一个必填字段，就会收到红色的错误或警告信息，而且我很难看到这些信息。

Lexie患有先天性绿色盲和红色盲（通常被称为 “色盲”），她很难区分红色、绿色、橙色和棕色的物品，在她看来，所有这些颜色看起来都是浑浊的棕色。

Lexie发现，网上买衣服其实比去实体店更有优势。除了展示各种颜色的商品图片外，她最喜欢的网站还附有颜色标签，让搭配变得更容易。不过，有时在结账时，必填项和错误信息会用红色轮廓标出，Lexie必须特别注意才能识别。不过，她注意到最近很多网站在使用辅助标记方面做得越来越好，比如在必填项上使用星号，在错误信息上使用粗体字或使用箭头指向到错误信息。这确实有很大帮助。

让人惊讶的是，Lexie还是一个超级足球迷，多年来一直与家人和同事一起玩梦幻足球。有时，这些网站使用颜色来区分球队、球员位置以及是否有球员入选她的球队会有问题。因此，她倾向于选择某些不使用颜色作为唯一表示对比赛很重要的信息的梦幻足球应用程序。这意味着她必须努力说服朋友们使用同一个应用程序进行游戏。

在享受乐趣的同时，Lexie仍然关注着最新的新闻和事件。如果与文章相关的图表能用其他视觉技术（而不仅仅是颜色）显示数据，她就能更轻松地获取信息。例如，如果饼状图还带有图案和文字标签，她就可以更轻松、更快速地阅读信息，而不会感到沮丧或完全被遗漏。

## 障碍示例

仅使用颜色
: **障碍：** “当我选择一个颜色时，没有任何东西可以帮助我区分颜色。”
: **效果良好：** “颜色选择会显示描述性名称。好的网站会有一个链接，链接到对颜色稍长的描述。”

仅使用颜色代表错误信息
: **障碍：** “在线填写表单时，必填字段和错误用红色轮廓标出。”
: **效果良好：** “除颜色外，还使用星号或文字来标识必填字段和错误。”

在游戏中仅使用颜色
: **障碍：** “当我玩在线游戏时，敌人用红圈标记，朋友用绿圈标记，我分不清楚。”
: **效果良好：** “敌人也会被标上符号或使用红色三角形，这样我就能很容易地识别他们。”

图表标签
: **障碍：** “当我阅读带有数据图表的新闻文章时，我看不懂图表，因为各栏标注不清楚。”
: **效果良好：** “直接标注各栏或使用纹理以及颜色。”

## 使用的辅助技术和适应策略

* [定制字体和颜色（呈现）](/people-use-web/tools-techniques/presentation/#style)

## 相关WAI资源

* 视频: [具有良好对比度的颜色](/perspective-videos/contrast/)
* 视频: [可定制文本](/perspective-videos/customizable/)
* 提示: [在背景和前景之间提供足够的对比度](/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* 提示: [不要只用颜色来表达含义](/tips/designing/#dont-use-color-alone-to-convey-information)
* 提示: [确保交互元素易于识别](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* 检查: [对比度（“色彩对比度”）](/test-evaluate/preliminary/#contrast)
* 检查: [表单，标签和错误信息](/test-evaluate/preliminary/#forms)

## 相关准则

* [内容可通过不同方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [内容容易看到和听到（可感知）](/fundamentals/accessibility-principles/#distinguishable)
* [内容与当前和未来的用户工具兼容（稳健性）](/fundamentals/accessibility-principles/#compatible)
* [与 “对比度 ”相关的成功标准](https://www.w3.org/WAI/WCAG21/quickref/?tags=contrast)

{% include excol.html type="start" id="video-transcript" %}

## 视频: Lexie，无法区分某些颜色（色盲）的网购者 {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_4"
  yt-id="eh091V45uqc"
%}

_当前视频也可以在 W3C 服务器上找到: [视频: Lexie，无法区分某些颜色（色盲）的网购者 (文件格式: MP4, 文件大小: 274MB)](https://media.w3.org/wai/people-use-web/user-stories_4.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| 残疾人如何使用数字技术；Lexie，无法区分某些颜色（色盲）的网购者。 | 残疾人如何使用数字技术；Lexie，无法区分某些颜色（色盲）的网购者。 |
| 你好，我叫Lexie。我患有先天性绿色盲和红色盲，也就是人们常说的 “色盲”。 | 一名女士直接对着镜头讲话。 |
| 我很难区分红色、绿色、橙色和棕色，所有这些颜色在我看来都是浑浊的棕色。在商店里，我常常分不清两只鞋子或两件衬衫的颜色。我喜欢网上购物，因为除了显示颜色外，他们还使用颜色的名称，这对我来说往往更容易。 | 这位女士坐在沙发上使用平板电脑，在一家网店中查看不同颜色的 T 恤。 |
| 遗憾的是，并非所有网店都能为我提供无障碍的结账体验。通常情况下，注册或结账表单会显示 “红色区域为必填项”。唉！大多数时候，如果只用颜色标注，我根本分不清哪些是必填项。好的网店要么在字段旁标明 “必填 ”或小星星，要么在我可以跳过的字段旁标明 “可选”。 | 这位女士正坐在沙发上使用平板电脑，试图完成一份在线表格，其中一些部分用红色标注。 |
| 对于其他网站和应用程序来说，不只依赖颜色也很重要。例如，我最喜欢的梦幻足球应用程序在球员的球衣上除了颜色外，还有每个球队的标志。这可以帮助我更快地发现我所在球队的球员，而不仅仅是通过阅读每个球员下面的名字。 | 这位女士坐在沙发上使用手机，正在查看一个梦幻足球应用程序。 |
| 工作中也会出现颜色问题。例如，当我的同事在不使用注释功能的情况下突出显示文档中的文字时。注释功能除了高亮显示外，还能勾勒出标记文字的轮廓。另一个例子是图表没有符号以及线条和条形图的颜色，我无法仅从颜色上识别它们。我的团队通常很注意这一点，但有时与我们合作的供应商并不注意。 | 这位女士坐在沙发上，正在使用平板电脑阅读一份报告，报告中显示了突出显示的单词和短语以及饼状图。 |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。 | 该女士直接对着镜头说话。 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | Web 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}
