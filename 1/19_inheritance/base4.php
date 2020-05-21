<?php

class A {
    public $name = "Roman";
    protected $age = 37;
}

class B extends A {
    /*доступ к приватным и наследуемым переменным
    осуществляется через открытый метод*/
    public function get_age() {
        return $this->age;
    }
}

class C extends B {
    //..
}

?>