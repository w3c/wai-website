---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Accesibilidad Móvil en el W3C"
nav_title: "Accesibilidad Móvil en el W3C"
lang: es
last_updated: 2021-05-17    # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
- name: "Jorge Rumoroso"
  link: "https://twitter.com/rumoroso"
contributors:
- name: "Martín Álvarez-Espinar (CTIC)"

github:
    repository: w3c/wai-website
    path: pages/standards-guidelines/mobile/index.es.md
    label: wai-mobile

permalink: /standards-guidelines/mobile/es    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /standards-guidelines/mobile/  # Do not change this

changelog: /standards-guidelines/mobile/changelog/  # Do not change this
feedbackmail: wai@w3.org

# In the footer below:
# Do not translate or change CHANGELOG.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>Fecha:</strong> Actualizado el 14 de Mayo de 2021. Primera publicación en Enero de 2008. CHANGELOG.</p>
  <p><strong>Editora:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Colaboradora: <a href="https://www.w3.org/People/Brewer/">Judy Brewer</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Resumen" class="full" %}
{:/}

-   **La accesibilidad móvil está cubierta por los estándares/pautas de accesibilidad existentes de la Iniciativa de Accesibilidad Web (WAI) del W3C**. No existen pautas separadas para la accesibilidad móvil.
-   El W3C está desarrollando requisitos actualizados y guías de accesibilidad móvil más específicas.
-   **El resultado del [Grupo de Trabajo de Accesibilidad Móvil](https://www.w3.org/WAI/GL/mobile-a11y-tf/) de la WAI incluye:**
    -   [Accesibilidad Móvil: Cómo las WCAG 2.0 y otras pautas del W3C/WAI se aplican al entorno Móvil](https://www.w3.org/TR/mobile-accessibility-mapping/)
    -   Criterios de Éxito y Técnicas WCAG 2
    -   Integrar la accesibilidad móvil en los futuros estándares W3C

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenido de la Página" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Más que "Móvil" {#intro}

La "accesibilidad móvil" se refiere a hacer los sitios web y aplicaciones más accesibles para personas con discapacidad cuando utilizan teléfonos móviles y otros dispositivos. El trabajo de la WAI en este área aborda problemas de accesibilidad para personas utilizando un amplio rango de dispositivos para interactuar con la web:

-   teléfonos y tabletas
-   televisores digitales
-   accesorios como los teléfonos inteligentes
-   dispositivos en salpicaderos de los automóviles y en los respaldos de los asientos de los aviones
-   dispositivos en electrodomésticos
-   "Internet de las cosas"

También considera una amplia gama de cuestiones:

-   pantallas táctiles
-   pantallas de reducidas dimensiones
-   diferentes métodos de entrada, incluyendo la voz y el tacto 3D habilitado por sensores de presión
-   dispositivos afectados por el uso dependiente de diferentes entornos, como con el brillo del sol
-   y más

## WAI del W3C Considera la Accesibilidad Móvil {#covered}

**Los estándares de accesibilidad WAI consideran la accesibilidad móvil**:

-   Las Pautas de Accesibilidad del **Contenido Web** ([WCAG](/standards-guidelines/wcag/)) consideran páginas y aplicaciones web, incluyendo el contenido utilizado en dispositivos móviles.
    -   Para aprender cómo las WCAG 2.0 pueden aplicarse al contenido web móvil, aplicaciones web móviles, aplicaciones nativas e híbridas utilizando componentes dentro de las aplicaciones nativas, acceda a [Accesibilidad Móvil: Cómo las WCAG 2.0 y Otras Pautas W3C/WAI Aplican al entorno Móvil](https://www.w3.org/TR/mobile-accessibility-mapping/).
    -   [WCAG2ICT: Aplicar WCAG 2.0 a Información No-Web y Comunicaciones Tecnológicas](/standards-guidelines/wcag/non-web-ict/) es otro recurso más general que también incluye aplicaciones móviles.
    -   Las WCAG 2.1, publicadas en junio de 2018, incluyen nuevos requisitos ("criterios de éxito") que tienen en consideración la accesibilidad móvil. Se presentan en [[Novedades de las WCAG 2.1]](/standards-guidelines/wcag/new-in-21/).
-   Las Pautas de Accesibilidad de **Agente de Usuario**  ([UAAG](/standards-guidelines/uaag/)) cubren los navegadores web (incluyendo navegadores móviles) y otros "agentes de usuario".
    -   Para conocer ejemplos de cómo los navegadores web que respetan las UAAG benefician a personas con discapacidad que acceden a la Web utilizando dispositivos móviles, acceda a [Ejemplos de Accesibilidad Móvil de UAAG](https://www.w3.org/TR/IMPLEMENTING-UAAG20/mobile).
    -   Para explorar más sobre los puntos críticos, acceda a [Aplicar las UAAG a Teléfonos Móviles](https://www.w3.org/WAI/UA/work/wiki/Applying_UAAG_to_Mobile_Phones).
-   Las Pautas de Accesibilidad de **Herramientas de Autor** ([ATAG](/standards-guidelines/atag/)) cubren el software utilizado para crear páginas web y aplicaciones, incluyendo para móviles.
-   **[WAI-ARIA](/standards-guidelines/aria/)** (Aplicaciones de Internet Enriquecidas Accesibles) define las maneras de hacer el contenido web más accesible, especialmente el contenido dinámico y los controles avanzados de la interfaz. Se aplican al acceso a sitios web y aplicaciones web con dispositivos móviles.

**El W3C considera la accesibilidad móvil.** La WAI asegura que la base de las tecnologías W3C den soporte a la accesibilidad, incluyendo aquellas que son esenciales para la web móvil. Todo el trabajo del W3C es revisado por el Grupo de Trabajo de Arquitecturas de Plataforma Accesible de WAI ([APA](https://www.w3.org/WAI/APA/)).

El trabajo del W3C relativo al entorno móvil incluye las [Buenas Prácticas para Aplicaciones Web Móviles](https://www.w3.org/TR/mwabp/) y las [Buenas Prácticas para la Web Móvil](https://www.w3.org/TR/mobile-bp/). Acceda a [Estándares para las Aplicaciones Web Móviles](https://www.w3.org/Mobile/mobile-web-app-state/) para tener un resumen de las tecnologías desarrolladas en el W3C que aumentan las capacidades de las aplicaciones web y cómo se aplican específicamente al contexto móvil.

## Obtenga Actualizaciones {#updates}

Si desea recibir una notificación de futuros trabajos sobre accesibilidad móvil en el WAI del W3C, acceda a [[Recibir noticas de la WAI]](/news/subscribe/).

## Participe {#involved}

Información general disponible en [[Participar en la WAI]](/about/participating/).

La mayor parte del trabajo de la WAI relacionado con la accesibilidad móvil se realiza a través del [Grupo de Trabajo de la Accesibilidad Móvil](https://www.w3.org/WAI/GL/mobile-a11y-tf/). Si desea participar en el trabajo de la WAI sobre accesibilidad móvil, envíe un correo electrónico con información sobre sus intereses y disponibilidad de tiempo a los moderadores del Grupo de Trabajo [Kim Patch y Kathy Wahlbin](mailto:kathy@interactiveaccessibility.com,Kim@redstartsystems.com?cc=wai@w3.org,ran@w3.org&subject=Mobile%20Accessibility%20Task%20Force%20Enquiry) con copia al Personal de la WAI (wai@w3.org).

## Sobre el W3C y WAI {#about}

El Consorcio World Wide Web (W3C) es un consorcio internacional en el que Organizaciones, personal a tiempo completo y el público en general trabajan juntos para desarrollar estándares Web. El W3C persigue su misión principalmente a través de la creación de estándares y directrices Web diseñados para garantizar el crecimiento a largo plazo de la Web. Para más información, acceda a [Acerca del W3C](https://www.w3.org/about/).

La Iniciativa de Accesibilidad Web (WAI) del W3C reúne a personas a título individual y organizaciones de todo el mundo para desarrollar estrategias, pautas y recursos que ayuden a hacer que la Web sea accesible para las personas con discapacidad. Para obtener más información, consulte el [sitio web de la WAI](https://www.w3.org/WAI/).
