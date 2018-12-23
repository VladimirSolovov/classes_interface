<?php
session_start();
require_once 'autoloader.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Корзина</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
</head> 
	<body>
	<form  action="order.php" method="get">
		 <table class="table table-sm" table-inverse">
		 <?if(empty($_POST['val'])){
		echo "<h2>Корзина пуста!</h2>"
		?></br><a href="../../index.php">Вернуться к списку товаров</a><?
		die();
	}
?>
		 	<h2>Ваш заказ:</h2>
	<table class="table table-sm" table-inverse">
        <thead>
            <tr>
            <th>#</th>
            <th>Наименование</th>
            <th>Стоимость доставки</th>
            <th>Стоимость</th>
            </tr>
        </thead>	
<? 
	 foreach ($_POST['val'] as $k => $key) {
		$product = unserialize($_SESSION['listproduct'][$key]); ?>
		<tr>
		<td><?= $k ?></td>
		<td><?= $product->getNameProduct(); ?></td>
		<td><?= $product->getDeliveryPrice(); ?></td>
		<td><?= $product->getTotalPrice();?></td>
		<td><input type="checkbox" name="delete[]" value="<?= $k ?>"></td>	
		</tr>	
	<? $a += $product->getTotalPrice();  }
	$totalprice = $a?>
		</table>
	<? echo 'Итого товаров на сумму: ' . $totalprice ?><br>
	<input type="submit" class="btn btn-primary" value="Удалить отмеченное">
	<input type="hidden" name=price value= <?=$totalprice; ?>>
	<a href="order.php"><button type="submit"  class="btn btn-primary">Оформить заказ</button></a>
	</form>
</body>
</html>

