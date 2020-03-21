<?php

require_once('cls.php');

if (isset($obj)) {
    echo "yes obj = 3";
}
else {
    echo "none obj = 3";
}

echo "<br>";

if(isset($obj_now)) {
    echo "yes obj_now;";
}
else {
    echo "none obj_now;";
}

echo "<br>";

if (isset($str)) {
    echo "yes str = ''";
}
else {
    echo "none str = ''";
}

echo "<br>";

var_dump(isset($obj));  //true
echo "<br>";
var_dump(isset($obj_now));  //false
echo "<br>";
var_dump(isset($obj, $obj_now));   //false, false 

unset($str);

var_dump(isset($obj_now, $str));

?>