<?php

class cls {
    public $var;
    public function __construct($var) {
        $this->var = $var;
    }
}

// создание объекта
$obj = new cls(100);

// сериализация
$text = serialize($obj);

// сохранить объект в файл
$fd = fopen("text.obj", "w");

if(!$fd) exit("невозможно открыть файл");

fwrite($fd, $text);
fclose($fd);

?>