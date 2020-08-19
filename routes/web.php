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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','ActivitiesController@index');
Route::get('/activities/create','ActivitiesController@create');
Route::post('/activities/store','ActivitiesController@store');
Route::get('/activity/{activity}/edit','ActivitiesController@edit');
Route::post('/activity/{activity}/update','ActivitiesController@update');
Route::get('/activity/{activity}/delete','ActivitiesController@delete');





