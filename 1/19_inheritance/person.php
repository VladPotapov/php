<?php

class Person {
    public $name = "Roman";
    //используют для производных классов
    protected $age;
    //используют для использования только в данном классе
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
    /*если создать construct 
    он создаст открытую переменную var
    public function __construct($var) {
        $this->var = $var;
    }*/
}

?>