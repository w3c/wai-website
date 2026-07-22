---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Principes d’accessibilité
lang: fr
last_updated: 2019-05-10   # Keep the date of the English version
description: Un aperçu des exigences d’accessibilité web fondamentales pour les sites et les applications web, les navigateurs et autres outils.
teaser_text: La page «&#8239;Principes d’accessibilité&#8239;» présente certaines exigences d’accessibilité pour les sites et les applications web, les navigateurs et autres outils. Elle fournit des liens vers les standards internationaux de l’Initiative Accessibilité du Web (WAI) du W3C et vers une page parlant des particularités de quelques utilisateurs du Web.

translation:
  last_updated: 2023-12-06  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Stéphane Deschamps"
contributors:
- name: "@code-elegant"

permalink: /fundamentals/accessibility-principles/fr
ref: /fundamentals/accessibility-principles/

github:
  label: wai-accessibility-principles

image: /content-images/accessibility-principles/social.png

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p lang="en"><strong>Editors:</strong> <a href="https://www.w3.org/People/shadi/" hreflang="en">Shadi Abou Zahra</a>. <a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments" hreflang="en">Acknowledgments</a>.</p>
  <p lang="en">Developed by the Education and Outreach Working Group (<a href="https://www.w3.org/WAI/EO/" hreflang="en">EOWG</a>). Previously developed with the <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf" hreflang="en">WAI-AGE Task Force</a>, with support of the <a href="https://www.w3.org/WAI/WAI-AGE/" hreflang="en">WAI-AGE Project</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page introduit certaines exigences d’accessibilité web fondamentales pour les sites et les applications web, les navigateurs et autres outils. Elle fournit des liens vers les standards internationaux de l’Initiative Accessibilité du Web (WAI) du W3C et vers une page parlant des particularités de [quelques utilisateurs du Web](/people-use-web/user-stories/).

**Note&#8239;:** ce n’est pas une liste exhaustive de toutes les exigences d’accessibilité.

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


{% include excol.html type="all" %}

## Standards d’accessibilité Web {#standards}

L’accessibilité web s’appuie sur plusieurs composants qui travaillent ensemble. Certains d’entre eux sont&#8239;:

