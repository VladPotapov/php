<?php

require_once("cls.php");

$obj = new Cls();
$obj->name = "Новое свойство класса";

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

unset($obj->name);  //delete name

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

$foo = 'bar';

echo $foo;
echo "<br>";

$obj->destroy_foo();

echo $foo;
echo "<br>";

$obj->foo = 'bar 2';

echo $obj->foo;
echo "<br>";

$obj->destroy_foo();

echo $obj->foo;
echo "<br>";

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

$doo = 'super star';
echo $doo;
echo "<br>";

$obj->destroy_doo();

//echo $doo;  Notice: Undefined variable: doo if (name file)
echo "<br>";

echo "<pre>";
print_r($obj);
echo "</pre>";
echo "<br>";

?>