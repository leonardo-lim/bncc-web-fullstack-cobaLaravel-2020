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

// Route::get('/', 'HomeController@homeView');
// Route::get('/register', 'AuthController@registerView');
// Route::get('/welcome', 'AuthController@welcomeView');
// Route::post('/welcome', 'AuthController@getName');

Route::get('/', 'HomeController@tableView');
Route::get('/data-tables', 'HomeController@tableDataView');

Route::resource('question', 'QuestionController')->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');