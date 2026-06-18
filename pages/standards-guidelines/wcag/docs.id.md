---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after #.
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:".

title: "Dokumen WCAG 2"
nav_title: "Dokumen"
lang: id   # Change "en" to the translated-language shortcode from https://www.iana.org/assignments/language-subtag-registry/language-subtag-registry
last_updated: 2024-01-15 # Put the date of this translation YYYY-MM-DD (with month in the middle)

translators:    # remove from the beginning of this line and the lines below: "# " (the hash sign and the space)
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple translators
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-wcag-intro

permalink: /standards-guidelines/wcag/docs/id   # Add the language shortcode to the end, with no slash at end, for example: /standards-guidelines/wcag/docs/fr
ref: /standards-guidelines/wcag/docs/   # Translators, do not change this

image: /content-images/wai-intro-wcag/general-social.jpg
description:  Describes Web Content Accessibility Guidelines (WCAG) 2 supporting documents and supplemental guidance.

# In the footer below:
# Do not translate or change CHANGELOG or ACKNOWLEDGEMENTS.
# Translate the other words below, including "Date:" and "Editor:"
# Translate the Working Group name. Leave the Working Group acronym in English.
# Do not change the dates in the footer below.
footer: >
   <p><strong>Date:</strong> Diperbarui 5 Oktober 2023. Pertama kali dipublikasikan Juli 2005.</p>
   <p><strong>Editor:</strong> <a href="http://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Kontributor: <a href="http://www.w3.org/People/hidde/">Hidde de Vries</a> dan <a href="http://www.w3.org/People/shadi/">Shadi Abou-Zahra</a>.</p>
   <p>Dikembangkan dengan masukan dari Kelompok Kerja Edukasi dan Pendampingan (<a href="https://www.w3.org/WAI/about/groups/eowg/">EOWG</a>).</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Halaman ini menjelaskan dokumen pendukung dan panduan tambahan WCAG 2. Halaman ini membantu Anda mengetahui ke mana Anda harus mencari jenis informasi yang dibutuhkan.

{::nomarkdown}
{% include box.html type="end" %}
{:/}

{::nomarkdown}
{% include_cached toc.html type="start" title="Daftar Isi" class="simple" %}
{:/}

{::options toc_levels="2,3,4" /}

-   This text will be replaced by the TOC.
{:toc}


{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}

## Standar WCAG 2

Pedoman Aksesibilitas Konten Web (WCAG) 2 adalah standar teknis yang stabil dan bisa dijadikan referensi. Pelajari lebih lanjut pada [[Gambaran Umum Pedoman Aksesibilitas Konten Web (WCAG)]](/standards-guidelines/wcag/).

Saat mengembangkan konten dan sarana web, kebanyakan orang akan menggunakan dokumen yang diperkenalkan di bawah ini, bukan dokumen standar sebenarnya.

## Referensi Cepat / Cara Memenuhi WCAG 2 / Ceklis WCAG 2

