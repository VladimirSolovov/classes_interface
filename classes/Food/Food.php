<?php
class Food extends SuperProduct
{
	protected $countryFrom;
	private $weight;

	public function __construct($title,$price,$countryFrom,$weight)
	{
		$this->title = $title;
		$this->price = $price;
		$this->countryFrom = $countryFrom;
		$this->weight = $weight;
	}

	public function getInfoProduct()
	{
		$info = '<strong>' . $this->title . '</strong>
		<small><p>Страна происхождения:' . $this->countryFrom . '</p></small>' .
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