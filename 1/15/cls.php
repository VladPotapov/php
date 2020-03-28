<?php

class Cls {
    private $arr = array();

    private function __get($index) {
        return $this->arr[$index];
    }

    private function __set($index, $value) {
        $this->arr[$index] = $value;
    }

    private function __isset($index) {
        return isset($this->arr[$index]);
    }

    private function __unset($index) {
        unset($this->arr[$index]);
    }
}

?>