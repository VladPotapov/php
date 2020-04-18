<?php

class Employee {
    public function __construct($surname, $name, $patronymic, $age = 18) {
        $this->surname = $surname;
        $this->name = $name;
        $this->patronymic = $patronymic;
        $this->age = $age;
    }

    public function __toString() {
        /*при попытке выделить отдельный сисвол 
        $this->name[0] вместо символа появляется знак вопроса
        возникает при любой раскладке языка*/
        return "{$this->surname} {$this->name} {$this->patronymic}";
    }

    public function __get($index) {
        return $this->$index;
    }

    public $surname;
    public $name;
    private $patronymic;
}

?>