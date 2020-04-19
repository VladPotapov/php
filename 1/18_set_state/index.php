<?php

$var  = 100;
$arr = array(1, 3, array(4, 5, 6), 7, 8);

class Cls {
    public function __construct($var, $val) {
        $this->publ_var = $var;
        $this->priv_var = $val;
    }
    public $publ_var;
    private $priv_val;
}

$obj = new  Cls(12, 174);

echo "var_export <br>";
echo "<pre>";
var_export($var);
echo "<br>";
var_export($arr);
echo "<br>";
var_export($obj);
echo "<br>"
echo "</pre>";

?>