<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\AkunController;
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
    return view('index');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route Sewa Mobil
Route::get('admin/sewa', [SewaController::class, 'adminSewa'])->name('admin.sewa');

// Route Daftar Mobil
Route::get('admin/mobil', [MobilController::class, 'adminMobil'])->name('admin.mobil');
Route::get('mobil/cari', [MobilController::class, 'mobilCari'])->name('mobil.cari');
Route::get('mobil/tambah', [MobilController::class, 'mobilTambah'])->name('mobil.tambah');
Route::post('mobil/store', [MobilController::class, 'mobilStore'])->name('mobil.store');
Route::get('mobil/edit/{id}', [MobilController::class, 'mobilEdit'])->name('mobil.edit');
Route::post('mobil/update', [MobilController::class, 'mobilUpdate'])->name('mobil.update');
Route::get('mobil/hapus/{id}', [MobilController::class, 'mobilHapus'])->name('mobil.hapus');
Route::get('mobil/namaasc', [MobilController::class, 'mobilasc'])->name('mobil.namaasc');
Route::get('mobil/namadesc', [MobilController::class, 'mobildesc'])->name('mobil.namadesc');
Route::get('mobil/hargaasc', [MobilController::class, 'hargaasc'])->name('mobil.hargaasc');
Route::get('mobil/hargadesc', [MobilController::class, 'hargadesc'])->name('mobil.hargadesc');

// Route Akun
Route::get('admin/akun', [AkunController::class, 'adminAkun'])->name('admin.akun');
Route::get('akun/cari', [AkunController::class, 'akunCari'])->name('akun.cari');
Route::get('akun/edit/{id}', [AkunController::class, 'akunEdit'])->name('akun.edit');
Route::post('akun/update', [AkunController::class, 'akunUpdate'])->name('akun.update');
Route::get('akun/hapus/{id}', [AkunController::class, 'akunHapus'])->name('akun.hapus');
Route::get('akun/namaasc', [AkunController::class, 'namaasc'])->name('akun.namaasc');
Route::get('akun/namadesc', [AkunController::class, 'namadesc'])->name('akun.namadesc');
