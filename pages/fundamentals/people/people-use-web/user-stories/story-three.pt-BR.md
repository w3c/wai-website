---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Lakshmi, contadora sênior que é cega"
nav_title: "Lakshmi"
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

permalink: /people-use-web/user-stories/story-three/pt-BR  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-three/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-two/pt-BR
  next: /people-use-web/user-stories/story-four/pt-BR

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this
# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
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

Lakshmi é uma contadora sênior que é cega. Ela depende de um leitor de tela para anunciar o conteúdo no software que usa no trabalho e usa um teclado padrão para inserir comandos para navegar e inserir informações. Recentemente, a empresa de Lakshmi migrou de software desktop para aplicativos online, alguns dos quais apresentam barreiras para Lakshmi, como quando as imagens não incluem texto alternativo ou teclas de atalho entram em conflito com os comandos do leitor de tela. Outras fontes de frustração incluem múltiplos níveis de navegação (por exemplo, menus aninhados), formulários que não deixam claro para o leitor de tela o que os campos devem conter e o CAPTCHA visual sem alternativa auditiva ou com uma alternativa ruim. Lakshmi realmente gosta de usar seu telefone celular e tablet por causa da funcionalidade integrada do leitor de tela, além da portabilidade. Quando está fora de casa, Lakshmi pode encontrar direções, pagar por coisas e manter contato com sua família e amigos por e-mail e mensagens de texto.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  
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

## Sobre Lakshmi

> Meu celular é tão conveniente - os recursos de acessibilidade nele são tão fáceis de usar. É uma pena que eu não possa acessar nossos sistemas corporativos com ele!

Lakshmi é cega. Ela é contadora sênior em uma companhia de seguros que usa documentos e formulários baseados na web através de uma intranet corporativa. O computador de trabalho de Lakshmi tem um leitor de tela que fornece a ela informações sobre o estado e conteúdo dos aplicativos em seu computador em forma de saída de voz. Por causa de seu trabalho, Lakshmi passa muito tempo trabalhando com planilhas, apresentações e documentos. Sua empresa mudou do uso de aplicativos desktop para tudo ser armazenado online. Lakshmi estava preocupada que a mudança tornaria as coisas piores para ela.

Aplicativos web complexos são frequentemente desafiadores para Lakshmi. Muitos têm múltiplas camadas de navegação e exigem que os usuários façam referência cruzada de conteúdo. Isso é mais difícil de fazer com um leitor de tela que lê o conteúdo de forma linear. Às vezes, eles usam teclas de atalho que são as mesmas das teclas rápidas usadas pelo software do leitor de tela. Até agora, tudo parece funcionar bem, embora sejam os problemas usuais de colegas não criando seus documentos com acessibilidade em mente, por exemplo, apresentações que não incluem alternativas em texto para imagens.

Parte do papel de Lakshmi é fornecer treinamento aos funcionários. A maior parte disso é conduzida online, já que a equipe está espalhada geograficamente. Lakshmi e sua equipe avaliaram várias ferramentas de treinamento, como aplicativos de videoconferência, antes de encontrar um aplicativo eficaz com recursos de acessibilidade que atendem às necessidades de uma equipe diversificada com habilidades diversas. Um dos maiores desafios que Lakshmi enfrentou com essas ferramentas foi a função de chat. Muitas das ferramentas não funcionam com o leitor de tela de Lakshmi. Ela perdia mensagens durante as reuniões porque o software não a avisava quando uma nova mensagem era entregue.

Fora do trabalho, Lakshmi gosta de cozinhar, tricotar e viajar, e ela usa a web para encontrar receitas, padrões de tricô e para reservar viagens. Ela descobriu que as comunidades online a ajudam a gerar ideias que apoiam todos os seus hobbies. Geralmente, esses são ótimos, mas alguns deles usam um CAPTCHA visual como parte do processo de login, tornando impossível para ela acessar os fóruns sem alguém para ajudá-la.

Quando pode, Lakshmi usa seu telefone celular ou tablet mais do que usa seu laptop ou computador desktop. O telefone e o tablet têm leitores de tela integrados que os tornam muito mais fáceis de usar para ela. Usar o celular durante viagens é fantástico, pois ela pode verificar detalhes de localização e encontrar direções.

## Exemplos de barreiras

Bom uso de cabeçalhos
: **Barreira:** "Não consigo escanear facilmente uma página para encontrar coisas que possam ser de meu interesse."
: **Funciona bem:** "Quando os sites são organizados usando cabeçalhos e parágrafos adequadamente marcados, posso usar teclas de atalho no meu leitor de tela para pular rapidamente de um cabeçalho ou parágrafo para outro, parando em qualquer coisa que soe interessante."

