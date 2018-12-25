<?php
session_start();
require_once 'autoloader.php';
require_once 'list.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Список товаров</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.min.css" >
</head> 
	<body>
	<form  action="Basket.php" method="post">
    <table class="table table-sm" table-inverse">
        <thead>
            <tr>
            <th>Наименование</th>
            <th>Цена</th>
            <th>Размер скидки в %</th>
            <th>Цена со скидкой</th>
            <th>Доставка</th>
            <th>Общая сумма</th>
            </tr>
        </thead>	
        <? foreach ($prod as $k => $val) { 
            $_SESSION['listproduct'][$k] = serialize($val);
            ?>
            <tr>
                <td><?= $val->getInfoProduct() ?></td>
                <td><?= $val->getPrice() ?></td>
                <td><?= $val->getDiscount() ?></td>
                <td><?= $val->getDiscountPrice() ?></td>
                <td><?= $val->getDeliveryPrice() ?></td>
                <td><?= $val->getTotalPrice() ?></td>
                <td>
                    <input type="checkbox" name="val[]" value="<?= $k ?>">
                </td>
            </tr>
        <? } ?>
	</table>
	</br>
	<input type="submit" name="submit" value="Перейти в корзину">
    <input type="reset" name="reset" value="Очистить форму">
    </form>
	</body>
</html>
