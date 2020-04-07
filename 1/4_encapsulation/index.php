<?php

require_once("employee.php");

$emp = new Employee();

$emp->surname = "Borisov";
$emp->name = "Igor";
$emp->patronymic = "Ivanovich";
//$emp->age = 30;   Error

echo "<p>Family: ".$emp->surname."<br> Name: ".$emp->name."<br> Otchestvo: ".$emp->patronymic."</p>";

?>