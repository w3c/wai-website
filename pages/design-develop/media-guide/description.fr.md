---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Description des informations visuelles"
title_image: /content-images/media-guide/ad.svg
nav_title: "Description"
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2024-09-17  # Keep the date of the English version

translation:
  last_updated: 2024-09-17  # Put the date of the translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Sofia Ahmed"
- name: "Rémi Bétin"
contributors:
- name: "Sandra Velarde Gonzalez (ETNIC)"

permalink: /media/av/description/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/description/   # Do not change this

github:
  label: wai-media-guide

resource:
  ref: /media/av/
navigation:
  previous: /media/av/player/
  next:     /media/av/captions/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Aide à comprendre et à créer une description des informations visuelles (appellée audio-description, vidéo-description ou vidéo décrite) pour l’accessibilité des contenus audios et vidéos.
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

La description des informations visuelles est appelée **_audiodescription_**, **_vidéodescription_**, ou **_vidéo décrite_** dans différents domaines.

La description fournit du contenu aux personnes aveugles et aux autres personnes qui ne peuvent pas voir la vidéo convenablement. Elle décrit l’information visuelle nécessaire à la compréhension du contenu, notamment le texte affiché dans la vidéo.

Cette page aide à comprendre et à créer une description des informations visuelles pour vos vidéos nouvelles et existantes. (La description ne s’applique pas aux médias seulement audio, tels que les podcasts.)

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

_Qui :_ La description fournit du contenu aux personnes aveugles et aux autres personnes qui ne peuvent pas voir la vidéo convenablement.

_Quoi :_ La description explique les informations visuelles nécessaires à la compréhension du contenu. (Par exemple, « Pat ouvre une petite boîte, regarde une bague de fiançailles en diamant, et pleure ».) Elle peut être fournie en tant que :
- **description intégrée** — la description est incluse dans les scripts des principaux intervenants.
- **vidéo alternative** — la description est incluse dans une vidéo distincte.
- **fichier séparé** — la description est dans un fichier de texte synchronisé ou un fichier audio synchronisé ; qui doit être supporté par le lecteur multimédia.

{% include excol.html type="start" id="" %}
Plus d’informations sur les types de description :
{% include excol.html type="middle" %}
- **description intégrée**  _(exemple ci-dessous)_
    - une vidéo avec une piste audio
    - la description trouve naturellement sa place dans le script du ou des locuteurs principaux.
    - généralement idéale pour la plupart des vidéos de formation, bien que ce ne soit pas le type le plus fréquent.
- **vidéo alternative**  _(exemple ci-dessous)_
    - deux vidéos&nbsp;: une sans description&nbsp;; une avec description
    - la description est incluse dans une piste audio
    - la description est généralement faite par un locuteur différent pour qu’elle soit facilement distinguable du contenu audio principal
- **fichier séparé**
    - une vidéo avec le contenu audio principal, **_et_**
    - la description est fournie dans une piste audio séparée **_ou_** un fichier de texte synchronisé
    - doit être supporté par le lecteur multimédia
{% include excol.html type="end" %}


_Exemples :_

