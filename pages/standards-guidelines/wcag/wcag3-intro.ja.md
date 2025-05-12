---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "WCAG 3 イントロダクション"
nav_title: "WCAG 3 Draft"
lang: ja  # Change "en" to the translated-language shortcode
last_updated: 2024-12-12 # Keep the date of the English version

translation:
  last_updated: 2024-12-19 # Keep the date of the English version

translators:
- name: "Makoto Ueki"

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/wcag3-intro/ja  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/wcag3-intro/    # Do not change this

description: W3Cアクセシビリティ・ガイドライン（WCAG）3.0 のワーキングドラフトを紹介する。WCAGのドキュメントは、ウェブを障害がある人にとってよりアクセシブルにする方法を説明している。
image: /content-images/wcag/wcag3_social.png
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>編集者:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. 協力者: Rachael Bradley Montgomery, Jeanne Spellman, Kevin White.</p>
  <p>アクセシビリティガイドライン ワーキンググループ (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>)、Silverタスクフォース及びSilverコミュニティグループの協力を得て作成されました。</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="サマリー" class="full" %}
{:/}

W3Cアクセシビリティ・ガイドライン (WCAG) 3の多くの部分は、現在、試作段階にあり、今後大幅に変更される予定です。2024年12月12日に、更新した [WCAG 3 ワーキングドラフト](https://www.w3.org/TR/wcag-3.0/) を公開しました。

WCAG 3は、WCAG 2と同様の基本的な要件及び特有の要件を持つことになるでしょう。また、WCAG 3は、異なる構造、異なる適合性モデル及びより幅広い適用範囲になる予定です。

このページを、WCAG 3に関する公式情報の出発点として、現在および将来にわたって共有していただきたいと考えています。 ショートリンク： w3.org/WAI/wcag3

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="このページのコンテンツ" class="simple" %}
{:/}

