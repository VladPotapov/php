<?php

//счётчик объектов
class Counter {
    public static $count = 0;

    public function __construct() {
        Counter::$count++;
    }

    public function __destruct() {
        Counter::$count--;
    }
}

$chet = new Counter;

echo Counter::$count."<br>";    //1

for($i = 0; $i < 3; $i++) {
    $arr[] = new Counter;
    echo Counter::$count."<br>";    //2, 3, 4
}

//Уничтожаем массив объектов
unset($arr);

echo Counter::$count."<br>";    //1

?>