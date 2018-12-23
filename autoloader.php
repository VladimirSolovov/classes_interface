<?php
function __autoload($classname) {
    $filename = $_SERVER['DOCUMENT_ROOT'].'/classes/' . $classname .'/'. $classname . '.php';
    if (file_exists($filename)) {
    	include_once($filename);
    }else{
    	die('Класс ' . $classname. ' не найден.');
    }
}

?>