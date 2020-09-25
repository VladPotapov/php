<?php

class counter {
    public static $count = 0;

    public function __construct() {
        counter::$count++;
    }

    public function __destruct() {
        counter::$count--;
    }

    public function __clone() {
        counter::$count++;
        echo "$count";
    }
}

$obj = new counter;

?>