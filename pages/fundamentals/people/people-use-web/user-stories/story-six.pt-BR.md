---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Dhruv, estudante adulto que é surdo"
nav_title: "Dhruv"
lang: pt-BR   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version

translation:
  # outdated: false
  draft: true
  last_updated: 2025-02-16

translators:
  - name: "Israel Cefrin"
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-six/pt-BR  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-six/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-five/pt-BR
  next: /people-use-web/user-stories/story-seven/pt-BR

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this
# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Nota sobre vídeo-descrição: O vídeo nesta página não contém áudio-descrição sincronizada porque os elementos visuais apenas ilustram o áudio e não fornecem informação adicional. Neste caso, a áudio-descrição seria muito mais uma distração do que útil para a maioria das pessoas, incluindo pessoas que não conseguem ver elementos visuais. A descrição da informação visual está disponível na Transcrição de Texto com Descrição de Elementos Visuais ("transcrição descritiva").</p>
  <p>Publicado pela primeira vez como rascunho em 1999.</p>
  <p><strong>Editores(as):</strong> Kevin White e Shadi Abou-Zahra. Editores(as) anteriores: Judy Brewer e Norah Sinclair. Colaboradores(as): Brent Bakken, Jade Matos Carew, Jayne Schurick, Michele Williams e outros em ACKNOWLEDGEMENTS.</p>
  <p>Desenvolvido pelo Grupo de Trabalho de Educação e Divulgação (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) com apoio do <a href="https://www.w3.org/WAI/about/projects/wai-guide/">Projeto WAI-Guide</a> e do <a href="https://www.w3.org/WAI/WAI-AGE/">Projeto WAI-AGE</a> co-fundado pela Comissão Européia (EC).</p>
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

{% include_cached blockquote.html class="pull alt-2" content="<p>Acessibilidade: É sobre pessoas</p>" %}

<aside id="introduction" class="box"><div class="box-i">
  <div>
{:/}

Dhruv é um estudante que é surdo. Por sua primeira língua, ou língua nativa, ser a língua de sinais, Dhruv tem dificuldade em ler conteúdo que não está bem estruturado com layout e navegação consistentes. Em sua universidade, muitas das aulas estão sendo disponibilizadas online. Isso pode apresentar uma barreira para Dhruv se os vídeos não contiverem legendas ou se as legendas tiverem erros ou estiverem atrasadas em relação ao que o professor está dizendo. Em seu tempo livre, Dhruv gosta de assistir filmes e programas de TV em seu dispositivo móvel. Estes devem conter legendas precisas e também ser codificados para que ele saiba quem está falando.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_6.mp4"
   captions="wai-videos/people-use-web/user-stories_6.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Dhruv, estudante adulto que é surdo"
   poster="content-images/people-use-web/user-stories/dhruv-video-frame.png"
%}
</div>

{% include_cached toc.html type="start" title="Conteúdo da Página" class="full" %}
{:/}

-   TOC é criada automaticamente.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}

</aside>
{:/}

**Nota:** Esta história de usuário é um exemplo de uma pessoa com este tipo de deficiência. Outras pessoas com esta deficiência podem ter experiências diferentes.

## Sobre Dhruv

> A maioria das pessoas não percebe que a língua de sinais é uma língua completamente diferente. Eu posso ler legendas em texto, mas levo mais tempo porque elas não estão na minha primeira língua. Legendas e língua de sinais não são intercambiáveis.

Dhruv é surdo desde o nascimento. Ele é um estudante adulto, fazendo cursos online. Embora possa ouvir alguns sons, não ouve o suficiente para entender a fala. Dhruv aprendeu a língua de sinais quando criança. A língua de sinais é sua primeira língua. Como resultado, a linguagem escrita pode ser difícil. Ele prefere que o conteúdo escrito tenha boa estrutura e cabeçalhos com jargão mínimo para que seja mais fácil de entender.

Dhruv consegue fazer leitura labial, mas só consegue fazê-lo efetivamente quando pode ver o rosto inteiro da pessoa que está falando. Mesmo assim, ele só consegue fazer bem o suficiente para captar algumas palavras aqui e ali e não pode confiar apenas na leitura labial para entender o conteúdo.

A universidade onde Dhruv estuda fornece intérpretes de língua de sinais e Tradução em Tempo Real para Comunicação (CART); no entanto, essa legendagem nem sempre está presente em vídeos e outros conteúdos de mídia. A universidade está agora trabalhando para legendar todo o conteúdo em seu currículo, no entanto, é um processo demorado. À medida que mais e mais conteúdo é legendado, Dhruv está achando mais fácil completar seus estudos remotamente.

Dhruv passa muito de seu tempo livre assistindo conteúdo em serviços de streaming de vídeo. A melhoria na legendagem desses serviços nos últimos anos significa que ele pode assistir mais programas do que antes. Ele pode ter dificuldade quando as legendas não são claramente codificadas por cores para mostrar quem está falando. A legendagem automática pode ser útil para ele, mas também pode causar problemas se estiver disponível, mas incorreta.

## Exemplos de barreiras

Legendas imprecisas
: **Barreira:** "Eu adoro que minhas aulas sejam gravadas e disponibilizadas online, mas às vezes as legendas não transmitem as palavras exatas que o instrutor está dizendo, especialmente em algumas das minhas aulas mais técnicas."
: **Funciona bem:** "Quando o legendador conhece o material para não perder palavras ou cometer erros."

Design das legendas
: **Barreira:** "Ao assistir filmes online, as legendas frequentemente cobrem partes do vídeo. Às vezes perco coisas no vídeo e isso torna as legendas difíceis de ler dependendo do fundo."
: **Funciona bem:** "As legendas aparecem na parte inferior da tela, mas também posso movê-las se necessário. Elas são mostradas contra um fundo de cor sólida que oferece bom contraste entre as legendas e o fundo."

