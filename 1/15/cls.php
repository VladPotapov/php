<?php

class Cls {
    private $arr = array();

    public function __get($index) {
        return $this->arr[$index];
    }

    public function __set($index, $value) {
        $this->arr[$index] = $value;
    }

    public function __isset($index) {
        return isset($this->arr[$index]);
    }

    public function __unset($index) {
        unset($this->arr[$index]);
    }

    function destroy_foo() {
        global $foo;
        global $doo;
        unset($foo);
        unset($GLOBALS['doo']);
    }
}

?>