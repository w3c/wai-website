---
title: "Gambaran Umum WCAG2ICT"
nav_title: "Penerapan pada TIK Nonweb"

description: "Memperkenalkan dokumen: Panduan Penerapan WCAG 2 pada Teknologi Informasi dan Komunikasi Nonweb (WCAG2ICT)."

lang: id
last_updated: 2024-01-15
permalink: /standards-guidelines/wcag/non-web-ict/id

translators:
- name: "Fri Rasyidi"

github:
  label: wai-wcag-intro

image: /content-images/wai-intro-wcag/general-social.jpg
footer: >
  <p><strong>Date:</strong> Diperbarui 31 Augustus 2023.</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/Shawn/">Shawn Lawton Henry</a>. Kontributor: Mary Jo Mueller, Judy Brewer, dan Daniel Montalvo.</p>
  <p>Dikembangkan dengan masukan dari <a href="https://www.w3.org/groups/tf/wcag2ict/">Satuan Tugas WCAG2ICT</a> dan Kelompok Kerja Edukasi dan Pendampingan (<a href="https://www.w3.org/groups/wg/eowg/">EOWG</a>).</p>
ref: /standards-guidelines/wcag/non-web-ict/
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Halaman ini memperkenalkan rancangan dokumen: "Panduan Penerapan WCAG 2.2 pada Teknologi Informasi dan Komunikasi Nonweb (WCAG2ICT)". Dokumen tersebut adalah pembaruan berjalan dari Catatan WCAG2ICT sebelumnya yang mencakup WCAG 2.0.

