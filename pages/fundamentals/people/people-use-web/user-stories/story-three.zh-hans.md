---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Lakshmi, senior accountant who is blind"
nav_title: "Lakshmi"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translation:
  last_updated: 2024-12-26

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-three/zh-hans  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-three/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-two/
  next: /people-use-web/user-stories/story-four/

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

Lakshmi是一名双明失明的高级会计师。
她依靠屏幕阅读器来显示工作中使用的软件内容，并使用标准键盘输入命令来导航和输入信息。
最近，Lakshmi的公司从桌面软件迁移到了在线应用软件，其中一些软件给拉克希米带来了障碍，
比如图像不包含替代文本，或者快捷键与屏幕阅读器命令冲突。
其他令人沮丧的情况还包括多级导航（如嵌套菜单）、没有向屏幕阅读器明确说明字段含义的表单，
以及没有听觉替代功能或听觉替代功能很差的视觉验证码（CAPTCHA）。
Lakshmi非常喜欢使用她的手机和平板电脑，因为它们内置了屏幕阅读器，而且携带方便。
出门在外时，Lakshmi可以找路、付款，还可以通过电子邮件和短信与家人和朋友保持联系。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  
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

## 关于Lakshmi

> 我的手机太方便了--它的无障碍功能非常好用。可惜我不能用它访问我们公司的系统！

Lakshmi双目失明。她是一家保险公司的高级会计师，该公司通过公司内部网使用基于Web的文档和表格。
Lakshmi的工作电脑装有屏幕阅读器，能以语音输出的形式向她提供电脑上应用程序的状态和内容信息。
由于工作原因，Lakshmi要花大量时间处理电子表格、演示文稿和文档。
她所在的公司从使用桌面应用程序转变为将所有内容都存储在网上。Lakshmi担心这种变化会让她的工作变得更糟。

对于Lakshmi来说，复杂的web应用程序往往具有挑战性。许多应用程序都有多层导航，需要用户交叉参考内容。
这对于以线性方式回读内容的屏幕阅读器来说比较困难。
有时，他们使用的快捷键与屏幕阅读器使用的快速键相同。
到目前为止，一切似乎都很顺利。不过同事们在创建文档时经常没有考虑到无障碍的常见问题，例如，演示文稿没有为图片提供替代文本。

Lakshmi的部分工作是为员工提供培训。由于员工分布在不同地区，大部分培训都是在线进行的。
Lakshmi和她的员工评估了许多培训工具，如视频会议应用程序，最终找到了一款具有无障碍功能的有效应用程序，可以满足不同能力的员工的需求。
Lakshmi在使用这些工具时面临的最大挑战之一是聊天功能。许多工具都无法与Lakshmi的屏幕阅读器配合使用。
她会在会议期间错过信息，因为软件无法让她知道何时有新信息发送。

工作之余，Lakshmi喜欢烹饪、编织和旅行，她利用web查找食谱、编织图案和预订旅行。
她发现，网络社区可以帮助她产生支持她所有爱好的想法。
一般来说，这些社区都很不错，但有些社区在登录过程中使用可视验证码（CAPTCHA），这让她在没有人帮助的情况下无法访问论坛。

只要有时间，Lakshmi就会使用手机或平板电脑，而不是笔记本电脑或台式电脑。
手机和平板电脑内置了屏幕阅读器，让她使用起来更加方便。在旅行时使用手机非常棒，因为她可以查看位置详情并查找路线。

## 障碍示例

标题使用恰当
: **障碍:** “我无法轻松地浏览页面，找到我可能感兴趣的东西。”
: **效果良好:** “当网站使用正确标注的标题和段落布局时，我可以使用屏幕阅读器中的热键快速从一个标题或段落跳转到另一个标题或段落，在任何听起来有趣的地方停下来。”

键盘导航
: **障碍:** “有时我无法控制网站上的东西，如按钮和链接。我能听到它们在那里，但按不下去。”
: **效果良好:** “当我可以使用键盘导航，并按回车键选择它们，而无需找人帮忙时。“

一致的布局
: **障碍:** “我需要在头脑中形成网站布局的印象。如果每一页都有变化，那就会拖慢我的速度。“
: **效果良好:** “网站页面保持一致。链接都在同一个地方，在我的屏幕阅读器中听起来相同的东西在不同页面上的表现也相同。“

清楚的错误信息
: **障碍:** “有时，当我在网站上填写表格时，它不允许我提交，而且不清楚为什么不允许。“
: **效果良好:** “有明确错误信息和如何纠正错误说明的网站。“

页面其他地方的更改
: **障碍:** “有时网站内容会发生变化，但我并不总是知道。“
: **效果良好:** “当我的屏幕阅读器提醒我正在访问的页面发生变化时，我感觉非常好。“

键盘陷阱
: **障碍:** “有些网站的对话框会让我陷入其中，因为我似乎找不到关闭它的方法。“
: **效果良好:** “对话框包含一个关闭和/或取消按钮，可通过键盘访问。“

## 使用的辅助技术和适应策略

* [屏幕阅读器（感知）](/people-use-web/tools-techniques/perception/#sr)
* [文本到语音（感知）](/people-use-web/tools-techniques/perception/#tts)
* [誊本（感知）](/people-use-web/tools-techniques/perception/#transcripts)
* [一致性和可预测性（交互）](/people-use-web/tools-techniques/navigation/#consistency)
* [描述性标题、小标题和标签（交互）](/people-use-web/tools-techniques/navigation/#labels)
* [有用的错误和成功信息（交互）](/people-use-web/tools-techniques/navigation/#messages)
* [键盘导航（交互）](/people-use-web/tools-techniques/navigation/#keyboard)
* [跳过链接（交互）](/people-use-web/tools-techniques/navigation/#skip)

## 相关WAI资源

* 视频: [文本到语音](/perspective-videos/speech/)
* 提示: [为图像编写有意义的替代文本](/tips/writing/#write-meaningful-text-alternatives-for-images)
* 提示: [为每个表单控件关联一个标签](/tips/developing/#associate-a-label-with-every-form-control)
* 提示: [使用标题表达含义和结构](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* 提示: [确保所有交互元素都可通过键盘访问](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* 提示: [使链接文本具有意义](/tips/writing/#make-link-text-meaningful)
* 检查: [图像替代文本 ("alt text")](/test-evaluate/preliminary/#images)
* 检查: [表单，标签和错误信息](/test-evaluate/preliminary/#forms)
* 检查: [多媒体（视频、音频）替代品](/test-evaluate/preliminary/#media)
* 检查: [基本结构检查](/test-evaluate/preliminary/#structure)

## 相关准则

* [非文本内容的文本替代方案（可感知）](/fundamentals/accessibility-principles/#alternatives)
* [多媒体字幕和其他替代方案（可感知）](/fundamentals/accessibility-principles/#captions)
* [内容可通过不同方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [内容容易看到和听到（可感知）](/fundamentals/accessibility-principles/#distinguishable)
* [可通过键盘实现功能（可操作）](/fundamentals/accessibility-principles/#keyboard)
* [用户可以轻松导航、查找内容并确定自己的位置（可操作）](/fundamentals/accessibility-principles/#navigable)
* [文字可读易懂（可理解）](/fundamentals/accessibility-principles/#readable)
* [内容以可预测的方式出现和运行（可理解）](/fundamentals/accessibility-principles/#predictable)
* [内容与当前和未来的用户工具兼容（稳健性）](/fundamentals/accessibility-principles/#compatible)
* [与 “字幕”有关的成功标准](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions)
