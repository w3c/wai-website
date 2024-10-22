---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Omówienie Wytycznych dla dostępności programu użytkownika (UAAG)
nav_title: "Omówienie UAAG"
lang: pl # Change "en" to the translated-language shortcode
last_updated: 2024-05-02

translation:
  last_updated: 2024-05-02

translators:
- name: "Stefan Wajda"

github:
    label: wai-uaag-intro

permalink: /standards-guidelines/uaag/pl  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/uaag/    # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: |
  <p>Pierwsza publikacja w czerwcu 2005.</p>
  <p><strong>Redaktorzy:</strong> Jeanne Spellman, Jim Allan, <a href="https://www.w3.org/People/shawn">Shawn Lawton Henry</a>.</p>
  <p>Opracowane z udziałem Grupy Roboczej ds. Wytycznych dla dostępności programów użytkownika
  (<a href="https://www.w3.org/WAI/UA/">UAWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Podsumowanie" class="full" %}
{:/}

Na tej stronie przedstawiono Wytyczne dla dostępności programu użytkownika (UAAG)  **dla przeglądarek, odtwarzaczy multimedialnych i innych <q>programów użytkownika</q>**.


Szybkie łącza do innych materiałów:
* [UAAG 2.0. Notatka Grupy Roboczej](https://www.w3.org/TR/UAAG20/)
* [Dokumentacja UAAG](https://www.w3.org/TR/UAAG20-Reference/)
* [Przykłady urządzeń mobilnych UAAG 2.0 ](https://www.w3.org/TR/2015/NOTE-UAAG20-Reference-20151215/mobile.html)

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

## Wytyczne dla dostępności programu użytkownika (UAAG)

Dokument Wytyczne dla dostępności programu użytkownika (UAAG) wyjaśnia, w jaki sposób sprawić, aby programy użytkownika były dostępne dla osób z&nbsp;niepełnosprawnościami. Do programów użytkownika zaliczają się przeglądarki, rozszerzenia przeglądarek, odtwarzacze multimedialne, czytniki i inne aplikacje wyświetlające treści internetowe. Niektóre potrzeby w zakresie dostępności są lepiej zaspokajane w przeglądarce niż w treści internetowej, np. dostosowywanie tekstu, preferencje i dostępność interfejsu użytkownika. Oprogramowanie użytkownika zgodne z UAAG 2.0 poprawi dostępność dzięki własnemu interfejsowi użytkownika i możliwości komunikowania się z&nbsp;innymi technologiami, w tym technologiami wspomagającymi (oprogramowaniem, którego używają niektóre osoby z&nbsp;niepełnosprawnościami, aby zaspokoić swoje wymagania). Wszyscy użytkownicy, nie tylko osoby z&nbsp;niepełnosprawnościami, odniosą korzyści z oprogramowania użytkownika zgodnego z UAAG 2.0.

UAAG jest częścią szeregu wytycznych dla dostępności, w tym Wytycznych dla dostępności treści internetowych (WCAG) i Wytycznych dla dostępności narzędzi autorskich (ATAG). [[Podstawowe komponenty dostępności Internetu]](/fundamentals/components/) wyjaśniają powiązania pomiędzy różnymi wytycznymi.

## Dla kogo są UAAG

UAAG są przeznaczone przede wszystkim dla twórców przeglądarek internetowych, rozszerzeń przeglądarek, odtwarzaczy multimedialnych, czytników i innych aplikacji wyświetlających treści internetowe.

UAAG i zasoby pomocnicze mają również na celu zaspokojenie potrzeb wielu różnych odbiorców, w&nbsp;tym decydentów, menedżerów i&nbsp;innych osób. Na przykład:

-   Osoby, które chcą wybrać bardziej dostępne programy użytkownika, mogą użyć UAAG do [oceny programów użytkownika](https://www.w3.org/WAI/UA/2001/10/eval)
-   Osoby, które chcą zachęcić swojego obecnego programistę programu użytkownika do poprawy dostępności w przyszłych wersjach, mogą zgłaszać błędy w UAAG ub mogą skierować dostawcę programu użytkownika do UAAG.

## UAAG 2.0

[UAAG 2.0](https://www.w3.org/TR/UAAG20/) zostały opracowane, aby pomóc w zwiększeniu dostępności przeglądarek internetowych przyszłych generacji, zapewnić alternatywne informacje w oparciu o technologię i&nbsp;platformę użytkownika oraz dostosować się do WCAG 2.0 i ATAG 2.0. UAAG 2.0 jest gotowy. Zawiera szczegółowe wskazówki dotyczące przeglądarek i&nbsp;innych programów użytkownika oraz informacje referencyjne dla specjalistów ds. dostępności.

Grupa Robocza ds. Wytycznych dla dostępności programu użytkownika (UAWG) zidentyfikowała wdrożenia funkcji („kryteria sukcesu”) UAAG 2.0, wykazując, że możliwe jest wdrożenie kryteriów sukcesu UAAG 2.0. Próg dla specyfikacji, aby stała się formalną Rekomendacją W3C, zwykle obejmuje szeroko zakrojone formalne testowanie implementacji każdego kryterium sukcesu w wielu programach użytkownika – co w&nbsp;przypadku UAAG 2.0 wymagałoby ręcznego testowania wielu interfejsów użytkownika przeglądarki. Na tym poziomie testów nie były dostępne wystarczające zasoby testowe. W3C nie planuje obecnie nadania UAAG 2.0 statusu Rekomendacji. W3C planuje uwzględnić kwestie dostępności progrmu użytkownika w przyszłych pracach nad wytycznymi dla dostępności.

UAAG 2.0 są nadal potrzebne i ważne, a w przyszłości mogą mieć coraz większe znaczenie. Prace obecnych grup zadaniowych ds. dostępności mobilnej i dostępności dla osób słabowidzących pokazują, jak ważne jest łączne uwzględnienie treści, interfejsu użytkownika, rozszerzeń, aplikacji i&nbsp;programów użytkownika. Chociaż wiele funkcji UAAG 2.0 jest obsługiwanych w konkretnych przeglądarkach, istnieje potrzeba bardziej spójnego i&nbsp;niezawodnego wsparcia dla funkcji dostępności we wszystkich przeglądarkach i&nbsp;programach użytkownika. UAAG 2.0 zapewnia konkretne wskazówki dotyczące dostępności dla programistów programów użytkownika, którzy chcą zapewnić wszystkim lepsze doświadczenia użytkownika.

**Zalecamy stosowanie UAAG 2.0.**

## Dokumenty uzupełniające UAAG 2.0

[Dokumentacja UAAG 2.0: Wyjaśnienia, przykłady i zasoby dotyczące wytycznych dla dostępności programu użytkownika 2.0](https://www.w3.org/TR/UAAG20-Reference/) zawiera dodatkowe informacje dla osób korzystających z UAAG 2.0. Każde kryterium sukcesu UAAG 2.0 jest wyjaśnione wraz z&nbsp;intencją kryterium sukcesu, przykładami, dodatkowymi zasobami, typowymi miejscami implementacji i aspektem programu użytkownika, do którego się odnosi.

[Przykłady urządzeń mobilnych UAAG 2.0](https://www.w3.org/TR/2015/NOTE-UAAG20-Reference-20151215/mobile.html)
są podzbiorem dokumentacji UAAG 2.0. Te przykłady (lub przypadki użycia) podkreślają, w&nbsp;jaki sposób UAAG mogą pomóc osobom z niepełnosprawnościami korzystającym z urządzeń mobilnych.

## UAAG 1.0

[Wytyczne dla dostępności programu użytkownika UAAG 1.0](https://www.w3.org/TR/UAAG10/)
zostały zatwierdzone w grudniu 2002 roku.

## Kto opracowuje UAAG

Dokumenty techniczne UAAG zostały opracowywane przez Grupę Roboczą ds. wytycznych dla dostępności programów użytkownika ([UAWG](https://www.w3.org/WAI/UA/)), która jest częścią Inicjatywy na rzecz dostępności Internetu  ([WAI](https://www.w3.org/WAI/)) Konsorcjum internetowego ([W3C](https://www.w3.org)). Więcej informacji o&nbsp;grupie roboczej można znaleźć na [stronie UAWG](https://www.w3.org/WAI/UA/). UAWG jest zamknięta od stycznia 2016 r.

[Jak WAI opracowuje wytyczne dla dostępności w ramach procesu W3C](/standards-guidelines/w3c-process/) przedstawia formalne okresy publicznego przeglądu. Możliwości recenzowania i komentowania dokumentów WAI są ogłaszane na stronie [stronie głównej WAI](https://www.w3.org/WAI/) i liście mejlingowej [WAI Interest Group](/about/groups/waiig/). Adres e-mail do wysyłania komentarzy znajduje się w&nbsp;sekcji [Status dokumentu](https://www.w3.org/TR/UAAG20/#status) UAAG 2.0.

Możliwości wniesienia wkładu w UAAG i inne prace WAI są przedstawione w [Uczestnictwo w WAI](/about/participating/).