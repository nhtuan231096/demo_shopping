<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Category;
	use Illuminate\Http\Request;
	/**
	 * 
	 */
	class CategoryController extends Controller
	{
		
		function index()
		{
			$category=Category::Search()->paginate(10);
			return view('admin.category.index',[
				'cates'=>$category
			]);
		}
		public function add(){
			return view('admin.category.add');
		}
		public function create(Request $req){
			$this->validate($req,[
				'name'=>'required|unique:categorys,name|min:5',
				'slug'=>'required|unique:categorys,slug|min:5'
			],[
				'name.required'=>'Tên danh mục không được để trống',
				'slug.required'=>'Đường dẫn tĩnh không được để trống',
				'name.unique'=>'Tên đã tồn tại',
				'slug.unique'=>'Đường dẫn tĩnh đã tồn tại',
				'name.min'=>'Tên ít nhất :min ký tự',
				'slug.min'=>'Đường dẫn ít nhất :min ký tự',
			]);
			Category::create($req->all());
			return redirect()->route('category')->with('success','Thêm danh mục thành công');
			// dd($req->all());
		}
		public function edit($id){
			$cate=Category::find($id);
			return view('admin.category.edit',[
				'cate'=>$cate
			]);
		}
		public function postedit($id,Request $req){
			$this->validate($req,[
				'name'=>'required|min:5|unique:categorys,name,'.$id,
				'slug'=>'required|min:5|unique:categorys,slug,'.$id
			],[
				'name.required'=>'Tên danh mục không được để trống',
				'slug.required'=>'Đường dẫn tĩnh không được để trống',
				'name.unique'=>'Tên đã tồn tại',
				'slug.unique'=>'Đường dẫn tĩnh đã tồn tại',
				'name.min'=>'Tên ít nhất :min ký tự',
				'slug.min'=>'Đường dẫn ít nhất :min ký tự',
			]);
			Category::find($id)->update($req->all());
			return redirect()->route('category')->with('success','Cập nhật danh mục thành công');
		}

		public function delete($id){
			Category::destroy($id);
			return redirect()->back()->with('success','Xóa danh mục thành công');
		}
	}
 ?>