<?php

require_once("cls.php");

$obj = new Cls();
$obj->name = "Новое свойство класса";

echo "<pre>";
print_r($obj);
echo "</pre>";

?>