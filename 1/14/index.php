<?php

require_once("cls.php");

$obj = new Cls();
//$obj->num = 10;

//ничего не покажет
echo $obj->__isset($obj->num);


if($obj->__isset($obj->num) == True)
{
    echo "true";
}
else {
    echo "false";
}

?>