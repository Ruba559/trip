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
    return view('profile');
});

Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/logout',[UserController::class,'getLogout']);
Route::get('/register_user',[UserController::class,'index']);
Route::post('/register',[UserController::class,'create']);
Route::get('/get_account',[UserController::class,'getAccount']);



Route::get('/',[SerchController::class,'index']);
Route::get('/searching-',[SerchController::class,'searching']);
Route::post('/rooms',[SerchController::class,'showRoom']);
Route::post('/reservation_user',[SerchController::class,'reservationUser']);
Route::post('/service_filter',[SerchController::class,'serviceFilter']);
Route::post('/type_house_filter',[SerchController::class,'typeHouseFilter']);
Route::post('/type_home_filter',[SerchController::class,'typeHomeFilter']);
Route::post('/type_filter',[SerchController::class,'typeFilter']);
Route::post('/add_favorite',[SerchController::class,'addFavorite']);
Route::get('/show_favorite/{id}',[SerchController::class,'showFavorite']);
Route::post('/select_room',[SerchController::class,'selectRoom']);
Route::post('/star1_filter',[SerchController::class,'star1Filter']);
Route::post('/star2_filter',[SerchController::class,'star2Filter']);
Route::post('/star3_filter',[SerchController::class,'star3Filter']);
Route::post('/star4_filter',[SerchController::class,'star4Filter']);
Route::post('/star5_filter',[SerchController::class,'star5Filter']);


Route::group([ 'middleware'=> 'auth:admin'],function(){

  Route::get('/index_admin',[AdminController::class,'index']);
  Route::get('/place_table',[AdminController::class,'placeTable']);
  Route::get('/remove_To_place/{id}',[AdminController::class,'removePlace']);
  Route::get('/user_table',[AdminController::class,'userTable']);
  Route::get('/remove_To_user/{id}',[AdminController::class,'removeUser']);
  Route::get('/service_table',[AdminController::class,'serviceTable']);
  Route::get('/remove_service_manegar/{id}',[AdminController::class,'removeServiceManegar']);
  Route::get('/add_proven/{id}',[AdminController::class,'addProven']);
  Route::get('/logout_admin',[AdminController::class,'getLogout']);
  
  });



Route::group([ 'middleware'=> 'auth:serviceManegar'],function(){

Route::get('/index_manegar',[ServiceManegerController::class,'index']);
Route::get('/room_info',[ServiceManegerController::class,'roomInfo']);

Route::get('/place_info',[ServiceManegerController::class,'placeInfo']);

Route::post('/place_info',[ServiceManegerController::class,'place_info']);
Route::post('/edit_place_info',[ServiceManegerController::class,'editPlace']);
Route::get('/remove_To_service/{id}',[ServiceManegerController::class,'removeService']);
Route::get('/remove_room/{id}',[ServiceManegerController::class,'removeRoom']);
Route::post('/edit_service_info',[ServiceManegerController::class,'editService']);
Route::post('/add_service_info',[ServiceManegerController::class,'addService']);
Route::post('/adit_bill',[ServiceManegerController::class,'aditBill']);
Route::post('/add_room',[ServiceManegerController::class,'addRoom']);
Route::get('/index_reservation_user/{id}',[ServiceManegerController::class,'indexReservation']);
Route::get('/remove_reservation/{id}',[ServiceManegerController::class,'removeReservation']);
Route::get('/edit_reservation/{id}',[ServiceManegerController::class,'editReservation']);


});

Route::post('/register_servicemanegar-',[ServiceManegerController::class,'create']);
Route::get('/register_servicemanegar',[ServiceManegerController::class,'index_register']);