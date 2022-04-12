<?php

use App\Http\Controllers\DbarangController;
use App\Http\Controllers\JbarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TransaksiController;
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

/* Register */
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

/* Login */
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

/* Logout */
Route::post('/logout', [LoginController::class, 'logout']);

/* Dashboard */
Route::get('/', [MainController::class, 'index'])->middleware('auth');

/* Jenis Barang */
Route::resource('/jbarang', JbarangController::class);

/* Data Barang */
Route::resource('/dbarang', DbarangController::class);

/* Transaksi */
Route::resource('/transaksi', TransaksiController::class);

