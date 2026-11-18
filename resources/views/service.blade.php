@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <p>Kami menyediakan berbagai layanan profesional di bidang teknologi informasi dan pengembangan web:</p>
    
    <ul style="line-height: 1.8; color: #4b5563; padding-left: 20px;">
        <li><strong>Pengembangan Aplikasi Web:</strong> Membangun sistem kustom berbasis Laravel dengan standar MVC yang aman dan terstruktur.</li>
        <li><strong>Manajemen Basis Data:</strong> Perancangan relasi tabel, migrasi, dan optimalisasi query SQL yang efisien.</li>
        <li><strong>Integrasi RESTful API:</strong> Menghubungkan backend sistem dengan berbagai platform digital modern lainnya.</li>
    </ul>
@endsection