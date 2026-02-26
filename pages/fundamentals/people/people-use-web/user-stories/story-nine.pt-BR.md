---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo"
nav_title: "Elias"
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

permalink: /people-use-web/user-stories/story-nine/pt-BR  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /people-use-web/user-stories/story-nine/  # Do not change this

parent_in_h1:
  - ref: /people-use-web/user-stories/pt-BR
    name: nav_title
  - ref: /people-use-web/pt-BR
    name: nav_title

navigation:
  previous: /people-use-web/user-stories/story-eight/pt-BR

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
      margin: 0 -1em;
    }
  }
</style>

{% include_cached blockquote.html class="pull alt-2" content="<p>Acessibilidade: É sobre pessoas</p>" %}

<aside id="introduction" class="box"><div class="box-i">
  <div>
{:/}

Elias é um arquiteto aposentado de 85 anos. Ao longo dos anos, Elias sofreu uma diminuição na visão, na audição e na memória de curto prazo, e ele tem um leve tremor nas mãos. Ele usa tecnologia digital para todas as atividades, incluindo manter contato com a família, ler notícias e artigos de arquitetura, e fazer compras online. No entanto, usar tecnologia pode ser difícil quando ele não consegue usar as configurações que precisa, como quando os sites e aplicativos não permitem aumentar o tamanho do texto, exigem clicar em pequenas áreas da página e fazem ele digitar informações em cada visita que faz, ao invés de armazená-las.

{::options toc_levels="2..2" /}

