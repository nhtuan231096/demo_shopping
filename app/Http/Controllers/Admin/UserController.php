<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\User;
	use Illuminate\Http\Request;
	/**
	 * 
	 */
	class UserController extends Controller
	{
		
		function index()
		{
			$users=User::all();
			return view('admin.user.index',[
				'users'=>$users
			]);
		}
		public function add(){
			return view('admin.user.add');
		}
		public function create(Request $req){
			$this->validate($req,[
				'name'=>'required|unique:users,name,',
				'email'=>'required|unique:users,email',
				'password'=>'required|min:6',
				'confirmPassword'=>'same:password'
			],[
				'name.required'=>'Tên không được để trống',
				'email.required'=>'Email không được để trống',
				'password.required'=>'Mật khẩu không được để trống',
				'password.min'=>'Mật khẩu ít nhất :min ký tự',
				'name.unique'=>'Tên đã tồn tại',
				'email.unique'=>'Email đã tồn tại',
				'same.confirmPassword'=>'Mật khẩu không trùng khớp'

			]);
				$img='';
			if($req->hasFile('file_upload')){
				$file=$req->file_upload;
				$file->move(base_path('uploads/user'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();
			}
			$req->merge(['image'=>$img]);

			$password=bcrypt($req->password);
			$req->offsetunset('confirmPassword');
			$req->merge(['password'=>$password]);
			// dd($req->all());
			User::create($req->all());
			return redirect()->route('user')->with('success','Thêm tài khoản thành công');
		}
		public function edit($id){
			$users=User::all();
			$user=User::find($id);
			return view('admin.user.edit',[
				'user'=>$user,
				'users'=>$users
			]);
		}
		public function postedit($id,Request $req){
			$this->validate($req,[
				'name'=>'required|unique:users,name,'.$id,
				'email'=>'required|unique:users,email,'.$id
			],[
				'name.required'=>'Tên không được để trống',
				'email.required'=>'Email không được để trống',
				'name.unique'=>'Tên đã tồn tại',
				'email.unique'=>'Email đã tồn tại'
			]);
			$user=User::find($id);
			$img=$user->image;
			if($req->hasFile('file_upload')){
				$file=$req->file_upload;
				$file->move(base_path('uploads/user'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();
			}
			$req->merge(['image'=>$img]);
			// dd($req->all());
			User::find($id)->update($req->all());
			return redirect()->route('user')->with('success','Cập nhật thông tin thành công');
		}
	}
 ?>