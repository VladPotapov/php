<?php

class Cls {
    private $arr = array();

    //при private __get and __set выдаёт предупреждение
    public function __get($index) {
        return $this->arr[$index];
    }

    public function __set($index, $value) {
        return $this->arr[$index] = $value;
    }
}

?>
