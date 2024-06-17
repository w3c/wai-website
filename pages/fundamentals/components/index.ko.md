---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: 웹 접근성 필수 요소
nav_title: "웹 접근성 요소" # A short title that is used in the navigation
lang: ko   # Change "en" to the translated language shortcode
last_updated: 2024-05-16  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Yong Ui Lee"
    link: "https://twitter.com/yongui9"
contributors:
  - name: "Jun Ho Lee"
  - name: "hwahyeon"

github:
  label: wai-components

permalink: /fundamentals/components/ko   # Add the language shortcode to the end; for example /path/to/file/fr
ref: /fundamentals/components/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>
    <strong>사용 권한 :</strong> 
    다음 사항들을 준수한다면 현재 페이지의 이미지들을 웹 접근성 교육과 활동에 사용할 수 있습니다 :<br> 
    1. <strong><span class="changed">w3.org/WAI/fundamentals/components/</span> URI를 <em>눈에 잘 띄도록</em></strong> 이미지 근처에 삽입하고, <br>
    2. 작성한 자료나 발행물에 작가, 편집자, 저작권 정보를 추가하세요 :<br>
    <cite>작가 : Michael Duffy, 출처: Essential Components of Web  Accessibility. S.L. Henry, ed. Copyright W3C <sup>®</sup> (MIT, ERCIM, Keio, Beihang). w3.org/WAI/fundamentals/components/</cite><br>
    더 많은 정보를 원하시면, <a href="https://www.w3.org/WAI/about/usingWAImaterial.html">Using WAI Materials</a>를 참고하세요.
  </p>
  <p><strong>날짜: </strong>2024년 3월 14일 업데이트됨. <!-- [<a href="@@">변경 기록</a>] --></p>
  <p><strong>편집자:</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. 그래픽 디자이너: Michael Duffy.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

이 페이지는 웹 접근성이 다른 요소들과 상호작용할 때 어떤 관계가 있고, 특정 요소들의 개선으로 웹 접근성을 크게 향상시킬 수 있는 방법들을 살펴봅니다.

<abbr title="월드 와이드 웹 컨소시움">W3C</abbr> 웹 접근성 이니셔티브(WAI)가 만든 다른 접근성 표준들을 이해하는데 기본 정보들을 제공합니다.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="simple" %}
{:/}

{::options toc_levels="2" /}

- This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## 소개 {#intro}
{:.no_toc}
장애가 있는 사용자가 웹에 접근 가능하도록 하기 위해 웹 개발, 상호작용의 여러 요소들이 함께 동작하는 것은 필수적입니다. 다음 요소들이 포함됩니다 :

- **콘텐츠** - 웹 페이지나 웹 애플리케이션에 있는 정보. 예시 :
  - 텍스트, 이미지, 소리와 같은 기본 정보
  - 구조나 표현 방법 등을 정의한 코드나 마크업 등
- **웹 브라우저, 미디어 플레이어**, 그리고 다른 "사용자 에이전트"
- **보조 기술**, 경우에 따라, 스크린 리더, 대체 키보드, 스위치, 스캐닝 소프트웨어 등
- **사용자**의 지식, 경험 그리고 경우에 따라, 웹 사용 시 적응 전략
- **개발자** - 디자이너, 코더, 저자 등 콘텐츠에 기여한 사용자와 장애가 있는 개발자 포함
- **저작 도구** - 웹 사이트를 만드는 소프트웨어
- **평가 도구** - 웹 접근성 평가 도구, HTML 유효성 검사, CSS 유효성 검사 등

## 요소 간 관계 {#relate}

{% assign longdesc_url = "/fundamentals/components/examples/ko#relate" | relative_url %}
{% include image.html src="components/relate.ko.png" alt="요소 간 관계를 보여주는 삽화" longdesc=longdesc_url %}

웹 **개발자**는 웹 **콘텐츠**를 만들기 위해 대개 **저작 도구**와 평가 도구를 사용합니다.

**사람들**("**사용자**")은 **콘텐츠**에 접근하고 사용하기 위해 웹 **브라우저, 미디어 플레이어, 보조 기술** 과 여러 "**사용자 에이전트**"를 사용합니다.

## 요소 간 상호의존성 {#depend}

요소 간 분명한 상호의존성이 있습니다. 웹이 접근 가능하도록 하기 위해서는 요소들이 함께 동작해야 합니다. 예를 들어, 이미지의 대체 텍스트가 있습니다 :

