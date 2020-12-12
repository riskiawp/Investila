<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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
Route::get('admin/tabel-user', function () {
    return view('admin/tabel-user');
});
Route::get('admin/tabel-transaksi', function () {
    return view('admin/tabel-transaksi');
});
Route::get('admin/tabel-lot', function () {
    return view('admin/tabel-lot');
});
Route::get('admin/tabel-artikel', function () {
    return view('admin/tabel-artikel');
});
Route::get('admin/update-artikel', function () {
    return view('admin/update-artikel');
});
Route::get('admin/tabel-lot/input-lot', function () {
    return view('admin/input-lot');
});
Route::get('admin/tabel-lot/update-lot', function () {
    return view('admin/update-lot');
});

//Route User
Route::get('user/index', function () {
    return view('user/index');
});
Route::get('user/product', function () {
    return view('user/product');
});
Route::get('user/product/detail-product', function () {
    return view('user/detail-product');
});
Route::get('user/dashboard', function () {
    return view('user/dashboard');
});
Route::get('user/about-us', function () {
    return view('user/about-us');
});