@extends('dashboard')

@section('content')
    <h1>{{ $judul }}</h1>
    <form action="/admin" method="POST" style="max-width: 400px;">
        @csrf
        <div style="margin-bottom: 10px;">
            <label>ID Admin:</label><br>
            <input type="number" name="id_admin" required style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Username:</label><br>
            <input type="text" name="username" required style="width: 100%; padding: 8px;">
        </div>
        <div style="margin-bottom: 10px;">
            <label>Password:</label><br>
            <input type="password" name="password" required style="width: 100%; padding: 8px;">
        </div>
        <button type="submit" style="background-color: #800000; color: white; padding: 8px 15px; border: none; border-radius: 4px; cursor: pointer;">SIMPAN</button>
    </form>
@endsection