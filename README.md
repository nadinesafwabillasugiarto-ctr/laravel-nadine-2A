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
- **Nama Lengkap:** Nadine Safwabilla Al Khalifi Sugiarto
- **NPM:** 2513020002
- **Program Studi:** Sistem Informasi
- **Mata Kuliah / Tugas:** Praktikum Pemrograman Web (Project 2A)

---

## ⚙️ Spesifikasi Lingkungan Pengembangan (Environment Specs)
- **Framework Backend:** Laravel v13.40.0
- **Bahasa Pemrograman:** PHP v8.5.12
- **Database:** MySQL / MariaDB (XAMPP)
- **Frontend Framework:** Bootstrap v5.3.0 (CDN) & SB Admin Template
- **Kustomisasi Gaya:** CSS Custom (`public/css/style.css`), CSS Inline & Hex Color Custom (`#800000` / Merah Maroon)
- **Version Control System:** Git & GitHub (`laravel-nadine-2A`)
- **Local Server:** Laravel Artisan Development Server (`php artisan serve`)

---

## 🏗️ Arsitektur & Struktur Proyek (MVC Pattern)
Proyek ini menerapkan pola arsitektur **Model-View-Controller (MVC)** beserta lapisan middleware untuk memisahkan routing, autentikasi, logika data, dan antarmuka pengguna:
1. **Model (`app/Models/`):** Menangani struktur data, skema database (`Migration`), data awal/dummy (`Seeder`/`Factory`), serta interaksi data dengan Eloquent ORM (`Admin.php`, `Employe.php`, `User.php`).
2. **View (`resources/views/`):** Menggunakan mesin templating **Blade** (`@extends`, `@section`, `@yield`, `@include`, `@if`, `@foreach`, `@isset`) dan komponen **Bootstrap 5 / SB Admin** yang dipisah ke dalam partial template (`template/header`, `template/sidebar`, `template/footer`).
3. **Controller (`app/Http/Controllers/`):** Mengatur alur logika permintaan dari rute (*routes*) ke tampilan, autentikasi, dan operasi CRUD (`DashboardController`, `MahasiswaController`, `KalkulatorSegitigaController`, `EmployeController`, `AdminController`, `AuthController`).
4. **Middleware (`app/Http/Middleware/`):** Didaftarkan melalui `bootstrap/app.php` (`$middleware->alias(['islogin' => IsLoginMiddleware::class])`) untuk membatasi akses halaman (*restrict pages*) berdasarkan status sesi login.

---

## 🛠️ Rincian Modul & Fitur Utama

### 1. Modul Dashboard & E-Commerce / Olshop (`Home`)
- **Controller:** `DashboardController.php`
- **Endpoint:** `/home` atau `/`
- **View:** `olshop.blade.php`, `product.blade.php`, `detail.blade.php`, `about.blade.php`
- **Deskripsi:** Beranda utama aplikasi yang menyajikan katalog produk pilihan (seperti Kemeja Flanel, Tas Selempang Kanvas, dan Sepatu Sneakers Casual), navigasi menu interaktif, halaman detail produk berbasis parameter harga, serta informasi profil toko (*About*).

### 2. Modul Daftar Mahasiswa (`Mahasiswa Database`)
- **Controller:** `MahasiswaController.php`
- **Endpoint:** `/daftar/mahasiswa`
- **View:** `mahasiswa.blade.php`
- **Deskripsi:** Menampilkan data mahasiswa dalam bentuk tabel terstruktur menggunakan teknik *passing data* array asosiatif dan fungsi `compact()`.
- **Kustomisasi Visual:** Menggunakan aksen warna **Merah Maroon (`#800000`)** pada judul halaman dan kepala tabel (`<thead>`) sesuai permintaan desain kustom.
- **Daftar Entri Mahasiswa:**
  - Nadine (Kediri — P)
  - Athala (Nganjuk — L)
  - Dhennys (Malang — L)
  - Chelsea (Surabaya — P)
  - Inez (Nganjuk — P)

