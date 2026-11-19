<?php

use Illuminate\Support\Facades\Route;

// Import Controller
use App\Http\Controllers\Web;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KalkulatorController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\KalkulatorSegitigaController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// Agar langsung masuk ke halaman login
Route::get('/', function () {
    return view('login');
})->name('login');

// Route untuk proses login
Route::post('/login', [AuthController::class, 'cek']);

// Route latihan sebelumnya
Route::get('/laman_about', function () {
    return "<h2>Ini adalah laman About</h2>";
});
Route::get('/web', [Web::class, 'home']);
Route::get('/profil/{nama}', [Web::class, 'profil']);
Route::get('/home', [DashboardController::class, 'home_olshop']);
Route::get('/product', [DashboardController::class, 'product']);
Route::get('/produk/detail/{harga}', [DashboardController::class, 'detail']);
Route::get('/about', [DashboardController::class, 'about']);
Route::get('/biodata', [Web::class, 'biodata']);
Route::get('/kalkulator', [KalkulatorController::class, 'home']);
Route::post('/kalkulator/proses', [KalkulatorController::class, 'proses']);
Route::get('/daftar/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'form']);
Route::post('/kalkulator/segitiga', [KalkulatorSegitigaController::class, 'hitung']);
Route::get('/service', [DashboardController::class, 'service']);
Route::get('/contact', [DashboardController::class, 'contact']);

// Route CRUD Admin (bisa ikut dimasukkan ke group islogin jika ingin ikut dijaga)
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/create', [AdminController::class, 'create']);
Route::post('/admin', [AdminController::class, 'store']);
Route::get('/admin/edit/{id}', [AdminController::class, 'edit']);
Route::put('/admin/{id}', [AdminController::class, 'update']);
Route::delete('/admin/{id}', [AdminController::class, 'destroy']);

// Route group yang harus login dahulu
Route::group(['middleware' => 'islogin'], function () {
    Route::get('/dashboard', [DashboardController::class, 'home']);
    Route::get('/gallery', [DashboardController::class, 'gallery']);

    // CRUD Employe
    Route::get('/employe', [EmployeController::class, 'index']);
    Route::get('/employe/create', [EmployeController::class, 'create']);
    Route::post('/employe/store', [EmployeController::class, 'store']);
    Route::get('/employe/edit/{employe}', [EmployeController::class, 'show']);
    Route::put('/employe/{employe}', [EmployeController::class, 'update']);
    Route::delete('/employe/{employe}', [EmployeController::class, 'destroy']);

    // Logout
    Route::get('/logout', [AuthController::class, 'logout']);
});