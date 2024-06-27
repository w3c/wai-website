---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Quelques utilisateurs du Web"
order: 1
permalink: /people-use-web/user-stories/fr # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/  # Do not change this
lang: fr
description: Des personas de personnes atteintes de handicaps et utilisant le Web qui montrent l’effet des points de blocage non accessibles, et les avantages pour tous de faire des sites et des outils web accessibles.
image: /content-images/people-use-web/social.png
last_updated: 2024-03-11
translators:
- name: "Stéphane Deschamps"
contributors:
- name: "Denis Boudreau"
- name: "@code-elegant"
footer: > # Translate all the words below, including "Date:" and "Editor:". Do not change these dates.
  <p><strong>Date&#8239;:</strong> Mis à jour le 15 mai 2017.</p>
  <p><strong>Rédacteur&#8239;:</strong> <a hreflang="en" href="https://www.w3.org/People/shadi/">Shadi Abou_Zahra</a>. Rédactrice précédente&#8239;: <a hreflang="en" href="https://www.w3.org/People/Brewer/">Judy Brewer</a>. <a hreflang="en" href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">Remerciements</a>.</p>
  <p>Développé par le <i lang="en">Education and Outreach Working Group</i> (<a hreflang="en" href="http://www.w3.org/WAI/EO/">EOWG</a>). Développé précédemment avec le <a hreflang="en" href="https://www.w3.org/WAI/EO/2008/wai-age-tf">Groupe de Travail WAI-AGE</a>, avec le soutien du <a hreflang="en" href="https://www.w3.org/WAI/WAI-AGE/">Projet WAI-AGE</a>.</p>
resource:
  ref: /people-use-web/
github:
  label: wai-people-use-web
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Les histoires qui suivent mettent en lumière les effets de points d’accessibilité bloquants sur des utilisateurs du Web handicapés, ainsi que les bénéfices plus larges de sites et de services web accessibles.


**Note&#8239;:** les scénarios ci-dessous ne représentent pas de vraies personnes. Ils ne recouvrent pas toutes les situations de handicaps.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenus de cette page" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

{% include excol.html type="all" %}

Lee, client de site Web marchand, daltonien {#shopper}
---------------------------------------------------


Lee est daltonien et est confronté à de nombreuses barrières quand il fait ses achats en ligne. Il a l’un des handicaps visuels les plus courants chez les hommes&#8239;: il confond le rouge et le vert. Lee achète souvent en ligne et rencontre souvent des problèmes avec des sites web ou des applications où le contraste de couleur du texte et des images n’est pas adéquat, et où la couleur seule est utilisée pour indiquer les champs obligatoires et les tarifs promotionnels. Quand des combinaisons de rouge et de vert sont utilisées, Lee ne peut pas faire la différence entre les deux, qu’il perçoit avec une apparence brune dans les deux cas. Il lui est aussi très difficile de faire des choix de produits quand les palettes de couleurs ne portent pas d’étiquettes donnant le nom de la couleur.

Lee a une meilleure expérience des contenus en ligne et des applications qui utilisent des contrastes adéquats et qui lui permettent d’ajuster les réglages de contrastes dans son navigateur. Il est aussi mieux en mesure de reconnaître quand une information qu’il doit fournir est obligatoire si des astérisques sont présents. Lee peut identifier facilement les produits qu’il veut acheter, en particulier les vêtements, quand l’intitulé de la couleur est inclus dans les options de sélection plutôt qu’une palette de couleurs sans texte.

Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Lee, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="lee-sections" %}

### Sections liées à Lee

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**

