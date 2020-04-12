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
        unset($foo);
    }

    function destroy_doo() {
        unset($GLOBALS['doo']);
    }

    function destroy_bar($bar) {
        unset($bar);
        $bar = "somareBar";
    }

    function destroy_pls() {
        static $pls;
        $pls++;
        echo "До удаления файла ". $pls;
        unset($pls);

        $pls = 23;
        echo " после удаления ".$pls ."<br>";
    }

    function unset_several($val1, $val2, $val3) {
        unset($$val1, $val2, $val3);
        echo "вывод переменных в функции <br>";
        echo $val;
        echo "<br>";
        echo $val2;
        echo "<br>";
        echo $val3;
        echo "<br>";
    }
}

?>