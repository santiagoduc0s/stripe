<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BillingController;

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

Route::get('/', [ProductController::class, 'index'])->name('home');

Route::name('articles.')->group(function () {
    Route::get('/articulos', [ArticleController::class, 'index'])->name('index');
    Route::get('/{article}/articulo', [ArticleController::class, 'show'])->name('show');
});

Route::get('/facturacion', [BillingController::class, 'index'])
    ->middleware('auth')
    ->name('billing.index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
