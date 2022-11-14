<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routeController;
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
Route::post("dash",[UserController::class,'getData']);
//Route::post("profile",[UserController::class,'profile']);

Route::post("reg",[RegController::class,'inputdata']);
Route::view("login","users");
Route::view("reg","reg");
Route::post("users",[RegController::class,'addData']);
Route::view("dash","dash");
Route::view("profile","profile");
Route::view("edit","edit");
//Route::view("userlist","userlist");
Route::get("userlist",[UserlistController::class,'index']);
Route::get("delete/{id}",[UserlistController::class,'delete']);
Route::get("edit/{id}",[UserlistController::class,'showdata']);
Route::post("edit",[UserlistController::class,'update']);
Route::view("userid","userid");


Route::get('/home', [routecontroller::class, 'index'])->name('home');
Route::get('/service', [routecontroller::class, 'products'])->name('service');
Route::get('/team', [routecontroller::class, 'team'])->name('team');
Route::view("about","about")->name('about');
Route::view("dash","dash")->name('dash');
Route::view("contact","contact")->name('contact');
