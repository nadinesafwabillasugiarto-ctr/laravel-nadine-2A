<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $judul }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <!-- Header & Banner -->
        @include('template.header')
        
        <!-- Area Sidebar dan Konten Berjajar -->
        <div class="isi">
            @include('template.sidebar')
            
            <div class="content">
                @yield('content')
            </div>
        </div>

        <!-- Footer di Bagian Bawah -->
        @include('template.footer')
    </div>
</body>
</html>