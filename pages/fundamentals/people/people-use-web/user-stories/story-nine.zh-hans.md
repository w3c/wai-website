---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Elias，患有低视力、手震颤和轻度短期失忆症的退休人员"
nav_title: "Elias"
lang: zh-hans   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translations:
  last_updated: 2025-03-30

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

和许多老年人一样，Elias阅读小字体有困难。他订阅的是网络版报纸，而不是实体版报纸，因为他可以将文字放大，这样阅读起来更方便。然而，在某些网站上，这种方法并不奏效，因为要么文字被截断，要么较大的文字无法滚动到下一行，他不得不横向滚动屏幕。他的震颤使他很难直线滚动。虽然这比管理印刷报纸的大版面要容易一些，但最好的情况是文本的大小调整和正确的自适应。

使用电脑阅读新闻和活跃在自己的领域有很多好处，但Elias经常在一些网站的安全问题上遇到困难。在使用CAPTCHA的网站上，他有时很难识别扭曲的文字或识别照片中的图像，因为它们通常显示不清楚。在发送安全代码的网站上，Elias不得不中断正在做的事情，用手机查看并复制代码，有时代码很长，很难正确抄写。在使用需要CAPTCHA的网站时，如果文字或图片易于识别，Elias就会觉得简单得多。如果需要安全验证码，一组简短的数字或字母更容易阅读和抄写。

## 障碍示例

无障碍支持差的CAPTCHA
: **障碍**: "When I login to my online banking I need to complete a CAPTCHA but I can't really read it well."
: **效果良好**: "My banking login sends me a text with a simple code to confirm it is me."

Text doesn't reflow
: **障碍**: "When I resize a website using my browser some of the text disappears or is cut short and sometimes I have to scroll across the screen as well as down."
: **效果良好**: "When I resize a website using my browser the text is all still available and is presented in a longer thinner column that doesn't need to be scrolled sideways."

Distracting animations
: **障碍:** "When my screen is magnified, animations are very distracting because I don't get the full context of what is going on."
: **效果良好:** "Allow me to stop any animation on the screen so I can concentrate on what I'm looking at."

Tables don't zoom well
: **障碍:** "Online tables sometimes have a lot of space between the columns and when I'm zoomed it, I have to scroll from left to right to see all of the content and I often miss the association from one column to the next."
: **效果良好:** "When I zoom the tables change from lots of columns to being presented more like a list with each row being shown as a list item."

Breadcrumb
: **障碍:** "I often lose my place on websites. Sometimes I follow several links and it's not what I'm looking for. I can use the back button to go back page by page but I still get lost."
: **效果良好:** "A breadcrumb at the top of each page that shows my path through the site keeps me on track, plus it helps me get back to the home page really quickly."

Login page
: **障碍:** "I have accounts with so many different websites that sometimes I forget my password."
: **效果良好:** "An option to remember my password for this site and a means of resetting my password if I need to."

Saved information
: **障碍:** "When I place an order, I have trouble remembering things, like telephone number, address, and credit card details."
: **效果良好:** "This store remembers from before, so I only need to select right address in the text field, rather than need typing each time."

## Assistive technologies and adaptive strategies used

