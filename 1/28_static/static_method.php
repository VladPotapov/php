<?php

class Cls {
    public static function static_method() {
        echo "вызов статического метода <br>";
    }
}

class Foo {
    public static function StaticMethod() {
        echo "Static method <br>";
    }
}

$obj = new Cls;

Cls::static_method();
$obj::static_method();

$clsName = 'Foo';

echo "$clsName <br>";

$clsName::StaticMethod();

?>