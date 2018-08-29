<?php 
	// route danh muc san pham
	Route::get('/category','CategoryController@index')->name('category');
	Route::get('/category/addCate','CategoryController@add')->name('addCate');
	Route::post('/category/addCate','CategoryController@create')->name('addCate');
	Route::get('/category/editCate/{id}','CategoryController@edit')->name('editCate');
	Route::post('/category/editCate/{id}','CategoryController@postedit')->name('editCate');
	Route::get('/category/deleteCate/{id}','CategoryController@delete')->name('deleteCate');
 ?>