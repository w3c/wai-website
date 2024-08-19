---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Compatibilité avec le clavier"
nav_title: "Compatibilité avec le clavier"
lang: fr
last_updated: 2023-10-12    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 1

translators:
    - name: "Sofia Ahmed"
    - name: "Rémi Bétin"
contributors:
    - name: "Sandra Velarde Gonzalez (ETNIC)"

github:
    label: wai-perspective-videos

permalink: /perspective-videos/keyboard/fr  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/keyboard/  # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Courte vidéo à propos de la compatibilité du clavier pour l’accessibilité Web - de quoi s’agit-il, qui en bénéficie, et comment mettre cela en pratique.
image: /content-images/perspective-videos/keyboard.jpg
teaser_text: Toutes les fonctionnalités doivent être faciles d’utilisation au clavier. Cela signifie que les utilisateurs doivent pouvoir accéder aux liens, aux boutons, aux formulaires, et aux autres commandes en utilisant la touche Tab et les autres touches. Les sites Web ne devraient pas nécessiter de souris. L’accessibilité Web est essentielle pour les personnes atteintes de handicaps et avantageuse pour tous dans diverses situations.

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Statut :</strong> Mise à jour 23 janvier 2019.<br>
    <strong>Rédacteur et chef de projet :</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Développé par le <a href="https://www.w3.org/WAI/EO/">Groupe de travail Éducation et Promotion</a> avec le soutien du projet <a href="https://www.w3.org/WAI/DEV/">WAI-DEV</a>, co-financé par la Commission européenne (CE). Mis à jour avec le soutien de la Fondation Ford. ACKNOWLEDGEMENTS.</p>
---

L’accessibilité Web est essentielle pour les personnes en situation de handicap et utile à tous. Découvrez les effets de l’accessibilité et les bénéfices pour tous dans diverses situations.

## Vidéo sur la compatibilité avec le clavier
{:#film.no-display}

{% include video-player-data.html
    video-id="keyboard"
    yt-id="93UgG72os8M"
    yt-id-ad="1rBwxGMT9ZM"
%}

Les informations de cette vidéo sont disponibles sous forme de [Transcription avec description des visuels](#transcript) en bas de la page.

## Que signifie la « compatibilité avec le clavier » ?
{:#what}

Toutes les fonctionnalités doivent être accessibles au clavier. L’utilisateur doit donc pouvoir accéder et naviguer entre les liens, les boutons, les formulaires, et les autres composants d’interface en utilisant la touche de tabulation et les autres touches. Les sites Web ne devraient pas nécessiter l’utilisation d’une souris ; par exemple, les calendriers devraient aussi permettre aux utilisateurs de saisir une date.

## Qui dépend de cette fonctionnalité ?
{:#who}

-   Les personnes porteuses de handicaps physiques qui ne peuvent pas utiliser la souris.
-   Les personnes aveugles, et qui ne peuvent pas voir le curseur de la souris sur l’écran.
-   Les personnes souffrant de maladies chroniques, telles que des troubles musculo-squelettiques (TMS), qui devraient limiter ou éviter l’utilisation d’une souris.

## Quels sont les autres bénéfices ?
{:#others}

-   Le contenu est utilisable pour les personnes en situation de handicap temporaire, telle qu’un bras cassé ou une souris cassée.

## Comment mettre cela en pratique ?
{:#action}

Les composants d’interface HTML natifs, comme les liens, les boutons, et les éléments de formulaire, fonctionnent nativement avec le clavier et devraient être utilisés dans la mesure du possible. Les composants d’interface personnalisés, les styles CSS, et les scripts qui contrôlent l’interaction pourraient nécessiter du codage supplémentaire pour assurer leur compatibilité avec le clavier. Assurez-vous que l’ordre de tabulation soit logique pour permettre la navigation avec le clavier au sein du contenu et des composants d’interface. Fournissez un moyen aux utilisateurs de se déplacer rapidement entre les blocs de contenu et les composants d’interface. Les problèmes de clavier surviennent particulièrement dans les formulaires, les menus, et les applications contenant de nombreux composants d’interface.

## Plus d’informations
{:#resources}

-   **Principe d’accessibilité :**
    -   [Des fonctionnalités disponibles au clavier](/fundamentals/accessibility-principles/#keyboard) 
-   **Pour démarrer :**
    -   [Assurez-vous que tous les éléments interactifs sont accessibles au clavier](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible) 
-   **Vérification simple :**
    -   [Accès au clavier et focus visible](/test-evaluate/preliminary/#interaction) 
-   **Témoignages d’utilisateurs :**
    -   [Alex, journaliste avec un trouble musculosquelettique](/people-use-web/user-stories/#reporter)
    -   [Ilya, cadre supérieure, aveugle](/people-use-web/user-stories/#accountant)
    -   [Kaseem, adolescente sourde et aveugle](/people-use-web/user-stories/#teenager)
-   **Règles pour l’accessibilité des contenus Web ([Vue d’ensemble des WCAG](/standards-guidelines/wcag/)) :** 
    -   [Critères de succès relatifs au « clavier »](https://www.w3.org/WAI/WCAG21/quickref/?tags=keyboard) 
-   **Applicabilité aux appareils mobiles :**
    -   [La souris est requise pour l’interaction et la navigation](/standards-guidelines/shared-experiences/#mouse) 
-   **Tutoriel :**
    -   [Tutoriels sur l’accessibilité Web](/tutorials/) (plusieurs sujets à ce propos)

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
      <td>L’accessibilité Web illustrée : la compatibilité avec le clavier</td>
      <td>L’accessibilité Web illustrée :<br>
        La compatibilité avec le clavier</td>
    </tr>
    <tr>
      <td>Il est frustrant de ne pas pouvoir utiliser son ordinateur parce que la souris ne fonctionne pas.</td>
      <td>Un homme fait tomber sa souris de son bureau. La souris ne fonctionne plus.</td>
    </tr>
    <tr>
      <td>De nombreuses personnes utilisent uniquement le clavier pour naviguer sur des sites Web &mdash; soit par préférence, soit en fonction des circonstances.<br></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Qu’il s’agisse d’une mobilité temporairement limitée,</td>
      <td>Une dame dont le bras est en écharpe tape sur un clavier &mdash; mais le site Web nécessite l’utilisation d’une souris pour sélectionner la date.</td>
    </tr>
    <tr>
      <td>d’un handicap physique permanent,</td>
      <td>Un homme en fauteuil roulant utilise une baguette buccale pour taper au clavier.</td>
    </tr>
    <tr>
      <td>ou simplement d’une souris cassée,<br>
        le résultat est le même :</td>
      <td>L’homme en fauteuil roulant ne peut pas non plus naviguer sur le site.</td>
    </tr>
    <tr>
      <td>Les sites Web et applications Web doivent fonctionner au clavier.</td>
      <td>Il se rend sur un autre site qui permet de saisir la date au clavier.</td>
    </tr>
    <tr>
      <td>L’accessibilité Web : essentielle pour certains, utile à tous.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Visitez w3.org/WAI/perspectives pour plus d’informations concernant <em>Compatibilité avec le clavier</em></td>
      <td>Visitez<br>
        w3.org/WAI/perspectives<br>
        pour plus d’informations concernant<br>
        <em>Compatibilité avec le clavier</em>.<br>
        Logo de l’Initiative pour l’accessibilité du Web de W3C</td>
    </tr>
  </tbody>
</table>
