---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Développer pour l’accessibilité Web – Conseils pour démarrer"
title_html: "Développer pour l’accessibilité Web"
nav_title: Conseils pour le développement
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2023-10-10   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/

navigation:
  previous: /tips/designing/

translators:
  - name: "Sofia Ahmed"
contributors:
  - name: "Sandra Velarde Gonzalez (ETNIC)"
  - name: "Rémi Bétin"

github:
  label: wai-tips

permalink: /tips/developing/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/developing/  # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#developing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date :</strong> Mise à jour mineure : 9 janvier 2019. Mise à jour : 15 avril 2016. Première publication en septembre 2015.</p>
  <p><strong>Rédaction :</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, et <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS.</p>
  <p>Développé par le <a href="https://www.w3.org/WAI/EO/">Groupe de travail Éducation et promotion (EOWG)</a>.
  Développé avec le soutien du <a href="https://www.w3.org/WAI/DEV/">projet WAI-DEV</a>, co-financé par le programme <abbr title="Technologies de la Société de l’information">IST</abbr> de la Commission européenne.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page présente quelques considérations de base pour vous aider dans le développement de contenus Web plus accessibles aux personnes en situation de handicap. Ces conseils sont de bonnes pratiques pour vous aider à satisfaire aux exigences des Règles pour l’accessibilité des contenus Web (WCAG). Suivez les liens vers les recommandations WCAG correspondantes, du contexte détaillée dans les documents « Comprendre », des instructions dans les tutoriels, des témoignages d’utilisateurs, et plus encore.

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


## Associez une étiquette à chaque composant d’interface de formulaire

Utilisez un attribut `for` sur l’élément `<label>` correspondant à l’attribut `id` de l’élément de formulaire, ou utilisez des attributs <abbr lang="en" title="Accessible Rich Internet Applications">WAI-ARIA</abbr>. Dans certaines situations particulières, il peut être acceptable de masquer visuellement les éléments `<label>`&nbsp;; mais la plupart du temps, les étiquettes sont nécessaires pour permettre à tous les lecteurs de comprendre la saisie requise.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : utiliser les attributs <code>for</code> et <code>id</code>" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendu</figcaption>
<label for="username">Nom d’utilisateur</label>
<input id="username" type="text" name="username">
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Extrait de code</figcaption>
{:/}

