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

Route::get('/alberi-di-natale', [ProductController::class, 'alberiDiNatale'])->name('alberi_di_natale.index');

// Route::get('/ghirlande', [ProductController::class, 'ghirlande'])->name('ghirlande.index');

// Route::get('/decoro-albero', [ProductController::class, 'decoroAlbero'])->name('decoro_albero.index');

// Route::get('/luci', [ProductController::class, 'luci'])->name('luci.index');

// Route::get('/decori-per-la-casa', [ProductController::class, 'decoriCasa'])->name('decori_casa.index');
