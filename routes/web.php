<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PendaftaranTryoutController;
use Illuminate\Support\Facades\Route;

require('auth.php');

/*
 * Tidak bisa diakses jika sudah login.
 */
Route::middleware('guest')->group(function () {
    Route::get('/', [LandingController::class, 'index'])->name('landing');
});

/*
 * Perlu login untuk mengakses
 */
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //section
    Route::resource('sections', App\Http\Controllers\SectionController::class);
    //destination
    Route::resource('destinations', App\Http\Controllers\DestinationController::class);
    //package
    Route::resource('packages', App\Http\Controllers\PackageController::class);
    //galery
    Route::resource('galeries', App\Http\Controllers\GaleryController::class);
    
});
