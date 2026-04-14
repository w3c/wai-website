---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Przegląd standardów dostępności W3C
nav_title: "Standards/Guidelines" # A short title that is used in the navigation
lang: pl  # Change "en" to the translated-language shortcode
last_updated: 2024-02-29  # Keep the date of the English version

translation:
  last_updated: 2025-05-05  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Stefan Wajda" 
contributors:
- name: "Michał Sobkowiak"

github:
  label: wai-standards-guidelines

permalink: /standards-guidelines/pl   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Translate the words below, including "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Redakcja:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Opracowane z udziałem Grupy Roboczej ds. Edukacji i Promocji (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Podsumowanie" class="full" %}
{:/}

Ta strona jest wprowadzeniem do wytycznych i innych standardów dotyczących dostępności stron internetowych.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Treść strony" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Wstęp {#intro}

Konsorcjum World Wide Web (W3C) opracowuje międzynarodowe standardy internetowe: <abbr title="Język Znaczników Hipertekstu">HTML</abbr>, <abbr title="Kaskadowe arkusze stylów">CSS</abbr> i wiele innych. Standardy internetowe W3C nazywane są <dfn>Rekomendacjami W3C</dfn> lub <dfn>Zaleceniami W3C</dfn>.

Wszystkie standardy W3C są sprawdzane pod kątem wsparcia dostępności przez Grupę Roboczą ds. Architektur Dostępnych Platform ([APA](/about/groups/apawg/)).

Standardy W3C i noty Grup Roboczych przedstawione poniżej są szczególnie istotne z punktu widzenia dostępności cyfrowej.

## Wytyczne dotyczące dostępności {#guidelines}

[[Kluczowe komponenty dostępności Internetu]](/fundamentals/components/) pokazuje, jak dostępność sieci zależy od kilku współpracujących ze sobą elementów tworzenia stron i interakcji oraz jak stosuje się wytyczne WAI (WCAG, ATAG, UAAG).

## Wytyczne dla dostępności treści internetowych (WCAG) 2 {#wcag2}

Pojęcie „treść” (internetowa) odnosi się ogólnie do informacji zawartej na stronie internetowej lub w aplikacji internetowej i obejmuje:

* informacje naturalne, takie jak tekst, obrazy i dźwięki
* kod lub znaczniki definiujące strukturę, prezentację itp.

WCAG ma zastosowanie do treści dynamicznych, multimediów, „mobilnych” itd. WCAG można również zastosować do innych niż internetowe technologii teleinformatycznych (ICT), jak opisano w [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/).

