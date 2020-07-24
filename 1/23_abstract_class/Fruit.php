<?php

class Fruit {
    private $color;

    public function eat() {
        //chew
    }

    public function setColor($c) {
        $this->color = $c;
    }
}

class Apple extends Fruit {
    public function eat() {
        //chew until core
    }
}

?>