- **기술 명세**는 대체 텍스트에 대해 말하고 있습니다. (예를 들어, HTML은 이미지 요소 (`img`)의 대체 텍스트 속성 (`alt`)을 정의합니다.)
- **WAI 지침** ([WCAG, ATAG, UAAG는 아래를 참고하세요.](#guidelines)) - 여러 요소들에서 접근성을 위한 대체 텍스트를 어떻게 사용할지 정의합니다.
- **개발자**는 적절한 대체 텍스트 내용을 작성합니다.
- **저작 도구**는 웹 페이지에서 대체 텍스트 제공을 가능하게 하고, 용이하게 하며, 장려합니다.
- **평가 도구**는 대체 텍스트의 유무를 확인하는 데에 사용됩니다.
- **사용자 에이전트**는 대체 텍스트에 대한 인적 및 기계 인터페이스를 제공합니다.
- **보조 기술**은 다양한 양식으로 대체 텍스트에 대한 인간 인터페이스를 제공합니다.
- **사용자**는 필요에 따라 그들의 사용자 에이전트나 보조 기술로부터 대체 텍스트를 제공받는 방법을 알고 있습니다.

### 실행 사이클

접근성 기능이 한 요소에서 효과적으로 실행된다면, 다른 요소들도 해당 기능을 실행할 수 있을 것입니다.

{% include image.html src="components/cycle.ko.png" alt="" %}

- **웹 브라우저, 미디어 플레이어, 보조 기술, 사용자 에이전트**가 접근성 기능을 지원할 때 사용자는 해당 기능을 더 요구할 것이고, 개발자들은 더 쉽게 그들의 **콘텐츠**에  해당 기능을 적용할 수 있을 것입니다.
- 개발자들이 콘텐츠에 접근성 기능을 구현하고자 할 때, 그들은 이를 더 쉽게 구현할 수 있는 **저작도구**를 요구할 가능성이 높습니다.
- **저작도구**가 접근성 기능을 잘 실행할 수 있도록 해주었을 때 개발자들은 그들의 **콘텐츠**에 해당 기능을 더 잘 적용할 수 있을 것입니다.
- 접근성 기능이 **주요 콘텐츠**에 적용되었을 때 개발자와 사용자는 **사용자 에이전트**가 지원하도록 요구하기 쉬워집니다.

### 한 요소가 약할 경우

만약 접근성 기능이 한 요소에 잘 실행되지 않는다면 접근 가능한 사용자 경험을 야기하지 않게 되고, 다른 요소들이 접근성을 실행할 이유가 없어집니다. 예를 들어, 개발자는 저작 도구가 지원하지 않고, 대부분의 브라우저와 보조 기술이 계속해서 적용하지 않는 접근성 기능은 사용하지 않으려 할 것입니다.

{% assign longdesc_url = "/fundamentals/components/examples/ko#weak" | relative_url %}
{% include image.html src="components/bridge.ko.png" alt="한 요소가 약할 경우에 대한 삽화" longdesc=longdesc_url %}

만약 한 요소가 접근성 지원이 제대로 이루어지지 않는다면, 다른 요소들이 더 많은 노력을 해야 하고 접근성 측면에서 전반적으로 좋지 않은 "차선책"을 통해 보완하고자 할 것입니다. 예를 들어,

- 개발자는 저작도구의 부족한 접근성 지원을 보완하기 위해 더 많은 작업이 필요합니다. 예를 들어, 저작 도구를 사용하지 않고 코딩하고 마크업할 것입니다.
- 사용자는 콘텐츠의 부족한 접근성과 브라우저, 미디어 플레이어, 보조 기술의 부족한 접근성 지원을 보완하기 위해 더 많은 작업이 필요합니다. 예를 들어, 여러 접근성 문제를 해결하기 위해 다른 브라우저와 보조 기술을 사용할 것입니다.

그러나 대부분의 경우 해결 방법이 구현되지 않아 여전히 접근성이 열악합니다. 또한, 때때로 한 요소의 열악한 접근성 지원을 다른 요소들로 보완하기 어렵기에 결과적으로 열악한 접근성은 장애가 있는 사용자가 특정 웹 사이트, 페이지, 또는 기능에 접근하기 어렵게 만듭니다.

## 지침과 다른 표준 {#guidelines}

월드 와이드 웹 컨소시엄 ([W3C](https://www.w3.org/)) 웹 접근성 이니셔티브 ([WAI](https://www.w3.org/WAI/))는 여러 요소들을 위한 **웹 접근성 표준**을 만들었습니다. :

- [[웹 저작 도구 접근성 지침 (ATAG)]](/standards-guidelines/atag/)은 저작 도구에 대해 설명합니다.
- [[웹 콘텐츠 접근성 지침 (WCAG)]](/standards-guidelines/wcag/)은 웹 콘텐츠에 대해 설명하고, 개발자, 저작 도구, 접근성 검사 도구에 주로 적용됩니다.
- [[사용자 에이전트 접근성 지침 (UAAG)]](/standards-guidelines/uaag/)은 보조 기술의 몇 가지 부분을 포함하여, 웹 브라우저와 미디어 플레이어에 대해 설명합니다.


이러한 접근성 지침들은 웹의 기술 명세를 기본으로 하고, 모든 <a href="https://www.w3.org/TR/">W3C 기술 명세</a> (HTML, CSS, SVG, SMIL 등)를 참고하여 만들어졌습니다. 또한 W3C는 접근성을 주제로 한 기술 명세도 만들었습니다. 다음을 포함합니다 :

* [ARIA, 접근 가능한 리치 인터넷 애플리케이션 ](/standards-guidelines/aria/)은 장애가 있는 사용자가 접근하기 쉬운 웹 애플리케이션을 만들기 위한 방법을 정의하고 있습니다. Ajax, HTML, JavaScript와 관련 기술들로 만들어진 동적 콘텐츠나 고차원 사용자 인터페이스 제어에 특히 도움이 될 것입니다.

{% assign longdesc_url = "/fundamentals/components/examples/ko#guide" | relative_url %}
{% include image.html src="components/specs.ko.png" alt="여러 요소에 대한 지침들을 보여주는 삽화" longdesc=longdesc_url %}

더 많은 정보는 [[W3C 접근성 표준 개요]](/standards-guidelines/)에서 확인하세요.
