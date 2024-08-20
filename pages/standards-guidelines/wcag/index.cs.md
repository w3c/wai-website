---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "WCAG 2 Přehled"
nav_title: "Obsah webu – WCAG 2"
lang: cs  # Change "en" to the translated-language shortcode
last_updated: 2023-12-05  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Kristýna Švecová" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  repository: w3c/wai-intro-wcag
  path: 'content/index.cs.md'  # Add the language shortcode to the middle of the filename, for example: content/index.fr.md

permalink: /standards-guidelines/wcag/cs  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/  # Do not change this

description: Představuje mezinárodní standard Pokyny pro zpřístupnění obsahu webu (WCAG) včetně WCAG 2.0, WCAG 2.1 a WCAG 2.2. WCAG dokumenty vysvětlují, jak udělat obsah webu přístupnější pro lidi s postiženími.
image: /content-images/wai-intro-wcag/wcag-intro-social.jpg
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Datum:</strong> Aktualizováno 5. října 2023. Poprvé zveřejněno v červenci 2005.</p>
  <p><strong>Editor:</strong> <a href="http://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Vyvinuto za spolupráce s Pracovní skupinou pro vzdělání a osvětu (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>) a Pracovní skupinou pro pokyny pro přístupnost. (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Shrnutí" class="full" %}
{:/}

Tato stránka představuje mezinárodní standard Pokyny pro zpřístupnění obsahu webu (WCAG) včetně WCAG 2.0, WCAG 2.1 a WCAG 2.2. WCAG dokumenty vysvětlují, jak udělat obsah webu přístupnější pro lidi s postiženími.

Jiná stránka [představuje WCAG 3](/standards-guidelines/wcag/wcag3-intro/).

WCAG není úvod do přístupnosti. Pro základní informace navštivte [Přehled základů přístupnosti](/fundamentals/)

