---
title: Évaluation de la conformité et rapports
lang: fr
last_updated: 2023-11-30  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Rémi Bétin"
contributors:
- name: "Sylvie Duchateau"

github:
  label: wai-conformance-eval

permalink: /test-evaluate/conformance/fr
ref: /test-evaluate/conformance/  # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p>Note à propos de la description vidéo : la vidéo présente sur cette page n’inclut pas l’audiodescription synchronisée car les images n’illustrent que l’audio et ne fournissent pas d’informations supplémentaires. Dans ce cas-ci, l’audiodescription serait plus distrayante qu’utile pour la plupart des utilisateurs, y compris pour les personnes qui ne peuvent pas voir les images. La description des informations contenues dans les images est reprise dans la transcription textuelle avec description des visuels (« transcription descriptive »).</p>
  <p><strong>Date :</strong> Mise à jour : 1<sup>er</sup> août 2023.</p>
   <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Vidéo créée par le groupe de travail Éducation et Promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) avec le soutien du projet <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> financé par la Commission européenne (CE) dans le cadre du programme Horizon 2020 (convention de subvention n°822245).</p>
---

L’évaluation de la conformité détermine dans quelle mesure les pages ou les applications Web sont conformes aux standards d’accessibilité. La méthodologie d’évaluation de la conformité à l’accessibilité d’un site Web de <acronym title="World Wide Web Consortium">W3C</acronym> (WCAG-EM) constitue une approche pour déterminer la conformité aux Règles pour l’accessibilité des contenus Web (WCAG).

<div class="video-card" id="video-intro">
  {% include video-player-data.html
      video-id="conformance-evaluation"
      yt-id="u-mOCGX8ckw"
  %}
  <p><a href="#alternatives">Alternatives pour la vidéo « Vue d’ensemble de l’évaluation de la conformité »</a></p>
</div>

