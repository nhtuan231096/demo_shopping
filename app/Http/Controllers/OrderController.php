<?php 
	namespace App\Http\Controllers;
	use App\Models\Slide;
	use App\Models\Product;
	use App\Models\Category;
	use App\Models\Order;
	use App\Models\OrderDetail;
	use App\Carts\Cart;
	use Illuminate\Http\Request;
	use View;
	use Auth;
	/**
	 * 
	 */
	class OrderController extends Controller
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
		public function order(){
			return view('home.order');
		}
		public function postorder(Request $req,Cart $cart){
			$this->validate($req,[
				'name'=>'required',
				'email'=>'required',
				'payment_method'=>'required',
				'shipping_method'=>'required'
			],[
				'required'=>'Không được để trống'
			]);
			$datas=[];
			$req->merge(['cus_id'=>Auth::id()]);


			if ($order=Order::create($req->all())) {
				foreach($cart->items as $item){
					$datas[]=[
						'pro_id'=>$item['id'],
						'price'=>$item['price'],
						'quantity'=>$item['qty'],
						'order_id'=>$order->id
					];
				}
				if($datas){
					if(OrderDetail::insert($datas)){
						$cart->clear();
						return redirect()->route('ordSuccess')->with('success','Đặt hàng thành công');
					}
					else{
						return redirect()->route('ordSuccess')->with('errors','Đặt hàng không thành công');
					}
				}
			}else{

			}
		}
		public function ordSuccess(){
			return view('home.ordSuccess');
		}
	}
 ?>