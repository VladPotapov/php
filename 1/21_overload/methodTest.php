<?php

class MethodTest {
    public function __call($name, $arguments) {
        //Замечание: значение $name регистрозависимо.
        echo "Вызов метода '$name'".
        implode(', ', $arguments)."<br>";
    }

    /**метод __callStatic должен быть статичным */
    public static function __callStatic($name, $arguments) {
        echo "Вызов статического метода '$name' ".
        implode(', ', $arguments)."<br>";
    }
}

$obj = new MethodTest;
$obj->runTest('в контексте объекта');

MethodTest::runTest('в статическом контексте'); //начиная с php 5.3.0

?>