{::options toc_levels="2,3" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## イントロダクション
{:.no_toc}

W3Cアクセシビリティ・ガイドライン（WCAG）3は、現在、未完成のドラフト（草案）の段階にある。WCAG 3は数年以内にW3Cの標準となる予定です。現行の標準であるウェブコンテンツ・アクセシビリティ・ガイドライン（WCAG 2）については、[WCAG 2 概要](/standards-guidelines/wcag/)を参照してください。

WCAG 3の文書は、ウェブを障害がある人にとってよりアクセシブルにする方法を説明するものになるでしょう。WCAG 3は、ウェブコンテンツ、アプリ、ツール、出版、そしてウェブ上に登場してくる新しい技術を適用範囲とします。 

WCAG 3のドラフト作成が進展に合わせて、このページを定期的に更新していく予定です。

## ステータス： 作成中のドラフト

2024年12月、更新されたドラフトを公開しました：

* [WCAG 3 の要件](https://www.w3.org/TR/wcag-3.0-requirements/) は、WCAG 3を策定する方向性を定めて、完成したと判断する際に役立つ主要な原則と要件を説明しています。
* **[WCAG 3 の解説（<span lang="en">Explainer</span>）](https://www.w3.org/TR/wcag-3.0-explainer/)** では、背景情報を提供し、2024年12月のWCAG 3ドラフトの構造を説明しています。**WCAG 3を読む前に、この解説を読むことを推奨します。**
* **[WCAG 3 ワーキングドラフト](https://www.w3.org/TR/wcag-3.0/)** には、現在検討中のガイドラインや要件が含まれています。WCAG 3の最終要件は、このドラフトとは異なるものになるでしょう。ガイドラインや要件は、今後も編集、追加、統合、及び削除されていく予定です。

### 変更点の概要 
* 説明を目的としたコンテンツを [解説（<span lang="en">Explainer</span>）](https://www.w3.org/TR/wcag-3.0-explainer/)に移動しました。
* 「成果（<span lang="en">Outcome</span>）」という用語を変更しました。現在のドラフトには、ユーザー視点での成果として記述された「ガイドライン」と、そのガイドラインをサポートする「要件」があります。
* 要件は、[解説（<span lang="en">Explainer</span>）](https://www.w3.org/TR/wcag-3.0-explainer/)ページで説明されているように、「<span lang="en">foundational</span>（基礎）」又は「<span lang="en">supplemental</span>（補足）」として明示されています。
* アクセシビリティサポートは [3.1.1 <span lang="en">Only accessibility-supported ways of using technologies</span>（アクセシビリティがサポートされている、技術の使用方法のみ）](https://www.w3.org/TR/2024/WD-wcag-3.0-20241212/#accessibility-supported)で変更しました。

### セクションごとのステータス
それぞれの要件（<span lang="en">normative</span>)セクションには、そのセクションの開発プロセスにおける進捗状況、実験的な採用に向けた準備状況、およびどのようなフィードバックを求めているかを示すステータスがあります。
* <span lang="en">Placeholder</span>（プレースホルダー）
* <span lang="en">Exploratory</span>（試験的）
* <span lang="en">Developing</span>（開発中）
* <span lang="en">Refining</span>（改良中）
* <span lang="en">Mature</span>（成熟）

これらのステータス指標の詳細については、解説セクション「[<span lang="en">Current Process for Creating WCAG 3.0</span>（現在の WCAG 3.0 作成プロセス）](https://www.w3.org/TR/2024/DNOTE-wcag-3.0-explainer-20241212/#current-process)を参照してください。

### ご意見募集

このWCAG 3ワーキングドラフトでは、特にフィードバックをいただきたい4つのセクションを更新しました。最初の3つのセクションは、ガイドラインです：

1. [<span lang="en">Image alternatives guideline</span>（画像に対する代替に関するガイドライン）](https://w3.org/TR/wcag-3.0/#image-alternatives)
2. [<span lang="en">Keyboard focus appearance guideline</span>（キーボードフォーカスの外観に関するガイドライン](https://w3.org/TR/wcag-3.0/#keyboard-focus-appearance)
3. [<span lang="en">Clear meaning guideline</span>（明確な意味に関するガイドライン）](https://w3.org/TR/wcag-3.0/#clear-meaning)

これらのセクションについて、「<span lang="en">Which foundational requirements apply?</span>（どの基礎要件が適用されるか？）」の項目に記載されている情報は、ガイドラインをより理解しやすく、使いやすくするものになっていますか？

また、フィードバックをいただきたいもう一つのセクションはこちらです：

* [<span lang="en">Conformance</span>（適合）](https://w3.org/TR/wcag-3.0/#conformance)

このセクションでは、WCAG 3 で検討している適合アプローチについて説明しています。まだ多くの詳細を詰める必要があります。WCAG 3 の適合アプローチ案について、建設的な意見はありますか？

### 必要なリサーチ

一部のガイドラインおよび要件には、「<span lang="en">Needs additional research</span>（さらなるリサーチが必要）」と記されています。 それらを裏付ける、または反証するためのリサーチを確認したり、リサーチの実施を支援したりすることに特に関心があります。。

<img src="{{ "/content-images/wcag/dialogs2.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### コメント

ご意見をいただくには、[WCAG 3 GitHub リポジトリでissueを作成](https://github.com/w3c/wcag3/issues/new)してください。あるいは、GitHub をご利用いただけない場合は、[public-agwg-comments@w3.org](mailto:public-agwg-comments@w3.org)までメールでお問い合わせください。

複数のトピックを1つのissueまたはメールにまとめるのではなく、**トピックごとにGitHub issueを作成するか、メールメッセージを作成してください。**

## WCAG 3 ドラフトのアプローチ

<img src="{{ "/content-images/wcag/brain-icon.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### 類似点もあれば相違点もある {#compare}

WCAG 3の**ゴール** には以下のような事項があります：
* より理解しやすくする
* 認知障害がある人々のより多くのニーズを含めて、より多くのユーザーニーズをカバーする
* さまざまなタイプのウェブコンテンツ、アプリ、ツール及び組織に対応できるよう柔軟性を持たせる

WCAG 3 は、以前のバージョンと**似ている**点がいくつかあります。類似している点として、以下が挙げられます：
* 障害者がウェブコンテンツやアプリを利用しやすくするための指針を提供するというゴール
* 基本的なアクセシビリティ要件と特有のアクセシビリティ要件

WCAG 3は、以前のバージョンと大きく**異なっている**点がいくつかあります：
* 異なる構造
* 異なる適合モデル
* ウェブコンテンツだけでなく、より広い適用範囲

### WCAG 3 の名称

WCAG 3の名称は、WCAG 2とは異なります：
* WCAG **3** は、W3Cアクセシビリティ・ガイドライン
* WCAG **2** は、ウェブコンテンツ・アクセシビリティ・ガイドライン

「W3Cアクセシビリティ・ガイドライン（WCAG）3.0」が選ばれたのは：
*「WCAG」という略語が広く知られていて浸透しているため
* 「コンテンツ」を超えるより幅広い範囲を網羅しているため

### 構造

2024年12月版 WCAG 3ワーキングドラフトの構造については、<span lang="en">Explainer</span>(解説）のセクション「[<span lang="en">WCAG 3.0 Structure</span>（WCAG 3.0の構造）](https://www.w3.org/TR/2024/DNOTE-wcag-3.0-explainer-20241212/#structure)」を参照してください。

### 適合アプローチ {#model}

「適合モデル」というのは、コンテンツ、ウェブサイト、アプリケーションなどがWCAGにどの程度適合しているかを判断し、伝えるための方法です。

WCAG 3の適合モデルは、WCAG 2とは大きく異なるものとなるでしょう。その目的は：
* 組織（すなわち、ウェブサイト、アプリケーション、ツールなどの所有者及び開発者）にとって、より柔軟なものとすること
* アクセシブルな利用者体験をより促進すること

適合性モデルの開発と検証は、AGが今後数年間で完了させる必要がある作業の大部分を占めています。

2024年12月版では、以下の情報を更新しています：
* <span lang="en">Explainer</span>解説）のセクション「[<span lang="en">Conformance approach</span>（適合アプローチ）](https://www.w3.org/TR/2024/DNOTE-wcag-3.0-explainer-20241212/#conformance-models)」
* WCAG 3 ワーキングドラフトのセクション「[適合](https://www.w3.org/TR/2024/WD-wcag-3.0-20241212/#conformance)」

## 開発

### タイムライン

<img src="{{ "/content-images/wcag/calandara.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 20%; max-width: 111px">

**WCAG 3は、W3Cの標準として完成するまで、まだ数年を要する見込みです。**

WCAG 3は、WCAG 2を無効にするものではありません。また、WCAG 3が完成した後も、少なくとも数年間はWCAG 2が廃止されることはないでしょう。

アクセシビリティ・ガイドライン・ワーキンググループ（AG WG）は、ガイドラインの初期セットを作成しました。2025年の前半には、AG WGは2つ又は3つのガイドラインを「改良中」あるいは「成熟」ステータスに発展させることに集中します。この経験をもとに、WCAG 3のその後のタイムラインを策定していきます。このタイムラインは、2025年9月までには出来上がる予定です。

現在のスケジュールと活動に関する情報は、[<span lang="en">WCAG 3 Publication Plan</span>（WCAG 3 策定プラン）](https://www.w3.org/WAI/GL/wiki/WCAG_3_Timeline#Publication_Plan)を参照してください。

より具体的なタイムラインに関する情報が入手でき次第、このセクションを更新する予定にしています。

### WCAG 3の開発者

WCAGの技術文書は、アクセシビリティ・ガイドライン・ワーキンググループ([AG WG](https://www.w3.org/WAI/about/groups/agwg/))とシルバー・コミュニティ・グループによって開発されています（以前はSilverタスクフォースの下でした）。 これらのグループは、<span lang="en">World Wide Web Consortium</span>([W3C](https://www.w3.org))のウェブ・アクセシビリティ・イニシアティブ([WAI](https://www.w3.org/WAI/))に属しています。開発プロセスについては、[[WAIがW3Cプロセスを通じてアクセシビリティ標準を開発する方法：マイルストーンと貢献の機会]](/standards-guidelines/w3c-process/)を参照してください。

WCAG 3ワーキングドラフトに対するご意見をお待ちしております。フィードバックをいただくには、新しい[GitHub issues](https://github.com/w3c/wcag3/issues)を作成していただくのが最も良い方法です。または、public-agwg-comments@w3.org 宛てに電子メールをお送りください。

WCAGやその他のWAIの作業に直接貢献する機会については、[[WAIへの参加]](/about/participating/)でご紹介しています。
