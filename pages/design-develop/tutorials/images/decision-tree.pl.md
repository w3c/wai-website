---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Drzewo decyzyjne alt"
title_html: "Drzewo decyzyjne <code>alt</code>"
lang: pl
last_updated: 2024-05-13  # Keep the date of the English version

translation:
  last_updated: 2024-06-22  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:
  - name: "Stefan Wajda"

github:
  label: wai-tutorials

resource:
  ref: /tutorials/images/  # Do not change this

navigation:
  previous: /tutorials/images/imagemap/  # Do not change this
  next: /tutorials/images/tips/  # Do not change this

permalink: /tutorials/images/decision-tree/pl # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
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
  - zobacz <a href="/WAI/tutorials/acknowledgements/">Podziękowania</a>
support: Opracowane przez Grupę Roboczą Edukacji i Promocji (<a href="https://www.w3.org/groups/wg/eowg">EOWG</a>). Opracowane przy wsparciu <a href="https://www.w3.org/WAI/ACT/"> projektu WAI-ACT</a>, współfinansowanego przez <strong>European Commission  Program <abbr title="Technologie Społeczeństwa Informacyjnego">IST</abbr> Komisji Europejskiej</strong>.

# Read Translations Notes for this resource at https://github.com/w3c/wai-tutorials#readme
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Podsumowanie" class="full" %}
{:/}

To drzewo decyzyjne opisuje, jak w różnych sytuacjach używać atrybutu `alt` w elemence `<img>`. W przypadku niektórych typów obrazów istnieją alternatywne podejścia, takie jak użycie obrazów tła CSS do obrazów dekoracyjnych lub czcionek internetowych zamiast obrazów tekstu.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

- **Czy obraz zawiera tekst?**
  - {:.yes} **Tak:**
    -   **…  i tekst istnieje także w pobliżu jako *rzeczywisty* tekst.**
      _Użyj pustego atrybutu  `alt`. Zobacz [Obrazy dekoracyjne](/tutorials/images/decorative/)._
    -   **… i tekst jest wyświetlany tylko dla efektu wizualnego.**
      _Użyj pustego atrybutu  `alt`. Zobacz [Obrazy dekoracyjne](/tutorials/images/decorative/)._
    -   **… i tekst ma określoną funkcję, na przykład jest ikoną.**
      _Użyj atrybutu `alt`, aby przekazać funkcję obrazu. Zobacz [Obrazy funkcjonalne](/tutorials/images/functional/)._
    -   **…  i tekst na obrazie nie istnieje w innym miejscu.** _Użyj atrybutu `alt`, aby przekazać tekst obrazu. Zobacz [Obrazy tekstu](/tutorials/images/textual/#styled-text-decorative-effect)._
  - {:.no} **Nie:**
    - Kontynuuj.
- **Czy obraz jest używany w łączu lub przycisku oraz czy gdyby obraz został usunięty, zrozumienie, co robi łącze lub przycisk byłoby trudne lub niemożliwe?**
  - {:.yes} **Tak:**
    - _Użyj atrybutu `alt`, aby podać cel łącza lub  cel akcji. Zobacz [Obrazy funkcjonalne](/tutorials/images/functional/)._
  - {:.no} **Nie:**
    - Kontynuuj.
- **Czy obraz ma istotne znaczenie dla bieżącej strony lub kontekstu?**
  - {:.yes} **Tak:**
    - **…  i jest to prosta grafika lub zdjęcie.**
      _Użyj atrybutu `alt`, aby podać krótki opisu obrazu w sposób, który oddaje to znaczenie. Zobacz [Obrazy informacyjne](/tutorials/images/informative/)._
    - **… jest to wykres lub złożona cząstka informacyjna.**
      _Przedstaw informacje zawarte w obrazie w innym miejscu strony. Zobacz [Obrazy złożone](/tutorials/images/complex/)._
    - **… i pokazuje treść, która jest zbędna w stosunku do *rzeczywistego* tekstu w pobliżu.**
      _Użyj pustego atrybutu `alt`. Zobacz (nadmiarowe) [Obrazy funkcjonalne](/tutorials/images/functional/#logo-image-within-link-text)._
  - {:.no} **Nie:**
    - Kontynuuj.
- **Czy obraz jest czysto dekoracyjny lub nie jest skierowany do użytkowników?**
  - {:.yes} **Tak:**
    - _Użyj pustego atrybutu `alt`. Zobacz [Obrazy dekoracyjne](/tutorials/images/decorative/)._
  - {:.no} **Nie:**
    - Kontynuuj.
- **Czy przeznaczenie obrazu nie zostało wymienione powyżej lub nie jest jasne, jaki tekst alt należy podać?**
  - {:.yes} To drzewo decyzyjne **nie obejmuje** wszystkich przypadków. Szczegółowe informacje na temat zapewniania alternatyw tekstowych znajdują się na na stronie [[Samouczek Obrazy]](/tutorials/images/).
{:.decision-tree}

