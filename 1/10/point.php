<?php
//version 2.0
class Point {
    public function __construct($x = 0, $y = 0) {
        $this-> X = $x;
        $this-> Y = $y;
    }

    public function get_x() {
        return $this-> X;
    }

    public function get_y() {
        return $this-> Y;
    }

    private $X;
    private $Y;
}

?>