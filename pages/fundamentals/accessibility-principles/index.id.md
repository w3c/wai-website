---
# Translation instructions are after the "#" character in this first section. They are comments that do not show up in the web page. You do not need to translate the instructions after "#".
# In this first section, do not translate the words before a colon. For example, do not translate "title:". Do translate the text after "title:"

title: Prinsip Aksesibilitas
nav_title: "Prinsip Aksesibilitas"
lang: id
last_updated: 2023-12-07  # Put the date of this translation YYYY-MM-DD (with month in the middle)
description: Gambaran umum persyaratan dasar aksesibilitas untuk situs web, aplikasi web, browser, dan sarana lainnya.
teaser_text: Halaman Prinsip Aksesibilitas memperkenalkan beberapa persyaratan aksesibilitas untuk situs web, aplikasi web, browser, dan alat lainnya. Halaman ini memberikan referensi ke standar internasional dari Inisiatif Aksesibilitas Web (WAI) W3C dan kisah-kisah para pengguna web.

translators:
- name: "Fri Rasyidi"   # Replace Jan Doe with translator name
# contributors:
# - name: "Jan Doe"   # Replace Jan Doe with contributor name, or delete this line if none
# - name: "Jan Doe"   # Replace Jan Doe with name, or delete this line if not multiple contributors

github:
  label: wai-accessibility-principles

permalink: /fundamentals/accessibility-principles/id   # Add the language shortcode to the end, with no slash at the end. For example /path/to/file/fr
ref: /fundamentals/accessibility-principles/  # Do not change this

layout: default
image: /content-images/wai-accessibility-principles/social.png
changelog: /fundamentals/accessibility-principles/changelog/ # Do not change this

# In the footer below:
# Do not change the dates
# Do not translate CHANGELOG
# Translate the other words, including "Date:" and "Editors:"
# Translate the Working Group name. Leave the Working Group acronym in English.
footer: >
  <p><strong>Tanggal:</strong> Diperbarui 6 Desember 2023. CHANGELOG</p>
  <p><strong>Editor:</strong> <a href="https://www.w3.org/People/shadi/">Shadi Abou Zahra</a>. <a href="https://www.w3.org/WAI/intro/people-use-web/acknowledgments">Pengakuan kontribusi</a>.</p>
  <p>Dikembangkan oleh Kelompok Kerja Edukasi dan Pendampingan (<a href="https://www.w3.org/WAI/EO/">EOWG</a>). Sebelumnya dikembangkan bersama <a href="https://www.w3.org/WAI/EO/2008/wai-age-tf">Satuan Tugas WAI-AGE</a>, dengan dukungan dari <a href="https://www.w3.org/WAI/WAI-AGE/">Proyek WAI-AGE</a>.</p>
---

{::nomarkdown}
{% include box.html type="start" h="2" title="Ringkasan" class="full" %}
{:/}

Halaman ini memperkenalkan beberapa persyaratan aksesibilitas untuk situs web, aplikasi web, browser, dan sarana lainnya. Halaman ini menyediakan referensi ke Standar Internasional dari Inisiatif Aksesibilitas Web (WAI) W3C dan [kisah-kisah para pengguna web](/people-use-web/user-stories/).

**Catatan:** Ini bukan daftar lengkap dari semua persyaratan aksesibilitas.

{::nomarkdown}
{% include box.html type="end" %}
{:/}


{::options toc_levels="2,3" /}

{::nomarkdown}
{% include_cached toc.html type="start" title="Daftar Isi" class="full" %}
{:/}

-   TOC is created automatically.
{:toc}

{::nomarkdown}
{% include_cached toc.html type="end" %}
{:/}


{% include excol.html type="all" %}

## Standar aksesibilitas web {#standards}

Aksesibilitas web bergantung pada kerja sama dari beberapa komponen. Beberapa diantaranya:

