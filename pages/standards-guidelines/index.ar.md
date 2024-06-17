---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.

title: نبذة عن معيار الاتحاد العالمي للويب لإمكانية الوصول  # Do not translate "title:". Do translate the text after "title:".
nav_title: "معايير/إرشادات" # A short title that is used in the navigation

lang: ar   # Change "en" to the translated language shortcode from https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry

last_updated: 2020-10-26   # Put the date of this translation YYYY-MM-DD (with month in the middle)
translators: 
- name: " الاتحاد السعودي للأمن السيبراني والبرمجة والدرونز "   # Replace @@ with translator name
- name: "محمد سليم"   # Replace @@ with name, or delete this line if not multiple translators
contributors:
- name: "محمد الموسوي"   # Replace @@ with contributor name, or delete this line if none
- name: "مريم نصيب"   # Replace @@ with name, or delete this line if not multiple contributors

ref: /standards-guidelines/   # Do not change this
github:
  label: wai-standards-guidelines
permalink: /standards-guidelines/ar   # Add the language shortcode to the end; for example /standards-guidelines/fr
feedbackmail: wai@w3.org

footer: >   # Translate all the words below, including "Date:" and "Editor:". Do not change these dates.
  <p><strong>التاريخ:</strong> تم التحديث في 13 مارس 2019.</p>
  <p><strong>محرر:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p> تم تطويره بمساهمة فريق التعليم و التوعية (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="الملخص" class="full" %}
{:/}

هذي الصفحة تقدم إرشادات و معايير أخرى متعلقة بإمكانية الوصول للويب.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="محتوى الصفحة" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## المقدمة {#intro}

يقوم اتحاد الويب العالمي World Wide Web Consortium (W3C) بتطوير معايير ويب مثل: <abbr title="Hypertext Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr>,  وغيرهما. هذه المعايير يطلق عليها <dfn>توصيات W3C </dfn>.

يقوم فريق عمل ([APA](/about/groups/apawg)) Accessible Platform Architectures بالتأكد من أن كل معايير W3C تدعم إمكانية الوصول.

معايير W3C وملاحظات فريق العمل المطروحة بالأسفل متعلقة بإمكانية الوصول.

## ارشادات الوصول {#guidelines}

[[المكونات الأساسية للوصول للويب]]( /fundamentals/components/) توضح مدى اعتماد مستوى الوصول على تفاعل المكونات المختلفة لتطوير الويب مع بعضها، و توضح كيف يمكن تطبيق ارشادات WAI (WCAG, ATAG, UAAG).

### دليل الوصول لمحتوى الويب  (WCAG) {#wcag}

بشكل عام، فإن المصطلح "محتوى الويب" يشير إلى معلومات في صفحة ويب أو تطبيق ويب، وذلك يشمل:
* المعلومات الاساسية مثل النصوص، الصور، والأصوات
* الكود البرمجي والعلامات المسؤولة عن بناء وتمثيل المعلومات الاساسية.

بالإمكان تطبيق معايير  WCAG على المحتويات التفاعلية، ومتعددة الوسائط، وعلى "الهواتف المحمولة"، إلخ. بالإمكان أيضاً تطبيق معايير WCAG على تكنولوجيا المعلومات والاتصالات information and communications technologies (ICT) في غير الويب، وفقاً لما هو مفصل في [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/).

