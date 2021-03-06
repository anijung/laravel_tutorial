<?php

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

Route::auth();
Route::get('/tasks', 'TaskController@index');
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::post('/task/create', 'TaskController@create');

Route::get('/home', 'HomeController@index')->name('home');



//Route::group(['middleware' => ['web']], function () {
//
//    Route::get('/', function () {
//        return view('welcome');
//    })->middleware('guest');
//
//    Route::get('/tasks', 'TaskController@index');
//    Route::post('/task/create', 'TaskController@create');
//    Route::post('/task', 'TaskController@store');
//    Route::delete('/task/{task}', 'TaskController@destroy');
//
//    Route::auth();
//
//});