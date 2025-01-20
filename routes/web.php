<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth','admin'])->group(function(){
    Route::get('/barang',[barangController::class,'index'])->name('barang.index');
    Route::get('/barang/{id}/edit',[barangController::class,'edit'])->name('barang.edit');
    Route::delete('/barang/{id}',[barangController::class,'destroy'])->name('barang.destroy');
    Route::get('/barang/create',[barangController::class,'create'])->name('barang.create');
    Route::post('/barang/store',[barangController::class,'store'])->name('barang.store');
    Route::put('/barang/{id}',[barangController::class,'update'])->name('barang.update');
    Route::post('/barang/ambil/{id}',[barangController::class,'ambilBarang'])->name('barang.ambil');
    Route::resource('barang', BarangController::class);
});
Route::middleware(['auth','buyer'])->group(function(){
    Route::get('/buyer/dashboard',[BuyerController::class,'index'])->name('buyer.index');
    Route::get('/buyer/create',[BuyerController::class,'create'])->name('buyer.create');
    Route::post('/buyer/store',[BuyerController::class,'store'])->name('buyer.store');
});
Route::middleware(['auth','purchaser'])->group(function(){
    Route::get('/purchaser/dashboard',[PurchaserController::class,'index'])->name('purchaser.index');
    Route::post('/purchaser/ambil/{id}',[PurchaserController::class,'ambilBarang'])->name('purchaser.ambil');
});
require __DIR__.'/auth.php';
