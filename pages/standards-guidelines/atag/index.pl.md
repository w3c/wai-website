---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Omówienie Wytycznych dla dostępności narzędzi autorskich (ATAG)"
nav_title: "Omówienie ATAG"
lang: pl
last_updated: 2023-12-07   # Keep the date of the English version

translation:
  last_updated: 2024-03-11   # Keep the date of the English version

translators:
  - name: "Stefan Wajda"
contributors:
  - name: "Wojtek Kutyla"
    org: "Human Thing Ltd"  

github:
  label: wai-atag-intro

permalink: /standards-guidelines/atag/pl
ref: /standards-guidelines/atag/  # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: |
  <p><strong>Data:</strong> Uaktualniono 7 grudnia 2023. Pierwsza publikacja w czerwcu 2005.</p>
  <p><strong>Redakcja:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Opracowane z udziałem Grupy Roboczej ds. Edukacji i Promocji (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>) oraz Grupy Roboczej ds. wytycznych dla dostępności (<a href="https://www.w3.org/WAI/AU/">AUWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Podsumowanie" class="full" %}
{:/}

Ta strona przedstawia standard internetowy Wytyczne dla dostępności narzędzi autorskich (ATAG).

Szybkie łącza do innych materiałów:
* [[ATAG w skrócie]](/standards-guidelines/atag/glance/)
* [Standard ATAG 2.0](https://www.w3.org/TR/ATAG20/)
* [Wdrażanie ATAG 2.0](https://www.w3.org/TR/IMPLEMENTING-ATAG20/)
* [Narzędzie do raportowania ATAG](https://www.w3.org/WAI/atag/report-tool/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Treść strony" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Narzędzia autorskie i ATAG

Narzędzia autorskie to oprogramowanie i usługi, których „twórcy” (programiści, projektanci, autorzy itp.) używają do tworzenia treści internetowych (statycznych stron internetowych, dynamicznych aplikacji internetowych itp.). Przykłady narzędzi autorskich wymieniono poniżej w sekcji „[Dla kogo są ATAG](#who-atag-is-for)”.

Wytyczne dla dostępności narzędzi autorskich (ATAG) wyjaśniają:

-   jak zapewnić dostępność samych narzędzi autorskich, aby osoby z niepełnosprawnościami mogły tworzyć treści internetowe, ***oraz***
-   jak pomagać twórcom w tworzeniu bardziej dostępnych treści internetowych - w szczególności: umożliwiać, wspierać i promować tworzenie treści zgodnych z wytycznymi dla dostępności treści internetowych ([WCAG](/standards-guidelines/wcag/)).


ATAG jest częścią serii wytycznych dla dostępności, w tym Wytycznych dla dostępności treści internetowych (WCAG) i Wytycznych dla dostępności programów użytkownika (UAAG). Związek między różnymi wytycznymi wyjaśniają [[Podstawowe komponenty dostępności cyfrowej]](/fundamentals/components/).

ATAG są dziś istotne, ponieważ są niezależne od technologii. ATAG zostały opublikowane w 2015 roku i odnoszą się do WCAG 2.0. Zachęcamy do korzystania z najnowszej wersji [WCAG 2](https://www.w3.org/TR/WCAG2/).

## Dla kogo są ATAG {#who-atag-is-for}

ATAG są przeznaczone głównie dla programistów narzędzi autorskich, w tym następujących rodzajów narzędzi autorskich:

-   narzędzia do tworzenia stron internetowych, na przykład edytory HTML typu WYSIWYG (od angielskiego <span lang="en">what-you-see-is-what-you-get</span> - co widzisz, to dostajesz)
-   oprogramowanie do generowania stron internetowych, np. systemy zarządzania treścią (CMS) i systemy zarządzania nauczaniem (LMS), narzędzia do tworzenia kursów, agregatory treści, kreatory stron internetowych bez kodowania
-   oprogramowanie, które konwertuje do technologii treści internetowych, na przykład procesory tekstu i inne aplikacje biurowe dokumentów z opcją Zapisz jako HTML lub EPUB.
-   narzędzia do tworzenia multimediów
-   witryny internetowe, które pozwalają użytkownikom dodawać treści, takie jak blogi, wiki, strony służące do udostępniania zdjęć, fora internetowe i portale społecznościowe
-   inne rodzaje narzędzi wymienione w słownikowej definicji [narzędzi autorskich](https://www.w3.org/TR/ATAG20/#def-Authoring-Tool)

ATAG i materiały pomocnicze mają również zaspokoić potrzeby wielu różnych odbiorców, w tym decydentów, menedżerów i innych. Na przykład:

-   Osoby szukające narzędzia autorskich, które są dostępne i tworzą dostępne treści, mogą użyć ATAG do oceny narzędzi autorskich.
-   Osoby, które chcą zachęcić swojego dotychczasowego programistę narzędzi autorskich do poprawy dostępności w przyszłych wersjach, mogą skierować twórcę narzędzia autorskiego do ATAG.

## Co jest w ATAG

**ATAG** są podzielone na dwie główne części::

-   Część A skupia się na dostępności samego narzędzia autorskiego.
-   Część B skupia się na wspieraniu autorów w tworzeniu dostępnych treści przez narzędzie autorskie.

[[**ATAG w skrócie**]](/standards-guidelines/atag/glance/) zawierają krótkie streszczenie zasad i wytycznych dla dostępności ujętych w ATAG.

**ATAG** są zorganizowane warstwowo:

-   **Zasady**  zapewniają najwyższy poziom organizacji wytycznych.
-   **Wytyczne**  zapewniają ramy i cele dla kryteriów sukcesu.
-   **Kryteria sukcesu to wymagania dostępności**, które są napisane jako sprawdzalne stwierdzenia na [trzech poziomach](https://www.w3.org/TR/ATAG20/#intro_understand_levels_conformance):
    A, AA, AAA.

[**ATAG 2.0**](https://www.w3.org/TR/ATAG20/) są _Rekomendacją W3C_, która jest standardem technicznym.

[**Wdrażanie ATAG 2.0**](https://www.w3.org/TR/IMPLEMENTING-ATAG20/)
 to pomocniczy dokument informacyjny, który pomaga czytelnikom zrozumieć i używać ATAG. Wdrażanie ATAG zawiera uzasadnienie dla każdej wytycznej. Dla każdego kryterium sukcesu zawiera wyjaśnienie intencji kryteriów sukcesu, przykłady i łącza do zasobów.

## Narzędzie do raportowania ATAG

[**Narzędzie raportowania ATAG**](https://www.w3.org/WAI/atag/report-tool/) pomaga oceniającym raportować wyniki oceny dostępności narzędzi autorskich. Prowadzi użytkownika przez wymagania ATAG, umożliwia rejestrowanie wyników oceny dla każdego wymagania i generuje raport zgodności narzędzia autorskiego z ATAG.

## Tłumaczenia

ATAG 2.0 są dostępne jako autoryzowane tłumaczenie W3C w języku chińskim, uproszczonym: [无障碍创作工具指南(ATAG) 2.0](https://www.w3.org/Translations/ATAG20-zh/).

## Kto opracował ATAG

ATAG zostały opracowane przez Grupę Roboczą ds. wytycznych dla dostępności narzędzi autorskich ([ATAG WG](https://www.w3.org/WAI/AU/)), która jest częścią Inicjatywy na Rzecz Dostępności Internetowej ([WAI](https://www.w3.org/WAI/)) w Konsorcjum <span lang="en">World Wide Web</span> ([W3C](http://www.w3.org)).

Możliwości udziału w pracach WAI zostały przedstawione na stronie [[Uczestnictwo w WAI]](/about/participating/).