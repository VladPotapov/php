<?php

class Cls {
    public $x;
    public $y;

    public function __construct() {
        echo "вызов конструктора <br>";
    }

    public function print_msg() {
        echo "вызов метода <br>";
    }

    public function __destruct() {
        echo "вызов destructora <br>";
        unset($x);
        unset($y);
    }
}

?>