<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PengarangController;

Route::prefix('buku')->group(function () {
    Route::get('/', [BukuController::class, 'index']);
    Route::post('/', [BukuController::class, 'store']);
    Route::put('/{id}', [BukuController::class, 'update']);
    Route::delete('/{id}', [BukuController::class, 'destroy']);
});

Route::prefix('kategori')->group(function () {
    Route::get('/', [KategoriController::class, 'index']);
    Route::post('/', [KategoriController::class, 'store']);
    Route::put('/{id}', [KategoriController::class, 'update']);
    Route::delete('/{id}', [KategoriController::class, 'destroy']);
});

Route::prefix('pengarang')->group(function () {
    Route::get('/', [PengarangController::class, 'index']);
    Route::post('/', [PengarangController::class, 'store']);
    Route::put('/{id}', [PengarangController::class, 'update']);
    Route::delete('/{id}', [PengarangController::class, 'destroy']);
});
