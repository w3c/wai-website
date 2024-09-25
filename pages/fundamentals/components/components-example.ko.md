---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: 웹 접근성 삽화의 핵심 구성 요소 설명
nav_title: Illustration Descriptions
lang: ko
last_updated: 2024-03-14  # Keep the date of the English version
parent: /fundamentals/components/ # Do not change this

translation:
  last_updated: 2024-05-16  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "hwahyeon"

github:
  label: wai-components

permalink: /fundamentals/components/examples/ko # Add the language shortcode to the end; for example /path/to/file/fr
ref: /fundamentals/components/examples/ # Do not change this
---

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

이 페이지는 "[[웹 접근성의 필수 구성 요소]](/fundamentals/components/)" 문서와 [웹 접근성 슬라이드의 필수 구성 요소](https://www.w3.org/WAI/intro/components-slides)의 삽화를 설명합니다.

## 구성 요소 간 관계의 삽화 설명 {#relate}

{% include image.html src="components/relate.ko.png" alt="구성 요소 간의 관계를 보여주는 일러스트레이션" %}

상자, 콘텐츠, 사람들이 레이블링된 그래픽이 포함된 삽화입니다. 상단 중앙에는 "콘텐츠"라고 레이블링된 원형 차트, 이미지, 양식, 텍스트가 있습니다. 왼쪽 아래에서부터 올라오는 선이 "개발자"에서 "저작 도구"와 "평가 도구"를 거쳐 상단의 "콘텐츠"로 연결됩니다. 그림 오른쪽 아래에서부터 올라오는 선은 "사용자"를 "브라우저, 미디어 플레이어"와 "보조 기술"을 거쳐 상단의 "콘텐츠"로 연결됩니다.

## 한 구성 요소가 약할 때의 삽화 설명 {#weak}

{% include image.html src="components/bridge.ko.png" alt="한 구성 요소가 약할 때 일어나는 일의 삽화" %}

상자, 콘텐츠, 사람들이 레이블링된 그래픽이 포함된 삽화입니다. 상단 중앙에는 "콘텐츠"라고 레이블링된 원형 차트, 이미지, 양식, 텍스트가 있습니다. 왼쪽 아래에서부터 시작하는 선은 "개발자"에서 "저작 도구"를 우회하여 상단의 "콘텐츠"로 연결됩니다. 오른쪽 아래에서부터 시작하는 선은 "사용자"에서 다수의 "브라우저, 미디어 플레이어"와 "보조 기술"을 통과하여 상단의 "콘텐츠"로 연결됩니다.

## 다양한 구성 요소에 대한 지침의 삽화 설명 {#guide}

{% include image.html src="components/specs.ko.png" alt="다양한 구성 요소에 대한 지침을 보여주는 삽화" %}

상자, 콘텐츠, 사람들이 레이블링된 그래픽이 포함된 삽화입니다. 상단 중앙에는 "콘텐츠"라고 레이블링된 원형 차트, 이미지, 양식, 텍스트가 있습니다. 왼쪽 아래에서부터 시작하는 선은 "개발자"에서 "저작 도구"와 "평가 도구"를 통해 상단의 "콘텐츠"로 연결됩니다. 오른쪽 아래에서부터 시작하는 화살표는 "사용자"에서 "브라우저, 미디어 플레이어"와 "보조 기술"을 통과하여 상단의 "콘텐츠"로 연결됩니다. 이들 아래에는, "저작 도구"와 "평가 도구"를 화살표로 가리키는 "ATAG", "콘텐츠"를 가리키는 "WCAG", 그리고 "브라우저, 미디어 플레이어"와 "보조 기술"을 가리키는 "UAAG"가 포함된 "접근성 지침"이 있습니다. 맨 아래에는 "기술 사양 (HTML, ARIA, CSS, SVG, SMIL 등)"이 기반을 형성하며 접근성 지침 쪽으로 상향하는 화살표가 있습니다.

{% comment %}

@@ commenting out - image was used in presentation that is not on new site - leaving here in case we want to resurrect it in the future. @@

## 구성 요소들 간의 상호 의존성에 대한 예시 삽화 설명 {#example-alt}

{% include image.html src="relate-example.jpg" alt="구성 요소들 간의 상호 관계를 보여주는 예시 삽화" %}

상자, 콘텐츠, 사람들이 레이블링된 그래픽이 포함된 삽화입니다. 상단 중앙에는 "콘텐츠"가 있고, 그 아래에 로고와 `<img src="WAI-logo.png" alt="Web Accessibility Initiative logo">`라는 내용의 상자가 있습니다. 왼쪽 아래에서부터 시작하는 선은 "개발자"에서 "저작 도구"와 "평가 도구"를 통해 상단의 "콘텐츠"로 연결됩니다. "개발자"와 "저작 도구" 사이에는 이미지 태그 접근성 속성이라는 제목의 대화 상자가 있고, 대체 텍스트라는 제목의 필드에는 "웹 접근성 이니셔티브 로고"라고 채워져 있습니다. 오른쪽 아래에서부터 시작하여, "사용자"에서 "브라우저, 미디어 플레이어" 그리고 "보조 기술"에서 상단의 "콘텐츠"로 연결되는 선이 있습니다. "사용자" 바로 위에는 "웹 접근성 이니셔티브 로고"라는 문구의 말풍선과 "웹 접근성 이니셔티브 로고"라는 문구의 노란 상자가 있습니다. 하단에는 `1.1 모든 비텍스트 요소에 대해 텍스트 등가물을 제공하시오`라는 문구가 있습니다. 

{% endcomment %}
