@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <p>Aplikasi web ini dikembangkan sebagai bagian dari penugasan praktikum mata kuliah Pemrograman Web pada Program Studi Strata 1 (S1) Sistem Informasi, Fakultas Teknik dan Ilmu Komputer (FTIK) UNP Kediri.</p>
    
    <div style="margin-top: 20px; padding: 15px; background: #fff1f2; border-left: 4px solid #800000; border-radius: 4px;">
        <p style="margin: 0; font-size: 14px; color: #881337;">
            <strong>Pengembang:</strong> Nadine Safwabilla Al Khalifi Sugiarto<br>
            <strong>Teknologi:</strong> Laravel 13, Bootstrap 5, PHP 8.5, dan Blade Templating.
        </p>
    </div>
@endsection