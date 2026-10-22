<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});


Route::get('/nama/{Keisya}', function ($Keisya) {
    return 'Nama saya: '.$Keisya;
});

Route::get('/nim/{nim?}', function ($nim = '') {
    return 'NIM saya: '.$nim;
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/question', function () {
    return view('home');
})->name('question.form');

Route::post('/question', [App\Http\Controllers\QuestionController::class, 'store'])->name('question.store');

Route::get('/response', function () {
    return view('response');
})->name('question.response');

use App\Http\Controllers\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');