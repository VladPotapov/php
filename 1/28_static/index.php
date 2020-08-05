<?php

class cls {
    public static $stat = 100;
}

echo cls::$stat;

class cls2 {
    /*к статическим члена нельзя
    нельзя обращаться через $this*/
    public static $stat = 100;

    public function set_stat($val) {
        //$this->stat = $val;
    }
}

$obj = new cls2();

echo "<pre>";
print_r($obj);
echo "</pre>";

$obj->set_stat(20);

echo cls::$stat;

echo "<pre>";
print_r($obj);
echo "</pre>";

?>