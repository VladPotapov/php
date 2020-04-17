<?php

require_once("employee.php");

$str = "1234";
$str2 = '1234';
$num = 1234;

echo "str = $str<br>";
echo 'str = $str<br>';
echo "str2 = $str<br>";
echo 'str2 = $str2<br>';
echo "num = $str<br>";
echo 'num = $num<br>';

$obj = new Employee("Борисов", "Игорь", "Иванович");

echo "Сотрудник $obj недавно принят на работу";

?>