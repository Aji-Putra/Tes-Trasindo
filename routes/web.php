<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PembelianController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group( function () {
    Route::get('/datapelanggan', [AdminController::class, 'datapemesan'])->name('datapelanggan');
    Route::get('/pesanan/edit/{id}', [AdminController::class, 'edit']);
    Route::post('/pesanan/update/{id}', [AdminController::class, 'update']);
    Route::get('/pesanan/destroy/{id}', [AdminController::class, 'destroy']);
    Route::get('/cekin', [AdminController::class, 'cekin'])->name('cekin');
    Route::get('/status/{id}', [AdminController::class, 'updatestatus']);
    Route::post('/update/status/{id}', [AdminController::class, 'status']);
    Route::get('/cari', [AdminController::class, 'cari']);
    Route::get('/laporan', [AdminController::class, 'laporan']);
});
Route::post('/buy', [PembelianController::class, 'buy']);
Route::get('/detail',[PembelianController::class,'detailtiket']);
