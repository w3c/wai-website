---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Visuais"
nav_title: "Visuais"
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

permalink: /people-use-web/abilities-barriers/visual/pt-BR # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/abilities-barriers/visual/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/abilities-barriers/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/abilities-barriers/speech/pt-BR

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

Deficiências visuais variam desde perda de visão leve ou moderada em um ou ambos os olhos ("baixa visão") até perda substancial de visão em ambos os olhos ("cegueira"). Algumas pessoas têm sensibilidade reduzida ou ausente a certas cores (frequentemente chamado de "daltonismo"), ou sensibilidade aumentada a cores brilhantes. Essas variações na percepção de cores e brilho podem ser independentes da acuidade visual.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/abilities-barriers_visual.mp4"
   captions="wai-videos/people-use-web/abilities-barriers_visual.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Diversidade de Habilidades e Barreiras - Visuais"
   poster="content-images/people-use-web/abilities-barriers/visual-video-frame.png"
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

Pessoas com deficiências visuais geralmente dependem de mudar a apresentação da tecnologia digital para formas que são mais utilizáveis para suas necessidades particulares. Por exemplo:

-   Ampliando ou reduzindo o tamanho do texto e das imagens;
-   Personalizando configurações de fontes, cores e espaçamento;
-   Ouvindo a síntese de texto para fala do conteúdo;
-   Ouvindo audiodescrições de vídeos em multimídia;
-   Lendo texto usando Braille atualizável.

Para que esses métodos de navegação funcionem, os desenvolvedores devem usar folhas de estilo para separar o conteúdo de sua apresentação e codificar corretamente a estrutura para que possa ser processada e apresentada de diferentes maneiras por navegadores e tecnologias assistivas. Por exemplo, algumas pessoas não veem o conteúdo e dependem de listas, cabeçalhos, tabelas e outras estruturas da página serem codificadas adequadamente para que possam ser identificadas por navegadores e tecnologias assistivas.

Algumas pessoas estão vendo apenas pequenas porções do conteúdo por vez ou estão percebendo as cores e o design de maneira diferente. Algumas pessoas estão usando fontes, cores e espaçamento personalizados para tornar o conteúdo mais legível, ou estão navegando pelo conteúdo usando apenas o teclado porque não conseguem ver o ponteiro do mouse. Um design acessível suporta diferentes apresentações do conteúdo digital e diferentes formas de interação.

## Exemplos de deficiências visuais {#examples-of-visual-disabilities}

