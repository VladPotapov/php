<?php

class Employee {
    public function __construct($surname, $name, $patronymic, $age = 18) {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->age = $age;
    }

    public function __toString() {
        return "{$this->surname} {$this->name} {$this->patronymic[0]}.";
    }

    public function __get($index) {
        return $this->$index;
    }

    public $surname;
    public $name;
    private $patronymic;
}

?>