---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: 无障碍原则
nav_title: "无障碍原则"
lang: zh-hans
last_updated: 2023-12-06   # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: 网站、web应用程序、浏览器和其他工具的基本web无障碍需求概述。
teaser_text: 无障碍原则页面介绍了网站、web应用程序、浏览器和其他工具的一些web无障碍需求。它提供了从W3C web无障碍推进(WAI)到Web用户故事的国际标准的参考。

translators: 
- name: "李松峰"   # Replace @@ with translator name
  link: "https://lisongfeng.cn/index.php/start-page.html"
- name: "冉若曦"
  link: "https://www.w3.org/people/roy"

github:
  label: wai-accessibility-principles

permalink: /fundamentals/accessibility-principles/zh-hans   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-principles/   # Do not change this

image: /content-images/accessibility-principles/social.png
changelog: /fundamentals/accessibility-principles/changelog/   # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>日期：</strong> 更新于2019年5月10日。CHANGELOG</p>
  <p><strong>编者：</strong> <a href="https://www.w3.org/People/shadi/">Shadi Abou_Zahra</a>. <a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">致谢</a>.</p>
  <p>由教育及外展工作组(<a href="https//www.w3.org/WAI/EO/">EOWG</a>)开发. 之前该网页受 <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">WAI-AGE 特别任务团</a>和<a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE项目</a>的支持.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

本页面介绍了网站、web应用程序、浏览器和其他工具的一些web无障碍要求。它提供了从W3C web无障碍推进(WAI)到[Web用户故事](/people-use-web/user-stories/)的国际标准的参考。

**Note:** 这不是所有无障碍需求的完整列表。

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


{% include excol.html type="all" %}

## Web无障碍标准 {#standards}

Web无障碍依赖几个相互联系的部分，包括：

