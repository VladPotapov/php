<?php

class Cls {
    const NAME = "Cls <br>";

    public function method() {
        //error
        //echo $this->NAME;

        echo self::NAME;
        echo "<br>";
        echo cls::NAME;
        echo "<br>";
    }
}

echo cls::NAME;

$obj = new Cls();
$obj->method();

if(defined("Cls::NAME")) echo " константа определена <br>";
else echo " константа не определена <br>";

?>