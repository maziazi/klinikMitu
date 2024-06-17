<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/consultation', function () {
    return view('consultation');
});

Route::get('/docter', function () {
    return view('docter');
});

Route::get('/facialwash', function () {
    return view('facialwash');
});

Route::get('/micillarwater', function () {
    return view('micillarwater');
});

Route::get('/other', function () {
    return view('other');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/sunscreen', function () {
    return view('sunscreen');
});

Route::get('/toner', function () {
    return view('toner');
});

Route::get('/treatment', function () {
    return view('treatment');
});

use App\Http\Controllers\DocterAIController;

Route::get('/docter', function () {
    return view('docter.index');
});

Route::post('/docter/analyze', [DocterAIController::class, 'analyze'])->name('docter.analyze');

