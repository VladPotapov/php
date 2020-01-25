<?php
//vesion 2.0 (listing 1.12)
class Cls {
    private $v;

    public function __construct() {
        echo "вызов construct <br>";
        $this->v = 100;
    }

    //лишний вызов
    public function anarhist() {
        $this->__construct();
    }
}

?>