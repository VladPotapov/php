<?php
//update file store
require_once("a.php");

$s = serialize($a);

// save
file_put_contents('store', $s);

?>