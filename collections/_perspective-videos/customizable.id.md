---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Teks yang Dapat Disesuaikan"
nav_title: "Teks yang Dapat Disesuaikan"
lang: id    # Change "en" to the translated-language shortcode
last_updated: 2023-11-20    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 7

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

permalink: /perspective-videos/customizable/id    # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/customizable/  # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Video singkat tentang teks yang dapat disesuaikan untuk aksesibilitas web - apa itu, siapa yang membutuhkannya, dan apa yang perlu dilakukan agar bekerja dengan semestinya.
image: /perspective-videos/img/customizable.jpg

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

## Video tentang Teks yang Dapat Disesuaikan
{:#film.no-display}

{% include video-player-data.html
    yt-id="rbiI65Jcz5s"
    yt-id-ad="L4WLeVc5l5k"
    path="/perspective-videos/cc/"
    lang-folder=true
    vtt-data-location="wai-perspective-videos"
    vtt-name="customizable"
%}

Informasi video ini tersedia sebagai [Transkripsi dan Deskripsi Visual](#transcript) di bawah.

Apa itu "Teks yang Dapat Disesuaikan"? {#what}
----------------------------

Beberapa pengguna perlu bisa mengubah bagaimana teks ditampilkan agar
mereka dapat membaca teks tersebut. Ini termasuk mengubah ukuran, spasi, fon, warna, dan properti teks lainnya. Saat pengguna mengubah properti ini, seharusnya tidak ada informasi atau fungsi yang hilang, dan teks seharusnya menyesuaikan tempatnya sehingga pengguna tidak perlu menggulirkan layar secara horizontal untuk membaca sebuah kalimat. Penyesuaian teks lebih dari sekadar fungsi zum, yang hanya akan mengubah
ukuran teks.

Siapa yang membutuhkan fitur ini? {#who}
----------------------------

-   Penyandang rabun yang tidak menggunakan perangkat lunak untuk memperbesar layar.
-   Penyandang beberapa tipe disleksia, disabilitas kognitif, dan kesulitan belajar lainnya yang memerlukan tampilan teks tertentu untuk bisa membacanya.

Apa manfaat lainnya? {#others}
---------------------------------

-   Konten lebih mudah beradaptasi dengan ukuran layar yang lebih kecil dan lebih besar.
-   Konten lebih mudah disesuaikan dengan preferensi dan kenyamanan pribadi.
-   Konten lebih mudah disesuaikan ketika diterjemahkan, karena kata dan kalimat pada bahasa yang berbeda-beda memiliki panjang yang berbeda-beda pula.

Apa yang perlu dilakukan agar ini bekerja dengan baik? {#action}
--------------------------------------

Konten harus dirancang dan dikode dengan benar agar dapat berubah dengan pengaturan penyesuaian yang berbeda. Hal ini mencakup penggunaan satuan relatif dan bukan absolut untuk ukuran fon, kontrol, dan objek lainnya. Aplikasi harus menggunakan sistem operasi dan pengaturan teks pada browser web. Situs web dan aplikasi juga dapat memberikan informasi untuk membantu pengguna mengubah pengaturan mereka. Browser web dan perangkat web lainnya perlu menyediakan fungsionalitas penyesuaian teks kepada pengguna.

Pelajari lebih lanjut {#resources}
----------

-   **Prinsip Aksesibilitas:**
    -   [Konten bisa disajikan dengan berbagai cara](/fundamentals/accessibility-principles/#adaptable)
-   **Memulai:**
    -   [Menulis kode yang menyesuaikan dengan teknologi pengguna](/tips/developing/#write-code-that-adapts-to-the-users-technology)
-   **Pengecekan Sederhana:**
    -   [Mengubah ukuran teks](/test-evaluate/preliminary/#resize)
-   **Kisah Pengguna:**
    -   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
    -   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   **[Gambaran Umum Pedoman Aksesibilitas Konten Web (WCAG)](/standards-guidelines/wcag/):**
    -   [Kriteria Sukses terkait "teks"](https://www.w3.org/WAI/WCAG21/quickref/?tags=text)
-   **[Gambaran Umum Pedoman Aksesibilitas Agen Pengguna (UAAG)](/standards-guidelines/uaag/):**
    -   [Sediakan pengaturan teks](https://www.w3.org/TR/2015/NOTE-UAAG20-20151215/#gl-text-config)
    -   [Pengaliran Ulang Teks Multi-Kolom](https://www.w3.org/TR/UAAG20/#sc_1813)
    -   [Linearisasi Konten](https://www.w3.org/TR/UAAG20/#sc_1815)
-   **Kebutuhan Pengguna:**
    -   [Persyaratan Aksesibilitas bagi Penyandang Rabun](http://www.w3.org/TR/low-vision-needs/)
        
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
      <td>Perspektif Aksesibilitas Web: Teks yang Dapat Disesuaikan</td>
      <td>Perspektif Aksesibilitas Web:<br>Teks yang Dapat Disesuaikan</td>
    </tr>
    <tr>
      <td>Apa yang tepat bagi Anda belum tentu sesuai bagi orang berikutnya.</td>
      <td>Roti panggang dengan tingkat kematangan yang berbeda.</td>
    </tr>
    <tr>
      <td>Penyesuaian tidak selalu terkait preferensi. Terkadang itu suatu keharusan.</td>
      <td>Dua pria sedang duduk dengan pemanggang roti di antara mereka. Salah satu pria memutar tombol pemanggang roti.</td>
    </tr>
    <tr>
      <td>Mampu menyesuaikan teks sangat krusial bagi penderita rabun dan disleksia.</td>
      <td>Seorang wanita memakai kacamata untuk membaca situs web di laptopnya. Wanita itu memicingkan mata untuk melihat teks kecil dan fon yang tidak biasa pada sebuah situs web.</td>
    </tr>
    <tr>
      <td>Situs web dan aplikasi yang dikode dengan benar memungkinkan penyesuaian teks. Misalnya untuk mengubah ukuran, spasi, fon, dan warna tanpa kehilangan fungsi atau kejelasan.</td>
      <td>Wanita tersebut menggunakan pengaturan pada browser web untuk menyesuaikan ukuran dan gaya teks. Sekarang lebih terbaca dan wanita tersebut merasa lega.</td>
    </tr>
    <tr>
      <td>Aksesibilitas web: Penting bagi sebagian orang, berguna bagi semua orang.</td>
      <td>Kembali ke kedua pria: Salah satu pria mengambil sepotong roti panggang dari pemanggang.</td>
    </tr>
    <tr>
      <td>Kunjugi w3.org/WAI/perspectives untuk informasi lebih lanjut terkait Teks yang Dapat Disesuaikan</td>
      <td>Kunjungi<br>
        w3.org/WAI/perspectives<br>
        untuk informasi lebih lanjut terkait<br>
        Teks yang Dapat Disesuaikan.<br>
        Logo Inisiatif Aksesibilitas Web W3C</td>
    </tr>
  </tbody>
</table>
        

