---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "WCAG 2 概要"
nav_title: "ウェブコンテンツ – WCAG 2"
lang: ja  # Change "en" to the translated-language shortcode
last_updated: 2024-04-05  # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: WCAG2.0、WCAG2.1、WCAG2.2を含む、国際標準のウェブコンテンツアクセシビリティガイドライン（WCAG）を紹介。WCAG文書は、ウェブコンテンツを障害がある人にとってよりアクセシブルにする方法を説明しています。

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Makoto Ueki" # Add one -name: line for every translator

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/ja  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/  # Do not change this

image: /content-images/wcag/wcag-intro-social.jpg
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>最終更新日：</strong> 2024年3月7日、初版公開 2005年7月</p>
  <p><strong>編集者：</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a></p>
  <p>教育・啓発ワーキンググループ (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>)及びアクセシビリティガイドライン ワーキンググループ (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>)の協力を得て作成されました。</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="サマリー" class="full" %}
{:/}

このページでは、WCAG 2.0、WCAG 2.1、およびWCAG 2.2を含む、国際標準であるWebコンテンツ・アクセシビリティ・ガイドライン（WCAG）について紹介します。WCAG文書は、Webコンテンツを障害がある人にとってよりアクセシブルにする方法を説明しています。

関連ページ [WCAG 3の紹介](/standards-guidelines/wcag/wcag3-intro/).

WCAGはアクセシビリティの入門書ではありません。入門書のようなドキュメントとしては、[アクセシビリティの基本概論](/fundamentals/) を参照してください。

