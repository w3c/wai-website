---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".
title: Wybór narzędzi oceny dostępności cyfrowej
lang: pl  # Change "en" to the translated-language shortcode
last_updated: 2024-08-07  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Stefan Wajda" # Add one -name: line for every translator
contributors:
- name: "Michał Sobkowiak"   

github:
  label: wai-selecting-eval-tools

permalink: /test-evaluate/tools/selecting/pl  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /test-evaluate/tools/selecting/  # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Latest editors and developers:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
   <p><strong>Data:</strong> Informacje o konkretnych narzędziach są często aktualizowane, w miarę tego jak je otrzymujemy. W informacjach dla każdego narzędzia znajduje się data ostatniej aktualizacji. Interfejs użytkownika dla „Listy narzędzi oceny” został odnowiony w grudniu 2023 r. Po raz pierwszy opublikowany w marcu 2006 roku.</p>
   <p><strong>Najnowsi redaktorzy i programiści:</strong> <a href="https://www.w3.org/People/kevin/">Kevin White</a>, Eric Velleman, Michel Hansma i Vera Lange. <strong>Opiekun treści:</strong> José Ramón Hilera González. <a href="https://www.w3.org/WAI/ER/tools/acknowledgements">Podziękowania zawierają listę</a> współpracowników i poprzednich redaktorów, w tym <a href="https://www.w3.org/groups/wg/eowg/participants/">uczestników EOWG, </a>Erica Eggerta i Shadi Abou-Zahra.</p>
   <p>Opracowane przez Grupę Roboczą ds. Edukacji i Promocji (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) przy wsparciu <a href="https://www.w3.org/WAI/TIES/">Projektu WAI-TIES</a> w 2006, zaktualizowane przy wsparciu <a href="https://www.w3.org/WAI/ACT/">Projektu WAI-ACT</a> w 2014, i zmienione w 2023 roku w ramach <a href="https://www.w3.org/WAI/about/projects/wai-coop/">Projektu WAI-CooP</a>, współfinansowanego przez Komisję Europejską. </p>  
   
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Wprowadzenie" class="full" %}
{:/}


Narzędzia oceny dostępności cyfrowej to programy lub usługi internetowe, które pomagają określić, czy treść internetowa spełnia standardy dostępności. W tym dokumencie omówiono cechy narzędzi oceny i inne aspekty, które należy wziąć pod uwagę przy wyborze narzędzi oceny. Łącza do różnych narzędzi znajdują się na [[Liście narzędzi oceny dostępności cyfrowej]](/test-evaluate/tools/list/). Strona oferuje również filtry, które pomagają dokonać wstępnego wyboru, aby znaleźć najbardziej pomocne narzędzie.


