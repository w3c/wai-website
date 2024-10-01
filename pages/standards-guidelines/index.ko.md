---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.

title: W3C 접근성 기준 개요  # Do not translate "title:". Do translate the text after "title:".
nav_title: "표준/지침" # A short title that is used in the navigation
lang: ko
last_updated: 2021-04-31  # Keep the date of the English version

translation:
  status: outdated
  last_updated: 2021-05-14  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Yong Ui Lee"   # Replace @@ with translator name
  link: "https://twitter.com/yongui9"
contributors:
- name: "Jun Ho Lee"

ref: /standards-guidelines/   # Do not change this
github:
  label: wai-standards-guidelines
permalink: /standards-guidelines/ko   # Add the language shortcode to the end; for example /standards-guidelines/fr
feedbackmail: wai@w3.org

footer: >   # Translate all the words below, including "Date:" and "Editor:". Do not change these dates.
  <p><strong>편집자:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>교육과 활동관련 실무 그룹인 (<a href="https://www.w3.org/WAI/EO/">EOWG</a>)의 지원을 받아 제작되었습니다.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

이 페이지는 웹 접근성과 관련된 지침과 표준들에 관해 설명합니다.

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

## 소개 {#intro}

월드 와이드 웹 컨소시움(W3C)은 국제 웹 표준을 만들었습니다 : <abbr title="하이퍼텍스트 마크업 언어">HTML</abbr>, <abbr title="캐스케이딩 스타일 시트">CSS</abbr>을 포함한 몇 가지가 있습니다. W3C의 웹 표준을 <dfn>W3C Recommendations</dfn>이라 부릅니다.

모든 W3C 표준은 접근성 지원을 위해 접근성 플랫폼 설계([APA](/about/groups/apawg/)) 실무 그룹에서 검토합니다.

아래 소개된 W3C 표준과 실무 그룹의 기록은 특히 접근성과 관련이 있습니다.

## 접근성 지침 {#guidelines}

[[웹 접근성의 필수 요소]](/fundamentals/components/)는 웹 접근성이 웹 개발 및 상호작용 과정에서 여러 요소와 어떻게 작용하는지와 WAI 지침(WCAG, ATAG, UAAG)의 적용 방법에 대해 명시하고 있습니다.

### 웹 콘텐츠 접근성 지침 (WCAG) 2 {#wcag2}

웹 "콘텐츠"는 일반적으로 웹 페이지나 어플리케이션 안의 정보를 가리킵니다. 다음의 내용을 포함합니다 :

* 텍스트, 이미지, 소리와 같은 기본 정보
* 구조나 표현 방법 등을 정의한 코드나 마크업

WCAG는 다양한 콘텐츠, 멀티미디어, "모바일" 등에 적용됩니다. WCAG는 [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/)에서 명시하듯이 웹이 아닌 정보 통신 기술(ICT)에도 적용됩니다.

