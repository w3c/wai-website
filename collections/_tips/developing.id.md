---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: "Mengembangkan untuk Aksesibilitas Web – Kiat Memulai"
title_html: "Mengembangkan untuk Aksesibilitas Web"
nav_title: "Kiat Pengembangan"
lang: id  # Change "en" to the translated-language shortcode
last_updated: 2024-03-13   # Put the date of this translation YYYY-MM-DD (with month in the middle)

resource:
  ref: /tips/

navigation:
  previous: /tips/designing/

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-tips
  
permalink: /tips/developing/id   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /tips/developing/  # Do not change this

ext_css: tips.css
title_icon: /content-images/tips/icons.svg#developing

acknowledgements: /tips/acknowledgements/

# In the footer below:
# Do not change the dates
# Do not translate ACKNOWLEDGEMENTS
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Perubahan minor 9 Januari 2019. Diperbarui 15 April 2016. Pertama kali dipublikasikan September 2015.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/kevin">Kevin White</a>, <a href="https://www.w3.org/People/shadi">Shadi Abou-Zahra</a>, and <a href="https://www.w3.org/People/Shawn">Shawn Lawton Henry</a>. ACKNOWLEDGEMENTS memuat daftar kredit dan kontributor.</p>
  <p>Dikembangkan oleh Kelompok Kerja Edukasi dan Pendampingan (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Dikembangkan sebagai bagian dari  <a href="https://www.w3.org/WAI/DEV/">proyek WAI-DEV</a>, didanai bersama oleh Komisi Eropa.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Halaman ini memperkenalkan beberapa pertimbangan mendasar untuk membantu Anda mulai mengembangkan konten web yang lebih aksesibel bagi penyandang disabilitas. Kiat-kiat ini merupakan praktik yang baik dalam membantu Anda memenuhi persyaratan Pedoman Aksesibilitas Konten Web (WCAG). Ikuti tautan ke persyaratan WCAG terkait, latar belakang terperinci dalam dokumen "Memahami", panduan dari Tutorial, kisah pengguna, dan banyak lagi.

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



## Kaitkan label dengan setiap kontrol pada isian

Gunakan atribut `for` pada elemen `<label>` yang dihubungkan ke atribut `id` dari elemen isiannya, atau gunakan atribut <abbr title="Accessible Rich Internet Applications">WAI-ARIA</abbr>. Dalam situasi tertentu, menyembunyikan elemen `<label>` secara visual mungkin bisa diterima, namun pada sebagian besar kasus, label diperlukan untuk membantu semua pembaca mengerti input apa yang diperlukan.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Menggunakan atribut <code>for</code> dan <code>id</code>" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Hasil penyajian</figcaption>
<label for="username">Nama pengguna</label>
<input id="username" type="text" name="username">
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Penggalan Kode</figcaption>
{:/}

~~~html
<label for="username">Nama pengguna</label>
<input id="username" type="text" name="username">
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Label atau Instruksi 3.3.2](/WAI/WCAG21/quickref/#labels-or-instructions) ([Memahami 3.3.2](/WAI/WCAG21/Understanding/labels-or-instructions))
* **Tutorial**
  * [Melabeli Kontrol](/tutorials/forms/labels/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Sediakan alternatif teks untuk gambar

Pastikan alternatif teks untuk gambar ditambahkan ke semua gambar yang bersifat informatif mau pun fungsional. Gunakan teks alternatif kosong, `alt=""` untuk gambar dekoratif, atau sertakan gambar tersebut pada CSS. Alternatif teks biasanya disediakan oleh mereka yang bertanggung jawab untuk menulis konten.

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Konten Nonteks 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Memahami 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Tutorial**
  * [Gambar](/tutorials/images/)
* **Kisah Pengguna**
  * [Menjelaskan nilai dari alternatif teks bagi pengguna penyandang disabilitas netra](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Identifikasi bahasa halaman dan perubahan bahasa

Tunjukkan bahasa utama setiap halaman dengan menggunakan atribut `lang` pada tag `html`, misalnya `<html lang="id">`. Gunakan atribut `lang` pada elemen jika bahasa elemen tersebut berbeda dari elemen lainnya pada halaman.

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Bahasa pada Halaman 3.1.1](/WAI/WCAG21/quickref/#language-of-page) ([Memahami 3.1.1](/WAI/WCAG21/Understanding/language-of-page))
  * [Bahasa pada Bagian 3.1.2](/WAI/WCAG21/quickref/#language-of-parts) ([Memahami 3.1.2](/WAI/WCAG21/Understanding/language-of-parts))
* **How To**
  * [Mendeklarasikan bahasa pada HTML](/International/questions/qa-html-language-declarations)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Gunakan markah untuk menyampaikan makna dan struktur

Gunakan markah yang sesuai untuk judul, daftar, tabel, dll. HTML5 menyediakan elemen tambahan, seperti `<nav>` dan `<aside>`, untuk menstrukturkan konten Anda dengan lebih baik. Atribut peran (*role*) <abbr>WAI-ARIA</abbr> dapat memberikan makna tambahan, misalnya, menggunakan `role="search"` untuk mengidentifikasi fungsi penelusuran. Bekerja samalah dengan desainer dan penulis konten untuk menyepakati makna yang digunakan dan kemudian menggunakannya secara konsisten.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Menggunakan HTML untuk menyediakan struktur dan makna" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Hasil penyajian</figcaption>
<section>
  <article>
    <h2>Superbear menyelamatkan hari ini</h2>
    <time datetime="2015-08-07">7 Agt 2015</time>
    <p>Beruang favorit kota ini sekali lagi membuktikan keberaniannya dengan menyelamatkan seekor kucing kecil dari atas pohon. Para saksi mata mengatakan bahwa upaya Superbear tidak dihargai oleh kucing tersebut, yang mengakibatkan beberapa luka cakaran ringan pada penyelamatnya.</p>
    <aside>
      <h3>Artikel Terkait</h3>
      <ul>
        <li><a href="#">Bear menerima kunci kota</a></li>
        <li><a href="#">Superbear mendukung walikota</a></li>
      </ul>
    </aside>
  </article>
</section>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Penggalan Kode</figcaption>
{:/}

~~~html
<section>
  <article>
    <h2>Superbear menyelamatkan hari ini</h2>
    <time datetime="2015-08-07">7 Agt 2015</time>
    <p>Beruang favorit kota ini sekali lagi membuktikan keberaniannya dengan menyelamatkan seekor kucing kecil dari atas pohon. Para saksi mata mengatakan bahwa upaya Superbear tidak dihargai oleh kucing tersebut, yang mengakibatkan beberapa luka cakaran ringan pada penyelamatnya.</p>
    <aside>
      <h3>Artikel Terkait</h3>
      <ul>
        <li><a href="#">Bear menerima kunci kota</a></li>
        <li><a href="#">Superbear mendukung walikota</a></li>
      </ul>
    </aside>
  </article>
</section>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Bidang pencarian dengan <abbr>WAI-ARIA</abbr>" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Hasil penyajian</figcaption>
<form action="#" method="post">
  <div role="search">
    <label for="search">Mencari</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">Cari menggunakan id atau nama pelanggan</div>
    <button type="submit">Cari</button>
  </div>
</form>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Penggalan Kode</figcaption>
{:/}

~~~html
<form action="#" method="post">
  <div role="search">
    <label for="search">Mencari</label>
    <input type="search" id="search" aria-describedby="search-help">
    <div id="search-help">Cari menggunakan id atau nama pelanggan</div>
    <button type="submit">Cari</button>
  </div>
</form>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Info dan Hubungan 1.3.1](/WAI/WCAG21/quickref/#info-and-relationships) ([Memahami 1.3.1](/WAI/WCAG21/Understanding/info-and-relationships))
* **Tutorial**
  * [Struktur Halaman](/tutorials/page-structure/)
  * [Tabel](/tutorials/tables/)
* **Kisah Pengguna**
  * [Menjelaskan bagaimana informasi struktural membantu pengguna pembaca layar](/people-use-web/user-stories/#accountant)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Bantu pengguna menghindari dan memperbaiki kesalahan

Berikan instruksi, pesan eror, dan notifikasi yang jelas untuk membantu pengguna melengkapi isian di situs Anda. Ketika kesalahan terjadi:

* Bantu pengguna menemukan letak masalahnya
* Berikan penjelasan yang spesifik dan bisa dimengerti
* Berikan saran perbaikan

Sebisa mungkin toleransi kesalahan format saat memproses input dari pengguna. Misalnya, menerima nomor telepon dengan spasi dan menghapus spasi tersebut sesuai kebutuhan.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Bidang nomor telepon Australia dengan validasi yang toleran" class="example" %}

<div class="two-column">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Hasil penyajian</figcaption>
<label for="phone">Telepon</label>
<input id="phone" name="phone" type="tel" pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$" aria-describedby="phone-desc">
<p id="phone-desc">Contoh, (02) 1234 1234</p>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Penggalan Kode</figcaption>
{:/}

~~~html
<label for="phone">Phone</label>
<input id="phone" name="phone" type="tel"
       pattern="^(\(?0[1-9]{1}\)?)?[0-9 -]*$"
       aria-describedby="phone-desc">
<p id="phone-desc">Contoh, (02) 1234 1234</p>
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Identifikasi Eror 3.3.1](/WAI/WCAG21/quickref/#error-identification) ([Memahami 3.3.1](/WAI/WCAG21/Understanding/error-identification))
* **Tutorial**
  * [Validasi Input](/tutorials/forms/validation/)
* **User Story**
  * [Menjelaskan bagaimana eror yang membantu menolong pengguna dengan disleksia](/people-use-web/user-stories/#classroomstudent)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Cerminkan urutan membaca pada urutan kode

Pastikan urutan elemen dalam kode sesuai dengan urutan logis dari informasi yang disajikan. Salah satu cara untuk memeriksanya adalah dengan menghapus gaya CSS dan meninjau apakah urutan kontennya masuk akal.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Mencerminkan urutan membaca secara logis pada kode" class="example" %}

<div class="two-column">
<div class="order">
  <article class="product">
    <h3 class="name">Sepatu olah raga ruang angkasa</h3>
    {% include_cached image.html src="tips/trainer.png" alt="Sepatu high top berwarna ungu dengan tali putih, titik putih polos di bagian luar pergelangan kaki, dan toe cap berwarna putih" %}
    <p class="desc">Sepatu olah raga ruang angkasa untuk tampilan klasik dan bergengsi.</p>
    <p class="buy"><a href="javascript:return false" class="button button-icon"><span>{% include_cached icon.html name="cart-plus" %} Tambahkan ke keranjang</span></a></p>
  </article>
</div>
<figure>
<figcaption>{% include_cached icon.html name="ex-circle" label="Salah" %} Gambar sebelum judul mungkin terlewatkan</figcaption>
{:/}

~~~html
<img src="images/trainer.png" alt="...">
<h3>Sepatu olah raga ruang angkasa</h3>
<p>Sepatu...</p>
<a href="...">Tambahkan ke keranjang</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
Lihat contoh lengkap kode
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <img alt="Sepatu high top berwarna ungu dengan tali putih, titik putih polos di bagian luar pergelangan kaki, dan toe cap berwarna putih" src="images/trainer.png">
  <h3 class="name">Sepatu olah raga ruang angkasa</h3>
  <p class="desc">Sepatu olah raga ruang angkasa untuk tampilan klasik dan bergengsi.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Tambahkan ke keranjang</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
<figure>
<figcaption>{% include_cached icon.html name="check-circle" label="Oke" %} Judul menandai awal dari sebuah bagian</figcaption>
{:/}

~~~html
<h3>Sepatu olah raga ruang angkasa</h3>
<img src="images/trainer.png" alt="...">
<p>Sepatu...</p>
<a href="...">Tambahkan ke keranjang</a>
~~~

{% include excol.html type="start" id="full-code-img-before-heading" %}
Lihat contoh lengkap kode
{% include excol.html type="middle" %}

~~~html
<article class="product">
  <h3 class="name">Sepatu olah raga ruang angkasa</h3>
  <img alt="Sepatu high top berwarna ungu dengan tali putih, titik putih polos di bagian luar pergelangan kaki, dan toe cap berwarna putih" src="images/trainer.png">
  <p class="desc">Sepatu olah raga ruang angkasa untuk tampilan klasik dan bergengsi.</p>
  <p class="buy"><a href="javascript:return false"><svg class="icon"><use xlink:href="#cart-plus"/></svg> Tambahkan ke keranjang</a></p>
</article>
~~~

{% include excol.html type="end" %}

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Urutan yang Bermakna 1.3.2](/WAI/WCAG21/quickref/#meaningful-sequence) ([Memahami 1.3.2](/WAI/WCAG21/Understanding/meaningful-sequence))

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Tulis kode yang mampu menyesuaikan dengan teknologi pengguna

Gunakan desain responsif untuk menyesuaikan tampilan dengan kondisi zum dan ukuran porta pandang yang berbeda, seperti pada perangkat seluler dan tablet. Jika ukuran fon diperbesar setidaknya 200%, hindari pengguliran layar secara horizontal dan cegah adanya konten yang terpotong. Gunakan metode Peningkatan Progresif untuk membantu memastikan fungsionalitas inti dan konten tersedia terlepas dari teknologi yang digunakan.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Menggunakan kueri media untuk menyesuaikan navigasi" class="example" %}

<div class="adapt-code">
  <figure>
    <div class="code">
      <div class="grid-4">
        <div class="from-col1 to-col2">
{:/}

~~~css
/* Pada porta pandang sempit, gunakan navigasi lebar penuh */
@media screen and (min-width: 25em) {
  #nav {
    float: none;
    width: auto;
  }
  #main {
    margin-left: 0;
  }
}
~~~

{::nomarkdown}
</div>
<div class="from-col3 to-col4">
{:/}

~~~css
/* Pada porta pandang lebar, letakkan navigasi di sebelah kiri */
@media screen and (min-width: 43em) {
  #nav {
    float: left;
    width: 24%;
  }
  #main {
    margin-left: 27%;
  }
}
~~~

{::nomarkdown}
      </div>
    </div>
  </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Mengubah ukuran teks 1.4.4](/WAI/WCAG21/quickref/#resize-text) ([Memahami 1.4.4](/WAI/WCAG21/Understanding/resize-text))
  * [Identifikasi yang Konsisten 3.2.4](/WAI/WCAG21/quickref/#consistent-identification) ([Memahami 3.2.4](/WAI/WCAG21/Understanding/consistent-identification))
* **Latar Belakang**
  * [Layar Ukuran Kecil](/TR/mobile-accessibility-mapping/#h-small-screen-size)
* **Kisah Pengguna**
  * [Menjelaskan bagaimana alternatif tampilan pada halaman yang dizum dapat membantu](/people-use-web/user-stories/#retiree)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Sediakan makna untuk elemen interaktif yang nonstandar

Gunakan <abbr title="Aplikasi Internet yang Kaya dan Aksesibel">WAI-ARIA</abbr> untuk memberikan informasi tentang fungsi dan status <span lang="en">widget</span> yang dirancang khusus, seperti akordeon dan tombol yang dirancang khusus. Misalnya, `role="navigation"` dan `aria-expanded="true"`. Kode tambahan diperlukan untuk mengimplementasikan perilaku <span lang="en">widget</span> tersebut, seperti memperluas dan menyusutkan konten, atau bagaimana <span lang="en">widget</span> merespons aksi dari kibor.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Fungsi dan kondisi menu diidentifikasi menggunakan WAI-ARIA" class="example" %}

<div class="non-standard">
  <figure>
      <div class="code">
{:/}

~~~html
<nav aria-label="Navigasi Utama" role="navigation">
  <ul>
    <li><a href="...">Beranda</a></li>
    <li><a href="...">Toko</a></li>
    <li class="has-submenu">
      <a aria-expanded="false" aria-haspopup="true" href="...">SpaceBear</a>
      <ul>
          <li><a href="...">SpaceBear 6</a></li>
          <li><a href="...">SpaceBear 6 Plus</a></li>
      </ul>
    </li>
    <li><a href="...">MarsCars</a></li>
    <li><a href="...">Kontak</a></li>
  </ul>
</nav>
~~~

{::nomarkdown}
      </div>
  </figure>
</div>

{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Nama, Peran, Nilai 4.1.2](/WAI/WCAG21/quickref/#name-role-value) ([Memahami 4.1.2](/WAI/WCAG21/Understanding/name-role-value))
* **Latar Belakang**
  * [Catatan terkait Penggunaan ARIA pada HTML](/TR/aria-in-html/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Pastikan semua elemen interaktif bisa diakses melalui kibor

Pikirkan tentang akses kibor, terutama saat mengembangkan elemen interaktif, seperti menu, informasi sorotan tetikus, akordeon yang bisa disusutkan, atau pemutar media. Gunakan `tabindex="0"` untuk menambahkan elemen yang biasanya tidak menerima fokus, seperti `<div>` atau `<span>`, ke dalam urutan navigasi untuk digunakan pada saat interaksi. Gunakan skrip untuk menangkap dan merespons aksi dari kibor.

{::nomarkdown}
{% include_cached box.html type="start" title="Contoh: Tombol menu yang bisa diakses kibor" class="example" %}

<div class="two-column keyboard-accessible">
<figure>
<figcaption>{% include_cached icon.html name="desktop" %} Hasil penyajian</figcaption>
<div class="rendered">
  <div id="example-button" class="menu-button" role="button" aria-expanded="false" aria-controls="example-button-menu" tabindex="0">{% include_cached icon.html name="menu" %} Menu</div>
  <div id="example-button-menu" class="menu" aria-hidden="true" tabindex="-1">
    <ul>
      <li><a href="javascript:return false">Tentang</a></li>
      <li><a href="javascript:return false">Berita</a></li>
      <li><a href="javascript:return false">Tiket</a></li>
      <li><a href="javascript:return false">Seru</a></li>
    </ul>
  </div>
</div>
<script>
  !function() {
    "use strict";
    function e(e) {
        "true" == e.getAttribute("aria-hidden") ? (e.setAttribute("aria-hidden", "false"), e.focus()) : e.setAttribute("aria-hidden", "true")
    }
    function t(e) {
        "true" == e.getAttribute("aria-checked") ? (e.setAttribute("aria-checked", "false"), e.getElementsByTagName("span")[0].innerHTML = "Off") : (e.setAttribute("aria-checked", "true"), e.getElementsByTagName("span")[0].innerHTML = "On")
    }
    var a = document.getElementById("example-button");
    a && (a.addEventListener("keydown", function(t) {
        t.keyCode && 13 == t.keyCode && (e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true"))
    }), a.addEventListener("click", function(t) {
        e(document.getElementById("example-button-menu")), "true" == t.target.getAttribute("aria-expanded") ? t.target.setAttribute("aria-expanded", "false") : t.target.setAttribute("aria-expanded", "true")
    }));
    var n = document.getElementById("switch");
    n && (n.addEventListener("keydown", function(e) {
        !e.keyCode || 32 != e.keyCode && 13 != e.keyCode || t(this)
    }), n.addEventListener("click", function() {
        t(this)
    }))
}();
</script>
</figure>
<figure>
<figcaption>{% include_cached icon.html name="code" %} Penggalan Kode</figcaption>
{:/}

~~~javascript
var buttonExample = document.getElementById('example-button');

buttonExample.addEventListener('keydown', function(e) {
  // Membuka menu ketika RETURN ditekan
  if(e.keyCode && e.keyCode == 13) {
    toggleMenu(document.getElementById('example-button-menu'));
  }
});

buttonExample.addEventListener('click', function(e) {
// Membuka menu ketika tetikus diklik
  toggleMenu(document.getElementById('example-button-menu'));
});
~~~

{::nomarkdown}
</figure>
</div>
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Kibor 2.1.1](/WAI/WCAG21/quickref/#keyboard) ([Memahami 2.1.1](/WAI/WCAG21/Understanding/keyboard))
* **Kisah Pengguna**
  * [Menjelaskan bagaimana pengguna dengan RSI membutuhkan dukungan kibor](/people-use-web/user-stories/#reporter)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

## Hindari CAPTCHA saat memungkinkan

CAPTCHA menimbulkan masalah bagi banyak orang. Ada cara-cara lain yang lebih mudah digunakan untuk memverifikasi bahwa masukan pengguna benar dihasilkan oleh manusia, seperti deteksi otomatis atau interaksi antarmuka. Jika CAPTCHA benar-benar perlu disertakan, pastikan CAPTCHA mudah dimengerti dan menyertakan alternatif bagi pengguna penyandang disabilitas, seperti:

* Menyediakan lebih dari dua cara untuk menyelesaikan CAPTCHA
* Menyediakan akses ke alternatif bantuan manusia untuk menghindari CAPTCHA
* Tidak memerlukan CAPTCHA untuk pengguna terotorisasi.

{::nomarkdown}
{% include_cached box.html type="start" title="Informasi Lebih Lanjut" class="simple" %}
{:/}

* **WCAG**
  * [Konten Nonteks 1.1.1](/WAI/WCAG21/quickref/#non-text-content) ([Memahami 1.1.1](/WAI/WCAG21/Understanding/non-text-content))
* **Latar Belakang**
  * [Hambatan Akses pada CAPTCHA](/TR/turingtest/)

{::nomarkdown}
{% include_cached box.html type="end" %}
{:/}

{::nomarkdown}
{% include box.html type="start" title="Pelajari Lebih Lanjut Terkait Aksesibilitas" class="large" icon="readmore" %}
{:/}

Kiat-kiat ini adalah beberapa hal yang perlu Anda pertimbangkan untuk aksesibilitas web. Sumber informasi berikut membantu Anda mempelajari mengapa aksesibilitas itu penting, dan terkait pedoman untuk menjadikan web lebih mudah diakses oleh penyandang disabilitas.

* [Pengenalan ke Aksesibilitas Web](/fundamentals/accessibility-intro/) — Memperkenalkan aksesibilitas dan menyediakan tautan ke sumber informasi yang bermanfaat
* [Prinsip Aksesibilitas](/fundamentals/accessibility-principles/) — Pengenalan ke persyaratan <abbr>WCAG</abbr>
* [Bagaimana Penyandang Disabilitas Menggunakan Web](/people-use-web/) — Contoh nyata dari manfaat aksesibilitas bagi pada penyandang disabilitas
* [Tutorial Aksesibilitas Web](/tutorials/) — Menampikan pada Anda cara untuk mengembangkan konten web yang asesibel untuk pada penyadang disabilitas
* [Demonstrasi Sebelum dan Sesudah](/WAI/demos/bad/) — Contoh situs web yang aksesibel dan tidak dengan desain visual yang sama, dengan catatan yang menyiritu hambatan dan perbaikan seputar aksesibilitasnya, dan laporan evaluasi untuk <abbr>WCAG</abbr>
* [Cara Memenuhi Target WCAG (Referensi Cepat)](/WAI/WCAG21/quickref/) — referensi yang bisa disesuaikan untuk semua persyaratan dan teknik WCAG
* [Daftar Sarana Evaluasi Aksesibilitas Web](/WAI/ER/tools/) — Menyediakan serangkaian sarana untuk membantu mengeksplorasi aksesibilitas sebuah kode
* [Gambaran Umum <abbr>WAI-ARIA</abbr>](/standards-guidelines/aria/) — Pengenalan ke <abbr>WAI-ARIA</abbr> dengan tautan ke semua spesifikasinya

{::nomarkdown}
{% include box.html type="end" %}
{:/}
