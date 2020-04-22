<?php

class Cls2 {
    public function __construct($var, $val) {
        $this->publ_var = $var;
        $this->priv_var = $val;
    }

    public function __set_state($arr_obj) {
        foreach($arr_obj as $key => $value) {
            echo "$key => $value <br>";
        }
    }

    public $publ_var;
    private $priv_var;
}

?>