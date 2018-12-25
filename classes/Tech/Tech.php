<?php
namespace classes\Tech;
use Product;
class Tech extends Product
{
	private $model;
	private $weight;

	public function __construct($title,$price,$model,$weight)
	{
		$this->title = $title;
		$this->price = $price;
		$this->model = $model;
		$this->weight = $weight;
		$this->setDiscount();
	}

	public function getNameProduct(){
		return $this->title;
	}
	
	public function getInfoProduct()
	{
		$info = '<strong>' . $this->title . '</strong>
		<small><p>Модель:' . $this->model . '</p></small>'.
		'<small><p>Вес брутто:' . $this->weight . ' кг.</p></small>
		<small><p>Цена:' . $this->price . '</p></small>';
		return $info;
	}
	public function setDiscount()
    { 
    if ($this->weight <= 10) 
      return $this->discount = 0;
    }
    public function getDiscountPrice() 
    { 
    if ($this->weight > 10)
    {
    	return parent::getDiscountPrice();
    } 
    else return $this->price;
    }
	public function getTotalPrice(){
		return $this->getDeliveryPrice() + $this->getDiscountPrice();
	}
}
?>