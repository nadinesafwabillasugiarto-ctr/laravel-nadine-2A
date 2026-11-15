<p align="center">
  <h1 align="center">🌟 LARAVEL MVC WEB APPLICATION (PROJECT-2A)</h1>
  <p align="center"><b>Aplikasi Web Multi-Modul Berbasis Laravel 13, Bootstrap 5, dan Arsitektur MVC</b></p>
  <p align="center">
    <img src="https://img.shields.io/badge/Laravel-v13.40.0-red?style=flat-square&logo=laravel" alt="Laravel Version">
    <img src="https://img.shields.io/badge/PHP-v8.5.12-blue?style=flat-square&logo=php" alt="PHP Version">
    <img src="https://img.shields.io/badge/Bootstrap-v5.3.0-purple?style=flat-square&logo=bootstrap" alt="Bootstrap">
    <img src="https://img.shields.io/badge/Status-Active-success?style=flat-square" alt="Status">
  </p>
</p>

---

## 👤 Identitas Pengembang & Akademik
* **Nama Lengkap:** Nadine Safwabilla Al Khalifi Sugiarto
* **Program Studi:** Strata 1 (S1) Sistem Informasi
* **Fakultas:** Fakultas Teknik dan Ilmu Komputer (FTIK)
* **Institusi:** Universitas Nusantara PGRI (UNP) Kediri
* **Mata Kuliah / Tugas:** Praktikum Pemrograman Web (Project 2A)

---

## ⚙️ Spesifikasi Lingkungan Pengembangan (Environment Specs)
* **Framework Backend:** Laravel v13.40.0
* **Bahasa Pemrograman:** PHP v8.5.12
* **Frontend Framework:** Bootstrap v5.3.0 (CDN)
* **Kustomisasi Gaya:** CSS Inline & Hex Color Custom (`#800000` / Merah Maroon)
* **Version Control System:** Git & GitHub (`laravel-nadine-2A`)
* **Local Server:** Laravel Artisan Development Server (`php artisan serve`)

---

## 🏗️ Arsitektur & Struktur Proyek (MVC Pattern)
Proyek ini menerapkan pola arsitektur **Model-View-Controller (MVC)** untuk memisahkan logika bisnis, pemrosesan data, dan antarmuka pengguna:
1. **Model:** Menangani struktur data dan interaksi (menggunakan array asosiatif & data dinamis pengendali).
2. **View:** Berada di direktori `resources/views/` menggunakan mesin templating **Blade** dan antarmuka **Bootstrap 5**.
3. **Controller:** Berada di `app/Http/Controllers/` untuk mengatur alur logika permintaan dari rute (*routes*) ke tampilan.

---

## 🛠️ Rincian Modul & Fitur Utama

### 1. Modul Dashboard & E-Commerce / Olshop (`Home`)
* **Controller:** `DashboardController.php`
* **Endpoint:** `/home` atau `/`
* **View:** `olshop.blade.php`, `product.blade.php`, `detail.blade.php`, `about.blade.php`
* **Deskripsi:** Beranda utama aplikasi yang menyajikan katalog produk pilihan (seperti Kemeja Flanel, Tas Selempang Kanvas, dan Sepatu Sneakers Casual), navigasi menu interaktif, halaman detail produk berbasis parameter harga, serta informasi profil toko (*About*).

### 2. Modul Daftar Mahasiswa (`Mahasiswa Database`)
* **Controller:** `MahasiswaController.php`
* **Endpoint:** `/daftar/mahasiswa`
* **View:** `mahasiswa.blade.php`
* **Deskripsi:** Menampilkan data mahasiswa dalam bentuk tabel terstruktur menggunakan teknik *passing data* array asosiatif dan fungsi `compact()`.
* **Kustomisasi Visual:** Menggunakan aksen warna **Merah Maroon (`#800000`)** pada judul halaman dan kepala tabel (`<thead>`) sesuai permintaan desain kustom.
* **Daftar Entri Mahasiswa:**
  * Nadine (Kediri — P)
  * Athala (Nganjuk — L)
  * Dhennys (Malang — L)
  * Chelsea (Surabaya — P)
  * Inez (Nganjuk — P)

### 3. Modul Kalkulator Segitiga (`Triangle Calculator`)
* **Controller:** `KalkulatorSegitigaController.php`
* **Endpoint:** `/kalkulator/segitiga` (GET & POST)
* **View:** `kalkulator_segitiga.blade.php`
* **Deskripsi:** Formulir interaktif untuk menghitung luas segitiga dengan memasukkan nilai alas dan tinggi secara dinamis, dilengkapi validasi keamanan CSRF (`@csrf`) dan direktif Blade `@isset` untuk merender hasil perhitungan.

---

## 📋 Tabel Rute Aplikasi (`routes/web.php`)

| URL Endpoint | HTTP Method | Controller Action | Deskripsi / Fungsi Halaman |
| :--- | :---: | :--- | :--- |
| `/` atau `/home` | `GET` | `DashboardController@home` | Menampilkan halaman utama Olshop & Katalog Produk |
| `/product` | `GET` | `DashboardController@product` | Menampilkan daftar keseluruhan produk |
| `/produk/detail/{harga}` | `GET` | `DashboardController@detail` | Menampilkan detail produk berdasarkan parameter harga |
| `/about` | `GET` | `DashboardController@about` | Menampilkan halaman informasi / tentang aplikasi |
| `/daftar/mahasiswa` | `GET` | `MahasiswaController@index` | Menampilkan tabel data mahasiswa ber-tema Maroon |
| `/kalkulator/segitiga` | `GET` | `KalkulatorSegitigaController@form` | Menampilkan antarmuka form kalkulator segitiga |
| `/kalkulator/segitiga` | `POST` | `KalkulatorSegitigaController@hitung` | Memproses data input alas & tinggi untuk menghitung luas |

---

## 💻 Panduan Instalasi & Menjalankan Proyek (Local Setup)

1. **Clone repositori ke perangkat lokal:**
   ```bash
   git clone [https://github.com/nadinesafwabillasugiarto-ctr/laravel-nadine-2A.git](https://github.com/nadinesafwabillasugiarto-ctr/laravel-nadine-2A.git)