---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia"
nav_title: "Stefan"
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

permalink: /people-use-web/user-stories/story-eight/pt-BR  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-eight/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-seven/pt-BR
  next: /people-use-web/user-stories/story-nine/pt-BR

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

Stefan é um estudante que tem dislexia e transtorno do déficit de atenção com hiperatividade (TDAH). Stefan tem dificuldade em manter o foco em seus trabalhos escolares, especialmente quando precisa ler textos densos ou seguir instruções escritas. Ele gosta de livros didáticos digitais e sites que permitem o uso de software de texto para fala, pois pode acompanhar tanto as palavras escritas quanto as faladas. No entanto, é importante que os sites e outras tecnologias digitais usem linguagem simples, um layout consistente e não exibam anúncios pop-up ou imagens em movimento, que são muito distrativos e confusos. Aplicativos móveis e sites geralmente são menos poluídos visualmente e mais fáceis de usar.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
  {% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_8.mp4"
   captions="wai-videos/people-use-web/user-stories_8.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia"
   poster="content-images/people-use-web/user-stories/stefan-video-frame.png"
%}

</div>

{% include_cached toc.html type="start" title="Page Contents" class="full" %}
{:/}

-   TOC é criada automaticamente.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}

</aside>
{:/}

**Nota:** Este história de usuário é um exemplo de uma pessoa com esta deficiência. Outras pessoas com esta deficiência podem ter experiências diferentes.

## Sobre Stefan

> Meu leitor de texto me ajuda a me concentrar no que estou lendo. Não o uso o tempo todo, mas para textos longos é super útil.

Stefan é um estudante com dislexia e transtorno do déficit de atenção com hiperatividade (TDAH). Como uma pessoa com TDAH, Stefan tem dificuldade em seguir tarefas longas ou com múltiplas etapas. Isso pode tornar difícil manter o foco em seu trabalho escolar. Elementos de suporte visuais, como ícones e imagens, e bom uso de espaços em branco ao redor do que ele está olhando podem ajudá-lo a se concentrar. Ele pode se perder em textos densos e ser incapaz de encontrar o significado. Quando isso acontece, ele desiste porque leva muito tempo e é cansativo. Isso fez com que ele ficasse atrasado em seu trabalho em comparação com outros estudantes.

A escola de Stefan recentemente fez a transição para usar livros didáticos digitais. Isso foi uma grande melhoria para Stefan, que agora pode usar seu software de texto para fala para auxiliar sua compreensão de textos às vezes complexos. Stefan também usa a web para pesquisa. Infelizmente, sua experiência na web pode ser variada. Frequentemente, os sites contêm conteúdo como anúncios animados e gráficos que ele pode achar distrativos.

Stefan acha mais fácil usar sites que têm um layout simples e consistente com conteúdo escrito em linguagem simples. Imagens ou ícones também podem ajudar a reforçar o significado do texto. Às vezes, ele usa funcionalidades em seu software de texto para fala que permitem mudar a cor de fundo da página. Isso é especialmente útil quando ele está cansado. Stefan também usa legendas ao assistir vídeos porque tanto ouvir quanto ver as palavras reforça seu significado.

Stefan é fã de filmes antigos de ficção científica e passa muito tempo em sites e fóruns feitos por fãs. Ele tem limites de gastos em seu cartão e o usa para comprar itens de colecionador. O design desses sites e o processo de compra podem tornar isso difícil. Eles são frequentemente muito ocupados com anúncios distrativos e formulários de checkout complicados. Ele descobriu que pode acessar esses sites em seu telefone celular, onde pode ativar o modo de leitura do navegador para remover muito da desordem do fundo. Isso permite que ele se concentre na tarefa e torna as etapas muito mais claras.

Stefan experimenta problemas com sites onde a navegação não é clara. Ele acha muito mais fácil usar sites que incluem funções como mapa do site, caminhos de pão ou função de busca. Stefan tem dificuldade com ortografia, então se beneficia da funcionalidade de busca, que sugere ortografias alternativas e correções de erros.

## Exemplos de barreiras

Sugestões de ortografia
: **Barreira:** "Tenho dificuldade com ortografia e às vezes erro a grafia das palavras. Às vezes não obtenho os resultados de busca que procuro."
: **Funciona bem:** "Gosto quando as ferramentas de busca oferecem ortografias alternativas ou sugestões alternativas de busca em vez de simplesmente retornar nenhum resultado."

