---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ade，双臂功能受限的记者"
nav_title: "Ade"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-11-04  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-one/  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
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
  <p>由教育及外展工作组 (<a href="https//www.w3.org/WAI/EO/">EOWG</a>) 开发。with support from the <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide Project</a> and <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a> co-funded by the European Commission (EC).</p>
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

{% include_cached blockquote.html class="pull alt-2" content="<p>Web 无障碍：以人文本</p>" %}

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
   accessible-version-label="Video: Ade, reporter with limited use of his arms"
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
: **障碍:** "When I tab through links and form fields there is no visual styling to show me which element I am on."
: **效果良好:** "There is clear and strong visual styling for links and form fields when they receive focus."

Process time outs barrier
: **障碍:** "I usually take much longer to complete long forms or processes and often get timed out."
: **效果良好:** "At the start of a long form or process, I am told that there is a time out and given the option to set it to be slightly longer."

Saving progress barrier
: **障碍:** "Completing long forms with no way to save progress and take a break can be tiring."
: **效果良好:** "I have an option to save progress and take a break when completing long, multi-step forms like when I have to get a code in email or text and type it in."

Popup windows barrier
: **障碍:** "When a window opens and I can't close it using only the keyboard it can be difficult."
: **效果良好:** "New windows have a close icon that I can access using the keyboard and some include the option to press the escape key to close them."

## Assistive technologies and adaptive strategies used

* [Accelerators (Input)](/people-use-web/tools-techniques/input/#accelerators)
* [Alternative keyboard and mouse (Input)](/people-use-web/tools-techniques/input/#input)
* [Speech recognition (Input)](/people-use-web/tools-techniques/input/#speech)
* [Word prediction (Input)](/people-use-web/tools-techniques/input/#prediction)
* [Keyboard navigation (Interaction)](/people-use-web/tools-techniques/navigation/#keyboard)
* [Skip links (Interation)](/people-use-web/tools-techniques/navigation/#skip)

## Related WAI resources

* Video: [Speech Recognition](/perspective-videos/voice/)
* Tip: [Use headings to convey meaning and structure](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Associate a label with every form control](/tips/developing/#associate-a-label-with-every-form-control)
* Tip: [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Check: [Keyboard access and visual focus](/test-evaluate/preliminary/#interaction)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)

## Related principles

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Functionality is available from a keyboard (Operable)](/fundamentals/accessibility-principles/#keyboard)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Users are helped to avoid and correct mistakes (Understandable)](/fundamentals/accessibility-principles/#tolerant)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

##  Video: Ade, reporter with limited use of his arms {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_1"
  yt-id="Z5dMdJzUy7w"
%}

_This video is also available on a W3C server: [Video: Ade, reporter with limited use of his arms (file format: MP4, file size: 162MB)](https://media.w3.org/wai/people-use-web/user-stories_1.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Ade, reporter with limited use of his arms. | How people with disabilities use the digital technology; Ade, reporter with limited use of his arms. |
| Hello! I’m Ade. I’m quadriplegic, which means I have limited movement in my arms as well as in my legs. | A man in a wheelchair speaks directly to the camera. |
| The technology I use is really important to me. I use a lot of keyboard shortcuts, especially for the programs that I use often. For example, scrolling a page is much easier with the arrow keys on the keyboard than by clicking on that button in the scroll bar. | The man is sitting at a desk using a laptop. He uses the arrow keys to scroll up and down a web page. |
| Unfortunately, many websites and apps don’t work well with my keyboard. Often what has focus isn’t clear or jumps around completely out of order. | The man uses the Tab key to complete sections of a form. |
| Sometimes that doesn’t work well because some websites and apps don’t work in landscape orientation, which is how I setup my tablet so that the buttons are big enough for me to click. | The man is sitting and using his tablet in landscape orientation. The web page he is trying to view does not rotate to a landscape orientation. |
| While I can use a keyboard and joystick, I can’t use them for long periods because it’s tiring. So, I recently started using speech control software as well. It allows me to dictate text instead of typing, and to say certain commands instead of clicking. It’s really hard to learn a new way of working after so many years, but I’ve been patient with it and I’m slowly getting used to it. The most difficult thing is buttons without labels – it’s not clear which voice command would activate them. | The man is sitting at a desk. He is talking to his laptop to write an email. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}
