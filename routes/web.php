<?php

use App\Http\Controllers\SandwichesController;
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



Route::get('/', function () {
    return view('welcome');
});
Route::get('/sandwiches/new', 'SandwichesController@new')->name('sandwiches.new')->middleware('auth');
Route::get('/sandwiches', 'SandwichesController@index')->name('sandwiches.index')->middleware('auth');
Route::get('/sandwiches/create', 'SandwichesController@create')->name('sandwiches.create');
Route::post('/sandwiches', 'SandwichesController@store')->name('sandwiches.store');
Route::post('/sandwiches/new', 'SandwichesController@storeNew')->name('sandwiches.store');
Route::get('/sandwiches/{id}', 'SandwichesController@show')->name('sandwiches.show')->middleware('auth');
Route::delete('/sandwiches/{id}', 'SandwichesController@destroy')->name('sandwiches.destroy')->middleware('auth');



Auth::routes([
    // 'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
