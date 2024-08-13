---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Notifications et retours d’information"
nav_title: "Notifications et retours d’information"
lang: fr
last_updated: 2023-10-16    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 10

translators: 
- name: "Sofia Ahmed"
- name: "Rémi Bétin"
contributors:
- name: "Sandra Velarde Gonzalez (ETNIC)"

github:
    label: wai-perspective-videos

permalink: /perspective-videos/notifications/fr # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/notifications/ # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Courte vidéo à propos des notifications et du feedback de vidéos pour l’accessibilité Web - de quoi s’agit-il, qui en bénéficie, et comment mettre cela en pratique.
image: /content-images/perspective-videos/notifications.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Statut :</strong> Mise à jour : 23 janvier 2019.<br>
    <strong>Rédacteur et chef du projet :</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Développé par l’ <a href="https://www.w3.org/WAI/EO/">Groupe de travail Éducation et Promotion</a> avec le soutien du projet <a href="https://www.w3.org/WAI/DEV/">WAI-DEV</a>, co-financé par la Commission européenne (CE). Mis à jour avec le soutien de la Fondation Ford. ACKNOWLEDGEMENTS.</p>
---

L’accessibilité Web est essentielle pour les personnes en situation de handicap et utile à tous. Découvrez les effets de l’accessibilité et les bénéfices pour tous dans diverses situations.

