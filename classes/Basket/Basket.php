<?php
session_start();
require_once '../autoloader.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Корзина</title>
<meta charset="utf-8">
<link rel="stylesheet" href="../../css/bootstrap.min.css" >
</head> 
	<body>
	<form  action="Basket.php" method="post">
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
            <th>Общая сумма</th>
            </tr>
        </thead>	
<? 
	 foreach ($_POST['val'] as $k => $key) {
		$product = unserialize($_SESSION['list_product'][$key]); ?>
		<tr>
		<td><?= $k ?></td>
		<td><?= $product->getNameProduct(); ?></td>
		<td><?= $product->getDeliveryPrice(); ?></td>
		<td><?= $product->getTotalPrice();?></td>
		<td><input type="checkbox" name="delete[]" value="<?= $k ?>"></td>	
		</tr>	
	<? } ?>
	<input type="submit" value="Delete selected">
	<button type="button" class="btn btn-primary">Оформить заказ</button>
		</table>
	</form>
</body>
</html>
