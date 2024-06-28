<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProdukController::class, 'buy'])->name('dashboard');

Route::get('/produk', function () {
    return view('produk.index');
})->middleware(['auth', 'verified'])->name('produk');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('/produk', [ProdukController::class, 'index'])->middleware(['auth', 'verified'])->name('produk');

Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');;
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
require __DIR__.'/auth.php';
