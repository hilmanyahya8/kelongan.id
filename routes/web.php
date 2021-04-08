<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\MerchantController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SellerController;
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

Route::get('/', function () {
    return view('welcome');
});


//Login
Route::get('/log in', [LoginController::class,'index']);
Route::post('/login/cek', [LoginController::class,'cek_login']);
Route::get('/log out', [LoginController::class,'logout']);

//dashboard
Route::get('home', [DashboardController::class,'index']);

//Register
Route::get('register', [RegisterController::class,'index']);
Route::post('register_create', [UserController::class,'store']);

//CRUD Seller
Route::get('seller', [SellerController::class, 'index']);
Route::get('seller_create', [SellerController::class, 'create']);
Route::post('seller_store', [SellerController::class, 'store']);
Route::get('seller_edit/{id}', [SellerController::class, 'edit']);
Route::put('seller_update/{id}', [SellerController::class, 'update']);
Route::delete('seller_destroy/{id}', [SellerController::class, 'destroy']);

//CRUD Barang
Route::get('item', [ItemController::class, 'index']);
Route::get('item_create', [ItemController::class, 'create']);
Route::get('item_store', [ItemController::class, 'store']);
Route::get('item_edit/{id}', [ItemController::class, 'edit']);
Route::put('item_update/{id}', [ItemController::class, 'update']);
Route::delete('item_destroy/{id}', [ItemController::class, 'destroy']);

//CRUD Admin
Route::get('admin', [AdminController::class, 'index']);
Route::get('admin_create', [AdminController::class, 'create']);
Route::post('admin_store', [AdminController::class, 'store']);
Route::get('admin_edit/{id}', [AdminController::class, 'edit']);
Route::put('admin_update/{id}', [AdminController::class, 'update']);
Route::delete('admin_destroy/{id}', [AdminController::class, 'destroy']);

//CRUD Merchant
Route::get('merchant', [MerchantController::class, 'index']);
Route::get('merchant_create', [MerchantController::class, 'create']);
Route::post('merchant_store', [MerchantController::class, 'store']);
Route::get('merchant_edit/{id}', [MerchantController::class, 'edit']);
Route::put('merchant_update/{id}', [MerchantController::class, 'update']);
Route::delete('merchant_destroy/{id}', [MerchantController::class, 'destroy']);