リソースへのクイックリンク：
* [WCAG 2を満たす方法 (クイックリファレンス)](https://www.w3.org/WAI/WCAG22/quickref/)
* [WCAG 2.2](https://www.w3.org/TR/WCAG22/), [WCAG 2.2での変更点](/standards-guidelines/wcag/new-in-22/)
* [WCAG 2.1](https://www.w3.org/TR/WCAG21/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="このページのコンテンツ" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## イントロダクション {#intro}

ウェブコンテンツ・アクセシビリティ・ガイドライン（WCAG）2は、個人、組織、政府のニーズを国際的に満たすウェブコンテンツのアクセシビリティに関する標準を単一で共有可能なものとして提供することを目的とし、[W3Cプロセス](/standards-guidelines/w3c-process/)を通じて、世界中の個人および組織と協力して作成されています。

WCAG文書は、ウェブコンテンツを障害がある人にとってよりアクセシブルにする方法を説明しています。ウェブの「コンテンツ」とは、一般的にウェブページやウェブアプリケーションに含まれる情報を指しており、次に挙げるものを含みます：

- テキスト、画像、音声などの情報
- 構造や提示などを定義するコードやマークアップ

## WCAGは誰のためのものか {#for}

WCAGは技術的な標準を求める人のためのものです。**アクセシビリティの入門書ではありません。入門書のような資料へのリンクは、[FAQの “どこから始めるべき?”](/standards-guidelines/wcag/faq/#start)にあります。**

WCAGの主な対象者：

-   ウェブコンテンツ開発者（ページの制作者、サイトのデザイナーなど）
-   ウェブオーサリングツール開発者
-   ウェブアクセシビリティ評価ツールの開発者
-   モバイル・アクセシビリティを含め、ウェブ・アクセシビリティの標準を望む、または必要とするその他の人々

ポリシー立案者、管理職、研究者など、その他の人たちのニーズに応えるため、さまざまな[WAI リソース](/resources/)があります。

## WCAG 2の内容 {#whatis2}

WCAG 2.2には13のガイドラインがあり、ガイドラインは、[知覚可能、操作可能、理解可能、堅牢という4つの原則](https://www.w3.org/WAI/WCAG22/Understanding/intro#understanding-the-four-principles-of-accessibility)のもとに構成されています。

各ガイドラインにはテスト可能な達成基準があり、達成基準は[A、AA、AAA という3つのレベル](https://www.w3.org/WAI/WCAG22/Understanding/conformance#levels)に分かれています。

達成基準は、WCAGへの「適合性」を決定するものです。つまり、WCAGに適合するためには、コンテンツが達成基準を満たしている必要があります。詳細は、[WCAGの「適合」のセクション](https://www.w3.org/TR/WCAG22/#conformance)に記載されています。

WCAG 2ガイドラインの簡潔なサマリーは、**[一目でわかるWCAG 2 ](/standards-guidelines/wcag/glance/)**を参照してください。

### サポート資料および補足ガイダンス {#supplement}

以下のリソースは、WCAGを理解して実装し、WCAGを超えてアクセシビリティを高めるのに役立ちます：
* クイックリファレンス / WCAG 2を満たす方法 / チェックリスト
* WCAG 2 解説書
* WCAG 2 達成方法集
* WCAG 2 テストルール
* 補足ガイダンス

**これらのWCAG 2に関するリソースについては、[WCAG 2 ドキュメント](/standards-guidelines/wcag/docs/)をお読みください。**

## WCAG 2.0、2.1、2.2 {#versions}

ウェブコンテンツ アクセシビリティガイドライン（WCAG）は、「W3C勧告」のウェブ標準として公開された時点で、安定性があり参照可能な標準となります。

* [WCAG 2.0](https://www.w3.org/TR/WCAG20/) は2008年12月11日に公開されました。
* [WCAG 2.1](https://www.w3.org/TR/WCAG21/) は2018年6月5日に公開され、更新版は2023年9月21日に公開されました。[WCAG 2 FAQ](/standards-guidelines/wcag/faq/)にアップデートに関する情報が掲載されています。
* [WCAG 2.2](https://www.w3.org/TR/WCAG22/) は2023年10月5日に公開されました。

WCAG 2.0、2.1、2.2は「後方互換性」があるように設計されており、WCAG 2.2に適合するコンテンツはWCAG 2.1やWCAG 2.0にも適合します。すべてのバージョンを満たしたい場合は、WCAG 2.2のリソースを使用することができ、わざわざ以前のバージョンを探す必要はありません。

2.0の達成基準はすべて2.1に含まれ、2.1の達成基準はすべて2.2に含まれています（ただし、次の段落で説明する達成基準 4.1.1を除く）。
* WCAG 2.0 には12のガイドラインがあります。
* WCAG 2.1 は1つのガイドラインと17の達成基準を追加しており、[WCAG 2.1での変更点](/standards-guidelines/wcag/new-in-21/)で紹介されています。
* WCAG 2.2 はさらに9つの達成基準を追加しており、[WCAG 2.2での変更点](/standards-guidelines/wcag/new-in-22/)で紹介されています。

いくつかの変更点があり、実際に後方互換性をサポートするために関連文書を更新しています。主な変更点は、WCAG 2.2において、1つの達成基準（4.1.1 構文解析）が廃止されたことです。WCAG 2.1とWCAG 2.0の正誤表に追加された注記は、[WCAG 2 FAQ, 4.1.1 構文解析](/standards-guidelines/wcag/faq/#parsing411)で説明されているように、これに対処しています。WCAG 2.2には、異なる言語に関する注記も含まれています。詳細は、[WCAG 2 FAQ, 国際化](/standards-guidelines/wcag/faq/#i18n22)にあります。

WCAG 2.0、WCAG 2.1、WCAG 2.2はすべて存在している標準です。WCAG 2.2は、WCAG 2.1を非推奨にしたり、WCAG 2.1にとって代わったりするものではありません。そして、WCAG 2.1はWCAG 2.0を非推奨にするものでもなければ、WCAG 2.0にとって代わるものでもありません。ただ、W3CはWCAGの最新版を使用することを推奨しています。

## 翻訳

WCAG 2の公認翻訳と非公式翻訳の一覧が、[WCAG 2 翻訳](/standards-guidelines/wcag/translations/)にあります。

## WCAG 2.0 は ISO/IEC 40500である {#iso}

WCAG2.0は、ISO規格：ISO/IEC 40500:2012として承認されています。ISO/IEC 40500は、上記で関連リソースとともに紹介したオリジナルのWCAG 2.0と全く同じものです。

ISO/IEC 40500の内容は、[www.w3.org/TR/WCAG20](https://www.w3.org/TR/WCAG20/) から自由に入手できます。また、[ISOのサイト {% include_cached external.html %}](https://www.iso.org/standard/58625.html)から購入することもできます。

ISO規格としてのWCAG 2.0の利点は、[FAQのISO](/standards-guidelines/wcag/faq/#iso)にまとめられています。W3CとISOプロセスに関する詳細は、[W3C PAS FAQ](https://www.w3.org/2010/04/pasfaq)にあります。

**W3Cは、ISOプロセスを通じてWCAG 2.2を提出する予定です。**

## 誰がWCAGを作成しているのか {#wg}

WCAGの技術文書は、ワールド・ワイド・ウェブ・コンソーシアム([W3C](https://www.w3.org))のウェブ・アクセシビリティ・イニシアティブ([WAI](https://www.w3.org/WAI/))に属するアクセシビリティガイドライン ワーキンググループ([AG WG](/GL/))（旧ウェブコンテンツ アクセシビリティガイドライン ワーキンググループ）によって開発されています。

WAIは、「WCAG 2 達成方法集」と「WCAG 2 解説書」を定期的に更新しています。私たちは[コメント](/standards-guidelines/wcag/commenting/)や[新しい達成方法の提案](https://www.w3.org/WAI/GL/WCAG20/TECHS-SUBMIT/)を歓迎しています。

WCAGやその他のWAIにおける作業への参加のしかたは、[WAIへの参加](/about/participating/)でご紹介しています。

## WCAG 3とその他の情報 {#more}

WCAGは、オーサリングツール アクセシビリティガイドライン（ATAG）やユーザーエージェント アクセシビリティガイドライン（UAAG）を含む一連のアクセシビリティガイドラインの1つです。[ウェブアクセシビリティの必須構成要素](/fundamentals/components/)では、さまざまなガイドライン間の関係性について説明しています。

以下に関する詳細については、[WCAG 2 FAQ](/standards-guidelines/wcag/faq/)を参照してください：

-   **[モバイルアクセシビリティ](/standards-guidelines/wcag/faq/#mobile)** においてWCAG 2がカバーする範囲
-   ** [ドキュメントとソフトウェア](/standards-guidelines/wcag/faq/#wcag2ict)** へのWCAG 2の適用
-   その他

W3C アクセシビリティガイドライン3.0（旧称「Silver」）の初期ドラフトに関する情報は、**[WCAG 3 イントロダクション](/standards-guidelines/wcag/wcag3-intro/)**をご覧ください。
