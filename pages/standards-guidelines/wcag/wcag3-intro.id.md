---
title: "Pengenalan ke WCAG 3"
nav_title: "Rancangan WCAG 3"

description: Introduces the W3C Accessibility Guidelines (WCAG) 3.0 Working Draft. WCAG documents explain how to make the web more accessible to people with disabilities.
image: /content-images/wai-intro-wcag/wcag3_social.png

lang: id

last_updated: 2024-01-15 ## update when have translations
permalink: /standards-guidelines/wcag/wcag3-intro/id

github:
  label: wai-wcag-intro

ref: /standards-guidelines/wcag/wcag3-intro/

feedbackmail: wai@w3.org
footer: >
  <p><strong>Date: </strong>Diperbarui 24 Juli 2023.</p>
  <p><strong>Editor:</strong> <a href="http://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Kontributor: Rachael Bradley Montgomery dan Jeanne Spellman.</p>
  <p>Dikembangkan dengan masukan dari Kelompok Kerja Edukasi dan Pendampingan (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>), Kelompok Kerja Pedoman Aksesibilitas (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>), Satuan Tugas Silver, dan Kelompok Komunitas Silver.</p>

inline_css: |
  #toc li {
    padding-top:0; padding-bottom:0;
    margin-top:0; margin-bottom:0;  }
  .smalltext {
    font-size: .875rem;
  }

