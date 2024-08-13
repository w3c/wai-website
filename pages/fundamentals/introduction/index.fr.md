---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Introduction à l’accessibilité du web
lang: fr
last_updated: 2024-03-07    # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Sylvie Duchateau"
contributors:
  - name: "Rémi Bétin"

github:
  label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/fr
ref: /fundamentals/accessibility-intro/ # Do not change this

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date&nbsp;:</strong> mise à jour le 7 mars 2024. Première publication en février 2005. CHANGELOG.</p>
  <p><strong>Rédaction&nbsp;:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Réalisé par le groupe de travail Éducation et Promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Lorsqu’un site ou un outil web est bien conçu et bien codé, les personnes handicapées peuvent l’utiliser. Cependant, beaucoup de sites et d’outils développés actuellement contiennent des problèmes d’accessibilité, ce qui les rend difficiles ou impossibles à utiliser par certaines personnes.

Rendre le web accessible est un avantage pour les internautes, les entreprises et la société. Les standards du web internationaux définissent ce qui est nécessaire pour l’accessibilité.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenu de la page" class="full" %}
{:/}

<ul>
<li><a href="#context">Le contexte de l’accessibilité</a></li>
<li><a href="#what">Qu’est-ce que l’accessibilité du Web</a></li>
<li><a href="#important">L’accessibilité est importante pour les internautes, les entreprises, la société</a></li>
<li><a href="#making">Rendre le Web Accessible</a></li>
<li><a href="#evaluate">Évaluer l’accessibilité</a></li>
<li><a href="#examples">Exemples</a></li>
<li><a href="#more-info">Plus d’nformations</a></li>
</ul>

