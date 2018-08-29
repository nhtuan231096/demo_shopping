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
});
// route đăng nhập
Route::get('admin/login-admin.html','Admin\AdminController@login')->name('login');
Route::post('admin/login-admin.html','Admin\AdminController@postlogin')->name('login');

// route logout
Route::get('admin/signout.html','Admin\AdminController@signout')->name('signout');


// Route::get('admin/logind-admin.html','Admin\AdminController@a')->name('a');
// Route::post('admin/logind-admin.html','Admin\AdminController@pa')->name('a');
Route::get('/', function () {
    return view('welcome');
});
