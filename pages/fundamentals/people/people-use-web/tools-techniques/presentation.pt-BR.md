---
title: "Apresentação - distinguir e entender"
lang: pt-BR
last_updated: 2024-06-25
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

permalink: /people-use-web/tools-techniques/presentation/pt-BR
ref: /people-use-web/tools-techniques/presentation/

parent_in_h1:
  - ref: /people-use-web/tools-techniques/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/tools-techniques/perception/pt-BR
  next: /people-use-web/tools-techniques/input/pt-BR

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/
acknowledgements: /people-use-web/acknowledgements/

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

Algumas pessoas precisam que o conteúdo seja apresentado de maneiras específicas para que possam percebê-lo e entendê-lo melhor. Por exemplo:

-   Uma pessoa com dislexia pode precisar de uma fonte específica para ler o texto com mais facilidade;
-   Uma pessoa com baixa visão pode precisar de cores específicas para o texto e o fundo;
-   Uma pessoa com deficiência auditiva pode precisar de um volume específico para o áudio.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/tools-techniques_presentation.mp4"
   captions="wai-videos/people-use-web/tools-techniques_presentation.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Ferramentas e Técnicas - Apresentação"
   poster="content-images/people-use-web/tools-techniques/presentation-video-frame.png"
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

Algumas pessoas precisam de texto e imagens maiores ou maior contraste entre texto e cores de fundo para ver melhor o conteúdo, e algumas pessoas precisam de áudio mais alto com menos ruído de fundo para ouvir melhor o conteúdo. Algumas pessoas precisam desativar janelas pop-up e animações que as desorientam ou distraem. Um som que é reproduzido automaticamente, como música de fundo em um site, também pode distrair as pessoas ou interferir com software de texto para fala. Conteúdo digital, navegadores e ferramentas precisam suportar o ajuste da apresentação de acordo com as necessidades e preferências das pessoas.

Tornar o texto mais legível é de particular importância. Isso envolve mudar sua aparência visual, usar texto para fala adicional e adaptar o conteúdo. Por exemplo, mudar o tipo de fonte, cores, espaçamento e largura da linha torna os textos mais legíveis para muitas pessoas. Às vezes, texto para fala é usado para auxiliar ainda mais a leitura. Adaptar o conteúdo envolve reorganizar seções de páginas web, adicionar funcionalidades como dicionários e glossários, e ocultar funcionalidades menos usadas. Embora essas mudanças sejam frequentemente gerenciadas usando navegadores e ferramentas especializadas, os autores de sites precisam fornecer codificação adequada para suportar tais ajustes e adaptações.

Além disso, as pessoas processam informações de maneira diferente. Este aspecto é particularmente relevante para ambientes de aprendizagem, mas também se aplica a muitas outras situações. Em alguns casos, os autores podem fornecer diferentes representações da mesma informação para atender ao público mais amplo possível, como representações gráficas e tabulares de dados para pessoas com diferentes estilos de aprendizagem.

## Exemplos de recursos de acessibilidade {#examples-of-accessibility-features}

