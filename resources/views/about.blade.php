@extends('layouts.main')
 @section('title', 'About')
 @section('content')
 <div class="row align-items-center">
    <div class="col-md-6">
        <h2>Tentang Website Ini</h2>
        <p>
            Website ini dibuat menggunakan framework <strong>Laravel</strong> dan diatur dengan tampilan <strong>Bootstrap 5</strong>.
            Tujuannya untuk memberikan contoh dasar layout dan routing di Laravel.
        </p>
        <a href="{{ url('/') }}" class="btn btn-outline-primary">Kembali ke Home</a>
    </div>
 </div>
 @endsection