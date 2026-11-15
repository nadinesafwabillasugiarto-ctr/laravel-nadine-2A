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

## 🗂️ Peta Struktur Direktori (`Directory Tree`)

```text
laravel-nadine-2A/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── Controller.php
│           ├── DashboardController.php
│           ├── KalkulatorSegitigaController.php
│           └── MahasiswaController.php
├── bootstrap/
├── config/
├── database/
├── public/
│   └── index.php
├── resources/
│   └── views/
│       ├── about.blade.php
│       ├── detail.blade.php
│       ├── kalkulator_segitiga.blade.php
│       ├── kalkulator.blade.php
│       ├── mahasiswa.blade.php
│       ├── olshop.blade.php
│       ├── product.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── console.php
│   ├── web.php
│   └── ...
├── storage/
├── tests/
├── .env.example
├── composer.json
└── README.md

---
## 💻 Panduan Instalasi & Menjalankan Proyek (Local Setup)

1. **Clone repositori ke perangkat lokal:**
   ```bash
   git clone [https://github.com/nadinesafwabillasugiarto-ctr/laravel-nadine-2A.git](https://github.com/nadinesafwabillasugiarto-ctr/laravel-nadine-2A.git)

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
