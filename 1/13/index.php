<?php

require_once("cls.php");
require_once("cls2.php");

$cls = new Cls();
$cls->name = "Hello world <br>";
//изменит значение
$cls->name = "Roman <br>";
/*error
$cls->name += "Hello world";
*/

echo $cls->name;
echo "<pre>";
print_r($cls);
echo "</pre>";
echo "<br>";

$cls2 = new Cls2();
$cls2->name = "Romanich ";
$cls2->name = "super";

echo $cls2->name;


?>