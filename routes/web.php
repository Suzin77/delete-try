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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile/{user}','ProfileController@index');

Route::get('/inventory','ItemController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/item/create','ItemController@create');
Route::post('/item/store','ItemController@store');


//Route::resource('item','ItemController');


