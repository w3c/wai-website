---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Composantes essentielles de l’accessibilité du Web
nav_title: "Composantes de l'accessibilité du Web" # A short title that is used in the navigation
lang: fr   # Change "en" to the translated language shortcode
last_updated: 2024-03-14   # Keep the date of the English version

translation:
  last_updated: 2024-03-19  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "@code-elegant"
contributors:
- name: "Rémi Bétin"

github:
  label: wai-components

permalink: /fundamentals/components/fr   # Add the language shortcode to the end; for example /path/to/file/fr
ref: /fundamentals/components/   # Do not change this

feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>
    <strong>Autorisation d’exploitation&nbsp;:</strong>
    Vous pouvez utiliser les images de cette page pour l’éducation à l’accessibilité et sa sensibilisation si vous&nbsp;:<br>
    1. Incluez l’URI <strong><span class="changed">w3.org/WAI/fundamentals/components/</span> <em>en évidence</em></strong> à proximité de l’image, et <br>
    2. Incluez l’attribution à l’artiste, l’éditeur, et la mention de copyright dans tous les travaux publiés ou diffusés&nbsp;:<br><cite>Image par Michael Duffy, depuis&nbsp;: Essential Components of Web  Accessibility. Éditrice S. L. Henry. Copyright W3C <sup>®</sup> (MIT, ERCIM, Keio, Beihang). w3.org/WAI/fundamentals/components/</cite><br>
    Pour plus d’informations, voir <a href="https://www.w3.org/WAI/about/using-wai-material/" lang="en" hreflang="en">Using WAI Materials (en anglais)</a>.
  </p>
  <p><strong>Rédaction&nbsp;:</strong> <a href="https://www.w3.org/People/Shawn" lang="en" hreflang="en">Shawn Lawton Henry</a>. Graphiste&nbsp;: Michael Duffy.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Résumé" class="full" %}
{:/}
 
Cette page montre comment l’accessibilité dépend de l’articulation harmonieuse de nombreuses composantes, et comment des améliorations de certaines pourraient améliorer sensiblement l’accessibilité du Web.
 
Elle fournit les bases pour comprendre les différents standards d’accessibilité produits par l’Initiative pour l’accessibilité du Web (<abbr lang="en" title="Web Accessibility Initiative">WAI</abbr>) du <abbr title="World Wide Web Consortium" lang="en">W3C</abbr>.
 
{::nomarkdown}
{% include box.html type="end" %}
{:/}
 
{::nomarkdown}
{% include_cached toc.html type="start" title="Contenu de la page" class="simple" %}
{:/}
 
{::options toc_levels="2" /}
 
- This text will be replaced by the TOC.
{:toc}
 
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}
 
 
## Introduction {#intro}
{:.no_toc}
 
Il est essentiel que des composantes distinctes et multiples du développement web et de l’interaction utilisateur s’articulent convenablement pour que le Web soit accessible aux personnes handicapées. Ces composantes incluent&nbsp;:
 
- **du contenu** – l’information contenue dans une page web ou une application web, y compris&nbsp;:
  - de l’information primaire telle que du texte, des images et des sons,
  - du code ou du balisage qui définit la structure, la présentation… &nbsp;;
- **des navigateurs web, des lecteurs de média**, et d’autres «&nbsp;agents utilisateurs&nbsp;»&nbsp;;
- **une technologie d’assistance**, dans certains cas – lecteurs d’écran, claviers alternatifs, contacteurs, logiciel de numérisation… &nbsp;;
- les connaissances, l’expérience et dans certains cas les stratégies d’adaptation **des utilisateurs** pour l’utilisation du Web&nbsp;;
- **des créateurs** – concepteurs, graphistes, codeurs, auteurs… y compris des créateurs handicapés et des utilisateurs qui contribuent&nbsp;;
- **des outils de création** – logiciels de création de sites web&nbsp;;
- **des outils d’évaluation** – outils d’évaluation de l’accessibilité web, validateurs HTML ou CSS…
 
