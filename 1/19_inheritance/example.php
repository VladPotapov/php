<?php

class A {
    public $a = 'public';
    static $b = 'static';
    protected $c = 'protected';
    private $d = 'private';
}

class B extends A {}

class C extends B {}

$obj_a = new A();
echo $obj_a->a."<br>";
/* по умолчанию без методов недостыпны
echo $obj_a->b."<br>";
echo $obj_a->c."<br>";
echo $obj_a->d."<br>";*/

$obj_b = new B();
$obj_c = new C();

?>