- **Cegueira**{:#blindness} – perda substancial e incorrigível da visão em ambos os olhos.
- **Baixa visão**{:#lowvision} – perda moderada a grave da visão que não pode ser corrigida.
- **Daltonismo**{:#colorblindness} – dificuldade em distinguir cores, como entre vermelho e verde, ou entre amarelo e azul.
- **Surdocegueira**{:#deafblindness} – deficiências visuais e auditivas substanciais e incorrigíveis.

## Exemplos de barreiras para pessoas com deficiências visuais {#examples-of-barriers-for-people-with-visual-disabilities}

- Sites, navegadores web e ferramentas de autoria que não suportam o uso de combinações de cores personalizadas.
- Sites, navegadores web e ferramentas de autoria que não fornecem suporte completo para teclado.

## Histórias relacionadas a deficiências visuais {#stories-related-to-visual-disabilities}

- [Lakshmi, contadora sênior que é cega](/people-use-web/user-stories/story-three/)
- [Lexie, consumidora online que não consegue distinguir entre certas cores](/people-use-web/user-stories/story-four/)
- [Marta, assistente de marketing que é surda e cega](/people-use-web/user-stories/story-seven/)
- [Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo](/people-use-web/user-stories/story-nine/)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Diversidade de Habilidades e Barreiras - Visuais {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
    video-id="abilities-barriers_visual"
    yt-id="bm8h1p9knzY"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Diversidade de Habilidades e Barreiras - Visuais (formato do arquivo: MP4, tamanho do arquivo: 318MB, em inglês)](https://media.w3.org/wai/people-use-web/abilities-barriers_visual.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital: Deficiências Visuais | Como pessoas com deficiência utilizam a tecnologia digital: Deficiências Visuais |
| Deficiências visuais afetam como as pessoas veem, incluindo visão parcial em um ou ambos os olhos, não ver de forma alguma, ou ver de uma variedade de maneiras diferentes, incluindo cores e brilho. | Colagem de 4 pessoas usando dispositivos digitais em vários ambientes. |
| Pessoas que são cegas usam tecnologia assistiva em computadores e telefones celulares chamada leitores de tela. Essas ferramentas de software podem ler as informações na tela em voz alta, ou podem apresentá-las em Braille. | Homem com óculos escuros usa laptop na mesa. |
| Leitores de tela podem processar sites e aplicativos com cabeçalhos, listas, links, botões e outras estruturas corretamente codificados muito melhor. [Voz do computador] A migração de pássaros é o movimento sazonal regular, frequentemente norte e sul ao longo de uma rota de voo, entre áreas de reprodução e invernada. Muitas espécies de pássaros migram. A migração tem altos custos. Um mapa do mundo, mostrando algumas rotas de migração de pássaros como exemplo, imagem. | Site rola com texto e imagens definindo termos de migração de pássaros. O parágrafo lido pelo leitor de tela está destacado. |
| Sites e aplicativos também precisam funcionar com o teclado e ter alternativas em texto para imagens. | Homem continua usando seu laptop. |
| No entanto, a maioria das pessoas com deficiências visuais não é cega, mas tem alguma forma de baixa visão. Isso significa que as pessoas podem ver parcialmente, apenas não claramente ou dentro do alcance total da visão. | Mulher no sofá usa seu telefone celular. Ela parece frustrada ao tentar ver algo. |
| Algumas pessoas com baixa visão usam software de ampliação de tela como uma lupa digital para ampliar tudo na tela. Isso inclui imagens, texto e o ponteiro do mouse. Com isso, as pessoas só veem pequenas partes da tela por vez, então elas dependem de pistas visuais e design consistente em sites e aplicativos para se manterem orientadas e navegarem efetivamente. | Em seu telefone, ela ativa o recurso de zoom que amplia a visualização de uma página web. A página se move pela tela para mostrar todo o conteúdo. |
| Outras pessoas com baixa visão podem não usar a mesma tecnologia assistiva. Elas podem ajustar propriedades no navegador web ou sistema operacional, como aumentar o tamanho padrão do texto, para ver melhor o texto. Sites e aplicativos que são programados e projetados para se adaptar às propriedades definidas pelos usuários, como diferentes tamanhos de texto, tipo de fonte e espaçamento entre linhas, permitem que as pessoas usem o conteúdo sem que o texto se sobreponha, seja cortado ou exija rolagem tanto vertical quanto horizontal. | Homem usa laptop mas luta para ver a página web atual. Ele pressiona Control+ para aumentar o tamanho do texto, mas as palavras na página começam a se sobrepor e ficam ilegíveis. |
| Pessoas que não conseguem distinguir certas cores são frequentemente chamadas de "daltônicas". Sites e aplicativos que evitam texto com baixo contraste são mais fáceis de usar. | Mulher usa tablet enquanto está sentada no sofá. |
| Também é importante que sites e aplicativos não usem apenas cor para comunicar informações, mas usem texto e símbolos além da cor, como um asterisco para indicar campos de entrada obrigatórios. | Um formulário web para checkout de compras mostra campos obrigatórios tanto com rótulos em vermelho quanto com um asterisco. As instruções explicam "Campos obrigatórios são marcados em vermelho com um *". |
| Algumas pessoas são sensíveis à luz forte, então é importante que sites e aplicativos possam se adaptar aos esquemas de cores que as pessoas podem definir em seus navegadores e sistemas operacionais. | Uma página de resultados de busca mostrada com fundo branco e texto preto é alterada para fundo preto com texto branco ao selecionar uma configuração do navegador para "Tema Escuro". |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | Mulher fala a frase "Você pode ajudar a tornar a tecnologia acessível para mim", então muda para uma colagem de 12 pessoas com diferentes fundos coloridos. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 