---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "La synthèse vocale"
nav_title: "Synthèse vocale"
lang: fr
last_updated: 2023-10-12    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 4

translators: 
- name: "Sofia Ahmed"
- name: "Rémi Bétin"
contributors:
- name: "Sandra Velarde Gonzalez (ETNIC)"

github:
    label: wai-perspective-videos

permalink: /perspective-videos/speech/fr    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/speech/    # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Courte vidéo à propos de la synthèse vocale pour l’accessibilité Web - de quoi s’agit-il, qui en bénéficie, et comment mettre cela en pratique.
image: /content-images/perspective-videos/speech.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Statut :</strong> Mise à jour : 23 janvier 2019.<br>
    <strong>Rédacteur et chef du projet :</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Développé par le <a href="https://www.w3.org/WAI/EO/">Groupe de travail Éducation et Promotion</a> avec le soutien du projet <a href="https://www.w3.org/WAI/DEV/">WAI-DEV</a>, co-financé par la Commission européenne (CE). Mis à jour avec le soutien de la Fondation Ford. ACKNOWLEDGEMENTS.</p>
---

L’accessibilité Web est essentielle pour les personnes en situation de handicap et utile à tous. Découvrez les effets de l’accessibilité et les bénéfices pour tous dans diverses situations.

## Vidéo sur la synthèse vocale
{:#film.no-display}

{% include video-player-data.html
    video-id="speech"
    yt-id="8Rn5pXCdZWU"
    yt-id-ad="F3A1VffiOH4"
%}

Les informations de cette vidéo sont disponibles sous forme de [Transcription avec description des visuels](#transcript) en bas de la page.

Qu’est-ce que la « synthèse vocale » ? {#what}
-------------------------

De nombreux ordinateurs et appareils mobiles intègrent aujourd’hui un logiciel de conversion du texte en parole. Certaines personnes en situation de handicap, notamment les personnes aveugles, utilisent des logiciels spécialisés appelés lecteurs d’écran. Les lecteurs d’écran fournissent des fonctionnalités importantes telles que naviguer à travers les en-têtes, prononcer les équivalents textuels des images, et identifier les liens internes et externes. Ils peuvent également mettre le texte en surbrillance au fur et à mesure de la lecture à haute voix du texte, pour les personnes qui souhaitent voir et entendre le contenu en même temps. Le contenu doit être codé correctement pour que toutes les fonctionnalités du logiciel de conversion de texte en parole fonctionnent pour le contenu en question.

Qui dépend de cette fonctionnalité ? {#who}
----------------------------

-   Les personnes aveugles qui ne peuvent pas voir ce qui est affiché à l’écran.
-   Les personnes malvoyantes (souvent considérées comme légalement aveugles) qui ne peuvent pas voir certains types de contenus.
-   Les personnes dyslexiques et les personnes avec d’autres troubles cognitifs et d’apprentissage qui ont besoin d’entendre et de voir le texte pour mieux le comprendre.

Quels sont les autres bénéfices ? {#others}
---------------------------------

-   Le contenu peut être lu à voix haute pour les personnes qui ne peuvent pas lire le langage écrit.
-   Le contenu peut être lu à voix haute pour les personnes qui préfèrent écouter ; par exemple, en faisant autre chose.

Comment mettre cela en pratique ? {#action}
--------------------------------------

Utilisez du balisage HTML sémantique pour les éléments de structure telles que les en-têtes, les paragraphes, les listes, les formulaires et les tableaux. Fournissez des équivalents textuels pour les images, les icônes, et les autres contenus non textuels. Assurez-vous de la [compatibilité avec le clavier](/perspective-videos/keyboard/), et assurez-vous que l’information textuelle est compréhensible sans le contexte visuel.

Plus d’informations {#resources}
----------

-   **Principes d’accessibilité :**
    -   [Équivalents textuels pour les contenus non textuels](/fundamentals/accessibility-principles/#alternatives)
    -   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#adaptable)
-   **Pour démarrer :**
    -   [Rédigez des équivalents textuels pertinents pour les images](/tips/writing/#write-meaningful-text-alternatives-for-images) 
    -   [Utilisez des en-têtes pour donner du sens et de la structure](/tips/writing/#use-headings-to-convey-meaning-and-structure) 
    -   [Identifiez la langue de la page et les changements de langue](/tips/developing/#identify-page-language-and-language-changes) 
-   **Vérifications faciles :**
    -   [Équivalents textuels pour les images (« alt text »)](/test-evaluate/preliminary/#images) 
    -   [Vérification de la structure de base](/test-evaluate/preliminary/#structure) 
-   **Témoignages d’utilisateurs :**
    -   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/#accountant)
    -   [Kasseem, adolescente sourde et aveugle](/people-use-web/user-stories/#teenager)
    -   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/#classroomstudent)
-   **Règles pour l’accessibilité des contenus Web ([Vue d’ensemble des WCAG](/standards-guidelines/wcag/)):**
    -   [Critères de succès liés aux « images » et à la « structure »](https://www.w3.org/WAI/WCAG21/quickref/?tags=images%2Cstructure)
-   **Applicabilité aux appareils mobiles :**
    -   [Objets non textuels (images, son, vidéo) sans équivalents textuels](/standards-guidelines/shared-experiences/#non-text) 
    -   [Information transmise en utilisant seulement du CSS (formatage visuel)](/standards-guidelines/shared-experiences/#visual-formatting) 
    -   [Étiquette de lien non descriptive](/standards-guidelines/shared-experiences/#link-label) 
-   **Tutoriel :**
    -   [Tutoriels sur l’accessibilité](/tutorials/)  (plusieurs sujets à ce propos)

## Transcription avec description des visuels {#transcript}

<table>
  <thead>
    <tr>
      <th width="65%">Audio</th>
      <th>Visuel</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>L’accessibilité Web illustrée : la synthèse vocale</td>
      <td>L’accessibilité Web illustrée :<br>
        la synthèse vocale</td>
    </tr>
    <tr>
      <td>(Ordinateur) « Certaines personnes ne peuvent pas voir le texte sur cet écran. »<br>
(Ordinateur) « Heureusement, les ordinateurs peuvent convertir du texte en parole. »</td>
      <td>Un homme utilise un ordinateur portable dont l’écran montre un texte mis en surbrillance à mesure qu’il est prononcé.</td>
    </tr>
    <tr>
      <td>C’est une technologie dont dépendent de nombreuses personnes aveugles depuis des années.</td>
      <td>Un chien-guide est couché aux pieds de l’homme. Il pourrait s’agir d’une personne aveugle.</td>
    </tr>
    <tr>
      <td>Mais c’est également important pour de nombreuses personnes dyslexiques.</td>
      <td>Une femme lit sur une tablette et écoute avec un casque.</td>
    </tr>
    <tr>
      <td>Et cela est très utile pour des personnes qui ont des difficultés à lire un texte.</td>
      <td>Un homme enlève ses lunettes et écoute un article d’actualité sur sa tablette.</td>
    </tr>
    <tr>
      <td>Tout comme pour les personnes qui aiment faire autre chose en même temps.</td>
      <td>Un homme écoute un article de revue en faisant la vaisselle.</td>
    </tr>
    <tr>
      <td>Mais pour que cela fonctionne, les sites Web et les applications doivent être codés correctement.</td>
      <td>Le site Web de la femme portant un casque ne fonctionne pas correctement. Elle est frustrée.</td>
    </tr>
    <tr>
      <td>Ce qui a pour bénéfice supplémentaire d’aider les moteurs de recherche à mieux indexer les contenus des sites Web.</td>
      <td> </td>
    </tr>
    <tr>
      <td>L’accessibilité Web : essentielle pour certains, utile à tous.</td>
      <td>L’homme avec le chien-guide utilise son appareil mobile dehors avec un casque à conduction osseuse. La vidéo montre les personnes précédentes utiliser la synthèse vocale.</td>
    </tr>
    <tr>
      <td>Allez sur w3.org/WAI/perspectives pour plus d’informations concernant <em>La synthèse vocale</em>.</td>
      <td>Allez sur<br>
        w3.org/WAI/perspectives<br>
        pour plus d’informations sur<br>
        <em>La synthèse vocale</em>. <br>
        Logo de l’Initiative pour l’accessibilité du Web du W3C</td>
    </tr>
  </tbody>
</table>
