<?php

use Illuminate\Support\Facades\Route;

// import controller web dan taruh di routes dengan nama 
//import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;

//import Controller Kalkulator
use App\Http\Controllers\KalkulatorController;

Route::get('/', function () {
    return view('welcome');
    return "Hallo namaku adalah Nadine, Salam Kenal";
});

//route baru
Route::get('/laman_about', function () {
//return view('welcome');
return "<h2>Ini adalah laman About</h2>";
});

//route ke controller Web ke fungsi home
Route::get('/web',[Web::class, 'home']);

//route ke controller Web ke fungsi profil
Route::get('/profil/{nama}',[Web::class, 'profil']);

// route ke controller DashboardController
Route::get('/home', [DashboardController::class, 'home_olshop']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
Route::get('/about', [DashboardController::class, 'about']);

//route untuk membuka view biodata
//route untuk membuka Controller web fungsi biodata
Route::get('/biodata',[Web::class, 'biodata']);

//route ke controller kalkulator
Route::get('/kalkulator',[KalkulatorController::class, 'home']);
//route untuk proses perhitungan
Route::post('/kalkulator/proses',[KalkulatorController::class, 'proses']);

// route untuk menampilkan daftar mahasiswa
use App\Http\Controllers\MahasiswaController;

// route untuk menampilkan daftar mahasiswa
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);

// route untuk menampilkan kalkulator segitiga
use App\Http\Controllers\KalkulatorSegitigaController;

// Route untuk menampilkan halaman kalkulator
Route::get('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'form']);

// Route untuk memproses hasil perhitungan form
Route::post('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'hitung']);

//route ke controller Dashboard
Route::get('/dashboard',[DashboardController::class, 'home']);

// route ke controller Dashboard untuk menampilkan halaman gallery
Route::get('/gallery',[DashboardController::class, 'gallery']);

// Rute Group dengan Middleware Login (jika sudah masuk bab auth, atau rute biasa dulu)
Route::get('/dashboard', [DashboardController::class, 'home']);
Route::get('/gallery', [DashboardController::class, 'gallery']);
Route::get('/about', [DashboardController::class, 'about']);

// Tambahan Latihan (Service & Contact)
Route::get('/service', [DashboardController::class, 'service']);
Route::get('/contact', [DashboardController::class, 'contact']);

//import controller EmployeController
use App\Http\Controllers\EmployeController;

// route untuk menampilkan data pegawai
Route::get('/employe',[EmployeController::class, 'index']);

// route untuk menampilkan form tambah data pegawai
Route::get('/employe/create',[EmployeController::class, 'create']);

// route untuk menyimpan data pegawai ke database
Route::post('/employe/store',[EmployeController::class, 'store']);

// route untuk menampilkan form edit data pegawai
Route::get('/employe/edit/{employe}',[EmployeController::class, 'show']);

// route untuk mengupdate data pegawai ke database
Route::put('/employe/{employe}',[EmployeController::class, 'update']);

// route untuk menghapus data pegawai dari database
Route::delete('/employe/{employe}',[EmployeController::class, 'destroy']);

// import controller AdminController
use App\Http\Controllers\AdminController;

// route untuk menampilkan data admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::put('/admin/{id}', [AdminController::class, 'update']);
Route::delete('/admin/{id}', [AdminController::class, 'destroy']);