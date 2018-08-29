<?php 
	Route::get('Product/listPros','ProductController@list')->name('listPros');
	Route::get('Product/addPro','ProductController@add')->name('addPro');
	Route::post('Product/addPro','ProductController@create')->name('addPro');
	Route::get('Product/editPro/{id}','ProductController@edit')->name('editPro');
	Route::post('Product/editPro/{id}','ProductController@postedit')->name('editPro');
	Route::get('Product/deletePro/{id}','ProductController@delete')->name('deletePro');
 ?>