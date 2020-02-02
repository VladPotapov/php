<?php

class  Cls
{
    public $num;

    public function __isset($index)
    {
        return isset($this->$index);
    }
}


?>