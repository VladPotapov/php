<?php

try {
    if(rand(0, 1)) {
        $obj = new Exception();
        // генерация исключений
        throw $obj;
    }
}
catch(Exception $exp) {
    // обработка исключений
    exit("Произошла исключительная ситуация");
}

echo "Штатная работа скрипта";

?>