<?php 
	namespace App\Http\Controllers\Admin;
	use App\Http\Controllers\Controller;
	use App\Models\Slide;
	use Illuminate\Http\Request;
	/**
	 * 
	 */
	class SliderController extends Controller
	{
		
		function index()
		{
			$slides=Slide::all();
			return view('admin.slider.index',[
				'slides'=>$slides
			]);
		}
		public function add(){
			return view('admin.slider.add');
		}
		public function create(Request $req){
			$this->validate($req,[
				'name'=>'required',
				'file_upload'=>'required',
				'links'=>'required'
			],[
				'name.required'=>'Tên không được để trống',
				'file_upload.required'=>'Ảnh không được để trống',
				'links.required'=>'Liên kết không được để trống'
			]);
			$img='';
			if($req->hasFile('file_upload')){
				$file=$req->file_upload;
				$file->move(base_path('uploads/slide'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();
			}
			$req->merge(['image'=>$img]);
			Slide::create($req->all());
			// dd($req->all());
			return redirect()->route('slider')->with('success','Thêm mới slide thành công');
		}

		public function edit($id){
			$slide=Slide::find($id);
			return view('admin.slider.edit',[
				'slide'=>$slide
			]);
		}
		public function postedit($id,Request $req){
			$this->validate($req,[
				'name'=>'required',
				'links'=>'required'
			],[
				'name.required'=>'Tên không được để trống',
				'links.required'=>'Liên kết không được để trống'
			]);
			$slide=Slide::find($id);
			$img=$slide->image;
			if ($req->hasFile('file_upload')) {
				$file=$req->file_upload;
				$file->move(base_path('uploads/slide'),$file->getClientOriginalName());
				$img=$file->getClientOriginalName();
			}
			$req->merge(['image'=>$img]);
			$slide->update($req->all());
			return redirect()->route('slider')->with('success','Cập nhật thành công');
		}
		public function delete($id){
			Slide::find($id)->delete();
			return redirect()->back()->with('success','Đã xóa');
		}
	}
 ?>