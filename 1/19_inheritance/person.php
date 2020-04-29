<?php

class Person {
    public $name = "Roman";
    protected $age;
    private $phone;

    public function __construct($phone) {
        $this->phone = $phone;
    }

    public function talk() {
        echo $this->phone;
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