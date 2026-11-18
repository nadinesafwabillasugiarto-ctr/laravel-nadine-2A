@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <form action="/admin/{{ $admin->id_admin }}" method="POST" style="max-width: 400px;">
        @csrf
        @method('PUT')
        <div style="margin-bottom: 10px;">
            <label>ID Admin (Primary Key):</label><br>
            <input type="number" value="{{ $admin->id_admin }}" disabled style="width: 100%; padding: 8px; background-color: #e5e7eb;">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Username:</label><br>
            <input type="text" name="username" value="{{ $admin->username }}" required style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Password Baru (Kosongkan jika tidak diubah):</label><br>
            <input type="password" name="password" style="width: 100%; padding: 8px;">
        </div>
        <button type="submit" style="background-color: #800000; color: white; padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer;">UPDATE</button>
    </form>
@endsection