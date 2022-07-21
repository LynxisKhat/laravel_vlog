<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Articles\ArticleController;
use App\Http\Controllers\Products\ProductController;

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


// Route::get('/articles',[ArticleController::class , 'index']);
// Route::get('/articles/detail/{id}',[ArticleController::class , 'detail']);
// Route::get('/products', [ ProductController::class , 'index']);
// Route::get('/articles/add',[ ArticleController::class , 'add']);
// Route::post('/articles/add' , [ ArticleController::class , 'create']);
// Route::get('/articles/delete/{id}', [ ArticleController::class , 'delete']);
Route::resource('articles', ArticleController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

