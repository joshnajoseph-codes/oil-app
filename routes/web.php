<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OilCheckController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [OilCheckController::class, 'create']);
Route::post('/check', [OilCheckController::class, 'store']);
Route::get('/result/{id}', [OilCheckController::class, 'show'])->whereNumber('id');
