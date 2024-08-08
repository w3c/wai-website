---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Concevoir pour l’accessibilité Web – Conseils pour démarrer"
title_html: "Concevoir pour l’accessibilité Web"
nav_title: Conseils pour le design
lang: fr # Change "en" to the translated-language shortcode
last_updated: 2023-10-10   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/  # Do not change this

navigation:
  previous: /tips/writing/ # Do not change this
  next: /tips/developing/ # Do not change this

translators:
  - name: "Sofia Ahmed"
contributors:
  - name: "Sandra Velarde Gonzalez (ETNIC)"
  - name: "Rémi Bétin"

github:
  label: wai-tips

permalink: /tips/designing/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/designing/   # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#designing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >   # translate text and dates; do not update dates
  <p><strong>Date :</strong> Mise à jour mineure : 9 janvier 2019. Mise à jour : 15 avril 2016. Première publication en septembre 2015.</p>
  <p><strong>Rédacteurs :</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, et <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS.</p>
  <p>Développé par le <a href="https://www.w3.org/WAI/EO/">Groupe de travail Éducation et Promotion (EOWG)</a>.
  Développé avec le soutien du <a href="https://www.w3.org/WAI/DEV/">projet WAI-DEV</a>, co-financé par le programme <abbr title="Technologies de la Société de l’information">IST</abbr> de la Commission européenne.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page présente quelques considérations de base pour vous aider à rendre votre design d’interface utilisateur et votre design visuel plus accessibles aux personnes en situation de handicap. Ces conseils sont des bonnes pratiques qui vous aident à satisfaire aux exigences des Règles pour l’accessibilité des contenus Web (WCAG). Suivez les liens vers les recommandations WCAG correspondantes, du contexte détaillée dans les documents «&nbsp;Comprendre&nbsp;», des instructions dans les tutoriels, des témoignages d’utilisateurs, et plus encore.

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

## Fournissez un contraste suffisant entre le premier plan et l’arrière-plan

Le texte au premier plan doit avoir un contraste suffisant par rapport aux couleurs d’arrière-plan. Cela inclut le texte sur des images, sur des dégradés en arrière-plan, sur des boutons, et sur d’autres éléments. Cela ne s’applique pas pour les logos, ou le texte accessoire, tel que du texte qui peut être présent dans une photographie. Les liens ci-dessous fournissent plus d’informations sur le rapport de contraste minimum  recommandé par les WCAG, et sur comment vérifier le contraste. Le « rapport de contraste » est une version abrégée du terme plus techniquement correct « rapport de contraste de luminance ».

{::nomarkdown}
{% include_cached box.html type="start" title="<strong>Exemple :</strong> Rapport de contraste" class="example" %}
{:/}

