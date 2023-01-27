<?php

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
Route::get('/data_anggota', [\App\Http\Controllers\VIEW\DataAnggota::class, 'index'])->name('admin.data_anggota');
Route::get('/profile', [App\Http\Controllers\User::class, 'index'])->name('user.profile');
// Route::get('/user/{id}', [UserController::class, 'show']);
Route::get('/penerbit', [App\Http\Controllers\PenerbitController::class, 'index'])->name('admin.penerbit');
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('admin.buku');
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('admin.kategori');
Route::get('/dataperpus', [App\Http\Controllers\PerpustakaanController::class, 'index'])->name('admin.dataperpus');
Route::get('/identitas', [App\Http\Controllers\IdentitasController::class, 'index'])->name('admin.identitas');
Route::get('/dataadmin', [App\Http\Controllers\BukuController::class], 'index')->name('admin.dataadmin');


