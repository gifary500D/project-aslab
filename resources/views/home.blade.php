<h1>Home Page</h1>

<a href="{{ route('profile.show') }}">Pergi ke Profile</a>
@extends('layouts.main') 
@section('title', 'Halaman Utama') 
@section('sidebar') 
<p>Sidebar konten tambahan.</p> 
@endsection 
@section('content') 
<h2>Selamat Datang di Laravel</h2> 
<p>Ini adalah contoh Blade Template.</p> 
@endsection