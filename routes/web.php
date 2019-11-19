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
Route::prefix('home')->group(function () {
  Route::get('dataadmin', 'UserController@indexadmin');
  Route::get('datacust', 'UserController@indexcust');
  Route::get('bahankain', 'ProductController@bahankain');
  Route::post('bahankain/upload', 'ProductController@store');
  Route::get('desain', 'DesainController@desain');
  Route::post('desain/upload', 'DesainController@store');
});
// end admin

// User
Route::prefix('home')->group(function () {
  Route::get('product', 'BuyingController@kain');
  Route::post('product', 'BuyingController@upkain');
  Route::get('product/desain', 'BuyingController@desain');
  Route::post('product/desain', 'BuyingController@updesain');
});
// End User
