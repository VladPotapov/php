<?php

try {
    $code = rand(0, 1);

    if(!$code) {
        throw new Exception("первая точка входа",  $code);
    }
    else {
        throw new Exception("Вторая точка входа", $code);
    }
}
catch(Exception $exp) {
    // блок обработки
    echo "Исключение {$exp->getCode()} : {$exp->getMessage()} <br>";
    echo "В файле {$exp->getFile()} <br>";
    echo "в строке {$exp->getLine()} <br>";
}

?>