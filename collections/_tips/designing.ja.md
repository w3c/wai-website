---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "ウェブ・アクセシビリティのためのデザイン – 始めるにあたってのヒント"
title_html: "ウェブ・アクセシビリティのためのデザイン"
nav_title: デザインのためのヒント
lang: ja  # Change "en" to the translated-language shortcode
last_updated: 2024-03-29   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/  # Do not change this

navigation:
  previous: /tips/writing/ # Do not change this
  next: /tips/developing/ # Do not change this

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Jay Kishigami"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips

permalink: /tips/designing/ja   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/designing/   # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#designing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>日にち:</strong> マイナーアップデート:2019年1月9日､アップデート:2016年4月15日｡最初の出版:2015年9月</p>
  <p><strong>編集者:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, そして <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>ACKNOWLEDGEMENTS</p>
  <p><a href="https://www.w3.org/WAI/EO/">教育と援助のためのWG (EOWG)</a>によって開発され. <a href="https://www.w3.org/WAI/DEV/">WAI-DEV プロジェクト</a>からのサポートを受けるとともに, ヨーロッパ委員会の <abbr title="Information Society Technologies">IST</abbr> プログラムの援助を受けた｡</p>

---

{::nomarkdown}
{% include box.html type="start" h="2" title="概要" class="full" %}
{:/}

このページでは､ユーザーインターフェースの設計およびビジュアルデザインを障害者にとってアクセシブルなものにするため考慮すべき基本的な事項を紹介します｡これらのヒントは､Webコンテンツ・アクセシビリティ・ガイドライン(WCAG)の要件を満たすためのグッドプラクティスです｡関連するWCAG要件､「理解する」ためのドキュメントの詳細な背景､チュートリアルから始まるガイダンス､ユーザーストーリーなどへのリンクをたどってください｡

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="目次" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## 前景と背景の間に十分なコントラストをつける

前景テキストは背景色と十分なコントラストが必要です｡これには画像上のテキスト､背景グラデーション､ボタン､その他の要素が含まれます｡ロゴや､写真に偶然写り込んだテキストなどの付随的なテキストには適用されません｡以下のリンクは､WCAGが要求する最小コントラスト比の詳細と､コントラストをチェックする方法を提供しています｡「コントラスト比」は､より技術的に正しい用語「輝度コントラスト比」の短縮版です｡.

{::nomarkdown}
{% include_cached box.html type="start" title="<strong>例:</strong> コントラスト比" class="example" %}
{:/}

