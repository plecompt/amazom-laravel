<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

//home
Route::get('/', [ProductController::class, 'index'])->name('products.index');

//auth
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'loginSubmit'])->name('auth.login.submit');
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/register', [AuthController::class, 'registerSubmit'])->name('auth.register.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::get('/forgot-password', [AuthController::class, 'forgotPassword'])->name('auth.forgot.password');
Route::post('/forgot-password', [AuthController::class, 'forgotPasswordSubmit'])->name('auth.forgot.password.submit');

//products
Route::get('products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('products/store', [ProductController::class, 'store'])->name('products.store');
Route::get('products/manage', [ProductController::class, 'manage'])->name('products.manage');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('products/edit/{slug}', [ProductController::class, 'edit'])->name('products.edit');
Route::post('products/update/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('products/delete/{id}', [ProductController::class, 'delete'])->name('products.delete');

//categories
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/manage', [CategoryController::class, 'manage'])->name('categories.manage');
Route::get('categories/show/{id}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::get('categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');

//dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');