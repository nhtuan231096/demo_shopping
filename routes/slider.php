<?php 
	Route::get('admin/slider','SliderController@index')->name('slider');
	Route::get('admin/addSlide','SliderController@add')->name('addSlide');
	Route::post('admin/addSlide','SliderController@create')->name('addSlide');
	Route::get('admin/editSlide/{id}','SliderController@edit')->name('editSlide');
	Route::post('admin/editSlide/{id}','SliderController@postedit')->name('editSlide');
	Route::get('admin/deleteSlide/{id}','SliderController@delete')->name('deleteSlide');
 ?>