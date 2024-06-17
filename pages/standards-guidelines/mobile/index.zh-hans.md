---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "W3C 移动端无障碍"
nav_title: "W3C 移动端无障碍"
lang: zh-hans
last_updated: 2021-05-17  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "李喆明"
  link: "https://imnerd.org/about.html"

github:
  label: wai-mobile

permalink: /standards-guidelines/mobile/zh-hans    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/mobile/  # Do not change this

changelog: /standards-guidelines/mobile/changelog/  # Do not change this
feedbackmail: wai@w3.org

# In the footer below:
# Do not translate or change CHANGELOG.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>日期：</strong>更新于2021年5月14日。第一版发布于2018年1月。CHANGELOG.</p>
  <p><strong>编者：</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. 贡献者： <a href="https://www.w3.org/People/Brewer/">Judy Brewer</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

- 移动端无障碍没有单独的规范引导，**它包含在 W3C Web无障碍推进（WAI）的无障碍规范/引导中**。
- W3C正在开发更新的需求和更具体的移动无障碍指南。
- **WAI 的[移动端无障碍工作组](https://www.w3.org/WAI/GL/mobile-a11y-tf/)有以下几个：**
    - [移动端无障碍：Web 内容无障碍规范 2.0 和其它 W3C/WAI 规范在移动端如何应用](https://www.w3.org/TR/mobile-accessibility-mapping/)
    - WCAG 2 成功标准和技术
    - 未来 W3C 标准中集成移动端无障碍规范

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## 不仅仅是“移动端” {#intro}

“移动端无障碍”的目的是让残障人士在移动端或者其它设备访问网站或者应用时能够更加流畅不受阻碍。Web 无障碍推进（WAI）的任务是解决这群人在各种不同的设备上访问 Web 时的无障碍问题，包括：

- 手机和平板
- 多媒体电视
- 可穿戴设备，例如智能手表
- 车载设备以及飞机椅背电视
- 家用电器
- 其它“物联网（IoT）”设备

这些设备的无障碍会存在很多亟待解决的问题，包括：

- 触屏
- 小屏幕尺寸
- 不同的输入形式，包括语音输入以及基于压力感应的 3D 触控
- 设配上一些特别的配置项，例如亮度
- 其它

## W3C WAI 规范解决移动端无障碍问题 {#covered}

**WAI 无障碍规范解决移动端无障碍问题**：

- **Web 内容**无障碍指南 ([WCAG](/standards-guidelines/wcag/)) 涵盖了 Web 页面和 Web 应用等大部分移动端设备上的内容。
    - 如果想要了解移动端 Web 内容，移动端 Web 应用以及客户端应用和基于客户端应用内嵌 Web 组件的混合应用中如何实现 WCAG 2.0 规范，可以查看 [移动端无障碍：Web 内容无障碍规范 2.0 和其它 W3C/WAI 规范在移动端如何应用](https://www.w3.org/TR/mobile-accessibility-mapping/)。
    - 一个更通用的资源，也包括了移动应用程序[WCAG2ICT：非 Web 信息和通信基于上 WCAG 2.0 规范的应用](/standards-guidelines/wcag/non-web-ict/)。
    - WCAG 2.1 指南发布于2018年6月，包含新的要求（“成功标准”）解决移动端无障碍问题。[[WCAG 2.1 中有什么新内容]](/standards-guidelines/wcag/new-in-21/)中有详细介绍。
- **用户终端**无障碍规范（[UAAG](/standards-guidelines/uaag/)）涵盖了 Web 浏览器和其它“用户终端”，包括移动端浏览器。
    - 关于 Web 浏览器如何遵循 UAAG 规范让残障人士在移动端设备上访问 Web，可以访问[ UAAG 规范移动端无障碍示例](https://www.w3.org/TR/IMPLEMENTING-UAAG20/mobile)查看。
    - 如果想要翻阅更多相关的资料，可以查看 [移动电话上 UAAG 规范的应用](https://www.w3.org/WAI/UA/work/wiki/Applying_UAAG_to_Mobile_Phones)。
- **创作工具**无障碍规范([ATAG](/standards-guidelines/atag/)) 涵盖了为终端，包括移动端，创建网页和应用的软件。
- **[WAI-ARIA](/standards-guidelines/aria/)**（无障碍富互联网应用）定义了让Web内容无障碍的方法，特别是动态内容以及用户交互控制等操作。它同时适用于移动端设备无障碍 Web 网站和应用。

**W3C 解决移动端无障碍。**WAI 工作组会确保所有 W3C 核心技术规范对无障碍的支持，包括它们在移动端 Web 中的应用。所有的 W3C 规范会经过 WAI 无障碍平台架构工作组（[APA](https://www.w3.org/WAI/APA/)）的审查。

W3C 移动端工作内容包括[移动端应用最佳实践](https://www.w3.org/TR/mwabp/)以及[移动端 Web 最佳实践](https://www.w3.org/TR/mobile-bp/)。关于 W3C 开发的增强 Web 应用程序功能简介以及他们如何应用于移动端中，可以查阅[移动端 Web 应用标准](https://www.w3.org/Mobile/mobile-web-app-state/) 了解更多。

## 订阅更新 {#updates}

如果你想到实时了解 W3C WAI 规范之后在移动端无障碍上的工作内容，可以订阅 [[获取 WAI 新闻]](/news/subscribe/) 获取实时通知。

## 加入我们 {#involved}

首先可以 [[加入 WAI 工作组]](/about/participating/) 了解一些基础信息。

大部分 WAI 中和移动端无障碍的工作通过[移动端无障碍特别任务团](https://www.w3.org/WAI/GL/mobile-a11y-tf/)发布。如果你想要加入到 WAI 小组中参与更多的移动端无障碍规范的话，请将您的一些基本信息例如个人兴趣以及可用时间等邮件发送给工作组协调员 [Kim Patch 和 Kathy Wahlbin](mailto:kathy@interactiveaccessibility.com,Kim@redstartsystems.com?cc=wai@w3.org,ran@w3.org&subject=Mobile%20Accessibility%20Task%20Force%20Enquiry) 同时抄送给 WAI 工作组成员 (wai@w3.org)。

## 关于 W3C 和 WAI {#about}

万维网联盟（W3C）是一个国际联盟，其成员组织、全职工作人员和公众共同开发 Web 标准。W3C 的目标是通过创建 Web 标准规范来确保 Web 长期增长。[关于 W3C](https://www.w3.org/about/) 可以查看更多。

W3C Web 无障碍推进（WAI）是组织世界各地的人们和组织共同定义策略、起草规范、提供资源用来帮助残障人士解决 Web 无障碍访问问题。访问 [WAI](https://www.w3.org/WAI/) 可以了解更多 WAI 的内容。
