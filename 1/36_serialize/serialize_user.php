<?php

require_once("user.php");

$obj = new user("Nick", "1234");

echo "<pre>";
print_r($obj);
echo "</pre>";

$object = serialize($obj);

echo $object;

?>