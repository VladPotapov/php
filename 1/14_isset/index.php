<?php

require_once('cls.php');
require_once('propertytest.php');

//работа с переменными
//место перегружаеммых данных
if (isset($obj)) {
    echo "yes obj = 3";
}
else {
    echo "none obj = 3";
}

echo "<br>";

if(isset($obj_now)) {
    echo "yes obj_now;";
}
else {
    echo "none obj_now;";
}

echo "<br>";

if (isset($str)) {
    echo "yes str = ''";
}
else {
    echo "none str = ''";
}

echo "<br>";

var_dump(isset($obj));  //true
echo "<br>";
var_dump(isset($obj_now));  //false
echo "<br>";
var_dump(isset($obj, $obj_now));   //false, false 

unset($str);

var_dump(isset($obj_now, $str));

echo "<br>";

//работа с масивами
//проверка значений
var_dump(isset($a['test']));
echo "<br>";
var_dump(isset($a['hello']));
echo "<br>";
var_dump(isset($a['fool']));
echo "<br>";

//проверка ключей
var_dump(array_key_exists('hello', $a));
echo "<br>";

//проверка вложенных элементов массива
var_dump(isset($a['pie']['a']));
echo "<br>";
var_dump(isset($a['pie']['b']));
echo "<br>";
var_dump(isset($a['pie']['a']['b']));
echo "<br>";

//строковые массивы
echo $exp_arr;
echo "<br>";
var_dump(isset($exp_arr['some_key']));
echo "<br>";
var_dump(isset($exp_arr[0]));
echo "<br>";
var_dump(isset($exp_arr['0']));
echo "<br>";
var_dump(isset($exp_arr[0.5]));
echo "<br>";
var_dump(isset($exp_arr['0.5']));
echo "<br>";
var_dump(isset($exp_arr['0 Mostel']));
echo "<br>";
var_dump(isset($exp_arr[15]));
echo "<br>";

$pro = new PropertyTest();
$pro->a = 1;
echo "<br>";
echo $pro->a."<br>";

var_dump(isset($pro->a));
echo "<br>";
unset($pro->a);
var_dump(isset($pro->a));
echo "<br>";

echo $pro->declared."<br>";

echo "Эксперемент с закрытым свойством hidden <br>";
echo "Закрытые свойства видны внутри класса <br>";
echo "Поэтому __get() не используется <br>";

echo $pro->getHidden()."<br>";

echo "Закрытые свойства не видны вне класса, поэтому используется __get()<br>";
echo $pro->hidden."<br>";


?>