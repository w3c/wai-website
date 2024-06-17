---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "L'accessibilité mobile chez W3C"
nav_title: "Accessibilité mobile chez W3C"
lang: fr
last_updated: 2024-05-13

translators:
  - name: "Alexander Akel"
contributors:
  - name: "Rémi Bétin"

github:
  label: wai-mobile

permalink: /standards-guidelines/mobile/fr    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/mobile/  # Do not change this

changelog: /standards-guidelines/mobile/changelog/  # Do not change this
feedbackmail: wai@w3.org

# In the footer below:
# Do not translate or change CHANGELOG.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>Date :</strong> Mise à jour : 13 mai 2024. Première publication : janvier 2008. CHANGELOG.</p>
  <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Contributeur : <a href="https://www.w3.org/People/Brewer/">Judy Brewer</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

- **L'accessibilité mobile est traitée dans les standards/règlements existants W3C WAI**. Il n'y a pas de règles séparées spécifiques à l'accessibilité mobile.
- W3C est en train de mettre à jour les exigences et conseils spécifiques à l'accessibilité mobile.
- **Les efforts de [l'équipe de travail sur l’accessibilité mobile](https://www.w3.org/WAI/GL/mobile-a11y-tf/) de WAI se portent entre autres sur :**
  - [Accessibilité mobile : Comment les WCAG 2.0 et les autres règles de W3C/WAI s'appliquent au mobile](https://www.w3.org/TR/mobile-accessibility-mapping/)
  - Les critères de succès et les techniques des WCAG 2
  - Intégrer l'accessibilité mobile dans les standards W3C de demain

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Table des matières" %}
{:/}

- TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Plus que "Mobile" {#intro}

"L'accessibilité mobile" fait référence au travail visant à rendre les sites web et applications plus accessibles aux personnes en situation de handicap lorsqu'elles utilisent des téléphones mobiles et d'autres appareils. Le travail de WAI dans ce domaine traite des problèmes d'accessibilité pour les personnes utilisant une large gamme d'appareils pour interagir avec le Web, incluant :

- les téléphones et tablettes
- les télévisions numériques
- les objets personnels connectés tels que les montres connectées
- les appareils intégrés aux tableaux de bord de voitures ou aux dossiers de sièges d'avion
- les appareils dans l'électroménager
- d'autres appareils de l'"Internet des objets"

Cela couvre une grande étendue de problèmes concernant :

- les écrans tactiles
- les écrans de petite taille
- les modes de saisie variés, incluant la voix et la technologie <i>"3D Touch"</i> activée par des capteurs de pression
- l’utilisation d’appareils dans des situations différentes, par exemple en plein soleil
- et bien d'autres

## W3C WAI aborde l'accessibilité mobile {#covered}

**Les standards d'accessibilité formulés par WAI traitent de l'accessibilité mobile** :

- **Les Règles pour l'accessibilité des contenus Web** ([WCAG](/standards-guidelines/wcag/)) traitent des pages et applications Web, incluant le contenu à destination des appareils mobiles.
  - Pour apprendre comment les WCAG 2 peuvent être appliquées au contenu web pour mobile, aux applications Web pour mobile, aux applications natives et aux applications hybrides utilisant des composantes Web au sein d'applications natives, voir [Accessibilité mobile : Comment les WCAG 2.0 et autres règlements W3C WAI s'appliquent au mobile](https://www.w3.org/TR/mobile-accessibility-mapping/).
  - Une ressource plus générale qui inclut également les applications mobiles : [WCAG2ICT : Appliquer les WCAG 2 aux technologies de l’information et de la communication « non-web »](/standards-guidelines/wcag/non-web-ict/).
  - De nouvelles exigences ("critères de succès") traitant de l'accessibilité mobile ont été ajoutées aux WCAG 2.1 et WCAG 2.2. Elles sont présentées dans : [[Nouveautés dans les WCAG 2.1]](/standards-guidelines/wcag/new-in-21/) et [[Nouveautés dans les WCAG 2.2]](/standards-guidelines/wcag/new-in-22/).
- **Les Règles pour l'accessibilité des "agents utilisateurs"** ([UAAG](/standards-guidelines/uaag/)) traitent des navigateurs Web ainsi que d'autres agents utilisateurs, y compris les navigateurs sur appareils mobiles.
  - Pour des exemples sur la manière dont des navigateurs web respectant les UAAG bénéficient aux personnes en situation de handicap qui utilisent le Web sur des appareils mobiles, consultez [Exemples d'accessibilité mobile dans le contexte des UAAG](https://www.w3.org/TR/IMPLEMENTING-UAAG20/mobile).
  - Pour ceux qui souhaitent comprendre plus en détail les problèmes rencontrés, voir [Appliquer les UAAG aux téléphones mobiles](https://www.w3.org/WAI/UA/work/wiki/Applying_UAAG_to_Mobile_Phones).
- **Les Règles pour l'accessibilité des outils d'édition** ([ATAG](/standards-guidelines/atag/)) traitent des logiciels utilisés pour créer des pages Web et applications, y compris sur mobile.
- **[WAI-ARIA](/standards-guidelines/aria/)** (Applications Internet Riches et Accessibles) décrit la façon de rendre le contenu Web plus accessible, en particulier pour les contenus dynamiques et les composants d'interface utilisateur. Cela s'applique aux applications Web et à l'accès de sites Web avec des appareils mobiles.

**W3C aborde l'accessibilité mobile.** WAI s'assure que les technologies centrales de W3C prennent en charge l'accessibilité, y compris celles qui sont essentielles pour le Web mobile. L'ensemble du travail effectué par W3C est examiné par le [groupe de travail Architectures de plateforme accessible (APA)](https://www.w3.org/WAI/APA/).

Le travail rendu par W3C sur le mobile comprend [les meilleures pratiques pour les applications Web mobiles](https://www.w3.org/TR/mwabp/) et [les meilleures pratiques pour le Web mobile](https://www.w3.org/TR/mobile-bp/). Pour un résumé des technologies développées au sein de W3C qui augmentent les capacités des applications web et comment elles s'appliquent spécifiquement dans un contexte mobile, voir les [Standards pour applications web sur mobile](https://www.w3.org/Mobile/mobile-web-app-state/).

## Recevoir nos mises à jour {#updates}

Si vous souhaitez recevoir des notifications sur l'avancement de notre travail concernant l'accessibilité mobile chez W3C WAI, consultez [Suivre les actualités de WAI](/news/subscribe/).

## Engagez-vous {#involved}

Des informations générales sont disponibles sur la page [[Participer au sein de WAI]](/about/participating/).

Most of WAI's work related to mobile accessibility is through the [Mobile Accessibility Task Force](https://www.w3.org/WAI/GL/mobile-a11y-tf/). If you would like to be more involved in WAI's work on mobile accessibility, please send an e-mail with information about your interests and time availability to the Task Force facilitator [Jan Jaap de Groot](mailto:janjaap@abra.nl?cc=wai@w3.org,ran@w3.org,kevin@w3.org&subject=Mobile%20Accessibility%20Task%20Force%20Enquiry) with CC to WAI Staff (wai@w3.org).

La plupart du travail de WAI effectué au sujet de l'accessibilité mobile est réalisé par [l'équipe de travail sur l’accessibilité mobile](https://www.w3.org/WAI/GL/mobile-a11y-tf/). Si vous souhaitez vous engager dans le travail mené par WAI sur l’accessibilité mobile, veuillez envoyer un e-mail soulignant vos intérêts et votre disponibilité au facilitateur de l'équipe de travail [Jan Jaap de Groot](mailto:janjaap@abra.nl?cc=wai@w3.org,ran@w3.org,kevin@w3.org&subject=Mobile%20Accessibility%20Task%20Force%20Enquiry) avec copie au personnel de WAI (wai@w3.org).

## À propos de W3C et WAI {#about}

Le Consortium Web (W3C) est un consortium international où travaillent conjointement les organisations membres, une équipe à plein temps et le public afin de développer des standards du Web. W3C poursuit sa mission principale : la création de standards et règlements du web pour assurer la croissance à long terme du Web. Pour en savoir plus, voir [À propos de W3C](https://www.w3.org/about/).

L'Initiative pour l'accessibilité du Web (WAI) de W3C réunit des individus et organisations des quatre coins du globe pour développer des stratégies, des règles et des ressources pour aider à rendre le Web accessible aux personnes en situation de handicap. Pour en savoir plus, consultez le [site de WAI](https://www.w3.org/WAI/).
