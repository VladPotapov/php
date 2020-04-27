<?php

class Base {
    public $var;
    public function print_var() {
        echo $this->var;
    }
}

class Derived extends base {
    public $val;
    public function print_val() {
        echo $this->val;
    }
}

?>