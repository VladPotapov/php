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

$c = new C();
$b = new B();

echo $c->name." B = ".$b->get_age()." C = ".$c->get_age();
/**
 * Cannot access protected property (C::$age, B::$age)
 * echo $c->age
 * echo $b->age
 */

?>