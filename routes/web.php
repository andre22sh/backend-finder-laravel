<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\GuestbookController;
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

Route::get('/login',[AuthController::class,'login'] )->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin'] );
Route::get('/logout',[AuthController::class,'logout'] );


Route::get('/dashboard',[DashboardController::class,'index'] )->middleware('auth');
Route::get('/products',[ProductController::class,'index'] )->middleware('auth');
Route::get('/content/create',[ContentController::class,'create'] )->middleware('auth');
Route::get('/content/{id}/edit',[ContentController::class,'edit'] )->middleware('auth');
Route::post('/content/{id}',[ContentController::class,'update'] )->middleware('auth');
Route::get('/content',[ContentController::class,'index'] )->middleware('auth');
Route::post('/content',[ContentController::class,'store'] )->middleware('auth');
Route::get('/content/{id}/hapus',[ContentController::class,'hapus'] )->middleware('auth');
Route::put('/content/{id}',[ContentController::class,'destroy'] )->middleware('auth');
Route::get('/products/create',[ProductController::class,'create'] )->middleware('auth');
Route::post('/products',[ProductController::class,'store'] )->middleware('auth');
Route::get('/',[ContentController::class,'index'] )->middleware('auth');
Route::get('/products/{id}/edit',[ProductController::class,'edit'] )->middleware('auth');
Route::post('/products/{id}',[ProductController::class,'update'] )->middleware('auth');
Route::get('/products/{id}/hapus',[ProductController::class,'hapus'] )->middleware('auth');
Route::put('/products/{id}',[ProductController::class,'destroy'] )->middleware('auth');
Route::get('/user',[UserController::class,'index'] )->middleware('auth');
Route::get('/user/{id}/edit',[UserController::class,'edit'] )->middleware('auth');
Route::post('/users/{id}',[UserController::class,'update'] )->middleware('auth');
Route::get('/feedback',[FeedbackController::class,'index'] )->middleware('auth');
Route::get('/feedback/{id}/edit',[FeedbackController::class,'edit'] )->middleware('auth');
Route::post('/feedback/{id}',[FeedbackController::class,'update'] )->middleware('auth');
Route::get('/guestbook',[GuestbookController::class,'index'] )->middleware('auth');

