---
title: "Novedades en WCAG 2.1"
nav_title: "Novedades en 2.1"
lang: es
last_updated: 2019-04-08  # Keep the date of the English version

translation:
  status: outdated
  last_updated: 2019-07-11  # Put the date of this translation YYYY-MM-DD (with month in the middle)

description: Esta página enumera los nuevos criterios de conformidad de las Pautas de Accesibilidad para el Contenido Web (WCAG) 2.1. Incluye citas de personas (ficticias) que ayudarán a comprender algunos aspectos de los criterios de conformidad.
teaser_text: WCAG 2.1 tiene 17 requisitos adicionales (criterios de conformidad) que se dirigen a la accesibilidad móvil, personas con baja visión, y personas con discapacidades cognitivas y del aprendizaje. La página de novedades en WCAG 2.1 introduce los nuevos criterios de conformidad. Incluye citas de personas que ayudarán a entender los problemas.

translators:
  - name: "Carlos Muncharaz"
    link: "https://www.muncharaz.eu/"

permalink: /standards-guidelines/wcag/new-in-21/es
ref: /standards-guidelines/wcag/new-in-21/

github:
  label: wai-wcag-intro

image: /content-images/wcag/general-social.jpg
footer: >
  <p><strong>Editora:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Colaboradores: Shadi Abou-Zahra, Jonathan Avila, Brent Bakken, Laura Carlson, Stéphane Deschamps, Eric Eggert, James Green, Becky Gibson, Marc Johlic, Robert Jolly, Howard Kramer, Chris O'Brien, Sharron Rush, Nic Steenhout, Glenda Sims, Bill Tyler.</p>
  <p>Desarrollado con la colaboración del Grupo de Trabajo de Educación y Difusión (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>) y el Grupo de Trabajo de Pautas de Accesibilidad (<a href="https://www.w3.org/WAI/about/groups/eowg/">AG WG</a>).</p>
