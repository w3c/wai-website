---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Dhruv, un estudiante adulto sordo"
nav_title: "Dhruv"
lang: es   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version

translation:
  last_updated: 2026-03-29 # Put the date of this translation YYYY-MM-DD (with month in the middle)
  draft: true

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Patricia Peinado Serrano"   # Replace Jan Doe with translator name

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-six/es  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-six/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/
    name: nav_title
  - ref: /people-use-web/
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-five/
  next: /people-use-web/user-stories/story-seven/

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this
# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Nota sobre la descripción del vídeo: El vídeo de esta página no contiene audiodescripción sincronizada porque las imágenes se limitan a ilustrar el contenido sonoro y no proporcionan información adicional. En este caso, la audiodescripción generaría más confusión y no sería útil para la mayoría de la gente, incluyendo a las personas con discapacidad visual. La descripción de las imágenes está disponible en la transcripción de texto con descripción de imágenes o "transcripción descriptiva".</p>
  <p>Primera publicación en 1999.</p>
  <p><strong>Editores:</strong> Kevin White y Shadi Abou-Zahra. Editores anteriores: Judy Brewer y Norah Sinclair. Colaboradores: Brent Bakken, Jade Matos Carew, Jayne Schurick, Michele Williams, y otros en la sección de agradecimientos: ACKNOWLEDGEMENTS.</p>
  <p>Desarrollado por el Grupo de Trabajo de Educación y Difusión (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) con el apoyo del <a href="https://www.w3.org/WAI/about/projects/wai-guide/">proyecto WAI-Guide</a> y del <a href="https://www.w3.org/WAI/WAI-AGE/">proyecto WAI-AGE, </a>cofundado por la Comisión Europea.</p>
---

{::nomarkdown}

<style>
  #introduction p {
    font-size:120%;
    margin: 0.5em 0 0 0;
  }
  #introduction .box-i {
  }
  #introduction nav {
    border: 0;
    margin-top: 0;
  }
  #introduction nav header {
    padding: 8px 16px;
  }
  #introduction .video-card {
    margin: 1em;
    float: none !important;
    max-width: inherit !important;
    min-width: 45% !important;
  }
  #introduction .video-card p {
    font-size: 90%;
    margin: 0;
  }
  #introduction .video-card p:first-child {
    height: 190px;
  }
  #introduction img.video {
    border-radius: 5px;
    width: 300px;
    max-width: 300px;
  }
  #introduction .video-card .play-button {
    position: relative;
    top: -55px;
    left: -185px;
    width: 60px;
    height: 60px;
  }
  @media all and (min-width: 576px) {
    #introduction .box-i {
      display: flex;
      flex: 0 1;
    }
    #introduction .video-card .play-button {
      position: relative;
      top: -120px;
      left: 120px;
      width: 60px;
      height: 60px;
    }
  }
</style>

{% include_cached blockquote.html class="pull alt-2" content="<p>La accesibilidad va sobre las personas</p>" %}

<aside id="introduction" class="box"><div class="box-i">
  <div>
{:/}

Dhruv es un estudiante sordo. Como su primera lengua, o lengua materna, es una lengua de signos, le resulta difícil leer contenido con un diseño poco coherente o una navegación desestructurada. En su universidad, muchas de las clases se publican en línea,  lo que puede suponer una barrera para Dhruv si los vídeos no tienen subtítulos o si los subtítulos contienen errores o aparecen más tarde con respecto a lo que dice su profesor. En su tiempo libre, a Dhruv le gusta ver películas y programas de televisión en su móvil. Ese contenido debe tener subtítulos precisos y también información sobre quién está hablando.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_6.mp4"
   captions="wai-videos/people-use-web/user-stories_6.en.vtt|en"
   subtitles="wai-videos/people-use-web/user-stories_6.es.vtt|es"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Dhruv, un estudiante adulto sordo"
   poster="content-images/people-use-web/user-stories/dhruv-video-frame.png"
%}
</div>

{% include_cached toc.html type="start" title="Contenidos de la página" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}

</aside>
{:/}

**Nota:** Esta historia de usuario es un ejemplo de una persona con este tipo de discapacidad. Otras personas con esta discapacidad pueden tener experiencias diferentes.

## Sobre Dhruv

> Mucha gente no se da cuenta de que la lengua de signos es un idioma completamente diferente. Puedo leer subtítulos, pero me lleva más tiempo, porque no estoy leyendo en mi lengua materna. Los subtítulos no reemplazan a la lengua de signos o viceversa.

