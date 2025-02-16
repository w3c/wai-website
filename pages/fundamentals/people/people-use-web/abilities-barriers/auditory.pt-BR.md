---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Auditivas"
nav_title: "Auditivas" 
lang: pt-BR  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version
first_published: "como rascunho em 1999"
description: Explora a ampla diversidade de pessoas e habilidades. Destaca barreiras de acessibilidade que as pessoas podem experimentar devido à tecnologia digital inacessível.

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Israel Cefrin"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/abilities-barriers/auditory/pt-BR # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/auditory/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/abilities-barriers/pt-BR
  next: /people-use-web/abilities-barriers/cognitive/pt-BR

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

As deficiências auditivas variam desde perda auditiva leve ou moderada em um ou ambos os ouvidos ("deficiência auditiva") até perda auditiva substancial e incorrigível em ambos os ouvidos ("surdez"). Algumas pessoas com deficiências auditivas podem ouvir sons, mas às vezes não o suficiente para compreender toda a fala, especialmente quando há ruído de fundo. Isso pode incluir pessoas que usam aparelhos auditivos.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_auditory.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_auditory.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Diversidade de Habilidades e Barreiras - Auditivas"
   poster="content-images/people-use-web/abilities-barriers/auditory-video-frame.png"
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

**Nota:** Os exemplos dados nesta seção não são uma lista completa de todas as deficiências ou barreiras.

## Introdução

Embora a multimídia ofereça muitas oportunidades para pessoas com deficiências auditivas, ela também apresenta desafios quando o conteúdo não é projetado para ser acessível. Por exemplo, enquanto o conteúdo em vídeo pode ser usado para comunicar informações visualmente, o conteúdo em áudio precisa ter alternativas, como transcrições e legendas, para que seja acessível para pessoas com deficiências auditivas.

Para usar multimídia, pessoas com deficiências auditivas frequentemente dependem de:

-   Transcrições e legendas de conteúdo em áudio, incluindo conteúdo apenas em áudio e faixas de áudio em multimídia;
-   Players de mídia que exibam legendas e forneçam opções para ajustar o tamanho do texto e as cores das legendas;
-   Opções para parar, pausar e ajustar o volume do conteúdo em áudio (independentemente do volume do sistema);
-   Áudio de primeiro plano de alta qualidade que seja claramente distinguível de qualquer ruído de fundo.

Para algumas pessoas com deficiências auditivas, a língua de sinais é a língua principal, e elas podem não ler a língua escrita com tanta fluência. Fornecer informações importantes em língua de sinais e usar texto mais simples que seja complementado por imagens, gráficos e outras ilustrações ajuda a tornar o conteúdo digital mais compreensível para muitas pessoas. No entanto, é importante lembrar que nem todas as pessoas com deficiências auditivas conhecem língua de sinais.

## Exemplos de deficiências auditivas {#examples-of-auditory-disabilities}

