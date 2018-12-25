<?php
session_start();
require_once 'autoloader.php';
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
        <?php
        $prod[] = new classes\Tech\Tech('Холодильник Bosch', 29000, 'T1000', 35);
        $prod[] = new classes\Tech\Tech('Пылесос Lg', 6000, 'X1', 5);
        $prod[] = new classes\Food\Food('Яблоки', 20, 'Россия', 16);
        $prod[] = new classes\Food\Food('Сыр', 200, 'Венгрия', 2);
        $prod[] = new classes\Weels\Weels('Кама 204', 2500, '175/80 R15');
        $prod[] = new classes\Weels\Weels('Bridgestone all season', 4000, '180/90/R16');
        foreach ($prod as $k => $val) { 
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
