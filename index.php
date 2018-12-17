<?php
require_once 'classes/autoloader.php';
$obj2 = new $class($title,$price,$countryFrom,$weight); 
echo $obj2->getInfoProduct();
echo $obj2->getPrice();

?>