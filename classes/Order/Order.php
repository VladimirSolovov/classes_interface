<?php
class Order
{
	public $data;
	public function getStatus(){
	return $this->data = date('F j, Y, G:i H');
	}
}
?>