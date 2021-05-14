<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SerchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceManegerController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('manegar.index');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/searching',[SerchController::class,'show_regoin']);
Route::get('/searching-',[SerchController::class,'searching']);

Route::get('/index_admin',[AdminController::class,'index']);
Route::get('/place_table',[AdminController::class,'placeTable']);
Route::get('/remove_To_place/{id}',[AdminController::class,'removePlace']);
Route::get('/user_table',[AdminController::class,'userTable']);
Route::get('/remove_To_user/{id}',[AdminController::class,'removeUser']);
Route::get('/service_table',[AdminController::class,'serviceTable']);


Route::post('/register',[UserController::class,'create']);
Route::post('/register',[ServiceManegerController::class,'create']);