---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "W3C의 모바일 접근성"
nav_title: "W3C의 모바일 접근성"
lang: ko
last_updated: 2021-05-17  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Yong Ui Lee"
    link: "https://twitter.com/yongui9"
contributors:
  - name: "Jun Ho Lee"

github:
  label: wai-mobile

permalink: /standards-guidelines/mobile/ko    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/mobile/  # Do not change this

changelog: /standards-guidelines/mobile/changelog/  # Do not change this
feedbackmail: wai@w3.org

# In the footer below:
# Do not translate or change CHANGELOG.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>날짜:</strong> 2021년 5월 14일 업데이트됨. 첫 발행일은 2008년 1월입니다. CHANGELOG.</p>
  <p><strong>편집자:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. 기여자: <a href="https://www.w3.org/People/Brewer/">Judy Brewer</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

- **모바일 접근성은 현재 버전의 W3C WAI 접근성 표준/지침으로 지원가능합니다.** 별도의 모바일 접근성 지침은 없습니다.
- W3C는 모바일 접근성에 더 초점을 맞춘 지침과 업데이트한 필요조건 관련 작업을 하고 있습니다.
- **WAI의 [모바일 접근성팀](https://www.w3.org/WAI/GL/mobile-a11y-tf/)의 작업 내용:**
  - [모바일 접근성 : WCAG 2.0와 이외의 W3C/WAI 지침을 모바일에 적용하는 방법](https://www.w3.org/TR/mobile-accessibility-mapping/)
  - WCAG 2 성공 기준과 기술
  - 미래 W3C 표준에 모바일 접근성 통합하기

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" %}
{:/}

- TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## "모바일" 이상으로 {#intro}

"모바일 접근성"은 장애가 있는 사용자가 모바일 폰이나 다른 장치들에서 어플리케이션이나 웹 사이트에 접근 가능성을 높이도록 만드는 것을 가리킵니다. 이 영역에서 WAI의 일은 웹과 상호작용하기 위해 다양한 장치를 사용하는 사람들의 접근성 문제를 다루는 것입니다. 다음의 장치를 포함합니다. :

- 모바일 폰이나 태블릿
- 디지털 TV
- 스마트워치 같은 웨어러블 기기
- 자동차 계기판이나 비행기 좌석 뒷편의 장치
- 가전제품 장치
- 다른 "IoT(사물 인터넷)"

다양한 이슈들을 다룹니다. :

- 터치스크린
- 작은 스크린 크기
- 압력 센서로 동작하는 3D 터치와 음성과 같은 다양한 입력 장치
- 밝은 햇빛 아래 같은 다양한 상황속 기기 사용
- 등등

## W3C WAI가 다루는 모바일 접근성 {#covered}

**WAI의 접근성 표준들은 모바일 접근성을 다룹니다**:

- **웹 콘텐츠** 접근성 지침 ([WCAG](/standards-guidelines/wcag/))은 모바일 기기에서 사용되는 콘텐츠를 포함한 웹 어플리케이션과 웹 페이지를 포함합니다.
  - WCAG 2.0을 모바일 웹 콘텐츠, 모바일 웹앱, 네이티브 앱, 네이티브 앱 속 웹 콘텐츠를 사용하는 하이브리드 앱에 적용하는 방법을 알고 싶다면 [모바일 접근성: WCAG 2.0와 이외의 W3C/WAI 지침을 모바일에 적용하는 방법](https://www.w3.org/TR/mobile-accessibility-mapping/)을 참고하세요.
  - 모바일 앱을 포함하는 더 많은 기본 정보를 얻고 싶다면 [WCAG2ICT: 웹이 아닌 정보통신기술에 WCAG 2.0 적용하기](/standards-guidelines/wcag/non-web-ict/)를 참고하세요.
  - 2018년에 발행된 WCAG 2.1은 모바일 접근성을 다루는 새로운 필요조건("성공 기준")을 포함합니다. 이 내용은 [[WCAG 2.1의 새로운 내용 알아보기]](/standards-guidelines/wcag/new-in-21/)를 참고하세요.
- **사용자 에이전트** 접근성 지침 ([UAAG](/standards-guidelines/uaag/))은 웹 브라우저와 모바일 브라우저를 포함한 다른 "사용자 에이전트"를 다룹니다.
  - UAAG를 준수하는 웹 브라우저가 모바일 웹을 사용하는 장애가 있는 사용자에게 제공하는 이점에 대한 내용은 [UAAG에서의 웹 접근성 예시](https://www.w3.org/TR/IMPLEMENTING-UAAG20/mobile)를 참고하세요.
  - 더 많은 이슈들을 확인하고 싶으시다면 [모바일 폰에 UAAG 적용하기](https://www.w3.org/WAI/UA/work/wiki/Applying_UAAG_to_Mobile_Phones)를 참고하세요.
- **저작 도구** 접근성 지침 ([ATAG](/standards-guidelines/atag/))은 모바일을 포함한 어플리케이션과 웹 페이지를 만드는 데에 사용되는 소프트웨어를 포함합니다.
- **[WAI-ARIA](/standards-guidelines/aria/)** (접근성 리치 인터넷 어플리케이션)는 웹 콘텐츠(특히 다양한 콘테츠와 고도의 인터페이스 컨트롤)가 더 접근 가능하게 만드는 방법을 정의합니다. 웹 어플리케이션과 모바일 기기의 웹 사이트에 접근하는 데에 적용됩니다.

**W3C는 모바일 접근성을 다룹니다.** WAI는 핵심 W3C 기술들이 모바일 웹에 필수적인 요소들을 포함한 접근성을 지원하도록 합니다. 모든 W3C의 작업은 WAI의 접근 가능한 플랫폼 아키텍쳐 실무 그룹([APA](https://www.w3.org/WAI/APA/))에서 접근성관련 검토를 합니다.

W3C는 [모바일 웹 어플리케이션 모범 사례](https://www.w3.org/TR/mwabp/), [모바일 웹 모범 사례](https://www.w3.org/TR/mobile-bp/)와 같이 모바일 관련 작업을 합니다. W3C가 만든 웹 앱의 효용성을 높이는 기술과 모바일에 적용 방법을 요약한 내용은 [모바일 웹 어플리케이션 표준](https://www.w3.org/Mobile/mobile-web-app-state/)을 참고하세요.

## 앞으로의 내용을 알고 싶다면 {#updates}

W3C WAI의 모바일 접근성과 관련된 앞으로의 활동을 알고자 하신다면 다음 링크를 참고해주세요. : [[WAI소식 받기]](/news/subscribe/).

## 참여하기 {#involved}

기본 정보들은 [[WAI에 참여하기]](/about/participating/)에서 확인 가능합니다.

WAI의 모바일 접근성과 관련된 작업 대부분은 [모바일 접근성 팀](https://www.w3.org/WAI/GL/mobile-a11y-tf/)에서 진행합니다. 만약 WAI의 모바일 접근성 관련 작업에 참여하고 싶으시다면, 여러분의 관심 분야와 참여 가능 시간을 WAI 직원(wai@w3.org)을 참조에 추가하여 담당자 [Kim Patch와 Kathy Wahlbin](mailto:kathy@interactiveaccessibility.com,Kim@redstartsystems.com?cc=wai@w3.org,ran@w3.org&subject=Mobile%20Accessibility%20Task%20Force%20Enquiry)에게 e-mail을 보내주세요.

## W3C와 WAI에 대해 {#about}

월드 와이드 웹 컨소시움 (W3C)은 웹 표준을 만들기 위해 조직, 직원, 대중이 일원인 국제적 협력단입니다. W3C는 웹의 장기 성장을 위해 만든 지침과 웹 표준 제작을 통해 주요 목적을 수행하고 있습니다. 더 자세한 내용을 알고 싶으시다면, 다음을 참고해 주세요. : [W3C에 대해](https://www.w3.org/about/).

W3C의 웹 접근성 이니셔티브(WAI)는 장애가 있는 사용자가 접근 가능한 웹을 만들기 위한 전략, 지침, 자원들을 만들고자 전 세계에서 개인과 조직을 모았습니다. 더 자세한 내용을 알고 싶으시다면, 다음을 참고해 주세요. : [WAI 웹 사이트](https://www.w3.org/WAI/).
