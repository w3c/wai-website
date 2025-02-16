---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Ade, repórter com uso limitado de seus braços"
nav_title: "Ade"
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

permalink: /people-use-web/user-stories/story-one/pt-BR  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-one/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/pt-BR
  next: /people-use-web/user-stories/story-two/pt-BR

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

Ade é um repórter com uso limitado de seus braços. Ele tem inúmeras estratégias para navegar em websites, incluindo usar a palma de sua mão para operar um joystick, usar um dedo para pressionar as teclas do teclado que permite a ele mover a página para cima e para baixo e navegar de link em link usando a tecla Tab, e, mais recentemente, utilizar reconhecimento de voz. Todos estes métodos, no entanto, apresentam suas desvantagens. Ao utilizar o joystick, é difícil clicar em alvos menores como colocar o ponteiro do mouse entre palavras ou no fim de uma frase. Quando utiliza o teclado, às vezes é difícil saber qual elemento na página está recebendo o foco, além disso a ordem dos links frequentemente não confere com o que ele enxerga quando olha na página. Reconhecimento por voz é promissor, mas isso envolve toda uma nova forma de trabalhar para alguém que está acostumado a digitar. Para que Ade possa alternar de um método para outro, é importante garantir que os links e outros elementos da página tenham indicadores visuais de foco e que correspondam à ordem em que aparecem na página, além de assegurar que o conteúdo flua corretamente quando o site for ampliado, fazendo com que tudo apareça maior. 

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_1.mp4"
   captions="wai-videos/people-use-web/user-stories_1.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Ade, repórter com uso limitado de seus braços(em inglês)"
   poster="content-images/people-use-web/user-stories/ade-video-frame.png"
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

**Nota:** Esta história de usuário é um exemplo de uma pessoa com um tipo de deficiência.Outras pessoas com esta deficiência podem ter experiênicas diferentes.

## Sobre Ade

> Não é como se eu não pudesse usar um teclado ou um ponteiro, eu apenas não consigo usá-los por longos períodos, porque é exaustivo.


 Ade envolveu-se em um acidente que resultou em uma lesão de sua medula espinhal. Ist o deixou com uso limitado de seus braços e sem movimento nem sensibilidade em suas pernas. Ele tem trabalhado como repórter por muitos anos. Ade às vezes usa um teclado com teclas maiores para ajudá-lo a pressionar a tecla correta com mais facilidade e um joystick em vez de um mouse. No entanto, usá-los por longos períodos pode ser cansativo, então ele começou a usar software de reconhecimento de voz para algumas tarefas, como ditar textos longos.

Ao invés de usar seus dedos, Ade usa a palma de sua mão para operar um joystick que possui uma alavanca ampliada. Isto pode ser impreciso de utilizar, particularmente ao se apontar e clicar em áreas menores. Quando isso ocorre, ele algumas vezes alterna para o uso do teclado para navegação. Ele pode utilizar a tecla Tab para mover-se entre links e elementos de formulário. Utilizando o teclado, Ade descobriu que em alguns site ele não podia ver o campo ou o link que estava em foco no momento. Ele também descobriu que às vezes os links não estavam em uma ordem lógica, tornando difícil de alcançar o elemento na página que ele tem interesse. Ele poderia sempre utilizar seu joystick, mas isso poderia interromper seu fluxo de trabalho, atrasando-o. Sites frequentemente oferecem um bom estilo visual quando você para o ponteiro do mouse sobre um link, mas algumas vezes eles não incluem este mesmo efeito quando o link recebe o foco de teclado. Para Ade, é importante que websites mostrem claramente qual link tem o foco atual do teclado e que seja possível navegar entre os links em uma ordem lógica, ou seja, seguindo a ordem visual dos links na página.

Ao usar um teclado, Ade descobriu alguns recursos que realmente ajudam. Por exemplo, um link de salto que move o foco além de toda a navegação na página é de grande ajuda. Ade tenta evitar sites que não possuem esse recurso. No entanto, isso limita um pouco suas fontes de pesquisa.

Ade começou a usar um software de controle por voz, que o ajuda a evitar o uso do joystick e do teclado. O software permite que ele selecione e "clique" em links falando, mas isso só funciona quando os links são claros e corretamente codificados. O software também possui um recurso de ditado por voz para texto. Como alguém que passou anos digitando seus artigos, Ade está tendo que se adaptar a uma nova forma de trabalhar. Ele ainda prefere digitar, pois acha que é muito mais lento com o ditado, mas está confiante de que sua velocidade irá melhorar.

Fora do trabalho, Ade acha seu dispositivo móvel mais fácil de usar do que o computador, pois há uma navegação mais limitada e nenhum dispositivo apontador. Por ser portátil, ele tem mais opções para colocá-lo em uma posição confortável. Ele gostaria que seu empregador criasse um site amigável para dispositivos móveis ou responsivo que ele pudesse usar no seu trabalho.

## Exemplos de barreiras

Barreira de estilo de foco
: **Barreira:** "Quando navego pelos links e campos de formulário usando a tecla Tab, não há nenhum estilo visual para me mostrar em qual elemento estou."
: **Funciona bem:** "Há um estilo visual claro e marcante para links e campos de formulário quando recebem o foco."

Barreira de limite de tempo 
: **Barreira:** "Normalmente, levo muito mais tempo para preencher formulários longos ou concluir processos e frequentemente sou desconectado por atingir o tempo limite"
: **Funciona bem:** "No início de um formulário longo ou processo, sou informado de que há um limite de tempo e tenho a opção de ajustá-lo para ser um pouco mais longo."

