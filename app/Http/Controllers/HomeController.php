<?php 
	namespace App\Http\Controllers;
	use App\Models\Slide;
	/**
	 * 
	 */
	class HomeController extends Controller
	{
		
		function index()
		{
			$sliders=Slide::all();
			return view('home.index',[
				'sliders'=>$sliders
			]);
		}
		public function about(){
			return view('home.about');
		}
		public function shopnow(){
			return view('home.shopnow');
		}
	}
 ?>