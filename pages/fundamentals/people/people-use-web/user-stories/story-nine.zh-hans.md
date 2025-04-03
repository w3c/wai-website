---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Elias，患有低视力、手震颤和轻度短期失忆症的退休人员"
nav_title: "Elias"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translations:
  last_updated: 2025-04-03

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-nine/zh-hans   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-nine/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-eight/

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

Elias是一名85岁的退休建筑师。多年来，Elias的视力、听力和短期记忆力都有所下降，手也有轻微颤抖。他使用数字技术进行各种活动，包括与家人保持联系、阅读新闻和建筑文章以及订购杂货。然而，当他无法使用自己需要的调整功能时，使用技术就会变得很困难，比如网站和应用程序不允许调整文字大小，需要点击页面的小区域，每次访问都要他输入信息而不是存储信息。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_9.mp4"
   captions="wai-videos/people-use-web/user-stories_9.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频：Elias，患有低视力、手震颤和轻度短期失忆症的退休人员"
   poster="content-images/people-use-web/user-stories/elias-video-frame.png"
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

## 关于Elias

> 我喜欢这些新技术。能看到我的孙子们真是太棒了。我需要花点时间才能找到所有的控制按钮，有时它们还有点小，但我最终还是找到了。

Elias有听力障碍、低视力、手震颤和短期失忆。作为一名建筑师，Elias的职业生涯漫长而成功。他直到70多岁才退休，因为作为公司的资深建筑师，他经常被邀请指导新员工，并在当地大学做客座讲师。Elias患有黄斑变性，使他的视力模糊，阅读更加困难。随着时间的推移，渲染建筑图纸所需的特写工作使他的眼睛非常疲劳，以至于每次只能工作几个小时。最后，他不得不停止工作，因为他的手出现轻微颤抖，难以保持工作所需的精确度。

目前，85岁高龄的Elias的家人开始注意到他有些短期失忆。即便如此，埃利亚斯仍然对建筑史保持着浓厚的兴趣，他是与他有着同样热情并在网上撰写相关文章的一小部分人中的一员。他的博客拥有一批活跃的追随者，这有助于确保他仍然能够为这一领域做出贡献。

和许多老年人一样，Elias阅读小字体有困难。他订阅的是网络版报纸，而不是实体版报纸，因为他可以将文字放大，这样阅读起来更方便。然而，在某些网站上，这种方法并不奏效，因为要么文字被截断，要么较大的文字无法滚动到下一行，他不得不横向滚动屏幕。他的震颤使他很难直线滚动。虽然这比管理印刷报纸的大版面要容易一些，但最好的情况是文本的大小调整和回流。

使用电脑阅读新闻和活跃在自己的领域有很多好处，但Elias经常在一些网站的安全问题上遇到困难。在使用CAPTCHA的网站上，他有时很难识别扭曲的文字或识别照片中的图像，因为它们通常显示不清楚。在发送安全代码的网站上，Elias不得不中断正在做的事情，用手机查看并复制代码，有时代码很长，很难正确抄写。在使用需要CAPTCHA的网站时，如果文字或图片易于识别，Elias就会觉得简单得多。如果需要安全验证码，一组简短的数字或字母更容易阅读和抄写。

## 障碍示例

无障碍支持差的CAPTCHA
: **障碍**: "当我登录网上银行时，我需要完成一个CAPTCHA，但我实在看不懂。"
: **效果良好**: "我的银行登录会给我发一条短信，上面有一个简单的代码来确认是否是我。"

文本没有回流
: **障碍**: "当我使用浏览器调整网站大小时，一些文字会消失或被缩短，有时我不得不横向滚动屏幕或向下滚动。"
: **效果良好**: "当我使用浏览器调整网站的大小时，所有文字仍然可用，并且以更长更细的一栏显示，无需侧向滚动。"

