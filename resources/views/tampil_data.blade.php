@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    
    <a href="/employe/create" style="display: inline-block; padding: 8px 15px; background-color: #1e1b4b; color: white; text-decoration: none; border-radius: 4px; margin-bottom: 15px;">+ Tambah Pegawai</a>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr style="background-color: #f3f4f6;">
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>Gaji</th>
            <th>Aksi</th>
        </tr>
        
        <!-- Menggunakan $row sesuai modul -->
        @foreach($employes as $row)
        <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->gender }}</td>
            <td>{{ $row->gaji }}</td>
            <td>
                <a href="/employe/edit/{{ $row->id }}"><button>Edit</button></a> | 
                
                <!-- Form Delete sesuai dengan contoh di modul Anda -->
                <form method="post" action="/employe/{{ $row->id }}" style="display: inline-block;">
                    @method('delete')
                    @csrf
                    <button>Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection