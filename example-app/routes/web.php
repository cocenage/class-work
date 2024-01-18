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
Route::get('/',[\App\Http\Controllers\FrontendContoller::class, 'about'])->name('about');
