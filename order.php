<?php
require_once 'autoloader.php';
$order[] = new Order($data);
$order->getStatus();
echo "Сумма заказа: " . $_GET['price'];
?>
</br><a href="../../index.php">Вернуться к списку товаров</a>