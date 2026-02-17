---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Interação - navegando e encontrando"
lang: pt-BR
last_updated: 2024-06-25
first_published: "como rascunho em 1999"
description: Introduz algumas das técnicas e ferramentas que pessoas com deficiência usam para interagir com a tecnologia digital — configurações do navegador, texto para fala, reconhecimento de voz e muito mais.

# translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  repository: w3c/wai-people-use-web
  path: content/index.pt-BR.md

permalink: /people-use-web/tools-techniques/navigation/pt-BR # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/tools-techniques/navigation/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/tools-techniques/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/input/pt-BR

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Nota sobre a descrição do vídeo: O vídeo nesta página não inclui audiodescrição sincronizada porque os elementos visuais apenas ilustram o áudio e não fornecem informações adicionais. Neste caso, a audiodescrição seria mais distrativa do que útil para a maioria das pessoas, incluindo pessoas que não podem ver os elementos visuais. A descrição das informações visuais está disponível na Transcrição de Texto com Descrição de Elementos Visuais ("transcrição descritiva").</p>
  <p><strong>Editor:</strong> Shadi Abou-Zahra. Editor anterior: Judy Brewer. Colaboradores listados em ACKNOWLEDGEMENTS.</p>
  <p>Desenvolvido pelo Grupo de Trabalho de Educação e Divulgação (<a href="https//www.w3.org/WAI/EO/">EOWG</a>) com suporte do <a href="https://www.w3.org/WAI/about/projects/wai-guide/">Projeto WAI-Guide</a> e <a href="https://www.w3.org/WAI/WAI-AGE/">Projeto WAI-AGE</a> co-financiado pela Comissão Europeia (CE).</p>
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

As pessoas navegam e encontram conteúdo usando diferentes estratégias e abordagens dependendo de suas preferências, habilidades e capacidades. Por exemplo:

- Uma pessoa usando um site pela primeira vez pode precisar de orientação mais clara do que alguém que tem mais experiência com o site específico;
- Uma pessoa usando a Web em um dispositivo móvel com uma tela pequena pode precisar de mais pistas de orientação do que alguém usando um computador desktop.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_interaction.mp4"
   captions="wai-videos/people-use-web/tools-techniques_interaction.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Ferramentas e Técnicas - Interação"
   poster="content-images/people-use-web/tools-techniques/interaction-video-frame.png"
%}

</div>

{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC é criado automaticamente.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}

</aside>
{:/}

**Nota:** Os exemplos fornecidos nesta seção não são uma lista completa de todas as formas que as pessoas interagem com a tecnologia digital.

## Descrição

As pessoas navegam e encontram conteúdo usando diferentes estratégias e abordagens dependendo de suas preferências, habilidades e capacidades. Por exemplo, alguém usando um site pela primeira vez pode precisar de orientação mais clara do que alguém que tem mais experiência com o site específico, e alguém usando a Web em um dispositivo móvel com uma tela pequena pode precisar de mais pistas de orientação do que alguém usando um computador desktop. Embora esses sejam tipicamente aspectos de usabilidade que afetam pessoas com e sem deficiência, algumas situações afetam pessoas com deficiência em maior extensão.

Exemplos de tais situações incluem:

- Uma pessoa que não está vendo a tela e precisando ter uma visão geral e se orientar escaneando os cabeçalhos em uma página web; os cabeçalhos também precisam ser projetados para suportar tais propósitos.
- Uma pessoa que está vendo apenas pequenas porções da tela por vez devido à ampliação de tela, e precisa se orientar usando pistas visuais; o design visual também precisa suportar tais propósitos.
- Uma pessoa usando apenas o teclado (ou alternativas ao teclado) para navegar pelo conteúdo web; a estrutura das páginas web precisa ser projetada para também suportar o uso eficiente do teclado.
- Uma pessoa que tem dificuldade em lembrar endereços, nomes ou funcionalidades específicas de sites; os navegadores web precisam fornecer funcionalidades de suporte que sejam fáceis de usar e lembrar.
- Uma pessoa que pode ter dificuldade com navegação em menu hierárquico, como a maioria dos menus de navegação são projetados para ser; os sites precisam fornecer mecanismos alternativos para navegação.

Muitas funções para suportar diferentes estilos de navegação são construídas diretamente nos navegadores e tecnologias assistivas. Por exemplo, a maioria dos navegadores disponíveis comumente fornece funcionalidade de favoritos, e leitores de tela fornecem funções para listar cabeçalhos, links e outras estruturas em uma página web.

## Exemplos de recursos de acessibilidade {#examples-of-accessibility-features}

