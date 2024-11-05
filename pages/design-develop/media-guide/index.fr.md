---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Rendre les médias audio et vidéo accessibles"
nav_title: "Médias audio & video"
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2024-09-17  # Keep the date of the English version

translation:
  last_updated: 2024-09-17  # Put the date of the translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Rémi Bétin"

permalink: /media/av/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/   # Do not change

github:
  label: wai-media-guide

resource:
  title: "Rendre les médias audio et vidéo accessibles"
  ref: /media/av/
navigation:
  next: /media/av/users-orgs/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Traite des sous-titres, de la description de l'information visuelle (audio-description, vidéo-description, vidéo décrite) des lecteurs de média and d'autres exigences d'accessibilités.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p>Première publication septembre 2019.</p>
   <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS liste les contributeurs et les crédits.</p>
   <p>Développé par le groupe de travail Éducation et promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Rédigé initialement dans le cadre du projet <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA</a> financé par le <abbr title="United States">U.S.</abbr> Access Board. Révisé dans le cadre du projet <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access</a> financé par la fondation Ford.</p>
---

Cette ressource explique comment rendre les médias accessibles, qu'ils soient produits en interne ou en sous-traitance. Elle aide à comprendre quels aspects de l'accessibilité sont nécessaires pour votre contenu audio ou vidéo spécifique, donne des conseils de gestion de projet et inclut des exigences des Règles pour l'accessibilité des contenus Web (WCAG).

Elle traite des sujets suivants :

* {:.left} [{% include image.html src="media-guide/body.svg" alt="" %} Expériences utilisateurs et bénéfices pour les organisations](/media/av/users-orgs/) :<br>Comprenez les besoins des personnes en situation de handicap. Apprenez-en plus sur les bénéfices pour les organisations, et les avantages pour tous dans une multitude de situations.

* {:.left} [{% include image.html src="media-guide/planning.svg" alt="" %} Planifier les médias audio et vidéo](/media/av/planning/) :<br>Planifiez la prise en compte de l'accessibilité dès le début de votre projet, pour gagner du temps et de l'argent. Par exemple, [une description intégrée](/media/av/av-content/#integrate-description) est plus simple et meilleure pour l'accessibilité et elle doit être incluse dans le script avant le tournage.

* {:.left} [{% include image.html src="media-guide/av-content.svg" alt="" %} Contenu audio et contenu vidéo](/media/av/av-content/) :<br>Rendez vos nouveaux contenus audio et vidéo accessibles. Écartez les freins à l'accessibilité lors de la planification, de la rédaction du scénario, de la création des storyboards et de l'enregistrement de votre média.

* {:.left} [{% include image.html src="media-guide/ad.svg" alt="" %} Description des informations visuelles](/media/av/description/) :<br>Fournissez une description pour que les personnes aveugles et d'autres qui ne peuvent pas voir correctement la vidéo aient accès aux informations visuelles nécessaires à la compréhension du contenu. Cela inclut les diagrammes, les graphiques et les textes comme les noms des intervenants, les titres et les adresses électroniques.

* {:.left} [{% include image.html src="media-guide/cc.svg" alt="" %} Sous-titres](/media/av/captions/) :<br>Fournissez des sous-titres pour que les personnes sourdes ou malentendantes aient accès à une version texte de l'information audio avec parole ou sans parole nécessaire à la compréhension du contenu.

* {:.left} [{% include image.html src="media-guide/transcript.svg" alt="" %} Transcriptions](/media/av/transcripts/) :<br>Fournissez une transcription, c'est-à-dire une version texte de l'information audio avec parole ou sans parole. Idéalement, réalisez une transcription descriptive qui décrit également l'information visuelle. Les transcriptions descriptives sont nécessaires pour fournir du contenu vidéo aux personnes sourdes-aveugles. ([descriptive transcript excerpt example](/media/av/transcripts/#descriptive))

* {:.left} [{% include image.html src="media-guide/sign.svg" alt="" %} Langue des signes](/media/av/sign-languages/) :<br>Fournissez une version en langue des signes quand votre public en a besoin, pour que les personnes sourdes qui s'expriment nativement en langue des signes aient accès au contenu dans leur langue natale.

* {:.left} [{% include image.html src="media-guide/player.svg" alt="" %} Lecteurs média](/media/av/player/) : <br>Utilisez un lecteur média compatible avec l'accessibilité.
{:.nolist.withicons.mini}

<br>

Un exemple de vidéo accessible est présent dans la page [Couleurs avec un bon contraste.<br>
{% include image.html src="media-guide/contrast-still.png" alt="" class="normal video" %}](/perspective-videos/contrast/)

Cette page fournit :
* du contenu audio et vidéo prenant en compte l'accessibilité, comme un arrière-plan sonore avec un faible volume
* une version de la vidéo avec une description des informations visuelles intégrée dans le flux audio principal, et une description disponible sous forme de texte
* des sous-titres
* une transcription descriptive
* un lecteur média compatible avec l'accessibilité, incluant une transcription interactive.
