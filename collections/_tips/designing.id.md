---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Mendesain untuk Aksesibilitas Web – Kiat Memulai"
title_html: "Mendesain untuk Aksesibilitas Web"
nav_title: Kiat Mendesain
lang: id  # Change "en" to the translated-language shortcode
last_updated: 2024-03-13   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/  # Do not change this

navigation:
  previous: /tips/writing/ # Do not change this
  next: /tips/developing/ # Do not change this

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips

permalink: /tips/designing/id   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/designing/   # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#designing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Perubahan minor 9 Januari 2019. Diperbarui 15 April 2016. Pertama kali dipublikasikan September 2015.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, dan <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS.</p>
  <p>Dikembangkan oleh <a href="https://www.w3.org/WAI/EO/">Dikembangkan oleh Kelompok Kerja Edukasi dan Pendampingan (EOWG)</a>. Dikembangkan dengan dukungan dari <a href="https://www.w3.org/WAI/DEV/">proyek WAI-DEV</a>, didanai bersama oleh Program <abbr title="Teknologi Masyarakat Informasi">IST</abbr> Komisi Eropa.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Halaman ini memperkenalkan beberapa pertimbangan mendasar untuk membantu Anda mulai membuat desain antarmuka pengguna dan desain visual yang lebih aksesibel bagi penyandang disabilitas. Kiat-kiat ini merupakan praktik yang baik dalam membantu Anda memenuhi persyaratan Pedoman Aksesibilitas Konten Web (WCAG). Ikuti tautan ke persyaratan WCAG terkait, latar belakang terperinci dalam dokumen "Memahami", panduan dari Tutorial, kisah pengguna, dan banyak lagi.

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

## Sediakan kontras yang cukup antara latar depan dan latar belakang

Teks pada latar depan harus memiliki kontras yang cukup dengan warna latar belakangnya. Termasuk untuk teks pada gambar, latar belakang gradien, tombol, dan elemen lainnya. Hal ini tidak berlaku untuk logo, atau teks yang insidental, seperti teks yang kebetulan ada di dalam foto. Tautan di bawah memberikan informasi selengkapnya tentang rasio kontras minimum sebagaimana diharuskan oleh <abbr>WCAG</abbr> dan cara memeriksa tingkat kontrasnya. "Rasio kontras" adalah kependekan dari istilah "rasio kontras pencahayaan" yang secara teknis lebih tepat.

{::nomarkdown}
{% include_cached box.html type="start" title="<strong>Contoh:</strong> Rasio kontras" class="example" %}
{:/}

