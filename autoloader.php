<?php
function autoload($class)
{
    $classArr = explode('\\', $class);
    $filePath = __DIR__ . '/' . implode(DIRECTORY_SEPARATOR, $classArr) . '.php';
    if (file_exists($filePath)) {
    	require_once $filePath;
    } else{
    	die('Класс ' . $class. ' не найден.');
    }
}
spl_autoload_register('autoload');
?>