Rychlé odkazy na zdroje:
* [Jak splnit WCAG 2 (Rychlý průvodce)](http://www.w3.org/WAI/WCAG21/quickref/)
* [Standard WCAG 2.2](https://www.w3.org/TR/WCAG22/), [Co je nového v WCAG 2.2](/standards-guidelines/wcag/new-in-22/)
* [Standard WCAG 2.1](http://www.w3.org/TR/WCAG21/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Obsah stránky" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Úvod {#intro}

Pokyny pro zpřístupnění obsahu webu (WCAG) 2 jsou vyvinuté [W3C procesem](/standards-guidelines/w3c-process/) ve spolupráci s jednotlivci a organizacemi z celého světa s cílem poskytnutí jednotného sdíleného standardu pro přístupnost obsahu webu, který splňuje potřeby jednotlivců, organizací a vlád napříč národy.

WCAG dokumenty vysvětlují, jak udělat obsah webu přístupnější pro lidi s postiženími. „Obsah“ webu obecně označuje informace na webové stránce nebo webové aplikaci, včetně:

-   přirozené informace, jako je text, obrázky a zvuky
-   kódu nebo značek, které definují strukturu, prezentaci atd.

## Pro koho je WCAG {#for}

WCAG je pro ty, kteří chtějí technický standard. **Nejedná se o úvod do přístupnosti. Odkazy na základní informace jsou k nalezení v [„Kde mám začít?“ v Často kladných otázkách](/standards-guidelines/wcag/faq/#start).**

WCAG je primárně určeno pro:

-   Vývojáře webového obsahu (autory stránek, designéry, atd.)
-   Vývojáře nástrojů pro vývoj webu
-   Vývojáře nástrojů pro hodnocení přístupnosti
-   Ostatní, kteří chtějí nebo potřebují standard pro webovou přístupnost, včetně mobilní přístupnosti

Pro splnění požadavků ostatních &mdash; včetně tvůrců pravidel, manažerů a výzkumníků &mdash; existuje mnoho dalších [[WAI zdrojů]](/resources/).

## Co je v WCAG 2 {#whatis2}

WCAG 2.2 má 13 pokynů. Pokyny jsou uspořádány podle [4 principů: vnímání, ovládání, srozumitelnost a robustnost](https://www.w3.org/WAI/WCAG21/Understanding/intro#understanding-the-four-principles-of-accessibility).

Pro každý pokyn existují testovatelná *kritéria úspěšnosti*. Kritéria úspěchu mají [tři úrovně: A, AA a AAA](https://www.w3.org/WAI/WCAG21/Understanding/conformance#levels).

Kritéria úspěšnosti určují „soulad“ s WCAG. To znamená, že aby obsah splnil WCAG, musí splňovat kritéria úspěšnosti. Podrobnosti jsou v sekci [Soulad s WCAG](https://www.w3.org/TR/WCAG21/#conformance).

Krátké shrnutí pokynů WCAG 2 naleznete v **[[Náhledu na WCAG 2]](/standards-guidelines/wcag/glance/)**.

### Podpůrné materiály a doplňkové směrnice {#supplement}

Následující zdroje vám pomohou pochopit a implementovat WCAG a zlepšit přístupnost nad rámec WCAG:
* Rychlá reference / Jak splnit WCAG 2 / Kontrolní seznam
* Pochopení WCAG 2
* Techniky pro WCAG 2
* Testovací pravidla pro WCAG 2
* Doplňkové pokyny

**Přečtěte si o těchto WCAG 2 zdrojích v [Dokumentech WCAG 2](/standards-guidelines/wcag/docs/).**

## WCAG 2.0, 2.1, 2.2 {#versions}

Standardy Pokyny pro zpřístupnění obsahu webu (WCAG) jsou stabilní a odkazovatelné, pokud jsou zveřejněny jako webový standard „Doporučení W3C“.

* [WCAG 2.0](https://www.w3.org/TR/WCAG20/) bylo zveřejněno 11. prosince 2008.
* [WCAG 2.1](https://www.w3.org/TR/WCAG21/) bylo zveřejněno 5. června 2018 a aktualizace byla zveřejněna 21. září 2023. [WCAG 2 Často kladené otázky](https://www.w3.org/WAI/standards-guidelines/wcag/faq/) obsahuje informace o aktualizaci.
* [WCAG 2.2](https://www.w3.org/TR/WCAG22/) bylo zveřejněno 5. října 2023.

WCAG 2.0, 2.1 a 2.2 jsou navrženy tak, aby byly „zpětně kompatibilní“, což znamená, že obsah, který splňuje WCAG 2.2, splňuje také WCAG 2.1 a WCAG 2.0. Pokud chcete splnit všechny verze, můžete použít zdroje WCAG 2.2 a nemusíte se zabývat hledáním starších verzí.

Všechna kritéria úspěšnosti z 2.0 jsou zahrnuta v 2.1 a všechna z 2.1 jsou v 2.2 (kromě 4.1.1, vysvětleno v dalším odstavci).
* WCAG 2.0 má 12 pokynů.
* WCAG 2.1 přidává 1 pokyn a 17 kritérií úspěchu, které jsou představeny v [Co je nového v WCAG 2.1](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-21/).
* WCAG 2.2 přidává 9 kritérií úspěchu, které jsou představeny v [Co je nového v WCAG 2.2](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-22/).

Některé věci se změnily a aktualizace v souvisejících dokumentech jsou zamýšleny s ohledem na podporu zpětné kompatibility v praxi. Hlavní změnou je, že ve WCAG 2.2 je jedno kritérium úspěchu (4.1.1 Analýza syntaxu) zastaralé. Poznámky přidané k seznamu chyb v WCAG 2.1 a WCAG 2.0 to řeší, jak je vysvětleno v [WCAG 2 Často kladených otázkách, 4.1.1 Analýza syntaxu](https://www.w3.org/WAI/standards-guidelines/wcag/faq/#parsing411). WCAG 2.2 také obsahuje poznámky o různých jazycích, více informací naleznete v [WCAG 2 Často kladených otázkách, internacionalizace](https://www.w3.org/WAI/standards-guidelines/wcag/faq/#118n22).

WCAG 2.0, WCAG 2.1 a WCAG 2.2 jsou existující standardy. WCAG 2.2 nečiní zastaralým ani nenahrazuje WCAG 2.1 a WCAG 2.1 nečiní zastaralým ani nenahrazuje WCAG 2.0. W3C doporučuje používat nejnovější verzi WCAG.

## Překlady

Autorizované překlady a neoficiální překlady WCAG 2 jsou uvedeny v [[Překladech WCAG 2]](/standards-guidelines/wcag/translations/).

## WCAG 2.0 je ISO/IEC 40500 {#iso}

WCAG 2.0 je schváleno jako norma ISO: ISO/IEC 40500:2012. ISO/IEC 40500 je přesně stejná jako původní WCAG 2.0, které je představeno výše spolu s podpůrnými zdroji.

Obsah ISO/IEC 40500 je volně dostupný na [www.w3.org/TR/WCAG20](http://www.w3.org/TR/WCAG20/), je k dispozici ke koupi v [ISO katalogu {% include_cached external.html %}](http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=58625).

Výhody WCAG 2.0 jako normy ISO jsou shrnuty v [ISO v Často kladených otázkách](/standards-guidelines/wcag/faq/#iso). Další informace o W3C a ISO procesu jsou v [Často kladených otázkách W3C PAS](http://www.w3.org/2010/04/pasfaq).

**W3C plánuje předložit WCAG 2.2 prostřednictvím procesu ISO.**

## Kdo vytváří WCAG {#wg}

Technické dokumenty WCAG vytváří Pracovní skupina pro pokyny pro přístupnost ([AG WG](https://www.w3.org/WAI/GL/)) *(dříve Pracovní skupina pro pokyny pro přístupný webový obsah)*, která je součástí Konsorcia pro World Wide Web ([W3C](http://www.w3.org)) Iniciativy pro webovou přístupnost ([WAI](https://www.w3.org/WAI/)).

WAI pravidelně aktualizuje Techniky pro WCAG 2 a Porozumění WCAG 2. Vítáme [komentáře](/standards-guidelines/wcag/commenting/) a [předložení nových technik](http://www.w3.org/WAI/GL/WCAG20/TECHS-SUBMIT/).

Příležitosti pro přispívání do WCAG a další práce WAI jsou představeny v [[Účast ve WAI]](/about/participating/).

## WCAG 3 a další informace {#more}

WCAG je součástí řady pokynů pro přístupnost, včetně Pokynů pro zpřístupnění vývojových nástrojů (ATAG) a Pokynů k uživatelským agentům (UAAG). [[Základní součásti přístupnosti webu]](/fundamentals/components/) vysvětluje vztah mezi jednotlivými pokyny.

Navštivte [[WCAG 2 Často kladené otázky]](/standards-guidelines/wcag/faq/) pro více informací o:

-   **[mobilní přístupnosti](/standards-guidelines/wcag/faq/#mobile) ve WCAG 2**
-   **použití WCAG 2 v [dokumentech a softwaru](/standards-guidelines/wcag/faq/#wcag2ict)**
-   a více...

Informace o raném návrhu Pokynů přístupnosti W3C 3.0 (dříve známé jako „Sliver“) naleznete v **[Představení WCAG 3](/standards-guidelines/wcag/wcag3-intro/)**.
