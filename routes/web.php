<?php

use App\Http\Controllers\PaginaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [PaginaController::class, 'index'])->name('index');
Route::get('/cultura', [PaginaController::class, 'cultura'])->name('cultura');
Route::get('/pontturisticos', [PaginaController::class, 'pontturisticos'])->name('pontturisticos');
Route::get('/historia', [PaginaController::class, 'historia'])->name('historia');
Route::get('/formulario', [PaginaController::class, 'formulario'])->name('formulario');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
