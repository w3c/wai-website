---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Teks-ke-Ucapan"
nav_title: "Teks-ke-Ucapan"
lang: id    # Change "en" to the translated-language shortcode
last_updated: 2023-11-21    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 4

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

permalink: /perspective-videos/speech/id  # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/speech/    # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Video singkat tentang teks-ke-ucapan untuk aksesibilitas web - apa itu, siapa yang membutuhkannya, dan apa yang perlu dilakukan agar bekerja dengan semestinya.
image: /perspective-videos/img/speech.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Diperbarui 23 Januari 2019.</p>
   <p><strong>Editor dan pimpinan proyek:</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. ACKNOWLEDGEMENTS daftar kontributor.</p>
   <p>Dikembangkan oleh Kelompok Kerja Edukasi dan Pendampingan (<a href="http://www.w3.org/WAI/EO/">EOWG</a>). Dikembangkan sebagai bagian dari <a href="https://www.w3.org/WAI/DEV/">proyek WAI-DEV</a>, didanai bersama oleh European Commission. Diperbarui sebagai bagian dari <a href="https://www.w3.org/WAI/DEV/">Proyek Perluasan Akses WAI</a>, didukung oleh Ford Foundation.</p>

# Read Translations Notes for this resource at https://github.com/w3c/wai-perspective-videos#readme
---

Aksesibilitas web sangat penting bagi penyandang disabilitas dan bermanfaat bagi semua orang. Pelajari tentang dampak aksesibilitas dan manfaatnya bagi semua orang dalam berbagai situasi.

