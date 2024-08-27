---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Principios de accesibilidad
nav_title: "Principios de accesibilidad"
lang: es
last_updated: 2023-12-06   # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: Una visión general de los requisitos fundamentales de accesibilidad para sitios web, aplicaciones web, navegadores y otras herramientas.
teaser_text: La página de Principios de Accesibilidad introduce algunos de los requisitos de accesibilidad web para sitios web, aplicaciones web, navegadores y otras herramientas, facilitando referencias a estándares internacionales de la Iniciativa de Accesibilidad Web del W3C (WAI) y a historias de usuarios web.

translators:
- name: "Jorge Rumoroso"
  link: "https://twitter.com/rumoroso"
contributors:
- name: "Martín Álvarez-Espinar (CTIC)"

github:
  label: wai-accessibility-principles

permalink: /fundamentals/accessibility-principles/es   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-principles/   # Do not change this

image: /content-images/accessibility-principles/social.png
changelog: /fundamentals/accessibility-principles/changelog/   # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Fecha:</strong> Actualizado 10 Mayo 2019. CHANGELOG</p>
  <p><strong>Editores:</strong> <a href="https://www.w3.org/People/shadi/">Shadi Abou_Zahra</a>. <a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">Agradecimientos</a>.</p>
  <p>Desarrollado por el Grupo de Trabajo de Educación y Divulgación (<a href="https//www.w3.org/WAI/EO/">EOWG</a>). Previamente desarrollado con la <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">WAI-AGE Task Force</a>, con el apoyo del <a href="https://www.w3.org/WAI/WAI-AGE/">Proyecto WAI-AGE </a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Resumen" class="full" %}
{:/}

Esta página introduce algunos de los requisitos de accesibilidad para sitios web, aplicaciones web, navegadores y otras herramientas, facilitando referencias a estándares internacionales de la Iniciativa de Accesibilidad Web del W3C (WAI) y a [historias de usuarios web](/people-use-web/user-stories/).

**Nota:** Este documento no es una lista completa de todos los requisitos de accesibilidad.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


{% include excol.html type="all" %}

## Estándares de accesibilidad web {#standards}

La accesibilidad web se basa en varios componentes que trabajan juntos. Entre ellos se incluyen:

