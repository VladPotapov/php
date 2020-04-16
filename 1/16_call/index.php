<?php

require_once("min_max.php");
require_once("min_max2.php");

$obj = new minMax();
$obj2 = new minMax_2();

echo $obj->min(31, 19, 3);
echo "<br>";
echo $obj->max(40, 9, 20);
echo "<br>";
//выведет результат
//вызов открытого метода min
echo $obj2->min(5, 3, 7);
echo "<br>";
//выведет результат 50
echo $obj2->max(10, 7, 50);
echo "<br>";

?>