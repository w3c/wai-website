---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Expériences utilisateurs et bénéfices pour les organisations"
title_image: /content-images/media-guide/body.svg
nav_title: "Besoins utilisateurs"
lang: fr   # Change "en" to the translated-language shortcode
last_updated: 2021-11-29   # Keep the date of the English version

translation:
  last_updated: 2022-09-23  # Put the date of the translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Rémi Bétin"

permalink: /media/av/users-orgs/fr   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /media/av/users-orgs/   # Do not change this

github:
  label: wai-media-guide

resource:
  ref: /media/av/
navigation:
  previous: /media/av/
  next:     /media/av/planning/
changelog: /media/av/changelog/  # Do not change this
acknowledgements: /media/av/acknowledgements/  # Do not change this

description: Introduit les besoins et les expériences utilisateur de personnes en situation de handicap qui utilisent des contenus audio et vidéo sur le Web. Présente aussi les bénéfices de médias accessibles pour les personnes « sans handicap » et pour les organisations.
image: /content-images/media-guide/social.png

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
   <p>Première publication : septembre 2019 (sur une page différente).</p>
   <p><strong>Rédactrice :</strong> <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS : liste les contributeurs et les crédits.</p>
   <p>Développé par le groupe de travail Éducation et Promotion (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Rédigé initialement dans le cadre du projet <a href="https://www.w3.org/WAI/WCAGTA/">WCAG TA</a> financé par le <abbr title="United States">U.S.</abbr> Access Board. Révisé dans le cadre du projet <a href="https://www.w3.org/WAI/expand-access/">WAI Expanding Access</a> financé par la fondation Ford.</p>
---

{::nomarkdown}
{% include box.html type="start" title="Résumé" class="" %}
{:/}

Cette page présente des besoins et des expériences d’utilisateurs. Elle explique le « pourquoi » derrière les exigences d’accessibilité des médias présentées dans cette ressource. Elle inclut également des exemples de bénéfices business pour les organisations.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include toc.html type="start" title="Table des matières" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{::options toc_levels="2" /}
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Comprendre les besoins des utilisateurs et les expériences des personnes en situation de handicap

<div style="float:right; margin-left:1em;">
{% include image.html src="media-guide/ear.svg" alt="" class="mini" %}<br><br> 
{% include image.html src="media-guide/eye.svg" alt="" class="mini" %}<br><br>
{% include image.html src="media-guide/brain.svg" alt="" class="mini" %}<br><br>
{% include image.html src="media-guide/hand.svg" alt="" class="mini" %}<br><br>
{% include image.html src="media-guide/speech.svg" alt="" class="mini" %}
</div>

Il est tout d’abord utile de comprendre les expériences utilisateurs des personnes en situation de handicap. Ensuite, vous saurez le « pourquoi » derrière les exigences d’accessibilité des médias présentées dans cette ressource. Par exemple, une personne qui est sourde ne peut pas entendre l’audio, vous devez donc fournir les informations audio importantes sous une autre forme.

* Beaucoup de personnes **sourdes** peuvent bien lire un texte. Elles obtiennent les informations audio à partir de **transcriptions** ou de **sous-titres**. Certaines personnes préfèrent la **langue des signes**.
* Certaines personnes **malentendantes** aiment écouter l’audio pour entendre ce qu’elles peuvent, et bénéficient des **sous-titres** pour combler ce qu’elles ne peuvent pas entendre convenablement.
* Certaines personnes ayant des **difficultés à traiter les informations auditives** utilisent aussi les **sous-titres**. Beaucoup utilisent les **transcriptions** pour pouvoir lire à leur rythme.
* Certaines personnes **aveugles** ou malvoyantes ne peuvent pas bien voir les vidéos voire pas du tout. Elles utilisent **une description des informations visuelles** pour comprendre ce qu’il se passe visuellement. *(La description est appelée audio-description, vidéo-description ou vidéo décrite.)*
* Certaines personnes **sourdes-aveugles** utilisent un lecteur d’écran et le braille pour lire les **transcriptions descriptives** qui incluent les informations audio et visuelles sous forme de texte.
* Certaines personnes **ne peuvent pas se concentrer et comprendre les informations auditives et visuelles** quand les images bougent. Pour la plupart des vidéos, elles ont également besoin de **transcriptions descriptives**.
* Certaines personnes ne peuvent pas utiliser leurs mains et **utilisent un logiciel de reconnaissance vocale** pour commander leur ordinateur, y compris le **lecteur multimédia**.  Et les personnes **aveugles** ont besoin que le lecteur multimédia fonctionne sans souris.
* Certaines personnes utilisent plusieurs fonctionnalités d’accessibilité en même temps. Par exemple, quelqu’un peut vouloir des sous-titres, une description textuelle des informations visuelles, et une description audio.

Si vous souhaitez en savoir plus, consultez ces autres ressources :
* [[Comment les personnes en situation de handicap utilisent le web]](/people-use-web/)
* [Exigences des utilisateurs en matière d’accessibilité des contenus multimédia](https://www.w3.org/TR/media-accessibility-reqs/)
* [[Impliquer les utilisateurs dans les projets Web pour améliorer et faciliter l’accessibilité]](/planning/involving-users/)

## Utilisées par des personnes avec ou _sans_ handicaps {#situations}

Un média accessible est **essentiel pour les personnes en situation de handicap**, et est **utile pour tous**. Les fonctionnalités d’accessibilité sont également utilisées par des personnes _sans_ handicaps dans une multitude de situations.

{% include image.html src="media-guide/transcript.svg" alt="" class="mini right" %}

Par exemple, les transcriptions peuvent être :
* Parcourues ou lues à la place d’un visionnage ou d’une écoute. Cela est significativement plus simple et plus rapide pour beaucoup d’utilisateurs. Parfois, des personnes veulent d’abord parcourir la transcription avant de décider ou non de lire le média.
* Utilisées sans avoir besoin de télécharger les fichiers vidéos. Par exemple, pour économiser des données sur mobile.
* Utilisées hors connexion, imprimées, ou converties en braille.

{% include image.html src="media-guide/cc.svg" alt="" class="mini right" %}

Et les sous-titres peuvent être utilisés :
* Dans des environnements bruyants où les utilisateurs ne peuvent pas entendre l’audio. Par exemple, dans un bar, un aéroport ou un concert.
* Dans des environnements calmes où les utilisateurs ne peuvent pas mettre en marche le son. Par exemple, dans une bibliothèque, un transport public ou lorsque d’autres personnes dorment.
* Par des personnes qui ne comprennent pas bien la langue parlée et peuvent mieux comprendre la langue une fois écrite. Par exemple, les personnes dont ce n’est pas la langue maternelle.
* Par des personnes apprenant à lire, y compris des personnes apprenant une nouvelle langue.
* Pour mieux comprendre le contenu car les utilisateurs peuvent écouter l’information en audio et la voir en même temps sous forme de texte. Par exemple, une [étude de recherche sur les sous-titres et les transcriptions {% include_cached external.html %}](https://www.3playmedia.com/2019/02/21/8-benefits-of-transcribing-captioning-videos/) a révélé que 71 % des étudiants _sans_ difficultés auditives utilisent les sous-titres, principalement pour les aider à se concentrer et à mémoriser les informations.

## Bénéfices pour les organisations {#benefits}

{% include image.html src="media-guide/brand.svg" alt="inclusif, divers, responsable" class="normal right" %}

Les organisations qui rendent leurs contenus audio et vidéo accessibles peuvent récolter des bénéfices tels que :
* Une augmentation du trafic et un site Web utilisé par des personnes avec ou sans handicaps, par exemple, dans les [situations décrites ci-dessus](#situations).
* Une meilleure expérience utilisateur pour tous et une amélioration de la satisfaction client.
* Une meilleure indexation par les moteurs de recherche. 

{% include image.html src="media-guide/market-reach.svg" alt="" class="small right" %}

Les bénéfices pour les organisations sont illustrés dans d’autres ressources :
* <em>Les bénéfices business de l’accessibilité numérique</em> incluent **des données d’une étude de cas** sur l’ajout de transcriptions, et plus d’informations sur la manière dont l’accessibilité peut [étendre votre marché](https://www.w3.org/WAI/business-case/#increase-market-reach).
* Les bénéfices des transcriptions et des sous-titres pour une université sont mentionnés dans un [**scénario utilisateur/persona** d’une étudiante en ligne malentendante](https://www.w3.org/WAI/people-use-web/user-stories/archived/#onlinestudent).
* Certains bénéfices des sous-titres sont illustrés dans une [**Vidéo** d’une minute sur les sous-titres<br>
{% include image.html src="media-guide/captions-video-still.jpg" alt="" class="normal video" %}](https://www.w3.org/WAI/perspective-videos/captions/)

Cette ressource vous aide à rendre vos médias utilisables par des personnes avec et sans handicaps, et à bénéficier à votre organisation. La page suivante vous permet de commencer à **[planifier la réalisation de médias audio et vidéo accessibles](/media/av/planning/)**.
