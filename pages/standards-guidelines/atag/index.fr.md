---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Règles pour l’accessibilité des outils d’édition (ATAG) – Vue d’ensemble"
nav_title: "ATAG – Vue d’ensemble"
lang: fr
last_updated: 2023-12-07   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Sofia Ahmed"
  - name: "Victoria Menezes Miller"
  - name: "Rémi Bétin"
contributors:
  - name: "Sandra Velarde Gonzalez (ETNIC)"

github:
  label: wai-atag-intro

permalink: /standards-guidelines/atag/fr  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/atag/  # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: |
  <p><strong>Date :</strong> Mise à jour : 7 décembre 2023. Première publication en juillet 2005.</p>
  <p><strong>Rédaction :</strong> <a href="https://www.w3.org/People/shawn">Shawn Lawton Henry</a>.</p>
  <p>Développé avec des contributions du groupe de travail « Éducation et Promotion »  (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) et du groupe de travail des Règles pour l’accessibilité des outils d’édition »  (<a href="https://www.w3.org/WAI/AU/">AUWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page présente les Règles pour l’accessibilité des outils d’édition (<abbr lang="en" title="Authoring Tool Accessibility Guidelines">ATAG</abbr>), un standard du Web.

Liens rapides vers d'autres ressources :
* [[Les ATAG en bref]](/standards-guidelines/atag/glance/)
* [Le standard ATAG 2.0](https://www.w3.org/TR/ATAG20/)
* [Mettre en œuvre les ATAG 2.0](https://www.w3.org/TR/IMPLEMENTING-ATAG20/)
* [Outil de rapports ATAG](https://www.w3.org/WAI/atag/report-tool/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Table des matières" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Les outils d’édition et les ATAG

Les outils d’édition sont des logiciels et des services que les « auteurs » (développeurs Web, designers, rédacteurs, etc.) utilisent pour produire des contenus Web (des pages Web statiques, des applications Web dynamiques, etc.). Vous trouverez une liste d’exemples d’outils d’édition dans la section [« À qui s’adressent les ATAG »](#who-atag-is-for) ci-dessous.

Les Règles pour l’accessibilité des outils d’édition (ATAG) expliquent comment :

-   rendre les outils d’édition eux-mêmes accessibles, pour permettre aux personnes en situation de handicap de créer des contenus Web, ***et***
-   aider les auteurs à créer des contenus Web plus accessibles — et plus particulièrement :
    rendre possible, soutenir et promouvoir la production de contenus conformes aux Règles pour l’accessibilité des contenus Web ([WCAG](/standards-guidelines/wcag/)).

Les ATAG font partie d’une série de règles pour l’accessibilité, qui incluent les Règles pour l’accessibilité des contenus Web (<abbr lang="en" title="Web Content Accessibility Guidelines">WCAG</abbr>) et les Règles pour l’accessibilité des agents utilisateurs (<abbr lang="en" title="User Agent Accessibility Guidelines">UAAG</abbr>). [Les composantes essentielles de l’accessibilité du Web](/fundamentals/components/) expliquent la relation entre les différentes règles.

Les ATAG sont pertinentes aujourd’hui, car elles sont technologiquement agnostiques. Les ATAG ont été publiées en 2015 et référencent les WCAG 2.0. Nous vous encourageons à utiliser la dernière version des [WCAG 2](https://www.w3.org/TR/WCAG2/).

## À qui s’adressent les ATAG {#who-atag-is-for}

Les ATAG sont principalement destinées aux développeurs d’outils d’édition, notamment des types d’outils d’édition suivants :

-   les outils d’édition de pages Web ; par exemple, les éditeurs HTML dits « WYSIWYG » (<i lang="en">what-you-see-is-what-you-get</i>) ;
-   les logiciels utilisés pour générer des sites Web ; par exemple, les systèmes de gestion de contenu (CMS) et les systèmes de gestion de l’apprentissage (LMS), les didacticiels, les agrégateurs de contenu, les constructeurs de sites web « sans code » ;
-   les logiciels qui convertissent des documents en technologies de contenus Web ; par exemple, les logiciels de traitement de texte et autres applications bureautiques disposant de fonctionnalités telles que « enregistrer au format HTML » ou « enregistrer au format EPUB » ;
-   les outils d’édition multimédias ;
-   les sites Web qui permettent aux utilisateurs d’ajouter du contenu, tels que les blogues, les sites wiki, les plateformes de partage de photos, les forums en ligne et les réseaux sociaux ;
-   d’autres types d’outils listés dans la définition des [outils d’édition](https://www.w3.org/TR/ATAG20/#def-Authoring-Tool) au sein du glossaire.

Les ATAG et leurs ressources d’accompagnement cherchent également à répondre aux besoins d’une grande variété de publics, notamment les décideurs politiques, les responsables, et autres.
Par exemple :

-   Les personnes qui souhaitent choisir des outils d’édition accessibles et qui produisent du contenu accessible peuvent utiliser les ATAG pour évaluer les outils d’édition.
-   Les personnes qui souhaitent encourager le développeur de leur outil d’édition actuel à améliorer son accessibilité dans des versions futures peuvent proposer au fournisseur de l’outil d’édition de se référer aux ATAG.

## Que contiennent les ATAG

Les **ATAG** sont constituées de deux parties principales:

-   La partie A concerne l’accessibilité de l’outil d’édition lui-même.
-   La partie B concerne l’aide apportée par l’outil d’édition aux auteurs pour produire des contenus accessibles.

[[**Les ATAG en bref**]](/standards-guidelines/atag/glance/) fournit un bref résumé des principes et des règles d’accessibilité dans les ATAG.

Les **ATAG** sont organisées en couches :

-   Les **principes** fournissent une organisation de haut niveau pour les règles.
-   Les **règles** fournissent le cadre et les objectifs des critères de succès.
-   **Les critères de succès correspondent aux exigences pour l’accessibilité**, et sont rédigées sous forme de déclarations testables, positionnées sur [trois niveaux](https://www.w3.org/TR/ATAG20/#intro_understand_levels_conformance) : A, AA, AAA.

[**ATAG 2.0**](https://www.w3.org/TR/ATAG20/) est une _Recommandation W3C_, un standard technique.

[**Mettre en œuvre les ATAG**](https://www.w3.org/TR/IMPLEMENTING-ATAG20/)
est un document d’accompagnement informatif qui aide les lecteurs à comprendre et à appliquer les ATAG. <em>Mettre en œuvre les ATAG</em> explique la logique de chaque règle. Pour chaque critère de succès, cette ressource fournit des explications sur les objectifs des critères de succès, des exemples, et des liens vers des ressources.

## L’outil de rapports ATAG

L’[**outil de rapports ATAG**](https://www.w3.org/WAI/atag/report-tool/) aide les évaluateurs à créer des rapports sur l’accessibilité des outils d’édition. Il vous guide à travers les règles ATAG, vous permet d’enregistrer vos résultats d’évaluation pour chaque exigence, et génère un rapport sur la conformité de l’outil d’édition aux ATAG.

## Traductions

Une traduction agréée des ATAG 2.0 en chinois simplifié est disponible : [无障碍创作工具指南(ATAG) 2.0](https://www.w3.org/Translations/ATAG20-zh/).

## Qui a élaboré les ATAG

Les ATAG ont été élaborées par le Groupe de travail des Règles pour l’accessibilité des outils d’édition ([<abbr lang="en" title="Authoring Tool Accessibility Guidelines Working Group">ATAG WG</abbr>](https://www.w3.org/WAI/AU/)), qui fait partie de l’Initiative pour l’accessibilité du Web ([WAI](https://www.w3.org/WAI/)) du World Wide Web Consortium ([W3C](https://www.w3.org/)).

Les opportunités pour contribuer aux travaux de WAI sont présentées sur la page [[Participer à WAI]](/about/participating/).
