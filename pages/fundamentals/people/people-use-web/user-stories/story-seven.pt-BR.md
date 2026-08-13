---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Marta, assistente de marketing que é surda e cega"
nav_title: "Marta"
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

permalink: /people-use-web/user-stories/story-seven/pt-BR  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-seven/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-six/pt-BR
  next: /people-use-web/user-stories/story-eight/pt-BR

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

Marta é uma assistente de marketing que nasceu profundamente surda e agora está progressivamente perdendo sua visão. Por enquanto, ela consegue ampliar a tela do computador para ver o conteúdo, mas à medida que sua visão continua se deteriorando, ela precisará aprender novas formas de interagir com o computador. Marta está aprendendo braille e espera usar seu novo display braille para leitura, escrita e navegação em aplicativos. Além disso, o display braille inclui alguns aplicativos frequentemente utilizados como calendário, e-mail e notas. Isso será útil sempre que ela estiver fora de casa. Marta está fazendo aulas de design de moda e sabe que precisará discutir suas necessidades específicas com a faculdade, já que provavelmente precisará que os materiais das aulas estejam disponíveis em seu display braille.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_7.mp4"
   captions="wai-videos/people-use-web/user-stories_7.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Marta, assistente de marketing que é surda e cega"
   poster="content-images/people-use-web/user-stories/marta-video-frame.png"
%}
</div>

{% include_cached toc.html type="start" title="Conteúdo da página" class="full" %}
{:/}

-   O conteúdo da página é criado automaticamente.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}

</aside>
{:/}


**Nota:** Esta história de usuário é um exemplo de uma pessoa com este tipo de deficiência. Outras pessoas com esta deficiência podem ter experiências diferentes.

## Sobre Marta

> Eu adoro assistir vídeos e quando eles têm legendas que posso aumentar, eu consigo acompanhar o diálogo.

Marta é uma assistente de marketing que nasceu profundamente surda. Ela se comunica usando língua de sinais e estudou em uma escola para surdos. Recentemente, Marta descobriu que tem uma condição degenerativa que resulta em perda progressiva da visão. À medida que sua visão se deteriora, Marta precisará aprender novas formas de interagir com o computador. Felizmente para Marta, o conteúdo online, se codificado corretamente, é acessível ajustando configurações de tamanho e contraste, dos quais ela está se tornando cada vez mais dependente.

Marta sempre se interessou por roupas e sua visão decrescente apenas alimentou ainda mais sua paixão por cores vibrantes, formas exageradas e texturas distintas. Ela começou a fazer aulas de design de moda em sua faculdade local e está animada para aprender a história da moda. Marta sempre dependeu de legendas ou aplicativos de fala para texto ao se comunicar com seus colegas ouvintes e sua comunidade local. Ela sabe que precisa entrar em contato com o escritório de deficiência para solicitar um intérprete de sinais. No entanto, ela não tem certeza sobre quais recursos adicionais pode precisar agora devido ao seu diagnóstico recente. Ela espera discutir quanto do material do curso é apresentado com legendas e transcrições.

Marta está atualmente aprendendo braille e está sendo exposta ao uso de um display braille para acessar sua tecnologia atual. Ela ficou animada ao saber que o display braille inclui recursos de calendário, e-mail, navegação na web e anotações, para que ela possa ter um dispositivo tudo-em-um. Isso reduzirá o número de dispositivos que Marta terá que carregar para navegar pelo campus com segurança. Ela quer poder navegar independentemente nas plataformas da faculdade para acessar materiais do curso, comunicar-se com seus professores e enviar trabalhos sem ter que depender de outra pessoa se não puder acessar as informações visualmente. Até agora, Marta teve sucesso parcial usando o display braille. Ele funciona bem quando o conteúdo é codificado para que possa ser reconhecido pelo dispositivo. Infelizmente, em um caso, ela não conseguiu enviar um formulário porque um botão não estava codificado corretamente.

