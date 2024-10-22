---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Contenu audio et contenu vidéo"
title_image: /content-images/media-guide/av-content.svg
nav_title: "Contenu audio et contenu vidéo"
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2024-09-17  # Keep the date of the English version

translation:
  last_updated: 2024-09-17  # Put the date of the translation YYYY-MM-DD (with month in the middle)

translators:
- name: Sofia Ahmed
- name: "Rémi Bétin"

permalink: /media/av/av-content/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/av-content/   # Do not change this

github:
  label: wai-media-guide

resource:
  ref: /media/av/
navigation:
  previous: /media/av/planning/
  next:     /media/av/description/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Décrit les considérations pour l’accessibilité à prendre en compte lors de la planification, de la création du scénario et du story-board, de l’enregistrement, et de la production de contenus audios et vidéos.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p>Première publication septembre 2019.</p>
   <p><strong>Rédactrice :</strong> <a href=" https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS liste les contributeurs et les crédits.</p>
   <p>Développé par le groupe de travail Éducation et promotion (<a href=" https://www.w3.org/WAI/EO/">EOWG</a>). Rédigé initialement dans le cadre du projet <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA</a> financé par le <abbr title="United States">U.S.</abbr> Access Board. Révisé dans le cadre du projet <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access</a> financé par la fondation Ford.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Résumé" class="" %}
{:/}

Cette page décrit les considérations pour l’accessibilité à prendre en compte lors de la planification, de la création du scénario et du story-board, de l’enregistrement, et de la production de contenus audios et vidéos.

