---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: Uma árvore de decisão do atributo alt
title_html: Uma árvore de decisão do atributo <code>alt</code>
lang: pt-BR
last_updated: 2024-05-13  # Keep the date of the English version

translation:
  last_updated: 2024-11-06  # Put the date of the translation YYYY-MM-DD (with month in the middle)

translators:
  - name: Adiel Cristo

github:
  label: wai-tutorials

resource:
  ref: /tutorials/images/  # Do not change this

navigation:
  previous: /tutorials/images/imagemap/  # Do not change this
  next: /tutorials/images/tips/  # Do not change this

permalink: /tutorials/images/decision-tree/pt-BR # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /tutorials/images/decision-tree/ # Do not change this

changelog: /tutorials/changelog/

# In the footer below:
# Translate the Working Group name. Leave the Working Group acronym in English.
metafooter: true
editors:
  - Eric Eggert: "https://www.w3.org/People/yatil/"
  - Shadi Abou-Zahra: "https://www.w3.org/People/shadi/"
update_editors:
  - Brian Elton
contributing_participants:
  - consulte <a href="/WAI/tutorials/acknowledgements/">Agradecimentos</a>
support: Desenvolvido pelo Grupo de Trabalho de Educação e Extensão (<a href="https://www.w3.org/groups/wg/eowg">EOWG</a>). Desenvolvido com o apoio do <a href="https://www.w3.org/WAI/ACT/">projeto WAI-ACT</a>, cofinanciado pelo <strong>Programa <abbr title="Tecnologias da Sociedade da Informação">IST</abbr> da Comissão Europeia</strong>.

# Read Translations Notes for this resource at https://github.com/w3c/wai-tutorials#readme
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Visão geral" class="full" %}
{:/}

Esta árvore de decisão descreve como usar o atributo `alt` do elemento `<img>` em várias situações. Para alguns tipos de imagens, há abordagens alternativas, como usar imagens de fundo CSS para imagens decorativas ou fontes web em vez de imagens de texto.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

- **A imagem contém texto?**
  - {:.yes} **Sim:**
    - **… e o texto também está presente como texto *real* próximo.**
      _Use um atributo `alt` vazio. Consulte [Imagens decorativas](/tutorials/images/decorative/)._
    - **… e o texto é mostrado apenas para efeitos visuais.**
      _Use um atributo `alt` vazio. Consulte [Imagens decorativas](/tutorials/images/decorative/)._
    - **… e o texto tem uma função específica, por exemplo, é um ícone.**
      _Use o atributo `alt` para comunicar a função da imagem. Consulte [Imagens funcionais](/tutorials/images/functional/)._
    - **… e o texto na imagem não está presente de outra forma.**
      _Use o atributo `alt` para incluir o texto da imagem. Consulte [Imagens de texto](/tutorials/images/textual/#styled-text-decorative-effect)._
  - {:.no} **Não:**
    - Continue.
- **A imagem é usada em um link ou botão e seria difícil ou impossível entender o que o link ou o botão faz se a imagem não estivesse lá?**
  - {:.yes} **Sim:**
    - _Use o atributo `alt` para comunicar o destino do link ou a ação tomada. Consulte [Imagens funcionais](/tutorials/images/functional/)._
  - {:.no} **Não:**
    - Continue.
- **A imagem contribui com significado para a página ou contexto atual?**
  - {:.yes} **Sim:**
    - **… e é um gráfico ou fotografia simples.**
      _Use uma breve descrição da imagem de uma forma que transmita esse significado no atributo `alt`. Consulte [Imagens informativas](/tutorials/images/informative/)._
    - **… e é um gráfico ou informação complexa.**
      _Inclua as informações contidas na imagem em outro lugar da página. Consulte [Imagens complexas](/tutorials/images/complex/)._
    - **… e mostra conteúdo redundante do texto *real* próximo.**
      _Use um atributo `alt` vazio. Consulte [Imagens funcionais](/tutorials/images/functional/#logo-image-within-link-text) (redundantes)._
  - {:.no} **Não:**
    - Continue.
- **A imagem é puramente decorativa ou não é destinada às pessoas usuárias?**
  - {:.yes} **Sim:**
    - _Use um atributo `alt` vazio. Consulte [Imagens decorativas](/tutorials/images/decorative/)._
  - {:.no} **Não:**
    - Continue.
- **O uso da imagem não está listado acima ou não está claro qual texto o atributo `alt` deveria fornecer?**
  - {:.yes} Esta árvore de decisão **não** abrange todos os casos. Para obter informações detalhadas sobre o fornecimento de alternativas de texto, consulte os [[Tutoriais de imagens]](/tutorials/images/).
{:.decision-tree}
