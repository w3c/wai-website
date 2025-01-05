---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ade，双臂功能受限的记者"
nav_title: "Ade"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-11-12  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-one/zh-hans  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-one/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/
  next: /people-use-web/user-stories/story-two/

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
  <p><strong>更新日期:</strong> 2024年6月25日。初稿发布于1999年。<!-- CHANGELOG.--></p>
  <p><strong>编辑:</strong> Kevin White 和 Shadi Abou-Zahra。 以往编辑: Judy Brewer 和 Norah Sinclair. 贡献者: Brent Bakken, Jade Matos Carew, Jayne Schurick, Michele Williams, 和 ACKNOWLEDGEMENTS 中所列出的其他人员。</p>
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

{% include_cached blockquote.html class="pull alt-2" content="<p>无障碍：以人文本</p>" %}

<aside id="introduction" class="box"><div class="box-i">
  <div>
{:/}

Ade 是一名双臂功能受限的记者。
他有几种浏览网站的策略，包括用手掌操作操纵杆，用一根手指按键盘上的键，这样就可以上下移动页面，在链接之间切换，以及最近使用的语音识别。
然而，所有这些方法都有缺点。
使用操纵杆时，很难点击小目标，如将光标放在单词之间或句子末尾。
使用键盘时，有时很难知道哪个页面元素是焦点，而且链接的顺序往往与他查看页面时看到的不一致。
语音识别技术很有前途，但对于习惯于打字的人来说，这涉及到一种全新的工作方式。
为了让 Ade 能够从一种方法切换到另一种方法，必须确保链接和其他页面元素具有视觉焦点指示器，
并与它们在页面上出现的顺序相匹配，而且在缩放网站使所有内容看起来更大时，内容也能正确地流动。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_1.mp4"
   captions="wai-videos/people-use-web/user-stories_1.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频: Ade，双臂功能受限的记者"
   poster="content-images/people-use-web/user-stories/ade-video-frame.png"
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

**注:** 本用户故事以此类残疾人士为例。其他残疾人可能会有不同的经历。

## 关于 Ade

> 我不是不会使用键盘或指针，只是不能长时间使用，因为很累。

Ade 在一次事故中脊髓受伤。
这使他的双臂活动受限，双腿不能活动或失去知觉。
他从事记者工作多年。
Ade 有时会使用按键较大的键盘，以帮助他更轻松地按下正确的键，他还使用操纵杆代替鼠标。
不过，长时间使用这些设备会让他感到疲倦，因此他开始使用语音识别软件来完成一些任务，例如听写长篇文章。

Ade 不是用手指，而是用手掌来操作一个带有放大杠杆的操纵杆。
这在使用时可能会不准确，尤其是在指向和点击小区域时。
遇到这种情况，他有时会改用键盘。
他可以使用 tab 键在链接和表单元素中移动。在使用键盘时，Ade 发现在某些网站上他无法看到哪个控件或链接是焦点。
他还发现，有时链接的顺序不符合逻辑，因此很难找到他感兴趣的元素。
他可以切换回使用操纵杆，但这会打断他的流程，使他的速度减慢。
当你将鼠标悬停在链接上时，网站通常会提供良好的视觉样式，但有时当链接有键盘焦点时却没有。
对于 Ade 来说，重要的是网站要清楚地显示哪个链接是当前焦点，并按照逻辑顺序浏览链接，即按照页面上链接的视觉顺序浏览。

在使用键盘时，Ade 发现了一些非常有用的功能。
例如，跳至内容链接可以将焦点移过页面上的所有导航，这就帮了大忙。Ade 尽量避免访问没有这项功能的网站。不过，这也限制了他的研究来源。

Ade 已经开始使用语音控制软件，这可以帮助他避免使用操纵杆和键盘。
该软件允许他通过说话来选择和“点击”链接，但前提是链接清晰且编码正确。
该软件还具有语音到文本的听写功能。
作为一个多年来一直用打字方式撰写文章的人，Ade 不得不训练自己使用一种新的工作方式。
他仍然更喜欢打字，因为他认为听写的速度要慢得多，但他希望自己的速度会有所提高。

工作之余，Ade 发现他的移动设备比电脑更容易使用，因为导航功能有限，而且没有指针设备。
由于是手持设备，他有更多的选择，可以把它放在自己舒服的位置。
他希望他的雇主能创建一个移动友好型或响应式网站，以便他在工作中使用。

## 障碍示例

聚焦样式障碍
: **障碍:** "当我在链接和表单字段中切换时，没有可视化样式来提醒我在哪个元素上。"
: **效果良好:** "当链接和表单字段受到聚焦时，会有清晰而强烈的视觉样式。"

处理超时障碍
: **障碍:** "我通常需要更长的时间才能完成长表格或流程，而且经常会超时。"
: **效果良好:** "在一个长表格或流程开始时，我会被告知有一个超时时间，并可以选择将其设置得稍长一些。"

