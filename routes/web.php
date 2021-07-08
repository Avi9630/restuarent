<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes(['register' => false]);

// Route::get('/category/create','CategoryController@create');

//Another way of routing.

//Category route
Route::resource('category','CategoryController')->middleware('auth');
//Food section rout
Route::resource('food','FoodController')->middleware('auth');
Route::get('/','FoodController@listFood');
Route::get('/foods/{id}','FoodController@view')->name('food.view');