<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\routecontroller;

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
    return view('home');
});

Route::get('/home', [routecontroller::class, 'index'])->name('home');
Route::get('/service', [routecontroller::class, 'products'])->name('service');
Route::get('/team', [routecontroller::class, 'team'])->name('team');
Route::view("about","about")->name('about');
Route::view("contact","contact")->name('contact');