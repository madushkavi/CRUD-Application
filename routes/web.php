<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
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

Route::get('/p', [ProductController::class,'index']);
Route::get('/', [LoginController::class,'index']);
Route::post('/done', [LoginController::class,'checklogin']);
Route::get('/logout',[LoginController::class,'logout']             //this index file must on the view blade folder this code will redirect to that folder to show 
);   

Route::resource('products',ProductController::class);
Route::resource('logins',LoginController::class);
