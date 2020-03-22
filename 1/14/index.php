<?php

require_once('cls.php');

//работа с переменными
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
?>