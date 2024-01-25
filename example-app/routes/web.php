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

//Route::get('/', function () {
//    return view('welcome');
//
//});
//
//Route::get('/about', function () {
//    return view('about');
//
//});

Route::get('/',[\App\Http\Controllers\FrontendContoller::class, 'index'])->name('home');
Route::get('/about',[\App\Http\Controllers\FrontendContoller::class, 'about'])->name('about');
Route::get('/portfolio',[\App\Http\Controllers\FrontendContoller::class, 'portfolio'])->name('portfolio');
Route::get('/contact',[\App\Http\Controllers\FrontendContoller::class, 'contact'])->name('contact');
Route::get('/price',[\App\Http\Controllers\FrontendContoller::class, 'price'])->name('price');
Route::get('/blog',[\App\Http\Controllers\FrontendContoller::class, 'blog'])->name('blog');

Route::prefix('/article')->group(function (){
    Route::get('/index', [\App\Http\Controllers\ArticleController::class, 'index'])->name('article.index');
    Route::get('/create', [\App\Http\Controllers\ArticleController::class, 'create'])->name('article.create');
    Route::get('/edit/{article}',[\App\Http\Controllers\ArticleController::class, 'edit'])->name('article.edit');
    Route::post('/store', [\App\Http\Controllers\ArticleController::class, 'store'])->name('article.store');
    Route::put('/update/{article}', [\App\Http\Controllers\ArticleController::class, 'update'])->name('article.update');
    Route::delete('/delete/{article}', [\App\Http\Controllers\ArticleController::class, 'destroy'])->name('article.delete');

    Route::get('/show/{article}', [\App\Http\Controllers\ArticleController::class, 'show'])->name('article.show');
});


Route::prefix('/category')->group(function (){
    Route::get('/index', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('category.index');
    Route::get('/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('category.create');
    Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('category.store');
});
