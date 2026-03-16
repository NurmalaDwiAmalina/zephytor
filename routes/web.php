<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalyzeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/analyze', [AnalyzeController::class, 'index']);
Route::post('/analyze', [AnalyzeController::class, 'analyze']);

Route::get('/kontak', function () {
    return view('kontak');
});
