<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','taskController@index');


Route::get('/login', function () {
    return view('login');
});

Route::get('/list', function () {
    return view('list');
});

Route::get('/task', function () {
    return view('task');
});

Route::controller('users', 'taskController');
//Route::post('users', 'taskController');

