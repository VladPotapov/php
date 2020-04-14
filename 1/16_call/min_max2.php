<?

class minMax {
    public function min($val1, $val2, $val3) {
        echo "вызов открытого метода min";
    }

    private function max($val1, $val2, $val3) {
        echo "вызов закрытого метода max";
    }

    public function __call($method, $arg) {}
}

?>