معلومات عن WCAG:
- [نبذة عن WCAG](/standards-guidelines/wcag/)
- [[ملخص WCAG 2.1]](/standards-guidelines/wcag/glance/)
- [كيفية العمل بـ WCAG 2  (المرجع السريع)](https://www.w3.org/WAI/WCAG21/quickref/)
- [معيار 2.0 WCAG](https://www.w3.org/TR/WCAG20/)
- [معيار2.1  WCAG](https://www.w3.org/TR/WCAG21/)

### ارشادات الوصول لأدوات التطوير   (ATAG) {#atag}

أدوات التطوير هي خدمات برمجية يستخدمها "المنشؤون" (مطوروا الويب، المصممون، المؤلفون... إلخ) لإنتاج محتوى الويب. بعض الأمثلة لأدوات التطوير: محرر HTML (HTML editors)، أنظمة إدارة المحتوى content management systems (CMS)، والمواقع التي تتيح لمستخدميها إضافة المحتوى، مثل المدونات ومواقع شبكات التواصل الاجتماعي. وثيقة ATAG تشرح كيفية:
* جعل أدوات التطوير متاحة، بحيث يتمكن أصحاب الاحتياجات الخاصة من استخدامها لإنشاء محتوى الويب، و
* مساعدة المنشئين في إنشاء محتوى ويب أسهل في الوصول.

معلومات عن ATAG:
- [نبذة عن ATAG](/standards-guidelines/atag/)
- [[ملخص ATAG]](/standards-guidelines/atag/glance/)
- [معيار ATAG 2.0](https://www.w3.org/TR/ATAG/)

### دليل الوصول لمساعدات المستخدم (UAAG) {#uaag}

تشمل مساعدات المستخدم المستعرضات وامتداداتها، مشغلات الوسائط، القارئات، والتطبيقات الأخرى التي تعرض / تستدعي محتوى الويب
معلومات عن UAAG:
-	[نبذة عن UAAG](/standards-guidelines/uaag/)
-	[ملاحظات عن UAAG 2.0](https://www.w3.org/TR/UAAG20/)
## مواصفات تقنية

### تطبيقات انترنت غنية متاحة  (WAI-ARIA) {#aria}

تقدم ARIA الدلالات (semantics) بحيث يمكن للمطورين نقل سلوك واجهة المستخدم ومعلومات البناء إلى التكنولوجيا المساعدة (مثل قارئات الشاشة). تقدم ARIA معلومات عن ماهية الأدوار roles، الحالاتstates ، والخصائصproperties  المعرفة لعناصر واجهة المستخدم المتاحة.

تضم مجموعة ARIA مواصفات API</abbr> mapping <abbr title="application programming interface"> التي توفر دليلاً لتنفيذ مساعد المستخدم. كما تضم أيضاً نماذج للرسومات والنشر الرقمي.

معلومات عن ARIA:
- [نبذة عن WAI-ARIA](/standards-guidelines/aria/) – تشمل [قائمة و وصف للوحدات وعملية ربط API]( /standards-guidelines/aria/#versions)
- [ممارسات إنشاء WAI-ARIA]( https://www.w3.org/TR/wai-aria-practices/)
- [معيار WAI-ARIA 1.1]( https://www.w3.org/TR/wai-aria-1.1)

### الصوت والفيديو {#multimedia}

- [WEBTV: تنسيق المسار النصي لفيديو الويب]( https://www.w3.org/TR/webvtt/) هو تنسيق خاص بالشرح، نصوص وصف الفيديو، والتفاصيل matadata الأخرى المتوافقة مع المحتوى الزمني للصوت أو الفيديو.

- [لغة ترميز النص الموقوت (TTML)]( https://www.w3.org/TR/ttml/)  تستخدم في التحويل بين التنسيقات أو تبادل معلومات النص الموقوت بين تنسيقات محتوى التوزيع القديمة للترجمة / العنونة والشرح.

### التقييم {#eval}

تدعم المصادر التالية تطوير طرق و وسائل اختبار / تقييم الوصول:

- [[نبذة عن اختبار مطابقة الوصول (ACT)]]( /standards-guidelines/act/) &mdash; تؤسس و توثق ACT قوانين لاختبار مدى مطابقة محتوى الويب لمعايير الوصول.

-[[نبذة عن لغة التقييم والتقرير (EARL)]]( /standards-guidelines/act/) &mdash;  EARL  هو تنسيق قابل للقرائه، و يقوم بالتعبير عن نتائج الاختبار.

تضم قائمة [[نبذة عن تقييم الوصول للويب]]( /test-evaluate/) مصادر إضافية متعلقة بالتقييم، منها:

- [[نبذة عن WCAG-EM:]]( /test-evaluate/conformance/wcag-em/)&mdash;  منهجية مطابقة الوصول للويب – WCAG-EM هي طريقة لتحديد مدى مطابقة موقع ما (ويب) لدليل الوصول لمحتوى الويب WCAG

### التخصيص

[[نبذة عن التخصيص]](/personalization/) &mdash;  يشمل التخصيص الاستفادة من تجربة المستخدم لتلبية احتياجاته و أولوياته. يمكن لمنشئ المحتوى أن يستخدم معايير التخصيص للحصول على تصميم افتراضي يقلل الجهود للقيام بالتخصيص إلى أقصى حد.

### النطق

[[نبذة عن النطق]]( /pronunciation/)  &mdash; يتعلق النطق بقارئات الشاشة والتوليفات الأخرى التي تحول النص إلى كلام text-2-speech synthesis (TTS) الناطقة للمحتوى بشكل صحيح.

## مناطق عمل أخرى للمعيار W3C WAI

- [[وصول الهواتف المحمولة في W3C]]( /standards-guidelines/mobile/)

- [[الوصول المعرفي في W3c]]( /cognitive/)

## معلومات إضافية {#moreinfo}

- [قائمة بكل معايير الوصول المتعلقة بـــ W3C ("توصيات W3c") و ملاحظات فرق العمل](https://www.w3.org/TR/?tag=accessibility)

- [[قوانين وسياسات الوصول للويب]](/policies/) تجمع السياسات الحكومية في الدول والأقاليم حول العالم. يتطابق العديد منها مع معايير W3C للوصول.

- [[لماذا يتم التنسيق بين المعايير المهمة للوصول للويب]](/standards-guidelines/harmonization/)

- [[الرجوع إلى دليل WAI والوثائق التقنية]](/standards-guidelines/linking/)

- [كيف تطور WAI دليل الوصول عن طريق أحد عمليات W3C : الجدول الزمني و **فرص المساهمة**](/standards-guidelines/w3c-process/)

![ توضيح يبين المبادئ التوجيهية للمكونات المختلفة ، ووصف مفصل في https://www.w3.org/WAI/intro/components-desc.html#guide]({{ "/content-images/components/specs.png" | relative_url }})