- **Fontes e cores personalizadas**{:#style} – alteração dos tipos de fonte, tamanhos, cores e espaçamento para tornar o texto mais fácil de ler. A personalização envolve configurações do navegador e, para usuários mais avançados, folhas de estilo em cascata (CSS) para substituir a aparência padrão do conteúdo web.
- **Estrutura do documento**{:#outline} – representação do conteúdo que mostra apenas os títulos e estruturas relevantes (como aninhamento e hierarquia de títulos) para ajudar a fornecer orientação e uma visão geral do conteúdo.
- **Texto fácil de ler**{:#etr} – resumos simplificados para trechos de texto para ajudar a torná-lo mais fácil de entender.
- **Revelação progressiva**{:#progressive} – técnica de design que envolve mostrar apenas a quantidade mínima de informações ou funções necessárias para uma determinada tarefa ou propósito, para evitar sobrecarregar o usuário com informações.
- **Interface reduzida**{:#reduced} – representação do conteúdo que mostra apenas as informações mais relevantes ou funções mais frequentemente usadas; por exemplo, ocultando outras partes do conteúdo que podem distrair os usuários.
- **Ampliação de tela**{:#display} – alteração das configurações do navegador web, sistema operacional ou tela para aumentar ou reduzir o tamanho do texto e imagens. Algumas pessoas usam lentes de aumento, binóculos ou outros auxílios visuais, e software como [ampliadores de tela](#magnifiers){:.termref} para ver melhor o conteúdo.
- **Símbolos**{:#symbols} – ícones que representam palavras ou conceitos usados em vez de texto por algumas pessoas com comunicação prejudicada, incluindo pessoas com dificuldades de leitura ou escrita.

## Exemplos de tecnologias assistivas e estratégias adaptativas {#examples-of-assistive-technologies-and-adaptive-strategies}

- **Bloqueadores de pop-ups e animações**{:#blockers} – plug-ins de navegador web ou outras ferramentas de software que interrompem janelas pop-up automáticas e redirecionamento, e opções para parar, pausar e ocultar animações.
- **Assistentes de leitura**{:#reading} – software que altera a apresentação do conteúdo e fornece outras funcionalidades para torná-lo mais legível. Exemplos incluem:
  - Personalização do tipo de fonte, tamanho, espaçamento ou cores de primeiro plano e fundo;
  - Varredura do texto para palavras e frases complexas, e vinculação a glossários;
  - Ocultação de partes menos relevantes do conteúdo, como barras laterais e áreas de cabeçalho;
  - Fornecimento de estruturas dos títulos da página e resumos das passagens de texto;
  - Leitura do conteúdo em voz alta e destaque do texto conforme está sendo lido.
- **Ampliador de tela**{:#magnifiers} – software usado principalmente por pessoas com visão parcial para ampliar o conteúdo e torná-lo mais fácil de ver. Alguns ampliadores de tela fornecem [texto para fala](#tts){:.termref} e outras funcionalidades.
- **Controle de volume**{:#volume} – opções para ajustar o volume do conteúdo de áudio sendo reproduzido, incluindo opções para desligar completamente o som, que são separadas das configurações gerais do sistema.

## Histórias relacionadas à apresentação {#stories-related-to-presentation}

- [Lexie, consumidora online que não consegue distinguir entre certas cores](/people-use-web/user-stories/story-four/)
- [Dhruv, estudante adulto que é surdo](/people-use-web/user-stories/story-six/)
- [Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia](/people-use-web/user-stories/story-eight/)
- [Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo](/people-use-web/user-stories/story-nine/)
- [Sophie, fã de basquete com síndrome de Down](/people-use-web/user-stories/story-five/)
- [Marta, assistente de marketing que é surda e cega](/people-use-web/user-stories/story-seven/)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Ferramentas e Técnicas - Apresentação {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
    video-id="tools-techniques_presentation"
    yt-id="tHS_WUAmkMo"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Ferramentas e Técnicas - Apresentação (formato do arquivo: MP4, tamanho do arquivo: 334MB)](https://media.w3.org/wai/people-use-web/tools-techniques_presentation.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência usam a tecnologia digital: apresentação - distinguir e entender. | Como pessoas com deficiência usam a tecnologia digital: Apresentação - distinguir e entender |
| Quando o conteúdo é acessível, as pessoas podem ajustar sua apresentação para torná-lo mais fácil de distinguir e entender. Isso pode incluir ajustar o tamanho da tela e cor para ver melhor, ajustar o volume do áudio para ouvir melhor, ou ajustar como o texto é apresentado para ler melhor. | Colagem de 4 pessoas fazendo diferentes atividades. |
| Algumas pessoas com baixa visão aumentam o tamanho do texto para torná-lo mais fácil de ler. Elas podem ajustar propriedades no navegador web ou sistema operacional, como aumentar o tamanho padrão do texto, tipo de fonte e espaçamento entre linhas, para ver melhor o texto. | Mulher com baixa visão vê seu monitor de desktop através de uma tela de ampliação na frente do monitor. |
| Sites e aplicativos que são programados e projetados para se adaptar a essas propriedades permitem que as pessoas usem o conteúdo sem que o texto se sobreponha, seja cortado ou exija que elas rolem tanto vertical quanto horizontalmente. | O texto em um site W3C-WAI é aumentado usando o recurso de zoom do navegador, acionando o design responsivo. Conforme o tamanho do texto aumenta, os menus de navegação colapsam em um único botão de menu e o texto se ajusta para que todo o texto caiba na largura da tela como seria visto em um dispositivo móvel. |
| Outras pessoas com baixa visão aumentam tudo na tela, não apenas o texto. Elas podem usar software de ampliação de tela como uma lupa digital. Algumas também podem mudar as cores do texto e do fundo para ler melhor o texto, e usar texto para fala para ouvir o texto enquanto estão lendo. Isso significa que sites e aplicativos precisam ser programados e projetados para permitir que as pessoas mudem as cores em vez de forçá-las a aparecer de uma certa maneira. | A mulher agora explora um site escolar usando software de ampliação, fazendo com que ela veja porções da página enquanto move o mouse para a direita, abrindo um menu de navegação, depois movendo para a esquerda para ler a lista de opções. |
| Apresentação não é apenas visual. Pessoas com deficiências auditivas, por exemplo, podem precisar aumentar o volume de reuniões online e multimídia como vídeos, podcasts e música, sem aumentar o volume de outros sons do sistema, como alertas de notificação. Ajustar o grave, agudo e balanço do som pode tornar o áudio mais fácil de ouvir, então sistemas operacionais e players de mídia precisam fornecer essas configurações. Além disso, essas configurações funcionam melhor com áudio de alta qualidade que não tem ruído de fundo. | Homem com aparelho auditivo assiste a um vídeo em seu laptop. Enquanto assiste, ele aumenta o volume dentro do player de vídeo. |
| Ajustes de apresentação também podem tornar o conteúdo mais fácil de focar, particularmente para pessoas com diferentes tipos de deficiências cognitivas e de aprendizagem. Isso inclui "modos de leitura" que ocultam partes menos relevantes do conteúdo, como barras laterais e elementos iniciais; bloqueadores de pop-up e animação que ajudam a evitar distração e interrupção; e réguas de leitura digitais que ajudam os leitores a focar em uma linha por vez. | Homem explora um site W3C-WAI em um tablet e ativa o recurso de modo de leitura no navegador. Isso remove todo o conteúdo exceto texto e faz a página parecer mais com uma página de livro eletrônico em coloração sépia. |
| Alguns assistentes de leitura, por exemplo, aqueles que algumas pessoas com dislexia podem usar, ajustam como o texto é apresentado para torná-lo mais fácil de ler. Isso inclui mudar o tipo de fonte, tamanho do texto, cores e o espaçamento entre letras, frases e parágrafos. Algumas pessoas leem melhor com fontes serifadas e outras com fontes sem serifa. Ajustar essas propriedades é individual de uma pessoa para outra, por isso o design flexível é tão importante. | Mulher usa seu laptop para ler um artigo. Ela usa configurações de fonte no navegador para mudar o tamanho e estilo da fonte do texto do artigo. |
| Outros assistentes de leitura suportam compreensão. Alguns podem processar o texto para simplificar palavras e frases, e às vezes também simplificar frases complexas. Essas ferramentas dependem de programação e design adequados para funcionar. | Mulher com síndrome de Down lê um artigo sobre basquete. A palavra "caloria" está sublinhada e, uma vez que o mouse passa por cima, mostra uma definição e imagem em um pop-up. |
| Você pode ajudar a tornar a tecnologia acessível para mim. | Mulher com síndrome de Down fala para a câmera. |
| Acessibilidade: É sobre pessoas. | Colagem de 12 pessoas com diferentes fundos coloridos. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %}