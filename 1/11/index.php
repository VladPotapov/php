<?php

require_once("cls.php");

$obj = new Cls();
$obj-> x = 2;
$obj-> y = 5;

echo $obj->print_msg();
echo "переменные ".$obj->x." and ".$obj->y."<br>";
echo "простой текст <br>";

?>