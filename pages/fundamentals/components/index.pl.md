---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Podstawowe komponenty dostępności Internetu
nav_title: "Komponenty dostępności Internetu" # A short title that is used in the navigation
lang: pl   # Change "en" to the translated language shortcode
last_updated: 2024-03-14   # Keep the date of the English version

translation:
  last_updated: 2024-03-19  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Stefan Wajda"

github:
  label: wai-components

permalink: /fundamentals/components/pl
ref: /fundamentals/components/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>
    <strong>Zgoda na wykorzystanie:</strong> 
    Obrazów zamieszczonych na tej stronie można używać w celach edukacyjnych i informacyjnych, jeśli:<br> 
    1. Umieścisz URI <strong><span class="changed">w3.org/WAI/fundamentals/components/</span> <em>w widocznym miejscu</em></strong> w pobliżu obrazu, oraz <br>
    2. Umieścisz informacji o artyście, redaktorze i prawach autorskich we wszelkich publikowanych lub zamieszczanych materiałach:<br>
    <cite>Autor grafik Michael Duffy, źródło: Podstawowe komponenty doostępności Internetu. S.L. Henry, ed. Copyright W3C <sup>®</sup> (MIT, ERCIM, Keio, Beihang). w3.org/WAI/fundamentals/components/</cite><br>
    Aby uzyskać więcej informacji, zobacz <a href="https://www.w3.org/WAI/about/using-wai-material/">Using WAI Materials</a>.
  </p>
  <p><strong>Redaktor:</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. Autor grafik: Michael Duffy.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Podsumowanie" class="full" %}
{:/}

Ta strona pokazuje, w jaki sposób dostępność internetowa zależy od kilku współpracujących ze sobą komponentów oraz w&nbsp;jaki sposób ulepszenia w&nbsp;określonych komponentach mogą znacznie poprawić dostępność internetową.

Stanowi on podstawę do zrozumienia różnych standardów dostępności opracowanych przez Inicjatywę na Rzecz Dostępności Internetowej (WAI), która jest częścią Konsorcjum <abbr title="World Wide Web">W3C</abbr>.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Treść strony" class="simple" %}
{:/}

{::options toc_levels="2" /}

- This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


## Wprowadzenie {#intro}
{:.no_toc}

Aby Internet był dostępny dla osób z&nbsp;niepełnosprawnościami, konieczne jest współdziałanie kilku różnych komponentów związanych z&nbsp;projektowaniem i&nbsp;tworzeniem treści cyfrowych. Te komponenty to:

- **treść** - informacje na stronie internetowej lub w aplikacji internetowej, w tym:
  - informacje naturalne (takie jak tekst, obraz i dźwięki) oraz
  - kod lub znaczniki definiujące strukturę, prezentację itp.