[[Vue d’ensemble de WCAG-EM : méthodologie de l’évaluation de la conformité à l’accessibilité d’un site Web]](/test-evaluate/conformance/wcag-em/)
: Une courte page contenant des informations de base pour débuter. Nous vous suggérons de la lire avant de consulter le [document complet sur WCAG-EM](https://www.w3.org/TR/WCAG-EM/)

[Outil de création de rapports WCAG-EM : un générateur de rapports d’évaluation de l’accessibilité Web](https://www.w3.org/WAI/eval/report-tool/)
: Vous aide à générer des rapports d’évaluation selon WCAG-EM. L’outil ne fait pas la vérification à votre place. Il vous aide à suivre les étapes de WCAG-EM et génère un rapport à partir des données fournies.

[[Modèle de rapports d’évaluation de l’accessibilité Web]](/test-evaluate/report-template/)
: Propose des informations à inclure dans un rapport.

[Outil de création de rapports ATAG](https://www.w3.org/WAI/atag/report-tool/)
: Vous aide à générer un rapport pour évaluer dans quelle mesure un outil répond aux critères des Règles d’accessibilité pour les outils d’édition ([ATAG](https://www.w3.org/WAI/standards-guidelines/atag/)). Les outils d’édition sont des logiciels et des services utilisés pour créer du contenu Web &mdash;&nbsp;tels que les systèmes de gestion de contenu (CMS en anglais) et les éditeurs HTML WYSIWYG (<i lang="en">what-you-see-is-what-you-get</i> : « ce que vous voyez est ce que vous obtenez »).

[Règles de test de la conformité à l’accessibilité (<abbr lang="en" title="Accessibility Conformance Testing">ACT</abbr>)](/standards-guidelines/act/rules/about/)
:  Décrit comment tester la conformité aux standards d’accessibilité tels que les WCAG et WAI-ARIA. Les Règles ACT sont principalement utilisées par les développeurs d’outils et de méthodologies de test. Les personnes testant l’accessibilité peuvent trouver certaines règles utiles pour évaluer les cas limites de manière cohérente.

<!-- Communiquez clairement les résultats de l’évaluation, en précisant le périmètre de l’évaluation. -->

Les spécifications pour exprimer les résultats de l’évaluation (<abbr lang="en" title="Evaluation and Report Language">EARL</abbr>) et pour écrire les règles de test de l’accessibilité (<i lang="en">Accessibility Conformance Testing (ACT) Rules Format</i>) sont présentées dans [Standards d’évaluation - Vue d’ensemble](/standards-guidelines/evaluation/).

Des ressources associées sont décrites dans : [[Évaluer l’accessibilité Web – Vue d’ensemble]](/test-evaluate/)

<hr>

{% include excol.html type="start" id="video-intro-transcript" %}

##  Alternatives pour la vidéo « Vue d’ensemble de l’évaluation de la conformité » {#alternatives}

{% include excol.html type="middle" %}

_Cette vidéo est aussi disponible sur un serveur de W3C : [Vidéo : Vue d’ensemble de l’évaluation de la conformité (format du fichier : MP4, taille du fichier : 30 Mo)](https://media.w3.org/wai/evaluation-intros/conformance-evaluation.mp4)._

###  Transcription textuelle avec description des visuels de la vidéo « Vue d’ensemble de l’évaluation de la conformité » {#transcript}

Les vidéos contiennent des animations basiques qui illustrent ce qui est dit par une voix-off. Les personnes sont représentées par des icônes de personnages. 

<table aria-labelledby="transcript">
  <tbody><tr>
    <th align="left">Audio</th>
    <th align="left">Visuel</th>
  </tr>
  <tr>
    <td>Évaluation de la conformité de l’accessibilité Web.</td>
    <td>Évaluation de la conformité de l’accessibilité Web.</td>
  </tr>
  <tr>
    <td>L’évaluation de la conformité détermine dans quelle mesure vos contenus sont conformes à des standards d’accessibilité spécifiques tels que les « Règles pour l’accessibilité des contenus Web de W3C », ou "WCAG" en bref.</td>
    <td>L’évaluation de la conformité. Une barre de progression se remplit jusqu’à répondre aux WCAG.</td>
  </tr>
  <tr>
    <td>Vous aurez souvent besoin d’effectuer une évaluation de conformité :
      <ul>
        <li> comme dernière vérification avant de publier un produit</li>
        <li> pour fournir de l’information aux acheteurs potentiels de votre produit</li>
        <li> pour surveiller régulièrement l’accessibilité de votre site Web</li>
        <li> avant de vous procurer un produit</li>
      </ul></td>
    <td>Icônes pour chaque étape : carton ouvert avec une case cochée ; "i" dans un cercle ; loupe sur un ordinateur ; et chariot de supermarché.</td>
  </tr>
  <tr>
    <td>(suite de la liste)
      <ul>
        <li> et quand vous débutez dans la mise en œuvre de l’accessibilité, pour avoir une liste des problèmes d’accessibilité que vous devez corriger.</li>
      </ul></td>
    <td>Toutes les icônes sont intégrées à une icône de navette spatiale. Un document avec une liste de problèmes d’accessibilité.</td>
  </tr>
  <tr>
    <td>Pour réaliser une évaluation de conformité efficace, vous avez besoin d’expertise dans :
      <ul>
        <li> les standards d’accessibilité</li>
        <li> le développement et la conception Web accessibles</li>
        <li> les technologies d’assistance</li>
        <li> et la façon dont les personnes en situation de handicap utilisent le Web.</li>
      </ul></td>
    <td>Les icônes sont montrées tout à tour : les mots « évaluation de la conformité » ; un ruban de récompense ; un pinceau et une icône illustrant le codage ; des icônes illustrant les technologies d’assistance ; et enfin des personnages.</td>
  </tr>
  <tr>
    <td>Vous aurez aussi probablement besoin d’outils d’évaluation pour être plus efficace.</td>
    <td>Une boîte à outils avec une jauge qui monte.</td>
  </tr>
  <tr>
    <td>"WCAG-EM", la « méthodologie d’évaluation de la conformité à l’accessibilité d’un site Web » fournit une structure pour votre processus d’évaluation.</td>
    <td>WCAG-EM, méthodologie d’évaluation de la conformité à l’accessibilité d’un site Web. Une loupe avec le mot "accessibilité".</td>
  </tr>
  <tr>
    <td>Est décrite la méthode processus pour :
      <ul>
        <li> définir le périmètre de votre évaluation</li>
        <li> explorer les ressources de votre site Web</li>
        <li> sélectionner un échantillon représentatif des pages de votre site Web.</li>
        <li> évaluer l’échantillon sélectionné</li>
        <li> et fournir les résultats de votre évaluation.</li>
      </ul></td>
    <td>Des fenêtres de texte chargent l’une après l’autre : définir le périmètre ; explorer les ressources ; sélectionner un échantillon ; évaluer l’échantillon ; et rapporter les résultats.</td>
  </tr>
  <tr>
    <td>WCAG-EM recommande également d’impliquer de vraies personnes en situation de handicap pendant l’évaluation, pour vous aider à prendre en compte l’expérience réelle des personnes qui utilisent votre site Web.</td>
    <td>Une personne devant un ordinateur qui affiche un site Web. Les réussites et les échecs sont marqués.</td>
  </tr>
  <tr>
    <td>L’outil de création de rapports WCAG-EM open source vous aide à suivre la méthodologie, consigner les résultats, et télécharger un rapport de votre évaluation.</td>
    <td>L’outil de création de rapport WCAG-EM. Une barre de progression montre les différentes étapes de la méthodologie d’évaluation. Un document est affiché sur l’écran de l’ordinateur et téléchargé.
</td>
  </tr>
    <tr>
      <td>L’accessibilité du Web : essentielle pour certains, utile à tous.</td>
      <td>Des icônes autour d’un ordinateur s’affichent : une main ; un œil ; un cerveau ; une oreille ; et une bouche avec des ondes sonores.</td>
    </tr>
    <tr>
      <td>Pour plus d’informations sur l’évaluation de la conformité à l’accessibilité Web, allez sur w3.o-r-g/W-A-I/evaluation.</td>
      <td>L’évaluation de la conformité, logos de W3C et de l’Initiative pour l’accessibilité du Web (WAI).</td>
    </tr>
</tbody>
</table>

{% include excol.html type="end" %}