### 3. Modul Kalkulator Segitiga (`Triangle Calculator`)
- **Controller:** `KalkulatorSegitigaController.php` & `KalkulatorController.php`
- **Endpoint:** `/kalkulator/segitiga` (GET & POST)
- **View:** `kalkulator_segitiga.blade.php`, `kalkulator.blade.php`
- **Deskripsi:** Formulir interaktif untuk menghitung luas segitiga dengan memasukkan nilai alas dan tinggi secara dinamis, dilengkapi validasi keamanan CSRF (`@csrf`) dan direktif Blade `@isset` untuk merender hasil perhitungan.

### 4. Bab Sistem Templating (`Blade Layout & SB Admin`)
- **Lokasi:** `resources/views/template/` (`header.blade.php`, `sidebar.blade.php`, `footer.blade.php`), `dashboard.blade.php`, `home.blade.php`, `biodata.blade.php`, `gallery.blade.php`, `service.blade.php`, `contact.blade.php`
- **Deskripsi:** Menerapkan pemecahan komponen layout (*header*, *sidebar*, *footer*) menggunakan direktif Blade dan kerangka **SB Admin** agar navigasi serta tampilan halaman admin dan profil tampil konsisten dan modular.

### 5. Bab Migration & Database (`Migration`, `Model`, & `Seeder`)
- **Lokasi:** `database/migrations/` (`create_users_table`, `create_employes_table`, `create_admins_table`), `database/seeders/`, `database/factories/`, serta model `Admin.php` dan `Employe.php`
- **Deskripsi:** Mendefinisikan struktur tabel database `employes` dan `admins` melalui *migration* (`php artisan migrate`), mengonfigurasi properti `$fillable` pada model Eloquent, serta mengisi data awal/dummy menggunakan *seeder* (`php artisan db:seed`).

### 6. Bab Fitur CRUD (`Employe` & `Admin Latihan`)
- **Controller:** `EmployeController.php` & `AdminController.php`
- **View:**
  - Data Employe: `tampil_data.blade.php`, `tambah_data.blade.php`, `edit_data.blade.php`
  - Data Latihan Admin: `admin/tampil_data_latihan.blade.php`, `admin/tambah_data_latihan.blade.php`, `admin/edit_data_latihan.blade.php`
- **Deskripsi:** Mengimplementasikan alur **CRUD** lengkap—menambah data, menampilkan daftar data dari database, mengubah data, dan menghapus data—beserta validasi input dan notifikasi status operasi.

### 7. Bab Membuat Autentikasi (`Login`, `Logout`, & `islogin`)
- **Controller & Middleware:** `AuthController.php`, `IsLoginMiddleware.php`, `bootstrap/app.php`, `routes/web.php`, dan `login.blade.php`
- **Deskripsi:** Mengimplementasikan alur **Login** dan **Logout** berbasis verifikasi kredensial (`Hash::check()`) terhadap tabel `admins` serta manajemen *session*, dipadukan dengan pembatasan akses rute (*restrict pages*) menggunakan middleware `islogin` yang didaftarkan melalui `$middleware->alias(...)` di `bootstrap/app.php`.

---

## 📋 Tabel Rute Aplikasi (`routes/web.php`)

| URL Endpoint | HTTP Method | Controller / Middleware | Deskripsi / Fungsi Halaman |
| :--- | :---: | :--- | :--- |
| `/` atau `/home` | `GET` | `DashboardController@home` | Menampilkan halaman utama Olshop & Katalog Produk |
| `/product` | `GET` | `DashboardController@product` | Menampilkan daftar keseluruhan produk |
| `/produk/detail/{harga}` | `GET` | `DashboardController@detail` | Menampilkan detail produk berdasarkan parameter harga |
| `/about` | `GET` | `DashboardController@about` | Menampilkan halaman informasi / tentang aplikasi |
| `/daftar/mahasiswa` | `GET` | `MahasiswaController@index` | Menampilkan tabel data mahasiswa ber-tema Maroon |
| `/kalkulator/segitiga` | `GET` | `KalkulatorSegitigaController@form` | Menampilkan antarmuka form kalkulator segitiga |
| `/kalkulator/segitiga` | `POST` | `KalkulatorSegitigaController@hitung` | Memproses data input alas & tinggi untuk menghitung luas |
| `/login` | `GET` / `POST` | `AuthController` | Menampilkan halaman login dan memproses autentikasi admin |
| `/logout` | `GET` / `POST` | `islogin` / `AuthController@logout` | Menghapus sesi login dan mengembalikan ke halaman login |
| Rute CRUD (`Employe` & `Admin`) | `GET`/`POST`/`PUT`/`DELETE` | `EmployeController` / `AdminController` (`islogin`) | Mengelola operasi CRUD data `employes` dan `admins` |