Elle traite de **freins habituels à l’accessibilité**, notamment :
* [l’absence de description des informations visuelles](#plan-description) (telle que du texte dans la vidéo) pour les personnes qui ne peuvent pas voir la vidéo ;
* [la nécessité de voir pour comprendre le contenu](#sensory) de la vidéo ;
* [un texte dans la vidéo difficile à voir pour certaines personnes](#readable) car il n’y a pas de contraste suffisant entre les couleurs du texte et de l’arrière-plan.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}
{::nomarkdown}
{% include toc.html type="start" title="Table des matières" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introduction

Cette page décrit les considérations pour l’accessibilité lors de la planification, de la création du scénario et du story-board, de l’enregistrement, et de la production de contenus audios et vidéos.

Certains des conseils ci-dessous sont liés aux exigences des Règles pour l’accessibilité des contenus Web (WCAG) et contiennent des liens vers une ressource distincte. _(La page de cette ressource sur la planification introduit le [standard WCAG](/media/av/planning/#wcag-standard).)_ Les autres conseils sont des bonnes pratiques.

Des conseils supplémentaires sont présentés dans la ressource [[Rendre les événements accessibles - Liste pour les réunions, conférences, formations et présentations à distance/virtuelles, en personne, ou hybrides]](/teach-advocate/accessible-presentations/):
* [Préparer les diapositives et le contenu projeté](/teach-advocate/accessible-presentations/#preparing-slides-and-projected-material-speakers)
* [Pendant la présentation](/teach-advocate/accessible-presentations/#during-the-presentation-speakers)

## Audio

### Créez un contenu audio de haute qualité – _configuration de l’enregistrement_

* Utilisez un/des micro(s) et un logiciel d’enregistrement de haute qualité.
* Lorsque c’est possible, enregistrez dans une pièce isolée de tous les bruits extérieurs.
* Évitez les pièces avec des revêtements durs, tels que du parquet ou du carrelage.

### Utilisez un arrière-plan sonore de faible volume  – _enregistrement, postproduction_ (WCAG AAA)

Lorsque le son principal est une personne qui parle et qu’il y a une musique de fond, réglez les niveaux de manière à ce que les personnes atteintes de troubles auditifs ou cognitifs puissent facilement distinguer le contenu parlé de l’arrière-plan.

Précisément, faites en sorte que l’arrière-plan sonore soit 20 décibels en dessous du contenu parlé d’avant-plan (avec une exception pour les sons occasionnels qui ne durent qu’une ou deux secondes).  

Évitez les sons qui peuvent distraire ou déranger, tels que les sons aigus ou répétitifs.

<span style="color:#585858; font-style:italic;">Retrouvez plus d’informations dans [Comprendre le critère de succès 1.4.7 : Arrière-plan sonore de faible volume ou absent (AAA)](https://www.w3.org/WAI/WCAG22/Understanding/low-or-no-background-audio.html).</span>

### Parlez clairement et lentement – _locuteurs_

Parlez clairement. C’est important pour les personnes qui souhaitent comprendre le contenu, et pour les « sous-titreurs ».

Parlez aussi lentement que possible. Cela permettra aux auditeurs de mieux comprendre, et d’améliorer le minutage pour les sous-titres et la langue des signes.

### Donnez aux auditeurs le temps de comprendre l’information – _locuteurs, postproduction_

Faites des pauses entre les différents sujets.

### Utilisez un langage clair – _scénario_

Évitez ou expliquez le jargon, les acronymes, et les idiomes. Par exemple, les expressions telles que « placer la barre haut » peuvent être interprétées littéralement par certaines personnes avec des troubles cognitifs et peuvent prêter à confusion.

### Fournissez une redondance pour les caractéristiques sensorielles – _scénario_ (WCAG A) {#sensory}

Rendez votre information accessible aux personnes qui ne peuvent pas voir et/ou entendre.

Par exemple, au lieu de dire :
<blockquote>Attachez cela à l’extrémité verte.</blockquote>
Dites :
<blockquote>Attachez le petit anneau à l’extrémité verte, qui est l’extrémité la plus grande.</blockquote>

<span style="color:#585858; font-style:italic;">Retrouvez plus d’informations concernant principalement les pages Web, mais qui sont pertinentes pour les contenus audios et vidéos, sur [Comprendre le critère de succès 1.3.3 : Caractéristiques sensorielles (A)](https://www.w3.org/WAI/WCAG22/Understanding/sensory-characteristics.html).</span>

## Vidéo

### Évitez de déclencher des crises – _story-board, postproduction_ (WCAG A)

Évitez tout élément qui clignote plus de trois fois dans n’importe quel intervalle d’une seconde.

<span style="color:#585858; font-style:italic;">Retrouvez plus d’informations sur [Comprendre le critère de succès 2.3.2 : Trois flashs (AAA)](https://www.w3.org/WAI/WCAG22/Understanding/three-flashes.html) et [Comprendre le critère de succès 2.3.1: Pas plus de trois flashs ou sous le seuil critique (A)](https://www.w3.org/WAI/WCAG22/Understanding/three-flashes-or-below-threshold.html)</span>

### Prenez en compte la visibilité du locuteur – _story-board, enregistrement, postproduction_

Certaines personnes utilisent les mouvements de la bouche pour comprendre le langage parlé. Lorsque c'est possible, assurez-vous que le visage du locuteur soit visible et bien éclairé.

### Rendez le texte superposé lisible – _story-board, postproduction_ (WCAG AA, AAA) {#readable}

Pour tout texte, prenez en considération la famille de polices, la taille, et le contraste entre le texte et l’arrière-plan.

<span style="color:#585858; font-style:italic;">Retrouvez plus d’informations sur [Comprendre le critère de succès 1.4.3 : Contraste (minimum) (AA)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-minimum.html) et [Comprendre le critère de succès 1.4.6 : Contraste (amélioré) (AAA)](https://www.w3.org/WAI/WCAG22/Understanding/contrast-enhanced).</span>

### Prévoyez l’interprétation en langue des signes – _story-board, enregistrement_ (WCAG AAA)

Souvent, une interprétation en langue des signes est fournie en superposition dans le coin en bas à droite des vidéos. Par exemple : [Publicité NHS 111 en langue des signes britannique (BSL) (YouTube)<br>{% include image.html src="media-guide/sign-example.jpg" alt="" class="normal video" %}](https://www.youtube.com/watch?v=TCq3ru9HQSc)

Prévoyez que la vidéo ne comprenne pas d’information importante qui serait masquée par la superposition de l’interprétation en langue des signes.

Pour d’autres conseils concernant l’étape d’enregistrement, consultez une autre page de cette ressource : [Langues des signes](/media/av/sign-languages/)

### Prévoyez la description des informations visuelles – _story-board, enregistrement_  (WCAG A, AA) {#plan-description}

La _description_ fournit du contenu pour les personnes aveugles et d’autres personnes qui ne peuvent pas voir la vidéo suffisamment bien. Elle décrit les informations visuelles nécessaires pour comprendre le contenu, **incluant le texte affiché dans la vidéo**.

Prévoyez soit :
* d’intégrer une description dans le contenu audio principal,<br>_**ou**_
* d’enregistrer le contenu audio ou vidéo avec un minutage laissant de l’espace pour une description séparée.

#### Intégrez une description {#integrate-description}

Pour de nombreuses vidéos, telles que les présentations ou les vidéos didactiques, le meilleur moyen de gérer la description est de ne pas en avoir besoin du tout &mdash; c’est-à-dire, que toutes les informations visuelles dont les utilisateurs ont besoin pour comprendre le contenu soient intégrées à l’audio principal. On appelle cela une « description intégrée ». Lorsque prévu à l’avance, cela est relativement facile pour de nombreux types de vidéos sur le Web. Par exemple :

<table>
  <tr>
    <th scope="col">Au lieu que le locuteur dise :</th>
    <th scope="col">Le locuteur peut dire :</th>
  </tr>
  <tr>
    <td>Comme vous pouvez le voir sur ce graphique, les ventes ont augmenté significativement entre le premier et le deuxième trimestre.</td>
    <td>Ce graphique montre que les ventes ont augmenté significativement, de 1 million au premier trimestre à 1,3 million au second trimestre.</td>
  </tr>
  <tr>
    <td>Fouettez le mélange jusqu’à qu’il ressemble à ceci.</td>
    <td>Fouettez le mélange jusqu’à ce que l’huile, le vinaigre, et les épices soient bien mélangés.</td>
  </tr>
  <tr>
    <td>Attachez cela à l’extrémité verte.</td>
    <td>Attachez le petit anneau à l’extrémité verte, qui est l’extrémité la plus grande.</td>
  </tr>
</table>

Voici un exemple de [vidéo de formation avec la description intégrée dans le discours du formateur  (YouTube)<br>{% include image.html src="media-guide/eg-integrated-description.png" alt="" class="normal video" %}](https://www.youtube.com/watch?v=JUfmCvdzqbM)

Si vous souhaitez des conseils sur ce qu’il faut inclure dans la description, consultez la page « Description des informations visuelles », dans la section [Conseils pour rédiger une description](/media/av/description/#writing).

#### Prévoyez du temps pour la description {#time-for-description}

Pour certains types de vidéos, comme les pièces de théâtre, la description des informations visuelles ne peut pas être effectuée subtilement par les locuteurs de la vidéo principale. Pour ces vidéos, la description sera disponible à part.

Lorsque la description est plutôt courte, prévoyez de l’espace dans l’audio pour ajouter la description.

Lorsque la description est plus longue que l’espace que vous souhaitez laisser dans l’audio principal, vous pouvez enregistrer la scène avec un laps de temps supplémentaire qui permettra d’intégrer la description sans devoir mettre la scène sur pause. En d’autres termes, la même scène est plus courte dans la vidéo principale. Dans la version décrite, cette même scène est légèrement plus longue au début ou à la fin. Par exemple :

<table>
  <tr>
    <th scope="col">Narration</th>
    <th scope="col">Durée de la scène dans la vidéo principale</th>
    <th scope="col">Durée de la scène dans la vidéo décrite</th>
    <th scope="col">Description</th>
  </tr>
  <tr>
    <td><q>Les sous-titres sont également pratiques pour les personnes qui veulent regarder une vidéo dans des environnements bruyants.</q></td>
    <td>3&nbsp;secondes</td>
    <td>7&nbsp;secondes</td>
    <td>Un homme regarde la vidéo sous-titrée avec un groupe de personnes qui discutent à côté de lui.</td>
  </tr>
  <tr>
    <td><q>Ou lorsque vous devez être très, très calme.</q></td>
    <td>2&nbsp;secondes</td>
    <td>5&nbsp;secondes</td>
    <td>Il s’avère qu’ils sont dans une bibliothèque. La bibliothécaire fait signe au groupe de se taire.</td>
  </tr>
</table>

Retrouvez un exemple cette méthode avec la vidéo : [L’accessibilité Web illustrée : sous-titres de vidéo](/perspective-videos/captions/). La vidéo principale dure 48 secondes. La version décrite dure 1 minute et 18 secondes ; pourtant, il n’y a aucune pause du point de vue visuel dans la vidéo.

#### En savoir plus sur la description

Vous trouverez plus d’informations dans la page suivante de cette ressource : [Description des informations visuelles](/media/av/description/).
