<?php

trait custom {
    public function hello() {
        echo "Hello world";
    }
}

trait custom2 {
    public function hello() {
        echo "Hello 2";
    }
}

class inheritsCustom {
    use custom, custom2 {
        custom2::hello insteadOf custom;
    }
}

$obj = new inheritsCustom();
$obj->hello();

?>