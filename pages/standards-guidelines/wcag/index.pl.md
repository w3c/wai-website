---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Omówienie WCAG 2"
nav_title: "Treść Web – WCAG 2"
lang: pl  # Change "en" to the translated-language shortcode
last_updated: 2024-03-07  # Keep the date of the English version
description: Przedstawia międzynarodowy standard Wytyczne dla dostępności treści internetowych (Web Content Accessibility Guidelines, WCAG), w tym WCAG 2.0, WCAG 2.1 i WCAG 2.2. Dokumenty WCAG wyjaśniają, jak uczynić treści internetowe bardziej dostępnymi dla osób z niepełnosprawnościami.

translation:
  last_updated: 2024-08-07  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Stefan Wajda"
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/pl  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/  # Do not change this

image: /content-images/wcag/wcag-intro-social.jpg
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Pierwsza publikacja w czerwcu 2005.</p>
  <p><strong>Redakcja:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Opracowane przy wsparciu Grupy Roboczej ds. Edukacji i Promocji (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>) oraz Grupy Roboczej Wytycznych dla Dostępności (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Podsumowanie" class="full" %}
{:/}

Przedstawia międzynarodowy standard Wytyczne dla dostępności treści internetowych (<abbr title="Web Content Accessibility Guidelines" lang="en">WCAG</abbr>), w tym WCAG 2.0, WCAG 2.1 i WCAG 2.2. Dokumenty WCAG wyjaśniają, jak uczynić treści internetowe bardziej dostępnymi dla osób z niepełnosprawnościami.

Inna strona [przedstawia WCAG 3](/standards-guidelines/wcag/wcag3-intro/).

WCAG nie są wprowadzeniem do dostępności. Aby poznać informacje wprowadzające, zobacz [Omówienie podstaw dostępności](/fundamentals/).

Przydatne łącza:
* [Jak spełnić WCAG 2 (Krótki przewoddnik)](https://www.w3.org/WAI/WCAG22/quickref/)
* [Standard WCAG 2.2](https://www.w3.org/TR/WCAG22/), [Nowe w WCAG 2.2](/standards-guidelines/wcag/new-in-22/)
* [Standard WCAG 2.1](https://www.w3.org/TR/WCAG21/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Treść strony" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Wprowadzenie {#intro}

Wytyczne dla dostępności internetowej (WCAG) 2 zostały opracowane w ramach [procesu W3C](/standards-guidelines/w3c-process/) we współpracy z osobami i organizacjami z całego świata, aby zapewnić jednolity wspólny standard dostępności internetowej, który spełnia potrzeby osób, organizacji i rządów na całym świecie.

Dokumenty WCAG wyjaśniają, jak zwiększyć dostępność treści internetowych dla osób z niepełnosprawnościami. „Treść” internetowa ogólnie odnosi się do informacji na stronie internetowej lub w aplikacji internetowej i&nbsp;obejmuje:

-   naturalne informacje, takie jak tekst, obrazy i dźwięki
-   kod lub znaczniki definiujące strukturę, prezentację itp.

## Dla kogo są WCAG {#for}

WCAG są dla tych, którzy potrzebują standardu technicznego. **To nie jest wprowadzenie do dostępności. Łącza do materiałów wprowadzających można znaleźć w sekcji [<q>Od czego zacząć?</q> w FAQ FAQ](/standards-guidelines/wcag/faq/#start).**

WCAG są przeznaczone przede wszystkim dla:

-   twórców treści internetowych (autorów stron, projektanci witryn itp.)
-   twórców narzędzi do tworzenia stron internetowych (narzędzi autorskich)
-   twórców narzędzi do oceny dostępności internetowej
-   innych osób, które potrzebują standardu dostępności internetowej, w tym dostępności aplikacji mobilnych.

Aby zaspokoić potrzeby wielu innych osób, w tym decydentów, menedżerów i badaczy - istnieje wiele różnych  [[materiałów WAI]](/resources/).

## Co jest w WCAG 2 {#whatis2}

WCAG 2.2 ma 13 wytycznych. Wytyczne są zorganizowane według [4 zasad: postrzegalne, funkcjonalne, zrozumiałe i solidne](https://www.w3.org/WAI/WCAG22/Understanding/intro#understanding-the-four-principles-of-accessibility).

Dla każdej wytycznej istnieją sprawdzalne *kryteria sukcesu*. Kryteria sukcesu są na [trzech poziomach: A, AA oraz AAA](https://www.w3.org/WAI/WCAG22/Understanding/conformance#levels).

Kryteria sukcesu określają „zgodność” z WCAG. Oznacza to, że aby spełnić wymagania WCAG, treść musi spełniać kryteria sukcesu. Szczegóły znajdują się w [WCAG w sekcji Zgodność](https://www.w3.org/TR/WCAG22/#conformance).

Krótkie podsumowanie wytycznych WCAG 2 można znaleźć w artykule **[[WCAG 2 w skrócie]](/standards-guidelines/wcag/glance/)**.
		
### Materiały pomocnicze i wytyczne uzupełniające {#supplement}

Poza WCAG, poniższe materiały pomagają zrozumieć i wdrażać WCAG oraz poprawiać dostępność:
* Krótki przewodnik / Jak spełnić WCAG 2 / Lista kontrolna
* Objaśnienia WCAG 2
* Techniki dla WCAG 2
* Zasady testowania dla WCAG 2
* Wytyczne uzupełniające

**Zapoznaj się z tymi zasobami WCAG 2 w [dokumentacji WCAG 2](/standards-guidelines/wcag/docs/).**

## WCAG 2.0, 2.1, 2.2 {#versions}

Standardy <q>Wytyczne dla dostępności treści internetowych</q> (WCAG) są stabilne i można się do nich odwoływać, kiedy standard internetowy jest opublikowany jako 'Rekomendacja W3C'.


* [WCAG 2.0](https://www.w3.org/TR/WCAG20/) zostały opublikowane 11 grudnia 2008 roku.
* [WCAG 2.1](https://www.w3.org/TR/WCAG21/) zostały opublikowane 5 czerwca 2018 r., a ich aktualizacja została opublikowana 21 września 2023 r. Artykuł [WCAG 2 FAQ](https://www.w3.org/WAI/standards-guidelines/wcag/faq/) zawiera informacje na temat aktualizacji.
* [WCAG 2.2](https://www.w3.org/TR/WCAG22/) zostały opublikowane 5 października 2023 roku.

WCAG 2.0, 2.1 i 2.2 zostały zaprojektowane tak, aby były „kompatybilne wstecznie”, co oznacza, że treści zgodne z WCAG 2.2 są również zgodne z WCAG 2.1 i WCAG 2.0. Jeśli chcesz zachować zgodność ze wszystkimi wersjami, możesz użyć zasobów WCAG 2.2 i nie musisz się martwić o sprawdzanie poprzednich wersji.

Wszystkie kryteria sukcesu z 2.0 są zawarte w 2.1, a wszystkie z 2.1 są zawarte w 2.2 (z wyjątkiem 4.1.1, jak wyjaśniono w następnym akapicie).

* WCAG 2.0 mają 12 wytycznych.
* WCAG 2.1 dodają 1 wytyczną i 17 kryteriów sukcesu. Są one omówione w dokumencie [Nowe w WCAG 2.1](/standards-guidelines/wcag/new-in-21/).
* WCAG 2.2 dodają 9 kryteriów sukcesu. Są one omówione w dokumencie [Nowe w WCAG 2.2](/standards-guidelines/wcag/new-in-22/).
		
Kilka rzeczy uległo zmianie, a aktualizacje w odpowiednich dokumentach mają zapewnić kompatybilność wsteczną w praktyce. Główną zmianą jest to, że w WCAG 2.2 jedno kryterium sukcesu (4.1.1 Poprawność kodu) jest przestarzałe. Uwagi dodane do errat WCAG 2.1 i WCAG 2.0 odnoszą się do tego, jak wyjaśniono w [FAQ dla WCAG 2, 4.1.1 Poprawność kodu](/standards-guidelines/wcag/faq/#parsing411). WCAG 2.2 zawiera również uwagi dotyczące różnych języków; więcej informacji można znaleźć w [FAQ dla WCAG 2, internationalizacja](/standards-guidelines/wcag/faq/#i18n22).

WCAG 2.0, WCAG 2.1 i WCAG 2.2  to istniejące standardy.  WCAG 2.2 nie deprecjonuje, ani nie zastępuje WCAG 2.1, a WCAG 2.1 nie deprecjonuje, ani nie zastępuje WCAG 2.0. W3C zachęca do korzystania z najnowszej wersji WCAG.


## Tłumaczenia {#translations}

Autoryzowane tłumaczenia i nieoficjalne tłumaczenia WCAG 2 są wymienione na stronie [[Tłumaczenia WCAG 2]](/standards-guidelines/wcag/translations/).

## WCAG 2.0 to norma ISO/IEC 40500 {#iso}

WCAG 2.0 zostały zatwierdzone jako norma ISO: ISO/IEC 40500:2012. ISO/IEC 40500 jest dokładnie taka sama jak oryginalne WCAG 2.0, które zostały przedstawione powyżej wraz z materiałami pomocniczymi.

Treść ISO/IEC 40500 jest dostępna bezpłatnie na stronie [www.w3.org/TR/WCAG20](https://www.w3.org/TR/WCAG20/); można je również zakupić z [katalogu ISO {% include_cached external.html %}](https://www.iso.org/standard/58625.html).

Korzyści z WCAG 2.0 jako standardu ISO zostały podsumowane w [w sekcji ISO w FAQ](/standards-guidelines/wcag/faq/#iso).Więcej informacji na temat W3C i procesu ISO znajduje się na stronie [W3C PAS FAQ](https://www.w3.org/2010/04/pasfaq).

**W3C planuje przedłożyć WCAG 2.2 w ramach procesu ISO.**

## Kto opracowuje WCAG {#wg}

Dokumenty techniczne WCAG są opracowywane przez Grupę Roboczą Wytycznych dla Dostępności ([AG WG](/GL/)) *(dawniej <span lang="en">Web Content Accessibility Guidelines Working Group</span>)*, która jest częścią Inicjatywy na Rzecz Dostępności Internetowej ([WAI](https://www.w3.org/WAI/)) w Konsorcjum <span lang="en">World Wide Web</span> ([W3C](https://www.w3.org)).

WAI okresowo aktualizuje techniki WCAG 2 i Objaśnienia WCAG 2. Czekamy na [komentarze](/standards-guidelines/wcag/commenting/) i [propozycje nowych technik](https://www.w3.org/WAI/GL/WCAG20/TECHS-SUBMIT/).

Możliwości wniesienia wkładu do WCAG i innych prac WAI zostały przedstawione na stronie [[Uczestnictwo w WAI]](/about/participating/).

## WCAG 3 i więcej informacji {#more}

WCAG jest częścią serii wytycznych dla dostępności, w tym Wytycznych dla dostępności narzędzi autorskich (ATAG) i Wytycznych dla dostępności programów użytkownika (UAAG). Związek między różnymi wytycznymi wyjaśniają [[Podstawowe komponenty dostępności cyfrowej]](/fundamentals/components/).

Zapoznaj się z [[FAQ dla WCAG 2]](/standards-guidelines/wcag/faq/), aby uzyskać więcej informacji na tematy:

-   **Uwzględnienie w WCAG 2 [dostępności mobilnej](/standards-guidelines/wcag/faq/#mobile)**
-   **Zastosowanie WCAG 2 [dokumentów i oprogramowania](/standards-guidelines/wcag/faq/#wcag2ict)**
-   i inne...

Informacje na temat wczesnej wersji roboczej W3C Accessibility Guidelines 3.0 (dawniej znanej jako "Silver") można znaleźć na stronie **[Wprowadzenie do WCAG 3](/standards-guidelines/wcag/wcag3-intro/)**.