~~~html
<label for="username">Nom d’utilisateur</label>
<input id="username" type="text" name="username">
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Étiquettes et instructions 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Comprendre 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
* **Tutoriel**
  * [Commandes des étiquettes](/tutorials/forms/labels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Incluez des équivalents textuels pour les images

Veillez à ce qu’un équivalent textuel pour les images soit ajouté à toutes les images fonctionnelles et informatives. Utilisez un équivalent textuel vide `alt=""` pour les images décoratives, ou incluez-les dans les CSS. Les équivalents textuels sont généralement fournis par les auteurs du contenu écrit.

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Contenu non textuel 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Comprendre 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Tutoriel**
  * [Images](/tutorials/images/)
* **Témoignage d’utilisateur**
  * [Importance des équivalents textuels pour un utilisateur aveugle](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Identifiez la langue de la page et les changements de lange

Indiquez la langue principale de chaque page en utilisant l’attribut `lang` dans la balise `html`, par exemple `<html lang="fr">`. Utilisez l’attribut `lang` sur des éléments spécifiques lorsque la langue de l’élément diffère du reste de la page.

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Langue de la page 3.1.1](/WAI/WCAG21/quickref/#language-of-page) ([Comprendre 3.1.1](/WAI/WCAG21/Understanding/language-of-page))
  * [Langue d’un passage 3.1.2](/WAI/WCAG21/quickref/#language-of-parts) ([Comprendre 3.1.2](/WAI/WCAG21/Understanding/language-of-parts))
* **Guide pratique**
  * [Déclarer la langue en HTML](/International/questions/qa-html-language-declarations)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Utilisez le balisage pour fournir du sens et de la structure

Utilisez le balisage approprié pour les en-têtes, les listes, les tableaux, etc. Le HTML5 fournit des éléments supplémentaires, tels `<nav>` et `<aside>`, pour mieux structurer votre contenu. Les attributs role <abbr>WAI-ARIA</abbr> peuvent contribuer à donner plus de sens&nbsp;; par exemple, en utilisant l’attribut `role="search"` pour identifier une fonctionnalité de recherche. Travaillez avec les designers et les auteurs des contenus pour vous accorder sur les significations et les utiliser de manière cohérente par la suite.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : utiliser l’HTML pour fournir une structure et du sens" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendu</figcaption>
<section>
  <article>
    <h2>Superours à la rescousse</h2>
    <time datetime="2015-08-07">7 août 2015</time>
    <p>Superours, l’ours favori de la ville, a encore une fois prouvé son courage en secourant un chaton coincé dans un arbre. Les témoins de la scène racontent que les efforts de Superours n’ont pas été appréciés par le félin, qui a infligé quelques petits coups de griffes à son sauveteur.</p>
    <aside>
      <h3>Articles connexes</h3>
      <ul>
        <li><a href="#">Superours reçoit les clés de la ville</a></li>
        <li><a href="#">Superours se présente comme maire</a></li>
      </ul>
    </aside>
  </article>
</section>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Extrait de code</figcaption>
{:/}

~~~html
<section>
  <article>
    <h2>Superours à la rescousse</h2>
    <time datetime="2015-08-07">7 août 2015</time>
    <p>Superours, l’ours favori de la ville, a encore une fois prouvé son courage en secourant un chaton coincé dans un arbre. Les témoins de la scène racontent que les efforts de Superours n’ont pas été appréciés par le félin, qui a infligé quelques petits coups de griffes à son sauveteur.</p>
    <aside>
      <h3>Articles connexes</h3>
      <ul>
        <li><a href="#">Superours reçoit les clés de la ville</a></li>
        <li><a href="#">Superours se présente comme maire</a></li>
      </ul>
    </aside>
  </article>
</section>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : champ de recherche utilisant <abbr>WAI-ARIA</abbr>" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendu</figcaption>
<form action="#" method="post">
  <div role="search">
    <label for="search">Rechercher</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">Recherchez des résultats par identifiant ou nom de client</div>
    <button type="submit">Lancer la recherche</button>
  </div>
</form>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Extrait de code</figcaption>
{:/}

~~~html
<form action="#" method="post">
  <div role="search">
    <label for="search">Rechercher</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">Recherchez des résultats par identifiant ou nom de client</div>
    <button type="submit">Lancer la recherche</button>
  </div>
</form>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Informations et relations 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([Comprendre 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
* **Tutoriel**
  * [Structure de page](/tutorials/page-structure/)
  * [Tableaux](/tutorials/tables/)
* **Témoignage d’utilisateur**
  * [Comment les informations structurées aident les utilisateurs de lecteur d’écran](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Aidez les utilisateurs à éviter les erreurs, et à les corriger

Fournissez des instructions claires, des messages d’erreur, et des notifications pour aider les utilisateurs à compléter les formulaires présents sur votre site. Lorsqu’une erreur survient :

* Aidez les utilisateurs à trouver où est le problème
* Fournissez des explications précises et compréhensibles
* Proposez des moyens de correction

Soyez aussi flexibles que possible vis-à-vis du format lors du traitement des données saisies par l’utilisateur. Par exemple, acceptez les numéros de téléphone qui comprennent des espaces et supprimez les espaces au besoin.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : champ destiné à un numéro de téléphone australien, avec une validation flexible" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendu</figcaption>
<label for="phone">Téléphone</label>
<input id="phone" name="phone" type="tel" pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$" aria-describedby="phone-desc">
<p id="phone-desc">Par exemple, (02) 1234 1234</p>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Extrait de code</figcaption>
{:/}

~~~html
<label for="phone">Téléphone</label>
<input id="phone" name="phone" type="tel"
       pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$"
       aria-describedby="phone-desc">
<p id="phone-desc">Par exemple, (02) 1234 1234</p>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Identification des erreurs 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([Comprendre 3.3.1](/WAI/WCAG21/Understanding/error-identification))
* **Tutoriel**
  * [Valider la saisie](/tutorials/forms/validation/)
* **Témoignage d’utilisateur**
  * [Comment des erreurs utiles aident un utilisateur dyslexique](/people-use-web/user-stories/archived/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Reflétez l’ordre logique de lecture dans l’ordre du code

Assurez-vous que l’ordre des éléments dans le code corresponde à l’ordre logique des informations présentées. Une des manières de le vérifier consiste à enlever le style CSS et à vérifier si l’ordre du contenu a du sens.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : refléter l’ordre logique de lecture dans le code" class="example" %}

<div class="two-column">
<div class="order">
  <article class="product">
    <h3 class="name">Baskets Espace</h3>
    {% include_cached image.html src="tips/trainer.png" alt="Baskets violettes avec lacets blancs, rond blanc vide sur la cheville extérieure et pointe de chaussure blanche" %}
    <p class="desc">Baskets Espace pour un look classique et élégant.</p>
    <p class="buy"><a href="javascript:return false" class="button button-icon"><span>{% include_cached icon.html name="cart-plus" %} Ajouter au panier</span></a></p>
  </article>
</div>
<figure>
<figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} L’image positionnée avant l’en-tête pourrait être manquée</figcaption>
{:/}

~~~html
<img src="images/trainer.png" alt="...">
<h3>Baskets Espace</h3>
<p>Baskets...</p>
<a href="...">Ajouter au panier</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
Voir tout l’exemple de code
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <img alt="Baskets violettes avec lacets blancs, rond blanc vide sur la cheville extérieure et pointe de chaussure blanche" src="images/trainer.png">
  <h3 class="name">Baskets Espace</h3>
  <p class="desc">Baskets Espace pour un look classique et élégant.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Ajouter au panier</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
<figure>
<figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} L’en-tête marque le début de la section</figcaption>
{:/}

~~~html
<h3>Baskets Espace</h3>
<img src="images/trainer.png" alt="...">
<p>Baskets...</p>
<a href="...">Ajouter au panier</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
Voir tout l’exemple de code
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <h3 class="name">Baskets Espace</h3>
  <img alt="Baskets violettes avec lacets blancs, rond blanc vide sur la cheville extérieure et pointe de chaussure blanche" src="images/trainer.png">
  <p class="desc">Baskets Espace pour un look classique et élégant.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Ajouter au panier</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Ordre séquentiel logique 1.3.2](/WAI/WCAG21/quickref/#meaningful-sequence) ([Comprendre 1.3.2](/WAI/WCAG21/Understanding/meaningful-sequence))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Créez un code qui s’adapte aux technologies des utilisateurs

Utilisez un design réactif pour adapter l’affichage à différents niveaux d’agrandissement et à différentes tailles d’espaces de restitution, tels que sur des appareils mobiles et des tablettes. Lorsque la taille de la police est agrandie d’au moins 200 %, évitez le défilement horizontal et empêcher tout rognage du contenu. Utilisez l’amélioration progressive pour veiller à ce que les fonctionnalités et le contenu soient disponibles quelle que soit la technologie utilisée.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : utiliser les requêtes média pour adapter la navigation" class="example" %}

<div class="adapt-code">
  <figure>
    <div class="code">
      <div class="grid-4">
        <div class="from-col1 to-col2">
{:/}

~~~css
/* Sur les petits espaces de restitution, faire prendre toute la largeur à la navigation */
@media screen and (min-width: 25em) {
  #nav {
    float: none;
    width: auto;
  }
  #main {
    margin-left: 0;
  }
}
~~~

{::nomarkdown}
</div>
<div class="from-col3 to-col4">
{:/}

~~~css
/* Sur les plus grands espaces de restitution, placer la navigation à gauche */
@media screen and (min-width: 43em) {
  #nav {
    float: left;
    width: 24%;
  }
  #main {
    margin-left: 27%;
  }
}
~~~

{::nomarkdown}
      </div>
    </div>
  </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Redimensionnement du texte 1.4.4](/WAI/WCAG21/quickref/#resize-text) ([Comprendre 1.4.4](/WAI/WCAG21/Understanding/resize-text))
  * [Identification cohérente 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([Comprendre 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **Contexte**
  * [Écran de petite taille](/TR/mobile-accessibility-mapping/#h-small-screen-size)
* **Témoignage d’utilisateur**
  * [Comment les vues équivalentes des pages agrandies peuvent être utiles](/people-use-web/user-stories/archived/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Transmettez une signification pour les éléments interactifs non standards

Utilisez <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr> pour fournir des informations sur l’état et la fonction des widgets personnalisés, tels que les accordéons et les boutons personnalisés. Par exemple, `role="navigation"` et `aria-expanded="true"`. Du code supplémentaire est nécessaire pour implémenter le comportement de ces widgets, comme le développement et la réduction du contenu ou la manière dont le widget répond aux événements du clavier.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : Fonction et état du menu identifiés en utilisant WAI-ARIA" class="example" %}

<div class="non-standard">
  <figure>
      <div class="code">
{:/}

~~~html
<nav aria-label="Navigation principale" role="navigation">
  <ul>
    <li><a href="...">Accueil</a></li>
    <li><a href="...">Boutique</a></li>
    <li class="has-submenu">
      <a aria-expanded="false" aria-haspopup="true" href="...">SpaceBears</a>
      <ul>
          <li><a href="...">SpaceBear 6</a></li>
          <li><a href="...">SpaceBear 6 Plus</a></li>
      </ul>
    </li>
    <li><a href="...">MarsCars</a></li>
    <li><a href="...">Contact</a></li>
  </ul>
</nav>
~~~

{::nomarkdown}
      </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Nom, rôle, et valeur 4.1.2](/WAI/WCAG21/quickref/#name-role-value) ([Comprendre 4.1.2](/WAI/WCAG21/Understanding/name-role-value))
* **Contexte**
  * [Commentaires sur l’utilisation d’ARIA en HTML](/TR/aria-in-html/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Assurez-vous que tous les éléments interactifs sont accessibles au clavier

Pensez à l’accès au clavier, particulièrement au moment de développer des éléments interactifs, comme des menus, des informations affichées au passage de la souris, des accordéons réductibles, ou des lecteurs multimédia. Utilisez `tabindex="0"` pour ajouter un élément qui ne reçoit normalement pas le focus, tel que `<div>` ou `<span>`, dans l’ordre de navigation&nbsp;; lorsqu’il est utilisé pour l’interaction. Utilisez un script pour capter et répondre aux événements clavier.   

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : bouton de menu accessible au clavier" class="example" %}

<div class="two-column keyboard-accessible">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Rendu</figcaption>
<div class="rendered">
  <div id="example-button" class="menu-button" role="button" aria-expanded="false" aria-controls="example-button-menu" tabindex="0">{% include_cached icon.html name="menu" %} Menu</div>
  <div id="example-button-menu" class="menu" aria-hidden="true" tabindex="-1">
    <ul>
      <li><a href="javascript:return false">À propos</a></li>
      <li><a href="javascript:return false">Actualités</a></li>
      <li><a href="javascript:return false">Billets</a></li>
      <li><a href="javascript:return false">Pour le plaisir</a></li>
    </ul>
  </div>
</div>
<script>
  !function() {
    "use strict";
    function e(e) {
        "true" == e.getAttribute("aria-hidden") ? (e.setAttribute("aria-hidden", "false"), e.focus()) : e.setAttribute("aria-hidden", "true")
    }
    function t(e) {
        "true" == e.getAttribute("aria-checked") ? (e.setAttribute("aria-checked", "false"), e.getElementsByTagName("span")[0].innerHTML = "Off") : (e.setAttribute("aria-checked", "true"), e.getElementsByTagName("span")[0].innerHTML = "On")
    }
    var a = document.getElementById("example-button");
    a && (a.addEventListener("keydown", function(t) {
        t.keyCode && 13 == t.keyCode && (e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true"))
    }), a.addEventListener("click", function(t) {
        e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true")
    }));
    var n = document.getElementById("switch");
    n && (n.addEventListener("keydown", function(e) {
        !e.keyCode || 32 != e.keyCode && 13 != e.keyCode || t(this)
    }), n.addEventListener("click", function() {
        t(this)
    }))
}();
</script>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Extrait de code</figcaption>
{:/}

~~~javascript
var buttonExample = document.getElementById('example-button');

buttonExample.addEventListener('keydown', function(e) {
  // Déroule le menu quand la touche ENTRÉE est pressée
  if(e.keyCode && e.keyCode == 13) {
    toggleMenu(document.getElementById('example-button-menu'));
  }
});

buttonExample.addEventListener('click', function(e) {
// Déroule the menu au clic de la souris
  toggleMenu(document.getElementById('example-button-menu'));
});
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Clavier 2.1.1](/WAI/WCAG21/quickref/#keyboard) ([Comprendre 2.1.1](/WAI/WCAG21/Understanding/keyboard))
* **Témoignage d’utilisateur**
  * [Comment un utilisateur avec un trouble musculosquelettique a besoin du support du clavier](/people-use-web/user-stories/archived/#reporter)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Évitez les CAPTCHAs si possible

Les CAPTCHAs posent problème pour un grand nombre de personnes. Il existe d’autres manières, plus simples à utiliser, de vérifier si les données de l’utilisateur ont été saisies par un humain, comme la détection automatique ou les interactions avec l’interface. Si le CAPTCHA doit absolument être inclus, veillez à ce qu’il soit facile à comprendre et qu’il inclue des alternatives pour les utilisateurs en situation de handicap, telles que :

* Fournir plus de deux moyens de résoudre les CAPTCHAs
* Fournir l’accès à un interlocuteur humain qui peut contourner le CAPTCHA
* Ne pas rendre obligatoires les CAPTCHAS pour les utilisateurs autorisés

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Contenu non textuel 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Comprendre 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Contexte**
  * [Inaccessibilité des CAPTCHAs](/TR/turingtest/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="En savoir plus sur l’accessibilité" class="large" icon="readmore" %}
{:/}

Ces conseils sont quelques-uns des éléments à prendre en compte pour l’accessibilité Web. Les ressources suivantes vous aident à comprendre l’importance de l’accessibilité, et à prendre connaissance des recommandations pour rendre le Web plus accessible pour les personnes handicapées.

* [Introduction à l’accessibilité](/fundamentals/accessibility-intro/) — introduit l’accessibilité et fournit des liens vers de nombreuses ressources utiles
* [Principes d’accessibilité](/fundamentals/accessibility-principles/) — une introduction aux exigences des <abbr>WCAG</abbr>
* [Comment les personnes en situation de handicap utilisent le Web](/people-use-web/) — des exemples concrets des bénéfices de l’accessibilité pour les personnes en situation de handicap
* [Tutoriels sur l’accessibilité Web](/tutorials/) — vous montre comment développer du contenu Web accessible aux personnes en situation de handicap
* [Démonstration avant/après](/WAI/demos/bad/) — un exemple de sites Web accessible et inaccessible qui partagent le même design visuel, avec des commentaires sur les principaux obstacles à l’accessibilité et les moyens d’y remédier, et des rapports d’évaluation pour les WCAG
* [Comment répondre aux exigences des WCAG (Référence rapide)](/WAI/WCAG21/quickref/) — une liste personnalisable de toutes les exigences et les techniques des WCAG
* [Liste d’outils d’évaluation de l’accessibilité Web](/WAI/ER/tools/) — mentionne un éventail d’outils pour aider à explorer l’accessibilité du code
* [Une vue d’ensemble de <abbr>WAI-ARIA</abbr>](/standards-guidelines/aria/) — une introduction aux <abbr>WAI-ARIA</abbr> avec des liens vers toutes les spécifications

{::nomarkdown}
{% include box.html type="end" %}
{:/}
