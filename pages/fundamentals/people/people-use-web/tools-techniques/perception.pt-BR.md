---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Percepção - ouvir, sentir e ver"
lang: pt-BR  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version
first_published: "como rascunho em 1999"
description: Introduz algumas das técnicas e ferramentas que pessoas com deficiência usam para interagir com a tecnologia digital — configurações do navegador, texto para fala, reconhecimento de voz e muito mais.

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

permalink: /people-use-web/tools-techniques/perception/pt-BR # Add the language shortcode to the end, with no slash at the end
ref: /people-use-web/tools-techniques/perception/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/tools-techniques/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/pt-BR
  next: /people-use-web/tools-techniques/presentation/pt-BR

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this

footer: >
  <p>Nota sobre vídeo-descrição: O vídeo nesta página não contém áudio-descrição sincronizada porque os elementos visuais apenas ilustram o áudio e não fornecem informação adicional. Neste caso, a áudio-descrição seria muito mais uma distração do que útil para a maioria das pessoas, incluindo pessoas que não conseguem ver elementos visuais. A descrição da informação visual está disponível na Transcrição de Texto com Descrição de Elementos Visuais ("transcrição descritiva").</p>
  <p><strong>Editor(a):</strong> Shadi Abou-Zahra. Editor(a) anterior: Judy Brewer. Colaboradores(as) listados em ACKNOWLEDGEMENTS.</p>
  <p>Desenvolvido pelo Grupo de Trabalho de Educação e Divulgação (<a href="https://www.w3.org/WAI/EO/">EOWG</a>) com apoio do <a href="https://www.w3.org/WAI/about/projects/wai-guide/">Projeto WAI-Guide</a> e do <a href="https://www.w3.org/WAI/WAI-AGE/">Projeto WAI-AGE</a> co-fundado pela Comissão Européia (EC).</p>
---

{::nomarkdown}
<style>
  #introduction p, #introduction ul {
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

As pessoas percebem o conteúdo através de diferentes sentidos, dependendo de suas necessidades e preferências. Por exemplo, algumas pessoas não estão vendo a tela ou ouvindo o áudio. Exemplos de percepção incluem:

-   **Auditiva** - como fala, música e som que podem ser *ouvidos*.
-   **Tátil** - como pontos, barras e vibração que podem ser *sentidos*.
-   **Visual** - como imagens, texto e vídeo que podem ser *vistos*.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_perception.mp4"
   captions="wai-videos/people-use-web/tools-techniques_perception.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Ferramentas e Técnicas - Percepção"
   poster="content-images/people-use-web/tools-techniques/perception-video-frame.png"
%}

</div>

{% include_cached toc.html type="start" title="Conteúdo da Página" class="full" %}
{:/}

-   TOC é criado automaticamente.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}

</aside>
{:/} 

**Nota:** Os exemplos fornecidos nesta seção não são uma lista completa de todas as formas que as pessoas interagem com a tecnologia digital.

## Descrição

