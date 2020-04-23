<?php

require_once("cls.php");
require_once("cls2.php");

$var  = 100;
$arr = array(1, 3, array(4, 5, 6), 7, 8);

$obj = new  Cls(12, 174);


echo "var_export <br>";
echo "<pre>";
var_export($var);
echo "<br>";
var_export($arr);
echo "<br>";
var_export($obj);
echo "<br>";
echo "print_r <br>";
print_r($var);
echo "<br>";
print_r($arr);
echo "<br>";
print_r($obj);
echo "<br>";
echo "var_dump <br>";
var_dump($var);
echo "<br>";
var_dump($arr);
echo "<br>";
var_dump($obj);
echo "</pre>";

$str = var_export($arr, true);
//удаление последней запятой
$str = preg_replace("|,[\s]*\) |is", ")", $str);
//создание копии масива
eval('$copy = '. $str .';');

echo "<pre>";
print_r($copy);
echo "</pre>";
echo "<br>";

//работа с классом cls2
//вызов метода __set_state()
$obj2 = new Cls2(20, 50);
$str2 = var_export($obj2, true);
$str2 = preg_replace("|,[\s]*\) |is", ")", $str2);
eval($str2 .';');

?>