 @extends('layouts.main')
 @section('title', 'Home')
 @section('content')
 <div class="text-center">
    <h1 class="mb-4">Selamat Datang di Website Laravel</h1>
    <p class="lead">Ini adalah halaman utama menggunakan Bootstrap 5.</p>
    <a href="{{ url('/about') }}" class="btn btn-primary">Pelajari Lebih Lanjut</a>
 </div>
 @endsection