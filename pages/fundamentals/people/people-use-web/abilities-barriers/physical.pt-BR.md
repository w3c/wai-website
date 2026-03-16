---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Físicas"
nav_title: "Físicas"
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

permalink: /people-use-web/abilities-barriers/physical/pt-BR # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/physical/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/abilities-barriers/cognitive/pt-BR
  next: /people-use-web/abilities-barriers/speech/pt-BR

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

Deficiências físicas (às vezes chamadas de "deficiências motoras") incluem fraqueza e limitações do controle muscular (como movimentos involuntários incluindo tremores, falta de coordenação ou paralisia), limitações de sensibilidade, distúrbios articulares (como artrite), dor que impede o movimento e membros ausentes.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_physical.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_physical.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Diversidade de Habilidades e Barreiras - Físicas"
   poster="content-images/people-use-web/abilities-barriers/physical-video-frame.png"
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

Para usar a tecnologia digital, pessoas com deficiências físicas frequentemente utilizam hardware e software especializados, como:

- Teclado ou mouse ergonômico ou especialmente projetado;
- Ponteira de cabeça, haste bucal e outros auxílios para ajudar na digitação;
- Teclado virtual com trackball, joysticks ou outros dispositivos apontadores;
- Interruptores operados pelo pé, ombro, sopro-e-sucção ou outros movimentos;
- Reconhecimento de voz, rastreamento ocular e outras abordagens para interação sem as mãos.

Pessoas com deficiências físicas podem estar usando apenas um mouse ou dispositivo similar ao mouse, ou apenas um teclado ou dispositivo similar ao teclado para operar o computador. Pessoas com deficiências físicas dependem do suporte do teclado para ativar funcionalidades fornecidas nas páginas web. Elas podem precisar de mais tempo para digitar, clicar ou realizar outras interações, e podem digitar teclas individuais em sequência ou usar teclas de aderência em vez de digitar teclas simultâneas ("acordes") para ativar comandos. Tais pressionamentos de tecla incluem comandos para caracteres especiais, teclas de atalho e para ativar itens de menu.

Pessoas com deficiências físicas podem ter dificuldade para clicar em áreas pequenas e são mais propensas a cometer erros na digitação e no clique. Fornecer áreas clicáveis grandes, tempo suficiente para completar tarefas e opções de correção de erros para formulários são aspectos importantes do design. Outros aspectos importantes do design incluem fornecer indicadores visíveis do foco atual e mecanismos para pular blocos, como cabeçalhos de página ou barras de navegação. Pessoas com deficiências cognitivas e visuais compartilham muitos desses requisitos.

## Exemplos de deficiências físicas {#examples-of-physical-disabilities}

