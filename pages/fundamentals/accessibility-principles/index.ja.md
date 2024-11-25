---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: アクセシビリティの原則
nav_title: "アクセシビリティの原則"
lang: ja
last_updated: 2019-07-13   # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: ウェブサイト、ウェブアプリケーション、ブラウザ、その他のツールに関する基本的なウェブアクセシビリティ要件の概要。
teaser_text: アクセシビリティ原則のページでは、ウェブサイト、ウェブアプリケーション、ブラウザ、その他のツールに関するウェブアクセシビリティ要件の一部を紹介しています。また、W3Cウェブ・アクセシビリティ・イニシアティブ（WAI）の国際標準や、ウェブユーザーの体験談を紹介しています。

translation:
  last_updated: 2023-12-06
  status: outdated

translators: 
- name: "Takumi Ishihara"   # Replace @@ with translator name
  link: "https://twitter.com/takuan517"
contributors:
- name: "Jay Kishigami"

github:
  label: wai-accessibility-principles

permalink: /fundamentals/accessibility-principles/ja   # Add the language shortcode to the end; for example /fundamentals/accessibility-principles/fr
ref: /fundamentals/accessibility-principles/   # Do not change this

image: /content-images/wai-accessibility-principles/social.png

# In the footer below:
# Translate the words, including "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>編集者：</strong><a href="https://www.w3.org/People/shadi/">Shadi Abou Zahra</a>。<a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">謝辞</a>。</p>
  <p>教育および広報ワーキンググループ（<a href="http://www.w3.org/WAI/EO/">EOWG</a>）によって開発されました。以前は<a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">WAI-AGE タスクフォース</a>との共同開発で、<a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE プロジェクト</a>の支援を受けていました。</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

このページは、ウェブサイト、ウェブアプリケーション、ブラウザ、その他のツールに対する一部のウェブアクセシビリティ要件を紹介しています。W3Cウェブアクセシビリティイニシアティブ（WAI）の国際標準と、[ウェブユーザーの体験談](/people-use-web/user-stories/)への参照を提供しています。

**注意：** これは、すべてのアクセシビリティ要件を網羅したリストではありません。

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


{% include excol.html type="all" %}

## ウェブ・アクセシビリティ標準 {#standards}

ウェブアクセシビリティは、連携して機能するいくつかの要素に依存しています。これには以下が含まれます：

