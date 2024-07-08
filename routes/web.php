<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DocterController;

// Route to homepage
Route::get('/', function () {
    return view('index');
});

// Route to consultation page
Route::get('/consultation', [ConsultationController::class, 'index'])->name('consultation.index');

// Route to doctor page
Route::get('/docter', [DocterController::class, 'index'])->name('docter.index');

// Route to treatments
Route::get('/treatment', [TreatmentController::class, 'index'])->name('treatment.index');

// Route to products
Route::get('/product', [ProductController::class, 'index'])->name('product.index');