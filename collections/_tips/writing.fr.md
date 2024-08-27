---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Écrire pour l’accessibilité Web – Conseils pour démarrer"
title_html: "Écrire pour l’accessibilité Web"
nav_title: Conseils pour l’écriture
lang: fr  # Change "en" to the translated-language shortcode
last_updated: 2023-10-10  # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/  # Do not change this

navigation:
  previous: /tips/  # Do not change this
  next: /tips/designing/  # Do not change this
  
translators:
  - name: "Sofia Ahmed"
contributors:
  - name: "Sandra Velarde Gonzalez (ETNIC)"
  - name: "Rémi Bétin"

github:
  label: wai-tips

permalink: /tips/writing/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/writing/   # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#writing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date :</strong> Mise à jour : 5 août 2022. Première publication en septembre 2015.</p>
  <p><strong>Rédacteurs :</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, et <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS.</p>
  <p>Développé par le <a href="https://www.w3.org/WAI/EO/">Groupe de travail Éducation et Promotion (EOWG)</a>.
  Développé avec le soutien du <a href="https://www.w3.org/WAI/DEV/">projet WAI-DEV</a>, co-financé par le programme <abbr title="Technologies de la Société de l’information">IST</abbr> de la Commission européenne.</p>

---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}

Cette page présente quelques considérations de base pour vous aider dans la rédaction de contenus Web plus accessibles aux personnes en situation de handicap. Ces conseils sont des bonnes pratiques qui vous aident à satisfaire aux exigences des Règles pour l’accessibilité des contenus Web (WCAG). Suivez les liens vers les recommandations WCAG correspondantes, du contexte détaillée dans les documents «&nbsp;Comprendre&nbsp;», des instructions dans les tutoriels, des témoignages d’utilisateurs, et plus encore.

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

## Fournissez des titres de page informatifs et uniques

Pour chaque page Web, fournissez un titre court qui décrit le contenu de la page et qui la distingue des autres pages. Le titre de la page est souvent le même que le titre principal de la page. Mettez en premier les informations les plus pertinentes propres à la page ; par exemple, mettez le nom de la page avant le nom de l’organisation. Pour les pages qui font partie d’un processus en plusieurs étapes, incluez l’étape actuelle dans le titre de la page.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : Titres de page" class="example" %}
{:/}