**Tautan Cepat:**
* [Rancangan WCAG2ICT untuk WCAG 2.2](https://www.w3.org/TR/wcag2ict-22/)
* [Catatan WCAG2ICT untuk WCAG 2.0, September 2013](https://www.w3.org/TR/wcag2ict-20/)
* _URI https://www.w3.org/TR/wcag2ict/ mengarah ke versi rampung terakhir. Yang saat ini adalah versi 2.0. Ketika versi 2.2 telah difinalisasi, URI akan menunjuk ke versi 2.2._

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

<cite>Panduan Penerapan WCAG 2 pada Teknologi Informasi dan Komunikasi Nonweb (WCAG2ICT)</cite> menjelaskan bagaimana Pedoman Aksesibilitas Konten Web (WCAG) bisa diterapkan pada teknologi informasi dan komunikasi (TIK) nonweb, termasuk dokumen dan perangkat lunak. Dokumen tersebut mendukung solusi aksesibilitas yang selaras di berbagai teknologi.

*Latar belakang:* **WCAG 2.0** adalah standar web normatif — yang adalah Rekomendasi W3C dan Standar Internasional ISO ([ISO/IEC 40500:2012](https://www.w3.org/QA/2012/10/wcag_20_is_now_also_isoiec_405.html)) — yang menjelaskan cara membuat konten web (termasuk halaman web statis, aplikasi web dinamis, dll.) yang lebih mudah diakses oleh penyandang disabilitas. WCAG 2.1 diterbitkan pada tahun 2018 dan **WCAG 2.2** direncanakan diterbitkan pada tahun 2023. [Gambaran Umum WCAG](/standards-guidelines/wcag/) memperkenalkan dokumen WCAG dan tautan ke sumber informasi pendukung seperti [[Sekilas tentang WCAG 2.0]](/standards-guidelines/wcag/20/glance/) dan [Cara Memenuhi WCAG 2 (Referensi Cepat)](https://www.w3.org/WAI/WCAG20/quickref/).

*Dokumen ini:* **WCAG2ICT** adalah Catatan Grup W3C yang informatif — tidak normatif dan tidak menetapkan persyaratan. Panduan ini memberikan panduan penerapan prinsip, pedoman, dan kriteria sukses WCAG 2 pada dokumen dan perangkat lunak nonweb. WCAG2ICT dikembangkan untuk memberikan interpretasi resmi tentang bagaimana WCAG 2 bisa diterapkan dalam konteks yang berbeda. Untuk informasi tentang cakupan WCAG2ICT, lihat [Bagian Pengenalan WCAG2ICT](https://www.w3.org/TR/wcag2ict/#intro).

*Pembaruan berjalan:* [Catatan WCAG2ICT 2.0 sebelumnya](https://www.w3.org/TR/wcag2ict-20/) mencakup WCAG 2.0. **[Catatan WCAG2ICT 2.2](https://www.w3.org/TR/wcag2ict-22/) akan mencakup WCAG 2.2**. Saat ini mencakup panduan untuk kriteria sukses WCAG 2.1. Pembaruan selanjutnya akan mencakup panduan untuk kriteria sukses WCAG 2.2. [Rancangan Editor WCAG2ICT](https://w3c.github.io/wcag2ict) mungkin berisi usulan pembaruan yang belum disetujui dan dipublikasikan.

## Untuk siapa WCAG2ICT? {#for}

WCAG2ICT diperuntukkan bagi para manajer ICT, pengembang ICT, pembuat kebijakan, dan pihak lain yang ingin memahami bagaimana WCAG 2 bisa diterapkan pada dokumen dan perangkat lunak nonweb.

## Apa yang dicakup dalam WCAG2ICT? {#whatis}

WCAG2ICT menyediakan:

-   **Konteks keseluruhan** untuk menerapkan WCAG 2 pada dokumen dan perangkat lunak nonweb.
-   **Panduan penerapan prinsip, pedoman, dan kriteria sukses Level A dan AA WCAG** pada dokumen dan perangkat lunak nonweb.
-   **Istilah Penting** terkait penerapan WCAG 2 pada dokumen dan perangkat lunak nonweb.
-   **Komentar mengenai definisi** di Glosarium WCAG 2.
-   **Komentar tentang kesesuaian**.
-   **Informasi latar belakang** tentang beberapa topik.

WCAG2ICT mencakup materi dari standar WCAG 2 untuk memberikan konteks, beserta panduan khusus terkait TIK nonweb, dengan format sebagai berikut:

- **Prinsip, pedoman, dan kriteria sukses WCAG 2** — teks yang diambil persis dari standar WCAG 2. *Ini ditata secara visual dalam kotak kuning pucat dan biasanya diawali dengan "Prinsip...", "Dari Pedoman...", atau "Dari Kriteria Sukses..".*
- **Teks kutipan dari bagian "Maksud" pada dokumen Memahami WCAG 2**, sebuah dokumen pendukung yang informatif. *Ini ditata secara visual dalam kotak kuning pucat dan diawali dengan "Maksud dari Memahami Kriteria Sukses...".*
- **Panduan penerapan setiap kriteria sukses pada dokumen dan perangkat lunak nonweb**. *Ini ditata secara visual dalam kotak biru pucat dengan judul pada latar belakang biru tua yang dimulai dengan "Panduan Tambahan...".*

### Format dokumen teknis

WCAG2ICT mengikuti format [W3C](https://www.w3.org) untuk laporan teknis, yang memiliki beberapa bagian di awal, termasuk tautan ke versi, editor, abstrak, dan status berbeda.

## Siapa yang mengembangkan WCAG2ICT {#wg}

WCAG2ICT dikembangkan oleh [Satuan Tugas WCAG2ICT](https://www.w3.org/WAI/GL/WCAG2ICT-TF/), disediakan untuk ditinjau publik, dan disetujui oleh Kelompok Kerja Pedoman Aksesibilitas ([AG WG]( https://www.w3.org/WAI/GL/)), yang merupakan bagian dari Inisiatif Aksesibilitas Web ([WAI](https://www.w3.org/WAI/)) Konsorsium World Wide Web ([W3C](https://www.w3.org/)).

### Komentar

**Jika Anda memiliki komentar terkait bagian Panduan Tambahan WCAG2ICT**, Anda dapat [membuka isu GitHub baru](https://github.com/w3c/wcag2ict/issues/new). Akun GitHub bisa dibuat secara gratis. Mohon buka isu Github terpisah untuk setiap topiknya, dan tidak mengomentari beberapa topik dalam satu isu.

Jika Anda tidak bisa menggunakan GitHub, Anda dapat memasukkan komentar Anda sebagai bagian isi dari pesan email dan mengirimkannya ke: <public-wcag2ict-comments@w3.org>.

**Jika Anda memiliki komentar terkait kata-kata yang diambil dari WCAG 2 atau Memahami WCAG 2**, silakan baca [[Petunjuk untuk Mengomentari Dokumen WCAG 2]](/standards-guidelines/wcag/commenting/).
