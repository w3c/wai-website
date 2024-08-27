---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "ウェブ・アクセシビリティを考慮した記述法 – 始めるにあたってのヒント"
title_html: "ウェブ・アクセシビリティを考慮した記述法"
nav_title: 始めるためのヒント
lang: ja  # Change "en" to the translated-language shortcode
last_updated: 2024-04-16  # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/  # Do not change this

navigation:
  previous: /tips/  # Do not change this
  next: /tips/designing/  # Do not change this

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Jay Kishigami"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips

permalink: /tips/writing/ja   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/writing/   # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#writing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  ~~<p><strong>月日:</strong> 2022年8月5日アップデート､初版は2015年9月</p>
  <p><strong>編集者:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, and <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>ACKNOWLEDGEMENTS</p>
  <p><a href="https://www.w3.org/WAI/EO/">教育と援助のためのWG (EOWG)</a>によって開発され. <a href="https://www.w3.org/WAI/DEV/">WAI-DEV プロジェクト</a>からのサポートを受けるとともに, ヨーロッパ委員会の <abbr title="Information Society Technologies">IST</abbr> プログラムの援助を受けた.</p>

---

{::nomarkdown}
{% include box.html type="start" h="2" title="概要" class="full" %}
{:/}

このページでは､障害者にとってアクセシブルなWebコンテンツを書き始めるための考慮すべき基本的な事項を紹介します｡これらのヒントは､Webコンテンツ・アクセシビリティ・ガイドライン(WCAG)の要件を満たすためのグッドプラクティスです｡関連するWCAG要件､「理解するための」ドキュメントでの詳細な背景､チュートリアルからのガイダンス､ユーザーストーリーなどへのリンクをたどってください｡

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

## 情報量が多くてユニークなページタイトルを

各ウェブページには､ページの内容を説明し､他のページと区別できる短いタイトルを付けます｡ページタイトルは､そのページの大見出しと同じであることが多い｡ユニークで最も関連性の高い情報を最初に持ってくる例えば､組織名の前にページ名を書くなどです｡複数ステップのプロセスの一部であるページでは､現在のステップをページタイトルに含める｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: ページのタイトル" class="example" %}
{:/}

<div class="page-title">
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %} ホームページのタイトル</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %} ページ名の後に組織名</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">最新のニュース &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %} プロセスのステップを含むページ名</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">あなたがテディベアを買う方法 (ステップ 1 / 3) &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
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
  * [ページタイトル 2.4.2](/WAI/WCAG21/quickref/#page-titled) ([理解のため 2.4.2](/WAI/WCAG21/Understanding/page-titled))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 意味と構造を伝えるために見出しを使う

短い見出しを使って関連する段落をグループ化し､セクションを明確に説明する｡良い見出しは､内容のアウトラインを提供します｡.

{::nomarkdown}
{% include_cached box.html type="start" title="例: 見出しを使ってコンテンツを整理する" class="example" %}
{:/}

<div class="heading-structure two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="良くない場合" %}見出しが欠如している場合</figcaption>
    <div>
      {% include_cached image.html src="tips/headings-poor.png" alt="見出しがない例､詳細は下記を参照" %}
    </div>
{% include_cached excol.html type="start" id="no-headings" %}
インラインでの例を表示
{% include_cached excol.html type="middle" %}
<h2 id="no-headings-modal-title"><span class="visuallyhidden">Example: </span>見出しと小見出し</h2>

<p>HTML要素は、文書の構造階層に関する情報を提供する。要素を正しく使うことで、支援技術にさらなる意味を伝えることができる。多くの場合、そうすることで文書の編集も容易になる。</p>

<p>3、4段落より長い文書では、見出しと小見出しはユーザビリティとアクセシビリティのために重要である。これらの見出しは、読者が文書全体のアウトラインを判断し、関心のある特定の情報にナビゲートするのに役立つ。</p>

<p>見出しは1から6までのレベルに分類される。最も高いレベルは「レベル1」で、ページのタイトルや文書の主要なセクションに対応することが多い。</p>

<p>読者は、より大きなサイズのテキストや異なるスタイルのテキストを探すためにページをスキャンすることで、ヘッダーを識別する。支援技術ユーザーはこのような視覚的な変化を見ることができないので、スタイルを変えても十分な手がかりにはならない。</p>

<p>その代わりに、支援技術が見出しを識別できるように、見出しは意味的に「タグ付け」されなければならない。そうすれば、見出しをナビゲーションに使うこともできる。</p>

<p>このため、見出しを追加することは、スクリーン・リーダー・ユーザーにとって最も重要なツールの1つである。タグ付けは通常、視覚的にフォーマットの変更を引き起こすので、多くの文書で調整できることに注意しよう。.</p>

<cite>参照 <a href="https://accessibility.psu.edu/headings/">Penn Stateにおける見出しと小見出し</a></cite>
{% include_cached excol.html type="end" %}
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %}見出しと小見出しを使用した場合</figcaption>
    <div>
      {% include_cached image.html src="tips/headings-good.png" alt="よい見出しの使い方､詳細は下記を参照"%}
    </div>
{% include_cached excol.html type="start" id="headings-good" %}
インラインでの例を表示
{% include_cached excol.html type="middle" %}
<h2 id="headings-modal-title"><span class="visuallyhidden">例: </span>見出しと小見出し</h2>