WCAG 2 정보:
- [WCAG 개요](/standards-guidelines/wcag/)
- [[WCAG 2.1 한눈에 보기]](/standards-guidelines/wcag/glance/)
- [WCAG 2 지키는 방법 (빠른 참조)](https://www.w3.org/WAI/WCAG21/quickref/)
- [[WCAG 2 번역]](/standards-guidelines/wcag/translations/)
- [WCAG 2.0 표준](https://www.w3.org/TR/WCAG20/)
- [WCAG 2.1 표준](https://www.w3.org/TR/WCAG21/), [[WCAG 2.1에서 새롭게 등장한 내용]](/standards-guidelines/wcag/new-in-21/)
- [[WCAG 2.2 초안에서 새롭게 등장한 내용]](/standards-guidelines/wcag/new-in-22/)

### 웹 저작 도구 접근성 지침 (ATAG) {#atag}

저작도구는 "저자" (웹 개발자, 디자이너, 작가 등)가 웹 콘텐츠를 생산하는 데에 사용하는 서비스나 소프트웨어를 가리킵니다. 예를 들어, HTML 에디터, 콘텐츠 관리 시스템 (CMS) 그리고 사용자가 콘텐츠를 생산할 수 있는 블로그나 소셜 네트워킹 사이트가 있습니다. ATAG 문서는 다음 내용을 목표로 합니다 :
* 저작도구의 접긍성을 보장하여 장애가 있는 사용자가 웹 콘텐츠를 생산할 수 있도록 하고,
* 저자가 더 접근성이 좋은 웹 콘텐츠를 생산하는 것을 돕습니다.

ATAG 정보:
- [ATAG 개요](/standards-guidelines/atag/)
- [[ATAG 한눈에 보기]](/standards-guidelines/atag/glance/)
- [ATAG 2.0 표준](https://www.w3.org/TR/ATAG/)

### 사용자 에이전트 접근성 지침 (UAAG) {#uaag}

사용자 에이전트는 브라우저, 브라우저 확장프로그램, 미디어 플레이어, 리더기와 같은 웹 콘텐츠를 제공하는 어플리케이션을 포함합니다.

UAAG 정보:
- [UAAG 개요](/standards-guidelines/uaag/)
- [UAAG 2.0 Note](https://www.w3.org/TR/UAAG20/)

### 웹 콘텐츠 접근성 지침 (WCAG) 3 초안 {#wcag3}

WCAG 3는 W3C 표준으로 사용되기 위한 작업 초기 단계입니다. WCAG 3는 웹 콘텐츠, 앱, 도구, 출판, 웹상의 신기술에 적용됩니다.

WCAG 3 정보:
- [[WCAG 3 소개]](/standards-guidelines/wcag/wcag3-intro/)

## 기술 명세

### 접근가능한 리치 인터넷 어플리케이션 (WAI-ARIA) {#aria}

ARIA는 의미를 제공하여 저자가 유저 인터페이스 행동이나 구조적 정보를 스크린 리더와 같은 보조 기술에 전달할 수 있게 합니다. ARIA 기술 명세는 역할, 상태, 접근 가능한 유저 인터페이스 요소로 정의되는 속성들의 온톨로지를 제공합니다.

ARIA 모음은 유저 에이전트 실행 지침을 제공하는 명세를 모은 <abbr title="응용 프로그램 프로그래밍 인터페이스">API</abbr>를 포함합니다. 그래픽, 디지털 출판을 위한 모듈 또한 포함됩니다.

ARIA 정보:
- [WAI-ARIA 개요](/standards-guidelines/aria/) – [모듈, API 맵핑 목록과 설명](/standards-guidelines/aria/#versions)을 포함합니다.
- [WAI-ARIA 저작 연습](https://www.w3.org/TR/wai-aria-practices/)
- [WAI-ARIA 1.1 표준](https://www.w3.org/TR/wai-aria-1.1/)

### 오디오와 동영상 {#multimedia}

- [WebVTT: 웹 동영상 텍스트 트랙 형식](https://www.w3.org/TR/webvtt/)은 오디오나 동영상에 대한 캡션, 동영상에 대한 텍스트 설명, 시간순으로 정렬된 다른 메타 데이터를 위한 형식입니다.

- [시간 지정 텍스트 마크업 언어 (TTML)](https://www.w3.org/TR/ttml/)는 자막과 캡션 작성을 위한 기존 배포 콘텐츠 형식의 시간 지정 텍스트 정보를 트랜스코딩하거나 변환하기 위해 사용되는 것을 목적으로 합니다.

### 평가 {#eval}

다음 자료들은 접근성 평가 방법과 도구 개발을 지원합니다 :

- [[접근성 부합 여부 테스트 (ACT) 개요]](/standards-guidelines/act/) &mdash; ACT는 웹 콘텐츠가 접근성 표준에 부합하는지 테스팅하기 위한 원칙들을 문서화하고 발행합니다.

- [[평가와 보고 언어 (EARL) 개요]](/standards-guidelines/earl/) &mdash; EARL는 기계가 읽을 수 있는 형식으로 테스트 결과를 보여줍니다.

평가와 관련된 추가 자료들은 [[웹 접근성 평가 개요]](/test-evaluate/)에 명시되어 있습니다. 다음 자료도 포함합니다 :

- [[WCAG-EM 개요: 웹사이트 접근성 부합 평가 방법론]](/test-evaluate/conformance/wcag-em/) &mdash; WCAG-EM은 웹 사이트가 웹 콘텐츠 접근성 지침(WCAG)에 얼마나 부합하는지를 확인하는 접근법입니다.

### 개인화

[[개인화 개요]](/adapt/) &mdash; 개인화는 각 사용자의 선호와 필요를 충족시키기 위한 사용자 경험을 조정하는 것을 포함합니다. 콘텐츠 저자는 최소한의 공수로 기본 디자인을 제공하고, 사용자 개인화가 가능하도록 하는 데에 개인화 표준을 사용할 수 있습니다.

### 발음

[[발음 개요]](/pronunciation/) &mdash; 발음은 스크린 리더와 다른 text-to-speech(TTS) 프로그램이 콘텐츠 발음을 적절하게 음성 합성하는지에 대한 것입니다.

## W3C WAI의 다른 작업 영역

- [[W3C의 모바일 접근성]](/standards-guidelines/mobile/)

- [[W3C의 인지 접근성]](/cognitive/)

## 추가 정보 {#moreinfo}

- [W3C 접근성 전체 목록 - 관련된 표준 ("W3C Recommendations")과 실무 그룹 기록](https://www.w3.org/TR/?tag=accessibility)

- [[웹 접근성 법과 정책]](/policies/) 목록은 전 세계 나라, 지역의 웹 접근성과 관련된 정부 차원의 법과 정책을 정리하였습니다. 이중 대부분은 W3C 접근성 표준을 참고하고 있습니다.

- [[웹 접근성 표준안 통일이 중요한 이유]](/standards-guidelines/harmonization/)

- [[WAI 지침과 기술 문서 참조, 링크 연결하기]](/standards-guidelines/linking/)

- [W3C 프로세스에서 WAI가 접근성 지침을 개발하는 방법 : 이정표와 **기여할 기회**](/standards-guidelines/w3c-process/)

![다른 요소에 대한 지침들을 보여주는 삽화. 자세한 설명은 다음 링크 참고 : https://www.w3.org/WAI/intro/components-desc.html#guide]({{ "/content-images/components/specs.png" | relative_url }})