{::nomarkdown}
  </div>
{% include video-card.html
   video-url="//media.w3.org/wai/people-use-web/user-stories_9.mp4"
   captions="wai-videos/people-use-web/user-stories_9.en.vtt|en"
   accessible-version="#accessible-video"
   accessible-version-label="Vídeo: Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo"
   poster="content-images/people-use-web/user-stories/elias-video-frame.png"
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

**Nota:** Esta história de usuário é um exemplo de uma pessoa com este tipo de deficiência. Outras pessoas com esta deficiência podem ter experiências diferentes.

## Sobre Elias

> Eu adoro toda essa nova tecnologia. É ótimo ver meus netos. Levo um tempo para encontrar todos os controles e às vezes eles são um pouco pequenos, mas no final eu consigo.

Elias tem baixa audição e visão, tremor nas mãos e perda de memória de curto prazo. Elias teve uma longa e bem-sucedida carreira como arquiteto. Ele adiou sua aposentadoria até os 70 anos porque, como arquiteto sênior em sua empresa, era frequentemente procurado para orientar os novos contratados e dar palestras como convidado em universidades locais. Elias tem degeneração macular que embaça sua visão e torna a leitura mais difícil. Com o tempo, as demandas do trabalho minucioso necessário para renderizar desenhos arquitetônicos forçaram tanto seus olhos que ele só conseguia trabalhar algumas horas por vez. Ele finalmente teve que parar de trabalhar quando desenvolveu um leve tremor nas mãos e achou muito difícil manter a precisão necessária para seu trabalho.

Atualmente, aos 85 anos, a família de Elias começou a notar alguma perda de memória de curto prazo. Mesmo assim, Elias mantém um interesse ativo na história da arquitetura e faz parte de um pequeno grupo de pessoas que compartilham sua paixão e escrevem sobre isso online. Seu blog tem um público ativo e ajuda a garantir que ele ainda possa contribuir para a área.

Como muitas pessoas idosas, Elias tem dificuldade em ler textos com tamnanho de fonte pequeno. Ele assina uma versão online em vez da versão física do jornal porque pode aumentar o tamanho da fonte do texto, tornando mais fácil a leitura. No entanto, em alguns sites isso não funciona tão bem porque o texto é cortado ou o texto aumentado não flui para a próxima linha e ele tem que rolar horizontalmente para fora da tela. Seu tremor nas mãos torna difícil rolar em linha reta. Embora isso seja mais fácil do que manusear as grandes páginas de um jornal impresso, o melhor caso é quando o texto redimensiona e se ajusta adequadamente.

Com todos os benefícios de usar um computador para ler notícias e se manter ativo em sua área, Elias frequentemente tem dificuldade com a segurança em alguns sites. Em sites que usam CAPTCHA, às vezes é difícil para ele identificar o texto distorcido ou identificar as imagens em fotos porque geralmente não são renderizadas claramente. Em sites que enviam um código de segurança, Elias precisa interromper o que está fazendo para olhar em seu telefone e copiar um código, e às vezes os códigos são longos e difíceis de transcrever corretamente. Ao usar um site que requer CAPTCHA, Elias acha muito mais simples se o texto ou as imagens forem fáceis de identificar. Se um código de segurança for necessário, um pequeno grupo de números ou letras torna mais fácil ler e transcrever.

## Exemplos de barreiras

CAPTCHA não-acessível
: **Barreira**: "Quando faço login no meu banco online, preciso responder um CAPTCHA, mas não consigo lê-lo muito bem."
: **Funciona bem**: "Meu login bancário me envia um SMS com um código simples para confirmar que sou eu."

O texto não se ajusta
: **Barreira**: "Quando redimensiono um site usando meu navegador, parte do texto desaparece ou é cortado e às vezes preciso rolar horizontalmente e verticalmente na tela."
: **Funciona bem**: "Quando redimensiono um site usando meu navegador, todo o texto ainda está disponível e é apresentado em uma coluna mais fina e longa que não precisa ser rolada lateralmente."

Animações distrativas
: **Barreira:** "Quando minha tela está ampliada, as animações são muito distrativas porque não consigo ter o contexto completo do que está acontecendo."
: **Funciona bem:** "Me permite parar qualquer animação na tela para que eu possa me concentrar no que estou olhando."

Tabelas não funcionam bem com zoom
: **Barreira:** "Tabelas online às vezes têm muito espaço entre as colunas e quando estou com zoom, tenho que rolar da esquerda para a direita para ver todo o conteúdo e frequentemente perco a associação de uma coluna para outra."
: **Funciona bem:** "Quando dou zoom nas tabelas, elas mudam de várias colunas para serem apresentadas mais como uma lista, com cada linha sendo mostrada como um item da lista."

Caminho de pão (trilha de navegação)
: **Barreira:** "Frequentemente perco minha localização em sites. Às vezes sigo vários links e não é o que estou procurando. Posso usar o botão voltar para retornar página por página, mas ainda me perco."
: **Funciona bem:** "Um caminho de navegação no topo de cada página que mostra meu caminho pelo site me mantém no rumo, além de me ajudar a voltar à página inicial rapidamente."

Página de login
: **Barreira:** "Tenho contas em tantos sites diferentes que às vezes esqueço minha senha."
: **Funciona bem:** "Uma opção para lembrar minha senha neste site e um meio de redefinir minha senha se eu precisar."

Informações salvas
: **Barreira:** "Quando faço um pedido, tenho dificuldade em lembrar coisas como número de telefone, endereço e detalhes do cartão de crédito."
: **Funciona bem:** "Esta loja lembra minhas informações anteriores, então só preciso selecionar o endereço correto no campo de texto, em vez de precisar digitar cada vez."

## Tecnologias assistivas e estratégias adaptativas utilizadas

* [Ampliação de tela (Apresentação)](/people-use-web/tools-techniques/presentation/#display)
* [Teclado e mouse alternativos (Entrada)](/people-use-web/tools-techniques/input/#input)
* [Filtros de teclado e mouse (Entrada)](/people-use-web/tools-techniques/input/#filters)
* [Personalização do mouse (Entrada)](/people-use-web/tools-techniques/input/#mouse)
* [Favoritos e histórico (Interação)](/people-use-web/tools-techniques/navigation/#bookmarks)
* [Consistência e previsibilidade (Interação)](/people-use-web/tools-techniques/navigation/#consistency)
* [Títulos, cabeçalhos e rótulos descritivos (Interação)](/people-use-web/tools-techniques/navigation/#labels)
* [Mensagens úteis de erro e sucesso (Interação)](/people-use-web/tools-techniques/navigation/#messages)

## Recursos relacionados da WAI

* Caso de uso: [Gopal: Um Advogado Aposentado com Demência, em inglês](https://www.w3.org/TR/coga-usable/#gopal-a-retired-lawyer-with-dementia)
* Vídeo: [Links, Botões e Controles Grandes](/perspective-videos/controls/)
* Dica: [Forneça contraste suficiente entre o primeiro plano e o plano de fundo](/tips/designing/#provide-sufficient-contrast-between-foreground-and-background)
* Dica: [Evite CAPTCHA quando possível](/tips/developing/#avoid-captcha-where-possible)
* Dica: [Torne o texto dos links significativo](/tips/writing/#make-link-text-meaningful)
* Dica: [Forneça instruções claras](/tips/writing/#provide-clear-instructions)
* Dica: [Mantenha o conteúdo claro e conciso](/tips/writing/#keep-content-clear-and-concise)
* Dica: [Garanta que elementos interativos sejam fáceis de identificar](/tips/designing/#ensure-that-interactive-elements-are-easy-to-identify)
* Dica: [Forneça opções de navegação claras e consistentes](/tips/designing/#provide-clear-and-consistent-navigation-options)
* Dica: [Forneça feedback facilmente identificável](/tips/designing/#provide-easily-identifiable-feedback)
* Dica: [Use cabeçalhos e espaçamento para agrupar conteúdo relacionado](/tips/designing/#use-headings-and-spacing-to-group-related-content)
* Dica: [Ajude os usuários a evitar e corrigir erros](/tips/developing/#help-users-avoid-and-correct-mistakes)
* Dica: [Forneça significado para elementos interativos não padrão](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
* Dica: [Garanta que todos os elementos interativos sejam acessíveis por teclado](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
* Verifique: [Taxa de contraste ("contraste de cor")](/test-evaluate/preliminary/#contrast)
* Verifique: [Redimensionamento de texto](/test-evaluate/preliminary/#resize)
* Verifique: [Acesso por teclado e foco visual](/test-evaluate/preliminary/#interaction)
* Verifique: [Formulários, rótulos e erros](/test-evaluate/preliminary/#forms)

## Princípios relacionados

* [Alternativas em texto para conteúdo não textual (Perceptível)](/fundamentals/accessibility-principles/#alternatives)
* [O conteúdo pode ser apresentado de diferentes formas (Perceptível)](/fundamentals/accessibility-principles/#adaptable)
* [O conteúdo é mais fácil de ver e ouvir (Perceptível)](/fundamentals/accessibility-principles/#distinguishable)
* [Os usuários têm tempo suficiente para ler e usar o conteúdo (Operável)](/fundamentals/accessibility-principles/#time)
* [Os usuários podem facilmente navegar, encontrar o conteúdo e determinar onde estão (Operável)](/fundamentals/accessibility-principles/#navigable)
* [O conteúdo é legível e compreensível (Compreensível)](/fundamentals/accessibility-principles/#readable)
* [O conteúdo aparece e opera de maneiras previsíveis (Compreensível)](/fundamentals/accessibility-principles/#predictable)
* [Os usuários são ajudados a evitar e corrigir erros (Compreensível)](/fundamentals/accessibility-principles/#tolerant)
* [O conteúdo é compatível com ferramentas atuais e futuras do usuário (Robusto)](/fundamentals/accessibility-principles/#compatible)

{% include excol.html type="start" id="video-transcript" %}

## Vídeo: Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo {#accessible-video}

{% include excol.html type="middle" %}

{% include video-player-data.html
  video-id="user-stories_9"
  yt-id="c-IqJdL0i38"
%}

_Este vídeo também está disponível em um servidor da W3C: [Vídeo: Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo (formato do arquivo: MP4, tamanho do arquivo: 162MB, em inglês)](https://media.w3.org/wai/people-use-web/user-stories_9.mp4)._

### Transcrição de Texto com Descrição de Elementos Visuais {#transcript}

| Áudio | Visual |
| --- | --- |
| Como pessoas com deficiência utilizam a tecnologia digital; Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo. | Como pessoas com deficiência utilizam a tecnologia digital; Elias, aposentado com baixa visão, tremor nas mãos e leve perda de memória de curto prazo. |
| Olá! Eu sou o Elias. Sou um arquiteto aposentado. A vida anda mais devagar agora que estou aposentado, e acho que meu corpo também! | Um homem fala diretamente para a câmera. |
| Eu vejo menos e ouço menos do que nos meus dias de juventude. Também, minhas mãos tremem um pouco. Meus filhos moram longe, então nos vemos online. Também nos escrevemos e enviamos fotos. É muito mais fácil e rápido do que ir aos correios toda vez. | O homem está sentado em sua mesa usando um laptop. Ele está participando de uma videochamada online com outra pessoa usando um aplicativo de videoconferência. |
| Meu problema é todo esse texto pequeno! Por que eles escrevem tão pequeno? Eu sei como aumentar o tamanho do texto, mas não funciona em todos os sites. Às vezes tudo parece quebrar – o texto se sobrepõe ou vai para outro lugar ou desaparece completamente. Ou tenho que rolar lateralmente para ler – não tenho tempo nem energia para isso. | O homem está sentado em sua mesa usando um laptop. Ele está tentando usar um site que não tem design responsivo. |
| É a mesma coisa com aplicativos. Eu aumentei o tamanho da fonte de texto no meu celular. Não consigo ver sem fazer isso em uma tela tão pequena. A maioria dos aplicativos funciona bem, mas não o aplicativo do banco. O texto nesse aplicativo ainda é pequeno, e eu preciso usá-lo para acessar minha conta bancária. Já liguei para eles várias vezes sobre isso, mas nada acontece. | O homem está sentado em sua mesa usando um aplicativo de mensagens ampliado em um celular. Ele então muda para usar um aplicativo bancário. |
| Não é só a leitura. Quando a fonte do texto é pequena, todos os botões e links também são pequenos. Às vezes minúsculos. Especialmente em formulários onde você tem que clicar e selecionar todas essas coisas – é difícil com minhas mãos, elas não se comportam como costumavam. | O homem está sentado em sua mesa usando um laptop. Ele tenta fazer uma seleção em uma lista, mas o tamanho da fonte do texto é muito pequeno. |
| Nossa mercearia agora tem uma loja online, o que é fantástico porque não preciso mais carregar todas as compras. O tamanho da fonte do texto é grande e tem links e botões grandes. Parece mais claro e mais fácil de encontrar as coisas – tudo está onde deveria estar em cada página. Geralmente, tenho problemas para lembrar coisas, como número de telefone, endereço e detalhes do cartão de crédito. Esta loja recorda de minha visita anterior, então só preciso selecionar o endereço certo no campo de texto, em vez de precisar digitar a cada vez que visito. Queria que todos os sites pudessem ser tão fáceis. | O homem está sentado em sua mesa usando um laptop. Ele está usando com sucesso o site de sua mercearia online. |
| Você pode ajudar a tornar a tecnologia acessível para mim. Acessibilidade: É sobre pessoas. | O homem fala diretamente para a câmera. |
| Para mais informações da Web Accessibility Initiative sobre como pessoas com deficiência usam a tecnologia digital, visite w3.org/WAI/people | Acessibilidade: É sobre pessoas; w3.org/WAI/people |

{% include excol.html type="end" %} 