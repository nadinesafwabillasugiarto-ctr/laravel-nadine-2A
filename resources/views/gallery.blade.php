@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <p>Berikut adalah dokumentasi visual serta koleksi produk pilihan terbaik kami:</p>
    
    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 15px; margin-top: 20px;">
        <div style="border: 1px solid #e2e8f0; border-radius: 6px; overflow: hidden; padding: 10px; background: #fff;">
            <img src="https://picsum.photos/300/180?random=1" alt="Galeri 1" style="width: 100%; height: 140px; object-fit: cover; border-radius: 4px;">
            <h4 style="margin: 10px 0 5px 0; color: #1e1b4b;">Pemandangan Alam</h4>
            <p style="font-size: 13px; color: #64748b; margin: 0;">Dokumentasi estetika keindahan lanskap terbuka.</p>
        </div>
        <div style="border: 1px solid #e2e8f0; border-radius: 6px; overflow: hidden; padding: 10px; background: #fff;">
            <img src="https://picsum.photos/300/180?random=2" alt="Galeri 2" style="width: 100%; height: 140px; object-fit: cover; border-radius: 4px;">
            <h4 style="margin: 10px 0 5px 0; color: #1e1b4b;">Arsitektur Perkotaan</h4>
            <p style="font-size: 13px; color: #64748b; margin: 0;">Eksplorasi sudut geometris struktur bangunan modern.</p>
        </div>
    </div>
@endsection