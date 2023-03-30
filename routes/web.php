<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;


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



// Route::get('/login', function () {
//     return view('/login', ["title"=>"Login"]);
// });

Route::get('/register', [AuthController::class, "register"])->name('register');
Route::get('/login', [AuthController::class, "login"])->name('login');
Route::get('/logout', [AuthController::class, "logout"])->name('logout');

Route::post('/register', [AuthController::class, "doRegister"])->name('do.register');
Route::post('/login', [AuthController::class, "doLogin"])->name('do.login');



//tampil data kategori
Route::get('/kategori/index', [KategoriController::class,'index']);

//fungsi create kategori
Route::get('/kategori/tambah', [KategoriController::class,'create']);

//untuk edit data kategori
Route::get('/kategori/index/{id}/edit', [KategoriController::class, 'edit']);


//untuk delete data kategori
Route::get('/kategori/index/{id}/delete', [KategoriController::class, 'destroy']);

Route::post('/kategori/index', [KategoriController::class, 'store']);

//untuk update data kategori
Route::put('/kategori/index/{id}',[KategoriController::class, 'update']);

//==================================

//tampil data produk
Route::get('/product/index', [ProdukController::class, 'index']);

//fungsi create produk
Route::get('/product/add', [ProdukController::class,'create']);

//untuk edit data produk
Route::get('/product/index/{id}/edit', [ProdukController::class, 'edit']);

//untuk delete data Produk
Route::get('/product/index/{id}/delete', [ProdukController::class, 'destroy']);

Route::post('/product/index', [ProdukController::class, 'store']);

//untuk update data produk
Route::put('/product/index/{id}',[ProdukController::class, 'update']);

//===========================



Route::fallback(function () {
    return '404 | SORRY, Halaman  tidak tersedia';
});
