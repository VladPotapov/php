<?php

class Base5 {
    private $a = "private";
    protected $b = "protected";
    public $c = "public";
    static $d = "static";

    public function __construct() {
        $this->e = 'constructed';
    }

    public function __set($property, $value) {
        echo ' set '.$property.' = '.$value;
        $this->$property=$value;
    }

    public function __get($property) {
        echo ' get '.$property.'<br>';
        $this->$property = 'dynamic <br>';
        return $this->$property;
    }
}

class Heir_b5 extends Base5 {
    public function constructMe() {
        $this->e = 'Constructed2';
    }
}

class Heir_c5 extends Heir_b5 {
    public function __construct() {
        parent::ConstructMe();
    }
}

?>