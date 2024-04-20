<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeProductController;
use App\Http\Controllers\CartController;

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
Route::get('/product', [HomeProductController::class, 'index']);
Route::get('/category/{category}', [HomeProductController::class, 'showByCategory']);
Route::get('/product/{id}', [HomeProductController::class, 'detail']);

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

// Middleware Authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'roleCheck'
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


    // Cart Controller
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('index.cart');
    Route::get('/cart/delete/{id}', [CartController::class, 'delete']);

    Route::post('/product/{id}/add-to-cart', [CartController::class, 'store'])->name('store.cart');
    Route::post('/product/{id}/buy-now', [CartController::class, 'store'])->name('store.order');

});


