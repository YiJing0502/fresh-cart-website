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
Route::prefix('/cart')->group(function () {

    Route::get('/add', [CartController::class, 'create'])->name('cartAdd');
    Route::post('/store', [CartController::class, ('store')])->name('cartStore');

    Route::get('/edit/{id}', [CartController::class, 'edit'])->name('cartEdit');
    Route::post('/update/{id}', [CartController::class, 'update'])->name('cartUpdate');
    // 刪除
    Route::post('/destroy/{id}', [CartController::class, 'destroy'])->name('cartDestroy');

    Route::get('/product-list', [CartController::class, 'index'])->name('cartProductList');
});

