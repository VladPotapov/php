<?php

class A {
    public $a = 'public';
    static $b = 'static';
    protected $c = 'protected';
    private $d = 'private';

    public function __construct() {
        $this->e = "constructed <br>";
    }

    public function __set($property, $value) {
        //echo ' set '.$property.' = '.$value;
        $this->$property = $value;
    }

    public function __get($property) {
        echo ' get '.$property.'<br>';
        //$this->$property = "dynamic <br>";
    }
}

class B extends A {}

class C extends B {}

$obj_a = new A();
echo $obj_a->a."<br>";
/* по умолчанию без методов недостыпны
echo $obj_a->b."<br>";
echo $obj_a->c."<br>";
echo $obj_a->d."<br>";*/

echo $obj_a->b."<br>";
echo $obj_a->c."<br>";
echo $obj_a->d."<br>";

$obj_b = new B();
$obj_c = new C();

?>