<div class="two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Insuffisant</figcaption>
    <div>
      <p style="color: #999;">Certaines personnes ne peuvent pas lire le texte s’il n’y a pas suffisamment de contraste entre le texte et l’arrière-plan. Pour d’autres, les couleurs vives (à forte luminance) ne sont pas lisibles&nbsp;; ils ont besoin d’une faible luminance.</p>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Suffisant</figcaption>
    <div>
      <p class="pass">Certaines personnes ne peuvent pas lire le texte s’il n’y a pas suffisamment de contraste entre le texte et l’arrière-plan. Pour d’autres, les couleurs lumineuses (à forte luminance) ne sont pas lisibles ; ils ont besoin d’une faible luminance.</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Contraste (Minimum) 1.4.3](/WAI/WCAG21/quickref/#contrast-minimum) ([Comprendre 1.4.3](/WAI/WCAG21/Understanding/contrast-minimum))
* **Témoignage d’utilisateur**
  * [Comment un utilisateur daltonien utilise le Web](/people-use-web/user-stories/#shopper)
* **Vérification simple**
  * [Comment vérifier le rapport de contraste](/test-evaluate/preliminary/#contrast)
* **Outils d’aide**
  * [Liste d’outils pour aider à déterminer le rapport de contraste](/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html#visual-audio-contrast-contrast-resources-head)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## N’utilisez pas seulement la couleur pour transmettre des informations

Bien que la couleur puisse servir à transmettre une information, elle ne devrait pas être le seul moyen dont cette information est transmise. Lorsque vous utilisez la couleur pour différencier des éléments, fournissez aussi des éléments d’identification supplémentaires qui ne s’appuient pas sur la perception des couleurs. Par exemple, utilisez un astérisque en plus de la couleur pour indiquer les champs de formulaire obligatoires, et utilisez des étiquettes pour distinguer des zones sur les graphiques.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : utiliser la couleur pour transmettre un message" class="example" %}
{:/}

<div class="color-alone two-column">
  <figure class="reference fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Couleur uniquement</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">Les champs obligatoires sont en rouge</span></p>
        <div class="row">
          <label for="name1">Nom</label> <input type="text" id="name1" name="name">
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email1">Courriel</label> <input type="text" id="email1" name="email">
        </div>
      </form>
    </div>
  </figure>
  <figure class="reference pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Couleur et symbole</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">Les champs obligatoires</span> sont en rouge et indiqués par un <span class="required" style="color: #992929;">*</span></p>
        <div class="row">
          <label for="name2">Nom</label> <input type="text" id="name2" name="name"><br>
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email2">Courriel *</label> <input type="text" id="email2" name="email">
        </div>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : faire référence à quelque chose en utilisant seulement la couleur" class="example" %}
{:/}
<div class="color-alone two-column">
  <figure class="question fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Couleur uniquement</figcaption>
    <div>
      <svg version="1.1" width="153" height="154" aria-labelledby="inaccessible-triangles-title" role="img">
        <g>
          <title id="inaccessible-triangles-title">Quatre triangles avec des angles différents</title>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D"/>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">Lequel de ces triangles est un triangle rectangle ?</legend>
          <input id="answer-green1" name="answer1" value="green" type="radio"> <label for="answer-green1">Vert</label><br>
          <input id="answer-blue1" name="answer1" value="blue" type="radio"> <label for="answer-blue1">Bleu</label><br>
          <input id="answer-red1" name="answer1" value="red" type="radio"> <label for="answer-red1">Rouge</label><br>
          <input id="answer-yellow1" name="answer1" value="yellow" type="radio"> <label for="answer-yellow1">Jaune</label><br>
          <input id="answer-pass1" name="answer1" value="pass" type="radio"> <label for="answer-pass1">Je ne sais pas</label>
        </fieldset>
      </form>
    </div>
  </figure>
  <figure class="question pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Couleur et nombres</figcaption>
    <div>
      <svg version="1.1" width="153" height="154">
        <g>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D" />
          <text fill="#f4f4f4" y="51" x="44"><tspan>1</tspan><tspan dx="100" style="opacity:0">Triangle vert : les angles sont 30°, 60°, 90°</tspan></text>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <text fill="#f4f4f4" y="54" x="132"><tspan>2</tspan><tspan dx="100" style="opacity:0"> Triangle bleu : les angles sont 30°, 30°, 120°</tspan></text>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <text fill="#f4f4f4" y="114" x="110"><tspan>3</tspan><tspan dx="100" style="opacity:0"> Triangle rouge : les angles sont 40°, 70°, 70°</tspan></text>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
          <text fill="#333" y="118" x="48"><tspan>4</tspan><tspan dx="100" style="opacity:0"> Triangle jaune : les angles sont 60°, 60°, 60°</tspan></text>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">Lequel de ces triangles est un triangle rectangle ?</legend>
          <input id="answer-green2" name="answer2" value="green" type="radio"> <label for="answer-green2">Vert (1)</label><br>
          <input id="answer-blue2" name="answer2" value="blue" type="radio"> <label for="answer-blue2">Bleu (2)</label><br>
          <input id="answer-red2" name="answer2" value="red" type="radio"> <label for="answer-red2">Rouge (3)</label><br>
          <input id="answer-yellow2" name="answer2" value="yellow" type="radio"> <label for="answer-yellow2">Jaune (4)</label><br>
          <input id="answer-pass2" name="answer2" value="pass" type="radio"> <label for="answer-pass2">Je ne sais pas</label>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Utilisation de la couleur 1.4.1](/WAI/WCAG21/quickref/#use-of-color) ([Comprendre 1.4.1](/WAI/WCAG21/Understanding/use-of-color))
* **Témoignage d’utilisateur**
  * [Comment un utilisateur daltonien utilise le Web](/people-use-web/user-stories/#shopper)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}


## Assurez-vous que les éléments interactifs sont facilement identifiables

Fournissez des styles distinctifs pour les éléments interactifs, tels que les liens et les boutons, pour qu’ils soient faciles à identifier. Par exemple, changez l’apparence des liens lors du survol de la souris, du focus du clavier, et de l’activation via un écran tactile. Assurez-vous que les styles et l’intitulé des éléments interactifs sont cohérents partout sur le site.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : des styles uniques pour les différents états d’un lien" class="example" %}
{:/}

<div class="focus two-column">
  <div>
    <figure>
      <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Faites ressortir les liens du texte</figcaption>
      <div>
        <p>Certaines personnes ne peuvent pas utiliser une souris et utilisent uniquement un <a href="javascript:return false;" aria-label="Le lien est stylisé pour ressortir du texte principal">clavier pour naviguer</a> au sein des pages Web.</p>
        <p>Il est important que les utilisateurs puissent avoir accès à tous les éléments interactifs en utilisant le clavier, et qu’il soit clairement indiqué sur quel élément le focus se trouve.</p>
        <p>Un focus de clavier visible pourrait être une bordure ou une surbrillance qui se déplace et fur et à mesure que vous naviguez à l’aide de la touche Tab sur la page.</p>
      </div>
    </figure>
  </div>
  <div>
    <figure class="hover">
      <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Style au survol de la souris</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Le lien est stylisé avec un arrière-plan subtil pour mettre en évidence l’état de survol" style="color: #850BAC; background-color: rgba(253, 247, 15, 0.3)">clavier pour naviguer</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
    <figure class="keyboard">
      <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Style au focus du clavier</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Le lien est stylisé avec une version plus marquée du style au survol pour le faire ressortir" style="color: #850BAC; background-color: #fdf70f">clavier pour naviguer</a></p>
      </div>
    </figure>
    <figure class="active">
      <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Style au clic ou au contact tactile</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Le lien a un style prononcé pour montrer qu’une action va se produire" style="background: #850BAC; color: #f4f4f4">clavier pour naviguer</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Visibilité du focus 2.4.7](/WAI/WCAG21/quickref/#focus-visible) ([Comprendre 2.4.7](/WAI/WCAG21/Understanding/focus-visible))
  * [Identification cohérente 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([Comprendre 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **Témoignages d’utilisateurs**
  * [Obstacles rencontrés par une personne ayant une capacité limitée à utiliser une souris](/people-use-web/user-stories/#reporter)
  * [Obstacles rencontrés par un utilisateur âgé dont les mains tremblent](/people-use-web/user-stories/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Fournissez des options de navigation claires et cohérentes

Veillez à ce que le nom, le style et le positionnement de la navigation dans les pages de votre site Web soient cohérents. Fournissez plusieurs modes de navigation dans le site Web, tels qu’une option de recherche au sein du site ou un plan du site. Aidez les utilisateurs à comprendre où ils se trouvent sur le site ou la page en fournissant des indices d’orientation, comme des fils d’Ariane et des titres clairs.

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Navigation cohérente 3.2.3](/WAI/WCAG21/quickref/#consistent-navigation) ([Comprendre 3.2.3](/WAI/WCAG21/Understanding/consistent-identification))
  * [Accès multiples 2.4.5](/WAI/WCAG21/quickref/#multiple-ways) ([Comprendre 2.4.5](/WAI/WCAG21/Understanding/multiple-ways))
* **Témoignage d’utilisateur**
  * [Comment la cohérence et la navigation peuvent aider une personne avec des troubles cognitifs](/people-use-web/user-stories/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Assurez-vous que les éléments de formulaire incluent des étiquettes clairement associées

Veillez à ce que tous les champs aient une étiquette descriptive adjacente au champ. Pour les langues qui se lisent de gauche à droite, les étiquettes se situent généralement à gauche ou au-dessus du champ, sauf pour les cases à cocher et les boutons radio où ils sont généralement à droite. Évitez les espaces trop importants entre les étiquettes et les champs.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : étiquettes et champs de saisie associés par leur proximité" class="example" icon="check-circle" %}
{:/}

<div class="labels">
  <figure>
    <div>
      <form action="#" method="post">
        <fieldset>
          <legend>Ajouter un commentaire</legend>
          <div class="row">
            <label for="email4">Votre courriel</label>
            <input type="text" id="email4" name="email">
          </div>
          <div class="row checkbox">
            <input type="checkbox" id="contact1" name="contact">
            <label for="contact1">Je serais ravi que vous me contactiez</label>
          </div>
          <div class="row">
            <label for="website2">Votre site Web</label>
            <input type="text" id="website2" name="website">
          </div>
          <div class="row">
            <label for="comment2">Commentaire</label>
            <textarea name="comment" id="comment2"></textarea>
          </div>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Étiquettes ou instructions 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Comprendre 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
  * [En-têtes et étiquettes 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([Comprendre 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
* **Tutoriel**
  * [Position visuelle du texte de l’étiquette](/tutorials/forms/labels/#visual-position-of-label-text)
* **Témoignage d’utilisateur**
  * [Comment une étiquette claire peut aider une personne avec des troubles cognitifs](/people-use-web/user-stories/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Fournissez un retour facilement identifiable

Prévoyez un retour pour les interactions, tel que confirmer la soumission d’un formulaire, avertir l’utilisateur en cas de problème, ou informer l’utilisateur des modifications survenues sur une page. Les instructions doivent être faciles à trouver. Un retour important qui nécessite l’action de l’utilisateur doit s’afficher dans un style bien visible.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : utiliser une liste d’erreurs, une icône, et une couleur d’arrière-plan pour faire ressortir les erreurs" class="example" icon="check-circle" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <div class="error-list">
        <p>Veuillez corriger les erreurs suivantes :</p>
        <ol>
          <li id="error_email">{% include_cached icon.html name="warning" label="Erreur" %} <a href="javascript:document.getElementById('email5').focus()">Le courriel est invalide</a></li>
          <li id="error_comment">{% include_cached icon.html name="warning" label="Erreur" %} <a href="javascript:document.getElementById('comment3').focus()">Renseigner un commentaire est obligatoire</a></li>
        </ol>
      </div>
      <form action="#" method="post">
        <fieldset>
          <legend>Ajouter un commentaire</legend>
          <p class="instruction"><span class="required">Les champs obligatoires</span> sont en rouge et indiqués par un <span class="required">*</span></p>
          <div class="row">
            <label for="name5">Nom</label>
            <input type="text" id="name5" name="name" value="Superours">
          </div>
          <div class="row error">
            <label class="required" for="email5">{% include_cached icon.html name="warning" label="Erreur" %} E-mail *</label>
            <input type="text" id="email5" name="email" value="superours@@qg.exemple.com" aria-invalid="true" aria-describedby="error_email">
          </div>
          <div class="row">
            <label for="website3">Site Web</label>
            <input type="text" id="website3" name="website">
          </div>
          <div class="row error">
            <label class="required" for="comment3">{% include_cached icon.html name="warning" label="Erreur" %} Commentaire *</label>
            <textarea name="comment" id="comment3" aria-invalid="true" aria-describedby="error_comment"></textarea>
          </div>
        </fieldset>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Identification des erreurs 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([Comprendre 3.3.1](/WAI/WCAG21/Understanding/error-identification))
  * [Étiquettes ou instructions 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Comprendre 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
  * [Suggestion après une erreur 3.3.3](/WAI/WCAG21/quickref/#error-suggestion) ([Comprendre 3.3.3](/WAI/WCAG21/Understanding/error-suggestion))
* **Tutoriel**
  * [Notification des utilisateurs](/tutorials/forms/notifications/)
* **Témoignage d’utilisateur**
  * [Comment rendre un contenu important facilement identifiable peut aider](/people-use-web/user-stories/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Utilisez des titres et l’espacement pour regrouper les contenus liés

Utilisez des blancs et la proximité pour faire mieux ressortir les relations entre les différents contenus. Stylisez les titres de manière à regrouper les contenus, mieux les organiser, et permettre de parcourir et de comprendre plus facilement le contenu.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : l’espacement met en évidence la relation entre les contenus" class="example" %}
{:/}

<div class="headings two-column">
  <figure class="fail">
    <figcaption id="inaccessible-headings-title">{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Peu d’espacements et des relations peu claires</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="inaccessible-headings-title" aria-describedby="inaccessible-headings-desc" role="img">
        <g>
          <desc id="inaccessible-headings-desc">Titre unique avec de larges blocs de texte, séparation insuffisante des sous-titres, et relation avec l’image peu claire.</desc>
          <text class="heading" x="0" y="14">Titre principal</text>
          <rect x="0" y="18" width="247" height="3"/>
          <rect x="0" y="24" width="244" height="3"/>
          <rect x="0" y="30" width="249" height="3"/>
          <rect class="image" x="180" y="36" width="70" height="55"/>
          <line x1="181" y1="37" x2="249" y2="90" stroke-width="1"/>
          <line x1="181" y1="90" x2="249" y2="37" stroke-width="1"/>
          <rect x="0" y="36" width="168" height="3"/>
          <rect x="0" y="42" width="171" height="3"/>
          <rect x="0" y="48" width="166" height="3"/>
          <rect x="0" y="54" width="172" height="3"/>
          <rect x="0" y="60" width="120" height="3"/>
          <text class="sub-heading" x="0" y="74">Sous-titre</text>
          <rect x="0" y="76" width="144" height="3"/>
          <rect x="0" y="82" width="136" height="3"/>
          <rect x="0" y="88" width="142" height="3"/>
          <rect x="0" y="94" width="236" height="3"/>
          <rect x="0" y="100" width="249" height="3"/>
          <rect x="0" y="106" width="239" height="3"/>
          <rect x="0" y="112" width="205" height="3"/>
          <text class="sub-heading" x="0" y="126">Sous-titre</text>
          <rect x="0" y="128" width="236" height="3"/>
          <rect x="0" y="134" width="242" height="3"/>
          <rect x="0" y="140" width="243" height="3"/>
          <rect x="0" y="146" width="250" height="3"/>
          <rect x="0" y="152" width="245" height="3"/>
          <rect x="0" y="158" width="187" height="3"/>
        </g>
      </svg>
    </div>
  </figure>
  <figure class="pass">
    <figcaption id="accessible-headings-title">{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Plus d’espacement et des relations plus claires</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="accessible-headings-title" aria-describedby="accessible-headings-desc" role="img">
        <g>
          <desc id="accessible-headings-desc">Titre principal, sous-titres multiples, listes, et pas de gros blocs de texte.</desc>
          <text class="heading" x="0" y="14">Titre principal</text>
          <rect x="0" y="21" width="175" height="3"/>
          <rect x="0" y="27" width="170" height="3"/>
          <rect x="0" y="33" width="159" height="3"/>
          <rect x="0" y="39" width="95" height="3"/>
          <rect x="0" y="51" width="175" height="3"/>
          <rect x="0" y="57" width="170" height="3"/>
          <rect x="0" y="63" width="159" height="3"/>
          <rect x="0" y="69" width="172" height="3"/>
          <rect x="0" y="75" width="143" height="3"/>
          <rect class="image" x="180" y="21" width="70" height="55"/>
          <line x1="181" y1="22" x2="249" y2="75"/>
          <line x1="181" y1="75" x2="249" y2="22"/>
          <text class="sub-heading" x="0" y="98">Sous-titre</text>
          <rect x="0" y="103" width="106" height="3"/>
          <rect x="0" y="109" width="99" height="3"/>
          <rect x="0" y="115" width="114" height="3"/>
          <rect x="0" y="121" width="110" height="3"/>
          <rect x="0" y="127" width="110" height="3"/>
          <rect x="0" y="139" width="99" height="3"/>
          <rect x="0" y="145" width="114" height="3"/>
          <rect x="0" y="151" width="110" height="3"/>
          <rect x="0" y="157" width="84" height="3"/>
          <text class="sub-heading" x="135" y="98">Sous-titre</text>
          <rect x="135" y="103" width="106" height="3"/>
          <rect x="135" y="109" width="99" height="3"/>
          <rect x="135" y="115" width="114" height="3"/>
          <rect x="135" y="127" width="114" height="3"/>
          <rect x="135" y="133" width="110" height="3"/>
          <rect x="135" y="139" width="99" height="3"/>
          <rect x="135" y="145" width="108" height="3"/>
          <rect x="135" y="151" width="110" height="3"/>
          <rect x="135" y="157" width="62" height="3"/>
        </g>
      </svg>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [En-têtes et étiquettes 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([Comprendre 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
  * [En-têtes de section 2.4.10](/WAI/WCAG21/quickref/#section-headings) ([Comprendre 2.4.10](/WAI/WCAG21/Understanding/section-headings))
* **Tutoriel**
  * [En-têtes](/tutorials/page-structure/headings/)
* **Témoignage d’utilisateur**
  * [Décrit de quelle manière les en-têtes peuvent être utiles à la navigation](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Créez des designs pour différentes tailles de fenêtres d’affichage

Prêtez attention à l’agencement des informations contenues dans les pages dans des fenêtres de tailles différentes, tels que les téléphones mobiles ou les fenêtres de navigateur zoomées. La position et la présentation des éléments principaux, tels que les en-têtes et la navigation, peuvent être modifiés pour mieux utiliser l’espace. Veillez à ce que la taille du texte et la largeur des lignes soient définies de manière à optimiser la lisibilité et la clarté.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : le contenu et la navigation s’adaptent aux écrans plus petits des téléphones portables" class="example" %}
{:/}

<div class="responsive">
  <figure>
    <div>
      {% include_cached image.html src="tips/content_in_browser.png" %}
      {% include_cached image.html src="tips/content_in_phone.png" %}
      <p>L’affichage dans une fenêtre plus large avec un texte de petite taille utilise plusieurs colonnes pour le contenu principal, des options de navigation visibles, et des informations secondaires visibles.</p>
      <p>L’affichage dans une petite fenêtre, telle qu’un téléphone portable, ou avec un texte en gros caractères utilise une seule colonne pour le contenu principal, les options de navigation sont révélées grâce à une icône, et les informations secondaires sont également révélées par une icône.</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **Arrière-plan**
  * [Petite taille d’écran](/TR/mobile-accessibility-mapping/#h-small-screen-size)
  * [Considérations sur mobile relatives à la compréhensibilité](/TR/mobile-accessibility-mapping/#mobile-accessibility-considerations-related-primarily-to-principle-3-understandable)
* **Témoignage d’utilisateur**
  * [Décrit de quelle manière les vues équivalentes des pages agrandies peuvent être utiles](/people-use-web/user-stories/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Incluez des équivalents aux images et contenus multimédia dans votre design

Prévoyez une zone dans votre design pour les équivalents aux images et contenus multimédia. Par exemple, vous pourriez avoir besoin :

* De liens visibles vers les transcriptions de l’audio ;
* De liens visibles vers les versions des vidéos avec audiodescription ;
* De texte à côté des icônes et des boutons graphiques ;
* De sous-titres et de descriptions pour les tableaux ou les graphiques complexes.

Travaillez avec les auteurs de contenu et les développeurs pour fournir des équivalents aux contenus non textuels.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : le design inclut des liens vers une transcription et une vidéo avec audiodescription" class="example" %}
{:/}

<div class="text-alt">
  <figure>
    <div>
      {% include_cached image.html src="tips/example_media_player.png" alt="Un lecteur multimédia est présenté. En plus des habituels boutons lecture/pause, barre de progression et volume, un bouton Sous-titres est disponible, ainsi que des liens vers une transcription et une version avec audiodescription." %}
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Contenu non textuel 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Comprendre 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Tutoriel**
  * [Images](/tutorials/images/)
* **Témoignage d’utilisateur**
  * [Importance des équivalents textuels pour un utilisateur aveugle](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Fournissez des boutons de commande pour le contenu qui démarre automatiquement

Fournissez des boutons de commande visibles pour permettre aux utilisateurs d’arrêter toute animation ou tout son qui démarre automatiquement. Cela s’applique aux carrousels, aux diaporamas d’images, au son en arrière-plan, et aux vidéos.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : afficher des boutons de commande de démarrage, d’arrêt, et de sélection dans un design de carrousel." class="example" %}
{:/}

<div class="autoplay">
  <figure>
    <div>
      {% include_cached image.html src="tips/carousel_controls.png" alt="Exemple d’un carrousel avec des boutons de commande pour le démarrer et sélectionner une diapositive." %}
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Contrôle du son 1.4.2](/WAI/WCAG21/quickref/#audio-control) ([Comprendre 1.4.2](/WAI/WCAG21/Understanding/audio-control))
  * [Mettre en pause, arrêter, masquer 2.2.2](/WAI/WCAG21/quickref/#pause-stop-hide) ([Comprendre 2.2.2](/WAI/WCAG21/Understanding/pause-stop-hide))
* **Tutoriel**
  * [Conceptions d’un carrousel](/tutorials/carousels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="En savoir plus sur l’accessibilité" class="large" icon="readmore" %}
{:/}

Ces conseils sont quelques-uns des éléments à prendre en compte pour l’accessibilité Web. Les ressources suivantes vous aident à comprendre l’importance de l’accessibilité, et à prendre connaissance des recommandations pour rendre le Web plus accessible aux personnes en situation de handicap.

* [Introduction à l’accessibilité Web](/fundamentals/accessibility-intro/) — concerne des questions générales, telles que les bénéfices business, et des liens vers des ressources utiles
* [Principes d’accessibilité](/fundamentals/accessibility-principles/) — introduit les concepts derrière les exigences en matière d’accessibilité Web
* [Comment les personnes handicapées utilisent le Web](/people-use-web/) — explore les effets d’un design accessible à l’aide d’exemples concrets
* [Tutoriels sur l’accessibilité Web](/tutorials/) — comprend des conseils sur le design, par exemple, [fournir un équivalent textuel pour les images](/tutorials/images/)
* [Démonstration avant/après](/WAI/demos/bad/) — montre une version accessible et inaccessible d’un même site Web, et des commentaires sur les obstacles à l’accessibilité et les moyens d’y remédier.
* [Comment répondre aux exigences des WCAG (Référence rapide)](/WAI/WCAG21/quickref/) — liste personnalisable de toutes les exigences et les techniques des WCAG
* [Liste d’outils d’évaluation de l’accessibilité Web](/WAI/ER/tools/) — comprend des outils pour en savoir plus sur le rapport de contraste

{::nomarkdown}
{% include box.html type="end" %}
{:/}
