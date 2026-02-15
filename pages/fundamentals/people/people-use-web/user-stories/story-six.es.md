---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Dhruv, un estudiante adulto sordo"
nav_title: "Dhruv"
lang: es   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version

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
  <p>Nota sobre la descripción del vídeo: El vídeo de esta página no contiene audiodescripción sincronizada porque las imágenes se limitan a ilustrar el contenido sonoro y no proporcionan información adicional. En este caso, la audiodescripción generaría más confusión y no sería útil para la mayoría de la gente, incluyendo a las personas con discapacidad visual. La descripción de las imágenes está disponible en la "trancripción de texto con descripción de imágenes" (trancripción descriptiva).</p>
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

Dhruv es un estudiante sordo. Como su primera lengua, o lengua materna, es la lengua de signos, le resulta difícil leer contenido que no está bien estructurado con un diseño y navegación coherentes. En su universidad, muchas de las clases se publican en línea, lo que puede suponer una barrera para Dhruv si los vídeos no tienen subtítulos o si los subtítulos contienen errores o aparecen más tarde con respecto a lo que dice el profesor. En su tiempo libre, a Dhruv le gusta ver películas y programas de televisión en su móvil. Ese contenido debe tener subtítulos precisos y también información sobre quién está hablando.

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

**Nota:** Esta historia de usuario es un ejemplo de una persona con este tipo de discapacidad. Otras personas con esta discapacidad pueden tener experiencias distintas.

## Sobre Dhruv

> Mucha genete no se da cuenta de que la lengua de signos es un idioma completamente distinto. Puedo leer subtítulos, pero me lleva más tiempo,  porque no estoy leyendo en mi lengua materna. Los subtítulos no reemplazan a la lengua de signos.

Dhruv es sordo de nacimiento. Es un estudiante adulto que asiste a clases en línea. Aunque puede oír algunos sonidos, no es suficiente para seguir conversaciones. Dhruv aprendió a signar cuando era pequeño. La lengua de signos es su primera lengua, por lo que el texto escrito puede resultarle difícil. Dhruv prefiere que el contenido escrito tenga una buena estructura y encabezados, y poca jerga o tecnicismos para que sea más fácil de entender.

Dhruv puede leer los labios, pero esto solo es efectivo cuando puede ver completamente la cara de su interlocutor. Y, en estos casos, solo podrá cazar algunas palabras sueltas. No puede confiar únicamente en la lectura labial para entender el contenido.

La universidad en la que estudia Dhruv cuenta con intérpretes de lengua de signos y subtituladores en tiempo real (o CART por sus siglas en inglés). Sin embargo, este tipo de subtitulado no siempre está disponible en todos los vídeos u otro contenido audiovisual. La universidad está trabajando para subtitular todo el contenido del currículo universitario, pero es un proceso que lleva tiempo. Como cada vez hay más contenido subtitulado, a Dhruv se le hace más fácil terminar sus estudios a distancia.

Dhruv pasa mucho tiempo libre viendo contenido en directo en plataformas de emisión en directo o streaming. La mejora en la calidad de los subtítulos en estas plataformas en los últimos años ha significado que pueda ver más programas que antes. Dhruv puede tener dificultades para seguir el contenido cuando los subtítulos no tienen un código de color según quién esté hablando. Si están disponibles, los subtítulos generados automáticamente pueden servirle de ayuda, pero también pueden generar problemas si son incorrectos.

## Ejemplos de barreras

Inaccurate captions
: **Barrier:** "I love that my classes are recorded and available online but sometimes the captions don't convey the exact words that the instructor is saying, especially in some of my more technical classes."
: **Works well:** "When the captioner gets to know the material so they don't miss words or make mistakes."

Design of captions
: **Barrier:** "When watching movies online, the captions often cover parts of the video. Sometimes I miss things in the video and it makes the captions hard to read depending on the background."
: **Works well:** "Captions appear at the bottom of the screen but I can also move them if necessary. They are shown against a solid color background that offers good contrast between the captions and background."

Good camera position for speaker
: **Barrier:** "Some classes record the instructor speaking. This is great because I am good at lip reading but the camera is often too far away."
: **Works well:** "The camera is positioned to focus in on the instructor's face."

No alternative for audio
: **Barrier:** "When watching a news program online, there isn't an option for me to understand what the speaker is saying."
: **Works well:** "Provide audio alternatives such as sign language, captions or transcript. If there is a speaker in camera, focus in on the speaker."