Boa posição da câmera para o falante
: **Barreira:** "Algumas aulas gravam o instrutor falando. Isso é ótimo porque sou bom em leitura labial, mas a câmera frequentemente está muito longe."
: **Funciona bem:** "A câmera está posicionada para focar no rosto do instrutor."

Sem alternativa para áudio
: **Barreira:** "Ao assistir um programa de notícias online, não há uma opção para eu entender o que a pessoa falante está dizendo."
: **Funciona bem:** "Forneça alternativas de áudio como língua de sinais, legendas ou transcrição. Se houver alguém falando na câmera, foque nele."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Legendas (Percepção)](/people-use-web/tools-techniques/perception/#captions)
* [Transcrições (Percepção)](/people-use-web/tools-techniques/perception/#transcripts)
* [Língua de sinais (Percepção)](/people-use-web/tools-techniques/perception/#sign)

## Recursos relacionados da WAI

* Vídeo: [Legendas em Vídeo](/perspective-videos/captions/)
* Dica: [Crie transcrições e legendas para multimídia](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* Dica: [Inclua alternativas de imagem e mídia em seu design](/tips/designing/#include-image-and-media-alternatives-in-your-design)
* Dica: [Forneça controles para conteúdo que inicia automaticamente](/tips/designing/#provide-controls-for-content-that-starts-automatically)
* Dica: [Escreva código que se adapte à tecnologia do usuário](/tips/developing/#write-code-that-adapts-to-the-users-technology)
* Verifique: [Alternativas para multimídia (vídeo, áudio)](/test-evaluate/preliminary/#media)

## Princípios relacionados

* [Alternativas em texto para conteúdo não textual (Perceptível)](/fundamentals/accessibility-principles/#alternatives)
* [Legendas e outras alternativas para multimídia (Perceptível)](/fundamentals/accessibility-principles/#captions)
* [O conteúdo é mais fácil de ver e ouvir (Perceptível)](/fundamentals/accessibility-principles/#distinguishable)
* [O conteúdo é legível e compreensível (Compreensível)](/fundamentals/accessibility-principles/#readable)
* [Critérios de Sucesso relacionados a "legendas", em inglês](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Dhruv, estudante adulto que é surdo {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_6"
  yt-id="jft__DXkPv8"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Dhruv, estudante adulto que é surdo (formato do arquivo: MP4, tamanho do arquivo: 307MB, em inglês)](https://media.w3.org/wai/people-use-web/user-stories_6.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital; Dhruv, estudante adulto que é surdo. | Como pessoas com deficiência utilizam a tecnologia digital; Dhruv, estudante adulto que é surdo. |
| Olá! Meu nome é D-H-R-U-V, Dhruv. Eu sou Surdo. Posso ouvir alguns sons, mas não o suficiente para entender a fala. Eu uso Língua de Sinais Britânica – eu penso e sonho em sinais. | Um homem fala e sinaliza diretamente para a câmera. |
| Recentemente me matriculei em um curso superior online. Para minhas aulas, eu agendo intérpretes que podem interpretar as aulas e conversas e falar por mim. Preciso de aplicativos de videoconferência com funcionalidade para "fixar" vídeos dos intérpretes para que eu possa sempre vê-los. | O homem está sentado em uma mesa usando um laptop. Ele está participando de uma reunião online usando um aplicativo de videoconferência. Ele alterna entre visualização de múltiplos participantes e participante fixado. |
| Algumas aulas têm legendagem em tempo real digitada por legendadores humanos. Isso é mais preciso do que legendas automáticas, que frequentemente não reconhecem termos especializados nas aulas. Para nossos vídeos de trabalhos de aula, eu dependo de boas legendas. Estas são editadas para que cada frase que aparece na tela não seja muito longa e esteja sincronizada com o áudio. Eu também frequentemente me vejo precisando ajustar o tamanho do texto e as cores das legendas, para poder lê-las melhor. Alguns aplicativos também permitem que eu mova as legendas para o topo ou fundo do vídeo, para que não fiquem no caminho. | O homem está assistindo a um vídeo em um reprodutor de mídia e selecionando legendas em inglês de uma lista de opções de idiomas. Em seguida, ele seleciona opções de como quer que as legendas sejam exibidas. |
| Em algumas situações, me vejo fazendo leitura labial. Por exemplo, quando estou em chamadas não planejadas sem intérpretes ou outras pessoas que podem sinalizar. Aprendi leitura labial ao longo dos anos por causa dessas situações, mas nem sempre é confiável para mim. Preciso ver a boca da pessoa, ter eles falando claramente, e ver seus gestos também ajuda. No entanto, é exaustivo e não é algo que eu consiga fazer por muito tempo. | O homem está sentado em uma mesa usando um laptop. Ele está participando de uma reunião online usando um aplicativo de videoconferência. |
| Também uso a função de chat. Algumas ferramentas de chat suportam texto em tempo real em vez de apenas mensagens de texto linha por linha. Isso é muito mais interativo. Posso me envolver em conversas de texto com meus amigos como outros fazem por voz. | O homem está sentado em uma mesa usando um laptop para conversar com outras pessoas usando uma função de chat. |
| Claro, as aulas também vêm com muita leitura. Lido bem com isso, exceto quando a escrita é desnecessariamente complexa e sem estruturas como listas e cabeçalhos. As pessoas não percebem que para mim ler texto envolve esforço extra, porque a língua de sinais é minha língua nativa. Então, como para todos os outros, escrita clara e simples torna o texto mais fácil de entender. | O homem está sentado em uma mesa usando um laptop e lendo um texto longo e complexo. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | O homem fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 