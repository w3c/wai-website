---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Mobilní přístupnost ve W3C"
nav_title: "Mobilní přístupnost ve W3C"
lang: cs
last_updated: 2021-05-17    # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Kristýna Švecová"
contributors:
  - name: "Vojtěch Polívka"

github:
  repository: w3c/wai-website
  path: pages/standards-guidelines/mobile/index.cs.md
  label: wai-mobile

permalink: /standards-guidelines/mobile/cs    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/mobile/  # Do not change this

changelog: /standards-guidelines/mobile/changelog/  # Do not change this
feedbackmail: wai@w3.org

# In the footer below:
# Do not translate or change CHANGELOG.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>Datum:</strong> Aktualizováno 14. května 2021. Poprvé zveřejněno v lednu 2008. CHANGELOG.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Přispěvatel: <a href="https://www.w3.org/People/Brewer/">Judy Brewer</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Shrnutí" class="full" %}
{:/}

- **Mobilní přístupnost je zahrnutá v existujících standardech/pokynech W3C WAI pro přístupnost.** Samostatné pokyny pro mobilní přístupnost neexistují.
- W3C vyvíjí aktualizované požadavky a konkrétnější pokyny pro mobilní přístupnost.
- **Práce WAI [Pracovní skupiny pro mobilní přístupnost](https://www.w3.org/WAI/GL/mobile-a11y-tf/) zahrnuje:**
  - [Mobilní přístupnost: Jak se WCAG 2.0 a další W3C/WAI pokyny týkají mobilních zařízení](https://www.w3.org/TR/mobile-accessibility-mapping/)
  - WCAG 2 Kritéria úspěšnosti a techniky
  - Integraci mobilní přístupnosti v budoucích standardech W3C

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Obsah stránky" %}
{:/}

- TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Více než „mobilní“ {#intro}

„Mobilní přístupnost“ poukazuje na přístupnější webové stránky a aplikace pro osoby se zdravotním postižením, když používají mobilní telefony a jiná zařízení. Práce WAI v této oblasti řeší problémy s přístupností pro osoby, které k interakci s webem používají širokou škálu zařízení včetně:

- telefonů a tabletů
- digitálních televizí
- zařízení, která se nosí, jako třeba chytré hodinky
- zařízení v přístrojových deskách aut a opěradlech sedaček v letadle
- zařízení v domácích spotřebičích
- dalších v „internetu věcí“

Řeší široké spektrum problémů:

- dotykové obrazovky
- obrazovky malých rozměrů
- různé způsoby vstupu včetně řeči a 3D dotyku umožněného tlakovými senzory
- zařízení používaná v různých situacích, například na přímém slunci
- a další

## W3C WAI řeší mobilní přístupnost {#covered}

**Standardy přístupnosti WAI řeší mobilní přístupnost**:

- Pokyny pro zpřístupnění **obsahu webu** ([WCAG](/standards-guidelines/wcag/)) zahrnují webové stránky a aplikace včetně obsahu používaného na mobilních zařízeních
  - Informace o tom, jak lze WCAG 2.0 aplikovat na mobilní webový obsah, mobilní webové aplikace, nativní aplikace a hybridní aplikace pomocí webových komponent vrámci nativních aplikací najdete v části [Mobilní přístupnost: Jak se WCAG 2.0 a další pokyny W3C/WAI vztahují na mobilní zařízení](https://www.w3.org/TR/mobile-accessibility-mapping/).
  - Obecnějším zdrojem, který také zahrnuje mobilní aplikace, je [WCAG2ICT: Aplikování WCAG 2.0 v jiných než webových informačních a komunikačních technologiích](/standards-guidelines/wcag/non-web-ict/).
  - WCAG 2.1, zveřejněno v červnu 2018, zahrnuje nové požadavky („kritéria úspěšnosti“) pro mobilní přístupnost. Jsou představeny v [[Co je nového ve WCAG 2.1]](/standards-guidelines/wcag/new-in-21/).
- Pokyny k **uživatelským agentům** ([UAAG](/standards-guidelines/uaag/)) zahrnují webové prohlížeče a další „uživatelské agenty“ včetně mobilních prohlížečů.
  - Příklady, jak jsou webové prohlížeče, které dodržují UAAG, prospěšné pro osoby se zdravotním postižením při používání webu na mobilních zařízeních, najdete v sekci [Příklady mobilní přístupnosti z UAAG](https://www.w3.org/TR/IMPLEMENTING-UAAG20/mobile).
  - Pokud se chcete o této problematice dozvědět více, navštivte [Použití UAAG na mobilních telefonech](https://www.w3.org/WAI/UA/work/wiki/Applying_UAAG_to_Mobile_Phones).
- Pokyny pro zpřístupnění **vývojových nástrojů** ([ATAG](/standards-guidelines/atag/)) zahrnují software používaný pro tvorbu webových stránek a aplikací, včetně těch pro mobilní zařízení.
- **[WAI-ARIA](/standards-guidelines/aria/)** (Přístupné internetové aplikace) definuje, jak tvořit přístupnější obsah webu, zvláště dynamický obsah a pokročilé ovládací prvky uživatelského rozhraní. Vztahuje se na webové aplikace a na přístup k webových stránkám na mobilních zařízeních.

**W3C řeší mobilní přístupnost.** WAI zajišťuje, že základní technologie W3C podporují přístupnost, včetně těch, které jsou nezbytné pro mobilní web. Veškerá práce W3C je kontrolována z hlediska přístupnosti WAI pracovní skupinou Accessible Platform Architectures ([APA](https://www.w3.org/WAI/APA/)).

Práce W3C související s mobilními zařízeními zahrnuje [Osvědčené postupy pro mobilní webové aplikace](https://www.w3.org/TR/mwabp/) a [Osvědčené postupy pro mobilní web](https://www.w3.org/TR/mobile-bp/). Souhrn technologií vyvinutých ve W3C, které zvyšují možnosti webových aplikací a jejich konkrétní použití v mobilním kontextu, najdete v části [Standardy pro mobilní webové aplikace](https://www.w3.org/Mobile/mobile-web-app-state/).

## Aktuální informace {#updates}

Pokud chcete dostávat upozornění o budoucí práci na mobilní přístupnosti ve W3C WAI, navštivte [[Dostávat WAI novinky]](/news/subscribe/).

## Zapojte se {#involved}

Obecné informace jsou dostupné v sekci [[Účast ve WAI]](/about/participating/).

Většina práce WAI související s mobilní přístupností probíhá v [Pracovní skupině pro mobilní přístupnost](https://www.w3.org/WAI/GL/mobile-a11y-tf/). Pokud byste se chtěli podílet na práci WAI na mobilní přístupnosti, prosím pošlete e-mail s informacemi o Vašich zájmech a časové dostupnosti zprostředkovatelům pracovní skupiny [Kim Patch a Kathy Wahlbin](mailto:kathy@interactiveaccessibility.com,Kim@redstartsystems.com?cc=wai@w3.org,ran@w3.org&subject=Mobile%20Accessibility%20Task%20Force%20Enquiry) a dejte do kopie (CC) zaměstnance WAI (wai@w3.org).

## O W3C a WAI {#about}

Konsorcium pro World Wide Web (W3C) je mezinárodní konsorcium, kde členské organizace, zaměstnanci a veřejnost spolupracují na vývoji webových standardů. W3C primárně plní své poslání vytvářením webových standardů a pokynů určených k zajištění dlouhodobého růstu webu. Pro více informací navštivte [O W3C](https://www.w3.org/about/).

Iniciativa W3C pro webovou přístupnost (WAI) spojuje jednotlivce a organizace z celého světa za účelem vývoje strategií, pokynů a zdrojů, které pomáhají tvořit přístupný web pro osoby se zdravotním postižením. Pro více informací navštivte [webovou stránku WAI](https://www.w3.org/WAI/).
