<?php 
	namespace App\Http\Controllers;
	use App\Models\Slide;
	use App\Models\Product;
	use App\Models\Category;
	use App\Carts\Cart;
	use Illuminate\Http\Request;
	use View;
	use Auth;
	/**
	 * 
	 */
	class HomeController extends Controller
	{
		public function __construct(){
			$this->middleware(function($request,$next){
				View::share([
				'category'=>Category::all(),
				'cart'=>new Cart()
			]);
				return $next($request);
			});
			
		}
		function index()
		{
			$sliders=Slide::all();
			return view('home.index',[
				'sliders'=>$sliders
			]);
		}
		public function login(){
			return view('home.login');
		}
		public function postlogin(Request $req){
			if (Auth::attempt($req->only('email','password'))) {
				return view('home.order');
			}
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

		public function update($id,Cart $cart){
			$qty=request()->qty>0?request()->qty:1;
			$cart->update($id,$qty);
			return redirect()->back()->with('success','Cập nhật thành công');
		}
		public function clear(Cart $cart){
			$cart->clear();
			return redirect()->back()->with('success','Hủy giỏ hàng thành công');
		}
	}
 ?>