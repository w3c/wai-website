---
title: Introdução à acessibilidade web
lang: pt-BR
last_updated: 2024-03-07   # Keep the date of the English version
first_published: "Fevereiro de 2005"

translation:
  last_updated: 2024-12-16	# Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Adiel Cristo"
contributors:
   - name: "Israel Cefrin"

github:
  label: wai-accessibility-intro

permalink: /fundamentals/accessibility-intro/pt-BR
ref: /fundamentals/accessibility-intro/     # Do not change this
  
# In the footer below:
# Translate the Working Group name. Leave the Working Group acronym in English.
# Translate the other words, including "Editor:"
footer: >
  <p><strong>Pessa Editora:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Desenvolvido pelo Grupo de Trabalho de Educação e Extensão (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Sumário" class="full" %}
{:/}

Quando sites e ferramentas web são projetados e codificados adequadamente, pessoas com deficiências podem usá-los. No entanto, atualmente muitos sites e ferramentas são desenvolvidos com barreiras de acessibilidade que os tornam difíceis ou impossíveis para algumas pessoas usarem.

Tornar a web acessível beneficia pessoas, negócios e a sociedade. Os padrões web internacionais definem o que é necessário para acessibilidade.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Conteúdo da página" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">Recurso relacionado</span><br>
{% include video-link.html title="Vídeo Introdução à acessibilidade web e Padrões W3C <em>(4 minutos)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Acessibilidade em contexto {#context}

<blockquote class="pull">
  <p>O poder da web está em sua universalidade.<br />
    O acesso por todas as pessoas, independentemente da deficiência, é um aspecto essencial.</p>
  <footer><cite>Tim Berners-Lee, diretor do W3C e inventor da World Wide Web</cite></footer>
</blockquote>

A web é fundamentalmente projetada para funcionar para todas as pessoas, independentemente de seu hardware, software, idioma, localização ou capacidade. Quando a web atinge esse objetivo, ela é acessível a pessoas com uma gama variada de audição, movimento, visão e capacidade cognitiva.

Assim, o impacto da deficiência é radicalmente alterado na web porque a web remove barreiras à comunicação e interação que muitas pessoas enfrentam no mundo físico. No entanto, quando sites, aplicações, tecnologias ou ferramentas são mal projetados, eles podem criar barreiras que excluem as pessoas de usar a web.

**A acessibilidade é essencial para pessoas desenvolvedoras e organizações que desejem criar sites e ferramentas web de alta qualidade e não excluir as pessoas de usar seus produtos e serviços.**

## O que é acessibilidade web {#what}

Acessibilidade web significa que sites, ferramentas e tecnologias são projetados e desenvolvidos para que pessoas com deficiência possam usá-los. Mais especificamente, as pessoas podem:

-   perceber, entender, navegar e interagir com a web
-   contribuir para a web

A acessibilidade web abrange todas as deficiências que afetam o acesso à web, incluindo:

-   auditiva
-   cognitiva
-   neurológica
-   física
-   da fala
-   visual

A acessibilidade web também beneficia pessoas *sem* deficiência, por exemplo:

-   pessoas que usam celulares, relógios inteligentes, TVs inteligentes e outros dispositivos com telas pequenas, diferentes modos de entrada, etc.
-   pessoas mais velhas com habilidades alteradas devido ao envelhecimento
-   pessoas com "deficiências temporárias", como um braço quebrado ou um par de óculos perdido
-   pessoas com "limitações situacionais", como sob luz solar intensa ou em um ambiente onde não podem ouvir áudio
-   pessoas que usam uma conexão lenta à internet ou que têm largura de banda limitada ou cara

Para um vídeo de 7 minutos com exemplos de como a acessibilidade é essencial para pessoas com deficiência e útil para todas as pessoas em uma variedade de situações, acesse:<br>
{% include video-link.html title="Vídeo Perspectivas da acessibilidade web <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Mais informações sobre o que é acessibilidade" class="simple aside" %}
{:/}

-   Quando quiser saber mais sobre como diferentes deficiências afetam o uso da web e ler sobre cenários de pessoas com deficiência usando a web, consulte [[Como pessoas com deficiência usam a web]](/people-use-web/).
-   Se quiser mais exemplos de benefícios para outras pessoas, consulte o recurso multimídia [Usado por pessoas com e sem deficiência](/media/av/users-orgs/#situations), o recurso arquivado [Acessibilidade web beneficia pessoas com e sem deficiência](https://www.w3.org/WAI/business-case/archive/soc#groups) e o recurso móvel arquivado [[Experiências web compartilhadas: barreiras comuns a pessoas usuárias de dispositivos móveis e pessoas com deficiência]](/standards-guidelines/shared-experiences/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Acessibilidade é importante para pessoas, negócios e a sociedade {#important}

A web é um recurso cada vez mais importante em muitos aspectos da vida: educação, emprego, governo, comércio, assistência médica, recreação e muito mais. É essencial que a web seja acessível para fornecer acesso e oportunidades iguais a pessoas com habilidades diferentes. O acesso às tecnologias de informação e comunicação, incluindo a web, é definido como um direito humano básico na Convenção das Nações Unidas sobre os Direitos das Pessoas com Deficiência (UN [CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html)).

A web oferece a possibilidade de acesso sem precedentes à informação e interação para muitas pessoas com deficiência. Ou seja, as barreiras de acessibilidade a materiais impressos, áudio e mídia visual podem ser superadas muito mais facilmente por meio de tecnologias web.

A acessibilidade oferece suporte à inclusão social para pessoas com deficiência, bem como outras pessoas, como:

-   pessoas mais velhas
-   pessoas em áreas rurais
-   pessoas em países em desenvolvimento

**Há também um forte caso de negócio para acessibilidade.** Conforme mostrado na seção anterior, o design acessível melhora a experiência geral e a satisfação da pessoa usuária, especialmente em uma variedade de situações, em diferentes dispositivos e para pessoas usuárias mais velhas. A acessibilidade pode melhorar sua marca, impulsionar a inovação e estender seu alcance no mercado.

A acessibilidade web é **exigida por lei** em muitas situações.

{::nomarkdown}
{% include box.html type="start" h="3" title="Mais informações sobre como a acessibilidade é importante" class="simple aside" %}
{:/}

-   Informações gerais sobre benefícios para os negócios estão em [[O caso de negócio para acessibilidade digital]](/business-case/).
    -   Exemplos dos benefícios de [tornar mídias de áudio e vídeo acessíveis](/media/av/) estão na seção [Benefícios para organizações](/media/av/users-orgs/#benefits).
-   Orientações sobre como descobrir requisitos legais estão no recurso arquivado [Fatores legais e de política](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Tornando a web acessível {#making}

A acessibilidade web depende de vários componentes trabalhando juntos, incluindo tecnologias web, navegadores web e outros \"agentes da pessoa usuária\", ferramentas de autoria e sites.

A Iniciativa de Acessibilidade Web ([WAI](/about/participating/)) do W3C desenvolve especificações técnicas, diretrizes, técnicas e recursos de suporte que descrevem soluções de acessibilidade. Estes são considerados padrões internacionais para acessibilidade web; por exemplo, as <abbr title="Diretrizes de Acessibilidade para Conteúdo Web (WCAG)">WCAG</abbr> 2.0 também são um padrão <abbr title="Organização Internacional para Padronização">ISO</abbr>: ISO/<abbr title="Comissão Eletrotécnica Internacional">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Mais informações sobre como tornar a web acessível" class="simple aside" %}
{:/}

-   Mais informações sobre esses aspectos da acessibilidade trabalhando juntos estão em [[Componentes essenciais da acessibilidade web]](/fundamentals/components/).
-   As Diretrizes de Acessibilidade para Conteúdo Web (WCAG), Diretrizes de Acessibilidade de Ferramentas de Autoria (ATAG), ARIA para Aplicações de Internet Ricas Acessíveis e outros recursos importantes são apresentados em [[Visão geral dos padrões de acessibilidade do W3C]](/standards-guidelines/).
-   Para saber mais sobre como a WAI W3C desenvolve material por meio da participação internacional de várias partes interessadas e como você pode contribuir, consulte [[Sobre a WAI W3C]](/about/) e [[Participando da WAI]](/about/participating/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Tornando seu site acessível {#website}

Muitos aspectos da acessibilidade são relativamente fáceis de entender e implementar. Algumas soluções de acessibilidade são mais complexas e exigem mais conhecimento para serem implementadas.

É mais eficiente e eficaz incorporar a acessibilidade desde o início dos projetos, para que você não precise voltar e refazer o trabalho.

{::nomarkdown}
{% include box.html type="start" h="3" title="Mais informações sobre como tornar seu site acessível" class="simple aside" %}
{:/}

-   Para uma introdução aos requisitos de acessibilidade e padrões internacionais, consulte [[Princípios de acessibilidade]](/fundamentals/accessibility-principles/).
-   Para entender algumas barreiras comuns de acessibilidade da perspectiva de testes, consulte [[Verificações fáceis – Uma primeira revisão da acessibilidade web]](/test-evaluate/preliminary/).
-   Para algumas considerações básicas sobre design, escrita e desenvolvimento para acessibilidade, consulte [[Dicas para começar]](/tips/).
-   Quando precisar saber mais sobre desenvolvimento e design, você provavelmente usará recursos como:
    -   [Como atender às WCAG (Referência rápida)](https://www.w3.org/WAI/WCAG22/quickref/)
    -   [Tutoriais de acessibilidade web](/tutorials/)
-   Para considerações organizacionais e de gerenciamento de projetos, consulte [[Planejamento e gerenciamento da acessibilidade web]](/planning-and-managing/).<br>
    Se precisar fazer correções rápidas agora, consulte [[Abordagens para Reparos Provisórios]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}
	
## Avaliando a acessibilidade {#evaluate}

Ao desenvolver ou redesenhar um site, avalie a acessibilidade no início e durante todo o processo de desenvolvimento para identificar problemas de acessibilidade no início, quando é mais fácil lidar com eles. Etapas simples, como alterar as configurações em um navegador, podem ajudar a avaliar alguns aspectos da acessibilidade. A avaliação abrangente para determinar se um site atende a todas as diretrizes de acessibilidade exige mais esforço.

Existem ferramentas de avaliação que ajudam na avaliação. No entanto, nenhuma ferramenta sozinha pode determinar se um site atende às diretrizes de acessibilidade. É necessária uma avaliação de uma pessoa experiente para determinar se um site é acessível.


{::nomarkdown}
{% include box.html type="start" h="3" title="Mais informações sobre avaliação de acessibilidade" class="simple aside" %}
{:/}

-   Os recursos para ajudar na avaliação de acessibilidade são descritos em [[Avaliando sites para acessibilidade]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Exemplos

{% include excol.html type="middle" %}

### Texto alternativo para imagens

![imagem do logotipo; marcação HTML img alt='Logotipo da Iniciativa de Acessibilidade Web'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

As imagens devem incluir *[texto alternativo equivalente](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (texto alternativo) na marcação/código.

Se o texto alternativo não for fornecido para as imagens, as informações da imagem ficarão inacessíveis, por exemplo, para pessoas que não conseguem ver e usam um leitor de tela que lê em voz alta as informações em uma página, incluindo o texto alternativo para a imagem visual.

Quando o texto alternativo equivalente é fornecido, as informações ficam disponíveis para pessoas cegas, bem como para pessoas que desabilitam as imagens (por exemplo, em áreas com largura de banda cara ou baixa). Também estão disponíveis para tecnologias que não conseguem ver imagens, como mecanismos de busca.

### Entrada de teclado

![mouse riscado](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Algumas pessoas não conseguem usar um mouse, incluindo muitas pessoas usuárias mais velhas com controle motor refinado limitado. Um site acessível não depende do mouse; ele [disponibiliza todas as funcionalidades a partir de um teclado](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible). Então, pessoas com deficiência podem usar [tecnologias assistivas](/planning/involving-users/#at) que imitam o teclado, como entrada de voz.

### Transcrições para áudio

[![exemplo de transcrição](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Assim como as imagens não estão disponíveis para pessoas que não conseguem ver, os arquivos de áudio não estão disponíveis para pessoas que não conseguem ouvir. Fornecer uma transcrição de texto torna as informações do áudio acessíveis a pessoas surdas ou com deficiência auditiva, bem como para mecanismos de busca e outras tecnologias que não conseguem ouvir.

É fácil e relativamente barato para sites fornecerem transcrições. Também existem [serviços de transcrição](http://www.uiaccess.com/transcripts/transcript_services.html) que criam transcrições de texto em formato HTML.

{::nomarkdown}
{% include box.html type="start" h="3" title="Mais exemplos" class="simple aside" %}
{:/} 

-   [[Dicas para começar]](/tips/)
-   [[Verificações fáceis – Uma primeira revisão]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Perspectivas da acessibilidade web &mdash; vídeos e descrições" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Para mais informações {#more-info}

A WAI W3C fornece uma ampla gama de recursos sobre diferentes aspectos dos [padrões](/standards-guidelines/) de acessibilidade web, [educação](/teach-advocate/), [testes/avaliação](/test-evaluate/), [gerenciamento de projetos e política](/planning/). Nós encorajamos você a explorar este site ou a consultar a lista de [recursos da WAI](/resources/).

**[[O curso online gratuito Fundamentos de Acessibilidade Digital]](/courses/foundations-course/)** fornece a base necessária para tornar sua tecnologia digital acessível.
