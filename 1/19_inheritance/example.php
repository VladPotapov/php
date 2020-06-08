<?php

class A {
    public $a = 'public';
    static $b = 'static';
    protected $c = 'protected';
    private $d = 'private';

    public function __construct() {
        /*выведит при объявлении класса
        set e = constructed*/
        $this->e = "constructed <br>";
    }

    public function __set($property, $value) {
        //подключает construct
        //$property = e
        //$value = constructed
        echo ' set '.$property.' = '.$value;

        //get (b, c, d)
        $this->$property = $value;
    }

    public function __get($property) {
        echo ' get '.$property.'<br>';
        //дабовляет dynamic к каждой переменной
        $this->$property = 'dynamic <br>';
        return $this->$property;
    }
}

class B extends A {
    public function constructMe() {
        $this->e = 'constructed2 <br>';
    }
}

class C extends B {
    public function __construct() {
        parent::constructMe();
    }
}

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