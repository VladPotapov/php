<?php

final class Foo {
    public function doFoo() {
        // сделайте что-нибудь полезное и верните результат
        echo "doFoo";
    }
}

final class FooDecorator {
    private $foo;

    public function __construct(Foo $foo) {
        $this->foo = $foo;
    }

    public function doFoo() {
        $result = $this->foo->doFoo();

        //настройте результат 
        return $result;
    }
}

$str = "stroka";
$obj_f = new Foo;
/*Fatal error: Uncaught ArgumentCountError: 
Too few arguments to function FooDecorator::__construct(), 0 passed
$obj = new FooDecorator();*/

$obj = new FooDecorator($obj_f, $str);

?>