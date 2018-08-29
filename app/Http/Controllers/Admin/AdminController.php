<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use Auth;
	use App\User;
	use Illuminate\Http\Request;
	/**
	 * 
	 */
	class AdminController extends Controller
	{

		function index()
		{
			$user=Auth::user();
			return view('admin.index');
		}
		public function login(){
			return view('admin.login');
		}
		public function postlogin(Request $req){
			if(Auth::attempt($req->only('email','password'))){
				$user=Auth::user();
				// dd($user->level);
				if ($user->level==1) {
					return redirect()->route('HomeAdmin');
				}
				else{
					Auth::logout();
					return redirect()->route('login')->with('error','Lỗi đăng nhập');
				}
			}
			else{
				return redirect()->back()->with('error','Lỗi đăng nhập');
			}
			// dd($req->all());

		}

		public function signout(){
			Auth::logout();
			return redirect()->route('login');
		}
		// public function a(){
		// 	return view('admin.a');
		// }
		// function pa(Request $req){
		// 	$password=bcrypt($req->password);
		// 	$req->merge(['password'=>$password]);
		// 	// dd($req->all());
		// 	User::create($req->all());
		// }
	}
 ?>