* Intégrée: [Vidéo de formation avec la description intégrée dans le discours de la formatrice (YouTube)<br>{% include image.html src="media-guide/eg-integrated-description.png" alt="" class="normal video" %}](https://www.youtube.com/watch?v=JUfmCvdzqbM)

* Vidéo alternative: [Vidéo alternative d’un reportage comprenant une audio-description avec une voix différente (YouTube)<br>{% include image.html src="media-guide/using-description.jpg" alt="" class="normal video" %}](https://www.youtube.com/watch?v=F3A1VffiOH4)

<p style="color:#686868; line-height:100%; font-size:0.875rem;">Ces vidéos sont également disponibles depuis le site de W3C : <a href="https://www.w3.org/2020/10/TPAC/w3cx-challenging-assumptions.html#talk" style="color:#686868">vidéo de formation (page Web)</a>, <a href=" https://media.w3.org/wai/perspective-videos/text-to-speech-ad.mp4" style="color:#686868">reportage vidéo (taille du fichier MP4 28 Mo)</a>.</p>

### Terminologie

{:.no_toc}

La description des informations visuelles fournie en audio est appelée « audiodescription » dans les Règles pour l’accessibilité des contenus Web (WCAG). Dans certaines régions et certains documents, elle est appelée « vidéodescription » ou « vidéo décrite ».

Cette ressource utilise le terme « vidéo décrite » à certains endroits comme une forme abrégée de « vidéo qui comprend la description des informations visuelles en audio ».

## Mon contenu multimédia nécessite-t-il une description ? {#checklist}

Cette section vous indique :

* Ce qui est exigé par le standard WCAG aux niveaux A, AA, et AAA. _(Les [WCAG](/media/av/planning/#wcag-standard) sont introduites dans la page Planifier de cette ressource.)_
* Ce qu’il est nécessaire de faire pour répondre aux besoins des utilisateurs, au-delà des WCAG. S’il n’y a pas de « A », cela signifie que ce point n’est pas requis dans les WCAG.

{% capture boxhead %}
Audio seulement (par exemple, les podcasts) :
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-ao" %}
{:/}

*   Pour les vidéos pré-enregistrées et en direct :
    *   La description n’est pas nécessaire car il n’y a pas d’information visuelle.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% capture boxhead %}
Vidéo :
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-video" %}
{:/}

**La vidéo contient-elle des informations visuelles** nécessaires pour comprendre le message communiqué par la vidéo ?

*   Si non (par exemple, il s’agit seulement d’une personne qui parle) :
    *   Une description n’est pas nécessaire. Envisagez d’[informer les utilisateurs](/media/av/planning/#none).
*   Si oui :
    *   Pour les vidéos pré-enregistrées :
        *   Une description est nécessaire pour fournir les informations visuelles importantes aux personnes aveugles qui écoutent la vidéo.
        *   Une description **_ou_** une [transcription descriptive](/media/av/transcripts/) est **_exigée_** par les WCAG au niveau A.
        *   Une description est **_exigée_** par les WCAG au niveau AA.
            {:.alt}
    *   Pour les vidéos en direct :
        *   Une description est nécessaire pour fournir les informations visuelles importantes aux personnes aveugles.
        *   Une description n’est pas nécessaire pour répondre aux exigences des WCAG.
            {:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

<br>

**Extraits des WCAG** avec des accentuations, des ajouts entre [crochets] et des liens vers plus d’informations dans « Comprendre les WCAG » :

* [A 1.2.1 Contenu seulement audio ou vidéo](https://www.w3.org/WAI/WCAG22/Understanding/audio-only-and-video-only-prerecorded.html) (pré-enregistré) : Pour… des médias pré-enregistrés seulement vidéo : soit une version de remplacement pour un média temporel [transcription descriptive] ***ou*** une piste audio [ou description] présentant une information équivalente pour un contenu pré-enregistré seulement vidéo.
* [A 1.2.3 Audio-description ou version de remplacement pour un média temporel](https://www.w3.org/WAI/WCAG22/Understanding/audio-description-or-media-alternative-prerecorded.html) (pré-enregistré) : une version de remplacement pour un média temporel [transcription] ***ou*** une audio-description du contenu vidéo pré-enregistré pour un média synchronisé...
* [AA 1.2.5 Audio-description](https://www.w3.org/WAI/WCAG22/Understanding/audio-description-prerecorded.html) (pré-enregistrée) : fournir une audio-description pour tout contenu vidéo pré-enregistré, sous forme de média synchronisé.
* [AAA 1.2.7 Audio-description étendue](https://www.w3.org/WAI/WCAG22/Understanding/extended-audio-description-prerecorded.html) (pré-enregistrée) : lorsque les blancs présents dans le fond sonore ne sont pas suffisants pour permettre à l’audio-description de transmettre le sens de la vidéo, fournir une audio-description étendue pour tout contenu vidéo pré-enregistré sous la forme de média synchronisé.

## Considérations à prendre en compte pour la description, compétences, et outils {#description-considerations-skills-and-tools}

Lorsque l’accessibilité est prise en compte _avant_ la production des vidéos, les coûts et les efforts pour créer une description sont significativement moindres. Pour certains types de vidéos (telles que les vidéos de formation), la description des informations visuelles peut être facilement intégrée par les locuteurs au cours de la planification et de la création de la vidéo ; vous n’avez pas besoin d’une description à part, donc il n’y a pas de coûts supplémentaires.

Retrouvez des informations relatives à la planification de la description dans les _nouvelles vidéos_ sur la page « Créer du contenu audio et vidéo », dans la section [Prévoyez la description des informations visuelles](/media/av/av-content/#plan-description).

Pour ajouter une description à une _vidéo déjà existante_, vous aurez selon les cas besoin de compétences et des outils pour :

* la rédiger
* créer un fichier VTT avec les descriptions synchronisées

Ou :

* la rédiger
* la raconter
* l’enregistrer
* l’intégrer dans de nouveaux fichiers audio et/ou vidéo

De nombreuses organisations choisissent de sous-traiter la création de leur description.

## Quelle méthode de description ?

Choisir votre méthode de description dépend du contenu de votre vidéo et du lecteur multimédia que vous utilisez. Tout d’abord, réglez les questions suivantes concernant votre contenu vidéo, votre minutage, et votre lecteur :

* **Intégrée** : Pour les nouvelles vidéos, les locuteurs peuvent-ils décrire les informations visuelles pertinentes pendant l’enregistrement de la vidéo ? Cela fonctionne bien avec certaines vidéos, comme les vidéos de présentation ou les vidéos didactiques. À titre d’exemple, allez sur la page « Création de contenus audio et vidéo », dans la section [« Intégrez une description »](/media/av/av-content/#integrate-description).

* **Accessibilité du lecteur multimédia** : retrouvez des informations sur les fonctionnalités des lecteurs multimédia sur la page « Lecteurs multimédia accessibles » sous [Lecteurs existants](/media/av/player/#existing-players). Le lecteur multimédia, la plate-forme, ou le plug-in que vous utilisez fournissent-ils des fonctionnalités pour :
  * une description provenant d’un fichier texte ?
  * une piste audio à part pour la description ?

<a id="space"> </a>

* **Espace dans l’audio** : y a-t-il suffisamment d’espace dans l’audio principal pour la description ? En d’autres termes, les pauses sont-elles suffisantes dans la narration ou les dialogues au moment où la description pertinente apparaîtra ? Par exemple,
  * Si la seule description nécessaire se trouve au début de la vidéo où on trouve un titre textuel et de la musique de fond, alors : oui, il y a assez d’espace.
  * Si le locuteur parle continuellement sans faire de pauses, alors : non, il n’y a pas assez d’espace pour la description.

***Utilisez les informations ci-dessus pour répondre aux questions suivantes*** et déterminer quelle méthode utiliser pour la description de votre vidéo. Les options listées en premier sont généralement celles à privilégier, mais vous pouvez choisir une autre option.

{% capture boxhead %}
Méthode de description :
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="method-tree" %}
{:/}

*   Est-ce une nouvelle vidéo _et_ les locuteurs peuvent-ils décrire les informations visuelles dans l’audio principal ?
    *   Si oui, fournissez une **description intégrée** (une description à part n’est pas nécessaire),
        _**ou**_ une autre option ci-dessous.
    *   Si non, allez-vous utiliser un lecteur multimédia qui possède des fonctionnalités pour lire une description provenant d’un fichier de texte ?
        *   Si oui, fournissez une description dans un **fichier de texte synchronisé**,
            _**ou**_ une autre option ci-dessous.
        *   Si non, allez-vous utiliser un lecteur multimédia qui sait gérer une piste audio séparée pour la description, _et_ y a-t-il assez d’espace dans l’audio principal pour la description ?
            *   Si oui, fournissez une description dans un **fichier audio à part**,
                _**ou**_ fournissez une **vidéo décrite à part**.
            *   Si non, fournissez une **vidéo décrite  à part**.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Options pour créer une description

En fonction des caractéristiques de votre vidéo, choisissez une des options ci-dessous — telle que déterminée par la section « Quelle description fournir pour ma vidéo ? » ci-dessus.

### Intégrée – Créer une description intégrée

Cette approche fonctionne pour certaines nouvelles vidéos. Voici les étapes essentielles du processus de développement d’une vidéo avec description intégrée :

1. Lors de l’écriture du scénario, assurez-vous que toutes les informations visuelles pertinentes sont incluses. Retrouvez des [Conseils pour rédiger des descriptions ci-dessous](#writing) et des exemples dans « Contenu audio et vidéo accessible », [section « Intégrez une description »](/media/av/av-content/#integrate-description))
2. Avant de finaliser la vidéo, vérifiez et confirmez que toutes les informations visuelles pertinentes sont présentes dans l’audio.

### Texte – Créer une description dans un fichier texte

Cette approche ne fonctionne que lorsque le lecteur multimédia que vous utilisez peut lire une description basée sur du texte lu à voix haute. De plus, soit l’espace est suffisant dans l’audio principal pour la description, soit le lecteur fournit des fonctionnalités pour mettre la vidéo sur pause lors de la description. Ce procédé nécessite de créer un fichier texte synchronisé — un minimum de compétences est requis ; des outils ne sont pas nécessaires, bien que des outils accélèrent et facilitent la création.

Voici les étapes essentielles du processus de création de descriptions dans un fichier texte :

1. Rédigez les descriptions. Retrouvez des [Conseils pour rédiger des descriptions ci-dessous](#writing).
2. Ajoutez les horodatages des descriptions dans le format de fichier utilisé par le lecteur multimédia. Il s’agit généralement de [WebVTT comme dans l’exemple ci-dessous](#vtt).

(Assurez-vous que le fichier des descriptions est inclus avec la vidéo.)

Si l’espace de l’audio principal est insuffisant pour les descriptions, fournissez aux utilisateurs des instructions pour mettre leur lecteur en pause pendant la description. Par exemple :

{::nomarkdown}
{% include box.html type="start" title="Pour mettre la vidéo en pause pour la description des informations visuelles :" class="" %}
{:/}

<img src="{{ "/content-images/media-guide/player-preferences.png" | relative_url }}" alt="" class="" style="float: right; height: 7em; padding-left 7px;'">

* Sélectionnez « Préférences », puis « Descriptions ».<br>
  La boîte de dialogue « Préférences pour la description » s’ouvre.
* Sous « Description textuelle », sélectionnez la case à cocher « Mettre la vidéo en pause automatiquement quand la description commence ».
* Cliquez sur le bouton « Enregistrer ».

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Contenu seulement audio – Créer seulement une description dans un fichier audio à part

Cette approche ne fonctionne que lorsque l’espace dans l’audio principal est suffisant pour la description, *et* lorsque le lecteur multimédia sait gérer une piste audio à part pour la description. Cela nécessite des compétences et un logiciel d’enregistrement et de montage de contenu audio.

Voici les étapes essentielles du processus de développement d’une description dans un fichier audio à part :

1. Rédigez les descriptions. Retrouvez des [Conseils pour rédiger des descriptions ci-dessous](#writing).
2. Enregistrez les descriptions. Retrouvez des [Conseils pour enregistrer des descriptions ci-dessous](#recording).
3. Assurez-vous que les descriptions s’activent dans les espaces audio de la vidéo principale.
4. Fournissez un fichier de sous-titres de la description. [Exemple de fichier VTT de l’audiodescription](#vtt)

(Assurez-vous que les fichiers sont intégrés au lecteur sur la page Web.)

### Vidéo avec de l’espace – Créer une vidéo décrite à part – si les espaces audio sont suffisants pour les descriptions

Cette option s’applique lorsque les descriptions peuvent s’insérer dans les espaces de la vidéo, comme décrit dans [Espace dans le contenu audio ci-dessus](#space)_. Elle nécessite des compétences et un logiciel d’enregistrement et de montage de contenu vidéo. En fonction du lecteur que vous utilisez, vous pourriez avoir besoin d’un logiciel vidéo pour régénérer la vidéo.

Voici les étapes essentielles du processus de création d’un fichier audio séparé :

1. Rédigez les descriptions. Retrouvez des [Conseils pour la rédaction de descriptions ci-dessous](#writing).
2. Enregistrez les descriptions. Retrouvez des [Conseils pour enregistrer des descriptions ci-dessous](#recording).
3. Créez un nouveau fichier audio en associant l’audio original et la nouvelle description audio. Retrouvez des [Conseils pour associer des fichiers audio ci-dessous](#combining).
4. Fournissez le(s) fichier(s) :
* _**Si**_ votre lecteur utilise des pistes vidéo et audio séparées,<br>vous avez fini.
* _**Si**_ votre lecteur utilise un seul fichier vidéo qui inclut l’audio,<br>générez la nouvelle vidéo décrite avec le fichier audio que vous venez de créer.

(Assurez-vous que sur la page Web où la vidéo est disponible, la version décrite utilise la version correcte que vous venez de créer.)

### Vidéo sans espace – Créer une vidéo décrite à part – s’il n’y a _pas_ suffisamment d’espace dans l’audio pour les descriptions

S’il n’y a **pas** suffisamment d’espace pour toutes les descriptions _(comme décrit dans [Espace dans le contenu audio ci-dessus](#space))_, vous devrez développer un fichier audio à part et aussi éditer la piste visuelle. Cette option nécessite des compétences et un logiciel d’enregistrement audio, de montage de contenu audio, et de montage de contenu vidéo.

Voici les étapes essentielles du processus pour créer un fichier audio séparé et éditer la piste visuelle :

1. Rédigez des descriptions. Retrouvez des [Conseils pour rédiger des descriptions ci-dessous](#writing).
2. Enregistrez les descriptions. Retrouvez des [Conseils pour enregistrer des descriptions ci-dessous](#recording).
3. Créez un nouveau fichier audio en associant le contenu audio original et la nouvelle description audio. Retrouvez des [Conseils pour associer les fichiers audios ci-dessous](#combining).
4. Créez une nouvelle vidéo :
	* _**Si**_ vous avez des sources vidéo avec des scènes plus longues _(comme décrit dans « Contenus audio et vidéo accessibles », dans la section [« Prévoyez du temps pour la description »](/media/av/av-content/#time-for-description))_, remontez avec des scènes plus longues pour combler l’espace visuel aux moments de la description.
	* _**Si ce n’est pas le cas ou si vous éditez une vidéo existante**_, vous aurez besoin de conserver une image statique dans la vidéo lorsque description est lue dans l’audio. <!-- (For example, this video [@@ need very good example - see GitHub](https://github.com/w3c/wai-media-guide/issues/73) pauses at 00:00 for the audio description.) -->

(Assurez-vous que, sur la page Web où la vidéo est disponible, la version décrite utilise la version correcte que vous venez de créer.)

### D’autres options
{:.no_toc}

* Une description étendue avec SMIL − SMIL 3.0 est la seule méthode de balisage pour fournir des audiodescriptions étendues. Le support de SMIL est très limité. Les implémentations nécessiteront certainement des plug-ins et/ou des approches extrêmement personnalisées.
* Fournir des fonctionnalités pour que la vidéo se mette en pause au moment de la description − cela n’est pas suggéré dans la plupart des cas car un développement supplémentaire est nécessaire et l’expérience utilisateur est sous-optimale.

{% include_cached excol.html type="start" id="tips" %}

## Conseils pour créer une description vous-mêmes

{% include_cached excol.html type="middle" %}

### Conseils pour rédiger des descriptions {#writing}

{:.no_toc}

* Décrivez les éléments visuels importants pour comprendre le message communiqué par la vidéo. Imaginez que vous décriviez la vidéo à une personne qui ne peut pas la voir — que diriez-vous ? Vous n’avez pas besoin de décrire chaque détail ou chaque élément apparaissant dans l’audio.
* Décrivez objectivement, sans interprétation, censure, ou commentaire.
* Écrivez une description au temps présent, à la forme active, et à la troisième personne.

Généralement, tout le texte présent dans la vidéo devrait être inclus dans l’audio principal (description intégrée) ou dans la description à part. Par exemple, le texte du titre au début de la vidéo, les liens et les adresses électroniques affichés à la fin, les textes avec les noms des locuteurs, et le texte présent dans la présentation. Le texte n’a pas besoin d’être inclus sous forme de verbatims (exactement mot pour mot), mais toute l’information transmise par le texte doit être disponible dans l’audio principal, dans la description à part, ou clairement mise à disposition avec la vidéo.

Retrouvez sur le Web davantage de conseils sur la rédaction des descriptions, par exemple : [Fiche de conseils pour la description {% include_cached external.html %}](https://dcmp.org/learn/227) and [Comment décrire {% include_cached external.html %}]( https://www.descriptionkey.org/how_to_describe.html).

### Conseils pour enregistrer des descriptions {#recording}

{:.no_toc}

* Utilisez une voix, un style, et un débit qui se distinguent des autres voix utilisées dans la vidéo.
* Utilisez une voix neutre qui ne transmet pas d’émotions.
* Lors de l’enregistrement d’un seul fichier avec des descriptions synchronisées, prononcez les descriptions au même moment que le contenu visuel, ou juste avant le contenu visuel. Ne placez pas la description après le contenu visuel.
* Consultez des [conseils pour le contenu audio](/media/av/av-content/#audio).

### Conseils pour associer des fichiers audio {#combining}

{:.no_toc}

* Placez les descriptions au même moment que le contenu visuel, ou juste avant celui-ci. Ne placez pas la description après le contenu visuel.

* Faites en sorte que la description soit clairement haut dessus des autres bruits. Au moment d’associer les descriptions avec le contenu audio principal, baissez le volume de l’audio principal quand la description est prononcée et augmentez le volume de la description. Lorsque la description est finie, baissez le volume de la description et augmentez le volume de l’audio principal à son réglage normal. Répétez ce processus (appelé <em lang="en">"ducking"</em>) pour chaque occurence de la description.

{% include_cached excol.html type="end" %}

### Fichier VTT

{:.no_toc}

{::nomarkdown}
{% include box.html type="start" title="Exemple de fichier VTT d’audiodescription" class="" id="vtt" %}
{:/}

```
WEBVTT

00:00:04.000 --> 00:00:07.980
<v Audiodescriptions>Un homme assis à un bureau commence à regarder une vidéo sur son ordinateur.

00:00:17.260 --> 00:00:20.780
<v Audiodescriptions>La vidéo sur son ordinateur montre une personne qui parle à la caméra.

00:00:20.780 --> 00:00:23.140
<v Audiodescriptions>La vidéo est lue sans audio.

00:00:26.880 --> 00:00:29.620
<v Audiodescriptions>L’homme qui regarde la vidéo a un appareil auditif.
```

{::nomarkdown}
{% include box.html type="end" %}
{:/}
