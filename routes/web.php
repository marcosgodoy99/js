<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

// Aquí van tus rutas
Route::get('/', function () {
    return view('welcome');
});

Route::post('/storeApi', [ApiController::class, 'store']);

