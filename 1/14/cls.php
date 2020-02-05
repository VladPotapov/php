<?php

class  Cls
{
    public $num;
    public $num2;

    public function __isset($index)
    {
        return isset($this->$index);
    }
}


?>