-   **Deficiência auditiva**{:#hardofhearing} – deficiências auditivas leves ou moderadas em um ou ambos os ouvidos.
-   **Surdez**{:#deafness} – deficiência auditiva substancial e incorrigível em ambos os ouvidos.
-   **Surdocegueira**{:#deafblindness} – deficiências visuais e auditivas substanciais e incorrigíveis.

## Exemplos de barreiras para pessoas com deficiências auditivas {#examples-of-barriers-for-people-with-auditory-disabilities}

-   Conteúdo em áudio, como vídeos com vozes e sons, sem legendas ou transcrições.
-   Players de mídia que não exibem legendas e que não fornecem controles de volume.
-   Players de mídia que não fornecem opções para ajustar o tamanho do texto e as cores das legendas.
-   Serviços baseados na web, incluindo aplicações web, que dependem de interação usando apenas voz.
-   Falta de língua de sinais para complementar informações importantes e texto que é difícil de ler.

## Histórias relacionadas a deficiências auditivas {#stories-related-to-auditory-disabilities}

-   [Dhruv, older adult student who is deaf](/people-use-web/user-stories/story-six/)
-   [Marta, marketing assistant who is deaf and blind](/people-use-web/user-stories/story-seven/)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Diversidade de Habilidades e Barreiras - Auditivas {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="abilities-barriers_auditory"
  yt-id="WZ4J8tKQ-Kw"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Diversidade de Habilidades e Barreiras - Auditivas (formato do arquivo: MP4, tamanho do arquivo: 362MB, em inglês)](https://media.w3.org/wai/people-use-web/abilities-barriers_auditory.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital: Deficiências Auditivas | Como pessoas com deficiência utilizam a tecnologia digital: Deficiências Auditivas |
| Deficiências auditivas afetam como as pessoas ouvem, incluindo ouvir menos em um ou ambos os ouvidos, não ouvir, e ouvir sons em uma variedade de maneiras diferentes. | Colagem de quatro pessoas em diferentes ambientes usando laptops. |
| Som de alta qualidade é importante para muitas pessoas com audição reduzida. O áudio precisa ser claro e o ruído de fundo baixo para tornar a fala mais fácil de entender. | Uma mulher acena enquanto assiste a um vídeo em seu laptop, mas então vira a cabeça tentando ouvir mais claramente. |
| Sites e aplicativos que permitem aos usuários ajustar o volume do áudio que está sendo reproduzido no momento sem alterar o volume de outros sons do computador, como notificações, tornam mais fácil para as pessoas ouvirem o áudio. | A mulher ajusta o volume do vídeo no próprio player de vídeo. |
| Algumas pessoas com deficiências auditivas usam dispositivos auditivos, mas isso nem sempre significa que podem ouvir todo o áudio, ou ouvi-lo claramente. Sites e aplicativos que não dependem apenas de áudio tornam mais fácil para pessoas com diferentes tipos de deficiências auditivas perceberem a informação. | Um homem usando aparelho auditivo digita em seu laptop. |
| Isso inclui usar alertas visuais e feedback tátil, como vibração em telefones celulares, além do áudio. | Uma pequena caixa de diálogo de notificação desliza e treme na tela do laptop do homem no canto superior direito. |
| Outro exemplo de alternativas visuais para áudio são as legendas. Legendas fornecem informações importantes de áudio em formato de texto. Elas indicam quem está falando e sons importantes, como efeitos sonoros significativos em um filme. | O homem agora está assistindo a um vídeo com legendas ativadas. Ele também ajusta seu aparelho auditivo. |
| Muitas pessoas que usam legendas precisam ajustar o tamanho do texto, fonte e cor para tornar as legendas mais legíveis. | Uma visão ampliada do player de vídeo mostra uma caixa de diálogo "Preferências de Legendas" com opções ajustáveis incluindo fonte, cor do texto e opacidade. |
| Embora as legendas automáticas estejam gradualmente melhorando, elas geralmente são muito imprecisas para serem usadas como alternativa. Por exemplo, elas não reconhecem bem termos especializados, e as frases às vezes podem se juntar, tornando difícil acompanhar. | Legendas difíceis de entender em um vídeo dizem "obrigado senhor oh estou tão feliz de estar onde estou tão obrigado estou tentando". O homem assistindo ao vídeo suspira de frustração. |
| Embora muitas pessoas com deficiências auditivas não usem língua de sinais, para muitas é sua língua principal. Existem muitas línguas de sinais em diferentes países, regiões e culturas. A língua de sinais também é diferente da língua escrita e falada. Isso significa que as pessoas frequentemente estão traduzindo entre língua de sinais e língua escrita, e os níveis de compreensão da língua escrita podem variar. | Um homem usa língua de sinais em uma videochamada com colegas. Um intérprete de língua de sinais é visível junto com o colega que está falando; o vídeo do intérprete está "Fixado" para permanecer visível. |
| Para ver a língua de sinais claramente, as pessoas dependem de transmissões de vídeo de alta qualidade. Isso inclui necessitar de acesso à internet de alta velocidade e dispositivos que possam lidar com vídeo de alta qualidade. | O homem agora se inclina em seu laptop para ver algo mais claramente. |
| Pessoas com deficiências auditivas também incluem pessoas que são surdocegas. | Uma mulher se inclina em direção a um monitor que tem uma tela de ampliação na frente. |
| Muitas pessoas que são surdocegas dependem de comunicação tátil, como braille. Displays braille portáteis podem converter texto no computador em letras braille que podem ser sentidas nas pontas dos dedos. E para multimídia, como vídeos, as pessoas dependem de transcrições descritivas. Este é um texto, como um artigo ou roteiro, que contém todas as informações de áudio e visuais para que o vídeo possa ser compreendido sem assisti-lo. | A mulher agora lê de um display braille atualizável em vez de olhar para a tela. |
| Você pode ajudar a tornar a tecnologia acessível para mim. | Homem com aparelhos auditivos sinaliza e fala a frase "Você pode ajudar a tornar a tecnologia acessível para mim". |
| Acessibilidade: É sobre pessoas. Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 