<p><abbr>HTML</abbr> 要素は、文書の構造的階層に関する情報を提供する。要素を正しく使用することで、支援技術にさらなる意味を伝えることができる。多くの場合、そうすることで文書の編集も容易になる</p>

<h3><span class="visuallyhidden">Example: </span>見出しの目的</h3>

<p>3、4段落より長い文書では、見出しと小見出しはユーザビリティとアクセシビリティのために重要である。これらの見出しは、読者が文書全体のアウトラインを判断し、関心のある特定の情報にナビゲートするのに役立つ。</p>

<h4><span class="visuallyhidden">例: </span>見出しのレベル</h4>

<p>見出しは1から6までのレベルに分類される。最も高いレベルは「レベル1」で、ページのタイトルや文書の主要なセクションに対応することが多い。</p>

<h3><span class="visuallyhidden">例: </span>意味とフォーマット</h3>

<p>視覚読者は、より大きなサイズのテキストや異なるスタイルのテキストを探すためにページをスキャンすることで、ヘッダーを識別する。支援技術ユーザーはこのような視覚的な変化を見ることができないので、スタイルを変えても十分な手がかりにはならない。</p>

<p>その代わりに、支援技術が見出しを識別できるように、見出しは意味的に「タグ付け」されなければならない。そうすれば、見出しをナビゲーションに使うこともできる。</p>

<p>このため、見出しを追加することは、スクリーン・リーダー・ユーザーにとって最も重要なツールの1つである。タグ付けは通常、視覚的にフォーマットの変更を引き起こすので、多くの文書で調整できることに注意しよう。</p>

