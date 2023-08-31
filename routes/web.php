<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;

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
Route::get('/cartAdd', [CartController::class, 'cartAdd']);
Route::get('/cart-edit', [CartController::class, ('cartEdit')]);
Route::get('/cart-product-list', [CartController::class, ('cartProductList')]);

