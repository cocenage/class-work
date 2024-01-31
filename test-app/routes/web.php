<?php

use Illuminate\Support\Facades\Route;

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

// Открытие главной страницы
//Route::get('/', function () {
//    return view('welcome');
//});
// Открытие страницы о нас
//Route::get('/about', function () {
//    return view('about');
//});

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/category', [\App\Http\Controllers\FrontendController::class, 'category'])->name('category');
Route::get('/products/{id}', [\App\Http\Controllers\FrontendController::class, 'products'])->name('products');
Route::get('/kitty-boy/{id}', [\App\Http\Controllers\FrontendController::class, 'product'])->name('product');

Route::prefix('/post')->group(function () {
    Route::get('/index', [\App\Http\Controllers\PostController::class, 'index'])->name('post.index');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create'])->name('post.create');
    Route::get('/edit/{post}', [\App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
    Route::post('/store', [\App\Http\Controllers\PostController::class, 'store'])->name('post.store');
    Route::put('/update/{post}', [\App\Http\Controllers\PostController::class, 'update'])->name('post.update');
    Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('post.delete');
});
Route::prefix('/category')->group(function () {
    Route::get('/index', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
});
Route::prefix('/tovar')->group(function (){
    Route::get('/index', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('tovar.index');
    Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('tovar.create');
    Route::post('/store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('tovar.store');

    Route::put('/update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('tovar.update');

    Route::get('/edit/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('tovar.edit');

    Route::post('/store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('tovar.store');

    Route::delete('/delete/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('tovar.delete');
});
