<?php
class Product extends SuperProduct
{
	protected $discount = 25;
	protected $delivery = 250;
	public function getDiscount(){
		return $this->discount;
	}
	public function getDiscountPrice(){
		return $this->price - ($this->price * 0.25);
	}else{
		return $this->price;
	}
	public function getDeliveryPrice(){
		if($this->discount){
			$this->delivery = 300;
		}else{
			return $this->delivery;
		}
	}
	public function getTotalPrice(){
		return $this->getDiscountPrice() + $this->getDeliveryPrice();
	}
}
?>