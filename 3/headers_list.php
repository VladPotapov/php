<?php
header("X-my-header: Hello world <br>");

$arr = headers_list();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>