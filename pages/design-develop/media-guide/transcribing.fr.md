---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Transcrire un contenu audio en texte"
nav_title: "Transcrire un contenu audio en texte"
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2023-10-04   # Put the date of this translation YYYY-MM-DD (with month in the middle)
translators:
  - name: "Sofia Ahmed"
  - name: "Rémi Bétin"
contributors:
  - name: "Sandra Velarde Gonzalez (ETNIC)"

permalink: /media/av/transcribing/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/transcribing/   # Do not change this

github:
  label: wai-media-guide

resource:
  ref: /media/av/
navigation:
  previous: /media/av/transcripts/
  next:     /media/av/sign-languages/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Fournit de l’aide pour transcrire un contenu audio en texte -- pour créer des sous-titres et des transcriptions pour l’accessibilité des contenus audios et vidéos.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG and ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date :</strong> Mise à jour : 24 novembre 2020. Première publication en septembre 2019. CHANGELOG.</p>
  <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS liste les contributeurs et les crédits.</p>
  <p>Développé par le groupe de travail Éducation et promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Rédigé initialement dans le cadre du projet <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA</a> financé par le <abbr title="United States">U.S.</abbr> Access Board. Révisé dans le cadre du projet <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access</a> financé par la fondation Ford.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Résumé" class="" %}
{:/}

