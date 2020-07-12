<?php

class base {
    public function print_var() {
        echo "вызов метода print_var базового класса <br>";
    }
}

class derived extends base {
    public function print_var() {
        //вызов базового класса
        parent::print_var();
        echo "вызов метода print_var производного класса <br>";
    }
}

$obj = new derived();
$obj->print_var();

?>