inline_css: |
  blockquote {font-style: normal !important;}
  blockquote p:first-of-type:before, blockquote p:last-of-type:after, blockquote dl:last-of-type:after {content: '' !important;margin-left: 0 !important;}
  blockquote.sc {padding: 0 10px 15px 20px;border: solid #ccc 1px;background: #f0f0f0;color: #000; margin-right: 0; margin-bottom:40px;}
  .quotes {margin-bottom:40px;}
  .quotes ul {list-style-type: none;}
  .quotes li>p {display:table-row;}
  .quotes li>p span {display:table-cell;}
  .issue {font-weight: bold; display:table-cell; width: 6em;}
  q:before {content: open-quote;color: #005a6a;font-weight: bold;}
  q:after {content: close-quote;color: #005a6a;font-weight: bold;}
  .sc dt {
    display: list-item;
    list-style-type: disc;
    float: left;
    font-weight: bold;
    margin-left: 2em;
    margin-right: 1ex;
    margin-top: 0;
  }
  .sc dt:after {
    content: ":";
  }
  .sc p:last-of-type {margin-bottom: 1em}
  .sc p:last-child, .sc *:last-child {margin-bottom: 0}
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Resumen" class="full" %}
{:/}

Esta página enumera los nuevos criterios de conformidad de las Pautas de Accesibilidad para el Contenido Web (WCAG) 2.1.

**Incluye citas de personas (ficticias)** que ayudarán a comprender algunos aspectos de los criterios de conformidad. También incluye enlaces a documentos "Comprender" que explican los criterios de conformidad detalladamente y proporcionan más ejemplos.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2,3" /}

{::nomarkdown}
{% include toc.html type="start" title="Contenidos de la página" %}
{:/}

- This will be replaced by an automatically generated TOC when using Markdown formatting.
{:toc}

{::nomarkdown}
{% include toc.html type="end" %}
{:/}

## Introducción

Puede consultar una introducción a las Pautas de Accesibilidad para el Contenido Web y saber más sobre las versiones 2.0 y 2.1 en la [[Introducción a WCAG]](/standards-guidelines/wcag/).

Todos los requisitos (criterios de conformidad) de la versión 2.0 están incluidos en 2.1. Los criterios de conformidad 2.0 son exactamente iguales (literalmente) en 2.1.

WCAG proporciona 17 criterios de conformidad adicionales que hay que tener en cuenta:

- [[Accesibilidad móvil]](/standards-guidelines/mobile/)
- Personas con baja visión
- [[Personas con discapacidades cognitivas y del aprendizaje]](/cognitive/)

## Pauta 1.3 Adaptable

Cree contenido que pueda presentarse en diferentes formas (por ejemplo, con una disposición más simple) sin perder información ni estructura.

### 1.3.4 Orientación  (AA)

<blockquote class="sc">
  <p>El contenido no restringe su vista y operación a una única orientación de pantalla, como por ejemplo retrato o paisaje, salvo que una orientación específica sea <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esencial</a>.</p>
</blockquote>
<p class="persona">Un cómico con parálisis cerebral que usa una silla de ruedas:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>No puedo rotar mi tableta, está fijada a la silla de ruedas.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>La aplicación funciona tanto si mi tableta está fijada de forma horizontal como vertical.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/orientation.html">Comprender la Orientación</a></p>

### 1.3.5 Identificación del Propósito de Entrada (AA)

<blockquote class="sc">
  <p>El propósito de cada campo de entrada que recoge información sobre el usuario puede ser <a href="https://www.w3.org/TR/WCAG21/#dfn-programmatically-determinable" data-link-type="dfn">determinado por software</a> cuando:</p>
  <ul>
    <li>El campo de entrada sirve a un propósito identificado en los <a href="https://www.w3.org/TR/WCAG21/#input-purposes">propósitos de entrada de los componentes de la interfaz de usuario</a>; y</li>
    <li>El contenido se implementa usando tecnologías con soporte para identificar el significado esperado de los datos de entrada en formularios.</li>
  </ul>
</blockquote>
<p class="persona">Un <a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#supermarketassistant">auxiliar de supermercado</a> con dislexia y discalculia:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Mi dirección es muy complicada. Tiene muchos números y palabras largas. Me resulta difícil teclearlo todo sin cometer errores.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Me encantan los sitios web que automáticamente rellenan todo eso por mí. De esta forma, no tengo que esforzarme tanto para asegurar que los números y las palabras están bien.</q><br/>
      <em>Nota: </em>Esto funciona porque los campos utilizan autocompletado.</span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/identify-input-purpose.html">Comprender la Identificación del Propósito de Entrada</a></p>

### 1.3.6 Identificación del Propósito (AAA)

<blockquote class="sc">
  <p>En contenido implementado con lenguajes de marcado, el propósito de los <a href="https://www.w3.org/TR/WCAG21/#dfn-user-interface-components" data-link-type="dfn">componentes de la interfaz de usuario</a>, iconos y <a href="https://www.w3.org/TR/WCAG21/#dfn-regions" data-link-type="dfn">regiones</a> puede <a href="https://www.w3.org/TR/WCAG21/#dfn-programmatically-determinable" data-link-type="dfn">determinarse por software</a>.</p>
</blockquote>
<p class="persona">Un jugador con discapacidad para procesar el lenguaje:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Tengo un programa que cambia las palabras de la navegación por símbolos. No funciona con todos los sitios web.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Funciona bastante bien con algunos sitios web.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/identify-purpose.html">Comprender la Identificación del Propósito</a></p>

## Pauta 1.4 Distinguible

Facilite que los usuarios puedan ver y oír el contenido incluyendo la separación entre el primer plano y el fondo.

### 1.4.10 Reajuste (AA)

<blockquote class="sc">
  <p>El contenido se puede presentar sin perder información ni funcionalidad, y sin necesidad de desplazamiento en dos dimensiones, para:</p>
  <ul>
    <li>Contenido en desplazamiento vertical con una anchura equivalente a 320 <a href="https://www.w3.org/TR/WCAG21/#dfn-css-pixels" data-link-type="dfn">píxeles en CSS</a>;</li>
    <li>Contenido en desplazamiento horizontal con una altura equivalente a 256 <a href="https://www.w3.org/TR/WCAG21/#dfn-css-pixels" data-link-type="dfn">píxeles en CSS</a>;</li>
  </ul>
  <p>Excepto para aquellas partes del contenido que debido a su uso o significado requieran desplazamiento bidimensional.</p>
</blockquote>
<p class="persona">Un padre con baja visión – 20/400:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Es casi imposible leer el texto si tengo que desplazarme de derecha a izquierda con cada línea. Me siento desorientado y pierdo la posición. Hace que sea difícil entender lo que estoy leyendo.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Aumento el tamaño del texto al 400% y se reajusta dentro de la anchura de la ventana. Puedo leerlo fácilmente sin necesidad de desplazarme adelante y atrás.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/reflow.html">Comprender el Reajuste</a></p>

### 1.4.11 Contraste no Textual (AA)

<blockquote class="sc">
  <p>La <a href="https://www.w3.org/TR/WCAG21/#dfn-presentation" data-link-type="dfn">presentación </a> visual de los siguientes elementos tiene un <a href="https://www.w3.org/TR/WCAG21/#dfn-contrast-ratio" data-link-type="dfn">ratio de contraste</a> de al menos 3:1 con respecto a los colores adyacentes:</p>
  <dl>
    <dt>Componentes de la interfaz de usuario</dt>
    <dd>Información visual necesaria para identificar los <a href="https://www.w3.org/TR/WCAG21/#dfn-user-interface-components" data-link-type="dfn">componentes de la interfaz de usuario</a> y los <a href="https://www.w3.org/TR/WCAG21/#dfn-states" data-link-type="dfn">estados</a>, excepto aquellos componentes inactivos o cuya apariencia sea determinada por el agente de usuario y no modificada por el autor;</dd>
    <dt>Objetos gráficos</dt>
    <dd>Partes de gráficos necesarias para comprender el contenido, excepto cuando una presentación particular de los gráficos sea <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esencial </a> para la información transmitida.</dd>
  </dl>
</blockquote>
<p class="persona"><a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#retiree">Un jubilado</a> con poca sensibilidad al contraste:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>No pude usar el formulario de pedidos, no había cajas de texto. Después de una larga llamada con el servicio de atención al cliente, supe que las cajas de texto tenían un borde muy claro que yo no podía ver.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Puedo ver los iconos, botones y todo lo demás fácilmente, incluso bajo la luz del sol.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/non-text-contrast.html">Comprender el Contraste no Textual</a></p>

### 1.4.12 Espaciado de Texto (AA)

<blockquote class="sc">
  <p>En contenido implementado con lenguajes de marcado que soporten las <a href="https://www.w3.org/TR/WCAG21/#dfn-style-properties" data-link-type="dfn">propiedades de estilo</a> del <a href="https://www.w3.org/TR/WCAG21/#dfn-text" data-link-type="dfn">texto</a> siguientes no se produce ninguna pérdida de contenido o funcionalidad al ajustar todas estas propiedades y sin cambiar ninguna otra propiedad de estilo:</p>
  <ul>
    <li>Altura de la línea hasta al menos 1,5 veces el tamaño de la fuente;</li>
    <li>Espacio tras párrafo hasta al menos 2 veces el tamaño de la fuente;</li>
    <li>Espacio entre letras (<span lang="en">tracking</span>) hasta al menos 0,12 veces el tamaño de la fuente;</li>
    <li>Espacio entre palabras hasta al menos 0,16 veces el tamaño de la fuente.</li>
  </ul>
  <p>Excepción: Los lenguajes humanos y el código que no usen una o más de estas propiedades en forma escrita pueden cumplir usando solamente las propiedades que existan para esa combinación de lenguaje y código.</p>
</blockquote>
<p class="persona"><a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#classroomstudent">Un estudiante</a> con dislexia:<br/>
  y <a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#retiree">un jubilado</a> con baja visión:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>La mayor parte del texto es difícil de leer. Está tan amontonado que no puedo concentrarme. Solamente aumentando el espacio entre líneas ya noto una diferencia. Cuando estoy muy cansado, también aumento el espacio entre palabras.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>De acuerdo, sé que soy un poco raro, pero he creado una hoja de estilos que establece el espaciado de texto adecuado para mí. Es un alivio cuando los sitios web funcionan con mi CSS.</q></span></p></li>
  </ul>
</div>
<a href="https://www.w3.org/WAI/WCAG21/Understanding/text-spacing.html">Comprender el Espaciado de Texto</a>

### 1.4.13 Contenido en Puntero Flotante o en Foco (AA)

<blockquote class="sc">
  <p>Si mover y alejar el puntero o el foco del teclado con respecto a un elemento resulta en contenido adicional que se muestra y después se oculta, entonces lo siguiente debe ser cierto:</p>
  <dl>
    <dt>Descartable</dt>
    <dd>Debe existir un <a href="https://www.w3.org/TR/WCAG21/#dfn-mechanism" data-link-type="dfn">mecanismo</a> para descartar el contenido adicional sin mover el puntero o el foco del teclado, salvo que el contenido adicional informe acerca de un <a href="https://www.w3.org/TR/WCAG21/#dfn-input-error" data-link-type="dfn">error de entrada</a> o no oculte ni sustituya otro contenido;</dd>
    <dt>Superponible</dt>
    <dd>Si cuando el puntero flota sobre un elemento se muestra contenido adicional, entonces el puntero debe poder moverse sobre este contenido adicional sin que desaparezca;</dd>
    <dt>Persistente</dt>
    <dd>El contenido adicional debe permanecer visible hasta que el puntero o el foco lo abandonen, el usuario lo descarte o la información ya no sea válida.</dd>
  </dl>
  <p>Excepción: la presentación visual del contenido adicional es controlada por el agente de usuario y no es modificada por el autor.</p>
</blockquote>
<p class="persona">Un profesor con baja visión que usa un programa de magnificación de pantalla:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Estaba moviendo el ratón para seguir lo que veía en el sitio web. Me ayuda a concentrarme. De repente, ¡bum!, apareció un cuadro pequeño. Cubría lo que estaba intentando leer y no pude hacerlo desaparecer.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Posé el puntero sobre una palabra y se abrió un cuadro con su definición, pero se encontraba prácticamente fuera de la pantalla debido a mi magnificación. Moví el puntero del ratón hasta el cuadro de definición magnificado y me desplacé por éste, que permaneció visible y de esta forma pude leerlo.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/content-on-hover-or-focus.html">Comprender Contenido en Puntero Flotante o en Foco</a></p>

## Pauta 2.1 Accesible por Teclado

Proporcione acceso a toda la funcionalidad mediante el teclado.

### 2.1.4 Atajos de Teclado (A)

<blockquote class="sc">
  <p>Si el contenido implementa un <a href="https://www.w3.org/TR/WCAG21/#dfn-keyboard-shortcuts" data-link-type="dfn">atajo de teclado</a> que solamente hace uso de letras (tanto mayúsculas como minúsculas), signos de puntuación, números o símbolos, entonces al menos una de las siguientes condiciones debe ser cierta:</p>
  <dl>
    <dt>Desactivación</dt>
    <dd>Existe un <a href="https://www.w3.org/TR/WCAG21/#dfn-mechanism" data-link-type="dfn">mecanismo </a> para desactivar el atajo de teclado;</dd>
    <dt>Modificación</dt>
    <dd>Existe un mecanismo que modifica el atajo para usar una o más teclas de caracteres no imprimibles (por ejemplo Ctrl, Alt, etc)</dd>
    <dt>Activo solamente en foco</dt>
    <dd>El atajo de teclado perteneciente a un <a href="https://www.w3.org/TR/WCAG21/#dfn-user-interface-components" data-link-type="dfn">componente de la interfaz de usuario</a> solamente está activo cuando dicho componente tiene el foco.</dd>
  </dl>
</blockquote>
<p class="persona"><a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#reporter">Un periodista</a> con trastorno musculoesquelético que usa un programa de reconocimiento de voz:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Usando mi aplicación de correo electrónico, borraba los mensajes en lugar de abrirlos.</q><br/>
      <em>Nota: </em>Había un atajo de teclado para borrar los mensajes que se activaba por algo que él estaba diciendo y no había manera de desactivarlo.</span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>En mi aplicación de hojas de cálculo puedo desactivar o modificar los atajos de teclado.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/character-key-shortcuts.html">Comprender los Atajos de Teclado</a></p>

## Pauta 2.2 Tiempo Suficiente

Proporcione a los usuarios tiempo suficiente para leer y usar el contenido.

### 2.2.6 Límites Temporales (AAA)

<blockquote class="sc">
  <p>Los usuarios son informados de la duración del periodo de <a href="https://www.w3.org/TR/WCAG21/#dfn-user-inactivity" data-link-type="dfn">inactividad</a> que podría provocar una pérdida de datos, salvo que los datos se mantengan durante más de 20 horas desde que el usuario no realiza acciones.</p>
</blockquote>
<p class="persona">Un auxiliar de supervisión en un colegio con discapacidad cognitiva:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Estaba seleccionando los beneficios de los empleados y comparando diferentes planes. Cuando volví para seleccionar el plan de salud, la sesión caducó y perdí toda la información que había introducido.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Al iniciar la aplicación de beneficios de los empleados, fui informado de cuántos minutos disponía para rellenar los formularios.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/timeouts.html">Comprender los Límites Temporales</a></p>

## Pauta 2.3 Convulsiones y Reacciones Físicas

No diseñe contenido de una forma que sea conocida por causar convulsiones o reacciones físicas.

### 2.3.3 Interacciones Animadas (AAA)

<blockquote class="sc">
  <p>Las <a href="https://www.w3.org/TR/WCAG21/#dfn-motion-animation" data-link-type="dfn">animaciones</a> activadas por alguna interacción pueden desactivarse, salvo que la animación sea <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esencial </a> para la funcionalidad o la información transmitida.</p>
</blockquote>
<p class="persona">Un artista con trastorno vestibular:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>En la aplicación de impuestos en línea, según muevo el ratón o el cursor a diferentes campos, un bocadillo con el balance actual me sigue por toda la pantalla. Me provoca mareos y náuseas.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Me alegro de contar con una opción para desactivar todas las animaciones.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/animation-from-interactions.html">Comprender las Interacciones Animadas</a></p>

## Pauta 2.5 Modalidades de Entrada

Facilite que los usuarios puedan operar la funcionalidad a través de diferentes entradas además del teclado.

### 2.5.1 Gestos del Puntero (A)

<blockquote class="sc">
  <p>Toda <a href="https://www.w3.org/TR/WCAG21/#dfn-functionality" data-link-type="dfn">funcionalidad </a> que para su operación use gestos basados en múltiples puntos o recorridos puede ser operada con un <a href="https://www.w3.org/TR/WCAG21/#dfn-single-pointer" data-link-type="dfn">puntero sencillo</a> sin gestos basados en recorridos, salvo que los gestos basados en múltiples puntos o recorridos sean <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esenciales</a>.</p>
</blockquote>
<p class="persona">Un cómico con parálisis cerebral que tiene movimiento limitado en los dedos:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>No puedo mover mis dedos así. Necesito otro método para ampliar el mapa.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Es bueno que haya botones para ampliar y reducir.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/pointer-gestures.html">Comprender los Gestos del Puntero</a></p>

### 2.5.2 Cancelación del Puntero (A)

<blockquote class="sc">
  <p>Aquella <a href="https://www.w3.org/TR/WCAG21/#dfn-functionality" data-link-type="dfn">funcionalidad</a> que pueda operarse con un <a href="https://www.w3.org/TR/WCAG21/#dfn-single-pointer" data-link-type="dfn">puntero sencillo</a> debe cumplir al menos una de las siguientes condiciones:</p>
  <dl>
    <dt>Sin evento “down”</dt>
    <dd>El <a href="https://www.w3.org/TR/WCAG21/#dfn-down-event" data-link-type="dfn">evento “down”</a> del puntero no se usa para ejecutar ninguna parte de la funcionalidad;</dd>
    <dt>Abortar o deshacer</dt>
    <dd>La función se completa con el <a href="https://www.w3.org/TR/WCAG21/#dfn-up-event" data-link-type="dfn">evento “up”</a>, y existe un <a href="https://www.w3.org/TR/WCAG21/#dfn-mechanism" data-link-type="dfn">mecanismo</a> para abortar la función antes de que sea completada o para deshacerla después de completada;</dd>
    <dt>Inversión en “up”</dt>
    <dd>El evento “up” invierte cualquier resultado del evento “down” precedente;</dd>
    <dt>Esencial</dt>
    <dd>Es <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esencial</a> que la función se complete con el evento “down”.</dd>
  </dl>
</blockquote>
<p class="persona"> Un político con discapacidad motora y baja visión:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Quise pulsar el botón de “Silenciar” pero accidentalmente toqué el de “Terminar llamada”. Se cortó inmediatamente.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>En otra aplicación de videoconferencias, si accidentalmente toco el botón de “Terminar llamada”, puedo deslizar el dedo fuera de ese botón y así no se termina la llamada.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/pointer-cancellation.html">Comprender la Cancelación del Puntero</a></p>

### 2.5.3 Etiqueta en el Nombre (A)

<blockquote class="sc">
  <p>En los <a href="https://www.w3.org/TR/WCAG21/#dfn-user-interface-components" data-link-type="dfn">componentes de la interfaz de usuario</a> con <a href="https://www.w3.org/TR/WCAG21/#dfn-labels" data-link-type="dfn">etiquetas</a> que incluyan <a href="https://www.w3.org/TR/WCAG21/#dfn-text" data-link-type="dfn">texto</a> o <a href="https://www.w3.org/TR/WCAG21/#dfn-images-of-text" data-link-type="dfn">imágenes de texto</a>, el <a href="https://www.w3.org/TR/WCAG21/#dfn-name" data-link-type="dfn">nombre</a> contiene el texto que se presenta visualmente.</p>
</blockquote>
<p class="persona"><a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#reporter">Un periodista</a> con trastorno musculoesquelético que usa un programa de reconocimiento de voz:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Entendió casi todos mis comandos de voz hasta que llegué al botón de enviar. Estuve repitiendo “enviar” pero no funcionó.</q><br/>
      <em>Nota: </em>visualmente, estaba etiquetado como “Enviar” pero el “nombre” en el código era “Entregar”. Habría funcionado si el nombre hubiera empezado con “Enviar”.</span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/label-in-name.html">Comprender la Etiqueta en el Nombre</a></p>

### 2.5.4 Actuación del Movimiento (A)

<blockquote class="sc">
  <p>La <a href="https://www.w3.org/TR/WCAG21/#dfn-functionality" data-link-type="dfn">funcionalidad</a> que puede operarse a través del movimiento del dispositivo o del usuario también puede operarse a través de <a href="https://www.w3.org/TR/WCAG21/#dfn-user-interface-components" data-link-type="dfn">componentes de la interfaz de usuario</a> y la respuesta al movimiento puede desactivarse para evitar actuaciones accidentales, excepto cuando:</p>
  <dl>
    <dt>Interfaz soportada</dt>
    <dd>El movimiento se usa para operar la funcionalidad a través de una interfaz con <a href="https://www.w3.org/TR/WCAG21/#dfn-accessibility-supported" data-link-type="dfn">soporte para la accesibilidad</a>;</dd>
    <dt>Esencial</dt>
    <dd>El movimiento es <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esencial</a> para la función y cualquier otra forma invalidaría la actividad.</dd>
  </dl>
</blockquote>
<p class="persona">Un cómico con parálisis cerebral que usa silla de ruedas:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>No puedo agitar mi móvil; está conectado a mi silla de ruedas. Así que tiene que existir otra forma para activar esa característica, un botón por ejemplo.</q></span></p></li>
    <li><p><span class="issue">Problema:</span><span><q>Tengo temblores y por eso debo deshabilitar la activación por movimiento, y después debería ser capaz de hacer cosas sin actuación del movimiento.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Mi amiga tiene una aplicación interesante que parece una cerradura giratoria. Ella tiene que rotar el móvil para cambiar la combinación. Yo puedo usar la misma aplicación, pero tecleando los números directamente.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/motion-actuation.html">Comprender la Actuación del Movimiento</a></p>

### 2.5.5 Tamaño del Objetivo (AAA)

<blockquote class="sc">
  <p>El tamaño del <a href="https://www.w3.org/TR/WCAG21/#dfn-target" data-link-type="dfn">objetivo</a> para <a href="https://www.w3.org/TR/WCAG21/#dfn-pointer-inputs" data-link-type="dfn">entradas de puntero</a> es de al menos 44x44 <a href="https://www.w3.org/TR/WCAG21/#dfn-css-pixels" data-link-type="dfn">píxeles de CSS</a>, excepto cuando:</p>
  <dl>
    <dt>Equivalente</dt>
    <dd>El objetivo está disponible a través de un enlace equivalente o un control en la misma página que tenga al menos 44x44 píxeles de CSS;</dd>
    <dt>En línea</dt>
    <dd>El objetivo es una frase o bloque de texto;</dd>
    <dt>Controlado por el Agente de Usuario</dt>
    <dd>El tamaño del objetivo queda determinado por el agente de usuario y no es modificado por el autor;</dd>
    <dt>Esencial</dt>
    <dd>Una presentación particular del objetivo es <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esencial</a> para la información transmitida.</dd>
  </dl>
</blockquote>
<p class="persona"><a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#retiree">Un jubilado</a> con temblores en las manos (y dedos grandes):</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Los botones son tan pequeños que pulso en “Cancelar” cuando quiero pulsar “Enviar”. Entonces, tengo que volver a empezar otra vez.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Los botones del sitio web son suficientemente grandes y no me equivoco al pulsarlos incluso cuando viajo en un autobús traqueteante.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/target-size.html">Comprender el Tamaño del Objetivo</a></p>

### 2.5.6 Mecanismos de Entrada Concurrentes (AAA)

<blockquote class="sc">
  <p>El contenido web no restringe el uso de las modalidades de entrada disponibles en la plataforma excepto cuando las restricciones sean <a href="https://www.w3.org/TR/WCAG21/#dfn-essential" data-link-type="dfn">esenciales</a>, necesarias para la seguridad del contenido o necesarias para respetar los ajustes del usuario.</p>
</blockquote>
<p class="persona"><a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#reporter">Un periodista</a> con trastorno musculoesquelético que usa un programa de reconocimiento de voz:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>Cuando mi trastorno se hace evidente, alterno bastante entre teclado, ratón, lápiz digital y voz. Esta aplicación no me deja usar el lápiz digital cuando el teclado está conectado.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/concurrent-input-mechanisms.html">Comprender los Mecanismos de Entrada Concurrentes</a></p>

## Pauta 4.1 Compatible

Maximice la compatibilidad con agentes de usuario actuales y futuros, incluyendo las ayudas técnicas.

### 4.1.3 Mensajes de Estado (AA)

<blockquote class="sc">
  <p>En el contenido implementado usando lenguajes de marcado, los <a href="https://www.w3.org/TR/WCAG21/#dfn-status-messages" data-link-type="dfn">mensajes de estado</a> se pueden <a href="https://www.w3.org/TR/WCAG21/#dfn-programmatically-determinable" data-link-type="dfn">determinar por software</a> a través de <a href="https://www.w3.org/TR/WCAG21/#dfn-role" data-link-type="dfn">roles</a> o propiedades tales que puedan ser presentados al usuario de <a href="https://www.w3.org/TR/WCAG21/#dfn-assistive-technologies" data-link-type="dfn">tecnologías de apoyo</a> sin necesidad de recibir el foco.</p>
</blockquote>
<p class="persona"><a href="https://www.w3.org/WAI/people-use-web/user-stories/archived/#ilya-senior-staff-member-who-is-blind">Un contable</a> ciego que usa un lector de pantalla:</p>
<div class="quotes">
  <ul>
    <li><p><span class="issue">Problema:</span><span><q>He seleccionado una clase para la conferencia, pero no puedo decir si se ha añadido a mi agenda.</q></span></p></li>
    <li><p><span class="issue">Funciona bien:</span><span><q>Cuando añado una reunión en mi calendario, oigo una confirmación.</q></span></p></li>
  </ul>
</div>
<p><a href="https://www.w3.org/WAI/WCAG21/Understanding/status-messages.html">Comprender los Mensajes de Estado</a></p>

## Sobre las citas de las personas

Los roles de personas enlazan con las [[Historias de usuarios web]](/people-use-web/user-stories/). Dicha página contiene otras personas con diferentes discapacidades. Se podrían añadir más en el futuro.

Una vez estas personas se hayan revisado suficientemente, planeamos añadirlas a los documentos de "Comprender".
