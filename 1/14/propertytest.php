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

        $trace = debug_backtrace();
        trigger_error(
            'Неопределенное свойство в __get(): '.$name.' в файле '.$trace[0]['file'].' на строке '.$trace[0]['line'], E_USER_NOTICE
        );

        return null;
    }

    public function __isset($name)
    {
        echo "Установлено ли '$name'?\n";
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        echo "Уничтожение '$name'\n";
        unset($this->data[$name]);
    }

    public function getHidden()
    {
        return $this->hidden;
    }
}

?>