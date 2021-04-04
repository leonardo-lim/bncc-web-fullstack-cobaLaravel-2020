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

Route::get('/question', 'QuestionController@index');
Route::get('/question/create', 'QuestionController@create');
Route::post('/question', 'QuestionController@store');
Route::get('question/detail/{question_id}', 'QuestionController@show');
Route::get('question/edit/{question_id}', 'QuestionController@edit');
Route::put('question/{question_id}', 'QuestionController@update');
Route::get('/question/{question_id}', 'QuestionController@destroy');