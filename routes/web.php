<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/user', [UserController::class, 'index']);              // menampilkan halaman awal user
Route::post('/user/list', [UserController::class, 'list']);          // menampikan data user dalam bentuk json untuk datatables
Route::get('/user/create', [UserController::class, 'create']);       // menampilkan halaman form tambah user
Route::post('/user', [UserController::class, 'store']);             // menyimpan data user baru
Route::get('/user/{id}', [UserController::class, 'show']);           // menampilkan detail user
Route::get('/user/{id}/edit', [UserController::class, 'edit']);      // menampilkan halaman form edit user
Route::put('/user/{id}', [UserController::class, 'update']);         // menyimpan perubahan data user
Route::delete('/user/{id}', [UserController::class, 'destroy']);     // menghapus data user

Route::get('/level', [LevelController::class, 'index']);
Route::get('/level/create', [LevelController::class, 'create'])->name('level.create');
Route::post('/level', [LevelController::class, 'store']);
Route::get('/level/edit/{id}', [levelController::class, 'edit']);
Route::put('/level/{id}', [LevelController::class, 'update']);
Route::get('/level/delete/{id}', [LevelController::class, 'delete']);

// Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/ubah/{id}', [KategoriController::class, 'ubah']);
Route::put('/kategori/{id}', [KategoriController::class, 'edit']);
Route::get('kategori/delete/{id}', [KategoriController::class, 'delete']);

Route::resource('m_user', POSController::class);

Route::get('/', [WelcomeController::class, 'index']);
