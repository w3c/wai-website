---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Lexie, compradora online que não consegue distinguir entre certas cores (daltonismo)"
nav_title: "Lexie"
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

permalink: /people-use-web/user-stories/story-four/pt-BR # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-four/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-three/pt-BR
  next: /people-use-web/user-stories/story-five/pt-BR

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

Lexie é uma adulta mais velha que adora fazer compras online e jogar fantasy football. Lexie não consegue ver todas as cores igualmente bem. Sites e aplicativos que dependam apenas de cores apresentam barreiras para Lexie. Usar apenas cor para destacar texto e indicar áreas em um gráfico também apresenta barreiras para Lexie, mas felizmente seus colegas de trabalho aprenderam maneiras de usar outros marcadores visuais além da cor.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_4.mp4"
   captions="wai-videos/people-use-web/user-stories_4.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Lexie, consumidora online que não consegue distinguir entre certas cores (daltonismo)"
   poster="content-images/people-use-web/user-stories/lexie-video-frame.png"
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

## Sobre Lexie

> Às vezes, completar o processo de checkout é complicado porque se eu deixo passar um campo obrigatório, recebo uma mensagem de erro ou aviso em vermelho e é difícil para eu ver a mensagem.

Lexie nasceu com deuteranopia e protanopia (frequentemente chamada de "daltonismo") e tem dificuldade em distinguir entre itens que são vermelhos, verdes, laranjas e marrons, todos os quais aparecem para ela como uma espécie de marrom turvo.

Lexie descobriu que comprar roupas online é na verdade uma vantagem em relação a ir a lojas físicas. Além de apenas mostrar fotos de itens nas várias cores oferecidas, seus sites favoritos incluem rótulos de cores, tornando muito mais fácil coordenar o que combina. No entanto, às vezes, durante o checkout, os campos obrigatórios e mensagens de erro são marcados com um contorno vermelho e Lexie tem que prestar atenção especial para identificá-los. Ela notou ultimamente, no entanto, que muitos sites estão melhorando ao usar uma notação secundária, como um asterisco para campos obrigatórios e texto em negrito ou uma seta apontando para erros. Isso realmente ajuda muito.

Para surpresa das pessoas, Lexie também é uma grande fã de futebol americano e joga fantasy football com família e colegas de trabalho há anos. Às vezes, pode haver problemas com a forma como esses sites usam cores para diferenciar entre times, posições de jogadores e se os jogadores estão ou não selecionados para seu time. Como resultado, ela tende a preferir certos aplicativos de fantasy football que não usam cor como única forma de indicar informações importantes para jogar. Isso significa que ela tem que tentar convencer amigos a jogar usando o mesmo aplicativo.

Junto com sua diversão, Lexie ainda se mantém conectada às últimas notícias e acontecimentos. Isso se torna mais fácil quando gráficos e diagramas relacionados aos artigos mostram dados com outras técnicas visuais além de apenas cor. Por exemplo, se um gráfico de pizza também tem padrões e rótulos de texto, ela pode ler as informações mais fácil e rapidamente sem ficar frustrada ou ser completamente excluída.

## Exemplos de barreiras

Usando apenas cor
: **Barreira:** "Quando seleciono uma escolha de cor, não há nada para me ajudar a diferenciar entre as cores."
: **Funciona bem:** "As escolhas de cores são mostradas com um nome descritivo. Os bons sites têm um link para uma descrição um pouco mais longa da cor."

Uso apenas de cor para erros
: **Barreira:** "Ao preencher um formulário online, campos obrigatórios e erros são marcados com um contorno vermelho."
: **Funciona bem:** "Além da cor, um asterisco ou palavras são usados para identificar campos obrigatórios e erros."

Uso apenas de cor em jogos
: **Barreira:** "Quando jogo um jogo online, inimigos são marcados com um círculo vermelho e amigos marcados com um círculo verde e não consigo ver a diferença."
: **Funciona bem:** "Inimigos também são marcados com um símbolo ou usam um triângulo vermelho para que eu possa identificá-los facilmente."

