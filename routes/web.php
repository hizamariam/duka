<?php

use App\Http\Controllers\ProductsController;
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
Route::get('/admin/products',[ProductsController::class,'index']);
Route::get('/admin/products/create',[ProductsController::class,'create']);
Route::get('/admin/products/{product}/edit',[ProductsController::class,'edit']);
Route::post('/admin/products/{product}/update',[ProductsController::class,'update']);
Route::get('/admin/products/{product}/destroy',[ProductsController::class,'destroy']);
Route::post('/admin/products/store',[ProductsController::class,'store']);
