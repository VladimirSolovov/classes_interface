<?php
namespace classes\Weels;
use Product;
class Weels extends Product
{
	private $size;
	public function __construct($title,$price,$size)
	{
		$this->title = $title;
		$this->price = $price;
		$this->size = $size;
	}
		public function getDiscount(){
		return $this->discount;
	}

	public function getNameProduct(){
		return $this->title;
	}
	
	public function getInfoProduct()
	{
		$info = '<strong>' . $this->title . '</strong>
		<small><p>Размер:' . $this->size . '</p></small>';
		return $info;
	}
	
	public function getDiscountPrice(){
		return $this->price;
	}

	public function getDeliveryPrice(){
		return $this->price;
	}

	public function getTotalPrice(){
		return $this->getDeliveryPrice() + $this->getDiscountPrice();
	}
}
?>