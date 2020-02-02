<?php

require_once("db.php");

$query = "SELECT * FROM `employee`";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

require_once("employee.php");
$emp = new Employee();
$emp->name = $row["name"];

echo "I is ".$emp->name;

?>