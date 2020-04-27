<?php

class Foo {
    public function printItem($string) {
        echo 'Foo: '.$string.PHP_EOL;
    }

    public function printPHP() {
        echo 'PHP просто супер.'.PHP_EOL;
    }
}

class Bar extends Foo {
    public function printItem($string) {
        echo 'Bar: '.$string.PHP_EOL;
    }
}
?>