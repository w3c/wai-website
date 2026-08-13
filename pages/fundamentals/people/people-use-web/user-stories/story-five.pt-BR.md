---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Sophie, fã de basquete com síndrome de Down"
nav_title: "Sophie"
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

permalink: /people-use-web/user-stories/story-five/pt-BR # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-five/  # Do not change this

navigation:
  previous: /people-use-web/user-stories/story-four/pt-BR
  next: /people-use-web/user-stories/story-six/pt-BR

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

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

Sophie, uma mãe com síndrome de Down, trabalha em um estádio de basquete. Ela gostaria de ser assistente sênior, mas está hesitante em se candidatar porque terá que aprender novos sites e softwares que podem não estar escritos em uma linguagem que ela possa entender, por exemplo, usando palavras não familiares, bem como siglas e abreviações. Consistência, escrita em linguagem simples e ter pequenos parágrafos de informação ajudam Sophie a compreender o conteúdo escrito. Fora do trabalho, Sophie gosta de levar seus filhos aos jogos de basquete e descobriu que comprar ingressos usando o aplicativo do local é mais fácil porque há menos opções e menos poluição visual.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_5.mp4"
   captions="wai-videos/people-use-web/user-stories_5.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Sophie, fã de basquete com síndrome de Down"
   poster="content-images/people-use-web/user-stories/sophie-video-frame.png"
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

## Sobre Sophie

> Eu gosto de comprar ingressos para jogos em casa porque conheço bem o site. Quando tenho que comprar ingressos para jogos fora de casa é difícil para mim. Todos os sites diferentes fazem as coisas de maneiras diferentes.

Sophie nasceu com síndrome de Down e enfrenta barreiras ao lidar com conceitos abstratos, leitura e cálculos matemáticos. Devido à sua aparência facial distinta e dificuldades com a fala, muitas pessoas subestimam a inteligência e as capacidades de Sophie. Mesmo tendo dificuldade para se expressar, Sophie entende muito bem. Ela aprendeu habilidades básicas de computação na escola profissionalizante e, desde então, aprendeu sozinha a usar sites para comprar mantimentos e gerenciar sua conta bancária, entre outras coisas.

Sophie ama basquete. Ela jogou no time da escola e agora joga em um clube local. Ela é uma fã entusiasta e leva seus filhos aos jogos quando pode. Comprar ingressos online às vezes pode ser difícil para Sophie. Os espaços parecem ter diferentes maneiras de vender ingressos e às vezes isso pode ser confuso. Isso é particularmente difícil quando o site dos espaços redireciona para um site separado que parece totalmente diferente. Especialmente confuso é quando ela clica em um link e acaba abrindo um arquivo PDF. Sophie gosta de sites que têm uma "sensação" consistente ao passar de seção para seção e de página para página. Isso significa que o layout geral mantém uma temática similar e o posicionamento da navegação não muda muito, e que ela é avisada quando clica em um link que vai para um site diferente.

Sophie trabalha meio período em um estádio de basquete. Ela está interessada em se tornar funcionária em tempo integral, mas se preocupa que o jargão no local de trabalho torne isso difícil no início. Escrever em "linguagem simples" é realmente útil. Se algo pode ser dito usando terminologia mais simples ou frases mais curtas, isso torna mais fácil para ela entender e usar a informação. Além disso, siglas e abreviações realmente a deixam mais lenta porque ela tem que gastar tempo tentando decifrá-las ou procurando seus significados. Cabeçalhos também são uma grande ajuda, pois dividem a página e ela pode digerir informações em partes menores, como um esboço da página. Ao navegar em uma página, ter um bom foco visível e estilo de link ajudam-na a saber onde está e no que pode clicar.

Conseguir um telefone celular foi um grande acontecimento para Sophie. Ela descobriu que aplicativos que têm menos opções e menos decisões são mais claros para ela e mais fáceis de usar. Usar o telefone para compras é realmente fácil para Sophie. Poder encontrar as coisas que ela geralmente compra é uma grande ajuda.