- **Consistência e previsibilidade**{:#consistency} – a rotulagem de funções como links, botões e controles deve ser consistente, e a função esperada deve ser previsível a partir do rótulo.
- **Títulos, cabeçalhos e rótulos descritivos**{:#labels} – títulos de página, cabeçalhos de seção e rótulos para formulários, links e controles às vezes são lidos sozinhos ou fora de contexto e precisam ser descritivos.
- **Mensagens de erro e sucesso úteis**{:#messages} – diálogos e outras mensagens, como após enviar formulários, precisam ajudar os usuários a completar suas tarefas e evitar desorientação, distração, confusão ou desconforto.
- **Múltiplos mecanismos de navegação**{:#navigating} – sites precisam fornecer múltiplas maneiras de localizar páginas web, por exemplo, fornecendo mapas do site e funcionalidade de busca além de menus de navegação hierárquicos.
- **Links de salto**{:#skip} – mecanismos para permitir que usuários de teclado pulem blocos repetitivos de conteúdo como cabeçalhos de página, barras de navegação ou menus. Nota: muitos links para pular são contraproducentes para este propósito.
- **Pistas de orientação visual**{:#cues} – exemplos incluem usar cores de fundo para indicar diferentes partes do conteúdo, usar cabeçalhos únicos e colocar informações relevantes em áreas proeminentes de uma página web.

## Exemplos de tecnologias assistivas e estratégias adaptativas {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Favoritos e histórico**{:#bookmarks} – usando funções do navegador web para ajudar a lembrar páginas, encontrar páginas visitadas anteriormente ou acessar páginas rapidamente sem precisar digitar um endereço web.
- **Busca por palavra-chave**{:#search} – usando funções do navegador web para encontrar texto dentro de uma página web, e funcionalidade do site para buscar páginas web por palavra-chave. Mecanismos de busca que são mantidos e otimizados para um site específico podem fornecer resultados de busca mais precisos.
- **Navegação por teclado**{:#keyboard} – movendo-se pelo conteúdo usando o teclado, tipicamente usando a tecla tab para pular de um item estrutural como link, cabeçalho ou item de lista, para o próximo. A navegação por teclado depende muito do suporte do navegador web mas também de recursos de design do site como [links para pular](#skip){:.termref}.
- **Mapas de página**{:#maps} – exibindo uma pequena imagem da página web inteira com um indicador destacando a porção dentro da página web que está sendo visualizada atualmente.
- **Links pictóricos**{:#pictorial} – alguns navegadores web, plug-ins e sites mostram pequenas imagens dos destinos dos links (às vezes chamadas de "capturas de tela") em vez dos endereços ou nomes; por exemplo em combinação com listagens de [favoritos e histórico](#bookmarks){:.termref}, botões de voltar e avançar em navegadores web, ou links em páginas web.

## Histórias relacionadas à interação {#stories-related-to-interaction}

- [Ade, repórter com uso limitado dos braços](/people-use-web/user-stories/story-one/)
- [Lakshmi, contadora sênior que é cega](/people-use-web/user-stories/story-three/)
- [Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia](/people-use-web/user-stories/story-eight/)
- [Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo](/people-use-web/user-stories/story-nine/)
- [Sophie, fã de basquete com síndrome de Down](/people-use-web/user-stories/story-five/)
- [Marta, assistente de marketing que é surda e cega](/people-use-web/user-stories/story-seven/)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Ferramentas e Técnicas - Interação {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="tools-techniques_interaction"
  yt-id="4xF23iGIAPE"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Ferramentas e Técnicas - Interação (formato do arquivo: MP4, tamanho do arquivo: 241MB, em inglês)](https://media.w3.org/wai/people-use-web/tools-techniques_interaction.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência usam a tecnologia digital: Interação - navegando e encontrando | Como pessoas com deficiência usam a tecnologia digital: Interação - navegando e encontrando |
| Muitas pessoas com deficiências cognitivas e de aprendizagem dependem de layout e design claros para encontrar informações em sites e aplicativos. Isso inclui diferentes maneiras de navegar pelo conteúdo, como usar menus hierárquicos e funcionalidade de busca; com pistas de orientação visual, como usar cores de fundo para indicar diferentes partes do conteúdo. | Colagem de quatro pessoas em vários ambientes usando tecnologia. |
| Embora muitos desses sejam tipicamente aspectos de usabilidade que afetam pessoas com e sem deficiência, essas situações frequentemente afetam pessoas com deficiência em maior extensão. Por exemplo, pessoas com baixa visão que usam ampliação de tela também dependem de pistas de orientação visual para se orientar na página. | Mulher com baixa visão vê seu monitor de desktop através de uma tela de ampliação na frente do monitor. |
| E consistência e previsibilidade ajuda a todos. Por exemplo, pessoas cegas usam leitores de tela para escanear as estruturas de conteúdo, como cabeçalhos, links e menus de navegação para ter uma visão geral e se orientar. Sites e aplicativos com cabeçalhos, rótulos e estruturas claros e consistentes são mais fáceis de usar. | Homem cego usa seu laptop com um leitor de tela. |
| Além disso, pessoas cegas dependem de mecanismos para pular blocos de conteúdo, como cabeçalhos, barras de navegação ou menus, repetidos dentro de sites e aplicativos. Eles também dependem de sites e aplicativos para fornecer instruções claras e ajudar os usuários a identificar e corrigir erros, como entradas incorretas em formulários. | Homem cego continua usando seu laptop com um leitor de tela. |
| Além disso, pessoas com deficiências físicas dependem de rótulos consistentes em sites e aplicativos, que permitem que os navegadores opcionalmente lembrem entradas anteriores. Isso acelera a digitação porque as pessoas podem selecionar entradas anteriores, por exemplo nomes e endereços. | Homem em cadeira de rodas digita em laptop em sua mesa. |
| Você pode ajudar a tornar a tecnologia acessível para mim. | Homem (da primeira cena) fala para a câmera. |
| Acessibilidade: É sobre pessoas. | Colagem de 12 pessoas com fundos coloridos. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas. w3.org/WAI/people |

{% include excol.html type="end" %}