-   **Konten web**{:#webcontent} - merujuk pada bagian mana pun dari sebuah situs web, termasuk teks, gambar, isian, dan multimedia, serta kode markah, skrip, aplikasi, dan sejenisnya.
-   **Agen pengguna**{:#useragents} - perangkat lunak yang digunakan seseorang untuk mengakses konten web, termasuk browser desktop dengan antarmuka grafis, browser berbasis suara, browser ponsel, pemutar multimedia, plugin, dan beberapa [teknologi pendukung](/people-use-web/tools-techniques/#at "definition").
-   **Sarana penulisan**{:#authoringtools} - perangkat lunak atau jasa yang digunakan seseorang untuk membuat konten web, termasuk editor kode, sarana konversi dokumen, sistem manajemen konten, blog, skrip database, dan sarana lainnya.

{% include excol.html type="start" %}

### Lebih lanjut tentang standar aksesibilitas web
{:.no_toc}

{% include excol.html type="middle" %}

Komponen-komponen berikut saling berkaitan dan mendukung satu sama lain. Contohnya, **konten web** perlu menyertakan alternatif teks untuk gambar. Informasi ini perlu bisa diproses oleh **browser web** dan disalurkan ke **teknologi pendukung**, seperti pembaca layar. Penulis memerlukan **sarana penulisan** yang mampu mendukung mereka untuk membuat alternatif teks. Latar belakang selengkapnya bisa dilihat di [[Komponen Esensial dari Aksesibilitas Web]](/fundamentals/components/).

Standar memainkan peranan penting dalam mendefinisikan persyaratan aksesibilitas untuk setiap komponen. Beberapa persyaratan aksesibilitas bisa dipenuhi dengan mudah, namun memahami dasar tentang bagaimana para penyandang disabilitas menggunakan Web akan membantu penerapannya lebih efektif dan efisien. Beberapa aspek aksesibilitas membutuhkan kemampuan teknis atau pengetahuan yang lebih tinggi mengenai bagaimana seseorang menggunakan Web. Dalam kasus mana pun, [melibatkan pengguna sejak awal dan selama proyek berjalan](/test-evaluate/involving-users/) akan membuat pekerjaan Anda lebih baik dan mudah.

Inisiatif Aksesibilitas Web (WAI) W3C menyediakan satu set pedoman yang telah diakui secara internasional sebagai standar untuk aksesibilitas web. Termasuk:

-   **[Pedoman Aksesibilitas Konten Web (WCAG)](/standards-guidelines/wcag/)**
-   **[Pedoman Aksesibilitas Agen Pengguna (UAAG)](/standards-guidelines/uaag/)**
-   **[Pedoman Aksesbilitas Sarana Penulisan (ATAG)](/standards-guidelines/atag/)**

Terdapat pula spesifikasi WAI untuk **[Aplikasi Internet yang Kaya dan Aksesibel (WAI-ARIA)](/standards-guidelines/aria/)**, yang mencakup konten dinamis dan kontrol antarmuka pengguna tingkat lanjut yang dikembangkan dengan Ajax, JavaScript, dan teknologi web terkait.

{% include excol.html type="end" %}

## Informasi dan antarmuka yang bisa ditangkap {#perceivable}

### Alternatif teks untuk konten nonteks {#alternatives}

Alternatif teks sepadan dengan konten nonteksnya. Contohnya termasuk:

-   Padanan singkat untuk gambar, termasuk ikon, tombol, dan elemen grafis
-   Deskripsi data yang direpresentasikan pada bagan, diagram, dan ilustrasi
-   Penjelasan singkat tentang konten nonteks seperti file audio dan video
-   Label untuk kontrol isian, input, dan komponen antarmuka lainnya

Alternatif teks menyampaikan tujuan dari gambar atau berfungsi memberikan pengalaman pengguna yang sepadan. Misalnya, alternatif teks yang sesuai untuk tombol penelusuran adalah "*penelusuran*" dan bukan "*lensa pembesar*".

Alternatif teks bisa disajikan dengan berbagai cara. Misalnya, dibacakan atau ditampilkan di perangkat braille untuk orang yang tidak dapat melihat layar, dan diperbesar ke ukuran teks tertentu untuk yang kesulitan membaca. Alternatif teks berfungsi sebagai label pada fungsi dan kontrol untuk membantu navigasi kibor dan navigasi dengan pengenalan suara (input via ucapan). Mereka juga berperan sebagai label untuk mengidentifikasi audio, video, berkas dalam format lain, serta aplikasi yang disematkan sebagai bagian dari sebuah situs web.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait dengan alternatif teks (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 1.1 - Alternatif Teks](https://www.w3.org/WAI/WCAG22/quickref/#text-alternatives)

**UAAG**

-   [Pedoman 1.1 - Konten Alternatif](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.2.1: (Untuk antarmuka sarana penulisan) Sediakan konten alternatif untuk penulis](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [Pedoman A.2.2: (Untuk antarmuka sarana penulisan) Pastikan tampilan pada halaman edit bisa ditentukan secara programatik](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pedoman A.3.7: (Untuk antarmuka sarana penulisan) Pastikan pratinjau setidaknya sama aksesibelnya dengan agen pengguna yang tersedia di pasaran](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

{% include excol.html type="start" %}

#### Kisah terkait alternatif teks
{:#stories-related-to-text-alternatives.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Martine, siswa daring dengan kesulitan pendengaran](/people-use-web/user-stories/#onlinestudent)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

### Takarir dan alternatif lainnya untuk multimedia {#captions}

Orang-orang yang tidak bisa mendengar audio atau pun melihat video membutuhkan alternatif. Contoh:

-   Transkripsi dan takarir untuk konten audio, seperti rekaman sebuah wawancara di radio
-   Deskripsi audio, narasi yang mendeskripsikan detail visual dalam sebuah video
-   Interpretasi bahasa isyarat dari konten audio, mencakup bagian pengalaman audio yang relevan

Teks transkripsi yang ditulis dengan baik dan memiliki urutan informasi yang tepat dari konten audio atau video akan memberikan aksesibilitas level dasar dan akan memfasilitasi pembuatan teks dan deskripsi audionya.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait multimedia (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 1.2 - Media berbasis waktu](https://www.w3.org/WAI/WCAG22/quickref/#time-based-media)

**UAAG**

-   [Pedoman 1.1 - Konten alternatif](https://www.w3.org/TR/UAAG20/#gl-access-alternative-content)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.2.1: (Untuk antarmuka sarana penulisan) Sediakan konten alternatif untuk penulis](https://www.w3.org/TR/ATAG20/#gl_a21)
-   [PPedoman A.3.7: (Untuk antarmuka sarana penulisan) Pastikan pratinjau setidaknya sama aksesibelnya dengan agen pengguna yang tersedia di pasaran](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}
{% include excol.html type="start" %}

#### Kisah terkait multimedia {#stories-related-to-multimedia}
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, siswa daring dengan kesulitan pendengaran](/people-use-web/user-stories/#onlinestudent)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

### Konten bisa disajikan dengan berbagai cara {#adaptable}

Agar pengguna bisa mengubah cara penyajian konten, penting untuk:

-   Judul, daftar, tabel, kolom input, dan struktur konten ditandai dengan benar
-   Urutan informasi atau instruksi terpisah dari cara penyajiannya
-   Browser dan teknologi pendukung menyediakan pengaturan untuk mengubah cara penyajiannya

Memenuhi persyaratan ini memungkinkan konten untuk bisa diucapkan dengan benar, diperbesar, atau disesuaikan untuk memenuhi kebutuhan dan preferensi orang yang berbeda-beda. Sebagai contoh, konten tersebut bisa disediakan menggunakan kombinasi warna, ukuran teks, atau gaya tampilan tertentu untuk memudahkan saat membaca. Persyaratan ini juga memfasilitasi bentuk adaptasi lainnya, termasuk pembuatan garis besar dan ringkasan halaman untuk membantu seseorang mendapatkan gambaran umum dan kemudian dengan lebih mudah fokus ke bagian tertentu.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait cara penyediaan yang bisa disesuaikan (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 1.3 - Bisa Disesuaikan](https://www.w3.org/WAI/WCAG22/quickref/#adaptable)

**UAAG**

-   [Pedoman 1.4 - Pengaturan teks](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Pedoman 1.5 - Pengaturan volume](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Pedoman 1.6 - Pengaturan pengucapan sintesis](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Pedoman 1.7 - Pengaturan lembar gaya tampilan (*stylesheet*) pengguna](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Pedoman 1.9 - Tampilan alternatif](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Pedoman 1.10 - Informasi elemen](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.2.2: (Untuk antarmuka sarana penulisan) Pastikan tampilan pada halaman edit bisa ditentukan secara programatik](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pedoman A.3.7: (Untuk antarmuka sarana penulisan) Pastikan pratinjau setidaknya sama aksesibelnya dengan agen pengguna yang tersedia di pasaran](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait cara penyediaan yang bisa disesuaikan
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, pembeli daring dengan buta warna](/people-use-web/user-stories/#shopper)
-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

### Konten yang lebih mudah dilihat dan didengar {#distinguishable}

Konten yang bisa dibedakan akan lebih mudah untuk dilihat dan didengar. Konten tersebut meliputi:

-   Warna tidak digunakan sebagai satu-satunya cara untuk menyediakan informasi atau mengenali sebuah konten
-   Kombinasi warna latar depan dan belakangnya memiliki kontras yang cukup
-   Ketika pengguna memperbesar teks hingga 400% atau mengubah jarak antar teks, tidak ada informasi yang hilang
-   Teks menyesuaikan dengan jendela ("porta pandang") yang kecil termasuk ketika pengguna membuat teks menjadi lebih besar
-   Ukuran gambar berupa teks bisa diubah, diganti dengan teks padanannya, atau dihindari jika memungkinkan
-   Pengguna bisa menjedakan, menghentikan, atau menyesuaikan volume audio yang diputar pada situs web
-   Suara latar bervolume rendah atau bisa dimatikan, untuk menghindari gangguan atau menjadi distraksi

Memenuhi persyaratan ini membantu memisahkan latar depan dan belakangnya, sehingga informasi yang penting jadi lebih bisa dibedakan. Ini termasuk mempertimbangkan orang yang tidak dan yang menggunakan teknologi pendukung yang mungkin terganggu oleh konten audio mau pun visual yang berada di latar. Sebagai contoh, banyak penyandang buta warna yang tidak menggunakan sarana pendukung khusus dan hanya bergantung pada desain dengan kontras warna yang cukup antara teks dan warna latarnya. Contoh lainnya, audio yang secara otomatis dimainkan dapat mengganggu mereka yang menggunakan teknologi teks-ke-suara atau [alat bantu pendengaran (ALDs)](/teach-advocate/accessible-presentations/#ald "definition").

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait konten yang bisa dibedakan (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 1.4 - Bisa Dibedakan](https://www.w3.org/WAI/WCAG22/quickref/#distinguishable)

**UAAG**

-   [Pedoman 1.3 - Menyoroti](https://www.w3.org/TR/UAAG20/#gl-interaction-highlight)
-   [Pedoman 1.4 - Pengaturan teks](https://www.w3.org/TR/UAAG20/#gl-text-config)
-   [Pedoman 1.5 - Pengaturan volume](https://www.w3.org/TR/UAAG20/#gl-volume-config)
-   [Pedoman 1.6 - Pengaturan pengucapan sintesis](https://www.w3.org/TR/UAAG20/#gl-speech-config)
-   [Pedoman 1.7 - Pengaturan lembar gaya tampilan (*stylesheet*) pengguna](https://www.w3.org/TR/UAAG20/#gl-style-sheets-config)
-   [Pedoman 1.8 - Orientasi pada porta pandang](https://www.w3.org/TR/UAAG20/#gl-viewport-orient)
-   [Pedoman 1.9 - Tampilan alternatif](https://www.w3.org/TR/UAAG20/#gl-alternative-views)
-   [Pedoman 1.10 - Informasi elemen](https://www.w3.org/TR/UAAG20/#gl-info-link)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.3.7: (Untuk antarmuka sarana penulisan) Pastikan pratinjau setidaknya sama aksesibelnya dengan agen pengguna yang tersedia di pasaran](https://www.w3.org/TR/ATAG20/#gl_a37)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait konten yang bisa dibedakan
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, pembeli daring dengan buta warna](/people-use-web/user-stories/#shopper)
-   [Martine, siswa daring dengan kesulitan pendengaran](/people-use-web/user-stories/#onlinestudent)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

## Antarmuka dan navigasi yang bisa diopersikan {#operable}

### Fungsi tersedia melalui kibor {#keyboard}

Banyak orang yang tidak menggunakan tetikus dan bergantung pada kibor untuk berinteraksi dengan Web. Mereka membutuhkan akses kibor ke semua fungsi, termasuk kontrol pada isian, input, dan berbagai komponen antarmuka lainnya.

Aksesibilitas kibor termasuk:

-   Semua fungsi yang tersedia pada tetikus bisa diakses melalui kibor
-   Fokus kibor tidak terperangkap di bagian mana pun dari konten
-   Browser web, sarana penulisan, dan sarana lainnya menyediakan dukungan kibor

Memenuhi persyaratan ini membantu pengguna kibor, termasuk mereka yang menggunakan kibor alternatif seperti kibor dengan tata letak ergonomis, kibor virtual, atau perangkat sakelar. Akan membantu pula bagi orang-orang yang menggunakan pengenalan suara (input via ucapan) untuk mengoperasikan situs web dan mendikte teks melalui kibor virtual.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait aksesibilitas kibor (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 2.1 - Aksesibel melalui kibor](https://www.w3.org/WAI/WCAG22/quickref/#keyboard-accessible)

**UAAG**

-   [Pedoman 2.1 - Akses kibor](https://www.w3.org/TR/UAAG20/#gl-keyboard-access)
-   [Pedoman 2.2 - Navigasi yang berurutan](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Pedoman 2.3 - Navigasi dan aktivasi langsung](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Pedoman 2.11 - Perangkat Input Lainnya](https://www.w3.org/TR/UAAG20/#gl-other-devices)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.3.1: (Untuk antarmuka sarana penulisan) Sediakan akses kibor untuk fitur-fitur penulisan](https://www.w3.org/TR/ATAG20/#gl_a31)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait aksesibilitas kibor
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)

{% include excol.html type="end" %}

### Pengguna memiliki waktu yang cukup untuk membaca dan menggunakan konten {#time}

Beberapa orang membutuhkan waktu lebih dari yang lainnya untuk membaca dan menggunakan sebuah konten. Misalnya, orang-orang yang membutuhkan waktu lebih untuk mengetik, memahami instruksi, mengoperasikan kontrol, atau pun menyelesaikan tugas dalam sebuah situs web.

Contoh dalam memberikan waktu yang cukup termasuk juga menyediakan mekanisme untuk:

-   Menghentikan, memperpanjang, atau menyesuaikan batasan waktu, kecuali jika diperlukan
-   Menjedakan, menghentikan, atau menyembunyikan konten yang bergerak, berkedip, atau pun bergulir
-   Menunda atau menghambat interupsi, kecuali jika dibutuhkan
-   Mengautentikasi ulang tanpa kehilangan data ketika sesi berakhir

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait waktu yang cukup (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 2.2 - Waktu yang cukup](https://www.w3.org/WAI/WCAG22/quickref/#enough-time)

**UAAG**

-   [Pedoman 2.8 - Interaksi yang tidak dibatasi waktu](https://www.w3.org/TR/UAAG20/#gl-time-independent)
-   [Pedoman 2.10 - Media berbasis waktu](https://www.w3.org/TR/UAAG20/#gl-control-inaccessible-content)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.3.2: (Untuk antarmuka sarana penulisan) Berikan penulis waktu yang cukup](https://www.w3.org/TR/ATAG20/#gl_a32)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait waktu yang cukup
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

### Konten tidak mengakibatkan kejang dan reaksi fisik lainnya {#safe}

Konten yang berkedip dengan kecepatan atau pola tertentu dapat mengakibatkan reaksi fotosensitif, termasuk kejang. Konten berkedip idealnya dihindari sepenuhnya atau hanya digunakan dengan cara yang diketahui tidak akan mengakibatkan resiko. Animasi dan konten bergerak juga dapat mengakibatkan ketidaknyamanan dan munculnya reaksi fisik.

Contoh dalam menghindari mengakibatkan kejang dan reaksi fisik lainnya:

-   Jangan menyertakan konten yang berkedip dengan kecepatan dan pola tertentu
-   Beri tahu pengguna sebelum menampilkan konten yang berkedip, dan sediakan alternatif lain
-   Sediakan mekanisme untuk mematikan animasi, kecuali jika penting

{% include excol.html type="start" %}

#### Persyaratan aksesbilitas terkait kejang (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 2.3 - Kejang](https://www.w3.org/WAI/WCAG22/quickref/#seizures-and-physical-reactions)

**UAAG**

-   [Pedoman 2.9 - Berkedip](https://www.w3.org/TR/UAAG20/#gl-prevent-flash)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.3.3: (Untuk antarmuka sarana penulisan) Bantu penulis menghindari konten berkedip yang dapat mengakibatkan kejang](https://www.w3.org/TR/ATAG20/#gl_a33)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}

### Pengguna dapat dengan mudah menavigasi, mencari konten, dan menentukan dimana mereka berada {#navigable}

Konten yang terorganisasi dengan baik membantu pengguna mengorientasikan dirinya dan melakukan navigasi secara efektif. Konten tersebut meliputi:

-   Halaman dengan judul yang jelas dan terorganisasi dengan baik menggunakan judul bagian yang deskriptif
-   Terdapat lebih dari satu cara untuk mencari halaman yang relevan pada situs web
-   Pengguna diberikan informasi mengenai lokasi mereka saat ini relatif terhadap halaman-halaman yang terkait
-   Terdapat cara untuk melewati sepenggal konten yang berulang di banyak halaman
-   Fokus kibor bisa dilihat, dan urutan fokus mengikuti pola yang bermakna
-   Tujuan adanya sebuah tautan jelas, idealnya bahkan ketika tautan itu dilihat secara mandiri

Memenuhi persyaratan ini membantu orang untuk menavigasi halaman web dengan berbagai cara, tergantung dari kebutuhan dan preferensi mereka. Sebagai contoh, ada yang bergantung pada struktur navigasi hierarkis seperti bilah menu untuk mencari halaman web yang spesifik, ada pula yang bergantung pada fungsi penelusuran pada situs web. Beberapa orang ada melihat konten sedangkan yang lain mendengarkan atau bahkan melihat dan mendengarkan secara bersamaan. Beberapa mungkin meenggunakan konten hanya dengan tetikus atau kibor, sedangkan yang lain mungkin menggunakan keduanya.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait navigasi (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 2.4 - Bisa Dinavigasikan](https://www.w3.org/WAI/WCAG22/quickref/#navigable)

**UAAG**

-   [Pedoman 2.2 - Navigasi yang berurutan](https://www.w3.org/TR/UAAG20/#gl-sequential-navigation)
-   [Pedoman 2.3 - Navigasi dan aktivasi langsung](https://www.w3.org/TR/UAAG20/#gl-direct-navigation-and-activation)
-   [Pedoman 2.4 - Penelusuran teks](https://www.w3.org/TR/UAAG20/#gl-search-text)
-   [Pedoman 2.5 - Navigasi struktural](https://www.w3.org/TR/UAAG20/#gl-nav-structure)
-   [Pedoman 2.7 - Kontrol grafis](https://www.w3.org/TR/UAAG20/#gl-configure-controls)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.2.2: (Untuk antarmuka sarana penulisan) Pastikan tampilan pada halaman edit bisa ditentukan secara programatik](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pedoman A.3.4: (Untuk antarmuka sarana penulisan) Tingkatkan pengalaman navigasi dan pengeditan melalui struktur konten](https://www.w3.org/TR/ATAG20/#gl_a34)
-   [Pedoman A.3.5: (Untuk antarmuka sarana penulisan) Sediakan penelusuran teks untuk konten](https://www.w3.org/TR/ATAG20/#gl_a35)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait navigasi
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

### Pengguna bisa menggunakan berbagai modalitas input selain kibor {#modalities}

Tersedianya modalitas input selain kibor, seperti aktivasi sentuh, pengenalan suara (input via ucapan), dan gestur membuat konten lebih mudah untuk digunakan bagi banyak orang. Namun tidak semua bisa menggunakan berbagai mode input ini, dan dengan kemampuan yang sama. Pertimbangan desain tertentu akan memaksimalkan keuntungan dari berbagai mode input ini. Termasuk:

-   Gestur yang membutuhkan ketangkasan atau gerakan yang cekatan memiliki alternatif mode yang tidak membutuhkan ketangkasan tinggi
-   Komponen didesain untuk menghindari aktivasi yang tidak disengaja, sebagai contoh dengan menyediakan fungsi pembatalan
-   Label yang disediakan kepada pengguna sesuai dengan nama objek pada kodenya, untuk mendukung aktivasi dengan suara
-   Fungsi yang diaktifkan oleh gerakan juga bisa diaktifkan melalui komponen antarmuka
-   Tombol, tautan, dan komponen aktif lainnya cukup besar agar lebih mudah diaktifkan dengan sentuhan

Memenuhi persyaratan ini membuat konten lebih mudah digunakan oleh banyak orang dengan kemampuan yang beragam melalui berbagai perangkat. Hal ini termasuk konten yang digunakan di ponsel, tablet, dan terminal mandiri seperti mesin tiket.

{% include excol.html type="start" id="" %}

#### Persyaratan aksesibilitas terkait modalitas input (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 2.5 - Berbagai Mode Input](https://www.w3.org/WAI/WCAG22/quickref/#input-modalities)

{% include excol.html type="end" %}{% include excol.html type="start" id="" %}

#### Kisah terkait modalitas input
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)

{% include excol.html type="end" %}

## Antarmuka dan informasi yang bisa dimengerti {#understandable}

### Teks bisa dibaca dan dimengerti {#readable}

Penulis konten perlu memastikan konten teks bisa dibaca dan dimengerti oleh sebanyak mungkin penerima, termasuk ketika dibacakan oleh teknologi teks-ke-suara. Konten tersebut meliputi:

-   Mengidentifikasi bahasa utama sebuah halaman web, seperti Bahasa Arab, Bahasa Belanda, atau Bahasa Korea
-   Mengidentifikasi bahasa dari penggalan teks, frasa, atau bagian lainnya dalam sebuah halaman web
-   Menyediakan definisi untuk kata, frasa, idiom, dan singkatan yang tidak biasa
-   Menggunakan bahasa yang sejelas dan sesederhana mungkin, atau menyediakan versi yang disederhanakan

Memenuhi persyaratan ini membantu perangkat lunak, termasuk teknologi pendukung, untuk memproses konten teks dengan benar. Sebagai contoh, persyaratan ini membantu perangkat lunak untuk mengucapkan konten, atau membuat ringkasan halaman, dan untuk menyediakan definisi pada kata yang tidak umum digunakan seperti jargon teknis. Hal ini juga membantu mereka yang memiliki kesulitan memahami kalimat, frasa, dan kosa kata yang kompleks. Lebih spesifik, hal ini membantu orang-orang dengan berbagai tipe disabilitas kognitif.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait keterbacaan (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 3.1 - Bisa Dibaca](https://www.w3.org/WAI/WCAG22/quickref/#readable)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.4.2: (Untuk antarmuka sarana penulisan) Dokumentasikan antarmuka pengguna, termasuk semua fitur aksesibilitas](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait keterbacaan
{:.no_toc}

{% include excol.html type="middle" %}

-   [Martine, siswa daring dengan kesulitan pendengaran](/people-use-web/user-stories/#onlinestudent)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)

{% include excol.html type="end" %}

### Konten muncul dan beroperasi dengan cara yang bisa diprediksi {#predictable}

Banyak orang bergantung pada antarmuka yang bisa diprediksi dan akan mengalami disorientasi atau terdistraksi oleh tampilan atau perilaku yang tidak konsisten. Contoh dalam membuat konten yang lebih bisa diprediksi meliputi:

-   Mekanisme navigasi yang berulang pada banyak halaman selalu muncul di tempat yang sama
-   Komponen antarmuka yang berulang pada halaman situs selalu memiliki label yang sama
-   Perubahan signifikan pada halaman situs tidak terjadi tanpa persetujuan pengguna

Memenuhi persyaratan ini membantu orang untuk bisa dengan cepat mempelajari fungsionalitas dan mekanisme navigasi yang tersedia pada situs web, dan mengoperasikannya sesuai dengan kebutuhan dan preferensi spesifik mereka. Sebagai contoh, beberapa orang membuat pintasan ke fungsi yang sering mereka gunakan untuk memudahkan penggunaan navigasi kibor. Yang lain mengingat langkah-langkan untuk mencapai sebuah halaman atau menyelesaikan sebuah proses pada situs web. Keduanya bergantung pada fungsionalitas yang konsisten dan bisa diprediksi.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait bisa diprediksi (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 3.2 - Bisa Diprediksi](https://www.w3.org/WAI/WCAG22/quickref/#predictable)

**UAAG**

-   [Pedoman 3.3 - Bisa Diprediksi](https://www.w3.org/TR/UAAG20/#gl-predictable-operation)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.2.2: (Untuk antarmuka sarana penulisan) Pastikan tampilan pada halaman edit bisa ditentukan secara programatik](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pedoman A.4.2: (Untuk antarmuka sarana penulisan) Dokumentasikan antarmuka pengguna, termasuk semua fitur aksesibilitas](https://www.w3.org/TR/ATAG20/#gl_b42)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait bisa diprediksi
{:.no_toc}

{% include excol.html type="middle" %}

-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

### Pengguna dibantu untuk menghindari dan memperbaiki kesalahan {#tolerant}

Isian dan interaksi lainnya bisa membingungkan dan sulit untuk digunakan oleh banyak orang, hasilnya, mereka lebih mungkin melakukan kesalahan. Contoh dari membantu pengguna menghindari dan memperbaiki kesalahan termasuk menyediakan:

-   Instruksi, pesan eror, dan saran untuk perbaikan yang deskriptif
-   Bantuan yang sesuai konteks untuk fungsi dan interaksi yang kompleks
-   Kesempatan untuk meninjau, memperbaiki, atau meralat isian yang telah dikirim ketika perlu

Memenuhi persyaratan ini membantu orang-orang yang tidak melihat atau mendengar konten, dan mungkin tidak menyadari adanya hubungan, urutan, dan petunjuk lain yang sifatnya implisit. Hal ini juga membantu orang yang tidak memahami fungsi, mengalami disorientasi atau bingung, lupa, atau melakukan kesalahan ketika berinteraksi dan mengisi isian karena alasan apa pun.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait dukungan penginputan (tautan ke spesifikasi teknis)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 3.3 - Dukungan penginputan](https://www.w3.org/WAI/WCAG22/quickref/#input-assistance)

**UAAG**

-   [Pedoman 3.1 - Kesalahan](https://www.w3.org/TR/UAAG20/#gl-avoid-mistakes)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Pedoman A.2.2: (Untuk antarmuka sarana penulisan) Pastikan tampilan pada halaman edit bisa ditentukan secara programatik](https://www.w3.org/TR/ATAG20/#gl_a22)
-   [Pedoman A.4.1: (Untuk antarmuka sarana penulisan) Bantu penulis menghindari dan memperbaiki kesalahan](https://www.w3.org/TR/ATAG20/#gl_b41)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait dukungan penginputan
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, pembeli daring dengan buta warna](/people-use-web/user-stories/#shopper)
-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Yun, pensiunan dengan gangguan penglihatan, tangan tremor, dan kehilangan ingatan jangka pendek ringan](/people-use-web/user-stories/#retiree)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)

{% include excol.html type="end" %}

## Konten yang tangguh dan interpretasi yang bisa diandalkan {#robust}

### Konten kompatibel dengan sarana yang ada sekarang dan akan ada di masa depan {#compatible}

Konten yang tangguh adalah konten yang kompatibel dengan berbagai browser, teknologi pendukung, dan agen pengguna lainnya. Contoh bagaimana hal ini bisa diraih meliputi:

-   Memastikan markah bisa diinterpretasikan dengan andal, contohnya dengan memastikan validitasnya
-   Menyediakan nama (*name*), peran (*role*), dan nilai (*value*) untuk komponen antarmuka yang nonstandar

Memenuhi persyaratan ini membantu memaksimalkan kompatibilitas dengan agen pengguna, termasuk teknologi pendukung, yang ada sekarang dan akan ada di masa depan. Secara spesifik, hal ini memungkinkan teknologi pendukung untuk memproses konten dengan andal, dan untuk menyediakan atau mengoperasikannya dengan berbagai cara. Termasuk juga untuk tombol nonstandar (melalui skrip), bidang input, dan kontrol lainnya.

{% include excol.html type="start" %}

#### Persyaratan aksesibilitas terkait kompatibilitas (links to technical specification)
{:.no_toc}

{% include excol.html type="middle" %}

**WCAG**

-   [Pedoman 4.1 - Kompatibel](https://www.w3.org/WAI/WCAG22/quickref/#compatible)

**UAAG**

-   [Guideline 2.6 - Pengaturan preferensi](https://www.w3.org/TR/UAAG20/#gl-store-prefs)
-   [Guideline 4.1 - Teknologi pendukung](https://www.w3.org/TR/UAAG20/#gl-AT-access)
-   [Guideline 5.1 - Ikuti spesifikasi](https://www.w3.org/TR/UAAG20/#gl-obs-env-conventions)

**ATAG**

-   [Prinsip A.1: Antarmuka sarana penulisan mengikuti pedoman aksesibilitas yang berlaku](https://www.w3.org/TR/ATAG20/#principle_a1)
-   [Bagian B. Dukung pembuatan konten yang aksesibel](https://www.w3.org/TR/ATAG20/#part_b)

{% include excol.html type="end" %}{% include excol.html type="start" %}

#### Kisah terkait kompatibilitas
{:.no_toc}

{% include excol.html type="middle" %}

-   [Lee, pembeli daring dengan buta warna](/people-use-web/user-stories/#shopper)
-   [Alex, reporter dengan cedera regangan berulang (RSI)](/people-use-web/user-stories/#reporter)
-   [Ilya, anggota staf senior penyandang disabilitas netra](/people-use-web/user-stories/#accountant)
-   [Preety, siswa sekolah menengah yang memiliki Gangguan pemusatan perhatian dan hiperaktivitas (ADHD) serta disleksia](/people-use-web/user-stories/#classroomstudent)
-   [Luis, asisten supermarket dengan Sindrom Down](/people-use-web/user-stories/#supermarketassistant)
-   [Kaseem, remaja penyandang disabilitas rungu dan disabilitas netra](/people-use-web/user-stories/#teenager)

{% include excol.html type="end" %}

{% include excol.html type="all" %}

