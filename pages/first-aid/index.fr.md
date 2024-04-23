---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Premiers secours de l'accessibilité Web : stratégies de réparations provisoires"
title_html: "Premiers secours de l'accessibilité Web&nbsp;:<br />stratégies de réparations provisoires"
nav_title: des solutions provisoires
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2023-10-18   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
    - name: "Sofia Ahmed"
contributors:
    - name: "Sandra Velarde Velazquez (ETNIC)"
    - name: "Rémi Bétin"

github:
  repository: w3c/wai-website
  path: pages/first-aid/index.fr.md    # Add the language shortcode to the middle of the filename, for example: content/index.fr.md
  label: wai-first-aid

permalink: /planning/interim-repairs/fr   # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /planning/interim-repairs/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:", "Editor:" and "Previous contributors:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p><strong>Date :</strong> Mise à jour le 9 janvier 2019. Première publication en mars 2006.<br>Historique : précédemment intitulé "Améliorations à court terme de l'accessibilité de votre site Web" et "Améliorer l'accessibilité de votre site Web".</p>
  <p><strong>Rédacteur : </strong><a href="https://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>. Rédacteurs précédents : <a href="https://www.w3.org/People/kevin">Kevin White</a> et <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.  Contributeurs précédents : Sharron Rush, Anna Belle Leiserson, Judy Brewer, et les <a href="https://www.w3.org/groups/wg/eowg/participants/">participants au groupe de travail Éducation et Promotion (<abbr lang="en" title="Education and Outreach Working Group">EOWG</abbr>)</a>.</p>
  <p>Développé par le groupe de travail Éducation et Promotion (<a href="http://www.w3.org/WAI/EO/"><abbr>EOWG</abbr></a>). Initialement développé avec le soutien du projet <a href="https://www.w3.org/WAI/TIES/"><abbr lang="en" title="Web Accessibility Initiative: Training, Implementation, Education, Support">WAI-TIES</abbr></a>, mis à jour par la suite avec le soutien du projet <a href="https://www.w3.org/WAI/ACT/"><abbr lang="en" title="Web Accessibility Initiative - Cooperation Framework for Guidance on Advanced Technologies, Evaluation Methodologies, and Research Agenda Setting to Support eAccessibility">WAI-ACT</abbr></a>, puis du projet <a href="https://www.w3.org/WAI/DEV/"><abbr>WAI-DEV</abbr></a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Vous avez besoin de prendre en compte urgemment l'accessibilité dans un projet Web en cours ?
Cette page fournit un bref aperçu et des conseils pour vous aider à répondre aux problèmes les plus critiques.
Retrouvez une approche plus détaillée de prise en compte de l'accessibilité dans tout le processus de conception et de développement sur [Planifier et gérer l'accessibilité Web](/planning-and-managing/).

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


