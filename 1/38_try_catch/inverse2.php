<?php

function inverse($x) {
    if(!$x) {
        throw new Exception("Деление на ноль");
    }

    return 1 / $x;
}

try {
    echo inverse(5) . "<br>";
}
catch (Exception $e) {
    echo "Поймано исключение: ", $e->getMessage(), "<br>";
}
finally {
    echo "Перевый блок finally <br>";
}

try {
    echo inverse(0) . "<br>";
}
catch (Exception $e) {
    echo "Поймано исключение: ", $e->getMessage(), "<br>";
}
finally {
    echo "Второй блок finally <br>";
}

echo "Hello world <br>";

?>