-   **Contenido Web**{:#webcontent} – hace referencia a cualquier parte de un sitio web, incluyendo texto, imágenes, formularios y multimedia, así como a cualquier  código de marcado, scripts, aplicaciones y demás.
-   **Agentes de usuario**{:#useragents} – software que las personas utilizan para acceder al contenido web, incluyendo navegadores gráficos de escritorio, navegadores de voz, navegadores de teléfono móvil, reproductores multimedia, plug-ins y algunas  [tecnologías de apoyo](/people-use-web/tools-techniques/#at "definition").
-   **Herramientas de autor**{:#authoringtools} – software o servicios que las personas utilizan para producir contenido web, incluyendo editores de código, herramientas de conversión de documentos, sistemas de gestión de contenido, blogs, scripts de base de datos y otras herramientas.

{% include excol.html type="start" %}

### Más acerca de estándares de accesibilidad web
{:.no_toc}

{% include excol.html type="middle" %}

Estos componentes se interrelacionan y dan soporte mutuamente. Por ejemplo, el **contenido web** necesita incluir alternativas textuales para las imágenes. Esta información necesita ser procesada por los **navegadores web** y luego ser transmitida a las **tecnologías de apoyo**, como los lectores de pantalla. Para crear dichas alternativas textuales, los autores necesitan **herramientas de autor** con soporte para dicha función. Más información sobre el tema en [[Componentes Esenciales de la Accesibilidad Web]](/fundamentals/components/).

Los estándares juegan un papel vital en la definición de los requisitos de accesibilidad de estos componentes. Algunos requisitos de accesibilidad son fáciles de cumplir y, simplemente entendiendo los conceptos básicos de cómo las personas con discapacidad utilizan la Web, ayuda a implementarlos de forma más eficaz y eficiente. Algunos aspectos de la accesibilidad requieren más habilidades técnicas o conocimientos avanzados sobre el uso que hacen las personas de la Web. En todos los casos, [involucrar a los usuarios desde el principio y a lo largo de sus proyectos web](/test-evaluate/involving-users/) hará su trabajo mejor y más fácil.

La Iniciativa de Accesibilidad Web del W3C (WAI) facilita un conjunto de pautas que son reconocidas internationalmente como estándares para la accesibilidad web. Estas incluyen:

-   **[Pautas de Accesibilidad al Contenido Web (WCAG)](/standards-guidelines/wcag/)**
-   **[Pautas de Accesibilidad de Agente de Usuario (UAAG)](/standards-guidelines/uaag/)**
-   **[Pautas de Accesibilidad de Herramientas de Autor (ATAG)](/standards-guidelines/atag/)**

También hay una especificación WAI para **[Aplicaciones de internet enriquecidas y accesibles (WAI-ARIA)](/standards-guidelines/aria/)**, que incluyen contenido dinámico y controles avanzados de usuario desarrollados con Ajax, JavasScript, y otras tecnologías web relacionadas.

{% include excol.html type="end" %}

## Información perceptible e interfaz de usuario {#perceivable}

### Alternativas de texto para contenido no textual {#alternatives}

Las alternativas de texto son equivalentes para el contenido no textual. Entre los ejemplos se incluyen:

-   Equivalentes cortos para imágenes, incluyendo iconos, botones y gráficos
-   Descripción de los datos representados en gráficos, diagramas e ilustraciones
-   Breves descripciones de contenido no textual como archivos de audio y vídeo
-   Etiquetas para controles de formulario, entrada de datos y otros componentes de la interfaz de usuario

Las alternativas textuales transmiten el propósito o función de una imagen para proporcionar una experiencia de usuario equivalente. Por ejemplo, una alternativa textual apropiada para un botón de búsqueda sería "*buscar*" en lugar de "*lupa*".

Las alternativas textuales pueden ser presentadas de varias maneras. Por ejemplo, pueden ser leidas en voz alta para personas que no pueden ver la pantalla y para aquellas con dificultades de lectura, ampliadas a tamaño de texto personalizados, o mostrarse en dispositivos braille. Las alternativas textuales sirven como etiquetas para controles y funcionalidad que ayudan a la navegación con teclado o por reconocimiento de voz (entrada por voz). También actuan como etiquetas para identificar audios, videos y archivos en otros formatos, así como aplicaciones que están integradas como parte de un sitio web.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con alternativas textuales (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 1.1 – Alternativas Textuales](https://www.w3.org/WAI/WCAG22/quickref/#text-alternatives)

**UAAG**

-   [Pauta 1.1 – Contenido Alternativo](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.2.1: (Para la interfaz de herramienta de autor) Hacer disponible el contenido alternativo para los autores](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Pauta A.2.2: (Para la interfaz de herramienta de autor) Asegurar que la presentación de la vista de edición pueda ser determinada programáticamente](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pauta A.3.7: (Para la interfaz de herramienta de autor) Asegurar que las previsualizaciones son al menos tan accesibles como los agentes de usuario  del mercado](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### Historias de usuario relacionadas con alternativas de texto
{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Martine, estudiante online con problemas de audición](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, ejecutiva senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Subtítulos y otras alternativas para multimedia {#captions}

Las personas que no pueden oír audio o ver video necesitan alternativas. Entre los ejemplos se incluyen:

-   Transcripciones textuales  y subtítulos para contenido de audio, como grabaciones de una entrevista de radio
-   Audiodescripciones, que son narraciones que describen importantes detalles en un vídeo
-   Interpretación en lenguaje de signos de contenido de audio, incluyendo experiencias auditivas relevantes

Las transcripciones de texto bien escritas que contienen una correcta secuencia de cualquier información auditiva o visual proporcionan un nivel básico de accesibilidad y facilitan la producción de subtítulos y descripciones de audio.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con multimedia (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 1.2 – Medios tempodependentes](https://www.w3.org/WAI/WCAG22/quickref/#time-based-media)

**UAAG**

-   [Pauta 1.1 – Contenido alternativo](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.2.1: (Para la interfaz de herramienta de autor) Hacer disponible el contenido alternativo para los autores](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Pauta A.3.7: (Para la interfaz de herramienta de autor) Asegurar que las previsualizaciones son al menos tan accesibles como los agentes de usuario  del mercado](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### Historias de usuario relacionadas con multimedia {#stories-related-to-multimedia}
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, estudiante online con problemas de audición](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, ejecutiva senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Contenido que puede ser presentado de diferentes maneras {#adaptable}

Para que los usuarios sean capaces de cambiar la presentación del contenido, es necesario que:

-   Encabezados, listas, tablas, campos de formulario y estructuras de contenido utilicen el marcado apropiado
-   El orden de la información o la secuencia de instrucciones sean independientes de la presentación
-   Los navegadores y tecnologías de apoyo faciliten configuraciones para personalizar la presentación

El cumplimiento de este requisito permite que el contenido se lea correctamente en voz alta, se amplíe o se adapte para satisfacer las necesidades y preferencias de diferentes personas. Por ejemplo, se puede presentar usando combinaciones de color personalizadas, tamaño de texto u otro estilo para facilitar la lectura. Este requisito también facilita otras formas de adaptación, incluyendo la generación automática de esquemas de página y resúmenes para ayudar a obtener una visión general y a centrarse en partes concretas con más facilidad.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con adaptabilidad (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 1.3 - Adaptable](https://www.w3.org/WAI/WCAG22/quickref/#adaptable)

**UAAG**

-   [Pauta 1.4 – Configuración de texto](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Pauta 1.5 – Configuración del volumen](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Pauta 1.6 - Configuración de voz sintetizada](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Pauta 1.7 – Configuración de hojas de estilo de usuario](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Pauta 1.9 – Vistas alternativas](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Pauta 1.10 – Información de elementos](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.2.2: (Para la interfaz de herramienta de autor) Asegurar que la presentación de la vista de edición pueda ser determinada programáticamente](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pauta A.3.7: (Para la interfaz de herramienta de autor) Asegurar que las previsualizaciones son al menos tan accessibles como los agentes de usuario del mercado](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con adaptabilidad
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, comprador online con daltonismo](/people-use-web/user-stories/archived/#shopper)
-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, ejecutiva senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Contenido más fácil de ver y escuchar {#distinguishable}

El contenido distinguible es más fácil de ver y leer. Algunos ejemplos:

- El color no se utiliza como única forma de transmitir información o identificar el contenido
- Las combinaciones predeterminadas de color de primer plano y fondo proporcionan suficiente contraste
- Cuando los usuarios redimensionan el texto hasta un 400% o cambian el espaciado del texto, no se pierde información
- Reflujo de texto en ventanas pequeñas ("viewports") y cuando los usuarios hacen el texto más grande
- Las imágenes de texto se redimensionan, se sustituyen por texto real o se evitan en la medida de lo posible
- Los usuarios pueden pausar, detener o ajustar el volumen de audio que se reproduce en un sitio web
- El audio de fondo es bajo o se puede apagar para evitar interferencias o distracciones

Cumplir con este requisito ayuda a separar el primer plano del fondo para hacer que la información importante sea más distinguible. Esto incluye consideraciones tanto para las personas que no utilizan tecnologías de apoyo como para las que si las utilizan y que pueden percibir interferencias de contenido de audio o visual del segundo plano. Por ejemplo, muchas personas con daltonismo no utilizan ninguna herramienta en particular y confían en un diseño adecuado que proporcione suficiente contraste de color entre el texto y el fondo que lo rodea. Para otras personas, el audio que se reproduce automáticamente podría interferir con el sistema de "texto a voz" o con [dispositivos de ayuda auditiva (ALD)](/teach-advocate/accessible-presentations/#ald "definition").

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con distinguible (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 1.4 - Distinguible](https://www.w3.org/WAI/WCAG22/quickref/#distinguishable)

**UAAG**

-   [Pauta 1.3 - Resaltado](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [Pauta 1.4 – Configuración de texto](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Pauta 1.5 – Configuración de volumen](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Pauta 1.6 – Configuración de voz sintetizada](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Pauta 1.7 – Configuración de hojas de estilo de usuario](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Pauta 1.8 – Orientación de la vista](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [Pauta 1.9 – Vistas alternativas](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Pauta 1.10 – Información de elementos](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.3.7: (Para la interfaz de herramienta de autor) Asegurar que las previsualizaciones son al menos tan accessibles como los agentes de usuario del mercado](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con peceptibilidad
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, comprador online con daltonismo](/people-use-web/user-stories/archived/#s#reporter)
-   [Martine, estudiante online con problemas de audición](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, ejecutiva senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

## Interfaz de usuario y navegación operables {#operable}

### Funcionalidad disponible desde el teclado {#keyboard}

Muchas personas no utilizan el ratón y dependen del teclado para interactuar con la Web. Esto requiere acceso mediante teclado a todas las funciones, incluidos los controles de formulario, entrada de datos y otros componentes de la interfaz de usuario.

La accesibilidad con teclado incluye:

-   Toda la funcionalidad que está disponible con ratón también está disponible con teclado
-   El foco del teclado no queda atrapado en ninguna parte del contenido
-   Los navegadores web, herramientas de autor y otras herramientas facilitan soporte para teclado

El cumplimiento de este requisito ayuda a los usuarios de teclado, incluidos quienes que utilizan teclados alternativos, como teclados con diseños ergonómicos, teclados en pantalla o dispositivos de conmutación. También ayuda a las personas que utilizan reconocimiento de voz (entrada por voz) para operar sitios web y dictar texto a través de la interfaz del teclado.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con accesibilidad de teclado (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 2.1 – Accesible por teclado](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-accessible)

**UAAG**

-   [Pauta 2.1 – Acceso con teclado](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [Pauta 2.2 – Navegación secuencial](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Pauta 2.3 – Navegación y activación directa](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Pauta 2.11 – Otros metodos de entrada](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.3.1: (Para la interfaz de herramientas de autor) Proporcionar acceso mediante teclado a las funciones de creación](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con la accesibilidad de teclado
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, ejecutiva senior con ceguera](/people-use-web/user-stories/archived/#accountant)

{% include excol.html type="end" %}

### Los usuarios tienen tiempo suficiente para leer y utilizar el contenido {#time}

Algunas personas necesitan más tiempo que otras para leer y utilizar el contenido. Por ejemplo, hay quienes requieren más tiempo para escribir texto, comprender instrucciones, operar controles o incluso para completar tareas en un sitio web.

Entre los ejemplos de cómo proporcionar tiempo suficiente se incluyen los mecanismos para:

-   Detener, extender o ajustar los límites de tiempo, excepto cuando sea necesario
-   Pausar, detener u ocultar movimiento, parpadeo o desplazamiento del contenido
-   Posponer o suprimir interrupciones, excepto cuando sean necesarias
-   Re-autenticar cuando la sesión expire sin perdida de datos

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con tiempo suficiente (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 2.2 - Tiempo suficiente](https://www.w3.org/WAI/WCAG22/quickref/#enough-time)

**UAAG**

-   [Pauta 2.8 - Interacción independiente de tiempo](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [Pauta 2.10 - Media basada en tiempo](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.3.2: (Para la interfaz de usuario de la herramienta de creación) Proporcionar a los autores el tiempo suficiente](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con tiempo suficiente
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### El contenido no causa convulsiones ni reacciones físicas {#safe}

El contenido que parpadea a ciertas velocidades o siguiendo determinados patrones puede causar reacciones fotosensibles, incluyendo convulsiones. Lo ideal es evitar totalmente el contenido parpadeante o sólo utilizarlo de forma que no cause riesgos conocidos. También las animaciones y el contenido en movimiento pueden causar incomodidad y reacciones físicas.

Estos son algunos ejemplos de cómo evitar causar convulsiones o reacciones físicas:

-   No incluir contenido que parpadea a ciertas velocidades y siguiendo determinados patrones
-   Alertar a los usuarios antes de mostrar contenido parpadeante y proporcionar alternativas
-   Facilitar mecanismos para desconectar las animaciones, excepto cuando sean esenciales

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con convulsiones (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 2.3 - Convulsiones](https://www.w3.org/WAI/WCAG22/quickref/#seizures-and-physical-reactions)

**UAAG**

-   [Pauta 2.9 - Parpadeo](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.3.3: (Para la interfaz de herramienta de autor) Ayudar a los autores a evitar parpadeo que pudiera causar convulsiones](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

### Los usuarios pueden navegar facilmente, encontrar contenido, y determinar dónde están {#navigable}

El contenido bien organizado ayuda a los usuarios a orientarse y navegar eficazmente. Por ejemplo:

-   Páginas que tienen títulos claros y estan organizadas utilizando encabezados de sección descriptivos
-   Existe más de un camino para encontrar las paginas relevantes en un conjunto de páginas web
-   Los usuarios son informados sobre donde se encuentran dentro de un conjunto de páginas relacionadas
-   Hay formas de evitar los bloques de contenido que se repiten en varias páginas
-   El foco del teclado es visible y el orden del foco sigue una secuencia significativa
-   El propósito de un enlace es evidente, idealmente incluso cuando el enlace se ve por sí solo

Cumplir este requisito ayuda a las personas a navegar a través de las páginas web de diferentes maneras, dependiendo de sus necesidades particulares y de sus preferencias. Por ejemplo, mientras que algunas personas confían en estructuras jerárquicas de navegación, como las barras de menú, para encontrar páginas web específicas, otras confían en las funciones de búsqueda de los sitios web. Algunas personas pueden ver el contenido mientras que otras lo pueden escuchar o incluso ver y escuchar al mismo tiempo. Algunas personas pueden utilizar el contenido sólo con el ratón o solo con el teclado, mientras que otras pueden usar ambos.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con la navegación (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 2.4 - Navegable](https://www.w3.org/WAI/WCAG22/quickref/#navigable)

**UAAG**

-   [Pauta 2.2 - Navegación secuencial](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Pauta 2.3 - Navegación y activación directa](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Pauta 2.4 - Busqueda de texto](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [Pauta 2.5 - Navegación estructural](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [Pauta 2.7 - Controles gráficos](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.2.2: (Para la interfaz de herramienta de autor) Asegurar que la presentación de la vista de editicion puede determinarse programáticamente](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pauta A.3.4: (Para la interfaz de herramienta de autor) Mejorar la navegación y la edición a través de la estructura del contenido](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [Pauta A.3.5: (Para la interfaz de herramienta de autor) Facilitar búsqueda de texto en el contenido](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con la navegación
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, profesional senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Los usuarios pueden utilizar diferentes modalidades de entrada además del teclado {#modalities}

Las modalidades de entrada más allá del teclado, como la activación táctil, el reconocimiento de voz (entrada por voz) y los gestos, hacen que el contenido sea más fácil de usar para muchas personas. Sin embargo, no todas pueden utilizar cada una de estas modalidades o utilizarlas en la misma medida. Las consideraciones particulares del diseño pueden maximizar el beneficio de cada una de ellas. Por ejemplo:

-   Gestos que requieren destreza o movimientos finos que tienen alternativas que no requieren avanzada destreza
-   Componentes que están diseñados para evitar la activación accidental, por ejemplo facilitando la función de deshacer
-   Etiquetas que corresponden con nombres en el código, lo cual da soporte a la activación por voz
-   Funcionalidad que es activada con movimiento y que también puede activarse mediante componentes de la interfaz de usuario
-   Botones, enlaces y otros componentes activos que tienen el tamaño suficiente para facilitar la activación por tacto

Cumplir este requisito hace que el contenido más fácil de usar por cualquier persona con un amplios rangos de habilidades y de dispositivos. Ello incluye el contenido utilizado en teléfonos móbiles, tablets y terminales de autoservicio como las máquinas de ticket.

{% include excol.html type="start" id="" %}

#### Requisitos de accesibilidad relacionados con modalidades de entrada (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 2.5 - Modalidades de entrada](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

#### Historias de usuario relacionadas con modalidades de entrada
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## Información comprensible e interfaz de usuario {#understandable}

### El texto es legible y comprensible {#readable}

Los autores de contenido deben asegurar que el contenido textual es legible y comprensible para la más amplia audiencia, incluyendo cuando es leido por herramientas texto-a-voz. Para ello, algunos ejemplos de lo que se puede hacer son:

-   Identificar el idioma primario de la página web, como el árabe, holandés o coreano
-   Identifiar el idioma de fragmentos de texto, frases, u otras partes de la página web
-   Proporcionar definiciones para palabras no comunes, fráses, modismos y abreviaturas inusuales
-   Utilizar el lenguaje más claro y simple posible, o proporcionar versiones simplificadas

El cumplimiento de este requisito ayuda al software, incluyendo las tecnologías de apoyo, a procesar correctamente el contenido del texto. Por ejemplo, este requisito ayuda al software a leer el contenido en voz alta, a generar resúmenes de páginas y a proporcionar definiciones para palabras inusuales como la jerga técnica. También ayuda a las personas que tienen dificultad para entender oraciones más complejas, frases o vocabulario. En particular, ayuda a las personas con diferentes tipos de discapacidad cognitiva.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con la legibilidad (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 3.1 - Legible](https://www.w3.org/WAI/WCAG22/quickref/#readable)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.4.2: (Para la interfaz de herramienta de autor) Documentar la interfaz de usuario, incluidas todas las características de accesibilidad](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con la legibilidad
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, estudiante online con problemas de audición](/people-use-web/user-stories/archived/#onlinestudent)
-   [Ilya, profesional senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

### El contenido aparece y opera de forma predecible {#predictable}

Muchas personas confían en interfaces de usuario predecibles y se desorientan o distraen con apariciones y comportamientos no consistentes. Algunos ejemplos para hacer el contenido más predecible serían:

-   Mecanismos de navegación que se repiten en multiples páginas y que aparecen siempre en el mismo lugar
-   Componentes de la interfaz de usuaro que se repiten en páginas web y que tienen las mismas etiquetas
-   Cambios significativos en la página web que no ocurren sin el consentimiento del usuario

El cumplimiento de este requisito ayuda a las personas a aprender rápidamente la funcionalidad y los mecanismos de navegación que se ofrecen en un sitio web, y a manejarlos de acuerdo con sus necesidades y preferencias específicas. Por ejemplo, algunas personas asignan teclas de acceso directo personalizadas a funciones que utilizan con frecuencia para mejorar la navegación con el teclado. Otras memorizan los pasos para llegar a determinadas páginas o para completar procesos en un sitio web. Ambos tipos de personas dependen de que la funcionalidad sea predecible y consistente.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con la predecibilidad (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 3.2 - Predecible](https://www.w3.org/WAI/WCAG22/quickref/#predictable)

**UAAG**

-   [Pauta 3.3 - Predecible](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.2.2: (Para la interfaz de herramienta de autor) Asegurar que la presentación de la vista de edición pueda ser determinada programáticamente](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pauta A.4.2: (Para la interfaz de herramienta de autor) Documentar la interfaz de usuario, incluidas todas las características de accesibilidad](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con predecibilidad
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, profesional senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

### Asistencia a los usuarios para prevenir y corregir errores {#tolerant}

Los formularios y otros elementos de interacción pueden ser confusos o dificultar su uso para muchas personas y como resultado, ellas serán más propensas a cometer errores. Algunos ejemplos de ayuda para prevenir y corregir errores serían:

-   Intrucciones descriptivas, mensajes de error y sugerencias de corrección
-   Ayuda contextual para funcionalidades e interacciones más complejas
-   Opción de revisar, corregir o revertir envíos si es necesario

El cumplimiento de este requisito ayuda a las personas que no ven o no oyen el contenido y que es posible que no reconozcan las relaciones implícitas, las secuencias y otros indicios visuales. También ayuda a las personas que no entienden la funcionalidad, están desorientadas o confundidas, olvidan o cometen errores usando formularios y elementos de interacción por cualquier otra razón.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con la entrada de datos asistida (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 3.3 - Entrada de datos asistida](https://www.w3.org/WAI/WCAG22/quickref/#input-assistance)

**UAAG**

-   [Pauta 3.1 - Errores](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pauta A.2.2: (Para la interfaz de herramienta de autor) Asegurar que la presentación de la vista de edición pueda ser determinada programáticamente](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pauta A.4.1: (Para la interfaz de herramienta de autor) Ayudar a los autores a prevenir y corregir errores](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con la ayuda en la entrada de datos
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, comprador online con daltonismo](/people-use-web/user-stories/archived/#shopper)
-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Yun, retirada, con visión reducida, temblores en manos y leve perdida de memoria a corto plazo](/people-use-web/user-stories/archived/#retiree)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)

{% include excol.html type="end" %}

## Contenido robusto e interpretación confiable {#robust}

### El contenido es compatible con las herramientas de usuaro actuales y futuras {#compatible}

El contenido robusto es compatible con diferentes navegadores, tecnologías de apoyo y otros agentes de usuaro. Entre los ejemplos de como esto se puede conseguir se incluyen:

-   Asegurarse de que el marcado puede interpretarse de forma confiable, por ejemplo, asegurando que es válido
-   Proporcionar un nombre, rol y valor para los componentes no estándar de la interfaz de usuario

El cumplimiento de este requisito ayuda a maximizar la compatibilidad con los agentes de usuario actuales y futuros, incluyendo las tecnologías de apoyo. En particular, permite a las tecnologías de apoyo procesar el contenido de forma confiable y presentarlo u operarlo de diferentes maneras. Se incluyen en este punto los botones no estándar (programados), campos de formulario y otros controles.

{% include excol.html type="start" %}

#### Requisitos de accesibilidad relacionados con compatibilidad (enlaces a la especificación técnica)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pauta 4.1 - Compatible](https://www.w3.org/WAI/WCAG22/quickref/#compatible)

**UAAG**

-   [Pauta 2.6 - Configuración de preferencias](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [Pauta 4.1 - Tecnologías de apoyo](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [Pauta 5.1 - Seguir las especificaciones](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG**

-   [Principio A.1: Las interfaces de usuario de las herramientas de autor siguen las pautas de accesibilidad aplicables](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Apartado B. Soporte la producción de contenido accesible](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Historias de usuario relacionadas con compatibilidad
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, comprador online con daltonismo](/people-use-web/user-stories/archived/#shopper)
-   [Alex, reportero con lesión por esfuerzo repetitivo](/people-use-web/user-stories/archived/#reporter)
-   [Ilya, profesional senior con ceguera](/people-use-web/user-stories/archived/#accountant)
-   [Preety, estudiante de secundaria con trastorno por déficit de atención e hiperactividad y dislexia](/people-use-web/user-stories/archived/#classroomstudent)
-   [Luis, asistente en un supermercado con síndrome de Down](/people-use-web/user-stories/archived/#supermarketassistant)
-   [Kaseem, adolescente con sordera y ceguera](/people-use-web/user-stories/archived/#teenager)

{% include excol.html type="end" %}

{% include excol.html type="all" %}

