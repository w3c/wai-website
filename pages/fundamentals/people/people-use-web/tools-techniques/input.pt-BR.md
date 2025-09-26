---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Entrada de dados - digitação, escrita e clique"
lang: pt-BR
last_updated: 2024-06-25
first_published: "como rascunho em 1999"
description: Introduz algumas das técnicas e ferramentas que pessoas com deficiência usam para interagir com a tecnologia digital — configurações do navegador, texto para fala, reconhecimento de voz e muito mais.

translators:
- name: "Israel Cefrin"

github:
  label: wai-people-use-web

permalink: /people-use-web/tools-techniques/input/pt-BR     # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/tools-techniques/input/  # Do not change this  

parent_in_h1:
  - ref: /people-use-web/tools-techniques/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/presentation/pt-BR
  next: /people-use-web/tools-techniques/navigation/pt-BR

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/
acknowledgements: /people-use-web/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
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

As pessoas usam diferentes abordagens para inserir texto e ativar comandos, por exemplo:

- Uso de teclado por pessoas com deficiências cognitivas, físicas e visuais;
- Uso de tela sensível ao toque por pessoas com deficiências cognitivas e físicas;
- Uso de mouse e teclado com software que compensa tremor nas mãos;
- Uso de reconhecimento de voz e outras interações sem o uso das mãos.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_input.mp4"
   captions="wai-videos/people-use-web/tools-techniques_input.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Ferramentas e Técnicas - Entrada de dados"
   poster="content-images/people-use-web/tools-techniques/input-video-frame.png"
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

## Introdução

Algumas pessoas usam software e configurações personalizadas para melhorar a eficiência da digitação, escrita e clique. Por exemplo, algumas pessoas atribuem teclas de atalho personalizadas para funções que usam frequentemente. Algumas pessoas usam software de previsão de palavras para ajudar a completar palavras e frases com digitação mínima, ferramentas de gramática e ortografia para ajudar a corrigir texto, e ferramentas para ajudar a clicar, selecionar texto e rolar com movimento mínimo.

O conteúdo digital precisa ser projetado para suportar esses diferentes tipos de abordagens. Por exemplo, formulários, links e outras funcionalidades precisam ser utilizáveis por teclado. Em particular, aplicativos ("scripts do lado do cliente"), players de mídia incorporados e outros objetos programáticos precisam fornecer suporte completo ao teclado que não prenda o foco do teclado dentro do programa e áreas clicáveis maiores para botões e links.

O conteúdo acessível ajuda pessoas que precisam de mais tempo para digitar, escrever e clicar, ou que têm maior probabilidade de cometer erros. Por exemplo, algumas pessoas esquecem de selecionar opções e preencher campos de formulário, cometem erros de ortografia e digitação de dados (como datas), ou ativam botões e links acidentalmente. O conteúdo acessível também fornece tempo suficiente para completar tarefas, mensagens de erro claras e úteis e opções para corrigir a entrada.

