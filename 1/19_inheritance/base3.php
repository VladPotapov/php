<?php

class Base3 {
    private $var;
    protected function __construct($var) {
        $this->var = $var;
    }
}

class Derived3 extends Base3 {
    public function __construct($var) {
        parrent::__construct($var);
    }
}

?>