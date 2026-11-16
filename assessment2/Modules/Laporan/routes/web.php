<?php

use Illuminate\Support\Facades\Route;
use Modules\Fasilitas\Http\Controllers\LaporanController;

Route::middleware('auth')->group(function () {
    Route::get('fasilitas', [LaporanController::class, 'index'])->name('fasilitas.index');

    Route::middleware('role:warga')->group(function () {
        Route::resource('fasilitas', FasilitasController::class)
            ->except(['index', 'show']);
    });
});