## Exemplos de barreiras

Caminho de pão (trilha de navegação)
: **Barreira:** "Quando sigo vários links, às vezes me sinto perdida e só quero voltar para onde comecei."
: **Funciona bem:** "Um caminho de pão no topo da página que mostra todas as páginas que eu visitei me ajuda a me sentir orientada e me permite voltar a uma página familiar."

Linguagem simples
: **Barreira:** "Às vezes quando estou procurando algo, não entendo as palavras que eles usam."
: **Funciona bem:** "Se palavras mais simples puderem ser usadas, use-as. Se não houver palavras mais simples, me dê uma definição ou me direcione para um glossário. Evite o uso de siglas e abreviações."

Estilo de links claro
: **Barreira:** "Os designers gostam de ser criativos com links e às vezes é difícil perceber a diferença entre os links e texto destacado ou cabeçalhos."
: **Funciona bem:** "Use texto azul sublinhado para links não visitados e roxo para links visitados."

Formulários
: **Barreira:** "Quando estou preenchendo formulários, às vezes é difícil saber o que eles querem em cada campo."
: **Funciona bem:** "Me diga quais campos são obrigatórios, coloque um rótulo simples e claro em cada campo do formulário e me dê um exemplo do formato que eles querem, especialmente para datas."

Limite de tempo
: **Barreira:** "Como sou uma leitora lenta, é frustrante quando o site expira e preciso começar tudo de novo."
: **Funciona bem:** "Dê um aviso antes do site expirar e ofereça uma opção para permanecer online."

Cabeçalhos e Links
: **Barreira:** "Fico confusa e sobrecarregada quando estou em uma página que tem muito texto."
: **Funciona bem:** "Ajuda quando as páginas são divididas em seções com cabeçalhos claros. Além disso, imagens ou figuras que mostram o que está sendo dito ajudam minha compreensão e quebram a página para que não seja tão sobrecarregada. Links na página, como um sumário, podem me ajudar a saber o que está na página para que eu possa rapidamente chegar à informação que estou procurando."

