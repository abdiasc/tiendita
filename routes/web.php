<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();

// Rutas frontend
Route::get('/',[FrontController::class, 'welcome'])->name('frontend.welcome');


//Rutas de usuario
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas de administrador
Route::get('/admin',[AdminController::class, 'adminhome'])->name('admin.adminhome');
Route::resource('admin/products', ProductController::class)->names('admin.products');
Route::resource('admin/categories', CategoryController::class)->names('admin.categories');
Route::resource('admin/tags', TagController::class)->names('admin.tags');

