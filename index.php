<!DOCTYPE html>
<html>
<head>
<title>Список товаров</title>
</head>
	<body>
	<table border="2">
	<th>Наименование</th>
    <th>Цена</th>
    <th>Размер скидки в %</th>
    <th>Цена со скидкой</th>
    <th>Доставка</th>
    <th>Общая сумма</th>	
<?php
require_once 'classes/autoloader.php';
require_once 'classes/list.php';
foreach ($prod as $k => $val) {
    echo "<tr>
    <td>" . $val->getInfoProduct() . "</td>
    <td>" . $val->getPrice() . "</td>
    <td>" . $val->getDiscount() . "</td>
    <td>" . $val->getDiscountPrice() . "</td>
    <td>" . $val->getDeliveryPrice() . "</td>
    <td>" . $val->getTotalPrice() . "</td>";
    echo '<td><input type="checkbox" name="cart[]" value=' . $k . '></td></tr>';
}
?>
	</table>
	</body>
</html>
