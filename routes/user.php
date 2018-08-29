<?php 
	Route::get('Admin/user','UserController@index')->name('user');
	Route::get('Admin/addUser','UserController@add')->name('addUser');
	Route::post('Admin/addUser','UserController@create')->name('addUser');
	Route::get('Admin/editUser/{id}','UserController@edit')->name('editUser');
	Route::post('Admin/editUser/{id}','UserController@postedit')->name('editUser');
 ?>