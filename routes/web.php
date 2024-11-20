<?php

// routes/web.php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route untuk halaman Fitur
Route::get('/fitur', function () {
    return view('fitur'); // Pastikan ini menuju halaman fitur.blade.php
})->name('fitur');

// Route untuk halaman Panduan Investasi
Route::get('/panduan', function () {
    return view('panduan'); // Pastikan ini menuju halaman panduan.blade.php
})->name('panduan');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::get('/kebijakan', function () {
    return view('kebijakan');
})->name('kebijakan');

Route::get('/syarat', function () {
    return view('syarat');
})->name('syarat');

Route::post('/kontak/submit', function (Illuminate\Http\Request $request) {
    // Proses data kontak di sini
    return back()->with('success', 'Pesan Anda berhasil dikirim!');
})->name('submitContact');