<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

require_once("cls_mth.php");
require_once("employee.php");

$obj = new Message();

//$obj->show_message();

$emp = new Employee();
$emp->surname = "Борисов";
$emp->name = "Иван";
$emp->patronymic = "Федорович";

if(!$emp->set_age(23)) exit("Ошибка вычисления возвраста");

echo $emp->get_full_info();

$user = new Dannie();
$user->set_phone("8(902)760 89 42");

echo $user->get_full_info();

?>
</body>
</html>