- **Artrite**{:#arthritis} – inflamação, degeneração e/ou dano às articulações que pode causar dor e reduzir a mobilidade e destreza.
- **Fibromialgia**{:#fibromyalgia} – dor crônica e sensibilidade em todo o corpo, incluindo músculos, ligamentos e tendões, que pode afetar a mobilidade e destreza.
- **Reumatismo**{:#rheumatism} – várias condições que causam dor crônica em articulações, músculos, e tecidos fibrosos que podem afetar a mobilidade e destreza.
- **Tremor e espasmos musculares**{:#tremor} – movimentos involuntários, incluindo tremores breves e espasmos musculares temporários ou crônicos.
- **Tetraplegia (quadriplegia)**{:#quadriplegia} – paralisia parcial ou total dos quatro membros (pernas e braços) e torso que afeta a mobilidade e destreza.
- **Membros ausentes ou não típicos**{:#missinglimbs} – ausência parcial ou total de membros que pode afetar a mobilidade e destreza.

## Exemplos de barreiras para pessoas com deficiências físicas {#examples-of-barriers-for-people-with-physical-disabilities}

- Limites de tempo insuficientes para responder ou completar tarefas, como preencher formulários online.
- Controles, incluindo links com imagens de texto, que não têm alternativas de texto equivalentes.
- Falta de orientação visual e não visual, estrutura da página e outras ajudas de navegação.
- Mecanismos de navegação e funções da página inconsistentes, imprevisíveis e excessivamente complicados.

## Histórias relacionadas a deficiências físicas {#stories-related-to-physical-disabilities}

- [Ade, repórter com uso limitado dos braços](/people-use-web/user-stories/story-one/)
- [Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo](/people-use-web/user-stories/story-nine/)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Diversidade de Habilidades e Barreiras - Físicas {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="abilities-barriers_physical"
  yt-id="z_5l75rksSA"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Diversidade de Habilidades e Barreiras - Físicas (formato do arquivo: MP4, tamanho do arquivo: 277MB, em inglês)](https://media.w3.org/wai/people-use-web/abilities-barriers_physical.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital: deficiências físicas. | Como pessoas com deficiência utilizam a tecnologia digital: deficiências físicas |
| Deficiências físicas afetam como as pessoas se movem, incluindo incapacidade de se mover, mobilidade limitada, falta de coordenação, tremores e movimento involuntário, dor que impede o movimento, bem como membros ausentes e não típicos. | Colagem de 3 pessoas usando seus dispositivos. |
| Pessoas que usam um mouse podem ter dificuldade com controle motor fino. | Homem sentado na mesa usa seu laptop. |
| Por exemplo, tremores, articulações não típicas, dor ou fadiga podem impedir que as pessoas consigam selecionar alvos pequenos, como pequenos links, botões e controles. | Homem está usando touchpad com tremor visível nas mãos. Ele usa um site onde uma caixa de seleção só pode ser selecionada clicando no quadrado da caixa de seleção, o que é difícil de fazer. |
| Sites e aplicativos com áreas clicáveis grandes ao redor de caixas de seleção, botões de opção e outros controles são mais fáceis de usar para pessoas com mobilidade limitada e destreza reduzida. | Ele agora usa um site diferente que permite selecionar o rótulo de texto ao lado de um botão de opção e caixa de seleção, em vez de apenas o círculo do botão de opção e o quadrado da caixa de seleção. |
| Outras pessoas usam entrada por voz. Embora a entrada por voz use a interface do teclado em segundo plano, sites e aplicativos que são programados e projetados com consideração para entrada por voz são mais eficazes. Por exemplo, quando o nome de um botão no código corresponde ao nome exibido visualmente, pessoas usando entrada por voz sabem o que precisam dizer para clicar nesse botão. "Clique enviar e-mail." | Homem em cadeira de rodas está sentado em uma mesa enquanto dita uma mensagem de e-mail usando seu laptop. |
| Algumas pessoas não usam mouse, tela sensível ao toque ou outros dispositivos apontadores. Elas podem usar teclados especializados com teclas maiores ou mais espaço entre as teclas. Algumas usam ferramentas como uma vareta bucal ou vareta de cabeça para digitar. | Homem com movimento irregular das mãos usa um teclado com teclas grandes para digitar. |
| Sites e aplicativos que tornam as funções visivelmente claras com estilos de foco ativos e utilizáveis apenas com teclado são mais fáceis de usar para pessoas com deficiências físicas. | Site para inserir informações de envio tem contorno visual claro ao redor do campo atualmente em foco e as letras digitadas aparecem no ritmo do homem usando o teclado grande. |
| Independentemente do dispositivo de entrada usado, sites e aplicativos que fornecem tempo suficiente para digitar e completar tarefas são mais fáceis de usar para pessoas com deficiências físicas porque pode levar mais tempo para as pessoas navegarem e digitarem, e para corrigirem erros de digitação. | Homem em cadeira de rodas com membros não típicos segura e usa tablet. |
| Fornecer cabeçalhos e instruções claras ajuda as pessoas a entenderem as tarefas e reduz o tempo necessário para completá-las. Isso inclui instruções para formulários e funcionalidade, bem como mensagens de erro e diálogos. | Formulário web é mostrado com cabeçalho grande e instruções, rótulos claros e campos obrigatórios claramente marcados. O homem faz uma seleção em um menu suspenso. |
| Finalmente, sites e aplicativos que funcionam tanto em orientação retrato quanto paisagem são mais fáceis de usar para pessoas que têm seus dispositivos montados em sua cadeira de rodas, mesa ou cama. | Homem em cadeira de rodas continua usando tablet. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | Homem em cadeira de rodas fala a frase "Você pode ajudar a tornar a tecnologia acessível para mim", então a vista muda para colagem de 12 pessoas com diferentes fundos coloridos. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 