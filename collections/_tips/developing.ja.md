---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "ウェブ・アクセシビリティのための開発 – 始めるにあたってのヒント"
title_html: "ウェブ・アクセシビリティのための開発"
nav_title: "始めるにあたってのヒント"
lang: ja  # Change "en" to the translated-language shortcode
last_updated: 2024-04-16   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/

navigation:
  previous: /tips/designing/

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Jay Kishigami"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips

permalink: /tips/developing/ja   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
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
  <p><strong>日にち:</strong> マイナーアップデート:2019年1月9日､アップデート:2016年4月15日｡最初の出版:2015年9月</p>
  <p><strong>編集者:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, and <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS lists contributors and credits.</p>
  <p><a href="https://www.w3.org/WAI/EO/">教育と援助のためのWG (EOWG)</a>によって開発され. <a href="https://www.w3.org/WAI/DEV/">WAI-DEV プロジェクト</a>からのサポートを受けるとともに, ヨーロッパ委員会の援助を受けた｡</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="概要" class="full" %}
{:/}

このページでは､障害者にとってアクセシブルなWebコンテンツの開発を始める際に役立つ､いくつかの基本的な考慮事項を紹介します｡これらのヒントは､Webコンテンツ・アクセシビリティ・ガイドライン(WCAG)の要件を満たすためのグッドプラクティスです｡関連するWCAG要件､「より理解するための」ドキュメントでの詳細な背景､チュートリアルからのガイダンス､ユーザーストーリーなどへのリンクをたどってください｡

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## すべてのフォームコントロールにラベルを関連付ける

フォーム要素の `id` 属性にリンクされた `<label>` 要素の `for` 性を使うか､ <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> 属性を使います｡特定の状況では `<label>` 要素を視覚的に隠すことが許容されるかもしれませんが､ほとんどの場合ラベルは全ての読者が必要な入力を理解するのに必要です｡

{::nomarkdown}
{% include_cached box.html type="start" title="例:  <code>for</code>　属性と <code>id</code> 属性の使用" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 表現</figcaption>
<label for="username">ユーザーネーム</label>
<input id="username" type="text" name="ユーザーネーム">
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} 短いコード</figcaption>
{:/}

