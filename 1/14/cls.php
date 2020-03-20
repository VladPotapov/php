<?php

class Cls
{
    //хранение перегружаемых данных
    private $arr = array();

    //перезагрузка не применяется к данным свойствам
    public $num_public = 1;

    //перезагрузка будет только при доступе вне класса
    private $num_private = 2;

    public function __set($name, $value)
    {
        echo "Установка '$name' в '$value'\n";
        $this->arr[$name] = $value;
    }

    public function __get($name)
    {
        echo "Получение '$name'\n";
        if (array_key_exists($name, $this->arr))
        {
            return $this->arr[$name];
        }
    }
}

?>