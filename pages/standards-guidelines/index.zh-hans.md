---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.

title: W3C 可访问性标准概述  # Do not translate "title:". Do translate the text after "title:".
nav_title: "标准/指南" # A short title that is used in the navigation
lang: zh-hans
last_updated: 2021-04-30  # Keep the date of the English version

translation:
  status: outdated
  last_updated: 2021-05-14   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: 
- name: "安佳"
  link: "https://github.com/anjia"

ref: /standards-guidelines/ # Do not change this
changelog: /standards-guidelines/changelog/
github:
  label: wai-standards-guidelines
permalink: /standards-guidelines/zh-hans   # Add the language shortcode to the end; for example /standards-guidelines/fr
feedbackmail: wai@w3.org

footer: >   # Translate all the words below, including "Date:" and "Editor:". Do not change these dates.
  <p><strong>编辑:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>。</p>
  <p>由教育和外联工作组（<a href="https://www.w3.org/WAI/EO/">EOWG</a>）开发。</p>
---


{::nomarkdown}
{% include box.html type="start" h="2" title="摘要" class="full" %}
{:/}

本页介绍了与Web无障碍相关的指南及相关标准。

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="页面目录" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## 简介 {#intro}

万维网联盟（W3C）开发了国际 Web 标准：<abbr title="Hypertext Markup Language">HTML</abbr>、<abbr title="Cascading Style Sheets">CSS</abbr> 等等。W3C 的 Web 标准被称为  <dfn>W3C 建议书</dfn>。

所有的 W3C 标准都会被可访问平台架构（[APA](/about/groups/apawg/)）工作组审核，以确保它们的可访问性支持。

下面介绍的这些 W3C 标准和工作组说明都和可访问性特别相关。

## 无障碍指南 {#guidelines}

[[Web 可访问性的基本组件]](/fundamentals/components/)展示了 Web 无障碍如何依赖 Web 开发的几个组件以及如何与它们交互，也展示了如何应用 Web无障碍推进（WAI）的指南（WCAG、ATAG、UAAG）。

### Web内容无障碍指南（WCAG）2 {#wcag2}

Web “内容”通常是指网页或 Web 应用程序里的信息，包括：

* 自然信息，如文字、图像和声音
* 定义结构和页面显示的代码或标记，等等

WCAG 可应用在动态内容、多媒体、“移动端”等，也可以应用在非网络信息和通信技术（ICT），如 [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/) 中所述。