Rótulos de gráficos
: **Barreira:** "Quando estou lendo artigos de notícias com gráficos de dados, não consigo entender os gráficos pois as colunas não estão rotuladas claramente."
: **Funciona bem:** "As colunas são rotuladas diretamente ou usam uma textura além da cor."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Fontes e cores personalizadas (Apresentação)](/people-use-web/tools-techniques/presentation/#style)

## Recursos relacionados da WAI

* Vídeo: [Cores com Bom Contraste](/perspective-videos/contrast/)
* Vídeo: [Texto Personalizável](/perspective-videos/customizable/)
* Dica: [Forneça contraste suficiente entre o fundo e o primeiro plano](/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* Dica: [Não use apenas cor para transmitir significado](/tips/designing/#dont-use-color-alone-to-convey-information)
* Dica: [Garanta que elementos interativos sejam fáceis de identificar](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Verifique: [Taxa de contraste ("contraste de cor")](/test-evaluate/preliminary/#contrast)
* Verifique: [Formulários, rótulos e erros](/test-evaluate/preliminary/#forms)

## Princípios relacionados

* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [O conteúdo é mais fácil de ver e ouvir (Perceptível)](/fundamentals/accessibility-principles/#distinguishable)
* [O conteúdo é compatível com ferramentas atuais e futuras do usuário (Robusto)](/fundamentals/accessibility-principles/#compatible)
* [Critérios de Sucesso relacionados a "contraste", em inglês](https://www.w3.org/WAI/WCAG21/quickref/?tags=contrast)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Lexie, consumidora online que não consegue distinguir entre certas cores (daltonismo) {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_4"
  yt-id="eh091V45uqc"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Lexie, consumidora online que não consegue distinguir entre certas cores (daltonismo) (formato do arquivo: MP4, tamanho do arquivo: 274MB, em inglês)](https://media.w3.org/wai/people-use-web/user-stories_4.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital; Lexie, consumidora online que não consegue distinguir entre cores (daltonismo). | Como pessoas com deficiência utilizam a tecnologia digital; Lexie, consumidora online que não consegue distinguir entre certas cores (daltonismo). |
| Olá! Eu sou a Lexie. Eu nasci com deuteranopia e protanopia, que as pessoas frequentemente chamam de "daltonismo". | Uma mulher fala diretamente para a câmera. |
| Tenho dificuldade em distinguir entre vermelho, verde, laranja e marrom, todos os quais aparecem para mim como uma espécie de marrom turvo. Em uma loja, frequentemente não consigo distinguir a cor de dois sapatos ou duas camisas um ao lado do outro. Eu adoro fazer compras online porque é frequentemente mais fácil para mim quando eles usam os nomes das cores além de mostrar as cores. | A mulher está sentada em um sofá usando um tablet, olhando diferentes camisetas coloridas em uma loja online. |
| Infelizmente, nem todas as lojas online oferecem uma experiência de checkout acessível para mim. Frequentemente o formulário de cadastro ou checkout diz "campos em vermelho são obrigatórios". Ugh! Na maioria das vezes não consigo dizer quais campos são obrigatórios quando eles usam apenas cor. Boas lojas têm a palavra "obrigatório" ou aquela pequena estrela ao lado dos campos, ou ainda melhor colocam a palavra "opcional" ao lado dos que posso pular. | A mulher está sentada em um sofá usando um tablet, tentando preencher um formulário online, com algumas seções marcadas em vermelho. |
| Não depender apenas da cor é importante para outros sites e aplicativos também. Por exemplo, meu aplicativo favorito de fantasy football tem um símbolo para cada time na camisa dos jogadores, além da cor. Isso me ajuda a identificar os jogadores do meu time mais rapidamente, não apenas lendo os nomes abaixo de cada jogador. | A mulher está sentada em um sofá usando um celular, olhando um aplicativo de fantasy football. |
| Problemas com cores também acontecem no trabalho. Por exemplo, quando meus colegas destacam palavras em um documento sem usar a função de comentários. A função de comentários contorna o texto marcado além de destacá-lo. Outro exemplo é quando gráficos não têm símbolos além das cores para linhas e barras – não consigo identificá-los apenas pela cor. Minha equipe geralmente é cuidadosa com isso, mas às vezes os fornecedores com quem trabalhamos não são. | A mulher está sentada em um sofá usando um tablet, lendo um relatório que mostra palavras e frases destacadas, bem como um gráfico de pizza. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | A mulher fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |


{% include excol.html type="end" %}
