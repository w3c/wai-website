---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.

title: Standards d’accessibilité du W3C – Vue d’ensemble
nav_title: "Standards/Règles"
lang: fr
last_updated: 2024-02-29  # Keep the date of the English version

translation:
  last_updated: 2024-04-04   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: 
- name: "@code-elegant"
- name: "Rémi Bétin"
contributors:
- name: "Victoria Menezes Miller"

github:
  label: wai-standards-guidelines

permalink: /standards-guidelines/fr   # Add the language shortcode to the end; for example /standards-guidelines/fr
ref: /standards-guidelines/   # Do not change this

feedbackmail: wai@w3.org

footer: >   # Translate all the words below, including "Date:" and "Editor:". Do not change these dates.
  <p><strong>Rédaction :</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Élaboré avec des contributions du groupe de travail « Éducation et Promotion » (Education and Outreach Working Group <a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page introduit les lignes directrices et autres standards relatifs à l’accessibilité du web.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenu de la page" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction {#intro}

Le World Wide Web Consortium (W3C) développe des standards internationaux pour le web : <abbr title="Hypertext Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> et bien d’autres. Les standards web du W3C sont appelés <dfn>Recommandations du W3C</dfn>.

Tous les standards du W3C sont revus pour la prise en compte de l’accessibilité par le groupe de travail Architectures de plateforme accessible ([APA](/about/groups/apawg/)).

Les standards du W3C et les notes de groupe de travail ci-dessous sont particulièrement pertinents pour l’accessibilité.

## Règles d’accessibilité {#guidelines}

Les [[Éléments essentiels de l’accessibilité du Web]](/fundamentals/components/) montrent comment l’accessibilité du web dépend de la combinaison harmonieuse des nombreuses composantes du développement web et de l’interaction utilisateur, et comment les règles WAI (WCAG, ATAG, UAAG) s’appliquent.

###  Règles pour l’accessibilité des contenus Web (WCAG) 2 {#wcag}

Le « contenu » web fait référence à l’information présente dans une page ou application web, y compris :

* de l’information primaire telle que du texte, des images et des sons ;
* du code ou du balisage qui définit la structure, la présentation…

Les WCAG s’appliquent au contenu dynamique, multimédia, « mobile »… Les WCAG peuvent aussi être appliquées aux technologies de l’information et de la communication « non-web », ainsi que décrit dans [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/). 

Informations autour des WCAG 2 :
- [Vue d’ensemble des WCAG](/standards-guidelines/wcag/)
- [[Les WCAG 2.1 en un coup d’œil]](/standards-guidelines/wcag/glance/)
- [Comment satisfaire aux WCAG 2 (référence rapide)](https://www.w3.org/WAI/WCAG22/quickref/)
- [[Traductions WCAG 2]](/standards-guidelines/wcag/translations/)
- [Le standard WCAG 2.2](https://www.w3.org/TR/WCAG22/), [[Nouveautés des WCAG 2.2]](/standards-guidelines/wcag/new-in-22/)
- [Le standard WCAG 2.1](https://www.w3.org/Translations/WCAG21-fr/), [[Nouveautés des WCAG 2.1]](/standards-guidelines/wcag/new-in-21/)
- [Le standard WCAG 2.0](https://www.w3.org/Translations/WCAG20-fr/)

### Règles d’accessibilité pour les outils d’édition (ATAG) {#atag}

Les outils d’édition sont des logiciels et des services que les « auteurs » (développeurs web, concepteurs, rédacteurs…) utilisent pour produire du contenu web. Par exemple : des éditeurs HTML, des gestionnaires de contenu (CMS), et des sites web qui permettent aux utilisateurs d’ajouter du contenu, tels que des blogues et des sites de réseau social. Les documents ATAG expliquent comment :
* rendre les outils d’édition eux-mêmes accessibles, afin que les personnes handicapées puissent créer du contenu, et
* accompagner les auteurs dans la création de contenu web plus accessible.

Informations autour des ATAG :
- [Vue d’ensemble des ATAG](/standards-guidelines/atag/)
- [[Les ATAG en un coup d’œil]](/standards-guidelines/atag/glance/)
- [Le standard ATAG 2.0 (en anglais)](https://www.w3.org/TR/ATAG/)

### Règles pour l’accessibilité des agents utilisateurs (UAAG) {#uaag}

Les agents utilisateur incluent les navigateurs, leurs greffons, les lecteurs de média, les lecteurs et toutes les applications qui restituent du contenu web.

Informations autour des UAAG :
- [Vue d’ensemble des UAAG](/standards-guidelines/uaag/)
- [Note UAAG 2.0 (en anglais)](https://www.w3.org/TR/UAAG20/)

### Règles pour l’accessibilité du W3C (WCAG) 3 Projet de travail {#wcag3}
WCAG 3 est un premier projet destiné à devenir une norme W3C. WCAG 3 s’applique au contenu Web, aux applications, aux outils, à la publication et aux technologies émergentes sur le Web.

Informations autour des WCAG 3 :
* [[Introduction aux WCAG 3]](/standards-guidelines/wcag/wcag3-intro/)

## Spécifications techniques

### Applications internet riches accessibles (WAI-ARIA) {#aria}

ARIA définit de la sémantique afin que les auteurs puissent transmettre des comportements d’interface utilisateur et de l’information structurée aux technologies d’assistance (telles que les revues d’écran). La spécification ARIA fournit une ontologie de rôles, d’états et de propriétés qui définit des éléments d’interface utilisateur accessibles.

La suite ARIA comprend des spécifications de correspondance d’interface de programmation d’application (<abbr title="application programming interface" lang="en">API</abbr>) qui fournissent de l’accompagnement lors de l’implémentation d’agent utilisateur. Elle inclut aussi des modules pour la publication numérique et graphique. 

Informations autour d’ARIA :
- [Vue d’ensemble de WAI-ARIA](/standards-guidelines/aria/) – comprend une [liste avec description de modules et de correspondances d’API](/standards-guidelines/aria/#versions)
- [Pratiques de création WAI-ARIA (en anglais)](https://www.w3.org/TR/wai-aria-practices/)
- [Standard WAI-ARIA 1.2 (en anglais)](https://www.w3.org/TR/wai-aria-1.2/)

### Audio et vidéo {#multimedia}

- Le [format des pistes textuelles pour la vidéo web WebVTT](https://www.w3.org/TR/webvtt/) est un format pour les sous-titres, les descriptions textuelles de vidéos et autres métadonnées qui sont synchronisés temporellement avec du contenu audio ou vidéo ;

- Le [langage de balisage du texte synchronisé (Timed Text Markup Language TTML)](https://www.w3.org/TR/ttml/) est conçu dans la perspective du transcodage ou de l’échange d’information de texte synchronisé entre formats patrimoniaux de diffusion de contenu de sous-titrage et d’audiodescription.

### Évaluation {#eval}

Les ressources suivantes favorisent le développement de méthodes et d’outils d’évaluation de l’accessibilité :

- [[Vue d’ensemble d’Évaluation de conformité à l’accessibilité (Accessibility Conformance Testing ACT)]](/standards-guidelines/act/) &mdash; ACT définit et documente les règles pour tester la conformité du contenu web aux standards d’accessibilité. Les [Règles de tests des WCAG 2](/standards-guidelines/act/rules/about/) utilisent le format de règles ACT.

- [[Vue d’ensemble du language d’évaluation et de compte rendu (Evaluation and Report Language EARL)]](/standards-guidelines/earl/) &mdash; EARL est un format interprétable par les machines pour transcrire des résultats de test.

Des ressources additionnelles relatives à l’évaluation sont disponibles dans la [vue d’ensemble « Évaluer l’accessibilité web »](/test-evaluate/), dont :

- [[Vue d’ensemble de WCAG-EM : méthodologie d’évaluation de la conformité à l’accessibilité web]](/test-evaluate/conformance/wcag-em/) &mdash; WCAG-EM est une approche pour déterminer dans quelle mesure un site web est conforme aux Règles pour l’accessibilité des contenus Web (WCAG).

### WAI-Adapt

[[WAI-Adapt - Vue d’ensemble]](/adapt/) &mdash; <span lang="en">WAI-Adapt</span> permet aux utilisateurs d’adapter (ou « personnaliser ») la manière dont le contenu est présenté pour satisfaire leurs besoins et préférences. Les créateurs de contenu peuvent utiliser les standards <span lang="en">WAI-Adapt</span> pour fournir une conception par défaut et permettre une adaptation par l’utilisateur avec un effort minimisé.

### Prononciation
[[Aperçu de la prononciation]](/pronunciation/) &mdash; La prononciation concerne les lecteurs d’écran et autres synthèses de synthèse vocale (TTS) qui prononcent correctement le contenu.

## Autres champs de travail de l’Initiative pour l’accessibilité du web (WAI)

- [[Accessibilité mobile au W3C]](/standards-guidelines/mobile/)

- [[Accessibilité cognitive au W3C]](/cognitive/)

## Informations additionnelles {#moreinfo}

- [Liste de tous les standards relatifs à l’accessibilité (« Recommandations W3C ») et notes de groupe de travail](https://www.w3.org/TR/?tag=accessibility)

- [[Lois & politiques relatives à l’accessibilité web]](/policies/) liste les lois et politiques gouvernementales relatives à l’accessibilité web dans les pays et les régions du monde entier. Beaucoup d’entre elles font référence aux standards d’accessibilité du W3C.

- [[Pourquoi l’harmonisation des standards est essentielle pour l’accessibilité web]](/standards-guidelines/harmonization/)

- [[Citer et fournir un lien vers des règles WAI et des documents techniques]](/standards-guidelines/linking/)

- [[Comment WAI développe les règles d’accessibilité au travers du processus du W3C : jalons et **occasions de contribuer**]](/standards-guidelines/w3c-process/)

{% assign longdesc_url = "/fundamentals/components/examples/fr#guide" | relative_url %}
{% include image.html src="components/specs.fr.png" alt="Illustration montrant les règles pour les différentes composantes" longdesc=longdesc_url %}