<?php

require_once("min_max2.php");

$obj = new minMax();

echo $obj->min(31, 19, 3);
echo "<br>";
echo $obj->max(40, 9, 20);
echo "<br>";

?>