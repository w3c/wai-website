---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Pengenalan Ucapan"
nav_title: "Pengenalan Ucapan"
lang: id    # Change "en" to the translated-language shortcode
last_updated: 2023-11-21    # Put the date of this translation YYYY-MM-DD (with month in the middle)
order: 8

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

permalink: /perspective-videos/voice/id   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /perspective-videos/voice/ # Do not change this

resource:
    ref: /perspective-videos/ # Do not change this

acknowledgements: /perspective-videos/acknowledgements/ # Do not change this

description: Video singkat tentang pengenalan ucapan untuk aksesibilitas web - apa itu, siapa yang membutuhkannya, dan apa yang perlu dilakukan agar bekerja dengan semestinya.
image: /perspective-videos/img/voice.jpg

# In the footer below:
# Do not change the dates
# Do not translate or change ACKNOWLEDGEMENTS
# Translate the other words below.
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Status:</strong> Diperbarui 26 Februari 2021. Petama kali tayang Mei 2016. <a href="../changelog/">Catatan perubahan</a>.<br><strong>Editor dan pimpinan proyek:</strong> <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>. Dikembangkan oleh <a href="https://www.w3.org/WAI/EO/">Kelompok Kerja Edukasi dan Pendampingan (EOWG)</a> dengan dukungan dari <a href="https://www.w3.org/WAI/DEV/">proyek WAI-DEV</a>, didanai bersama oleh Komisi Eropa. Diperbarui dengan dukungan dari Ford Foundation. ACKNOWLEDGEMENTS.</p>

# Read Translations Notes for this resource at https://github.com/w3c/wai-perspective-videos#readme
---

Aksesibilitas web sangat penting bagi penyandang disabilitas dan bermanfaat bagi semua orang. Pelajari tentang dampak aksesibilitas dan manfaatnya bagi semua orang dalam berbagai situasi.

Pembaruan: Video ini menggunakan istilah "pengenalan suara". Halaman ini diperbarui menggunakan istilah "pengenalan ucapan". "Pengenalan ucapan" adalah mengenai pengenalan kata-kata untuk transkripsi ucapan-ke-teks (STT), asisten virtual, dan antarmuka berbasis ucapan lainnya. "Pengenalan suara" atau "pengenalan pembicara" adalah teknologi yang mengidentifikasi siapa pembicaranya, bukan kata-kata yang diucapkannya. Kami berharap dapat memperbarui video menggunakan "pengenalan ucapan" pada akhir tahun 2022.

