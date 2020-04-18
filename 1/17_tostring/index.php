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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?php echo "Сотрудник $obj недавно принят на работу"; ?></p>
</body>
</html>