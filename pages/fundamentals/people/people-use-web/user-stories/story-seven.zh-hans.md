---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Marta，失聪和失明的市场营销助理"
nav_title: "Marta"
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

Marta is a marketing assistant who was born profoundly deaf and is now progressively losing her vision. For now, she can magnify her computer screen in order to see the content but as her eyesight continues to deteriorate, she will need to learn new ways of interacting with the
computer. Marta is learning braille and hopes to use her new braille display for reading, writing, and navigating applications. In addition, the braille display includes some often used apps such as a calendar, email, and notes. This will be handy for whenever she is away from home. Marta is taking classes in fashion design and knows she will need to discuss her unique needs with the college since she will likely need class materials to be available on her braille display.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_7.mp4"
   captions="wai-videos/people-use-web/user-stories_7.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="视频：Marta，失聪和失明的市场营销助理"
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

> I love watching videos and when they have captions that I can make large, I can then follow the dialogue.

Marta is a marketing assistant who was born profoundly deaf. She communicates using sign language and attended a school for the deaf. Recently Marta learned she has a degenerative condition that results in progressive vision loss. As her eyesight deteriorates, Marta will need to learn new ways of interacting with the computer. Fortunately for Marta, online content, if coded properly, is accessible by adjusting size and contrast settings, both of which she is becoming more and more reliant on.

Marta has always been interested in clothes and her decreasing vision only fueled her passion more for vibrant colors, exaggerated shapes, and distinctive textures. She has started taking classes in fashion design at her local college and is excited to learn the history of fashion. Marta has always relied on captioning or speech-to-text applications when communicating with her hearing peers and her local community. She knows she has to connect with the disability office to request a sign interpreter. However, she is unsure about what additional resources she may now need due to her recent diagnosis. She is hoping to discuss how much of the course material is presented with captions and transcripts.

Marta is currently learning braille and is being exposed to using a braille display to access her current technology. She was excited to learn that the braille display includes calendar, e-mail, web browsing, and note-taking features so she can have an all-in-one device. This will reduce the number of devices Marta will have to travel with so she can navigate the campus safely. She wants to be able to independently navigate the college platforms to access course materials, communicate with her professors, and submit assignments without having to rely on someone else if she can’t visually access the information. So far, Marta has had mixed success using the braille display. It 效果良好 when content is coded so that it can be recognized by the device. Unfortunately, in one case, she couldn't submit a form because a button wasn't coded correctly.

Socially, Marta loves being out and about with her friends. She will not be able to drive so will need to rely on public transportation. This is not new to her since she lives in an urban area. However, she knows there are always last minute changes to platforms and times. She is worried about being alerted to this information. She is already experiencing difficulty reading times, plus the website is not mobile optimized and doesn't work well when zoomed. She is interested in customizing her devices so she can utilize tactile features for notifications and alerts for all aspects of her life. Marta is eager to learn about the accessible technology that is available so she can continue her path to becoming a successful fashion designer.

## 障碍示例

一致的布局
: **障碍：** "Some shopping sites I visit have completely different styles for different sections. It takes me a while to work out where everything is in each section which is really frustrating."
: **效果良好:** "The shopping website I use has the same layout on all of it's sections which makes it easy to work my way around pages."

没有文本记录
: **障碍：** "Some videos only have embedded captions which I can't access easily."
: **效果良好:** "Having a transcript is a big help. It is much easier for me to read with my Braille device."

Inaccessible CAPTCHA
: **障碍：** "If a site has a CAPTCHA that uses images or audio then I just can't use it - it can take me ages to work out the image and I can't hear the audio alternative."
: **效果良好:** "No CAPTCHA is best but sometimes there are simple things that ask a really easy question."

键盘导航
: **障碍：** "A date picker that pops up when I tab to a date entry field but I can't use the date picker as it doesn't work with the keyboard."
: **效果良好:** "I can tab through dates in a date picker using my keyboard or I can just enter the date without the date picker."

Changes elsewhere on a page
: **障碍：** "I needed to add my previous address into an application form, but nothing happened when I pressed the 'Add new address' button. I don't know where the new address fields might have been added to the page."
: **效果良好:** "When I press the 'Add new address' button, I am taken to the form fields that have just been added above the button."

## 使用的辅助技术和适应策略

