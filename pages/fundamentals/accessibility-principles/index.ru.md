---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Принципы доступности
nav_title: "Принципы доступности"
lang: ru
last_updated: 2019-05-10   # Keep the date of the English version
description: Обзор основных требований веб-доступности для вебсайтов, веб приложений, браузеров и других инструментов.
teaser_text: The Accessibility Principles page introduces some of the web accessibility requirements for websites, web applications, browsers, and other tools. It provides references to the international standards from W3C Web Accessibility Initiative (WAI) and to stories of web users.

translation:
  last_updated: 2023-12-06  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: 
- name: "Daniel Novichkov"

github:
  label: wai-accessibility-principles

permalink: /fundamentals/accessibility-principles/ru   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-principles/   # Do not change this

image: /content-images/accessibility-principles/social.png
changelog: /fundamentals/accessibility-principles/changelog/   # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Редакторы:</strong> <a href="https://www.w3.org/People/shadi/">Shadi Abou Zahra</a>. <a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">Благодарности</a>.</p>
  <p>Разработано Education and Outreach Working Group (<a href="https//www.w3.org/WAI/EO/">EOWG</a>). Ранее разработано <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">WAI-AGE Task Force</a>, при поддержке <a href="https://www.w3.org/WAI/WAI-AGE/">WAI-AGE Project</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Summary" class="full" %}
{:/}

На этой странице представлены некоторые требования доступности для веб-сайтов, веб-приложений, браузеров и других инструментов. В ней приведены ссылки на международные стандарты W3C Web Accessibility Initiative (WAI) и [истории интернет пользователей](/people-use-web/user-stories/).

**Примечание:** Этот текст не является полным списком требований доступности.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Содержание страницы" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


{% include excol.html type="all" %}

## Стандарты веб-доступности {#standards}

Веб-доступность состоит  из нескольких компонентов, которые взаимодействуют друг с другом, включая:

-   **Веб контент**{:#webcontent} - относится к любой части веб-сайта, включая текст, изображения, формы, мультимедиа, а также любой код разметки, скрипты, приложения и тому подобное. 
-   **Пользовательские агенты**{:#useragents} - программное обеспечение, которое используют пользователи для доступа к веб-контенту, включая графические десктопные браузеры, голосовые браузеры, браузеры мобильных телефонов, проигрыватели мультимедиа, плагины и некоторые [вспомогательные технологии](/people-use-web/tools-techniques/#at "definition").
-   **Инструменты разработки**{:#authoringtools} - программное обеспечение или сервисы, которые используются для создания веб-контента, включая редакторы кода, инструменты преобразования документов, системы управления контентом, блоги, сценарии баз данных и другие инструменты.

{% include excol.html type="start" %}

### Подробнее о стандартах веб-доступности
{:.no_toc}

{% include excol.html type="middle" %}

Эти компоненты взаимосвязаны и поддерживают друг друга. Например, **веб-контент** должен включать текстовые версии изображений. Эта информация должна обрабатываться **веб-браузерами** и затем передаваться **вспомогательным технологиям**, например программам экранного чтения. Для создания текстовых версий, авторам нужны **инструменты разработки**, которые их поддерживают. Более подробная информация представлена в [Основные компоненты веб-доступности](/fundamentals/components/).

Стандарты играют жизненно важную роль в определении требований доступности для каждого из этих компонентов. Некоторые требования доступности легко выполнить, но понимание основ того, как люди с ограниченными возможностями используют Интернет, помогает реализовать их более эффективно и действенно. Некоторые аспекты доступности требуют дополнительных технических навыков или глубоких знаний о том, как люди используют Интернет. В любом случае [вовлечение пользователей на раннем этапе и во всех ваших веб-проектах](/test-evaluate/involving-users/) сделает вашу работу лучше и проще.
Инициатива W3C по веб-доступности (WAI) предоставляет набор руководящих принципов, которые признаны во всем мире в качестве стандарта веб-доступности. Они включают:

-   **[Web Content Accessibility Guidelines (WCAG)](/standards-guidelines/wcag/)**
-   **[User Agent Accessibility Guidelines (UAAG)](/standards-guidelines/uaag/)**
-   **[Authoring Tool Accessibility Guidelines (ATAG)](/standards-guidelines/atag/)**

Также имеется спецификация WAI для **[Accessible Rich Internet Applications (WAI-ARIA)](/standards-guidelines/aria/)**, которые описывают динамический контент и расширенные элементы управления пользовательским интерфейсом, разработанные с помощью Ajax, JavaScript и похожими веб-технологиями. и затем передаваться вспомогательным технологиям, например программам экранного чтения. 

{% include excol.html type="end" %}

## Воспринимаемость информации и пользовательского интерфейса {#perceivable}

### Текстовые версии для нетекстового контента {#alternatives}

Текстовые версии являются эквивалентами нетекстового контента. Примеры:

-   Короткие эквиваленты изображений, включая значки, кнопки и графику
-   Описание данных, представленных на графиках, диаграммах и иллюстрациях
-   Краткие описания нетекстового контента, такого как аудио и видео файлы
-   Ярлыки для элементов управления, ввода и других компонентов пользовательского интерфейса

Текстовые версии описывают цель изображения или функции для обеспечения эквивалентного пользовательского взаимодействия. Например, подходящей текстовой альтернативой для кнопки поиска будет "*поиск*", а не "*увеличительная линза*".

Текстовые версии могут быть представлены различными способами. 
Например, они могут зачитываться вслух пользователям, которые не могут видеть экран или испытывают трудности при чтении, при значительном увеличении размеров текста или отображении его на устройствах Брайля. 
Текстовые версии служат метками элементов управления и функций, помогая  управлять контентом с клавиатуры или голосом (голосовой ввод). 
Они служат метками аудио, видео и других файлов, а также приложений, встроенных в веб-сайты.

{% include excol.html type="start" %}

#### Требования доступности текстовых версий (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.1 - Text Alternatives](https://www.w3.org/WAI/WCAG22/quickref/#text-alternatives)

**UAAG**

-   [Guideline 1.1 - Alternative content](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.1: (For the authoring tool user interface) Make alternative content available to authors](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### Истории про текстовые версии
{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Martine, online student who is hard of hearing](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Субтитры и другие альтернативы для мультимедиа {#captions}

Альтернативные версии нужны людям, которые не могут слышать аудио или видеть видео контент. Например:

-   Текстовые расшифровки и субтитры для аудиоконтента, например, для записей радиоинтервью
-   Аудиоописание, которое описывает важные визуальные детали видеоконтента
-   Перевод аудиоконтента и звуков на жестовый язык для передачи звукового сопровождения

Хорошо написанные расшифровки текста, содержащие корректную последовательность любой звуковой или визуальной информации, обеспечивают базовый уровень доступности и облегчают создание субтитров и аудиоописаний.
{% include excol.html type="start" %}

#### Требования доступности к мультимедиа (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.2 - Time-based Media](https://www.w3.org/WAI/WCAG22/quickref/#time-based-media)

**UAAG**

-   [Guideline 1.1 - Alternative content](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.1: (For the authoring tool user interface) Make alternative content available to authors](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### Истории про мультимедиа {#stories-related-to-multimedia}
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, online student who is hard of hearing](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Контент может быть представлен разными способами {#adaptable}

Пользователи могут менять способы представления контента, для этого необходимо чтобы:
-   Заголовки, списки, таблицы, поля ввода и структура контента были корректно размечены
-   Последовательность информации или инструкций не зависела от способа представления
-   Браузеры и вспомогательные технологии давали возможность настройки изменения представления.

Выполнение этого требования позволит корректно зачитывать контент вслух, увеличивать или  адаптировать контент иным способом в соответствии с потребностями и предпочтениями разных людей. Например, контент может быть представлен с использованием пользовательских цветовых комбинаций, размера текста или других стилей для облегчения чтения. Это требование также облегчает другие формы изменения представления контента, включая автоматическое создание контуров страниц и создание резюме страниц, для упрощения ознакомления с контентом и фокусировкой на его конкретных частях.

{% include excol.html type="start" %}

#### Требования доступности к адаптивности (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.3 - Adaptable](https://www.w3.org/WAI/WCAG22/quickref/#adaptable)

**UAAG**

-   [Guideline 1.4 - Text configuration](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Guideline 1.5 - Volume configuration](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Guideline 1.6 - Synthesized speech configuration](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Guideline 1.7 - User style sheet configuration](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Guideline 1.9 - Alternative views](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Guideline 1.10 - Element information](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про адаптивность
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, online shopper with color blindness](/people-use-web/user-stories/archived/#shopper)
-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Контент легче видеть и слышать {#distinguishable}

Контрастный контент легче видеть и слышать. В таком контенте:

-   Цвет не используется как единственный способ передачи информации или идентификации контента
-   Комбинации цветов переднего плана и фона по умолчанию обеспечивают достаточный контраст
-   Никакая информация не теряется, если пользователь увеличивает размер текста до 400% или меняет межстрочный интервал
-   Текст адаптируется для корректного отображения на уменьшенных экранах («области просмотра») и при его увеличении
-   При изображении текста в графическом виде размер можно изменить, заменить его текстовой версией или по возможности не использовать изображение текста
-   Пользователи могут поставить на паузу, выключить или регулировать громкость аудио, воспроизводимого на веб-сайте
-   Фоновый звук тихий или его можно отключить, чтобы избежать помех или отвлечения пользователя

Выполнение этого требования помогает отделить передний план от фона, чтобы выделить важную информацию. Это поможет как использующим, так и не использующим вспомогательные технологии пользователям избегать помех аудио или визуального контента, проигрываемого в фоновом режиме. 
Например, многие пользователи с дальтонизмом не используют какие-либо специальные инструменты, полагаясь на дизайн с достаточным цветовым контрастом между текстом и окружающим его фоном. Автоматически воспроизводимый аудиоконтент может мешать пользователям функции речевого воспроизведения текста или [вспомогательных устройств прослушивания (ALD)](/teach-advocate/accessible-presentations/#ald "definition").

{% include excol.html type="start" %}

#### Требования доступности к контрастности (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 1.4 - Distinguishable](https://www.w3.org/WAI/WCAG22/quickref/#distinguishable)

**UAAG**

-   [Guideline 1.3 - Highlighting](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [Guideline 1.4 - Text configuration](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Guideline 1.5 - Volume configuration](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Guideline 1.6 - Synthesized speech configuration](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Guideline 1.7 - User style sheet configuration](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Guideline 1.8 - Orientation in viewports](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [Guideline 1.9 - Alternative views](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Guideline 1.10 - Element information](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure that previews are at least as accessible as in-market user agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про контрастность
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, online shopper with color blindness](/people-use-web/user-stories/archived/#shopper)
-   [Martine, online student who is hard of hearing](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

## Управляемость пользовательского интерфейса и навигации {#operable}

### Вся функциональность доступна с клавиатуры {#keyboard}

Многие люди используют клавиатуру, а не мышь для взаимодействия с интернетом. Для этого им необходим доступ с клавиатуры ко всем функциям, включая элементы управления форм, ввода и других компонентов пользовательского интерфейса.
Доступность с клавиатуры подразумевает:

-   Все функции, доступные с помощью мыши, равно доступны и с клавиатуры
-   Фокус клавиатуры не блокируется какой-либо частью контента
-   Веб-браузеры, инструменты разработки и другие инструменты предоставляют поддержку управления с клавиатуры.

Выполнение этого требования помогает пользователям клавиатуры, включая людей, использующих альтернативные клавиатуры, например, эргономические, экранные клавиатуры или переключающие устройства. 
Это также поможет пользователям функции распознавания голоса (голосового ввода) управлять веб-сайтами и наговаривать текст через интерфейс клавиатуры.

{% include excol.html type="start" %}

#### Требования к доступности управления с клавиатуры (ссылки на технические характеристики)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.1 - Keyboard accessible](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-accessible)

**UAAG**

-   [Guideline 2.1 - Keyboard access](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [Guideline 2.2 - Sequential navigation](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Guideline 2.3 - Direct navigation and activation](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Guideline 2.11 - Other Input Devices](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.1: (For the authoring tool user interface) Provide keyboard access to authoring features](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про доступность управления с клавиатуры
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)

{% include excol.html type="end" %}

### Пользователям даётся достаточно времени, для ознакомления и использования контента {#time}

Некоторым людям нужно больше времени, чтобы ознакомиться с контентом и  использовать его. Например, кому-то требуется больше времени для набора текста, понимания инструкций, использования элементов управления или  выполнения иных своих задач на веб-сайте.

Примеры предоставления достаточного времени подразумевают возможности:

-   Остановить, продлить или изменить временные ограничения, за исключением случаев, когда такое ограничение необходимо
-   Приостановить, остановить или скрыть перемещение, мерцание или прокрутку содержимого
-   Отложить или подавить прерывания за исключением случаев, когда они  необходимы
-   Повторно войти по истечении сеанса без потери ранее введённых данных
{% include excol.html type="start" %}

#### Требования к доступности, связанные с временными ограничениями (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.2 - Enough time](https://www.w3.org/WAI/WCAG22/quickref/#enough-time)

**UAAG**

-   [Guideline 2.8 - Time-independent interaction](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [Guideline 2.10 - Time-based media](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.2: (For the authoring tool user interface) Provide authors with enough time](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про ограничения времени
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Контент не вызывает судорог и иных физических реакций {#safe}

Контент, мерцающий с определённой частотой или в определённом ритме, может вызвать фоточувствительные реакции, включая судороги. В идеале следует избегать мерцания контента или использовать его только так, чтобы не создавать таких рисков. Анимация и движущийся контент могут также вызывать дискомфорт и физические реакции.

Примеры как избегать судорог и физических реакций:

-   Не используйте контент, который мерцает с определённой частотой и в определённом ритме
-   Предупреждайте пользователей перед отображением мерцающего контента и предлагайте альтернативы
-   Предоставьте возможность отключения анимации, если она не является необходимой


{% include excol.html type="start" %}

#### Требования доступности, относящиеся к приступам (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.3 - Seizures](https://www.w3.org/WAI/WCAG22/quickref/#seizures-and-physical-reactions)

**UAAG**

-   [Guideline 2.9 - Flashing](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.3: (For the authoring tool user interface) Help authors avoid flashing that could cause seizures](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

### Пользователи могут легко перемещаться, находить нужный контент и определять, где они находятся {#navigable}

Хорошо организованный контент помогает пользователям ориентироваться и эффективно перемещаться по нему. Такой контент подразумевает: 

-   На страницах есть чёткие заголовки, и они организованы с использованием описательных заголовков разделов
-   Пользователям доступно несколько способов найти нужные страницы среди других веб-страниц
-   Пользователям доступна информация об их текущем местоположении в наборе связанных страниц
-   Пользователям доступна возможность обойти блоки повторяющегося на нескольких страницах контента
-   Фокус клавиатуры очевиден, порядок его перемещения понятен и последователен 
-   Цель ссылки очевидна, в идеале, даже если она просматривается пользователем в отрыве от контекста

Выполнение этого требования помогает пользователям перемещаться по веб-страницам различными способами в зависимости от их потребностей и предпочтений. 
Например, одни пользователи для поиска нужных им веб-страниц перемещаются по структуре элементов навигации, таких как строки меню, тогда как другие используют функцию поиска на веб-сайте. 
Одни пользователи могут видеть контент, другие могут его слышать, или слышать и видеть  одновременно. 
Некоторые пользователи могут работать с контентом при помощи только мыши или только клавиатуры, другие могут использовать и то, и другое.

{% include excol.html type="start" %}

#### Требования доступности к навигации (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.4 - Navigable](https://www.w3.org/WAI/WCAG22/quickref/#navigable)

**UAAG**

-   [Guideline 2.2 - Sequential navigation](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Guideline 2.3 - Direct navigation and activation](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Guideline 2.4 - Text search](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [Guideline 2.5 - Structural navigation](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [Guideline 2.7 - Graphical controls](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.4: (For the authoring tool user interface) Enhance navigation and editing via content structure](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [Guideline A.3.5: (For the authoring tool user interface) Provide text search of the content](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про доступность навигации
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Пользователи могут использовать различные способы ввода кроме клавиатуры {#modalities}

Способы ввода отличные от клавиатуры, такие как активация касанием, распознавание голоса (речевой ввод) и жесты, упрощают работу с контентом для многих людей. Не все могут использовать каждый из этих способов в равной степени хорошо, а для некоторых они вообще недоступны. Учёт особенных требований к дизайну облегчит использование этих способов ввода. Это включает в себя:

-   Жесты, требующие высокой ловкости или точности движения, могут быть заменены на менее точные
-   Компоненты разработаны так, чтобы можно было избегать их случайной активации, например, доступна функция отмены последнего действия
-   Ярлыки, отображаемые пользователям, соответствуют названиям объектов в коде для поддержки активации голосом
-   Функциональность, активируемая движением, может быть активирована и  компонентами пользовательского интерфейса
-   Кнопки, ссылки и другие активные компоненты имеют достаточный  размер для их активации касанием. Выполнение этого требования упрощает использование контента для многих людей с различными особенностями, использующих разные устройства. Это и поддержка контента, используемого на мобильных телефонах, планшетных компьютерах и терминалах самообслуживания, таких как билетные автоматы.

{% include excol.html type="start" id="" %}

#### Требования доступности способов ввода (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 2.5 - Input Modalities](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

#### Истории про доступность ввода
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## Понятные информация и пользовательский интерфейс {#understandable} 

### Текст легко читать и понимать {#readable}

Авторы контента должны позаботиться о том, чтобы их текст было легко читать и понимать максимально широкой аудитории, в том числе, когда он зачитывается вслух с помощью преобразования текста в речь. Это включает в себя:

-   Определение основного языка веб-страницы, например арабского, голландского или корейского
-   Определение языка параграфов, фраз или других частей веб-страницы
-   Предоставление определений для любых необычных слов, фраз, идиом и сокращений
-   Использование самого ясного и простого языка или создание упрощённых версий текста

Выполнение этого требования поможет программному обеспечению, включая вспомогательные технологии, правильно обработать текстовый контент. 
Это требование поможет программному обеспечению зачитывать контент вслух, создавать резюме страниц и давать определения для редко употребляемых слов, таких как технический жаргон. 
Это также поможет людям, которым трудно понимать сложные предложения, фразы и слова. 
В частности, это поможет людям с различными типами когнитивных нарушений.
{% include excol.html type="start" %}

#### Требования доступности лёгкости чтения (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 3.1 - Readable](https://www.w3.org/WAI/WCAG22/quickref/#readable)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.4.2: (For the authoring tool user interface) Document the user interface, including all accessibility features](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про лёгкость прочтения
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, online student who is hard of hearing](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

### Контент загружается и работает предсказуемым образом {#predictable}

Пользователи ожидают определённого поведения пользовательских интерфейсов; нестандартный вид или поведение интерфейса их отвлекает или даже дезориентирует. Примеры повышения предсказуемости контента:

-   Механизмы навигации, повторяющиеся на нескольких страницах, всегда расположены на одном и том же месте
-   Компоненты пользовательского интерфейса, повторяющиеся на веб-страницах, всегда имеют одинаковые ярлыки.
-   Важные изменения на веб-странице происходят только с согласия пользователя

Выполнение этого требования помогает людям быстро изучить функциональные возможности и механизмы навигации, представленные на веб-сайте, и управлять ими в соответствии со своими конкретными потребностями и предпочтениями. Например, некоторые пользователи назначают свои сочетания клавиш для функций, которыми они часто пользуются, чтобы упростить навигацию с помощью клавиатуры. 
Другие запоминают шаги для перехода на определённые страницы или завершения процессов на веб-сайте. И те и другие рассчитывают на предсказуемое и последовательное поведение контента.

{% include excol.html type="start" %}

#### Требования доступности к предсказуемости (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 3.2 - Predictable](https://www.w3.org/WAI/WCAG22/quickref/#predictable)

**UAAG**

-   [Guideline 3.3 - Predictable](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.4.2: (For the authoring tool user interface) Document the user interface, including all accessibility features](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про предсказуемость
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Пользовательские ошибки предупреждаются и исправляются {#tolerant}

Формы и другие элементы пользовательского взаимодействия могут сбивать с толку или затруднять работу многих людей, и в результате чего они с большей вероятностью могут совершать ошибки. Примерами того, как помочь пользователям избегать и исправлять ошибки, могут служить:

-   Информативные инструкции, сообщения об ошибках и предложения по исправлению
-   Контекстно-зависимая справка для сложных функций и взаимодействия
-   Возможность просмотреть, исправить или отменить введённую информацию при необходимости

Выполнение этого требования поможет людям, которые не видят и не слышат контент, а потому могут не распознавать неявные связи, последовательности и другие указания. Это также поможет людям, которые не понимают функциональность, дезориентированы или сбиты с толку, забывают или делают ошибки по любой другой причине при использовании форм и иных элементов взаимодействия.

{% include excol.html type="start" %}

#### Требования доступности помощи при вводе (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 3.3 - Input assistance](https://www.w3.org/WAI/WCAG22/quickref/#input-assistance)

**UAAG**

-   [Guideline 3.1 - Mistakes](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure that editing-view presentation can be programmatically determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.4.1: (For the authoring tool user interface) Help authors avoid and correct mistakes](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории про доступность помощи при вводе
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, online shopper with color blindness](/people-use-web/user-stories/archived/#shopper)
-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retiree with low vision, hand tremor, and mild short-term memory loss](/people-use-web/user-stories/archived/#retiree)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## Надёжный контент и надёжная интерпретация {#robust}

### Контент совместим с имеющимися и будущими пользовательскими инструментами {#compatible}

Надёжный контент совместим с различными браузерами, вспомогательными технологиями и другими пользовательскими агентами. Примеры, как можно этого достичь, включают:

-   Обеспечение надёжной интерпретации разметки, например, через проверку её валидности
-   Обозначение названия, роли и значения для нестандартных компонентов пользовательского интерфейса

Выполнение этого требования помогает улучшить совместимость с существующими и будущими пользовательскими агентами, включая вспомогательные технологии. В частности, оно позволяет вспомогательным технологиям корректно обрабатывать контент и представлять или управлять им различными способами. Сюда входят нестандартные (скриптовые) кнопки, поля ввода и другие элементы управления.

{% include excol.html type="start" %}

#### Требования доступности к совместимости (ссылки на техническую спецификацию)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Guideline 4.1 - Compatible](https://www.w3.org/WAI/WCAG22/quickref/#compatible)

**UAAG**

-   [Guideline 2.6 - Preference settings](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [Guideline 4.1 - Assistive technology](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [Guideline 5.1 - Follow specifications](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable accessibility guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Part B. Support the production of accessible content](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Истории  про совместимость
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, online shopper with color blindness](/people-use-web/user-stories/archived/#shopper)
-   [Alex, reporter with repetitive stress injury](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, senior staff member who is blind](/people-use-web/user-stories/archived/#accountant)
-   [Preety, middle school student with Attention Deficit Hyperactivity Disorder and Dyslexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Luis, supermarket assistant with Down syndrome](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, teenager who is deaf and blind](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

{% include excol.html type="all" %}

