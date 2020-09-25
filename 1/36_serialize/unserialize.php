<?php

require_once("cls.php");

// извлекаем сериализованный объект
$fd = fopen("text.obj", "r");

if(!$fd) exit ("невозможно открыть файл");

$text = fread($fd, filesize("text.obj"));
fclose($fd);

// востанавливаем объект
$obj = unserialize($text);

echo "<pre>";
print_r($obj);
echo "</pre>";

?>