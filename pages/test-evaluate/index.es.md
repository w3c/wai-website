---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Visión general sobre la evaluación de la accesibilidad web"
nav_title: "Visión general sobre la evaluación"
lang: es
last_updated: 2021-05-07  # Keep the date of the English version

translation:
  last_updated: 2021-05-20  # Put the date of this translation YYYY-MM-DD (with month in the middle)
  status: outdated

translators:
  - name: "Jorge Rumoroso"
    link: "https://twitter.com/rumoroso"
contributors:
  - name: "Carlos Muncharaz"

github:
  label: wai-evaluation-overview

permalink: /test-evaluate/es
ref: /test-evaluate/  # Do not change this

changelog: /test-evaluate/changelog/
feedbackmail: wai@w3.org
class: tight-page

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p>Nota sobre la descripción de los vídeos: Los vídeos de esta página no incluyen descripción de audio sincronizada porque los visuales sólo ilustran el audio y no proporcionan información adicional. En este caso, la descripción de audio distraería más que sería útil para la mayoría de las personas, incluidas las que no pueden ver los visuales. La descripción de la información visual está integrada en la transcripción del texto con descripción de los visuales (”Transcripción descriptiva”).</p>
  <p><strong>Editora:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p> Vídeos desarrollados por el Grupo de Trabajo de Educación y Divulgación (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) con el apoyo del proyecto <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> fundado por la Comisión Europea (EC) bajo el programa Horizonte 2020 (Acuerdo de subvención 822245). <a href="./acknowledgements/">Agradecimientos</a>.</p>
  <p><a rel="license" href="https://creativecommons.org/licenses/by/4.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="https://i.creativecommons.org/l/by/4.0/88x31.png" /></a> Los vídeos tienen licencia de <a rel="license" href="https://creativecommons.org/licenses/by/4.0/">Atribución 4.0 Internacional Creative Commons</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Resumen" class="full" %}
{:/}

Esta página contiene enlaces a recursos para ayudar a evaluar la accesibilidad web. La evaluación de la accesibilidad también se denomina "análisis", "auditoría" o "prueba".

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Contenidos de la página" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Introducción {#intro}

<div class="video-card">
  {% include video-player-data.html
      video-id="evaluating-resources-overview"
      yt-id="C4GIqWeywiI"
  %}
  <p><a href="#alternatives">Introducción a las alternativas para vídeo - Resumen de recursos</a></p>
</div>

Al desarrollar o rediseñar un sitio web o una aplicación web, evalúe la accesibilidad desde el principio y durante todo el proceso de desarrollo para identificar los problemas de accesibilidad lo antes posible, cuando es más fácil resolverlos.

Existen herramientas que ayudan con la evaluación. Sin embargo, ninguna herramienta por sí sola puede determinar si un sitio cumple con los estándares de accesibilidad. Se requieren buenos conocimientos para determinar si un sitio es accesible.

## Pruebas iniciales {#initial}

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/easy-checks-accessibility.mp4"
  captions="/wai-videos/evaluating/easy-checks-accessibility.en.vtt|en|default"
  poster="video-thumb-easy-checks.png"
  accessible-version="https://www.w3.org/WAI/test-evaluate/preliminary/#video-intro"
  accessible-version-label="Vídeo: Resumen de comprobaciones sencillas"
  poster="/content-images/test-eval/video-thumb-easy-checks.png"
%}

Incluso si usted no tiene conocimiento sobre accesibilidad y no posee herramientas para evaluarla, aún puede comprobar algunos de los aspectos de la accesibilidad.

[Comprobaciones sencillas — Una primera revisión a la accesibilidad web](/test-evaluate/preliminary/)
:   Facilita una guía paso a paso, junto con sencillas explicaciones, para evaluar algunos aspectos de la accesibilidad.

## Herramientas

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/tools-for-evaluating.mp4"
  captions="/wai-videos/evaluating/tools-for-evaluating.en.vtt|en|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/tools/#video-intro"
  accessible-version-label="Vídeo: Resumen de las herramientas de evaluación"
  poster="/content-images/test-eval/video-thumb-tools.png"
%}

Las herramientas de evaluación de la accesibilidad web son programas de software o servicios en línea que ayudan a determinar si el contenido web cumple con los estándares de accesibilidad.

[Lista de herramientas de evaluación de la accesibilidad web](/test-evaluate/tools/list/)
:   Incluye información sobre más de 100 herramientas. Puede utilizar los filtros para limitar la lista a los tipos de herramientas que le interesan.

