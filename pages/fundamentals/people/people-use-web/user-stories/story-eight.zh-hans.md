---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Stefan，患有注意缺陷多动障碍和读写障碍的学生"
nav_title: "Stefan"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translations:
  last_updated: 2025-03-25

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-eight/zh-hans  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-eight/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-seven/
  next: /people-use-web/user-stories/story-nine/

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

Stefan是一名患有读写障碍和注意缺陷多动障碍 (ADHD) 的学生。Stefan发现自己很难保持对学校作业的专注，尤其是在阅读大量密集文字或遵循书面说明时。他喜欢数字教科书和可以使用文本转语音软件的网站，因为他可以同时听懂文字和声音。但重要的是，网站和其他数字技术要使用通俗易懂的语言，版面设计要一致，不要显示弹出式广告或动态图像，这些都会分散注意力，造成混淆。移动应用程序和网站通常不那么杂乱，也更容易使用。

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_8.mp4"
   captions="wai-videos/people-use-web/user-stories_8.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频：Stefan，患有注意缺陷多动障碍和读写障碍的学生"
   poster="content-images/people-use-web/user-stories/stefan-video-frame.png"
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

## 关于 Stefan

> 我的文本阅读器能帮助我集中精力阅读。我并不是一直使用它，但对于长篇文字来说，它非常有用。

Stefan是一名患有阅写障碍和注意缺陷多动障碍 (ADHD) 的学生。作为一名ADHD患者，Stefan很难完成多步骤或长时间的任务。这使他很难保持对学校作业的专注。视觉支持（如图标和图形）以及在他所看的内容周围使用良好的留白可以帮助他集中注意力。他可能会在密密麻麻的文字中迷失方向，找不到意思。当这种情况发生时，他就会放弃，因为时间太长，而且很累。这导致他的学习成绩落后于其他学生。

Stefan所在的学校最近开始使用数字教科书。这对Stefan来说是一个巨大的进步，他现在可以使用文本转语音软件来帮助他理解有时很复杂的课文。Stefan还利用网络进行研究。遗憾的是，他在网上的体验可能各不相同。很多时候，网站上的动画广告和图像等内容会分散他的注意力。

Stefan发现，使用布局简单一致、内容通俗易懂的网站会更容易。图形或图标也有助于强化文字的含义。有时，他使用文本转语音软件中的功能，可以更改页面背景颜色。这在他疲倦时尤其有用。在观看视频时，Stefan也会使用字幕，因为听到和看到文字都能强化其含义。

Stefan是一个老科幻电影迷，花了很多时间在影迷制作的网站和论坛上。他的银行卡有消费限额，他用它来购买影迷纪念品。这些网站的设计和购买过程会给他带来困难。这些网站通常有干扰性广告和复杂的结账表单。他发现自己可以用手机访问这些网站，在手机上打开浏览器的阅读模式，就可以去除很多杂乱的背景信息。这样，他就能集中精力完成任务，步骤也更加清晰。

Stefan遇到的问题是网站导航不清晰。他发现使用包含网站地图、面包屑轨迹或搜索功能的网站要容易得多。Stefan在拼写方面有困难，因此搜索功能可以为他提供其他拼写建议和错误纠正，这让他受益匪浅。

## 障碍示例

拼写建议
: **障碍:** "我拼写有困难，有时会拼错单词。有时我得不到我想要的搜索结果。"
: **效果良好:** "我喜欢搜索工具提供替代拼写或替代搜索建议，而不是只返回无结果。"

浏览器设置不被尊重
: **障碍:** "我使用浏览器设置来指定所需的字体、文字大小和行距，但有些网站不显示我的设置。"
: **效果良好:** "当我在浏览器中更改设置时，网站会显示这些设置。"

<!--Distracting pop-ups
: **障碍:** "Banner ads and popups are distracting and make me lose focus on what I'm doing."
: **效果良好:** "It's great when I can turn off these images using the ad blocker in my browser."-->

复杂语言
: **障碍:** "复杂的语言和句子结构让我感到困惑，难以阅读和记住。"
: **效果良好:** "尽量使用简短的句子和通俗易懂的语言。"

过多的缩略语和简称
: **障碍:** "过多使用缩略语和简称会分散我的注意力，我经常必须重读几遍，有时甚至会卡住而放弃。"
: **效果良好:** "至少在第一次使用缩略语时拼出其完整单词。避免使用或解释缩略语。"

## 使用的辅助技术和适应策略

