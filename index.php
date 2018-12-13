<?php
abstract class SuperProduct
{
	protected $title;
	protected $price;
	public function getPrice(){
		return $this->price;
	}
	public function getTitle(){
		return $this->title;
	}
	abstract public function getDiscountPrice();
	abstract public function getDeliveryPrice();
	abstract public function getTotalPrice();
}
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
require_once ('classes/food.php');
require_once ('classes/weels.php');
require_once ('classes/tech.php');
?>