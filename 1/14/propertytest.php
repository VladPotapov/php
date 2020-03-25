<?php

class PropertyTest
{
    //место перегружаемых данных
    private $data = array();

    //перегрузка не применяется к объявленым переменным
    public $declared = 1;

    //перезагрузка будет доступна вне класса
    private $hidden = 2;

    public function  __set($name, $value)
    {
        echo  "установка '$name' в '$value'\n";
        $this->data[$name] = $value;
    }

    public function __get($name)
    {
        echo "получение '$name'\n";
        if (array_key_exists($name, $this->data))
        {
            return $this->data[$name];
        }
    }
}

?>