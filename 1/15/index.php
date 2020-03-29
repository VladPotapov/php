<?php

require_once("cls.php");

$obj = new Cls();
$obj->name = "Новое свойство класса";

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

unset($obj->name);

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

$obj->destroy_foo();

$foo = 'bar';
$doo = 'sidebar';

echo $foo;
echo "<br>";
echo $doo;

?>