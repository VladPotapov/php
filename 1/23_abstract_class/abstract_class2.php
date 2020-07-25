<?php

abstract class AbstractClass {
    //Наш абстрактный метод требует только определить необходимые аргументы
    //абстрактный класс должен быть реализован в дочернем классе
    //иначе вылезит ошибка
    abstract protected function prefixName($name);
}

class ConcreteClass extends AbstractClass {
    // Наш дочерний класс может определить необязательные аргументы, не указанные в объявлении родительского метода
    public function prefixName($name, $separator = ".") {
        if ($name == "Pacman") {
            $prefix = "Mr";
        }
        elseif ($name == "Pacwoman") {
            $prefix = "Mrs";
        }
        else {
            $prefix = "";
        }

        return "{$prefix}{$separator} {$name} <br>";
    }
}

$cls = new ConcreteClass;
echo $cls->prefixName("Pacman"), "\n";
echo $cls->prefixName("Pacwoman"), "\n";

?>