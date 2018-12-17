<?php
class Tech extends SuperProduct
{
	private $model;
	private $weight;

	public function __construct($title,$price,$model,$weight)
	{
		$this->title = $title;
		$this->price = $price;
		$this->model = $model;
		$this->weight = $weight;
	}

	public function getInfoProduct()
	{
		$info = '<strong>' . $this->title . '</strong>
		<small><p>Модель:' . $this->model . '</p></small>'.
		'<br><small><p>Вес:' . $this->weight . '</p></small>
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