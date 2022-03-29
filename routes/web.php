<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsLifestyleController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products/filter', [ProductsController::class, 'filter'])->name('products.filter');
Route::get('/products/attention', [ProductsController::class, 'attention'])->name('products.attention');
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier.index');
Route::get('/carrier/apply', [CarrierController::class, 'apply'])->name('carrier.apply');

Route::get('/newslifestyle', [NewsLifestyleController::class, 'index'])->name('newslifestyle.index');
Route::get('/newslifestyle/news', [NewsLifestyleController::class, 'news'])->name('newslifestyle.news');
Route::get('/newslifestyle/lifestyle', [NewsLifestyleController::class, 'lifestyle'])->name('newslifestyle.lifestyle');
Route::get('/newslifestyle/{id}', [NewsLifestyleController::class, 'show'])->name('newslifestyle.show');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');
