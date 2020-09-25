<?php

require_once("user.php");

$object = 'O:4:"user":4:{s:4:"name";s:4:"nick";'.
    's:8:"password";s:8:"password";'.
    's:8:"referrer";s:40:"http://localhost/php/1/36_serialize/connection.php'.
    's:4:"time";i:1177676349;}';

$obj = unserialize($object);

echo "<pre>";
print_r($obj);
echo "</pre>";

?>