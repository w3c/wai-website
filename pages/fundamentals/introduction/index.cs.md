---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Úvod do webové přístupnosti 
lang: cs
last_updated: 2020-08-26   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: #Add one -name: line for every translator
  - name: "Kristýna Švecová"
contributors: #Add one -name: line for every contributor
  - name: "Jiří Zmrhal"

github:
    label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/cs   # Add the language shortcode to the end; for example /fundamentals/accessibility-intro/fr
ref: /fundamentals/accessibility-intro/   # Do not change this

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this

# In the footer below:
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>Datum:</strong> Aktualizováno 5. června 2019. Poprvé zveřejněno v únoru 2005. CHANGELOG.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Vyvinuto Pracovní skupinou pro vzdělání a osvětu (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---


{::nomarkdown}
{% include box.html type="start" h="2" title="Shrnutí" class="full" %}
{:/}

Pokud jsou webové stránky a nástroje řádně navrženy a naprogramovány, jsou použitelné pro lidi se zdravotním postižením. V současné době je ale mnoho stránek a nástrojů vytvořeno s bariérami přístupnosti, které pro některé lidi znemožňují použití těchto stránek.

Tvorba přístupného webu je prospěšná pro jednotlivce, podniky i společnost. Mezinárodní webové směrnice definují, co je potřeba pro webovou přístupnost.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Obsah stránky" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">Související zdroje</span><br>
{% include video-link.html title="Video úvod do webové přístupnosti a W3C standardů <em>(4 minuty)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits.html" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Přístupnost v souvislostech {#context}

<blockquote class="pull">
  <p>Síla webu je v jeho všeobecnosti.<br />
    Přístup pro všechny nehledě na způsobilost je zásadním aspektem.</p>
  <footer><cite>Tim Berners-Lee, ředitel W3C a vynálezce World Wide Webu</cite></footer>
</blockquote>

Web je v podstatě navržen, aby fungoval pro všechny lidi, nehledě na jejich hardware, software, jazyk, lokaci nebo schopnosti. Když web dosáhne tohoto cíle, je přístupný pro osoby s širokým spektrem sluchu, pohybu, zraku a kognitivních schopností.

Dopad zdravotního postižení se tedy na webu radikálně mění, protože web odstraňuje překážky v komunikaci a interakcích, kterým mnoho lidí ve fyzickém světě čelí. Pokud jsou však webové stránky, aplikace, technologie nebo nástroje špatně navrženy, mohou vytvářet bariéry, které zabraňují lidem v používání webu.

**Přístupnost je nezbytná pro vývojáře a organizace, kteří chtějí produkovat vysoce kvalitní webové stránky a webové nástroje a nezabraňovat lidem v používání jejich produktů a služeb.**


## Co je webová přístupnost {#what}

Webová přístupnost znamená, že webové stránky, nástroje a technologie jsou navržené a vyvinuté tak, že lidé se zdravotním postižením je mohou používat. Konkrétněji, lidé mohou:

-   vnímat, rozumět, navigovat a interagovat s webem
-   přispívat na web

Webová přístupnost zahrnuje všechna postižení, která mají vliv na přístup k webu, včetně postižení:

-   sluchových
-   kognitivních
-   neurologických
-   fyzických
-   řečových
-   zrakových

Webová přístupnost je přínosná také pro osoby *bez* postižení, například:

-   osoby, které používají mobilní telefony, chytré hodinky, chytré televize a další přístroje s malými obrazovkami, různými vstupními režimy apod.
-   starší osoby, jejichž schopnosti se mění s věkem
-   osoby s "dočasným postižením" jako třeba zlomenou rukou nebo ztracenými brýlemi
-   osoby v "limitujících situacích" jako třeba na přímém slunci nebo v prostředí, kde nemohou poslouchat zvuk
-   osoby s pomalým připojením k internetu nebo s omezenými nebo drahými daty

Pro sedmiminutové video s příklady, jak je přístupnost nezbytná pro lidi s postižením a užitečná pro všechny v různých situacích, navštivte:<br>
{% include video-link.html title="Video o perspektivách webové přístupnosti <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Více informací o tom, co je přístupnost" class="simple aside" %}
{:/}

-   Pokud chcete zjistit více o tom, jak různá zdravotní postižení ovlivňují používání webu, navštivte [[Jak lidé s postižením používají web]](/people-use-web/).
-   Pro více příkladů výhod pro ostatní, podložených WCAG, navštivte [[Sdílené zkušenosti na webu: Bariéry společné pro uživatele mobilních telefonů a osoby s postižením]](/standards-guidelines/shared-experiences/) a archivované [výhody webové přístupnost pro lidi s postižením i bez](https://www.w3.org/WAI/business-case/archive/soc#groups).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Přístupnost je důležitá pro jednotlivce, podniky, společnost {#important}

Web se stává stále důležitějších zdrojem v mnoha oblastech života: vzdělání, zaměstnání, vládě, obchodu, zdravotnictví, rekreaci a dalších. Je zásadní, aby web byl přístupný a poskytoval rovnocenný přístup a rovné příležitosti lidem s různými schopnostmi. Přístup k informačním a komunikačním technologiím, včetně webu, je definován jako základní lidské právo v konvenci Spojených národů O právech osob se zdravotním postižením (UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html)).

Web nabízí možnost bezprecedentního přístupu k informacím a interakcím pro mnoho lidí se zdravotním postižením. To znamená, že bariéry přístupnosti v tisku, audio a vizuálních médiích lze snadno překonat pomocí webových technologií.

Přístupnost podporuje sociální začleňování osob se zdravotním postižením i ostatních, například:

-   starších osob
-   osob v odlehlých oblastech
-   osob v rozvojových zemích

**Přístupnost má také zásadní ekonomický význam.** Jak je vysvětleno v předchozích sekcích, přístupný design vylepšuje celkový uživatelský prožitek a spokojenost, zejména v různých situacích, s různými zařízeními a pro starší uživatele. Přístupnost může vylepšit Vaši značku, řídit inovace a zvětšit Váš dosah na trhu.

Webová přístupnost je **vyžadována zákonem** v mnoha situacích.

{::nomarkdown}
{% include box.html type="start" h="3" title="Více informací k sekci Přístupnost je důležitá" class="simple aside" %}
{:/}

-   Základní informace o výhodách pro firmy jsou v [[Obchodním případě pro digitální přístupnost]](/business-case/).
-   Pokyny pro pochopení zákonných požadavků je v archivovaných [Právních a politických faktorech](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Tvorba přístupného webu {#making}

Webová přístupnost závisí na několika spolupracujících komponentách, včetně webových technologií, prohlížečů a dalších \"uživatelských\" agentů, vývojových nástrojů a webových stránek.

Iniciativa pro webovou přístupnost W3C ([WAI](/get-involved/)) vyvíjí technické specifikace, pokyny, techniky a podpůrné zdroje, které popisují přístupná řešení. Ta jsou považována za mezinárodní standardy pro webovou přístupnost, například <abbr title="Pokyny pro přístupnost webového obsahu (WCAG)">WCAG</abbr> 2.0 je také <abbr title="Mezinárodní organizace pro normalizaci">ISO</abbr> norma: ISO/<abbr title="Mezinárodní elektrotechnická komise">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Více informací o Tvorbě přístupného webu" class="simple aside" %}
{:/}

-   Více o spolupracujících aspektech přístupnosti v [[Základních komponentech webové přístupnosti]](/fundamentals/components/).
-   Pokyny pro zpřístupnění obsahu webu (WCAG), Pokyny pro zpřístupnění vývojových nástrojů (ATAG), ARIA Přístupné internetové aplikace a další důležité zdroje jsou představeny ve [[W3C Přehledu standardů přístupnosti]](/standards-guidelines/).
-   Pro více informací o tom, jak W3C WAI vyvíjí materiály za pomoci několika zúčastněných stran, mezinárodní spolupráce a jak můžete přispět Vy, navštivte [[O WAI]](/about/) a [[Přispívání pro WAI]](/get-involved/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Zpřístupnění Vaší webové stránky {#website}

Řada aspektů přístupnosti je poměrně snadno pochopitelná a impementovatelná. Některá řešení přístupnosti jsou složitější a jejich implementace vyžaduje více znalostí.

Nejefektivnější je zařadit přístupnost hned od začátku projektu, aby nebylo nutné se vracet a opravovat již existující práci.

{::nomarkdown}
{% include box.html type="start" h="3" title="Více informací o Zpřístupnění Vaší webové stránky" class="simple aside" %}
{:/}

-   Pro úvod do požadavků pro přístupnost a mezinárodních standardů, navštivte [[Principy přístupnosti]](/fundamentals/accessibility-principles/).
-   Pro porozumění běžným překážkám přístupnosti z pohledu testování, navštivte [[Základní kontrola - První revize]](/test-evaluate/preliminary/).
-   Pro základní činitele přístupnosti při navrhování, psaní a vyvíjení, navštivte [[Tipy pro začátek]](/tips/).
-   Pokud jste připraveni dozvědět se víc o vyvíjení a navrhování, pravděpodobně se Vám budou hodit zdroje jako:
    -   [Jak splnit WCAG (Rychlý průvodce)](https://www.w3.org/WAI/WCAG21/quickref/)
    -   [Výukové materiály pro webovou přístupnost](https://www.w3.org/WAI/tutorials/)
-   Pro řízení projektů a organizační aspekty, navštivte [[Plánování a řízení webové přístupnosti]](/planning-and-managing/).<br>
    Pokud potřebujete rychlé opravy hned, navštivte [[Kroky pro dočasné opravy]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## Hodnocení přístupnosti {#evaluate}

Při vývoji nebo redesignu webové stránky zhodnoťte přístupnost na začátku, a pak také během vývoje, abyste identifikovali problémy v přístupnosti co nejdříve, dokud je možné je snadněji opravit. Jednuduché kroky, jako třeba změna nastavení v prohlížeči, Vám mohou pomoci zhodnotit některé aspekty přístupnosti. Komplexní zhodnocení toho, zda Vaše webová stránka splňuje všechny pokyny pro přístupnost, vyžaduje více úsilí.

Existují nástroje, které pomáhají s hodnocením. Žádný nástroj však sám nemůže určit, zda stránka splňuje všechny pokyny pro přístupnost. K určení, zda je web skutečně přístupný, je třeba informované lidské zhodnocení.


{::nomarkdown}
{% include box.html type="start" h="3" title="Více informací o Hodnocení přístupnosti" class="simple aside" %}
{:/}

-   Zdroje, které pomáhají s hodnocením přístupnosti, jsou popsány v [[Hodnocení přístupnosti webových stránek]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Příklady

{% include excol.html type="middle" %}

### Textové alternativy obrázků

![obrázek loga, HTML kód pro obrázek s alternativním textem Logo Iniciativy pro přístupnost webu'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Obrázky by měly obsahovat *[ekvivalentní textové alternativy](https://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv.html)* (alt text) v kódu.

Pokud není poskytnuta textová alternativa obrázku, obrázek není přístupný například pro lidi, kteří nevidí a používají čtečku obrazovky. Ta čte nahlas informace na stránce, včetně textových alternativ pro obrázky.

Pokud je poskytnutá textová alternativa obrázku, informace je přístupná pro slepé osoby, stejně jako pro osoby, které mají vypnuté zobrazení obrázků (například v oblastech s drahým nebo pomalým připojením). Informace je také dostupná pro technologie, které obrázky nevidí, jako třeba vyhledávače.

### Přístupnost z klávesnice

![přeškrtnutá myš](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Někteří lidé nemohou používat myš, včetně starších osob s omezenou jemnou motorikou. Přístupná webová stránka nespoléhá na myš, [všechny funkce jsou dostupné z klávesnice](https://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html). Pak lidé se zdravotním postižením mohou používat [asistenční technologie](/planning/involving-users/#at), které imitují klávesnici, jako třeba ovládání hlasem.

### Přepis pro zvuk

[![příklad přepisu](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Stejně jako obrázky nejsou přístupné lidem, kteří nevidí, zvukové soubory nejsou dostupné lidem, kteří neslyší. Poskytnutí přepisu zpřístupní zvukové informace hluchým a osobám se zhoršeným sluchem, zároveň vyhledávačům a dalším technologiím, které neslyší.

Poskytnutí přepisu je jednoduché a relativně levné. Existují také [služby pro tvorbu přepisu](http://www.uiaccess.com/transcripts/transcript_services.html), které vytvoří přepis ve formátu HTML.

{::nomarkdown}
{% include box.html type="start" h="3" title="Více příkladů" class="simple aside" %}
{:/} 

-   [[Tipy pro začátek]](/tips/)
-   [[Základní kontrola - První revize]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Perspektivy webové přístupnosti &mdash; videa a popisy" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Více informací {#more-info}

W3C WAI poskytuje široké spektrum zdrojů o různých aspektech [standardů](/standards-guidelines/) webové přístupnosti, [vzdělávání](/teach-advocate/), [testování/hodnocení](/test-evaluate/), [řízení projektů a firemních postupech](/planning/). Doporučujeme prozkoumat tento web nebo prostudovat seznam [zdrojů WAI](/Resources/).
