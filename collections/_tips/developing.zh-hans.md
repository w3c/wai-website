---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "为实现无障碍而开发 – 入门技巧"
title_html: "为实现无障碍而开发"
nav_title: "开发技巧"
lang: zh-hans  # Change "en" to the translated-language shortcode
last_updated: 2024-10-12   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/

navigation:
  previous: /tips/designing/

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "heybran"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

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
  <p><strong>日期:</strong> 2024 年 7 月 16 日小更新。2016 年 4 月 15 日更新。2015 年 9 月首次发布。</p>
  <p><strong>编辑:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, 和 <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
  <p>Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Developed as part of the <a href="https://www.w3.org/WAI/DEV/">WAI-DEV project</a>, co-funded by the European Commission.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="摘要" class="full" %}
{:/}

本页介绍了一些基本注意事项，帮助您开始开发更便于残障人士访问的网页内容。这些技巧是帮助您满足《网页内容可访问性指南》（WCAG）要求的良好实践。请跟随链接进入相关的 WCAG 要求、“了解” 文档中的详细背景、教程中的指导、用户故事等。

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
{% include_cached box.html type="start" title="例子: 使用 <code>for</code> 和 <code>id</code> 属性" class="example" %}

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

* **WCAG（网页内容无障碍指南）**
  * [标签或指示 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([理解 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
* **教程**
  * [标签控制](/tutorials/forms/labels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 为图片添加替代文字

Ensure that alternative text for images is added to all informational and functional images. Use empty alternative text, `alt=""` for decorative images, or include them in the CSS instead. Text alternatives are usually provided by those responsible for written content.
确保为所有信息性和功能性图片添加图像替代文字。对装饰性图片使用空的替代文字`alt=“”`，或将其包含在 CSS 中。图片替代文字通常由负责书面内容的人员提供。

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **WCAG（网页内容无障碍指南）**
  * [非文字内容 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([理解 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
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

* **WCAG（网页内容无障碍指南）**
  * [Language of Page 3.1.1](/WAI/WCAG21/quickref/#language-of-page) ([Understanding 3.1.1](/WAI/WCAG21/Understanding/language-of-page))
  * [Language of Parts 3.1.2](/WAI/WCAG21/quickref/#language-of-parts) ([Understanding 3.1.2](/WAI/WCAG21/Understanding/language-of-parts))
* **How To**
  * [在HTML中声明语言](/International/questions/qa-html-language-declarations)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 使用正确的HTML元素来传达语义和结构

Use appropriate mark-up for headings, lists, tables, etc. HTML5 provides additional elements, such as `<nav>` and `<aside>`, to better structure your content. <abbr>WAI-ARIA</abbr> roles can provide additional meaning, for example, using `role="search"` to identify search functionality. Work with designers and content writers to agree on meanings and then use them consistently.
使用合适的标记用来表达标题，列表，表格等。
TODO: mark-up总感觉翻译不对。。。

{::nomarkdown}
{% include_cached box.html type="start" title="举例说明： 使用 HTML 提供结构和意义" class="example" %}

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
        <li><a href="#">Bear receives key to city</a></li>
        <li><a href="#">Superbear stands for mayor</a></li>
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
        <li><a href="#">Bear receives key to city</a></li>
        <li><a href="#">Superbear stands for mayor</a></li>
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
{% include_cached box.html type="start" title="示例: 在搜索控件中使用 <abbr>WAI-ARIA</abbr>" class="example" %}

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

* **WCAG（网页内容无障碍指南）**
  * [信息和关系 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([Understanding 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
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
<label for="phone">Phone</label>
<input id="phone" name="phone" type="tel"
       pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$"
       aria-describedby="phone-desc">
<p id="phone-desc">For example, (02) 1234 1234</p>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **WCAG**
  * [Error Identifications 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([Understanding 3.3.1](/WAI/WCAG21/Understanding/error-identification))
* **Tutorial**
  * [Validating Input](/tutorials/forms/validation/)
* **User Stories**
  * [[Ian, data entry clerk with autism]](/people-use-web/user-stories/story-two/)
  * [[Stefan, student with attention deficit hyperactivity disorder and dyslexia]](/people-use-web/user-stories/story-eight/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Reflect the reading order in the code order

Ensure that the order of elements in the code matches the logical order of the information presented. One way to check this is to remove CSS styling and review that the order of the content makes sense.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Reflecting the logical reading order in the code" class="example" %}

<div class="two-column">
<div class="order">
  <article class="product">
    <h3 class="name">Space trainers</h3>
    {% include_cached image.html src="tips/trainer.png" alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" %}
    <p class="desc">Space trainer for a classic and stylish look.</p>
    <p class="buy"><a href="javascript:return false" class="button button-icon"><span>{% include_cached icon.html name="cart-plus" %} Add to cart</span></a></p>
  </article>
</div>
<figure>
<figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} Image before heading may be missed</figcaption>
{:/}

~~~html
<img src="images/trainer.png" alt="...">
<h3>Space trainers</h3>
<p>Space...</p>
<a href="...">Add to cart</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
查看完整代码示范
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <img alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" src="images/trainer.png">
  <h3 class="name">Space trainers</h3>
  <p class="desc">Space trainer for a classic and stylish look.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Add to cart</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
<figure>
<figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Heading marks the start of the section</figcaption>
{:/}

~~~html
<h3>Space trainers</h3>
<img src="images/trainer.png" alt="...">
<p>Space...</p>
<a href="...">Add to cart</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
查看完整代码示范
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <h3 class="name">Space trainers</h3>
  <img alt="Purple high top trainer with white laces, empty white dot on outside ankle, and white toe cap" src="images/trainer.png">
  <p class="desc">Space trainer for a classic and stylish look.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Add to cart</a></p>
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

* **WCAG**
  * [Meaningful Sequence 1.3.2](/WAI/WCAG21/quickref/#meaningful-sequence) ([Understanding 1.3.2](/WAI/WCAG21/Understanding/meaningful-sequence))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Write code that adapts to the user's technology

Use responsive design to adapt the display to different zoom states and viewport sizes, such as on mobile devices and tablets. When font size is increased by at least 200%, avoid horizontal scrolling and prevent any clipping of content. Use progressive enhancement to help ensure that core functionality and content is available regardless of technology being used.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Using media queries to adapt navigation" class="example" %}

<div class="adapt-code">
  <figure>
    <div class="code">
      <div class="grid-4">
        <div class="from-col1 to-col2">
{:/}

~~~css
/* On narrow viewports, make the navigation full width */
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
/* On wider viewports, put the navigation on the left */
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

* **WCAG**
  * [Resize text 1.4.4](/WAI/WCAG21/quickref/#resize-text) ([Understanding 1.4.4](/WAI/WCAG21/Understanding/resize-text))
  * [Consistent Identification 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([Understanding 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **Background**
  * [Small Screen Size](/TR/mobile-accessibility-mapping/#h-small-screen-size)
* **User Story**
  * [[Dhruv, older adult student who is deaf]](/people-use-web/user-stories/story-six/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Provide meaning for non-standard interactive elements

Use <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> to provide information on function and state for custom widgets, such as accordions and custom-made buttons. For example, `role="navigation"` and `aria-expanded="true"`. Additional code is required to implement the behavior of such widgets, such as expanding and collapsing content or how the widget responds to keyboard events.

{::nomarkdown}
{% include_cached box.html type="start" title="Example: Menu function and state identified using WAI-ARIA" class="example" %}

<div class="non-standard">
  <figure>
      <div class="code">
{:/}

~~~html
<nav aria-label="主导航" role="navigation">
  <ul>
    <li><a href="...">Home</a></li>
    <li><a href="...">Shop</a></li>
    <li class="has-submenu">
      <a aria-expanded="false" aria-haspopup="true" href="...">SpaceBears</a>
      <ul>
          <li><a href="...">SpaceBear 6</a></li>
          <li><a href="...">SpaceBear 6 Plus</a></li>
      </ul>
    </li>
    <li><a href="...">MarsCars</a></li>
    <li><a href="...">Contact</a></li>
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

* **WCAG**
  * [Name, Role, Value 4.1.2](/WAI/WCAG21/quickref/#name-role-value) ([Understanding 4.1.2](/WAI/WCAG21/Understanding/name-role-value))
* **Background**
  * [Notes on Using ARIA in HTML](/TR/aria-in-html/)
* **User Stories**
  * [[Sophie, basketball fan with Down syndrome]](/people-use-web/user-stories/story-five/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 确保所有可交互元素可以通过键盘操作

Think about keyboard access, especially when developing interactive elements, such as menus, mouseover information, collapsable accordions, or media players. Use `tabindex="0"` to add an element that does not normally receive focus, such as `<div>` or `<span>`, into the navigation order when it is being used for interaction. Use scripting to capture and respond to keyboard events.

{::nomarkdown}
{% include_cached box.html type="start" title="示例: 键盘操作友好的菜单按钮" class="example" %}

<div class="two-column keyboard-accessible">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 渲染输出</figcaption>
<div class="rendered">
  <div id="example-button" class="menu-button" role="button" aria-expanded="false" aria-controls="example-button-menu" tabindex="0">{% include_cached icon.html name="menu" %} Menu</div>
  <div id="example-button-menu" class="menu" aria-hidden="true" tabindex="-1">
    <ul>
      <li><a href="javascript:return false">About</a></li>
      <li><a href="javascript:return false">News</a></li>
      <li><a href="javascript:return false">Tickets</a></li>
      <li><a href="javascript:return false">Fun</a></li>
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

* **WCAG**
  * [Keyboard 2.1.1](/WAI/WCAG21/quickref/#keyboard) ([Understanding 2.1.1](/WAI/WCAG21/Understanding/keyboard))
* **User Stories**
  * [[Ade, reporter with limited use of his arms]](/people-use-web/user-stories/story-one/)
  * [[Lakshmi, senior accountant who is blind]](/people-use-web/user-stories/story-three/)
  * [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 尽可能避免使用CAPTCHA

CAPTCHAs create problems for many people. There are other means of verifying that user input was generated by a human that are easier to use, such as automatic detection or interface interactions. If CAPTCHA really needs to be included, ensure that it is simple to understand and includes alternatives for users with disabilities, such as:

* Providing more than two ways to solve the CAPTCHAs
* Providing access to a human representative who can bypass CAPTCHA
* Not requiring CAPTCHAs for authorized users.

{::nomarkdown}
{% include_cached box.html type="start" title="更多信息" class="simple" %}
{:/}

* **WCAG**
  * [Non-text Content 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Understanding 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Background**
  * [Inaccessibility of CAPTCHA](/TR/turingtest/)
* **User Stories**
  * [[Marta, marketing assistant who is deaf and blind]](/people-use-web/user-stories/story-seven/)
  * [[Elias, retiree with low vision, hand tremor, and mild short-term memory loss]](/people-use-web/user-stories/story-nine/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="了解更多无障碍相关知识" class="large" icon="readmore" %}
{:/}

These tips are a few of the things you need to consider for web accessibility. 
The following resources help you learn why accessibility is important, 
and about guidelines for making the web more accessible to people with disabilities.


* [web无障碍简介](/fundamentals/accessibility-intro/) — 无障碍简介，并提供许多有用资源的链接
* [无障碍原则](/fundamentals/accessibility-principles/) — <abbr>WCAG</abbr> 要求简介
* [残疾人如何使用web](/people-use-web/) — 通过真实事例说明无障碍给残疾人士带来的益处
* [Web无障碍教程](/tutorials/) — 向您展示如何开发便于残障人士访问的网页内容
* [网站无障碍提升前后对比](/WAI/demos/bad/) — 对比具有相同视觉设计的无障碍不友好和无障碍友好的网站，并附有注释，强调关键的无障碍屏障和纠正方法，以及 <abbr>WCAG</abbr> 的评估报告。
* [如何满足WCAG规范 (快速查阅)](/WAI/WCAG21/quickref/) — 所有WCAG要求和技术的可定制查阅
* [Web无障碍评估工具列表](/WAI/ER/tools/) — 提供一系列工具，帮助探索代码的无障碍
* [<abbr>WAI-ARIA</abbr> 概述](/standards-guidelines/aria/) — <abbr>WAI-ARIA</abbr> 简介及所有规范的链接

{::nomarkdown}
{% include box.html type="end" %}
{:/}
