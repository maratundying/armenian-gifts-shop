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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/', [\App\Http\Controllers\AdminController::class, 'index']);
    Route::resource('categories', \App\Http\Controllers\admin\CategoriesController::class);
    Route::resource('products', \App\Http\Controllers\admin\ProductsController::class);
    Route::get('products/list', [\App\Http\Controllers\admin\ProductsController::class, 'list'])->name('products.list');
});

// Front

Route::get('basket', [\App\Http\Controllers\FrontPagesController::class, 'actionBasket'])->name('basket');
Route::get('product/{id}', [\App\Http\Controllers\FrontPagesController::class, 'actionProduct'])->name('product');
Route::post('basket/get-data', [\App\Http\Controllers\FrontPagesController::class, 'actionGetBasketData']);
