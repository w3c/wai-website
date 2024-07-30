---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.

title: Resumen de los estándares de accesibilidad de W3C # Do not translate "title:". Do translate the text after "title:".
nav_title: "Estándares/Pautas" # A short title that is used in the navigation

lang: es   # Change "en" to the translated language shortcode from https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry

last_updated: 2021-05-14   # Put the date of this translation YYYY-MM-DD (with month in the middle)
translators: 
- name: "Carlos Muncharaz"   # Replace @@ with translator name
  link: "http://www.muncharaz.eu/"
contributors:
- name: "Martín Álvarez-Espinar (CTIC)"   # Replace @@ with contributor name, or delete this line if none
- name: "Jorge Rumoroso"   # Replace @@ with name, or delete this line if not multiple contributors

ref: /standards-guidelines/   # Do not change this
changelog: /standards-guidelines/changelog/
github:
  label: wai-standards-guidelines
permalink: /standards-guidelines/es   # Add the language shortcode to the end; for example /standards-guidelines/fr
feedbackmail: wai@w3.org

footer: >   # Translate all the words below, including "Date:" and "Editor:". Do not change these dates.
  <p><strong>Fecha:</strong> Actualizado el 30 de abril del 2021. CHANGELOG.</p>
  <p><strong>Editora:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Desarrollado con la colaboración del Grupo de Trabajo de Educación y Difusión (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Resumen" class="full" %}
{:/}

Esta página presenta pautas y otros estándares relacionados con la accesibilidad web.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenidos de la página" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introducción {#intro}

El World Wide Web Consortium (W3C) desarrolla estándares web internacionales: <abbr title="Hypertext Markup Language">HTML</abbr>, <abbr title="Cascading Style Sheets">CSS</abbr> y muchos más. Los estándares de W3C se llaman <dfn>Recomendaciones del W3C</dfn>.
 
El soporte para la accesibilidad de todos los estándares de W3C es revisado por el Grupo de Trabajo de Arquitecturas de Plataforma Accesible - [APA](/about/groups/apawg/).
 
Los estándares W3C y las Notas de los Grupos de Trabajo que se mencionan abajo son particularmente relevantes para la accesibilidad.

## Pautas de accesibilidad {#guidelines}

En los [[componentes esenciales de la accesibilidad web]](/fundamentals/components/) se puede ver que la accesibilidad depende de varios componentes de desarrollo web que interactúan juntos y cómo se aplican las pautas de WAI (WCAG, ATAG, UAAG).

### Pautas de accesibilidad para el contenido web (WCAG) 2 {#wcag2}

Por “contenido” web se hace referencia, generalmente, a la información que se puede encontrar en una página o aplicación web, lo cual incluye:
 
* información natural como textos, imágenes y sonidos.
* código o marcado que define la estructura, la presentación, etc.
 
Las pautas WCAG se aplican al contenido dinámico, multimedia, “móvil”, etc. También se pueden aplicar a tecnologías de la información y la comunicación (TIC) no relacionadas con la web, como se explica en [WCAG2ICT](/standards-guidelines/wcag/non-web-ict/).

Información sobre las pautas WCAG 2:

- [[Resumen de WCAG]](/standards-guidelines/wcag/)
- [[WCAG 2.1 de un vistazo]](/standards-guidelines/wcag/glance/)
- [Cómo seguir las pautas WCAG 2 (Guía rápida)](https://www.w3.org/WAI/WCAG21/quickref/)
- [[Traducciones WCAG 2]](/standards-guidelines/wcag/translations/)
- [Estándar WCAG 2.0](https://www.w3.org/TR/WCAG20/)
- [Estándar WCAG 2.1](https://www.w3.org/TR/WCAG21/), [[Novedades en WCAG 2.1]](/standards-guidelines/wcag/new-in-21/)
- [[Novedades en el borrador de WCAG 2.2]](/standards-guidelines/wcag/new-in-22/)

### Pautas de accesibilidad para las herramientas de creación de contenido (ATAG) {#atag}

Las herramientas de creación de contenido son programas o servicios que los “autores” (desarrolladores web, diseñadores, redactores, etc) utilizan para producir contenido web. Por ejemplo: editores de HTML, sistemas de gestión de contenidos (CMS) y sitios web que permiten a los usuarios añadir contenido tales como blogs y redes sociales. Los documentos ATAG explican cómo:

* hacer que las herramientas de creación de contenido sean accesibles en sí mismas, de forma que las personas con discapacidad puedan crear contenido web, y
* ayudar a los autores a crear contenido web más accesible.

Información sobre las pautas ATAG:
- [[Resumen de ATAG]](/standards-guidelines/atag/)
- [[ATAG de un vistazo]](/standards-guidelines/atag/glance/)
- [Estándar ATAG 2.0](https://www.w3.org/TR/ATAG/)

### Pautas de accesibilidad para el agente de usuario (UAAG) {#uaag}

Los agentes de usuario son navegadores, extensiones de los navegadores, reproductores multimedia, lectores y otras aplicaciones que presentan contenido web.

Información sobre las pautas UAAG:
- [[Resumen de UAAG]](/standards-guidelines/uaag/)
- [Nota sobre UAAG 2.0](https://www.w3.org/TR/UAAG20/)

### Pautas de accesibilidad del W3C (WCAG) 3 Borrador {#wcag3}

Las pautas WCAG 3 se encuentran en un borrador inicial que se convertirá en un estándar W3C. WCAG 3 afecta al contenido web, aplicaciones, herramientas, publicaciones y tecnologías emergentes en la web.

Información sobre WCAG 3:

* [[Introducción a WCAG 3]](/standards-guidelines/wcag/wcag3-intro/)

## Especificaciones técnicas

### Aplicaciones de Internet Enriquecidas Accesibles (WAI-ARIA) {#aria}

ARIA proporciona semántica, de tal forma que los autores pueden transmitir comportamientos de la interfaz de usuario e información estructural a las tecnologías de apoyo (por ejemplo, lectores de pantalla). La especificación de ARIA establece una ontología de roles, estados y propiedades que definen elementos accesibles en la interfaz de usuario.

La suite de ARIA incluye especificaciones de esquemas <abbr title="application programming interface">API</abbr> que proporcionan orientación para la aplicación en agentes de usuario. También incluye módulos para gráficos y la publicación digital.

Información sobre ARIA:
- [[Resumen de WAI-ARIA]](/standards-guidelines/aria/) – incluye [lista y descripción de módulos y esquemas API](/standards-guidelines/aria/#versions)
- [Prácticas de autor de WAI-ARIA](https://www.w3.org/TR/wai-aria-practices/)
- [Estándar WAI-ARIA 1.1](https://www.w3.org/TR/wai-aria-1.1/)

### Audio y vídeo {#multimedia}

- [Pistas de Texto para Vídeo en la Web (WebVTT)](https://www.w3.org/TR/webvtt/) es un formato para subtítulos, descripciones textuales de vídeo y otros metadatos que se sincronizan temporalmente con el contenido auditivo o visual.

- [Lenguaje de Etiquetado de Texto Sincronizado (TTML)](https://www.w3.org/TR/ttml/) sirve para transcodificar o intercambiar información textual sincronizada temporalmente entre formatos de subtítulos antiguos.

### Evaluación {#eval}

Los siguientes recursos permiten desarrollar métodos y herramientas para evaluar la accesibilidad:

- [[Resumen de Pruebas de Conformidad de Accesibilidad (ACT)]](/standards-guidelines/act/) &mdash; ACT establece y describe normas para comprobar la conformidad del contenido web con los estándares de accesibilidad.

- [[Resumen de Lenguaje de Evaluación e Informes (EARL)]](/standards-guidelines/earl/) &mdash; EARL es un formato para ser leído por aplicaciones que sirve para expresar los resultados de las pruebas.

Recursos adicionales relacionados con la evaluación se pueden encontrar en el [[resumen de evaluación de la accesibilidad web]](/test-evaluate/), incluyendo:

- [[Resumen de WCAG-EM: Metodología de Evaluación de Conformidad con la Accesibilidad en sitios Web]](/test-evaluate/conformance/wcag-em/) &mdash; WCAG-EM es una aproximación para determinar cuánto se ajusta un sitio web a las pautas de accesibilidad para el contenido web (WCAG).

### Personalización

[[Resumen sobre la personalización]](/adapt/) &mdash; La personalización consiste en ajustar la experiencia del usuario a fin de cubrir las necesidades y preferencias individuales. Los autores de contenido pueden usar estándares de personalización para proporcionar un diseño por defecto y permitir la personalización del usuario con un esfuerzo mínimo.

### Pronunciación

[[Resumen sobre la pronunciación]](/pronunciation/) &mdash; La pronunciación consiste en conseguir que los lectores de pantalla y otros sistemas de síntesis del habla pronuncien el contenido correctamente.

## Otras áreas del trabajo de W3C WAI

- [[Accesibilidad móvil en W3C]](/standards-guidelines/mobile/)

- [[Accesibilidad cognitiva en W3C]](/cognitive/)

## Información adicional {#moreinfo}

- [Listado de todos los Estándares W3C relacionados con la accesibilidad ("Recomendaciones del W3C") y Notas de los Grupos de Trabajo](https://www.w3.org/TR/?tag=accessibility)

- [[Leyes y políticas de accesibilidad web]](/policies/) donde se relacionan leyes gubernamentales y políticas sobre accesibilidad web en países y regiones de todo el mundo. Muchas de estas hacen referencia a los estándares de accesibilidad del W3C.

- [[Por qué la armonía entre los estándares es fundamental para la accesibilidad web]](/standards-guidelines/harmonization/)

- [[Creación de referencias y enlaces a las pautas y documentos técnicos de WAI]](/standards-guidelines/linking/)

- [Cómo se desarrollan las pautas de accesibilidad en WAI a través del método de trabajo de W3C: hitos y **oportunidades para participar**](/standards-guidelines/w3c-process/)

![Ilustración mostrando las pautas de los diferentes componentes, una descripción detallada se puede encontrar en https://www.w3.org/WAI/intro/components-desc.html#guide]({{ "/content-images/components/specs.png" | relative_url }})
