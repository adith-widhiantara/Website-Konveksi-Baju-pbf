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
  Route::get('transaksi', 'BuyingController@index');
  Route::get('transaksi/do', 'BuyingController@do');
  Route::get('transaksi/check', 'BuyingController@check');
  Route::get('transaksi/yes', 'BuyingController@yes');
  Route::get('transaksi/no', 'BuyingController@no');
  Route::get('transaksi/{buy}', 'BuyingController@detailtransaksi');
  Route::patch('transaksi/{buy}', 'BuyingController@upstatuspembayaran');

  // Upload product
  Route::get('bahankain', 'ProductController@bahankain');
  Route::post('bahankain/upload', 'ProductController@store');
  Route::get('desain', 'DesainController@desain');
  Route::post('desain/upload', 'DesainController@store');
  Route::get('warna', 'ColorController@index');
  Route::post('warna/upload', 'ColorController@store');
  // End Upload product
});
// end admin

// User
Route::prefix('home')->group(function () {
  Route::get('product', 'BuyingController@kain');
  Route::post('product', 'BuyingController@upkain');
  Route::get('product/desain/{buy}', 'BuyingController@desain');
  Route::patch('product/desain/{buy}', 'BuyingController@updesain');
  Route::get('product/desain/warna/{buy}', 'BuyingController@color');
  Route::patch('product/desain/warna/{buy}', 'BuyingController@upcolor');
  Route::get('product/desain/warna/detailproduct/{buy}', 'BuyingController@detailproduct');
  Route::patch('product/desain/warna/detailproduct/{buy}', 'BuyingController@updetailproduct');

  Route::get('keranjang', 'BuyingController@indexkeranjang');
  Route::get('keranjang/detail/{buy}', 'BuyingController@showkeranjang');
  Route::patch('keranjang/detail/{buy}', 'BuyingController@upbuktitf');
  Route::get('keranjang/resi/{buy}', 'BuyingController@resi');
});
// End User
