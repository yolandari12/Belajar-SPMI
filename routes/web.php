<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KelolaUserController;
use App\Http\Controllers\Admin\KerjaSamaPendidikanController;
use App\Http\Controllers\Admin\LembagaMitraController;
use App\Http\Controllers\Admin\UnitKerjaController;
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

Route::prefix('admin') -> group(function(){
   Route::get('/', [DashboardController::class, 'dashboard_admin'])->name('dashboard_admin');

//    kelola user
    Route::get('/data-user', [KelolaUserController::class, 'data'])->name('data-user');
    Route::get('/tambah-data-user', [KelolaUserController::class, 'tambah'])->name('tambah-data-user');
    Route::post('/ptambah-data-user', [KelolaUserController::class, 'proses_tambah'])->name('p-tambah-data-user');
    Route::get('/delet-data-user/{id}', [KelolaUserController::class, 'proses_hapus'])->name('p-hapus-data-user');
    Route::get('/ubah-data-user/{id}', [KelolaUserController::class, 'ubah'])->name('ubah-data-user');
    Route::put('/pubah-data-user/{id}', [KelolaUserController::class, 'proses_ubah'])->name('p-ubah-data-user');

//  unit kerja
    Route::get('/unit-kerja', [UnitKerjaController::class, 'data'])->name('data-unit-kerja');


    // kerjsama pendidikan
    Route::get('/data/kerjasama-pendidikan', [KerjaSamaPendidikanController::class, 'data']) ->name('data-kerjasama-pendidikan');
    Route::get('/halaman-tambah/kerjasama-pendidikan', [KerjaSamaPendidikanController::class, 'halaman_tambah'])->name('halaman-tambah-kerjasama-pendidikan');
    Route::post('/proses-tambah/kerjasama-pendidikan', [KerjaSamaPendidikanController::class, 'proses_tambah'])->name('proses-tambah-kerjasama-pendidikan');
    Route::get('/halaman-ubah/kerjasama-pendidikan/{id}', [KerjaSamaPendidikanController::class, 'halaman_ubah'])->name('halaman-ubah-kerjasama-pendidikan');
    Route::put('/proses-ubah/kerjasama-pendidikan/{id}', [KerjaSamaPendidikanController::class, 'proses_ubah']) ->name('proses-ubah-kerjasama-pendidikan');
    Route::get('/proses-hapus/kerjasama-pendidikan/{id}', [KerjaSamaPendidikanController::class, 'proses_hapus'])->name('proses-hapus-kerjasama-pendidikan');

    // lembaga mitra
    Route::get('/list-data/lembaga-mitra', [LembagaMitraController::class, 'list_data'])->name('list-data.lembaga-mitra');
    Route::get('/halaman-tambah/lembaga-mitra', [LembagaMitraController::class, 'halaman_tambah'])->name('halaman-tambah.lembaga-mitra');
    Route::post('proses-tambah/lembaga-mitra', [LembagaMitraController::class, 'proses_tambah'])->name('proses-tambah.lembaga-mitra');
    Route::get('/halaman-ubah/lembaga-mitra/{id}', [LembagaMitraController::class, 'halaman_ubah'])->name('halaman-ubah.lembaga-mitra');
    Route::put('/proses-ubah/lembaga-mitra/{id}', [LembagaMitraController::class, 'proses_ubah'])->name('proses-ubah.lembaga-mitra');
    Route::get('proses-hapus/lembaga-mitra/{id}', [LembagaMitraController::class, 'proses_hapus'])->name('proses-hapus.lembaga-mitra');
});


