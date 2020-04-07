<?php

class Cls2 {
    public $arr = array();

    public function __get($index) {
        return $this->arr[$index];
    }

    public function __set($index, $value) {
        $this->arr[$index] = $value;
    }
}

?>