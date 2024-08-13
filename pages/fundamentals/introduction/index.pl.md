---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Wprowadzenie do dostępności internetowej
lang: pl
last_updated: 2024-06-06   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Stefan Wajda"
contributors:
  - name: "Michał Sobkowiak"

github:
  label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/pl   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-intro/     # Do not change this

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this
  
# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Data:</strong> Aktualizacja 20 listopada 2023. Pierwsza publikacja w lutym 2005. CHANGELOG.</p>
  <p><strong>Redaktorka:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Opracowane przez Grupę Roboczą ds. Edukacji i Promocji (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Podsumowanie" class="full" %}
{:/}

Gdy strony i narzędzia internetowe są odpowiednio zaprojektowane i napisane, mogą z nich korzystać osoby z niepełnosprawnościami. Obecnie jednak wiele witryn i narzędzi jest tworzonych z barierami dostępności, które utrudniają lub uniemożliwiają korzystanie z nich niektórym osobom.

Zwiększenie dostępności przynosi korzyści jednostkom, firmom i społeczeństwu.  Międzynarodowe standardy internetowe określają, co jest potrzebne do zapewnienia dostępności.


{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Treść strony" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">Materiały pokrewne</span><br>
{% include video-link.html title="Film wprowadzający do dostępności internetowej i standardów W3C <em>(4 minuty)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Spojrzenie na dostępność {#context}

<blockquote class="pull">
  <p>Siła Internetu tkwi w jego uniwersalności.<br />
    Dostęp dla każdego bez względu na niepełnosprawność jest jego zasadniczym aspektem.</p>
  <footer><cite>Tim Berners-Lee, Dyrektor W3C i twórca World Wide Web</cite></footer>
</blockquote>

Internet został zasadniczo zaprojektowany tak, aby służył wszystkim, niezależnie od ich urządzeń, oprogramowania, języka, lokalizacji czy sprawności. Gdy Internet osiąga ten cel, jest dostępny dla osób z różnorodnym zakresem zdolności słuchowych, ruchowych, wzrokowych i poznawczych.

Dlatego wpływ niepełnosprawności zmienia się radykalnie w Internecie, bowiem Internet usuwa bariery w komunikacji i uczestnictwie, z którymi wielu ludzi mierzy się w świecie fizycznym. Z drugiej strony, gdy strony internetowe, aplikacje, technologie lub narzędzia są źle zaprojektowane, mogą stawiać bariery uniemożliwiające ludziom korzystanie z Internetu.

**Dostępność jest niezastąpiona dla programistów i organizacji, które chcą tworzyć wysokiej jakości strony i narzędzia internetowe, zamiast wykluczać ludzi z korzystania ze swoich produktów i usług.**

## Czym jest dostępność internetowa {#what}

Dostępność internetowa oznacza, że ​​strony internetowe, narzędzia i technologie są projektowane i rozwijane w taki sposób, by mogły z nich korzystać osoby z niepełnosprawnościami. Mówiąc dokładniej, ludzie mogą:

-   postrzegać, rozumieć, nawigować i wchodzić w interakcję z Internetem
-   współtworzyć Internet. 

Dostępność internetowa obejmuje wszystkie rodzaje niepełnosprawności wpływające na dostęp do Internetu, w tym niepełnosprawność:

-   słuchu,
-   poznawczą,
-   neurologiczną,
-   fizyczną,
-   mowy,
-   wzroku.

Dostępność Internetu przynosi korzyści także osobom _bez_ niepełnosprawności, na przykład:

-   osobom korzystającym z telefonów komórkowych, inteligentnych zegarków, inteligentnych telewizorów i&nbsp;innych urządzeń z małymi ekranami, różnymi trybami wprowadzania danych itp.
-   osobom starszym ze zmieniającymi się zdolnościami ze względu na starzenie się,
-   osobom z „tymczasową niepełnosprawnością”, np. złamaną ręką lub zgubionymi okularami,
-   osobom z ograniczeniami sytuacyjnymi, np. jasnym światłem słonecznym lub w otoczeniu, w którym nie mogą słuchać dźwięku,
-   osobom korzystającym z wolnego połączenia internetowego albo mającym ograniczony lub kosztowny dostęp do internetu.

Zobacz 7-minutowy film z przykładami tego, jak niezbędna jest dostępność dla osób z niepełnosprawnościami i jak przydatna dla wszystkich w rozmaitych sytuacjach:<br>
{% include video-link.html title="Oblicza dostępności internetowej <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Więcej o tym, czym jest dostępność" class="simple aside" %}
{:/}

-   Jeśli chcesz dowiedzieć się więcej o tym, jaki wpływ na korzystanie z Internetu mają różne rodzaje niepełnosprawności, lub przeczytać o scenariuszach korzystania z Internetu przez osoby z niepełnosprawnościami, zobacz [Jak osoby z niepełnosprawnościami korzystają z Internetu](/people-use-web/).
-   Jeśli chcesz poznać więcej przykładów korzyści dla innych, zapoznaj się z materiałami multimedialnymi: [Użytkowanie internetu przez osoby z niepełnosprawnością i bez niej](/media/av/users-orgs/#situations), [Walory dostępności internetowej dla osób z niepełnosprawnością oraz bez niej](https://www.w3.org/WAI/business-case/archive/soc#groups) (materiał archiwalny) oraz archiwalnym materiałem [Wspólne doświadczenia internetowe: Bariery wspólne dla użytkowników urządzeń mobilnych i osób z niepełnosprawnościami](/standards-guidelines/shared-experiences/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Dostępność jest ważna dla osób fizycznych, firm i społeczeństwa {#important}

Internet staje się coraz bardziej istotnym zasobem dla wielu wymiarów życia: edukacji, zatrudnienia, administracji publicznej, biznesu, opieki zdrowotnej, rekreacji i&nbsp;innych. Dostępność Internetu jest niezbędna, aby zapewnić równy dostęp i&nbsp;równe szanse osobom o&nbsp;różnorodnych możliwościach. Dostęp do informacji i komunikacji międzyludzkiej, w tym Internetu, zdefiniowana jest jako podstawowe prawo człowieka w Konwencji Narodów Zjednoczonych o Prawach osób z niepełnosprawnościami (UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html)).

Internet oferuje możliwość bezprecedensowego dostępu do informacji i&nbsp;interakcji wielu osobom z&nbsp;niepełnosprawnościami. Oznacza to, że bariery w dostępie do mediów drukowanych, dźwiękowych i&nbsp;wizualnych można znacznie łatwiej pokonać za pomocą technologii internetowych.

Dostępność wspiera włączenie społeczne osób z niepełnosprawnościami, a także innych osób, na&nbsp;przykład:

-   ludzi starszych
-   ludzi na obszarach wiejskich
-   ludzi w krajach rozwijających się.

Dostępność internetowa jest w&nbsp;wielu sytuacjach **wymagana przez prawo**.

**Dostępność ma również silne uzasadnienie biznesowe.** Jak pokazano w poprzedniej sekcji, dostępny projekt poprawia ogólne doświadczenie i satysfakcję użytkownika, szczególnie w różnych sytuacjach, na różnych urządzeniach i w przypadku starszych użytkowników. Dostępność może wzmocnić markę, pobudzić innowacje i rozszerzyć zasięg rynkowy.

{::nomarkdown}
{% include box.html type="start" h="3" title="Więcej informacji o znaczeniu dostępności" class="simple aside" %}
{:/}

-   Ogólne informacje o korzyściach dla przedsiębiorstw i przedsięwzięć znajdują się w dokumencie [[Biznesowe uzasadnienie dostępności cyfrowej]](/business-case/).
    -   Przykłady korzyści płynących z [tworzenia dostępnych mediów audio i&nbsp;wideo](/media/av/) przedstawiono w&nbsp;części [Korzyści dla organizacji](/media/av/users-orgs/#benefits).
-   Wskazówki dla ustalania wymogów prawnych znajdują się w&nbsp;zarchiwizowanym opracowaniu [Czynniki prawne i&nbsp;polityczne](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Tworzyć dostępny Internet {#making}

Dostępność Internetu zależy od kilku współpracujących ze sobą komponentów, w tym technologii internetowych, przeglądarek internetowych i innych „programów użytkownika”, narzędzi do tworzenia treści i&nbsp;witryn internetowych.

Inicjatywa na Rzecz Dostępności Internetu W3C ([WAI](/about/participating/)) opracowuje specyfikacje techniczne, wytyczne, techniki i&nbsp;materiały pomocnicze opisujące rozwiązania w zakresie dostępności. Są one uznawane za międzynarodowe standardy dostępności internetowej; na przykład <abbr title="Wytyczne dla dostępności treści internetowej (WCAG)">WCAG</abbr> 2.0 są także normą <abbr title="International Organization for Standardization">ISO</abbr>: ISO/<abbr title="International Electrotechnical Commission">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Więcej informacji o tworzeniu dostępnego Internetu" class="simple aside" %}
{:/}

-   Więcej informacji o tych aspektach współdziałania w zakresie dostępności można znaleźć w&nbsp;artykule [Podstawowe komponenty dostępności internetowej](/fundamentals/components/).
-   Wytyczne dla dostępności treści internetowych (WCAG), Wytyczne dla dostępności narzędzi do tworzenia treści (ATAG), ARIA dla złożonych dostępnych aplikacji internetowych i inne ważne materiały zostały przedstawione w&nbsp;[Omówieniu standardów dostępności W3C](/standards-guidelines/).
-   Aby dowiedzieć się więcej o tym, jak W3C WAI opracowuje materiały poprzez wielostronne, międzynarodowe uczestnictwo i&nbsp;jak możesz pomóc, zobacz [O WAI](/about/) oraz [Uczestnictwo w&nbsp;WAI](/about/participating/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

###  Spraw by Twoja witryna była dostępna {#website}

Wiele aspektów dostępności można stosunkowo łatwo zrozumieć i wdrożyć. Część rozwiązań z&nbsp;zakresu dostępności jest jednak bardziej złożona i&nbsp; wdrożenie ich wymaga większej wiedzy.

Najbardziej wydajne i skuteczne jest uwzględnianie dostępności od samego początku projektu, dzięki czemu nie trzeba ponownie wykonywać tej samej pracy.

{::nomarkdown}
{% include box.html type="start" h="3" title="Więcej informacji o tworzeniu dostępnej witryny internetowej" class="simple aside" %}
{:/}

-   Wprowadzenie do wymagań dostępności i standardów międzynarodowych znajdziesz w&nbsp;artykule [[Podstawy dostępności]](/fundamentals/accessibility-principles/).
-   Aby zrozumieć niektóre typowe bariery dostępności z&nbsp;perspektywy testowania, zobacz [[Łatwe testy - Wstępna ocena dostępności]](/test-evaluate/preliminary/).
-   Aby zapoznać się z podstawowymi uwagami na temat projektowania, pisania i&nbsp;programowania pod kątem dostępności, zobacz [[Wskazówki na dobry początek]](/tips/).
-   Gdy tylko poczujesz się na siłach, by dowiedzieć się więcej o&nbsp;programowaniu i&nbsp;projektowaniu, prawdopodobnie skorzystasz z&nbsp;takich materiałów jak:
    -   [Jak spełnić WCAG (Krótki przewodnik)](https://www.w3.org/WAI/WCAG22/quickref/)
    -   [Samouczki dotyczące dostępności internetowej](/tutorials/)
-   Aby poznać problemy zarządzania projektami i organizacją, zobacz [Planowanie i zarządzanie dostępnością internetową](/planning-and-managing/).<br>
    Jeśli chcesz już teraz dokonać szybkich poprawek, zobacz temat [Sposoby napraw tymczasowych](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## Ocena dostępności {#evaluate}

Podczas tworzenia lub modernizacji strony internetowej, należy oceniać dostępność na wczesnym etapie i&nbsp;w trakcie całego procesu tworzenia, aby rozpoznać problemy z&nbsp;dostępnością jak najwcześniej, kiedy łatwiej jest im zaradzić. Proste kroki, jak na przykład zmiana ustawień przeglądarki, mogą pomóc w&nbsp;ocenie niektórych aspektów dostępności. Kompleksowa ocena w&nbsp;celu ustalenia, czy witryna spełnia wszystkie wytyczne dotyczące dostępności, wymaga więcej wysiłku.

Istnieją specjalne narzędzia, które pomagają w ocenie. Jednak żadne narzędzie nie potrafi samodzielnie określić, czy witryna spełnia wytyczne dotyczące dostępności. Aby określić, czy witryna jest dostępna, niezbędna jest kompetentna ocena człowieka.

{::nomarkdown}
{% include box.html type="start" h="3" title="Więcej informcji o ocenianiu dostępności" class="simple aside" %}
{:/}

-   Materiały pomocne w ocenie dostępności przedstawiono w&nbsp;sekcji [[Ocena dostępności internetowej]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Przykłady

{% include excol.html type="middle" %}

### Tekst alternatywny dla obrazów

![obraz logo; Znacznik HTML img alt='Logo Inicjatywy na Rzecz Dostępności Internetowej'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Obrazy powinny mieć *[równoznaczną alternatywę tekstową](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (tekst alt) w znacznikach/kodzie.

Jeśli nie istnieje tekst alternatywny dla obrazów, informacje o&nbsp;obrazie są niedostępne, na przykład dla osób, które nie widzą i&nbsp;używają czytnika ekranu, który odczytuje na głos informacje na stronie, w&nbsp;tym tekst alternatywny dla obrazów graficznych.

Gdy podany jest równoznaczny tekst alternatywny, informacje są dostępne dla osób niewidomych, a&nbsp;także dla osób, które wyłączają obrazy (na przykład w regionach o&nbsp;drogiej lub niskiej przepustowości). Są one również dostępne dla technologii, które nie widzą obrazów, takich jak wyszukiwarki.

### Wprowadzanie danych z klawiatury

![przekreślona mysz](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Niektóre osoby nie mogą używać myszy, między innymi wielu starszych użytkowników z&nbsp;ograniczoną precyzyjną kontrolą motoryczną. Dostępna witryna internetowa nie opiera się na myszy; sprawia, że [cała funkcjonalność jest dostępna z&nbsp;poziomu klawiatury](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible). Dzięki temu osoby z&nbsp;niepełnosprawnościami mogą korzystać z&nbsp;[technologii wspomagających](/planning/involving-users/#at), zastępujących klawiaturę, takich jak sterowanie głosowe.

### Transkrypcje dźwięku

[![przykładowa transkrypcja](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Tak jak obrazy nie są dostępne dla osób, które nie widzą, tak pliki audio nie są dostępne dla osób, które nie słyszą. Zapewnienie transkrypcji sprawia, że ​​informacje audio są dostępne dla osób niesłyszących lub niedosłyszących, a&nbsp;także dla wyszukiwarek i&nbsp;innych technologii, które nie słyszą.

Zapewnienie transkrypcji w witrynach internetowych jest łatwe i&nbsp;stosunkowo niedrogie. Istnieją również [usługi transkrypcji](http://www.uiaccess.com/transcripts/transcript_services.html), które tworzą transkrypcje tekstu w&nbsp;formacie HTML.

{::nomarkdown}
{% include box.html type="start" h="3" title="Więcej przykładów" class="simple aside" %}
{:/} 

-   [Wskazówki na dobry początek](/tips/)
-   [[Łatwe testy - Wstępna ocena dostępności]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Oblicza dostępności internetowej &mdash; filmy i opisy" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Więcej informacji {#more-info}

W3C WAI zapewnia bogaty wybór materiałów dotyczących różnych aspektów dostępności: [standardów](/standards-guidelines/), [edukacji](/teach-advocate/), [testowania/oceny](/test-evaluate/), [zarządzania projektami i&nbsp;polityk](/planning/). Zachęcamy do zapoznania się z&nbsp;naszą witryną lub przejrzenia listy [materiałów WAI](/resources/).

**[[Podstawy dostępności cyfrowej - bezpłatny kurs internetowy]](/courses/foundations-course/)** dostarcza podstaw potrzebnych do zapewnienia dostępności technologii cyfrowej.


