---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Kompatibilitas dengan Kibor"
nav_title: "Kompatibilitas dengan Kibor"
lang: id    # Change "en" to the translated-language shortcode
last_updated: 2023-11-21    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 1

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

permalink: /perspective-videos/keyboard/id    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/keyboard/  # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Video singkat tentang kompatibilitas dengan kibor untuk aksesibilitas web - apa itu, siapa yang membutuhkannya, dan apa yang perlu dilakukan agar bekerja dengan semestinya.
image: /perspective-videos/img/keyboard.jpg
teaser_text: Semua fungsionalitas harus dapat digunakan melalui kibor. Artinya, pengguna dapat mengakses tautan, tombol, formulir, dan kontrol lainnya menggunakan tombol Tab dan tombol lainnya. Situs web seharusnya tidak memerlukan tetikus. Aksesibilitas kibor sangat penting bagi penyandang disabilitas dan bermanfaat bagi semua orang dalam berbagai situasi.

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Status:</strong> Diperbarui 23 Januari 2019. <br><strong>Editor dan pimpinan proyek:</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Dikembangkan oleh <a href="https://www.w3.org/WAI/EO/">Kelompok Kerja Edukasi dan Pendampingan (EOWG)</a> dengan dukungan dari <a href="https://www.w3.org/WAI/DEV/">proyek WAI-DEV</a>, didanai bersama oleh Komisi Eropa. Diperbarui dengan dukungan dari Ford Foundation. ACKNOWLEDGEMENTS.</p>

# Read Translations Notes for this resource at https://github.com/w3c/wai-perspective-videos#readme
---

Aksesibilitas web sangat penting bagi penyandang disabilitas dan bermanfaat bagi semua orang. Pelajari tentang dampak aksesibilitas dan manfaatnya bagi semua orang dalam berbagai situasi.

## Video tentang Kompatibilitas dengan Kibor
{:#film.no-display}

{% include video-player-data.html
    yt-id="93UgG72os8M"
    yt-id-ad="1rBwxGMT9ZM"
    path="/perspective-videos/cc/"
    lang-folder=true
    vtt-data-location="wai-perspective-videos"
    vtt-name="keyboard"
%}

Informasi video ini tersedia sebagai [Transkripsi dan Deskripsi Visual](#transcript) di bawah.

## Apa itu "Kompatibilitas dengan Kibor"?
{:#what}

Semua fungsionalitas harus dapat digunakan dengan kibor. Artinya, pengguna dapat mengakses dan berpindah antar tautan, tombol, formulir, dan kontrol lainnya menggunakan tombol Tab dan tombol lainnya. Situs web seharusnya tidak memerlukan tetikus; misalnya, pengguna seharusnya bisa mengetikkan tanggal pada sembulan kalender.

## Siapa yang membutuhkan fitur ini?
{:#who}

-   Penyandang disabilitas fisik yang tidak bisa menggunakan tetikus.
-   Penyandang disabilitas netra, dan yang tidak dapat melihat penunjuk tetikus pada layar.
-   Orang dengan kondisi kronis, seperti cedera regangan berulang (RSI), yang perlu membatasi atau menghindari penggunaan tetikus.

## Apa manfaat lainnya?
{:#others}

-   Konten berfungsi untuk orang-orang dengan keterbatasan sementara, seperti lengan patah atau saat tetikus miliknya rusak.

## Apa yang perlu dilakukan agar ini bekerja dengan baik?
{:#action}

Kontrol HTML natif, seperti tautan, tombol, dan elemen isian, dapat berfungsi dengan kibor secara bawaan dan harus digunakan jika memungkinkan. Kontrol yang dirancang khusus, format tampilan CSS, dan skrip yang mengontrol interaksi mungkin memerlukan kode tambahan untuk memastikan kompatibilitas dengan kibor. Pastikan urutan tab logis, untuk memungkinkan navigasi kibor di seputar konten dan kontrolnya. Sediakan cara bagi pengguna untuk berpindah antara blok konten dan kontrol. Masalah terkait kibor utamanya terjadi pada isian, menu, dan aplikasi yang memiliki banyak kontrol.

## Pelajari lebih lanjut
{:#resources}

-   **Prinsip Aksesibilitas:**
    -   [Fungsionalitas tersedia melalui Kibor](/fundamentals/accessibility-principles/#keyboard)
-   **Memulai:**
    -   [Pastikan semua elemen interaktif dapat diakses melalui kibor](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
-   **Pengecekan Sederhana:**
    -   [Akses kibor dan fokus visual](/test-evaluate/preliminary/#interaction)
-   **User Story:**
    -   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
    -   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
    -   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)
-   **[Gambaran Umum Pedoman Aksesibilitas Konten Web (WCAG)](/standards-guidelines/wcag/):**
    -   [Kriteria Sukses terkait "kibor"](https://www.w3.org/WAI/WCAG21/quickref/?tags=keyboard)
-   **Penerapan pada Perangkat Seluler:**
    -   [Tetikus dibutuhkan untuk interaksi dan navigasi](/standards-guidelines/shared-experiences/#mouse)
-   **Tutorial:**
    -   [Tutorial Aksesibilitas Web](https://www.w3.org/WAI/tutorials/)
        (beberapa topik terkait)

## Transkripsi dan Deskripsi Visual {#transcript}

<table>
  <thead>
    <tr>
      <th width="65%">Audio</th>
      <th>Visual</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Perspektif Aksesibilitas Web: Kompatibilitas dengan Kibor</td>
      <td>Perspektif Aksesibilitas Web:<br>
        Kompatibilitas dengan Kibor</td>
    </tr>
    <tr>
      <td>Tidak bisa menggunakan komputer karena tetikus Anda tidak berfungsi memang mengesalkan.</td>
      <td>Seorang pria menjatuhkan tetikus komputernya dari meja. Tetikus komputer tersebut tidak lagi berfungsi.</td>
    </tr>
    <tr>
      <td>Banyak orang hanya menggunakan kibor untuk menavigasi situs-situs web &mdash; baik karena preferensi atau pun keadaan.<br></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Entah itu keterbatasan mobilitas sementara,</td>
      <td>Seorang wanita yang menggunakan gendongan lengan sedang mengetik di kibor &mdash; namun situs web memerlukan penggunaan tetikus untuk memilih tanggal.</td>
    </tr>
    <tr>
      <td>disabilitas fisik permanen,</td>
      <td>Seorang pria berkursi roda menggunakan tongkat mulut untuk mengetik.</td>
    </tr>
    <tr>
      <td>atau sekadar karena tetikusnya sedang rusak,<br>
        hasil akhirnya sama:</td>
      <td>Pria berkursi roda juga tidak dapat menggunakan situs tersebut.</td>
    </tr>
    <tr>
      <td>Situs web dan aplikasi harus dapat dioperasikan dengan keyboard.</td>
      <td>Dia beralih ke situs web lain yang memungkinkan pengetikan tanggal.</td>
    </tr>
    <tr>
      <td>Aksesibilitas web: Penting bagi sebagian orang, berguna bagi semua orang.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Kunjungi w3.org/WAI/perspectives untuk informasi lebih lanjut terkait Kompatibilitas dengan Kibor</td>
      <td>Visit<br>
        w3.org/WAI/perspectives<br>
        untuk informasi lebih lanjut terkait<br>
        Kompatibilitas dengan Kibor.<br>
        Logo Inisiatif Aksesibilitas Web W3C</td>
    </tr>
  </tbody>
</table>