<div class="two-column">
  <figure>
    <figcaption>{% include_cached icon.html name="ex-circle" label="Salah" %} Tidak mencukupi</figcaption>
    <div>
      <p style="color: #999;">Beberapa orang tidak dapat membaca teks jika kontras antara teks dan latar belakangnya tidak mencukupi. Bagi yang lain, warna terang (pencahayaan yang tinggi) membuat tidak terbaca; mereka membutuhkan pencahayaan yang rendah.</p>
    </div>
  </figure>
  <figure>
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Mencukupi</figcaption>
    <div>
      <p class="pass">Beberapa orang tidak dapat membaca teks jika kontras antara teks dan latar belakangnya tidak mencukupi. Bagi yang lain, warna terang (pencahayaan yang tinggi) membuat tidak terbaca; mereka membutuhkan pencahayaan yang rendah.</p>
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
  * [Kontras (Minimum) 1.4.3](/WAI/WCAG21/quickref/#contrast-minimum) ([Memahami 1.4.3](/WAI/WCAG21/Understanding/contrast-minimum))
* **Kisah Pengguna**
  * [Bagaimana seorang pengguna dengan "buta warna" menjelajahi Web](/people-use-web/user-stories/#shopper)
* **Pengecekan Sederhana**
  * [Cara memeriksa rasio kontras](/test-evaluate/preliminary/#contrast)
* **Sarana Pendukung**
  * [Daftar sarana untuk membantu menentukan rasio kontras](/TR/UNDERSTANDING-WCAG20/visual-audio-contrast-contrast.html#visual-audio-contrast-contrast-resources-head)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Jangan hanya menggunakan warna untuk menyampaikan informasi

Meskipun warna dapat berguna untuk menyampaikan informasi, warna seharusnya tidak menjadi satu-satunya cara dalam penyampaian informasi. Ketika menggunakan warna untuk membedakan elemen satu dan lainnya, berikan juga identifikasi tambahan yang tidak bergantung pada warna. Misalnya, selain warna gunakan pula asteris untuk menunjukkan kolom isian yang harus diisi, dan gunakan label untuk membedakan area pada sebuah grafik.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Gunakan warna untuk menyampaikan makna" class="example" %}
{:/}

<div class="color-alone two-column">
  <figure class="reference fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Salah" %} Hanya warna</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">Bidang yang harus diisi berwarna merah</span></p>
        <div class="row">
          <label for="name1">Nama</label> <input type="text" id="name1" name="name">
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email1">Email</label> <input type="text" id="email1" name="email">
        </div>
      </form>
    </div>
  </figure>
  <figure class="reference pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Warna dan Simbol</figcaption>
    <div>
      <form action="#" method="post">
        <p class="instruction"><span class="required" style="color: #992929;">Bidang yang harus diisi</span> berwarna merah dan ditandai dengan <span class="required" style="color: #992929;">*</span></p>
        <div class="row">
          <label for="name2">Nama</label> <input type="text" id="name2" name="name"><br>
        </div>
        <div class="row">
          <label class="required" style="color: #992929;" for="email2">Email *</label> <input type="text" id="email2" name="email">
        </div>
      </form>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Merujuk ke sesuatu hanya dengan warna" class="example" %}
{:/}
<div class="color-alone two-column">
  <figure class="question fail">
    <figcaption>{% include_cached icon.html name="ex-circle" label="Salah" %} Hanya warna</figcaption>
    <div>
      <svg version="1.1" width="153" height="154" aria-labelledby="inaccessible-triangles-title" role="img">
        <g>
          <title id="inaccessible-triangles-title">Empat segitiga dengan sudut berbeda</title>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D"/>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">Manakah yang merupakan segitiga siku-siku?</legend>
          <input id="answer-green1" name="answer1" value="green" type="radio"> <label for="answer-green1">Hijau</label><br>
          <input id="answer-blue1" name="answer1" value="blue" type="radio"> <label for="answer-blue1">Biru</label><br>
          <input id="answer-red1" name="answer1" value="red" type="radio"> <label for="answer-red1">Merah</label><br>
          <input id="answer-yellow1" name="answer1" value="yellow" type="radio"> <label for="answer-yellow1">Kuning</label><br>
          <input id="answer-pass1" name="answer1" value="pass" type="radio"> <label for="answer-pass1">Tidak tahu</label>
        </fieldset>
      </form>
    </div>
  </figure>
  <figure class="question pass">
    <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Warna dan angka</figcaption>
    <div>
      <svg version="1.1" width="153" height="154">
        <g>
          <path d="m2.06902,49.92402l91.82715,-48.2264l-42.35869,75.85164l-49.46846,-27.62524z" fill="#09610D" />
          <text fill="#f4f4f4" y="51" x="44"><tspan>1</tspan><tspan dx="100" style="opacity:0">Segitiga hijau: Memiliki sudut 30°, 60°, 90°</tspan></text>
          <path d="m147.18413,95.39555l-41.64554,-80.62148l43.24728,27.76369l-1.60175,52.85779z" fill="#0000CC"/>
          <text fill="#f4f4f4" y="54" x="132"><tspan>2</tspan><tspan dx="100" style="opacity:0"> Segitiga biru: Memiliki sudut 30°, 30°, 120°</tspan></text>
          <path d="m110.9136,148.01692l-27.57392,-82.3039l69.97661,50.70448l-42.40269,31.59943z" fill="#AA0402"/>
          <text fill="#f4f4f4" y="114" x="110"><tspan>3</tspan><tspan dx="100" style="opacity:0"> Segitiga merah: Memiliki sudut 40°, 70°, 70°</tspan></text>
          <path d="m21.07534,112.17733l48.69831,-22.53485l-4.90304,52.17411l-43.79528,-29.63926z" fill="#DDDD00"/>
          <text fill="#333" y="118" x="48"><tspan>4</tspan><tspan dx="100" style="opacity:0"> Segitiga kuning: Memiliki sudut 60°, 60°, 60°</tspan></text>
        </g>
      </svg>
      <form action="#" method="post">
        <fieldset>
          <legend style="width: 100%;">Manakah yang merupakan segitiga siku-siku?</legend>
          <input id="answer-green2" name="answer2" value="green" type="radio"> <label for="answer-green2">Hijau (1)</label><br>
          <input id="answer-blue2" name="answer2" value="blue" type="radio"> <label for="answer-blue2">Biru (2)</label><br>
          <input id="answer-red2" name="answer2" value="red" type="radio"> <label for="answer-red2">Merah (3)</label><br>
          <input id="answer-yellow2" name="answer2" value="yellow" type="radio"> <label for="answer-yellow2">Kuning (4)</label><br>
          <input id="answer-pass2" name="answer2" value="pass" type="radio"> <label for="answer-pass2">Tidak tahu</label>
        </fieldset>
      </form>
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
  * [Penggunaan Warna 1.4.1](/WAI/WCAG21/quickref/#use-of-color) ([Memahami 1.4.1](/WAI/WCAG21/Understanding/use-of-color))
* **Kisah Pengguna**
  * [Bagaimana seorang pengguna dengan "buta warna" menjelajahi Web](/people-use-web/user-stories/#shopper)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}


## Pastikan elemen interaktif mudah diidentifikasi

Berikan gaya yang berbeda untuk elemen interaktif, seperti tautan dan tombol, agar mudah diidentifikasi. Misalnya dengan mengubah tampilan tautan ketika disoroti tetikus, difokuskan via kibor, dan diaktivasi via layar sentuh. Pastikan gaya dan penamaan elemen interaktif digunakan secara konsisten di seluruh situs web.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Gaya yang unik dan berbeda untuk beragam kondisi tautan" class="example" %}
{:/}

<div class="focus two-column">
  <div>
    <figure>
      <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Gaya tautan tampak menonjol dari teks</figcaption>
      <div>
        <p>Beberapa orang tidak bisa menggunakan tetikus dan hanya menggunakan <a href="javascript:return false;" aria-label="Tautan diberi gaya yang menonjol dari teks utama">navigasi dengan kibor</a> pada halaman web.</p>
        <p>Penting agar pengguna dapat menjangkau semua elemen interaktif dengan menggunakan kibor, dan jelas elemen mana yang sedang menjadi fokus.</p>
        <p>Fokus kibor yang tampak jelas bisa berupa garis batas atau sorotan yang akan berpindah sembari Anda menelusuri halaman web dengan Tab.</p>
      </div>
    </figure>
  </div>
  <div>
    <figure class="hover">
      <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Gaya ketika disoroti tetikus</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Tautan diberi gaya dengan latar belakang yang halus untuk menyorot saat disoroti" style="color: #850BAC; background-color: rgba(253, 247, 15, 0.3)">navigasi dengan kibor</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
    <figure class="keyboard">
      <figcaption>{% include_cached icon.html name="check-circle" label="OK" %} Gaya ketika difokuskan via kibor</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Tautan diberi gaya dengan versi gaya disoroti yang lebih kuat untuk membuatnya menonjol" style="color: #850BAC; background-color: #fdf70f">navigasi dengan kibor</a></p>
      </div>
    </figure>
    <figure class="active">
      <figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Gaya ketika diklik atau disentuh</figcaption>
      <div>
        <p style="text-align: center; position:relative;"><a href="javascript:return false;" aria-label="Tautan diberi gaya yang kuat untuk menunjukkan bahwa suatu tindakan akan terjadi" style="background: #850BAC; color: #f4f4f4">navigasi dengan kibor</a><img src="/WAI/content-images/tips/pointer.png" style="position: absolute; left: 50%; top:1em;" width="20" alt=""></p>
      </div>
    </figure>
  </div>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Fokus Tampak 2.4.7](/WAI/WCAG21/quickref/#focus-visible) ([Memahami 2.4.7](/WAI/WCAG21/Understanding/focus-visible))
  * [Identifikasi yang Konsisten 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([Memahami 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **Kisah Pengguna**
  * [Tantangan yang dihadapi oleh seseorang dengan keterbatasan kemampuan dalam menggunakan tetikus](/people-use-web/user-stories/#reporter)
  * [Tantangan yang dihadapi oleh pengguna lanjut usia dengan tremor di tangan](/people-use-web/user-stories/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Sediakan opsi navigasi yang konsisten dan jelas

Pastikan navigasi di seluruh halaman dalam situs web memiliki penamaan, pemberian gaya, dan peletakan yang konsisten. Sediakan lebih dari satu metode navigasi situs web, seperti pencarian pada situs atau peta situs. Bantu pengguna memahami posisi mereka di situs web atau halaman dengan menyediakan petunjuk orientasi, seperti jejak roti dan judul yang jelas.

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Navigasi yang Konsisten 3.2.3](/WAI/WCAG21/quickref/#consistent-navigation) ([Memahami 3.2.3](/WAI/WCAG21/Understanding/consistent-identification))
  * [Beragam Cara 2.4.5](/WAI/WCAG21/quickref/#multiple-ways) ([Memahami 2.4.5](/WAI/WCAG21/Understanding/multiple-ways))
* **Kisah Pengguna**
  * [Bagaimana konsistensi dan navigasi dapat membantu seseorang dengan kesulitan kognitif](/people-use-web/user-stories/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Pastikan elemen isian disertai label yang jelas

Pastikan semua bidang memiliki label deskriptif yang bersebelahan dengan bidang tersebut. Untuk bahasa yang ditulis dari kiri ke kanan, label biasanya diposisikan di sebelah kiri atau atas bidang, kecuali untuk kotak centang dan tombol radio, label biasanya diletakkan di sebelah kanan. Hindari memberikan terlalu banyak ruang antara label dan bidangnya.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Label dan bidang input dikaitkan berdasarkan kedekatan posisi" class="example" icon="check-circle" %}
{:/}

<div class="labels">
  <figure>
    <div>
      <form action="#" method="post">
        <fieldset>
          <legend>Tambahkan komentar</legend>
          <div class="row">
            <label for="email4">Email Anda</label>
            <input type="text" id="email4" name="email">
          </div>
          <div class="row checkbox">
            <input type="checkbox" id="contact1" name="contact">
            <label for="contact1">Saya senang jika Anda menghubungi saya</label>
          </div>
          <div class="row">
            <label for="website2">Situs Anda</label>
            <input type="text" id="website2" name="website">
          </div>
          <div class="row">
            <label for="comment2">Komentar</label>
            <textarea name="comment" id="comment2"></textarea>
          </div>
        </fieldset>
      </form>
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
  * [Judul dan Label 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([Memahami 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
* **Tutorial**
  * [Posisi teks label secara visual](/tutorials/forms/labels/#visual-position-of-label-text)
* **Kisah Pengguna**
  * [Bagaimana pemberian label yang jelas dapat membantu seseorang yang mengalami kesulitan kognitif](/people-use-web/user-stories/#supermarketassistant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Sediakan umpan balik yang mudah diidentifikasi

Berikan umpan balik untuk interaksi, seperti mengkonfirmasi pengiriman isian, memperingatkan pengguna ketika terjadi kesalahan, atau memberi tahu pengguna tentang perubahan pada halaman. Instruksi harus mudah diidentifikasi. Umpan balik penting yang memerlukan tindakan dari pengguna harus disajikan dengan gaya yang menonjol.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Menggunakan daftar eror, ikon, dan warna latar belakang untuk menonjolkan tampilan eror" class="example" icon="check-circle" %}
{:/}

<div class="errors">
  <figure>
    <div>
      <div class="error-list">
        <p>Harap perbaiki kesalahan berikut:</p>
        <ol>
          <li id="error_email">{% include_cached icon.html name="warning" label="Eror" %} <a href="javascript:document.getElementById('email5').focus()">Alamat email tidak valid</a></li>
          <li id="error_comment">{% include_cached icon.html name="warning" label="Eror" %} <a href="javascript:document.getElementById('comment3').focus()">Komentar diperlukan</a></li>
        </ol>
      </div>
      <form action="#" method="post">
        <fieldset>
          <legend>Tambahkan komentar</legend>
          <p class="instruction"><span class="required">Bidang yang harus diisi</span> berwarna merah dan ditandai dengan <span class="required">*</span></p>
          <div class="row">
            <label for="name5">Nama</label>
            <input type="text" id="name5" name="name" value="Superbear">
          </div>
          <div class="row error">
            <label class="required" for="email5">{% include_cached icon.html name="warning" label="Eror" %} Email *</label>
            <input type="text" id="email5" name="email" value="superbear@@hq.example.com" aria-invalid="true" aria-describedby="error_email">
          </div>
          <div class="row">
            <label for="website3">Situs web</label>
            <input type="text" id="website3" name="website">
          </div>
          <div class="row error">
            <label class="required" for="comment3">{% include_cached icon.html name="warning" label="Eror" %} Komentar *</label>
            <textarea name="comment" id="comment3" aria-invalid="true" aria-describedby="error_comment"></textarea>
          </div>
        </fieldset>
      </form>
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
  * [Identifikasi Eror 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([Memahami 3.3.1](/WAI/WCAG21/Understanding/error-identification))
  * [Label atau Instruksi 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Memahami 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
  * [Saran Eror 3.3.3](/WAI/WCAG21/quickref/#error-suggestion) ([Memahami 3.3.3](/WAI/WCAG21/Understanding/error-suggestion))
* **Tutorial**
  * [Notifikasi Pengguna](/tutorials/forms/notifications/)
* **Kisah Pengguna**
  * [Bagaimana membuat konten yang penting mudah diidentifikasi dapat membantu](/people-use-web/user-stories/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Gunakan judul dan spasi untuk mengelompokkan konten yang berhubungan

Gunakan spasi dan kedekatan posisi untuk membuat hubungan antar konten menjadi lebih jelas. Tatalah posisi judul untuk mengelompokkan konten, mengurangi kekusutan, dan membuat konten lebih mudah untuk dipindai dan dimengerti.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Spasi dapat menyoroti hubungan antar konten" class="example" %}
{:/}

<div class="headings two-column">
  <figure class="fail">
    <figcaption id="inaccessible-headings-title">{% include_cached icon.html name="ex-circle" label="Salah" %} Spasi yang sedikit dan hubungan yang tidak jelas</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="inaccessible-headings-title" aria-describedby="inaccessible-headings-desc" role="img">
        <g>
          <desc id="inaccessible-headings-desc">Satu judul dengan blok teks yang besar, pemisahan subjudul yang buruk, dan hubungan dengan gambar yang tidak jelas</desc>
          <text class="heading" x="0" y="14">Judul utama</text>
          <rect x="0" y="18" width="247" height="3"/>
          <rect x="0" y="24" width="244" height="3"/>
          <rect x="0" y="30" width="249" height="3"/>
          <rect class="image" x="180" y="36" width="70" height="55"/>
          <line x1="181" y1="37" x2="249" y2="90" stroke-width="1"/>
          <line x1="181" y1="90" x2="249" y2="37" stroke-width="1"/>
          <rect x="0" y="36" width="168" height="3"/>
          <rect x="0" y="42" width="171" height="3"/>
          <rect x="0" y="48" width="166" height="3"/>
          <rect x="0" y="54" width="172" height="3"/>
          <rect x="0" y="60" width="120" height="3"/>
          <text class="sub-heading" x="0" y="74">Subjudul</text>
          <rect x="0" y="76" width="144" height="3"/>
          <rect x="0" y="82" width="136" height="3"/>
          <rect x="0" y="88" width="142" height="3"/>
          <rect x="0" y="94" width="236" height="3"/>
          <rect x="0" y="100" width="249" height="3"/>
          <rect x="0" y="106" width="239" height="3"/>
          <rect x="0" y="112" width="205" height="3"/>
          <text class="sub-heading" x="0" y="126">Subjudul</text>
          <rect x="0" y="128" width="236" height="3"/>
          <rect x="0" y="134" width="242" height="3"/>
          <rect x="0" y="140" width="243" height="3"/>
          <rect x="0" y="146" width="250" height="3"/>
          <rect x="0" y="152" width="245" height="3"/>
          <rect x="0" y="158" width="187" height="3"/>
        </g>
      </svg>
    </div>
  </figure>
  <figure class="pass">
    <figcaption id="accessible-headings-title">{% include_cached icon.html name="check-circle" label="Oke" %} Lebih banyak spasi dan hubungan yang lebih jelas</figcaption>
    <div>
      <svg version="1.1" height="173" aria-labelledby="accessible-headings-title" aria-describedby="accessible-headings-desc" role="img">
        <g>
          <desc id="accessible-headings-desc">Judul utama, beberapa subjudul, daftar, dan tidak ada blok teks yang besar</desc>
          <text class="heading" x="0" y="14">Judul utama</text>
          <rect x="0" y="21" width="175" height="3"/>
          <rect x="0" y="27" width="170" height="3"/>
          <rect x="0" y="33" width="159" height="3"/>
          <rect x="0" y="39" width="95" height="3"/>
          <rect x="0" y="51" width="175" height="3"/>
          <rect x="0" y="57" width="170" height="3"/>
          <rect x="0" y="63" width="159" height="3"/>
          <rect x="0" y="69" width="172" height="3"/>
          <rect x="0" y="75" width="143" height="3"/>
          <rect class="image" x="180" y="21" width="70" height="55"/>
          <line x1="181" y1="22" x2="249" y2="75"/>
          <line x1="181" y1="75" x2="249" y2="22"/>
          <text class="sub-heading" x="0" y="98">Subjudul</text>
          <rect x="0" y="103" width="106" height="3"/>
          <rect x="0" y="109" width="99" height="3"/>
          <rect x="0" y="115" width="114" height="3"/>
          <rect x="0" y="121" width="110" height="3"/>
          <rect x="0" y="127" width="110" height="3"/>
          <rect x="0" y="139" width="99" height="3"/>
          <rect x="0" y="145" width="114" height="3"/>
          <rect x="0" y="151" width="110" height="3"/>
          <rect x="0" y="157" width="84" height="3"/>
          <text class="sub-heading" x="135" y="98">Subjudul</text>
          <rect x="135" y="103" width="106" height="3"/>
          <rect x="135" y="109" width="99" height="3"/>
          <rect x="135" y="115" width="114" height="3"/>
          <rect x="135" y="127" width="114" height="3"/>
          <rect x="135" y="133" width="110" height="3"/>
          <rect x="135" y="139" width="99" height="3"/>
          <rect x="135" y="145" width="108" height="3"/>
          <rect x="135" y="151" width="110" height="3"/>
          <rect x="135" y="157" width="62" height="3"/>
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
  * [Judul dan Label 2.4.6](/WAI/WCAG21/quickref/#headings-and-labels) ([Memahami 2.4.6](/WAI/WCAG21/Understanding/headings-and-labels))
  * [Judul Bagian 2.4.10](/WAI/WCAG21/quickref/#section-headings) ([Memahami 2.4.10](/WAI/WCAG21/Understanding/section-headings))
* **Tutorial**
  * [Judul](/tutorials/page-structure/headings/)
* **Kisah Pengguna**
  * [Menjelaskan bagaimana judul dapat berguna untuk navigasi](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Buat desain untuk ukuran porta pandang yang berbeda

Pertimbangkan bagaimana informasi halaman disajikan dalam berbagai ukuran porta pandang, seperti ponsel atau jendela browser yang dizum. Posisi dan penyajian elemen utama, seperti tajuk dan navigasi bisa diubah untuk memanfaatkan ruang sebaik-baiknya. Pastikan ukuran teks dan lebar baris diatur untuk memaksimalkan keterbacaan dan kejelasan huruf (legibilitas).

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Konten dan navigasi menyesuaikan dengan layar ponsel yang lebih kecil" class="example" %}
{:/}

<div class="responsive">
  <figure>
    <div>
      {% include_cached image.html src="tips/content_in_browser.png" %}
      {% include_cached image.html src="tips/content_in_phone.png" %}
      <p>Tampilan di jendela yang lebar dengan teks yang kecil menggunakan beberapa kolom untuk menampilkan konten utama, opsi navigasi yang tampak jelas, dan informasi sekunder yang tampak jelas.</p>
      <p>Tampilan di jendela yang sempit, seperti ponsel, atau dengan teks yang besar menggunakan satu kolom untuk menampilkan konten utama, opsi navigasi ditampilkan menggunakan ikon, dan informasi sekunder juga ditampilkan melalui ikon.</p>
    </div>
  </figure>
</div>

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **Latar Belakang**
  * [Layar Ukuran Kecil](/TR/mobile-accessibility-mapping/#h-small-screen-size)
  * [Pertimbangan pada perangkat seluler terkait Bisa Dimengerti](/TR/mobile-accessibility-mapping/#mobile-accessibility-considerations-related-primarily-to-principle-3-understandable)
* **Kisah Pengguna**
  * [Menjelaskan bagaimana alternatif tampilan pada halaman yang dizum dapat membantu](/people-use-web/user-stories/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Sertakan alternatif untuk gambar dan media dalam desain Anda

Sediakan tempat dalam desain Anda untuk alternatif dari gambar dan media. Misalnya, Anda mungkin memerlukan:

* Tautan yang tampak jelas ke transkrip audio
* Tautan yang tampak jelas ke versi dengan deskripsi audio
* Teks yang menyertai ikon dan tombol grafis
* Takarir dan deskripsi untuk tabel atau grafik yang kompleks

Bekerjalah bersama penulis dan pengembang konten untuk memberikan alternatif untuk konten nonteks.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Desain menyertakan tautan ke transkripsi dan ke video dengan deskripsi audio" class="example" %}
{:/}

<div class="text-alt">
  <figure>
    <div>
      {% include_cached image.html src="tips/example_media_player.png" alt="Menampilkan pemutar media. Selain tombol putar/jeda, bilah kemajuan, dan volume yang sudah normal ada, tersedia pula tombol takarir tertutup (CC) serta tautan ke transkripsi dan versi video dengan deskripsi audio." %}
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
  * [Konten Nonteks 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Memahami 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Tutorial**
  * [Gambar](/tutorials/images/)
* **Kisah Pengguna**
  * [Menjelaskan nilai dari alternatif teks bagi pengguna disabilitas netra](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Sediakan kontrol untuk konten yang dimulai secara otomatis

Tampilkan kontrol untuk memungkinkan pengguna menghentikan animasi atau suara yang diputar secara otomatis. Ini berlaku untuk korsel, gambar bergeser, suara latar belakang, dan video.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Tampilkan tombol putar/berhenti dan kontrol seleksi dalam desain korsel" class="example" %}
{:/}

<div class="autoplay">
  <figure>
    <div>
      {% include_cached image.html src="tips/carousel_controls.png" alt="Contoh korsel dengan tombol putar dan seleksi *slide*" %}
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
  * [Kontrol Audio 1.4.2](/WAI/WCAG21/quickref/#audio-control) ([Memahami 1.4.2](/WAI/WCAG21/Understanding/audio-control))
  * [Putar, Berhenti, Sembunyikan 2.2.2](/WAI/WCAG21/quickref/#pause-stop-hide) ([Memahami 2.2.2](/WAI/WCAG21/Understanding/pause-stop-hide))
* **Tutorial**
  * [Konsep Korsel](/tutorials/carousels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Pelajari Lebih Lanjut Terkait Aksesibilitas" class="large" icon="readmore" %}
{:/}

Berikut adalah beberapa kiat yang perlu Anda pertimbangkan terkait aksesibilitas web. Sumber informasi berikut membantu Anda mempelajari mengapa aksesibilitas itu penting, dan terkait pedoman untuk menjadikan web lebih mudah diakses oleh penyandang disabilitas.

* [Pengenalan ke Aksesibilitas Web](/fundamentals/accessibility-intro/) — mencakup isu-isu secara meluas, seperti kasus bisnis, dan tautan ke sumber informasi yang bermanfaat
* [Prinsip Aksesibilitas](/fundamentals/accessibility-principles/) — memperkenalkan konsep di balik persyaratan aksesibilitas web
* [Bagaimana Penyandang Disabilitas Menggunakan Web](/people-use-web/) — menjelajahi dampak dari desain aksesibel dengan contoh di kehidupan nyata
* [Tutorial Aksesibilitas Web](/tutorials/) — mencakup beberapa panduan yang berkaitan dengan proses mendesain, misalnya, [menyediakan alternatif teks untuk gambar](/tutorials/images/)
* [Demonstrasi Sebelum dan Sesudah](/WAI/demos/bad/) — menunjukkan versi yang tidak dan yang aksesibel dari contoh situs yang sama, dengan catatan terkait hambatan dan perbaikan seputar aksesibilitasnya
* [Cara Memenuhi Target WCAG (Referensi Cepat)](/WAI/WCAG21/quickref/) — referensi yang bisa disesuaikan untuk semua persyaratan dan teknik WCAG
* [Daftar Sarana Evaluasi Aksesibilitas Web](/WAI/ER/tools/) — termasuk sarana untuk membantu mengeksplorasi rasio kontras

{::nomarkdown}
{% include box.html type="end" %}
{:/}
