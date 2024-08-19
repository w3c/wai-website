---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Un texte personnalisable"
nav_title: "Texte personnalisable"
lang: fr
last_updated: 2023-10-16    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 7

translators: 
- name: "Sofia Ahmed"
- name: "Rémi Bétin"
contributors:
- name: "Sandra Velarde Gonzalez (ETNIC)"

github:
    label: wai-perspective-videos

permalink: /perspective-videos/customizable/fr  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/customizable/  # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Courte vidéo à propos du texte personnalisable pour l’accessibilité Web – de quoi s’agit-il, qui en bénéficie, et comment mettre cela en pratique.
image: /content-images/perspective-videos/customizable.jpg

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


## Vidéo sur le texte personnalisable
{:#film.no-display}

{% include video-player-data.html
    video-id="customizable"
    yt-id="rbiI65Jcz5s"
    yt-id-ad="L4WLeVc5l5k"
%}

Les informations de cette vidéo sont disponibles sous forme de [Transcription avec description des visuels](#transcript) en bas de la page.

Qu’est-ce que du « texte personnalisable » ? {#what}
----------------------------

Certains utilisateurs ont besoin de changer la manière dont le texte est présenté pour pouvoir le lire. Notamment la taille, l’espacement, la police de caractères, la couleur, et d’autres propriétés du texte. Lorsque les utilisateurs changent ces propriétés, aucune information ou fonctionnalité ne devrait être perdue, et le texte devrait se réajuster pour éviter aux utilisateurs de devoir faire défiler le texte horizontalement pour lire les phrases. La personnalisation du texte va au-delà de la fonctionnalité de zoom, qui ne modifie que la taille du texte.  

Qui dépend de cette fonctionnalité ? {#who}
----------------------------

-   Les personnes malvoyantes qui n’utilisent pas d’agrandisseurs d’écran.
-   Les personnes avec certaines formes de dyslexie et d’autres troubles cognitifs et d’apprentissage qui ont besoin d’une présentation particulière du texte pour le lire.

Quels sont les autres bénéfices ? {#others}
---------------------------------

-   Le contenu est plus adaptable aux petites et aux grandes tailles d’écrans.
-   Le contenu est plus adaptable aux préférences et au confort personnels.
-   Le contenu est plus adaptable après traduction, étant donné que la longueur des mots et des phrases varie en fonction de la langue.

Comment mette cela en pratique ? {#action}
--------------------------------------

Le contenu doit être codé et conçu correctement pour s’adapter à différents paramètres de personnalisation. Cela inclut l’utilisation d’unités relatives plutôt que d’unités absolues pour la taille des caractères, des composants d’interface, et d’autres objets. Les applications devraient utiliser les paramètres du système d’exploitation et du navigateur Web relatifs au texte. Les sites Web et les applications pourraient également fournir des consignes pour aider les utilisateurs à modifier leurs paramètres. Les navigateurs Web et les autres outils Web doivent fournir à leurs utilisateurs une fonctionnalité de personnalisation du texte.

Plus d’informations {#resources}
----------

-   **Principe d’accessibilité :**
    -   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   **Pour démarrer :**
    -   [Créez un code qui s’adapte aux technologies des utilisateurs](/tips/developing/#write-code-that-adapts-to-the-users-technology) 
-   **Vérification facile :**
    -   [Modifiez la taille du texte](/test-evaluate/preliminary/#resize)
-   **Témoignages d’utilisateurs :**
    -   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/#retiree)
    -   [Preety, élève de collège avec un trouble du déficit de l’attention avec hyperactivité et dyslexique](/people-use-web/user-stories/#classroomstudent)
-   **Règles pour l’accessibilité des contenus Web ([Vue d’ensemble des WCAG](/standards-guidelines/wcag/)) :**
    -   [Critères de succès liés au « texte »](https://www.w3.org/WAI/WCAG21/quickref/?tags=text) 
-   **Règles pour l’accessibilité des agents utilisateurs ([Vue d’ensemble des UAGG](/standards-guidelines/uaag/)) :**
    -   [Permettez le paramétrage du texte](https://www.w3.org/TR/2015/NOTE-UAAG20-20151215/#gl-text-config) 
    -   [Réajustement du texte présenté en plusieurs colonnes](https://www.w3.org/TR/UAAG20/#sc_1813) 
    -   [Linéarisation du contenu](https://www.w3.org/TR/UAAG20/#sc_1815)
-   **Besoins utilisateurs :**
    -   [Exigences d’accessibilité pour les personnes malvoyantes](https://www.w3.org/TR/low-vision-needs/) 
    
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
      <td>L’accessibilité Web illustrée : un texte personnalisable</td>
      <td>L’accessibilité Web illustrée : <br>Un texte personnalisable</td>
    </tr>
    <tr>
      <td>Ce qui vous convient ne convient pas forcément à quelqu’un d’autre.</td>
      <td>Des tranches de pain grillé avec différentes cuissons.</td>
    </tr>
    <tr>
      <td>Toutefois, la personnalisation n’est pas qu’une question de préférence. Parfois, c’est une nécessité.</td>
      <td>Deux hommes sont assis face à un grille-pain. L’un d’eux tourne le bouton de réglage.</td>
    </tr>
    <tr>
      <td>Pouvoir ajuster le texte est crucial pour les personnes malvoyantes et dyslexiques.</td>
      <td>Une femme met ses lunettes pour consulter un site Web sur son ordinateur portable. Elle plisse les yeux pour lire le texte, qui est écrit petit et avec une police d’écriture inhabituelle. </td>
    </tr>
    <tr>
      <td>Les sites Web et les applications correctement codés permettent au texte d’être personnalisé. Par exemple, pour modifier sa taille, son espacement, sa police de caractères et ses couleurs, sans perdre en fonctionnalités et en clarté.</td>
      <td>La femme utilise les paramètres de son navigateur Web pour ajuster la taille et le style du texte. Le texte devient plus lisible et la femme est soulagée.</td>
    </tr>
    <tr>
      <td>L’accessibilité Web : essentielle pour certains, utile à tous.</td>
      <td>Retour sur les deux hommes : l’un d’eux remet une tranche de pain grillé dans le grille-pain.</td>
    </tr>
    <tr>
      <td>Allez sur w3.org/WAI/perspectives pour plus d’informations sur <em>Un texte personnalisable</em> </td>
      <td>Allez sur<br>
        w3.org/WAI/perspectives<br>
        pour plus d’informations sur<br>
        <em>Un texte personnalisable</em>.<br>
        Logo de l’Initiative pour l’accessibilité du Web du W3C</td>
    </tr>
  </tbody>
</table>
