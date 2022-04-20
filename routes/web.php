<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarrierController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\DashboardController;
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
Route::get('/search', [HomeController::class, 'search']);

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::post('/products/filter', [ProductsController::class, 'filter'])->name('products.filter');
Route::get('/products/attention', [ProductsController::class, 'attention'])->name('products.attention');
Route::get('/products/download_instruction', [ProductsController::class, 'downloadInstruction'])->name('products.download_instruction');
Route::get('/products/{slug}', [ProductsController::class, 'show'])->name('products.show');

Route::get('/carrier', [CarrierController::class, 'index'])->name('carrier.index');
Route::get('/carrier/apply/{slug}', [CarrierController::class, 'apply'])->name('carrier.apply');

Route::get('/newslifestyle', [NewsLifestyleController::class, 'index'])->name('newslifestyle.index');
Route::get('/newslifestyle/news', [NewsLifestyleController::class, 'news'])->name('newslifestyle.news');
Route::get('/newslifestyle/lifestyle', [NewsLifestyleController::class, 'lifestyle'])->name('newslifestyle.lifestyle');
Route::get('/newslifestyle/{slug}', [NewsLifestyleController::class, 'show'])->name('newslifestyle.show');

Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts.index');

// Auth routes
Route::post('/auth/check', [AuthController::class, 'check'])->name('auth.check');
Route::get('/auth/logout', [AuthController::class, 'logout'])->name('auth.logout');

Route::group(['middleware' => ['AuthCheck']], function () {
  Route::get('/auth/login', [AuthController::class, 'login'])->name('auth.login');

  Route::group(['middleware' => ['AdminCheck']], function () {
    Route::prefix('dashboard')->group(function () {
      Route::get('/', [DashboardController::class, 'products'])->name('dashboard.products');
      Route::get('/newslifestyle', [DashboardController::class, 'newslifestyle'])->name('dashboard.newslifestyle');
      Route::get('/carrier', [DashboardController::class, 'carrier'])->name('dashboard.carrier');

      Route::get('/product-edit/{id}', [ProductsController::class, 'edit'])->name('products.edit');
      Route::get('/product-delete', [ProductsController::class, 'delete'])->name('products.delete');
      Route::post('/product-store', [ProductsController::class, 'store'])->name('products.store');
      Route::post('/product-update', [ProductsController::class, 'update'])->name('products.update');

      Route::get('/newslifestyle-edit/{id}', [NewsLifestyleController::class, 'edit'])->name('newslifestyle.edit');
      Route::get('/newslifestyle-delete', [NewsLifestyleController::class, 'delete'])->name('newslifestyle.delete');
      Route::post('/newslifestyle-store', [NewsLifestyleController::class, 'store'])->name('newslifestyle.store');
      Route::post('/newslifestyle-update', [NewsLifestyleController::class, 'update'])->name('newslifestyle.update');
    });
  });
});
