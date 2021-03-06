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
Route::get('/homelogin','HomeController@login')->name('homeLogin');
Route::post('/homelogin','HomeController@postlogin')->name('homeLogin');

Route::get('/about.html','HomeController@about')->name('about');
Route::get('/shopnow.html','HomeController@shopnow')->name('shopnow');
Route::get('/quickView.html/{id}.html','HomeController@quickView')->name('quickView');
Route::get('/add-cart/{id}','HomeController@addCart')->name('addCart');
Route::get('/view_cart','HomeController@view_cart')->name('view_cart');
Route::get('/delete_cart/{id}','HomeController@delete')->name('delete_cart');
Route::get('/update_cart/{id}','HomeController@update')->name('update_cart');
Route::get('/clear_cart','HomeController@clear')->name('clear_cart');



Route::get('cart/order','OrderController@order')->name('order');
Route::post('cart/order','OrderController@postorder')->name('order');
Route::get('cart/ord_success','OrderController@ordSuccess')->name('ordSuccess');





// Route::get('/', function () {
//     return view('welcome');
// });
