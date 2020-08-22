<?php 

function get_point() {
    return " вызов функции ".__FUNCTION__.
    "<br> файла ".__FILE__.
    "<br> в строке ".__LINE__;
}

echo get_point();

?>