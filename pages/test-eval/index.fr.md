---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Évaluer l’accessibilité Web – Vue d’ensemble"
nav_title: "Vue d’ensemble de l’évaluation"
lang: fr
last_updated: 2023-11-30    # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Sofia Ahmed"
contributors:
  - name: "Flora Bazie"
  - name: "Rémi Bétin"
  - name: "Sandra Velarde Gonzalez (ETNIC)"
  - name: "Sylvie Duchateau"

github:
  label: wai-evaluation-overview

permalink: /test-evaluate/fr
ref: /test-evaluate/    # Do not change this

changelog: /test-evaluate/changelog/  # Do not change this
feedbackmail: wai@w3.org
class: tight-page

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p>Note à propos de la description vidéo : les vidéos présentes sur cette page n’incluent pas l’audiodescription synchronisée car les images n’illustrent que l’audio et ne fournissent pas d’informations supplémentaires. Dans ce cas-ci, l’audiodescription serait plus distrayante qu’utile pour la plupart des utilisateurs, y compris pour les personnes qui ne peuvent pas voir les images. La description des informations contenues dans les images est reprise dans la transcription textuelle avec description des visuels (« transcription descriptive »).</p>
  <p><strong>Date :</strong> Mise à jour : 1 août 2023. CHANGELOG.</p>
  <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Vidéos créées par le groupe de travail Éducation et Promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) avec le soutien du projet <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> financé par la Commission européenne (CE) dans le cadre du programme Horizon 2020 (convention de subvention n°822245) <a href="./acknowledgements/">Remerciements</a>.</p>
  <p><a rel="license" href="https://creativecommons.org/licenses/by/4.0/"><img alt="Licence Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a> Les vidéos sont mises à disposition en vertu de la <a rel="license" href="https://creativecommons.org/licenses/by/4.0/">licence <i lang="en">Creative Commons Attribution 4.0 International</i></a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page renvoie à des ressources pour aider à évaluer l’accessibilité Web. L’évaluation de l’accessibilité est également appelée « vérification », « audit », ou « test ».

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Table des matières" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introduction {#intro}

{% comment %}
This abuses the video-card component and tries to make it work with an embedded YouTube player that is enhanced with the AblePlayer library. Remove and replace with regular video-card component in case of bugs.
{% endcomment %}
<div class="video-card">
  {% include video-player-data.html
      video-id="evaluating-resources-overview"
      yt-id="C4GIqWeywiI"
  %}
  <p><a href="#alternatives">Alternatives pour la vidéo d’introduction – Vue d’ensemble des ressources</a></p>
</div>

Lors du développement ou de la refonte d’un site Web ou d’une application Web, évaluez l’accessibilité dès le début et tout au long du processus de développement pour identifier rapidement les problèmes d’accessibilité, quand il est plus facile de les corriger.

Il existe des outils qui aident à l’évaluation. Cependant, aucun outil n’est suffisant à lui seul pour déterminer si un site Web respecte les standards d’accessibilité. Une évaluation par un expert humain est nécessaire pour déterminer si un site Web est accessible.

## Vérifications préalables {#initial}

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/easy-checks-accessibility.mp4"
  captions="/wai-videos/evaluating/easy-checks-accessibility.en.vtt|en"
  subtitles="/wai-videos/evaluating/easy-checks-accessibility.fr.vtt|fr|default"
  poster="video-thumb-easy-checks.png"
  accessible-version="https://www.w3.org/WAI/test-evaluate/preliminary/#video-intro"
  accessible-version-label="Vidéo : vue d’ensemble des vérifications simples"
  poster="/content-images/test-eval/video-thumb-easy-checks.png"
%}

Même si vous n’avez aucune connaissance en matière d’accessibilité et que vous ne disposez pas d’un outil d’accessibilité performant, vous pouvez vérifier certains aspects de l’accessibilité.

[Vérifications simples — Un premier bilan de l’accessibilité Web](/test-evaluate/preliminary/)
: Fournit des recommandations étape par étape et des explications brèves pour vérifier certains aspects de l’accessibilité.

## Outils

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/tools-for-evaluating.mp4"
  captions="/wai-videos/evaluating/tools-for-evaluating.en.vtt|en"
  subtitles="/wai-videos/evaluating/tools-for-evaluating.fr.vtt|fr|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/tools/#video-intro"
  accessible-version-label="Vidéo : Vue d’ensemble des outils d’évaluation"
  poster="/content-images/test-eval/video-thumb-tools.png"
%}

Les outils d’évaluation de l’accessibilité Web sont des logiciels ou des services en ligne qui aident à déterminer si le contenu Web répond aux standards de l’accessibilité.

[Liste des outils d’évaluation de l’accessibilité Web](/test-evaluate/tools/list/)
: Inclut des informations sur plus de 100 outils. Vous pouvez utiliser les filtres pour réduire la liste aux types d’outils qui vous intéressent.

[[Choisir des outils d’évaluation de l’accessibilité Web]](/test-evaluate/tools/selecting/)
: Fournit des conseils pour choisir des outils. La page décrit les caractéristiques et les fonctionnalités de différents types d’outils d’évaluation, et traite des éléments à prendre en considération en fonction de votre situation.

## Évaluation de la conformité et rapports {#conformance}

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/conformance-evaluation.mp4"
  captions="/wai-videos/evaluating/conformance-evaluation.en.vtt|en"
  subtitles="/wai-videos/evaluating/conformance-evaluation.fr.vtt|fr|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/conformance/#video-intro"
  accessible-version-label="Vidéo : vue d’ensemble de l’évaluation de la conformité"
  poster="/content-images/test-eval/video-thumb-conformance.png"
%}

L’évaluation de la conformité détermine dans quelle mesure les pages ou les applications Web sont conformes aux standards d’accessibilité. La méthodologie d’évaluation de la conformité à l’accessibilité d’un site Web de W3C (WCAG-EM) constitue une approche pour déterminer la conformité aux Règles pour l’accessibilité des contenus Web (WCAG).

[[Vue d’ensemble de WCAG-EM : méthodologie de l’évaluation de la conformité à l’accessibilité d’un site Web]](/test-evaluate/conformance/wcag-em/)
: Une courte page contenant des informations de base pour débuter. Nous vous suggérons de la lire avant de consulter le [document complet sur WCAG-EM](https://www.w3.org/TR/WCAG-EM/)

[Outil de création de rapports WCAG-EM : un générateur de rapports d’évaluation de l’accessibilité Web](https://www.w3.org/WAI/eval/report-tool/#/)
: Vous aide à générer des rapports d’évaluation selon WCAG-EM. L’outil ne fait pas la vérification à votre place. Il vous aide à suivre les étapes de WCAG-EM et génère un rapport à partir des données fournies.

[[Modèle de rapports d’évaluation de l’accessibilité Web]](/test-evaluate/report-template/)
: Propose des informations à inclure dans un rapport.

[Outil de création de rapports ATAG](https://www.w3.org/WAI/atag/report-tool/)
: Vous aide à générer un rapport pour évaluer dans quelle mesure un outil répond aux critères des Règles d’accessibilité pour les outils d’édition ([ATAG](/standards-guidelines/atag/)). Les outils d’édition sont des logiciels et des services utilisés pour créer du contenu Web &mdash;&nbsp;tels que les systèmes de gestion de contenu (CMS en anglais) et les éditeurs HTML WYSIWYG (<i lang="en">what-you-see-is-what-you-get</i> : « ce que vous voyez est ce que vous obtenez »).

[Règles de test de la conformité à l'accessibilité (<abbr lang="en" title="Accessibility Conformance Testing">ACT</abbr>)](/standards-guidelines/act/rules/about/)
:  Décrit comment tester la conformité aux standards d'accessibilité tels que les WCAG et WAI-ARIA. Les Règles ACT sont principalement utilisées par les développeurs d'outils et de méthodologies de test. Les personnes testant l'accessibilité peuvent trouver certaines règles utiles pour évaluer les cas limites de manière cohérente.

<!-- Communiquez clairement les résultats de l'évaluation, en précisant le périmètre de l'évaluation. -->

Les spécifications pour exprimer les résultats de l'évaluation (<abbr lang="en" title="Evaluation and Report Language">EARL</abbr>) et pour écrire les règles de test de l'accessibilité (<i lang="en">Accessibility Conformance Testing (ACT) Rules Format</i>) sont présentées dans [Standards d'évaluation - Vue d'ensemble](/standards-guidelines/evaluation/).

## Personnes

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/involving-users.mp4"
  captions="/wai-videos/evaluating/involving-users.en.vtt|en"
  captions="/wai-videos/evaluating/involving-users.fr.vtt|fr|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/involving-users/#video-intro"
  accessible-version-label="Vidéo : Impliquer les utilisateurs dans l’accessibilité Web – Vue d’ensemble"
  poster="/content-images/test-eval/video-thumb-involving-users.png"
%}

Impliquer les personnes et les compétences adéquates rendra vos évaluations de l’accessibilité plus efficaces.

[Utiliser l’expertise combinée pour évaluer l’accessibilité Web](/test-evaluate/combined-expertise/)
: Traite de différentes aptitudes et considérations pour une vérification collaborative.

[[Impliquer les utilisateurs dans l’évaluation de l’accessibilité Web]](/test-evaluate/involving-users/)
: Donne des conseils pour inclure des personnes en situation de handicap (« utilisateurs ») dans l’évaluation tout au long du développement du projet.

<hr>

{% include excol.html type="start" id="video-intro-transcript" %}

##  Introduction aux alternatives vidéo – Vue d’ensemble des ressources {#alternatives}

{% include excol.html type="middle" %}

_Cette vidéo est aussi disponible sur un serveur du W3C : [Vidéo : Évaluer l’accessibilité Web – Vue d’ensemble des ressources (format du fichier : MP4, taille du fichier : 45 Mo)](https://media.w3.org/wai/evaluation-intros/evaluating-resources-overview.mp4)._

###  Transcription textuelle avec description des visuels de la vidéo d’introduction – Vue d’ensemble des ressources {#transcript}

<table aria-labelledby="transcription">
  <tbody>
    <tr>
      <th>Audio</th>
      <th>Visuel</th>
    </tr>
    <tr>
      <td>Évaluer l’accessibilité Web : vue d’ensemble des ressources</td>
      <td>Évaluer l’accessibilité Web : vue d’ensemble des ressources.</td>
    </tr>
    <tr>
       <td>L’évaluation permet de vous assurer que votre site Web répond aux exigences d’accessibilité.</td>
      <td>Une loupe avec le mot « évaluation » apparaît sur un écran d’ordinateur qui affiche un site Web.</td>
    </tr>
    <tr>
      <td>Idéalement, vous évaluez régulièrement tout au long du processus de conception et de développement. Ainsi, vous repérez les erreurs rapidement et évitez des corrections coûteuses plus tard dans le processus.</td>
      <td>Les composants de la page Web se réorganisent sur la page jusqu’à obtenir un design optimal.</td>
    </tr>
    <tr>
      <td>L’Initiative pour l’accessibilité du Web de W3C, W-A-I, ou WAI, fournit des ressources gratuites pour vous aider à faire votre évaluation.</td>
      <td>Logos de W3C et de l’Initiative pour l’accessibilité du Web (WAI).</td>
    </tr>
    <tr>
      <td>« Vérifications simples – Un premier bilan de l’accessibilité Web » explique comment vous pouvez faire certaines vérifications vous-mêmes.</td>
      <td>« Vérifications simples – Un premier bilan de l’accessibilité Web ». Une personne se trouve en face de l’ordinateur. Une ampoule apparaît.</td>
    </tr>
    <tr>
      <td>Même si vous débutez dans l’accessibilité Web et que vous n’avez pas un profil technique, ces vérifications vous donnent une idée approximative de l’accessibilité pour n’importe quelle page Web.</td>
      <td>Un document reprenant les vérifications apparaît. Chaque vérification est sélectionnée et mise en surbrillance tour à tour pour montrer ce qui est correct ou non.</td>
    </tr>
    <tr>
      <td>WAI tient également une « liste des outils d’évaluation de l’accessibilité Web » que vous pouvez filtrer.</td>
      <td>Une liste des outils d’évaluation de l’accessibilité Web apparaît. Une liste d’outils sous forme d’icônes apparaît.</td>
    </tr>
    <tr>
      <td>« Sélectionner des outils d’évaluation de l’accessibilité Web » explique ce qu’un outil peut et ne peut pas faire.</td>
      <td>« Sélectionner des outils d’évaluation de l’accessibilité Web ». Les icônes représentant les outils s’affichent sur un ordinateur.</td>
    </tr>
    <tr>
      <td>Pour les évaluateurs plus expérimentés, WAI fournit « WCAG-EM », la méthodologie d’évaluation de la conformité à l’accessibilité Web.</td>
      <td>WCAG-EM. Méthodologie d’évaluation de la conformité à l’accessibilité Web. Une personne se trouve en face d’un ordinateur. Un rapport simplifié s’affiche sur l’écran.</td>
    </tr>
    <tr>
      <td>« L’outil de création de rapports WCAG-EM » vous permet d’enregistrer les résultats à mesure que vous suivez la méthodologie.</td>
      <td>Outil de création de rapports WCAG-EM. Une barre de progression montre les différentes étapes de la méthodologie d’évaluation.</td>
    </tr>
    <tr>
      <td>Pour vous aider à mieux comprendre comment les différents utilisateurs naviguent sur votre site Web, WAI fournit des conseils dans « Impliquer les utilisateurs dans les projets de développement Web pour une accessibilité plus optimale et plus facile » et « Impliquer les utilisateurs dans l’évaluation de l’accessibilité Web ».</td>
      <td>L’écran se divise en 12 parties sur chacune desquelles un utilisateur différent est face à un ordinateur. Impliquer des utilisateurs dans les projets Web pour une accessibilité plus optimale et plus facile et Impliquer des utilisateurs dans l’évaluation de l’accessibilité Web.</td>
    </tr>
    <tr>
      <td>Grâce à toutes ces ressources, vous pouvez apprendre comment vérifier l’accessibilité de votre site Web et donner la priorité aux problèmes que vous devez régler en premier.</td>
      <td>Une loupe qui montre les mots « vérification de l’accessibilité » est remplacée par une liste de problèmes.</td>
    </tr>
    <tr>
      <td>Accessibilité Web : essentielle pour certains, utile à tous.</td>
      <td>Des icônes autour d’un ordinateur s’affichent : une main ; un œil ; un cerveau ; une oreille ; et une bouche avec des ondes sonores.</td>
    </tr>
    <tr>
      <td>Pour des ressources sur l’évaluation de l’accessibilité Web, allez sur w3.o-r-g/W-A-I/evaluation.</td>
      <td>Ressources sur l’évaluation, logos de W3C et l’Initiative pour l’accessibilité du Web (WAI).</td>
    </tr>
  </tbody>
</table>

{% include excol.html type="end" %}
