@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <p>Selamat datang di platform aplikasi web modern berbasis Laravel 13 dan arsitektur MVC. Sistem ini dirancang untuk memberikan kemudahan dan performa terbaik dalam pengelolaan data digital Anda.</p>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 20px;">
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border-left: 4px solid #800000;">
            <h3 style="margin-top: 0; color: #1e1b4b;">Modul Terintegrasi</h3>
            <p style="font-size: 14px; margin-bottom: 0;">Mendukung pengelolaan fitur multi-modul mulai dari templating, manajemen data, hingga sistem autentikasi.</p>
        </div>
        <div style="background: #f8fafc; padding: 15px; border-radius: 6px; border-left: 4px solid #3b82f6;">
            <h3 style="margin-top: 0; color: #1e1b4b;">Desain Responsif</h3>
            <p style="font-size: 14px; margin-bottom: 0;">Antarmuka bersih dan tertata rapi menggunakan standar layout grid modern.</p>
        </div>
    </div>
@endsection