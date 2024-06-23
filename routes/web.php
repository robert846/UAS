<?php
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TransferController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
        return view('pages.dashboard');
    })->name('home');
    Route::resource('user', UserController::class);
    Route::resource('informasi_rekening', InformasiController::class);
    Route::resource('transfer_dana', TransferController::class);
    Route::resource('daftar_transfer', DataController::class);
});
