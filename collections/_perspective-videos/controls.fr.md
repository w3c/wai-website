---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Des liens, boutons, et composants d’interface assez grands"
nav_title: "Liens, boutons, et composants assez grands"
lang: fr
last_updated: 2023-10-12    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 5

translators:
- name: "Sofia Ahmed"
- name: "Rémi Bétin"
contributors:
- name: "Sandra Velarde Gonzalez (ETNIC)"

github:
    label: wai-perspective-videos

permalink: /perspective-videos/controls/fr  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/controls/  # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Courte vidéo à propos des liens, des boutons, et des commandes assez grands pour l’accessibilité Web - de quoi s’agit-il, qui en bénéficie, et comment mettre cela en pratique.
image: /content-images/perspective-videos/controls.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Statut :</strong> Mise à jour : 23 janvier 2019.<br>
    <strong>Rédacteur et chef du projet :</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Développé par le <a href="https://www.w3.org/WAI/EO/">Groupe de travail Éducation et Promotion</a> avec le soutien du projet <a href="https://www.w3.org/WAI/DEV/">WAI-DEV</a>, co-financé par la Commission européenne (CE). Mis à jour avec le soutien de la Fondation Ford. ACKNOWLEDGEMENTS.</p>
---

L’accessibilité Web est essentielle pour les personnes en situation de handicap et utile à tous. Découvrez les effets de l’accessibilité et les bénéfices pour tous dans diverses situations.

## Vidéo concernant des liens, des boutons, et des composants d'interface assez grands
{:#film.no-display}

{% include video-player-data.html
    video-id="controls"
    yt-id="CzfKB3PuuIY"
    yt-id-ad="65G_twR47OQ"
%}

Les informations de cette vidéo sont disponibles sous forme de [Transcription avec description des visuels](#transcript) en bas de la page.

Que signifie « des liens, des boutons, et des composants d’interface assez grands » ? {#what}
---------------------------------------------

La zone pour cliquer et toucher sur des composants d’interface doit être suffisamment grande pour pouvoir les activer. Cela comprend les liens, les boutons, les cases à cocher, et les autres composants d’interface. Les petits composants d’interfaces, et les composants d’interface trop rapprochés, sont difficiles à utiliser pour de nombreuses personnes. C'est particulièrement le cas sur les appareils mobiles avec de petits écrans.

Qui dépend de cette fonctionnalité ? {#who}
----------------------------

-   Les personnes en situation de handicap physique avec une dextérité réduite.

Quels sont les autres bénéfices ? {#others}
---------------------------------

-   Le contenu est plus facile à utiliser sur les écrans tactiles, particulièrement sur des petits appareils mobiles.
-   Le contenu est plus facile à utiliser pour les personnes qui ne maîtrisent pas l’utilisation de la souris ou du pavé tactile de leur ordinateur.
-   Le contenu est plus facile à utiliser dans les situations où l’appareil ne peut pas être maintenu stable.

Comment mettre cela en pratique ? {#action}
--------------------------------------

Créez des composants d’interface ou des zones d’activation assez grands autour des composants d’interface.
(Augmenter la taille de la police du composant d’interface n’est parfois pas suffisant).
Séparez de manière adéquate les composants d’interface sélectionnables. Fournissez des étiquettes pour les composants d’interface, qui élargissent la zone d’activation dans de nombreux navigateurs car l’étiquette des cases à cocher et des boutons d’options est également cliquable.

Plus d’informations {#resources}
----------

-   **Principes d’accessibilité :**
    -   [Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont](/fundamentals/accessibility-principles/#navigable)
-   **Pour démarrer :**
    -   [Créez des designs pour différentes tailles de fenêtres d’affichage](/tips/designing/#create-designs-for-different-viewport-sizes) 
    -   [Assurez-vous que les éléments de formulaire incluent des étiquettes clairement associées](/tips/designing/#ensure-that-form-elements-include-clearly-associated-labels) 
-   **Vérification simple :**
    -   [Formulaires, étiquettes, et erreurs](/test-evaluate/preliminary/#forms) 
-   **Témoignage d’utilisateur :**
    -   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/#retiree)
-   **Règles d’accessibilité pour les contenus Web ([Vue d’ensemble des WCAG](/standards-guidelines/wcag/)) :**
    -   [Critères de succès liés aux "étiquettes"](https://www.w3.org/WAI/WCAG21/quickref/?tags=labels) 

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
      <td>L’accessibilité Web illustrée : Des liens, boutons, et composants d’interface assez grands</td>
      <td>L’accessibilité Web illustrée :<br>
        des liens, boutons, et composants d’interface assez grands</td>
    </tr>
    <tr>
      <td>Essayer d’atteindre une petite cible demande beaucoup d’efforts.</td>
      <td><p>Une femme tente d’enfiler du fil dans une aiguille, mais n’y parvient pas.<br>
        </p></td>
    </tr>
    <tr>
      <td>De nombreux sites Web et applications tentent d’enfiler du fil dans une aiguille.</td>
      <td>La femme n’arrive pas à taper sur des petits liens d’un site Web.</td>
    </tr>
    <tr>
      <td>Mais sur le Web, il est possible de rendre les zones cliquables et touchables plus faciles à utiliser.</td>
      <td>Les liens deviennent plus grands et la jeune femme peut désormais appuyer dessus.</td>
    </tr>
    <tr>
      <td>C’est pratique sur les appareils mobiles, en particulier lorsque l’on est en mouvement.</td>
      <td>La femme utilise une tablette en préparant un café.</td>
    </tr>
    <tr>
      <td>C’est indispensable pour les personnes avec une dextérité réduite.</td>
      <td>Une autre femme dont la main tremble est incapable de naviguer de manière précise avec la souris et ne réussit pas à cliquer sur des petits boutons d’un site Web.<br></td>
    </tr>
    <tr>
      <td>L’accessibilité Web : essentielle pour certains, utile à tous.</td>
      <td>Les boutons deviennent plus grands et la femme atteinte de tremblements est maintenant capable de cliquer dessus.</td>
    </tr>
    <tr>
      <td>Visitez w3.org/WAI/perspectives pour plus d’informations sur <em>Des liens, des boutons, et des commandes assez grands</em>.</td>
      <td>Visitez<br>
        w3.org/WAI/perspectives<br>
        pour plus d’informations sur<br>
        <em>Des liens, des boutons, et des commandes assez grands</em>.<br>
        Logo de l’Initiative pour l’accessibilité du Web de W3C</td>
    </tr>
  </tbody>
</table>
