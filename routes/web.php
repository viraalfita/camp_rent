<?php

use App\Http\Controllers\c_barang;
use App\Http\Controllers\c_booking;
use App\Http\Controllers\c_dashboard;
use App\Http\Controllers\c_list_harga;
use App\Http\Controllers\c_login;
use App\Http\Controllers\c_penyewa;
use App\Http\Controllers\c_persyaratan;
use App\Http\Controllers\c_rental;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [c_login::class, "index"]);
Route::post('/login', [c_login::class, "login"]);
Route::get('/logout', [c_login::class, "logout"]);

Route::post('/create', [c_login::class, "create"]);
Route::get('/register', [c_login::class, "register"]);
Route::resource('dashboard', c_dashboard::class);
Route::resource('list_harga', c_list_harga::class);
Route::resource('booking', c_booking::class);
Route::resource('persyaratan', c_persyaratan::class);
Route::group(['middleware' => ['auth', 'isAdmin:1']], function(){
    Route::resource('barang', c_barang::class);
    Route::resource('penyewa', c_penyewa::class);
    Route::get('penyewa/selesai/{id}', [c_penyewa::class, "selesai"]);
});

