<?php

class base {
    public final function __constructor() {
        echo "base __constructor()";
    }
}

class derived extends base {
    // переопределяется final method
    // наследование не возможно
    //Cannot override final method base::__constructor()
    /*public function __constructor() {
        echo "derived __constructor()";
    }*/
}

class derived2 extends base {
    //final method не переопределён
    //поэтому наследование возможно
}


$obj_b = new base;
$obj_d = new derived;
$obj_2 = new derived2;

?>