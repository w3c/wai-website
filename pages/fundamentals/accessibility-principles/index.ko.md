---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: 접근성 원칙
nav_title: "접근성 원칙"
lang: ko
last_updated: 2019-05-10   # Keep the date of the English version
description: 웹 사이트, 웹 어플리케이션, 브라우저와 다른 도구를 위한 기본적 웹 접근성 필요조건에 대한 개요
teaser_text: 접근성 원칙 페이지는 웹 사이트, 웹 어플리케이션, 브라우저와 다른 도구를 위한 웹 접근성 필요조건에 대해 소개하고 있습니다. W3C 웹의 국제 표준에 대해 언급하고 있습니다.

translation:
  last_updated: 2023-12-06  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: 
- name: "Yong Ui Lee"   # Replace @@ with translator name
  link: "https://twitter.com/yongui9"
contributors:
- name: "Jun Ho Lee"

github:
  label: wai-accessibility-principles

permalink: /fundamentals/accessibility-principles/ko   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-principles/   # Do not change this

image: /content-images/accessibility-principles/social.png

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>편집자:</strong> <a href="https://www.w3.org/People/shadi/">Shadi Abou_Zahra</a>. <a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">Acknowledgments</a>.</p>
  <p>교육과 활동관련 실무 그룹인 (<a href="https://www.w3.org/WAI/EO/">EOWG</a>)의 지원을 받아 제작되었습니다. <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">WAI-AGE Task Force</a>, with support of the <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE 프로젝트</a>의 지원과 <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">WAI-AGE 팀</a>에 의해 제작되었습니다.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

이 페이지는 웹 사이트, 웹 어플리케이션, 브라우저와 다른 도구를 위한 웹 접근성 필요조건에 대해 소개하고 있습니다. W3C 웹 접근성 이니셔티브(WAI)의 국제 표준과 [웹 사용자 이야기](/people-use-web/user-stories/)에 대해 언급하고 있습니다.

**주석:** 본 내용은 모든 접근성 필요조건을 목록화 한 것은 아닙니다.

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

## 웹 접근성 표준 {#standards}

웹 접근성은 함께 동작하는 여러 요소에 의존합니다. 요소에는 다음의 내용이 포합됩니다. : 

