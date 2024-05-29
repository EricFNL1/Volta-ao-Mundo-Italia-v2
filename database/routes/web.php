<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/', [PaginaController::class, 'index'])->name('index');
Route::get('/cultura', [PaginaController::class, 'cultura'])->name('cultura');
Route::get('/pontturisticos', [PaginaController::class, 'pontturisticos'])->name('pontturisticos');
Route::get('/historia', [PaginaController::class, 'historia'])->name('historia');
Route::get('/formulario', [PaginaController::class, 'formulario'])->name('formulario');

