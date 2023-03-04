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
//});

Route::get('/dashboard',[App\Http\Controllers\WebController::class,"index"]);

Route::get('/admin/class/class',[App\Http\Controllers\WebController::class,"class"]);

Route::get('/',[App\Http\Controllers\WebController::class,"home"]);

Route::get('user/about',[App\Http\Controllers\WebController::class,"about"]);

Route::get('user/blog',[App\Http\Controllers\WebController::class,"blog"]);

Route::get('user/blog-single',[App\Http\Controllers\WebController::class,"blogSingle"]);

Route::get('user/contact',[App\Http\Controllers\WebController::class,"contact"]);

Route::get('user/teachers',[App\Http\Controllers\WebController::class,"teacher"]);

Route::get('user/course-grid',[App\Http\Controllers\WebController::class,"courseGrid"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
