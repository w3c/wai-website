---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "WCAG 2 概述"
nav_title: "Web 内容 – WCAG 2"
lang: zh-hans  # Change "en" to the translated-language shortcode
last_updated: 2024-12-12  # Keep the date of the English version
first_published: "July 2005"
description: 介绍 Web 内容无障碍指南（WCAG）国际标准，包括 WCAG 2.0、WCAG 2.1 和 WCAG 2.2。WCAG 文档解释了如何使网页内容更便于残障人士访问。

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Shane" # Add one -name: line for every translator
  link: https://github.com/codersjj
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/zh-hans  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/  # Do not change this

image: /content-images/wcag/wcag-intro-social.jpg
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>编辑:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>在教育与推广工作组（<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>）和无障碍指南工作组（<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>）的意见反馈下开发。</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="摘要" class="full" %}
{:/}

本页面介绍了 Web 内容无障碍指南（WCAG）国际标准，包括 WCAG 2.0、WCAG 2.1 和 WCAG 2.2。WCAG 文档解释了如何使网页内容更便于残障人士访问。

另一个页面[介绍了 WCAG 3](/standards-guidelines/wcag/wcag3-intro/).

WCAG 并不是无障碍的介绍。介绍内容，请参阅[无障碍基础概述](/fundamentals/).

