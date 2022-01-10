<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MyController2;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MyBlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\firstController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('test',[Controller::class,'test']);
Route::get('/',[MyController::class,'index']);
Route::get('create',[BlogController::class,'create']);
Route::get('/about',[MyController::class,'about']);
Route::get('/menu',[MyController::class,'menu']);
Route::post("/login/user",[MyController::class,'getData']);

Route::get('user',[MyController2::class ,'index']);
Route::get('users',[BlogController::class ,'getData']);
// Route::resource("/blog",BlogController::class);
Route::get("/cat",[firstController::class,'create'])->name('cat.create');
Route::post("/cat",[firstController::class,'store'])->name('cat.store');

Route::view('/login',"form");

Route::get('/list',[MyBlogController::class,'list']);

// In this blow line we use our costom feaching of data to the database
Route::resource('/myblog', MyBlogController::class);
// Route::post('/form', [MyBlogController::class,'store']);