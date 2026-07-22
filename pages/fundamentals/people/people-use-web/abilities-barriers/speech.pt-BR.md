---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Fala"
nav_title: "Fala"
lang: pt-BR  # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version
first_published: "como rascunho em 1999"
description: Explora a ampla diversidade de pessoas e habilidades. Destaca barreiras de acessibilidade que as pessoas podem experimentar devido à tecnologia digital inacessível.

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

permalink: /people-use-web/abilities-barriers/speech/pt-BR # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/speech/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/abilities-barriers/physical/pt-BR
  next: /people-use-web/abilities-barriers/visual/pt-BR

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

Deficiências da fala incluem dificuldade em produzir fala que seja reconhecível por outras pessoas ou por software de reconhecimento de voz. Por exemplo, o volume ou a clareza da voz de alguém pode ser difícil de entender.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_speech.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_speech.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Diversidade de Habilidades e Barreiras - Fala"
   poster="content-images/people-use-web/abilities-barriers/speech-video-frame.png"
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

**Nota:** Os exemplos fornecidos nesta seção não são uma lista completa de todas as deficiências ou barreiras.

## Introdução

Pessoas com deficiências da fala encontram barreiras com serviços baseados em voz, como centrais de atendimento automatizadas e aplicativos que são operados usando comandos de voz. Para usar serviços que dependem de voz, pessoas com deficiências da fala precisam de modos alternativos de interação, como chat baseado em texto para interagir com representantes das centrais de atendimento. Além disso, quando números de telefone são o único meio de comunicação com uma organização, isso representa barreiras para pessoas com deficiências da fala. Meios alternativos de comunicação incluem e-mail e formulários de feedback.

## Exemplos de deficiências da fala {#examples-of-speech-disabilities}

- **Apraxia da fala (AOS)**{:#apraxia} – inclui articulação inconsistente e produção de sons da fala, e erros na produção de sons na ordem correta, de modo que palavras ou frases faladas se tornam difíceis de entender.
- **Taquilalia**{:#cluttering} (também chamada de "taquifemia") – inclui aumento da velocidade da fala, ritmo incorreto, entonação e co-articulação de sons, e outra fala influente que às vezes é semelhante à [gagueira](#stuttering){:.termref}.
- **Disartria**{:#dysarthria} – envolve fraqueza ou paralisia completa dos músculos necessários para produzir fala, incluindo lábios, pulmões, garganta, língua e outros.
- **Distúrbio do som da fala**{:#sound} – envolve dificuldade ou incapacidade de produzir certos sons ou padrões de som e às vezes resulta em adição, distorção, omissão ou substituição de tais sons por outros.
- **Gagueira**{:#stuttering} – inclui fala influente, repetição de sons individuais ou palavras e frases inteiras, e deslocamento ou prolongamento de pausas e sons ao falar que é diferente da [taquilalia](#cluttering){:.termref}.
- **Mutismo**{:#muteness} (também chamado de "mutismo") – envolve a incapacidade de falar devido a várias razões, como ansiedade, lesões cerebrais ou incapacidade de ouvir e aprender a fala.

## Exemplos de barreiras para pessoas com deficiências da fala {#examples-of-barriers-for-people-with-speech-disabilities}

- Serviços baseados na web, incluindo aplicações web, que dependem de interação usando apenas voz.
- Sites que oferecem números de telefone como única forma de comunicação com as organizações.

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Diversidade de Habilidades e Barreiras - Fala {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="abilities-barriers_speech"
  yt-id="oFF0lbRskKg"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Diversidade de Habilidades e Barreiras - Fala (formato do arquivo: MP4, tamanho do arquivo: 199MB, em inglês)](https://media.w3.org/wai/people-use-web/abilities-barriers_speech.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital: deficiências da fala. | Como pessoas com deficiência utilizam a tecnologia digital: deficiências da fala |
| Deficiências da fala afetam como as pessoas falam, incluindo não falar, ou falar em uma variedade de diferentes padrões, tons e sons. | Colagem de 4 pessoas fazendo várias atividades em dispositivos de tecnologia ou com eles próximos. |
| Algumas pessoas não falam de forma alguma. Isso pode incluir pessoas que são Surdas, autistas, têm órgãos vocais lesionados ou ausentes, ou têm outras condições que impactam a produção física ou cognitiva da fala. | Homem Surdo sinalizando para colegas em uma videochamada. |
| Infelizmente, embora seja uma percepção equivocada comum, falar diferente não é uma indicação das capacidades intelectuais de uma pessoa. Muitas pessoas gaguejam, pausam ou pronunciam palavras em uma variedade de diferentes padrões, tons e emissões devido a várias deficiências. | Homem fala ao telefone deitado na mesa ao seu lado, mas parece frustrado. |
| Embora você possa me entender, sistemas de reconhecimento automático de fala frequentemente não conseguem. | Homem fala para a câmera. |
| Algumas pessoas usam uma variedade de diferentes tecnologias assistivas para gerar fala. | Homem em cadeira de rodas digitando em teclado grande. |
| Eu uso software para gerar fala, que frequentemente não é reconhecido pelo reconhecimento automático de fala. | A frase é mostrada com cada palavra destacada conforme é falada pelo computador. |
| Sites e aplicativos que exigem entrada por voz podem ser uma barreira para pessoas com deficiências da fala, especialmente quando dependem de reconhecimento automático de fala. | Homem usando laptop está frustrado. Site mostra Suporte ao Cliente que só está disponível por telefone. |
| Em vez disso, sites e aplicativos, como sistemas de suporte ao cliente, precisam fornecer alternativas para chamadas de voz, como chat ou e-mail. | Homem continua usando laptop na mesa. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | Homem fala esta frase, então muda para colagem de 12 pessoas com diferentes fundos coloridos. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 