资源快速链接:
* [如何符合 WCAG 2（快速参考）](https://www.w3.org/WAI/WCAG22/quickref/)
* [WCAG 2.2 标准](https://www.w3.org/TR/WCAG22/), [WCAG 2.2 中的新内容](/standards-guidelines/wcag/new-in-22/)
* [WCAG 2.1 标准](https://www.w3.org/TR/WCAG21/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="页面目录" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## 简介 {#intro}

Web 内容无障碍指南（WCAG）2 是通过 [W3C 流程](/standards-guidelines/w3c-process/)与全球的个人和组织合作开发的，其目标是提供一个统一的网页内容无障碍共享标准，以满足国际上个人、组织以及政府的需求。

WCAG 文档阐释了如何使网页内容更便于残障人士访问。网页“内容”通常指网页或网络应用中的信息，包括：

-   自然信息，例如文本，图像和声音。
-   定义结构、呈现等的代码或标记。

## WCAG 的适用对象 {#for}

WCAG 面向那些需要技术标准的人群。**它并非无障碍知识的入门介绍。如需获取入门资料的链接，请查看 [常见问题中的“我该从何处入手？”](/standards-guidelines/wcag/faq/#start)。**

WCAG 主要面向以下人群:

-   网页内容开发者（页面作者、网站设计师等等）
-   网页创作工具开发者
-   网页无障碍评估工具开发者
-   其他希望或需要制定网络无障碍标准的人，包括移动端无障碍标准的制定者

为了满足其他人（包括政策制定者、管理人员和研究人员）的需求，有许多不同的 [[WAI 资源]](/resources/)。

## WCAG 2 中包含了什么内容 {#whatis2}

WCAG 2.2 包含 13 条指南。这些指南被归类为 [4 项原则：可感知性、可操作性、可理解性和鲁棒性](https://www.w3.org/WAI/WCAG22/Understanding/intro#understanding-the-four-principles-of-accessibility)。

每条指南都有可测试的 *成功标准*。成功标准分为[三个级别：A、AA 和 AAA](https://www.w3.org/WAI/WCAG22/Understanding/conformance#levels)。

成功标准是判定是否“符合”WCAG 的依据。也就是说，要符合 WCAG，内容必须满足成功标准。详细内容见 [WCAG 的符合性部分](https://www.w3.org/TR/WCAG22/#conformance)。

有关 WCAG 2 指南的简要概述，可查看 **[[WCAG 2 概览]](/standards-guidelines/wcag/glance/)**。

### 支持材料和补充指南 {#supplement}

以下资源可以帮助您理解和实施 WCAG，并在 WCAG 的基础上进一步提升无障碍性：
* 快速参考 / 如何符合 WCAG 2 / 检查清单
* 理解 WCAG 2
* WCAG 2 技术
* WCAG 2 测试规则
* 补充指南

**请从 [WCAG 2 文档](/standards-guidelines/wcag/docs/) 中了解这些 WCAG 2 资源。**

## WCAG 2.0, 2.1, 2.2 {#versions}

网页内容无障碍指南（WCAG）标准在作为“W3C 推荐”网络标准发布时可供参考。 

* [WCAG 2.0](https://www.w3.org/TR/WCAG20/) 于 2008 年 12 月 11 日发布。
* [WCAG 2.1](https://www.w3.org/TR/WCAG21/) 于 2018 年 6 月 5 日发布，更新于 2023 年 9 月 21 日和 2024 年 12 月 12 日。
* [WCAG 2.2](https://www.w3.org/TR/WCAG22/) 于 2023 年 10 月 5 日发布，并于 2024 年 12 月 12 日进行了更新。

有关更新的信息，请查看 [WCAG 2 常见问题解答](/standards-guidelines/wcag/faq/)。

WCAG 2.0、2.1 和 2.2 版本都设计为"向后兼容"，这意味着符合 WCAG 2.2 的内容也符合 WCAG 2.1 和 WCAG 2.0 的要求。如果你想要满足所有版本的要求，你可以使用 WCAG 2.2 的资源，而无需查看早期版本。

2.0 版本的所有成功标准都包含在 2.1 中，而 2.1 的所有标准都包含在 2.2 中（除了 4.1.1，将在下一段中解释）。
* WCAG 2.0 有 12 个指南。
* WCAG 2.1 新增了 1 个指南和 17 个成功标准。这些内容在 [WCAG 2.1 新增内容](/standards-guidelines/wcag/new-in-21/)中介绍。
* WCAG 2.2 新增了 9 个成功标准。这些内容在 [WCAG 2.2 新增内容](/standards-guidelines/wcag/new-in-22/)中介绍。

有一些变化，我们希望相关文档的更新能在实践中支持向后兼容。主要的变化是在 WCAG 2.2 中，有一个成功标准（4.1.1 解析）已过时。WCAG 2.1 和 WCAG 2.0 勘误表中添加的注释对此进行了说明，详见 [WCAG 2 常见问题解答，4.1.1 解析](/standards-guidelines/wcag/faq/#parsing411)。WCAG 2.2 还包括关于不同语言的注释；更多信息请查看 [WCAG 2 常见问题解答，国际化](/standards-guidelines/wcag/faq/#i18n22)。

WCAG 2.0、WCAG 2.1 和 WCAG 2.2 都是现有标准。WCAG 2.2 并不会废弃或取代 WCAG 2.1，WCAG 2.1 也不会废弃或取代 WCAG 2.0。W3C 建议您使用最新版本的 WCAG。

## 翻译

WCAG 2 的授权翻译和非官方翻译列于 [[WCAG 2 翻译]](/standards-guidelines/wcag/translations/)。

## WCAG 2.0 是 ISO/IEC 40500 {#iso}

WCAG 2.0 已被批准为 ISO 标准：ISO/IEC 40500:2012。ISO/IEC 40500 与上文介绍的原始 WCAG 2.0 及其支持资源完全相同。

ISO/IEC 40500 的内容可以从 [www.w3.org/TR/WCAG20](https://www.w3.org/TR/WCAG20/) 免费获取；也可以从 [ISO 目录 {% include_cached external.html %}](https://www.iso.org/standard/58625.html) 购买。

WCAG 2.0 作为 ISO 标准的好处在 [常见问题解答中的 ISO 部分](/standards-guidelines/wcag/faq/#iso) 进行了总结。关于 W3C 和 ISO 流程的更多信息，可在 [W3C PAS 常见问题解答](https://www.w3.org/2010/04/pasfaq)中获取。

**W3C 已向 ISO 提交了 WCAG 2.2。** ISO 流程可能要在 2025 年 6 月之后才能完成。

## 谁在开发 WCAG {#wg}

WCAG 技术文档由无障碍指南工作组（[AG WG](/GL/)）*（前身为 Web 内容无障碍指南工作组）*开发，该工作组是万维网联盟（[W3C](https://www.w3.org)）Web 无障碍倡议（[WAI](https://www.w3.org/WAI/)）的一部分。

WAI 会定期更新 WCAG 2 的技术和对 WCAG 2 的理解文档。我们欢迎[评论反馈](/standards-guidelines/wcag/commenting/)以及[提交新技术](https://www.w3.org/WAI/GL/WCAG20/TECHS-SUBMIT/)。

关于参与 WCAG 和其他 WAI 工作的机会，在[[参与 WAI]](/about/participating/) 中有介绍。

## WCAG 3 和更多信息 {#more}

WCAG 是无障碍指南系列的一部分，该系列还包括创作工具无障碍指南（ATAG）和用户代理无障碍指南（UAAG）。[[Web 无障碍的基本组件]](/fundamentals/components/)解释了不同指南之间的关系。

查看 [[WCAG 2 常见问题解答]](/standards-guidelines/wcag/faq/) 获取更多信息：

-   **WCAG 2 对[移动端无障碍](/standards-guidelines/wcag/faq/#mobile)的覆盖**
-   **将 WCAG 2 应用于[文档和软件](/standards-guidelines/wcag/faq/#wcag2ict)**
-   以及更多内容...

关于 W3C 无障碍指南 3.0（前称“Silver”）的早期草案信息，可查看 **[WCAG 3 介绍](/standards-guidelines/wcag/wcag3-intro/)**。
