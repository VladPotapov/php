<?php

require_once("cls.php");

$obj = new Cls();

/* как не надо делать
$obj->__construct();
$obj->anarhist();
*/

echo "<pre>";
print_r($obj);
echo "</pre>";

?>