Cette page donne des conseils pour transcrire un contenu audio en texte pour les sous-titres et les transcriptions, pour ceux qui souhaitent le faire par eux-mêmes.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Table des matières" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
  {::options toc_levels="2,3" /}
  {:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introduction
{:.no_toc}

Une bonne transcription nécessite de savoir quelles informations audio non parlées doivent être incluses dans la transcription. C’est plus de l’art que de la science &mdash; par exemple, il n’est pas toujours facile de savoir quelles informations audios non parlées inclure&nbsp;; et comment en rendre compte dans le texte.

Si vous disposez des ressources nécessaires, l’idéal est d’engager des professionnels pour réaliser votre transcription. Si vous n’en disposez pas, ne soyez pas découragé de fournir des transcriptions ou des sous-titres. Cette page vous aide à le faire vous-même.

Dans certains cas, le texte est déjà disponible dans un scénario. Vous devrez probablement apporter quelques retouches mineures pour qu’il corresponde précisément au contenu audio final.

## Comment transcrire

Vous pouvez simplement écouter l’audio et taper ce que vous entendez. Cette méthode est généralement fastidieuse car vous devez arrêter et relancer l’audio de nombreuses fois. Des logiciels peuvent aider en ralentissant l’audio et en fournissant des boutons de pause faciles à utiliser.
<!-- There are some free services online. They tend to have lower accuracy. You can purchase speech recognition software and train it to be more accurate with your voice. This may be a viable option for things like regular podcasts that usually have a single speaker. -->

Vous pouvez commencer avec un fichier de texte généré automatiquement. Il existe de nombreux logiciels et services de reconnaissance vocale. Leurs niveaux de précision divergent. Souvent, le texte ne correspond pas à l’audio parlé &mdash; et d’une manière qui en modifie le sens (ou est gênante). Par exemple, oublier un seul mot tel que "pas" peut créer une contradiction entre les sous-titres et le contenu réel de l’audio.

{::nomarkdown}
{% include box.html type="start" title="Exemple de sous-titres automatiques mal transcrits (pouvant provoquer un incendie)" class="simple aside" %}
{:/}

{% include image.html src="media-guide/food-fire.jpg" alt="" class="normal right" %}
_Texte énoncé :_<br>&quot;Grillez à feu vif pendant <strong>4 à 5 minutes</strong>. Ne préchauffez <strong>pas</strong> le four.&quot;<br>
_Sous-titre automatique :_<br>&quot;Grillez à feu vif pendant <strong>45 minutes</strong>. <strong>Préchauffez</strong> le four.&quot;

{::nomarkdown}
{% include box.html type="end" %}
{:/}

Prévoyez du temps pour corriger une transcription générée automatiquement.

Retrouvez plus de détails sur les options et les outils de transcription sur : Transcriptions sur le Web, [Comment obtenir ou créer des transcriptions {% include_cached external.html %}](http://www.uiaccess.com/transcripts/transcripts_on_the_web.html#justdoit).

Retrouvez quelques informations à propos des outils de sous-titrage sur la page Sous-titres de cette ressource : [Outils de sous-titrage](/media/av/captions/#caption-tools).

## Que transcrire

Généralement, vous transcrivez tout le contenu parlé et l’audio non-parlé pertinent (tels que : des pleurs de bébé, des feux d’artifice qui explosent, les bruits de sabots d’un cheval qui approche). Gardez en tête que l’objectif principal est de **fournir les informations que vous entendez aux personnes qui ne peuvent pas entendre l’audio**. Cela vous aidera à savoir quels sons transcrire, et lesquels ne sont pas nécessaires. Les conseils suivants sont des pratiques courantes et non des exigences.

### Pratiques de base

* **Identifiez les locuteurs** de manière pertinente. Souvent, il est préférable d’utiliser le nom complet la première fois et le nom simple ensuite &mdash; soit le prénom, soit le nom de famille selon le degré de formalité.

* Vous pouvez **inclure des informations pertinentes sur le contenu parlé**. Par exemple :<br>
  <em>(en serrant les dents) :</em><br>
  Je déteste cet ordinateur !

* Placez les **sons non vocaux** entre parenthèses, en minuscules, en italique, avec une espace avant et après. Par exemple&nbsp;:<br>
  <em>(l’ordinateur éclate en morceaux et des pièces glissent sur le sol)</em>

* Lorsqu’un **locuteur n’apparaît pas à l’écran**, vous pouvez mettre son intervention en italique. Par exemple&nbsp;:<br>
  <em>José : quel était ce bruit affreux ?</em><br>
  Zoé : Tu ne veux pas le savoir.<br>
  <em>José : Eh bien, j’arrive pour le découvrir.</em>

* **N’incluez la musique de fond que si** elle est importante pour comprendre le contenu de la vidéo. Utilisez des descriptions objectives qui indiquent l’humeur ; évitez les mots subjectifs, tels que « beau ». Si les paroles d’une musique sont importantes, ajoutez une note de musique au début et à la fin de chaque sous-titre. Mettez les informations relatives à la musique en italique. Par exemple :<br>
  <em>♪ musique effrayante, thème des Dents de la mer ♪</em>

* Ne mettez pas l’accent sur un mot en utilisant des **lettres capitales**, sauf pour indiquer qu’il s’agit de cris. Par exemple&nbsp;: <br>
  José : TU AS BOUSILLÉ MON NOUVEL ORDINATEUR PORTABLE !

### Transcrivez avec précision et fidélité

* **N’apportez pas de modifications ou d’adaptations au texte**. Transcrivez exactement ce qui est dit.
  * Par exemple, il n’est généralement pas approprié de corriger les fautes de grammaire ou autres.
  * Ne censurez pas. Par exemple, si des mots répréhensibles sont prononcés, incluez-les dans les sous-titres. Si l’audio est modifié de manière à taire une phrase (par exemple, l’audio « bipé »), reflétez-le aussi dans les sous-titres, par exemple, <em> --bip-- </em>
  * Ne fournissez pas d’explications additionnelles dans les sous-titres. (Vous pouvez en fournir quelques-unes dans la transcription, le cas échéant.)

* Optez pour un niveau de détail approprié :
  * Pour certains contenus, tels que les dépositions judiciaires, transcrivez tout mot pour mot, y compris les mots tels que « hum », « ah », et les répétitions de phrases.
  * Pour la plupart des contenus Web, il est acceptable de retirer le texte non substantiel pour faciliter la lecture des sous-titres &mdash; tout en respectant les conseils ci-dessus. Par exemple, <em>si le locuteur dit :</em><br> Je suis tellement frustré (toux, toux) désolé – euhhh qu’est-ce que je disais… ?, ah oui – je suis tellement frustré par cet ordinateur.<br>
    <em>Vous pouvez sous-titrer :</em><br>
    Je suis tellement frustré par cet ordinateur.
  * Si du contenu parlé n’est pas du tout pertinent, indiquez qu’il a été exclu des sous-titres. Par exemple :<br>
    <em>[les participants parlent de la météo pendant que le présentateur redémarre son ordinateur.]</em>

* Si vous ne comprenez pas ce qui est dit, transcrivez :<br>
  [incompréhensible]

## Plus d’informations sur les sous-titres {#more-on-captions}

Pour les sous-titres :

* Les sous-titres font une ou deux lignes. Généralement, il est préférable qu’ils ne fassent pas plus de 32 caractères par ligne.
* Placez une nouvelle phrase sur une nouvelle ligne.
* Si vous devez diviser une phrase en plusieurs segments, divisez-la après une expression logique.

Les sous-titres incluent également le moment auquel chaque phrase va être affichée. La plupart des personnes utilisent des outils pour créer et affiner les sous-titres.

Apprenez-en plus sur les sous-titres dans une autre page de cette ressource : [Sous-titres](/media/av/captions/).

## Plus d’informations sur les transcriptions

Apprenez-en plus sur les transcriptions dans une autre page de cette ressource : [Transcriptions](/media/av/transcripts/).
