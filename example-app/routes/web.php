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
