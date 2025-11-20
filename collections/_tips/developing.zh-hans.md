---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "为实现无障碍而开发 – 入门技巧"
title_html: "为实现无障碍而开发"
nav_title: "开发技巧"
lang: zh-hans  # Change "en" to the translated-language shortcode
last_updated: 2024-07-16   # Keep the date of the English version

translation:
  last_updated: 2024-11-22   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
  link: "https://github.com/heybran"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
contributors:
- name: "金凯"   # Replace Jan Doe with contributor name, or delete this line if none
  link: "https://github.com/JinMokai"
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

resource:
  ref: /tips/

navigation:
  previous: /tips/designing/


github:
  label: wai-tips
  
permalink: /tips/developing/zh-hans   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/developing/  # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#developing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>日期:</strong> 2024年7月16日小更新。2016 年4月15日更新。2015年9月首次发布。</p>
  <p><strong>编者:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, 和 <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS 页面列出了贡献者和功劳。</p>
  <p>由教育及外展工作组(<a href="https://www.w3.org/WAI/EO/">EOWG</a>)开发. 
  作为<a href="https://www.w3.org/WAI/DEV/">WAI-DEV项目</a>的一部分进行开发，该项目由欧盟委员会共同资助。</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="摘要" class="full" %}
{:/}

本页介绍了一些基本注意事项，帮助您开始开发更便于残障人士访问的网页内容。这些技巧是帮助您满足Web内容无障碍指南（WCAG）要求的良好实践。请跟随链接进入相关的 WCAG 要求、“了解” 文档中的详细背景、教程中的指导、用户故事等。

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="页面目录" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}



## 为每个表单控件关联一个标签

将`<label>`元素的`for`属性关联到表单控件的`id`属性，或者使用<abbr title="无障碍富互联网应用程序">WAI-ARIA</abbr>属性。在特定情况下，视觉上隐藏`<label>`元素是允许的，但在大多数情况下，需要使用label元素来帮助所有用户理解所需的输入内容。

{::nomarkdown}
{% include_cached box.html type="start" title="示例: 使用 <code>for</code> 和 <code>id</code> 属性" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 渲染输出</figcaption>
<label for="username">用户名</label>
<input id="username" type="text" name="username">
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} 代码片段</figcaption>
{:/}

