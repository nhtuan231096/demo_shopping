<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * 
	 */
	class Slide extends Model
	{
		protected $table='slides';
		protected $fillable=[
			'name','links','status','image','caption_1','caption_2','status'
		];

		public function scopesearch($query){
			if(empty(request()->search)){
				return $query;
			}
			else{
				return $query->where('name','like','%'.request()->search.'%');
			}
		}
	}
 ?>