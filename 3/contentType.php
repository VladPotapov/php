<?php
// передача файла
header('Content-Type: application/txt');

// файл будет называеться
header('Content-Disposition: attachment; filename = "download.txt"');

// оригинал
readfile('text.txt');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>передача файла</h1>
</body>
</html>