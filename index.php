<?php
require_once 'classes/autoloader.php';
require_once 'classes/list.php';
foreach ($prod as $k => $val) {
    echo "<br>" . $val->getInfoProduct();
    	"<br>" . $val->getPrice();
    	"<br>" . $val->getDiscountPrice();
    	"<br>" . $val->getDeliveryPrice();
    	"<br>" . $val->getTotalPrice();
    echo '<td><input type="checkbox" name="cart[]" value=' . $k . '></td></tr>';
}
?>