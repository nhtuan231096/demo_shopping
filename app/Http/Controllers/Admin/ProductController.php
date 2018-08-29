<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Product;
	use App\Models\Category;
	use Illuminate\Http\Request;
	/**
	 * 
	 */
	class ProductController extends Controller
	{
		
		function list()
		{
			$products=Product::Search()->paginate(10);
			return view('admin.product.index',[
				'pros'=>$products
			]);
		}
		public function add(){
			$cates=Category::all();
			return view('admin.product.add',[
				'cates'=>$cates
			]);
		}
		public function create(Request $req){
			$this->validate($req,[
				'name'=>'required|unique:products,name',
				'slug'=>'required|unique:products,slug',
				'price'=>'required',
				'cat_id'=>'required'
			],[
				'name.required'=>'Tên không được để trống',
				'slug.required'=>'Đường dẫn không được để trống',
				'price.required'=>'Giá dẫn không được để trống',
				'cat_id.required'=>'Hãy chọn danh mục',
				'name.unique'=>'Tên đã tồn tại',
				'slug.unique'=>'Đường dẫn đã tồn tại',
			]);

			$img='';
			if($req->hasFile('file_upload')){
				$file=$req->file_upload;
				$file->move(base_path('uploads/product'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();
			}
			$req->merge(['image'=>$img]);
			// dd($req->all());
			Product::create($req->all());
			return redirect()->route('listPros')->with('success','Thêm sản phẩm thành công');
		}
	}
 ?>