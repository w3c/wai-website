---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Règles pour l’accessibilité des contenus Web (WCAG) 2 – Vue d’ensemble"
nav_title: "Contenus Web – WCAG 2"
lang: fr
last_updated: 2024-03-07  # Keep the date of the English version

translation:
  status: outdated
  last_updated: 2024-04-09 # Put the date of this translation YYYY-MM-DD (with month in the middle)

description: Présente le standard international des Règles pour l’accessibilité des contenus web (WCAG), notamment WCAG 2.0, WCAG 2.1 et WCAG 2.2. Les documents des WCAG expliquent comment rendre les contenus Web plus accessibles aux personnes en situation de handicap.

translators:
  - name: "Rémi Bétin"
  - name: "Sylvie Duchateau (version précédente)"

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/fr  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/  # Do not change this

image: /content-images/wcag/wcag-intro-social.jpg
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Première publication en juillet 2005.</p>
  <p><strong>Rédaction :</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Développé avec la contribution du Groupe de travail Éducation et Promotion (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>) et le Groupe de travail en charge des règles d’accessibilité (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page présente les Règles pour l’accessibilité des contenus Web (<abbr title="Web Content Accessibility Guidelines" lang="en">WCAG</abbr>), un standard international, notamment WCAG 2.0, WCAG 2.1 et WCAG 2.2. Les documents des WCAG expliquent comment rendre les contenus Web plus accessibles aux personnes en situation de handicap.

Une page différente [présente les WCAG 3](/standards-guidelines/wcag/wcag3-intro/).

Les WCAG ne sont pas une introduction à l’accessibilité. Pour des informations introductives, consultez [[Principes fondamentaux de l’accessibilité – Vue d’ensemble]](/fundamentals/).

Accès rapides vers les ressources :
* [Comment satisfaire aux WCAG 2 (référence rapide)](https://www.w3.org/WAI/WCAG22/quickref/)
* [Standard WCAG 2.2](https://www.w3.org/TR/WCAG22/), [Quoi de neuf dans les WCAG 2.2](/standards-guidelines/wcag/new-in-22/)
* [Standard WCAG 2.1](https://www.w3.org/Translations/WCAG21-fr/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenu de la page" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction {#intro}

Les Règles pour l’accessibilité des contenus Web (WCAG) 2 sont développées dans le cadre du [processus de W3C](/standards-guidelines/w3c-process/) en collaboration avec des personnes et des organismes du monde entier, dans le but de fournir un standard unique commun pour l’accessibilité des contenus Web répondant, au niveau international, aux besoins des personnes, des organismes et des gouvernements.

Les documents des WCAG expliquent comment rendre les contenus Web plus accessibles aux personnes en situation de handicap. Le terme « contenu » Web fait en général référence à l’information d’une page Web ou d’une application Web, comprenant :

-   les informations générales telles que le texte, les images et les sons ;
-   le code ou le balisage qui définit la structure, la présentation, etc.

## À qui s’adressent les WCAG {#for}

Les WCAG s’adressent aux personnes qui recherchent un standard technique. **Il ne s’agit pas d’une introduction à l’accessibilité. Pour des liens vers des ressources introductives, consultez [« Par où commencer ? » dans la FAQ](/standards-guidelines/wcag/faq/#start).**

En premier lieu, les WCAG sont destinées :

-   aux personnes qui développent des contenus web (rédacteurs de pages, concepteurs de sites, etc.) ;
-   aux personnes qui développent des outils pour l’édition sur le Web ;
-   aux personnes qui développent des outils pour évaluer l’accessibilité du Web ; 
-   à d’autres personnes qui souhaitent ou qui ont besoin d’un standard sur l’accessibilité du Web, y compris pour l’accessibilité sur mobile.

Pour répondre aux besoins d’autres personnes – notamment les responsables de politiques, les chefs de projets et les chercheurs – des [[ressources de WAI]](/resources/) nombreuses et variées sont disponibles.

## Que contiennent les WCAG 2 {#whatis2}

Les WCAG 2.2 contiennent 13 règles. Les règles sont organisées en [4 principes : perceptible, utilisable, compréhensible et robuste](https://www.w3.org/WAI/WCAG22/Understanding/intro#understanding-the-four-principles-of-accessibility).

À chaque règle sont associés des *critères de succès* évaluables. Les critères de succès sont positionnés sur [trois niveaux : A, AA, et AAA](https://www.w3.org/WAI/WCAG22/Understanding/conformance#levels).

Les critères de succès déterminent la « conformité » aux WCAG. En d’autres termes, pour satisfaire aux WCAG, le contenu doit satisfaire aux critères de succès. Plus de détails dans la [section Conformité des WCAG](https://www.w3.org/TR/WCAG22/#conformance).

Pour un court résumé des règles des WCAG 2, consultez **[[WCAG 2 en bref]](/standards-guidelines/wcag/glance/)**.

### Ressources d’accompagnement et conseils supplémentaires {#supplement}

Les ressources suivantes vous aident à comprendre et mettre en œuvre les WCAG, et à améliorer l’accessibilité au-delà des WCAG :
* Référence Rapide / Comment satisfaire aux WCAG 2 / Liste de contrôles ;
* Comprendre les WCAG 2 ;
* Techniques pour les WCAG 2 ;
* Règles de test pour les WCAG 2 ;
* Conseils supplémentaires.

**Apprenez-en plus sur ces ressources des WCAG 2 dans [Documents des WCAG 2](/standards-guidelines/wcag/docs/).**

## WCAG 2.0, 2.1, 2.2 {#versions}

Les standards des Règles pour l’accessibilité des contenus Web (WCAG) sont stables et référençables lorsqu’ils sont publiés comme standard du Web « Recommandation du W3C ».

* Les [WCAG 2.0](https://www.w3.org/TR/WCAG20/) ont été publiées le 11 décembre 2008.
* Les [WCAG 2.1](https://www.w3.org/TR/WCAG21/) ont été publiées le 5 juin 2018, et une mise à jour a été publiée le 21 septembre 2023. La [FAQ des WCAG 2](/standards-guidelines/wcag/faq/) contient des informations sur cette mise à jour.

Les WCAG 2.0, 2.1, et 2.2 sont conçues pour être « rétro-compatibles », ce qui signifie qu’un contenu conforme aux WCAG 2.2 est aussi conforme aux WCAG 2.1 et aux WCAG 2.0. Si vous souhaitez satisfaire à toutes les versions, vous pouvez utiliser les WCAG 2.2 et vous n’avez pas besoin de vous préoccuper de regarder les versions précédentes.

Tous les critères de succès de la version 2.0 sont inclus dans la version 2.1, et tous ceux de la version 2.1. sont inclus dans la version 2.2 (sauf 4.1.1, comme expliqué dans le prochain paragraphe).
* Les WCAG 2.0 ont 12 règles.
* Les WCAG 2.1 ajoutent 1 règle et 17 critères de succès. Ils sont présentés dans [Quoi de neuf dans les WCAG 2.1](/standards-guidelines/wcag/new-in-21/).
* Les WCAG 2.2 ajoutent 9 critères de succès. Ils sont présentés dans [Quoi de neuf dans les WCAG 2.2](/standards-guidelines/wcag/new-in-22/).

Quelques changements sont intervenus, et nous avons l’intention que les mises à jour dans les documents correspondants assurent la rétro-compatibilité en pratique. Le principal changement est qu’un critère de succès (4.1.1  Analyse syntaxique) est obsolète dans les WCAG 2.2. Les notes ajoutées dans les erratas des WCAG 2.1. et WCAG 2.0 abordent ce sujet, comme indiqué dans [FAQ des WCAG, 4.1.1 Analyse syntaxique](/standards-guidelines/wcag/faq/#parsing411). Les WCAG 2.2 incluent également des notes au sujet des différentes langues ; plus d’information dans [FAQ des WCAG, Internationalisation](/standards-guidelines/wcag/faq/#i18n22).

Les WCAG 2.0, WCAG 2.1 et WCAG 2.2 sont toutes des standards en vigueur. Les WCAG 2.2 ne déprécient ni ne remplacent les WCAG 2.1, et les WCAG 2.1 ne déprécient ni ne remplacent les WCAG 2.0. W3C vous encourage à utiliser la version la plus récente des WCAG.

## Traductions

Les traductions agréées et les traductions non officielles des WCAG 2 sont référencées dans [[Traductions des WCAG 2]](/standards-guidelines/wcag/translations/).

## Les WCAG 2.0 sont une norme ISO/IEC 40500 {#iso}

Les WCAG 2.0 ont été approuvées comme norme ISO : ISO/IEC 40500:2012. ISO/IEC 40500 est exactement la même norme que les WCAG 2.0 d’origine, qui sont présentées ci-dessus avec des ressources d’accompagnement.

Le contenu d’ISO/IEC 40500 est disponible gratuitement à l’adresse [www.w3.org/TR/WCAG20](https://www.w3.org/TR/WCAG20/) ; il peut être acheté dans le [catalogue ISO {% include_cached external.html %}](https://www.iso.org/standard/58625.html).

Les avantages des WCAG 2.0 en tant que norme ISO sont résumés dans [la section ISO de la FAQ](/standards-guidelines/wcag/faq/#iso). Plus d’informations sur W3C et le processus ISO sont consultables dans [la FAQ W3C PAS](https://www.w3.org/2010/04/pasfaq).

**W3C prévoit de soumettre les WCAG 2.2 au processus ISO.**

## Qui développe les WCAG {#wg}

Les documents techniques des WCAG sont développés par le groupe de travail <span lang="en">Accessibility Guidelines Working Group</span> ([AG WG](/GL/)) *(anciennement le <span lang="en">Web Content Accessibility Guidelines Working Group</span>)*, qui fait partie de l’Initiative pour l’accessibilité du Web ([WAI](https://www.w3.org/WAI/)) du <span lang="en">World Wide Web Consortium</span> ([W3C](https://www.w3.org)).

WAI met à jour les techniques pour les WCAG 2 et Comprendre les WCAG 2 régulièrement. Tous [commentaires](/standards-guidelines/wcag/commenting/) et [envoi de nouvelles techniques](https://www.w3.org/WAI/GL/WCAG20/TECHS-SUBMIT/) sont les bienvenus.

Les possibilités de contribuer aux WCAG et aux autres travaux de WAI sont présentées dans [[Participer à WAI]](/about/participating/).

## WCAG 3 et informations complémentaires {#more}

Les WCAG font partie d’une série de règles d’accessibilité qui incluent les Règles pour l’accessibilité des outils d’édition (<abbr lang="en" title="Authoring Tool Accessibility Guidelines">ATAG</abbr>) et les Règles pour l’accessibilité des agents utilisateurs (<abbr lang="en" title="User Agent Accessibility Guidelines">UAAG</abbr>). [[Les composantes essentielles de l’accessibilité du Web]](/fundamentals/components/) expliquent la relation entre les différentes règles.

Consultez la [[FAQ des WCAG 2]](/standards-guidelines/wcag/faq/) pour plus d’informations sur :

- **La couverture par les WCAG 2 de [l’accessibilité mobile](/standards-guidelines/wcag/faq/#mobile)**
- **L’application des WCAG 2 aux [documents et logiciels](/standards-guidelines/wcag/faq/#othertechs)**
- et plus encore…

Pour des informations sur la première ébauche des Règles pour l’accessibilité du Web 3.0 de W3C (précédemment appelée « <i lang="en">Silver</i> »), consultez **[Présentation des WCAG 3](/standards-guidelines/wcag/wcag3-intro/)**.

