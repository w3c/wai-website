---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Comment WAI élabore les standards d'accessibilité selon le processus du W3C : étapes importantes et opportunités pour contribuer"
title_html: "Comment WAI élabore les standards d'accessibilité selon le processus du W3C :<br> étapes importantes et opportunités pour contribuer"
nav_title: Processus du W3C pour élaborer les standards
lang: fr
last_updated: 2024-05-07   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Sofia Ahmed"
  - name: "Rémi Bétin"
contributors:
  - name: "Victoria Menezes Miller"
  - name: "Sandra Velarde Gonzalez (ETNIC)"

github:
  label: wai-w3c-process

permalink: /standards-guidelines/w3c-process/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/w3c-process/    # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date :</strong> Mise à jour : 2 novembre 2020. Première publication en septembre 2006.</p>
  <p><strong>Rédaction :</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Développé avec les contributions du Groupe de travail Éducation et Promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Introduction" class="full" %}
{:/}

L'Initiative pour l'accessibilité du Web (WAI) élabore les règles en matière d'accessibilité du Web, les spécifications techniques et les ressources pédagogiques dans le but de rendre le Web accessible aux personnes en situation de handicap. Ce document présente comment WAI travaille selon un processus conçu pour :

- assurer une large participation de la communauté et
- encourager le développement du [consensus](https://www.w3.org/Consortium/Process/#Consensus).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Table des matières" class="simple" %}
{:/}

{::options toc_levels="2,3" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Les standards du W3C {#standards}

Le World Wide Web Consortium (W3C) élabore les standards du Web tels que le HTML, le CSS, etc. WAI fait partie du W3C et suit le [processus du W3C](https://www.w3.org/Consortium/Process/) pour l'élaboration de ces standards du Web.

Les standards du Web du W3C sont appelés « **Recommandations du W3C** ». WAI a élaboré plusieurs recommandations du W3C, dont :

- Les _Règles pour l'accessibilité des contenus Web_, voir [Vue d'ensemble des WCAG](/standards-guidelines/wcag/)
- Les _Règles pour l'accessibilité des outils d'édition_, voir [Vue d'ensemble des ATAG](/standards-guidelines/atag/)
- Les _Règles pour l'accessibilité des agents utilisateurs_, voir [Vue d'ensemble des UAAG](/standards-guidelines/uaag/)
- Les _applications Internet riches accessibles_, voir [Vue d'ensemble de WAI-ARIA](/standards-guidelines/aria/)

**\[Les Règles pour l'accessibilité de WAI\], qui sont des \[Recommendations du W3C\], sont des
\[Standards du Web\]**

### Étapes importantes {#milestones}

**Les « Ébauches des rédacteurs » (<i lang="en">Editor's Drafts</i> en anglais)** n'ont pas de statut officiel et ne représentent pas nécessairement le consensus d'un groupe de travail ; dit autrement, l'ébauche peut contenir des propositions sur lesquelles le groupe de travail ne s'est pas mis d'accord.

Les étapes importantes par lesquelles passe un « rapport technique » du W3C pour devenir une recommandation du W3C sont énumérées ci-dessous.
{:#stages}

1. {:#wd}![Versions de travail :]({{ "/content-images/w3c-process/wd.gif" | relative_url }}){:style="float:left; margin-right: 1em; clear: left;"} **Version de travail (<i lang="en">Working Draft</i> en anglais)** : les versions de travail sont publiées et annoncées dans le but de demander un examen et une participation de la communauté. Souvent, un groupe de travail souhaite recueillir des retours sur certaines questions en particulier. Habituellement, plusieurs versions de travail d'un rapport technique sont publiées.
2. {:#lcwd}![Rapport technique complet :]({{ "/content-images/w3c-process/lcwd.gif" | relative_url }}){:style="float:left; margin-right: 1em; clear: left;"} **Version de travail pour un examen large (<i lang="en">Wide Review Working Draft</i> en anglais)** : lorsqu'un groupe de travail pense avoir traité tous les commentaires et exigences techniques, il fournit le document complet pour examen par la communauté, et annonce que le document est prêt pour un examen large.
3. {:#cr}![Utiliser un ordinateur avec un rapport technique :]({{ "/content-images/w3c-process/cr.gif" | relative_url }}){:style="float:left; margin-right: 1em; clear: left;"} **Recommandation candidate (<i lang="en">Candidate Recommendation</i> en anglais)** : L'objectif principal du statut de "Recommandation candidate" est de s'assurer que le rapport technique peut être implémenté. W3C encourage les développeurs à utiliser le rapport technique dans leurs projets. Le rapport technique est stable à cette étape ; toutefois, il pourrait être modifié en fonction des résultats de l'implémentation.
4. {:#pr}![Approuver le rapport technique :]({{ "/content-images/w3c-process/pr.gif" | relative_url }}){:style="float:left; margin-right: 1em; clear: left;"} **Proposition de recommandation (<i lang="en">Proposed Recommendation</i> en anglais)** : après des implémentations de  chaque fonctionnalité du rapport technique, W3C annonce qu'il s'agit désormais d'une « Proposition de recommandation ». À ce stade, le rapport est soumis aux membres du W3C pour être approuvé.
5. {:#rec}![approved technical report:]({{ "/content-images/w3c-process/rec.gif" | relative_url }}){:style="float:left; margin-right: 1em; clear: left;"} **Recommandation du W3C (Standard du Web)** : Une fois que le rapport technique a reçu un soutien significatif de la part des membres du W3C, du directeur du W3C et du public, il est publié en tant que « Recommandation ». W3C encourage le déploiement à grande échelle de ses « Recommandations ».

Il s'agit d'une description simplifiée du processus. Pour la version faisant autorité, consultez le [document sur le processus du W3C, section 7 : Processus de développement d'un rapport technique du W3C](https://www.w3.org/Consortium/Process/#Reports).

## Autres ressources {#other}

WAI élabore également des documents qui accompagnent les règles et qui ne suivent pas le processus décrit ci-dessus.
{:#other_docs}

- Les **« Notes des groupes de travail du W3C » (<i lang="en">W3C Working Group Notes</i> en anglais)** sont des rapports techniques consultatifs, et non des standards.
- Les **ressources de WAI** et les ressources de EOWG couvrent un large éventail de sujets en matière d'accessibilité du Web. Quelques exemples : [[Composantes essentielles de l'accessibilité du Web]](/fundamentals/components/), [[WCAG 2en bref]](/standards-guidelines/wcag/glance/), [[Vérifications simples - Une première révision de l'accessibilité Web]](/test-evaluate/preliminary/), et bien d'autres listées dans [[Ressources de WAI]](/resources/).

## Recevez les actualités de WAI pour participer au sein de la communauté {#community}

Pour recevoir les annonces de WAI concernant les « Versions de travail » prêtes pour examen par e-mail, Twitter, ou Atom/RSS feed, **consultez [[Recevoir les actualités de WAI]](/news/subscribe/)**.

Les « Recommandations du W3C » de WAI, les notes des groupe de travail et les ressources sont élaborées au sein des [groupes de travail de WAI](/about/groups/) avec la participation de la communauté. WAI encourage activement la participation de l'industrie, des associations de personnes en situation de handicap, des chercheurs en accessibilité, des gouvernements, et de toute autre personne intéressée par l'accessibilité du Web.

**[Participer aux travaux de WAI](/get-involved/)** décrit les manières dont vous pouvez contribuer aux travaux sur l'accessibilité de WAI, notamment en examinant et en commentant les règles de WAI au fur et à mesure de leur élaboration.

**Le moment opportun pour commenter est lorsque WAI annonce que les « Versions de travail » sont prêtes à être examinées**. Veuillez envoyer vos commentaires tôt dans le processus, lorsque le groupe de travail est en mesure de les ajouter dans le rapport technique. Les commentaires techniques envoyés après la période prévue pour la période d'examen large ont moins d'impact, et il est probable que le groupe de travail ne puisse pas apporter de modifications significatives vers la fin du processus. Le document décrivant le processus du W3C fournit plus d'informations sur les [Examens et les responsabilités associées](https://www.w3.org/Consortium/Process/#doc-reviews).
