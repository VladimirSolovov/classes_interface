<?php
class Food extends Product
{
	protected $countryFrom;
	private $weight;

	public function __construct($title,$price,$countryFrom,$weight)
	{
		$this->title = $title;
		$this->price = $price;
		$this->countryFrom = $countryFrom;
		$this->weight = $weight;
		$this->setDiscount();
	}

	public function getNameProduct(){
		return $this->title;
	}

	public function getInfoProduct()
	{
		$info = '<strong>' . $this->title . '</strong>
		<small><p>Страна происхождения:' . $this->countryFrom . '</p></small>' .
		'<small><p>Вес:' . $this->weight . ' кг. (цена указана за кг.)</p></small>';
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
    	return parent::getDiscountPrice() * $this->weight;
    } 
    else return $this->price * $this->weight;
    }
	public function getTotalPrice()
	{
		return $this->getDeliveryPrice() + $this->getDiscountPrice();
	}
}
?>