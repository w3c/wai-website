---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: Omówienie narzędzi oceny
lang: pl  # Change "en" to the translated-language shortcode
last_updated: 2020-04-28 # Keep the date of the English version

translation:
  last_updated: 2024-08-08  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Stefan Wajda" # Add one -name: line for every translator

contributors:
- name: "Michał Sobkowiak"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-evaluation-tools

permalink: /test-evaluate/tools/pl  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /test-evaluate/tools/  # Do not change this

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group and projects names. Leave the Working Group and projects acronyms in English.
footer: >
  <p>Uwaga dotycząca opisu wideo: Wideo na tej stronie nie zawiera zsynchronizowanej audiodeskrypcji, ponieważ obrazy jedynie ilustrują dźwięk i nie dostarczają dodatkowych informacji. W tym przypadku audiodeskrypcja byłaby bardziej rozpraszająca niż przydatna dla większości osób, w tym osób, które nie widzą elementów wizualnych. Opis informacji wizualnych jest zintegrowany w transkrypcji z opisem wizualnym („transkrypcja opisowa”).</p>
   <p><strong>Data:</strong> Aktualizacja 28 kwietnia 2020.</p>
   <p><strong>Redakcja:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Film opracowany przez Grupę Roboczą ds. Edukacji i Promocji (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>) przy wsparciu projektu <a href="https://www.w3.org/WAI/about/projects/wai-guide/">WAI-Guide</a> finansowanego przez Komisję Europejską (KE) w ramach programu Horyzont 2020 (Umowa o dotację 822245).</p>
---

Narzędzia do oceny dostępności cyfrowej to programy lub usługi online, które pomagają określić, czy treść internetowa spełnia standardy dostępności.

<div class="video-card" id="video-intro">
  {% include video-player-data.html
      video-id="tools-for-evaluating"
      yt-id="bn1XJSjc_qM"
  %}
  <p><a href="#alternatives">Transkrypcja filmu „Omówienie narzędzi oceny” </a></p>
</div>

[Lista narzędzi oceny dostępności cyfrowej](/test-evaluate/tools/list/)
:   Zawiera informacje na temat ponad 100 narzędzi. Możesz skorzystać z filtrów, aby zawęzić listę do typów narzędzi, które Cię interesują.

[[Wybór narzędzi oceniających dostępność cyfrową]](/test-evaluate/tools/selecting/)
:   Zawiera wskazówki dotyczące wyboru narzędzi. Opisuje cechy i funkcjonalność różnych typów narzędzi oceny oraz omawia kwestie, które należy wziąć pod uwagę w konkretnej sytuacji.

Powiązane materiały przedstawiono w: [[Omówienie oceniania dostępności internetowej]](/test-evaluate/)

<hr>

{% include excol.html type="start" id="video-intro-transcript" %}

##  Omówienie narzędzi diagnostycznych {#alternatives}

{% include excol.html type="middle" %}