分散注意力的动画
: **障碍:** "当我的屏幕被放大时，动画会让我非常分心，因为我无法完全了解正在发生的事情。"
: **效果良好:** "允许我停止屏幕上的任何动画，这样我就能专注于我正在看的内容。"

表格缩放效果不佳
: **障碍:** "在线表格有时在列与列之间有很大的空间，当我放大时，我必须从左到右滚动才能看到所有内容，而且我经常会错过从一列到下一列的关联。"
: **效果良好:** "当我缩放表格时，表格会从很多列变成更像一个列表，每一行都显示为一个列表项。"

面包屑
: **障碍:** "我经常在网站上迷失方向。有时，我点击了几个链接，但都不是我要找的内容。我可以用返回按钮一页一页地返回，但还是会迷路。"
: **效果良好:** "在每个页面的顶部都有一个面包屑，显示我浏览网站的路径，这能让我保持跟踪，还能帮助我快速返回主页。"

登录页面
: **障碍:** "我有很多不同网站的账户，有时会忘记密码。"
: **效果良好:** "提供记住本网站密码的选项，以及在需要时重新设置密码的方法。"

已保存的信息
: **障碍:** "下订单时，我很难记住电话号码、地址和信用卡信息等东西。"
: **效果良好:** "这家商店会记住以前的地址，所以我只需要在文本字段中选择正确的地址，而不需要每次都输入。"

## 使用的辅助技术和适应策略

