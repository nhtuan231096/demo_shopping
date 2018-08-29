<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;

	/**
	 * 
	 */
	class SliderController extends Controller
	{
		
		function index()
		{
			return view('admin.slider.index');
		}
	}
 ?>