Algumas pessoas precisam converter conteúdo de uma forma para outra para percebê-lo. Por exemplo, alguém que é surdocego requer conteúdo em áudio e visual em forma tátil (como [Braille](#braille){:.termref}). Outras pessoas precisam perceber o conteúdo através de múltiplos sentidos, como alguém com dislexia que pode precisar ouvir e ver o texto para entendê-lo melhor.

Conteúdo em forma textual pode ser mais facilmente convertido em outras formas e, portanto, é particularmente útil. No entanto, conteúdo apenas em texto apresenta barreiras para muitas pessoas que têm dificuldade com linguagem escrita. Gráficos e ilustrações podem ser tornados acessíveis e frequentemente melhoram a compreensão, facilidade de uso e satisfação com a tecnologia digital para todos.

Em alguns casos, o conteúdo pode ser convertido em diferentes formas usando software ou hardware. Por exemplo, um software de texto para fala pode converter texto em fala. Em outros casos, os autores de conteúdo precisam fornecer formas alternativas do conteúdo. Por exemplo, pelo menos algum nível de intervenção humana é necessário para criar descrições textuais para imagens e legendas para conteúdo em áudio. Às vezes, ferramentas de software, como reconhecimento de fala e imagem, podem auxiliar os autores a fornecer tais alternativas, mas a conversão geralmente não é totalmente automatizável.

## Exemplos de recursos de acessibilidade {#examples-of-accessibility-features}

- **Audiodescrições**{:#audio} – (também referidas como "descrições de vídeo" e "vídeo descrito") narrações que descrevem detalhes visuais importantes em um vídeo. Essas narrações podem ocorrer durante pausas naturais no áudio, ou em arquivos de áudio separados ou faixas de áudio em multimídia.
- **Notificações auditivas, táteis e visuais**{:#notifications} – alertando o usuário de diferentes maneiras, como piscando ou exibindo diálogos visuais, usando som ou vibração.
- **Braille**{:#braille} – um sistema usando seis a oito pontos em relevo em vários padrões, para representar letras e números. Esses caracteres são lidos passando os dedos sobre os pontos em relevo. Braille é usado por pessoas cegas, mas nem todas as pessoas cegas conhecem braille.
- **Legendas**{:#captions} (chamadas de "subtítulos" em algumas áreas) – uma versão em texto da fala e informações de áudio não-verbal necessárias para pessoas surdas e com deficiência auditiva entenderem o conteúdo. As legendas são sincronizadas com o áudio e geralmente mostradas em um player de mídia quando os usuários as ativam.
- **Língua de sinais**{:#sign} – uma forma visual de comunicação que é principalmente usada por pessoas surdas. Envolve expressões manuais, corporais e faciais para transmitir palavras, frases e tom. Por exemplo, a intensidade de um gesto pode indicar o humor ou ênfase de uma informação particular. Como nas línguas escritas, existem muitas línguas de sinais e dialetos, alguns dos quais são reconhecidos como línguas oficiais em alguns países. Nem todas as pessoas que têm deficiências auditivas ou que são surdas conhecem língua de sinais.
- **Símbolos**{:#symbols} – ícones que representam palavras ou conceitos usados em vez de texto por algumas pessoas com comunicação prejudicada, incluindo pessoas com dificuldades de leitura ou escrita.
- **Texto para fala**{:#tts} (às vezes chamado de "síntese de fala" ou "saída de fala") - conversão automática de texto em uma voz sintetizada lendo o texto em voz alta.
- **Transcrições**{:#transcripts} – manuscritos de texto contendo a sequência correta de gravação literal de qualquer fala e descrições de informações auditivas ou visuais importantes.

## Exemplos de tecnologias assistivas e estratégias adaptativas {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Display Braille atualizável**{:#braille_display} – um terminal mecânico que exibe uma linha de caracteres em [Braille](#braille){:.termref} (geralmente 40-80) levantando e abaixando os pontos (pinos) dinamicamente. Displays Braille também podem ser conectados a dispositivos independentes que têm outras funcionalidades, como fazer anotações, calcular números ou fazer interface com dispositivos como quiosques de informação pública.
- **Leitor de tela**{:#sr} – software que processa conteúdo na área de trabalho e em navegadores web, e o converte em [texto para fala](#tts){:.termref} e [Braille](#braille){:.termref}. Alguns leitores de tela fornecem outras funções, como teclas de atalho, diferentes modos para processar conteúdo e interagir com ele, e a capacidade de destacar o texto que está sendo lido em voz alta.
- **Navegador de voz**{:#vb} – similar ao [leitor de tela](#sr){:.termref}, mas geralmente processa apenas conteúdo web. Navegadores de voz tipicamente não são desenvolvidos como ferramentas assistivas, mas como navegadores web alternativos para dispositivos móveis ou similares.

## Histórias relacionadas à percepção {#stories-related-to-perception}

- [Dhruv, estudante adulto que é surdo](/people-use-web/user-stories/story-six/)
- [Lakshmi, contadora sênior que é cega](/people-use-web/user-stories/story-three/)
- [Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia](/people-use-web/user-stories/story-eight/)
- [Marta, assistente de marketing que é surda e cega](/people-use-web/user-stories/story-seven/)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Ferramentas e Técnicas - Percepção {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="tools-techniques_perception"
  yt-id="dL8W-A4F1ZE"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Ferramentas e Técnicas - Percepção (formato do arquivo: MP4, tamanho do arquivo: 264MB, em inglês)](https://media.w3.org/wai/people-use-web/tools-techniques_perception.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência usam a tecnologia digital: Percepção - ouvir, sentir e ver | Como pessoas com deficiência usam a tecnologia digital: Percepção - ouvir, sentir e ver |
| Quando o conteúdo é acessível, as pessoas podem percebê-lo através de diferentes sentidos dependendo de suas necessidades e preferências. Por exemplo, algumas pessoas que não podem ver uma tela ou ouvir áudio dependem de sites e aplicativos que podem apresentar a informação de diferentes maneiras. | Colagem de três pessoas usando dispositivos de tecnologia. |
| Pessoas cegas podem usar tecnologia assistiva em computadores e telefones celulares chamada leitores de tela. Essas ferramentas de software leem a informação na tela em voz alta, ou podem apresentá-la em Braille. | Homem cego usa laptop para explorar página estilo Wikipédia sobre pássaros. |
| Link, título nível 2, Pássaro. Pássaros são um grupo de vertebrados de sangue quente constituindo a classe Aves, (/'eIvi:z/), caracterizados por penas, mandíbulas sem dentes com bico, a postura de -- | O conteúdo sendo lido é destacado na página durante a narração. |
| Leitores de tela processam sites e aplicativos com títulos, listas, links, botões e outras estruturas corretamente codificados muito melhor. | Homem continua usando laptop. |
| Pessoas cegas dependem da audição ou tato, em vez da visão. Para vídeo, criadores de conteúdo precisam garantir que a informação visual também seja fornecida em forma auditiva. | A câmera aproxima para destacar um botão "Audiodescrição" disponível abaixo de um player de vídeo em um site. |
| Frequentemente essas descrições de informação visual podem ser colocadas em pausas existentes no áudio, ou o roteiro pode ser criado desde o início com descrição suficiente das cenas, personagens e outras informações visuais importantes. | Homem continua usando seu laptop em sua mesa. |
| Pessoas surdocegas também usam leitores de tela para apresentar a informação usando um dispositivo chamado display Braille atualizável. Caracteres Braille são uma combinação de pontos levantados ou abaixados, que as pessoas leem passando os dedos sobre eles. | Mulher que é surdocega passa seus dedos sobre um dispositivo Braille. |
| De forma similar a pessoas que são cegas e surdocegas, pessoas Surdas e com deficiência auditiva também podem usar feedback háptico; por exemplo, através de alertas de vibração em um telefone celular em vez de notificações auditivas. | Mulher surda usa seu laptop em uma mesa com seu telefone ao lado. O flash da câmera do telefone pisca para alertá-la de uma nova mensagem em um aplicativo de chat. |
| Pessoas Surdas ou com deficiência auditiva frequentemente dependem de ver em vez de ouvir. Por exemplo, ao assistir um vídeo, elas podem usar legendas ou língua de sinais como alternativa ao áudio. | Homem surdo sinaliza para colegas em uma videochamada, e um intérprete sinaliza de volta sua resposta verbal. |
| Você pode ajudar a tornar a tecnologia acessível para mim. | Mulher surdocega sinaliza para a câmera. |
| Acessibilidade: É sobre pessoas. | Colagem de 12 pessoas com diferentes fundos coloridos. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %}
