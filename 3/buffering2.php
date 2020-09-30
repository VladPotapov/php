<?php

ob_start();

// вывод содержимого
for($i = 0; $i < 3000; $i++) {
    // имя которое будет предложено при сохранение файла
    header("Content-Disposition: attachment; filename=text.txt");
    // в качестве типа файла задаём бинарный поток
    header("Content-type: application/octet-stream");
    // размер страницы в HTTP-заголовке
    header("Content-length: " . ob_get_length());
}

ob_end_flush();

?>