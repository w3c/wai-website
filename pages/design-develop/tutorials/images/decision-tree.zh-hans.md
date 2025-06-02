---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "替代决策树"
title_html: "<code>alt</code> 替代决策树"
lang: zh-hans  # Change "en" to the translated-language shortcode
last_updated: 2024-05-13  # Keep the date of the English version

translation:
  last_updated: 2025-02-18

translators: 
- name: "金凯"
  link: "https://github.com/JinMokai"
contributors:
- name: "heybran"
  link: "https://github.com/heybran"

github:
  label: wai-tutorials

resource:
  ref: /tutorials/images/  # Do not change this

navigation:
  previous: /tutorials/images/imagemap/  # Do not change this
  next: /tutorials/images/tips/  # Do not change this

permalink: /tutorials/images/decision-tree/zh-hans # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /tutorials/images/decision-tree/ # Do not change this

changelog: /tutorials/changelog/

# In the footer below:
# Translate the Working Group name. Leave the Working Group acronym in English.
metafooter: true
editors:
  - Eric Eggert: "https://www.w3.org/People/yatil/"
  - Shadi Abou-Zahra: "https://www.w3.org/People/shadi/"
update_editors:
  - Brian Elton
contributing_participants:
  - 参阅 <a href="/WAI/tutorials/acknowledgements/">致谢</a>
support: 由教育和外联工作组开发 (<a href="https://www.w3.org/groups/wg/eowg">EOWG</a>)。 在 <a href="https://www.w3.org/WAI/ACT/">WAI-ACT project</a> 支持下开发, 并由 <strong>欧盟委员会<abbr title="信息社会技术">IST</abbr> 计划共同资助</strong>。

# Read Translations Notes for this resource at https://github.com/w3c/wai-tutorials#readme
---

{::nomarkdown}
{% include box.html type="start" h="2" title="概述" class="full" %}
{:/}

这个决策树描述了如何在各种情况下使用`<img>`元素的`alt`属性。对于某些类型的图像，可以采用其他方法，例如使用 CSS 背景图像来制作装饰图像，或使用网络字体来代替文本图像。

{::nomarkdown}
{% include box.html type="end" %}
{:/}

- **图像是否包含文字?**
  - {:.yes} **是：**
    -   **…并且文本也以*真实*文本的形式呈现在周围。**
      _使用空的`alt`属性。参阅 [装饰图像](/tutorials/images/decorative/)。_
    -   **…并且文字显示只是为了视觉效果。**
      _使用空的`alt`属性。参阅 [装饰图像](/tutorials/images/decorative/)。_
    -   **…并且文字还有一个特殊功能，例如是一个图标**
      _并且使用`alt`属性能传达图像的功能。参阅 [功能性图片](/tutorials/images/functional/)。_
    -   **…并且文本并没有在其他地方有所呈现。** _使用`alt`属性包含图片文本。参阅 [文本图像](/tutorials/images/textual/#styled-text-decorative-effect)。_
  - {:.no} **否：**
    - 继续。
- **图片是用于链接还是按钮，如果没有图片，是否很难或无法理解链接或按钮的作用？**
  - {:.yes} **是：**
    - _使用 `alt` 属性传达链接的目的地或采取的行动。参阅 [功能性图片](/tutorials/images/functional/)。_
  - {:.no} **否：**
    - 继续。
- **图片对当前页面或上下文是否有意义？**
  - {:.yes} **是：**
    - **…并且是简单的图形或照片。**
      _在`alt`属性中使用简明的图片说明，以传递该含义。参阅 [信息图片](/tutorials/images/informative/)。_
    - **…并且是图表或复杂的信息。**
      _在页面其他地方包含图片中的信息。参阅 [复杂图像](/tutorials/images/complex/)。_
    - **…并且它显示的内容与附近*真实*的文本相比是多余的**
      _使用一个空的`alt`属性。参阅 (多余的) [功能性图片](/tutorials/images/functional/#logo-image-within-link-text)。_
  - {:.no} **否：**
    - 继续。
- **图片是否纯粹是装饰性的，或不是为用户设计的？**
  - {:.yes} **是：**
    - _使用空`alt`属性。参阅 [装饰图像](/tutorials/images/decorative/)。_
  - {:.no} **否：**
    - 继续。
- **图片的用途上面没有列出，还是不确定应该提供什么`alt`文本？**
  - {:.yes} 这个决策树没有涵盖所有用例。有关提供文本替代方案的详细信息，请参阅 [[图像教程]](/tutorials/images/)。
{:.decision-tree}