Socialmente, Marta adora sair com seus amigos. Ela não poderá dirigir, então precisará depender do transporte público. Isso não é novidade para ela, já que mora em uma área urbana. No entanto, ela sabe que sempre há mudanças de última hora em plataformas e horários. Ela está preocupada em ser alertada sobre essas informações. Ela já está tendo dificuldade para ler horários, além disso, o site não é otimizado para dispositivos móveis e não funciona bem quando ampliado. Ela está interessada em personalizar seus dispositivos para poder utilizar recursos táteis para notificações e alertas em todos os aspectos de sua vida. Marta está ansiosa para aprender sobre a tecnologia acessível que está disponível para que ela possa continuar seu caminho para se tornar uma designer de moda bem-sucedida.

## Exemplos de barreiras

Layout consistente
: **Barreira:** "Alguns sites de compras que visito têm estilos completamente diferentes para diferentes seções. Levo um tempo para descobrir onde está tudo em cada seção, o que é realmente frustrante."
: **Funciona bem:** "O site de compras que uso tem o mesmo layout em todas as suas seções, o que facilita minha navegação pelas páginas."

Sem transcrição
: **Barreira:** "Alguns vídeos só têm legendas incorporadas que não consigo acessar facilmente."
: **Funciona bem:** "Ter uma transcrição é uma grande ajuda. É muito mais fácil para eu ler com meu dispositivo braille."

CAPTCHA inacessível
: **Barreira:** "Se um site tem um CAPTCHA que usa imagens ou áudio, simplesmente não consigo usá-lo - pode levar muito tempo para eu decifrar a imagem e não consigo ouvir a alternativa em áudio."
: **Funciona bem:** "Nenhum CAPTCHA é melhor, mas às vezes há coisas simples que fazem uma pergunta muito fácil."

Navegação por teclado
: **Barreira:** "Um seletor de data que aparece quando navego até um campo de entrada de data, mas não consigo usar o seletor de data porque não funciona com o teclado."
: **Funciona bem:** "Posso navegar pelas datas em um seletor de data usando meu teclado ou posso simplesmente inserir a data sem o seletor de data."

