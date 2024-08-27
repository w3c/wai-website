---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Menulis untuk Aksesibilitas Web – Kiat Memulai"
title_html: "Menulis untuk Aksesibilitas Web"
nav_title: Kiat Menulis
lang: id  # Change "en" to the translated-language shortcode
last_updated: 2024-03-13  # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/  # Do not change this

navigation:
  previous: /tips/  # Do not change this
  next: /tips/designing/  # Do not change this

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips

permalink: /tips/writing/id   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/writing/   # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#writing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Diperbarui 5 Agustus 2022. Pertama kali dipublikasikan September 2015.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, dan <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS.</p>
  <p>Dikembangkan oleh <a href="https://www.w3.org/WAI/EO/">Kelompok Kerja Edukasi dan Pendampingan (EOWG)</a>. Developed with support from the <a href="https://www.w3.org/WAI/DEV/">proyek WAI-DEV</a>, didanai bersama oleh Program <abbr title="Teknologi Masyarakat Informasi">IST</abbr> Komisi Eropa.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Halaman ini memperkenalkan beberapa pertimbangan mendasar untuk membantu Anda mulai menulis konten web yang lebih aksesibel bagi penyandang disabilitas. Kiat-kiat ini merupakan praktik yang baik dalam membantu Anda memenuhi persyaratan Pedoman Aksesibilitas Konten Web (WCAG). Ikuti tautan ke persyaratan WCAG terkait, latar belakang terperinci dalam dokumen "Memahami", panduan dari Tutorial, kisah pengguna, dan banyak lagi.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Daftar Isi" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Sediakan titel halaman yang informatif dan unik

Untuk setiap halaman web, berikan judul singkat yang menggambarkan isi halaman dan membedakannya dari halaman lainnya. Titel halaman sering kali sama dengan judul utama halaman. Letakkan informasi yang unik dan paling relevan di awal; misalnya mencantumkan nama halaman sebelum nama organisasi. Untuk halaman yang merupakan bagian dari proses multilangkah, sertakan langkah yang sedang dilakukan di judul halaman.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Titel Halaman" class="example" %}
{:/}

<div class="page-title">
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Titel halmaan beranda</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Nama halaman diikuti nama organisasi</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Berita terbaru &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Nama halaman termasuk langkah pada suatu proses</figcaption>
    <div>
      <svg version="1.1" width="462" height="27">
        <g transform="scale(1.2)">
          <path class="banner" d="M 0 9.75 L 0 14.8125 L 0 21.625 L 384.5 21.625 L 384.5 14.8125 L 384.5 9.75 L 384.5 3.25 C 384.5 1.59314575 383.15685 .25 381.5 .25 L 3 .25 C 1.34314575 .25 0 1.59314575 0 3.25 Z" fill="#f5f5f5"/>
          <text transform="translate(10 15)">Beli Beruangmu (Langkah 1 dari 3) &bull; Space Teddy Inc.</text>
          <g transform="translate(333 4)">
            <rect x="0" y="9.5" width="10" height="1.5"/>
            <path d="M 24 10 L 17 10 L 17 4 L 24 4 Z M 16 11 L 25 11 L 25 3 L 16 3 Z"/>
            <path d="M 41 3 L 40 2 L 36 6 L 32 2 L 31 3 L 35 7 L 31 11 L 32 12 L 36 8 L 40 12 L 41 11 L 37 7 Z"/>
          </g>
        </g>
      </svg>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Halaman diberi Titel 2.4.2](/WAI/WCAG21/quickref/#page-titled) ([Memahami 2.4.2](/WAI/WCAG21/Understanding/page-titled))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Gunakan judul untuk menyampaikan makna dan struktur

Gunakan judul pendek untuk mengelompokkan paragraf terkait dan menerangkan bagian-bagiannya dengan jelas. Judul yang baik menggambarkan garis besar isinya.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Gunakan judul untuk mengelompokkan konten" class="example" %}
{:/}

<div class="heading-structure two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Salah" %} Kekurangan judul</figcaption>
    <div>
      {% include_cached image.html src="tips/headings-poor.png" alt="Contoh tidak ada judul, lihat di bawah untuk contoh mendetail" %}
    </div>
{% include_cached excol.html type="start" id="no-headings" %}
Lihat contoh <span lang="en">inline</span>
{% include_cached excol.html type="middle" %}
<h2 id="no-headings-modal-title"><span class="visuallyhidden">Contoh: </span>Judul dan Subjudul</h2>

