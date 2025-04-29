<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatistikController;
Route::get('/statistik', [StatistikController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});
