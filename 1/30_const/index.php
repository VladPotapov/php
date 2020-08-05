<?php

class Cls {
    const NAME = "Cls";

    public function method() {
        //error
        //echo $this->NAME;

        echo self::NAME;
        echo "<br>";
    }
}

?>