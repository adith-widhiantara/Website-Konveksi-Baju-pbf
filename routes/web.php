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
Route::get('logout', 'AuthController@logout');
Route::get('/read', 'UserController@index');

// Multi user login
Route::post('postlogin', 'AuthController@postlogin');

Route::group(['middleware' => ['auth','Admin:admin,user,subadmin']], function(){
Route::get('home','AuthController@role');
});
// end Multi user login

// admin
Route::get('registeradm', 'AuthController@create');
Route::get('user', 'AuthController@index');
Route::post('dftadmin', 'UserController@store');
Route::get('home/dataadmin', 'UserController@indexadmin');
Route::get('home/datacust', 'UserController@indexcust');
Route::get('home/bahankain', 'ProductController@bahankain');
Route::post('home/bahankain/upload', 'ProductController@store');
Route::get('home/desain', 'DesainController@desain');
Route::post('home/desain/upload', 'DesainController@store');
// end admin

// User
Route::get('home/product', 'BuyingController@kain');
Route::get('home/product/desain', 'BuyingController@desain');
// End User
