<?php

require_once("min_max.php");

$obj = new minMax();

echo $obj->min(31, 19, 3, 65, 7, 20);
echo "<br>";
echo $obj->max(40, 9, 20, 18, 100, 50, 30);
echo "<br>";
echo $obj->min();
echo "<br>";
echo $obj->max();

?>