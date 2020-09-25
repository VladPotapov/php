<?php
echo "Hello <br>";

if(!headers_sent($filename, $linenum)) {
    header("Location: http://www.google.com/");
    exit;
}
else {
    echo "Передача документа начата в файле $filename \nв строке $linenum";
    exit;
}
?>