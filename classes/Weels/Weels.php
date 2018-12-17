<?php
class Weels extends SuperProduct
{
	private $size;
	public function __construct($title,$price,$size)
	{
		$this->title = $title;
		$this->price = $price;
		$this->size = $size;
	}
	public function getInfoProduct()
	{
		$info = '<strong>' . $this->title . '</strong>
		<small><p>Размер:' . $this->size . '</p></small>
		<br><small><p>Цена:' . $this->price . '</p></small>';
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