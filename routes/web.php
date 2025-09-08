<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;


use App\Http\Controllers\IntermentStaffController;
use App\Models\IntermentStaff;

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


Route::get('/navbar', function () {
    return view('layouts.navigation'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('navigation');


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

// CREATING INTERMENT STAFF ACCOUNT ROUTE
Route::post('/interment-staff/store', [IntermentStaffController::class, 'store'])->name('interment-staff.store');
Route::get('/users', [IntermentStaffController::class, 'index'])->name('users');

// !! TOGGLE USER STATUS FOR USER MANAGEMENT AREA
// Route::get('/users/toggle-status/{id}', [IntermentStaffController::class, 'toggleStatus'])->name('users.toggleStatus');
Route::patch('/users/{id}/toggle-status', [IntermentStaffController::class, 'toggleStatus'])->name('users.toggleStatus');

// !! ROUTE FOR USER MANAGEMENT EDIT BUTTON
Route::patch('/users/{id}', [IntermentStaffController::class, 'update'])->name('users.update');


// !! ROUTE FOR NEW LANDING PAGE

Route::get('/Landingpage', function () {
    return view('Landingpage'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('Landingpage');

// ! ROUTE FOR NEW LOGIN UI PAGE

Route::get('/Loginpage', function () {
    return view('Loginpage'); // Make sure the file is resources/views/PublicMap.blade.php
})->name('Loginpage');


Route::get('/admin-login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin-login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin-logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

require __DIR__.'/auth.php';
