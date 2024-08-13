---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Einführung in das barrierefreie Web
lang: de
last_updated: 2024-02-23       # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:  #Add one -name: line for every translator
  - name: "Alexej Rotar"
contributors:    #Add one -name: line for every contributor
  - name: "Jens Oliver Meiert"
    link: "https://meiert.com/de/biography/"

github:
    label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/de
ref: /fundamentals/accessibility-intro/

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this
  
# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Datum:</strong> Aktualisiert am 20. November 2023. Erstmals veröffentlicht 2005. CHANGELOG.</p>
  <p><strong>Redakteur:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Entwickelt von der Arbeitsgruppe für Bildung und Öffentlichkeitsarbeit. (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Zusammenfassung" class="full" %}
{:/}

Wenn Webseiten und Webwerkzeuge richtig gestaltet und programmiert sind, können Menschen mit Behinderungen sie nutzen. Derzeit werden jedoch viele Seiten und Werkzeuge mit Barrieren entwickelt, die ihre Nutzung für manche Menschen schwer oder unmöglich machen.

Das Web barrierefrei zu machen dient Einzelnen, Unternehmen sowie der Gesellschaft. Internationale Webstandards legen fest, was für Barrierefreiheit erforderlich ist.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Inhaltsverzeichnis" class="full" %}
{:/}

-   Das Inhaltsverzeichnis wurde automatisch erstellt.
{:toc}

<span class="box-h box-h-simple box-h-full">Verwandte Quelle</span><br>
{% include video-link.html title="Videoeinführung in das barrierefreie Web und W3C-Standards <em>(4 Minuten)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Barrierefreiheit im Kontext {#context}

<blockquote class="pull">
  <p>Die Stärke des Webs liegt in dessen Universalität.<br>
    Der Zugriff aller Menschen, unabhängig von Behinderungen, ist ein unabdingbarer Bestandteil.</p>
  <footer><cite>Tim Berners-Lee, Leiter des W3C und Erfinder des World Wide Web</cite></footer>
</blockquote>

Das Web ist grundlegend so gestaltet, dass es für alle Menschen unabhängig von deren Hardware, Software, Sprache, Ort oder Fähigkeiten funktioniert. Wenn das Web dieses Ziel erreicht, ist es für Menschen mit unterschiedlichen Hör-, Bewegungs-, Sehvermögen und kognitiven Fähigkeiten zugänglich.

Der Einfluss von Behinderungen ist im Web anders, weil das Web Barrieren in der Kommunikation und Interaktion beseitigt, denen viele Menschen in der physischen Welt begegnen. Wenn Webseiten, Anwendungen, Technologien oder Werkzeuge allerdings schlecht gestaltet sind, können sie Barrieren erzeugen, die Menschen an der Nutzung des Webs hindern.

**Barrierefreitheit ist essenziell für Entwickler:innen und Organisationen, die hochwertige Webseiten und Webwerkzeuge erstellen und Menschen nicht an der Nutzung ihrer Produkte und Dienstleistungen hindern wollen.**


## Was ist das barrierefreie Web {#what}

Barrierefreies Web bedeutet, dass Webseiten, Werkzeuge und Technologien so gestaltet sind, dass Menschen mit Behinderungen sie nutzen können. Genauer gesagt können Menschen

- das Web wahrnehmen, verstehen, navigieren sowie mit ihm interagieren
- zum Web beitragen

Barrierefreies Web schließt alle Behinderungen ein, die den Zugang zum Web beeinträchtigen, einschließlich

- Hörbehinderungen,
- kognitive Behinderungen,
- neurologische Erkrankungen,
- körperliche Behinderungen,
- Sprachbehinderungen und
- Sehbehinderungen.

Ein barrierefreies Web dient auch Menschen *ohne* Behinderungen, beispielsweise:

- Menschen, die Handys, Smart Watches, Smart TVs oder andere Geräte mit kleinen Bildschirmen, unterschiedlichen Eingabemethoden etc. nutzen
- älteren Menschen mit altersbedingt ändernden Fähigkeiten
- Menschen mit "vorübergehenden Behinderungen", etwa einem gebrochenen Arm oder einer verlegten Brille
- Menschen mit "situationsbedingten Einschränkungen", wie etwa im hellen Sonnenlicht oder in Umgebungen, in denen sie keine Audioinhalte hören können
- Menschen, die eine langsame Internetverbindung nutzen oder die beschränkte oder teure Bandbreite haben

Im nachfolgenden 7-minütigen Video sehen Sie Beispiele, die zeigen, wie Barrierefreiheit essenziell für Menschen mit Behinderungen und nützlich für alle in verschiedenen Situationen ist:<br>
{% include video-link.html title="Video zu Perspektiven auf barrierefreies Web <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Weitere Infos zum barrierefreien Web" class="simple aside" %}
{:/}

- Wenn Sie mehr darüber lernen wollen, wie verschiedene Behinderungen die Nutzung des Webs beeinflussen und Beispiele sehen wollen, wie Menschen mit Behinderung das Web nutzen, lesen Sie [[Wie Menschen mit Behinderung das Web nutzen]](/people-use-web/).
- Mehr Beispiele über Vorteile für andere finden Sie in den Ressourcen zu Mobile [[Geteilte Erfahrungen im Web: gemeinsame Barrieren von Nutzer:innen mit mobilen Geräten und Menschen mit Behinderung]](/standards-guidelines/shared-experiences/), Multimedia [Genutzt von Menschen mit und ohne Behinderungen](/media/av/users-orgs/#situations) sowie in der archivierten Seite [Ein barrierefreies Web nutzt Menschen mit und ohne Behinderungen](https://www.w3.org/WAI/business-case/archive/soc#groups).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Barrierefreiheit ist wichtig für Einzelne, Unternehmen und Gesellschaft {#important}

Das Web ist eine zunehmend wichtigere Ressource in vielen Bereichen des Lebens: Bildung, Beschäftigung, Regierung, Handel, Gesundheitsversorgung, Freizeit und mehr. Ein barrierefreies Web ist essenziell, um Menschen mit verschiedenen Fähigkeiten gleichen Zugang und gleiche Chancen zu bieten. Der Zugang zu Kommunikationstechnologien, einschließlich des Webs, wurde im Übereinkommen über die Rechte von Menschen mit Behinderungen (UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html)) als grundlegendes Menschenrecht festgelegt.

Das Web bietet für Menschen mit Behinderungen eine noch nie dagewesene Möglichkeit für den Zugang zu Informationen sowie für die Interaktion, in dem Sinne, dass Barrieren von Print-, Audio- und Videomedien viel einfacher mittels Webtechnologien beseitigt werden können.

Barrierefreiheit unterstützt die soziale Inklusion von Menschen mit Behinderungen und anderen, darunter:

- älteren Menschen
- Menschen in ländlichen Gegenden
- Menschen in Entwicklungsländern

**Es gibt auch aus unternehmerischer Sicht ein starkes Argument für Barrierefreiheit.** Wie im vorigen Abschnitt gezeigt, verbessert barrierefreies Design die allgemeine Nutzer:innenerfahrung und Befriedigung, insbesondere in einer Vielzahl von Umständen, über verschiedene Geräte hinweg und für ältere Nutzer:innen. Barrierefreiheit kann Ihre Marke stärken, Innovation fördern und Ihre Marktreichweite erhöhen.

Barrierefreiheit ist in vielen Fällen **gesetzlich verpflichtend**.

{::nomarkdown}
{% include box.html type="start" h="3" title="Weitere Infos zur Bedeutung von Barrierefreiheit" class="simple aside" %}
{:/}

-   Allgemeine Informationen über die geschäftlichen Vorteile finden Sie unter [[Gründe für digitale Barrierefreiheit aus unternehmerisches Sicht]](/business-case/).
    -   Beispiele für Vorteile von [barrierefreien Audio- und Videomedien](/media/av/) finden Sie unter [Vorteile für Unternehmen](/media/av/users-orgs/#benefits).
-   Anleitungen für die Erfassung von rechtlichen Anforderungen finden Sie im archivierten [Rechtliche Faktoren und Richtlinien](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Das Web barrierefrei machen {#making}

Barrierefreiheit im Web hängt vom Zusammenspiel zahlreicher Komponenten ab, unter anderem Webtechnologien, Webbrowsern und anderen \"User Agents\", Erstellungswerkzeugen und Webseiten.

Die W3C-Initiative für barrierefreies Web – die Web Accessibility Initiative ([WAI](/about/participating/)) – entwickelt technische Spezifikationen, Richtlinien, Techniken sowie unterstützende Ressourcen, die Lösungen für Barrierefreiheit beschreiben. Diese gelten als internationale Standards für barrierefreies Web. Die Richtlinien für barrierefreie Webinhalte, <abbr title="Web Content Accessibility Guidelines (WCAG)" lang="en">WCAG</abbr> 2.0, ist beispielsweise auch ein <abbr title="International Organization for Standardization" lang="en">ISO</abbr> Standard: ISO/<abbr title="International Electrotechnical Commission" lang="en">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Weitere Infos zum barrierefreien Gestalten des Webs" class="simple aside" %}
{:/}

-   Mehr zum Zusammenspiel dieser Aspekte gibt es unter [[Wesentliche Komponenten des barrierefreien Webs]](/fundamentals/components/).
-   Die Richtlinien für barrierefreie Webinhalte (WCAG), die Richtlinien für barrierefreie Erstellungswerkzeuge (ATAG), den Standard für barrierefreie Internetanwendungen (ARIA), und weitere wichtige Ressourcen werden eingeführt unter [[Übersicht über die Standards für Barrierefreiheit des W3C]](/standards-guidelines/).
-   Mehr darüber wie W3C WAI durch die internationale Beteiligung vieler Interessensvertreter:innen Material entwickelt und wie Sie beitragen können, finden Sie in [[Über WAI]](/about/) und unter [[Sich bei WAI beteiligen]](/about/participating/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Ihre Webseite barrierefrei gestalten {#website}

Viele Aspekte von Barrierefreiheit sind ziemlich einfach zu verstehen und zu implementieren. Manche Lösungen für Barrierefreiheit sind eher komplex und benötigen mehr Kenntnisse für die Umsetzung.

Am effizientesten und effektivsten ist es, Barrierefreiheit von Anfang an in einem Projekt zu berücksichtigen, damit Sie nicht zurückgehen und Arbeiten erneut durchführen müssen.

{::nomarkdown}
{% include box.html type="start" h="3" title="Weitere Infos zum barrierefreien Gestalten Ihrer Webseite" class="simple aside" %}
{:/}

-   Eine Einführung in die Anforderungen an Barrierefreiheit und internationale Standards finden Sie unter [[Grundlagen der Barrierefreiheit]](/fundamentals/accessibility-principles/).
-   Um einige übliche Barrieren aus Sicht des Testens zu verstehen, beachten Sie [[Einfache Checks – Eine erste Beurteilung]](/test-evaluate/preliminary/).
-   Für ein paar grundsätzliche Überlegungen im Bezug auf das Gestalten, Schreiben und Entwickeln für Barrierefreiheit, beachten Sie [[Tipps für den Einstieg]](/tips/).
-   Sobald Sie bereit sind, mehr über das Entwickeln und Gestalten zu erfahren, werden Sie wahrscheinlich Ressourcen wie die nachfolgenden nutzen:
    -   [Wie erfülle ich die WCAG (Kurzübersicht)](https://www.w3.org/WAI/WCAG22/quickref/)
    -   [Tutorials für barrierefreies Web](/tutorials/)
-   Für Projektmanagement und organisationelle Überlegungen, lesen Sie [[Planung und Management für barrierefreies Web]](/planning-and-managing/).<br>
    Falls Sie sofort schnelle Lösungen benötigen, finden Sie hier [[Ansätze für vorübergehende Korrekturen]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## Barrierefreiheit beurteilen {#evaluate}

Beim Entwickeln und Neugestalten einer Webseite sollten Sie schon früh und während des gesamten Entwicklungsprozesses die Barrierefreiheit beurteilen, um Probleme dann zu erkennen, wenn sie einfacher zu adressieren sind. Einfache Maßnahmen wie das Ändern von Browsereinstellungen können Ihnen helfen, einige Aspekte von Barrierefreiheit direkt einzuschätzen. Eine umfangreiche Evaluierung, um zu überprüfen, ob eine Webseite alle Richtlinien für Barrierefreiheit erfüllt, erfordert mehr Aufwand.

Es gibt Tools, die bei der Auswertung unterstützen. Es kann jedoch kein Tool alleine feststellen, ob eine Seite die Richtlinien für Barrierefreiheit erfüllt. Eine Auswertung durch jemand mit der entsprechenden Erfahrung ist notwendig, um zu bestimmen, ob eine Seite tatsächlich barrierefrei ist.


{::nomarkdown}
{% include box.html type="start" h="3" title="Weitere Infos zur Beurteilung von Barrierefreiheit" class="simple aside" %}
{:/}

-   Ressourcen zur Unterstützung bei der Beurteilung von Barrierefreiheit werden in [[Barrierefreiheit von Webseiten beurteilen]](/test-evaluate/) beschrieben.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Beispiele

{% include excol.html type="middle" %}

### Alternativer Text für Bilder

![Bild von einem Logo; HTML Markup img alt='Web Accessibility Initiative logo'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Bilder sollten *[äquivalenten alternativen Text](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (sogenannten alt-Text) im Markup/Code enthalten.

Wenn kein alternativer Text für Bilder angegeben wird, ist die Information im Bild nicht zugänglich für Menschen, die beispielsweise nicht sehen können und die einen Screenreader nutzen, der die Informationen auf der Seite – einschließlich der alternativen Texte visueller Bilder – laut vorliest.

Wenn äquivalente alternative Texte angegeben werden, sind Informationen für Menschen, die blind sind, ebenso zugänglich wie für Menschen, die Bilder deaktivieren (etwa in Gebieten mit teurer oder geringer Bandbreite). Zudem sind sie zugänglich für Technologien, die keine Bilder wahrnehmen können, wie etwa Suchmaschinen.

### Tastatureingabe

![durchgestrichene Maus](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Manche Menschen können keine Maus benutzen, wie beispielsweise ältere Menschen mit eingeschränkter motorischer Kontrolle. Eine barrierefreie Webseite ist nicht auf eine Maus angewiesen; sie stellt [sämtliche Funktionalität über die Tastatur zur Verfügung](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible). Dann können Menschen mit Behinderungen [Hilfstechnologien](/planning/involving-users/#at) nutzen, die die Tastatur imitieren, wie etwa per Spracheingabe.

### Transkription von Audio

[![Beispiel einer Transkription](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

So wie Bilder nicht für Menschen zugänglich sind, die nicht sehen können, sind auch Audiodateien nicht verfügbar für Menschen, die nicht hören können. Das Bereitstellen einer Transkription macht Audioinformationen für Menschen verfügbar, die taub oder schwerhörig sind, ebenso wie für Suchmaschinen oder andere Technologien, die nicht hören können.

Es ist einfach und relativ günstig, für Webseiten Transkriptionen bereitzustellen. Außerdem gibt es [Transkriptionsdienstleistungen](http://www.uiaccess.com/transcripts/transcript_services.html), die Texttranskriptionen im HTML-Format erstellen.

{::nomarkdown}
{% include box.html type="start" h="3" title="Mehr Beispiele" class="simple aside" %}
{:/} 

-   [[Tipps für den Einstieg]](/tips/)
-   [[Einfache Checks – Eine erste Beurteilung]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Perspektiven auf barrierefreies Web &mdash; Videos und Beschreibungen" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Für weitere Informationen {#more-info}

Die W3C WAI bietet eine breite Palette an Ressourcen rund um [Standards](/standards-guidelines/), [Bildung](/teach-advocate/), [Testing/Auswertung](/test-evaluate/), [Projektmanagement und Richtlinien](/planning/) für ein barrierefreies Web. Wir empfehlen Ihnen, diese Webseite näher zu erkunden und sich mit der Liste von [WAI-Ressourcen](/resources/) vertraut zu machen.

**[[Grundlagen der digitalen Barrierefreiheit – kostenloser Onlinekurs]](/courses/foundations-course/)** bietet Ihnen die nötigen Grundlagen, um Ihre digitale Technologie barrierefrei zu machen.
