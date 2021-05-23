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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/index', function () {
    return view('manegar.reservation');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/index_admin',[AdminController::class,'index']);
Route::get('/place_table',[AdminController::class,'placeTable']);
Route::get('/remove_To_place/{id}',[AdminController::class,'removePlace']);
Route::get('/user_table',[AdminController::class,'userTable']);
Route::get('/remove_To_user/{id}',[AdminController::class,'removeUser']);
Route::get('/service_table',[AdminController::class,'serviceTable']);
Route::get('/remove_service_manegar/{id}',[AdminController::class,'removeServiceManegar']);



Route::get('/index_manegar',[ServiceManegerController::class,'index']);
Route::get('/room_info',[ServiceManegerController::class,'room_info']);
Route::post('/place_info',[ServiceManegerController::class,'place_info']);
Route::post('/edit_place_info',[ServiceManegerController::class,'edit']);
Route::get('/remove_To_service/{id}',[ServiceManegerController::class,'removeService']);
Route::post('/edit_service_info',[ServiceManegerController::class,'editService']);
Route::post('/add_service_info',[ServiceManegerController::class,'addService']);
Route::get('/index_reservation_user',[ServiceManegerController::class,'indexReservation']);
Route::get('/remove_reservation/{id}',[ServiceManegerController::class,'removeReservation']);
Route::get('/edit_reservation/{id}',[ServiceManegerController::class,'editReservation']);
Route::post('/register_servicemanegar-',[ServiceManegerController::class,'create']);
Route::get('/register_servicemanegar',[ServiceManegerController::class,'index_register']);



Route::get('/register_user',[UserController::class,'index']);
Route::post('/register',[UserController::class,'create']);



Route::get('/',[SerchController::class,'index']);
Route::get('/searching-',[SerchController::class,'searching']);
