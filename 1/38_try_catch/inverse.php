<?php

function inverse($x) {
    if (!$x) {
        throw new Exception("Деление на ноль <br>");
    }

    return 1 / $x;
}

try {
    echo inverse(5). "<br>";
    echo inverse(0). "<br>";
}
catch (Exception $e) {
    echo "Выброшено исключение ", $e->getMessage(), "<br>";
}

echo "Hello world <br>";

?>