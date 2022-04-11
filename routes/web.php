<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SmartphoneController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Models\Smartphone;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [CategoriesController::class, 'categories'])->name('category');
Route::get('products', [ProductsController::class, 'listProducts'])->name('products');
Route::get('noutbooks', [ProductsController::class, 'productNoutbooks'])->name('noutbooks');
Route::get('monobloks', [ProductsController::class, 'productMonobloks'])->name('monobloks');
Route::get('naushniki', [ProductsController::class, 'productNaushniki'])->name('naushniki');
Route::post('addToCart', [CartController::class, 'cart'])->name('addToCart');
Route::get('cart', [CartController::class, 'cart_user'])->name('cart');
Route::post('delivery', [CartController::class, 'delivery'])->name('delivery');

Route::post('delFromCart', [CartController::class, 'delete_cart'])->name('delFromCart');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:admin'])->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');

    Route::resource('category', CategoryController::class);
    Route::resource('smartphone', SmartphoneController::class);
});
