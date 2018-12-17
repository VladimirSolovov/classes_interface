<?php
class Product extends SuperProduct
{
	protected $discount = 25;
	protected $delivery = 250;
	public function getDiscount(){
		return $this->discount;
	}
	public function getDiscountPrice(){
		return $this->price - $this->price * 0.25;
	}
	public function getDeliveryPrice(){
		if($this->discount){
			return $this->delivery = 300;
		}else{
			return $this->delivery;
		}
	}
	public function getTotalPrice(){
		return $this->price + $this->delivery;
	}
}
?>