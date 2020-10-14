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

Route::get('/show/{id}', [
        'as' => 'show', 'uses' => 'StudentController@show'
]);

Route::get('/insert', [
    'as' => 'insert', 'uses' => 'StudentController@insert'
]);

Route::get('/update/{id}', [
    'as' => 'update', 'uses' => 'StudentController@update'
]);

Route::get('/delete/{id}', [
    'as' => 'delete', 'uses' => 'StudentController@delete'
]);

Route::get('/showAll', [
    'as' => 'showAll', 'uses' => 'StudentController@showAll'
]);