## Tecnologías de apoyo y estrategias adaptativas

* [Captions (Perception)](/people-use-web/tools-techniques/perception/#captions)
* [Transcripts (Perception)](/people-use-web/tools-techniques/perception/#transcripts)
* [Sign language (Perception)](/people-use-web/tools-techniques/perception/#sign)

## Recursos de la WAI relacionados


* Video: [Video Captions](/perspective-videos/captions/)
* Tip: [Create transcripts and captions for multimedia](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* Tip: [Include image and media alternatives in your design](/tips/designing/#include-image-and-media-alternatives-in-your-design)
* Tip: [Provide controls for content that starts automatically](/tips/designing/#provide-controls-for-content-that-starts-automatically)
* Tip: [Write code that adapts to the user's technology](/tips/developing/#write-code-that-adapts-to-the-users-technology)
* Check: [Multimedia (video, audio) alternatives](/test-evaluate/preliminary/#media)

## Principios relacionados

* [Text alternatives for non-text content (Perceivable)](/fundamentals/accessibility-principles/#alternatives)
* [Captions and other alternatives for multimedia (Perceivable)](/fundamentals/accessibility-principles/#captions)
* [Content is easier to see and hear (Perceivable)](/fundamentals/accessibility-principles/#distinguishable)
* [Content is readable and understandable (Understandable)](/fundamentals/accessibility-principles/#readable)
* [Success Criteria relating to “captions”](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions)


{% include excol.html type="start" id="video-transcript" %}

##  Vídeo: Dhruv, un estudiante adulto sordo {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_6"
  yt-id="jft__DXkPv8"
%}

_This video is also available on a W3C server: [Video: Dhruv, older adult student who is deaf (file format: MP4, file size: 307MB)](https://media.w3.org/wai/people-use-web/user-stories_6.mp4)._

###  Transcripción de texto con descripción de imágenes {#transcript}

| Audio | Visual |
| --- | --- |
| How people with disabilities use digital technology; Dhruv, older adult student who is deaf. | How people with disabilities use digital technology; Dhruv, older adult student who is deaf. |
| Hello! My name’s D-H-R-U-V, Dhruv. I’m Deaf. I can hear some sounds but not enough to understand speech. I use British Sign Language – I think and dream in signs. | A man speaks and signs directly to the camera. |
| I recently enrolled in an online degree. For my classes, I schedule interpreters who can interpret the lectures and conversations and voice for me. I need video conferencing apps with functionality to “pin” videos of the interpreters so that I can always see them. | The man is sitting at a desk using a laptop. He is participating in an online meeting using a video conferencing app. He alternates between multiple participant and pinned participant view. |
| Some lectures have real-time captioning typed by human captioners. This is more accurate than automatic captions, which often don’t recognize specialized terms in the lectures. For our assigned videos, I rely on good captions. These are edited so that each sentence appearing on the screen is not too long and is synchronized with the audio. I also often find myself needing to adjust the text size and colors of the captions, to be able to read them better. Some apps also allow me to move the captions to the top or bottom of the video, so that they are not in the way. | The man is watching a video in a media player and selecting English captions from a list of language options. He then selects options for how he wants the captions to be displayed. |
| In some situations, I find myself lip reading. For example, when I’m on unplanned calls without interpreters or other people who can sign. I learned lip reading over the years because of such situations but it’s not always reliable for me. I need to see the person’s mouth, have them speak clearly, and seeing their gestures also helps. Yet it’s exhausting and not really something I can keep doing for too long. | The man is sitting at a desk using a laptop. He is participating in an online meeting using a video conferencing app. |
| I also use the chat function. Some chat tools support real-time text rather than line-by-line text messages only. This is much more interactive. I can engage with my friends in text conversations as others do by voice. | The man is sitting at a desk using a laptop to talk to other people using a chat function. |
| Of course, the classes also come with a lot of reading. I’m fine with that, except when the writing is unnecessarily complex and without structures like lists and headings. People don’t realize that for me reading text involves extra effort, because sign language is my native language. So, like for everyone else, clear and simple writing makes text easier to understand. | The man is sitting at a desk using a laptop and reading through a long, complex text. |
| You can help make technology accessible to me. Accessibility: It’s about people. | The man speaks directly to the camera. |
| For more information from the Web Accessibility Initiative on how people with disabilities use digital technology, visit w3.org/WAI/people | Accessibility: It's about people; w3.org/WAI/people |


{% include excol.html type="end" %}
