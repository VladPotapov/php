<?php

require_once('a.php');

$z = file_get_contents('store');
$b = unserialize($z);
$b->show_one();

?>