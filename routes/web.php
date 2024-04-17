<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

// Guests controller
Route::get('/', [HomeController::class, 'index']);

Route::get('/product', function () {
    return view('product.index');
})->name('product');

// Auth controller
Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    })->name('dashboard');

    // Product Controller
    Route::get('/product', [ProductController::class, 'index'])->name('all.product');
    Route::get('/product/add', [ProductController::class, 'add'])->name('add.product');
    Route::post('/product/add', [ProductController::class, 'store'])->name('store.product');

    Route::get('/product/edit/{id}', [ProductController::class, 'edit']);
    Route::post('/product/update/{id}', [ProductController::class, 'update']);
    Route::get('/product/delete/{id}', [ProductController::class, 'delete']);


    // Product Type Controller
    Route::post('/product_type/update/{id}', [ProductTypeController::class, 'update']);
    Route::post('/product_type/add', [ProductTypeController::class, 'store'])->name('store.product_type');
});
