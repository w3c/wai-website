---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Planifier les contenus audios et vidéos"
title_image: /content-images/media-guide/planning.svg
nav_title: "Planifier"
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2023-09-24   # Put the date of this translation YYYY-MM-DD (with month in the middle)
translators:
- name: "Sofia Ahmed"
- name: "Rémi Bétin"

permalink: /media/av/planning/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/planning/   # Do not change this

github:
  label: wai-media-guide

resource:
  ref: /media/av/
navigation:
  previous: /media/av/users-orgs/
  next:     /media/av/av-content/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Vous aide à organiser la mise en accessibilité de vos audios et vidéos, que vous les sous-traitiez ou que vous les créiez en interne.

image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG and ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p><strong>Date :</strong> Mise à jour 11 janvier 2021. Première publication en septembre 2019. CHANGELOG.</p>
   <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS liste les contributeurs et les crédits.</p>
   <p>Développé par le groupe de travail Éducation et promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Rédigé initialement dans le cadre du projet <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA</a> financé par le <abbr title="United States">U.S.</abbr> Access Board. Révisé dans le cadre du projet <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access</a> financé par la fondation Ford.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Résumé" class="" %}
{:/}

Cette page vous aide à :
* **comprendre quels aspects de l’accessibilité sont nécessaires à vos contenus audios et vidéos spécifiques** (des sous-titres, une description, une transcription, etc.)
* gérer des projets et prévoir ce qu’il faut créer en interne et ce qu’il faut sous-traiter
* comprendre les **standards** pour les contenus audio et vidéos dans les Règles pour l’accessibilité des contenus Web (WCAG)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Table des matières" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{::options toc_levels="2" /}
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Influences
{:.no_toc}

Les fonctionnalités d’accessibilité que vous fournissez avec votre contenu multimédia seront probablement influencées par :
* [les besoins des utilisateurs et les bénéfices business](/media/av/users-orgs/)
* les réglementations gouvernementales et les autres exigences de politiques
* le budget et les contraintes de temps

L’objectif de cette ressource de plusieurs pages est de vous aider à connaître les exigences et vous encourager à répondre à tous les besoins des utilisateurs.

## Listes de contrôle pour les contenus audio et vidéo {#checklist}

