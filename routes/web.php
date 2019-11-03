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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/read', 'UserController@index');

// Multi user login
Route::post('postlogin', 'AuthController@postlogin');

Route::group(['middleware' => ['auth','Admin:admin,user']], function(){
Route::get('home','AuthController@role');
});
// end Multi user login