Barreira de salvar progresso
: **Barreira:** "Preencher formulários longos sem uma maneira de salvar conforme for preenchendo, e fazer uma pausa. pode ser cansativo."
: **Funciona bem:** "Ter a opção de salvar o progresso e fazer uma pausa ao preencher formulários longos e com várias etapas, como quando preciso receber um código por e-mail ou mensagem de texto e digitá-lo."

Barreira de janelas pop-up
: **Barreira:** "Quando uma janela abre e eu não consigo fechá-la usando apenas o teclado, isso pode ser custoso."
: **Works well:** "Novas janelas tem um ícone de fechar que eu consigo accessar usando apenas o teclado e algumas incluen a opção de pressionar a tecla ESC para fechá-las."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Aceleradores (entrada de dados)](/people-use-web/tools-techniques/input/#accelerators)
* [Teclado e mouse alternativos (entrada de dados)](/people-use-web/tools-techniques/input/#input)
* [Reconhecimento de voz (entrada de dados)](/people-use-web/tools-techniques/input/#speech)
* [Previsão de palavras (entrada de dados)](/people-use-web/tools-techniques/input/#prediction)
* [Navegação por teclado (Interação)](/people-use-web/tools-techniques/navigation/#keyboard)
* [Links de salto (entrada de dados)](/people-use-web/tools-techniques/navigation/#skip)

## Recursos WAI relacionados

* Vídeo: [Reconhecimento de voz](/perspective-videos/voice/)
* Dica: [Utilize títulos/cabeçalhos para transmitir significado e estrutura](/tips/writing/#use-headings-to-convey-meaning-and-structure)
* Dica: [Torne o texto do link significativo](/tips/writing/#make-link-text-meaningful)
* Dica: [Assegure-se que os elementos interativos sejam fáceis de serem encontrados](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Dica: [Associe um rótulo a cada controle de formulário](/tips/developing/#associate-a-label-with-every-form-control)
* Dica: [Certifique-se de que todos os elementos interativos são acessíveis para teclado](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Verifique: [Accesso por teclado e foco visual](/test-evaluate/preliminary/#interaction)
* Verifique: [Formulários, rótulos e erros](/test-evaluate/preliminary/#forms)

## Princípios relacionados

* [Texto alternativo para conteúdo não-textual (Perceptível)](/fundamentals/accessibility-principles/#alternatives)
* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [A funcionalidade está disponível a partir de um teclado (Operável)](/fundamentals/accessibility-principles/#keyboard)
* [Os usuários têm tempo suficiente para ler e utilizar o conteúdo (Operável)](/fundamentals/accessibility-principles/#time)
* [Os usuários podem navegar facilmente, encontrar conteúdo e determinar onde estão (Operável)](/fundamentals/accessibility-principles/#navigable)
* [O conteúdo aparece e opera de formas previsíveis(Compreensível)](/fundamentals/accessibility-principles/#predictable)
* [Os usuários são ajudados a evitar e corrigir erros (Compreensível)](/fundamentals/accessibility-principles/#tolerant)
* [O conteúdo é compatível com as ferramentas atuais e futuras do usuário (Robusto)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

##  Vídeo: Ade, repórter com uso limitado de seus braços {#accessible-video}

{% include excol.html type="middle" %}


{% include video-player-data.html
  video-id="user-stories_1"
  yt-id="Z5dMdJzUy7w"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Ade, repórter com uso limitado de seus braços (formato de arquivo: MP4, tamanho do arquivo: 162MB, idioma: inglês)](https://media.w3.org/wai/people-use-web/user-stories_1.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como as pessoas com deficiência usam a tecnologia digital; Ade, repórter com uso limitado de seus braços. | Como as pessoas com deficiência usam a tecnologia digital; Ade, repórter com uso limitado de seus braços. |
|Olá! Sou o Ade. Sou tetraplégico, o que significa que tenho movimentos limitados nos braços e nas pernas.| Um homem numa cadeira de rodas fala diretamente para a câmera. |
| A tecnologia que uso é muito importante para mim. Eu uso muitos atalhos de teclado, especialmente para os programas que uso com frequência. Por exemplo, rolar uma página é muito mais fácil com as teclas de seta do teclado do que clicando nesse botão na barra de rolagem. | O homem está sentado em uma mesa usando um laptop. Ele usa as teclas de seta para rolar para cima e para baixo uma página da web. |
| Infelizmente, muitos sites e aplicativos não funcionam bem com o meu teclado. Muitas vezes, não está claro o que está em foco ou está completamente fora da ordem visual de elementos. | O homem usa a tecla Tab para completar seções de um formulário. |
| Às vezes isso não funciona bem porque alguns sites e aplicativos não funcionam em modo paisagem, que é como eu configuro meu tablet para que os botões sejam grandes o suficiente para eu clicar. | O homem está sentado e usando seu tablet em modo paisagem. A página da web que ele está tentando visualizar não gira para modo paisagem. |
| Ainda eu posso usar um teclado e joystick, não posso usá-los por longos períodos porque é cansativo. Então, eu recentemente comecei a usar um software de controle de fala também. Ele me permite ditar o texto ao invés de digitar, e dizer certos comandos em vez de clicar. É muito difícil aprender uma nova forma de trabalhar depois de tantos anos, mas tenho sido paciente com isso e estou lentamente me acostumando. A coisa mais difícil são os botões sem rótulos - não está claro qual comando de voz poderia ativá-los. | O homem está sentado em uma mesa. Ele está falando com seu laptop para escrever um e-mail. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre as pessoas. | O homem fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como as pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre as pessoas; w3.org/WAI/people |


{% include excol.html type="end" %}
