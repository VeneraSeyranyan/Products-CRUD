<?php

use Illuminate\Support\Facades\Route;
//ավելացնում ենք ,որպեսզի գտնի ProductController
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
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

Route::get('/', function () {   return view('welcome');});
Route::resource('products', ProductController::class);
Route::view('/order/{product_id}', 'product.order')->name('products.order');
Route::resource('orders', OrderController::class);


//Route::post('/orders/order',[ProductController::class,'addOrder'])->name('products.orderAdd');
/*
Route::get('/users',[UserController::class, 'index']);
Route::get('/products',[ProductController::class, 'index']);

Route::get('/products/create',[ProductController::class, 'create']);
Route::post('/products',[ProductController::class, 'store']);
Route::get('/products/{id}',[ProductController::class, 'edit']);
Route::put('/products/{id}',[ProductController::class, 'update']);
Route::delete('/products/{id}',[ProductController::class, 'delete']);
*/


