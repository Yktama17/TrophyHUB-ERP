<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\BomController;

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

// Route untuk Produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/add', [ProductController::class, 'create'])->name('products.create');
Route::post('/products/add', [ProductController::class, 'store'])->name('products.store');

// Route untuk Material
Route::get('/material/add', [MaterialController::class, 'create'])->name('material.create');
Route::post('/material/add', [MaterialController::class, 'store'])->name('material.store');

// Route untuk BoM
Route::get('/bom', [BomController::class, 'index'])->name('bom.index');
Route::get('/bom/add', [BomController::class, 'create'])->name('bom.create');
Route::post('/bom/add', [BomController::class, 'store'])->name('bom.store');
