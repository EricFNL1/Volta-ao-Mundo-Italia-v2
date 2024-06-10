<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/', function () {
    return view('index'); // Certifique-se de que o nome da view está correto
})->name('index');

require __DIR__.'/auth.php';