Animação
: **Barreira:** "Texto ou imagens em movimento ou animadas são muito distrativos. Eles ficam chamando minha atenção para longe do que estou tentando fazer."
: **Funciona bem:** "Se tiver que haver conteúdo em movimento ou animado, me deixe pará-lo."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Texto fácil de ler (Apresentação)](/people-use-web/tools-techniques/presentation/#etr)
* [Bloqueadores de janelas pop-up e animações (Apresentação)](/people-use-web/tools-techniques/presentation/#blockers)
* [Revelação progressiva (Apresentação)](/people-use-web/tools-techniques/presentation/#progressive)
* [Assistentes de leitura (Apresentação)](/people-use-web/tools-techniques/presentation/#reading)
* [Interface reduzida (Apresentação)](/people-use-web/tools-techniques/presentation/#reduced)
* [Aceleradores (Entrada)](/people-use-web/tools-techniques/input/#accelerators)
* [Ferramentas de ortografia e gramática (Entrada)](/people-use-web/tools-techniques/input/#lexical)
* [Consistência e previsibilidade (Interação)](/people-use-web/tools-techniques/navigation/#consistency)
* [Títulos, cabeçalhos e rótulos descritivos (Interação)](/people-use-web/tools-techniques/navigation/#labels)
* [Mensagens de erro e sucesso úteis (Interação)](/people-use-web/tools-techniques/navigation/#messages)
* [Múltiplos mecanismos de navegação (Interação)](/people-use-web/tools-techniques/navigation/#navigating)

## Recursos relacionados da WAI

* Caso de uso: [George: Um Usuário que Trabalha em um Supermercado e tem Síndrome de Down, em inglês](https://www.w3.org/TR/coga-usable/#george-a-user-who-works-in-a-supermarket-and-has-down-syndrome)
* Vídeo: [Conteúdo Compreensível](/perspective-videos/understandable/)
* Dica: [Mantenha o conteúdo claro e conciso](/tips/writing/#keep-content-clear-and-concise)
* Dica: [Garanta que elementos interativos sejam fáceis de identificar](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Dica: [Forneça opções de navegação claras e consistentes](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Dica: [Forneça significado para elementos interativos não padronizados](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* Dica: [Use cabeçalhos e espaçamento para agrupar conteúdo relacionado](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Verifique: [Formulários, rótulos e erros](/test-evaluate/preliminary/#forms)
* Verifique: [Conteúdo em movimento, piscante ou cintilante](/test-evaluate/preliminary/#moving)

## Princípios relacionados

* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [Os usuários têm tempo suficiente para ler e usar o conteúdo (Operável)](/fundamentals/accessibility-principles/#time)
* [Os usuários podem facilmente navegar, encontrar conteúdo e determinar onde estão (Operável)](/fundamentals/accessibility-principles/#navigable)
* [O conteúdo é legível e compreensível (Compreensível)](/fundamentals/accessibility-principles/#readable)
* [O conteúdo aparece e opera de maneiras previsíveis (Compreensível)](/fundamentals/accessibility-principles/#predictable)
* [Os usuários são ajudados a evitar e corrigir erros (Compreensível)](/fundamentals/accessibility-principles/#tolerant)
* [O conteúdo é compatível com ferramentas atuais e futuras do usuário (Robusto)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Sophie, fã de basquete com síndrome de Down {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_5"
  yt-id="gmrnVAQuSI8"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Sophie, fã de basquete com síndrome de Down (formato do arquivo: MP4, tamanho do arquivo: 282MB, em inglês)](https://media.w3.org/wai/people-use-web/user-stories_5.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital; Sophie, fã de basquete com síndrome de Down. | Como pessoas com deficiência utilizam a tecnologia digital; Sophie, fã de basquete com síndrome de Down. |
| Olá! Eu sou a Sophie. Eu tenho síndrome de Down. Eu amo basquete! Eu jogava no time da minha escola, e agora trabalho em um estádio. | Uma mulher fala diretamente para a câmera. |
| No trabalho, usamos um aplicativo para nossa equipe. Ele tem um calendário com todos os nossos treinos e jogos. Meu trabalho é registrar os placares e coisas assim. Também posso usá-lo para conversar com o treinador e com os jogadores, e nós o usamos para trocar fotos e piadas também. | A mulher está sentada em um ginásio, usando um telefone celular. |
| Às vezes, levo mais tempo para ler as coisas, mas este aplicativo é realmente fácil de usar. O evento ou nome do jogador está no topo, então sei onde estou no aplicativo. O calendário também é muito claro. Ele mostra o nome do mês ou o número da semana no topo também. Outros aplicativos que tentamos são muito confusos – eu nunca conseguia saber onde estava e como voltar. | A mulher está sentada em um ginásio, usando um aplicativo de basquete em um telefone celular. |
| O maior problema é comprar ingressos para jogos. Eu tento usar este aplicativo para comprar, mas às vezes tenho que usar outros aplicativos para conseguir ingressos. Alguns desses aplicativos são muito difíceis. Quando clico em algo, vai para outro lugar ou abre outra página. Ou não tem aquela caixa azul no topo e não sei onde estou ou como voltar. Às vezes, demora muito, tenho que começar tudo de novo. É um verdadeiro incômodo. Eu gostaria que comprar ingressos pudesse ser mais fácil. | A mulher está sentada em um ginásio, navegando e usando um aplicativo de venda de ingressos em um telefone celular. |
| Meu sonho é me tornar assistente sênior. Eu sei que posso fazer isso. Às vezes é difícil para eu escrever coisas longas, mas eu sempre uso o corretor ortográfico. Ajuda quando os treinadores usam palavras que eu já conheço. Caso contrário, levo ainda mais tempo para encontrar as palavras no dicionário. | A mulher está sentada em uma mesa usando um laptop. Ela está lendo um texto e usando a função de dicionário para verificar palavras. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | A mulher fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 