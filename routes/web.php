<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Landing');
});

Route::get('/Landing', function () {
    return view('Landing'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('Landing');

Route::get('/users', function () {
    return view('users'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('users');

Route::get('/Payment', function () {
    return view('Payment'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('Payment');

Route::get('/public-map', function () {
    return view('PublicMap'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('public.map');

Route::get('/MapLayout', function () {
    return view('MapLayout'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('MapLayout');

Route::get('/Map', function () {
    return view('Map'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('Map');

Route::get('/Admin', function () {
    return view('Admin'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('Admin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