WCAG 2 信息：
- [WCAG 概述](/standards-guidelines/wcag/)
- [[WCAG 2.1 概览]](/standards-guidelines/wcag/glance/)
- [如何满足 WCAG 2（快速参考）](https://www.w3.org/WAI/WCAG21/quickref/)
- [[WCAG 2 翻译]](/standards-guidelines/wcag/translations/)
- [WCAG 2.0 标准](https://www.w3.org/TR/WCAG20/)
- [WCAG 2.1 标准](https://www.w3.org/TR/WCAG21/)，[[WCAG 2.1 中的更新内容]](/standards-guidelines/wcag/new-in-21/)
- [[WCAG 2.2 工作组草案中的更新内容]](/standards-guidelines/wcag/new-in-22/)


### 创作工具无障碍指南（ATAG） {#atag}

创作工具是指“作者”（Web 开发人员、设计师、编辑等）用来制作 Web 内容的软件和服务。例如：HTML 编辑器、内容管理系统（CMS）以及允许用户添加内容的网站，诸如博客和社交网站。ATAG 文档解释了如何：
* 让创作工具本身可访问，以便残障人士也可以创建 Web 内容，和
* 帮助作者创建更易于访问的 Web 内容。

ATAG 信息：
- [ATAG 概述](/standards-guidelines/atag/)
- [[ATAG 一览]](/standards-guidelines/atag/glance/)
- [ATAG 2.0 标准](https://www.w3.org/TR/ATAG/)

### 用户代理无障碍指南（UAAG） {#uaag}

用户代理包括浏览器、浏览器扩展、媒体播放器、阅读器以及呈现 Web 内容的其它应用程序。

UAAG 信息：
- [UAAG 概述](/standards-guidelines/uaag/)
- [UAAG 2.0 说明](https://www.w3.org/TR/UAAG20/)

### W3C 无障碍指南 (WCAG) 3 工作组草案 {#wcag3}

WCAG 3 目前是一份的早期草案，旨在成为 W3C 标准。 WCAG 3 适用于 Web 上的 Web 内容，应用程序，工具，出版以及一些新兴技术。


WCAG 3 信息:
* [[WCAG 3 介绍]](/standards-guidelines/wcag/wcag3-intro/)

## 技术规范

### 无障碍富网络应用（WAI-ARIA） {#aria}

ARIA 提供语义，因此作者可以将用户界面上的行为和结构信息传达给辅助技术（例如屏幕阅读器）。ARIA 规范提供了角色、状态和属性的本体，它们定义了可访问用户界面上的元素。

ARIA 套件包括 <abbr title="application programming interface">API</abbr> 映射规范（提供了用户代理的实现指南），它还包括图形和数字出版的相关模块。

ARIA 信息：
- [WAI-ARIA 概述](/standards-guidelines/aria/) – 包括[模块和 API 映射的列表和描述](/standards-guidelines/aria/#versions)
- [WAI-ARIA 创作实践](https://www.w3.org/TR/wai-aria-practices/)
- [WAI-ARIA 1.1 标准](https://www.w3.org/TR/wai-aria-1.1/)

### 音频和视频 {#multimedia}

- [WebVTT：Web 视频文本轨道格式](https://www.w3.org/TR/webvtt/)是一种数据格式，用于字幕、文本视频描述以及其它用来让音频或视频的内容和时间保持同步的元数据。

- [定时文本标记语言（TTML）](https://www.w3.org/TR/ttml/)旨在用来转码或交换定时文本信息，用于字幕和字幕的传统分发内容格式。

### 评估 {#eval}

下面的资源支持可访问性评估方法和工具的开发：

- [[无障碍一致性测试（ACT）概述]](/standards-guidelines/act/) &mdash; ACT 建立并记录规则，用来测试 Web 内容是否与可访问性标准一致。

- [[评估和报告语言（EARL）概述]](/standards-guidelines/earl/) &mdash; EARL 是一种机器可读的格式，用来表达测试结果。

[[评估 Web 辅助功能概述]](/test-evaluate/) 里列出了和评估相关的资源，包括：

- [[WCAG-EM 概述：网站无障碍一致性评估方法]](/test-evaluate/conformance/wcag-em/) &mdash; WCAG-EM 是一种方法，用来确定网站有多符合 Web 内容无障碍指南（WCAG）。

### 个性化

[[个性化概述]](/adapt/) &mdash; 个性化涉及定制用户体验以满足个人用户的需求和偏好。内容作者可以使用个性化标准来提供默认设计，并以最少的工作实现用户个性化。
### 个性化

### 发音

[[发音工作概述]](/pronunciation/) &mdash; 发音工作是一项关于能够让屏幕阅读器和其他语音合成（TTS）正确发音的工作。

## W3C WAI 工作的其它领域

- [[W3C 的移动无障碍]](/standards-guidelines/mobile/)

- [[W3C 的认知无障碍]](/cognitive/)

## 其它信息 {#moreinfo}

- [所有和 W3C 无障碍相关的标准（“W3C建议”）和工作组说明](https://www.w3.org/TR/?tag=accessibility)

- [[网站无障碍的法律和政策]](/policies/)列出了世界各国和地区的与网站可访问性相关的政府法律和政策。其中，很多都参考了 W3C 可访问性标准。

- [[为什么标准协调对 Web 无障碍至关重要]](/standards-guidelines/harmonization/)

- [[参考和链接到 WAI 指南和技术文档]](/standards-guidelines/linking/)

- [WAI 如何通过 W3C 流程制定无障碍指南：里程碑和**贡献的机会**](/standards-guidelines/w3c-process/)

![插图显示了不同组件的指南，详见 https://www.w3.org/WAI/intro/components-desc.html#guide]({{ "/content-images/components/specs.png" | relative_url }})
