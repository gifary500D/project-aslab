<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/hello/{nama}', function ($nama) {
    return "Halo, $nama";
});

Route::get('/user/{name?}', function ($name = "Guest") {
    return "Halo, " . $name;
});


Route::get('/product/{id}', function ($id) {
    return "Product ID: ".$id;
})->where('id', '[0-9]+');
  
Route::get('/profile', function () {
    return view('profile');
})->name('profile.show');


Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return "Ini halaman Dashboard Admin";
    });

    Route::get('/users', function () {
        return "Ini halaman Data User Admin";
    });
});