## Video tentang Teks-ke-Ucapan
{:#film.no-display}

{% include video-player-data.html
    yt-id="8Rn5pXCdZWU"
    yt-id-ad="F3A1VffiOH4"
    path="/perspective-videos/cc/"
    lang-folder=true
    vtt-data-location="wai-perspective-videos"
    vtt-name="speech"
%}

Informasi video ini tersedia sebagai [Transkripsi dan Deskripsi Visual](#transcript) di bawah.

Apa itu "Teks-ke-Ucapan"? {#what}
-------------------------

Banyak komputer dan perangkat seluler saat ini telah dilengkapi perangkat lunak teks-ke-ucapan. Beberapa penyandang disabilitas, termasuk penyandang disabilitas netra, menggunakan perangkat lunak khusus yang disebut pembaca layar. Pembaca layar menyediakan fungsionalitas penting seperti menavigasi judul, mengucapkan alternatif gambar, dan mengidentifikasi tautan internal dan eksternal. Mereka juga dapat menyorot teks saat dibacakan agar pengguna bisa melihat dan mendengar kontennya pada saat yang bersamaan. Konten harus diberi kode dengan benar sehingga semua fungsi perangkat lunak teks-ke-ucapan berfungsi pada konten tersebut.

Siapa yang membutuhkan fitur ini? {#who}
----------------------------

-   Penyandang disabilitas netra dan tidak dapat melihat apa yang ada di layar.
-   Penyandang rabun akut (seringkali disabilitas netra secara hukum) dan tidak dapat melihat jenis konten tertentu.
-   Penyandang disleksia dan disabilitas kognitif dan kesulitan belajar lainnya yang perlu mendengar dan melihat teks bersamaan untuk lebih memahaminya.

Apa manfaat lainnya? {#others}
---------------------------------

-   Konten dapat dibacakan dengan lantang bagi orang yang tidak bisa membaca tulisan.
-   Konten dapat dibacakan untuk orang yang lebih memilih untuk mendengarkan, misalnya sambil melakukan beberapa kegiatan sekaligus.

Apa yang perlu dilakukan agar ini bekerja dengan baik? {#action}
--------------------------------------

Gunakan markah HTML semantik untuk struktur seperti judul, paragraf, daftar, formulir, dan tabel. Memberikan alternatif teks untuk gambar, ikon, dan konten nonteks lainnya. Pastikan [kompatibilitas kibor](/perspective-videos/keyboard/), dan pastikan informasi teks dapat dimengerti tanpa konteks visualnya.

Pelajari lebih lanjut {#resources}
----------

-   **Prinsip Aksesibilitas:**
    -   [Alternatif teks untuk konten nonteks](/fundamentals/accessibility-principles/#alternatives)
    -   [Konten bisa disajikan dengan berbagai cara](/fundamentals/accessibility-principles/#adaptable)
-   **Memulai:**
    -   [Tulis Alternatif teks yang bermakna untuk gambar](/tips/writing/#write-meaningful-text-alternatives-for-images)
    -   [Gunakan judul untuk menyampaikan makna dan struktur](/tips/writing/#use-headings-to-convey-meaning-and-structure)
    -   [Identifikasi bahasa pada halaman dan perubahan bahasa](/tips/developing/#identify-page-language-and-language-changes)
-   **Pengecekan Sederhana:**
    -   [Alternatif teks gambar ("alt text")](/test-evaluate/preliminary/#images)
    -   [Pengecekan Struktur Dasar](/test-evaluate/preliminary/#structure)
-   **Kisah Pengguna:**
    -   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
    -   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)
    -   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   **[Gambaran Umum Pedoman Aksesibilitas Konten Web (WCAG)](/standards-guidelines/wcag/):**
    -   [Kriteria Sukses terkait "gambar" dan "struktur"](https://www.w3.org/WAI/WCAG21/quickref/?tags=images%2Cstructure)
-   **Penerapan pada Perangkat Seluler:**
    -   [Objek nonteks (gambar, suara, video) tanpa Alternatif teks](/standards-guidelines/shared-experiences/#non-text)
    -   [Informasi disampaikan hanya melalui CSS (format visual)](/standards-guidelines/shared-experiences/#visual-formatting)
    -   [Label tautan yang tidak descriptif](/standards-guidelines/shared-experiences/#link-label)
-   **Tutorial:**
    -   [Tutorial Aksesibilitas Web](/tutorials/)
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
      <td>Perspektif Aksesibilitas Web: Teks-ke-Ucapan</td>
      <td>Perspektif Aksesibilitas Web:<br>
        Teks-ke-Ucapan</td>
    </tr>
    <tr>
      <td>(Komputer) &quot;Beberapa orang tidak dapat melihat teks di layar ini.&quot;<br>
(Komputer)                     &quot;Untungnya, komputer dapat mengkonversi teks ke suara.&quot;</td>
      <td>Seorang pria menggunakan laptop dengan teks tersorot pada layar seraya diucapkan.</td>
    </tr>
    <tr>
      <td>Teknologi ini diandalkan oleh banyak penyandang disabilitas netra selama bertahun-tahun.</td>
      <td>Seekor anjing penjaga ada di sebelah pria itu. Dia mungkin penyandang disabilitas netra.</td>
    </tr>
    <tr>
      <td>Namun hal ini juga penting bagi banyak penderita disleksia.</td>
      <td>Seorang wanita sedang membaca di tablet dan mendengarkan dengan <i>headphone</i>.</td>
    </tr>
    <tr>
      <td>Dan sangat berguna bagi orang yang kesulitan membaca teks.</td>
      <td>Seorang pria melepas kacamatanya dan mendengarkan artikel berita di tabletnya.</td>
    </tr>
    <tr>
      <td>Begitu pula dengan sebagian orang yang gemar melakukan beberapa kegiatan sekaligus.</td>
      <td>Seorang pria mendengarkan artikel majalah saat mencuci.</td>
    </tr>
    <tr>
      <td>Namun agar ini bisa bekerja, situs web dan aplikasi perlu dikode dengan benar.</td>
      <td>Situs web tidak berfungsi dengan baik untuk wanita yang memakai <i>headphone</i>. Dia tampak kesal.</td>
    </tr>
    <tr>
      <td>Yang memiliki manfaat tambahan membantu mesin pencarian mengindeks konten situs web tersebut dengan lebih baik.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Aksesibilitas web: Penting bagi sebagian orang, berguna bagi semua orang.</td>
      <td>Pria dengan anjing penolong menggunakan perangkat selulernya di luar dengan <i>headphone</i> konduksi tulang. Orang yang berbeda dari sebelumnya terlihat menggunakan teknologi teks-ke-ucapan.</td>
    </tr>
    <tr>
      <td>Kunjungi w3.org/WAI/perspectives untuk informasi lebih lanjut terkait Teks-ke-Ucapan</td>
      <td>Kunjungi<br>
        w3.org/WAI/perspectives<br>
        untuk informasi lebih lanjut terkait<br>
        Teks-ke-Ucapan. <br>
        Logo Inisiatif Aksesibilitas Web W3C</td>
    </tr>
  </tbody>
</table>