{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Treść strony" class="full" %}
{:/}

- TOC jest tworzony automatycznie.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Wideo: Omówienie narzędzi oceny {#video}

{% include video-player-data.html
    yt-id="bn1XJSjc_qM"
    video-id="tools-for-evaluating"
%}

_Ten film jest również dostępny na serwerze W3C: [Wideo: Omówienie narzędzi oceny (format pliku: MP4, rozmiar pliku: 51MB](https://media.w3.org/wai/evaluation-intros/tools-for-evaluating.mp4)._


{% include excol.html type="start" id="video-intro-transcript" %}

Transkrypcja oraz opis wizualnej strony filmu

{% include excol.html type="middle" %}

<table>
  <thead>
    <tr>
      <th width="50%">Dźwięk</th>
      <th>Obraz</th>
    </tr>
  </thead>
<tbody>
  <tr>
    <td>Narzędzia oceny dostępności cyfrowej</td>
    <td>Narzędzia oceny dostępności cyfrowej</td>
  </tr>
  <tr>
    <td>Istnieją programy i usługi internetowe, które pomogą Ci rozpoznać problemy z dostępnością.</td>
    <td>Otwiera się skrzynka narzędziowa przy komputerze. Pojawia się szkło powiększające ze słowem „dostępność”, aby sprawdzić stronę internetową na komputerze.
	
	</td>
  </tr>
  <tr>
    <td>Mogą one zaoszczędzić wiele czasu i wysiłku podczas oceny oraz zapobiec powstawaniu nowych barier dostępności.</td>
    <td>Oszczędzaj czas i wysiłek. Unikaj barier dostępności.</td>
  </tr>
  <tr>
    <td>Jednak narzędzia nie mogą zrobić wszystkiego. Niektórych testów dostępności po prostu nie można zautomatyzować i muszą być przeprowadzone ręcznie.</td>
    <td>Osoba obok komputera ze stroną internetową używa lupy ze słowem „dostępność”.
	</td>
  </tr>
  <tr>
    <td>Niektóre narzędzia poprowadzą Cię przez te testy, których nie można zautomatyzować.</td>
    <td>Lista kontrolna obok komputera.</td>
  </tr>
  <tr>
    <td>Niektóre narzędzia sprawdzają tylko jedną stronę na raz, inne mogą sprawdzać całe witryny.</td>
    <td>Strona internetowa i witryna internetowa są skanowane. Wyświetlane są znaczniki niepowodzenia, powodzenia i ostrzeżenia.
	
	</td>
  </tr>
  <tr>
    <td>Narzędzia można integrować z różnymi środowiskami pracy. Na przykład z przeglądarką internetową, systemem zarządzania treścią (C-M-S) oraz w narzędziach programistycznych i wdrożeniowych.</td>
    <td>Słowa „Przeglądarka internetowa”, „CMS” i „środowisko wdrożeniowe” wokół ikony narzędzi wyświetlanej na komputerze.</td>
  </tr>
  <tr>
    <td>Wspierają różne role w zespole projektowym, takie jak autorów treści, twórców kodu, projektantów oraz właścicieli produktów.</td>
    <td>Ikona narzędzi jest otoczona ikonami: długopisu, kodu, pędzla i osoby z kluczem.</td>
  </tr>
  <tr>
    <td>Trzeba pamiętać, że w niektórych przypadkach narzędzia mogą dawać nieprawidłowe wyniki.</td>
    <td>Lupa powiększa trójkątny znak z wykrzyknikiem. Wyświetlanych jest wiele lup. </td>
  </tr>
  <tr>
    <td>Dlatego nie polegaj nadmiernie na tym, co mówią narzędzia w stosunku do tego, jakie są rzeczywiste doświadczenia osób korzystających z Twojej witryny.</td>
    <td>Ekran dzieli się na 12 pól, w każdym inna osoba przed komputerem.</td>
  </tr>
  <tr>
    <td>„Wybór narzędzi oceny dostępności cyfrowej” wyjaśnia, co narzędzia mogą, a czego nie mogą zrobić, oraz na co zwrócić uwagę, aby znaleźć narzędzia spełniające Twoje potrzeby.</td>
    <td>Wybór narzędzi oceny dostępności cyfrowej. Pojawia się ikona skrzynki narzędziowe, następnie drogowskazu i lornetki.</td>
  </tr>
  <tr>
    <td>„Lista narzędzi oceny dostępności cyfrowej” zawiera filtry, które pomogą Ci znaleźć odpowiednie narzędzie dla Twojej konkretnej sytuacji.</td>
    <td>Wiele dokumentów ze słowem Narzędzia przewija się w dół do ikony filtra, z którego wychodzą tylko dwa dokumenty.</td>
  </tr>
  <tr>
    <td>Z narzędziami i wiedzą, jak z nich korzystać, masz dobrą podstawę, aby skutecznie znajdować problemy z dostępnością.</td>
    <td>Osoba, przy niej ikony narzędzi i żarówki. Ikony łączą się ze sobą, tworząc lupę ze słowem „bariery”.</td>
  </tr>
  <tr>
    <td>Dostępność internetowa: niezbędna dla niektórych, przydatna dla wszystkich.</td>
    <td>Wokół komputera układają się ikony: ręki, oka, mózgu, ucha i ust z falą dźwiękową.</td>
  </tr>
  <tr>
    <td>Aby uzyskać więcej informacji o narzędziach oceny dostępności, odwiedź stronę w3.o-r-g/W-A-I/evaluation.</td>
    <td>Narzędzia oceny, logo W3C i Inicjatywy na Rzecz Dostępności Internetu (WAI).</td>
  </tr>
</tbody>
</table>

{% include excol.html type="end" %}

## Co mogą zrobić narzędzia oceny, a *czego nie potrafią*
{:#cannot}

Narzędzia oceny dostępności stron internetowych mogą pomóc w szybkim rozpoznaniu potencjalnych barier dostępności. Można z nich korzystać na wszystkich etapach procesu projektowania i tworzenia stron internetowych. Narzędzia mogą zapewniać w pełni zautomatyzowane testy i pomagać w ręcznej ocenie.

Narzędzia nie mogą automatycznie sprawdzać wszystkich aspektów dostępności. Wymagany jest ludzki osąd. Czasami narzędzia oceny mogą dawać fałszywe lub wprowadzające w błąd wyniki. Narzędzia oceny dostępności stron internetowych nie mogą jednoznacznie *ocenić* dostępności, mogą jedynie w tym *pomóc*.


## Własności narzędzi oceny
{:#features}

Narzędzia oceny dostępności cyfrowej są skierowane do różnych odbiorców. Korzystają z nich projektanci, programiści, nietechniczni autorzy treści, testerzy jakości, a czasem także końcowi użytkownicy. Narzędzia oferują różne możliwości i funkcje, które użytkownicy mogą porównać i ocenić, aby dobrać narzędzia pod kątem swoich konkretnych potrzeb.


### Główne zastosowania

Poniższe własności opisują narzędzia znajdujące się na [[Liście narzędzi oceny dostępności cyfrowej]](/test-evaluate/tools/list/). Można ich używać jako filtrów, aby zmniejszyć liczbę wyświetlanych narzędzi.

**Cel**
: Czy szukasz narzędzia, które wykona zautomatyzowany test, czy też narzędzie powinno pomóc Ci w ręcznym testowaniu lub symulacji doświadczenia użytkownika.

**Oceniany produkt**
: Zależnie od rodzaju produktu, który oceniasz (np. strona internetowa, dokument, aplikacja), możesz potrzebować konkretnego narzędzia, które będzie Ci najbardziej pomocne. Niektóre narzędzia są przystosowane do oceny stron internetowych, inne do dokumentów, aplikacji komputerowych, aplikacji mobilnych itp.

**Płatne lub bezpłatne**
: Narzędzia oceny są dostępne w ramach różnych typów licencji, takich jak licencja Open Source, komercyjna, korporacyjna itp. Niektóre narzędzia są płatne, inne darmowe.

**Typ narzędzia**
: Narzędziami oceny mogą być wtyczki (rozszerzenia) do narzędzi autorskich i przeglądarek internetowych, narzędzia wiersza poleceń, aplikacje komputerowe lub mobilne oraz usługi internetowe. W zależności od procesu projektowania i tworzenia można łączyć różne narzędzia.

**Standardy**
: Różne organizacje i rządy mogą wymagać zgodności z różnymi standardami dostępności, dlatego różne narzędzia obsługują te standardy. Wytyczne W3C dla dostępności treści internetowych (WCAG) są uznawane na arenie międzynarodowej za standard dostępności stron internetowych i obsługiwane przez większość narzędzi.

**Typ pliku**
: Większość narzędzi oceny sprawdza dostępność treści HTML. Niektóre sprawdzają inne technologie internetowe, takie jak EPUB, WAI-ARIA, CSS, SVG i PDF.

**Zakres**
: Zakres tego, co narzędzie oceny może automatycznie testować, różni się w zależności od narzędzia. Niektóre narzędzia sprawdzają pojedynczą stronę, inne natomiast sprawdzają całe grupy powiązanych stron. Niektóre mogą również uzyskać dostęp do treści chronionych hasłem.

**System operacyjny**
: Niektóre narzędzia działają tylko w określonych systemach operacyjnych, takich jak Windows, MacOS, Linux, Android, iOS.

**Wtyczki przeglądarek**
: Niekiedy narzędzia działają tylko w określonych przeglądarkach, takich jak Chrome, Edge, Safari, Firefox itp.

**Deklaracja dostępności**
: Ważne jest, aby narzędzia oceny były dostępne, aby mogły z nich korzystać osoby z niepełnosprawnościami. Niektórzy dostawcy podają informacje na temat dostępności swoich narzędzi w deklaracji dostępności.

**Zasady ACT**
: Dostawcy narzędzi mogą opisać, czy i w jaki sposób ich narzędzia obsługują zasady testowania zgodności dostępności. Jeżeli istnieje raport dotyczący wdrożenia zasad, w sekcji szczegółów narzędzia na Liście narzędzi oceny dostępności cyfrowej będzie podane łącze do raportu. Więcej informacji można znaleźć w artykule [Wdrażanie zasad ACT w narzędziach i metodologiach oceny](https://www.w3.org/WAI/standards-guidelines/act/implementations/).

**Język**
: Narzędzia oceny obsługują różne języki. Obejmuje to interfejs użytkownika narzędzia, a także język obsługiwanych treści (na przykład w celu wykrycia barier językowych).

**Wsparcie dla**
: Niektóre narzędzia oceny dostępności stron internetowych mogą (pomóc) wygenerować kompletny raport dostępności. Możesz filtrować, aby znaleźć narzędzia, które mogą Ci pomóc:

  * *Wygenerować raport z wynikami oceny:* Raporty są przydatne do określenia zgodności z kryteriami, które można sprawdzić automatycznie i ręcznie. Może to również obejmować ocenę dostępności.

  * *Wyświetlać informacje w ramach stron internetowych:* Oznacza to, że narzędzie może wstawiać tymczasowe ikony i znaczniki, aby wyświetlić wyniki testów dostępności. Dzięki temu można zobaczyć problemy w kontekście dokumentu. Są one również przydatne do zrozumienia względnego znaczenia każdego problemu.

  * *Zmienić prezentację na stronie:* Narzędzia do transformacji mogą modyfikować sposób prezentacji treści, aby pomóc rozpoznać problemy projektowe. Narzędzie może na przykład wyświetlić witrynę wyłącznie w formie tekstowej lub bez koloru. Takie narzędzia są przydatne do zniwelowania ograniczeń testów automatycznych.

## Dalsze rozważania
{: #further}

Wybierając narzędzie ewaluacyjne, należy wziąć pod uwagę wiele czynników.

Każda organizacja, projekt i zespół ma inne potrzeby w zakresie różnych właściwości.

Projektanci stron internetowych mogą szukać narzędzi do analizowania dostępności swoich projektów. Twórcy stron internetowych będą preferować narzędzia, które pomogą im ocenić kod. Organizacja może potrzebować w pełni zautomatyzowanego narzędzia oceny do monitorowania całej witryny internetowej. Inna organizacja może potrzebować jedynie sporadycznych testów wyrywkowych.

Przy wyborze narzędzia ewaluacyjnego warto rozważyć następujące kwestie:

### Struktura organizacji i proces tworzenia

Zespoły programistyczne mogą zyskać na połączeniu kilku narzędzi oceny. Korzystanie z wielu współdziałających narzędzi może zaspokoić potrzeby różnych członków zespołu na wszystkich etapach projektu.

### Złożoność i rozmiar treści internetowych

Niektóre złożone witryny mogą zawierać dużo treści multimedialnych. Inne mogą wykorzystywać specjalistyczne technologie, takie jak MathML. Specjalistyczne narzędzia oceny mogą mieć kluczowe znaczenie dla oceny tych witryn.

### Umiejętności i wiedza twórców stron internetowych

Dobierz narzędzie odpowiednie do umiejętności zespołu. Niektóre narzędzia ewaluacyjne wymagają od użytkowników większej wiedzy na temat dostępności lub kodu. Inne pomagają zwiększyć dostępność lub wiedzę o kodzie.
