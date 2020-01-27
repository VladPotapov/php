<?php

require_once("point.php");


$x = 3;
$y = 5;

$obj = new Point(10, 25);

echo $obj->get_x()." : ".$obj->get_y()."<br>";

/*если не указать значения х, у в констукторе по умолчанию
рнр выдаст ошибку*/
$obj1 = new Point();

echo $obj1->get_x()." : ".$obj1->get_y()."<br>";

/*error потому что переменные приватные
$obj2 = new Point();
$obj2->X = 15;
$obj2->Y = 3;
*/

/*error
$obj2 = new Point();
$obj2->get_x() = 15;
$obj2->get_y() = 3;

echo $obj2->get_x()." : ".$oj2->get_y()."<br>";
*/

?>