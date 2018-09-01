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
			$this->total_qty = $this->total_qty();
			$this->total_amount = $this->total_amount();
		}
		public function add($model){
			if(isset($this->items[$model->id])){
				$this->items[$model->id]['qty']+=1;
			}
			else
			{
			$this->items[$model->id]=[
				'id'=>$model->id,
				'name'=>$model->name,
				'price'=>$model->sale_price > 0 ? $model->sale_price : $model->price,
				'qty'=>1,
				'image'=>$model->image
			];
			}
			session(['cart' => $this->items]);
				
		}
		public function delete($id){
			if(isset($this->items[$id])) {
				unset($this->items[$id]);
			}
			session(['cart'=>$this->items]);
		}
		public function update($id,$qty){
			if(isset($this->items[$id])){
				$this->items[$id]['qty']=$qty;
			}
			session(['cart'=>$this->items]);
		}
		public function clear(){
			session(['cart'=>[]]);
		}

		protected function total_qty(){
			$t=0;
			foreach($this->items as $total){
				$t=$t+$total['qty'];
			}
			return $t;
		}
		protected function total_amount(){
			$t=0;
			foreach($this->items as $total){
				$t=$t+($total['qty']*$total['price']);
			}
			return $t;
		}
};
?>