<p>Elemen HTML menyediakan informasi hierarki struktural suatu dokumen. Penggunaan elemen yang benar akan membantu menyampaikan makna tambahan pada teknologi pendukung. Dalam banyak kasus, hal ini juga akan membuat dokumen Anda lebih mudah diedit.</p>

<p>Untuk dokumen yang panjangnya lebih dari tiga atau empat paragraf, judul dan subjudul penting untuk ketergunaan dan aksesibilitas. Mereka membantu pembaca dalam menentukan garis besar isi dokumen dan menavigasi ke informasi spesifik yang dicari.</p>

<p>Judul diklasifikasikan ke dalam tingkatan dari satu hingga enam. Tingkat tertinggi adalah "Level 1" dan sering kali berhubungan dengan judul halaman atau bagian utama dari dokumen.</p>

<p>Pembaca visual mengidentifikasi judul dengan memindai halaman untuk mencari teks dengan ukuran yang lebih besar atau gaya yang berbeda. Pengguna teknologi pendukung tidak dapat melihat perubahan visual tersebut, sehingga mengubah gaya saja tidak cukup untuk menjadi petunjuk.</p>

<p>Alhasil, judul harus "ditandai" secara semantik agar teknologi pendukung dapat mengidentifikasi judul. Kemudian judul juga akan bisa digunakan untuk menavigasi.</p>

<p>Hal ini menjadikan penambahan judul salah satu sarana terpenting bagi pengguna pembaca layar, sehingga mereka dapat mempelajari apa yang ada pada halaman. Perhatikan bahwa pemberian tanda biasanya memicu perubahan format secara visual yang bisa disesuaikan pada banyak dokumen.</p>

<cite>Diadopsi dari <a href="https://accessibility.psu.edu/headings/">"Judul dan Subjudul" di Penn State</a></cite>
{% include_cached excol.html type="end" %}
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Menggunakan judul dan subjudul</figcaption>
    <div>
      {% include_cached image.html src="tips/headings-good.png" alt="Ilustrasi struktur judul yang bagi, lihat di bawah untuk contoh mendetail"%}
    </div>
{% include_cached excol.html type="start" id="headings-good" %}
Lihat comtoh <span lang="en">inline</span>
{% include_cached excol.html type="middle" %}
<h2 id="headings-modal-title"><span class="visuallyhidden">Contoh: </span>Judul dan Subjudul</h2>

<p>Elemen <abbr>HTML</abbr> menyediakan informasi hierarki struktural suatu dokumen. Penggunaan elemen yang benar akan membantu menyampaikan makna tambahan pada teknologi pendukung. Dalam banyak kasus, hal ini juga akan membuat dokumen Anda lebih mudah diedit.</p>

<h3><span class="visuallyhidden">Contoh: </span>Tujuan dari Judul</h3>

<p>Untuk dokumen yang panjangnya lebih dari tiga atau empat paragraf, judul dan subjudul penting untuk ketergunaan dan aksesibilitas. Mereka membantu pembaca dalam menentukan garis besar isi dokumen dan menavigasi ke informasi spesifik yang dicari.</p>

<h4><span class="visuallyhidden">Contoh: </span>Level judul</h4>

<p>Judul diklasifikasikan ke dalam tingkatan dari satu hingga enam. Tingkat tertinggi adalah "Level 1" dan sering kali berhubungan dengan judul halaman atau bagian utama dari dokumen.</p>

<h3><span class="visuallyhidden">Contoh: </span>Makna vs. Format</h3>

<p>Pembaca visual mengidentifikasi judul dengan memindai halaman untuk mencari teks dengan ukuran yang lebih besar atau gaya yang berbeda. Pengguna teknologi pendukung tidak dapat melihat perubahan visual tersebut, sehingga mengubah gaya saja tidak cukup untuk menjadi petunjuk.</p>

