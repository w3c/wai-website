---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ian, auxiliar de entrada de dados com autismo"
nav_title: "Ian"
lang: pt-BR   # Change "en" to the translated-language shortcode
last_updated: 2024-06-25  # Keep the date of the English version

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Israel Cefrin"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-people-use-web

permalink: /people-use-web/user-stories/story-two/pt-BR  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-two/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-one/pt-BR
  next: /people-use-web/user-stories/story-three/pt-BR

image: /content-images/people-use-web/social.png
changelog: /people-use-web/changelog/ # Do not change this
acknowledgements: /people-use-web/acknowledgements/ # Do not change this
# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p>Nota sobre vídeo-descrição: O vídeo nesta oágina não contem audio-descrição sincronizada porque os elementos visuais apenas ilustram o áudio e não fornecem informação adicional. Neste caso, a áudio-descrição seria muito mais uma distração do que útil para a maioria das pessoas, incluindo pessoas que não conseguem ver elementos visuais. A descrição da informação visual está disponível na  Transcrição de Texto com Descrição de Elementos Visuais (“transcrição descritiva”).</p>
  <p>Publicado pela primeira vez como rascunho em 1999.</p>
  <p><strong>Editores(as):</strong> Kevin White and Shadi Abou-Zahra. Editores(as) anteriores: Judy Brewer and Norah Sinclair. Colaboradores(as): Brent Bakken, Jade Matos Carew, Jayne Schurick, Michele Williams, e outros(as) em ACKNOWLEDGEMENTS.</p>
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

{% include_cached blockquote.html class="pull alt-2" content="<p>Acessibilidade: é sobre pessoas</p>" %}

<aside id="introduction" class="box"><div class="box-i">
  <div>
{:/}

Ian é um cientista de dados autista. A tecnologia digital é geralmente fácil para Ian, até que algo inesperado aconteça como uma atualização de software que afeta partes do sistema que ele precisa para trabalhar. Isto deixa Ian extremamente ansioso. Fora do trabalho, Ian gosta de cozinhar e usa vídeos de receitas que ele encontra online. Seja usando o seu computador no trabalho ou em casa, uma linguagem clara com navegação e layouts de página consistentes são importantes. Se algo munda como resutado de uma atualização, é melhor deixar Ian saber o que foi alterado e dar-lhe oportunidade de ajustar. Igualmente, como para muitas outras pessoas com deficiências cognitiva e de aprendizagem, anúncios em janela pop-up e vídeos que iniciam automaticamente são frustantes e causam confusão.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>

  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_2.mp4"
   captions="wai-videos/people-use-web/user-stories_2.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Ian, auxiliar de entrada de dados com autismo"
   poster="content-images/people-use-web/user-stories/ian-video-frame.png"
%}

</div>