- **Les contenus web**{:#webcontent}&#8239;: ce terme s’applique à toute partie d’un site web, y compris le texte, les images, les formulaires et le multimédia, aussi bien que tout code, script, application, et ainsi de suite.
- **Les agents utilisateurs**{:#useragents}&#8239;: des logiciels que l’on utilise pour accéder aux contenus web, incluant les navigateurs graphiques de bureau, les navigateurs vocaux, les navigateurs mobiles, les lecteurs multimédia, les modules d’extension (<i lang="en">plug-ins</i>), et certaines [technologies d’assistance](/people-use-web/tools-techniques/).
- **Outils de production de contenu**{:#authoringtools}&#8239;: des logiciels ou des services que l’on utilise pour produit des contenus web, incluant les éditeurs de code, les outils de conversion de documents, les systèmes de gestion de contenus, les blogs, les scripts de bases de données, et d’autres outils.

{% include excol.html type="start" %}

### Plus sur les standards d’accessibilité web

{:.no_toc}

{% include excol.html type="middle" %}

Ces composants sont liés les uns aux autres et se complètent mutuellement. Par exemple, le **contenu web** doit inclure des textes alternatifs pour les images. Cette information doit être interprétée par les **navigateurs web** puis transmise aux **technologies d’assistance**, comme les lecteurs d’écran. Pour créer ces alternatives textuelles, les auteurs ont besoin **d’outils de production de contenus** qui leur permettent de le faire. Plus d’information est disponible dans [Composants essentiels pour l’accessibilité web](/fundamentals/components/).

Les standards jouent un rôle vital dans la définition des exigences d’accessibilité pour chacun de ces composants. Certaines exigences d’accessibilité sont facilement atteignables, cependant comprendre les bases du l’usage du Web par des personnes ayant un handicap aide à les mettre en place plus efficacement. Certains aspects de l’accessibilité réclament plus de compétences techniques ou de connaissances expertes de la façon dont les gens utilisent le Web. Dans tous les cas, [impliquer les utilisateurs dès le début et tout le long de vos projets web](/test-evaluate/involving-users/) rendra votre travail plus facile et de meilleure qualité.

L’Initiative d’Accessibilité Web (WAI) fournit une liste de recommandations qui sont reconnues internationalement comme le standard pour l’accessibilité web. Elles incluent&#8239;:

-   **[Recommandations d’accessibilité des contenus web (WCAG)](/standards-guidelines/wcag/)**
-   **[Recommandations d’accessibilité des agents utilisateurs (UAAG)](/standards-guidelines/uaag/)**
-   **[Recommandations d’accessibilité des outils de production de contenu (ATAG)](/standards-guidelines/atag/)**

Il existe aussi une spécification WAI pour les **[Applications internet riches accessibles  (WAI-ARIA)](/standards-guidelines/aria/)**, qui inclut les contenus dynamiques et les contrôles d’interface utilisateur avancés développés avec Ajax, JavaScript et d’autres technologies web liées.

{% include excol.html type="end" %}

## Information perceptible et interface utilisateur {#perceivable}

### Alternatives textuelles pour les contenus non textuels {#alternatives}

Les alternatives textuelles sont un équivalent des contenus non textuels. Par exemple&#8239;:

- Des équivalents courts pour les images, y compris les icônes, les boutons et les graphiques
- Une description des données représentées sur des graphes, des diagrammes et des illustrations
- Des descriptions courtes de contenus non textuels comme les fichiers audio et vidéo
- Des étiquettes pour les éléments de formulaires, de saisie, et d’autres composants d’interface utilisateur

Les alternatives textuelles véhiculent le but d’une image ou sa fonction pour fournir une expérience utilisateur équivalente. Par exemple, le texte alternatif approprié d’un bouton de recherche pourrait être «&#8239;*recherche*&#8239;» plutôt que «&#8239;*loupe*&#8239;».

Les alternatives textuelles peuvent être présentées sous des formes variées. Par exemple, elles peuvent être lues à voix haute aux personnes qui ne peuvent pas voir l’écran ou à des personnes ayant des difficultés à lire, elles peuvent être agrandies pour ceux qui ont personnalisé la taille d’affichage des textes, ou affichées sur des plages Braille. Les alternatives textuelles servent d’étiquettes pour les contrôles et les fonctionnalités et facilitent la navigation au clavier ou via la reconnaissance vocale (contrôle à la voix). Elles permettent aussi d’identifier les fichiers audio, vidéo et dans d’autres formats, ainsi que les applications intégrées dans un site web.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées aux alternatives textuelles (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-  [Guideline 1.1 - Text
   Alternatives](https://www.w3.org/WAI/WCAG22/quickref/#text-equiv){: hreflang="en"}

**UAAG**

-   [Guideline 1.1 - Alternative
    content](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content){: hreflang="en"}

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1){: hreflang="en"}
-   [Guideline A.2.1: (For the authoring tool user interface) Make
    alternative content available to
    authors](https://www.w3.org/TR/ATAG20/#gl_a21){: hreflang="en"}
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure
    that editing-view presentation can be programmatically
    determined](https://www.w3.org/TR/ATAG20/#gl_a22){: hreflang="en"}
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure
    that previews are at least as accessible as in-market user
    agents](https://www.w3.org/TR/ATAG20/#gl_a37){: hreflang="en"}
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b){: hreflang="en"}

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées aux alternatives textuelles

{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Martine, étudiante en ligne, malentendante](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Sous-titres et autres alternatives pour le multimédia {#captions}

Une personne qui ne peut pas entendre le son ou voir la vidéo a besoin d’alternatives, par exemple&#8239;:

- Des retranscriptions sous forme textuelle, des sous-titres pour les contenus audio, tels que les enregistrements ou une interview radio
- Des audio-descriptions, qui sont une narration qui décrit les détails visuels importants d’une vidéo
- Des traductions en langue des signes du contenu audio, y compris l’expérience audio pertinente

Des retranscriptions texte bien écrites contenant la séquence correcte de toutes les informations auditives et visuelles fournissent un niveau d’accessibilité de base et facilitent la production de sous-titres et d’audio-descriptions.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées au multimédia (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 1.2 - Time-based
    Media](https://www.w3.org/WAI/WCAG22/quickref/#media-equiv)

**UAAG**

-   [Guideline 1.1 - Alternative
    content](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.1: (For the authoring tool user interface) Make
    alternative content available to
    authors](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure
    that previews are at least as accessible as in-market user
    agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)


{::nomarkdown}
{% include lang.html type="end" %}
{:/}
{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées au multimédia {#stories-related-to-multimedia}

{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, étudiante en ligne, malentendante](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Du contenu qui peut être présenté de différentes façons {#adaptable}

Pour que les utilisateurs puissent changer la présentation des contenus, il est nécessaire que&#8239;:

- Les titres, les listes, les tableaux, les champs de saisie et structures de contenu soient convenablement balisés
- Les séquences d’informations ou d’instructions soient indépendantes de toute présentation
- Les navigateurs et les technologies d’assistance fournissent des réglages permettant de personnaliser la présentation

Être conforme à cette exigence permet que le contenu soit correctement lu par une synthèse vocale, agrandi, ou adapté pour satisfaire aux besoins et aux préférences de différentes personnes. Par exemple, il peut être présenté dans une combinaison de couleurs personnalisée, dans une taille de police différente, ou selon des règles de style permettant d’en faciliter la lecture. Cette exigence facilite aussi d’autres formes d’adaptation, comme la génération automatique de plans de page ou de résumés pour permettre d’avoir une vue d’ensemble de la page et de se concentrer sur un endroit en particulier plus facilement.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à l’adaptabilité (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 1.3 -
    Adaptable](https://www.w3.org/WAI/WCAG22/quickref/#content-structure-separation)

**UAAG**

-   [Guideline 1.4 - Text
    configuration](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Guideline 1.5 - Volume
    configuration](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Guideline 1.6 - Synthesized speech
    configuration](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Guideline 1.7 - User style sheet
    configuration](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Guideline 1.9 - Alternative
    views](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Guideline 1.10 - Element
    Information](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure
    that editing-view presentation can be programmatically
    determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure
    that previews are at least as accessible as in-market user
    agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées à l’adaptabilité

{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, client de site Web marchand, daltonien](/people-use-web/user-stories/archived/#shopper)
-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Du contenu plus facile à voir et à entendre {#distinguishable}

Un contenu perceptible est plus facile à lire et à voir. Par exemple&#8239;:

- La couleur n’est pas le seul moyen de véhiculer de l’information ou d’identifier du contenu
- Les couleurs de premier plan et de fond par défaut fournissent un contraste suffisant
- Quand les utilisateurs redimensionnent le texte jusqu’à 400% ou changent l’espacement du texte, aucune information n’est perdue
- Le texte est bien refusionné dans des petites fenêtres («&#8239;viewports&#8239;») et quand les utilisateurs agrandissent le texte
- Les images contenant du texte sont redimensionnables, remplacées par du véritable texte, ou évitées quand c’est possible
- Les utilisateurs peuvent pauser, arrêter, ou ajuster le volume du son joué sur un site web
- Les sons d’arrière-plan sont bas ou peuvent être coupés, pour éviter toute interférence ou distraction

Être conforme à cette exigence permet de séparer le premier et l’arrière-plan, de rendre les informations importantes plus faciles à distinguer. Cela intègre aussi bien les besoins de personnes qui n’utilisent pas de technologies d’assistance que de celles utilisant des technologies d’assistance, qui peuvent subir des interférences dues à des éléments audio ou visuels à l’arrière-plan. Par exemple, de nombreuses personnes daltoniennes n’utilisent pas d’outil particulier et s’appuient sur un design correct qui fournit des contrastes suffisants entre le texte et son arrière-plan. Pour d’autres, une piste audio jouée automatiquement peut interférer avec une synthèse vocale ou un outil de [lecture assistée (ALD)](/teach-advocate/accessible-presentations/#ald){: hreflang="en"}.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à la perception (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 1.4 -
    Distinguishable](https://www.w3.org/WAI/WCAG22/quickref/#visual-audio-contrast)

**UAAG**

-   [Guideline 1.3 -
    Highlighting](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [Guideline 1.4 - Text
    configuration](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Guideline 1.5 - Volume
    configuration](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Guideline 1.6 - Synthesized speech
    configuration](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Guideline 1.7 - User style sheet
    configuration](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Guideline 1.8 - Orientation in
    viewports](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [Guideline 1.9 - Alternative
    views](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Guideline 1.10 - Element
    Information](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.7: (For the authoring tool user interface) Ensure
    that previews are at least as accessible as in-market user
    agents](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées à la perception

{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, client de site Web marchand, daltonien](/people-use-web/user-stories/archived/#shopper)
-   [Martine, étudiante en ligne, malentendante](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

## Interface utilisateur et navigation opérables {#operable}

### Des fonctionnalités disponibles au clavier {#keyboard}

De nombreuses personnes n’utilisent pas de souris et s’appuient sur le clavier pour interagir avec le Web. Cela demande que toutes les fonctionnalités soient utilisables au clavier, y compris les éléments de formulaires, de saisie et autres composants de l’interface utilisateur.

L’accessibilité au clavier comprend&#8239;:

- Toute fonctionnalité disponible à la souris doit aussi être disponible au clavier
- Le focus clavier ne doit pas être piégé dans une partie du contenu
- Les navigateurs, les outils de production de contenu et autres outils doivent être utilisables au clavier

Être conforme à cette exigence aide les personnes qui n’utilisent que le clavier, y compris celles utilisant un clavier alternatif, un clavier ergonomique, un clavier virtuel à l’écran, ou un contacteur. Cela aide aussi les personnes utilisant des logiciels de reconnaissance vocale pour interagir avec les sites web et pour dicter du texte à travers l’interface du clavier.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à l’accessibilité au clavier (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 2.1 - Keyboard
    accessible](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-operation)

**UAAG**

-   [Guideline 2.1 - Keyboard
    access](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [Guideline 2.2 - Sequential
    navigation](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Guideline 2.3 - Direct navigation and
    activation](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Guideline 2.11 - Other Input
    Devices](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.1: (For the authoring tool user interface) Provide
    keyboard access to authoring
    features](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées à l’accessibilité au clavier

{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)

{% include excol.html type="end" %}

### Donner assez de temps aux utilisateurs pour lire et utiliser le contenu {#time}

Certaines personnes ont besoin de plus de temps que d’autres pour lire et utiliser le contenu. Par exemple certaines personnes ont besoin de plus de temps pour saisir du texte, pour comprendre des instructions, pour manipuler des contrôles, ou d’une façon générale pour mener à bien des tâches complexes sur un site web.

Là où il faut fournir assez de temps, cela implique de fournir des mécanismes pour&#8239;:

- Arrêter, étendre ou ajuster des limites de temps, sauf quand elles sont nécessaires
- Pauser, arrêter ou cacher des contenus mouvants, clignotants ou déroulants
- Repousser ou supprimer les interruptions, sauf quand elles sont nécessaires
- Se ré-authentifier quand une session expire sans perdre de données

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées au temps (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 2.2 - Enough
    time](https://www.w3.org/WAI/WCAG22/quickref/#time-limits)

**UAAG**

-   [Guideline 2.8 - Time-independent
    interaction](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [Guideline 2.10 - Time-based
    media](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.2: (For the authoring tool user interface) Provide
    authors with enough time](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées aux questions de temps

{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Le contenu ne provoque pas de crises d’épilepsie ou de réactions physiques {#safe}

Le contenu qui clignote à certaines fréquences ou selon certains schémas peut provoquer des réactions photosensibles, dont des crises d’épilepsie. Idéalement il faut éviter complètement de faire des contenus clignotants, ou ne les fournir que d’une façon qui n’induit aucun risque connu. De plus les animations et les contenus mobiles peuvent induire un inconfort et des réactions physiques.

Comment éviter de provoquer des crises ou des réactions physiques&#8239;:

- Ne pas inclure de contenu qui clignote selon un rythme ou un schéma particulier
- Prévenir les utilisateurs avant le leur présenter un contenu qui clignote, et fournir une alternative
- Fournir un mécanisme pour couper les animations, à moins qu’elles ne soient essentielles

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à l’épilepsie (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 2.3 -
    Seizures](https://www.w3.org/WAI/WCAG22/quickref/#seizure)

**UAAG**

-   [Guideline 2.9 -
    Flashing](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.3.3: (For the authoring tool user interface) Help
    authors avoid flashing that could cause
    seizures](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}

### Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont {#navigable}

Un contenu bien organisé permet aux utilisateurs de s’orienter et de naviguer efficacement. Par exemple&#8239;:

- Les pages comportent des titres clairs et chaque page est organisée grâce à des titres de sections explicites
- Il y a plus d’une façon de trouver les pages cherchées dans un ensemble de pages web
- Les utilisateurs sont informés de leur position actuelle dans un ensemble de pages web
- Il existe des moyens de contourner des blocs de contenu répétés sur des pages multiples
- Le focus clavier est toujours visible, et le focus suit une séquence pertinente
- Le but de chaque lien est évident, dans l’idéal même si le lien est extrait de son contexte

Être conforme à cette exigence permet de naviguer dans les pages web par des moyens variés, selon  les besoins et les préférences particuliers à chaque personne. Par exemple, tandis que certaines personnes s’appuient sur les structures hiérarchiques de navigation telles les barres de menus pour trouver une page web en particulier, d’autres s’appuient plutôt sur les fonctions de recherche des sites. Certaines personnes peuvent voir le contenu tandis que d’autres peuvent l’écouter, ou le voir et l’écouter en même temps. Certaines personnes peuvent accéder au contenu uniquement avec une souris ou un clavier, tandis que d’autres utilisent les deux.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à la navigation (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 2.4 -
    Navigable](https://www.w3.org/WAI/WCAG22/quickref/#navigation-mechanisms)

**UAAG**

-   [Guideline 2.2 - Sequential
    navigation](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Guideline 2.3 - Direct navigation and
    activation](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Guideline 2.4 - Text
    search](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [Guideline 2.5 - Structural
    navigation](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [Guideline 2.7 - Graphical
    controls](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure
    that editing-view presentation can be programmatically
    determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.3.4: (For the authoring tool user interface) Enhance
    navigation and editing via content
    structure](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [Guideline A.3.5: (For the authoring tool user interface) Provide
    text search of the content](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées aux questions de navigation

{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Les utilisateurs peuvent utiliser différentes modalités d’entrée au-delà du clavier {#modalities}

Les modalités d’entrée, au-delà du clavier, telles que l’activation au toucher, la reconnaissance vocale (saisie à la voix), et les gestes, rendent le contenu plus facile d’usage pour de nombreuses personnes. Cependant tout le monde ne peut pas utiliser chacune de ces modalités d’entrée, ni avec la même facilité. Une considération particulière dans le design maximise le bénéfice qu’on peut tirer de ces modalités d’entrée. Par exemple&#8239;:

-   Les gestes qui requièrent une dextérité ou des mouvements fins comportent une alternative qui ne demande pas une grande dextérité
-   Les composants sont conçus pour éviter une activation accidentelle, par exemple en fournissant une fonctionnalité d’annulation
-   Les intitulés présentés aux utilisateurs correspondent à des noms d’objets dans le code, pour permettre l’activation à la voix
-   Une fonctionnalité activée par le mouvement peut aussi être activée à travers des composants de l’interface utilisateur
-   Les boutons, les liens, et autres composants actifs, sont assez gros pour être facilement activés au toucher

En satisfaisant à cette exigence, on rend le contenu plus facile d’usage pour de nombreuses personnes avec une large gamme de compétences utilisant une large gamme de périphériques. Cela inclut le contenu présenté sur les téléphones mobiles, sur les tablettes, et sur les périphériques en self-service comme les terminaux de billetterie.

{% include excol.html type="start" id="" %}

#### Exigences d’accessibilité liées aux modalités d’entrée (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 2.5 - Input Modalities](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

#### Histoires d’utilisateurs liées aux questions de modalités d’entrée

{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## Des informations et une interface utilisateur compréhensibles {#understandable}

### Le texte est lisible et compréhensible {#readable}

Les auteurs de contenus doivent s’assurer que le contenu textuel est lisible et compréhensible par le plus grand nombre, y compris quand ce contenu est vocalisé par une synthèse vocale. Un tel contenu&#8239;:

- Identifie la langue principale de la page web, par exemple arabe, hollandais ou coréen
- Identifie la langue de passages de texte, d’expressions étrangères, ou d’autres partie de la page web
- Fournit des définitions pour les mots, les expressions, les idiomes et les abréviations inhabituels
- Utilise un langage le plus clair et le plus simple, ou fournit une version simplifiée

Être conforme à cette exigence permet aux logiciels, y compris aux technologies d’assistance, d’interpréter le texte correctement. Par exemple, cette exigence aide le logiciel à lire le contenu à voix haute, à générer des résumés de pages, et à fournir des définitions pour les mots inhabituels, tel le jargon technique. Elle aide aussi les personnes qui ont des difficultés à comprendre des phrases, des expressions ou du vocabulaire complexes. En particulier, elle est utile à plusieurs types de déficiences cognitives.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à la lisibilité (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 3.1 -
    Readable](https://www.w3.org/WAI/WCAG22/quickref/#meaning)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.4.2: (For the authoring tool user interface) Document
    the user interface, including all accessibility
    features](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées aux questions de lisibilité

{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, étudiante en ligne, malentendante](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

### Le contenu apparaît et fonctionne de façon prévisible {#predictable}

Un grand nombre de personnes s’appuie sur des interfaces prévisibles et est désorienté ou distrait par une apparence ou un comportement incohérent. Rendre le contenu plus prévisible implique notamment que&#8239;:

- Les mécanismes de navigation qui sont répétés sur plusieurs pages apparaissent toujours à la même place
- Les éléments d’interface répétés sur plusieurs pages ont toujours le même intitulé
- Les changements significatifs dans la page web n’arrivent pas sans le consentement de l’utilisateur

Être conforme à cette exigence aide les utilisateurs à apprendre facilement les mécanismes de navigation et les fonctionnalités fournis par un site, et pour interagir avec eux selon leurs besoins et leurs préférences spécifiques. Par exemple, certaines personnes assignent des raccourcis clavier personnalisés à des fonctions qu’ils utilisent souvent pour améliorer la navigation au clavier. D’autres mémorisent les étapes à accomplir pour atteindre une page en particulier ou pour aller au bout d’un processus sur un site web.	Tous ces exemples s’appuient sur des fonctionnalités prévisibles et cohérentes.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à la prédictibilité (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 3.2 -
    Predictable](https://www.w3.org/WAI/WCAG22/quickref/#consistent-behavior)

**UAAG**

-   [Guideline 3.3 -
    Predictable](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure
    that editing-view presentation can be programmatically
    determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.4.2: (For the authoring tool user interface) Document
    the user interface, including all accessibility
    features](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées aux questions de prédictibilité

{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Les utilisateurs sont accompagnés pour éviter et corriger les erreurs {#tolerant}

Les formulaires et d’autres systèmes interactifs peuvent induire de la confusion et de la difficulté d’usage pour de nombreuses personnes, et entraîner un risque de saisie accru. Parmi les moyens d’aider les utilisateurs à éviter et à corriger des erreurs, citons notamment&#8239;:

- Des instructions, des messages d’erreur et des suggestions de correction explicites
- De l’aide contextuelle pour les fonctionnalités et les interactions complexes
- Une chance de réviser, corriger ou annuler les informations fournies si nécessaire

Être conforme à cette exigence aide les personnes qui ne voient pas ou n’entendent pas le contenu, et qui peuvent ne pas reconnaître des relations ou des séquences implicites, ou d’autres invitations à interagir. Elle aide aussi les personnes qui ne comprennent pas la fonctionnalité, sont désorientées ou confuses, oublient, ou font des erreurs dans la saisie de formulaires ou trouvent l’interaction difficile pour toute autre raison.

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à l’assistance à la saisie (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 3.3 - Input
    assistance](https://www.w3.org/WAI/WCAG22/quickref/#minimize-error)

**UAAG**

-   [Guideline 3.1 -
    Mistakes](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Guideline A.2.2: (For the authoring tool user interface) Ensure
    that editing-view presentation can be programmatically
    determined](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Guideline A.4.1: (For the authoring tool user interface) Help
    authors avoid and correct
    mistakes](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées aux questions d’assistance à la saisie

{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, client de site Web marchand, daltonien](/people-use-web/user-stories/archived/#shopper)
-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/archived/#retiree)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## Du contenu robuste et une interprétation fiable {#robust}

### Le contenu est compatible avec les logiciels utilisateurs actuels et futurs {#compatible}

Un contenu robuste est compatible avec de multiples navigateurs, outils d’assistance et autres agents utilisateurs. Pour y parvenir il faut notamment&#8239;:

- S’assurer que le code peut être interprété de façon fiable, par exemple en s’assurant qu’il est valide
- Fournir un nom, un rôle et une valeur pour chacun des éléments non standard de l’interface utilisateur

Être conforme à cette exigence aide à maximiser la compatibilité avec les agents utilisateurs actuels, y compris les technologies d’assistance. En particulier, elle permet aux technologies d’assistance d’interpréter le contenu de façon fiable, et de le présenter et de le faire fonctionner de différentes manières. Cela inclut les boutons, les champs de saisie et les autres contrôles non-standard (scriptés).

{% include excol.html type="start" %}

#### Exigences d’accessibilité liées à la compatibilité (liens vers les spécifications techniques, en anglais)

{:.no_toc}

{% include excol.html type="middle" %}

{::nomarkdown}
{% include lang.html type="start" lang="en" %}
{:/}

**WCAG**

-   [Guideline 4.1 -
    Compatible](https://www.w3.org/WAI/WCAG22/quickref/#ensure-compat)

**UAAG**

-   [Guideline 2.6 - Preference
    settings](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [Guideline 4.1 - Assistive
    technology](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [Guideline 5.1 - Follow
    specifications](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG**

-   [Principle A.1: Authoring tool user interfaces follow applicable
    accessibility
    guidelines](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Part B. Support the production of accessible
    content](https://www.w3.org/TR/ATAG20/#part_b)

{::nomarkdown}
{% include lang.html type="end" %}
{:/}

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Histoires d’utilisateurs liées aux questions de compatibilité

{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, client de site Web marchand, daltonien](/people-use-web/user-stories/archived/#shopper)
-   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/archived/#accountant)
-   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/archived/#classroomstudent)
-   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente qui est sourde et aveugle](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

{% include excol.html type="all" %}
