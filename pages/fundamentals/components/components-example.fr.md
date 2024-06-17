---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Descriptions des illustrations de « Composantes essentielles de l'accessibilité du Web »
nav_title: Descriptions des illustrations
lang: fr
last_updated: 2024-03-19   # Put the date of this translation YYYY-MM-DD (with month in the middle)
parent: /fundamentals/components/ # Do not change this

translators:
  - name: "Rémi Bétin"
contributors:
  - name: "@code-elegant"

github:
  label: wai-components

permalink: /fundamentals/components/examples/fr # Add the language shortcode to the end; for example /path/to/file/fr
ref: /fundamentals/components/examples/ # Do not change this
---

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenu de la page" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

Cette page décrit les illustrations présentées dans le document [[Composantes essentielles de l’accessibilité du Web]](/fundamentals/components/) et les diapositives [Composantes essentielles de l’accessibilité du Web](https://www.w3.org/WAI/intro/components-slides).

## Description de l’illustration « Comment les composantes s’articulent » {#relate}

{% include image.html src="components/relate.fr.png" alt="" %}

Illustration comprenant des graphiques étiquetés de cadres, de contenus et de personnes. Centrés en haut, se trouvent un diagramme circulaire, une image, un formulaire et un texte, étiquetés « contenu ». En partant du bas à gauche, une ligne connecte les « développeurs » aux « outils de création » et aux « outils d'évaluation », jusqu'au « contenu » tout en haut. En partant du bas à droite, une ligne connecte les « utilisateurs » aux « navigateurs, lecteurs de média » et aux « technologies d'assistance », jusqu'au « contenu » tout en haut.

## Description de l’illustration « Quand une composante est déficiente » {#weak}

{% include image.html src="components/bridge.fr.png" alt="" %}

Illustration comprenant des graphiques étiquetés de cadres, de contenus et de personnes. Centrés en haut, se trouvent un diagramme circulaire, une image, un formulaire et un texte, étiquetés « contenu ». En partant du bas à gauche, une ligne connecte les « développeurs » au « contenu » tout en haut, en contournant les « outils de création ». En partant du bas à droite, une ligne connecte les « utilisateurs » au « contenu » tout en haut, en passant par de multiples « navigateurs, lecteurs de média » et « technologies d'assistance ».

## Description de l’illustration « Des règles pour les différentes composantes » {#guide}

{% include image.html src="components/specs.fr.png" alt="" %}

Illustration comprenant des graphiques étiquetés de cadres, de contenus et de personnes. Centrés en haut, se trouvent un diagramme circulaire, une image, un formulaire et un texte, étiquetés « contenu ». En partant du bas à gauche, une ligne connecte les « développeurs » aux « outils de création » et aux « outils d'évaluation », jusqu'au « contenu » tout en haut. En partant du bas à droite, une ligne connecte les « utilisateurs » aux « navigateurs, lecteurs de média » et aux « technologies d'assistance », jusqu'au « contenu » tout en haut. En dessous se trouvent les « règles pour l'accessibilité » qui incluent les « ATAG » avec une flèche pointant vers les « outils de création » et aux « outils d'évaluation » ; les « WCAG » qui pointent vers le « contenu » ; et les « UAAG » qui pointent vers les « navigateurs, lecteurs de média » et les « technologies d'assistance ». Tout en bas, les « spécifications techniques (HTML, ARIA, CSS, SVG, SMIL, etc.) » forment une base, avec une flèche vers le haut pointant vers les règles pour l'accessibilité.

{% comment %}

@@ commenting out - image was used in presentation that is not on new site - leaving here in case we want to resurrect it in the future. @@

## Interdependencies Between Components, Example Illustration Description {#example-alt}

{% include image.html src="components/relate-example.jpg" alt="" %}

Illustration with labeled graphics of boxes, content, and people. at the
top center "content" and underneath it is a logo and a box with:
`<img src="WAI-logo.png" alt="Web Accessibility Initiative logo">`.
coming up from the bottom left, a line connects “developers” through
“authoring tools” and “evaluation tools” to “content” at the top.
between the “developer” and “authoring tools” is a dialog box titled:
Image Tag Accessibility Attributes, a field titled: Alternative Text
filled in with: Web Accessibility Initiative logo. coming up from the
bottom right, a line connects “users” to “browsers, media players” and
“assistive technologies” to “content” at the top. just up from the
“user” is a speech bubble saying: Web Accessibility Initiative logo and
a yellow box with: Web Accessibility Initiative logo. at the bottom is:
`1.1 Provide a text equivalent for every non-text element`

{% endcomment %}