## Video tentang Pengenalan Ucapan
{:#film.no-display}

{% include video-player-data.html
    yt-id="7RHG_XiQ0ck"
    yt-id-ad="21yWr7evHTs"
    path="/perspective-videos/cc/"
    lang-folder=true
    vtt-data-location="wai-perspective-videos"
    vtt-name="voice"
%}

Informasi video ini tersedia sebagai [Transkripsi dan Deskripsi Visual](#transcript) di bawah.

Apa itu "Pengenalan Ucapan"? {#what}
----------------------------

Pengenalan ucapan dapat digunakan untuk mendiktekan teks dalam bidang isian, serta menavigasi ke dan mengaktifkan tautan, tombol, dan kontrol lainnya. Sebagian besar komputer dan perangkat seluler saat ini memiliki fungsi pengenalan ucapan bawaan. Beberapa alat pengenalan ucapan memungkinkan kontrol penuh atas interaksi komputer, memungkinkan pengguna untuk menggulirkan layar, menyalin dan menempelkan teks, mengaktifkan menu, dan melakukan fungsi lainnya.

Siapa yang membutuhkan fitur ini? {#who}
----------------------------

-   Penyandang disabilitas fisik yang tidak dapat menggunakan kibor atau tetikus.
-   Orang dengan kondisi kronis, seperti cedera regangan berulang (RSI), yang perlu membatasi atau menghindari penggunaan kibor mau pun tetikus.
-   Orang dengan disabilitas kognitif dan kesulitan belajar yang lebih butuh menggunakan ucapan dibandingkan mengetik.

Apa manfaat lainnya? {#others}
---------------------------------

-   Konten lebih dapat digunakan oleh orang-orang dengan keterbatasan sementara, seperti ketika patah lengan.
-   Konten lebih dapat digunakan oleh orang-orang yang lebih memilih berbicara daripada mengetik, misalnya saat melakukan beberapa tugak sekaligus.

Apa yang perlu dilakukan agar ini bekerja dengan baik? {#action}
--------------------------------------

Konten harus dirancang dan dikode dengan benar sehingga dapat dikontrol melalui ucapan. [kompatibilitas kibor](/perspective-videos/keyboard/) adalah dasar untuk pengkodean tersebut. Selain itu, label dan pengidentifikasi untuk kontrol dalam kode program harus sesuai dengan presentasi visualnya, sehingga jelas perintah ucapan mana yang akan mengaktifkan suatu kontrol.

Pelajari lebih lanjut {#resources}
----------

-   **Prinsip Aksesibilitas:**
    -   [Fungsionalitas tersedia melalui Kibor](/fundamentals/accessibility-principles/#keyboard)
    -   [Konten muncul dan beroperasi dengan cara yang dapat diprediksi](/fundamentals/accessibility-principles/#predictable)
-   **Memulai:**
    -   [Pastikan semua elemen interaktif dapat diakses melalui kibor](/tips/developing/#ensure-that-all-interactive-elements-are-keyboard-accessible)
    -   [Sediakan makna untuk elemen interaktif yang nonstandar](/tips/developing/#provide-meaning-for-non-standard-interactive-elements)
    -   [Sediakan alternatif teks untuk gambar](/tips/designing/#include-image-and-media-alternatives-in-your-design)
-   **Pengecekan Sederhana:**
    -   [Akses kibor dan fokus visual](/test-evaluate/preliminary/#interaction)
    -   [Isian, label, dan eror](/test-evaluate/preliminary/#forms)
-   **Kisah Pengguna:**
    -   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   **[Gambaran Umum Pedoman Aksesibilitas Konten Web (WCAG)](/standards-guidelines/wcag/):**
    -   [Kriteria Sukses terkait "kibor" dan "kontrol"](https://www.w3.org/WAI/WCAG21/quickref/?tags=keyboard%2Ccontrols)
-   **Penerapan pada Perangkat Seluler:**
    -   [Tetikus dibutuhkan untuk interaksi dan navigasi](/standards-guidelines/shared-experiences/#mouse)
    -   [Label tautan yang tidak deskriptif](/standards-guidelines/shared-experiences/#link-label)
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
      <td>Perspektif Aksesibilitas Web: Pengenalan [Ucapan]</td>
      <td>Perspektif Aksesibilitas Web:<br>
        Pengenalan [Ucapan]</td>
    </tr>
    <tr>
      <td>Bayangkan jika Anda hanya bisa berkomunikasi dengan keluarga melalui tulisan.<br></td>
      <td>Seorang wanita menulis &quot;kamu ingin sarapan apa?&quot;, dan memberikan catatan itu kepada pria di sebelahnya.<br></td>
    </tr>
    <tr>
      <td>Terkadang lebih mudah untuk berbicara.<br>
        Salah satu kemajuan teknologi adalah pengenalan [ucapan].<br>
        Baik itu untuk menelusuri Web:</td>
      <td>Seorang pria menggunakan tablet melalui ucapan.</td>
    </tr>
    <tr>
      <td>(Pengguna tablet) &quot;Arsitektur abad kesembilan belas.&quot;</td>
      <td>Hasil pencarian muncul pada layar.</td>
    </tr>
    <tr>
      <td>Mendikte email.</td>
      <td>Seorang pria lanjut usia juga menggunakan tablet untuk berbicara.</td>
    </tr>
    <tr>
      <td>Atau mengontrol aplikasi navigasi Anda.</td>
      <td>Seorang wanita sedang berbicara ke ponselnya dan mengikuti petunjuk di layar.</td>
    </tr>
    <tr>
      <td><p>Banyak penyandang disabilitas fisik mengandalkan pengenalan [ucapan] untuk menggunakan komputer.<br>
          (Pria berkursi roda) &quot;Buat pesanan.&quot;<br>
        </p></td>
      <td>Seorang pria berkursi roda menggunakan <i>headset</i> untuk komputer.</td>
    </tr>
    <tr>
      <td>Namun agar hal tersebut dapat terjadi, situs web dan aplikasi harus dikode dengan benar.<br>
(Pria berkursi roda)                     &quot;Batalkan?&quot;</td>
      <td>Tidak ada yang terjadi pada komputer.</td>
    </tr>
    <tr>
      <td> Pengenalan [ucapan] juga dapat membantu banyak orang yang memiliki keterbatasan sementara, seperti lengan yang terluka.<br>
(Wanita)                     &quot;Buat pesanan.&quot;</td>
      <td>Seorang wanita dengan gendongan lengan berhasil menggunakan ucapan.</td>
    </tr>
    <tr>
      <td>Hal ini juga dapat mencegah cedera menjadi lebih buruk, seperti cedera regangan berulang (RSI).</td>
      <td>Seorang pria bersama anjingnya sedang berada di luar membuat catatan menggunakan ucapan di ponselnya.</td>
    </tr>
    <tr>
      <td>Atau bagi orang-orang yang lebih menyukai menggunakan [ucapan].<br>
        (Pria berkursi roda) &quot;Buat pesanan.&quot;</td>
      <td>Pria berkursi roda itu kini menggunakan situs web yang berfungsi.</td>
    </tr>
    <tr>
      <td>Aksesibilitas web: Penting bagi sebagian orang, berguna bagi semua orang.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Kunjungi w3.org/WAI/perspectives untuk informasi lebih lanjut Pengenalan [Ucapan]</td>
      <td>Kunjungi<br>
        w3.org/WAI/perspectives<br>
        untuk informasi lebih lanjut<br>
        Pengenalan [Ucapan]. <br>
        Logo Inisiatif Aksesibilitas Web W3C</td>
    </tr>
  </tbody>
</table>
