<?php
//восоздание объекта с помощью __set_state()
class Cls3 {
    public function __construct($var, $val) {
        $this->publ_var = $var;
        $this->priv_var = $val;
    }

    public static function __set_state($arr_obj) {
        return new Cls3($arr_obj['publ_var'], $arr_obj['priv_var']);
    }

    public $publ_var;
    private $priv_var;
}

$obj = new Cls3(12, 47);

//вызов метода  __set_state()
$str = var_export($obj, true);

eval('$new_obj = '.$str.';');

//вывод дампа нового объекта $new_obj
echo "<pre>";
print_r($new_obj);
echo "</pre>";

?>