---

## 🗂️ Peta Struktur Direktori (`Directory Tree`)

```text
laravel-2A/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── AdminController.php
│   │   │   ├── AuthController.php
│   │   │   ├── Controller.php
│   │   │   ├── DashboardController.php
│   │   │   ├── EmployeController.php
│   │   │   ├── KalkulatorController.php
│   │   │   ├── KalkulatorSegitigaController.php
│   │   │   ├── MahasiswaController.php
│   │   │   └── Web.php
│   │   └── Middleware/
│   │       └── IsLoginMiddleware.php
│   ├── Models/
│   │   ├── Admin.php
│   │   ├── Employe.php
│   │   └── User.php
│   └── Providers/
├── bootstrap/
│   ├── cache/
│   ├── app.php
│   └── providers.php
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   │   ├── 0001_01_01_000000_create_users_table.php
│   │   ├── 2026_11_19_025951_create_employes_table.php
│   │   └── 2026_11_19_030028_create_admins_table.php
│   └── seeders/
├── public/
│   ├── css/
│   │   └── style.css
│   ├── favicon.ico
│   ├── index.php
│   └── robots.txt
├── resources/
│   ├── css/
│   │   └── app.css
│   ├── js/
│   └── views/
│       ├── admin/
│       │   ├── edit_data_latihan.blade.php
│       │   ├── tambah_data_latihan.blade.php
│       │   └── tampil_data_latihan.blade.php
│       ├── template/
│       │   ├── footer.blade.php
│       │   ├── header.blade.php
│       │   └── sidebar.blade.php
│       ├── about.blade.php
│       ├── biodata.blade.php
│       ├── contact.blade.php
│       ├── dashboard.blade.php
│       ├── detail.blade.php
│       ├── edit_data.blade.php
│       ├── gallery.blade.php
│       ├── home.blade.php
│       ├── kalkulator_segitiga.blade.php
│       ├── kalkulator.blade.php
│       ├── login.blade.php
│       ├── mahasiswa.blade.php
│       ├── olshop.blade.php
│       ├── product.blade.php
│       ├── service.blade.php
│       ├── tambah_data.blade.php
│       ├── tampil_data.blade.php
│       └── welcome.blade.php
├── routes/
│   ├── console.php
│   └── web.php
├── storage/
├── tests/
├── .env.example
├── composer.json
└── README.md
```

---

## 💻 Panduan Instalasi & Menjalankan Proyek (Local Setup)

1. **Clone repositori ke perangkat lokal:**
   ```bash
   git clone [https://github.com/nadinesafwabillasugiarto-ctr/laravel-nadine-2A.git](https://github.com/nadinesafwabillasugiarto-ctr/laravel-nadine-2A.git)
   cd laravel-nadine-2A
   ```

2. **Install dependensi PHP/Composer:**
   ```bash
   composer install
   ```

3. **Salin file `.env` dan generate application key:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Konfigurasi database di `.env` & jalankan migrasi + seeder:**
   Buat database baru di MySQL / phpMyAdmin, sesuaikan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` pada `.env`, lalu jalankan:
   ```bash
   php artisan migrate
   php artisan db:seed
   ```

5. **Jalankan server pengembangan:**
   ```bash
   php artisan serve
   ```
   Akses aplikasi melalui browser di `http://localhost:8000`.

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
