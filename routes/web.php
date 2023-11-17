<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
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
})->name('home');
Route::get('/kelas', function () {
    return view('kelas/index');
})->name('kelas.index');
Route::get('/index', function () {
    return view('siswa/index');
})->name('index');
//Menampikan data siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
//Menampilkan form tambah siswa
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
//Menyimpan data siswa baru
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
//Mengupdate data siswa
Route::put('/siswa/{siswa}', [SiswaController::class, 'update'])->name('siswa.update');
//Menghapus data siswa
Route::delete('/siswa/{siswa}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//Menampikan data kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
//Menampilkan form tambah kelas
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
//Menyimpan data kelas baru
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{kelas}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
//Mengupdate data kelas
Route::put('/kelas/{kelas}', [KelasController::class, 'update'])->name('kelas.update');
//Menghapus data kelas
Route::delete('/kelas/{kelas}', [KelasController::class, 'destroy'])->name('kelas.destroy');
