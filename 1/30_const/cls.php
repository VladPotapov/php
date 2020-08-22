<?php

class Cls {
    // должен быть статическим
    public static function get_point() {
        return " Вызов функции ".__FUNCTION__.
        " <br> вызов метода ".__METHOD__.
        " <br> класса ".__CLASS__.
        " <br> в файле ".__FILE__.
        " <br> в строке ".__LINE__;
    }
}

echo Cls::get_point();

?>