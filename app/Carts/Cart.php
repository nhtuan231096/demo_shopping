<?php 
	namespace App\Carts;

	/**
	 * 
	 */
	class Cart
	{
		public $total_qty=0;
		public $total_amount=0;
		public $items=[];
		function __construct()
		{
			$this->items = session('cart') ? session('cart') : [];
		}
		public function add($model){
			$this->items[$model->id]=[
				'id'=>$model->id,
				'name'=>$model->name,
				'price'=>$model->sale_price > 0 ? $model->sale_price : $model->price,
				'qty'=>1,
				'image'=>$model->image
			];
			session(['cart' => $this->items]);
			
		}
		public function delete($id){
			if (isset($this->items[$id])) {
				unset($this->items[$id]);
			}
			session(['cart'=>$this->items]);
		}
};
?>