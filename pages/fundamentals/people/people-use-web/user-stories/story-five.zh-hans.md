---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Sophie，患有唐氏综合症的篮球迷"
nav_title: "Sophie"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translations:
  last_updated: 2025-01-27

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

面包屑路径
: **障碍：** “当我追踪几个链接时，有时会感到迷失方向，只想回到起点。”
: **效果良好：** “页面顶部的 “面包屑 ”显示了我曾经浏览过的所有页面，这有助于我确定方向，并让我回到熟悉的页面。”

通俗易懂的语言
: **障碍：** “有时我在查找资料时，不明白他们使用的词语。”
: **效果良好：** “如果可以用更简单的词，就用它们。如果没有更简单的词，请给我一个定义或指给我一个词汇表。避免使用缩略语和简称。”

清楚的链接样式
: **障碍：** “设计师喜欢在链接上做文章，有时很难弄清链接与高亮文字或标题之间的区别。”
: **效果良好：** “未访问链接使用蓝色下划线文本，已访问链接使用紫色下划线文本。”

表单
: **障碍：** “当我填写表单时，有时很难知道每个字段中须要填些什么。”
: **效果良好：** “告诉我哪些字段是必填字段，给每个表单字段贴上简单明了的标签，并举例说明他们想要的格式，尤其是日期格式。”

超时
: **障碍：** “因为我阅读速度慢，所以当网站超时时，我需要重新开始，这让我很沮丧。”
: **效果良好：** “在网站超时前发出警告，并提供继续在线的选项。”

标题和链接
: **障碍：** “当我看到有大量文字的页面时，我会感到困惑和不知所措。”
: **效果良好：** “如果页面分成几个部分，并有明确的标题，就会有所帮助。此外，图片或图像也有助于我理解所讲的内容，它们将页面分割开来，使我不至于不知所措。页面内的链接，如目录，可以帮助我了解页面上的内容，从而快速找到我想要的信息。”

动画
: **障碍：** “移动或动画文本或图片真的会让人分心。它总是把我的注意力从我要做的事情上拉开。”
: **效果良好：** “如果一定要有移动或动画内容，请提供可以暂停动画的选项。”

## 使用的辅助技术和适应策略

* [易读文本（呈现）](/people-use-web/tools-techniques/presentation/#etr)
* [弹窗和动画屏蔽器（呈现）](/people-use-web/tools-techniques/presentation/#blockers)
* [渐进式信息披露（呈现）](/people-use-web/tools-techniques/presentation/#progressive)
* [阅读助理（呈现）](/people-use-web/tools-techniques/presentation/#reading)
* [减少界面（呈现）](/people-use-web/tools-techniques/presentation/#reduced)
* [加速器（输入）](/people-use-web/tools-techniques/input/#accelerators)
* [拼写和语法工具（输入）](/people-use-web/tools-techniques/input/#lexical)
* [一致性和可预测性（交互）](/people-use-web/tools-techniques/navigation/#consistency)
* [描述性标题、小标题和标签（交互）](/people-use-web/tools-techniques/navigation/#labels)
* [有用的错误和成功信息（交互）](/people-use-web/tools-techniques/navigation/#messages)
* [多种导航机制（交互）](/people-use-web/tools-techniques/navigation/#navigating)

## 相关WAI资源

* 用例： [George：一名在超市工作并患有唐氏综合症的用户](https://www.w3.org/TR/coga-usable/#george-a-user-who-works-in-a-supermarket-and-has-down-syndrome)
* 视频： [可理解的内容](/perspective-videos/understandable/)
* 提示： [保持内容简洁明了](/tips/writing/#keep-content-clear-and-concise)
* 提示： [确保交互元素易于识别](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* 提示： [提供清晰一致的导航选项](/tips/designing/#provide-clear-and-consistent-navigation-options)
* 提示： [为非标准交互元素提供意义](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* 提示： [使用标题和间距对相关内容进行分组](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* 检查： [表单，标签和错误信息](/test-evaluate/preliminary/#forms)
* 检查： [移动、闪烁或闪烁的内容](/test-evaluate/preliminary/#moving)

## 相关准则

* [内容可通过不同方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [用户有足够的时间阅读和使用内容（可操作）](/fundamentals/accessibility-principles/#time)
* [用户可以轻松导航、查找内容并确定自己的位置（可操作）](/fundamentals/accessibility-principles/#navigable)
* [内容可读易懂（可理解）](/fundamentals/accessibility-principles/#readable)
* [内容以可预测的方式出现和运行（可理解）](/fundamentals/accessibility-principles/#predictable)
* [帮助用户避免和纠正错误（可理解）](/fundamentals/accessibility-principles/#tolerant)
* [内容与当前和未来的用户工具兼容（稳健性）](/fundamentals/accessibility-principles/#compatible)

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
| 你好，我是Sophie！我患有唐氏综合症。我喜欢篮球！我之前在学校球队打球，现在我在体育馆工作。 | 一名女士直接对着镜头讲话。 |
| 在工作中，我们的团队使用一个应用程序。它有一个日历，记录了我们所有的训练和比赛。我的工作就是记录分数之类的东西。我还可以用它与教练和球员聊天，我们还可以用它交换照片和笑话。| 这位女士坐在健身房里使用手机。 |
| 有时，我需要花更多的时间来阅读，但这款应用程序真的很好用。事件或球员的名字位于顶部，因此我知道自己在应用程序中的位置。日历也非常清晰。顶部还显示了月份或星期的名称。我们试过的其他应用程序都太混乱了，我根本无法分辨自己在哪里，也不知道怎么回去。 | 这位女士坐在健身房里，使用手机上的篮球应用程序。 |
| 最大的问题是购买比赛门票。我尽量用这个应用程序买票，但有时不得不用其他应用程序买票。有些应用程序太难了。当我点击某样东西时，它会转到其他地方或打开另一个页面。或者，顶部没有蓝色方框，我不知道我在哪里，也不知道如何返回。有时花的时间太长，我不得不重新开始。真是麻烦。我希望买票能更容易些。| 这位女士正坐在健身房里，翻阅和使用手机上的票务应用程序。 |
| 我的梦想是成为一名高级助理。我知道我能行。有时我很难写出很长的东西，但我每次都会使用拼写检查器。当教练使用我已经认识的单词时，它会帮助我。否则，我就需要花更多的时间在字典中查找这些单词。| 这位女士正坐在办公桌前使用笔记本电脑。她正在阅读一篇文字，并使用词典功能查词。 |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。 | 该女士直接对着镜头说话。 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |

{% include excol.html type="end" %}
