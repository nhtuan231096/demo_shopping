<?php 
	Route::get('Product/listPros','ProductController@list')->name('listPros');
	Route::get('Product/addPro','ProductController@add')->name('addPro');
	Route::post('Product/addPro','ProductController@create')->name('addPro');
 ?>