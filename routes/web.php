<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;

use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/', [ProdukController::class, 'index'])->name('home');

use App\Http\Controllers\AdminProdukController;

Route::middleware(['auth', 'isAdmin'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('produk', AdminProdukController::class);
});