* [Screen magnification (Presentation)](/people-use-web/tools-techniques/presentation/#display)
* [Alternative keyboard and mouse (Input)](/people-use-web/tools-techniques/input/#input)
* [Keyboard and mouse filters (Input)](/people-use-web/tools-techniques/input/#filters)
* [Mouse customization (Input)](/people-use-web/tools-techniques/input/#mouse)
* [Bookmarks and history (Interaction)](/people-use-web/tools-techniques/navigation/#bookmarks)
* [Consistency and predictability (Interaction)](/people-use-web/tools-techniques/navigation/#consistency)
* [Descriptive titles, headings, and labels (Interaction)](/people-use-web/tools-techniques/navigation/#labels)
* [Helpful error and success messages (Interaction)](/people-use-web/tools-techniques/navigation/#messages)

## Related WAI resources

* Use case: [Gopal: A Retired Lawyer with Dementia](https://www.w3.org/TR/coga-usable/#gopal-a-retired-lawyer-with-dementia)
* Video: [Large Links, Buttons, and Controls](/perspective-videos/controls/)
* Tip: [Provide sufficient contrast between foreground and background](/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* Tip: [Avoid CAPTCHA where possible](/tips/developing/#avoid-captcha-where-possible)
* Tip: [Make link text meaningful](/tips/writing/#make-link-text-meaningful)
* Tip: [Provide clear instructions](/tips/writing/#provide-clear-instructions)
* Tip: [Keep content clear and concise](/tips/writing/#keep-content-clear-and-concise)
* Tip: [Ensure that interactive elements are easy to identify](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Tip: [Provide clear and consistent navigation options](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Tip: [Provide easily identifiable feedback](/tips/designing/#provide-easily-identifiable-feedback)
* Tip: [Use headings and spacing to group related content](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Tip: [Help users avoid and correct mistakes](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Tip: [Provide meaning for non-standard interactive elements](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* Tip: [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Check: [Contrast ratio ("color contrast")](/test-evaluate/preliminary/#contrast)
* Check: [Resize Text](/test-evaluate/preliminary/#resize)
* Check: [Keyboard access and visual focus](/test-evaluate/preliminary/#interaction)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)

## Related principles

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Users are helped to avoid and correct mistakes (Understandable)](/fundamentals/accessibility-principles/#tolerant)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)


{% include excol.html type="start" id="video-transcript" %}

##  Video: Elias，患有低视力、手震颤和轻度短期失忆症的退休人员 {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_9"
  yt-id="c-IqJdL0i38"
%}

_当前视频也可以在 W3C 服务器上找到: [视频：Elias，患有低视力、手震颤和轻度短期失忆症的退休人员 (文件格式: MP4, 文件大小: 162MB)](https://media.w3.org/wai/people-use-web/user-stories_9.mp4)._

###  Text Transcript with Description of Visuals {#transcript}

| Audio | Visual |
| ----- | ----- |
| 残疾人如何使用数字技术； Elias, retiree with low vision, hand tremor, and mild short-term memory loss. | 残疾人如何使用数字技术； Elias, retiree with low vision, hand tremor, and mild short-term memory loss. |
| Hello! I’m Elias. I’m a retired architect. Life moves slower now that I’m retired, and I think my body does too! | A man speaks directly to the camera. |
| I see less and hear less than in my younger days. Also, my hands shake a little. My children live far away, so we see each other online instead. We also write to each other and send pictures. It’s so much easier and quicker than going to the post office every time. | The man is sitting at his desk using a laptop. He is participating in an online video call with one other person using a video conferencing app. |
| My trouble is all this small text! Why do they write so small? I know how to make the text size bigger but it doesn’t work with all websites. Sometimes everything seems to break down – the text overlaps or goes somewhere else or disappears completely. Or, I have to scroll sideways to read – I don’t have the time and energy for that. | The man is sitting at his desk using a laptop. He is trying to use a website which does not have responsive design. |
| It’s the same with apps. I made the text bigger on my mobile phone. I can’t see without doing that on such a small screen. Most apps work well but not the banking app. The text on that app is still small, and I need to use it to log into my bank account. I already called them several times about this but nothing happens. | The man is sitting at his desk using a zoomed-in messaging app on a mobile phone. He then changes to using a banking app. |
| It’s not only reading, though. When the text is small, all the buttons and links are also small. Sometimes tiny. Especially on forms where you have to click and select all these things – it’s hard with my hands, they don’t behave like they used to. | The man is sitting at his desk using a laptop. He tries to make a selection from a list, but the text is very small. |
| Our grocery store now has an online shop, which is fantastic because I don’t have to carry all the shopping any more. The text is big and it has big links and buttons. It just seems clearer and easier to find things – everything is where it should be on every page. Usually, I have trouble remembering things, like the telephone number, address, and credit card details. This store remembers from before, so I only need to select the right address in the text field rather than needing to type it each time. I wish all websites could be that easy. | The man is sitting at his desk using a laptop. He is successfully using the website of his online grocery store. |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。| 该男士直接对着镜头说话 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}


