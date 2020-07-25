<?php

class Fruit {
    private $color;

    public function eat() {
        //жевать
    }

    public function setColor($c) {
        $this->color = $c;
    }
}

class Apple extends Fruit {
    public function eat() {
        //жевать до сердцевины
    }
}

class Orange extends Fruit {
    public function eat() {
        //снять кожуру
        //жевать
    }
}

//Теперь я даю тебе яблоко, и ты ешь его.
$apple = new Apple();
$apple->eat();

//А теперь я дам тебе фрукт.
$fruit = new Fruit();
$fruit->eat();

/**
 * Каков он на вкус??? Ну, это не имеет особого смысла, 
 * так что вы не должны быть в состоянии сделать это. 
 * Это достигается путем создания абстрактного класса фруктов, 
 * а также метода eat внутри него.
 */

?>