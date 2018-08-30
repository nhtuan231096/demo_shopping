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
// route group admin
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth'],function(){

	// route home admin
	Route::get('/','AdminController@index')->name('HomeAdmin');

	// route category
	include 'category.php';
	// route product
	include 'product.php';
	// route user
	include 'user.php';
	// route slider
	include 'slider.php';
});
// route đăng nhập
Route::get('admin/login-admin.html','Admin\AdminController@login')->name('login');
Route::post('admin/login-admin.html','Admin\AdminController@postlogin')->name('login');

// route logout
Route::get('admin/signout.html','Admin\AdminController@signout')->name('signout');


// Route::get('admin/logind-admin.html','Admin\AdminController@a')->name('a');
// Route::post('admin/logind-admin.html','Admin\AdminController@pa')->name('a');

// route home
Route::get('/','HomeController@index')->name('home');
Route::get('/about.html','HomeController@about')->name('about');
Route::get('/shopnow.html','HomeController@shopnow')->name('shopnow');
Route::get('/quickView.html/{id}.html','HomeController@quickView')->name('quickView');
Route::get('/addCart.html/{id}.html','HomeController@addCart')->name('addCart');


// Route::get('/', function () {
//     return view('welcome');
// });
