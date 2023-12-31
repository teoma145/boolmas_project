<?php

use Illuminate\Support\Facades\Route;
// percorso per utilizzare ProductController
use App\Http\Controllers\ProductController;


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


Route::get('/', [ProductController::class, 'home'])->name('home');

Route::view('/contact', 'contact')->name('contact');

Route::view('/about', 'about')->name('about');

Route::get('/products/{id}', [ProductController::class, 'prodotto'])->name('prodotto.show');

Route::get('/alberi-di-natale', [ProductController::class, 'alberiDiNatale'])->name('alberi_di_natale.index');

Route::get('/ghirlande', [ProductController::class, 'ghirlande'])->name('ghirlande.index');

Route::get('/decoro-albero', [ProductController::class, 'decoroAlbero'])->name('decoro_albero.index');

Route::get('/luci', [ProductController::class, 'luci'])->name('luci.index');

Route::get('/decori-per-la-casa', [ProductController::class, 'decoriCasa'])->name('decori_casa.index');

Route::get('/productscart/{id}', [ProductController::class, 'addProducttoCart'])->name('addproduct.to.cart');

Route::get('/shopping-cart', [ProductController::class, 'ProductCart'])->name('shopping.cart');

Route::get('/clear-cart', [ProductController::class, 'clearCart'])->name('clear.cart');



// Route::get('/luci/{product}', [ProductController::class, 'luciShow'])->name('luci.show');
