<?php

class Cls2 {
    public function __construct($var, $val) {
        $this->publ_var = $var;
        $this->priv_var = $val;
    }

    //метод __set_state() должен быть статическим 
    //иначе будет выведено предупреждение
    //Deprecated: Non-static method Cls2::__set_state() should not be called statically
    public static function __set_state($arr_obj) {
        foreach($arr_obj as $key => $value) {
            echo "$key => $value <br>";
        }
    }

    public $publ_var;
    private $priv_var;
}

?>