-   **Web内容：**{:#webcontent} - 指网站中的任意部分，如文本、图片、表单和多媒体，以及所有标记代码、脚本、应用，等等。
-   **用户代理**{:#useragents} - 软件，用户通过它来访问Web内容，包括桌面图形界面浏览器、语音浏览器、手机浏览器、多媒体播放器、插件及一些辅助浏览技术。[辅助技术](/people-use-web/tools-techniques/#at "definition").
-   **创作工具：**{:#authoringtools} - 软件或服务，用户使用它产生Web内容，包括代码编辑器、文档转换工具、内容管理系统、博客、数据库脚本，以及其他工具。

{% include excol.html type="start" %}

### 更多关于web无障碍的标准
{:.no_toc}

{% include excol.html type="middle" %}

这些部分相互关联并相互支持。例如， **Web内容** 需要包含图像的文本替代。 这些信息需要 **web浏览器** 处理同时被 **辅助技术**转换, 例如读屏软件. 为了创建文本替代，作者需要**创作工具** 来做这些工作. 更多的信息可在 [[web无障碍的重要组成]](/fundamentals/components/)中找到.

标准在为每个组件定义无障碍需求方面扮演着重要的角色。一些无障碍需求很容易满足，但是了解残疾人如何使用Web的基本知识有助于更有效地实现这些需求。无障碍的某些方面需要更多的技术技能，也需要关于人们如何使用Web的高级知识。在所有情况下，[在整个web项目中早期让用户参与](/test-evaluate/involving-user/)将使您的工作更好、更容易。

W3C的Web无障碍推进(WAI)提供了一组被国际公认为Web无障碍标准指南。这些包括:

-   **[Web内容无障碍指南 (WCAG)](/standards-guidelines/wcag/)**
-   **[用户代理无障碍指南 (UAAG)](/standards-guidelines/uaag/)**
-   **[创作工具无障碍指南 (ATAG)](/standards-guidelines/atag/)**

还有一个用于**[无障碍富网络应用(WAI-ARIA)](/standards-guidelines/aria/)**的WAI规范，其中包括使用Ajax、JavaScript和相关web技术开发的动态内容和高级用户界面控件。

{% include excol.html type="end" %}

## 可感知信息和用户界面 {#perceivable}

### 用文本替代非文本内容 {#alternatives}

替代文本与非文内容是等价的。比如：

-   对图片（图标、按钮和图形）的简短描述；
-   图表、示意图和插图上数据的说明；
-   对音频和视频文件等非文本内容的简短说明；
-   表单控件、输入框等用户交互组件的标注。

替代文本传达图片或功能的意图，提供等价的用户体验。比如，对搜索按钮的替代文本应该是“搜索”，而不是“放大镜”。

替代文本的展示方式有很多种。比如，对看不见屏幕或视力不好的读者可以大声朗读出来，可以增大文本字号，也可以在盲文设备上显示。替代文本是控件和功能的标注，可以辅助键盘导航和语音识别导航（语音输入），也是识别音频、视频及其他格式文件乃至嵌入在网页中其他应用的标注。

{% include excol.html type="start" %}

#### 与替代文件相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 1.1 - 替代文本](https://www.w3.org/WAI/WCAG22/quickref/#text-alternatives)

**UAAG**

-   [指南 1.1 - 替代内容](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.2.1: （在开发工具界面中）应使用户可以使用替代内容](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [指南 A.2.2: （在开发工具界面中）应保证编辑视图之呈现是由程序决定的](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [指南 A.3.7: （在开发工具界面中）应保证预览应至少于市场中的用户代理的无障碍可访问性相同](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### 替代文本相关的案例
{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Martine, 听力障碍的在线学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 多媒体的字幕及其他替代物 {#captions}

听不见声音或看不见视频的人需要替代物。比如：

-   音频内容（如广播采访的录音）的文字版或字幕；
-   描述视频中重要影像细节的口述影像；
-   音频内容的手语表达，包括相应的受众体验。

整理规范的文字稿应该提供场所或视觉信息，为读者提供基本的无障碍阅读体验，并作为字幕或口述影像的提炼基础。

{% include excol.html type="start" %}

#### 与多媒体相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 1.2 - 时基媒体](https://www.w3.org/WAI/WCAG22/quickref/#time-based-media)

**UAAG**

-   [指南 1.1 - 替代内容](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.2.1:（在开发工具界面中）应使用户可以使用替代内容](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [指南 A.3.7:（在开发工具界面中）应保证预览应至少于市场中的用户代理的无障碍可访问性相同](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### 多媒体相关的案例 {#stories-related-to-multimedia}
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, 听力障碍的在线学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 内容有多种呈现方式 {#adaptable}

为针对不同用户以不同的方式呈现，内容必须：

-   正确地标记内容的结构，标题、列表、表格、输入字段，等等；
-   信息或指令的顺序适应任何呈现方式；
-   浏览器及辅助技术为定制不同的呈现方式提供便利。

满足这个要求的内容可以被正确的读出、放大，或者改编以适应不同人群的需求及偏好。比如，可以自定义使用不同颜色、字号或其他样式来呈现，以方便阅读。这个要求也有助于其他形式的适配，包括自动生成内容大纲和摘要，从而让用户了解梗概并聚焦到特定部分。

{% include excol.html type="start" %}

#### 与适应性相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 1.3 - 适应性](https://www.w3.org/WAI/WCAG22/quickref/#adaptable)

**UAAG**

-   [指南 1.4 - 文本配置](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [指南 1.5 - 音量配置](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [指南 1.6 - 合成语言配置](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [指南 1.7 - 用户样式表配置](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [指南 1.9 - 替代视图](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [指南 1.10 - 元素信息](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.2.2: （在开发工具界面中）应保证编辑视图之呈现是由程序决定的](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [指南 A.3.7: （在开发工具界面中）应保证预览应至少于市场中的用户代理的无障碍可访问性相同](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 适应性相关的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 有色盲的网上购物者](/people-use-web/user-stories/archived/#shopper)
-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 内容的看和听更容易 {#distinguishable}

便于区分的内容更容易看和听，比如：

-   不只使用颜色传达信息或标识内容；
-   默认的前景和背景色有足够高的对比度；
-   用户将文本放大到400%或增大文本间距时，内容不会丢失；
-   用户放大文本或使用小屏幕时，文本可以重排；
-   文本图片可以缩放或以实际文本替代，或尽可能避免使用；
-   用户可以暂停、停止或调整音频的音量；
-   背景音乐音量小且可以关闭，避免干扰和分神。

满足这个要求有助于将前景和背景分离，让重要的信息更突出。这一条也涉及不使用辅助技术的人群，而对使用辅助技术的用户，音量过大或对比度过高也会导致注意力分散。比如，很多色盲用户不会使用特殊工具，直接依赖网页提供足够的色彩对比度。而对其他人来说，自动播放的音频可能干扰语音合成或 [助听设备 (ALDs)](/teach-advocate/accessible-presentations/#ald "definition").

{% include excol.html type="start" %}

#### 与可分辨性相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 1.4 - 可辨别性](https://www.w3.org/WAI/WCAG22/quickref/#distinguishable)

**UAAG**

-   [指南 1.3 - 高亮](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [指南 1.4 - 文本配置](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [指南 1.5 - 音量配置](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [指南 1.6 - 合成语言配置](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [指南 1.7 - 用户样式表配置](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [指南 1.8 - 视窗定位](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [指南 1.9 - 替代视图](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [指南 1.10 - 元素信息](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.3.7: （在开发工具界面中）应保证预览应至少于市场中的用户代理的无障碍可访问性相同](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 可分辨性的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 有色盲的网上购物者](/people-use-web/user-stories/archived/#shopper)
-   [Martine, 听力障碍的在线学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

## 可操作的用户界面和导航 {#operable}

### 可以通过键盘使用功能 {#keyboard}

很多人不使用鼠标而依赖键盘来操作网页。这就要求使用键盘完全可以控制网页，包括表单控件、输入框及其他用户界面组件。

键盘的无障碍性包括：

-   通过鼠标可以操控的功能，同样可以通过键盘实现；
-   键盘焦点不会被内容的任意部分卡住；
-   浏览器、创作工具及其他工具支持键盘操作。

满足这个要求能帮助键盘用户，包括使用人体工程学键盘、屏幕软键盘或开关装置的人方便上网。同样，对于使用语音识别（语音输入）来操作网页和通过键盘输入的人同样有帮助。

{% include excol.html type="start" %}

#### 与键盘无障碍相关的要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 2.1 - 键盘可访问性](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-accessible)

**UAAG**

-   [指南 2.1 - 键盘访问](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [指南 2.2 - 顺序导航](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [指南 2.3 - 直接导航和激活](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [指南 2.11 - 其他输入设备](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.3.1: （在开发工具界面中）应提供对键盘访问的无障碍访问特性s](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 键盘无障碍的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)

{% include excol.html type="end" %}

### 用户有充足的时间阅读和使用内容 {#time}

阅读理解同样的内容，有人用的时间少，有人用的时间多。比如，有些人打字慢，理解慢，操作控件不熟练，最终导致使用网站的速度慢。

所谓提供充足的时间，包括：

-   必要时提供解除、扩展和调整时间限制的机制；
-   提供暂停、停止或隐藏移动、闪烁或滚动内容的机制；
-   必要时延迟或避免打断用户；
-   会话超时后重新认证确保不丢失数据。

{% include excol.html type="start" %}

#### 与充足时间相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 2.2 - 充足时间](https://www.w3.org/WAI/WCAG22/quickref/#enough-time)

**UAAG**

-   [指南 2.8 - 时基交互](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [指南 2.10 - 时基媒体](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.3.2:（在开发工具界面中）应向开发者提供足够的时间](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 充足时间的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 内容不要诱发癫痫和物理反应 {#safe}

某种频率或图案的闪烁可能诱发光敏反应，包括癫痫。理想情况下，应该完全避免内容闪烁，或者如果无法避免也要确保不会导致已知风险。同样，动画及移动的内容也可能导致不适或物理反应。

避免导致癫痫及物理反应的例子有：

-   不使用某种频率或图案的闪烁；
-   内容闪烁前对用户给出提示，同时提供替代方案；
-   除非必要，要让用户可以关掉动画。

{% include excol.html type="start" %}

#### 与癫痫相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 2.3 - 癫痫](https://www.w3.org/WAI/WCAG22/quickref/#seizures-and-physical-reactions)

**UAAG**

-   [指南 2.9 - 闪烁](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.3.3: （在开发工具界面中）应帮助开发者以避免由闪烁引起的癫痫](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

### 用户可以方便地导航、找到内容并确认自己在哪里 {#navigable}

组织得当的内容可以让用户随时定位自己并有效导航，比如：

-   页面标题表述适当，各部分标题也具有描述性；
-   在一组网页中有多种方式可以找到相关页面；
-   随时提醒用户在一组网页中的当前位置；
-   让用户可以跳过多个网页中都有的内容块；
-   键盘焦点可以看到，且焦点顺序有意义；
-   链接的意图明确，理想情况下即使链接本身也能让人一目了然。

满足这个要求可以让用户根据自己的需求和偏好在多个页面间导航。比如，有人依赖层级导航结构如菜单来查找特定网页，也有人依赖网站的搜索功能。有人可能用眼睛看，有人可能用耳朵听，而有人会同时看和听。有人可能只使用鼠标，有人可能只使用键盘，而有人则会同时都用。

{% include excol.html type="start" %}

#### 与导航相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 2.4 - 可导航性](https://www.w3.org/WAI/WCAG22/quickref/#navigable)

**UAAG**

-   [指南 2.2 - 顺序导航](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [指南 2.3 - 直接导航和激活](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [指南 2.4 - 文本搜索](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [指南 2.5 - 结构导航](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [指南 2.7 - 图形化控制](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.2.2: （在开发工具界面中）应保证编辑视图之呈现是由程序决定的](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [指南 A.3.4: （在开发工具界面中）应从内容结构出发增强导航和编辑功能](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [指南 A.3.5: （在开发工具界面中）应提供内容搜索功能](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 导航的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 用户可以使用除键盘外的不同输入方式 {#modalities}

除键盘之外的输入方式还有触摸激活、语音识别（语音输入）及手势，这些方式可以为很多人提供便利。但并非所有人都可以同样程度地使用所有方式。特别的设计考量可以最大化这些方式的优势，包括：

-   要求敏捷及精确移动的手势有对应不需要高敏捷性的替代方式；
-   经特别设计避免组件被意外激活，比如提供撤销功能；
-   展示给用户的标注与代码中对象的名字对应，以支持通过语音激活；
-   通过运动激活的功能也可以通过用户界面上的组件激活；
-   按钮、链接和其他活动组件足够大，以便通过触摸来激活它们。

满足这个要求可以让更多有能力使用更多设备的人更方便地使用内容。这里的内容包括手机、笔记本电脑和售票机上的内容。

{% include excol.html type="start" id="" %}

#### 与输入方式相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 2.5 - 输入方式](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

#### 输入方式的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## 可理解的信息和用户界面 {#understandable}

### 文本容易阅读和理解 {#readable}

内容作者要确保文字具有可读性且大多数读者都比较容易理解，包括文字转语音读出来也一样。其中包括：

-   标识网页使用的主要语言，如阿拉伯语、德语或韩语；
-   标识文本、短语或网页中其他部分的语言；
-   对不常见的词汇、短语、 习语和缩略语给出解释；
-   尽可能用最简单明了的表达，或提供简化版本。

满足这个要求有助于软件包括辅助技术正确地处理文本内容。比如，软件因此可以正确地读出内容、生成页面摘要，并对不常用的技术词汇提供解释。同样，这也有助于人们理解复杂的句子、短语和词汇。特别是对具有不同认知背景的用户会有帮助。

{% include excol.html type="start" %}

#### 与可读性相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 3.1 - 可读性](https://www.w3.org/WAI/WCAG22/quickref/#readable)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.4.2: （在开发工具界面中）应提供开发工具界面的完整文档，包括所有无障碍访问特性](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 可读性的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, 听力障碍的在线学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

### 内容以可预测的方式出现和操作 {#predictable}

很多人依赖可预测的用户界面，而不一致的外观和行为则会导致迷惑，转移用户注意力。要让内容可预测，可以：

-   在多个页面相同位置重复出现导航条；
-   给多个页面上重复出现的用户界面组件添加相同的标注信息；
-   给没有用户同意不会发生的变化应用明显的区别。

满足这个要求可以让人们更快熟悉网站提供的功能和导航机制，并根据自己的特殊需求及偏好来使用网站。比如，有些人会给自己频繁使用的键盘导航功能定义快捷键。而也有人会记住在网站上到达某个特定页面或完成特定流程的步骤。这些都有赖于可预测及一致的功能。

{% include excol.html type="start" %}

#### 与可预测相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 3.2 - 可预测性](https://www.w3.org/WAI/WCAG22/quickref/#predictable)

**UAAG**

-   [指南 3.3 - 可预测性](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.2.2: （在开发工具界面中）应保证编辑视图之呈现是由程序决定的](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [指南 A.4.2: （在开发工具界面中）应提供开发工具界面的完整文档，包括所有无障碍访问特性](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 可预测的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 用户可以得到帮忙以避免和纠正错误 {#tolerant}

表单及其他交互可能导致用户迷惑或难于使用，最终让用户犯错。帮助用户避免和纠正错误的做法包括：

-   为用户提供说明、错误消息及建议，帮用户提供正确的信息；
-   为复杂功能及交互提供上下文相关的帮助；
-   必要时提供结果预览，以及纠正或重置表单的功能。

满足这个要求可以帮助因为看不到或听不到而难以理解潜在关联、顺序和其他提示的人。对于不理解功能，因此产生困惑或迷茫、记不住，或者因种种原因在使用表单和交互时出错的人同样也有帮助。

{% include excol.html type="start" %}

#### 与输入辅助相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 3.3 - 辅助输入](https://www.w3.org/WAI/WCAG22/quickref/#input-assistance)

**UAAG**

-   [指南 3.1 - 错误](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [指南 A.2.2: （在开发工具界面中）应保证编辑视图之呈现是由程序决定的](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [指南 A.4.1: （在开发工具界面中）应帮助用户避免错误以及纠正错误](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 输入辅助的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 有色盲的网上购物者](/people-use-web/user-stories/archived/#shopper)
-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 视力低下、手颤抖、轻度短期失忆的退休人员](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## 健壮的内容和可靠的解释 {#robust}

### 内容与现在和未来的用户工具兼容 {#compatible}

健壮的内容兼容不同浏览器、辅助技术及其他用户代理。比如：

-   确保标记是可以被可靠解释的，比如确保使用有效的标记；
-   对非标准用户界面组件提供名称、角色和值。

满足这个要求可以最大化地兼容当前及未来的用户代理，包括辅助技术。特别地，这可以让辅助技术正确处理内容，以及通过不同方式呈现或操作内容。非标准（脚本化）按钮、输入字段及其他控件也包含在内。

{% include excol.html type="start" %}

#### 与兼容性相关的无障碍要求（相关技术规范的链接）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [指南 4.1 - 兼容](https://www.w3.org/WAI/WCAG22/quickref/#compatible)

**UAAG**

-   [指南 2.6 - 首选项设置](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [指南 4.1 - 辅助技术](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [指南 5.1 - 遵循规范](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG**

-   [准则 A.1: 开发工具界面（应）遵循可应用的无障碍访问性准则](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [B部分. 支持无障碍内容的生成](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 兼容性的案例
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 有色盲的网上购物者](/people-use-web/user-stories/archived/#shopper)
-   [Alex, 一个记者有重复性应激损伤](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 盲人高级工作人员](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 有注意缺陷多动障碍和阅读障碍的中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Luis, 唐氏综合症超市助理](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 聋的盲人青年](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

{% include excol.html type="all" %}

