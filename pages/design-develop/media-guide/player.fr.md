---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Lecteurs multimédia"
title_image: /content-images/media-guide/player-nobackground.svg
nav_title: "Lecteur multimédia"
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2024-09-17  # Put the date of this translation YYYY-MM-DD (with month in the middle)
translators:
- name: "Sofia Ahmed"
- name: "Rémi Bétin"

permalink: /media/av/player/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/player/   # Do not change this

github:
  label: wai-media-guide

resource:
  ref: /media/av/
navigation:
  previous: /media/av/sign-languages/
  next: /media/av/acknowledgements/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Introduit les considérations à prendre en compte pour fournir un lecteur multimédia compatible avec l'accessibilité.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG and ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Date :</strong> Mise à jour : 17 septembre 2024. Première publication septembre 2019. CHANGELOG.</p>
   <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS liste les contributeurs et les crédits.</p>
   <p>Développé par le groupe de travail Éducation et promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Rédigé initialement dans le cadre du projet <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA</a> financé par le <abbr title="United States">U.S.</abbr> Access Board. Révisé dans le cadre du projet <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access</a> financé par la fondation Ford.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Résumé" class="" %}
{:/}

Certains lecteurs multimédia ne sont pas accessibles pour les personnes en situation de handicap. Il existe des lecteurs développés spécifiquement pour l'accessibilité. Il est généralement préférable d'utiliser un de ces lecteurs existants, plutôt que d'en développer un nouveau.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Table des matières" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introduction

Les navigateurs modernes fournissent un lecteur multimédia par défaut. La plupart ont des fonctionnalités limitées pour prendre en compte l'accessibilité.

Plutôt que de développer tous les éléments nécessaires pour créer un lecteur multimédia accessible, la plupart des organisations choisissent d'utiliser un lecteur déjà existant  avec une bonne prise en compte de l'accessibilité.

Il existe des lecteurs développés spécifiquement pour l'accessibilité. Certains sont gratuits, open source, et d'autres sont commerciaux.

## Compétences requises {#skills}

L'utilisation d'un lecteur multimédia déjà existant requiert des compétences modérées en HTML.

Le développement de votre propre lecteur multimédia accessible requiert des compétences avancées en HTML et en JavaScript.

## Les fonctionnalités d'un lecteur accessible {#player-accessibility-functionality}

Les lecteurs multimédia accessibles fournissent une interface utilisateur qui fonctionne sans souris, au moyen d'une interface vocale, lorsque la page est agrandie, et avec des lecteurs d'écran. Par exemple, les lecteurs multimédia doivent :
* Fournir une assistance au clavier (voir [Comprendre les WCAG : Accessible au clavier](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible))
* Rendre l'indicateur de focus du clavier visible (voir [Comprendre les WCAG : Visibilité du focus](https://www.w3.org/WAI/WCAG22/Understanding/focus-visible))
* Fournir des étiquettes claires (voir [Comprendre les WCAG : Étiquettes ou instructions](https://www.w3.org/WAI/WCAG22/Understanding/labels-or-instructions), [Information et relations](https://www.w3.org/WAI/WCAG22/Understanding/info-and-relationships))
* Avoir un contraste suffisant entre les couleurs du texte, des commandes, et des arrières-plans (voir [Comprendre les WCAG : Contraste (minimum)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-minimum), [Contraste (amélioré)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-enhanced), [Contraste du contenu non textuel](https://www.w3.org/WAI/WCAG22/Understanding/non-text-contrast.html))

Certains lecteurs multimédia fournissent aux utilisateurs des fonctionnalités d'accessibilité supplémentaires telles que :
* Modifier la vitesse de la vidéo
* Paramétrer la manière dont les sous-titres apparaissent (par exemple, le style, la taille, et les couleurs du texte, ainsi que la position des sous-titres)
* Lire les sous-titres à l'aide d'un lecteur d'écran et d'un outil baille
* Des transcriptions interactives

Les transcriptions interactives utilisent le fichier des sous-titres. Les transcriptions interactives mettent en surbrillance les parties de texte au moment où elles sont dites. Les utilisateurs peuvent sélectionner du texte dans la transcription et aller à l'instant associé dans la vidéo.

<img src="{{ "/content-images/media-guide/interactive-transcript.png" | relative_url }}" alt="">

Plus de détails sur les fonctionnalités d'accessibilité des lecteurs dans ce document séparé : [Exigences des utilisateurs en matière d'accessibilité des contenus multimédia](https://www.w3.org/TR/media-accessibility-reqs/).

## Lecteurs existants {#existing-players}

Des informations sur l'accessibilité des lecteurs multimédia sont disponibles en ligne. Par exemple, [le tableau comparatif de l'accessibilité des lecteurs multimédia sur le Web _(dernière mise à jour en juillet 2016)_ {% include_cached external.html %}](https://kensgists.github.io/apt/).

Chaque lecteur multimédia dispose d'une documentation sur les étapes à suivre pour les installer sur une page Web. Par exemple, [les étapes d'installation d'AblePlayer {% include_cached external.html %}](https://ableplayer.github.io/ableplayer/#setup-step-1-use-html5-doctype).

### Support des méthodes de description

Une fonctionnalité du lecteur multimédia est nécessaire pour certaines méthodes de description des informations visuelles *(appelée audio-description, vidéo-description, ou vidéo décrite)*, comme expliqué dans la page [Description](/media/av/description/). À notre connaissance, les lecteurs multimédia suivants fournissent de telles fonctionnalités :
* Supporte une description dans un fichier texte (format VTT) :
   * AblePlayer — supporte la description lorsqu'il y a de l'espace dans l'audio, et lorsque la vidéo doit être mise en pause ("description étendue")
   * video.js — supporte la description lorsqu'il y a de l'espace dans l'audio ; ne supporte **pas** la description lorsque la vidéo doit être mise en pause ("description étendue")
* Supporte un fichier audio séparé avec description :
   * AblePlayer
   * OzPlayer
   * video.js — avec plug-in

_(Si vous connaissez d'autres lecteurs qui fournissent ces fonctionnalités, faites-le nous savoir via GitHub ou par courriel grâce aux liens de la section [Aider à améliorer cette page](#helpimprove). Merci !)_