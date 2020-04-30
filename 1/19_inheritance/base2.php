<?php

class Base2 {
    protected $var;
    
    public function __construct($var) {
        $this->var = $var;
    }
}

class Derived2 extends Base2 {
    //...
}

?>