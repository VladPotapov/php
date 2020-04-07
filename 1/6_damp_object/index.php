<?php
require_once("../5/employee.php");
?>
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
    $emp = new Employee();
    $emp->surname = "Borisov";
    $emp->name = "Stas";
    $emp->patronymic = "Ivanovich";
    $emp->set_age(40);

    echo "<pre>";
    print_r($emp);
    echo "</pre>";
    ?>
</body>
</html>