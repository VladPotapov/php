<?php

class Cls {
    public function __construct($var, $val) {
        $this->publ_var = $var;
        $this->priv_var = $val;
    }
    public $publ_var;
    private $priv_val;
}

?>