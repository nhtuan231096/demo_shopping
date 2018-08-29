<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Category;
	/**
	 * 
	 */
	class CategoryController extends Controller
	{
		
		function index()
		{
			$category=Category::paginate(10);
			return view('admin.category.index',[
				'cates'=>$category
			]);
		}
	}
 ?>