<cite>参照 <a href="https://accessibility.psu.edu/headings/">Penn Stateにおける見出しと小見出し</a></cite>
{% include_cached excol.html type="end" %}
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
  * [章見出し 2.4.10](/WAI/WCAG21/quickref/#section-headings) ([理解のため 2.4.10](/WAI/WCAG21/Understanding/section-headings))
  * [情報と関係性 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([理解のため 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
* **ユーザーストーリー**
  * [   スクリーン・リーダー・ユーザーが見出しを使ってナビゲートする方法](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## リンクテキストに意味を持たせる

リンクテキストは､リンク先の内容を説明するように書きましょう｡｢ここをクリック」や「続きを読む」など､あいまいなリンクテキストは使用しないように｡文書の種類やサイズなど､リンク先に関する関連情報を示すこと（例：「提案書類（RTF､20MB）」）｡


{::nomarkdown}
{% include_cached box.html type="start" title="例: リンクテキストを使ってターゲットページを説明する" class="example" %}
{:/}

<div class="meaningful-links two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="良くない場合" %} 情報なし</figcaption>
    <div>
      <p class="fail">デバイスの独立性についての詳細は, <a href="javascript:return false">ここをクリック</a>.</p>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %} 意味のある情報</figcaption>
    <div>
      <p class="pass"> <a href="javascript: return false">デバイスの独立性に関して</a>.もっと読む</p>
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
  * [リンクの目的 (文脈の中で) 2.4.4](/WAI/WCAG21/quickref/#link-purpose-in-context) ([理解のため 2.4.4](/WAI/WCAG21/Understanding/link-purpose-in-context))
  * [リンクの目的 (リンクのみの場合) 2.4.9](/WAI/WCAG21/quickref/#link-purpose-link-only) ([理解のため 2.4.9](/WAI/WCAG21/Understanding/link-purpose-link-only))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 画像の代わりになる説明文を記述

すべての画像について､その画像の情報や機能を提供する代替テキストを書きましょう｡純粋に装飾的な画像については､代替テキストを書く必要はありません｡


{::nomarkdown}
{% include_cached box.html type="start" title="例: 重要な情報を伝えるための代替テキストの使用" class="example" %}
{:/}

<div class="text-alt two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="良くない場合" %} 情報不足の場合</figcaption>
    <div>
      {% include_cached image.html src="tips/phone_charging.png" alt="電話への充電"  float="left" %}
      <div>
        <p> 携帯電話の充電：付属のケーブルと電源アダプターを使用して､携帯電話を電源コンセントに接続します｡</p>
        <p><strong>画像の代替テキスト</strong>: "電話への充電"</p>
      </div>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %}情報に意味のある場合</figcaption>
    <div>
      {% include_cached image.html src="tips/phone_charging.png" alt="携帯電話の下端にケーブルを差し込みます." float="left" %}
      <div>
        <p>携帯電話をの充電: 付属のケーブルと電源アダプターを使用して､携帯電話を電源コンセントに接続します｡
</p>
        <p><strong>画像の代替テキスト</strong>: "携帯電話の下端にケーブルを差し込みます."</p>
      </div>
    </div>
  </figure>
</div>
<p class="note">代替テキストは通常表示されない; この例ではそれが見えるようにしています</p>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **WCAG**
  * [文字ではない情報 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([理解のため 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **チュートリアル**
  * [画像](/tutorials/images/)
* **ユーザーストーリー**
  * [視覚障害者にとっての代替テキストの価値を説明](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## マルチメディア用のトランスクリプトとキャプションの作成

ポッドキャストなど音声のみのコンテンツには､トランスクリプトを提供しましょう｡トレーニングビデオのような音声と映像のコンテンツでは､キャプションも提供しましょう｡トランスクリプトとキャプションには､例えば「ドアのきしみ音」のように､コンテンツを理解する上で重要な音声情報と音声を含めるようにしましょう｡ビデオの書き起こしの場合は､重要なビジュアルコンテンツの説明も含めてください（例：「Athanが部屋から出た」）｡

{::nomarkdown}
{% include_cached box.html type="start" title="詳細情報" class="simple" %}
{:/}

* **[[ 音声・映像メディアをアクセシブルに]](/media/av/)**

* **WCAG**
  * [字幕 (あらかじめ録音されたもの) 1.2.2](/WAI/WCAG21/quickref/#captions-prerecorded) ([理解のため 1.2.2](/WAI/WCAG21/Understanding/captions-prerecorded))
  * [音声説明または代替メディア (あらかじめ録音されたもの) 1.2.3](/WAI/WCAG21/quickref/#audio-description-or-media-alternative-prerecorded) ([理解のため 1.2.3](/WAI/WCAG21/Understanding/audio-description-or-media-alternative-prerecorded))
* **ユーザーストーリー**
  * [耳の不自由な生徒のために､キャプションがどのように役立つかを説明](/people-use-web/user-stories/archived/#onlinestudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 明確な指示
指示､ガイダンス､エラーメッセージが明確で理解しやすく､不必要に専門的な表現を避けるようにしましょう｡日付の書式など､入力二必要なことを記述しましょう｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: 指示は､ユーザーがどのような情報を提供すべきかを伝える" class="example" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <form action="#" method="post">
        <p id="password-desc">パスワードは6文字以上で､数字（0～9）を1文字以上使用してください｡
</p>
        <div class="row">
          <label for="password">パスワード</label>
          <input aria-describedby="password-desc" type="password" id="password" name="password" value="">
        </div>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="例: エラーは何が問題で､場合によってその解決方法も示す" class="example" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <ol class="fa-ul error-list">
        <li id="error_email">{% include_cached icon.html name="warning" label="Error" %} <a href="javascript:return false">ユーザー名「superbear」はすでに使用されています｡</a></li>
        <li id="error_password">{% include_cached icon.html name="warning" label="Error" %} <a href="javascript:return false">パスワードには少なくとも1つの数字を含める必要があります｡</a></li>
      </ol>
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
  * [ラベルと指示 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([理解のため 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
* **ユーザーストーリー**
  * [学習困難な人を助ける簡単な指示について説明](/people-use-web/user-stories/archived/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## 内容は明確かつ簡潔に

文脈に応じて､シンプルな表現と書式を用いる｡

*  短く明確な文章と段落で書くこと｡
*  不必要に複雑な単語や言い回しを使わないようにすること｡
*  略語は初回使用時に拡大すること｡例えば､ウェブ・コンテンツ・アクセシビリティ・ガイドライン（WCAG）｡
*  読者が知らない用語については､用語集を提供することを検討すること｡
*  適宜､リストの書式を使用すること｡
*  意味を明確にするために､画像､イラスト､ビデオ､音声､記号の使用を検討すること｡

{::nomarkdown}
{% include_cached box.html type="start" title="例: 読みやすく理解しやすいコンテンツ" class="example" %}
{:/}

<div class="two-column">
  <figure class="from-col1 to-col2">
    <figcaption>{% include_cached icon.html name="ex-circle" label="良くない場合" %} 不必要に複雑な例</figcaption>
    <div>
      <p class="fail">CPP：車両衝突事故が発生した場合､当社の担当者が関係者全員の所有物に対する損害の程度と原因を確認します｡当社の担当者が因果関係を理解するための情報を得た後､適切な金銭補償を行う場合もあれば､行わない場合もある｡その結果､請求は承認されず却下のステータスとなる､請求のステータスが曖昧で今後の処理に追加情報が必要となる､請求が部分的に承認され､減額された支払いが割り当てられ発行される､請求が完全に承認され､請求の支払い総額が割り当てられ発行される､などのオプションのいずれかが決定される可能性があります｡
</p>
    </div>
  </figure>
  <figure class="from-col3 to-col4">
    <figcaption>{% include_cached icon.html name="check-circle" label="良い場合" %}より理解しやすい例</figcaption>
    <div>
      <p class="pass">保険金請求手続き（CPP）：交通事故に遭われた場合､代理店が調査を行います｡調査結果は保険金の支払いを決定します｡その結果は下記のとおりです
:</p>
      <ul>
        <li> 承認された請求には - 全額払い</li>
        <li>部分的に承認されたクレームには-減額された支払</li>
        <li>未確定クレームには-より詳細な情報が必要</li>
        <li>請求却下の場合は-支払いなし</li>
      </ul>
      <p>{% include_cached image.html src="tips/clear_text_diagram.png" alt="" style="max-width:100%" %}</p>
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
  * [読解レベル 3.1.5](/WAI/WCAG21/quickref/#reading-level) ([理解のため 3.1.5](/WAI/WCAG21/Understanding/reading-level))
  * [普段使わない言葉 3.1.3](/WAI/WCAG21/quickref/#unusual-words) ([理解のため 3.1.3](/WAI/WCAG21/Understanding/unusual-words))
  * [略語 3.1.4](/WAI/WCAG21/quickref/#abbreviations) ([理解のため 3.1.4](/WAI/WCAG21/Understanding/abbreviations))
* **ユーザーストーリー**
  * [読書障害のあるユーザーにとって､読みやすいテキストは有益である｡](/people-use-web/user-stories/archived/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="アクセシビリティについて" class="large" icon="readmore" %}
{:/}

これらのヒントは､ウェブ・アクセシビリティのために考慮すべきことのほんの一部です｡認知障害や学習障害のある人のアクセシビリティのニーズを満たす文章を書くための追加ガイダンスは､ **[明確で理解しやすいコンテンツを使用](https://www.w3.org/WAI/WCAG2/supplemental/objectives/o3-clear-content/)**.

以下のリソースは､アクセシビリティが重要である理由､および障害者にとってWebをより利用しやすくするためのガイドラインを学ぶのに役立ちます｡


* [アクセシビリティ入門](/fundamentals/accessibility-intro/) — アクセシビリティを紹介し､多くの有用なリソースへのリンクを提供

* [アクセシビリティ原則](/fundamentals/accessibility-principles/) — <abbr>WCAG</abbr> 要求事項の紹介
* [障害者はどのようにウェブを利用しているか](/people-use-web/) —  障害者にとってのアクセシビリティの重要性を示す実例
* [WCAGを満たす方法 (クイックリファレンス)](/WAI/WCAG21/quickref/) — すべてのWCAG要件とテクニックのカスタマイズ可能なリファレンス


{::nomarkdown}
{% include box.html type="end" %}
{:/}