_Ten film jest również dostępny na serwerze W3C: [Wideo: Omówienie narzędzi oceny (format pliku: MP4, rozmiar pliku: 51MB MB)](https://media.w3.org/wai/evaluation-intros/tools-for-evaluating.mp4)._

###  Transkrypcja tekstowa z opisem elementów wizualnych dla filmu Wybór i stosowanie narzędzi oceny {#transcript}

Filmy zawierają podstawową animację ilustrującą to, co mówi głos spoza ekranu. Ludzie są przedstawieni za pomocą symboli graficznych.

<table>
  <thead>
    <tr>
      <th width="50%">Dźwięk</th>
      <th>Obraz</th>
    </tr>
  </thead>
<tbody>
  <tr>
    <td>Narzędzia oceny dostępności cyfrowej</td>
    <td>Narzędzia oceny dostępności cyfrowej</td>
  </tr>
  <tr>
    <td>Istnieją programy i usługi internetowe, które pomogą Ci rozpoznać problemy z dostępnością.</td>
    <td>Otwiera się skrzynka narzędziowa przy komputerze. Pojawia się szkło powiększające ze słowem „dostępność”, aby sprawdzić stronę internetową na komputerze.
	
	</td>
  </tr>
  <tr>
    <td>Mogą one zaoszczędzić wiele czasu i wysiłku podczas oceny oraz zapobiec powstawaniu nowych barier dostępności.</td>
    <td>Oszczędzaj czas i wysiłek. Unikaj barier dostępności.</td>
  </tr>
  <tr>
    <td>Jednak narzędzia nie mogą zrobić wszystkiego. Niektórych testów dostępności po prostu nie można zautomatyzować i muszą być przeprowadzone ręcznie.</td>
    <td>Osoba obok komputera ze stroną internetową używa lupy ze słowem „dostępność”.
	</td>
  </tr>
  <tr>
    <td>Niektóre narzędzia poprowadzą Cię przez te testy, których nie można zautomatyzować.</td>
    <td>Lista kontrolna obok komputera.</td>
  </tr>
  <tr>
    <td>Niektóre narzędzia sprawdzają tylko jedną stronę na raz, inne mogą sprawdzać całe witryny.</td>
    <td>Strona internetowa i witryna internetowa są skanowane. Wyświetlane są znaczniki niepowodzenia, powodzenia i ostrzeżenia.
	
	</td>
  </tr>
  <tr>
    <td>Narzędzia można integrować z różnymi środowiskami pracy. Na przykład z przeglądarką internetową, systemem zarządzania treścią (C-M-S) oraz w narzędziach programistycznych i wdrożeniowych.</td>
    <td>Słowa „Przeglądarka internetowa”, „CMS” i „środowisko wdrożeniowe” wokół ikony narzędzi wyświetlanej na komputerze.</td>
  </tr>
  <tr>
    <td>Wspierają różne role w zespole projektowym, takie jak autorów treści, twórców kodu, projektantów oraz właścicieli produktów.</td>
    <td>Ikona narzędzi jest otoczona ikonami: długopisu, kodu, pędzla i osoby z kluczem.</td>
  </tr>
  <tr>
    <td>Trzeba pamiętać, że w niektórych przypadkach narzędzia mogą dawać nieprawidłowe wyniki.</td>
    <td>Lupa powiększa trójkątny znak z wykrzyknikiem. Wyświetlanych jest wiele lup. </td>
  </tr>
  <tr>
    <td>Dlatego nie polegaj nadmiernie na tym, co mówią narzędzia w stosunku do tego, jakie są rzeczywiste doświadczenia osób korzystających z Twojej witryny.</td>
    <td>Ekran dzieli się na 12 pól, w każdym inna osoba przed komputerem.</td>
  </tr>
  <tr>
    <td>„Wybór narzędzi oceny dostępności cyfrowej” wyjaśnia, co narzędzia mogą, a czego nie mogą zrobić, oraz na co zwrócić uwagę, aby znaleźć narzędzia spełniające Twoje potrzeby.</td>
    <td>Wybór narzędzi oceny dostępności cyfrowej. Pojawia się ikona skrzynki narzędziowe, następnie drogowskazu i lornetki.</td>
  </tr>
  <tr>
    <td>„Lista narzędzi oceny dostępności cyfrowej” zawiera filtry, które pomogą Ci znaleźć odpowiednie narzędzie dla Twojej konkretnej sytuacji.</td>
    <td>Wiele dokumentów ze słowem Narzędzia przewija się w dół do ikony filtra, z którego wychodzą tylko dwa dokumenty.</td>
  </tr>
  <tr>
    <td>Z narzędziami i wiedzą, jak z nich korzystać, masz dobrą podstawę, aby skutecznie znajdować problemy z dostępnością.</td>
    <td>Osoba, przy niej ikony narzędzi i żarówki. Ikony łączą się ze sobą, tworząc lupę ze słowem „bariery”.</td>
  </tr>
  <tr>
    <td>Dostępność internetowa: niezbędna dla niektórych, przydatna dla wszystkich.</td>
    <td>Wokół komputera układają się ikony: ręki, oka, mózgu, ucha i ust z falą dźwiękową.</td>
  </tr>
  <tr>
    <td>Aby uzyskać więcej informacji o narzędziach oceny dostępności, odwiedź stronę w3.o-r-g/W-A-I/evaluation.</td>
    <td>Narzędzia oceny, logo W3C i Inicjatywy na Rzecz Dostępności Internetu (WAI).</td>
  </tr>
</tbody>
</table>

{% include excol.html type="end" %}

