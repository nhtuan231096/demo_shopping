<?php 
	namespace App\Http\Controllers;
	use App\Models\Slide;
	use App\Models\Product;
	use App\Carts\Cart;
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
			$pros=Product::paginate(12);
			return view('home.shopnow',[
				'pros'=>$pros
			]);
		}
		public function quickView($id){
			$pro=Product::find($id);
			// dd($pro);
			return view('home.quickview',[
				'pro'=>$pro
			]);
		}
		public function addCart($id,Cart $cart){

			$model=Product::find($id);
			if ($model) {
				$cart->add($model);
				return redirect()->route('view_cart')->with('success','Them san pham thanh cong');
			}
			else{
				return view('error.404');
			}
				
		}

		public function view_cart(){
			return view('home.viewCart',[
				'cart'=>new Cart()
			]);
		}
		public function delete($id,Cart $cart){
			$cart->delete($id);
			return redirect()->back()->with('success','xóa thành công');
		}

	}
 ?>