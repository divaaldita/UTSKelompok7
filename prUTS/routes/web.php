<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UTSController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uts', [UTSController::class, 'index'])->name('index');
Route::get('/uts/create', [UTSController::class, 'create'])->name('create');
Route::post('/uts', [UTSController::class, 'store'])->name('store');