<span class="box-h box-h-simple box-h-full"> Ressource complémentaire</span><br>
{% include video-link.html title="Vidéo : introduction à l’accessibilité web et aux standards du W3C <em>(4 minutes)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/fr" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Le contexte de l’accessibilité {#context}

<blockquote class="pull">
  <p>Le pouvoir du Web est dans son universalité.<br />
    L’accès pour tous, quel que soit le handicap, est un aspect essentiel.</p>
  <footer><cite>Tim Berners-Lee, directeur du W3C et inventeur du World Wide Web</cite></footer>
</blockquote>

Le web est principalement conçu de sorte qu’il fonctionne pour tous les internautes, quel que soit leur matériel, leur logiciel, leur langue, leur localisation ou leurs capacités. Si le web répond à cet objectif, il est accessible à des personnes ayant diverses capacités auditives, motrices, visuelles et cognitives.

Ainsi, l’impact du handicap change radicalement sur le web car le web supprime les barrières de communication et d’interaction que rencontrent beaucoup de personnes dans le monde physique. Cependant, lorsqu’un site web, une application, une technologie ou un outil est mal conçu, il peut créer des barrières empêchant des personnes d’utiliser le web.

**L’accessibilité est essentielle pour les développeurs et les organismes qui veulent créer des sites et des outils web de haute qualité, et ne pas exclure des personnes de l’utilisation de leurs produits et services.**

## Qu’est-ce que l’accessibilité du web {#what}

L’accessibilité du web signifie que les sites web, les outils et les technologies sont conçus et développés de façon à ce que les personnes handicapées puissent les utiliser. Plus précisément, les personnes peuvent :

-   percevoir, comprendre, naviguer et interagir avec le web
-   contribuer sur le web

L’accessibilité du web comprend tous les handicaps affectant l’accès au  web, en particulier le handicap :

-   auditif
-   cognitif
-   neurologique
-   physique
-   de la parole
-   visuel

L’accessibilité du web bénéficie également aux personnes *sans* handicap, comme par exemple :

-   les personnes utilisant un téléphone mobile, une montre connectée, une télévision connectée, et autres périphériques ayant des petits écrans, différents modes de saisie, etc.
-   les personnes âgées dont les capacités changent avec l’âge
-   les personnes ayant un « handicap temporaire » tel qu’un bras cassé ou perdu leurs lunettes
-   les personnes ayant « une limitation situationnelle » comme  être en plein soleil ou dans un environnement où elles ne peuvent pas écouter l’audio
-   les personnes utilisant une connexion internet lente ou ayant une bande passante limitée ou onéreuse

Voir une vidéo de 7 minutes qui contient des exemples montrant comment l’accessibilité est essentielle pour les personnes handicapées et utile à tout le monde dans un grand nombre de situations, voir :<br>
{% include video-link.html title="Video Les perspectives de l’accessibilité du web  <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Plus d’informations sur ce qu’est l’accessibilité" class="simple aside" %}
{:/}

-   Pour en savoir plus sur la façon dont différents handicaps impactent l’utilisation du web et découvrir les scénarios de personnes handicapées utilisant le web, voir la ressource [[Comment les personnes handicapées utilisent le web]](/people-use-web/).
-   Pour plus d’exemples sur les avantages pour d’autres personnes, voir [[Expériences du web partagées : les barrières communes aux personnes utilisant des appareils mobiles et aux personnes handicapées]](/standards-guidelines/shared-experiences/) concernant le mobile, [Utilisées par des personnes avec ou sans handicaps](/media/av/users-orgs/#situations) concernant le multimédia, et la ressource archivée [L’accessibilité du Web bénéficie aux personnes avec et sans handicap](https://www.w3.org/WAI/business-case/archive/soc#groups).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## L’accessibilité est importante pour les internautes, les entreprises, la société {#important}

Le web est une ressource de plus en plus importante dans beaucoup d’aspects de la vie : l’éducation, l’emploi, le gouvernement, le commerce, la santé, les loisirs et plus encore. Il est essentiel que le web soit accessible afin de fournir une égalité d’accès et l’égalité des chances à des personnes avec diverses capacités. L’accès à l’information et aux technologies de communication, y compris le web, est défini comme un droit humain fondamental dans la convention des Nations Unies relative aux droits des personnes handicapées ([CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html) de l’ONU).

Le web offre la possibilité d’un accès sans précédent à l’information et l’interaction de beaucoup de personnes handicapées. C’est-à-dire que les barrières d’accessibilité de l’écrit, des média audio et visuels, peuvent être plus facilement surmontées grâce aux technologies web.

L’accessibilité supporte l’inclusion sociale des personnes handicapées ainsi que d’autres personnes comme par exemple :

-   les personnes âgées
-   les personnes résidant dans des régions rurales
-   les personnes vivant dans les pays en voie de développement

**L’accessibilité représente également un gros avantage pour les entreprises.** Comme expliqué dans la section précédente, le design accessible améliore l’expérience globale et la satisfaction de l’utilisateur, en particulier, dans une variété de situations, pour différents périphériques et pour les utilisateurs âgés. L’accessibilité peut améliorer votre marque, favoriser l’innovation et augmenter votre place sur le marché.

L’accessibilité du web est **exigée par la loi** dans beaucoup de situations.

{::nomarkdown}
{% include box.html type="start" h="3" title="Plus d’informations sur l’importance de l’accessibilité" class="simple aside" %}
{:/}

-   Des informations générales sur les avantages pour les entreprises sont disponibles dans [[l’analyse de rentabilité de l’accessibilité numérique]](/business-case/).
  - Des exemples sur les bénéfices de [rendre les médias audio et vidéo accessibles](/media/av/) sont présentés dans la section [Bénéfices pour les organisations](/media/av/users-orgs/#benefits).
-   Des conseils sur comment trouver les exigences légales sont consultables dans le document archivé [les facteurs juridiques et politiques](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Rendre le web accessible {#making}

L’accessibilité du web dépend de plusieurs composants fonctionnant ensemble, comprenant les technologies web, les navigateurs et autres « agents utilisateurs », outils d’édition et sites web.

L’Initiative pour l’accessibilité du Web, <span lang="en"> Web Accessibility Initiative</span> du W3C ([WAI](/about/participating/)) développe des spécifications techniques, des règles, des techniques et ressources d’accompagnement qui décrivent des  solutions d’accessibilité. Elles sont considérées comme des normes internationales pour l’accessibilité du web ; par exemple, <abbr lang="en" title="Web Content Accessibility Guidelines (WCAG)">WCAG</abbr> 2.0 est aussi une norme <abbr lang="en" title="International Organization for Standardization">ISO</abbr> : ISO/<abbr lang="en" title="International Electrotechnical Commission">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Plus d’informations pour rendre le web accessible" class="simple aside" %}
{:/}

-   Voir plus d’informations sur ces aspects de l’accessibilité qui fonctionnent ensemble, dans  [[les composants essentiels de l’accessibilité du web]](/fundamentals/components/).
-   Les règles pour l’accessibilité des contenus web, <span lang="en">Web Content Accessibility Guidelines</span> (WCAG), les règles pour l’accessibilité des outils d’édition, <span lang="en">Authoring Tool Accessibility Guidelines</span> (ATAG), Aria pour les applications internet riches, <span lang="en">ARIA for Accessible Rich Internet Applications</span>, et d’autres ressources importantes sont présentées dans [[vue d’ensemble des standards d’accessibilité du W3C]](/standards-guidelines/).
-   Pour en savoir plus sur la façon dont W3C WAI développe des documents, les différentes parties prenantes, la participation internationale et comment vous pouvez contribuer, voir [[À propos de la WAI]](/about/) et [[Participer à la WAI]](/about/participating/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Rendre vos sites web accessibles {#website}

Beaucoup d’aspects de l’accessibilité sont relativement faciles à comprendre et à mettre en œuvre. Certaines solutions d’accessibilité sont plus complexes et requièrent plus de connaissances pour être implémentées.

Il est plus efficace d’incorporer l’accessibilité au début d’un projet pour ne pas avoir à revenir en arrière et recommencer le travail.

{::nomarkdown}
{% include box.html type="start" h="3" title="Plus d’informations sur la façon de rendre votre site web accessible" class="simple aside" %}
{:/}

-   Pour une introduction sur les exigences d’accessibilité et les normes internationales, voir [[Les principes de l’accessibilité]](/fundamentals/accessibility-principles/).
-   Pour comprendre les barrières d’accessibilité fréquentes dans une perspective de test, voir [[Tests faciles : - première évaluation]](/test-evaluate/preliminary/).
-   Pour des considérations de base sur le design, la rédaction et le développement pour l’accessibilité, voir [[Astuces pour débuter]](/tips/).
-   Lorsque vous serez en mesure d’en savoir plus sur le développement et le design, vous pourrez probablement utiliser des ressources comme par exemple :
    -   [Comment satisfaire aux WCAG (référence rapide)](https://www.w3.org/WAI/WCAG22/quickref/)
    -   [Tutoriels sur l’accessibilité du Web](/tutorials/)
-   Pour la gestion de projets et des questions d’organisation, voir [[Planifier et gérer l’accessibilité du web]](/planning-and-managing/).<br>
    Si vous devez effectuer des réparations rapides dès maintenant, voir [[Méthodes pour une réparation provisoire]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## Évaluer l’accessibilité {#evaluate}

Lors du développement ou de la refonte d’un site web, évaluez l’accessibilité dès le début et pendant le processus de développement afin d’identifier rapidement les problèmes d’accessibilité, parce qu’il est facile de les corriger. Des mesures simples, telles que la modification des paramètres d’un navigateur, peuvent vous aider à évaluer certains aspects d’accessibilité. Une évaluation complète permettant de déterminer si un site web est conforme à toutes les règles d’accessibilité nécessite plus d’efforts.

Il existe des outils qui peuvent aider à l’évaluation. Cependant, aucun outil seul ne peut déterminer si un site est conforme aux règles d’accessibilité. L’évaluation par un humain est nécessaire pour déterminer si un site est accessible.


{::nomarkdown}
{% include box.html type="start" h="3" title="Plus d’information sur l’évaluation de l’accessibilité" class="simple aside" %}
{:/}

-   Les ressources qui peuvent aider à évaluer l’accessibilité sont décrites dans [[Évaluer l’accessibilité d’un site web]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Exemples

{% include excol.html type="middle" %}

### Alternative textuelle pour les images

![image d’un logo; balisage HTML img alt='Logo de la Web Accessibility Initiative'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Les images doivent comprendre une *[alternative textuelle équivalente](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (équivalent textuel) dans le balisage/code.

S’il n’y a pas d’alternative textuelle à une image, l’information de l’image est inaccessible, par exemple, pour les personnes qui ne voient pas et utilisent un lecteur d’écran qui lit à haute voix l’information d’une page, comprenant l’alternative textuelle de l’image visuelle.

Lorsqu’un équivalent textuel est fourni dans l’alternative textuelle, l’information est disponible pour les personnes aveugles, ainsi que celles qui désactivent les images (par exemple, dans des endroits où la bande passante est onéreuse ou lente). Elle est également disponible pour les technologies qui ne voient pas les images, comme par exemple les moteurs de recherche.

### Saisie au clavier

![sans souris](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Certaines personnes ne peuvent pas utiliser de souris, y compris les personnes âgées qui ont un contrôle limité de la motricité de précision. Un site web accessible ne dépend pas de la souris ; il rend [toutes les fonctionnalités disponibles au clavier](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible). Ainsi, les personnes handicapées peuvent utiliser [des technologies d’assistance](/planning/involving-users/#at) qui simulent le clavier, telles que la dictée vocale.

### Transcriptions de l’audio

[![exemple de transcript](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Tout comme les images qui ne sont pas disponibles pour les personnes qui ne voient pas, les fichiers audio ne sont pas disponibles pour les personnes qui n’entendent pa. L’ajout d’une transcription textuelle rend l’information audio accessible aux personnes sourdes, mal entendantes, ainsi qu’aux moteurs de recherche et autres technologies qui n’entendent pas.

Il est facile et relativement peu cher de fournir des transcriptions sur des sites web. Il existe également des [services de transcription](http://www.uiaccess.com/transcripts/transcript_services.html) qui créent des transcriptions textuelles au format HTML.

{::nomarkdown}
{% include box.html type="start" h="3" title="Plus d’exemples" class="simple aside" %}
{:/} 

-   [[Conseils pour débuter]](/tips/)
-   [[Tests faciles - première évaluation]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Perspectives de l’accessibilité du web &mdash; videos et descriptions" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Pour plus d’informations {#more-info}

W3C WAI propose un grand nombre de ressources sur les différents aspects de l’accessibilité du web [standards](/standards-guidelines/), [éducation](/teach-advocate/), [test/évaluation](/test-evaluate/), [gestion de projet et politique](/planning/). Nous vous encourageons à explorer ce site web ou à parcourir la liste des [ressources de la WAI](/resources/).

**[[Fondations de l’accessibilité numérique - Cours en ligne gratuit]](/courses/foundations-course/)** vous apporte les bases dont vous avez  besoin pour rendre votre technologie numérique accessible.