-   [Daltonisme (Handicaps visuels)](/people-use-web/abilities-barriers/#visual)

**Outils et techniques**

-   [Polices et couleurs personnalisées (Présentation)](/people-use-web/tools-techniques/#presentation)

**Principes d’accessibilité**

-   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   [Du contenu plus facile à voir et à entendre](/fundamentals/accessibility-principles/#distinguishable)
-   [Le contenu est compatible avec les logiciels utilisateurs actuels et futurs](/fundamentals/accessibility-principles/#compatible)

{% include_cached excol.html type="end" %}

Alex, journaliste avec un trouble musculosquelettique {#reporter}
--------------------------------------------------------------

Alex est journaliste depuis plus de vingt ans et a développé un trouble musculosquelettique qui lui rend douloureux l’usage d’une souris ou la frappe au clavier sur une longue période.


Après un effort considérable de recherche qui lui a demandé beaucoup de temps et de volonté d’apprendre, il peut maintenant limiter la douleur en appliquant les modifications suivantes à son environnement de travail&#8239;:

* utilisation d’un clavier ergonomique
* utilisation de commandes au clavier sans passer par la souris
* logiciel de reconnaissance vocale sur son ordinateur et son téléphone mobile
* utilisation de l’assistance tactile de son téléphone mobile


Alex rencontre des problèmes quand des sites web et d’autres contenus en ligne ne peuvent pas être utilisés uniquement au clavier. Il est fréquemment confronté à des formulaires web qui n’ont pas d’équivalent au clavier. Parfois il lui est aussi difficile de sauter des contenus et d’atteindre des sections d’une page sans avoir recours à plusieurs commandes au clavier, ce qui est très fatigant et qui réduit la durée pendant laquelle il peut travailler confortablement. Dernièrement il a commencé à explorer l’assistance tactile sur son téléphone, qui l’aide là aussi à faire moins de gestes et à augmenter son temps de travail. L’employeur d’Alex a, à titre temporaire, créé plusieurs raccourcis sur mesure pour lui permettre d’utiliser au clavier le système de publication interne de l’entreprise&#8239;; il prévoit de fournir un support complet du clavier pour tous les utilisateurs dans la prochaine version du logiciel.

Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Alex, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="alex-sections" %}

### Sections liées à Alex

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**

-   [Trouble musculosquelettique (Handicaps physiques)](/people-use-web/abilities-barriers/#physical)

**Outils et techniques**

-   [Accélérateurs (Saisie)](/people-use-web/tools-techniques/#input)
-   [Clavier et souris alternatifs (Saisie)](/people-use-web/tools-techniques/#input)
-   [Reconnaissance vocale (Saisie)](/people-use-web/tools-techniques/#input)
-   [Écriture prédictive (Saisie)](/people-use-web/tools-techniques/#input)
-   [Navigation au clavier (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Liens d’évitement (Interaction)](/people-use-web/tools-techniques/#interaction)

**Principes d’accessibilité**

-   [Alternatives textuelles pour les contenus non textuels](/fundamentals/accessibility-principles/#alternatives)
-   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   [Des fonctionnalités disponibles au clavier](/fundamentals/accessibility-principles/#keyboard)
-   [Donner assez de temps aux utilisateurs pour lire et utiliser le contenu](/fundamentals/accessibility-principles/#time)
-   [Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont](/fundamentals/accessibility-principles/#navigable)
-   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#predictable)
-   [Les utilisateurs sont accompagnés pour éviter et corriger les erreurs](/fundamentals/accessibility-principles/#tolerant)
-   [Le contenu est compatible avec les logiciels utilisateurs actuels et futurs](/fundamentals/accessibility-principles/#compatible)

{% include_cached excol.html type="end" %}

Martine, étudiante en ligne, malentendante {#onlinestudent}
---------------------------------------------------------------------


Martine a 62 ans et est malentendante depuis la naissance. Elle peut entendre quelques sons, mais pas assez pour comprendre la parole. Dans l’enfance elle a appris la langue des signes, et pendant ses premières années d’école elle a appris la langue écrite. Elle est étudiante à nouveau&#8239;: elle suit des cours universitaires en ligne.

L’université à laquelle elle est inscrite propose des interprètes en langue des signes et de la sténotypie en temps réel (<i lang="en">Communication Access Realtime Translation</i>) qui fournit des verbatims écrits reprenant ce qui est dit dans ses cours. Cependant Martine rencontre des points bloquants quand les vidéos ou d’autres contenus média ne sont pas sous-titrés. L’université est maintenant consciente des besoins et des obligations de fournir des médias sous-titrés et des transcriptions pour les contenus audio&#8239;; elle travaille avec un fournisseur de sous-titres afin de sous-titrer tous les contenus publiés sur les sites de l’université, y compris le contenu de tous les cours fournis sur les plate-formes en ligne. En plus de donner un accès aux contenus pour les étudiants sourds et malentendants, l’université a découvert que les sous-titres et les transcriptions ont d’autres bénéfices. Les transcriptions facilitent la production de sous-titres dans plusieurs langues et aident aussi à mieux indexer les contenus en ligne. Une meilleure indexation permet une meilleure optimisation pour les moteurs de recherche et rend les contenus de l’université plus facilement trouvables. L’université suit les recommandations des <abbr>WCAG</abbr> (Recommandations d’Accessibilité des Contenus Web) pour fournir les sous-titres.

Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Martine, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="martine-sections" %}

### Sections liées à Martine

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**


-   [Malentendance (Handicaps auditifs)](/people-use-web/abilities-barriers/#auditory)

**Outils et techniques**

-   [Sous-titres (Perception)](/people-use-web/tools-techniques/#perception)
-   [Transcriptions (Perception)](/people-use-web/tools-techniques/#perception)
-   [Langue des signes (Présentation)](/people-use-web/tools-techniques/#presentation)

**Principes d’accessibilité**

-   [Alternatives textuelles pour les contenus non textuels](/fundamentals/accessibility-principles/#alternatives)
-   [Sous-titres et autres alternatives pour le multimédia](/fundamentals/accessibility-principles/#captions)
-   [Du contenu plus facile à voir et à entendre](/fundamentals/accessibility-principles/#distinguishable)
-   [Le texte est lisible et compréhensible](/fundamentals/accessibility-principles/#readable)

{% include_cached excol.html type="end" %}


Ilya, cadre supérieure, aveugle {#accountant}
---------------------------------------------

Ilya est aveugle. Elle est directrice de la comptabilité dans une compagnie d’assurance qui utilise des documents et des formulaires web sur l’intranet de l’entreprise et, comme de nombreux utilisateurs aveugles d’ordinateurs, elle ne lit pas le braille.

Ilya utilise un lecteur d’écran et un téléphone mobile pour accéder au Web. Son lecteur d’écran et les services d’accessibilité de son téléphone lui fournissent des informations sur le système, les applications, et les contenus textes dans une forme vocalisée.

Quand elle accède à des contenus web, le lecteur d’écran lui indique à voix haute les informations structurelles d’une page web comme les titres et intertitres, les en-têtes de lignes et de colonnes, les éléments de listes, les liens, les éléments de formulaires, et plus encore, qui lui permettent de mieux naviguer dans la page, de compléter et d’envoyer des formulaires, d’accéder à l’information d’une façon efficace. Elle est capable d’écouter et de comprendre une sortie audio à très grande vitesse. Ilya rencontre des problèmes quand les sites web ne sont pas codés correctement et n’incluent pas de textes alternatifs sur les images. Ces sites ne sont pas navigables et demandent beaucoup de temps pour lire tout le texte du haut en bas de la page sans indications de navigation. De temps en temps elle se retrouve coincée dans une partie d’une page web et est incapable d’en sortir pour aller consulter une autre partie&#8239;; elle doit abandonner la page définitivement.

En tant que senior dans son organisation, Ilya forme les employés à travers des outils en ligne, des applications de webinaires, de partage de documents et de présentations, ainsi que des outils de chat. Ilya et son équipe ont testé plusieurs outils avant de trouver une application efficace qui fournit une accessibilité suffisante pour une équipe diverse avec des capacités diverses.

Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Ilya, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="ilya-sections" %}

### Sections liées à Ilya

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**

-   [Cécité (Handicaps visuels)](/people-use-web/abilities-barriers/#visual)

**Outils et techniques**

-   [Lecteur d’écran (Perception)](/people-use-web/tools-techniques/#perception)
-   [Synthèse vocale (Perception)](/people-use-web/tools-techniques/#perception)
-   [Transcriptions (Perception)](/people-use-web/tools-techniques/#perception)
-   [Cohérence et prédictibilité (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Titres et intitulés explicites (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Messages d’erreur et de réussite clairs (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Navigation au clavier (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Liens d’évitement (Interaction)](/people-use-web/tools-techniques/#interaction)

**Principes d’accessibilité**

-   [Alternatives textuelles pour les contenus non textuels](/fundamentals/accessibility-principles/#alternatives)
-   [Sous-titres et autres alternatives pour le multimédia](/fundamentals/accessibility-principles/#captions)
-   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   [Du contenu plus facile à voir et à entendre](/fundamentals/accessibility-principles/#distinguishable)
-   [Des fonctionnalités disponibles au clavier](/fundamentals/accessibility-principles/#keyboard)
-   [Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont](/fundamentals/accessibility-principles/#navigable)
-   [Le texte est lisible et compréhensible](/fundamentals/accessibility-principles/#readable)
-   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#predictable)
-   [Le contenu est compatible avec les logiciels utilisateurs actuels et futurs](/fundamentals/accessibility-principles/#compatible)

{% include_cached excol.html type="end" %}

Preety, élève de collège avec un trouble du déficit de l'attention avec hyperactivité et dyslexique {#classroomstudent}
-----------------------------------------------------------------------------------------------------------

Preety est une élève de collège atteinte d’un trouble du déficit de l'attention avec hyperactivité et dyslexique. Bien qu’elle ait des difficultés marquées pour lire, elle aime particulièrement sa classe de littérature.


Le collège de Preety a commencé récemment à utiliser des cartables numériques. Preety était d’abord inquiète à l’idée d’utiliser ce nouveau format, mais avec le logiciel de synthèse vocale qui surligne le texte sur l’écran en même temps qu’il le lit, elle a découvert qu’elle peut se concentrer sur le contenu plus facilement au lieu de peiner devant chaque mot. La synthèse vocale lui est aussi utile avec les textes en ligne&#8239;; cependant l’expérience de Preety varie grandement d’un site web à l’autre. Certains sites utilisent des graphiques et des illustrations qui l’aident à se concentrer sur les sections et les contenus qu’elle souhaite lire, tandis que d’autres montrent beaucoup de publicités et de contenus qui bougent, ce qui la distrait. Elle a aussi des soucis avec les contenus en ligne où la navigation n’est pas assez claire. Elle trouve que les sites web et les applications qui fournissent plusieurs moyens de navigation, tels qu’une barre de navigation, un moteur de recherche, un fil d’Ariane, et un plan de site, sont bien plus faciles à utiliser.

Le collège de Preety utilise aussi un nouveau logiciel pour sa bibliothèque dont l’accessibilité est meilleure. Avant cela, Preety était obligé de visiter physiquement la bibliothèque et de se faire aider pour faire ses recherches et trouver le matériel. Maintenant qu’elle fait ses recherches toute seule sur son téléphone mobile, sa tablette ou son ordinateur, Preety peine encore à orthographier correctement mais a découvert que la fonction de recherche (qui fournit des orthographes alternatives et des corrections d’erreurs) est très utile et améliore grandement son expérience.

Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Preety, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="preety-sections" %}

### Sections liées à Preety

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**

-   [Trouble du déficit de l’attention avec ou sans hyperactivité, TDAH (Handicaps cognitifs)](/people-use-web/abilities-barriers/#cognitive)
-   [Dyslexie (Handicaps cognitifs)](/people-use-web/abilities-barriers/#cognitive)

**Outils et techniques**

-   [Sous-titres (Perception)](/people-use-web/tools-techniques/#perception)
-   [Lecteur d’écran (Perception)](/people-use-web/tools-techniques/#perception)
-   [Synthèse vocale (Perception)](/people-use-web/tools-techniques/#perception)
-   [Bloqueurs d’animations et de pop-ups (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Assistants à la lecture (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Outils de correction orthographique et grammaticale (Saisie)](/people-use-web/tools-techniques/#input)
-   [Cohérence et prédictibilité (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Messages d’erreur et de réussite clairs (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Recherche par mot-clé (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Mécanismes multiples de navigation (Interaction)](/people-use-web/tools-techniques/#interaction)

**Principes d’accessibilité**

-   [Alternatives textuelles pour les contenus non textuels](/fundamentals/accessibility-principles/#alternatives)
-   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   [Donner assez de temps aux utilisateurs pour lire et utiliser le contenu](/fundamentals/accessibility-principles/#time)
-   [Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont](/fundamentals/accessibility-principles/#navigable)
-   [Le texte est lisible et compréhensible](/fundamentals/accessibility-principles/#readable)
-   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#predictable)
-   [Les utilisateurs sont accompagnés pour éviter et corriger les erreurs](/fundamentals/accessibility-principles/#tolerant)
-   [Le contenu est compatible avec les logiciels utilisateurs actuels et futurs](/fundamentals/accessibility-principles/#compatible)

{% include_cached excol.html type="end" %}

Yun, retraité avec une mauvaise vue, un tremblement des mains, et une perte de mémoire à court terme {#retiree}
--------------------------------------------------------------------------------------------

Yun a 85 ans, une mauvaise vue, des mains qui tremblent, et une perte de mémoire, qui sont des problèmes assez fréquents pour quelqu’un de son âge. Yun surfe régulièrement sur le Web pour lire des sites d’information. Ces dernières années il a aussi commencé à utiliser des médias sociaux pour rester en contact avec sa famille et ses amis. Il tient son propre blog où il publie des articles sur l’histoire de l’art et d’autres sujets qu’il apprécie.

Comme de nombreuses personnes, Yun a des difficultés pour lire les textes écrits petits et pour cliquer sur de petits liens ou de petits éléments de formulaires. Sa fille lui a montré comment agrandir le texte dans son navigateur web, ce qui fonctionne bien pour de nombreux sites. Il rencontre des problèmes quand le texte ne s’affiche pas comme il faut quand on l’agrandit, et il est obligé de faire défiler la page de gauche à droite pour lire les contenus agrandis, ce qui lui fait rapidement perdre ses repères. Il a aussi des soucis avec les images de CAPTCHA qu’on trouve sur de nombreux sites de médias sociaux. Le texte est tellement déformé, même quand il l’agrandit, qu’il ne peut souvent pas saisir correctement le texte. Il a une meilleure expérience sur les sites qui utilisent des versions alternatives aux CAPTCHA, malheureusement seul un petit nombre d’entre eux en fournissent.

La fille de Yun lui a donné une souris spéciale qui est plus facile à contrôler avec son tremblement. De plus, il utilise un navigateur qui enregistre des miniatures des sites qu’il visite fréquemment, ce qui lui permet plus facilement de retrouver les sites qu’il visite souvent.

Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Yun, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="yun-sections" %}

### Sections liées à Yun

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**


-   [Malvoyance (Handicaps visuels)](/people-use-web/abilities-barriers/#visual)
-   [Tremblements et spasmes (Handicaps physiques)](/people-use-web/abilities-barriers/#physical)
-   [Déficiences de la mémoire (Handicaps cognitifs)](/people-use-web/abilities-barriers/#cognitive)

**Outils et techniques**

-   [Loupe d’écran (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Clavier et souris alternatifs (Saisie)](/people-use-web/tools-techniques/#input)
-   [Filtres de clavier et de souris (Saisie)](/people-use-web/tools-techniques/#input)
-   [Personnalisation de la souris (Saisie)](/people-use-web/tools-techniques/#input)
-   [Marque-pages et historique (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Cohérence et prédictibilité (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Titres et intitulés explicites (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Messages d’erreur et de réussite clairs (Interaction)](/people-use-web/tools-techniques/#interaction)

**Principes d’accessibilité**

-   [Alternatives textuelles pour les contenus non textuels](/fundamentals/accessibility-principles/#alternatives)
-   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   [Du contenu plus facile à voir et à entendre](/fundamentals/accessibility-principles/#distinguishable)
-   [Donner assez de temps aux utilisateurs pour lire et utiliser le contenu](/fundamentals/accessibility-principles/#time)
-   [Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont](/fundamentals/accessibility-principles/#navigable)
-   [Le texte est lisible et compréhensible](/fundamentals/accessibility-principles/#readable)
-   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#predictable)
-   [Les utilisateurs sont accompagnés pour éviter et corriger les erreurs](/fundamentals/accessibility-principles/#tolerant)
-   [Le contenu est compatible avec les logiciels utilisateurs actuels et futurs](/fundamentals/accessibility-principles/#compatible)

{% include_cached excol.html type="end" %}

Luis, assistant en supermarché, atteint du syndrome de Down {#supermarketassistant}
----------------------------------------------------------------------------

Luis a le syndrome de Down&#8239;; il a des difficultés avec les concepts abstraits, la lecture, et le calcul.

Luis travaille dans un supermarché, il ensache les courses des clients. Il fait régulièrement ses courses dans le magasin où il travaille, mais il est parfois perdu devant le grand nombre de choix de produits, et il a quelquefois des difficultés à trouver ses produits favoris quand le magasin réorganise ses rayons.

Dernièrement un ami lui a montré une application pour faire ses courses en ligne, qui fournit une navigation cohérente et facile à utiliser, avec des instructions directes et claires. Luis est capable d’ajouter dans l’application la liste des produits qu’il achète le plus souvent et de la sauvegarder pour pouvoir refaire ses courses. De plus, il aime la fonction de recherche qui fait des suggestions pour les mots mal orthographiés. L’application tient à jour une liste des articles dans son panier virtuel, ce qui l’aide à savoir combien il va dépenser.

Son ami lui a aussi montré des fonctions d’accessibilité de son téléphone mobile qu’il trouve très utiles, comme la saisie prédictive qui fournit une sélection de mots possibles sur la base des premiers caractères qu’il a tapés, et la fonction de synthèse vocale qui lui permet d’écouter les avis d’autres clients dans l’application de courses. Grâce à ces outils, Luis a commencé à publier ses propres avis sur les produits qu’il a achetés.

Luis utilise maintenant l’application de courses deux fois par mois pour retrouver les articles achetés fréquemment, et il achète régulièrement quelques produits frais dans le magasin où il travaille.

Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Luis, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="luis-sections" %}

### Sections liées à Luis

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**

-   [Syndrome de Down (Handicaps cognitifs)](/people-use-web/abilities-barriers/#cognitive)

**Outils et techniques**

-   [Texte facile à lire (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Bloqueurs d’animations et de pop-ups (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Révélation progressive (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Assistants à la lecture (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Interface réduite (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Accélérateurs (Saisie)](/people-use-web/tools-techniques/#input)
-   [Outils de correction orthographique et grammaticale (Saisie)](/people-use-web/tools-techniques/#input)
-   [Cohérence et prédictibilité (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Titres et intitulés explicites (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Messages d’erreur et de réussite clairs (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Mécanismes multiples de navigation (Interaction)](/people-use-web/tools-techniques/#interaction)

**Principes d’accessibilité**

-   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   [Donner assez de temps aux utilisateurs pour lire et utiliser le contenu](/fundamentals/accessibility-principles/#time)
-   [Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont](/fundamentals/accessibility-principles/#navigable)
-   [Le texte est lisible et compréhensible](/fundamentals/accessibility-principles/#readable)
-   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#predictable)
-   [Les utilisateurs sont accompagnés pour éviter et corriger les erreurs](/fundamentals/accessibility-principles/#tolerant)
-   [Le contenu est compatible avec les logiciels utilisateurs actuels et futurs](/fundamentals/accessibility-principles/#compatible)

{% include_cached excol.html type="end" %}

Kaseem, adolescente qui est sourde et aveugle {#teenager}
-----------------------------------------------------

Kaseem est une adolescente sourde et depuis peu légalement aveugle, ce qui signifie qu’elle ne peut voir qu’une petite partie de son écran et qu’elle ne peut lire du texte que s’il est significativement agrandi.

Kaseem utilise&#8239;:

* un logiciel de zoom écran pour agrandir le texte des sites web jusqu’à une taille lisible,
* un logiciel de synthèse vocale qui affiche le texte sur une plage braille,
* un grand écran d’ordinateur avec une grande résolution et une forte luminosité.

L’assistant électronique portable braille de Kaseem inclut un calendrier, un client mail, un navigateur web, et un outil de prise de notes. Son appareil mobile comprend un GPS qui l’aide à se repérer et à circuler en ville. Kaseem utilise le site des transports publics pour organiser ses déplacements et voir les horaires des bus, mais elle rencontre des problèmes quand elle agrandit le texte et qu’il ne se réorganise pas comme il faut, ce qui rend l’utilisation des cartes très difficile. Son expérience est meilleure avec les horaires de trains qui sont correctement balisés et permettent une réorganisation du texte. Kaseem a trouvé les informations de contact de l’équipe web sur le site des transports publics, et leur a envoyé un message pour leur expliquer les problèmes qu’elle rencontre sur leur site. Elle leur a aussi envoyé un lien vers le site web des trains en leur décrivant en quoi il fonctionne mieux pour elle. Elle a récemment reçu un message pour la remercier de ces informations et l’informer que l’équipe web des transports publics améliorera l’accessibilité du site web lors de sa prochaine version.


Pour plus d’informations sur les techniques qui permettent d’enlever des points bloquants pour Kaseem, référez-vous aux ressources suivantes&#8239;:

{% include_cached excol.html type="start" id="kaseem-sections" %}

### Sections liées à Kaseem

{% include_cached excol.html type="middle" %}

**Capacités diverses et points bloquants**

-   [Surdité-cécité (Handicaps auditifs)](/people-use-web/abilities-barriers/#auditory)
-   [Surdité-cécité (Handicaps visuels)](/people-use-web/abilities-barriers/#visual)

**Outils et techniques**

-   [Braille (Perception)](/people-use-web/tools-techniques/#perception)
-   [Afficheur braille (Perception)](/people-use-web/tools-techniques/#perception)
-   [Lecteur d’écran (Perception)](/people-use-web/tools-techniques/#perception)
-   [Synthèse vocale (Perception)](/people-use-web/tools-techniques/#perception)
-   [Transcriptions (Perception)](/people-use-web/tools-techniques/#perception)
-   [Polices et couleurs personnalisées (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Agrandissement d’écran (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Loupe d’écran (Présentation)](/people-use-web/tools-techniques/#presentation)
-   [Titres et intitulés explicites (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Messages d’erreur et de réussite clairs (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Navigation au clavier (Interaction)](/people-use-web/tools-techniques/#interaction)
-   [Liens d’évitement (Interaction)](/people-use-web/tools-techniques/#interaction)

**Principes d’accessibilité**

-   [Alternatives textuelles pour les contenus non textuels](/fundamentals/accessibility-principles/#alternatives)
-   [Sous-titres et autres alternatives pour le multimédia](/fundamentals/accessibility-principles/#captions)
-   [Du contenu qui peut être présenté de différentes façons](/fundamentals/accessibility-principles/#adaptable)
-   [Du contenu plus facile à voir et à entendre](/fundamentals/accessibility-principles/#distinguishable)
-   [Donner assez de temps aux utilisateurs pour lire et utiliser le contenu](/fundamentals/accessibility-principles/#time)
-   [Les utilisateurs peuvent facilement naviguer, trouver des contenus, et déterminer où ils sont](/fundamentals/accessibility-principles/#navigable)
-   [Le contenu apparaît et fonctionne de façon prévisible](/fundamentals/accessibility-principles/#predictable)
-   [Le contenu est compatible avec les logiciels utilisateurs actuels et futurs](/fundamentals/accessibility-principles/#compatible)

{% include_cached excol.html type="end" %}

{% include excol.html type="all" %}
