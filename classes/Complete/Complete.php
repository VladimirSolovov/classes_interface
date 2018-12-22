<?php
class Complete extends Product
{
	public $resultate;
	public function getResultate(){
		$this->resultate = $resultate;
		echo 'Заказ оформлен';
	}
}
?>