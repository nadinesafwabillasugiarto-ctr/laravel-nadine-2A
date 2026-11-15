<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow p-4">
            
            <!-- Judul dengan warna Merah Maroon -->
            <h2 class="mb-4" style="color: #800000; font-weight: bold;">DAFTAR MAHASISWA</h2>
            
            <!-- Tabel -->
            <table class="table table-bordered table-striped">
                <!-- Tambahkan style langsung pada tr/th agar menimpa default Bootstrap -->
                <thead>
                    <tr style="background-color: #800000; color: white;">
                        <th style="background-color: #800000; color: white;" class="text-white">Nama</th>
                        <th style="background-color: #800000; color: white;" class="text-white">Alamat</th>
                        <th style="background-color: #800000; color: white;" class="text-white">Gender</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $mhs['nama'] }}</td>
                        <td>{{ $mhs['alamat'] }}</td>
                        <td>{{ $mhs['gender'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</body>
</html>