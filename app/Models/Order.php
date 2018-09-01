<?php 
	namespace App\Models;
	use Illuminate\Database\Eloquent\Model;

	/**
	 * 
	 */
	class Order extends Model
	{
		protected $table='orders';
		protected $fillable=[
			'cus_id','payment_method','shipping_method','phone','address','note','status'
		];

	}
 ?>