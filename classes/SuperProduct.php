<?php
namespace classes;
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
?>