Dhruv es sordo de nacimiento. Es un estudiante adulto que hace cursos en línea. Aunque puede oír algunos sonidos, no es suficiente para seguir conversaciones. Dhruv aprendió a signar cuando era pequeño. Como la lengua de signos es su primera lengua, el texto escrito puede resultarle difícil. Dhruv prefiere que el contenido escrito tenga una buena estructura y encabezados, y poca jerga o tecnicismos para que sea más fácil de entender.

Dhruv sabe leer los labios, pero esto solo funciona cuando puede ver al completo la cara de su interlocutor. Incluso en estos casos, solo podrá cazar algunas palabras sueltas, o sea que no puede confiar únicamente en la lectura labial para entender contenido.

La universidad en la que estudia Dhruv cuenta con intérpretes de lengua de signos y subtituladores en tiempo real (CART, por sus siglas en inglés). Sin embargo, este tipo de subtitulación no siempre está disponible en todos los vídeos u otro contenido audiovisual. La universidad está trabajando para subtitular todo el contenido del currículo universitario, pero es un proceso que lleva tiempo. Como cada vez hay más contenido subtitulado, a Dhruv le es más fácil terminar sus estudios a distancia.

Dhruv pasa mucho tiempo libre viendo contenido en plataformas de emisión en directo o _streaming_. La mejora en la calidad de los subtítulos en estas plataformas en los últimos años ha permitido que pueda ver más programas que antes. Dhruv puede tener dificultades para seguir el contenido si los subtítulos no tienen un código de color asignado según el personaje que esté hablando. Los subtítulos generados automáticamente pueden servirle de ayuda, pero también pueden generar problemas si existen pero son incorrectos.

## Ejemplos de barreras

Subtítulos incorrectos
: **Barrera:** "Me gusta el hecho de que se graben mis clases y estén disponibles en línea, pero a veces los subtítulos no reflejan exactamente lo que dice el profesor, sobre todo en algunas de mis clases más técnicas".
: **Qué funciona:** "Cuando el subtitulador conoce la materia para no omitir palabras o cometer errores".

El diseño de los subtítulos
: **Barrera:** "Cuando veo películas en línea, los subtítulos suelen cubrir partes del vídeo. A veces me pierdo elementos de la imagen y, dependiendo del fondo, los subtítulos son difíciles de leer".
: **Qué funciona:** "Que los subtítulos aparezcan en la parte inferior de la pantalla, pero que pueda moverlos si hace falta. Que aparezcan sobre un color de fondo sólido con un buen contraste entre los subtítulos y el fondo".

Buen encuadre de cámara para el interlocutor
: **Barrera:** "Algunas clases graban a los profesores hablando. Eso está bien porque se me da bien leer los labios, pero a menudo la cámara está demasiado lejos".
: **Qué funciona:** "Que la cámara esté ubicada de forma que enfoque la cara del interlocutor".

Falta de alternativas a contenido de audio
: **Barrera:** "Cuando veo un telediario por internet, no hay ninguna alternativa para que entienda lo que dicen los presentadores".
: **Qué funciona:** "Ofrecer alternativas al audio como interpretación en lengua de signos, subtítulos o transcripciones. Si hay alguien hablando a cámara, que se le enfoque".

## Tecnologías de apoyo y estrategias adaptativas

