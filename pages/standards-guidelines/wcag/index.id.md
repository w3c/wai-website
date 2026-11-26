---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Gambaran Umum WCAG 2"
nav_title: "Konten Web – WCAG 2"
lang: id  # Change "en" to the translated-language shortcode
last_updated: 2023-12-08  # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators: # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi" # Add one -name: line for every translator
# - name: "Jan Doe"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/id  # Add the language shortcode to the end, with no slash at end, for example: /link/to/page/fr
ref: /standards-guidelines/wcag/  # Do not change this

description: Memperkenalkan standar internasional Pedoman Aksesibilitas Konten Web (WCAG), termasuk WCAG 2.0, WCAG 2.1, dan WCAG 2.2. Dokumen WCAG menjelaskan cara membuat konten web yang lebih aksesibel bagi penyandang disabilitas.
image: /content-images/wai-intro-wcag/wcag-intro-social.jpg
feedbackmail: wai@w3.org

# In the footer below:
# Do not change the dates
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Date:</strong> Diperbarui 5 Oktober 2023. Pertama kali dipublikasikan Juli 2005.</p>
  <p><strong>Editor:</strong> <a href="http://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>.</p>
  <p>Dikembangkan dengan input dari  Kelompok Kerja Edukasi dan Pendampingan (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>) dan the Kelompok Kerja Pedoman Aksesibilitas (<a href="https://www.w3.org/WAI/about/groups/agwg/">AG WG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Halaman ini memperkenalkan standar internasional Pedoman Aksesibilitas Konten Web (WCAG), termasuk WCAG 2.0, WCAG 2.1, dan WCAG 2.2. Dokumen WCAG menjelaskan cara membuat konten web yang lebih aksesibel bagi penyandang disabilitas.

Halaman berbeda [memperkenalkan WCAG 3](/standards-guidelines/wcag/wcag3-intro/).

WCAG bukan berisi pengenalan pada konsep aksesibilitas. Untuk pengenalan konsep, lihat [Gambaran Umum Dasar-Dasar Aksesibilitas](/fundamentals/).

Tautan singkat ke sumber informasi:
* [Cara Memenuhi Target WCAG (Referensi Cepat)](http://www.w3.org/WAI/WCAG21/quickref/)
* [Standar WCAG 2.2](https://www.w3.org/TR/WCAG22/), [Yang Baru di WCAG 2.2](/standards-guidelines/wcag/new-in-22/)
* [Standar WCAG 2.1](http://www.w3.org/TR/WCAG21/)

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Daftar Isi" class="simple" %}
{:/}

{::options toc_levels="2" /}

-   This text will be replaced by the TOC.
{:toc}
{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Pengantar {#intro}

Pedoman Aksesibilitas Konten Web (WCAG) 2 dikembangkan melalui [proses W3C](/standards-guidelines/w3c-process/) bekerja sama dengan individu dan organisasi di seluruh dunia, dengan tujuan menyediakan standar tunggal bersama terkait aksesibilitas konten web yang dapat memenuhi kebutuhan individu, organisasi, dan pemerintah secara internasional.

Dokumen WCAG menjelaskan cara membuat konten web yang lebih aksesibel bagi penyandang disabilitas. "Konten" web secara umum mengacu pada informasi dalam halaman web atau pun aplikasi web, termasuk:

- informasi alaminya seperti teks, gambar, dan suara
- kode atau markup yang mendefinisikan struktur, presentasi, dll.

## Untuk siapa WCAG ditujukan {#for}

WCAG diperuntukkan bagi mereka yang menginginkan standar teknis. **Ini bukan pengenalan konsep aksesibilitas. Untuk tautan ke materi pengenalan, lihat [“Di mana sebaiknya saya memulai?” pada FAQ](/standards-guidelines/wcag/faq/#start).**

WCAG terutama ditujukan untuk:

- Pengembang konten web (penulis halaman, desainer situs, dll.)
- Pengembang sarana penulisan web
- Pengembang sarana evaluasi aksesibilitas web
- Mereka yang menginginkan atau membutuhkan standar aksesibilitas web, termasuk aksesibilitas perangkat seluler

Untuk memenuhi kebutuhan pihak lainnya &mdash; termasuk pembuat kebijakan, manajer, dan peneliti &mdash; tersedia pula berbagai [[Sumber Informasi WAI]](/resources/).

## Apa isi dari WCAG 2 {#whatis2}

WCAG 2.2 berisi 13 pedoman. Pedoman ini disusun berdasarkan [4 prinsip: bisa ditangkap, bisa dioperasikan, bisa dimengerti, dan tangguh](https://www.w3.org/WAI/WCAG21/Understanding/intro#understanding-the-four-principles-of-accessibility).

Untuk setiap pedoman, terdapat *kriteria sukses* yang bisa diuji. Kriteria sukses terdiri dari [tiga level: A, AA, dan AAA](https://www.w3.org/WAI/WCAG21/Understanding/conformance#levels).

kritaria sukses inilah yang menentukan “kesesuaian” pada WCAG. Artinya, untuk memenuhi WCAG, konten harus memenuhi kriteria sukses tersebut. Detail bisa dilihat di [bagian Kesesuaian pada WCAG](https://www.w3.org/TR/WCAG21/#conformance).

Untuk ringkasan pedoman WCAG 2, lihat **[[Sekilas Mengenai WCAG 2]](/standards-guidelines/wcag/glance/)**.

### Materi pendukung dan panduan tambahan {#supplement}

Sumber informasi berikut membantu Anda dalam memahami dan menerapkan WCAG, serta meningkatkan aksesibilitas melebihi WCAG:
* Referensi Cepat / Cara Memenuhi WCAG 2 / Daftar Cek
* Memahami WCAG 2
* Teknik-teknik WCAG 2
* Aturan Tes WCAG 2
* Panduan Tambahan

**Silahkan baca tentang sumber informasi WCAG 2 tersebut dari [Dokumen WCAG 2](/standards-guidelines/wcag/docs/).**


## WCAG 2.0, 2.1, 2.2 {#versions}

Standar Pedoman Aksesibilitas Konten Web (WCAG) sudah stabil dan bisa dijadikan referensi ketika sudah dipublikasikan sebagai 'Rekomendasi W3C' untuk standar web.

* [WCAG 2.0](https://www.w3.org/TR/WCAG20/) dipublikasikan pada 11 Desember 2008.
* [WCAG 2.1](https://www.w3.org/TR/WCAG21/) dipublikasikan pada 5 Juni 2018, dan pembaruannya dipublikasikan pada 21 September 2023. [Pertanyaan yang Sering Diajukan (FAQ) untuk WCAG 2](https://www.w3.org/WAI/standards-guidelines/wcag/faq/) berisi informasi terkait pembaruan.
* [WCAG 2.2](https://www.w3.org/TR/WCAG22/) dipublikasikan pada 5 Oktober 2023.

WCAG 2.0, 2.1, dan 2.2 dirancang agar "kompatibel mundur", artinya konten yang mematuhi WCAG 2.2 juga mematuhi WCAG 2.1 dan WCAG 2.0. Jika Anda ingin memenuhi semua versi, Anda dapat menggunakan sumber daya WCAG 2.2 dan tidak perlu repot melihat versi sebelumnya.

Semua kriteria sukses dari 2.0 dimasukkan ke dalam 2.1, dan semua dari 2.1 dimasukkan ke dalam 2.2 (kecuali 4.1.1, akan dijelaskan di paragraf berikutnya).
* WCAG 2.0 memiliki 12 pedoman.
* WCAG 2.1 menambahkan 1 pedoman dan 17 kriteria sukses. Hal ini diperkenalkan melalui [Yang Baru di WCAG 2.1](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-21/).
* WCAG 2.2 menambahkan 9 kritaria sukses. Hal ini diperkenalkan melalui [Yang Baru di WCAG 2.2](https://www.w3.org/WAI/standards-guidelines/wcag/new-in-22/).

Beberapa hal telah berubah, dan kami akan memperbarui dokumen terkait untuk mendukung kompatibilitas mundur dalam praktiknya. Perubahan utamanya adalah pada WCAG 2.2, salah satu kriteria sukses (4.1.1 Penguraian/Parsing) sudah tidak berlaku lagi. Catatan koreksi yang ditambahkan pada WCAG 2.1 dan WCAG 2.0 menjelaskan hal ini, seperti yang diterangkan pada [FAQ WCAG 2, Penguraian/Parsing 4.1.1](https://www.w3.org/WAI/standards-guidelines/wcag/faq/#parsing411). WCAG 2.2 juga menyertakan Catatan tentang berbagai bahasa; informasi lebih lanjut ada pada [FAQ WCAG 2, internasionalisasi](https://www.w3.org/WAI/standards-guidelines/wcag/faq/#118n22).

WCAG 2.0, WCAG 2.1, dan WCAG 2.2 merupakan standar yang sudah tersedia. WCAG 2.2 tidak mengakhiri atau menggantikan WCAG 2.1, dan WCAG 2.1 tidak mengakhiri atau menggantikan WCAG 2.0. W3C mendorong Anda untuk menggunakan WCAG versi terbaru.

## Terjemahan

Terjemahan resmi dan tidak resmi WCAG 2 tercantum di [[Terjemahan WCAG 2]](/standards-guidelines/wcag/translations/).

## WCAG 2.0 adalah ISO/IEC 40500 {#iso}

WCAG 2.0 telah disetujui sebagai standar ISO: ISO/IEC 40500:2012. ISO/IEC 40500 sama persis dengan WCAG 2.0 asli yang diperkenalkan di atas beserta dengan sumber informasi pendukungnya.

Konten ISO/IEC 40500 tersedia secara gratis pada [www.w3.org/TR/WCAG20](http://www.w3.org/TR/WCAG20/); tersedia pula untuk dibeli dari [katalog ISO {% include_cached external.html %}](http://www.iso.org/iso/iso_catalogue/catalogue_tc/catalogue_detail.htm?csnumber=58625).

Manfaat WCAG 2.0 sebagai standar ISO dirangkum dalam [ISO pada FAQ](/standards-guidelines/wcag/faq/#iso). Informasi lebih lanjut tentang W3C dan proses ISO ada pada [FAQ PAS W3C](http://www.w3.org/2010/04/pasfaq).

**W3C berencana mengajukan WCAG 2.2 untuk melalui proses ISO.**

## Siapa yang Mengembangkan WCAG {#wg}

Dokumen teknis WCAG dikembangkan oleh Kelompok Kerja Pedoman Aksesibilitas ([AG WG](https://www.w3.org/WAI/GL/)) *(sebelumnya Kelompok Kerja Pedoman Aksesibilitas Konten Web)*, yang merupakan bagian dari Inisiatif Aksesibilitas Web ([WAI](https://www.w3.org/WAI/)) Konsorsium World Wide Web ([W3C](http://www.w3.org)).

WAI memperbarui dokumen Teknik-teknik WCAG 2 dan Memahami WCAG 2 secara berkala. Kami menyambut [komentar](/standards-guidelines/wcag/commenting/) dan [pengajuan teknik baru](http://www.w3.org/WAI/GL/WCAG20/TECHS-SUBMIT/).

Peluang untuk berkontribusi pada WCAG dan pekerjaan WAI lainnya bisa dilihat di [[Berpartisipasi di WAI]](/about/participating/).

## WCAG 3 dan informasi lebih lanjut {#more}

WCAG adalah bagian dari serangkaian pedoman aksesibilitas, termasuk Pedoman Aksesibilitas Sarana Penulisan (ATAG) dan Pedoman Aksesibilitas Agen Pengguna (UAAG). [[KKomponen Esensial dari Aksesibilitas Web]](/fundamentals/components/) menjelaskan hubungan antara berbagai pedoman.

Lihat [[FAQ WCAG 2]](/standards-guidelines/wcag/faq/) untuk informasi lebih lanjut tentang:

- **Cakupan WCAG 2 untuk [aksesibilitas perangkat seluler](/standards-guidelines/wcag/faq/#mobile)**
- **Menerapkan WCAG 2 pada [dokumen dan perangkat lunak](/standards-guidelines/wcag/faq/#wcag2ict)**
- dan banyak lagi...

Untuk informasi mengenai rancangan awal Pedoman Aksesibilitas W3C 3.0 (sebelumnya dikenal sebagai "Sliver"), lihat **[Pengenalan WCAG 3](/standards-guidelines/wcag/wcag3-intro/)**.
