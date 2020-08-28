<?php

class cls {
    public $var;

    public function __construct() {
        $this->var = 100;
    }
}

// $obj, $new_obj сылаются на одну и ту же ссылку
$obj = new cls;
$new_obj = $obj;

// клонируется $obj
$clone_obj = clone $obj;
$new_obj->var = 200;

echo $obj->var ."<br>";
echo $clone_obj->var ."<br>";

$obj->var = 150;

echo $new_obj->var ."<br>";
?>