Les listes de contrôle ci-dessous concernent les contenus seulement audio, les contenus vidéo, et les contenus pré-enregistrés et en direct. Ils comprennent :
* Ce qui est requis par le standard Règles pour l’accessibilité des contenus Web (WCAG) aux niveaux A, AA, et AAA. _(Les [WCAG](#wcag-standard) sont expliquées ci-dessous.)_
* Ce qui est nécessaire pour répondre aux besoins des utilisateurs, au-delà des WCAG. (S’il n’y a aucun « A », alors ce n’est pas requis dans les WCAG.)

Les liens ci-dessous mènent à une page Web de cette ressource qui contient des détails sur la compréhension et l’application de chaque élément.

{::nomarkdown}
{% include box.html type="start" title="Tous les contenus audio et vidéo" class="highlighted" id="checklist-all" %}
{:/}

- **[Le contenu audio](/media/av/av-content/#audio) (A)** est accessible (par exemple, au regard de ce qui est dit et de l’enregistrement)
- **[Le contenu vidéo](/media/av/av-content/#video) (A)** est accessible (par exemple, il ne provoque pas de crises)
- **[Le lecteur multimédia](/media/av/player/) (A)** est compatible avec l’accessibilité
{:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### <img src="{{ "/content-images/media-guide/audio.svg" | relative_url }}" alt="" style="height:1.3em"> Listes de contrôle pour les contenus seulement audio

Cette section concerne les contenus seulement audio, comme les podcasts qui ne contiennent pas de vidéo.
{% capture boxhead %}
<img src="{{ "/content-images/media-guide/recorded.svg" | relative_url }}" alt="" style="height:1em"> Contenus pré-enregistrés, seulement audio 
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-ap" %}
{:/}

-   **[Transcription](/media/av/transcripts/) (A)** distincte de l’audio
-   **[Sous-titres](/media/av/captions/)** synchronisés avec l’audio
-   **[Langue(s) des signes](/media/av/sign-languages/)**
{:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% capture boxhead %}
<img src="{{ "/content-images/media-guide/live.svg" | relative_url }}" alt="" style="height:1em"> Contenus en direct, seulement audio
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-la" %}
{:/}

-   **[Transcription](/media/av/transcripts/) (AAA)** &mdash; diffusion en direct ou transcription pendant le direct
-   **[Sous-titres](/media/av/captions/)**
-   **[Langue(s) des signes](/media/av/sign-languages/)**
{:.alt}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### <img src="{{ "/content-images/media-guide/video.svg" | relative_url }}" alt="" style="height:1.3em"> Listes de contrôle pour les contenus vidéo

{% capture boxhead %}
<img src="{{ "/content-images/media-guide/recorded.svg" | relative_url }}" alt="" style="height:1em"> Vidéos pré-enregistrées
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-vp" %}
{:/}

**La vidéo contient-elle de la parole ou un autre audio** nécessaires à la compréhension du contenu ?

-   Si oui,
    -   **[Sous-titres](/media/av/captions/)** **(A)**
    -   **[Transcription des informations audio](/media/av/transcripts/) (AAA)**
    -   **[Langue(s) des signes](/media/av/sign-languages/) (AAA)**
    {:.alt}
-   Si non, [informer les utilisateurs](#none).

**La vidéo contient-elle des informations visuelles** nécessaires à la compréhension du contenu ?

-   Si oui,
    -   **[Audio-description des informations visuelles](/media/av/description/) _ou_  [transcription descriptive](//media/av/transcripts/) (A)**
    -   **[Audio-description des informations visuelles](/media/av/description/) (AA)**
    -   **[Transcription descriptive](//media/av/transcripts/) (AAA)** *(Si vous disposez d’une transcription descriptive, vous n’avez pas besoin d’une transcription supplémentaire des informations seulement audio évoquée dans la question précédente.)*
    {:.alt}
-   Si non, [informer les utilisateurs](#none).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% capture boxhead %}
<img src="{{ "/content-images/media-guide/live.svg" | relative_url }}" alt="" style="height:1em"> Vidéos en direct
{% endcapture %}

{::nomarkdown}
{% include box.html type="start" title=boxhead class="highlighted" id="checklist-lv" %}
{:/}

**La vidéo contient-elle de la parole ou un autre audio** nécessaires à la compréhension du contenu ?

-   Si oui,
    -   **[Sous-titres](/media/av/captions/) (AA)**
    -   **[Langue(s) des signes](/media/av/sign-languages/)**
    -   Flux de texte disponible pour les lecteurs d’écran (et les équipements braille)
    {:.alt}
-   Si non, [informer les utilisateurs](#none).

**La vidéo contient-elle des informations visuelles** nécessaires à la compréhension du contenu ?
-   Si oui,
    -   Description des informations visuelles importantes dans un flux de texte disponible pour les lecteurs d’écran (et les équipements braille)
    {:.alt}
-   Si non, [informer les utilisateurs](#none).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Informez les utilisateurs lorsque rien n’est nécessaire {#none}

Si votre vidéo ne nécessite pas de sous-titres (parce qu’elle ne contient pas de contenu audio substantiel) ou de description (parce qu’elle ne contient pas de contenu visuel substantiel), il est bon de prévenir les utilisateurs. Autrement, ils pourraient croire que vous avez involontairement oublié de les fournir.

Les utilisateurs qui ont besoin de sous-titres vont chercher à les consulter, vous pouvez donc fournir un fichier de sous‑titres qui contient uniquement les indications pertinentes, telles que « [musique de fond] ». Sinon, vous pouvez également fournir l’information sous forme de texte avec la vidéo, tel que :  

{::nomarkdown}
{% include box.html type="start" class="" %}
{:/}

Les sous-titres ne sont pas nécessaires : le seul son dans cette vidéo est une musique de fond.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" class="" %}
{:/}

La description n’est pas nécessaire : les images de cette vidéo ne font qu’appuyer ce qui est dit ; les images ne fournissent pas d’informations supplémentaires.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Fournissez à la fois des sous-titres et une transcription {#captions-and-transcript}

Il est préférable de fournir des sous-titres et une transcription distincte.

Pour les vidéos, les sous-titres permettent aux personnes sourdes ou malentendantes de voir le contenu visuel et de lire les sous-titres au même moment.

Pour le contenu seulement audio, les sous-titres permettent aux personnes malentendantes de saisir les nuances de l’audio et de compléter ce qu’elles n’ont pas bien entendu en lisant les sous-titres.

Les transcriptions sont nécessaires pour donner l’accès aux personnes sourdes-aveugles et qui utilisent le braille. Les transcriptions sont également utilisées par les personnes sans handicaps, comme indiqué sous [Bénéfices pour les organisations et les personnes](/media/av/users-orgs/#benefits) dans la page d’introduction de cette ressource.

### Transcriptions descriptives {#descriptive-transcripts}

Les transcriptions descriptives pour vidéos :

* sont nécessaires pour la plupart des vidéos afin qu’elles soient accessibles aux personnes « sourdes-aveugles »
* répondent à de nombreux besoins en accessibilité, notamment pour les personnes qui présentent des difficultés à comprendre l’information auditive et celles qui n’arrivent pas à se concentrer et à saisir l’information auditive ou visuelle lors de changements d’images.
* sont utilisés par des personnes _sans_ handicaps, et représentent un avantage pour votre organisation (retrouvez des exemples sous [Bénéfices pour les organisations et les personnes](/media/av/users-orgs/#benefits) dans la page d’introduction)
* **sont faciles et peu coûteuses à créer**, en utilisant les sous-titres et descriptions que vous avez déjà produits pour atteindre le niveau AA

**Les sous-titres et les transcriptions utilisent le même texte. Une fois que vous avez le premier, il est relativement facile de créer l’autre.**

### Autres langues

Une traduction de l’audio vers d’autres langues peut être fournie :
* sous forme de texte, en utilisant le format des sous-titres (appelés sous-titres interlinguistiques)
* sous forme d’audio parlé, habituellement en tant que flux audio distinct (pour les personnes qui ne peuvent pas lire les sous-titres)
* sous forme de langue des signes

## Gestion de projet

<!-- maybe better image in future iteration: <img src="{{ "/content-images/media-guide/in-or-out.png" | relative_url }}" alt="" style="float: right; margin-left: 2rem; clear:right; width: 30%; max-width: 220px"> -->

Incluez des exigences d’accessibilité spécifiques dans vos :
* Pré-requis de projets – internes et externes ;
* Demandes de propositions ou appels d’offres ;
* Contrats.

Voici un exemple de processus pour créer une vidéo accessible, avec des précisions sur les personnes responsables de la création du contenu. Les liens renvoient à d’autres pages de cette ressource.

{::nomarkdown}
{% include box.html type="start" title="Exemples de processus et de responsabilités" class="" %}
{:/}

1. Penchez-vous sur l’accessibilité dans le **[contenu vidéo](/media/av/av-content/)** au fur et à mesure que vous planifiez et produisez la vidéo.<br>_Par :_ Les scénaristes, vidéastes, producteurs, et autres.

2. Créez une **[version descriptive de la vidéo](/media/av/description/)** en même temps que la vidéo principale, si nécessaire.<br>_Par :_ Généralement, les personnes qui produisent la vidéo principale produisent également la version descriptive.

3. Créez des **[sous-titres](/media/av/captions/)** pour la vidéo principale et pour la version descriptive.<br>_Par :_ Généralement, s’il s’agit d’une vidéo professionnelle, les producteurs fournissent les sous-titres. Parfois, quand des vidéos informelles sont produites en interne, les sous-titres sont sous-traités.

4. Créez une **[transcription descriptive](/media/av/transcripts/)** en utilisant le texte des fichiers de sous-titres.<br>_Par :_ Souvent, les transcriptions sont créées en interne à partir des sous-titres.

5. Mettez la vidéo à disposition dans un **[lecteur multimédia accessible](/media/av/player/)** (généralement, un lecteur existant avec une bonne compatibilité avec l’accessibilité).<br>_Par :_ Habituellement, les développeurs Web en interne.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Allouer des ressources à l’accessibilité {#in-or-out}

Pour vous aider à **planifier le travail interne et sous-traité**, les pages de cette ressource reprennent les considérations, les compétences et les outils nécessaires à la création de contenu multimédia accessible dans les sections suivantes :
* [Descriptions : considérations, compétences, outils](/media/av/description/#description-considerations-skills-and-tools)
* [Sous -titres : compétences, et outils](/media/av/captions/#skills-and-tools) et [Les sous-titres automatiques ne suffisent pas](/media/av/captions/#automatic-captions-are-not-sufficient)
* [Transcriptions : processus – compétences et outils](/media/av/transcripts/#process-skills-and-tools)
* [Lecteurs multimédia : compétences et outils](/media/av/player/#skills)
* [Langues des signes : compétences et outils](/media/av/sign-languages/#skills-and-tools)

Au moment de planifier et d’établir le budget pour un contenu multimédia accessible, il est souvent utile d’en présenter les **avantages aux organisations**, tels que l’optimisation pour les moteurs de recherche (SEO), une meilleure expérience utilisateur pour tous, une meilleure satisfaction client, et plus encore, comme indiqué dans la page d’introduction sous [Bénéfices pour les organisations et les personnes](/media/av/users-orgs/#benefits).

## Standard WCAG {#wcag-standard}

Les Règles pour l’accessibilité des contenus Web (WCAG) sont introduites dans une ressource à part : [WCAG : vue d’ensemble](/standards-guidelines/wcag/).

{::nomarkdown}
{% include box.html type="start" class="" %}
{:/}

Cette ressource utilise en grande partie la terminologie WCAG, à quelques différences près :
* « média temporel » dans les WCAG = « contenu audio et vidéo » dans cette ressource ;
* « [version de remplacement pour un média temporel](https://www.w3.org/Translations/WCAG21-fr/#media-alternative-prerecorded) » dans les WCAG = « transcription » pour le contenu seulement audio et « transcription descriptive » pour les vidéos dans cette ressource.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Les WCAG incluent des exigences pour les contenus audio et vidéo de niveaux A, AA, et AAA. (Retrouvez plus d’informations dans une ressource dédiée : [Comprendre les niveaux de conformité](https://www.w3.org/WAI/WCAG21/Understanding/conformance.html#levels).) La plupart des contenus multimédia sont contraints d’atteindre le niveau AA par les règlementations en vigueur – qui comprend les exigences A et AA indiquées dans les tableaux ci-dessous.

Les exigences d’accessibilité pour les vidéos et les audios diffèrent selon qu’ils sont :
* pré-enregistrés ou en direct ;
* une vidéo avec audio, une vidéo sans audio (contenu vidéo uniquement), ou un contenu seulement audio.

Les liens apparaissant dans les tableaux ci-dessous mènent vers une page située dans une ressource distincte : Comprendre les WCAG 2.1.

### Pré-enregistré
{:.no_toc}

<table class="quiet">
<tr>
<th scope="col">&nbsp;</th>
<th scope="col">Transcription <span class="normal-weight">(incluant le contenu auditif et visuel)</span></th>
<th scope="col">Sous-titres</th>
<th scope="col">Audio-description <span class="normal-weight">(si le contenu visuel n’est pas dans l’audio)</span></th>
<th scope="col">Langue des signes</th>
</tr>
<tr>
  <th scope="row">Contenu seulement audio</th>
  <td><strong><a href="https://www.w3.org/WAI/WCAG21/Understanding/audio-only-and-video-only-prerecorded">A 1.2.1</a></strong></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
<th scope="row">Contenu seulement vidéo</th>
<td><strong><a href="https://www.w3.org/WAI/WCAG21/Understanding/audio-only-and-video-only-prerecorded">A 1.2.1</a></strong> (transcription <em><strong>ou</strong></em> piste audio)<br>
<a href="https://www.w3.org/WAI/WCAG21/Understanding/media-alternative-prerecorded">AAA 1.2.8</a></td>
<td>&nbsp;</td>
<td><strong><a href="https://www.w3.org/WAI/WCAG21/Understanding/audio-only-and-video-only-prerecorded">A 1.2.1</a></strong> (piste audio <em><strong>ou</strong></em> transcription)</td>
<td>&nbsp;</td>
</tr>
<tr>
  <th scope="row">Vidéo avec audio</th>
  <td><a href="https://www.w3.org/WAI/WCAG21/Understanding/media-alternative-prerecorded">AAA 1.2.8</a></td>
  <td><strong><a href="https://www.w3.org/WAI/WCAG21/Understanding/captions-prerecorded">A 1.2.2</a></strong></td>
  <td><strong><a href="https://www.w3.org/WAI/WCAG21/Understanding/audio-description-or-media-alternative-prerecorded">A 1.2.3</a></strong>&nbsp;(audio-description <em><strong>ou</strong></em> transcription)<br>
    <strong><a href="https://www.w3.org/WAI/WCAG21/Understanding/audio-description-prerecorded">AA 1.2.5</a></strong><br>
    <a href="https://www.w3.org/WAI/WCAG21/Understanding/extended-audio-description-prerecorded">AAA 1.2.7</a></td>
  <td><a href="https://www.w3.org/WAI/WCAG21/Understanding/sign-language-prerecorded">AAA 1.2.6</a></td>
</tr>
</table>

### En direct
{:.no_toc}

<table class="quiet">
<tr>
<th scope="col">&nbsp;</th>
<th scope="col">Transcription</th>
<th scope="col">Sous-titres</th>
<th scope="col">Audio-description</th>
<th scope="col">Langue des signes</th>
</tr>
<tr>
  <th scope="row">Contenu seulement audio</th>
  <td><a href="https://www.w3.org/WAI/WCAG21/Understanding/audio-only-live">AAA 1.2.9</a> (diffusion en direct <em><strong>ou</strong></em> transcription exacte en direct)</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
<tr>
<th scope="row">Contenu seulement vidéo</th>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
  <th scope="row">Vidéo avec audio</th>
  <td>&nbsp;</td>
  <td><strong><a href="https://www.w3.org/WAI/WCAG21/Understanding/captions-live">AA 1.2.4</a></strong></td>
  <td>&nbsp;</td>
  <td>&nbsp;</td>
</tr>
</table>

### Plus d’information sur les standards
{:.no_toc}

Pour en savoir plus sur les exigences WCAG pour les contenus multimédia, consultez [Comprendre la Règle 1.2 : Média temporel](https://www.w3.org/WAI/WCAG21/Understanding/time-based-media).

Retrouvez d’autres exigences WCAG liées aux contenus audio et vidéo :
* Dans cette ressource :
  * [Contenu audio et vidéo accessible](/media/av/av-content/)
  * [Fonctionnalité du lecteur multimédia](/media/av/player/#player-accessibility-functionality)
* Dans Comprendre les WCAG :
   * [2.2.2 Mettre en pause, arrêter, masquer](https://www.w3.org/WAI/WCAG21/Understanding/pause-stop-hide) (Niveau A) pour toute information en mouvement, clignotante, défilante ou mise à jour automatiquement, tous les points suivants sont vrais :…
   * [1.4.2 Contrôle du son](https://www.w3.org/WAI/WCAG21/Understanding/audio-control) (Niveau A) Si du son sur une page Web est audible automatiquement pendant plus de 3 secondes, un mécanisme est disponible pour le mettre en pause, l’arrêter, ou pour en contrôler le volume…

Vos contenus audios et vidéos pourraient faire l’objet d’exigences supplémentaires, par exemple en raison de réglementations gouvernementales. Certaines sont listées dans [Lois et politiques d’accessibilité Web](/policies/).
