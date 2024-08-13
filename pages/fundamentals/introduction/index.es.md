---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Introducción a la Accesibilidad Web 
lang: es   # Change "en" to the translated language shortcode
last_updated: 2019-07-11   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Jorge Rumoroso"
  link: "https://twitter.com/rumoroso"
contributors:
- name: "Carlos Muncharaz"

permalink: /fundamentals/accessibility-intro/es   # Add the language shortcode to the end; for example /fundamentals/accessibility-intro/fr
ref: /fundamentals/accessibility-intro/   # Do not change this
changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this
github:
    label: wai-intro-accessibility

# In the footer below:
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>Fecha:</strong> Actualizado a 11 July 2019. Primera publicación en Febrero 2005. CHANGELOG.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Desarrollado por Grupo de Trabajo de Educación y Divulgación (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---


{::nomarkdown}
{% include box.html type="start" h="2" title="Resumen" class="full" %}
{:/}

Cuando los sitios y herramientas web están bien diseñados y codificados, las personas con discapacidad pueden utilizarlos. Sin embargo, en la actualidad muchos sitios y herramientas están desarrollados incluyendo barreras de accesibilidad que dificultan o imposibilitan su uso por parte de algunas personas.

Hacer la web accesible beneficia tanto a las personas, como a las empresas y a la sociedad en general. Los estándares web internacionales definen lo que la accesibilidad necesita.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenido de la Página" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">Recursos relacionados</span><br>
{% include video-link.html title="Video Introducción a la Accesibilidad Web y Estándares W3C <em>(4 minutos)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits.html" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Accesibilidad en contexto {#context}

<blockquote class="pull">
  <p>El poder de la Web está en su universalidad.<br />
    El acceso para cualquier persona, independientemente de las discapacidades, es un aspecto esencial.</p>
  <footer><cite>Tim Berners-Lee, Director del W3C Director e inventor de la World Wide Web</cite></footer>
</blockquote>

La Web está fundamentalmente diseñada para que todo el mundo pueda usarla, independientemente del hardware, software, idioma, ubicación o capacidad. Cuando la Web cumple ese objetivo, es accesible para personas con un diverso rango de audición, movimiento, visión y habilidades cognitivas.

Por lo tanto, el impacto de la discapacidad cambia radicalmente en la Web porque ésta elimina las barreras de comunicación e interacción que muchas personas encuentran en el mundo físico. Sin embargo, cuando los sitios web, aplicaciones, tecnologías o herramientas están mal diseñados, pueden crear barreras que excluyen a las personas del uso de la Web.

**La Accesibilidad es esencial para desarrolladores y organizaciones que quieren crear sitios y herramientas web de calidad y no excluir personas del uso de sus productos y servicios.**


## Qué es la Accesibilidad Web {#what}

Accesibilidad Web significa que sitios web, herramientas y tecnologías están diseñadas y desarrolladas de tal manera que las personas con discapacidades pueden usarlas. Más concretamente, las personas pueden:

-   percibir, comprender, navegar e interactuar con la Web
-   contribuir a la Web

La Accesibilidad web abarca todas las discapacidades que afectan al acceso a la Web, incluyendo:

-   auditivas
-   cognitivas
-   neurológicas
-   físicas
-   del habla
-   visuales

La accesibilidad web también beneficia personas *sin* discapacidad, como por ejemplo:

-   personas utilizando teléfonos móviles, relojes inteligentes, televisores inteligentes y otros dispositivos con pantallas pequeñas, diferentes modos de entrada, etc.
-   personas mayores cuyas habilidades cambian con la edad
-   personas con "discapacidades temporales", como puede ser un brazo roto o la pérdida de unas gafas
-   personas con "limitaciones por su ubicación", como puede ser bajo la luz del sol o en un entorno donde no se puede escuchar audio
-   personas con conexión lenta a Internet o que tienen ancho de banda limitado o costoso

Puede ver un vídeo de 7 minutos con ejemplos de cómo la accesibilidad es esencial para personas con discapacidades y útil para cualquier persona en una gran variedad de situaciones:<br>
{% include video-link.html title="Perspectivas de Accesibilidad Web <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Más información sobre Qué es Accesibilidad" class="simple aside" %}
{:/}

-   Si desea aprender más acerca de cómo las diferentes discapacidades afectan en el uso de la Web y leer sobre escenarios de personas con discapacidad usando la Web, acceda a [[Cómo las Personas con Discapacidades Utilizan la Web]](/people-use-web/).
-   Si desea más ejemplos de beneficios para otras personas, con las WCAG como ayuda, acceda a [[Experiencias Web Compartidas: Barreras comunes para Personas Usuarias de Dispositivos Móviles y Personas con Discapacidades]](/standards-guidelines/shared-experiences/) y a [Accesibilidad Web Beneficia a Personas con y sin Discapacidades](https://www.w3.org/WAI/business-case/archive/soc#groups).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## La Accesibilidad es importante para las personas, empresas y sociedad {#important}

La Web es un recurso importante en muchos aspectos de la vida: educación, trabajo, gobierno, salud, entretenimiento y más. Es esencial que la Web sea accesible de cara a facilitar igualdad de acceso y oportunidades a las personas con diferentes habilidades. El acceso a las tecnologías de la información y comunicación, incluyendo la Web, está definido como un derecho humano básico en la Convención de las Naciones Unidas sobre los Derechos de las Personas con Discapacidades (UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html)).

La Web ofrece la posibilidad sin precedentes de acceso a la información e interacción para muchas personas con discapacidad. Esto significa que las barreras de accesibilidad a material impreso, audio y medios visuales pueden ser más fácilmente superables a través de las tecnologías web.

La Accesibilidad da soporte a la inclusión social tanto a personas con discapacidad como a otras tales como:

-   personas mayores
-   personas en áreas rurales
-   personas en países en desarrollo

**También existe un sólido argumento comercial a favor de la accesibilidad.** Como se mostró en la sección previa, el diseño accesible mejora la experiencia y satisfacción de las personas usuarias, en una variedad de situaciones, a través de diferentes dispositivos y para personas mayores. Además, la accesibilidad puede mejorar su marca, impulsar la innovación y ampliar su alcance en el mercado.

La accesibilidad web es **requisito legal** en muchas ocasiones.

{::nomarkdown}
{% include box.html type="start" h="3" title="Más información sobre La Accesibilidad es Importante" class="simple aside" %}
{:/}

-   Información general sobre los beneficios a nivel de negocio en [[El Caso de Negocio de la Accesibilidad Digital]](/business-case/).
-   La guía para calcular los requisitos legales se encuentra en el archivo [Factores Legales y Políticos](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Hacer la Web accesible {#making}

La accesibilidad web depende de muchos componentes trabajando juntos, incluyendo tecnologías web, navegadores y otros \"agentes de usuario\", herramientas de autor y sitios web.

La Iniciativa de Accesibilidad Web del W3C ([WAI](/get-involved/)) desarrolla especificaciones técnicas, pautas, técnicas y recursos que describen soluciones de accesibilidad. Estos son considerados estándares internacionales para la accesibilidad web; por ejemplo, <abbr title="Pautas de Accesibilidad para el Contenido Web (WCAG)">WCAG</abbr> 2.0 son también estándar <abbr title="Organización Internacional de Estandarización">ISO</abbr>: ISO/<abbr title="Organización Internacional de Estandarización">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Más información sobre cómo Hacer la Web Accesible" class="simple aside" %}
{:/}

-   Más acerca de los componentes de la accesibilidad trabajando juntos: [[Componentes Esenciales de la Accesibilidad Web]](/fundamentals/components/).
-   Pautas de Accesibilidad al Contenido Web (WCAG), Pautas de Accesibilidad para Herramientas de Autor (ATAG), ARIA para Aplicaciones de Internet Enriquecidas Accesibles y otros recursos importantes: [[Resumen de los Estándares de Accesibilidad del W3C]](/standards-guidelines/).
-   Para aprender más sobre cómo W3C WAI desarrolla material a través de la participación de múltiples partes interesadas, la participación internacional y la forma en que usted puede contribuir: [[Sobre WAI]](/about/) y [[Participación en WAI]](/get-involved/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Hacer su sitio web accesible {#website}

Múltiples aspectos de la accesibilidad son sencillos de entender e implementar, mientras que algunas otras soluciones son mucho más complejas y requieren más conocimiento.

Es más eficiente y efectivo incorporar la accesibilidad desde el principio de los proyectos. De esta manera posteriormente no será necesario volver atrás y rehacer el trabajo.

{::nomarkdown}
{% include box.html type="start" h="3" title="Más información sobre cómo Hacer su Sitio Web Accesible" class="simple aside" %}
{:/}

-   Para tener una introducción a los requisitos de accesibilidad y estándares internacionales, acceda a [[Principios de Accesibilidad]](/fundamentals/accessibility-principles/).
-   Para entender algunas de las barreras comunes de accesibilidad desde la perspectiva de la evaluación, acceda a [[Pruebas sencillas - Una Primera Revisión]](/test-evaluate/preliminary/).
-   Para conocer algunas de las consideraciones básicas de diseño, edición y desarrollo para accesibilidad, acceda a [[Consejos Para Empezar]](/tips/).
-   Cuando esté preparado para saber más sobre desarrollo y diseño, probablemente le serán útiles recursos como:
    -   [Cómo cumplir las WCAG (Referencia Rápida)](https://www.w3.org/WAI/WCAG21/quickref/)
    -   [Tutoriales de Accesibilidad Web](https://www.w3.org/WAI/tutorials/)
-   Para la gestión de proyectos y consideraciones organizativas, acceda a [[Planificación y Gestión de la Accesibilidad Web]](/planning-and-managing/).<br>
    Si necesita hacer correciones rápidas, acceda a [[Estrategias para Reparaciones Provisionales]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## Evaluar la Accesibilidad {#evaluate}

Al desarrollar o rediseñar un sitio web, evalúe la accesibilidad desde el principio y durante todo el proceso de desarrollo para identificar los problemas de accesibilidad desde el inicio, cuando es más fácil resolverlos. Pasos sencillos, como cambiar la configuración del navegador, pueden ayudarle a evaluar algunos aspectos de la accesibilidad. Una evaluación exhaustiva para determinar si un sitio web cumple con todas las pautas de accesibilidad requiere más esfuerzo.

Existen herramientas que ayudan en la evaluación. Sin embargo, ninguna herramienta por sí sola puede determinar si un sitio cumple con las pautas de accesibilidad. Se requiere una evaluación humana bien experimentada para determinar si un sitio es accesible.


{::nomarkdown}
{% include box.html type="start" h="3" title="Más información sobre cómo Evaluar Accesibilidad" class="simple aside" %}
{:/}

-   Los recursos para ayudar en la evaluación de accesibilidad se describen en [[Evaluar la Accesibilidad de Sitios Web]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Ejemplos

{% include excol.html type="middle" %}

### Alternativas textuales para imágenes

![Imagen de logotipo; Marcado HTML img alt='Web Accessibility Initiative logo'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Las imágenes deben incluir una *[alternativa textual equivalente](https://www.w3.org/TR/UNDERSTANDING-WCAG20/text-equiv.html)* (texto alternativo) en el marcado/código.

Si no se facilita texto alternativo para las imágenes, su información es inaccesible, por ejemplo para personas que no pueden ver y utilizan un lector de pantalla que lee la información de la página, incluyendo el texto alternativo de la imagen.

Cuando el equivalente textual es facilitado, la información está disponible para personas ciegas, además de para personas que desactivan las imágenes (por ejemplo, en áreas con ancho de banda limitado o de alto coste). También está disponible para tecnologías que no pueden ver imágenes, como por ejemplo los motores de búsqueda.

### Entrada con teclado

![Ratón tachado con una cruz](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Algunas personas no pueden utilizar ratón, incluyendo muchas personas mayores con control de la motricidad limitado. Un sitio web accesible no depende del ratón; hace que [toda la funcionalidad esté disponible para el teclado](https://www.w3.org/TR/UNDERSTANDING-WCAG20/keyboard-operation.html). Entonces, las personas con discoapacidad pueden utilizar [tecnologías de apoyo](/planning/involving-users/#at) que simulan el teclado, como por ejemplo la entrada por voz.

### Transcripciones para audio

[![ejemplo transcrito](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Del mismo modo que las imágenes no están disponibles para las personas que no pueden ver, los archivos de audio no están disponibles para las personas que no pueden oír. Proporcionar una transcripción de texto hace que la información de audio sea accesible para las personas sordas o con problemas de audición, así como para los motores de búsqueda y otras tecnologías que no pueden oír.  

Facilitar transcripciones es fácil y relativamente barato para los sitios web. También existen [servicios de transcripción](http://www.uiaccess.com/transcripts/transcript_services.html) que crean transcripciones textuales en formato HTML.

{::nomarkdown}
{% include box.html type="start" h="3" title="More Examples" class="simple aside" %}
{:/} 

-   [[Consejos para empezar]](/tips/)
-   [[Pruebas sencillas - Una Primera Revisión]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Perspectivas de Accesibilidad Web &mdash; videos y descripciones" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Para más información {#more-info}

W3C WAI facilita un ámplio rango de recursos sobre diferentes aspectos de los [estándares](/standards-guidelines/) de accesibilidad web la accesibilidad web, [formación](/teach-advocate/), [testing/evaluación](/test-evaluate/), [gestión de proyectos y políticas](/planning/). Le animamos a que explore este sitio web o consulte la lista de [recursos de la WAI](/Resources/).