<p>Alhasil, judul harus "ditandai" secara semantik agar teknologi pendukung dapat mengidentifikasi judul. Kemudian judul juga akan bisa digunakan untuk menavigasi.</p>

<p>Hal ini menjadikan penambahan judul salah satu sarana terpenting bagi pengguna pembaca layar, sehingga mereka dapat mempelajari apa yang ada pada halaman. Perhatikan bahwa pemberian tanda biasanya memicu perubahan format secara visual yang bisa disesuaikan pada banyak dokumen.</p>

<cite>Diadopsi dari <a href="https://accessibility.psu.edu/headings/">"Judul dan Subjudul" di Penn State</a></cite>
{% include_cached excol.html type="end" %}
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Judul dan Label 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([Memahami 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
  * [Judul Bagian 2.4.10](/WAI/WCAG21/quickref/#section-headings) ([Memahami 2.4.10](/WAI/WCAG21/Understanding/section-headings))
  * [Info dan Hubungan 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([Memahami 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
* **Kisah Pengguna**
  * [Bagaimana pengguna pembaca layar menggunakan judul untuk menavigasi](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Buat teks tautan yang bermakna

Tulis teks tautan yang menggambarkan isi dari tujuan tautan tersebut. Hindari penggunaan teks tautan yang ambigu, seperti 'klik di sini' atau 'baca selengkapnya'. Tunjukkan informasi yang relevan tentang target tautan, seperti jenis dan ukuran dokumen, misalnya, 'Dokumen Proposal (RTF, 20MB)'.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Menggunakan teks tautan untuk mendeskripsikan halaman tujuan" class="example" %}
{:/}

<div class="meaningful-links two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Salah" %} Tidak ada informasi</figcaption>
    <div>
      <p class="fail">Untuk informasi lebih lanjut terkait kemerdekaan dari perangkat, <a href="javascript:return false">klik di sini</a>.</p>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Informasi yang bermakna</figcaption>
    <div>
      <p class="pass">Baca lebih lanjut <a href="javascript: return false">tentang kemerdekaan dari perangkat</a>.</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Guna Tautan (Dalam Konteks) 2.4.4](/WAI/WCAG21/quickref/#link-purpose-in-context) ([Memahami 2.4.4](/WAI/WCAG21/Understanding/link-purpose-in-context))
  * [Guna Tautan (Hanya Tautan) 2.4.9](/WAI/WCAG21/quickref/#link-purpose-link-only) ([Memahami 2.4.9](/WAI/WCAG21/Understanding/link-purpose-link-only))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Tulis alternatif teks yang bermakna untuk gambar

Untuk setiap gambar, tulislah alternatif teks yang menjelaskan informasi atau fungsi dari gambar tersebut. Untuk gambar yang sifatnya hanya dekoratif, tidak perlu menuliskan teks alternatif.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Gunakan alternatif teks untuk mengkomunikasikan informasi yang penting" class="example" %}
{:/}

<div class="text-alt two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Salah" %} Tidak informatif</figcaption>
    <div>
      {% include_cached image.html src="tips/phone_charging.png" alt="Mengisi daya ponsel"  float="left" %}
      <div>
        <p> Mengisi daya ponsel: Hubungkan ponsel ke stopkontak menggunakan kabel dan adaptor daya yang disediakan.</p>
        <p><strong>Alternatif teks untuk gambar</strong>: "Mengisi daya ponsel"</p>
      </div>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Informatif</figcaption>
    <div>
      {% include_cached image.html src="tips/phone_charging.png" alt="Colokkan kabel pada bagian bawah ponsel." float="left" %}
      <div>
        <p>Mengisi daya ponsel: Hubungkan ponsel ke stopkontak menggunakan kabel dan adaptor daya yang disediakan.</p>
        <p><strong>Alternatif teks untuk gambar</strong>: "Colokkan kabel pada bagian bawah ponsel"</p>
      </div>
    </div>
  </figure>
</div>
<p class="note">Alternatif teks biasanya tidak terlihat; teks disertakan pada contoh ini agar Anda dapat melihatnya.
</p>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Konten Nonteks 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Memahami 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Tutorial**
  * [Gambar](/tutorials/images/)
* **User Story**
  * [Menjelaskan nilai dari alternatif teks bagi pengguna penyandang disabilitas netra](/people-use-web/user-stories/archived/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Buat transkripsi dan takarir untuk multimedia

Untuk konten hanya audio, seperti podcast, berikan transkripsinya. Untuk konten audiovisual, seperti video pelatihan, sediakan pula takarirnya. Cantumkan pada transkripsi dan takarir informasi terkait ucapan lisan dan suara yang penting diketahui untuk memahami konten, misalnya, 'pintu berderit'. Untuk transkripsi video, sertakan juga deskripsi konten visual yang penting, misalnya 'Athan meninggalkan ruangan'.

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **[[Membuat Media Audio dan Video yang Aksesibel]](/media/av/)**

* **WCAG**
  * [Takarir (Prarekaman) 1.2.2](/WAI/WCAG21/quickref/#captions-prerecorded) ([Memahami 1.2.2](/WAI/WCAG21/Understanding/captions-prerecorded))
  * [Deskripsi Audio atau Media Alternatif (Prarekaman) 1.2.3](/WAI/WCAG21/quickref/#audio-description-or-media-alternative-prerecorded) ([Memahami 1.2.3](/WAI/WCAG21/Understanding/audio-description-or-media-alternative-prerecorded))
* **Kisah Pengguna**
  * [Menjelaskan bagaimana takarir membantu siswa penyandang disabilitas rungu](/people-use-web/user-stories/archived/#onlinestudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Sediakan instruksi yang jelas

Pastikan instruksi, panduan, dan pesan eror jelas, mudah dimengerti, dan hindari bahasa teknis yang tidak perlu. Jabarkan persyaratan dari input, seperti format tanggal.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Instruksi mengkomunikasikan informasi apa yang harus disediakan oleh pengguna" class="example" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <form action="#" method="post">
        <p id="password-desc">Kata sandi harus terdiri dari minimal enam karakter dengan setidaknya satu angka (0-9).</p>
        <div class="row">
          <label for="password">Kata sandi</label>
          <input aria-describedby="password-desc" type="password" id="password" name="password" value="">
        </div>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Contoh: Pesan eror menunjukkan apa masalahnya dan, sebisa mungkin, bagaimana cara memperbaikinya" class="example" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <ol class="fa-ul error-list">
        <li id="error_email">{% include_cached icon.html name="warning" label="Eror" %} <a href="javascript:return false">Nama pengguna 'superbear' sudah ada yang menggunakan.</a></li>
        <li id="error_password">{% include_cached icon.html name="warning" label="Eror" %} <a href="javascript:return false">Kata sandi harus terdiri dari setidaknya satu angka.</a></li>
      </ol>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Label atau Instruksi 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Memahami 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
* **Kisah Pengguna**
  * [Menjelaskan bagaimana instruksi sederhana membantu orang dengan kesulitan belajar](/people-use-web/user-stories/archived/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Jaga agar konten tetap jelas dan ringkas

Gunakan bahasa dan format yang sederhana, sesuai dengan konteksnya.

* Tulislah dalam kalimat dan paragraf yang singkat dan jelas.
* Hindari penggunaan kata dan frasa dengan kerumitan yang tidak perlu.
* Berikan kepanjangan singkatan saat digunakan pertama kali. Misalnya, Pedoman Aksesibilitas Konten Web (WCAG).
* Pertimbangkan untuk menyediakan glosarium untuk istilah-istilah yang mungkin tidak diketahui oleh pembaca.
* Gunakan format daftar bila sesuai dengan isinya.
* Pertimbangkan untuk menggunakan gambar, ilustrasi, video, audio, dan simbol untuk membantu memperjelas makna konten.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Membuat konten bisa dibaca dan dimengerti" class="example" %}
{:/}

<div class="two-column">
  <figure class="from-col1 to-col2">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Wrong" %} Kerumitan yang tidak perlu</figcaption>
    <div>
      <p class="fail">CPP: Jika terjadi tabrakan kendaraan, perwakilan yang ditunjuk oleh perusahaan akan berupaya memastikan tingkat dan penyebab kerusakan pada properti milik semua pihak yang terlibat. Setelah perwakilan kami memperoleh informasi yang memungkinkan kami memahami hubungan sebab akibat, kami dapat atau tidak memberikan kompensasi uang yang sesuai. Keputusan yang dihasilkan dapat menimbulkan salah satu opsi berikut: klaim tidak disetujui dan diberi status ditolak, status klaim bersifat ambigu dan akan memerlukan informasi tambahan sebelum pemrosesan lebih lanjut bisa dilakukan, klaim disetujui sebagian dan pembayaran dikurangi ditugaskan dan diterbitkan, atau klaim disetujui sepenuhnya dan total pembayaran klaim ditugaskan dan diterbitkan.</p>
    </div>
  </figure>
  <figure class="from-col3 to-col4">
    <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Lebih mudah dimengerti</figcaption>
    <div>
      <p class="pass">Proses Pengajuan Klaim (CPP): Jika Anda mengalami kecelakaan mobil, agen kami akan melakukan penyelidikan. Hasil temuan akan menentukan pembayaran klaim. Hal ini dapat mengakibatkan:</p>
      <ul>
        <li>Klaim diterima - pembayaran penuh</li>
        <li>Klaim diterima sebagian - pengurangan pembayaran</li>
        <li>Klaim tidak bisa ditentukan - butuh informasi lebih lanjut</li>
        <li>Klaim ditolak - tidak ada pembayaran</li>
      </ul>
      <p>{% include_cached image.html src="tips/clear_text_diagram.png" alt="" style="max-width:100%" %}</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Kemampuan Membaca 3.1.5](/WAI/WCAG21/quickref/#reading-level) ([Memahami 3.1.5](/WAI/WCAG21/Understanding/reading-level))
  * [Kata-kata yang Tidak Umum 3.1.3](/WAI/WCAG21/quickref/#unusual-words) ([Memahami 3.1.3](/WAI/WCAG21/Understanding/unusual-words))
  * [Singkatan 3.1.4](/WAI/WCAG21/quickref/#abbreviations) ([Memahami 3.1.4](/WAI/WCAG21/Understanding/abbreviations))
* **Kisah Pengguna**
  * [Pengguna dengan kesulitan membaca mendapat manfaat dari teks yang mudah dibaca](/people-use-web/user-stories/archived/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Pelajari Lebih Lanjut Terkait Aksesibilitas" class="large" icon="readmore" %}
{:/}

Berikut adalah beberapa kiat yang perlu Anda pertimbangkan terkait aksesibilitas web. Panduan tambahan untuk menulis dalam memenuhi kebutuhan aksesibilitas bagi penyangang disabilitas kognitid dan kesulitan belajar ada pada **[Menggunakan Konten yang Jelas dan Bisa Dimengerti](https://www.w3.org/WAI/WCAG2/supplemental/objectives/o3-clear-content/)**.

Sumber informasi berikut membantu Anda mempelajari mengapa aksesibilitas itu penting, dan terkait pedoman untuk menjadikan web lebih mudah diakses oleh penyandang disabilitas.

* [Pengenalan ke Aksesibilitas](/fundamentals/accessibility-intro/) — Memperkenalkan aksesibilitas dan menyediakan tautan ke berbagai sumber informasi yang membantu
* [Prinsip Aksesibilitas](/fundamentals/accessibility-principles/) — Pengenalan ke persyaratan <abbr>WCAG</abbr>
* [Bagaimana Penyandang Disabilitas Menggunakan Web](/people-use-web/) — Contoh nyata dari manfaat aksesibilitas bagi pada penyandang disabilitas
* [Cara Memenuhi Target WCAG (Referensi Cepat)](/WAI/WCAG21/quickref/) — referensi yang bisa disesuaikan untuk semua persyaratan dan teknik WCAG

{::nomarkdown}
{% include box.html type="end" %}
{:/}