## Vidéo sur les notifications et le retour d’information
{:#film.no-display}

{% include video-player-data.html
    video-id="notifications"
    yt-id="E1fEv4Vpexg"
    yt-id-ad="jtteu0ilDXk"
%}

Les informations de cette vidéo sont disponibles sous forme de [Transcription avec description des visuels](#transcript) en bas de la page.

Qu’est-ce que des « notifications et retours d’information » ? {#what}
-------------------------------------

Les utilisateurs ont besoin de savoir ce qu’il se passe, et de recevoir un retour d’information approprié lors de l’interaction. Par exemple, les utilisateurs ont besoin de messages de confirmation quand les actions sont terminées ; par exemple, lorsqu’un formulaire est soumis. De plus, les messages d’erreur doivent fournir des instructions claires plutôt que créer de la confusion chez les utilisateurs.

Qui dépend de cette fonctionnalité ? {#who}
----------------------------

-   Les personnes avec des troubles cognitifs et d’apprentissage, qui peuvent être facilement perdues par un comportement inattendu et des messages d’erreur peu clairs.
-   Les personnes malvoyantes ou aveugles, qui comptent sur les notifications, les instructions, et les messages d’erreur pour comprendre le contexte et les interactions.

Quels sont les autres bénéfices ? {#others}
---------------------------------

-   Le contenu est plus utilisable pour les personnes qui ne connaissent pas le site Web ou l’application en question.
-   Le contenu est plus utilisable pour les personnes qui ne sont pas à l’aise avec les ordinateurs et le Web.
-   Le contenu est moins déroutant et intimidant pour tous, indépendamment des compétences.

Comment mettre cela en pratique ? {#action}
--------------------------------------

Utilisez un langage clair et simple pour que les messages d’erreur soient plus compréhensibles. Par exemple, décrivez comment corriger l’erreur. Lorsque les formulaires sont soumis, fournissez un message de confirmation. Lorsqu’un changement apparaît à l’écran, comme l’ajout d’un nouveau contenu, prévenez les utilisateurs de ce changement.

Plus d’informations {#resources}
----------

-   **Principe d’accessibilité :**
    -   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#predictable)
    -   [Les utilisateurs sont accompagnés pour éviter et corriger les erreurs](/fundamentals/accessibility-principles/#tolerant)
-   **Pour démarrer :**
    -   [Fournissez des instructions claires](/tips/writing/#provide-clear-instructions) 
    -   [Aider les utilisateurs à éviter et corriger les erreurs](/tips/developing/#help-users-avoid-and-correct-mistakes)
-   **Vérification facile :**
    -   [Formulaires, étiquettes, et erreurs (incluant les champs de recherche)](/test-evaluate/preliminary/#forms) 
-   **Témoignages d’utilisateurs :**
    -   [Preety, collégienne atteinte d’un trouble du déficit de l’attention avec hyperactivité et dyslexie](/people-use-web/user-stories/#classroomstudent)
    -   [Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme](/people-use-web/user-stories/#retiree)
    -   [Luis, assistant en supermarché, atteint du syndrome de Down](/people-use-web/user-stories/#supermarketassistant)
-   **Règles d’accessibilité pour les contenus Web ([Vue d’ensemble des WCAG](/standards-guidelines/wcag/)) :**
    -   [Critères de succès liés aux « erreurs »](https://www.w3.org/WAI/WCAG21/quickref/?tags=errors) 
-   **Tutoriel :**
    -   [Formulaires – Tutoriels sur l’accessibilité Web](/tutorials/) 

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
      <td>L’accessibilité Web illustrée : des notifications et retour d’information</td>
      <td>L’accessibilité Web illustrée :<br>
        Des notifications et retours d’information</td>
    </tr>
    <tr>
      <td>Tous les bons mécanismes peuvent être en mouvement. Les aiguilles peuvent être exactement là où elles doivent être.</td>
      <td>Les aiguilles d’une pendule à coucou atteignent le chiffre douze…</td>
    </tr>
    <tr>
      <td>Mais si vous ne recevez pas la réponse attendue, vous finirez par vous demander s’il y a un problème.<br></td>
      <td>… mais le coucou ne surgit pas pour signaler l’heure.</td>
    </tr>
    <tr>
      <td>Il en est de même pour le Web.<br>
        Sans des notifications et un retour d’information clairs, les gens sont vite désorientés et perdus.<br></td>
      <td>Un homme complète et soumet un formulaire sur un site Web puis son écran devient blanc, sans confirmation de sa soumission. Il semble perdu.</td>
    </tr>
    <tr>
      <td>En particulier avec les messages d’erreur, qui sont souvent complexes et déroutants.<br></td>
      <td>Un autre homme reçoit un message d’erreur technique de la part du formulaire d’inscription d’un site Web. Il lit :« Erreur ead#234532 données invalides ».</td>
    </tr>
    <tr>
      <td>Pourtant, les rendre compréhensibles est généralement simple.<br></td>
      <td>Le message d’erreur change et indique : « Format invalide, le format requis est “jour/mois/année” ».</td>
    </tr>
    <tr>
      <td>Créer des sites Web et des applications prévisibles et compréhensibles les rend accessibles aux personnes avec des troubles cognitifs et d’apprentissage…<br></td>
      <td>Une femme essaie de se connecter au Wi-Fi dans un café et reçoit un message d’erreur énigmatique.</td>
    </tr>
    <tr>
      <td>… et plus utilisable pour tous.<br></td>
      <td>D’autres personnes dans le café semblent rencontrer le même problème.</td>
    </tr>
    <tr>
      <td>En particulier les personnes moins à l’aise avec les ordinateurs.<br></td>
      <td>Le message d’erreur devient plus compréhensible. La femme du café semble soulagée.</td>
    </tr>
    <tr>
      <td>L’accessibilité Web : essentielle pour certains, utile à tous.</td>
      <td>Le coucou surgit de l’horloge.</td>
    </tr>
    <tr>
      <td>Allez sur w3.org/WAI/perspectives pour plus d’informations sur <em>« Des notifications et retours d’information »</em></td>
      <td>Allez sur<br>
        w3.org/WAI/perspectives<br>
        pour plus d’informations sur<br>
        <em>« Des notifications et retours d’information »</em>.<br>
        Logo d’Initiative pour l’accessibilité du Web du W3C</td>
    </tr>
  </tbody>
</table>