- **przeglądarki internetowe, odtwarzacze multimedialne**, i inne „programy użytkownika”
- **technologie wspomagające**, w niektórych przypadkach - czytniki ekranu, alternatywne klawiatury, przełączniki, oprogramowanie skanujące itp.
- **użytkownicy**, ich wiedza, doświadczenia, a w niektórych przypadkach, sposób korzystania z internetu (strategie adaptacyjne
- **twórcy** - projektanci, programiści, autorzy itd., w tym twórcy z&nbsp;niepełnosprawnościami i&nbsp;użytkownicy, którzy współtworzą treść
- **narzędzia autorskie** - oprogramowanie do tworzenia treści cyfrowych
- **narzędzia oceniające** - oprogramowanie do oceny dostępności cyfrowej, walidatory HTML i CSS itp.

## Jak komponenty są ze sobą powiązane {#relate}

{% assign longdesc_url = "/fundamentals/components/examples/pl#relate" | relative_url %}
{% include image.html src="components/relate.pl.png" alt="Ilustruje, jak komponenty są powiązanie" longdesc=longdesc_url %}

**Twórcy** stron internetowych zwykle używają **narzędzi autorskich** i narzędzi oceniających do tworzenia **treści** cyfrowych.

**Ludzie** („**użytkownicy**”) używają **przeglądarek, odtwarzaczy mediów, technologii wspomagających** lub innych „**programów użytkownika**”, aby uzyskać dostęp do treści cyfrowych i&nbsp;wchodzić z&nbsp;nimi w&nbsp;interakcje.

## Współzależności komponentów {#depend}

Między tymi komponentami istnieją istotne współzależności; to znaczy że komponenty muszą ze sobą współpracować, aby Internet był dostępny. Na przykład, dla tekstu alternatywnego opisującego obraz:

- **specyfikacja techniczna** wymaga alternatywy tekstowej (np. HTML definiuje atrybut tekstu alternatywnego (`alt`) w elemencie obrazka (`img`)
- **wytyczne WAI** - ([WCAG, ATAG i UAAG, wymienione w dalszej części](#guidelines)) - określają, jak wdrożyć tekst alternatywny w&nbsp;różnych komponentach, aby zwiększyć dostępność
- **twórcy** zapewniają odpowiednie sformułowania tekstu alternatywnego
- **narzędzia autorskie** umożliwiają, ułatwiają i promują zamieszczanie tekstu alternatywnego na stronie internetowej
- **narzędzia oceny** służą do sprawdzenia, czy istnieje tekst alternatywny
- **oprogramowanie użytkownika** zapewnia ludziom i maszynom interfejs do obsługi tekstu alternatywnego w&nbsp;różnych trybach
- **użytkownicy** wiedzą jak odczytać tekst alternatywny w&nbsp;wykorzystywanym przez nich oprogramowaniu i/lub technologiach wspomagających, w razie potrzeby.

### Cykl implementacji

Gdy funkcje dostępności zostaną skutecznie zaimplementowane w jednym komponencie, istnieje większe prawdopodobieństwo, że zostaną wdrożone w innych komponentach.

{% include image.html src="components/cycle.pl.png" alt="" %}

- Gdy **przeglądarki internetowe, odtwarzacze mediów, technologie wspomagające** i inne **programy użytkownika** obsługują funkcje dostępności, użytkownicy częściej będą tego wymagać, a programiści częściej implementować je w swoich **treściach**.
- Gdy twórcy chcą wdrażać funkcje dostępności w swoich **treściach**, częściej domagają się, aby **narzędzie autorskie** ułatwiało ich wdrożenie.
- Gdy **narzędzia autorskie** umożliwiają łatwą implementację funkcji dostępności, twórcy chętniej je wdrożą w swoich **treściach**.
- Gdy funkcje dostępności są zaimplementowane w **większości treści**, twórcy i&nbsp;użytkownicy częściej żądają, aby obsługiwały je **programy użytkownika**.

### Gdy jeden komponent jest słaby

Gdy funkcje dostępności nie są zaimplementowane w którymś z komponentów, motywacja do zaimplementowania ich w&nbsp;pozostałych komponentach spada, jeśli nie skutkuje to zwiększeniem dostępności dla użytkownika. Na przykład mało prawdopodobne jest, aby programiści wdrożyli funkcję dostępności, która nie jest obsługiwana przez narzędzia autorskie i której nie obsługuje większość przeglądarek lub technologii wspomagających.

{% assign longdesc_url = "/fundamentals/components/examples/pl#weak" | relative_url %}
{% include image.html src="components/bridge.pl.png" alt="Ilustruje, co dzieje się, gdy jeden komponent jest słaby" longdesc=longdesc_url %}

Gdy jeden komponent kiepsko obsługuje dostępność, inne komponenty mogą to czasami zrekompensować poprzez „obejścia”, choć wymaga to znacznie większego wysiłku i ogólnie nie jest dobre dla dostępności. Na przykład:

- twórcy mogą wykonać więcej pracy, aby zrekompensować brak obsługi dostępności w&nbsp;narzędziach autorskich; na przykład poprzez bezpośrednie kodowanie znaczników zamiast za pomocą narzędzia,
- użytkownicy mogą wykonać więcej pracy, aby zrekompensować  brak obsługi dostępności w przeglądarkach, odtwarzaczach mediów lub technologiach wspomagających; na przykład, używając innej przeglądarki lub technologii wspomagającej, aby przezwyciężyć różne problemy z dostępnością.

Jednak w większości przypadków obejścia nie są wdrażane, a efektem jest wciąż ograniczona dostępność. Ponadto, czasami słaba obsługa dostępności w jednym komponencie nie może być rozsądnie przezwyciężona przez inne komponenty, a efektem jest niedostępność uniemożliwiająca niektórym osobom niepełnosprawnym korzystanie z określonej witryny, strony lub funkcji.

## Wytyczne i inne standardy {#guidelines}

Inicjatywa na Rzecz Dostępności Internetu ([WAI](https://www.w3.org/WAI/)) w Konsorcjum <span lang="en">World Wide Web</span> ([W3C](https://www.w3.org/)) opracowuje **standardy dostępności cyfrowej** dla różnych komponentów:

- [[Wytyczne dla dostępności narzędzi autorskich (ATAG)]](/standards-guidelines/atag/) dotyczące narzędzi do tworzenia treści
- [[Wytyczne dla dostępności treści internetowych (WCAG)]](/standards-guidelines/wcag/) dotyczące treści i wykorzystywane przez twórców oraz narzędzia autorskie i oceniające
- [Wytyczne dla dostępności programów użytkownika (UAAG)](/standards-guidelines/uaag/) dotyczące przeglądarek i odtwarzaczy mediów oraz niektórych aspektów technologii wspomagających

Te wytyczne opierają się na podstawowych specyfikacjach technicznych Internetu i są opracowywane w połączeniu ze <a href="https://www.w3.org/TR/">wszystkimi specyfikacjami technicznymi W3C</a> (HTML, CSS, SVG, SMIL itp.). W3C opracowuje również specyfikacje techniczne, które bezpośrednio dotyczą dostępności, w tym:

- [ARIA, Złożone Dostępne Aplikacje Internetowe](/standards-guidelines/aria/), która wskazuje, jak uczynić złożone aplikacje internetowe bardziej dostępnymi dla osób z&nbsp;niepełnosprawnościami. Szczególnie pomaga w tworzeniu treści dynamicznych i zaawansowanych kontrolek interfejsu użytkownika opracowanych przy użyciu Ajax, HTML, JavaScript i&nbsp;pokrewnych technologii.

{% assign longdesc_url = "/fundamentals/components/examples/pl#guide" | relative_url %}
{% include image.html src="components/specs.pl.png" alt="Pokazuje wytyczne dla różnych komponentów" longdesc=longdesc_url %}

Aby uzyskać więcej informacji, zobacz [[Omówienie standardów dostępności W3C]](/standards-guidelines/).

