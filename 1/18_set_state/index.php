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
echo "<br>";
echo "print_r <br>";
print_r($var);
echo "<br>";
print_r($arr);
echo "<br>";
print_r($obj);
echo "<br>";
echo "var_dump <br>";
var_dump($var);
echo "<br>";
var_dump($arr);
echo "<br>";
var_dump($obj);
echo "</pre>";

//создание копии масива
//перевод массива в строку
$str = var_export($arr, true);
echo $arr;
echo "<br>";
echo $str;

?>