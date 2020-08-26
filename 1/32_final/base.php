<?php

class base {
    public function final_method() {
        echo "base::final_method() <br>";
    }
}

class derived extends base {
    public function final_method() {
        echo "derived::final_method() <br>";
    }
}

$obj_b = new base;
$obj_d = new derived;

$obj_b->final_method();
$obj_d->final_method();
?>