* [字幕（感知）](/people-use-web/tools-techniques/perception/#captions)
* [屏幕阅读器（感知）](/people-use-web/tools-techniques/perception/#sr)
* [文本转语音（感知）](/people-use-web/tools-techniques/perception/#tts)
* [弹出窗口和动画阻止程序（呈现）](/people-use-web/tools-techniques/presentation/#blockers)
* [阅读助理 (呈现)](/people-use-web/tools-techniques/presentation/#reading)
* [拼写和语法工具 (输入)](/people-use-web/tools-techniques/input/#lexical)
* [一致性和可预测性（交互）](/people-use-web/tools-techniques/navigation/#consistency)
* [有用的错误和成功信息（交互）](/people-use-web/tools-techniques/navigation/#messages)
* [关键词搜索（交互）](/people-use-web/tools-techniques/navigation/#search)
* [多种导航机制（交互）](/people-use-web/tools-techniques/navigation/#navigating)

## 相关WAI资源

* 使用案例: [Tal: 患有读写障碍和手眼协调能力受损的学生](https://www.w3.org/TR/coga-usable/#tal-a-student-who-has-dyslexia-and-impaired-eye-hand-coordination)
* 使用案例: [Yuki：患有注意缺陷障碍的瑜伽教师](https://www.w3.org/TR/coga-usable/#yuki-a-yoga-teacher-who-has-ad-h-d)
* 视频: [清晰的布局和设计](/perspective-videos/layout/)
* 提示: [使用标题表达含义和结构](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* 提示: [让链接文本更有意义](/tips/writing/#make-link-text-meaningful)
* 提示: [提供明确的指示](/tips/writing/#provide-clear-instructions)
* 提示: [内容简洁明了](/tips/writing/#keep-content-clear-and-concise)
* 提示: [为图像添加替代文本](/tips/developing/#include-alternative-text-for-images)
* 提示: [帮助用户避免和纠正错误](/tips/developing/#help-users-avoid-and-correct-mistakes)
* 提示: [确保交互元素易于识别](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* 提示: [提供易于识别的反馈信息](/tips/designing/#provide-easily-identifiable-feedback)
* 提示: [使用标题和间距对相关内容进行分组](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* 检查: [图像文本替代方案（替代文本）](/test-evaluate/preliminary/#images)
* 检查: [标题](/test-evaluate/preliminary/#headings)
* 检查: [表单，标签和错误信息](/test-evaluate/preliminary/#forms)
* 检查: [移动、闪烁或闪烁的内容](/test-evaluate/preliminary/#moving)
* 检查: [基本结构检查](/test-evaluate/preliminary/#structure)

## 相关准则

* [非文本内容的文本替代方案（可感知）](/fundamentals/accessibility-principles/#alternatives)
* [内容可通过不同方式呈现（可感知）](/fundamentals/accessibility-principles/#adaptable)
* [用户有足够的时间阅读和使用内容（可操作）](/fundamentals/accessibility-principles/#time)
* [用户可以轻松导航、查找内容并确定自己的位置（可操作）](/fundamentals/accessibility-principles/#navigable)
* [内容可读易懂（可理解）](/fundamentals/accessibility-principles/#readable)
* [内容以可预测的方式出现和运行（可理解）](/fundamentals/accessibility-principles/#predictable)
* [帮助用户避免和纠正错误（可理解）](/fundamentals/accessibility-principles/#tolerant)
* [内容与当前和未来的用户工具兼容（稳健性）](https://www.w3.org/WAI/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

## 视频：Stefan，患有注意缺陷多动障碍和读写障碍的学生 {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_8"
  yt-id="Ie-RaV7UTCU"
%}

_当前视频也可以在 W3C 服务器上找到: [视频：Stefan，患有注意缺陷多动障碍和读写障碍的学生 (文件格式: MP4, 文件大小: 346MB](https://media.w3.org/wai/people-use-web/user-stories_8.mp4)._

### 附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| 残疾人如何使用数字技术；Stefan，患有注意缺陷多动障碍和阅读障碍的学生。 | 残疾人如何使用数字技术；Stefan，患有注意缺陷多动障碍和阅读障碍的学生。 |
| 你好，我是Stefan。我有阅读障碍和注意缺陷多动障碍（ADHD）。| 一名男子直接对着镜头讲话。 |
| 我很难辨认或读出书面单词，尽管我在对话中经常使用这些单词。这影响了我的拼写和阅读理解能力。我经常要花很长时间才能弄清我所读的单词，然后我就很难记住句子中的单词是如何有意义地组合在一起的。 | 男子正坐在客厅里阅读杂志。 |
| 数字图书和文件通常更适合我。在电脑上、平板电脑上，或者--我最喜欢的--我的新电子阅读器上。我可以改变字体类型、文字大小和行距，这让我更容易阅读。我还会使用朗读功能，因为当我能同时看到和听到文字时，阅读效果会更好。它还会突出显示正在朗读的单词，并有阅读标尺，这样我就能更轻松地跟读。| 这名男子正坐在客厅里使用平板电脑阅读。他正在通过调整设备上的设置更改文本格式。然后，他戴上耳机聆听文字，并跟随突出显示的文字进行阅读。 |
| 不过，有时数字图书和文件的效果并不好。有时它们只是扫描图像。这些也不能朗读，我也不能改变文字大小和字体。有些没有书签，而我可以用书签跳转到我想关注的部分。或者，有的文本很长，却没有任何标题，因此我很难集中精力阅读内容。如果文本有更多的间距和图形，就会更容易理解。 | 这名男子正坐在客厅里使用笔记本电脑阅读。他正在滚动浏览一份复杂的文件。 |
| 另一个问题是当我需要进行在线研究时。我输入单词，但有时会输错，或者用了听起来一样的不同单词，比如 “brake”，而我的意思是 “break”。有时，我登陆的网站会弹出各种广告和东西，并在屏幕上移动。我有ADHD，会被这些广告和视频分散注意力，有时我点击了它们，却忘了自己要做什么。我使用了几个弹出窗口拦截器，但它们并不总是有效。 | 该男子坐在客厅里使用笔记本电脑阅读。我们看到屏幕上出现了 Brake/Break 的单词选项。然后，他浏览了一个包含大量广告和弹出窗口的网站。|
| 当我找到一篇想读的文章时，我会尽量记住在浏览器中切换到阅读模式。这通常会去掉页面周围的所有内容，让我专注于文字。但有些网站并不好用，仍然会出现广告，或者文字对我来说太难阅读。我喜欢网站与我的设置和扩展配合得很好。比如，拼写和语法扩展，它能在我输入电子邮件等内容时帮助我。这对我来说非常重要。 | 这名男子正坐在客厅里使用笔记本电脑。他输入了一段简短的文字，并使用拼写检查器纠正了一个错误。 |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。| 该男士直接对着镜头说话 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}