[[Elegir herramientas de evaluación de accesibilidad web]](/test-evaluate/tools/selecting/)
:   Proporciona orientación sobre la elección de las herramientas. Describe las características y la funcionalidad de los diferentes tipos de herramientas de evaluación y plantea las cosas a tener en cuenta para su situación.

## Evaluación de la conformidad e informes {#conformance}

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/conformance-evaluation.mp4"
  captions="/wai-videos/evaluating/conformance-evaluation.en.vtt|en|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/conformance/#video-intro"
  accessible-version-label="Vídeo: Resumen de la evaluación de la conformidad"
  poster="/content-images/test-eval/video-thumb-conformance.png"
%}

La evaluación de conformidad determina el grado en que las páginas o las aplicaciones web cumplen los estándares de accesibilidad. La "Metodología de evaluación de la conformidad de la accesibilidad de sitios web" (WCAG-EM) del W3C es un acercamiento para determinar la conformidad con las Pautas de Accesibilidad al Contenido Web (WCAG).

[[Visión general de WCAG-EM: Metodología de evaluación de la conformidad de la accesibilidad de sitios web]](/test-evaluate/conformance/wcag-em/)
:   Es una sencilla página con información básica para ayudarle a empezar. Le sugerimos leerla antes de ir al [documento completo de WCAG-EM](https://www.w3.org/TR/WCAG-EM/).

[Herramienta de informes WCAG-EM: Generador de informes de evaluación de la accesibilidad del sitio web](https://www.w3.org/WAI/eval/report-tool/#/)
:   Es una ayuda para generar informes de evaluación de acuerdo a WCAG-EM. No hace las comprobaciones por usted, sino que le ayuda a seguir los pasos de WCAG-EM y genera un informe a partir de la información que usted facilita.

[[Plantilla para informes de evaluación de accesibilidad web]](/test-evaluate/report-template/)
:   Información sugerida para incluir en un informe.

[Herramienta de informes ATAG](https://www.w3.org/WAI/atag/report-tool/)
:   Es una ayuda para generar informes sobre el cumplimiento que una herramienta tiene respecto a las Pautas de Accesibilidad de Herramientas de Autor ([ATAG](/standards-guidelines/atag/)). Las herramientas de autoría son programas y servicios utilizados para crear contenidos web, como los sistemas de gestión de contenidos (CMS) y los editores de HTML "lo que ves es lo que obtienes" (WYSIWYG).

Comunique los resultados de la evaluación claramente, incluyendo el ámbito de aplicación.

## Personas

{% include video-card.html
  video-url="//media.w3.org/wai/evaluation-intros/involving-users.mp4"
  captions="/wai-videos/evaluating/involving-users.en.vtt|en|default"
  accessible-version="https://www.w3.org/WAI/test-evaluate/involving-users/#video-intro"
  accessible-version-label="Vídeo: La participación de los usuarios en la accesibilidad web"
  poster="/content-images/test-eval/video-thumb-involving-users.png"
%}

La participación de las personas con las habilidades adecuadas hace que sus evaluaciones de accesibilidad sean más eficaces.

[[Participación de los usuarios en la evaluación de la accesibilidad web]](/test-evaluate/involving-users/)
:   Proporciona orientación sobre la inclusión de las personas con discapacidad ("usuarios") en la evaluación durante el desarrollo del proyecto.

[Combinar conocimientos para evaluar la accesibilidad web](/test-evaluate/combined-expertise/)
:   Trata los conjuntos de habilidades y consideraciones a tener en cuenta para una revisión colaborativa.

## Estándares

La [descripción general de las normas de evaluación](/standards-guidelines/evaluation/) introduce las especificaciones para redactar pruebas de accesibilidad (formato de reglas ACT) y mostrar los resultados de las mismas (EARL).

<hr>

{% include excol.html type="start" id="video-intro-transcript" %}

##  Introducción a las alternativas para video - Resumen de recursos {#alternatives}

{% include excol.html type="middle" %}

_Este vídeo también está disponible en un servidor W3C: [Vídeo: Evaluación de Accesibilidad Web - Resumen de recursos (formato de archivo: MP4, tamaño: 45MB)](https://media.w3.org/wai/evaluation-intros/evaluating-resources-overview.mp4)._

###  Transcripción textual de los contenidos visuales del vídeo de introducción - Resumen de recursos {#transcript}

<table aria-labelledby="transcript">
  <tbody>
    <tr>
      <th>Audio</th>
      <th>Visual</th>
    </tr>
    <tr>
      <td>Evaluación de Accesibilidad Web: resumen de recursos</td>
      <td>Evaluación de Accesibilidad Web: resumen de recursos</td>
    </tr>
    <tr>
       <td>La evaluación ayuda a garantizar que su sitio web cumpla con los requisitos de accesibilidad</td>
      <td>Aparece una lupa con la palabra "evaluación" en la pantalla de una computadora que muestra un sitio web</td>
    </tr>
    <tr>
      <td>Idealmente, evalúe de forma regular durante todo el proceso de diseño y desarrollo. De esta manera detectará errores rápidamente y evitará costosas correcciones más adelante</td>
      <td>Los componentes de la página web se reorganizan en la página hasta que se logra un diseño óptimo</td>
    </tr>
    <tr>
      <td>La Iniciativa de Accesibilidad Web del W3C, W-A-I o WAI, proporciona recursos gratuitos para ayudarle a completar su evaluación</td>
      <td>Logotipos del W3C y de la Iniciativa de Accesibilidad Web (WAI)</td>
    </tr>
    <tr>
      <td>"Verificaciones simples: un primer vistazo a la accesibilidad web" explica cómo puede realizar algunas verificaciones usted mismo</td>
      <td>"Verificaciones simples: un primer vistazo a la accesibilidad web". Una persona se sienta frente a la computadora. Aparece una bombilla</td>
    </tr>
    <tr>
      <td>Incluso si es nuevo en la accesibilidad web y no tiene un perfil técnico, estas comprobaciones le dan una idea aproximada de la accesibilidad de cualquier página web</td>
      <td>Aparece un documento que contiene las comprobaciones. Cada verificación se resalta para mostrar qué es correcto y qué no</td>
    </tr>
    <tr>
      <td>WAI también mantiene una "Lista de herramientas de evaluación de accesibilidad web" que puede se puede filtrar</td>
      <td>Lista de herramientas de evaluación de accesibilidad web. Aparece una lista de herramientas en forma de iconos</td>
    </tr>
    <tr>
      <td>"La selección de herramientas de evaluación de accesibilidad web" explica lo que una herramienta puede y no puede hacer</td>
      <td>La selección de herramientas de evaluación de accesibilidad web. Los iconos que representan herramientas se muestran en una computadora</td>
    </tr>
    <tr>
      <td>Para los evaluadores más experimentados, WAI proporciona "WCAG-EM", la Metodología de Evaluación de Conformidad de Accesibilidad Web</td>
      <td>WCAG-EM. Metodología de evaluación del cumplimiento de la accesibilidad web. Una persona se sienta frente a una computadora. Se muestra un informe simplificado en la pantalla</td>
    </tr>
    <tr>
      <td>La "Herramienta de informes WCAG-EM" permite registrar los resultados a medida que se sigue la metodología</td>
      <td>Herramienta de informes WCAG-EM. Una barra de progreso muestra las diferentes etapas de la metodología de evaluación</td>
    </tr>
    <tr>
      <td>Para ayudarle a comprender mejor cómo diferentes usuarios navegan por su sitio web, WAI facilita una guía sobre cómo "Involucrar a los usuarios en proyectos de desarrollo web para mejorar y hacer más fácil la accesibilidad" e "Involucrar a los usuarios en la evaluación de la accesibilidad web"</td>
      <td>La pantalla está dividida en 12 partes, en cada una de las cuales un usuario diferente se enfrenta a una computadora. Involucre a los usuarios en proyectos web para una mejor y más fácil accesibilidad e Involucre a los usuarios en la evaluación de la accesibilidad web</td>
    </tr>
    <tr>
      <td>Con todos estos recursos, puede aprender a verificar la accesibilidad de su sitio web y priorizar los problemas que necesita solucionar primero</td>
      <td>Una lupa que muestra las palabras "control de accesibilidad" se reemplaza con una lista de problemas</td>
    </tr>
    <tr>
      <td>Accesibilidad web: esencial para algunos, útil para todos</td>
      <td>Se muestran iconos alrededor de una computadora: una mano, un ojo, un cerebro, una oreja y una boca con ondas sonoras</td>
    </tr>
    <tr>
      <td>Para obtener recursos sobre la evaluación de la accesibilidad web, visite w3.o-r-g/W-A-I/evaluation</td>
      <td>Recursos de evaluación, logotipos del W3C y la Iniciativa de Accesibilidad Web (WAI)</td>
    </tr>
  </tbody>
</table>

{% include excol.html type="end" %}
