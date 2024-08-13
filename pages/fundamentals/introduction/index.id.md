---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"
title: Pengenalan ke Aksesibilitas Web 
lang: id
last_updated: 2023-11-23   # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: #Add one -name: line for every translator
  - name: "Fri Rasyidi"
contributors: #Add one -name: line for every contributor
  - name: "Aris Yohanes Elean"

github:
  label: wai-intro-accessibility

permalink: /fundamentals/accessibility-intro/id   # Add the language shortcode to the end; for example /fundamentals/accessibility-intro/fr
ref: /fundamentals/accessibility-intro/   # Do not change this

changelog: /fundamentals/accessibility-intro/changelog/ # Do not change this

# In the footer below:
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
  <p><strong>Tanggal:</strong> Diperbarui 20 November 2023. Pertama kali dipublikasikan Februari 2005. CHANGELOG.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Dikembangkan oleh Kelompok Kerja Edukasi dan Pendampingan (<a href="https://www.w3.org/WAI/EO/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Ketika situs dan sarana web didesain dan kodenya ditulis dengan baik, para penyandang disabilitas akan bisa menggunakan situs dan sarana tersebut. Sayangnya, saat ini banyak situs dan sarana web yang memiliki hambatan aksesibilitas dan membuatnya menjadi sulit atau bahkan tidak bisa digunakan oleh beberapa orang.

Membuat Web yang aksesibel akan memberikan manfaat bagi individu, bisnis, dan masyarakat luas. Standar internasional web memaparkan tentang syarat yang dibutuhkan untuk aksesibilitas.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::options toc_levels="2" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Daftar Isi" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

<span class="box-h box-h-simple box-h-full">Sumber Informasi Terkait</span><br>
{% include video-link.html title="Video Pengenalan ke Aksesibilitas Web dan Standar W3C <em>(4 menit)</em>" href="https://www.w3.org/WAI/videos/standards-and-benefits/" src="/content-images/intro-accessibility/video-still-accessibility-intro-16-9.jpg" %}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Aksesibilitas dalam Konteks {#context}

<blockquote class="pull">
  <p>Kekuatan Web ada pada sifatnya yang universal.<br />
    Bisa diakses semua orang terlepas dari keterbatasan yang dimiliki seseorang adalah aspek yang esensial.</p>
  <footer><cite>Tim Berners-Lee, Direktur W3C dan penemu World Wide Web</cite></footer>
</blockquote>

Secara fundamental, web didesain untuk bisa digunakan oleh semua orang, terlepas dari perangkat keras, perangkat lunak, bahasa, lokasi, atau pun kemampuan mereka. Ketika Web memenuhi targetnya, Web akan bisa diakses oleh orang-orang dengan kemampuan mendengar, bergerak, melihat, dan kognitif yang berbeda.

Itulah mengapa dampak dari disabilitas berubah drastis pada Web, karena Web menghilangkan hambatan dalam berkomunikasi dan berinteraksi yang banyak dialami orang di dunia fisik. Namun, ketika situs, aplikasi, teknologi, mau pun sarana web didesain dengan buruk, akan tercipta hambatan yang dapat menutup akses beberapa orang dalam menggunakan Web.

**Aksesibilitas esensial bagi developer dan organisasi yang ingin menciptakan situs dan sarana web berkualitas tinggi, tanpa menutup akses seseorang dari menggunakan produk dan jasanya.** 

## Apa Itu Aksesibilitas Web {#what}

Aksesibilitas Web berarti situs, sarana, dan teknologi web didesain dan dikembangkan agar penyandang disabilitas bisa menggunakannya. Lebih spesifik, mereka bisa:

-   menerima konten, memahami, menavigasi, dan berinteraksi dengan Web
-   berkontribusi pada Web

Aksesibilitas web mencakup semua disabilitas yang memengaruhi akses ke Web, termasuk:

-   pendengaran
-   kognitif
-   neurologis
-   fisik
-   bicara
-   penglihatan

Aksesibilitas Web juga memberikan manfaat bagi orang-orang yang *tidak* menyandang disabilitas, sebagai contoh:

-   orang-orang yang menggunakan ponsel, jam tangan pintar, TV pintar, berbagai perangkat dengan layar kecil, mode input yang berbeda, dsb.
-   lansia dengan kemampuan yang terbatas karena usia
-   orang-orang yang memiliki "disabilitas temporer" seperti tangan yang patah atau kehilangan kacamata
-   orang-orang yang memiliki "batasan situasi" seperti di bawah terik cahaya matahari atau dalam lingkungan yang tidak memungkinkan mereka untuk mendengarkan suara
-   orang-orang yang memiliki koneksi Internet yang lambat, atau memiliki bandwidth yang mahal atau terbatas

Untuk video 7 menit dengan contoh bagaimana pentingnya aksesibilitas bagi penyandang disabilitas dan bermanfaat bagi semua orang dalam berbagai situasi, tonton:<br>
{% include video-link.html title="Video Perspektif Aksesibilitas Web <em>(YouTube)</em>" href="https://www.youtube.com/watch?v=3f31oufqFSM" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="start" h="3" title="Info Lebih Lanjut Mengenai Apa Itu Aksesibilitas" class="simple aside" %}
{:/}

-   Jika kamu ingin belajar lebih lanjut mengenai bagaimana disabilitas memengaruhi penggunaan Web, dan membaca kisah tentang penyandang disabilitas saat menggunakan Web, lihat [[Bagaimana Penyandang Disabilitas Menggunakan Web]](/people-use-web/).
-   Jika Anda ingin melihat lebih banyak contoh tentang manfaatnya bagi orang lain, terkait perangkat seluler lihat [[Berbagi Pengalaman Web: Hambatan yang Umum bagi Pengguna Perangkat Seluler dan Penyandang Disabilitas]](/standards-guidelines/shared-experiences/), multimedia [Digunakan oleh Penyandang dan Bukan Penyandang Disabilitas](/media/av/users-orgs/#situations) dan arsip [Aksesibilitas Web Menguntungkan Penyandang dan Bukan Penyandang Disabilitas](https://www.w3.org/WAI/business-case/archive/soc#groups).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Aksesibilitas Penting bagi Individu, Bisnis, Masyarakat Umum {#important}

Web memiliki peranan yang semakin penting dalam banyak aspek kehidupan: pendidikan, pekerjaan, pemerintahan, perdagangan, perawatan kesehatan, rekreasi, dan banyak lagi. Web harus aksesibel untuk memberikan akses dan kesempatan yang sama kepada orang-orang dengan kemampuan yang beragam. Akses ke teknologi informasi dan komunikasi, termasuk Web, didefinisikan sebagai hak asasi manusia dalam Konvensi Perserikatan Bangsa-Bangsa tentang Hak-hak Penyandang Disabilitas ([CRPD](https://www.un.org/development/desa/disabilities/convention-on-the-rights-of-persons-with-disabilities.html) PBB).

Bagi banyak penyandang disabilitas, Web memungkinkan tingkat akses kepada informasi dan interaksi yang belum pernah terjadi sebelumya. Artinya, hambatan aksesibilitas dari media cetak, audio, dan visual bisa diatasi dengan lebih mudah melalui teknologi web.

Aksesibilitas mendukung inklusi sosial bagi penyandang disabilitas dan orang-orang lainnya, seperti:

-   lanjut usia
-   berada di pedesaan
-   yang tinggal di negara berkembang

**Terdapat kasus bisnis yang kuat untuk aksesibilitas.** Seperti yang telah ditunjukkan pada bagian sebelumnya, desain yang aksesibel dapat meningkatkan pengalaman dan kepuasan pengguna secara keseluruhan, terutama dalam situasi beragam, pada berbagai perangkat, dan untuk pengguna yang lanjut usia. Aksesibilitas dapat meningkatkan nilai merek Anda, mendorong inovasi, dan memperluas jangkauan pasar Anda.

Aksesibilitas Web **diwajibkan oleh hukum** dalam berbagai situasi.

{::nomarkdown}
{% include box.html type="start" h="3" title="Info Lebih Lanjut Mengenai Pentingnya Aksesibilitas" class="simple aside" %}
{:/}

-   Informasi umum tentang manfaat pada bisnis ada di [[Kasus Bisnis untuk Aksesibilitas Digital]](/business-case/).
    -   Contoh manfaat dari [membuat media audio dan video yang aksesibel](/media/av/) ada pada bagian [Manfaat bagi Organisasi](/media/av/users-orgs/#benefits).
-   Panduan untuk mengetahui persyaratan hukum ada di arsip [Faktor Hukum dan Kebijakan](https://www.w3.org/WAI/business-case/archive/pol).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Membuat Web yang Aksesibel {#making}

Aksesibilitas Web bergantung pada kerja sama dari beberapa komponen, termasuk teknologi web, browser dan \"agen pengguna\" web lainnya, sarana penulisan, dan situs web.

Inisiatif Aksesibilitas Web ([WAI](/about/participating/)) W3C mengembangkan spesifikasi teknis, pedoman, teknik, dan sumber informasi pendukung yang menjelaskan solusi aksesibilitas. Hal-hal tersebut sudah diakui sebagai standar internasional untuk aksesibilitas web; misalnya, <abbr title = "Pedoman Aksesibilitas Konten Web (WCAG)">WCAG</abbr> 2.0 yang juga merupakan standar <abbr title = "Organisasi Standardisasi Internasional">ISO</abbr>: ISO/<abbr title = "Komisi Elektroteknik Internasional">IEC</abbr> 40500.

{::nomarkdown}
{% include box.html type="start" h="3" title="Informasi Lebih Lanjut Tentang Membuat Web yang Aksesibel" class="simple aside" %}
{:/}

- Lebih lanjut mengenai kerja sama dari aspek-aspek aksesibilitas ada di [[Komponen Esensial dari Aksesibilitas Web]](/fundamentals/components/).
- Pedoman Aksesibilitas Konten Web (WCAG), Pedoman Aksesibilitas Sarana Penulisan (ATAG), Aplikasi Internet yang Kaya dan Aksesibel (ARIA), dan sumber informasi penting lainnya diperkenalkan di [[Gambaran Umum Standar Aksesibilitas W3C]](/standards-guidelines/).
- Untuk mempelajari lebih lanjut mengenai bagaimana WAI W3C mengembangkan materi melalui berbagai pemangku kepentingan, partisipasi internasional, dan bagaimana Anda bisa berkontribusi, lihat [[Tentang WAI]](/about/) dan [[Berpartisipasi di WAI]](/about/participating/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

### Membuat Situs Anda menjadi Aksesibel {#website}

Banyak aspek aksesibilitas yang cukup mudah dimengerti dan diterapkan. Beberapa solusi aksesibilitas lebih kompleks dan membutuhkan lebih banyak pengetahuan untuk diterapkan.

Akan sangat efisien dan efektif untuk memasukkan aksesibilitas sejak awal proyek, sehingga Anda tidak perlu kembali dan mengerjakan ulang pekerjaan Anda.

{::nomarkdown}
{% include box.html type="start" h="3" title="Lebih Lanjut Mengenai Membuat Situs Anda menjadi Aksesibel" class="simple aside" %}
{:/}

- Untuk pengenalan pada persyaratan aksesibilitas dan standar internasional, lihat [[Prinsip Aksesibilitas]](/fundamentals/accessibility-principles/).
- Untuk memahami beberapa hambatan umum aksesibilitas dari perspektif pengujian, lihat [[Pengecekan Sederhana - Tinjauan Pertama]](/test-evaluate/preliminary/).
- Untuk beberapa pertimbangan dasar dalam mendesain, menulis, dan mengembangkan aksesibilitas, lihat [[Tips Memulai]](/tips/).
- Saat Anda sudah siap untuk mengetahui lebih banyak tentang pengembangan dan perancangan, Anda mungkin akan menggunakan sumber informasi seperti:
     - [Cara Memenuhi Target WCAG (Referensi Cepat)](https://www.w3.org/WAI/WCAG21/quickref/)
     - [Tutorial Aksesibilitas Web](/tutorials/)
- Untuk pertimbangan manajemen proyek dan pertimbangan organisasional, lihat [[Merencanakan dan Mengelola Aksesibilitas Web]](/planning-and-managing/).<br>
     Jika saat ini Anda perlu melakukan perbaikan cepat, lihat [[Pendekatan untuk Perbaikan Sementara]](/planning/interim-repairs/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

## Mengevaluasi Aksesibilitas {#evaluate}

Saat mengembangkan atau mendesain ulang situs web, lakukan evaluasi aksesibilitas dari awal dan selama proses pengembangan untuk mengidentifikasi masalah aksesibilitas lebih awal, saat yang paling mempermudah dalam mengatasi masalah tersebut. Langkah sederhana, seperti mengubah pengaturan di browser, dapat membantu Anda mengevaluasi beberapa aspek aksesibilitas. Evaluasi komprehensif untuk menentukan apakah sebuah situs web memenuhi seluruh ketentuan dalam pedoman aksesibilitas akan membutuhkan usaha yang lebih besar.

Ada beberapa sarana evaluasi yang dapat membantu Anda dalam melakukan evaluasi. Namun, sarana saja tidak dapat menentukan apakah sebuah situs memenuhi pedoman aksesibilitas. Evaluasi dari seseorang yang berpengetahuan diperlukan untuk menentukan apakah sebuah situs aksesibel.

{::nomarkdown}
{% include box.html type="start" h="3" title="Lebih Lanjut Tentang Mengevaluasi Aksesibilitas" class="simple aside" %}
{:/}

-   Sumber informasi yang bisa membantu dalam mengevaluasi aksesibilitas dijelaskan pada [[Mengevaluasi Situs untuk Aksesibilitas]](/test-evaluate/).

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="start" id="examples" %}

## Contoh

{% include excol.html type="middle" %}

### Alternatif Teks untuk Gambar

![gambar logo; markah HTML img alt='Logo Inisiatif Aksesibilitas Web'](https://www.w3.org/WAI/intro/alt-logo.png){:.right}

Gambar perlu disertai *[alternatif teks yang sesuai](https://www.w3.org/WAI/WCAG22/Understanding/text-alternatives)* (*alt text*) pada markah/kode.

Jika *alt text* tidak disertakan pada gambar, informasi pada gambar menjadi tidak bisa diakses, misalnya bagi orang yang tidak dapat melihat dan menggunakan pembaca layar, untuk membacakan informasi pada halaman termasuk *alt text* untuk gambar visual.

Jika padanan *alt text* disertakan, informasi tersebut akan bisa diakses bagi penyandang disabilitas netra, serta orang-orang yang menonaktifkan gambar (misalnya, di area dengan bandwidth yang mahal atau kecil). Informasi tersebut juga tersedia untuk teknologi yang tak mampu melihat gambar, seperti mesin pencari.

### Input Kibor

![tetikus dicoret](https://www.w3.org/WAI/intro/no-mouse.png){:.left width="67" height="45"}

Beberapa orang tidak dapat menggunakan tetikus, termasuk pengguna lanjut usia yang memiliki kemampuan motorik terbatas. Situs yang aksesibel tidak bergantung pada tetikus; tetapi menggunakan [semua fungsionalitas yang tersedia pada kibor](https://www.w3.org/WAI/WCAG22/Understanding/keyboard-accessible). Lalu para penyandang disabilitas dapat menggunakan [teknologi pendukung](/planning/involving-users/#at) yang meniru fungsi kibor, seperti input ucapan.

### Transkripsi untuk Audio

[![contoh transkripsi](https://www.w3.org/WAI/intro/transcript.png){:.right width="251" height="254"}](https://www.w3.org/WAI/highlights/200606wcag2interview.html)

Sama seperti gambar yang tidak tersedia untuk orang-orang yang tidak dapat melihat, berkas audio juga tidak tersedia untuk orang-orang yang tidak dapat mendengar. Memberikan transkripsi teks membuat informasi audio bisa diakses oleh orang-orang yang disabilitas rungu atau yang mengalami gangguan pendengaran, serta mesin pencarian dan teknologi lain yang tidak mampu mendengar.

Mudah dan relatif murah bagi situs web untuk menyediakan transkripsi. Tersedia pula [layanan transkripsi](http://www.uiaccess.com/transcripts/transcript_services.html) yang bisa membuat transkripsi teks dalam format HTML.

{::nomarkdown}
{% include box.html type="start" h="3" title="Lebih Banyak Contoh" class="simple aside" %}
{:/} 

-   [[Kiat Memulai]](/tips/)
-   [[Pengecekan Sederhana - Tinjauan Pertama]](/test-evaluate/preliminary/)
-   {% include video-link.html class="small inline" title="Perspektif Aksesibilitas Web &mdash; video dan deskripsi" href="/perspective-videos/" src="/content-images/intro-accessibility/video-still-accessibility-perspectives-16-9.jpg" %}

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{% include excol.html type="end" %}

## Informasi Lebih Lanjut {#more-info}

WAI W3C menyediakan berbagai sumber informasi tentang berbagai aspek terkait [standar](/standards-guidelines/), [pendidikan](/teach-advocate/), [pengujian/evaluasi](/test-evaluate/), [manajemen proyek dan kebijakan](/planning/) aksesibilitas web. Kami mendorong Anda untuk menjelajahi situs ini, atau melihat-lihat daftar [Sumber Informasi WAI](/resources/).

**[[Landasan Aksesibilitas Digital - Kelas Daring Gratis]](/courses/foundations-course/)** memberikan landasan yang Anda perlukan agar teknologi digital Anda menjadi aksesibel.