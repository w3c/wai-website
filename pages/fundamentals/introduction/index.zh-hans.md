---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Web无障碍简介 
lang: zh-hans
last_updated: 2019-07-12   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: #Add one -name: line for every translator
- name: "冉若曦"
  link: "https://www.w3.org/people/roy"

github:
    label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/zh-hans   # Add the language shortcode to the end; for example /fundamentals/accessibility-intro/fr
ref: /fundamentals/accessibility-intro/   # Do not change this

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this

# In the footer below:
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.  
footer: >
  <p><strong>日期:</strong> 2019年6月5日更新. 第一版发布于2005年. CHANGELOG.</p>
  <p><strong>编者:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>由教育及外展工作组 (<a href="https://www.w3.org/WAI/EO/">EOWG</a>)开发。</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

当网站和web工具得到适当的设计和编码时，残疾人就可以使用它们。然而，目前许多网站和工具都带有可访问性障碍，使得一些人很难或不可能使用它们。

使web无障碍对个人、企业和社会都有好处。国际web标准定义了无障碍所需的内容。

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">相关资源</span><br>
{% include video-link.html title="介绍Web无障碍和W3C标准的视频 <em>(4分钟)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits.html" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Accessibility in Context {#context}

<blockquote class="pull">
  <p>Web的力量在于它的普遍性。<br />
    每个人不论残疾与否都能访问是一个最基本的方面。</p>
  <footer><cite>Tim Berners-Lee, 万维网的发明者和W3C主管</cite></footer>
</blockquote>

Web从根本上是为所有人设计的，无论他们的硬件、软件、语言、位置或能力如何。当web达到这一目标时，具有不同听力、运动、视觉和认知能力的人就可以访问它。

因此，残疾对Web的影响发生了根本性的变化，因为Web消除了许多人在现实世界中面临的沟通和互动障碍。然而，当网站、应用程序、技术或工具设计得很糟糕时，它们可能会造成阻碍，使人们无法使用Web。

**对于想要创建高质量网站和web工具的开发人员和组织来说，无障碍是必不可少的，这就不会让一些人在使用他们的产品和服务的时候被排除在外。**


## 什么是Web无障碍 {#what}

Web无障碍是指设计和开发网站、工具和技术，使残疾人能够使用它们。更具体地说，人们可以:

-   感知、理解、导航和与Web交互
-   为Web做贡献

Web无障碍包括所有影响浏览网页的障碍，包括:

-   听觉
-   认知能力
-   神经损伤
-   身体上的
-   语言
-   视觉

Web无障碍对*无*残疾人士亦有好处，例如:

-   人们使用手机、智能手表、智能电视等具有小屏幕、不同输入模式的设备等
-   随着年龄的增长能力发生变化的老年人
-   有“暂时性残疾”的人，如手臂骨折或眼镜丢失
-   有“情境限制”的人，例如在明亮的阳光下或在无法听音频的环境中
-   使用慢速互联网连接，或带宽有限或昂贵的人

有关无障碍设施对残疾人士的重要性及在不同情况下对每个人的重要性的例子，请参阅:<br>
{% include video-link.html title="Web无障碍愿景视频 <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="更多信息关于什么是Web无障碍" class="simple aside" %}
{:/}

-   如果您想了解更多关于不同残疾如何影响Web使用的信息，并阅读有关残疾人士使用Web的场景，请参见 [[残疾人如何使用Web]](/people-use-web/)。
-   如果您想要更多关于WCAG支持的其他好处的例子，请参阅[[共享Web体验:移动设备用户和残疾人共同面临的障碍]](/standards-guidelines/shared-experiences/)和[Web无障碍使残疾人和非残疾人受益](https://www.w3.org/WAI/business-case/archive/soc#groups)。

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## 无障碍对个人、企业和社会的重要性 {#important}

在教育、就业、政府、商业、医疗、娱乐等生活的许多方面，Web都是越来越重要的资源。为了给具有不同能力的人提供平等的访问和平等的机会，网络的可访问性是至关重要的。《联合国残疾人权利公约》(UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html))将获得包括网络在内的信息和通信技术定义为一项基本人权 .

Web为许多残疾人提供了前所未有的获取信息和互动的可能性。也就是说，通过web技术可以更容易地克服打印、音频和可视媒体的可访问性障碍。

无障碍设施为残疾人士及其他人士提供社会包容服务，例如:

-   老年人
-   农村人口
-   发展中国家的人们

**对于无障碍，还有一个强有力的业务案例。**如前一节所示，无障碍设计改善了总体用户体验和满意度，特别是在各种情况下，跨不同的设备，并为老年用户。无障碍可以增强您的品牌，推动创新，并扩大您的市场范围。

在许多情况下，**法律要求**Web无障碍。

{::nomarkdown}
{% include box.html type="start" h="3" title="更多关于无障碍的重要信息" class="simple aside" %}
{:/}

-   对商业有益的通用信息在 [[数字无障碍的业务案例]](/business-case/)。
-   有关制定法律要求的指导意见已存档于 [法律及政策因素](https://www.w3.org/WAI/business-case/archive/pol)。

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## 使Web无障碍 {#making}

Web无障碍依赖于几个共同工作的组件，包括Web技术、Web浏览器和其他“用户代理”、创作工具和网站。

W3C Web无障碍推进 ([WAI](/get-involved/))开发描述无障碍解决方案的技术规范、指南、技术和支持资源。这些被认为是无障碍网页的国际标准;例如, <abbr title="Web Content Accessibility Guidelines (WCAG)">WCAG</abbr> 2.0 也是 <abbr title="International Organization for Standardization">ISO</abbr>标准: ISO/<abbr title="International Electrotechnical Commission">IEC</abbr> 40500。

{::nomarkdown}
{% include box.html type="start" h="3" title="更多关于如何使Web无障碍" class="simple aside" %}
{:/}

-   有关无障碍方面的更多信息请参见 [[web无障碍的基本组成部分]](/fundamentals/components/).
-   Web内容无障碍指南(WCAG), 创作工具无障碍指南(ATAG), 富互联网应用(ARIA), [[W3C无障碍标准概览]](/standards-guidelines/)中介绍了其他重要资源。
-   要了解更多关于W3C WAI如何通过多方利益攸关方、国际参与开发材料以及如何做出贡献的信息，请参见 [[关于WAI]](/about/) and [[参与WAI]](/get-involved/)。

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### 让你的网站更无障碍 {#website}

无障碍的许多方面都非常容易理解和实现。一些无障碍解决方案会比较复杂，需要更多的知识来实现。

从项目一开始就包含无障碍是最有效的方式，这样您就不需要返回并重新做工作。

{::nomarkdown}
{% include box.html type="start" h="3" title="更多关于如何让你的网站更无障碍" class="simple aside" %}
{:/}

-   有关无障碍要求和国际标准的介绍，请参见[[无障碍原理]](/fundamentals/accessibility-principles/)。
-   要从测试的角度理解一些常见的无障碍问题，请参见 [[轻松测试-第一次检查]](/test-evaluate/preliminary/)。
-   有关设计、编写和开发无障碍的一些基本考虑事项，请参见[[入门技巧]](/tips/)。
-   当您准备了解更多关于开发和设计的知识时，您可能会使用以下资源:
    -   [如何使用WCAG(快速参考)](https://www.w3.org/WAI/WCAG21/quickref/)
    -   [Web无障碍教程](https://www.w3.org/WAI/tutorials/)
-   有关项目管理和组织方面的考虑，请参见[[规划和管理Web可访问性]](/planning-and-managing/)。<br>
    如果您现在需要快速修复，请参阅[[临时修复方法]](/planning/interim-repairs/)。

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## 无障碍评测 {#evaluate}

在开发或重新设计网站时，尽早评测无障碍性，并贯穿整个开发过程，以便尽早发现无障碍问题，以便更容易地解决这些问题。简单的步骤，例如在浏览器中更改设置，可以帮助您评估无障碍的某些方面。综合评估，以确定一个网站是否符合所有无障碍指南需要更多的努力。

有一些评估工具可以帮助进行评测。但是，没有任何工具可以单独确定站点是否符合无障碍指南。需要有知识的人工评测来确定站点是否无障碍。


{::nomarkdown}
{% include box.html type="start" h="3" title="更多信息关于无障碍评测" class="simple aside" %}
{:/}

-   辅助无障碍评测的资源在[[无障碍评测网站]](/test-evaluate/)。

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## 例子

{% include excol.html type="middle" %}

### 图片的替代文本

![标识图片; HTML 标签 img alt='Web Accessibility Initiative logo'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

图像应包括*[等效替代文本](https://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv.html)* (alt文本) 在标记语言或者代码中.

如果没有为图像提供alt文本，则图像信息是不可访问的，例如，对于无法看到和使用屏幕阅读器的人来说，屏幕阅读器会大声读出页面上的信息，包括可视图像的alt文本。

当提供相同的alt文本时，盲人和关闭图像的人(例如，在带宽昂贵或较低的地区)都可以获得这些信息。它也适用于无法看到图像的技术，比如搜索引擎。

### 键盘输入

![鼠标划掉了](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

有些人不能使用鼠标，包括许多老年人，他们的精细运动控制能力有限。一个无障碍的网站不依赖鼠标；它使[所有功能都可以从键盘上获得](https://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html). 然后残疾人可以使用[辅助技术](/planning/involving-users/#at) 模仿键盘，如语音输入。

### 为音频提供文本

[![文本例子](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

就像图像对看不见的人不可用一样，音频文件对听不见的人也不可用。提供文本文本使聋人或重听人以及搜索引擎和其他听不见的技术可以访问音频信息。

Web提供文字记录既简单又相对便宜。还有[文本记录服务](http://www.uiaccess.com/transcripts/transcript_services.html) 来创建HTML格式的文本。

{::nomarkdown}
{% include box.html type="start" h="3" title="更多例子" class="simple aside" %}
{:/} 

-   [[开始行动的小贴士]](/tips/)
-   [[轻松评测-第一次检查]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Web无障碍愿景 &mdash; 视频和描述" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## 更多信息 {#more-info}

W3C WAI提供了不同方面的广泛资源，关于web无障碍[标准](/standards-guidelines/), [教育](/teach-advocate/), [评测](/test-evaluate/), [项目管理, 及政策](/planning/). 我们鼓励您浏览本网站，或浏览[WAI参考资料](/Resources/).