Mudanças em outros lugares na página
: **Barreira:** "Precisei adicionar meu endereço anterior em um formulário de inscrição, mas nada aconteceu quando pressionei o botão 'Adicionar novo endereço'. Não sei onde os novos campos de endereço podem ter sido adicionados na página."
: **Funciona bem:** "Quando pressiono o botão 'Adicionar novo endereço', sou levada aos campos do formulário que acabaram de ser adicionados acima do botão."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Braille (Percepção)](/people-use-web/tools-techniques/perception/#braille)
* [Display braille atualizável (Percepção)](/people-use-web/tools-techniques/perception/#braille_display)
* [Leitor de tela (Percepção)](/people-use-web/tools-techniques/perception/#sr)
* [Texto para fala (Percepção)](/people-use-web/tools-techniques/perception/#tts)
* [Transcrições (Percepção)](/people-use-web/tools-techniques/perception/#transcripts)
* [Fontes e cores personalizadas (Apresentação)](/people-use-web/tools-techniques/presentation/#style)
* [Ampliação de tela (Apresentação)](/people-use-web/tools-techniques/presentation/#display)
* [Lupa de tela (Apresentação)](/people-use-web/tools-techniques/presentation/#magnifiers)
* [Títulos, cabeçalhos e rótulos descritivos (Interação)](/people-use-web/tools-techniques/navigation/#labels)
* [Mensagens de erro e sucesso úteis (Interação)](/people-use-web/tools-techniques/navigation/#messages)
* [Navegação por teclado (Interação)](/people-use-web/tools-techniques/navigation/#keyboard)
* [Links para pular conteúdo (Interação)](/people-use-web/tools-techniques/navigation/#skip)

## Recursos relacionados da WAI

* Vídeo: [Legendas em Vídeo](/perspective-videos/captions/)
* Dica: [Crie transcrições e legendas para multimídia](/tips/writing/#create-transcripts-and-captions-for-multimedia)
* Dica: [Evite CAPTCHA quando possível](/tips/developing/#avoid-captcha-where-possible)
* Dica: [Garanta que todos os elementos interativos sejam acessíveis por teclado](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Dica: [Forneça opções de navegação claras e consistentes](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Verifique: [Alternativas de texto para imagens ("texto no atributo alt")](/test-evaluate/preliminary/#images)
* Verifique: [Formulários, rótulos e erros](/test-evaluate/preliminary/#forms)
* Verifique: [Alternativas para multimídia (vídeo, áudio)](/test-evaluate/preliminary/#media)
* Verifique: [Verificação de Estrutura Básica](/test-evaluate/preliminary/#structure)

## Princípios relacionados

* [Alternativas em texto para conteúdo não textual (Perceptível)](/fundamentals/accessibility-principles/#alternatives)
* [Alternativas para conteúdo em áudio e vídeo (Perceptível)](/fundamentals/accessibility-principles/#captions)
* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [O conteúdo é mais fácil de ver e ouvir (Perceptível)](/fundamentals/accessibility-principles/#distinguishable)
* [Os usuários têm tempo suficiente para ler e usar o conteúdo (Operável)](/fundamentals/accessibility-principles/#time)
* [Os usuários podem facilmente navegar, encontrar conteúdo e determinar onde estão (Operável)](/fundamentals/accessibility-principles/#navigable)
* [O conteúdo aparece e opera de maneiras previsíveis (Compreensível)](/fundamentals/accessibility-principles/#predictable)
* [O conteúdo é compatível com ferramentas atuais e futuras do usuário (Robusto)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Marta, assistente de marketing que é surda e cega {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_7"
  yt-id="llTnoiq2Mow"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Marta, assistente de marketing que é surda e cega (formato do arquivo: MP4, tamanho do arquivo: 360MB, em inglês)](https://media.w3.org/wai/people-use-web/user-stories_7.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital; Marta, assistente de marketing que é surda e cega. | Como pessoas com deficiência utilizam a tecnologia digital; Marta, assistente de marketing que é surda e cega. |
| Olá! Eu sou a Marta, assistente de marketing na minha Escola para Surdos. Eu sou surda-cega. Nasci surda e tenho perda progressiva da visão, o que significa que ainda posso ver coisas se forem grandes e próximas, mas vejo cada vez menos a cada ano. | Uma mulher sinaliza diretamente para a câmera. |
| Como uma criança surda, aprendi língua de sinais desde cedo. É por isso que a tecnologia é tão importante para mim – ela me permite me comunicar com mais pessoas. Em casa, tenho um computador que pode ampliar meus documentos até 20 vezes. Tenho uma tela grande, mas ainda só consigo ver uma parte muito pequena da tela, e uma parte ainda menor dos documentos porque é como olhar através de uma lente de aumento. Consigo encontrar meu caminho pelos documentos com cabeçalhos e seções que parecem diferentes. Por exemplo, este documento informativo usa uma cor para os cabeçalhos que é diferente do conteúdo principal, o que facilita reconhecê-los. | A mulher está sentada no sofá com outro homem, eles estão sinalizando um para o outro. A mulher está então sentada em uma mesa navegando por opções ampliadas em um site. Ela está usando um mouse e olhando para um monitor através de uma lente de aumento. |
| Ah, e também estou aprendendo a usar braille. Braille são aqueles pontos que você lê com os dedos, e eu tenho este dispositivo muito legal chamado "display braille atualizável" – é um dispositivo pequeno que posso levar comigo para todo lugar, diferente do meu computador. Ele tem aplicativos para e-mail, web e chat, e alguns têm um teclado especial para digitar em braille. Eu leio os caracteres braille em uma linha no dispositivo, o que estou lentamente me acostumando. É sempre difícil aprender a usar algo novo no início, mas estou melhorando na leitura e digitação em braille. | A mulher está sentada em uma mesa usando um display braille atualizável. |
| Mas nem todos os sites e aplicativos funcionam bem com ampliação ou no meu display braille. Como quando preciso consultar o horário do ônibus para encontrar meus amigos – aquela tabela não funciona bem quando a amplio no meu telefone. E nem pense em tentar lê-la em braille. Não consigo dizer em qual linha ou coluna estou e simplesmente pula para todos os lugares! Isso me deixa nervosa porque não posso pedir ajuda tão facilmente às pessoas ao meu redor quando estou na rua, então tenho aprendido a me manifestar e pedir às empresas sites e aplicativos mais acessíveis para me ajudar a manter minha independência. | A mulher está sentada em um ponto de ônibus, olhando para um aplicativo de horários de ônibus ampliado em seu telefone celular. Ela está segurando o telefone celular próximo ao rosto. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | A mulher fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 