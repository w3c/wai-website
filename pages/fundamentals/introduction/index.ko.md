---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: 웹 접근성 소개 
lang: ko
last_updated: 2024-02-22   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: #Add one -name: line for every translator
  - name: "YongUi Leee"
contributors: #Add one -name: line for every contributor
  - name: "JunHo Lee"
  - name: "hwahyeon"

github:
  label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/ko   # Add the language shortcode to the end; for example /fundamentals/accessibility-intro/fr
ref: /fundamentals/accessibility-intro/   # Do not change this

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>날짜:</strong> 2023년 11월 20일 업데이트됨. 2005년 2월 처음 발행됨. CHANGELOG.</p>
  <p><strong>편집자:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>교육과 활동관련 실무 그룹인 (<a href="https://www.w3.org/WAI/EO/">EOWG</a>)에 의해 제작되었습니다.</p>
---


{::nomarkdown}
{% include box.html type="start" h="2" title="요약" class="full" %}
{:/}

웹 사이트와 웹 도구들이 잘 설계되고 만들어졌다면, 장애를 가진 사람들도 이를 사용할 수 있습니다. 그러나, 현재 많은 사이트와 도구들은 접근성 장벽이 있고, 이는 일부 사람들이 사용하는 데에 어려움을 주거나 불가능하게 합니다.