~~~html
<label for="username">ユーザーネーム</label>
<input id="username" type="text" name="ユーザーネーム">
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [ラベルあるいは説明 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([理解のため 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
* **Tutorial**
  * [ラベルの制御](/tutorials/forms/labels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 画像の代替テキストを含める

すべての情報画像と機能画像に画像の代替テキストが追加されていることを確認すること｡装飾的な画像は空の代替テキスト､`alt=""`を使うか､画像自体をCSSに含めてください｡代替テキストは通常､文章コンテンツの責任者が提供します｡

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [テキスト以外のコンテンツ 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([理解のため 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **チュートリアル**
  * [画像](/tutorials/images/)
* **ユーザーストーリー**
  * [視覚障害者にとっての代替テキストの価値を説明](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## ページの言語と言語の変更を特定する

例えば `<html lang="en">` のように　`html`　タグで `lang` 属性を使うことで､すべてのページの主要言語を示します｡要素の言語がページの他の部分と異なる場合､特定の要素で`lang`属性を使います｡


{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [ページの言語 3.1.1](/WAI/WCAG21/quickref/#language-of-page) ([理解のため 3.1.1](/WAI/WCAG21/Understanding/language-of-page))
  * [部分的な言語 3.1.2](/WAI/WCAG21/quickref/#language-of-parts) ([理解のため 3.1.2](/WAI/WCAG21/Understanding/language-of-parts))
* **手法**
  * [HTMLでの言語宣言](/International/questions/qa-html-language-declarations)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## マークアップを使って意味と構造を伝える

見出し､リスト､表などには適切なマークアップを使用しましょう｡HTML5 は `<nav>` や `<aside>`　のような追加要素を提供し､ コンテンツをよりよく構造化します｡ <abbr>WAI-ARIA</abbr> の役割は､例えば､ `role="search"` を使って検索機能を識別するなど､追加の意味を提供することができます｡デザイナーやコンテンツ・ライターと協力して､意味について合意し､一貫して使用しましょう｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: 構造と意味を提供するためにHTMLを使用" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 表示</figcaption>
<section>
  <article>
    <h2>スーパーベアが窮地を救う</h2>
    <time datetime="2015-08-07">2015年8月7日</time>
    <p>街の人気者であるクマが､またしても若いネコを木から救い出すという偉業を成し遂げた｡目撃者によると､スーパーベアーの努力はネコには理解されず､救助者に軽い引っかき傷を負わせたという｡</p>
    <aside>
      <h3>関連記事</h3>
      <ul>
        <li><a href="#">クマが市の鍵を受け取る</a></li>
        <li><a href="#">スーパーベアが市長に立候補</a></li>
      </ul>
    </aside>
  </article>
</section>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %}短いコード</figcaption>
{:/}

~~~html
<section>
  <article>
    <h2>スーパーベアが窮地を救う</h2>
    <time datetime="2015-08-07">2015年8月7日</time>
    <p>街の人気者であるクマが､またしても若いネコを木から救い出すという偉業を成し遂げた｡目撃者によると､スーパーベアーの努力はネコには理解されず､救助者に軽い引っかき傷を負わせたという｡</p>
    <aside>
      <h3>Related Articles</h3>
      <ul>
        <li><a href="#">クマが市の鍵を受け取る</a></li>
        <li><a href="#">スーパーベアが市長に立候補</a></li>
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
{% include_cached box.html type="start" title="例:  <abbr>WAI-ARIA</abbr>を使った検索フィールド" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 表示</figcaption>
<form action="#" method="post">
  <div role="search">
    <label for="search">検索</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">顧客IDまたは名前でレコードを検索</div>
    <button type="submit">Go</button>
  </div>
</form>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %}短いコード</figcaption>
{:/}

~~~html
<form action="#" method="post">
  <div role="search">
    <label for="search">検索</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">顧客IDまたは名前でレコードを検索</div>
    <button type="submit">Go</button>
  </div>
</form>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [情報と関係性 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([理解のため 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
* **チュートリアル**
  * [ページの構造](/tutorials/page-structure/)
  * [テーブル](/tutorials/tables/)
* **ユーザーストーリー**
  * [構造情報がスクリーン・リーダー・ユーザーにどのように役立つかを説明する](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## ユーザーのミスの回避と修正をサポート

ユーザーがサイトのフォームを完了できるように､明確な指示､エラーメッセージ､通知を提供しましょう｡エラーが発生したら

* ユーザーが問題の場所を見つけるのを助けるましょう
* 具体的でわかりやすい説明をしましょう
* 修正を提案しましょう

ユーザー入力を処理する際には､できるだけ書式に寛容であること｡例えば､スペースを含む電話番号を受け付け､必要に応じてスペースを削除します｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: バリデーションに寛容なオーストラリアの電話番号フィールド" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 表示</figcaption>
<label for="phone">電話番号</label>
<input id="phone" name="phone" type="tel" pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$" aria-describedby="phone-desc">
<p id="phone-desc">例として, (02) 1234 1234</p>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} 短いコード</figcaption>
{:/}

~~~html
<label for="phone">電話番号</label>
<input id="phone" name="phone" type="tel"
       pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$"
       aria-describedby="phone-desc">
<p id="phone-desc">例として, (02) 1234 1234</p>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [エラーの特定 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([理解のため 3.3.1](/WAI/WCAG21/Understanding/error-identification))
* **チュートリアル**
  * [入力の検証](/tutorials/forms/validation/)
* **ユーザーストーリー**
  * [失読症のユーザーに役立つエラーの説明](/people-use-web/user-stories/archived/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 読み取り順をコード順に反映

コード内の要素の順序が､提示される情報の論理的な順序と一致していることを確認する｡これをチェックするひとつの方法は､CSSのスタイルを削除し､コンテンツの順序が理にかなっているかどうかを確認することです｡


{::nomarkdown}
{% include_cached box.html type="start" title="例: 論理的な読み取り順序をコードに反映" class="example" %}

<div class="two-column">
<div class="order">
  <article class="product">
    <h3 class="name">宇宙トレーナー</h3>
    {% include_cached image.html src="tips/trainer.png" alt="パープルのハイトップ・トレーナーに白いシューレース、足首の外側に空白の白いドット、白いトゥキャップがあしらわれている。" %}
    <p class="desc">クラシックでスタイリッシュな宇宙トレーナー</p>
    <p class="buy"><a href="javascript:return false" class="button button-icon"><span>{% include_cached icon.html name="cart-plus" %} カートに加える</span></a></p>
  </article>
</div>
<figure>
<figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %}ヘッダーより前の画像は見逃す可能性がある</figcaption>
{:/}

~~~html
<img src="images/trainer.png" alt="...">
<h3>宇宙トレーナー</h3>
<p>宇宙...</p>
<a href="...">カートに加える</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
すべてのコードを見る
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <img alt="パープルのハイトップ・トレーナーに白いシューレース、足首の外側に空白の白いドット、白いトゥキャップがあしらわれている。" src="images/trainer.png">
  <h3 class="name">宇宙トレーナー</h3>
  <p class="desc">クラシックでスタイリッシュな宇宙トレーナー</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> カートに加える</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
<figure>
<figcaption>{% include_cached icon.html name="check-circle" label="OK" %}見出しは章のはじめに</figcaption>
{:/}

~~~html
<h3>宇宙トレーナー</h3>
<img src="images/trainer.png" alt="...">
<p>宇宙...</p>
<a href="...">カートに加える</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
すべてのコードを見る
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <h3 class="name">宇宙トレーナー</h3>
  <img alt="パープルのハイトップ・トレーナーに白いシューレース、足首の外側に空白の白いドット、白いトゥキャップがあしらわれている。" src="images/trainer.png">
  <p class="desc">クラシックでスタイリッシュな宇宙トレーナー</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> カートに加える</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [意味のある並び1.3.2](/WAI/WCAG21/quickref/#meaningful-sequence) ([理解のため 1.3.2](/WAI/WCAG21/Understanding/meaningful-sequence))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## ユーザーの技術に適応するコードを書く

モバイルデバイスやタブレットなど､異なるズーム状態やビューポートサイズに表示を適応させるために､レスポンシブデザインを使用すること｡フォントサイズを少なくとも200%大きくする場合は､横スクロールを避け､コンテンツのクリッピングを防ぐこと｡プログレッシブ・エンハンスメントを使用して､使用するテクノロジーに関係なく､コア機能とコンテンツが利用できるようにします｡


{::nomarkdown}
{% include_cached box.html type="start" title="例: メディアクエリを使ってナビゲーションを適応させる" class="example" %}

<div class="adapt-code">
  <figure>
    <div class="code">
      <div class="grid-4">
        <div class="from-col1 to-col2">
{:/}

~~~css
/* 狭いビューポートでは､ナビゲーションを全幅にする */
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
/* より広いビューポートでは､ナビゲーションを左に配置する*/
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
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [テキストサイズの変更 1.4.4](/WAI/WCAG21/quickref/#resize-text) ([理解のため 1.4.4](/WAI/WCAG21/Understanding/resize-text))
  * [一貫した識別  3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([理解のため 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **背景**
  * [画面が小さい場合](/TR/mobile-accessibility-mapping/#h-small-screen-size)
* **ユーザーストーリー**
  * [ズームされたページの代替ビューがどのように役立つかを説明](/people-use-web/user-stories/archived/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 非標準のインタラクティブ要素に意味を与える
<abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr>を使用して､アコーディオンや特注ボタンなどのカスタムウィジェットの機能と状態に関する情報を提供します｡例えば`role="navigation"` や `aria-expanded="true"`です｡ ｡このようなウィジェットの動作､例えばコンテンツの展開や折りたたみ､ウィジェットがキーボード・イベントにどのように応答するかなどを実装するには､追加のコードが必要です｡


{::nomarkdown}
{% include_cached box.html type="start" title="例: WAI-ARIAを使ったメニューの機能と状態の識別" class="example" %}

<div class="non-standard">
  <figure>
      <div class="code">
{:/}

~~~html
<nav aria-label="主たるナビゲーション" role="navigation">
  <ul>
    <li><a href="...">ホーム</a></li>
    <li><a href="...">ショップ</a></li>
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
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [名前､役割､値 4.1.2](/WAI/WCAG21/quickref/#name-role-value) ([理解のため 4.1.2](/WAI/WCAG21/Understanding/name-role-value))
* **背景**
  * [HTMLでARIAを使用する際の注意](/TR/aria-in-html/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## すべてのインタラクティブ要素がキーボードでアクセスできるようにすること｡

特に､メニュー､マウスオーバー情報､折りたたみ可能なアコーディオン､メディアプレーヤーなどのインタラクティブ要素を開発するときは､キーボードアクセスについて考えてください｡ Use `tabindex="0"`を使って `<div>` あるいは `<span>`のようみ通常はフォーカスを受けない要素を､インタラクションのために使うときにはナビゲーション・オーダーに加えましょう｡スクリプトを使ってキーボード・イベントを捕捉し､それに応答することが必要です｡


{::nomarkdown}
{% include_cached box.html type="start" title="例: キーボードからアクセス可能なメニューボタン" class="example" %}

<div class="two-column keyboard-accessible">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} 表示</figcaption>
<div class="rendered">
  <div id="example-button" class="menu-button" role="button" aria-expanded="false" aria-controls="example-button-menu" tabindex="0">{% include_cached icon.html name="menu" %} メニュー</div>
  <div id="example-button-menu" class="menu" aria-hidden="true" tabindex="-1">
    <ul>
      <li><a href="javascript:return false">説明</a></li>
      <li><a href="javascript:return false">ニュース</a></li>
      <li><a href="javascript:return false">チケット</a></li>
      <li><a href="javascript:return false">興味あるもの</a></li>
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
<figcaption>{% include_cached icon.html name="code" %} Code Snippet</figcaption>
{:/}

~~~javascript
var buttonExample = document.getElementById('example-button');

buttonExample.addEventListener('keydown', function(e) {
  // Toggle the menu when RETURN is pressed
  if(e.keyCode && e.keyCode == 13) {
    toggleMenu(document.getElementById('example-button-menu'));
  }
});

buttonExample.addEventListener('click', function(e) {
// Toggle the menu on mouse click
  toggleMenu(document.getElementById('example-button-menu'));
});
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [キーボード 2.1.1](/WAI/WCAG21/quickref/#keyboard) ([理解のため 2.1.1](/WAI/WCAG21/Understanding/keyboard))
* **ユーザーストーリー**
  * [RSI(関節炎)患者がどのようにキーボードサポートを必要としているかを説明](/people-use-web/user-stories/archived/#reporter)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 可能な限りCAPTCHAを避ける

CAPTCHAは多くの人々に問題を引き起こす｡ユーザー入力が人間によって生成されたものであることを検証するには､自動検出やインターフェイスのインタラクションなど､もっと使いやすい手段があります｡CAPTCHAを本当に含める必要がある場合は､理解しやすく､障害を持つユーザーのための代替手段を含むようにしてください｡下記にその例を示します｡

* CAPTCHAを解く3つ以上の方法を提供すること｡
* CAPTCHAを迂回できる人間の担当者へのアクセスを提供すること｡
* 認証されたユーザーにはCAPTCHAを要求しないこと｡

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [テキスト外のコンテンツ 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([理解のため 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **背景**
  * [CAPTCHAのアクセス不能性](/TR/turingtest/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="アクセシビリティについてより学ぶために" class="large" icon="readmore" %}
{:/}

これらのヒントは､Webアクセシビリティのために考慮すべきことのほんの一部です｡アクセシビリティが重要である理由､および障害者がWebをより利用しやすくするためのガイドラインについては､以下のリソースを参照してください｡

* [ウェブ・アクセシビリティ入門](/fundamentals/accessibility-intro/) —  アクセシビリティを紹介し､多くの有用なリソースへのリンクを提供
* [アクセシビリティ原則](/fundamentals/accessibility-principles/) — <abbr>WCAG</abbr> 要求事項の紹介
* [障害者はどのようにウェブを利用しているか](/people-use-web/) — 障害者にとってのアクセシビリティの利点の実例
* [ウェブ・アクセシビリティ・チュートリアル](/tutorials/) —障害者がアクセスしやすいウェブコンテンツを開発する方法を紹介
* [ビフォー・アフター・デモンストレーション](/WAI/demos/bad/) — 同じビジュアル・デザインを共有するアクセシブルなウェブサイトとアクセシブルでないウェブサイトの例で､主要なアクセシビリティの障害と修復を強調する注釈､および<abbr>WCAG</abbr>の評価レポートが掲載されています｡

* [WCAGを満たす方法（クイックリファレンス）](/WAI/WCAG21/quickref/) —すべてのWCAG要件とテクニックのカスタマイズ可能なリファレンス

* [	ウェブ・アクセシビリティ評価ツールリスト](/WAI/ER/tools/) — コードのアクセシビリティを調査するのに役立つさまざまなツールを提供しています｡
* [<abbr>WAI-ARIA</abbr> 概要](/standards-guidelines/aria/) —  <abbr>WAI-ARIA</abbr> の紹介と全仕様へのリンク

{::nomarkdown}
{% include box.html type="end" %}
{:/}