-   **ウェブコンテンツ**{:#webcontent} - ウェブサイトの任意の部分を指し、テキスト、画像、フォーム、マルチメディア、およびマークアップコード、スクリプト、アプリケーションなどを含みます。
-   **ユーザーエージェント**{:#useragents} - 人々がウェブコンテンツにアクセスするために使用するソフトウェアで、デスクトップグラフィックブラウザ、ボイスブラウザ、携帯電話ブラウザ、マルチメディアプレイヤー、プラグイン、および一部の[支援技術](/people-use-web/tools-techniques/#at "definition")を含みます。
-   **オーサリングツール**{:#authoringtools} - 人々がウェブコンテンツを生成するために使用するソフトウェアまたはサービスで、コードエディター、文書変換ツール、コンテンツ管理システム、ブログ、データベーススクリプトなどのツールを含みます。

{% include excol.html type="start" %}

### ウェブ・アクセシビリティ標準の詳細
{:.no_toc}

{% include excol.html type="middle" %}

これらのコンポーネントは相互に関連し合い、お互いを支えています。例えば、**ウェブコンテンツ**は画像のテキスト代替を含む必要があります。この情報は**ウェブブラウザ**によって処理され、スクリーンリーダーなどの**支援技術**に伝えられる必要があります。このようなテキスト代替を作成するためには、作者はそれを行うための支援を提供する**オーサリングツール**が必要です。より詳しい背景は、[[ウェブアクセシビリティの必須コンポーネント]](/fundamentals/components/)に記載されています。

標準は、これらの各コンポーネントに対するアクセシビリティ要件を定義する上で重要な役割を果たします。一部のアクセシビリティ要件は満たしやすいですが、障害を持つ人々がウェブをどのように使用しているかの基本を理解することは、それらをより効果的かつ効率的に実装するのに役立ちます。アクセシビリティのいくつかの側面は、より技術的なスキルや、人々がウェブをどのように使用しているかに関する高度な知識を必要とします。すべての場合において、[ウェブプロジェクトの早期および全体を通じてユーザーを関与させること](/test-evaluate/involving-users/)は、あなたの仕事をより良く、容易にします。

W3Cウェブアクセシビリティイニシアティブ（WAI）は、ウェブアクセシビリティのための国際的に認められた標準となる一連のガイドラインを提供しています。これには以下が含まれます：

-   **[ウェブコンテンツアクセシビリティガイドライン (WCAG)](/standards-guidelines/wcag/)**
-   **[ユーザーエージェントアクセシビリティガイドライン (UAAG)](/standards-guidelines/uaag/)**
-   **[オーサリングツールアクセシビリティガイドライン (ATAG)](/standards-guidelines/atag/)**

また、Ajax、JavaScript、および関連するウェブ技術で開発された動的コンテンツと高度なユーザーインターフェースコントロールを含む、**[アクセシブルリッチインターネットアプリケーション (WAI-ARIA)](/standards-guidelines/aria/)** のためのWAI仕様もあります。

{% include excol.html type="end" %}

## 知覚可能な情報とユーザー・インターフェース {#perceivable}

### テキスト以外のコンテンツの代替テキスト {#alternatives}

テキスト代替とは、テキスト以外のコンテンツに相当するものである。例えば、以下のようなものがあります：

- 画像、アイコン、ボタン、グラフィックスなどの短い代替テキスト
- チャート、図表、イラストに表されているデータの説明
- オーディオやビデオファイルなどの非テキストコンテンツの簡潔な説明
- フォームコントロール、入力欄、その他のユーザーインターフェースコンポーネントのラベル

テキスト代替は、画像の目的や機能を伝え、同等のユーザーエクスペリエンスを提供します。たとえば、検索ボタンの適切なテキスト代替は「*拡大鏡*」ではなく「*検索*」です。

テキスト代替は様々な方法で提示することができます。例えば、画面を見ることができない人や読み取りに困難を持つ人のために音声で読み上げられたり、カスタムテキストサイズに拡大されたり、点字デバイスに表示されたりすることがあります。テキスト代替は、キーボードナビゲーションや音声認識（音声入力）によるナビゲーションを支援するためのコントロールや機能のラベルとして機能します。また、オーディオ、ビデオ、その他のフォーマットのファイルや、ウェブサイトの一部として組み込まれたアプリケーションを識別するためのラベルとしても機能します。

{% include excol.html type="start" %}

#### 代替テキストに関するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [ガイドライン 1.1 - テキスト代替](https://www.w3.org/WAI/WCAG22/quickref/#text-alternatives)

**UAAG**

-   [ガイドライン 1.1 - 代替コンテンツ](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [原則 A.1: オーサリングツールのユーザーインターフェースは、該当するアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.2.1: （オーサリングツールのユーザーインターフェースにおいて）著者が代替コンテンツを利用できるようにする。](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [ガイドライン A.2.2: (オーサリングツールのユーザーインターフェイス用) 編集ビューの表示がプログラムで決定できることを保証する](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [ガイドライン A.3.7: (オーサリングツールのユーザーインターフェイス用) プレビューが市場に出回っているユーザーエージェントと同等以上にアクセシブルであることを保証する](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [パート B. アクセシブルなコンテンツの制作をサポートする](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### 代替テキストに関連する記事
{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

-   [Alex、繰り返しストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Martine、聴覚障害を持つオンライン学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya、視覚障害を持つ上級職員](/people-use-web/user-stories/archived/#accountant)
-   [Preety、注意欠陥・多動性障害およびディスレクシアを持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem、聴覚障害と視覚障害を持つ10代の若者](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### マルチメディアのためのキャプションとその他の代替手段 {#captions}

音声を聞いたり映像を見たりすることができない人には、代替手段が必要です。例えば、以下のようなものがあります：

-   ラジオインタビューの録音など、音声コンテンツのためのテキストトランスクリプトとキャプション
-   ビデオ内の重要な視覚的詳細を説明するための音声解説
-   関連する聴覚体験を含む音声コンテンツのための手話通訳

正確な順序で聴覚または視覚情報を含むよく書かれたテキストトランスクリプトは、基本的なアクセシビリティレベルを提供し、キャプションや音声解説の制作を容易にします。

{% include excol.html type="start" %}

#### マルチメディアに関するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [ガイドライン 1.2 - 時間依存メディア](https://www.w3.org/WAI/WCAG22/quickref/#time-based-media)

**UAAG**

-   [ガイドライン 1.1 - 代替コンテンツ](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [原則 A.1: オーサリングツールのユーザーインターフェイスは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.2.1: (オーサリングツールのユーザーインターフェイス用) 作者に代替コンテンツを利用可能にする](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [ガイドライン A.3.7: (オーサリングツールのユーザーインターフェイス用) プレビューが市場に出回っているユーザーエージェントと同等以上にアクセシブルであることを保証する](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [パート B. アクセシブルなコンテンツの制作をサポートする](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### マルチメディア関連記事 {#stories-related-to-multimedia}
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine、聴覚障害を持つオンライン学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya、視覚障害を持つ上級職員](/people-use-web/user-stories/archived/#accountant)
-   [Kaseem、聴覚障害と視覚障害を持つ10代の若者](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### コンテンツはさまざまな方法で提示できる {#adaptable}

コンテンツの表示をユーザーが変更できるようにするためには、以下が必要です：

-   見出し、リスト、テーブル、入力フィールド、およびコンテンツ構造が適切にマークアップされている
-   情報や指示の順序が、任意の表示から独立している
-   ブラウザと支援技術が、表示をカスタマイズするための設定を提供している

この要件を満たすことで、コンテンツが正しく音声で読み上げられたり、拡大されたり、さまざまな人々のニーズや好みに合わせて適応されたりすることが可能になります。例えば、読みやすさを向上させるために、カスタムの色組み合わせ、テキストサイズ、その他のスタイリングを使用して表示されることがあります。この要件は、ページのアウトラインや要約を自動生成するなど、他の形式の適応も容易にします。これにより、人々が概要を把握したり、特定の部分により簡単に焦点を当てたりするのに役立ちます。

{% include excol.html type="start" %}

#### 適応性に関するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [ガイドライン 1.3 - 適応可能](https://www.w3.org/WAI/WCAG22/quickref/#adaptable)

**UAAG**

-   [ガイドライン 1.4 - テキスト構成](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [ガイドライン 1.5 - 音量構成](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [ガイドライン 1.6 - 合成音声の構成](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [ガイドライン 1.7 - ユーザースタイルシートの構成](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [ガイドライン 1.9 - 代替ビュー](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [ガイドライン 1.10 - 要素情報](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [原則 A.1: オーサリングツールのユーザーインターフェイスは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.2.2: (オーサリングツールのユーザーインターフェイス用) 編集ビューの表示がプログラムで決定できることを保証する](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [ガイドライン A.3.7: (オーサリングツールのユーザーインターフェイス用) プレビューが市場に出回っているユーザーエージェントと同等以上にアクセシブルであることを保証する](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [パート B. アクセシブルなコンテンツの制作をサポートする](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 順応性に関連する記事
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee、色覚異常を持つオンラインショッパー](/people-use-web/user-stories/archived/#shopper)
-   [Alex、繰り返しストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Ilya、視覚障害を持つ上級職員](/people-use-web/user-stories/archived/#accountant)
-   [Preety、注意欠陥・多動性障害およびディスレクシアを持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Luis、ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem、聴覚障害と視覚障害を持つ10代の若者](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### コンテンツが見やすく、聞き取りやすくなる {#distinguishable}

識別可能なコンテンツは見やすく、聞き取りやすい。そのようなコンテンツには以下のようなものがあります：

-   色が情報を伝えたりコンテンツを識別したりする唯一の方法として使用されていない
-   デフォルトの前景色と背景色の組み合わせが十分なコントラストを提供している
-   ユーザーがテキストを400%まで拡大したりテキストの間隔を変更したりしても、情報が失われない
-   テキストは小さいウィンドウ（「ビューポート」）や、ユーザーがテキストを大きくしたときにリフローする
-   テキストの画像がリサイズ可能であり、実際のテキストに置き換えられるか、可能な限り避けられる
-   ユーザーは、ウェブサイトで再生される音声を一時停止、停止、または音量を調整することができる
-   背景音は低く設定されているか、干渉や気晴らしを避けるためにオフにできる

この要件を満たすことは、前景と背景を区別し、重要な情報をより識別しやすくするのに役立ちます。これには、支援技術を使用しない人々と、支援技術を使用している人々が、背景の目立つ音声や視覚コンテンツによる干渉を感じる可能性がある場合の考慮事項が含まれます。例えば、多くの色覚異常を持つ人々は特定のツールを使用せず、テキストとその周囲の背景との間に十分な色のコントラストを提供する適切なデザインに依存しています。他の人にとっては、自動的に再生される音声がテキスト読み上げや[支援聴取デバイス (ALDs)](/teach-advocate/accessible-presentations/#ald "definition")と干渉する可能性があります。

{% include excol.html type="start" %}

#### 識別可能性に関するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [ガイドライン 1.4 - 識別可能](https://www.w3.org/WAI/WCAG22/quickref/#distinguishable)

**UAAG**

-   [ガイドライン 1.3 - ハイライト表示](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [ガイドライン 1.4 - テキスト構成](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [ガイドライン 1.5 - 音量構成](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [ガイドライン 1.6 - 合成音声の構成](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [ガイドライン 1.7 - ユーザースタイルシートの構成](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [ガイドライン 1.8 - ビューポート内のオリエンテーション](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [ガイドライン 1.9 - 代替ビュー](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [ガイドライン 1.10 - 要素情報](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [原則 A.1: オーサリングツールのユーザーインターフェイスは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.3.7: (オーサリングツールのユーザーインターフェイス用) プレビューが市場に出回っているユーザーエージェントと同等以上にアクセシブルであることを保証する](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [パート B. アクセシブルなコンテンツの制作をサポートする](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 区別可能性に関連する記事
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee、色覚異常を持つオンラインショッパー](/people-use-web/user-stories/archived/#shopper)
-   [Martine、聴覚障害を持つオンライン学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya、視覚障害を持つ上級職員](/people-use-web/user-stories/archived/#accountant)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem、聴覚障害と視覚障害を持つ10代の若者](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

## 操作可能なユーザー・インターフェースとナビゲーション {#operable}

### キーボードからの操作が可能 {#keyboard}

多くの人々はマウスを使用せず、キーボードに頼ってウェブとやり取りします。これには、フォームコントロール、入力欄、その他のユーザーインターフェイスコンポーネントを含む、すべての機能へのキーボードアクセスが必要です。

キーボードのアクセシビリティ:

-   マウスで利用可能なすべての機能がキーボードでも利用可能である
-   キーボードフォーカスがコンテンツの任意の部分に閉じ込められない
-   ウェブブラウザ、オーサリングツール、およびその他のツールがキーボードサポートを提供する

この要件を満たすことで、エルゴノミックなレイアウトのキーボード、オンスクリーンキーボード、スイッチデバイスなどの代替キーボードを使用する人々を含む、キーボードユーザーを支援できます。また、音声認識（音声入力）を使用してウェブサイトを操作したり、キーボードインターフェースを通じてテキストを入力したりする人々にも役立ちます。

{% include excol.html type="start" %}

#### キーボード・アクセシビリティに関するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [ガイドライン 2.1 - キーボードでアクセス可能](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-accessible)

**UAAG**

-   [ガイドライン 2.1 - キーボードアクセス](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [ガイドライン 2.2 - 順序付けられたナビゲーション](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [ガイドライン 2.3 - 直接ナビゲーションとアクティベーション](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [ガイドライン 2.11 - その他の入力デバイス](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [原則 A.1: オーサリングツールのユーザーインターフェイスは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.3.1: (オーサリングツールのユーザーインターフェイス用) オーサリング機能へのキーボードアクセスを提供する](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [パート B. アクセシブルなコンテンツの制作をサポートする](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### キーボード・アクセシビリティに関連する記事
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 再発性ストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 盲目のシニアスタッフ](/people-use-web/user-stories/archived/#accountant)

{% include excol.html type="end" %}

### コンテンツを読み、利用するのに十分な時間が必要なユーザー {#time}

コンテンツを読んだり利用したりするのに、他の人よりも多くの時間を必要とする人もいます。例えば、テキストを入力したり、説明を理解したり、コントロールを操作したり、ウェブサイト上のタスクを完了したりするのに、より多くの時間を必要とする人もいます。

十分な時間を提供する例としては、以下のような仕組みがある：

-   必要な場合を除き、制限時間を停止、延長、または調整する。
-   動いている、点滅している、またはスクロールしているコンテンツを一時停止、停止、または非表示にする。
-   必要な場合を除き、中断を延期または抑制する。
-   セッションが終了したときに、データを失うことなく再認証する。

{% include excol.html type="start" %}

#### 十分な時間に関するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [ガイドライン2.2-十分な時間](https://www.w3.org/WAI/WCAG22/quickref/#enough-time)

**UAAG**

-   [ガイドライン2.8-時間に依存しない相互作用](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [ガイドライン2.10 - 時間ベースのメディア](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [原則A.1： オーサリングツールのユーザーインターフェイスは、適用されるアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.3.2:(オーサリングツールのユーザインタフェースについて) 著者に十分な時間を与える](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [パートB. アクセシブルなコンテンツ制作の支援](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 十分な時間に関連する記事
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 反復性ストレス障害記者](/people-use-web/user-stories/archived/#reporter)
-   [Preety, 注意欠如多動性障害と失読症を持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 低視力、手の震え、軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Luis, ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 聴覚障害と視覚障害を持つ10代の若者](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 発作や身体反応を引き起こさない内容 {#safe}

特定の速度やパターンで点滅するコンテンツは、発作を含む光感受性反応を引き起こすことがあります。点滅するコンテンツは理想的には完全に避けるべきであり、または既知のリスクを引き起こさない方法でのみ使用されるべきです。さらに、アニメーションや動くコンテンツは不快感や身体反応を引き起こすことがあります。

発作や身体反応を引き起こさないようにするための例:

-   特定の速度やパターンで点滅するコンテンツは含めない
-   点滅するコンテンツを提示する前にユーザーに警告し、代替手段を提供する
-   アニメーションを停止する機構を提供する（それが不可欠でない限り）

{% include excol.html type="start" %}

#### 発作に関連するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG（ウェブコンテンツアクセシビリティガイドライン）**
-   [ガイドライン 2.3 - 発作](https://www.w3.org/WAI/WCAG22/quickref/#seizures-and-physical-reactions)

**UAAG（ユーザーエージェントアクセシビリティガイドライン）**
-   [ガイドライン 2.9 - 点滅](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG（オーサリングツールアクセシビリティガイドライン）**
-   [原則 A.1: オーサリングツールのユーザーインターフェースは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.3.3: (オーサリングツールのユーザーインターフェース用) 発作を引き起こす可能性のある点滅を避けるために著者を助ける](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [パート B. アクセシブルなコンテンツの製作をサポート](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

### 簡単にナビゲートし、コンテンツを見つけ、どこにいるかを判断できるユーザ

整理されたコンテンツは、利用者が自分自身を見つけ、効果的にナビゲートするのに役立ちます。そのようなコンテンツには以下が含まれます：

-   ページには明確なタイトルがあり、記述的なセクション見出しを使って整理されています
-   ウェブページのセット内で関連するページを見つけるための複数の方法があります
-   利用者は関連するページのセット内での現在の位置について情報を得ることができます
-   複数のページに繰り返されるコンテンツのブロックを迂回する方法があります
-   キーボードフォーカスが可視であり、フォーカスの順序が意味のあるシーケンスに従っています
-   リンクの目的が明確であり、理想的にはリンクが単独で表示された場合でも理解できます

この要件を満たすことで、特定のニーズや好みに応じて、人々が異なる方法でウェブページをナビゲートできるようになります。たとえば、特定のウェブページを見つけるためにメニューバーなどの階層的なナビゲーション構造に依存する人もいれば、代わりにウェブサイト上の検索機能に依存する人もいます。コンテンツを見る人もいれば、聞く人もいるかもしれませんし、同時に見て聞く人もいます。マウスのみ、またはキーボードのみを使ってコンテンツを使用する人もいれば、両方を使用する人もいます。

{% include excol.html type="start" %}

#### ナビゲーションに関連するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG（ウェブコンテンツアクセシビリティガイドライン）**
-   [ガイドライン 2.4 - ナビゲーション可能](https://www.w3.org/WAI/WCAG22/quickref/#navigable)

**UAAG（ユーザーエージェントアクセシビリティガイドライン）**
-   [ガイドライン 2.2 - 順次ナビゲーション](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [ガイドライン 2.3 - 直接ナビゲーションおよびアクティベーション](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [ガイドライン 2.4 - テキスト検索](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [ガイドライン 2.5 - 構造的ナビゲーション](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [ガイドライン 2.7 - グラフィカルコントロール](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG（オーサリングツールアクセシビリティガイドライン）**
-   [原則 A.1: オーサリングツールのユーザーインターフェースは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.2.2: (オーサリングツールのユーザーインターフェース用) 編集ビューの提示をプログラムで決定できるようにする](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [ガイドライン A.3.4: (オーサリングツールのユーザーインターフェース用) コンテンツ構造を介してのナビゲーションと編集を強化する](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [ガイドライン A.3.5: (オーサリングツールのユーザーインターフェース用) コンテンツのテキスト検索を提供する](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [パート B. アクセシブルなコンテンツの製作をサポート](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### ナビゲーションに関連するストーリー
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex、繰り返しストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Ilya、盲目のシニアスタッフ](/people-use-web/user-stories/archived/#accountant)
-   [Preety、注意欠陥・多動性障害およびディスレクシアを持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Luis、ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)
-   [カシーム、聴覚および視覚に障害のあるティーンエイジャー](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### キーボード以外のさまざまな入力モダリティを使うユーザー

タッチ操作、音声認識（音声入力）、ジェスチャーなど、キーボードを超えた入力方式は、多くの人にとってコンテンツの使用を容易にします。しかし、すべての人がこれらの入力方式を同じ程度に使用できるわけではありません。これらの入力方式の利点を最大化するためには、特定の設計上の考慮が必要です。これには以下が含まれます：

- 器用さや細かな動きを必要とするジェスチャーには、高い器用さを必要としない代替手段があります
- コンポーネントは、例えば元に戻す機能を提供することによって、誤操作を避けるように設計されています
- ユーザーに提示されるラベルは、音声による操作をサポートするために、コード内の対応するオブジェクト名と一致します
- 動作によってアクティブ化される機能は、ユーザーインターフェースコンポーネントを通じてもアクティブ化できます
- ボタン、リンク、およびその他のアクティブなコンポーネントは、タッチによるアクティブ化を容易にするために十分に大きいです

この要件を満たすことで、様々な能力を持つ多くの人々が、様々なデバイスを使用してコンテンツをより簡単に使用できるようになります。これには、携帯電話、タブレットコンピュータ、チケット販売機などのセルフサービス端末で使用されるコンテンツが含まれます。

{% include excol.html type="start" id="" %}

#### 入力方式に関連するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG（ウェブコンテンツアクセシビリティガイドライン）**
-   [ガイドライン 2.5 - 入力方式](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

#### 入力方式に関連するストーリー
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex、繰り返しストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Luis、ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## 情報とユーザーインターフェイスの理解可能性

### テキストは読みやすく、理解しやすい

コンテンツ制作者は、テキストコンテンツができるだけ広い聴衆に読みやすく理解しやすいことを確認する必要があります。これには、テキスト読み上げソフトウェアによって読み上げられた場合も含まれます。そのようなコンテンツには以下が含まれます：

- ウェブページの主言語（アラビア語、オランダ語、韓国語など）の特定
- ウェブページのテキストパッセージ、フレーズ、またはその他の部分の言語の特定
- 通常使用されない単語、フレーズ、イディオム、略語の定義の提供
- 可能な限り最も明瞭で簡潔な言語の使用、または簡略化されたバージョンの提供

この要件を満たすことで、支援技術を含むソフトウェアがテキストコンテンツを正しく処理するのに役立ちます。例えば、この要件はソフトウェアがコンテンツを読み上げたり、ページの要約を生成したり、専門用語などの珍しい単語の定義を提供したりするのに役立ちます。また、より複雑な文章、フレーズ、語彙を理解するのが困難な人々、特にさまざまなタイプの認知障害を持つ人々にとっても役立ちます。

{% include excol.html type="start" %}

#### 読みやすさに関連するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG（ウェブコンテンツアクセシビリティガイドライン）**
-   [ガイドライン 3.1 - 読みやすい](https://www.w3.org/WAI/WCAG22/quickref/#readable)

**ATAG（オーサリングツールアクセシビリティガイドライン）**
-   [原則 A.1: オーサリングツールのユーザーインターフェースは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.4.2: (オーサリングツールのユーザーインターフェース用) ユーザーインターフェースを文書化する、すべてのアクセシビリティ機能を含む](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [パート B. アクセシブルなコンテンツの製作をサポート](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 読みやすさに関連するストーリー
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine、聴覚障害のあるオンライン学生](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya、盲目のシニアスタッフ](/people-use-web/user-stories/archived/#accountant)
-   [Preety、注意欠陥・多動性障害およびディスレクシアを持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Luis、ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

### コンテンツは予測可能な方法で表示され、操作される

多くの人々は予測可能なユーザーインターフェースに依存しており、一貫性のない外観や振る舞いによって混乱したり気が散ったりします。コンテンツをより予測可能にする例には以下のようなものがあります：

- 複数のページに繰り返されるナビゲーションメカニズムは、毎回同じ場所に表示されます
- ウェブページ上で繰り返されるユーザーインターフェースコンポーネントは、毎回同じラベルを持っています
- ウェブページ上の重要な変更は、ユーザーの同意なしには発生しません

この要件を満たすことで、人々はウェブサイト上で提供される機能とナビゲーションメカニズムを迅速に学習し、特定のニーズと好みに応じて操作できるようになります。たとえば、一部の人々は、キーボードナビゲーションを向上させるために、頻繁に使用する機能にパーソナライズされたショートカットキーを割り当てます。他の人々は、特定のページに到達するためのステップや、ウェブサイト上でのプロセスを完了するためのステップを記憶します。どちらも予測可能で一貫した機能に依存しています。

{% include excol.html type="start" %}

#### 予測可能性に関連するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG（ウェブコンテンツアクセシビリティガイドライン）**
-   [ガイドライン 3.2 - 予測可能](https://www.w3.org/WAI/WCAG22/quickref/#predictable)

**UAAG（ユーザーエージェントアクセシビリティガイドライン）**
-   [ガイドライン 3.3 - 予測可能](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG（オーサリングツールアクセシビリティガイドライン）**
-   [原則 A.1: オーサリングツールのユーザーインターフェースは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.2.2: (オーサリングツールのユーザーインターフェース用) 編集ビューの提示をプログラムで決定できるようにする](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [ガイドライン A.4.2: (オーサリングツールのユーザーインターフェース用) ユーザーインターフェースを文書化する、すべてのアクセシビリティ機能を含む](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [パート B. アクセシブルなコンテンツの製作をサポート](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 予測可能性に関連するストーリー
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex、、繰り返しストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Ilya、盲目のシニアスタッフ](/people-use-web/user-stories/archived/#accountant)
-   [Preety、注意欠陥・多動性障害およびディスレクシアを持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Luis、ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)
-   [カシーム、聴覚および視覚障害のあるティーンエイジャー](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### ミスの回避と修正に貢献するユーザー

フォームやその他のインタラクションは多くの人にとって混乱するか使いにくい場合があり、その結果、間違いを犯す可能性が高くなることがあります。ユーザーが間違いを避けて修正するのを助ける例には以下のようなものがあります：

- 説明的な指示、エラーメッセージ、および修正のための提案
- より複雑な機能やインタラクションに対する文脈に応じたヘルプ
- 必要に応じて、提出内容を確認、修正、または取り消す機会

この要件を満たすことで、コンテンツを見たり聞いたりしない人々、暗黙の関係、順序、その他の手がかりを認識できない人々を助けることができます。また、機能を理解できない人、方向感覚が失われたり混乱したりする人、忘れたり、フォームやインタラクションを使用して何らかの理由で間違いを犯す人も支援されます。

{% include excol.html type="start" %}

#### 入力支援に関連するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG（ウェブコンテンツアクセシビリティガイドライン）**
-   [ガイドライン 3.3 - 入力支援](https://www.w3.org/WAI/WCAG22/quickref/#input-assistance)

**UAAG（ユーザーエージェントアクセシビリティガイドライン）**
-   [ガイドライン 3.1 - 間違い](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG（オーサリングツールアクセシビリティガイドライン）**
-   [原則 A.1: オーサリングツールのユーザーインターフェースは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [ガイドライン A.2.2: (オーサリングツールのユーザーインターフェース用) 編集ビューの表示をプログラムで決定できるようにする](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [ガイドライン A.4.1: (オーサリングツールのユーザーインターフェース用) 著者が間違いを避けて修正できるように支援する](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [パート B. アクセシブルなコンテンツの製作をサポート](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 入力支援に関連するストーリー
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee、色覚異常のあるオンラインショッパー](/people-use-web/user-stories/archived/#shopper)
-   [Alex、繰り返しストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Preety、注意欠陥・多動性障害およびディスレクシアを持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun、低視力、手の震え、および軽度の短期記憶障害を持つ退職者](/people-use-web/user-stories/archived/#retiree)
-   [Luis、ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## 頑丈なコンテンツと信頼性の高い解釈

### コンテンツは現在および将来のユーザーツールと互換性がある

頑丈なコンテンツは、さまざまなブラウザ、支援技術、およびその他のユーザーエージェントと互換性があります。これを達成する方法の例には以下が含まれます：

- マークアップが信頼できる形で解釈されることを確実にする（例えば、それが有効であることを確認することによって）
- 非標準ユーザーインターフェースコンポーネントに名前、役割、および値を提供する

この要件を満たすことで、現在および将来のユーザーエージェント、特に支援技術との互換性を最大限に高めるのに役立ちます。特に、支援技術がコンテンツを信頼性を持って処理し、異なる方法で提示または操作できるようになります。これには、非標準の（スクリプト化された）ボタン、入力フィールド、その他のコントロールが含まれます。

{% include excol.html type="start" %}

#### 互換性に関連するアクセシビリティ要件（技術仕様へのリンク）
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG（ウェブコンテンツアクセシビリティガイドライン）**
-   [ガイドライン 4.1 - 互換性](https://www.w3.org/WAI/WCAG22/quickref/#compatible)

**UAAG（ユーザーエージェントアクセシビリティガイドライン）**
-   [ガイドライン 2.6 - 設定の保存](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [ガイドライン 4.1 - 支援技術](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [ガイドライン 5.1 - 仕様に従う](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG（オーサリングツールアクセシビリティガイドライン）**
-   [原則 A.1: オーサリングツールのユーザーインターフェースは適用可能なアクセシビリティガイドラインに従う](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [パート B. アクセシブルなコンテンツの製作をサポート](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 互換性に関連するストーリー
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee、色覚異常のあるオンラインショッパー](/people-use-web/user-stories/archived/#shopper)
-   [Alex、繰り返しストレス障害を持つ記者](/people-use-web/user-stories/archived/#reporter)
-   [Ilya、盲目のシニアスタッフ](/people-use-web/user-stories/archived/#accountant)
-   [Preety、注意欠陥・多動性障害およびディスレクシアを持つ中学生](/people-use-web/user-stories/archived/#classroomstudent)
-   [Luis、ダウン症のスーパーマーケットアシスタント](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem、聴覚および視覚障害のあるティーンエイジャー](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

{% include excol.html type="all" %}