Configurações do navegador não são respeitadas
: **Barreira:** "Uso configurações do navegador para especificar a fonte, tamanho do texto e espaçamento entre linhas que preciso, mas alguns sites não exibem minhas configurações."
: **Funciona bem:** "Quando mudo as configurações no meu navegador, os sites mostram essas configurações."

Linguagem complexa
: **Barreira:** "Linguagem complexa e estrutura de frases são confusas para mim e difíceis de ler e reter."
: **Funciona bem:** "Use frases curtas e linguagem simples sempre que possível."

Excesso de siglas e abreviações
: **Barreira:** "O uso excessivo de siglas e abreviações é distrativo e frequentemente preciso reler várias vezes ou às vezes simplesmente fico travado e desisto."
: **Funciona bem:** "Escreva as palavras completas de uma sigla pelo menos na primeira vez que ela é usada. Evite ou explique abreviações."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Legendas (Percepção)](/people-use-web/tools-techniques/perception/#captions)
* [Leitor de tela (Percepção)](/people-use-web/tools-techniques/perception/#sr)
* [Texto para fala (Percepção)](/people-use-web/tools-techniques/perception/#tts)
* [Bloqueadores de pop-ups e animações (Apresentação)](/people-use-web/tools-techniques/presentation/#blockers)
* [Assistentes de leitura (Apresentação)](/people-use-web/tools-techniques/presentation/#reading)
* [Ferramentas de ortografia e gramática (entrada)](/people-use-web/tools-techniques/input/#lexical)
* [Consistência e previsibilidade (Interação)](/people-use-web/tools-techniques/navigation/#consistency)
* [Mensagens de erro e sucesso úteis (Interação)](/people-use-web/tools-techniques/navigation/#messages)
* [Busca por palavras-chave (Interação)](/people-use-web/tools-techniques/navigation/#search)
* [Múltiplos mecanismos de navegação (Interação)](/people-use-web/tools-techniques/navigation/#navigating)

## Recursos relacionados da WAI

* Caso de uso: [Tal: Um Estudante que tem Dislexia e Coordenação Motora Fina Prejudicada, em inglês](https://www.w3.org/TR/coga-usable/#tal-a-student-who-has-dyslexia-and-impaired-eye-hand-coordination)
* Caso de uso: [Yuki: Uma Professora de Yoga que tem TDAH, em inglês](https://www.w3.org/TR/coga-usable/#yuki-a-yoga-teacher-who-has-ad-h-d)
* Vídeo: [Layout e Design Claros](/perspective-videos/layout/)
* Dica: [Use cabeçalhos para transmitir significado e estrutura](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Dica: [Torne o texto dos links significativo](/tips/writing/#make-link-text-meaningful)
* Dica: [Forneça instruções claras](/tips/writing/#provide-clear-instructions)
* Dica: [Mantenha o conteúdo claro e conciso](/tips/writing/#keep-content-clear-and-concise)
* Dica: [Inclua texto alternativo para imagens](/tips/developing/#include-alternative-text-for-images)
* Dica: [Ajude os usuários a evitar e corrigir erros](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Dica: [Garanta que elementos interativos sejam fáceis de identificar](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Dica: [Forneça feedback facilmente identificável](/tips/designing/#provide-easily-identifiable-feedback)
* Dica: [Use cabeçalhos e espaçamento para agrupar conteúdo relacionado](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Verifique: [Alternativas de texto para imagens ("texto no atributo alt")](/test-evaluate/preliminary/#images)
* Verifique: [Cabeçalhos](/test-evaluate/preliminary/#headings)
* Verifique: [Formulários, rótulos e erros](/test-evaluate/preliminary/#forms)
* Verifique: [Conteúdo em movimento, piscante ou cintilante](/test-evaluate/preliminary/#moving)
* Verifique: [Verificação de estrutura básica](/test-evaluate/preliminary/#structure)

## Princípios relacionados

* [Alternativas em texto para conteúdo não textual (Perceptível)](/fundamentals/accessibility-principles/#alternatives)
* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [Os usuários têm tempo suficiente para ler e usar o conteúdo (Operável)](/fundamentals/accessibility-principles/#time)
* [Os usuários podem facilmente navegar, encontrar conteúdo e determinar onde estão (Operável)](/fundamentals/accessibility-principles/#navigable)
* [O conteúdo é legível e compreensível (Compreensível)](/fundamentals/accessibility-principles/#readable)
* [O conteúdo aparece e opera de maneiras previsíveis (Compreensível)](/fundamentals/accessibility-principles/#predictable)
* [Os usuários são ajudados a evitar e corrigir erros (Compreensível)](/fundamentals/accessibility-principles/#tolerant)
* [O conteúdo é compatível com ferramentas atuais e futuras do usuário (Robusto)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_8"
  yt-id="Ie-RaV7UTCU"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia (formato do arquivo: MP4, tamanho do arquivo: 346MB, em inglês)](https://media.w3.org/wai/people-use-web/user-stories_8.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital; Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia. | Como pessoas com deficiência utilizam a tecnologia digital; Stefan, estudante com transtorno do déficit de atenção com hiperatividade e dislexia. |
| Olá! Eu sou o Stefan. Eu tenho dislexia e transtorno do déficit de atenção com hiperatividade – TDAH. | Um homem fala diretamente para a câmera. |
| Tenho dificuldade em reconhecer ou soletrar palavras escritas, mesmo que eu use essas mesmas palavras em conversas o tempo todo. Isso afeta minha ortografia e minha compreensão de leitura. Frequentemente levo muito tempo para entender as palavras individuais que estou lendo, e então é difícil para eu lembrar como as palavras em uma frase se encaixam de maneira significativa. | O homem está sentado em uma sala de estar lendo uma revista. |
| Livros e documentos digitais são frequentemente muito melhores para mim. No computador, em um tablet, ou – meu favorito – no meu novo e-reader. Posso mudar o tipo de fonte, tamanho do texto e espaçamento entre linhas, o que torna mais fácil para eu ler. Também uso a função de leitura em voz alta porque leio melhor quando posso ver e ouvir o texto ao mesmo tempo. Ela também destaca as palavras sendo lidas em voz alta e tem uma régua de leitura, para que eu possa acompanhar mais facilmente. | O homem está sentado em uma sala de estar lendo em um tablet. Ele está mudando a formatação do texto ajustando as configurações no dispositivo. Ele então coloca seus fones de ouvido para ouvir o texto e acompanha com o texto destacado. |
| Às vezes, porém, livros e documentos digitais não funcionam bem. Às vezes são apenas imagens escaneadas. Estas também não podem ser lidas em voz alta e não posso mudar o tamanho do texto e a fonte. Alguns não têm marcadores, que eu uso para pular para as partes que quero focar. Ou há longos blocos de texto sem cabeçalhos, então tenho dificuldade em me concentrar no conteúdo. É muito mais fácil quando o texto tem mais espaçamento e gráficos para torná-los mais fáceis de seguir. | O homem está sentado em uma sala de estar lendo em um laptop. Ele está rolando a página de um documento complexo. |
| Outro problema é quando tenho que fazer pesquisas online. Digito palavras, mas às vezes faço isso errado, ou uso uma palavra diferente que soa igual, como "<em lang="en">brake</em>"(frear em inglês) quando quero dizer "<em lang="en">break</em>"(quebrar em inglês). Às vezes caio em sites com todos esses anúncios e coisas aparecendo e se movendo pela tela. Com TDAH, fico distraído por esses anúncios e vídeos, e às vezes clico neles e esqueço o que deveria estar fazendo. Uso vários bloqueadores de pop-ups, mas eles nem sempre funcionam. | O homem está sentado em uma sala de estar lendo em um laptop. Vemos opções de palavras <em lang="en">Brake/Break</em> aparecerem na tela. Ele então olha para um site que contém vários anúncios e pop-ups. |
| Quando encontro um artigo que quero ler, tento lembrar de mudar para o modo de leitura no meu navegador. Isso geralmente remove todas as coisas ao redor da página e me permite focar no texto. Mas alguns sites não funcionam bem e os anúncios ainda aparecem, ou o texto é muito difícil para eu ler. Adoro quando os sites funcionam bem com minhas configurações e extensões. Como a extensão para ortografia e gramática, que me ajuda quando estou digitando coisas como e-mail. Isso é muito importante para mim. | O homem está sentado em uma sala de estar usando um laptop. Ele digita um texto curto e corrige um erro usando o corretor ortográfico. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | O homem fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %}
</code_block_to_apply_changes_from> 