<div class="page-title">
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Titre de la page d’accueil</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Nom de la page suivi du nom de l’organisation</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Actualités &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Nom de la page incluant l’étape dans le processus</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Acheter votre ours (Étape 1 sur 3) &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
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
  * [Titre de page 2.4.2](/WAI/WCAG21/quickref/#page-titled) ([Comprendre 2.4.2](/WAI/WCAG21/Understanding/page-titled))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Utilisez des en-têtes pour donner du sens et de la structure

Utilisez des en-têtes courts pour regrouper les paragraphes apparentés et décrire clairement les sections. Les bons en-têtes donnent les grandes lignes du contenu.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : Utiliser des en-têtes pour organiser le contenu" class="example" %}
{:/}

<div class="heading-structure two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Manque d’en-têtes</figcaption>
    <div>
      {% include_cached image.html src="tips/headings-poor.png" alt="Illustration de page sans en-têtes, retrouvez un exemple détaillé ci-dessous" %}
    </div>
{% include_cached excol.html type="start" id="no-headings" %}
Voir l’exemple sous forme de texte
{% include_cached excol.html type="middle" %}
<h2 id="no-headings-modal-title"><span class="visuallyhidden">Exemple : </span>Titres et sous-titres</h2>

<p>Les éléments <abbr>HTML</abbr> fournissent des informations sur la hiérarchie structurelle d’un document. Utiliser correctement les élements permet de transmettre plus de sens aux technologies d’assistance. Dans de nombreux cas, cela va également rendre l’édition de votre document plus facile.</p>

<p>Pour les documents plus longs que trois ou quatre paragraphes, les titres et les sous-titres sont importants pour faciliter l’utilisabilité et l’accessibilité. Ils aident les utilisateurs à comprendre les grandes lignes d’un document et à orienter leur navigation vers les informations spécifiques qui les intéressent.</p>

<p>Les en-têtes sont classées en niveaux de 1 à 6. Le niveau le plus élevé est le "Niveau 1" et correspond souvent au titre de la page ou de la section principale du document.</p>

<p>Les lecteurs qui utilisent leur vue identifient les en-têtes en balayant les pages à la recherche d’un texte de taille plus grande ou de style différent. Les utilisateurs de technologies d’assistance ne peuvent pas voir ces changements visuels&nbsp;; changer le style n’est donc pas un indice suffisant.</p>

<p>À la place, les en-têtes doivent être « étiquetées » sémantiquement pour que les technologies d’assistance puissent identifier les en-têtes. Les en-têtes peuvent alors aussi être utilisées pour naviguer.</p>

<p>C’est ce qui fait des en-têtes l’un des outils les plus importants pour les utilisateurs de lecteur d’écran, pour qu’ils puissent connaîtrez ce qui se trouve sur la page. Notez que l’étiquetage produit généralement un changement de mise en forme visuelle qui peut être ajusté dans de nombreux documents.</p>

<cite>Adapté de <a href="https://accessibility.psu.edu/headings/">Titres et sous-titres sur Penn State</a></cite>
{% include_cached excol.html type="end" %}
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Avec des titres et des sous-titres</figcaption>
    <div>
      {% include_cached image.html src="tips/headings-good.png" alt="Illustration d’une structure de titres optimale, plus d’exemples détaillés ci-dessous"%}
    </div>
{% include_cached excol.html type="start" id="headings-good" %}
Voir l’exemple sous forme de texte
{% include_cached excol.html type="middle" %}
<h2 id="headings-modal-title"><span class="visuallyhidden">Exemple : </span>Titres et sous-titres</h2>

<p>Les éléments <abbr>HTML</abbr> fournissent des informations sur la hiérarchie structurelle d’un document. Utiliser correctement les élements permet de transmettre plus de sens aux technologies d’assistance. Dans de nombreux cas, cela va également rendre l’édition de votre document plus facile.</p>

<h3><span class="visuallyhidden">Exemple: </span>Fonction des en-têtes</h3>

<p>Pour les documents plus longs que trois ou quatre paragraphes, les titres et les sous-titres sont importants pour faciliter l’utilisabilité et l’accessibilité. Ils aident les utilisateurs à comprendre les grandes lignes d’un document et à orienter leur navigation vers les informations spécifiques qui les intéressent.</p>

<h4><span class="visuallyhidden">Exemple : </span>Niveaux des en-têtes</h4>

<p>Les en-têtes sont classées en niveaux de 1 à 6. Le niveau le plus élevé est le "Niveau 1" et correspond souvent au titre de la page ou de la section principale du document.</p>

<h3><span class="visuallyhidden">Exemple: </span>Signification contre mise en forme</h3>

<p>Les lecteurs qui utilisent leur vue identifient les en-têtes en balayant les pages à la recherche d’un texte de taille plus grande ou de style différent. Les utilisateurs de technologies d’assistance ne peuvent pas voir ces changements visuels&nbsp;; changer le style n’est donc pas un indice suffisant.</p>

<p>À la place, les en-têtes doivent être « étiquetées » sémantiquement pour que les technologies d’assistance puissent identifier les en-têtes. Les en-têtes peuvent alors aussi être utilisées pour naviguer.</p>

<p>C’est ce qui fait des en-têtes l’un des outils les plus importants pour les utilisateurs de lecteur d’écran, pour qu’ils puissent connaîtrez ce qui se trouve sur la page. Notez que l’étiquetage produit généralement un changement de mise en forme visuelle qui peut être ajusté dans de nombreux documents.</p>

<cite>Adapté de <a href="https://accessibility.psu.edu/headings/">Titres et sous-titres sur Penn State</a></cite>
{% include_cached excol.html type="end" %}
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
  * [Information et relations 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([Comprendre 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
* **Témoignage d’utilisateur**
  * [Comment un utilisateur de lecteur d’écran utilise les en-têtes pour naviguer](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Donnez du sens au texte d’un lien

Écrivez le texte d’un lien de manière à décrire le contenu vers lequel pointe ce lien. Évitez un texte de lien ambigu, tel que « cliquez ici » ou « en savoir plus ». Indiquez les informations pertinentes sur la cible du lien, comme le type et la taille du document&nbsp;; par exemple, « Documents de présentation (RTF, 20 Mo) ».

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : utiliser le texte du lien pour décrire la page cible" class="example" %}
{:/}

<div class="meaningful-links two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Pas d’information</figcaption>
    <div>
      <p class="fail">Pour plus d’informations sur l’indépendance des terminaux, <a href="javascript:return false">cliquez ici</a>.</p>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Informations pertinentes </figcaption>
    <div>
      <p class="pass">En savoir plus <a href="javascript: return false">sur l’indépendance des terminaux</a>.</p>
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
  * [Fonction du lien (selon le contexte) 2.4.4](/WAI/WCAG21/quickref/#link-purpose-in-context) ([Comprendre 2.4.4](/WAI/WCAG21/Understanding/link-purpose-in-context))
  * [Fonction du lien (lien uniquement) 2.4.9](/WAI/WCAG21/quickref/#link-purpose-link-only) ([Comprendre 2.4.9](/WAI/WCAG21/Understanding/link-purpose-link-only))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Rédigez des équivalents textuels pertinents pour les images

Pour chaque image, rédigez un équivalent textuel qui fournit des informations sur l’image, ou sur son utilité. Pour les images purement décoratives, un équivalent textuel n’est pas nécessaire.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : utiliser un équivalent textuel pour communiquer des informations importantes" class="example" %}
{:/}

<div class="text-alt two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Non informatif</figcaption>
    <div>
      {% include_cached image.html src="tips/phone_charging.png" alt="Charger un téléphone"  float="left" %}
      <div>
        <p>Charger le téléphone : connectez le téléphone à une prise électrique en utilisant le câble et l’adaptateur fournis.</p>
        <p><strong>Équivalent textuel pour l’image</strong>: "Charger un téléphone"</p>
      </div>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Informatif</figcaption>
    <div>
      {% include_cached image.html src="tips/phone_charging.png" alt="Branchez le câble sur le bord inférieur du téléphone." float="left" %}
      <div>
        <p>Charger le téléphone : connectez le téléphone à une prise électrique en utilisant le câble et l’adaptateur fournis.</p>
        <p><strong>Équivalent textuel pour l’image</strong>: "Branchez le câble sur le bord inférieur du téléphone"</p>
      </div>
    </div>
  </figure>
</div>
<p class="note">Un équivalent textuel n’est généralement pas visible&nbsp;; il est inclus dans cet exemple pour vous permettre de voir à quoi il ressemble.</p>

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
  * [Importance des équivalents textuels pour un utilisateur aveugle](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Créez des transcriptions et des sous-titres pour les contenus multimédias

Pour du contenu seulement audio, comme un podcast, fournissez une transcription. Pour du contenu audio et visuel, tel que les vidéos de formation, fournissez également des sous-titres. Incluez dans les transcriptions et les sous-titres les informations parlées et les sons importants à la compréhension du contenu&nbsp;; par exemple&nbsp;: «&nbsp;la porte grince&nbsp;». Pour les transcriptions de vidéo, incluez également une description du contenu visuel important&nbsp;; par exemple&nbsp;: «&nbsp;Athan quitte la pièce&nbsp;».

{::nomarkdown}
{% include_cached box.html type="start" title="Plus d’informations" class="simple" %}
{:/}

* **WCAG**
  * [Sous-titres (pré-enregistrés) 1.2.2](/WAI/WCAG21/quickref/#captions-prerecorded) ([Comprendre 1.2.2](/WAI/WCAG21/Understanding/captions-prerecorded))
  * [Audiodescription ou version de remplacement pour un média temporel (pré-enregistré) 1.2.3](/WAI/WCAG21/quickref/#audio-description-or-media-alternative-prerecorded) ([Comprendre 1.2.3](/WAI/WCAG21/Understanding/audio-description-or-media-alternative-prerecorded))
* **Témoignage d’utilisateur**
  * [Comment les sous-titres aident un étudiant sourd](/people-use-web/user-stories/archived/#onlinestudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Fournissez des instructions claires

Assurez-vous que les instructions, l’aide, et les messages d’erreur sont clairs, faciles à comprendre, et évitent un langage inutilement technique. Décrivez les données à saisir, telles que les formats de date.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : les instructions communiquent quelles informations doit fournir l’utilisateur" class="example" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <form action="#" method="post">
        <p id="password-desc">Le mot de passe doit comporter au moins six caractères dont au moins un chiffre (0-9).</p>
        <div class="row">
          <label for="password">Mot de passe</label>
          <input aria-describedby="password-desc" type="password" id="password" name="password" value="">
        </div>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Exemple : le message d’erreur indique quel est le problème et, éventuellement, comment le régler" class="example" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <ol class="fa-ul error-list">
        <li id="error_email">{% include_cached icon.html name="warning" label="Erreur" %} <a href="javascript:return false">Le nom d’utilisateur "superours" est déjà utilisé.</a></li>
        <li id="error_password">{% include_cached icon.html name="warning" label="Erreur" %} <a href="javascript:return false">Le mot de passe doit inclure au moins un chiffre.</a></li>
      </ol>
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
* **Témoignage d’utilisateur**
  * [Comment des instructions simples aident les personnes avec des troubles d’apprentissage](/people-use-web/user-stories/archived/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Maintenez le contenu clair et concis

Utilisez un langage et une mise en forme simples, adaptés au contexte.

* Rédigez des phrases et des paragraphes à la fois courts et clairs ;
* Évitez l’utilisation de mots et de phrases inutilement compliqués ;
* Décrivez les acronymes lors de leur première utilisation. Par exemple, Les Règles pour l’accessibilité des contenus Web (WCAG) ;
* Envisagez de fournir un glossaire pour les termes que les lecteurs pourraient ne pas connaître ;
* Utilisez une présentation sous forme de liste si besoin ;
* Envisagez d’utiliser des images, illustrations, vidéos, audio et symboles pour aider à clarifier le sens.

{::nomarkdown}
{% include_cached box.html type="start" title="Exemple : rendre le contenu lisible et compréhensible" class="example" %}
{:/}

<div class="two-column">
  <figure class="from-col1 to-col2">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Mauvaise pratique" %} Inutilement complexe</figcaption>
    <div>
      <p class="fail">PTD&nbsp;: En cas de collision de véhicules, un représentant désigné par l’entreprise cherchera à déterminer l’étendue et la cause des dommages aux biens appartenant à toutes les parties concernées. Une fois que notre représentant a obtenu des informations qui nous permettent de comprendre la causalité, nous pouvons ou non attribuer une compensation monétaire appropriée. La décision qui en résulte peut donner lieu à l’une des options suivantes : la demande n’est pas approuvée et se voit attribuer un statut de rejet&nbsp;; le statut de la demande est ambigu et nécessitera des informations supplémentaires avant de pouvoir être traitée&nbsp;; la demande est partiellement approuvée et un paiement réduit est attribué et émis&nbsp;; ou la demande est entièrement approuvée et le paiement total de la demande est attribué et émis.</p>
    </div>
  </figure>
  <figure class="from-col3 to-col4">
    <figcaption>{% include_cached icon.html name="check-circle" label="Bonne pratique" %} Plus facile à comprendre</figcaption>
    <div>
      <p class="pass">Procédure de traitement des demandes (PTD)&nbsp;: Si vous avez un accident de voiture, notre agent mènera une enquête. Les résultats de l’enquête détermineront le paiement de la demande d’indemnisation. Cela pourrait entraîner :</p>
      <ul>
        <li>Une demande d’indemnisation approuvée&nbsp;: paiement complet ;</li>
        <li>Une demande partiellement approuvée&nbsp;: paiement réduit ;</li>
        <li>Une demande au statut indéterminé&nbsp;: complément d’informations nécessaire ;</li>
        <li>Une demande rejetée&nbsp;: aucun paiement.</li>
      </ul>
      <p>{% include_cached image.html src="tips/clear_text_diagram.png" alt="" style="max-width:100%" %}</p>
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
  * [Niveau de lecture 3.1.5](/WAI/WCAG21/quickref/#reading-level) ([Comprendre 3.1.5](/WAI/WCAG21/Understanding/reading-level))
  * [Mots rares 3.1.3](/WAI/WCAG21/quickref/#unusual-words) ([Comprendre 3.1.3](/WAI/WCAG21/Understanding/unusual-words))
  * [Abréviations 3.1.4](/WAI/WCAG21/quickref/#abbreviations) ([Comprendre 3.1.4](/WAI/WCAG21/Understanding/abbreviations))
* **Témoignage d’utilisateur**
  * [Un texte facile à lire profite à un utilisateur avec des troubles de lecture](/people-use-web/user-stories/archived/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="En savoir plus sur l’accessibilité" class="large" icon="readmore" %}
{:/}

Ces conseils sont quelques-uns des éléments à prendre en compte pour l’accessibilité Web. Des conseils d’écriture supplémentaires pour répondre aux besoins des personnes avec des troubles cognitifs et d’apprentissage sont présentés dans **[Utilisez du contenu clair et compréhensible](https://www.w3.org/WAI/WCAG2/supplemental/objectives/o3-clear-content/)**.

Les ressources suivantes vous aident à en savoir plus sur l’importance de l’accessibilité, et sur les recommandations pour rendre le Web plus accessible aux personnes en situation de handicap.

* [Introduction à l’accessibilité](/fundamentals/accessibility-intro/) — Introduit l’accessibilité et fournit des liens vers de nombreuses ressources utiles
* [Principes d’accessibilité](/fundamentals/accessibility-principles/) — Une introduction aux exigences des <abbr>WCAG</abbr>
* [Comment les personnes en situation de handicap utilisent le Web](/people-use-web/) — Exemples concrets soulignant l'importance de l'accessibilité pour les personnes en situation de handicap
* [Comment répondre aux exigences des WCAG (Référence rapide)](/WAI/WCAG21/quickref/) — liste personnalisable de toutes les recommandations et techniques des WCAG

{::nomarkdown}
{% include box.html type="end" %}
{:/}
