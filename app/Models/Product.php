<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * 
	 */
	class Product extends Model
	{
		protected $table='products';
		protected $fillable=[
			'name','slug','image','status','price','sale_price','content','cat_id'
		];

		public function category(){
			return $this->hasOne('App\Models\Category','id','cat_id');
		}

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