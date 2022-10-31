<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\UserlistController;

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



// Route::get('/login', [loginController::class, 'index'])->name('login');
Route::post("users",[UserController::class,'getData']);

Route::post("reg",[RegController::class,'inputdata']);
Route::view("login","users");
Route::view("reg","reg");
Route::post("reg",[RegController::class,'addData']);
Route::view("dash","dash");
Route::view("profile","profile");
Route::view("edit","edit");
//Route::view("userlist","userlist");
Route::get("userlist",[UserlistController::class,'index']);
Route::get("delete/{id}",[UserlistController::class,'delete']);
Route::get("edit/{id}",[UserlistController::class,'showdata']);
Route::post("edit",[UserlistController::class,'update']);
Route::view("userid","userid");
