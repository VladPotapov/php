<?php

class Person {
    public $name = "Roman";
    protected $age = 36;
    private $phone = 902760;

    public function talk() {
        //...
    }

    protected function walk() {
        //...
    }

    private function swim() {
        //...
    }
}

class Tom extends Person {
    //..
}

?>