---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Banyak aspek pada Pedoman Aksesibilitas W3C (WCAG) 3 sedang dalam tahap penjajakan dan akan berubah. Kami telah menerbitkan [Rancangan Kerja WCAG 3](https://www.w3.org/TR/wcag-3.0/) yang diperbarui pada tanggal 24 Juli 2023.

WCAG 3 akan memiliki syarat aksesibilitas mendasar dan spesifik yang serupa dengan WCAG 2. WCAG 3 akan memiliki struktur yang berbeda, model kesesuaian yang berbeda, dan cakupan yang lebih luas.

Silakan bagikan halaman ini sebagai titik awal informasi resmi terkait WCAG 3 saat ini dan akan datang. Tautan pendek: w3.org/WAI/wcag3

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Daftar Isi" class="simple" %}
{:/}

{::options toc_levels="2,3" /}

-   This text will be replaced by the TOC.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Pengantar
{:.no_toc}

WCAG 3 saat ini masih berupa rancangan yang belum lengkap. WCAG 3 dimaksudkan untuk berkembang menjadi Standar W3C **dalam beberapa tahun** ke depan. Standar saat ini, Pedoman Aksesibilitas Konten Web (WCAG 2), telah diperkenalkan di [Gambaran Umum WCAG 2](https://www.w3.org/WAI/standards-guidelines/wcag/).

Dokumen WCAG 3 akan menjelaskan bagaimana membuat web yang lebih mudah diakses oleh penyandang disabilitas. WCAG 3 berlaku untuk konten web, aplikasi, sarana, penerbitan, dan teknologi baru pada web.

Kami akan memperbarui halaman ini secara berkala seiring dengan kemajuan pengerjaan Rancangan WCAG 3.

## Status: Rancangan Eksploratif

**[Rancangan Kerja WCAG 3](https://www.w3.org/TR/wcag-3.0/) di Juli 2023 mengkomunikasikan dengan lebih baik bahwa sebagian besar konten berupa pengganti atau bersifat eksploratif. Dokumen tersebut menghapus rancangan panduan sebelumnya untuk mengurangi kebingungan mengenai kesiapan penggunaannya.**

**Ada isu-isu penting yang masih terbuka yang sedang dibahas, khususnya tentang pengujian dan kesesuaian. Rancangan ini memberikan deskripsi terkini tentang pendekatan yang memungkinkan terkait kepatuhan, beserta pertanyaan spesifik yang sedang dikerjakan oleh kelompok ini.**

### Status per Bagian

Setiap bagian normatif memiliki status yang menunjukkan sejauh mana proses pengembangan bagian tersebut, seberapa siap untuk diadopsi secara eksperimental, dan jenis umpan balik apa yang kami cari.

* **Pengganti:** Konten ini bersifat sementara. Ini menunjukkan jenis konten atau bagian yang diharapkan. Teks pengganti akan diganti. Konten ini disembunyikan secara bawaan pada dokmen rancangan Editor. Tidak ada umpan balik yang diperlukan terkait konten placeholder.
* **Eksploratif:** Kelompok Kerja sedang menjajaki arah mana yang harus diambil pada bagian ini. Konten ini tidak disempurnakan; detail dan definisi mungkin hilang. Konten ini disembunyikan secara bawaan pada dokumen rangangan Editor. Kami mengundang umpan balik mengenai arah yang diusulkan.
* **Pengembangan:** Ada kesepakatan kasar mengenai apa yang diperlukan untuk bagian ini, meskipun tidak semua permasalahan tingkat tinggi telah diselesaikan. Detail sudah disertakan, namun tidak semuanya disepakati. Kami mengundang umpan balik umum terkait secara umum seberapa mudah bagian ini dimengerti, berguna, dan masuk akal.
* **Penyempurnaan:** Kelompok Kerja telah mencapai konsensus mengenai bagian ini. Bagian ini siap untuk tinjauan publik secara luas dan diadopsi secara eksperimental. Kami mencari umpan balik terkait kelayakan dan permasalahan dalam penerapannya.
* **Matang:** Kelompok Kerja menganggap konten ini siap untuk digunakan pada standar akhir. Umpan balik perlu difokuskan pada kasus-kasus ekstrem yang mungkin tidak diantisipasi oleh Kelompok Kerja.

<img src="{{ "/content-images/wai-intro-wcag/dialogs2.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### Komentar

Kami menyambut masukan dari evaluator, pengembang, perancang, manajer proyek, pembuat kebijakan, penyandang disabilitas, dan lainnya.

Kami juga menerima komentar mengenai tujuan dan parameter di [Persyaratan WCAG 3.0](https://www.w3.org/TR/wcag-3.0-requirements/).

Cara terbaik untuk memberikan masukan ini adalah dengan membuka [isu GitHub](https://github.com/w3c/wcag3/issues/new) baru. Alternatifnya, kirimkan email ke public-agwg-comments@w3.org
Harap masukkan setiap topik dalam terbitan atau email GitHub yang terpisah.

Selain itu, kami menyambut baik komentar mengenai bagaimana Kelompok Kerja Pedoman Aksesibilitas dapat lebih mendukung peninjauan, umpan balik, dan keterlibatan Anda dalam proses pembuatan WCAG 3. Silakan kirim email ke group-ag-chairs@w3.org

## Pendekatan Rancangan WCAG 3

<img src="{{ "/content-images/wai-intro-wcag/brain-icon.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 30%; max-width: 220px">

### Beberapa Mirip, Beberapa Berbeda {#compare}

**Tujuan** dari WCAG 3 meliputi:
* membuatnya lebih mudah dimengerti
* mencakup lebih banyak kebutuhan pengguna, termasuk lebih banyak kebutuhan penyandang disabilitas kognitif
* membuatnya fleksibel dalam menangani berbagai jenis konten web, aplikasi, sarana, dan organisasi

WCAG 3 **mirip** dengan versi sebelumnya dalam beberapa hal. Yakni kemiripan:
* tujuan dalam memberikan panduan untuk membuat konten web dan aplikasi yang bisa diakses oleh penyandang disabilitas
* persyaratan aksesibilitas mendasar dan spesifik

WCAG 3 sangat **berbeda** dari versi sebelumnya dalam beberapa hal. Yakni:
* struktur yang berbeda
* model kesesuaian yang berbeda
* cakupan yang lebih luas, lebih dari sekedar konten web

### Struktur

Rancangan WCAG 3 ini memiliki:
* **Pedoman**
    * Solusi untuk masalah aksesibilitas
    * Lebih **granular** dibandingkan pedoman di WCAG 2
    * Setiap pedoman memiliki hasil
* **Hasil**
    * Pernyataan yang bisa diverifikasi
    * Mirip dengan **kriteria keberhasilan** di WCAG 2
    * Lebih terperinci dan lebih fokus pada hasil yang diinginkan daripada cara teknis untuk mencapainya<br>(Lebih _terperinci_ berarti lebih spesifik, bukan luas. Hal ini umumnya membuatnya menjadi lebih sederhana. Ini juga berarti akan ada lebih banyak hasil pada WCAG 3 daripada kriteria sukses pada WCAG 2.)
* **Penandasan**
    * Klaim faktual secara formal, yang dikaitkan dengan seseorang atau organisasi
    * Penandasan dalam WCAG 3 menyatakan bahwa sebuah organisasi telah menyelesaikan prosedur yang dapat meningkatkan aksesibilitas
    * Contoh prosedur mencakup pengujian ketergunaan, pengujian pada teknologi pendukung, dan tinjauan kesederhanaan bahasa
    * Penandasan digunakan ketika hasil penilaian dari ketergunaan yang sama akan sangat berbeda antar penguji

<!-- @@ ??? SLH needs more clarity -->

Materi pendukung WCAG 3 meliputi:
* **Metode**
    * Cara yang teknologi-spesifik untuk mencapai suatu hasil
    * Pengujian untuk hasil
    * Mirip dengan **Teknik** pada WCAG 2
* **Dokumen Petunjuk**
    * Menjelaskan lebih lanjut tentang setiap pedoman, seperti bagaimana pedoman tersebut memenuhi kebutuhan aksesibilitas <!-- @@ setiap hasil atau setiap pedoman ? -->
    * Informasi untuk desainer, pengembang, yang baru mengenal aksesibilitas, dan perencana proyek
    * Mirip dengan dokumen **Memahami** pada WCAG 2
* **Kategori fungsional** dari **kebutuhan fungsional**
    * Daftar kategori kebutuhan penyandang disabilitas

### Rancangan Model Kesesuaian {#model}

_Model kesesuaian_ adalah cara untuk menentukan dan mengkomunikasikan seberapa baik situs web (atau aplikasi, sarana, dll.) memenuhi WCAG. Model kesesuaian pada rancangan WCAG 3 ini akan sangat berbeda dengan WCAG 2. Hal ini dimaksudkan agar:
* lebih fleksibel untuk organisasi (yaitu pemilik dan pengembang situs web, aplikasi, sarana, dll.)
* mendorong pengalaman pengguna yang lebih aksesibel

Kami sedang mengerjakan ulang model kesesuaian berdasarkan umpan balik dan kami meminta umpan balik tambahan selama proses iterasi.

## Pengembangan

### Linimasa

<img src="{{ "/content-images/wai-intro-wcag/calandara.svg" | relative_url }}" alt="" style="float: right; margin-left: 2rem; width: 20%; max-width: 111px">

Rancangan Kerja Publik WCAG 3.0 yang Pertama diterbitkan pada 21 Januari 2021. Draf Juli 2023 mengalami banyak perubahan yang dihasilkan dari masukan publik. Kami berencana untuk menerbitkan rancangan yang telah diperbarui setiap 3-6 bulan.

**WCAG 3 diperkirakan belum akan selesai untuk menjadi standar W3C dalam beberapa tahun ke depan.**

Kelompok Kerja akan fokus pada pembuatan serangkaian pedoman dan hasil awal. Kemudian akan fokus pada penyempurnaan struktur dan model kesesuaian. Mereka akan memberikan rancangan yang telah diperbarui untuk ditinjau selama proses ini. Ketika pendekatan kesesuaian sudah lebih stabil, Kelompok Kerja akan fokus pada penyempurnaan persyaratan aksesibilitas (pedoman, hasil, penandasan, dan materi pendukung). Kami kemudian akan memberikan materi untuk membantu mereka yang ingin melakukan transisi ke WCAG 3; misalnya, pemetaan antara persyaratan WCAG 2 dan 3.

WCAG 3 tidak akan menggantikan WCAG 2, dan WCAG 2 tidak akan dihentikan, setidaknya selama beberapa tahun setelah WCAG 3 diselesaikan.

Kami akan memperbarui bagian ini dengan informasi linimasa yang lebih spesifik jika tersedia.

### Nama WCAG 3 (sebelumnya proyek "Silver")

Nama WCAG 3 berbeda dari WCAG 2:
* WCAG **3** adalah Pedoman Aksesibilitas W3C
* WCAG **2** adalah Pedoman Aksesibilitas Web
 
"Pedoman Aksesibilitas W3C (WCAG) 3.0” dipilih:
* karena keakraban yang luas dengan akronim “WCAG”.
* untuk merangkul cakupan yang lebih luas dari “konten”

### Siapa yang mengembangkan WCAG 3

Dokumen teknis WCAG dikembangkan oleh Kelompok Kerja Pedoman Aksesibilitas ([AG WG](https://www.w3.org/WAI/GL/)) (sebelumnya berada di bawah Satuan Tugas Silver) dengan Kelompok Komunitas Silver. Kelompok-kelompok ini adalah bagian dari Inisiatif Aksesibilitas Web ([WAI](https://www.w3.org/WAI/)) Konsorsium World Wide Web ([W3C](http://www.w3.org)). Anda dapat mempelajari proses pengembangannya di [[Bagaimana WAI Mengembangkan Standar Aksesibilitas melalui Proses W3C: Pencapaian dan Peluang Berkontribusi]](/standards-guidelines/w3c-process/).

Kami menyambut komentar Anda pada Rancangan Kerja WCAG 3. Cara terbaik untuk memberikan masukan adalah dengan membuka [isu GitHub](https://github.com/w3c/wcag3/issues) baru. Alternatifnya, kirimkan email ke public-agwg-comments@w3.org

Peluang untuk berkontribusi lebih banyak secara langsung ke WCAG dan pekerjaan WAI lainnya diperkenalkan di [[Berpartisipasi di WAI]](/about/participating/).