WCAG 2 info:
- [Omówienie WCAG](/standards-guidelines/wcag/)
- [[WCAG 2 w skrócie]](/standards-guidelines/wcag/glance/)
- [Jak spełnić WCAG 2 (Krótki przewodnik)](https://www.w3.org/WAI/WCAG22/quickref/)
- [[Tłumaczenia WCAG 2]](/standards-guidelines/wcag/translations/)
- [Standard WCAG 2.2](https://www.w3.org/TR/WCAG22/), [[Co nowego w WCAG 2.2]](/standards-guidelines/wcag/new-in-22/)
- [Standard WCAG 2.1](https://www.w3.org/TR/WCAG21/), [[Co nowego w WCAG 2.1]](/standards-guidelines/wcag/new-in-21/)
- [Standard WCAG 2.0](https://www.w3.org/TR/WCAG20/)


### Wytyczne dla dostępności narzędzi do tworzenia treści (ATAG) {#atag}

Narzędzia autorskie to oprogramowanie i usługi, których „twórcy” (programiści, projektanci, autorzy itp.) używają do tworzenia treści internetowych. Na przykład: edytory HTML, systemy zarządzania treścią (CMS) i strony internetowe, które pozwalają użytkownikom dodawać treści, takie jak blogi i serwisy społecznościowe. Dokumenty ATAG wyjaśniają:
* jak uczynić narzędzia autorskie dostępnymi, aby osoby z niepełnosprawnościami mogły tworzyć treści internetowe, oraz
* jak pomóc twórcom w tworzeniu bardziej dostępnych treści internetowych.

Informacje o ATAG:
- [Omówienie ATAG](/standards-guidelines/atag/)
- [[ATAG 2.0 w skrócie]](/standards-guidelines/atag/glance/)
- [Standard ATAG 2.0](https://www.w3.org/TR/ATAG/)

### Wytyczne dla dostępności programów użytkownika (UAAG)) {#uaag}

Programy użytkownika obejmują przeglądarki, rozszerzenia przeglądarek, odtwarzacze multimedialne, czytniki i inne aplikacje prezentujące treści internetowe.

Informacje o UAAG:
- [Omówienie UAAG](/standards-guidelines/uaag/)
- [Nota o UAAG 2.0](https://www.w3.org/TR/UAAG20/)

### Wytyczne W3C dla dostępności (WCAG) 3 Wersja robocza {#wcag3}

WCAG 3 to wczesna wersja robocza, która ma stać się standardem W3C. WCAG 3 dotyczy treści internetowych, aplikacji, narzędzi, publikacji i nowych technologii w Internecie.

Informacje o WCAG3:
- [[Wstęp do WCAG 3]](/standards-guidelines/wcag/wcag3-intro/)

## Specyfikacje techniczne

### Dostępne bogate aplikacje internetowe (WAI-ARIA) {#aria}

ARIA zapewnia semantykę, aby autorzy mogli przekazywać zachowania interfejsu użytkownika i informacje strukturalne do technologii wspomagających (takich jak czytniki ekranu). Specyfikacja ARIA zapewnia ontologię ról, stanów i właściwości, które definiują dostępne elementy interfejsu użytkownika.

Pakiet ARIA zawiera specyfikację mapowania <abbr title="application programming interface">API</abbr> , które dostarczają wskazówek dotyczących implementacji programów użytkownika. Zawiera także moduły do grafiki i publikacji cyfrowych.

Informacje o ARIA:
- [Omówienie WAI-ARIA](/standards-guidelines/aria/) – zawiera [listę i opis modułów oraz mapowań API](/standards-guidelines/aria/#versions)
- [Praktyki autorskie WAI-ARIA](https://www.w3.org/TR/wai-aria-practices/)
- [Standard WAI-ARIA 1.2](https://www.w3.org/TR/wai-aria-1.2/)

### Dźwięk i wideo {#multimedia}

- [WebVTT: Format internetowych ścieżek tekstowych wideo](https://www.w3.org/TR/webvtt/) to format napisów, tekstowych, opisów wideo i innych metadanych, które są zsynchronizowane czasowo z zawartością audio lub wideo.

- [Język znaczników tekstu czasowego (TTML)](https://www.w3.org/TR/ttml/) jest przeznaczony do transkodowania lub wymiany informacji tekstowych w czasie między starszymi formatami treści dystrybucji do napisów i napisów.


### Ocenianie {#eval}

Poniższe źródła pomagają w opracowywaniu metod i narzędzi oceny dostępności:

- [[Omówienie Testów zgodności dostępności (ACT)]](/standards-guidelines/act/) &mdash; ACT ustanawia i dokumentuje zasady testowania zgodności treści internetowych ze standardami dostępności. [Zasady testowe WCAG 2 ](/standards-guidelines/act/rules/about/) korzystają z formatu zasad ACT.

- [[Omówienie Języka oceny i raportów (EARL)]](/standards-guidelines/earl/) &mdash; EARL to format do odczytu maszynowego do wyrażania wyników testów.

Dodatkowe materiały związane z oceną są wymienione w opracowaniu  [[Omówienie Oceniania dostępności internetowej]](/test-evaluate/), w tym

- [[Omówienie WCAG-EM: Metodologia oceny zgodności dostępności strony internetowej]](/test-evaluate/conformance/wcag-em/) &mdash; WCAG-EM to metoda określania, jak dobrze strona internetowa jest zgodna z Wytycznymi dla dostępności treści WWW (WCAG).


### WAI-Adapt

[[Omówienie WAI-Adapt]](/adapt/) &mdash; WAI-Adapt umożliwia użytkownikom dostosowywanie (lub „personalizowanie”) sposobu prezentowania treści do swoich potrzeb i preferencji. Twórcy treści mogą korzystać ze standardów WAI-Adapt, aby zapewnić domyślny projekt i umożliwić użytkownikowi adaptację przy minimalnym nakładzie pracy.

### Wymowa

[[Omówienie Wymowy]](/pronunciation/) &mdash; Wymowa odnosi się do poprawnego wymawiania treści przez czytniki ekranu i inne syntezatory mowy (TTS).

## Inne obszary działania W3C WAI

- [[Dostępność mobilna w W3C]](/standards-guidelines/mobile/)

- [[Dostępność „poznawcza” w W3C]](/cognitive/)

## Dodatkowe informacje {#moreinfo}

- [Lista wszystkich standardów W3C (<q>Rekomendacji W3C</q>) oraz Not grup roboczych](https://www.w3.org/TR/?tag=accessibility)

- [[Przepisy i zasady dotyczące dostępności w Internecie]](/policies/) zawierają listę rządowych przepisów i zasad dotyczących dostępności w krajach i regionach na całym świecie. Wiele z nich odwołuje się do standardów dostępności W3C.

- [[Dlaczego harmonizacja standardów jest niezbędna dla dostępności Internetu]](/standards-guidelines/harmonization/)

- [[Bibliografia i łącza do wytycznych WAI i dokumentów technicznych]](/standards-guidelines/linking/)

- [Jak WAI opracowuje wytyczne dla dostępności w Procesie W3C: Kamienie milowe i możliwości wnoszenia wkładu](/standards-guidelines/w3c-process/)

{% assign longdesc_url = "/fundamentals/components/examples/pl#guide" | relative_url %}
{% include image.html src="components/specs.pl.png" alt="Ilustracja przedstawia różne wytyczne dla różnych komponentów" longdesc=longdesc_url %}