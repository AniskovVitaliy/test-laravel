<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/create-shortened-url', [LinkController::class, 'createShortenedUrl']);
Route::get('/recent', [LinkController::class, 'getRecent']);