## Comment les composantes s’articulent {#relate}

{% assign longdesc_url = "/fundamentals/components/examples/fr#relate" | relative_url %}
{% include image.html src="components/relate.fr.png" alt="Illustration montrant comment les composantes s’articulent" longdesc=longdesc_url %}

Les **créateurs** web utilisent généralement **des outils de création** et des outils d’évaluation pour créer du **contenu** web.
 
**Les personnes** ("**utilisateurs**") utilisent des **navigateurs web, des lecteurs de média, des technologies d’assistance,** ou d’autres "**agents utilisateurs**" pour obtenir ou interagir avec le **contenu**.
 
## Interdépendances entre les composantes {#depend}
 
Il y a des interdépendances cruciales entre les composantes&nbsp;; c’est-à-dire que les composantes doivent s’articuler correctement pour que le web soit accessible. Par exemple, pour les équivalents textuels aux images&nbsp;:
 
- les **spécifications techniques** traitent des équivalents textuels (par exemple, HTML définit l’attribut d’équivalent textuel (`alt`) pour l’élément image (`img`))&nbsp;;
- **les règles WAI** ([WCAG, ATAG, UAAG décrites ci-dessous](#guidelines)) définissent comment mettre en place les équivalents textuels dans la perspective de l’accessibilité pour les différentes composantes&nbsp;;
- les **créateurs** fournissent la formulation appropriée de l’équivalent textuel&nbsp;;
- les **outils de création** permettent, facilitent et promeuvent la fourniture d’un équivalent textuel dans une page web&nbsp;;
- les **outils d’évaluation** sont utilisés pour faciliter la vérification de la présence d’équivalents textuels&nbsp;;
- les **agents utilisateurs** fournissent des interfaces à destination des êtres humains et des machines pour l’équivalent textuel&nbsp;;
- les **technologies d’assistance** fournissent un accès aux êtres humains à l’équivalent textuel suivant différentes modalités&nbsp;;
- les **utilisateurs** savent comment obtenir l’équivalent textuel depuis leur agent utilisateur ou leur technologie d’assistance ou les deux, selon que de besoin.
 
### Le cycle de mise en œuvre
 
Quand les fonctionnalités d’accessibilité sont effectivement mises en œuvre dans une composante, les autres composantes sont plus susceptibles de les mettre en œuvre elles aussi.

{% include image.html src="components/cycle.fr.png" alt="" %}
 
- Quand **les navigateurs web, les lecteurs de média, les technologies d’assistance, et les autres agents utilisateurs** fournissent une fonctionnalité d’accessibilité, les utilisateurs sont plus susceptibles de l’exiger  et les créateurs sont plus susceptibles de l’implémenter dans leur **contenu**&nbsp;;
- Quand les créateurs veulent implémenter une fonctionnalité d’accessibilité dans leur **contenu**, ils sont plus susceptibles d’exiger que leur **outil de création** en rende simple la mise en œuvre&nbsp;;
- Quand **les outils de création** rendent simple la mise en œuvre d’une fonctionnalité, les créateurs sont plus susceptibles de la mettre en œuvre dans leur **contenu**&nbsp;;
- Quand une fonctionnalité d’accessibilité est mise en œuvre dans  **la plupart des contenus**, les créateurs et les utilisateurs sont plus susceptibles d’exiger que les **agents utilisateurs** la prennent en charge.
 
### Quand une composante est déficiente
 
Si une fonctionnalité d’accessibilité n’est pas mise en œuvre dans une composante, il y a peu de motivation pour les autres composantes pour l’implémenter s’il n’en résulte pas une expérience utilisateur accessible. Par exemple les créateurs n’implémenteront probablement pas une fonctionnalité d’accessibilité que les outils de création ne fournissent pas et que la plupart des navigateurs et des technologies d’assistance ne mettent pas en œuvre systématiquement.

{% assign longdesc_url = "/fundamentals/components/examples/fr#weak" | relative_url %}
{% include image.html src="components/bridge.fr.png" alt="Illustration de ce qui arrive quand une composante est déficiente" longdesc=longdesc_url %}

Si une composante a une faible prise en compte de l'accessibilité, d’autres composantes peuvent parfois compenser cela au travers de «&nbsp;contournements&nbsp;» qui nécessitent beaucoup plus d’effort et ne sont pas positifs pour l’accessibilité en général. Par exemple&nbsp;:
 
- les créateurs peuvent avoir plus de travail pour compenser des lacunes dans les fonctionnalités d’accessibilité des outils de création&nbsp;; par exemple en codant du balisage directement plutôt que grâce à un outil&nbsp;;
- les utilisateurs peuvent avoir plus de travail pour compenser des lacunes dans les fonctionnalités d’accessibilité des navigateurs, des lecteurs de média, et de la technologie d’assistance&nbsp;; et le manque d’accessibilité du contenu&nbsp;; par exemple en utilisant différents navigateurs ou technologies d’assistance pour surmonter différents problèmes d'accessibilité.
 
Cependant dans la plupart des cas les contournements ne sont pas mis en œuvre et le résultat reste décevant en matière  d’accessibilité. De plus un support défaillant de l’accessibilité dans une composante ne peut parfois pas toujours être raisonnablement compensé par les autres composantes&nbsp;; le résultat étant l’inaccessibilité, rendant impossible pour certaines personnes handicapées l’utilisation d’un site, d’une page ou d’une fonctionnalité en particulier.
 
## Règles et autres standards {#guidelines}
 
L’Initiative pour l’accessibilité du Web (<abbr lang="en" title="Web Accessibility Initiative">[WAI](https://www.w3.org/WAI/)</abbr>) du <span lang="en">World Wide Web Consortium</span> ([W3C](https://www.w3.org/)) développe des **standards d’accessibilité du Web** pour différentes composantes&nbsp;:
 
- [les Règles pour l'accessibilité des outils d'édition (<abbr lang="en" title="Authoring Tool Accessibility Guidelines">ATAG</abbr>)](/standards-guidelines/atag/) traite des outils de création&nbsp;;
- [les Règles pour l'accessibilité des contenus Web (<abbr lang="en" title="Web Content Accessibility Guidelines">WCAG</abbr>)](/standards-guidelines/wcag/) traite du contenu web, et est utilisé par les créateurs, outils de création et outils d’évaluation de l’accessibilité&nbsp;;
- [les Règles pour l'accessibilité des agents utilisateurs (<abbr lang="en" title="User Agent Accessibility Guidelines ">UAAG</abbr>)](/standards-guidelines/uaag/) traite des navigateurs et lecteurs de média, y compris certains aspects des technologies d’assistance.
 
Ces règles d’accessibilité reposent sur le socle des spécifications techniques fondamentales du Web, et sont développées en coordination avec toutes les <a href="https://www.w3.org/TR/">spécifications techniques de W3C {% include_cached different.html %}</a> (HTML, CSS, SVG, SMIL, etc.). W3C développe aussi des spécifications techniques qui traitent directement d’accessibilité, dont&nbsp;:
 
* la suite des spécifications [<abbr lang="en" title="Accessible Rich Internet Applications">ARIA</abbr>, les applications Internet riches accessibles](/standards-guidelines/aria/), qui définit une façon de créer des applications web plus accessibles aux personnes handicapées. Elle facilite notamment le développement de contenu dynamique et de contrôles d’interface utilisateur avancés avec Ajax, HTML, JavaScript et les technologies associées.

{% assign longdesc_url = "/fundamentals/components/examples/fr#guide" | relative_url %}
{% include image.html src="components/specs.fr.png" alt="Illustration montrant les règles pour les différentes composantes" longdesc=longdesc_url %}

Pour plus d’informations, consultez [[Vue d’ensemble des standards d’accessibilité du W3C
]](/standards-guidelines/).