웹을 접근 가능하게 만드는 것은 개인, 비즈니스, 사회에 이점을 줍니다. 국제 웹 표준은 접근성을 위해 무엇이 필요한지 정의하고 있습니다. 

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="페이지 내용" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">관련 자료</span><br>
{% include video-link.html title="웹 접근성과 W3C 표준에 대한 소개 비디오 <em>(4분)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## 웹 접근성의 이해 {#context}

<blockquote class="pull">
  <p>웹의 힘은 보편성에 있습니다.<br />
    장애에 상관없이 모두가 접근할 수 있다는 것이 가장 중요한 부분입니다.</p>
  <footer><cite>팀 버너스리, W3C 디렉터 및 Wrold Wide Web의 창시자</cite></footer>
</blockquote>

웹은 기본적으로 하드웨어, 소프트웨어, 언어, 장소, 능력에 제약없이 모든 사람들이 사용할 수 있도록 설계되었습니다. 웹이 이 목표를 달성할 때 비로소 다양한 청력, 움직임, 시력, 인지 능력을 가진 사람들이 웹에 접근할 수 있습니다.

이와 같이 웹은 많은 사람들이 물리적 세상에서 의사소통과 상호작용하는 데에 마주하는 어려움을 웹이 없애주기 때문에 웹에서의 장애의 영향이 급격하게 변합니다. 그러나 웹사이트, 어플리케이션, 기술이나 도구가 불충분하게 설계되면, 그것들은 사람들이 웹을 사용하는 것을 배제하는 장벽을 만들 수도 있습니다. 


**고품질의 웹사이트와 웹 도구를 만들고자 하며, 동시에 그들의 제품 및 서비스 사용에서 사람들을 배제하지 않으려는 개발자와 조직에게 웹 접근성은 필수적입니다.**



## 웹 접근성이란 {#what}

웹 접근성은 웹 사이트, 도구, 기술이 장애를 가진 사용자들이 사용할 수 있도록 설계 및 개발된 것을 말합니다. 더 자세하게 말하면, 사람들은 다음과 같은 행동을 할 수 있습니다:

-   웹으로 인지, 이해, 탐색, 상호작용
-   웹에 기여

웹 접근성은 웹에 접근하는 데에 영향을 주는 모든 장애를 아우릅니다. 다음을 포함합니다:

-   청각
-   인지
-   신경
-   신체
-   언어
-   시각

또한 웹 접근성은 장애를 *갖지 않은* 사람에게도 이점을 줍니다. 예를 들어:

-   작은 화면, 다른 입력 모드 등을 가진 휴대폰, 스마트 워치, 스마트 TV 및 다른 디바이스를 사용하는 사람
-   노화로 인해 기능적 능력이 변한 연로한 사람
-   팔이 부러지거나 안경을 잃어버려서 "일시적인 장애"를 겪는 사람
-   밝은 햇빛이나 소리를 듣기 힘든 환경에 있어 "상황적 제약"을 겪는 사람
-   느린 인터넷을 사용하는 사람 또는 대역폭이 제한적이거나 비싼 사람

접근성이 장애를 가진 사람들에게 얼마나 필수적이고, 다양한 상황 속에 있는 모든 사람들에게 도움이 되는지에 대한 예시를 보여주는 7분짜리 비디오를 볼 수 있습니다:<br>
{% include video-link.html title="웹 접근성의 다양한 관점들에 대한 비디오 <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="웹 접근성에 대한 더 많은 정보" class="simple aside" %}
{:/}

-   웹을 사용하는 데에 장애들이 어떻게 다른지에 대해 알고 싶고, 장애를 가진 사용자가 웹을 사용하는 시나리오를 읽고 싶다면 [[장애를 가진 사람들은 웹을 어떻게 사용하는가]](/people-use-web/)을 보세요.
-   다른 이점들에 대해 더 알고 싶다면, [[공유된 웹 경험들: 모바일 기기 사용자와 장애를 가진 사람들이 빈번히 경험하는 장벽들]](/standards-guidelines/shared-experiences/)과 멀티미디어인 [장애가 있는 사람과 없는 사람 모두에게 사용됨](/media/av/users-orgs/#situations),
그리고 아카이브인 [웹 접근성이 장애가 있는 사람과 없는 사람에게 주는 이점](https://www.w3.org/WAI/business-case/archive/soc#groups)를 보세요.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## 접근성은 개인, 비즈니스, 사회에 중요합니다. {#important}

웹은 교육, 고용, 정부, 커머스, 건강 관리, 오락 등 삶의 많은 부분에서 점점 중요한 자원이 되고 있습니다. 다양한 능력을 가진 사람들에게 동등한 접근과 기회를 제공하기 위해 웹에 접근 가능하다는 것은 매우 중요합니다. 웹을 포함한 정보와 의사소통 기술에 대한 접근성은 유엔장애인권리협약(UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html))에 인간의 기본권으로 명시되어 있습니다.

웹은 장애가 있는 많은 사람들이 전례 없는 정보 접근과 상호작용의 가능성을 제공하고 있습니다. 즉, 인쇄, 오디오, 시각 매체에 대한 접근성 장벽을 웹 기술을 통해 쉽게 극복하게 해 줍니다. 

접근성은 장애를 가진 사용자뿐 아니라 다른 사람들의 사회적 통합을 지원합니다. 다음의 사람들을 포함합니다. :

-   연로한 사람
-   외진 지역에 있는 사람
-   개발도상국 사람

**접근성 관련 강력한 비즈니스 사례도 있습니다.** 이전 내용에서 나왔듯이, 접근 가능한 디자인은 특히 장비에 상관없이 연로한 사용자와 다양한 상황들에서 전반적인 사용자 경험과 만족을 향상시킵니다. 접근성은 당신의 브랜드를 강화시키고, 혁신을 이끌어주고, 시장을 확장시킬 수 있습니다.

웹 접근성은 많은 상황에서 **법적으로 필수적입니다.**

{::nomarkdown}
{% include box.html type="start" h="3" title="웹 접근성의 중요성에 대한 더 많은 정보" class="simple aside" %}
{:/}

-   비즈니스적 이점에 대한 일반적 정보는 [[디지털 접근성에 대한 비즈니스 사례]](/business-case/)에 있습니다.
- [오디오 및 비디오 미디어의 접근성 확보](/media/av/)의 이점 예시들은 [조직에 대한 이점](/media/av/users-orgs/#benefits) 섹션에 있습니다.
-   법적 조건에 대한 안내는 [법과 정책적 요인](https://www.w3.org/WAI/business-case/archive/pol)에 있습니다.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## 웹을 접근 가능하게 만들기 {#making}

웹 접근성은 함께 작용하는 웹 기술, 웹 브라우저 및 다른 \"유저 에이전트\", 저작 도구, 웹 사이트와 같은 여러 요소들에 의존합니다. 

W3C 웹 접근성 이니셔티브([WAI](/about/participating/))는 기술 명세, 가이드라인, 기술을 개발하고 접근성 솔루션을 제공하는 자료들을 지원합니다. 이러한 내용들은 웹 접근성의 국제적 표준으로 간주됩니다; 예를 들어, <abbr title="웹 콘텐츠 접근성 지침 (WCAG)">WCAG</abbr> 2.0 또한 <abbr title="표준화을 위한 국제 조직">ISO</abbr> 표준입니다: ISO/<abbr title="국제전기기술위원회">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="웹을 접근 가능하게 만들기에 대한 더 많은 정보" class="simple aside" %}
{:/}

-   접근성과 함께 작용하는 요소들에 대한 정보는 [[웹 접근성의 필수 요소]](/fundamentals/components/)에 있습니다.
-   웹 콘텐츠 접근성 지침 (WCAG), 웹 저작 도구 접근성 지침 (ATAG), 접근가능한 리치 인터넷 어플리케이션을 위한 ARIA와 다른 중요한 자료들은 [[W3C 접근성 표준 개요]](/standards-guidelines/)에 소개되어 있습니다.
-   여러 이해 당사자들과 국제적 참여를 통해 W3C WAI가 어떻게 자료를 개발하는지와 당신이 참여할 수 있는 방법을 알고자 한다면, [[WAI에 대하여]](/about/) 와 [[WAI에 참여하기]](/about/participating/)를 보세요.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### 당신의 사이트의 접근성 높이기 {#website}

접근성의 여러 측면은 쉽게 이해하고 구현할 수 있습니다. 일부 접근성 해결책은 더 복잡하고 이행하기에 더 많은 지식을 필요로 합니다.

프로젝트 초기부터 접근성을 포함하는 것이 가장 효율적이고 효과적이므로, 다시 돌아가서 작업을 재수행할 필요가 없습니다.

{::nomarkdown}
{% include box.html type="start" h="3" title="당신의 사이트의 접근성 높이기에 대한 더 많은 정보" class="simple aside" %}
{:/}

-   접근성 조건과 국제적 표준 소개에 대한 내용은 [[접근성 원칙]](/fundamentals/accessibility-principles/)을 보세요.
-   테스트 부분에서의 일반적인 접근성 장벽에 대해 알고 싶다면 [[쉽게 체크하기 - 첫 리뷰]](/test-evaluate/preliminary/)를 보세요.
-   접근성 디자인, 작성, 개발 시 기본적으로 고려해야 할 내용에 대한 것은 [[처음 시작을 위한 팁]](/tips/)을 보세요.
-   개발과 디자인에 대해 알 준비가 되었다면 다음과 같은 자료들을 사용할 수 있을 것입니다:
    -   [WCAG를 충족하는 방법 (빠르게 참고하기)](https://www.w3.org/WAI/WCAG22/quickref/)
    -   [웹 접근성 튜토리얼](/tutorials/)
-   프로젝트 관리와 조직적 고려사항에 대한 내용에 대한 것은 [[웹 접근성 계획하고 관리하기]](/planning-and-managing/)를 보세요.<br>
    빠른 수정을 하고 싶다면, [[중간 점검 방법]](/planning/interim-repairs/)을 보세요.

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## 접근성 평가 {#evaluate}

웹 사이트를 개발하고 다시 디자인할 때 접근성 문제를 빠르게 해결할 수 있는 초반에 규명하기 위해 처음과 개발 전 과정에서 접근성을 평가해야 합니다. 브라우저에서 설정을 변경하는 등의 간단한 방법으로 접근성을 평가할 수 있습니다. 웹 사이트가 모든 접근성 지침을 충족하는지 종합적으로 평가하는 데에는 더 많은 노력이 필요합니다.

평가를 도울 수 있는 평가 도구들이 있습니다. 그러나 하나의 도구만으로는 사이트가 접근성 지침을 충족하는지 평가할 수 없습니다. 사이트가 접근 가능한지 평가하는 데에 많이 알고 있는 사람의 평가가 필요합니다.

{::nomarkdown}
{% include box.html type="start" h="3" title="접근성 평가에 대한 더 많은 정보" class="simple aside" %}
{:/}

-   접근성 평가를 돕는 자료들은 [[웹 사이트 접근성 평가하기]](/test-evaluate/)에 있습니다.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## 예시들

{% include excol.html type="middle" %}

### 이미지 대체 텍스트

![로고 이미지; HTML 마크업 구조 img alt='Web Accessibility Initiative 로고'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

이미지는 마크업이나 코드에 *[적절한 대체 텍스트](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (대체 텍스트)를 포함하고 있어야 합니다.

대체 텍스트가 이미지에 제공되지 않는다면, 이미지 정보는 접근 불가능합니다. 예를 들어, 보지 못하는 사람, 시각적 이미지 및 대체 텍스트를 포함해 페이지의 정보를 읽어주는 스크린 리더를 사용하는 사람들이 있습니다. 

적절한 대체 텍스트가 제공될 때, 이미지를 볼 수 없거나, 이미지 로딩을 끄고 보는 사람들(예를 들어, 비싸고 대역폭이 낮은 인터넷을 사용하는 사람)도 정보를 이용할 수 있게 됩니다. 또한 검색 엔진과 같이 이미지를 볼 수 없는 기술들도 이용할 수 있게 됩니다. 

### 키보드 입력

![마우스에 금지 표시](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

연로하여 미세조정이 어려운 사용자를 포함한 일부 사람들은 마우스를 사용할 수 없습니다. 접근 가능한 웹 사이트는 마우스에 의존하지 않습니다; 접근가능한 웹 사이트는  [기본적으로 모든 것을 키보드로 이용 가능합니다.](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible). 키보드와 유사한 기능을 하는 음성 입력과 같은 [보조기술](/planning/involving-users/#at)을 사용할 수 있습니다.

### 오디오 녹취록

[![예시 녹취록](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

볼 수 없는 사람이 이미지를 이용할 수 없는 것과 같이 오디오 파일은 들을 수 없는 사람은 이용할 수 없습니다. 녹취록을 제공하는 것은 농인이나 낮은 청력을 가진 사람들이나 검색 엔진, 들을 수 없는 다른 기술들이 오디오 정보에 접근 가능하도록 해줍니다.

녹취록을 제공하는 것은 쉽고, 상대적으로 비용이 적게 듭니다. 또한 녹취록을 HTML 포맷으로 만들어주는 [녹취록 서비스](http://www.uiaccess.com/transcripts/transcript_services.html)도 있습니다. 

{::nomarkdown}
{% include box.html type="start" h="3" title="추가 정보" class="simple aside" %}
{:/} 

-   [[처음 시작을 위한 팁]](/tips/)
-   [[쉽게 체크하기 - 첫 리뷰]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="웹 접근성 관점들 &mdash; 비디오와 설명" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## 추가 정보 {#more-info}

W3C WAI [표준](/standards-guidelines/), [교육](/teach-advocate/), [테스트/평가](/test-evaluate/), [프로젝트 관리, 정책](/planning/)과 같은 웹 접근성의 다른 부분에 대한 많은 자료들을 제공하고 있습니다. 웹 사이트를 탐색하고, [WAI 자료](/resources/) 목록을 확인해보시길 권장합니다.

**[[디지털 접근성 기초 - 무료 온라인 코스]](/courses/foundations-course/)**는 디지털 기술을 접근 가능하게 만들기 위해 필요한 기초 지식을 제공합니다.