## Exemplos de tecnologias assistivas e estratégias adaptativas {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Aceleradores**{:#accelerators} – software e funcionalidades que ajudam a reduzir o esforço necessário para digitar ou clicar. Por exemplo, fornecendo opções para criar atalhos para comandos ou sequências de comandos, destacando escolhas de seleção como itens de menu, links ou opções, e ajudando a direcionar o mouse.
- **Teclado e mouse alternativos**{:#input} – hardware e software usados principalmente por pessoas com deficiências cognitivas e físicas para ajudar na interação com o computador. Exemplos incluem:
  - Teclados com teclas maiores, etiquetas de teclas, espaçamento entre teclas, teclas iluminadas ou layouts personalizados;
  - Teclados na tela, telas sensíveis ao toque, interruptores de sopro e sucção, e interruptores de tecla única;
  - Trackballs, joysticks, touchpads, mouses especialmente projetados e outros dispositivos apontadores;
  - [Reconhecimento de voz](#speech){:.termref}, [rastreamento ocular](#gaze){:.termref} e outras abordagens para interação sem as mãos.
- **Rastreamento ocular**{:#gaze} (às vezes chamado de "eye-gaze") - um sistema que monitora o movimento dos olhos para controlar o ponteiro do mouse e detecta piscadas para iniciar cliques do mouse.
- **Personalização do teclado**{:#kbd} – inclui alterar o mapeamento de teclas, atribuir teclas de atalho a funções, definir [filtros](#filters){:.termref} e configurar "teclas de aderência" para suportar digitação com uma mão.
- **Filtros de teclado e mouse**{:#filters} – funções do sistema operacional ou ferramentas de software que reconhecem e compensam movimentos involuntários como tremor e espasmos.
- **Personalização do mouse**{:#mouse} – inclui alterar o mapeamento dos botões, alterar a sensibilidade do mouse ao movimento, definir [filtros](#filters){:.termref} e alterar o tamanho e aparência do ponteiro do mouse.
- **Teclado na tela**{:#screenkbd} – teclado virtual exibido na tela para que possa ser usado com uma tela sensível ao toque, mouse, trackball, joystick ou outros dispositivos apontadores.
- **Reconhecimento de voz**{:#speech} (às vezes chamado de "entrada de voz" ou "comando de voz") - software que reconhece a voz humana e pode ser usado para ditar texto ou emitir comandos para operar o computador.
- **Ferramentas de ortografia e gramática**{:#lexical} – funções do navegador web, plug-ins ou outras ferramentas de software para ajudar os usuários a escrever.
- **Previsão de palavras**{:#prediction} – software que apresenta seleções de palavras, frases ou sentenças correspondentes com base na entrada de dados atual (e às vezes no contexto) para economizar digitação.

## Histórias relacionadas à entrada de dados {#stories-related-to-input}

- [Alex, repórter com uso limitado dos braços](/people-use-web/user-stories/story-one/)
- [Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia](/people-use-web/user-stories/story-eight/)
- [Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo](/people-use-web/user-stories/story-nine/)
- [Sophie, fã de basquete com síndrome de Down](/people-use-web/user-stories/story-five/)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Ferramentas e Técnicas - Entrada {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
    video-id="tools-techniques_input"
    yt-id="HG4PXNRjXoU"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Ferramentas e Técnicas - Entrada (formato do arquivo: MP4, tamanho do arquivo: 305MB, em inglês)](https://media.w3.org/wai/people-use-web/tools-techniques_input.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência usam a tecnologia digital: Entrada - Digitação, escrita e clique | Como pessoas com deficiência usam a tecnologia digital: Entrada - Digitação, escrita e clique |
| Quando o conteúdo é acessível, as pessoas podem usar uma variedade de hardware e software para inserir texto e ativar comandos. | Colagem de quatro pessoas em vários ambientes usando tecnologia. |
| Algumas pessoas não usam teclados e usam apenas dispositivos apontadores. Isso pode incluir um mouse especial, joystick, trackball ou tela sensível ao toque para clicar em links e botões e digitar em teclados na tela. | Homem em cadeira de rodas com membros não típicos segura e usa tablet. |
| No entanto, mesmo ao usar essas ferramentas, as pessoas podem ter dificuldade em selecionar alvos pequenos, como pequenos links, botões e controles. Sites e aplicativos com grandes áreas clicáveis ao redor de caixas de seleção, botões de opção e outros controles são mais fáceis de serem utilizados por pessoas com mobilidade limitada e precisão reduzida. | Um formulário web aparece e o homem está digitando entradas como número de telefone. Para seleções de botão de opção e caixa de seleção, eles podem tocar no texto do rótulo em vez de ter que tocar nos controles reais de botão de opção e caixa de seleção. |
| Sites e aplicativos também precisam fornecer suporte para pessoas que usam apenas o teclado. Isso inclui fornecer maneiras de pular conteúdo repetido, como cabeçalhos e barras de navegação, bem como não quebrar a funcionalidade padrão em navegadores e sistemas operacionais. | Homem com movimento irregular da mão usa um teclado com teclas grandes para digitar. |
| Por exemplo, usar a tecla Tab para mover entre itens clicáveis no conteúdo, usar a tecla Enter para selecionar itens e tornar o item atualmente ativo visível mostrando uma caixa retangular ao seu redor. | Um formulário web com um anel amarelo em negrito ao redor do campo atualmente ativo. O foco move do Nome para Sobrenome com a tecla Tab (em vez de um clique do mouse). |
| Sites e aplicativos que fornecem previsão de palavras e aceleradores, por exemplo para termos de pesquisa, reduzem a quantidade de digitação e os tornam mais eficientes para usuários de teclado. | Homem com movimento irregular da mão continua usando um teclado com teclas grandes para digitar. |
| Além disso, nem todas as pessoas que usam apenas o teclado conseguem ver a tela; por exemplo, pessoas cegas. Assim, além de garantir o suporte ao teclado, sites e aplicativos também precisam fornecer instruções claras, rótulos para controles de formulário, mensagens de erro e notificações de status, para que as pessoas saibam o que está acontecendo na tela. | Um homem cego digita em seu laptop, navegando por um formulário baseado na web com várias listas suspensas. Eles conseguem fazer seleções e mover para a próxima lista suspensa usando apenas os comandos do teclado. |
| Sites e aplicativos precisam ajudar as pessoas a encontrar e corrigir erros em suas entradas; por exemplo, mostrando um resumo dos dados inseridos antes de enviá-los. | Mulher com síndrome de Down usa seu telefone celular para preencher um formulário. Uma tela de confirmação aparece para confirmar as entradas digitadas antes de enviar. |
| Eles também precisam fornecer tempo suficiente para completar tarefas ou evitar limitações de tempo completamente. Muitas pessoas com deficiência requerem mais tempo para navegar e se orientar no conteúdo, e para clicar e digitar. Em particular, pessoas com deficiências cognitivas e de aprendizagem. | Mulher continua usando seu telefone enquanto está na academia. |
| Finalmente, sites e aplicativos também precisam considerar pessoas que não usam teclado ou dispositivos apontadores, e usam entrada por voz. Por exemplo, sites e aplicativos precisam ser programados e projetados para que o nome de um botão no código do software corresponda ao nome exibido para o usuário. "Clique enviar e-mail." | Homem em cadeira de rodas com membros não típicos dita um e-mail em seu laptop. Uma vez completo, ele fala em voz alta o comando "enviar e-mail" para enviá-lo. |
| Você pode ajudar a tornar a tecnologia acessível para mim. | Homem sorrindo para a tela enquanto o áudio de fala do computador transmite sua mensagem. |
| Acessibilidade: É sobre pessoas. | Colagem de 12 pessoas diferentes com fundos coloridos. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas. w3.org/WAI/people |

{% include excol.html type="end" %}