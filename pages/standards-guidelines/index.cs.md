---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.

title: Přehled standardů přístupnosti W3C  # Do not translate "title:". Do translate the text after "title:".
nav_title: "Standardy/Pokyny" # A short title that is used in the navigation

lang: cs   # Change "en" to the translated language shortcode from https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry

last_updated: 2021-05-11  # Put the date of this translation YYYY-MM-DD (with month in the middle)
translators: 
- name: "Kristýna Švecová"   # Replace @@ with translator name
#  link: @@
# contributors:
# - name: "@@"   # Replace @@ with contributor name, or delete this line if none

ref: /standards-guidelines/   # Do not change this
changelog: /standards-guidelines/changelog/
layout: default
github:
  repository: w3c/wai-website
  path: pages/standards-guidelines/index.cs.md   # Add the language shortcode to the middle of the filename, for example index.fr.md
permalink: /standards-guidelines/cs   # Add the language shortcode to the end; for example /standards-guidelines/fr
feedbackmail: wai@w3.org

footer: >   # Translate all the words below, including "Date:" and "Editor:". Do not change these dates.
  <p><strong>Datum:</strong> Aktualizováno 30. dubna 2021. CHANGELOG.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Vyvinuto Pracovní skupinou pro vzdělání a osvětu (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Shrnutí" class="full" %}
{:/}

Tato stránka představuje pokyny a další standardy týkající se přístupnosti webu.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Obsah stránky" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Úvod {#intro}

Konsorcium pro World Wide Web (W3C) vyvíjí mezinárodní webové standardy: <abbr title="Hypertext Markup Language - textový značkovací jazyk">HTML</abbr>, <abbr title="Kaskádové styly">CSS</abbr> a mnoho dalších. Webové standardy W3C se nazývají <dfn>W3C Doporučení</dfn>.

Všechny standardy W3C jsou kontrolovány z hlediska podpory přístupnosti pracovní skupinou Accessible Platform Architectures ([APA](/about/groups/apawg/)).

Následující standardy W3C a poznámky pracovní skupiny jsou pro přístupnost zvláště důležité.

## Pokyny pro přístupnost {#guidelines}

[[Základní komponenty webové přístupnosti]](/fundamentals/components/) ukazují, jak webová přístupnost závisí na spolupráci několika složek vývoje a interakcí webu, a jak se jich týkají WAI pokyny (WCAG, ATAG, UAAG).

### Pokyny pro zpřístupnění obsahu webu (WCAG) 2 {#wcag2}

Webový „obsah“ obvykle označuje informace na webové stránce nebo v aplikaci včetně:

* přirozených informací jako text, obrázky a zvuk
* kódu nebo markupu (značek), které tvoří strukturu, prezentaci, atd.

WCAG se vztahuje na dynamický obsah, multimédia, „mobilní aplikace“ atd. WCAG lze také aplikovat na jiné než webové informační a komunikační technologie (ICT), jak je popsáno v [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/).

Informace o WCAG 2:
- [Přehled WCAG](/standards-guidelines/wcag/)
- [[Stručný přehled WCAG 2.1]](/standards-guidelines/wcag/glance/)
- [Jak splnit WCAG (Rychlý průvodce)](https://www.w3.org/WAI/WCAG21/quickref/)
- [[WCAG 2 Překlady]](/standards-guidelines/wcag/translations/)
- [Norma WCAG 2.0](https://www.w3.org/TR/WCAG20/)
- [Norma WCAG 2.1](https://www.w3.org/TR/WCAG21/)
- [Co je nového v WCAG 2.1](/standards-guidelines/wcag/new-in-21/)
- [[Co je nového v WCAG 2.2, pracovní verze]](/standards-guidelines/wcag/new-in-22/)

### Pokyny pro zpřístupnění vývojových nástrojů (ATAG) {#atag}

Vývojové nástroje jsou software a služby, které „autoři“ (vývojáři, designéři, spisovatelé, atd.) používají k tvorbě obsahu webu. Například editory HTML, systémy pro správu obsahu (CMS) a webové stránky, které umožňují uživatelům přidávat obsah, jako třeba blogy a sociální sítě. Dokumenty ATAG vysvětlují, jak:
* tvořit samotné vývojové nástroje přístupné tak, aby lidé se zdravotním postižením mohli vytvářet webový obsah a
* pomoci autorům vytvářet lépe přístupný webový obsah.

Informace o ATAG:
- [Přehled ATAG](/standards-guidelines/atag/)
- [[Stručný přehled ATAG]](/standards-guidelines/atag/glance/)
- [Norma ATAG 2.0](https://www.w3.org/TR/ATAG/)

### Pokyny k uživatelským agentům (UAAG) {#uaag}

Uživatelský agent je označení pro prohlížeč, rozšíření prohlížeče, přehrávač médií, čtečku a další aplikace, které poskytují obsah webu.

Informace o UAAG:
- [Přehled UAAG](/standards-guidelines/uaag/)
- [Záznam UAAG 2.0](https://www.w3.org/TR/UAAG20/)

### Standardy přístupnosti W3C (WCAG) 3, pracovní verze {#wcag3}

WCAG 3 je pracovní verze, která by se měla stát Standardem W3C. WCAG 3 se vztahuje na webový obsah, aplikace, nástroje, publikování a nové technologie na webu.

Informace o WCAG 3:
- [[Představení WCAG 3]](/standards-guidelines/wcag/wcag3-intro/)

## Technické specifikace

### Přístupné internetové aplikace (WAI-ARIA) {#aria}

ARIA poskytuje sémantiku, díky které mohou autoři tlumočit chování uživatelského rozhraní a strukturální informace pro asistenční technologie (jako čtečku obrazovky). Specifikace ARIA poskytuje ontologii rolí, stavů a vlastností, které definují přístupné prvky uživatelského rozhraní.

Soubor ARIA zahrnuje specifikace mapování <abbr title="rozhraní pro programování aplikací">API</abbr>, které poskytují pokyny uživatelských agentů pro implementaci. Zahrnuje také moduly pro grafiku a digitální publikování.

Informace o ARIA:
- [Přehled WAI-ARIA](/standards-guidelines/aria/) – zahrnuje [seznam a popis modulů a mapování API](/standards-guidelines/aria/#versions)
- [Autorské postupy WAI-ARIA](https://www.w3.org/TR/wai-aria-practices/)
- [Norma WAI-ARIA 1.1](https://www.w3.org/TR/wai-aria-1.1/)

### Audio a Video {#multimedia}

- [WebVTT: Formát Web Video Text Tracks](https://www.w3.org/TR/webvtt/) je formát pro titulky, textové popisy videa a další metadata, která jsou časově sladěna se zvukovým nebo video obsahem.

- [Timed Text Markup Language - Časovaný značkovací jazyk (TTML)](https://www.w3.org/TR/ttml/) je určen k překódování nebo výměně časovaných textových informací vrámci starších formátů distribuce obsahu pro titulky.

### Shrnutí {#eval}

Následující zdroje podporují vývoj metod a nástrojů pro hodnocení přístupnosti:

- [[Přehled testování shody pro přístupnost (ACT)]](/standards-guidelines/act/) &mdash; ACT zavádí a dokumentuje pravidla pro testování shody webového obsahu se standardy přístupnosti.

- [[Přehled jazyka pro hodnocení a záznamy (EARL)]](/standards-guidelines/earl/) &mdash; EARL je strojově čitelný formát pro vyjádření výsledků testování.

Další zdroje související s hodnocením jsou v [[Přehledu hodnocení webové přístupnosti]](/test-evaluate/) včetně:

- [[Přehledu WCAG-EM: Metodiky hodnocení shody přístupnosti webových stránek]](/test-evaluate/conformance/wcag-em/) &mdash; WCAG-EM je postup pro určování, jak webová stránka odpovídá Pokynům pro zpřístupnění obsahu webu (WCAG).

### Personalizace

[[Přehled personalizace]](/personalization/) &mdash; Personalizace zahrnuje přizpůsobení uživatelského prožitku tak, aby splňoval potřeby a preference jednotlivých uživatelů. Autoři obsahu mohou použít standardy pro personalizaci, aby poskytli základní design a umožnili uživatelskou personalizaci s minimem námahy.

### Výslovnost

[[Přehled výslovnosti]](/pronunciation/) &mdash; Výslovnost čteček obrazovkek a dalších syntéz převodu textu na řeč (TTS) by měla být správná.

## Další oblasti práce W3C WAI

- [[Mobilní přístupnost ve W3C]](/standards-guidelines/mobile/)

- [[Kognitivní přístupnost ve W3C]](/cognitive/)

## Další informace {#moreinfo}

- [Seznam všech standardů W3C týkajících se přístupnosti („W3C Doporučení“) a poznámek pracovní skupiny](https://www.w3.org/TR/?tag=accessibility)

- [[Zákony a zásady webové přístupnosti]](/policies/) uvádí vládní zákony a zásady, které se vztahují k webové přístupnosti v různých zemích a regionech světa. Mnoho z nich jsou reference na standardy W3C.

- [[Proč je harmonizace norem pro přístupnost webu zásadní]](/standards-guidelines/harmonization/)

- [[Reference a odkazy na pokyny a technické dokumenty WAI]](/standards-guidelines/linking/)

- [Jak WAI vyvíjí pokyny pro přístupnost prostřednictvím procesu W3C: Milníky a ** příležitosti přispívat **](/standards-guidelines/w3c-process/)

![ilustrace zobrazující pokyny pro různé komponenty, podrobný popis na https://www.w3.org/WAI/intro/components-desc.html#guide]({{ "/content-images/components/specs.png" | relative_url }})