**Sumber informasi utama bagi desainer dan pengembang untuk menggunakan WCAG 2 adalah [Cara Memenuhi WCAG 2 (Referensi Cepat): Referensi cepat yang bisa disesuaikan terkait persyaratan (Kriteria Sukses) dan teknik WCAG 2](http://www.w3.org/WAI/WCAG21/quickref/).** Sumber informasi tersebut mencakup semua pedoman dan kriteria sukses WCAG 2. Sumber informasi tersebut pada dasarnya sama dengan [Ceklis WCAG 2](http://www.w3.org/WAI/WCAG21/quickref/).

Anda dapat menyesuaikan referensi tersebut untuk menunjukkan informasi yang Anda perlukan saat itu. Terdapat "filter" untuk berbagai peran, topik, dan teknologi (seperti HTML, CSS, ARIA). Juga filter untuk [kriteria sukses Level A, AA, atau AAA](https://www.w3.org/WAI/WCAG21/Understanding/conformance#levels).

## Dokumen Pendukung

Dokumen pendukung berhubungan langsung dengan pedoman dan kriteria sukses WCAG. Mereka **tidak diwajibkan** untuk memenuhi WCAG; namun bersifat "informatif" atau pun "non-normatif".

### Memahami

<cite>Memahami WCAG</cite> adalah panduan untuk memahami dan menerapkan WCAG. Dokumen ini berisi rincian untuk orang-orang yang ingin memahami pedoman dan kriteria sukses secara lebih menyeluruh. Termasuk:

*  maksud
*  bagaimana hal ini membantu orang-orang dengan disabilitas yang berbeda
*  catatan terkait dukungan pada browser dan teknologi pendukung
*  contoh
*  sumber informasi

Lebih lanjut:
* **[Tentang Dokumen Memahami](https://www.w3.org/WAI/WCAG22/Understanding/intro)**
* **[Daftar Dokumen Memahami WCAG 2.2](https://www.w3.org/WAI/WCAG22/Understanding/)**
* [Daftar Dokumen Memahami WCAG 2.1](https://www.w3.org/WAI/WCAG21/Understanding/)
* [Daftar Dokumen Memahami WCAG 2.0](https://www.w3.org/TR/UNDERSTANDING-WCAG20/)

### Teknik

<cite>Teknik-teknik WCAG</cite> memberikan panduan khusus **untuk pengembang** tentang cara mengembangkan konten web yang aksesibel. Dokumen ini memberikan contoh umum dan teknologi-spesifik, termasuk untuk HTML, CSS, penulisan skrip, multimedia, dan WAI-ARIA.

* **Teknik yang memadai** adalah contoh cara untuk memenuhi kriteria sukses. Jika Anda mengikuti teknik yang memadai untuk kriteria sukses, maka Anda sudah memenuhi kriteria tersebut.
* **Teknik yang disarankan** adalah cara yang disarankan untuk meningkatkan aksesibilitas. Teknik-teknik tersebut sangat membantu sebagian pengguna, dan mungkin merupakan satu-satunya cara bagi sebagian pengguna untuk mengakses jenis konten tertentu.
* **Kegagalan** adalah hal-hal yang menyebabkan hambatan aksesibilitas dan tidak terpenuhinya kriteria sukses tertentu.

Lebih lanjut:
* **[Tentang Teknik](https://www.w3.org/WAI/WCAG22/Understanding/understanding-techniques)**
* **[Daftar Teknik 2.2](https://www.w3.org/WAI/WCAG22/Techniques/)**
* [Daftar Teknik 2.1](https://www.w3.org/WAI/WCAG21/Techniques/)
* [Daftar Teknik 2.0](https://www.w3.org/TR/WCAG20-TECHS/)

### Aturan Pengujian

Aturan Pengujian menjelaskan cara menguji kesesuaian dengan kriteria sukses WCAG. Tujuan utamanya adalah untuk mengembangkan sarana evaluasi dan metodologi pengujian. (Lebih tangguh dibandingkan pengujian yang dimuat dalam teknik.)

* [Tentang Aturan Pengujian WCAG 2](/standards-guidelines/act/rules/about/)
* [Daftar semua Aturan Pengujian WCAG 2](/standards-guidelines/act/rules/)

## Panduan Tambahan {#supplement}

Panduan tambahan ditujukan untuk melampaui persyaratan WCAG. Ini **tidak wajib** dilakukan untuk memenuhi WCAG. Sebagian besar panduan ini penting bagi orang-orang dengan kesulitan tertentu, termasuk ketidakmampuan kognitif dan kesulitan belajar.

* **[Tentang Panduan Tambahan](/WCAG2/supplemental/about/)**
* **[Daftar semua Panduan Tambahan](/WCAG2/supplemental/)**

## Sumber Informasi Tambahan

**Sebelum mulai bekerja dengan WCAG**, Anda mungkin ingin membaca sumber daya berikut:
* [[Pengenalan ke Aksesibilitas Web]](/fundamentals/accessibility-intro/)
* [[Prinsip-Prinsip Aksesibilitas]](/fundamentals/accessibility-principles/)
* [[Gambaran Umum Pedoman Aksesibilitas Konten Web (WCAG)]](/standards-guidelines/wcag/)

Sumber informasi lain yang mencakup topik tertentu, misalnya:
* [Tutorial Aksesibilitas Web](https://www.w3.org/WAI/tutorials/) mencakup struktur halaman, navigasi, gambar, tabel, korsel, isian
* [[Membuat Media Audio dan Video yang Aksesibel]](/media/av/) mencakup multimedia

Kami mengajak Anda untuk melihat-lihat situs web W3C WAI untuk menemukan informasi lain yang mungkin menarik untuk Anda baca atau bagikan dengan orang lain.


{% include_cached excol.html type="start" id="diagram" %}

## Diagram

{% include_cached excol.html type="middle" %}

Diagram berikut menampilkan dokumen WCAG 2 berbeda untuk tujuan yang berbeda. Diagram tersebut menggunkan "WCAG 2.0" namun tetap berlaku untuk WCAG 2.1 dan WCAG 2.2.

{% include image.html src="wcag20docs.png" alt="" %}

Tidak termasuk pada diagram lama:
* Aturan Pengujian
* Panduan Tambahan

**Deskripsi panjang:**

Empat kotak terhubung:
* Atas: _Referensi Cepat yang Bisa Disesuaikan_ ; **Cara Memenuhi WCAG 2.0**
   * Pedoman
     * Kriteria Sukses
       * Teknik
* Tengah: _Standar W3C_. **WCAG 2.0**
   * Prinsip
     * Pedoman
       * Kriteria Sukses
   * Kesesuaian
* Kiri: _Petunjuk untuk Pengembang_ ; **Teknik WCAG 2.0** _ ; (HTML, CSS, skrip, ...)_
   * Catatan terkait dukungan pada browser dan teknologi pendukung
   * Contoh, kode
   * Sumber informasi
   * Prosedur pengujian
* Kanan: _Referensi Lengkap_ ; **Memahami WCAG 2.0**
   * Maksud
   * Manfaat bagi penyandang disabilitas
   * Contoh skenario
   * Sumber informasi
   * Teknik

Garis menunjukkan tautan bagi pengguna untuk berpindah dari satu dokumen ke dokumen lainnya:
* Dari Referensi Cepat ke Standar, Teknik, Memahami
* Dari Standar ke Referensi Cepat, Memahami
* Dari Teknik ke Memahami
* Dari Memahami ke Standar, Teknik

{% include_cached excol.html type="end" %}