* [Subtítulos (Percepción) (en inglés)](/people-use-web/tools-techniques/perception/#captions)
* [Transcripciones (Percepción) (en inglés)](/people-use-web/tools-techniques/perception/#transcripts)
* [Lengua de signos (Percepción) (en inglés)](/people-use-web/tools-techniques/perception/#sign)

## Recursos relacionados de la WAI

* Vídeo: [Subtítulos en vídeos (en inglés)](/perspective-videos/captions/)
* Consejo: [Crea transcripciones y subtítulos para contenido multimedia (en inglés)](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* Consejo: [Añade opciones alternativas a imágenes y contenido multimedia en tus diseños (en inglés)](/tips/designing/#include-image-and-media-alternatives-in-your-design)
* Consejo: [Incluye comandos para controlar el contenido que se reproduce automáticamente (en inglés)](/tips/designing/#provide-controls-for-content-that-starts-automatically)
* Consejo: [Redacta un código que se adapte a la tecnología del usuario (en inglés) code that adapts to the user's technology](/tips/developing/#write-code-that-adapts-to-the-users-technology)
* Comprueba: [Alternativas para contenido multimedia (audio y vídeo) (en inglés)](/test-evaluate/preliminary/#media)

## Principios relacionados

* [Alternativas textuales para contenido no textual (Perceptible) (en inglés)](/fundamentals/accessibility-principles/#alternatives)
* [Subtítulos y otras alternativas para contenido multimedia (Perceptible) (en inglés)](/fundamentals/accessibility-principles/#captions)
* [Contenido que sea más fácil de ver y oír (Perceptible) (en inglés)](/fundamentals/accessibility-principles/#distinguishable)
* [Contenido que sea legible y comprensible (Comprensible) (en inglés)](/fundamentals/accessibility-principles/#readable)
* [Criterios de conformidad relacionados con "subtítulos" (en inglés)](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions)


{% include excol.html type="start" id="video-transcript" %}

##  Vídeo: Dhruv, un estudiante adulto sordo {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_6"
  yt-id="jft__DXkPv8"
%}

_Este vídeo también está disponible en un servidor de W3C: [Vídeo: Dhruv, un estudiante adulto sordo (formato: MP4, tamaño: 307MB, audio en inglés))](https://media.w3.org/wai/people-use-web/user-stories_6.mp4)._

###  Transcripción con descripción de imágenes {#transcript}

| Audio | Imagen |
| --- | --- |
| Cómo las personas con discapacidad utilizan las tecnologías digitales. Dhruv, un estudiante adulto sordo. | Cómo las personas con discapacidad utilizan las tecnologías digitales. Dhruv, un estudiante adulto sordo. |
| ¡Hola! Me llamo D-H-R-U-V, Dhruv. Soy sordo. Puedo oír algunos sonidos, pero no puedo seguir conversaciones. Uso la Lengua de Signos Británica. Pienso y sueño en signos. | Un hombre habla y signa mirando a cámara. |
| Hace poco, me he matriculado en un grado a distancia. Para mis clases, puedo concertar intérpretes que me interpreten las clases, las conversaciones o todo lo que se diga. En las apps de videoconferencias, necesito poder fijar los vídeos de los intérpretes para que pueda verlos siempre. | El hombre está sentado frente a una mesa con su ordenador portátil. Participa en una reunión en línea a través de una aplicación de videoconferencia. Cambia entre la vista de grupo y la vista de un único participante anclado. |
| Algunas clases están subtituladas en directo por profesionales. Son más precisos que los subtítulos automáticos, que a menudo no reconocen la terminología específica de las clases. Para los vídeos de tarea, utilizo subtítulos de buena calidad. Están editados para que las frases que aparecen en pantalla no sean demasiado largas y estén sincronizadas con el audio. Muchas veces, tengo que ajustar el tamaño del texto y los colores de los subtítulos para leerlos mejor. En algunas apps, puedo mover los subtítulos arriba o abajo de la pantalla para que no molesten. | El hombre ve un vídeo en un reproductor y selecciona los subtítulos en inglés de entre un listado de opciones. Después, elige el diseño de los subtítulos. |
| En ciertos casos, tengo que hacer lectura labial. Por ejemplo, cuando tengo llamadas no planeadas sin intérpretes u otras personas que signen. He aprendido a leer los labios por este tipo de situaciones, pero no siempre es fiable. Tengo que ver los labios del interlocutor, que hable claro y sus gestos también ayudan. Pero es agotador y no es algo que pueda hacer durante mucho tiempo. | El hombre está sentado frente a una mesa con su portátil. Participa en una reunión en línea a través de una aplicación de videoconferencia. |
| También recurro a los chats. Algunas herramientas de chat muestran texto en tiempo real en vez de mensajes de texto línea por línea. Es mucho más interactivo y puedo conversar con mis amigos por texto igual que otros lo hacen por voz. | El hombre sentado frente a la mesa con su portátil habla con otras personas mediante la función de chat. |
| Por supuesto, ir a clase implica hacer muchas lecturas. No me parece mal, salvo cuando los textos son innecesariamente complejos o sin una estructura, como listas o encabezados. La gente no se da cuenta de que para mí leer supone un esfuerzo adicional, porque la lengua de signos es mi lengua materna. Como para los demás, una redacción clara y simple hace que el texto sea más fácil de entender. | El hombre sentado frente a una mesa con su ordenador lee un texto largo y complejo. |
| Puedes ayudar a hacer la tecnología accesible para mí. La accesibilidad va sobre las personas. | El hombre habla directamente a cámara. |
| Para más información sobre la Iniciativa de Accesibilidad Web sobre cómo las personas con discapacidad utilizan las tecnologías digitales, visita w3.org/WAI/people. | La accesibilidad va sobre las personas, w3.org/WAI/people. |


{% include excol.html type="end" %}
