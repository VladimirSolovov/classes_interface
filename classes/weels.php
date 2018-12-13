<?php
class Weels extends Product
{
	private $size;
	public function __construct($title,$price,$size);
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
}
?>