保存进度障碍
: **障碍:** "在无法保存进度和休息的情况下完成冗长的表格会很累。"
: **效果良好:** "我有一个保存进度的选项，在完成长的、多步骤的表单时可以休息一下，比如当我必须从电子邮件或文本中获取代码并输入时。"

弹出窗口障碍
: **障碍:** "当一个窗口打开时，我无法只用键盘关闭它，这可能会很困难。"
: **效果良好:** "新窗口有一个关闭图标，我可以用键盘访问，有些窗口还提供了按 Escape 键关闭的选项。"

## 使用的辅助技术和适应策略

* [加速器 (输入)](/people-use-web/tools-techniques/input/#accelerators)
* [替代键盘和鼠标（输入）](/people-use-web/tools-techniques/input/#input)
* [语音识别（输入）](/people-use-web/tools-techniques/input/#speech)
* [词语预测（输入）](/people-use-web/tools-techniques/input/#prediction)
* [键盘导航（交互）](/people-use-web/tools-techniques/navigation/#keyboard)
* [跳过链接（交互）](/people-use-web/tools-techniques/navigation/#skip)

## 相关 WAI 资源

* 视频: [语音识别](/perspective-videos/voice/)
* 小贴士: [使用标题表达含义和结构](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* 小贴士: [使链接文本具有意义](/tips/writing/#make-link-text-meaningful)
* 小贴士: [确保交互元素易于识别](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* 小贴士: [为每个表单控件关联一个标签](/tips/developing/#associate-a-label-with-every-form-control)
* 小贴士: [确保所有交互元素都可通过键盘访问](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* 检查: [键盘操作和视觉聚焦](/test-evaluate/preliminary/#interaction)
* 检查: [表格、标签和错误](/test-evaluate/preliminary/#forms)

## 相关准则

* [非文本内容的文本替代方案（可感知）](/fundamentals/accessibility-principles/#alternatives)
* [内容可通过不同方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [可通过键盘实现功能（可操作）](/fundamentals/accessibility-principles/#keyboard)
* [用户有足够的时间阅读和使用内容（可操作）](/fundamentals/accessibility-principles/#time)
* [用户可以轻松导航、查找内容并确定自己的位置（可操作）](/fundamentals/accessibility-principles/#navigable)
* [内容以可预测的方式出现和运行（易于理解）](/fundamentals/accessibility-principles/#predictable)
* [帮助用户避免和纠正错误（易于理解）](/fundamentals/accessibility-principles/#tolerant)
* [内容与当前和未来的用户工具兼容（稳健性）](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

##  视频: Ade，双臂功能受限的记者 {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_1"
  yt-id="Z5dMdJzUy7w"
%}

_当前视频也可以在 W3C 服务器上找到: [视频: Ade，双臂功能受限的记者 (文件格式: MP4, 文件大小: 162MB)](https://media.w3.org/wai/people-use-web/user-stories_1.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| 残疾人如何使用数字技术；Ade，双臂功能受限的记者。 | 残疾人如何使用数字技术；Ade，双臂功能受限的记者。 |
| 你好，我叫Ade。我四肢瘫痪，这意味着我的双臂和双腿活动受限。 | 一位坐在轮椅上的男子直接对着镜头讲话。 |
| 我使用的技术对我来说非常重要。我使用大量的键盘快捷键，尤其是我经常使用的程序。例如，用键盘上的方向键滚动页面比点击滚动条上的按钮要容易得多。 | 这名男子坐在办公桌前使用笔记本电脑。他使用箭头键上下滚动网页。 |
| 遗憾的是，许多网站和应用程序都无法很好地与我的键盘配合使用。经常会出现焦点不清晰或跳转完全不按顺序的情况。 | 该男子使用 Tab 键完成表格的各个部分。 |
| 有时这样做并不奏效，因为有些网站和应用程序在横向时显示不好，我就是这样设置我的平板电脑的，这样按钮就足够大，方便我点击。 | 该男子坐着使用横向平板电脑。他试图查看的网页无法旋转为横向。|
| 虽然我可以使用键盘和操纵杆，但不能长时间使用，因为很累。因此，我最近也开始使用语音控制软件。它可以让我用口述来代替打字，用说出某些命令来代替点击。这么多年过去了，要学习一种新的工作方式真的很难，但我一直很有耐心，慢慢就习惯了。最困难的是没有标签的按钮--不知道哪条语音命令可以激活它们。 | 这名男子正坐在办公桌前。他正在用笔记本电脑写电子邮件。 |
| 您可以帮助让无障碍对我更友好。Web 无障碍：以人文本。 | 该男子直接对着镜头说话。 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | Web 无障碍：以人为本。 w3.org/WAI/people |


{% include excol.html type="end" %}