{% include_cached toc.html type="start" title="Conteúdo da Página" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
    
</aside>
{:/}

**Nota:** Esta história de usuário é um exemplo de uma pessoa com um tipo de deficiência.Outras pessoas com esta deficiência podem ter experiênicas diferentes.

## Sobre Ian

> Eu acho difícil me concentrar em páginas muito cheias. Por exemplo, muitas animações e vídeos, particularmente aqueles que começam a tocar sem eu fazer nada são muito frustrantes.

Ian é autista. Seu autismo foi identificado em uma tenra idade devido ao atraso no desenvolvimento da fala. Ian recebeu muito apoio na primeira infância, o que o ajudou a desenvolver habilidades linguísticas e sociais. No entanto, ele ainda enfrenta algumas barreiras na comunicação verbal, especialmente quando está ansioso.

Ian trabalha meio período como cientista de dados. Trabalhar com computador é fácil para Ian, embora atualizações no aplicativo de entrada de dados possam causar problemas se houver mudanças significativas na interface. Isso pode gerar sentimentos de ansiedade em Ian se ele não souber da mudança com antecedência e não tiver tempo para se adaptar. Também pode ser difícil para Ian se alguém solicitar um trabalho que o faça usar partes do sistema com as quais ele não está tão familiarizado. É importante que os sistemas usem um layout e navegação consistentes.

Ian acha fácil interagir com colegas por e-mail. Ele trabalhou com sua equipe para ajudá-los a entender como o uso de linguagem simples e a ausência de novas metáforas podem facilitar para ele. Muitos disseram que também preferem menos jargões corporativos. 

Ian tem seu próprio espaço na casa dos pais, incluindo sua própria cozinha. Ele tem aprendido a cozinhar usando vídeos online. No entanto, linguagem vaga, metáforas e conteúdo implícito em alguns dos vídeos tornam-nos difíceis de entender. Ele acha vídeos diretos, práticos e passo a passo realmente úteis. Alguns dos sites de culinária que Ian usa têm muitos anúncios com banners e vídeos, o que pode ser distrativo. Isso é particularmente ruim se houver áudio também, especialmente se Ian não puder controlá-lo facilmente. O ideal é que os sites não reproduzam automaticamente anúncios de áudio e vídeo ou, ao menos, permitam que Ian os controle.

## Examplos de barreiras

Texto não-literal
: **Barreira:** "Tenho dificuldade para entender metáforas, siglas, abreviações e palavras que não são usadas em seu sentido literal."
: **Funciona bem:** "Sites que explicam tudo claramente e não usam metáforas são mais fáceis para eu entender."

Linguagem clara
: **Barreira:** "Sites que usam linguagem "sofisticada" ou frases longas para descrever um conceito simples são difíceis de entender."
: **Funciona bem:** "Eu entendo melhor o conteúdo quando os autores usam linguagem simples e frases diretas."

Layout e navegação consistentes
: **Barreira:** "Fico confuso quando vou para uma página diferente em um site e o layout e a navegação não são os mesmos."
: **Funciona bem:** "Quando há uma aparência consistente nas páginas de um site, consigo aprender onde as coisas estão."

Estrutura de cabeçalhos
: **Barreira:** "Páginas longas que não são divididas em seções são difíceis de ler e entender."
: **Funciona bem:** "Títulos descritivos que são estilizados como um esboço me ajudam a encontrar o que quero e a entender melhor o conteúdo."

Conteúdo que se move ou pisca
: **Barreira:** "Conteúdo em movimento ou piscando é distrativo, e eu não consigo lembrar o que queria fazer.
: **Funciona bem:** O ideal é que os sites não usem conteúdo em movimento ou piscando, mas, se usarem, que me permitam desativá-lo."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Bloqueadores de janela pop-up e de animação (Apresentação)](/people-use-web/tools-techniques/presentation/#blockers)
* [Assistentes de leitura (Apresentação)](/people-use-web/tools-techniques/presentation/#reading)
* [Controle de volume (Apresentação)](/people-use-web/tools-techniques/presentation/#volume)
* [Ferramentas de ortografia e gramática (Entrada de dados)](/people-use-web/tools-techniques/input/#lexical)
* [Previsão de palavras (Entrada de dados)](/people-use-web/tools-techniques/input/#prediction)

## Recursos relacionados da WAI

* Case de uso: [Amy: Um Cientista da Computação Autista, em inglês](https://www.w3.org/TR/coga-usable/#amy-an-autistic-computer-scientist)
* Vídeo: [Conteúdo Compreensível](/perspective-videos/understandable/)
* Dica: [Use cabeçalhos para transmitir significado e estrutur](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Dica: [Faça texto de link com significado](/tips/writing/#make-link-text-meaningful)
* Dica: [Forneça instruções claras](/tips/writing/#provide-clear-instructions)
* Dica: [Mantenha o conteúdo claro e conciso](/tips/writing/#keep-content-clear-and-concise)
* Dica: [Certifique-se de que os elementos interativos sejam fáceis de identificar](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Dica: [Forneça opções de navegação claras e consistentes](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Dica: [Forneça feedback que seja facilmente identificável](/tips/designing/#provide-easily-identifiable-feedback)
* Dica: [Ajuse aos usuários a evitar e corrigir erros](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Verifique: [Cabeçalhos](/test-evaluate/preliminary/#headings)
* Verifique: [Formulários, rótulos e errors](/test-evaluate/preliminary/#forms)

## Princípios relacionados

* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [O conteúdo é mais fácil de ver e ouvir (Perceptível)](/fundamentals/accessibility-principles/#distinguishable)
* [Os usuários podem facilmente navegars, encontrar o conteúdo e determinar onde estão (Operável)](/fundamentals/accessibility-principles/#navigable)
* [O conteúdo não provoca convulsões nem reações físicas (Operável)](/fundamentals/accessibility-principles/#safe)
* [O texto é legível e compreensível (Compreensível)](/fundamentals/accessibility-principles/#readable)
* [O conteúdo aparece e opera de modo previsível (Compreensível)](/fundamentals/accessibility-principles/#predictable)

{% include excol.html type="start" id="video-transcript" %}

##  Vídeo: Ian, auxiliar de entrada de dados com autismo {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
    video-id="user-stories_2"
    yt-id="bhV7KMfoyT4"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Ian,  auxiliar de entrada de dados com autismo (formato do arquivo: MP4,tamanho do arquivo: 291MB, em inglês)](https://media.w3.org/wai/people-use-web/user-stories_2.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital; Ian, cientista de dados com autismo. | Como pessoas com deficiência utilizam a tecnologia digital; Ian, cientista de dados com autismo. |
|Olá! Eu sou o Ian. Eu sou autista. Eu trabalho para uma compania de software que fica a três paradas de ônibus da minha casa. | Um homem fala diretamente para câmera. |
| Eu sou um cientista de dados. Eu gosto muito do meu trabalho. Outras pessoas acham esse campo difícil porque ele é bem técnico. Mas, para mim, é realmente fácil. | O homem está sentando a uma mesa de escritório usando um computador e conversando com uma mulher que está em pé , próxima a ele, sobre o que eles veem na tela do computador. |
| Exceto quando alguma coisa muda e eu não tenho tempo suficiente para achar o que foi mudado. Como quando eu estava tentado entrar numa reunião online e descobri que os botoões do aplicativo mudaram. Isso foi estressante porque eu estava preocupado de quer iria me atrasar para a reunião. Aplicativos que pedem permissão antes de se atualizarem me permitem determinar um momento adequado e ajustar às mudanças. | O homem está sentado e trabalhando em sua mesa. Uma atualização de software aparece na tela de seu comoutador. |
| Às vezes, eu clico na coisa errada e tudo muda, e eu não sei como voltar. Isso me faz sentir como se eu simplesmente não conseguisse lidar com a situação. Estou tentando trabalhar, mas simplesmente não consigo, e começo a entrar em pânico, e então não consigo nem falar mais. É muito importante para mim poder desfazer e reverter mudanças que eu não pretendia ou esperava que acontecessem. | O homem está participando de uma reunião online usando um aplicativo de videoconferência. Ele alterna entre a visualização de um único participante e a de vários participantes. |
| Também é muito frustrante quando eu tenho que parar de trabalhar por causa de uma mensagem de erro que não me diz qual é o erro. Mensagens de erro que apenas dizem “erro de entrada” são tão inúteis. Muitas vezes, é algo muito simples, como eu não ter usado o formato correto para a data. Por que não diz isso? | O homem está trabalhando em sua mesa. Ele está tentando preencher um formulário e recebe uma mensagem de ‘erro de entrada’. |
| Eu adoro cozinhar quando não estou trabalhando. Meus amigos adoram comer o que eu preparo porque eu encontro as melhores receitas! Alguns sites e aplicativos de culinária são fáceis de usar — meus sites de receitas favoritos listam os ingredientes exatos e têm instruções passo a passo. É fácil encontrar as receitas usando as tags e segui-las. | O homem está preparando comida na cozinha e lendo instruções em um tablet. |
| Infelizmente, não consigo usar alguns sites de receitas, mesmo que tenham receitas que eu realmente quero experimentar. Especialmente aqueles em que vários vídeos começam a tocar e janelas pop-up aparecem sem que eu clique em nada. Eu não pedi por isso! Esses elementos são exaustivos e não são a receita. Tudo o que eu quero é a receita! | O homem está com dificuldade para ler as instruções por causa dos anúncios e janelas pop-up. |
| Ou, alguns sites usam palavras e frases sem sentido e nem se preocupam em explicá-las. Quero dizer, o que é uma ‘xícara rasa de açúcar mascavo’? ‘Rasa’ pode significar tantas coisas diferentes. Em vez de ‘rasa’, diga o que você quer dizer, como ‘uma xícara de medir cheia logo abaixo da borda’ ou ‘um pouco menos que uma xícara cheia’. Isso seria mais fácil de entender para todos. | O homem está preparando comida na cozinha e lendo instruções em um tablet. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre as pessoas. | O homem fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como as pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre as pessoas; w3.org/WAI/people |


{% include excol.html type="end" %}