* [Braille (Perception)](/people-use-web/tools-techniques/perception/#braille)
* [Refreshable Braille display (Perception)](/people-use-web/tools-techniques/perception/#braille_display)
* [Screen reader (Perception)](/people-use-web/tools-techniques/perception/#sr)
* [Text-to-speech (Perception)](/people-use-web/tools-techniques/perception/#tts)
* [Transcripts (Perception)](/people-use-web/tools-techniques/perception/#transcripts)
* [Customized fonts and colors (Presentation)](/people-use-web/tools-techniques/presentation/#style)
* [Screen magnification (Presentation)](/people-use-web/tools-techniques/presentation/#display)
* [Screen magnifier (Presentation)](/people-use-web/tools-techniques/presentation/#magnifiers)
* [Descriptive titles, headings, and labels (Interaction)](/people-use-web/tools-techniques/navigation/#labels)
* [Helpful error and success messages (Interaction)](/people-use-web/tools-techniques/navigation/#messages)
* [Keyboard navigation (Interaction)](/people-use-web/tools-techniques/navigation/#keyboard)
* [Skip links (Interaction)](/people-use-web/tools-techniques/navigation/#skip)

## 相关WAI资源

* Video: [Video Captions](/perspective-videos/captions/)
* Tip: [Create transcripts and captions for multimedia](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* Tip: [Avoid CAPTCHA where possible](/tips/developing/#avoid-captcha-where-possible)
* Tip: [Ensure that all interactive elements are keyboard accessible](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Tip: [Provide clear and consistent navigation options](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Check: [Image text alternatives ("alt text")](/test-evaluate/preliminary/#images)
* Check: [Forms, labels, and errors](/test-evaluate/preliminary/#forms)
* Check: [Multimedia (video, audio) alternatives](/test-evaluate/preliminary/#media)
* Check: [Basic Structure Check](/test-evaluate/preliminary/#structure)

## 相关准则

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Alternatives for audio and video content (Perceivable)](/fundamentals/accessibility-principles/#captions)
* [Content can be presented in different ways (Perceivable)](/fundamentals/accessibility-principles/#adaptable)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Users have enough time to read and use the content (Operable)](/fundamentals/accessibility-principles/#time)
* [Users can easily navigate, find content, and determine where they are (Operable)](/fundamentals/accessibility-principles/#navigable)
* [Content appears and operates in predictable ways (Understandable)](/fundamentals/accessibility-principles/#predictable)
* [Content is compatible with current and future user tools (Robust)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

## 视频：Marta，失聪和失明的市场营销助理 {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_7"
  yt-id="llTnoiq2Mow"
%}

_当前视频也可以在 W3C 服务器上找到: [视频：Marta，失聪和失明的市场营销助理 (文件格式: MP4, 文件大小: 360MB)](https://media.w3.org/wai/people-use-web/user-stories_7.mp4)._

###  附有视觉描述的文本记录 {#transcript}

| 音频 | 视觉 |
| --- | --- |
| How people with disabilities use digital technology; Marta, a marketing assistant who is Deaf and blind. | How people with disabilities use digital technology; Marta, a marketing assistant who is deaf and blind. |
| Hi! I’m Marta, a marketing assistant at my School for the Deaf. I’m Deaf-blind. I was born deaf and have progressive vision loss, which means I can still see things if they’re large and up-close but I see less and less each year. | A woman signs directly to the camera. |
| As a Deaf child, I learned sign language early on. This is why technology is so important to me – it allows me to communicate with more people. At home, I have a computer that can enlarge my documents up to 20 times. I have a big screen but can still only see a very small portion of the screen, and an even smaller portion of the documents because it’s like looking through a magnification lens. I can find my way around documents with headings and sections that look different. For example, this briefing sheet uses a color for the headings that is different from the main content, which makes it easier for me to recognize them. | The woman is sitting on the sofa with another man, they are signing to each other. The woman is then sitting at a desk scrolling through zoomed-in options on a website. She is using a mouse and looking at a monitor through a magnification lens. |
| Oh, and I’m learning to use braille too. Braille are those dots that you read with your fingers, and I have this really cool device called a “refreshable braille display” – it’s a small device that I can take with me everywhere, unlike my computer. It has apps for email, web, and chat, and some have a special keyboard for typing in braille. I read the braille characters in a row on the device, which I’m slowly getting used to. It’s always difficult to learn to use something new at first but I’m getting better at reading and typing braille. | The woman is sitting at a desk using a refreshable braille display. |
| But not all websites and apps work well with magnification or on my braille display. Like when I need to look up the bus schedule to meet up with my friends – that table doesn’t work well when I enlarge it on my phone. And forget about trying to read it in braille. I can’t tell what row or column I’m in and it just jumps all over the place! It makes me nervous because I can’t as easily ask for help from people around me while I’m out, so I’ve been learning how to speak up and ask companies for more accessible websites and apps to help me stay independent. | The woman is sitting at a bus stop, looking at a zoomed-in bus timetable app on her mobile phone. She is holding the mobile phone close to her face. |
| 您可以帮助让无障碍对我更友好。无障碍：以人为本。 | 该女子直接对着镜头说话 |
| 有关 Web 无障碍倡议组织提供的有关残疾人如何使用数字技术的更多信息，请访问 w3.org/WAI/people | 无障碍：以人为本。w3.org/WAI/people |


{% include excol.html type="end" %}