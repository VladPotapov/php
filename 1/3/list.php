<?php
    //version 1.4
    //попробовать удалить глобальную переменную в функции
    class Emp{}
    $obj = new Emp();

    $obj = 3;
    $num = 5;
    //сохраняет значение а не ссылку на переменную
    $copy = $obj;
    echo "<p>$obj</p>";

    //уничтожение объекта
    unset($obj);

    echo $num;
    echo $copy;
?>