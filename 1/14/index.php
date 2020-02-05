<?php

require_once("cls.php");

$obj = new Cls();
$obj->num = 10;

//ничего не покажет
//$bool = $obj->__isset($obj->num);

var_dump($obj->num);
echo "<br>";

if(isset($obj->num))
{
    echo "yes";
}
else {
    echo "none";
}

echo "<br>";
if($obj->__isset($obj->num)) {
    echo "__isset yes";
}
else {
    echo "__isset none";
}


?>