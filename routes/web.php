<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
route::get('/JanjiTemu', [HomeController::class, 'janjiTemu'])->name('janjiTemu');
route::get('/TokoObat', [HomeController::class, 'tokoObat'])->name('tokoObat');

Route::group(['middleware' => ['auth', 'cekRole:user']], function() {
    route::get('/JanjiTemu/Buat', [HomeController::class, 'buatJanjiTemu'])->name('buatJanjiTemu')->middleware('auth');
    route::get('/JanjiTemu/Buat/Submit', [HomeController::class, 'buatJanjiTemuSubmit'])->name('buatJanjiTemuSubmit')->middleware('auth');
    route::get('/TokoObat/Checkout', [HomeController::class, 'checkout'])->name('checkout')->middleware('auth');
    route::get('/History', [HomeController::class, 'history'])->name('history')->middleware('auth');
    Route::get('/cetakJanji/{id}', [HomeController::class, 'cetakJanji'])->name('cetakJanji')->middleware('auth');
    Route::get('/cetakPembelian/{id}', [HomeController::class, 'cetakPembelian'])->name('cetakPembelian')->middleware('auth');
});

Route::group(['middleware' => ['auth', 'cekRole:dokter']], function() {
    route::get('/Dokter/TokoObat', [HomeController::class, 'tokoObatDokter'])->name('tokoObatDokter')->middleware('auth');
    route::get('/Dokter/TokoObat/Edit', [HomeController::class, 'tokoObatEdit'])->name('tokoObatEdit')->middleware('auth');
    route::get('/Dokter/History', [HomeController::class, 'historyDokter'])->name('historyDokter')->middleware('auth');
});