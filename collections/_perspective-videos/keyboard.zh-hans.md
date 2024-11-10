---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "键盘兼容性"
nav_title: "键盘兼容性"
lang: zh-hans    # Change "en" to the translated-language shortcode
last_updated: 2024-07-15    # Keep the date of the English version
order: 1

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "JinKai"   # Replace Jan Doe with translator name
    link: "https://github.com/JinMokai"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-perspective-videos

permalink: /perspective-videos/keyboard/zh-hans    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/keyboard/  # Do not change this

resource:
  ref: /perspective-videos/ # Do not change this

changelog: /perspective-videos/changelog/ # Do not change this
acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: 关于键盘兼容性的网络无障碍短视频 - 它是什么, 谁依赖它, 以及谁需要它工作。
image: /content-images/perspective-videos/keyboard.jpg
teaser_text: 所用功能都必须可通过使用键盘。 也就是说，用户可以使用Tab键和其他按键访问链接，按钮，表单和其他控件。网站不应使用鼠标。键盘无障碍对残疾人士至关重要，在各种情况下对每个人都有益处。

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>编辑兼项目负责人：</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>。 由 <a href="https://www.w3.org/WAI/EO/">教育和外展工作组 (EOWG)</a> 在欧盟委员会共同资助的 <a href="https://www.w3.org/WAI/DEV/">WAI-DEV 项目</a> 的支持下开发。 在福特基金会支持下更新。 ACKNOWLEDGEMENTS.</p>
---

网络无障碍对残疾人是至关重要的，对所有人都有用。了解无障碍性的影响在各种情况下对每个人都有益处。

## 视频键盘兼容性
{:#film.no-display}

{% include video-player-data.html
    video-id="keyboard"
    yt-id="93UgG72os8M"
    yt-id-ad="1rBwxGMT9ZM"
%}

此视频的信息可在下方以[带视觉效果的文本描述](#transcript) 的形式获取。

## 什么是“键盘兼容性”
{:#what}

所有功能都必须可使用键盘。也就是说，用户可以通过使用Tab键和其他按键访问并在链接、按钮、表单以及其他控件之间移动。网站不应使用鼠标；例如，弹出日历也应允许用户输入日期。

## 谁依赖这个功能？
{:#who}

-   无法使用鼠标的残疾人
-   看不见屏幕上鼠标指针的盲人
-   患有慢性疾病如重复性劳损（RSI）

## 有哪些其他的好处？
{:#others}

-   内容适用于有临时限制的人，例如手臂受伤或鼠标坏了

## 怎样才能做到这一点呢？
{:#action}

原生的HTMl控件，像链接，按钮和表单元素，默认支持使用键盘操作，应经可能使用。自定义控件，CSS样式，和交互脚本可能需要额外编码以实现键盘兼容性。确保Tab键顺序合理，允许键盘导航内容和控件。提供一种方式，让用户能够使用键盘在内容块和控件之间跳转，以及关闭弹出弹窗和菜单。键盘问题尤其发生在表单、菜单和许多应用控件上。

## 学习更多
{:#resources}

-   **无障碍性原则:**
    -   [功能可以通过键盘访问](/fundamentals/accessibility-principles/#keyboard)
-   **入门指南:**
    -   [确保所有交互元素可以通过键盘访问](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
-   **简单检查:**
    -   [键盘通过视觉聚焦](/test-evaluate/preliminary/#interaction)
-   **用户故事:**
    -   [Alex，记者，患有重复性劳损](/people-use-web/user-stories/archived/#reporter)
    -   [Ilya，视觉障碍资深员工](/people-use-web/user-stories/archived/#accountant)
    -   [Kaseem，聋盲少年](/people-use-web/user-stories/archived/#teenager)
-   **Web内容无障碍指南 ([WCAG 概述](/standards-guidelines/wcag/)):**
    -   [与“键盘”有关的成功标准](https://www.w3.org/WAI/WCAG21/quickref/?tags=keyboard)
-   **移动端使用范围:**
    -   [交互和导航需要鼠标](/standards-guidelines/shared-experiences/#mouse)
-   **Tutorial:**
    -   [Web无障碍教程](https://www.w3.org/WAI/tutorials/) (几个相关主题)

## 带视觉效果的文本描述 {#transcript}

<table>
  <thead>
    <tr>
      <th width="65%">音频</th>
      <th>视觉</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Web无障碍视角： 键盘兼容性</td>
      <td>Web无障碍视角：<br>
        键盘兼容性</td>
    </tr>
    <tr>
      <td>因为鼠标失灵而无法使用电脑令人沮丧</td>
      <td>一个人把计算机鼠标从桌子掉下。计算机鼠标不能长时间工作</td>
    </tr>
    <tr>
      <td>许多人仅使用键盘去导航网站 &mdash; 或因喜好或因环境<br></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>无论是暂时的行动受限，</td>
      <td>一个手臂吊着绷带的女人在键盘打字 &mdash; 但是网站需要使用鼠标选择日期。</td>
    </tr>
    <tr>
      <td>终身身体残疾，</td>
      <td>一个在轮椅上的男人在用嘴棒打字</td>
    </tr>
    <tr>
      <td>或者只是鼠标坏，<br>
        结果是一样的:</td>
      <td>做在轮椅上男人也不能使用网站</td>
    </tr>
    <tr>
      <td>网站和应用需要可通过键盘操作</td>
      <td>他切换到一个允许他可以输入日期的网站</td>
    </tr>
    <tr>
      <td>网络无障碍性质：对某些人至关重要，对所有人都有用</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>访问更多关于键盘兼容性信息 w3.org/WAI/perspectives</td>
      <td>访问<br>
        w3.org/WAI/perspectives<br>
        有关更多信息<br>
        键盘兼容性。<br>
        万维网联盟网络无障碍倡议徽标</td>
    </tr>
  </tbody>
</table>