Ressources essentielles pour les designers et les développeurs {#resources}
------------------------------------------

-   [[Conseils pour démarrer]](/tips/)&nbsp;— Considérations d'ordre pratique, illustrées par des exemples, pour la conception, la rédaction et le développement de contenus Web accessibles.
-   [[Tutoriels pour l'accessibilité Web]](/tutorials/)&nbsp;—
    Informations détaillées sur des thèmes spécifiques, et conseils pour répondre aux exigences d'accessibilité.
-   [Comment répondre aux exigences des WCAG (aide-mémoire)](https://www.w3.org/WAI/WCAG22/quickref/) — Un aide-mémoire personnalisable des Règles pour l’accessibilité des contenus Web (WCAG)&nbsp;2.

Qu'est-ce que l'accessibilité&nbsp;? {#understand}
----------------------

Si vous êtes novice en matière d'accessibilité, il est souvent utile de commencer par bien comprendre les bases de l'accessibilité&nbsp;:

-   [[Introduction à l'accessibilité Web]](/fundamentals/accessibility-intro/)&nbsp;— Introduit les concepts essentiels et les fondements de l'accessibilité&nbsp;; ainsi que des ressources.
-   [L'accessibilité Web illustrée](/perspective-videos/)&nbsp;— Courtes vidéos non techniques introduisant des fonctionnalités d'accessibilité et leurs bénéfices pour tous.

### Contexte supplémentaire {#background}

Pour une approche plus approfondie&nbsp;:

-   [[Comment les personnes en situation de handicap utilisent le Web]](/people-use-web/)&nbsp;— Introduit des expériences d'utilisateurs, et la terminologie en matière d'accessibilité et de handicap.
-   [[Principes d'accessibilité]](/fundamentals/accessibility-principles/)&nbsp;— Introduit les exigences d'accessibilité définies par les règles W3C.

Identifier les problèmes {#explore}
-------------------

Si vous avez déjà détecté les problèmes d'accessibilité, vous pouvez passer cette section. Si vous avez besoin d'identifier des problèmes potentiels, ces ressources peuvent vous aider&nbsp;:

-   [[Vérifications simples — Un premier bilan de l'accessibilité Web]](/test-evaluate/preliminary/)&nbsp;—
    Vérifications simples pouvant être menées par tous, quelles que soient vos compétences techniques et vos connaissances en matière d'accessibilité.
-   [Liste d'outils d'évaluation de l'accessibilité Web](https://www.w3.org/WAI/ER/tools/)&nbsp;— Liste personnalisable qui vous permet de rechercher différents types d'outils.

### Analyse détaillée {#comprehensive}

Pour une évaluation approfondie&nbsp;:

-   [Méthodologie pour l'évaluation de la conformité à l'accessibilité d'un site Web (WCAG-EM)](/test-evaluate/conformance/wcag-em/)&nbsp;— Fournit une approche structurée pour aider à évaluer l'accessibilité des sites Web.
-   [Outil de rapport WCAG-EM](https://www.w3.org/WAI/eval/report-tool/)&nbsp;—
    Outil en ligne gratuit qui vous aide à créer des rapports d'évaluation suivant la procédure WCAG-EM.

Soyez attentif au périmètre {#scope}
------------------

Vous pourriez ne pas réussir à aborder en une fois tous les problèmes sur chaque partie de votre site Web. Pour déterminer quelles parties vous souhaitez améliorer tout de suite, et lesquelles vous traiterez plus tard, pensez à prioriser&nbsp;:

-   Les **tâches essentielles**, telles que les processus d'inscription, de recherche, d'envoi ou de paiement. Incluez toutes les étapes nécessaires pour finaliser chaque tâche.
-   Le **contenu essentiel**, tel que le contenu fréquemment consulté, et le contenu pertinent pour les personnes en situation de handicap.
-   Le **contenu signalé**, qui contient des obstacles à l'accessibilité connus&nbsp;; par exemple, grâce aux commentaires d'utilisateurs soumis via le formulaire de contact du site Web.
-   Le **contenu en cours de développement**, tel que les parties du site Web en cours de refonte&nbsp;; pour éviter la création de nouveaux obstacles.

Au sein de votre périmètre de réparations, pensez à prioriser les solutions à apporter en vous concentrant sur&nbsp;:

-   Les **réparations à fort impact**
    -   Elles concernent plusieurs pages Web, telles que les barres de navigation
    -   Elles concernent des pages Web fréquemment consultées, telles que la page d'accueil
    -   Elles sont essentielles pour finaliser des processus, tels que les formulaires de commande
    -   Elles sont en lien avec des problèmes de niveau A des Règles pour l'accessibilité des contenus Web (WCAG)
-   Les **réparations qui demandent peu d'efforts**
    -   Elles demandent moins de temps, moins de compétences ou sont moins coûteuses
    -   Elles nécessitent moins de temps d'évaluation et de validation

Fixer un niveau d'accessibilité à atteindre {#target}
-----------------------------------

L'objectif généralement accepté en matière d'accessibilité est le niveau AA de la dernière version des [Règles pour l'accessibilité des contenus Web (WCAG)](/standards-guidelines/wcag/). C'est peut-être déjà le standard spécifié dans la politique de votre organisation ou une obligation légale pour votre site Web.

Vous pourriez devoir définir une approche par étapes avec différentes dates pour différents niveaux. Par exemple, satisfaire à certains critères de succès des WCAG pour la prochaine publication, et satisfaire à tous les critères de succès aux [niveaux A et AA](https://www.w3.org/WAI/WCAG22/quickref/?currentsidebar=%23col_customize&levels=aaa) pour la publication suivante.

Notez que dans certains cas, il est relativement facile de satisfaire à certains critères de succès de niveau AAA. Par exemple, il peut être facile de travailler d'un même mouvement, lors de la révision du contenu, sur l'usage de textes de liens appropriés (2.4.4, niveau A) et sur la structure des en-têtes de section (2.4.10, niveau AAA).

Conseils pour des réparations efficaces {#repair}
-------------------------

-   **Exploitez les différentes compétences au sein de votre équipe** — Bien que de nombreuses tâches seront confiées aux développeurs, d'autres intervenants peuvent contribuer de diverses manières. Par exemple, les designers peuvent sélectionner des meilleures couleurs et les auteurs du contenu peuvent améliorer la formulation des liens, des en-têtes de section et des équivalents textuels. La ressource [[Utiliser l'expertise combinée pour évaluer l'accessibilité Web]](/test-evaluate/combined-expertise/) pourrait vous être utile.
-   **Communiquez les exigences à votre équipe** — Veillez à ce que toutes les personnes contribuant aux solutions apportées comprennent les fondements de l'accessibilité Web et les exigences spécifiques auxquelles elles doivent satisfaire. Distribuez les [ressources importantes](#resources) aux membres concernés au sein de votre équipe.
-   **Validez les solutions le plus tôt possible** — Veillez à ce que chaque solution réponde de manière adéquate aux problèmes soulevés pour éviter d'implémenter des changements qui ne fonctionneront pas dans la pratique. Dans la mesure du possible, il est important d'inclure des personnes en situation de handicap lors de cette phase de validation. Les ressources concernant l'[inclusion des utilisateurs dans les projets Web](/planning/involving-users/) et l'[évaluation avec les utilisateurs](/test-evaluate/involving-users/) fournissent davantage de contexte.
-   **Optimisez vos outils** — Explorez et configurez les paramètres d'accessibilité des outils d'édition que vous utilisez pour créer du contenu Web, tel que votre système de gestion de contenu (CMS). Les ressources relatives à la
    [sélection des outils d'évaluation](/test-evaluate/tools/selecting/) et la [sélection des outils d'édition](https://www.w3.org/WAI/impl/software) pourraient vous être utile.

À plus long terme : planifier et gérer {#plan}
----------------------------------

Une fois que vous avez traité les problèmes d'accessibilité les plus critiques au sein de votre projet Web, il est essentiel que vous planifiiez l'intégration de l'accessibilité tout au long de vos processus de conception et de développement futurs. Le guide pour [planifier et gérer l'accessibilité Web](/planning-and-managing/) peut vous aider à mettre en place ce plan.
