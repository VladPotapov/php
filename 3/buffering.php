<?php

// весь вывод направляем в буфер
ob_start();

// содержимое страницы
echo "Hello world <br>";

// отправляем HTTP-заголовок
header("X-my-header: Hello world!");

// отправка содержимого буфера клиенту
ob_end_flush();

?>