<div class="two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="良くない場合" %}不十分な場合t</figcaption>
    <div>
      <p style="color: #999;">文字と背景のコントラストが十分でないと文字が読めない人もいる｡また､明るい色（高輝度）は読めず､低輝度が必要な人もいる｡.</p>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %} 十分な場合</figcaption>
    <div>
      <p class="pass">文字と背景のコントラストが十分でないと文字が読めない人もいる｡また､明るい色（高輝度）は読めず､低輝度が必要な人もいる｡.</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [コントラスト（最小） 1.4.3](/WAI/WCAG21/quickref/#contrast-minimum) ([理解のため 1.4.3](/WAI/WCAG21/Understanding/contrast-minimum))
* **ユーザーストーリー**
  * [｢色覚異常」のユーザーがウェブを体験する方法](/people-use-web/user-stories/#shopper)
* **簡単なチェック**
  * [コントラスト比の確認方法](/test-evaluate/preliminary/#contrast)
* **サポートツール**
  * [コントラスト比の決定に役立つツールのリスト](/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html#visual-audio-contrast-contrast-resources-head)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 色だけで情報を伝えない

色は情報を伝達するのに役立つが､色だけで情報を伝達すべきではない｡要素を区別するために色を使用する場合は､色の知覚に依存しない追加的な識別も行いましょう｡例えば､フォームの必須項目を示すために色に加えてアスタリスクを使用したり､グラフの領域を区別するためにラベルを使用したりしましょう

{::nomarkdown}
{% include_cached box.html type="start" title="例: 色で意味を伝える" class="example" %}
{:/}

<div class="color-alone two-column">
  <figure class="reference fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="良くない場合" %}色だけを使った場合</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">必要な箇所は赤で表示</span></p>
        <div class="row">
          <label for="name1">名前</label> <input type="text" id="name1" name="name">
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email1">メール</label> <input type="text" id="email1" name="email">
        </div>
      </form>
    </div>
  </figure>
  <figure class="reference pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %}色と記号を使った場合</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">必要な箇所は</span> 赤で記述され <span class="required" style="color: #992929;">*</span>の記号とともに表示</p>
        <div class="row">
          <label for="name2">名前</label> <input type="text" id="name2" name="name"><br>
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email2">メール *</label> <input type="text" id="email2" name="email">
        </div>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="例: 色だけで何かを参照する場合" class="example" %}
{:/}
<div class="color-alone two-column">
  <figure class="question fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="良くない場合" %}色だけの場合</figcaption>
    <div>
      <svg version="1.1" width="153" height="154" aria-labelledby="inaccessible-triangles-title" role="img">
        <g>
          <title id="inaccessible-triangles-title">異なる角度を持つ4つの三角形</title>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D"/>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">どれが直角三角形か?</legend>
          <input id="answer-green1" name="answer1" value="green" type="radio"> <label for="answer-green1">緑</label><br>
          <input id="answer-blue1" name="answer1" value="blue" type="radio"> <label for="answer-blue1">青</label><br>
          <input id="answer-red1" name="answer1" value="red" type="radio"> <label for="answer-red1">赤</label><br>
          <input id="answer-yellow1" name="answer1" value="yellow" type="radio"> <label for="answer-yellow1">黄色</label><br>
          <input id="answer-pass1" name="answer1" value="pass" type="radio"> <label for="answer-pass1">わからない</label>
        </fieldset>
      </form>
    </div>
  </figure>
  <figure class="question pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %}色と数字</figcaption>
    <div>
      <svg version="1.1" width="153" height="154">
        <g>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D" />
          <text fill="#f4f4f4" y="51" x="44"><tspan>1</tspan><tspan dx="100" style="opacity:0">緑の三角形:各角度は 30°, 60°, 90°</tspan></text>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <text fill="#f4f4f4" y="54" x="132"><tspan>2</tspan><tspan dx="100" style="opacity:0"> 青い三角形: 各角度は 30°, 30°, 120°</tspan></text>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <text fill="#f4f4f4" y="114" x="110"><tspan>3</tspan><tspan dx="100" style="opacity:0"> 赤い三角形: 各角度は 40°, 70°, 70°</tspan></text>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
          <text fill="#333" y="118" x="48"><tspan>4</tspan><tspan dx="100" style="opacity:0"> 黄色の三角形: 各角度は 60°, 60°, 60°</tspan></text>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">どれが直角三角形か?</legend>
          <input id="answer-green2" name="answer2" value="green" type="radio"> <label for="answer-green2">緑 (1)</label><br>
          <input id="answer-blue2" name="answer2" value="blue" type="radio"> <label for="answer-blue2">青 (2)</label><br>
          <input id="answer-red2" name="answer2" value="red" type="radio"> <label for="answer-red2">赤 (3)</label><br>
          <input id="answer-yellow2" name="answer2" value="yellow" type="radio"> <label for="answer-yellow2">黄色 (4)</label><br>
          <input id="answer-pass2" name="answer2" value="pass" type="radio"> <label for="answer-pass2">わからない</label>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [色の使用 1.4.1](/WAI/WCAG21/quickref/#use-of-color) ([理解のため 1.4.1](/WAI/WCAG21/Understanding/use-of-color))
* **ユーザーストーリー**
  * [｢色覚異常」のユーザーがウェブを体験する方法](/people-use-web/user-stories/#shopper)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}


## インタラクティブな要素を識別しやすくする

リンクやボタンなどのインタラクティブな要素には､識別しやすいように明確なスタイルを用意しましょう｡たとえば､マウスホバー､キーボードフォーカス､タッチスクリーン起動時にリンクの外観を変更します｡インタラクティブ要素のスタイルとネーミングは､ウェブサイト全体で一貫して使用するようにしましょう｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: 異なるリンク状態に対する独自のスタイル" class="example" %}
{:/}

<div class="focus two-column">
  <div>
    <figure>
      <figcaption>{% include_cached icon.html name="check-circle" label="OK" %}テキストからリンクを目立たせる</figcaption>
      <div>
        <p>マウスが使えず､ウェブページを<a href="javascript:return false;" aria-label="リンクは本文より目立つようにスタイルされている">キーボードだけで操作</a>する人もいる｡</p>
        <p>ユーザーがキーボードを使ってすべてのインタラクティブな要素に到達でき､どの要素にフォーカスされているかが明確に分かることが重要です｡</p>
        <p>目に見えるキーボード・フォーカスは､ウェブ・ページをタブで移動するときに移動するボーダーやハイライトで示される｡</p>
      </div>
    </figure>
  </div>
  <div>
    <figure class="hover">
      <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %} マウスホーバースタイル</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="リンクは、ホバー状態を強調するために微妙な背景でスタイルされている。" style="color: #850BAC; background-color: rgba(253, 247, 15, 0.3)">keyboard to navigate</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
    <figure class="keyboard">
      <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %}キーボードフォーカスのスタイル</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="リンクは目立つようにホバースタイルの強いバージョンでスタイルされている。" style="color: #850BAC; background-color: #fdf70f">keyboard to navigate</a></p>
      </div>
    </figure>
    <figure class="active">
      <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %} タッチまたはクリックスタイル</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="リンクには、アクションが起こることを示す強いスタイリングが与えられている。" style="background: #850BAC; color: #f4f4f4">keyboard to navigate</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [目に見えるフォーカス方法 2.4.7](/WAI/WCAG21/quickref/#focus-visible) ([理解のため 2.4.7](/WAI/WCAG21/Understanding/focus-visible))
  * [一貫した識別 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([理解のため 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **ユーザーストーリー**
  * [マウス操作に制限のある人が直面する課題](/people-use-web/user-stories/#reporter)
  * [手の震えを持つ高齢ユーザーが直面する課題](/people-use-web/user-stories/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 明確で一貫性のあるナビゲーション・オプションの提供
ウェブサイト内のページ間のナビゲーションは､一貫性のあるネーミング､スタイル､配置にすること｡サイト内検索やサイトマップなど､複数のナビゲーション方法を用意すること｡トピックパスや明確な見出しなど､自分のいる位置を示す手がかりを提供することで､ユーザーがウェブサイトやページのどこにいるのかを理解を助けます｡

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [一貫性のあるナビゲーション 3.2.3](/WAI/WCAG21/quickref/#consistent-navigation) ([理解のため 3.2.3](/WAI/WCAG21/Understanding/consistent-identification))
  * [様々な方法 2.4.5](/WAI/WCAG21/quickref/#multiple-ways) ([理解のため 2.4.5](/WAI/WCAG21/Understanding/multiple-ways))
* **ユーザーストーリー**
  * [一貫性とナビゲーションが認知障害を持つ人の助けになる](/people-use-web/user-stories/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## フォーム要素に明確に関連付けられたラベルが含まれるようにする

すべてのフィールドが隣接して説明的なラベルを持っていることを確認してください｡左から右へ記述する言語の場合､ラベルは通常フィールドの左か上に配置されますが､チェックボックスとラジオボタンは通常右に配置されます｡ラベルとフィールドの間にスペースが空きすぎないようにしましょう｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: 近接によって関連付けられたラベルと入力フィールド" class="example" icon="check-circle" %}
{:/}

<div class="labels">
  <figure>
    <div>
      <form action="#" method="post">
        <fieldset>
          <legend>コメントを追加</legend>
          <div class="row">
            <label for="email4">あなたのメールアドレス</label>
            <input type="text" id="email4" name="email">
          </div>
          <div class="row checkbox">
            <input type="checkbox" id="contact1" name="contact">
            <label for="contact1">私にコンタクトしてください</label>
          </div>
          <div class="row">
            <label for="website2">あなたのWebサイト</label>
            <input type="text" id="website2" name="website">
          </div>
          <div class="row">
            <label for="comment2">コメント</label>
            <textarea name="comment" id="comment2"></textarea>
          </div>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [ラベルまたは説明書 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([理解のため 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
  * [見出しとラベル 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([理解のため 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
* **チュートリアル**
  * [ラベルテキストの視覚的位置](/tutorials/forms/labels/#visual-position-of-label-text)
* **ユーザーストーリー**
  * [明確な表示が認知障害のある人をどのように助けるか](/people-use-web/user-stories/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 理解しやすいフィードバックの提供

フォームの送信を確認する､何か問題が起きたときにユーザーに警告する､ページの変更をユーザーに通知するなど､インタラクションに対するフィードバックを提供することがある｡指示は理解しやすいものでなければなりません｡ユーザーのアクションを必要とする重要なフィードバックは目立つスタイルで表示されるべきです｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: エラーリスト､アイコン､背景色を使ってエラーを目立たせる" class="example" icon="check-circle" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <div class="error-list">
        <p>以下のエラーを修正してください：</p>
        <ol>
          <li id="error_email">{% include_cached icon.html name="warning" label="エラー" %} <a href="javascript:document.getElementById('email5').focus()">メールアドレスが無効です</a></li>
          <li id="error_comment">{% include_cached icon.html name="warning" label="エラー" %} <a href="javascript:document.getElementById('comment3').focus()">コメントは必須です</a></li>
        </ol>
      </div>
      <form action="#" method="post">
        <fieldset>
          <legend>コメントを追加してください</legend>
          <p class="instruction"><span class="required">必須項目</span> は赤字で<span class="required">*</span>のマークをつけています</p>
          <div class="row">
            <label for="name5">名前</label>
            <input type="text" id="name5" name="name" value="Superbear">
          </div>
          <div class="row error">
            <label class="required" for="email5">{% include_cached icon.html name="warning" label="エラー" %} メールアドレス *</label>
            <input type="text" id="email5" name="email" value="superbear@@hq.example.com" aria-invalid="true" aria-describedby="error_email">
          </div>
          <div class="row">
            <label for="website3">Webサイト名</label>
            <input type="text" id="website3" name="website">
          </div>
          <div class="row error">
            <label class="required" for="comment3">{% include_cached icon.html name="warning" label="エラー" %} コメント *</label>
            <textarea name="comment" id="comment3" aria-invalid="true" aria-describedby="error_comment"></textarea>
          </div>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [エラー識別 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([理解のため 3.3.1](/WAI/WCAG21/Understanding/error-identification))
  * [ラベルまたは説明書 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([理解のため 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
  * [エラーのコメント 3.3.3](/WAI/WCAG21/quickref/#error-suggestion) ([理解のため 3.3.3](/WAI/WCAG21/Understanding/error-suggestion))
* **チュートリアル**
  * [ユーザーへの通知](/tutorials/forms/notifications/)
* **ユーザーストーリー**
  * [重要なコンテンツを簡単に識別できるようにすることが､どのように役立つか](/people-use-web/user-stories/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 見出しと間隔を使用して､関連するコンテンツをグループ化する

コンテンツ間の関係をより明確にするために､空白と近接を利用する｡見出しをつけることで､コンテンツをグループ化し､乱雑さをなくし､さっと見やすくし理解しやすくする｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: コンテンツ間の関係を強調するスペーシング" class="example" %}
{:/}

<div class="headings two-column">
  <figure class="fail">
    <figcaption id="inaccessible-headings-title">{% include_cached icon.html name="ex-circle" label="良くない場合" %} 間隔が狭く､関係が不明確な場合</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="inaccessible-headings-title" aria-describedby="inaccessible-headings-desc" role="img">
        <g>
          <desc id="inaccessible-headings-desc">一つの主題で大きなブロックの文､見出しの間隔も狭く図との関係も分かりにくい</desc>
          <text class="heading" x="0" y="14">主題</text>
          <rect x="0" y="18" width="247" height="3"/>
          <rect x="0" y="24" width="244" height="3"/>
          <rect x="0" y="30" width="249" height="3"/>
          <rect class="image" x="180" y="36" width="70" height="55"/>
          <line x1="181" y1="37" x2="249" y2="90" stroke-width="1"/>
          <line x1="181" y1="90" x2="249" y2="37" stroke-width="1"/>
          <rect x="0" y="36" width="168" height="3"/>
          <rect x="0" y="42" width="171" height="3"/>
          <rect x="0" y="48" width="166" height="3"/>
          <rect x="0" y="54" width="172" height="3"/>
          <rect x="0" y="60" width="120" height="3"/>
          <text class="sub-heading" x="0" y="74">副題</text>
          <rect x="0" y="76" width="144" height="3"/>
          <rect x="0" y="82" width="136" height="3"/>
          <rect x="0" y="88" width="142" height="3"/>
          <rect x="0" y="94" width="236" height="3"/>
          <rect x="0" y="100" width="249" height="3"/>
          <rect x="0" y="106" width="239" height="3"/>
          <rect x="0" y="112" width="205" height="3"/>
          <text class="sub-heading" x="0" y="126">副題</text>
          <rect x="0" y="128" width="236" height="3"/>
          <rect x="0" y="134" width="242" height="3"/>
          <rect x="0" y="140" width="243" height="3"/>
          <rect x="0" y="146" width="250" height="3"/>
          <rect x="0" y="152" width="245" height="3"/>
          <rect x="0" y="158" width="187" height="3"/>
        </g>
      </svg>
    </div>
  </figure>
  <figure class="pass">
    <figcaption id="accessible-headings-title">{% include_cached icon.html name="check-circle" label="良い場合" %}  間隔を広げ､関係を明確な場合</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="accessible-headings-title" aria-describedby="accessible-headings-desc" role="img">
        <g>
          <desc id="accessible-headings-desc">主題, 複数の見出し, リスト, 大きくない分のブロック</desc>
          <text class="heading" x="0" y="14">主題</text>
          <rect x="0" y="21" width="175" height="3"/>
          <rect x="0" y="27" width="170" height="3"/>
          <rect x="0" y="33" width="159" height="3"/>
          <rect x="0" y="39" width="95" height="3"/>
          <rect x="0" y="51" width="175" height="3"/>
          <rect x="0" y="57" width="170" height="3"/>
          <rect x="0" y="63" width="159" height="3"/>
          <rect x="0" y="69" width="172" height="3"/>
          <rect x="0" y="75" width="143" height="3"/>
          <rect class="image" x="180" y="21" width="70" height="55"/>
          <line x1="181" y1="22" x2="249" y2="75"/>
          <line x1="181" y1="75" x2="249" y2="22"/>
          <text class="sub-heading" x="0" y="98">副題</text>
          <rect x="0" y="103" width="106" height="3"/>
          <rect x="0" y="109" width="99" height="3"/>
          <rect x="0" y="115" width="114" height="3"/>
          <rect x="0" y="121" width="110" height="3"/>
          <rect x="0" y="127" width="110" height="3"/>
          <rect x="0" y="139" width="99" height="3"/>
          <rect x="0" y="145" width="114" height="3"/>
          <rect x="0" y="151" width="110" height="3"/>
          <rect x="0" y="157" width="84" height="3"/>
          <text class="sub-heading" x="135" y="98">副題</text>
          <rect x="135" y="103" width="106" height="3"/>
          <rect x="135" y="109" width="99" height="3"/>
          <rect x="135" y="115" width="114" height="3"/>
          <rect x="135" y="127" width="114" height="3"/>
          <rect x="135" y="133" width="110" height="3"/>
          <rect x="135" y="139" width="99" height="3"/>
          <rect x="135" y="145" width="108" height="3"/>
          <rect x="135" y="151" width="110" height="3"/>
          <rect x="135" y="157" width="62" height="3"/>
        </g>
      </svg>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [見出しとラベル 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([理解のため 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
  * [章の見出し 2.4.10](/WAI/WCAG21/quickref/#section-headings) ([理解のため 2.4.10](/WAI/WCAG21/Understanding/section-headings))
* **チュートリアル**
  * [Headings](/tutorials/page-structure/headings/)
* **ユーザーストーリー**
  * [見出しがナビゲーションにどのように役立つかの説明](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## さまざまなビューポートサイズに対応するデザインを作成
携帯電話やズームしたブラウザウィンドウなど､異なるサイズのビューポートでページ情報がどのように表示されるかを考慮すること｡ヘッダーやナビゲーションなどの主要要素の位置や表示は､スペースを最大限に活用することで変更することができます｡読みやすさと可読性を最大化するために､テキストサイズと行幅を確実に設定してください｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: コンテンツとナビゲーションがモバイルの小さな画面に適応する場合" class="example" %}
{:/}

<div class="responsive">
  <figure>
    <div>
      {% include_cached image.html src="tips/content_in_browser.png" %}
      {% include_cached image.html src="tips/content_in_phone.png" %}
      <p>小さなテキストで広いウィンドウに表示するには､主要コンテンツ､表示可能なナビゲーション・オプション､表示可能な二次情報に複数の列を使用します｡</p>
      <p>携帯電話のような狭いウィンドウでの表示や､大きな文字での表示では､主要なコンテンツは1カラムで表示され､ナビゲーション・オプションはアイコンで表示され､二次情報もアイコンで表示されます｡</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **Background**
  * [スクリーンが小さい場合](/TR/mobile-accessibility-mapping/#h-small-screen-size)
  * [理解しやすさに関連するモバイルへの配慮](/TR/mobile-accessibility-mapping/#mobile-accessibility-considerations-related-primarily-to-principle-3-understandable)
* **ユーザーストーリー**
  * [ズームされたページの代替ビューがどのように役立つかを説明する](/people-use-web/user-stories/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## デザインに画像やメディアの代替機能を含める
画像やメディアの代替となる仕組をデザインに用意してください｡例えば下記のものが必要になるでしょう｡
* 音声のトランスクリプトへのビジブルなリンク
* ビデオの音声解説版への可視リンク
* アイコンやグラフィカルなボタンとテキスト
* 表や複雑なグラフのキャプションと説明
コンテンツ作成者や開発者と協力し､テキスト以外のコンテンツの代替案を提供してください｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: トランスクリプトへのリンクと音声付きビデオへのリンクが含まれたデザイン" class="example" %}
{:/}

<div class="text-alt">
  <figure>
    <div>
      {% include_cached image.html src="tips/example_media_player.png" alt="media playerが出ています｡さらに標準化された再生/一時停止ボタン､進行を示すバー､音量､クローズドキャプションのボタンが見えます｡また翻訳と音声での説明へのリンクが出ています｡" %}
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [文字でないコンテンツ 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([理解のため 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **チュートリアル**
  * [Images](/tutorials/images/)
* **ユーザーストーリー**
  * [視覚障害者にとっての代替テキストの価値を説明する｡](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 自動的に開始するコンテンツのコントロールの提供

ユーザーがアニメーションや自動再生サウンドを停止できるように､目に見えるコントロールを提供しましょう｡これは､カルーセル､画像スライダー､背景音､動画に適用されます｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: カルーセルデザインに再生/停止と選択コントロールを表示するn" class="example" %}
{:/}

<div class="autoplay">
  <figure>
    <div>
      {% include_cached image.html src="tips/carousel_controls.png" alt="カルーセルデザインに再生/停止と選択コントロールを表示する例" %}
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [オーディオコントロール 1.4.2](/WAI/WCAG21/quickref/#audio-control) ([理解のため 1.4.2](/WAI/WCAG21/Understanding/audio-control))
  * [一時停止､停止､離れる 2.2.2](/WAI/WCAG21/quickref/#pause-stop-hide) ([理解のため 2.2.2](/WAI/WCAG21/Understanding/pause-stop-hide))
* **Tutorial**
  * [カルーセルのコンセプト](/tutorials/carousels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="アクセシビリティについてのさらなる情報" class="large" icon="readmore" %}
{:/}

これらのヒントは､Webアクセシビリティのために考慮すべきことのほんの一部です｡アクセシビリティが重要である理由､および障害者がWebをより利用しやすくするためのガイドラインについては､以下のリソースを参照してください｡

* [ウェブ・アクセシビリティ入門](/fundamentals/accessibility-intro/) — - ビジネスケースなど幅広い問題を取り上げ､役立つリソースへのリンクを掲載
* [アクセシビリティ原則](/fundamentals/accessibility-principles/) — ウェブ・アクセシビリティ要件の背景にある概念を紹介します
* [障害者はどのようにウェブを利用しているか](/people-use-web/) — 実際の事例をもとにアクセシブルデザインの影響を探る
* [ウェブ・アクセシビリティ・チュートリアル](/tutorials/) — - [画像の代替テキストの提供](/tutorials/images/)など､デザインに関するガイダンスが含まれています
* [ビフォー・アフター・デモンストレーション ](/WAI/demos/bad/) — 同じウェブサイトのアクセシブルでないバージョンとアクセシブルなバージョンを示し､アクセシビリティの障害と修復に関する注釈を付けています
* [WCAGを満たす方法（クイックリファレンス）](/WAI/WCAG21/quickref/) — すべてのWCAG要件とテクニックのカスタマイズ可能なリファレンス
* [ウェブアクセシビリティ評価ツールリスト](/WAI/ER/tools/) — コントラスト比の調査に役立つツールを含む

{::nomarkdown}
{% include box.html type="end" %}
{:/}
