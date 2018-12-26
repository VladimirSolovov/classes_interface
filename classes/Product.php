<?php
namespace classes;
use classes\SuperProduct;
class Product extends SuperProduct
{
	protected $discount = 25;
	protected $delivery = 250;
	protected $delivery_not_discount = 300;
	public function getDiscount(){
		return $this->discount;
	}
  public function getDiscountPrice(){
    if($this->discount){
      return $this->price - ($this->price * 0.25);
    } else {
      return $this->price;
    }
  }
  public function getDeliveryPrice(){
    if($this->discount){
      return $this->delivery_not_discount;
    }else{
      return $this->delivery;  
    }
  }
	public function getTotalPrice(){
		return $this->getDiscountPrice() + $this->getDeliveryPrice();
	}
}
?>