-   **웹 콘텐츠**{:#webcontent} - 텍스트, 이미지, 폼 요소, 멀티미디어, 마크업 코드, 스크립트, 어플리케이션 등을 포함하는 웹 사이트의 일부를 가리킵니다.
-   **사용자 에이전트**{:#useragents} - 사용자가 웹 콘텐츠에 접근할 수 있도록 하는 소프트웨어(데스크탑 그래픽 브라우저, 음성 브라우저, 모바일 브라우저, 멀티미디어 플레이어, 플러그인과 여러 [보조 기술](/people-use-web/tools-techniques/#at "definition"))를 가리킵니다.
-   **저작 도구**{:#authoringtools} - 코드 에디터, 문서 변환 도구, 저작물 관리 시스템, 블로그, 데이터 베이스 스크립트와 같은 사용자가 웹 콘텐츠를 생산할 수 있도록 하는 소프트웨어나 서비스를 가리킵니다.

{% include excol.html type="start" %}

### 웹 접근성 표준 더 자세히 살펴보기
{:.no_toc}

{% include excol.html type="middle" %}

이 요소들은 서로를 지원하고 밀접한 관련이 있습니다. 예를 들어, **웹 콘텐츠**는 이미지에 대체 텍스트를 포함해야 합니다. 이 정보는 **웹 브라우저**가 처리하고, 스크린 리더와 같은 **보조 기술**에 전달됩니다. 저자들은 대체 텍스트를 작성하기 위해 **저작 도구**를 필요로 합니다. 더 자세한 내용은 [[웹 접근성 필수 요소]](/fundamentals/components/)를 확인하세요.

표준은 각 요소들의 접근성 필요조건을 정의하는 데에 중요한 역할을 합니다. 몇 접근성 필요조건은 충족하기 쉽지만 장애가 있는 사용자가 웹을 어떻게 사용하는지에 대한 기본을 이해한다면 더 효과적으로 충족할 수 있을 것입니다. 접근성의 일부는 사용자가 웹을 사용하는 방법에 대한 고차원적인 기술과 지식이 필요합니다. 모든 경우에서 [웹 프로젝트 초기 단계와 전체에 사용자 포함시키기](/test-evaluate/involving-users/)는 당신이 더 일하기 쉽고, 나은 결과를 얻는 데에 도움을 줄 것입니다.

W3C 웹 접근성 이니셔티브(WAI)는 웹 접근성 관련 국제 표준으로 사용되는 지침들을 제공합니다. 다음의 내용이 포합됩니다. :

-   **[웹 콘텐츠 접근성 지침 (WCAG)](/standards-guidelines/wcag/)**
-   **[사용자 에이전트 접근성 지침 (UAAG)](/standards-guidelines/uaag/)**
-   **[웹 저작 도구 접근성 지침 (ATAG)](/standards-guidelines/atag/)**

**[접근 가능한 리치 인터넷 어플리케이션 (WAI-ARIA)](/standards-guidelines/aria/)**에 대한 WAI 명세도 있습니다. 이는  Ajax, JavaScript와 관련된 웹 기술로 만들어진 고차원 사용자 인터페이스 컨트롤과 다양한 콘텐츠를 포함합니다.

{% include excol.html type="end" %}

## 인지가능한 정보와 사용자 인터페이스 {#perceivable}

### 텍스트가 아닌 콘텐츠를 위한 대체 텍스트 {#alternatives}

대체 텍스트는 텍스트가 아닌 콘텐츠에 대응되는 것입니다. 다음은 예시입니다. : 

-   아이콘, 버튼, 그래픽을 포함한 이미지에 대한 짧은 문구
-   차트, 다이어그램, 삽화에 있는 정보 설명
-   오디오나 영상과 같은 텍스트가 아닌 콘텐츠에 대한 짧은 설명
-   폼 요소, 인풋, 다른 사용자 인터페이스 요소에 대한 라벨

대체 텍스트는 사용자에게 동등한 경험을 제공하고 이미지나 기능의 목적을 전달하기 위해 사용됩니다. 예를 들어, 검색 버튼의 경우 " *돋보기* " 보다는 " *검색* "이 적절한 대체 텍스트입니다. 

대체 텍스트는 다양한 방법으로 표현할 수 있습니다. 예를 들어, 화면을 보지 못하거나 읽는데 어려움을 겪는 사람들이 음성으로 읽는 용도로 사용할 수 있고, 사용자가 설정한 폰트 사이즈로 키울 수 있고, 점자 단말기에 표시할 수도 있습니다. 대체 텍스트는 음성 인식(음성 제어) 탐색이나 키보드 탐색을 보조하는 제어, 기능을 위한 라벨로 제공될 수 있습니다. 오디오, 영상, 다른 형식의 파일, 웹 사이트의 일부분으로 삽입되어 있는 어플리케이션을 구분하기 위한 라벨 역할을 할 수도 있습니다. 

{% include excol.html type="start" %}

#### 대체 텍스트와 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 1.1 - 대체 텍스트](https://www.w3.org/WAI/WCAG22/quickref/#text-alternatives)

**UAAG**

-   [지침 1.1 - 대체 콘텐츠](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.2.1: 저작 도구 사용자 인터페이스에서 저자가 대체 텍스트에 접근할 수 있도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [지침 A.2.2: 저작 도구 사용자 인터페이스에서 편집 화면을 프로그램적으로 조작할 수 있도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [지침 A.3.7: 저작 도구 사용자 인터페이스에서 적어도 인마켓 사용자 에이전트 만큼의 미리보기 접근성을 보장해야 한다.](https://www.w3.org/TR/ATAG20/#gl_b37)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### 대체 텍스트와 관련된 이야기
{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Martine, 청력이 약한 온라인 수강생](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 멀티미디어를 위한 캡션과 다른 대안 {#captions}

오디오를 듣지 못하고, 영상을 보지못하는 사용자에게는 대안이 필요합니다. 다음은 예시입니다. :

-   라디오 인터뷰 녹음과 같은 오디오 콘텐츠를 위한 텍스트 대본과 캡션
-   영상의 중요한 시각적 정보를 묘사하는 나레이션인 오디오 설명
-   청각 경험(auditory experiences)과 관련된 오디오 콘텐츠에 대한 수화

정확한 음성, 시각 정보 순서가 잘 정리된 텍스트 대본은 기본적인 접근성을 제공하고, 캡션과 오디오 설명 제공이 가능하게 합니다.

{% include excol.html type="start" %}

#### 멀티미디어와 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 1.2 - 시간 기반 미디어(Time-based Media)](https://www.w3.org/WAI/WCAG22/quickref/#time-based-media)

**UAAG**

-   [지침 1.1 - 대체 콘텐츠](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.2.1: 저작 도구 사용자 인터페이스에서 저자가 대체 텍스트에 접근할 수 있도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [지침 A.3.7: 저작 도구 사용자 인터페이스에서 적어도 인마켓 사용자 에이전트 만큼의 미리보기 접근성을 보장해야 한다.](https://www.w3.org/TR/ATAG20/#gl_b37)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### 멀티미디어와 관련된 이야기 {#stories-related-to-multimedia}
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, 청력이 약한 온라인 수강생](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 다양한 방법으로 제공될 수 있는 콘텐츠 {#adaptable}

사용자를 위해 콘텐츠 제공방식을 바꾸고자 한다면 다음 내용을 따라야 합니다. :

-   헤딩, 목록, 표, 인풋 필드와 콘텐츠 구조들은 적절하게 마크업되어야 합니다.
-   정보나 지시사항의 순서는 보여지는 것에 의존하면 안됩니다.
-   브라우저와 보조 기술은 제공 방식을 개인화 할 수 있는 설정을 제공해야 합니다.

위의 내용을 준수한다면 콘텐츠를 정확하기 읽고, 확대하고, 각 개인의 선호와 필요를 충족시킬 수 있을 것입니다. 예를 들어, 개인이 설정한 색상 조합, 폰트 사이즈 등과 같은 읽는 것을 돕는 여러 스타일 속성을 사용해 제공할 수 있습니다. 사람들이 개요에 접근할 수 있도록 하고, 특정 부분에 더 쉽게 접근할 수 있도록 하기 위한 페이지 아웃라인과 요약을 자동으로 해주는 것과 같은 방법에서 또한 적용할 수 있습니다.

{% include excol.html type="start" %}

#### 적응성과 관련된 접근성 조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 1.3 - 적응성](https://www.w3.org/WAI/WCAG22/quickref/#adaptable)

**UAAG**

-   [지침 1.4 - 텍스트 설정](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [지침 1.5 - 볼륨 설정](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [지침 1.6 - 합성된 음성(Synthesized speech) 설정](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [지침 1.7 - 사용자 스타일 시트 설정](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [지침 1.9 - 대체 화면 제공](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [지침 1.10 - 요소 정보](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.2.2: 저작 도구 사용자 인터페이스에서 편집창 화면을 프로그램적으로 조작 가능하도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [지침 A.3.7: 저작 도구 사용자 인터페이스에서 적어도 인마켓 사용자 에이전트 만큼의 미리보기 접근성을 보장해야 한다.](https://www.w3.org/TR/ATAG20/#gl_b37)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 적응성과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 온라인 쇼핑을 하는 색맹인](/people-use-web/user-stories/archived/#shopper)
-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 보고 듣기 더 쉬운 콘텐츠 {#distinguishable}

명료한 콘텐츠는 보고 듣기 더 쉽습니다. 다음 콘텐츠가 포함됩니다. : 

-   색상이 정보 전달이나 콘텐츠 구분에 유일한 방법이면 안됩니다. 
-   기본 전경색-배경색의 조합은 충분한 대비를 제공해야 합니다.
-   사용자가 텍스트를 400%로 조절하거나 텍스트 간격을 조정했을 때 정보 유실이 없어야 합니다.
-   작은 화면(뷰포트)이나 텍스트를 크게 했을 때 텍스트는 위치가 재조정되어야 합니다.
-   텍스트 이미지는 조절 가능하고 실제 텍스트로 교체되거나 가능하면 피해야 합니다. 
-   사용자가 웹 사이트에서 재생되는 소리의 볼륨을 조절하거나 멈출 수 있어야 합니다. 
-   배경음악은 낮은 볼륨이거나 끌 수 있어야 하고 방해 요인이 되어서는 안됩니다. 

위의 내용을 준수한다면 중요한 정보를 더 눈에 띄게 하기 위한 전경과 배경 구분에 도움이 됩니다. 소리, 배경에 있는 콘텐츠로 탐색하는 데에 방해를 받는 보조 기술을 사용하는 사람과 사용하지 않는 사람 모두를 고려한 것입니다. 예를 들어, 색맹이 있는 사람들은 특별한 도구를 사용하지 않고 텍스트와 주변 배경 사이의 충분한 대비를 제공하는 적절한 디자인에 의존합니다. 또 어떤 사람에게는 자동으로 재생되는 소리가 텍스트 음성변환이나 [assistive listening devices (ALDs)](/teach-advocate/accessible-presentations/#ald "definition")의 사용을 방해할 수 있습니다. 

{% include excol.html type="start" %}

#### 명료성과 관련된 접근성 필요조건(기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 1.4 - 명료성](https://www.w3.org/WAI/WCAG22/quickref/#distinguishable)

**UAAG**

-   [지침 1.3 - 강조(Highlighting)](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [지침 1.4 - 텍스트 설정](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [지침 1.5 - 볼륨 설정](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [지침 1.6 - 합성된 음성(Synthesized speech) 설정](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [지침 1.7 - 사용자 스타일시트 설정](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [지침 1.8 - 뷰포트 안에 맞추기](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [지침 1.9 - 대체 화면 제공](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [지침 1.10 - 요소 정보](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.3.7: 저작 도구 사용자 인터페이스에서 적어도 인마켓 사용자 에이전트 만큼의 미리보기 접근성을 보장해야 한다.](https://www.w3.org/TR/ATAG20/#gl_b37)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 명료성과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 온라인 쇼핑을 하는 색맹인](/people-use-web/user-stories/archived/#shopper)
-   [Martine, 청력이 약한 온라인 수강생](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

## 운용가능한 사용자 인터페이스와 내비게이션 {#operable}

### 키보드로 사용 가능한 기능 {#keyboard}

웹을 탐색하는 데에 마우스보다 키보드를 사용하는 사람들도 많습니다. 키보드로 탐색하기 위해서는 폼 컨트롤, 인풋과 다른 사용자 인터페이스 요소를 포함한 모든 기능에 키보드 접근이 가능해야 합니다. 

키보드 접근성은 다음의 내용을 포함합니다. :

-   마우스로 사용 가능한 기능은 키보드로도 사용 가능해야 합니다.
-   키보드 초점은 콘텐츠에 갇히면 안됩니다.
-   웹 브라우저, 저작 도구를 포함한 도구들은 키보드 지원을 제공해야 합니다.

위의 내용을 준수한다면 것은 인체 공학 키보드, 화상 키보드, 스위치와 같은 대체 키보드를 사용하는 사용자를 포함한 키보드 사용자에게 도움이 됩니다. 또한 키보드 인터페이스로 텍스트를 입력하고 사이트를 사용하는 데에 음성 인식(음성 입력)을 사용하는 사용자에게도 도움이 됩니다.

{% include excol.html type="start" %}

#### 키보드 접근성과 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 2.1 - 키보드 접근성](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-accessible)

**UAAG**

-   [지침 2.1 - 키보드 접근](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [지침 2.2 - 순차적 내비게이션](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [지침 2.3 - 직접(direct) 내비게이션과 활성화](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [지침 2.11 - 다른 입력 장치](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.3.1: 저작 도구 사용자 인터페이스에서 저작 기능에 키보드 접근성을 제공해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 키보드 접근성과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)

{% include excol.html type="end" %}

### 콘텐츠를 읽고 사용하는 데에 충분한 시간이 필요한 사용자 {#time}

콘텐츠를 읽고 사용하는 데에 더 많은 시간이 필요한 사람들이 있습니다. 예를 들어, 많은 사람들이 타이핑을 하고 지시 사항을 이해하고 컨트롤 요소들을 조작하는 등의 사이트에서 하려는 일을 완수하기 위해 더 많은 시간이 필요합니다. 

충분한 시간을 제공하는 방법들은 다음과 같습니다. :

-   필수적인 상황이 아니라면 시간 제한을 조정하여 연장하고 멈출 수 있어야 합니다.
-   스크롤되거나 깜빡이거나 움직이는 콘텐츠는 멈추거나 숨길 수 있어야 합니다.
-   필수적인 상황이 아니라면 방해 요소를 제거할 수 있어야 합니다.
-   데이터 손실 없이 세션이 만료되었을 때 권한이 다시 부여되어야 합니다.

{% include excol.html type="start" %}

#### 충분한 시간 제공과 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 2.2 - 충분한 시간 제공](https://www.w3.org/WAI/WCAG22/quickref/#enough-time)

**UAAG**

-   [지침 2.8 - 시간 독립적 상호작용(Time-independent interaction)](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [지침 2.10 - 시간 기반 미디어(Time-based media)](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.3.2: 저작 도구 사용자 인터페이스에서 저자에게 충분한 시간을 제공해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 충분한 시간 제공과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 발작이나 신체적 반응을 유발하지 않는 콘텐츠 {#safe}

특정 속도로 번쩍이는 콘텐츠나 패턴은 발작을 포함한 감광성 반응을 유발할 수 있습니다. 번쩍이는 콘텐츠는 전반적으로 피해야 하고, 알려진 위험을 일으키지 않는 선에서만 사용해야 합니다. 또한 애니메이션이나 움직이는 콘텐츠도 신체적 반응과 불편함을 줄 수 있습니다.

발작과 신체적 반응 유발을 피하는 방법은 다음과 같습니다. :

-   특정 속도로 번쩍이는 콘텐츠나 패턴은 지양해야 합니다.
-   번쩍이는 콘텐츠가 나타나기 전 사용자에게 경고하고 대안을 제공해야 합니다.
-   필수적인 것이 아니라면 애니메이션을 끌 수 있는 방법을 제공해야 합니다. 

{% include excol.html type="start" %}

#### 발작과 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 2.3 - 발작 예방](https://www.w3.org/WAI/WCAG22/quickref/#seizures-and-physical-reactions)

**UAAG**

-   [지침 2.9 - 번쩍임 예방](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.3.3: 저작 도구 사용자 인터페이스에서 저자가 발작을 유발하는 번쩍임을 피할 수 있도록 지원해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

### 쉽게 콘텐츠를 찾고 탐색하고 현재 위치를 알 수 있는 사용자 {#navigable}

구조화가 잘된 콘텐츠는 사용자가 자신의 위치를 알고 효과적으로 탐색하도록 합니다. 다음의 내용을 포함합니다. :

-   페이지는 명확한 제목을 갖고 있어야 하고, 섹션별 제목도 구조화가 잘 되어 있어야 합니다.
-   웹 페이지 세트 내에서 관련된 페이지를 찾을 수 있는 방법을 한 개 이상 제공해야 합니다.
-   웹 페이지 세트 내에서 현재 위치 정보를 사용자에게 제공해야 합니다.
-   여러 페이지에서 반복적으로 있는 콘텐츠는 뛰어 넘기 기능을 제공해야 합니다.
-   키보드 포커스는 시각적으로 인지가 가능해야 하고, 포커스 순서는 의미적인 순서와 일치해야 합니다.
-   링크의 목적은 명확하게 눈에 띄는 것이기에 해당 링크가 현재 보여질 때에도 명확해야 합니다.

위의 내용을 준수한다면 사용자의 필요와 선호에 따라 다양한 방법으로 웹 페이지를 탐색하는 데에 도움이 될 것입니다. 예를 들어, 특정 페이지에 접근하기 위해 메뉴 바와 같은 계층적 내비게이션을 사용하는 사람이 있는 반면, 사이트의 기능 찾기를 사용하는 사람들도 있습니다. 콘텐츠를 보는 사람도 있고, 듣는 사람이 있고, 보면서 듣는 사람도 있을 것입니다. 마우스나 키보드로 탐색하는 사람이 있고, 마우스와 키보드를 동시에 사용하는 사람들도 있습니다. 

{% include excol.html type="start" %}

#### 내비게이션과 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 2.4 - 탐색 가능](https://www.w3.org/WAI/WCAG22/quickref/#navigable)

**UAAG**

-   [지침 2.2 - 순차적 내비게이션](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [지침 2.3 - 직접(direct) 내비게이션과 활성화](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [지침 2.4 - 텍스트 검색](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [지침 2.5 - 구조적 내비게이이션](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [지침 2.7 - 그래픽 컨트롤](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.2.2: 저작 도구 사용자 인터페이스에서 편집창 화면을 프로그램적으로 조작 가능하도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [지침 A.3.4: 저작 도구 사용자 인터페이스에서 콘텐츠 구조 수정과 내비게이션을 쉽게 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [지침 A.3.5: 저작 도구 사용자 인터페이스에서 텍스트 검색 기능을 제공해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 내비게이션과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 키보드 외의 다양한 입력 장치를 사용할 수 있는 사용자 {#modalities}

키보드 외의 터치 활성화(touch activation), 음성 인식, 제스처과 같은 다양한 입력 장치들은 더 많은 사람들이 콘텐츠에 접근하기 쉽게 합니다. 하지만 모든 사람들이 이러한 입력 장치 전부를 동등한 수준으로 사용할 수 있는 것은 아닙니다. 특정 디자인적 고려가 이러한 입력 장치들의 이점을 더 극대화시킬 수 있습니다. 다음의 내용을 포함합니다. : 

-   능숙함과 미세한 움직임을 요구하는 제스처는 높은 수준의 능숙함을 요하지 않는 대안을 제공해야 합니다.
-   요소는 취소 기능을 제공하는 것과 같이 의도치 않은 활성화를 피할 수 있도록 디자인되어야 합니다.
-   음성으로 활성화되도록 하기 위해 라벨은 코드에서 상응하는 객체 이름과 맞게 작성해야 합니다.
-   움직임으로 활성화되는 기능은 사용자 인터페이스 요소를 통해서도 활성화되어야 합니다.
-   버튼, 링크와 같은 활성화 요소들은 터치로도 쉽게 활성화되도록 사이즈가 커야 합니다.

위의 내용을 준수한다면 다양한 장치를 사용하는 여러 사람들이 콘텐츠를 더 쉽게 사용할 수 있게 될 것입니다. 모바일 폰, 태블릿, 티켓 판매기와 같은 자동서비스단말기에서 사용되는 콘텐츠도 포함됩니다.

{% include excol.html type="start" id="" %}

#### 입력 장치와 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 2.5 - 입력 양식](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

#### 입력 장치와 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## 이해하기 쉬운 정보와 사용자 인터페이스 {#understandable}

### 읽고 이해하기 쉬운 텍스트 {#readable}

콘텐츠 저자는 텍스트를 음성을 읽어주는(text-to-speech) 경우를 포함하여 최대한 많은 사람들이 텍스트 콘텐츠를 읽고 이해하기 쉽도록 해야 합니다. 다음의 내용을 포함합니다. :

-   아랍어, 독일어, 한국어와 같은 웹 페이지의 주요 언어들을 구분해야 합니다.
-   텍스트 구문, 관용구나 웹 페이지의 여러 부분들의 언어를 구분해야 합니다.
-   생소한 단어, 구문, 관용구, 약어들에 대한 설명을 제공해야 합니다.
-   최대한 명확하고, 단순한 언어를 사용하거나 단순화한 버전을 제공해야 합니다.

위의 내용을 준수한다면 보조 기술을 포함한 소프트웨어가 텍스트 콘텐츠에 정확하게 접근할 수 있게 될 것입니다. 예를 들어, 이 필요조건들은 소프트웨어가 콘텐츠를 읽어주고, 페이지 요약본을 만들어주고, 기술 용어와 같은 생소한 단어들의 뜻을 제공하는 것을 쉽게 할 것입니다. 또한 복잡한 문장, 관용구, 단어를 이해하는 데에 어려움을 겪는 사람들에게 도움이 될 것입니다. 특히, 다양한 인지 장애를 가진 사람들에게 도움이 될 것입니다. 

{% include excol.html type="start" %}

#### 가독성과 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 3.1 - 가독성](https://www.w3.org/WAI/WCAG22/quickref/#readable)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.4.2: 저작 도구 사용자 인터페이스에서 모든 접근성 기능을 포함한 사용자 인터페이스를 문서화해야 한다.](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 가독성과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, 청력이 약한 온라인 수강생](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

### 예측 가능한 방식으로 보여지고 조작할 수 있는 콘텐츠 {#predictable}

대부분의 사람들은 예측 가능한 사용자 인터페이스에 의존하기에 일관성이 없는 행동이나 외관에 낯설어하고 산만하게 느낍니다. 더 예측 가능한 콘텐츠를 만드는 예시로 다음의 내용이 포합됩니다. :

-   여러 페이지에서 사용되는 내비게이션은 같은 위치에 있어야 합니다.
-   웹 페이지에서 반복되는 사용자 인터페이스 요소는 항상 같은 라벨을 갖고 있어야 합니다.
-   웹 페이지에서의 중요한 변화는 사용자의 동의가 있어야 합니다.

위의 내용을 준수한다면 사이트에서 제공된 내비게이션 방법과 기능을 더 빨리 배우고, 사용자의 목적과 선호에 맞게 사용할 수 있을 것입니다. 예를 들어, 일부 사람들은 키보드 내비게이션 사용성을 높이기 위해 그들이 자주 사용하는 기능을 각자만의 단축키로 지정할 수 있습니다. 또 다른 사람들은 특정 페이지에 접근하고 사이트에서의 과정을 완수하기 위해 과정을 기억해 둘 수 있습니다. 둘 다 예측 가능하고 일관된 기능성에 관련 있습니다.

{% include excol.html type="start" %}

#### 예측 가능성과 관련된 접근성 필요 조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 3.2 - 예측 가능성](https://www.w3.org/WAI/WCAG22/quickref/#predictable)

**UAAG**

-   [지침 3.3 - 예측 가능성](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.2.2: 저작 도구 사용자 인터페이스에서 편집창 화면을 프로그램적으로 조작 가능하도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [지침 A.4.2: 저작 도구 사용자 인터페이스에서 모든 접근성 기능을 포함한 사용자 인터페이스를 문서화해야 한다.](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 예측 가능성과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### 실수를 피하고 수정할 수 있는 기능을 제공받는 사용자 {#tolerant}

사람들은 폼 요소와 다른 상호작용 요소들에 많은 어려움을 느끼고 그 결과 실수로 이어지게 됩니다. 사용자가 실수를 피하고 수정할 수 있도록 하는 예시로 다음의 내용이 포합됩니다. :

-   지시 사항, 에러 메시지, 수정을 위한 내용을 포함해야 합니다.
-   맥락 민감성(context-sensitive)은 더 복잡한 기능과 상호작용을 돕습니다.
-   리뷰하고 수정할 기회와 필요하다면 제출한 것을 회수할 수 있는 기회를 제공해야 합니다.

위의 내용을 준수한다면 콘텐츠를 보거나 들을 수 없는 사용자나 복잡한 관계, 순서, 단서들을 인지하지 못하는 사용자들에게 도움이 될 것입니다. 또한 기능을 이해하지 못하고 혼란스러워하고 잊어버리는 사용자나 어떠한 이유로 폼 요소를 사용하는 데에 실수를 한 사용자에게도 도움이 될 것입니다. 

{% include excol.html type="start" %}

#### 입력 도움과 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 3.3 - 입력 도움](https://www.w3.org/WAI/WCAG22/quickref/#input-assistance)

**UAAG**

-   [지침 3.1 - 실수 피하기](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [지침 A.2.2: 저작 도구 사용자 인터페이스에서 편집창 화면을 프로그램적으로 조작 가능하도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [지침 A.4.1: 저작 도구 사용자 인터페이스에서 사용자가 실수를 피하고 수정할 수 있도록 해야 한다.](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 입력 도움과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 온라인 쇼핑을 하는 색맹인](/people-use-web/user-stories/archived/#shopper)
-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, 저시력, 수전증, 경도 건망증이 있는 퇴직자](/people-use-web/user-stories/archived/#retiree)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## 견고한 콘텐츠와 정확한 설명 {#robust}

### 현재와 미래 사용자 도구와 호환 가능한 콘텐츠 {#compatible}

견고한 콘텐츠는 다른 브라우저, 보조 기술, 다른 사용자 에이전트에서도 사용이 가능합니다. 사용되는 예시로 다음이 포함합니다. :

-   유효성 보장과 같이 마크업이 정확하게 해석될 수 있도록 해야 합니다.
-   비표준 사용자 인터페이스 요소를 위해 name, role, value를 제공해야 합니다.

위의 내용을 준수한다면 현재와 미래 사용자 에이전트, 보조 기술의 호환성을 높일 수 있습니다. 특히 보조 기술이 콘텐츠에 정확하게 접근하고, 다양한 방법으로 운용할 수 있도록 할 수 있습니다. 스크립트로 된 비표준 버튼, 인풋 필드와 다른 컨트롤 요소들을 포함합니다.

{% include excol.html type="start" %}

#### 호환성과 관련된 접근성 필요조건 (기술 명세 링크)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [지침 4.1 - 호환성](https://www.w3.org/WAI/WCAG22/quickref/#compatible)

**UAAG**

-   [지침 2.6 - 환경설정](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [지침 4.1 - 보조 기술](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [지침 5.1 - 명세 준수(Follow specifications)](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG**

-   [원칙 A.1: 저작 도구 사용자 인터페이스는 해당되는 접근성 지침을 따른다.](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Part B. 접근 가능한 콘텐츠 생산을 지원해야 한다.](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### 호환성과 관련된 이야기
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, 온라인 쇼핑을 하는 색맹인](/people-use-web/user-stories/archived/#shopper)
-   [Alex, 반복성 긴장 장애가 있는 리포터](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, 시각장애가 있는 고위 간부](/people-use-web/user-stories/archived/#accountant)
-   [Preety, 주의력결핍과다활동장애와 난독증이 있는 중학생](/people-use-web/user-stories/archived/#classroomstudent)
-   [Luis, 다운증후군이 있는 슈퍼마켓 직원](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, 시청각장애가 있는 10대](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

{% include excol.html type="all" %}