Navegação por teclado
: **Barreira:** "Às vezes não consigo controlar coisas em sites como botões e links. Posso ouvir que eles estão lá, mas não consigo pressioná-los."
: **Funciona bem:** "Quando posso usar o teclado para navegar até as coisas e pressionar enter para selecioná-las sem precisar que alguém me ajude."

Layout consistente
: **Barreira:** "Preciso criar uma imagem mental de como um site está organizado. Se isso muda de página para página, realmente me atrasa."
: **Funciona bem:** "Quando as páginas do site são consistentes. Os links estão todos no mesmo lugar e as coisas que soam iguais no meu leitor de tela se comportam da mesma forma em diferentes páginas."

Mensagens de erro claras
: **Barreira:** "Às vezes quando preencho um formulário em um site, ele não me deixa enviar e não fica claro o porquê."
: **Funciona bem:** "Sites que têm mensagens de erro claras e instruções sobre como corrigir meu erro."

Mudanças em outras partes da página
: **Barreira:** "Há momentos em que o conteúdo em um site muda, mas nem sempre sei sobre isso."
: **Funciona bem:** "É ótimo quando meu leitor de tela me alerta sobre mudanças na página que estou visitando."

Armadilha de teclado
: **Barreira:** "Alguns sites têm janelas modais em que posso ficar presa porque não consigo encontrar uma maneira de fechá-las."
: **Funciona bem:** "Janelas modais incluem um botão de fechar e/ou cancelar que pode ser acessado com o teclado."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Leitor de tela (Percepção)](/people-use-web/tools-techniques/perception/#sr)
* [Texto para fala (Percepção)](/people-use-web/tools-techniques/perception/#tts)
* [Transcrições (Percepção)](/people-use-web/tools-techniques/perception/#transcripts)
* [Consistência e previsibilidade (Interação)](/people-use-web/tools-techniques/navigation/#consistency)
* [Títulos, cabeçalhos e rótulos descritivos (Interação)](/people-use-web/tools-techniques/navigation/#labels)
* [Mensagens de erro e sucesso úteis (Interação)](/people-use-web/tools-techniques/navigation/#messages)
* [Navegação por teclado (Interação)](/people-use-web/tools-techniques/navigation/#keyboard)
* [Links para pular conteúdo (Interação)](/people-use-web/tools-techniques/navigation/#skip)

## Recursos relacionados da WAI

* Vídeo: [Texto para Fala](/perspective-videos/speech/)
* Dica: [Escreva alternativas de texto significativas para imagens](/tips/writing/#write-meaningful-text-alternatives-for-images)
* Dica: [Associe um rótulo a cada controle de formulário](/tips/developing/#associate-a-label-with-every-form-control)
* Dica: [Use cabeçalhos para transmitir significado e estrutura](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Dica: [Garanta que todos os elementos interativos sejam acessíveis por teclado](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Dica: [Faça o texto do link significativo](/tips/writing/#make-link-text-meaningful)
* Verifique: [Alternativas de texto para imagens ("texto alt")](/test-evaluate/preliminary/#images)
* Verifique: [Formulários, rótulos e erros](/test-evaluate/preliminary/#forms)
* Verifique: [Alternativas para multimídia (vídeo, áudio)](/test-evaluate/preliminary/#media)
* Verifique: [Verificação de Estrutura Básica](/test-evaluate/preliminary/#structure)

## Princípios relacionados

* [Alternativas em texto para conteúdo não textual (Perceptível)](/fundamentals/accessibility-principles/#alternatives)
* [Legendas e outras alternativas para multimídia (Perceptível)](/fundamentals/accessibility-principles/#captions)
* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [O conteúdo é mais fácil de ver e ouvir (Perceptível)](/fundamentals/accessibility-principles/#distinguishable)
* [A funcionalidade está disponível pelo teclado (Operável)](/fundamentals/accessibility-principles/#keyboard)
* [Os usuários podem facilmente navegar, encontrar conteúdo e determinar onde estão (Operável)](/fundamentals/accessibility-principles/#navigable)
* [O conteúdo é legível e compreensível (Compreensível)](/fundamentals/accessibility-principles/#readable)
* [O conteúdo aparece e opera de maneiras previsíveis (Compreensível)](/fundamentals/accessibility-principles/#predictable)
* [O conteúdo é compatível com ferramentas atuais e futuras do usuário (Robusto)](/fundamentals/accessibility-principles/#compatible)
* [Critérios de Sucesso relacionados a "legendas", em inglês](https://www.w3.org/WAI/WCAG21/quickref/?tags=captions) 