~~~html
<label for="username">用户名</label>
<input id="username" type="text" name="username">
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [标签或说明 3.3.2 指南](/WAI/WCAG21/quickref/#labels-or-instructions) ([理解 3.3.2 指南](/WAI/WCAG21/Understanding/labels-or-instructions))
* **教程**
  * [标签控制](/tutorials/forms/labels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 为图片添加替代文本

确保为所有信息性和功能性图片添加图像替代文本。对装饰性图片使用空的替代文本`alt=“”`，或将其包含在 CSS 中。图片替代文本通常由负责书面内容的人员提供。

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [非文本内容 1.1.1 指南](/WAI/WCAG21/quickref/#non-text-content) ([理解 1.1.1 指南](/WAI/WCAG21/Understanding/non-text-content))
* **教程**
  * [图片](/tutorials/images/)
* **用户故事**
  * [[Stefan，患有注意力缺陷多动障碍和阅读障碍的学生]](/people-use-web/user-stories/story-eight/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 确定页面语言和语言变化

在 `html` 元素中使用 `lang` 属性来指明每个页面的主要语言，例如 `<html lang=“en”>`。当特定元素的语言与页面其他部分不同时，可在该元素上使用 `lang` 属性。

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [网页语言 3.1.1 指南](/WAI/WCAG21/quickref/#language-of-page) ([理解 3.1.1 指南](/WAI/WCAG21/Understanding/language-of-page))
  * [局部语言 3.1.2 指南](/WAI/WCAG21/quickref/#language-of-parts) ([理解 3.1.2 指南](/WAI/WCAG21/Understanding/language-of-parts))
* **怎么做**
  * [在HTML中声明语言](/International/questions/qa-html-language-declarations)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 使用正确的HTML元素来传达语义和结构

为标题、列表、表格等使用语义化的标记。HTML5 提供了许多元素，如 `<nav>` 和 `<aside>`，以便更好地组织内容。
<abbr>WAI-ARIA</abbr> 角色可以提供额外的含义，例如，使用 `role=“search”` 来标识搜索功能。
与设计人员和内容撰写人员合作，就含义达成一致，然后统一使用。

{::nomarkdown}
{% include_cached box.html type="start" title="示例： 使用 HTML 提供结构和意义" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 渲染输出</figcaption>
<section>
  <article>
    <h2>超级熊转危为安</h2>
    <time datetime="2015-08-07">2015年8月7日</time>
    <p>超级熊从树上救下一只小猫，再次证明了自己的能力。目击者称，超级熊的努力并没有得到小猫的感激，它给救它的超级熊造成了一些轻微的抓伤。</p>
    <aside>
      <h3>相关文章</h3>
      <ul>
        <li><a href="#">超级熊收到城市钥匙</a></li>
        <li><a href="#">超级熊成为市长候选人</a></li>
      </ul>
    </aside>
  </article>
</section>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} 代码片段</figcaption>
{:/}

~~~html
<section>
  <article>
    <h2>超级熊转危为安</h2>
    <time datetime="2015-08-07">2015年8月7日</time>
    <p>超级熊从树上救下一只小猫，再次证明了自己的能力。目击者称，超级熊的努力并没有得到小猫的感激，它给救它的超级熊造成了一些轻微的抓伤。</p>
    <aside>
      <h3>相关文章</h3>
      <ul>
        <li><a href="#">超级熊收到城市钥匙</a></li>
        <li><a href="#">超级熊成为市长候选人</a></li>
      </ul>
    </aside>
  </article>
</section>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="示例: 在搜索字段中使用 <abbr>WAI-ARIA</abbr>" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 渲染输出</figcaption>
<form action="#" method="post">
  <div role="search">
    <label for="search">搜索</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">您可以通过编号或者姓名查询客户信息</div>
    <button type="submit">提交</button>
  </div>
</form>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} 代码片段</figcaption>
{:/}

~~~html
<form action="#" method="post">
  <div role="search">
    <label for="search">查询</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">您可以通过编号或者姓名查询客户信息</div>
    <button type="submit">提交</button>
  </div>
</form>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [信息和关系 1.3.1 指南](/WAI/WCAG21/quickref/#info-and-relationships) ([理解 1.3.1 指南](/WAI/WCAG21/Understanding/info-and-relationships))
* **教程**
  * [页面结构](/tutorials/page-structure/)
  * [表格](/tutorials/tables/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 帮助用户避免和纠正错误

提供清晰的说明、错误信息和通知，来帮助用户填写网站上的表单。当出现错误时：

* 帮助用户找到问题所在
* 提供具体、易懂的解释
* 建议更正方法

在处理用户输入时，对格式尽可能宽容。例如，接受包含空格的电话号码，并根据需要删除空格。

{::nomarkdown}
{% include_cached box.html type="start" title="示例: 格式要求宽容度大的澳大利亚电话号码表单控件" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 渲染输出</figcaption>
<label for="phone">电话</label>
<input id="phone" name="phone" type="tel" pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$" aria-describedby="phone-desc">
<p id="phone-desc">例如, (02) 1234 1234</p>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} 代码片段</figcaption>
{:/}

~~~html
<label for="phone">电话</label>
<input id="phone" name="phone" type="tel"
       pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$"
       aria-describedby="phone-desc">
<p id="phone-desc">例如, (02) 1234 1234</p>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [错误标识 3.3.1 指南](/WAI/WCAG21/quickref/#error-identification) ([理解 3.3.1 指南](/WAI/WCAG21/Understanding/error-identification))
* **教程**
  * [校验输入](/tutorials/forms/validation/)
* **用户故事**
  * [[Ian, 患有自闭症的数据录入员]](/people-use-web/user-stories/story-two/)
  * [[Stefan，患有注意力缺陷多动障碍和阅读障碍的学生]](/people-use-web/user-stories/story-eight/)
  * [[Elias, 患有低视力，手颤震，和轻度短期失忆症的退休人员]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 在代码顺序中反映阅读顺序

确保代码中元素的顺序与所展示信息的逻辑顺序一致。检查的方法之一是移除 CSS 样式并检查内容的顺序是否合理。

{::nomarkdown}
{% include_cached box.html type="start" title="示例： 在代码中反映逻辑阅读顺序" class="example" %}

<div class="two-column">
<div class="order">
  <article class="product">
    <h3 class="name">太空训练鞋</h3>
    {% include_cached image.html src="tips/trainer.png" alt="紫色高帮运动鞋，白色鞋带，脚踝外侧有白色空点，白色鞋头帽" %}
    <p class="desc">太空训练鞋，经典时尚的外观</p>
    <p class="buy"><a href="javascript:return false" class="button button-icon"><span>{% include_cached icon.html name="cart-plus" %} 加入购物车</span></a></p>
  </article>
</div>
<figure>
<figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} 标题前的图像可能会被错过</figcaption>
{:/}

~~~html
<img src="images/trainer.png" alt="...">
<h3>太空训练鞋</h3>
<p>太空...</p>
<a href="...">加入购物车</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
查看完整代码示范
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <img alt="紫色高帮运动鞋，白色鞋带，脚踝外侧有白色空点，白色鞋头帽" src="images/trainer.png">
  <h3 class="name">太空训练鞋</h3>
  <p class="desc">太空训练鞋，经典时尚的外观</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> 加入购物车</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
<figure>
<figcaption>{% include_cached icon.html name="check-circle" label="OK" %} 标题标志着章节的开始</figcaption>
{:/}

~~~html
<h3>太空训练鞋</h3>
<img src="images/trainer.png" alt="...">
<p>太空...</p>
<a href="...">加入购物车</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
查看完整代码示范
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <h3 class="name">太空训练鞋</h3>
  <img alt="紫色高帮运动鞋，白色鞋带，脚踝外侧有白色空点，白色鞋头帽" src="images/trainer.png">
  <p class="desc">太空训练鞋，经典时尚的外观</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> 加入购物车</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [有含义的顺序 1.3.2 指南](/WAI/WCAG21/quickref/#meaningful-sequence) ([理解 1.3.2 指南](/WAI/WCAG21/Understanding/meaningful-sequence))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 编写能适应用户技术的代码

使用响应式设计，使显示内容适应不同的缩放状态和视窗尺寸，如移动设备和平板电脑。
当字体大小增加至少200%时，应避免水平滚动并防止内容被剪切。
使用渐进增强技术，确保无论使用何种技术，都能使用核心功能和内容。

{::nomarkdown}
{% include_cached box.html type="start" title="示例： 使用媒体查询调整导航" class="example" %}

<div class="adapt-code">
  <figure>
    <div class="code">
      <div class="grid-4">
        <div class="from-col1 to-col2">
{:/}

~~~css
/* 在窄视窗上，使导航全宽 */
@media screen and (min-width: 25em) {
  #nav {
    float: none;
    width: auto;
  }
  #main {
    margin-left: 0;
  }
}
~~~

{::nomarkdown}
</div>
<div class="from-col3 to-col4">
{:/}

~~~css
/* 在较宽的视窗中，将导航放在左侧 */
@media screen and (min-width: 43em) {
  #nav {
    float: left;
    width: 24%;
  }
  #main {
    margin-left: 27%;
  }
}
~~~

{::nomarkdown}
      </div>
    </div>
  </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [调整文本 1.4.4 指南](/WAI/WCAG21/quickref/#resize-text) ([理解 1.4.4 指南](/WAI/WCAG21/Understanding/resize-text))
  * [一致性标识 3.2.4 指南](/WAI/WCAG21/quickref/#consistent-identification) ([理解 3.2.4 指南](/WAI/WCAG21/Understanding/consistent-identification))
* **背景**
  * [小屏幕尺寸](/TR/mobile-accessibility-mapping/#h-small-screen-size)
* **用户故事**
  * [[Dhruv, 老年聋哑学生]](/people-use-web/user-stories/story-six/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 为非标准互动元素提供意义

使用 <abbr title="可访问的富互联网应用程序">WAI-ARIA</abbr>，为自定义组件（如手风琴组件accordions和自定义按钮）提供功能和状态信息。
例如，`role=“navigation”` 和 `aria-expanded=“true”`。
要实现此类组件的行为，如展开和折叠内容或组件如何响应键盘事件，还需要额外的代码。

{::nomarkdown}
{% include_cached box.html type="start" title="示例： 使用 WAI-ARIA 体现菜单功能和状态" class="example" %}

<div class="non-standard">
  <figure>
      <div class="code">
{:/}

~~~html
<nav aria-label="主导航" role="navigation">
  <ul>
    <li><a href="...">首页</a></li>
    <li><a href="...">商店</a></li>
    <li class="has-submenu">
      <a aria-expanded="false" aria-haspopup="true" href="...">太空熊</a>
      <ul>
          <li><a href="...">太空熊 6</a></li>
          <li><a href="...">太空熊 6 Plus</a></li>
      </ul>
    </li>
    <li><a href="...">火星车</a></li>
    <li><a href="...">联系</a></li>
  </ul>
</nav>
~~~

{::nomarkdown}
      </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [名称，角色，值 4.1.2 指南](/WAI/WCAG21/quickref/#name-role-value) ([理解 4.1.2 指南](/WAI/WCAG21/Understanding/name-role-value))
* **背景**
  * [在 HTML 中使用 ARIA 的注意事项](/TR/aria-in-html/)
* **用户故事**
  * [[Sophie, 患有唐氏综合症的篮球迷]](/people-use-web/user-stories/story-five/)
  * [[Elias, 患有低视力，手颤震，和轻度短期失忆症的退休人员]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 确保所有可交互元素可以通过键盘操作

考虑键盘操作，尤其是在开发像菜单，鼠标悬浮信息，收缩件或者媒体播放器等交互元素。
对于默认不支持Tab键的 `<div>`，`<span>` 等元素，当它们被用来当作交互元素时，则可以添加 `tabindex="0"` 属性使键盘可以焦距到它们上面，同时使用脚本捕捉和反应键盘事件。

{::nomarkdown}
{% include_cached box.html type="start" title="示例: 键盘操作友好的菜单按钮" class="example" %}

<div class="two-column keyboard-accessible">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 渲染输出</figcaption>
<div class="rendered">
  <div id="example-button" class="menu-button" role="button" aria-expanded="false" aria-controls="example-button-menu" tabindex="0">{% include_cached icon.html name="menu" %} 菜单</div>
  <div id="example-button-menu" class="menu" aria-hidden="true" tabindex="-1">
    <ul>
      <li><a href="javascript:return false">关于</a></li>
      <li><a href="javascript:return false">新闻</a></li>
      <li><a href="javascript:return false">门票</a></li>
      <li><a href="javascript:return false">景点</a></li>
    </ul>
  </div>
</div>
<script>
  !function() {
    "use strict";
    function e(e) {
        "true" == e.getAttribute("aria-hidden") ? (e.setAttribute("aria-hidden", "false"), e.focus()) : e.setAttribute("aria-hidden", "true")
    }
    function t(e) {
        "true" == e.getAttribute("aria-checked") ? (e.setAttribute("aria-checked", "false"), e.getElementsByTagName("span")[0].innerHTML = "Off") : (e.setAttribute("aria-checked", "true"), e.getElementsByTagName("span")[0].innerHTML = "On")
    }
    var a = document.getElementById("example-button");
    a && (a.addEventListener("keydown", function(t) {
        t.keyCode && 13 == t.keyCode && (e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true"))
    }), a.addEventListener("click", function(t) {
        e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true")
    }));
    var n = document.getElementById("switch");
    n && (n.addEventListener("keydown", function(e) {
        !e.keyCode || 32 != e.keyCode && 13 != e.keyCode || t(this)
    }), n.addEventListener("click", function() {
        t(this)
    }))
}();
</script>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} 代码片段</figcaption>
{:/}

~~~javascript
var buttonExample = document.getElementById('example-button');

buttonExample.addEventListener('keydown', function(e) {
  // 当回车键按下时切换菜单状态
  if(e.keyCode && e.keyCode == 13) {
    toggleMenu(document.getElementById('example-button-menu'));
  }
});

buttonExample.addEventListener('click', function(e) {
  // 当鼠标点击时切换菜单状态
  toggleMenu(document.getElementById('example-button-menu'));
});
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [键盘 2.1.1 指南](/WAI/WCAG21/quickref/#keyboard) ([理解 2.1.1 指南](/WAI/WCAG21/Understanding/keyboard))
* **用户故事**
  * [[Ade, 双臂功能受限的记者]](/people-use-web/user-stories/story-one/)
  * [[Lakshmi, 盲人高级会计师]](/people-use-web/user-stories/story-three/)
  * [[Marta, 一位盲聋的营销助理]](/people-use-web/user-stories/story-seven/)
  * [[Elias, 患有低视力，手颤震，和轻度短期失忆症的退休人员]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 尽可能避免使用验证码（CAPTCHA）

验证码会给用户造成很多阻碍。除了验证码，还有其他更易使用的用户输入验证方式，比如自动检测或者界面交互验证。
如果一定需要用到验证码，确保它是容易理解的，另外提供其他可选方案，比如：

* 提供多于两种解决验证码的方法
* 让用户有机会请求可绕过验证码的人工代表的帮助
* 授权用户无需验证码

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **Web内容无障碍指南（WCAG）**
  * [非文本内容 1.1.1 指南](/WAI/WCAG21/quickref/#non-text-content) ([理解 1.1.1 指南](/WAI/WCAG21/Understanding/non-text-content))
* **背景**
  * [验证码（CAPTCHA）使无障碍变得困难](/TR/turingtest/)
* **用户故事**
  * [[Marta, 一位盲聋的营销助理]](/people-use-web/user-stories/story-seven/)
  * [[Elias, 患有低视力，手颤震，和轻度短期失忆症的退休人员]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="了解更多无障碍相关知识" class="large" icon="readmore" %}
{:/}

这些提示是Web无障碍需要考虑的一些事项。以下资源可以帮助您了解无障碍的重要性，以及让残疾人更容易访问Web的指南。

* [Web无障碍简介](/fundamentals/accessibility-intro/) — 无障碍简介，并提供许多有用资源的链接
* [无障碍原则](/fundamentals/accessibility-principles/) — <abbr>WCAG</abbr> 要求简介
* [残疾人如何使用Web](/people-use-web/) — 通过真实事例说明无障碍给残疾人士带来的益处
* [Web无障碍教程](/tutorials/) — 向您展示如何开发便于残障人士访问的网页内容
* [网站无障碍提升前后对比](/WAI/demos/bad/) — 对比具有相同视觉设计的无障碍不友好和无障碍友好的网站，并附有注释，强调关键的无障碍屏障和纠正方法，以及 <abbr>WCAG</abbr> 的评估报告。
* [如何满足WCAG规范 (快速查阅)](/WAI/WCAG21/quickref/) — 所有WCAG要求和技术的可定制查阅
* [Web无障碍评估工具列表](/WAI/ER/tools/) — 提供一系列工具，帮助探索代码的无障碍
* [<abbr>WAI-ARIA</abbr> 概述](/standards-guidelines/aria/) — <abbr>WAI-ARIA</abbr> 简介及所有规范的链接

{::nomarkdown}
{% include box.html type="end" %}
{:/}
