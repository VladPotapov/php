<?php

class minMax_2 {
    public function min($val1, $val2, $val3) {
        echo "вызов открытого метода min";
    }

    private function max($val1, $val2, $val3) {
        echo "вызов закрытого метода max";
    }

    public function __call($method, $arg) {
        if(!is_array($arg)) return false;
        $value = $arg[0];
        if($method == "min") {
            for($i = 0; $i < count($arg); $i++) {
                if($arg[$i] < $value) $value = $arg[$i];
            }
        }
        if($method == "max") {
            for($i = 0; $i < count($arg); $i++) {
                if($arg[$i] > $value) $value = $arg[$i];
            }
        }
        return $value;
    }
}

?>