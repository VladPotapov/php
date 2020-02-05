<?php

require_once("db.php");

$query = "SELECT * FROM `employee`";
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

require_once("employee.php");
$emp = new Employee();
$emp->photo = $row["photo"];
$emp->name = $row["name"];
$emp->surname = $row["surname"];
$emp->patronymic = $row["patronymic"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <section class="anketa">
        <div class="container">
            <div class="anketa__header">
                <div class="anketa__photo">
                    <img src="<?php echo $emp->photo;?>" alt="">
                </div>
                <!-- /.anketa__photo -->
                <div class="anketa__fio">
                    <h2 class="anketa__surname">
                        <?php echo $emp->surname; ?>
                    </h2>
                    <h2 class="anketa__name">
                        <?php echo $emp->name;?>
                    </h2>
                    <h2 class="anketa__patronymic">
                        <?php echo $emp->patronymic; ?>
                    </h2>
                </div>
                <!-- /.anketa__fio -->
            </div>
            <!-- /.anketa__header -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.anketa -->
</body>
</html>