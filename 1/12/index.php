<?php

//__autoload устарел
spl_autoload_register(
    function($class_name){
        require_once("$class_name.php");
    }
);

$obj1 = new Cls1();
$obj2 = new Cls2();
$obj3 = new Cls3();

$obj1->msg();
$obj2->msg();
$obj3->msg();
?>