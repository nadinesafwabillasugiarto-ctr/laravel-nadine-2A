@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    
    <a href="/admin/create" style="display: inline-block; padding: 8px 15px; background-color: #800000; color: white; text-decoration: none; border-radius: 4px; margin-bottom: 15px;">+ Tambah Admin Baru</a>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <tr style="background-color: #f3f4f6;">
            <th>ID Admin</th>
            <th>Username</th>
            <th>Aksi</th>
        </tr>
        @foreach($admins as $row)
        <tr>
            <td>{{ $row->id_admin }}</td>
            <td>{{ $row->username }}</td>
            <td>
                <!-- Tombol Edit -->
                <a href="/admin/edit/{{ $row->id_admin }}" style="color: blue; text-decoration: none; margin-right: 5px;">Edit</a> | 
                
                <!-- Tombol Delete -->
                <form method="post" action="/admin/{{ $row->id_admin }}" style="display: inline-block; margin-left: 5px;">
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('Yakin hapus admin ini?')" style="background:none; color:red; border:none; cursor:pointer; padding:0; font:inherit;">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection