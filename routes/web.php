<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;




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

Route::get('login', function () {
    return view('login');
});

Route::post('login', [UserController::class, 'login']);


Route::get('register', function () {
    return view('register');
});

Route::post('register', [UserController::class, 'register']);


Route::get('/', [HomeController::class, 'index']);

Route::get('logout', [UserController::class,'logout']);

 //Route Admi
Route::get('admin/input-artikel', function () {
    return view('admin/input-artikel');
});
Route::get('admin/tabel-user', [UserController::class, 'index']);

Route::get('admin/tabel-transaksi', [TransactionController::class, 'index_admin']);

Route::get('admin/tabel-lot', [LotController::class, 'tampil_lot']);
Route::get('admin/tabel-artikel', [ArticleController::class, 'tampil_article']);

Route::get('admin/update-artikel', function () {
    return view('admin/update-artikel');
});
Route::get('admin/tabel-lot/input-lot', function () {
    return view('admin/input-lot');
});
Route::get('admin/tabel-lot/update-lot/{id}', [LotController::class, 'detail_lot']);

//Route User
Route::get('user/index', function () {
    return view('user/index');
});
Route::get('user/product', [ProductController::class, 'tampil_produk']);

Route::get('user/product/detail-product/{id}', [ProductController::class, 'detail_produk']);

Route::get('user/pendanaan', [TransactionController::class, 'index']);

Route::post('user/pendanaan', [TransactionController::class, 'input']);

Route::get('admin/tabel-transaksi/{id}', [TransactionController::class, 'delete_transaksi']);


Route::get('user/about-us', function () {
    return view('user/about-us');
});
//Article
Route::post('article', [ArticleController::class, 'input']);

Route::get('article/update/{id}', [ArticleController::class, 'update_article']);

Route::post('article/update', [ArticleController::class, 'update']);

Route::get('article/delete/{id}', [ArticleController::class, 'delete_article']);

//delete user
Route::get('admin/tabel-user/{id}', [UserController::class, 'delete_user']);

//lots
Route::post('lot', [LotController::class, 'input_lot']);

Route::get('lot/update/{id}', [LotController::class, 'detail_lot']);

Route::post('lot/update', [LotController::class, 'update_lot']);

Route::get('lot/delete/{id}', [LotController::class, 'delete_lot']);