* [屏幕放大（演示）](/people-use-web/tools-techniques/presentation/#display)
* [替代键盘和鼠标（输入）](/people-use-web/tools-techniques/input/#input)
* [键盘和鼠标过滤器（输入）](/people-use-web/tools-techniques/input/#filters)
* [鼠标自定义（输入）](/people-use-web/tools-techniques/input/#mouse)
* [书签和历史记录（交互）](/people-use-web/tools-techniques/navigation/#bookmarks)
* [一致性和可预测性（交互）](/people-use-web/tools-techniques/navigation/#consistency)
* [描述性标题、小标题和标签（交互）](/people-use-web/tools-techniques/navigation/#labels)
* [有用的错误和成功信息（交互）](/people-use-web/tools-techniques/navigation/#messages)

## 相关WAI资源

* 用例: [Gopal:  一位患有痴呆症的退休律师](https://www.w3.org/TR/coga-usable/#gopal-a-retired-lawyer-with-dementia)
* 视频: [大链接、按钮和控件](/perspective-videos/controls/)
* 提示: [在前景和背景之间提供足够的对比度](/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* 提示: [尽可能避免使用CAPTCHA](/tips/developing/#avoid-captcha-where-possible)
* 提示: [让链接文本更有意义](/tips/writing/#make-link-text-meaningful)
* 提示: [提供明确的指示](/tips/writing/#provide-clear-instructions)
* 提示: [保持内容简洁明了](/tips/writing/#keep-content-clear-and-concise)
* 提示: [确保交互元素易于识别](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* 提示: [提供清晰和一致的导航选项](/tips/designing/#provide-clear-and-consistent-navigation-options)
* 提示: [提供易于识别的反馈](/tips/designing/#provide-easily-identifiable-feedback)
* 提示: [使用标题和间距对相关内容进行分组](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* 提示: [帮助用户避免和纠正错误](/tips/developing/#help-users-avoid-and-correct-mistakes)
* 提示: [为非标准交互元素提供意义](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* 提示: [确保所有互动元素均可通过键盘访问](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* 检查: [对比度（“色彩对比度”）](/test-evaluate/preliminary/#contrast)
* 检查: [调整文本大小](/test-evaluate/preliminary/#resize)
* 检查: [键盘访问和视觉焦点](/test-evaluate/preliminary/#interaction)
* 检查: [表单、标签和错误信息](/test-evaluate/preliminary/#forms)

## 相关准则

* [非文本内容的文本替代方案（可感知）](/fundamentals/accessibility-principles/#alternatives)
* [内容可通过不同方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [内容更容易被看到和听到（可感知）](/fundamentals/accessibility-principles/#distinguishable)
* [用户有足够的时间阅读和使用内容（可操作）](/fundamentals/accessibility-principles/#time)
* [用户可以轻松导航、查找内容并确定自己的位置（可操作）](/fundamentals/accessibility-principles/#navigable)
* [内容易读易懂（可理解）](/fundamentals/accessibility-principles/#readable)
* [内容以可预测的方式出现和运行（可理解）](/fundamentals/accessibility-principles/#predictable)
* [帮助用户避免和纠正错误（可理解）](/fundamentals/accessibility-principles/#tolerant)
* [内容与当前和未来的用户工具兼容（稳健性）](/fundamentals/accessibility-principles/#compatible)


{% include excol.html type="start" id="video-transcript" %}

##  Video: Elias，患有低视力、手震颤和轻度短期失忆症的退休人员 {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_9"
  yt-id="c-IqJdL0i38"
%}

_当前视频也可以在 W3C 服务器上找到: [视频：Elias，患有低视力、手震颤和轻度短期失忆症的退休人员 (文件格式: MP4, 文件大小: 162MB)](https://media.w3.org/wai/people-use-web/user-stories_9.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| Audio | Visual |
| ----- | ----- |
| 残疾人如何使用数字技术；Elias，患有低视力、手震颤和轻度短期失忆症的退休人员。 | 残疾人如何使用数字技术；Elias，患有低视力、手震颤和轻度短期失忆症的退休人员。 |
| 你好！我叫Elias。我是一名退休建筑师。退休后，生活节奏慢了下来，我想我的身体也是！ | 一名男子直接对着镜头讲话。 |
| 我的视力和听力都不如年轻时。此外，我的手也有点抖。我的孩子们住得很远，所以我们只能在网上见面。我们还互相写信和寄照片。这比每次都去邮局方便快捷多了。 | 这名男子正坐在办公桌前使用笔记本电脑。他正在使用视频会议应用程序与另一人进行在线视频通话。 |
| 我的麻烦是这些小字！为什么写得这么小？我知道如何把文字变大，但并不是所有网站都能做到。有时，一切似乎都崩溃了--文字重叠了，或者跑到别的地方去了，或者完全消失了。或者，我必须侧着滚动才能阅读--我没有时间和精力去做这些。 | 这名男子正坐在办公桌前使用笔记本电脑。他正在尝试使用一个没有响应式设计的网站。 |
| 应用程序也是如此。我把手机上的文字放大了。在这么小的屏幕上不这样做我就看不见。大多数应用程序都能还不错，但银行应用程序不行。那个应用程序上的文字仍然很小，而我需要用它来登录我的银行账户。我已经为此给他们打了好几次电话，但都没有任何反应。 | 这名男子正坐在办公桌前使用手机上的放大信息应用程序。然后，他又换成了使用银行应用程序。 |
| 不仅是阅读。当文字变小时，所有的按钮和链接也会变小。有时很小。特别是在需要点击和选择所有这些东西的表单上，我的手很难操作，不像以前那样灵活了。 | 这位男士正坐在办公桌前使用笔记本电脑。他试图从列表中进行选择，但文本非常小。 |
| 我们的杂货店现在有了网上商店，这太棒了，因为我再也不用拎着所有的杂货了。文字很大，链接和按钮也很大。看起来更清晰，找东西也更容易--每一页上的东西都在该在的地方。通常，我很难记住一些东西，比如电话号码、地址和信用卡信息。这家商店能记住以前的信息，所以我只需要在文本字段中选择正确的地址，而不需要每次都输入。我希望所有的网站都能这么简单。 | 这名男子正坐在办公桌前使用笔记本电脑。他正在成功地使用自己网上杂货店的网站。 |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。| 该男士直接对着镜头说话 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}


